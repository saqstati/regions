<?php
include "../config.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="http://www.geostat.ge/regions/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $lang['kutaisititlename'] ?>" />
    <meta property="og:description" content="<?php echo $lang['kutaisititlename'] ?>" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <title class="tr" Key="PAGE_TITLE"><?php echo $lang['kutaisititlename'] ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../samegrelo.css">
    <link rel="stylesheet" type="text/css" href="../imereti/imereti.css">
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
                    <svg id="svg6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000" version="1.1">

                        <g id="layer6" style="transform: scale(9.4);-webkit-transform-origin-x: 856px;-webkit-transform-origin-y: 628px;">

                            <a xlink:href="../imereti.php" class="text-decoration-none">
                                <path id="group6-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 813.12695,562.14648 c 0.47829,0.54773 0.89249,5.5322 2.34571,6.50782 2.1165,1.70548 -0.69782,3.93677 2.70898,4.47851 2.20105,1.5233 -0.58588,6.31596 -2.34961,3.57422 -2.67678,0.48352 -7.04393,0.63891 -10.08008,3.0918 -0.19189,0.30369 -1.76878,2.95781 -3.73047,2.72265 -1.30772,1.64931 -5.16196,0.33091 -5.92773,2.39649 -3.62749,-1.77045 -4.77547,3.0336 -7.96094,0.80078 -2.20841,-0.18668 -5.47808,-3.52949 -6.60937,-1.5918 2.02611,1.83849 -3.73085,3.16416 -0.94922,4.20703 0.82869,2.46527 3.61447,4.27231 7.1914,4.7129 4.029,1.1444 3.26654,-6.65548 6.04102,-1.51172 0.77781,-1.11382 5.01077,-4.05398 5.33398,-1.1211 -2.95837,1.46644 1.03875,4.24327 -0.77148,5.70703 -3.25693,1.30102 1.95293,1.29419 1.24609,3.84766 0.5424,-0.81354 1.12818,3.47574 2.13477,1.1582 0.76287,-1.71805 6.33978,-0.33933 5.86719,1.28711 -1.1343,3.23187 3.95905,1.56172 0.48047,5.7793 -0.10102,2.13289 -0.10645,1.82756 0.64453,3.49219 2.15657,1.03769 5.97972,2.85559 8.62695,1.44922 4.07026,-0.49568 -0.94323,-2.40465 -1.04883,-4.05274 -1.04021,-1.81576 -1.61825,-4.90729 -0.15234,-6.50781 -0.21301,-1.58079 1.97561,-2.26015 1.43555,-3.45703 -3.26248,-2.40062 2.2442,-3.59846 -0.1543,-5.54883 -2.54761,-3.49113 4.19418,-2.02202 1.28125,-4.16602 -0.76565,-3.00904 1.85685,-5.40124 2.61328,-6.82812 0.83209,0.18282 1.20183,-3.86115 0.58789,-5.80664 0.46069,-3.94194 -4.1239,-3.46403 -4.00195,-7.67969 -2.05536,-2.47497 -2.96318,-6.19302 -4.80274,-6.94141 z" id="path1151" />
                                <text id="svgRegions" x="780" y="575">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Kutaisi' : 'ქუთაისი'; ?>
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
        localStorage.setItem('municipal', 'Kutaisi');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>