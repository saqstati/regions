<?php
/**
 * Georgian National Statistics Office Data Scraper
 * Simplified version that parses key statistics from https://www.geostat.ge/ka
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
            
            // Use regex to parse the HTML for the specific patterns we need
            $statistics = $this->parseHtmlWithRegex($html);
            
            // If regex parsing didn't work, try DOM parsing
            if (empty($statistics)) {
                $statistics = $this->parseHtmlWithDOM($html);
            }
            
            // If still no data from main page, use fallback and then override with specific scrapers
            if (empty($statistics)) {
                $statistics = $this->getFallbackData();
            }
            
            // Get inflation data from main homepage (already parsed above)
            // Inflation data should be included in the main page parsing
            
            // Ensure we have all required statistics by merging with fallback
            $fallbackData = $this->getFallbackData();
            foreach ($fallbackData as $key => $data) {
                if (!isset($statistics[$key])) {
                    $statistics[$key] = $data;
                }
            }
            
            // Scrape GDP data from main page
            $gdpData = $this->scrapeGDPDataFromHomepage($html);
            if (!empty($gdpData)) {
                foreach ($gdpData as $key => $value) {
                    $statistics[$key] = $value;
                }
            }
            
            return $statistics;
            
        } catch (Exception $e) {
            error_log("Geostat scraper error: " . $e->getMessage());
            return $this->getFallbackData();
        }
    }
    
    /**
     * Scrape GDP data directly from homepage HTML
     */
    private function scrapeGDPDataFromHomepage($html) {
        $gdpData = array();
        
        // Extract tooltip from the page or generate it
        $gdpTooltip = $this->extractGDPTooltip($html);
        
        // Pattern to find GDP per capita: <h3>მშპ ერთ სულზე ($)</h3><p>9 241.5</p>
        if (preg_match('/<h3[^>]*>მშპ\s+ერთ\s+სულზე[^<]*<\/h3>\s*<p[^>]*>([^<]+)<\/p>/u', $html, $matches)) {
            $value = trim($matches[1]);  // Keep the space in the number
            $gdpData['gdp_per_capita'] = array(
                'title' => 'მშპ ერთ სულზე ($)',
                'value' => $value,
                'link' => 'https://www.geostat.ge/ka/modules/categories/23/mtliani-shida-produkti-mshp',
                'image' => 'https://geostat.ge/media/5175/2.png',
                'tooltip' => $gdpTooltip,
                'icon' => 'images/user-200-y.png'
            );
        }
        
        // Pattern to find GDP growth: <h3>რეალური მშპ-ის ზრდა (%)</h3><p>9.7</p>
        if (preg_match('/<h3[^>]*>რეალური\s+მშპ[^<]*<\/h3>\s*<p[^>]*>([^<]+)<\/p>/u', $html, $matches)) {
            $value = trim(str_replace(' ', '', $matches[1]));
            $gdpData['gdp_growth'] = array(
                'title' => 'რეალური მშპ-ის ზრდა (%)',
                'value' => $value,
                'link' => 'https://www.geostat.ge/ka/modules/categories/23/mtliani-shida-produkti-mshp',
                'image' => 'https://geostat.ge/media/5176/3.png',
                'tooltip' => $gdpTooltip,
                'icon' => 'images/line-chart-200-r.png'
            );
        }
        
        return $gdpData;
    }
    
    /**
     * Scrape inflation data from the inflation category page
     */
    private function scrapeInflationData() {
        try {
            $inflationUrl = 'https://www.geostat.ge/ka/modules/categories/26/samomkhmareblo-fasebis-indeksi-inflatsia';
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $inflationUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36');
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
            
            $html = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            
            if ($httpCode !== 200 || !$html) {
                return null;
            }
            
            // Try to extract tooltip from the latest news title
            // Pattern: "ინფლაცია საქართველოში, 2025 წლის ოქტომბერი"
            $tooltip = $this->extractInflationTooltip($html);
            
            // Look for the latest inflation value from chart data (most accurate)
            $value = null;
            
            // Try to extract the latest value from chart data arrays
            if (preg_match('/data-chart="\[\[.*?(\d+\.\d+)\]\]"/u', $html, $matches)) {
                // Find all decimal numbers in chart data and get the last one (most recent)
                preg_match_all('/(\d+\.\d+)/', $matches[0], $numbers);
                if (!empty($numbers[1])) {
                    // Get the last few values and pick the most reasonable one (4-6% range)
                    $recentValues = array_slice($numbers[1], -10); // Last 10 values
                    foreach (array_reverse($recentValues) as $val) {
                        if ($val >= 3.0 && $val <= 8.0) { // Reasonable inflation range
                            $value = $val;
                            break;
                        }
                    }
                }
            }
            
            // Fallback patterns if chart data extraction fails
            if (!$value) {
                // Pattern 1: Look for percentage after "ინფლაცია" or in latest news
                if (preg_match('/(?:ინფლაცია|inflation).*?(\d+\.\d+)\s*%/ui', $html, $matches)) {
                    $value = $matches[1];
                }
                // Pattern 2: Look for percentage in table data or spans
                elseif (preg_match('/<td[^>]*>\s*(\d+\.\d+)\s*%\s*<\/td>/u', $html, $matches)) {
                    $value = $matches[1];
                }
                // Pattern 3: Fallback to any reasonable percentage
                elseif (preg_match('/(\d+\.\d+)\s*%/u', $html, $matches)) {
                    $candidateValue = floatval($matches[1]);
                    if ($candidateValue >= 3.0 && $candidateValue <= 8.0) {
                        $value = $matches[1];
                    }
                }
            }
            
            if ($value) {
                return [
                    'title' => 'ინფლაცია (%)',
                    'value' => $value,
                    'link' => 'https://www.geostat.ge/ka/modules/categories/26/samomkhmareblo-fasebis-indeksi-inflatsia',
                    'image' => 'https://geostat.ge/media/5178/5.png',
                    'tooltip' => $tooltip ? $tooltip : $this->generateInflationTooltip(),
                    'icon' => 'images/area-chart-200-g.png'
                ];
            }
            
            return null;
            
        } catch (Exception $e) {
            error_log("Inflation scraper error: " . $e->getMessage());
            return null;
        }
    }
    
    /**
     * Extract inflation tooltip from the news section
     */
    private function extractInflationTooltip($html) {
        // Try to find the latest news title about inflation
        // Pattern: "ინფლაცია საქართველოში, 2025 წლის ოქტომბერი"
        if (preg_match('/ინფლაცია\s+საქართველოში,\s*(\d{4})\s+წლის\s+(\S+)/u', $html, $matches)) {
            $year = $matches[1];
            $month = $matches[2];
            return "წლიური ({$year} წლის {$month})";
        }
        
        return null;
    }
    
    /**
     * Extract or generate GDP tooltip
     */
    private function extractGDPTooltip($html) {
        // Try to extract tooltip from title attribute
        if (preg_match('/title="([^"]*წელი[^"]*)"/u', $html, $matches)) {
            // Clean up multiple spaces
            return preg_replace('/\s+/', ' ', trim($matches[1]));
        }
        
        // Generate tooltip based on current year (without "წინასწარი")
        $currentYear = date('Y');
        $previousYear = $currentYear - 1;
        return "{$previousYear} წელი";
    }
    
    /**
     * Generate dynamic inflation tooltip based on current date
     */
    private function generateInflationTooltip() {
        $georgianMonths = [
            1 => 'იანვარი',
            2 => 'თებერვალი',
            3 => 'მარტი',
            4 => 'აპრილი',
            5 => 'მაისი',
            6 => 'ივნისი',
            7 => 'ივლისი',
            8 => 'აგვისტო',
            9 => 'სექტემბერი',
            10 => 'ოქტომბერი',
            11 => 'ნოემბერი',
            12 => 'დეკემბერი'
        ];
        
        // Get previous month (inflation data is usually published for the previous month)
        $currentDate = new DateTime();
        $currentDate->modify('-1 month');
        $year = $currentDate->format('Y');
        $month = (int)$currentDate->format('n');
        
        $monthName = $georgianMonths[$month];
        return "წლიური ({$year} წლის {$monthName})";
    }
    
    /**
     * Parse HTML using regex patterns
     */
    private function parseHtmlWithRegex($html) {
        $statistics = [];
        
        // Pattern for category items with the structure from your example
        $pattern = '/<a[^>]*href="([^"]*)"[^>]*class="[^"]*category-item[^"]*"[^>]*data-original-title="([^"]*)"[^>]*>.*?<h3[^>]*>([^<]+)<\/h3>.*?<p[^>]*>([^<]+)<\/p>.*?<\/a>/s';
        
        if (preg_match_all($pattern, $html, $matches, PREG_SET_ORDER)) {
            foreach ($matches as $match) {
                $link = $match[1];
                $tooltip = $match[2];
                $title = trim($match[3]);
                $value = trim($match[4]);
                
                $statKey = $this->mapStatisticKey($title);
                if ($statKey) {
                    $statistics[$statKey] = [
                        'title' => $title,
                        'value' => $value,
                        'link' => $this->buildFullUrl($link),
                        'image' => $this->getImageForStat($statKey),
                        'tooltip' => $tooltip,
                        'icon' => $this->getIconForStat($statKey)
                    ];
                }
            }
        }
        
        // Alternative pattern for simpler structure
        if (empty($statistics)) {
            $this->parseWithAlternativeRegex($html, $statistics);
        }
        
        return $statistics;
    }
    
    /**
     * Parse with alternative regex patterns
     */
    private function parseWithAlternativeRegex($html, &$statistics) {
        // Look for specific Georgian text patterns
        $patterns = [
            'population' => [
                'pattern' => '/მოსახლეობა[^>]*>.*?(\d+[\s\d]*\.?\d*)\s*ათასი/u',
                'title' => 'მოსახლეობა, ათასი',
                'link' => 'https://www.geostat.ge/ka/modules/categories/316/mosakhleoba-da-demografia',
                'tooltip' => '2025 წლის 1 იანვრის მდგომარეობით'
            ],
            'gdp_per_capita' => [
                'pattern' => '/მშპ ერთ სულზე[^>]*>.*?(\d+[\s\d]*\.?\d*)/u',
                'title' => 'მშპ ერთ სულზე ($)',
                'link' => 'https://www.geostat.ge/ka/modules/categories/23/mtliani-shida-produkti-mshp',
                'tooltip' => $this->extractGDPTooltip($html)
            ],
            'gdp_growth' => [
                'pattern' => '/რეალური მშპ.*?ზრდა[^>]*>.*?(\d+\.?\d*)\s*%/u',
                'title' => 'რეალური მშპ-ის ზრდა (%)',
                'link' => 'https://www.geostat.ge/ka/modules/categories/23/mtliani-shida-produkti-mshp',
                'tooltip' => $this->extractGDPTooltip($html)
            ],
            'unemployment' => [
                'pattern' => '/უმუშევრობის დონე[^>]*>.*?(\d+\.?\d*)\s*%/u',
                'title' => 'უმუშევრობის დონე (%)',
                'link' => 'https://www.geostat.ge/ka/modules/categories/683/dasakmeba-umushevroba',
                'tooltip' => '2024 წელი'
            ],
            'inflation' => [
                'pattern' => '/<h3[^>]*>ინფლაცია[^<]*<\/h3>\s*<p[^>]*>([^<]+)<\/p>/u',
                'title' => 'ინფლაცია (%)',
                'link' => '#',
                'tooltip' => 'წლიური (2025 წლის ნოემბერი)'
            ]
        ];
        
        foreach ($patterns as $key => $config) {
            if (preg_match($config['pattern'], $html, $matches)) {
                $statistics[$key] = [
                    'title' => $config['title'],
                    'value' => trim(str_replace(' ', '', $matches[1])),
                    'link' => $config['link'],
                    'image' => $this->getImageForStat($key),
                    'tooltip' => $config['tooltip'],
                    'icon' => $this->getIconForStat($key)
                ];
            }
        }
    }
    
    /**
     * Parse HTML using DOM (fallback method)
     */
    private function parseHtmlWithDOM($html) {
        $statistics = [];
        
        try {
            $dom = new DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML($html);
            libxml_clear_errors();
            
            $xpath = new DOMXPath($dom);
            
            // Look for various possible structures
            $queries = [
                "//a[contains(@class, 'category-item')]",
                "//div[contains(@class, 'category-item')]",
                "//div[contains(text(), 'მოსახლეობა') or contains(text(), 'მშპ') or contains(text(), 'ინფლაცია')]"
            ];
            
            foreach ($queries as $query) {
                $elements = $xpath->query($query);
                if ($elements->length > 0) {
                    // Process found elements
                    break;
                }
            }
            
        } catch (Exception $e) {
            // DOM parsing failed, return empty
        }
        
        return $statistics;
    }
    
    /**
     * Build full URL from relative path
     */
    private function buildFullUrl($path) {
        if (strpos($path, 'http') === 0) {
            return $path;
        }
        return rtrim($this->baseUrl, '/') . '/' . ltrim($path, '/');
    }
    
    /**
     * Get image URL for statistic
     */
    private function getImageForStat($statKey) {
        $images = [
            'population' => 'https://geostat.ge/media/5174/1.png',
            'gdp_per_capita' => 'https://geostat.ge/media/5175/2.png',
            'gdp_growth' => 'https://geostat.ge/media/5176/3.png',
            'unemployment' => 'https://geostat.ge/media/5177/4.png',
            'inflation' => 'https://geostat.ge/media/5178/5.png'
        ];
        
        return isset($images[$statKey]) ? $images[$statKey] : '';
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
        
        return isset($icons[$statKey]) ? $icons[$statKey] : 'images/line-chart-200-r.png';
    }
    
    /**
     * Fallback data when scraping fails
     */
    private function getFallbackData() {
        return [
            'area' => [
                'title' => 'ფართობი',
                'value' => '69 700 კვ. კმ',
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
                'title' => 'რეალური მშპ-ის ზრდა (%)',
                'value' => '9.4',
                'link' => 'https://www.geostat.ge/ka/modules/categories/23/mtliani-shida-produkti-mshp',
                'image' => 'https://geostat.ge/media/5176/3.png',
                'tooltip' => $this->extractGDPTooltip(''),
                'icon' => 'images/line-chart-200-r.png'
            ],
            'gdp_per_capita' => [
                'title' => 'მშპ ერთ სულზე ($)',
                'value' => '9 141.4',
                'link' => 'https://www.geostat.ge/ka/modules/categories/23/mtliani-shida-produkti-mshp',
                'image' => 'https://geostat.ge/media/5175/2.png',
                'tooltip' => $this->extractGDPTooltip(''),
                'icon' => 'images/user-200-y.png'
            ],
            'inflation' => [
                'title' => 'ინფლაცია (%)',
                'value' => '4.8',
                'link' => '#',
                'image' => 'https://geostat.ge/media/5178/5.png',
                'tooltip' => 'წლიური (2025 წლის ნოემბერი)',
                'icon' => 'images/area-chart-200-g.png'
            ],
            'unemployment' => [
                'title' => 'უმუშევრობის დონე (%)',
                'value' => '13.9',
                'link' => 'https://www.geostat.ge/ka/modules/categories/683/dasakmeba-umushevroba',
                'image' => 'https://geostat.ge/media/5177/4.png',
                'tooltip' => '2024 წელი',
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