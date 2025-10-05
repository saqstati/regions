<?php
/**
 * Georgian National Statistics Office Data Scraper
 * Scrapes key statistics from https://www.geostat.ge/ka
 */

class GeostatScraper {
    private $baseUrl = 'https://www.geostat.ge/ka';
    private $cacheFile = 'cache/geostat_data.json';
    private $cacheTime = 3600; // 1 hour cache
    
    public function __construct() {
        // Create cache directory if it doesn't exist
        if (!file_exists('cache')) {
            mkdir('cache', 0755, true);
        }
    }
    
    /**
     * Get cached data or scrape fresh data
     */
    public function getData() {
        // Check if cached data exists and is fresh
        if (file_exists($this->cacheFile)) {
            $cacheData = json_decode(file_get_contents($this->cacheFile), true);
            if (time() - $cacheData['timestamp'] < $this->cacheTime) {
                return $cacheData['data'];
            }
        }
        
        // Scrape fresh data
        $data = $this->scrapeData();
        
        // Cache the data
        $cacheData = [
            'timestamp' => time(),
            'data' => $data
        ];
        file_put_contents($this->cacheFile, json_encode($cacheData, JSON_UNESCAPED_UNICODE));
        
        return $data;
    }
    
    /**
     * Scrape data from geostat.ge
     */
    private function scrapeData() {
        try {
            // Initialize cURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $this->baseUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36');
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
            
            $html = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            
            if ($httpCode !== 200 || !$html) {
                return $this->getFallbackData();
            }
            
            // Parse HTML
            $dom = new DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML($html);
            libxml_clear_errors();
            
            $xpath = new DOMXPath($dom);
            
            // Look for category items container
            $categoryItems = $xpath->query("//div[contains(@class, 'category-item') or contains(@class, 'container')]//a[contains(@class, 'category-item')]");
            
            $statistics = [];
            
            foreach ($categoryItems as $item) {
                $titleElement = $xpath->query(".//h3", $item)->item(0);
                $valueElement = $xpath->query(".//p", $item)->item(0);
                $linkHref = $item->hasAttribute('href') ? $item->getAttribute('href') : '';
                $imageElement = $xpath->query(".//img", $item)->item(0);
                $tooltipTitle = $item->hasAttribute('data-original-title') ? $item->getAttribute('data-original-title') : '';
                
                if ($titleElement && $valueElement) {
                    $title = trim($titleElement->textContent);
                    $value = trim($valueElement->textContent);
                    $image = $imageElement && $imageElement->hasAttribute('src') ? $imageElement->getAttribute('src') : '';
                    $link = $linkHref ?: '#';
                    
                    // Map known statistics
                    $statKey = $this->mapStatisticKey($title);
                    if ($statKey) {
                        $statistics[$statKey] = [
                            'title' => $title,
                            'value' => $value,
                            'link' => $link,
                            'image' => $image,
                            'tooltip' => $tooltipTitle ?: '',
                            'icon' => $this->getIconForStat($statKey)
                        ];
                    }
                }
            }
            
            // If we didn't get the expected data structure, try alternative parsing
            if (empty($statistics)) {
                $statistics = $this->parseAlternativeStructure($dom, $xpath);
            }
            
            // If still no data, return fallback
            if (empty($statistics)) {
                return $this->getFallbackData();
            }
            
            return $statistics;
            
        } catch (Exception $e) {
            error_log("Geostat scraper error: " . $e->getMessage());
            return $this->getFallbackData();
        }
    }
    
    /**
     * Try alternative parsing method
     */
    private function parseAlternativeStructure($dom, $xpath) {
        $statistics = [];
        
        // Try to find any elements with statistical data patterns
        $possibleStats = $xpath->query("//div[contains(text(), '%') or contains(text(), '$') or contains(text(), 'ათასი') or contains(text(), 'დონე')]");
        
        // Look for specific patterns in the page
        $patterns = [
            'population' => ['მოსახლეობა', 'ათასი'],
            'gdp_per_capita' => ['მშპ ერთ სულზე', '$'],
            'gdp_growth' => ['რეალური მშპ', 'ზრდა', '%'],
            'unemployment' => ['უმუშევრობის დონე', '%'],
            'inflation' => ['ინფლაცია', '%']
        ];
        
        // If alternative parsing fails, use manual data extraction
        $textContent = $dom->textContent;
        
        // Extract numbers using regex patterns
        if (preg_match('/მოსახლეობა.*?(\d+[\s\d]*\.?\d*)\s*ათასი/u', $textContent, $matches)) {
            $statistics['population'] = [
                'title' => 'მოსახლეობა, ათასი',
                'value' => trim(str_replace(' ', '', $matches[1])),
                'link' => 'https://www.geostat.ge/ka/modules/categories/316/mosakhleoba-da-demografia',
                'image' => 'https://geostat.ge/media/5174/1.png',
                'tooltip' => '2025 წლის 1 იანვრის მდგომარეობით',
                'icon' => 'images/population-200-p.png'
            ];
        }
        
        return $statistics;
    }
    
