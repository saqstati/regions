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
    <meta property="og:title" content="<?php echo $lang['batumititlename'] ?>" />
    <meta property="og:description" content="<?php echo $lang['batumititlename'] ?>" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <title class="tr" Key="PAGE_TITLE"><?php echo $lang['batumititlename'] ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../samegrelo.css">
    <link rel="stylesheet" type="text/css" href="../adjara/adjara.css">
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
                    <svg id="svg4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000" version="1.1">
                        <g id="layer3" style="transform: scale(6.1); -webkit-transform-origin-x: 479px;-webkit-transform-origin-y: 956px;">
                            <a xlink:href="../adjara.php" class="text-decoration-none">
                                <path id="group3-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 498.34375,806.51758 c -3.24541,0.93322 -2.96683,7.35544 -6.67773,8.64258 -1.77471,2.69459 -2.9277,5.57577 -4.68555,8.16796 -0.85365,1.37311 -1.62854,2.41344 -3.44922,3.35352 -2.45523,3.10675 -4.09831,7.6465 -7.85742,7.19922 -0.075,0.21826 -5.47644,2.76808 -5.28125,-0.88672 -0.45493,-0.94506 -0.52472,-3.60609 -2.44727,-2.47266 -6.66864,3.70877 -10.32302,9.97134 -15.20117,15.04297 -0.74154,3.29416 -5.1635,4.54395 -5.60547,7.51758 -2.49342,7.67034 -1.70477,16.12991 -3.67969,23.51758 -1.94323,1.64095 0.68122,2.71016 1.44141,3.56836 1.76174,1.83486 2.41715,-0.27456 2.45117,-2.07422 1.40224,-1.31114 1.89222,-2.51728 1.60156,-5.12109 1.12868,-1.07071 1.40373,-2.59219 0.96094,-4.63868 0.57919,-0.89012 3.43693,-1.95346 1.59961,-3.11718 -0.81311,-1.7122 0.52798,-4.92412 1.55469,-4.5625 0.56447,-1.67455 1.0212,-4.05455 1.95703,-5.91992 3.9941,0.74666 7.85542,2.75015 12.12109,4.31835 2.30047,1.70164 4.89868,2.89032 5.91407,5.27344 1.24105,0.74079 3.41923,3.00511 2.45312,-0.38867 -0.91475,-1.94078 0.25283,-2.86462 -1.28711,-4.13672 -1.22868,-1.48959 -2.08079,-2.24912 -4.15234,-2.55859 -2.13033,-1.69631 -0.14718,-2.44295 1.5918,-2.82813 0.48391,-1.71211 1.24789,-2.46474 2.42578,-3.04492 -0.0656,-0.24793 2.35753,-3.35918 0.46289,-3.72852 -1.30826,-1.04809 -0.27639,-4.22499 -1.28907,-4.48242 -0.0137,-2.24958 -1.09996,-1.68747 -1.27148,-4.58398 0.36672,-1.69198 4.13882,-2.05944 4.54102,-0.80078 0.0946,1.07101 4.05366,0.22464 4.83007,1.83789 -0.0679,-0.97369 -0.25244,-2.04758 -0.73242,-1.73242 -0.39162,-1.60351 -2.91276,-3.21344 -0.16601,-4.58399 2.51279,0.63146 3.71248,-1.3309 5.23047,-2.22461 0.0623,-0.0844 0.13332,-0.17011 0.23632,-0.2539 0.32553,-0.26432 0.62275,-0.55783 0.92969,-0.8418 0.0236,-0.049 0.0471,-0.0992 0.0703,-0.14844 0.0598,-0.071 0.1065,-0.15329 0.17774,-0.21289 0.0969,-0.0811 0.21687,-0.13073 0.32031,-0.20312 0.0114,-0.007 -0.0523,0.0176 -0.041,0.01 0.0812,-0.0582 0.17089,-0.11527 0.26758,-0.1543 0.0927,-0.12619 0.24569,-0.24188 0.33008,-0.32031 0.022,-0.0204 0.0363,-0.0466 0.0547,-0.0703 0.0743,-0.057 0.15059,-0.11207 0.22265,-0.17188 0.0201,-0.0166 -0.0442,0.0273 -0.0664,0.041 0.007,-0.0145 0.0342,-0.0531 0.0215,-0.043 -0.0205,0.0162 -0.054,0.0876 -0.0469,0.0625 0.0242,-0.0863 0.0682,-0.166 0.0996,-0.25 0.007,-0.0263 0.0155,-0.0518 0.0234,-0.0781 -0.004,-0.002 -0.0131,-0.002 -0.0117,-0.006 0.0304,-0.10229 0.0687,-0.20185 0.10351,-0.30274 0.11563,-0.10417 0.0794,-0.0751 0.14258,-0.13476 -0.0139,-0.1112 -0.0319,-0.26331 -0.0352,-0.29492 -0.0211,-0.33433 0.008,-0.66932 0.006,-1.00391 -10e-4,-0.20511 -0.002,-0.41012 -0.002,-0.61524 -3e-5,-0.0387 0.0146,-0.0794 0,-0.11523 -0.007,-0.0165 -0.01,0.0229 -0.0137,0.0508 0,0 0,0.002 0,0.002 0,0 -0.002,0 -0.002,0 -10e-4,0.008 -0.002,0.0104 -0.004,0.0156 -0.002,-0.007 -0.005,-0.0129 -0.008,-0.0195 -0.0227,0.005 -0.0643,-0.0552 -0.0801,-0.0898 -0.2541,-0.555 -0.18816,-0.61037 -0.13086,-1.13282 0.0229,-0.13029 -0.0572,-0.41762 -0.0137,-0.51953 0.0846,-0.19853 0.20301,-0.38192 0.30468,-0.57226 0.0429,-0.0432 0.0908,-0.0815 0.12891,-0.12891 0.0126,-0.0157 -0.06,0.0511 -0.0508,0.0332 0.20028,-0.3905 0.55207,-0.70066 0.87109,-0.99218 0.33753,-0.21335 0.40918,-0.19247 0.78125,-0.24805 0.0423,-0.006 -0.0909,0.0257 -0.1289,0.006 -0.023,-0.0118 0.0435,-0.0297 0.0684,-0.0371 0.122,-0.0362 0.24764,-0.061 0.37109,-0.0918 0.0306,-3.6e-4 0.0611,-0.002 0.0918,-0.002 -0.007,-0.002 -0.0205,10e-4 -0.0254,-0.002 -0.0328,-0.021 0.0534,-0.06 0.0879,-0.0781 0.12678,-0.0667 0.25436,-0.13628 0.39257,-0.17383 0.12029,-0.0327 0.21613,-0.0387 0.31055,-0.0332 0.0787,-0.059 0.15347,-0.1295 0.2461,-0.16211 0.16807,-0.0592 0.31938,-0.0779 0.4707,-0.0762 0.15132,0.002 0.30306,0.0245 0.46875,0.0527 0.35897,0.0141 0.71857,-0.009 1.07812,-0.01 0.55788,0.004 1.11401,0.005 1.67188,0.004 0.37059,0.004 0.62351,0.21412 0.91406,0.4043 0.13009,0.0851 0.16048,0.0498 0.30274,0.1875 0.0951,0.0922 0.1691,0.20496 0.2539,0.30664 0.0122,0.0515 0.0249,0.10285 0.0371,0.1543 0.15952,-1.14256 0.47312,-2.55516 -0.9043,-3.17188 -1.47563,-1.31689 -0.24362,-1.27648 -0.79882,-3.78515 1.94067,-0.21558 1.85071,-3.18783 3.83203,-3.83985 1.59386,-1.26473 0.72302,-3.34559 2.24023,-4.64062 -0.23082,-0.81867 -1.33654,0.44201 -2.91797,-0.85547 z" id="path1394" />
                                <text id="svgRegions" x="420" y="833">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Batumi' : 'ბათუმი'; ?>
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
    <!-- Fixing the incorrect type for lang.js -->
    <script type="text/javascript" src="../lang.js"></script>
    <script>
        localStorage.setItem('municipal', 'Batumi');
    </script>
    <!-- Popper.js and Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>

</html>