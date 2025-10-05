<?php
/**
 * API endpoint for testing the Georgian Statistics scraper
 * Returns JSON data that can be used by JavaScript applications
 */

// Set proper headers for JSON API
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Content-Type');

// Include the scraper
include "geostat_scraper_v2.php";

try {
    // Get the data
    $statsData = getGeostatData();
    
    // Add metadata
    $response = [
        'success' => true,
        'timestamp' => date('Y-m-d H:i:s'),
        'data' => $statsData,
        'message' => 'Data retrieved successfully'
    ];
    
    // Check if data is fresh or cached
    $cacheFile = 'cache/geostat_data.json';
    if (file_exists($cacheFile)) {
        $cacheData = json_decode(file_get_contents($cacheFile), true);
        $cacheAge = time() - $cacheData['timestamp'];
        $response['cache_age_minutes'] = round($cacheAge / 60, 1);
        $response['is_cached'] = $cacheAge < 3600; // 1 hour
    }
    
    echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    
} catch (Exception $e) {
    // Error response
    $response = [
        'success' => false,
        'error' => $e->getMessage(),
        'timestamp' => date('Y-m-d H:i:s')
    ];
    
    http_response_code(500);
    echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}
?>