    /**
     * Map Georgian titles to internal keys
     */
    private function mapStatisticKey($title) {
        $mappings = [
            'მოსახლეობა' => 'population',
            'მშპ ერთ სულზე' => 'gdp_per_capita',
            'რეალური მშპ' => 'gdp_growth',
            'ზრდა' => 'gdp_growth',
            'უმუშევრობის დონე' => 'unemployment',
            'ინფლაცია' => 'inflation'
        ];
        
        foreach ($mappings as $keyword => $key) {
            if (strpos($title, $keyword) !== false) {
                return $key;
            }
        }
        
        return null;
    }
    
    /**
     * Get appropriate icon for statistic
     */
    private function getIconForStat($statKey) {
        $icons = [
            'population' => 'images/population-200-p.png',
            'gdp_per_capita' => 'images/user-200-y.png',
            'gdp_growth' => 'images/line-chart-200-r.png',
            'unemployment' => 'images/pie-chart-200-b.png',
            'inflation' => 'images/area-chart-200-g.png',
            'area' => 'images/map-200-b.png',
            'businesses' => 'images/suitcase-200-p.png'
        ];
        
        return $icons[$statKey] ?? 'images/line-chart-200-r.png';
    }
    
    /**
     * Fallback data when scraping fails
     */
    private function getFallbackData() {
        return [
            'area' => [
                'title' => 'ფართობი: 69 700 კვ. კმ',
                'value' => '69 700',
                'link' => '#',
                'image' => '',
                'tooltip' => '2014 წლის 1 მარტის მდგომარეობით',
                'icon' => 'images/map-200-b.png'
            ],
            'population' => [
                'title' => 'მოსახლეობა, ათასი',
                'value' => '3 704.5',
                'link' => 'https://www.geostat.ge/ka/modules/categories/316/mosakhleoba-da-demografia',
                'image' => 'https://geostat.ge/media/5174/1.png',
                'tooltip' => '2025 წლის 1 იანვრის მდგომარეობით',
                'icon' => 'images/population-200-p.png'
            ],
            'gdp_growth' => [
                'title' => 'მშპ-ს რეალური ზრდა',
                'value' => '9.4%',
                'link' => 'https://www.geostat.ge/ka/modules/categories/23/mtliani-shida-produkti-mshp',
                'image' => 'https://geostat.ge/media/5176/3.png',
                'tooltip' => '2024 წლის წინასწარი მონაცემები',
                'icon' => 'images/line-chart-200-r.png'
            ],
            'gdp_per_capita' => [
                'title' => 'მშპ ერთ სულ მოსახლეზე',
                'value' => '9 141.4 აშშ დოლარი',
                'link' => 'https://www.geostat.ge/ka/modules/categories/23/mtliani-shida-produkti-mshp',
                'image' => 'https://geostat.ge/media/5175/2.png',
                'tooltip' => '2024 წლის წინასწარი მონაცემები',
                'icon' => 'images/user-200-y.png'
            ],
            'inflation' => [
                'title' => 'ინფლაცია',
                'value' => '4.8%',
                'link' => 'https://www.geostat.ge/ka/modules/categories/26/samomkhmareblo-fasebis-indeksi-inflatsia',
                'image' => 'https://geostat.ge/media/5178/5.png',
                'tooltip' => 'წლიური (2025 წლის სექტემბერი)',
                'icon' => 'images/area-chart-200-g.png'
            ],
            'unemployment' => [
                'title' => 'უმუშევრობის დონე',
                'value' => '13.9%',
                'link' => 'https://www.geostat.ge/ka/modules/categories/683/dasakmeba-umushevroba',
                'image' => 'https://geostat.ge/media/5177/4.png',
                'tooltip' => '2024 წლის მიხედვით',
                'icon' => 'images/pie-chart-200-b.png'
            ],
            'businesses' => [
                'title' => 'რეგისტრირებული ეკონომიკური სუბიექტები',
                'value' => '1 044 368',
                'link' => '#',
                'image' => '',
                'tooltip' => '2025 წლის 1 იანვრის მდგომარეობით',
                'icon' => 'images/suitcase-200-p.png'
            ]
        ];
    }
}

// Function to get statistics data
function getGeostatData() {
    $scraper = new GeostatScraper();
    return $scraper->getData();
}

// If called directly, return JSON
if (basename($_SERVER['PHP_SELF']) === 'geostat_scraper.php') {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(getGeostatData(), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}
?>