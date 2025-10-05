<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Geostat Data Demo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .statistics-container {
            margin: 20px 0;
        }
        .stat-item {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 15px;
            margin: 10px 0;
            display: flex;
            align-items: center;
        }
        .stat-icon {
            width: 40px;
            height: 40px;
            margin-right: 15px;
        }
        .stat-content {
            flex: 1;
        }
        .stat-title {
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }
        .stat-value {
            font-size: 1.2em;
            color: #007bff;
            font-weight: bold;
        }
        .stat-tooltip {
            font-size: 0.9em;
            color: #666;
            margin-top: 3px;
        }
        .category-item-demo {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 10px 0;
            text-align: center;
            text-decoration: none;
            color: inherit;
            transition: box-shadow 0.3s ease;
        }
        .category-item-demo:hover {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-decoration: none;
            color: inherit;
        }
        .category-image img {
            width: 60px;
            height: 60px;
            margin-bottom: 10px;
        }
        .alert-info {
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Dynamic Georgian Statistics Data Demo</h1>
        
        <div class="alert alert-info">
            <strong>Note:</strong> This demo shows how data is dynamically parsed from <a href="https://www.geostat.ge/ka" target="_blank">https://www.geostat.ge/ka</a> and cached for 1 hour to improve performance.
        </div>

        <?php
        // Include the scraper
        include "geostat_scraper_v2.php";
        
        // Get the data
        $statsData = getGeostatData();
        ?>

        <div class="row">
            <div class="col-md-6">
                <h2>Sidebar Style (Original Layout)</h2>
                <div class="statistics-container">
                    <?php if (isset($statsData['area'])): ?>
                    <div class="stat-item">
                        <img class="stat-icon" src="<?php echo htmlspecialchars($statsData['area']['icon']); ?>" alt="Area Icon" />
                        <div class="stat-content">
                            <div class="stat-title"><?php echo htmlspecialchars($statsData['area']['title']); ?></div>
                            <div class="stat-value"><?php echo htmlspecialchars($statsData['area']['value']); ?></div>
                            <div class="stat-tooltip"><?php echo htmlspecialchars($statsData['area']['tooltip']); ?></div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if (isset($statsData['population'])): ?>
                    <div class="stat-item">
                        <img class="stat-icon" src="<?php echo htmlspecialchars($statsData['population']['icon']); ?>" alt="Population Icon" />
                        <div class="stat-content">
                            <div class="stat-title"><?php echo htmlspecialchars($statsData['population']['title']); ?></div>
                            <div class="stat-value"><?php echo htmlspecialchars($statsData['population']['value']); ?></div>
                            <div class="stat-tooltip"><?php echo htmlspecialchars($statsData['population']['tooltip']); ?></div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if (isset($statsData['gdp_growth'])): ?>
                    <div class="stat-item">
                        <img class="stat-icon" src="<?php echo htmlspecialchars($statsData['gdp_growth']['icon']); ?>" alt="GDP Growth Icon" />
                        <div class="stat-content">
                            <div class="stat-title"><?php echo htmlspecialchars($statsData['gdp_growth']['title']); ?></div>
                            <div class="stat-value"><?php echo htmlspecialchars($statsData['gdp_growth']['value']); ?>%</div>
                            <div class="stat-tooltip"><?php echo htmlspecialchars($statsData['gdp_growth']['tooltip']); ?></div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if (isset($statsData['gdp_per_capita'])): ?>
                    <div class="stat-item">
                        <img class="stat-icon" src="<?php echo htmlspecialchars($statsData['gdp_per_capita']['icon']); ?>" alt="GDP per Capita Icon" />
                        <div class="stat-content">
                            <div class="stat-title"><?php echo htmlspecialchars($statsData['gdp_per_capita']['title']); ?></div>
                            <div class="stat-value"><?php echo htmlspecialchars($statsData['gdp_per_capita']['value']); ?></div>
                            <div class="stat-tooltip"><?php echo htmlspecialchars($statsData['gdp_per_capita']['tooltip']); ?></div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if (isset($statsData['inflation'])): ?>
                    <div class="stat-item">
                        <img class="stat-icon" src="<?php echo htmlspecialchars($statsData['inflation']['icon']); ?>" alt="Inflation Icon" />
                        <div class="stat-content">
                            <div class="stat-title"><?php echo htmlspecialchars($statsData['inflation']['title']); ?></div>
                            <div class="stat-value"><?php echo htmlspecialchars($statsData['inflation']['value']); ?>%</div>
                            <div class="stat-tooltip"><?php echo htmlspecialchars($statsData['inflation']['tooltip']); ?></div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if (isset($statsData['unemployment'])): ?>
                    <div class="stat-item">
                        <img class="stat-icon" src="<?php echo htmlspecialchars($statsData['unemployment']['icon']); ?>" alt="Unemployment Icon" />
                        <div class="stat-content">
                            <div class="stat-title"><?php echo htmlspecialchars($statsData['unemployment']['title']); ?></div>
                            <div class="stat-value"><?php echo htmlspecialchars($statsData['unemployment']['value']); ?>%</div>
                            <div class="stat-tooltip"><?php echo htmlspecialchars($statsData['unemployment']['tooltip']); ?></div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if (isset($statsData['businesses'])): ?>
                    <div class="stat-item">
                        <img class="stat-icon" src="<?php echo htmlspecialchars($statsData['businesses']['icon']); ?>" alt="Businesses Icon" />
                        <div class="stat-content">
                            <div class="stat-title"><?php echo htmlspecialchars($statsData['businesses']['title']); ?></div>
                            <div class="stat-value"><?php echo htmlspecialchars($statsData['businesses']['value']); ?></div>
                            <div class="stat-tooltip"><?php echo htmlspecialchars($statsData['businesses']['tooltip']); ?></div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-md-6">
                <h2>Category Style (Like geostat.ge)</h2>
                <div class="container d-flex justify-content-between" style="flex-wrap: wrap;">
                    <?php if (isset($statsData['population'])): ?>
                    <a href="<?php echo htmlspecialchars($statsData['population']['link']); ?>" class="category-item-demo" 
                       data-toggle="tooltip" data-placement="top" title="<?php echo htmlspecialchars($statsData['population']['tooltip']); ?>">
                        <div class="category-image">
                            <img src="<?php echo htmlspecialchars($statsData['population']['image'] ?: $statsData['population']['icon']); ?>" alt="Population">
                        </div>
                        <h3><?php echo htmlspecialchars($statsData['population']['title']); ?></h3>
                        <p><?php echo htmlspecialchars($statsData['population']['value']); ?></p>
                    </a>
                    <?php endif; ?>

                    <?php if (isset($statsData['gdp_per_capita'])): ?>
                    <a href="<?php echo htmlspecialchars($statsData['gdp_per_capita']['link']); ?>" class="category-item-demo" 
                       data-toggle="tooltip" data-placement="top" title="<?php echo htmlspecialchars($statsData['gdp_per_capita']['tooltip']); ?>">
                        <div class="category-image">
                            <img src="<?php echo htmlspecialchars($statsData['gdp_per_capita']['image'] ?: $statsData['gdp_per_capita']['icon']); ?>" alt="GDP per Capita">
                        </div>
                        <h3><?php echo htmlspecialchars($statsData['gdp_per_capita']['title']); ?></h3>
                        <p><?php echo htmlspecialchars($statsData['gdp_per_capita']['value']); ?></p>
                    </a>
                    <?php endif; ?>

                    <?php if (isset($statsData['gdp_growth'])): ?>
                    <a href="<?php echo htmlspecialchars($statsData['gdp_growth']['link']); ?>" class="category-item-demo" 
                       data-toggle="tooltip" data-placement="top" title="<?php echo htmlspecialchars($statsData['gdp_growth']['tooltip']); ?>">
                        <div class="category-image">
                            <img src="<?php echo htmlspecialchars($statsData['gdp_growth']['image'] ?: $statsData['gdp_growth']['icon']); ?>" alt="GDP Growth">
                        </div>
                        <h3><?php echo htmlspecialchars($statsData['gdp_growth']['title']); ?></h3>
                        <p><?php echo htmlspecialchars($statsData['gdp_growth']['value']); ?>%</p>
                    </a>
                    <?php endif; ?>

                    <?php if (isset($statsData['unemployment'])): ?>
                    <a href="<?php echo htmlspecialchars($statsData['unemployment']['link']); ?>" class="category-item-demo" 
                       data-toggle="tooltip" data-placement="top" title="<?php echo htmlspecialchars($statsData['unemployment']['tooltip']); ?>">
                        <div class="category-image">
                            <img src="<?php echo htmlspecialchars($statsData['unemployment']['image'] ?: $statsData['unemployment']['icon']); ?>" alt="Unemployment">
                        </div>
                        <h3><?php echo htmlspecialchars($statsData['unemployment']['title']); ?></h3>
                        <p><?php echo htmlspecialchars($statsData['unemployment']['value']); ?>%</p>
                    </a>
                    <?php endif; ?>

                    <?php if (isset($statsData['inflation'])): ?>
                    <a href="<?php echo htmlspecialchars($statsData['inflation']['link']); ?>" class="category-item-demo" 
                       data-toggle="tooltip" data-placement="top" title="<?php echo htmlspecialchars($statsData['inflation']['tooltip']); ?>">
                        <div class="category-image">
                            <img src="<?php echo htmlspecialchars($statsData['inflation']['image'] ?: $statsData['inflation']['icon']); ?>" alt="Inflation">
                        </div>
                        <h3><?php echo htmlspecialchars($statsData['inflation']['title']); ?></h3>
                        <p><?php echo htmlspecialchars($statsData['inflation']['value']); ?>%</p>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2>Raw Data (JSON)</h2>
                <pre style="background: #f8f9fa; padding: 15px; border-radius: 5px; max-height: 400px; overflow-y: auto;">
<?php echo json_encode($statsData, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
                </pre>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2>Implementation Instructions</h2>
                <div class="alert alert-success">
                    <h4>How to use this in your index.php:</h4>
                    <ol>
                        <li>Include the scraper file: <code>include "geostat_scraper_v2.php";</code></li>
                        <li>Get the data: <code>$statsData = getGeostatData();</code></li>
                        <li>Replace your static textbox divs with dynamic ones using PHP conditional statements</li>
                        <li>Use <code>htmlspecialchars()</code> to prevent XSS attacks</li>
                        <li>Data is automatically cached for 1 hour to improve performance</li>
                    </ol>
                    
                    <h4>Features:</h4>
                    <ul>
                        <li>✅ Automatic web scraping from geostat.ge</li>
                        <li>✅ 1-hour caching to reduce server load</li>
                        <li>✅ Fallback data when scraping fails</li>
                        <li>✅ Proper error handling</li>
                        <li>✅ UTF-8 Georgian text support</li>
                        <li>✅ Multiple parsing strategies for reliability</li>
                    </ul>

                    <h4>Files Created:</h4>
                    <ul>
                        <li><code>geostat_scraper_v2.php</code> - Main scraper class</li>
                        <li><code>cache/</code> directory - Automatic caching</li>
                        <li><code>demo_dynamic_stats.php</code> - This demo file</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        // Initialize tooltips
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>
</html>