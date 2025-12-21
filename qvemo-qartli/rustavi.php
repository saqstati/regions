<?php
include "../config.php";
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="http://www.geostat.ge/regions/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $lang['rustavititlename'] ?>" />
    <meta property="og:description" content="<?php echo $lang['rustavititlename'] ?>" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <title class="tr" Key="PAGE_TITLE"><?php echo $lang['rustavititlename'] ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>

    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../samegrelo.css">
    <link rel="stylesheet" type="text/css" href="../qvemo-qartli/qvemo-qartli.css">
    <link rel="stylesheet" type="text/css" href="../custom.css">
    <link rel="stylesheet" href="../mediastyles.css">
</head>

<body>
    <div id="background-main" class="background-image"></div>
    <main class="container-fluid my-4">
        <div class="row g-3">
            <?php include '../asset/municHeader.php' ?>
            <!-- Left Table -->
            <?php include 'left_table.php' ?>


            <!-- Center Content -->
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                <!-- Center content goes here. Adjust height if needed or add other content. -->
                <div class="w-100 text-center p-4 rounded" style="height: 100%;">
                    <svg id="svg8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000" version="1.1">
                        <g id="layer8">
                            <a xlink:href="../qvemo-qartli.php" class="text-decoration-none">
                                <path id="group3-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1420.7,823.23 c 1.9327,2.978 5.758,2.932 7.7694,6.1094 2.7716,-0.58276 4.7075,2.5972 7.6516,1.7992 3.9013,-0.89172 8.5543,1.3584 11.083,3.446 2.8732,2.4343 -0.082,4.7788 2.5264,7.48 1.7985,2.4702 4.1089,5.4535 6.1408,7.7329 1.477,-2.2988 3.5081,1.4177 1.5918,3.0121 0.7333,1.6826 4.9456,4.3745 1.3033,4.4804 -1.4486,-1.5462 -6.3398,-3.75 -6.7756,-0.30085 -1.2653,2.2752 -6.4205,-0.96279 -4.5081,3.0157 -1.9153,1.1351 -2.0799,3.1047 -1.8322,4.9339 -3.0917,-2.0813 -3.5859,-8.1781 -7.8629,-9.2993 -3.7933,-0.80907 -1.0231,-6.6923 -4.9596,-5.5508 -3.2658,-0.0656 -5.4702,-2.285 -6.1327,-5.5492 -3.4477,-1.3427 -8.0221,-3.5835 -11.792,-4.3498 -3.4493,0.0157 -6.2046,-0.18825 -9.427,-0.60161 0.7494,-3.3516 1.0301,-6.7558 -1.5433,-9.7989 1.4579,-1.1129 3.1674,-1.3226 4.7026,0.40621 -0.4582,-1.716 2.8315,0.0339 3.503,-0.70703 0.2633,1.786 2.354,6.2934 4.5256,2.5336 -2.2562,-2.8802 -0.028,-5.6377 3.4512,-6.133 0.1088,-2.2983 -2.1397,-2.4276 0.5846,-2.6589 z" id="path8190" />
                                <text id="svgRegions" x="1418" y="838">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Rustavi' : 'რუსთავი'; ?>
                                </text>
                            </a>
                        </g>
                    </svg>
                </div>
            </div>


            <!-- Right Table -->
            <div class="col-12 col-md-3">
                <?php include '../asset/components/right_table_mun.php' ?>
            </div>
        </div>
    </main>

    <?php include '../asset/components/footer.php' ?>

    <script src="../script.js"></script>
    <script type="text/javascript" src="../lang.js"></script>
    <script>
        localStorage.setItem('municipal', 'Rustavi');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>