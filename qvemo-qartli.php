<?php
include "config.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="http://www.geostat.ge/regions/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $lang['kvemokartlititlename'] ?>" />
    <meta property="og:description" content="<?php echo $lang['kvemokartlititlename'] ?>" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <title class="tr" Key="PAGE_TITLE"><?php echo $lang['kvemokartlititlename'] ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="samegrelo.css">
    <link rel="stylesheet" type="text/css" href="qvemo-qartli/qvemo-qartli.css">
    <link rel="stylesheet" type="text/css" href="custom.css">
    <link rel="stylesheet" href="mediastyles.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154977204-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-154977204-1');
    </script>

</head>

<body>

    <div class="hidden">
        <script type="text/javascript">
            var images = new Array()

            function preload() {
                for (i = 0; i < preload.arguments.length; i++) {
                    images[i] = new Image()
                    images[i].src = preload.arguments[i]
                }
            }
            preload(
                "1600-900-optimized/2.jpg",
                "1600-900-optimized/3.jpg",
                "1600-900-optimized/4.jpg",
                "1600-900-optimized/5.jpg",
                "1600-900-optimized/6.jpg",
                "1600-900-optimized/7.jpg",
                "1600-900-optimized/8.jpg",
                "1600-900-optimized/9.jpg",
                "1600-900-optimized/10.jpg",
                "1600-900-optimized/11.jpg",
                "1600-900-optimized/12.jpg",
                "1600-900-optimized/15.jpg"
            )
        </script>
    </div>
    <div id="background-main" class="background-image"></div>
    <div class="main-container">
        <div id="brand-logo">
            <a href="/regions/index.php" id="brand-logo-link" class=""><img src="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'images/logo_transparency_eng.png' : 'images/logo_transparency_geo.png'; ?>" /></a>
        </div>
        <header class="header1">
            <h1>
                <p id="pagetitlename" class="tr" Key="REGION14"><?php echo $lang['kvemokartlititlename'] ?></p>
            </h1>
        </header>
        <div id="languages">
            <a href="qvemo-qartli.php?lang=ka" id="ka" class="lang"><img src="images/ka.png" /></a>
            <a href="qvemo-qartli.php?lang=en" id="en" class="lang"><img src="images/en.png" /></a>
        </div>
        
        <div class="display-flex">
            <a class=" btn textbox-left-home back-btn" href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'index.php#' : 'index.php?lang=ka'; ?>"> <span class="tr" Key="backBtn"><?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Back' : 'უკან დაბრუნება'; ?></span></a>

            <a class="btn textbox-right-home regions-btn" href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'listEN.php' : 'list.php'; ?>"> <span class="tr" Key="regionsBtn"><?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Comparison of Regions' : 'რეგიონების შედარება'; ?></span></a>

            <a class="btn textbox-right-home regions-mun regions-btn" href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'muncomEN.php?lang=en' : 'muncom.php?lang=ka'; ?>"> <span class="tr" Key="regionsBtn"><?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Comparison of Municipalities' : 'მუნიციპალიტეტების შედარება'; ?></span></a>
        </div>

        <table class="machveneblebi-left">
            <?php
            include('connection.php');
            $tableLeft = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'regional_statistics_en' : 'regional_statistics';
            $query = mysqli_query($link, "select * from " . $tableLeft);
            while ($row = mysqli_fetch_array($query)) {
                $basicInformation[$row['ID']] = $row['basicInformation'];
                $population[$row['ID']] = $row['population'];
                $birth[$row['ID']] = $row['birth'];
                $death[$row['ID']] = $row['death'];
                $naturalIncrease[$row['ID']] = $row['naturalIncrease'];
                $marriage[$row['ID']] = $row['marriage'];
                $divorce[$row['ID']] = $row['divorce'];
                $populationDescription[$row['ID']] = $row['populationDescription'];
                $demography[$row['ID']] = $row['demography'];
                $gdbAndValueAdded[$row['ID']] = $row['gdbAndValueAdded'];
                $foreignDirectInvestment[$row['ID']] = $row['foreignDirectInvestment'];
                $employmentAndSalaries[$row['ID']] = $row['employmentAndSalaries'];
                $pricesAndInflation[$row['ID']] = $row['pricesAndInflation'];
                $standartOfLiving[$row['ID']] = $row['standartOfLiving'];
                $businessSector[$row['ID']] = $row['businessSector'];
                $businessRegister[$row['ID']] = $row['businessRegister'];
                $agriculture[$row['ID']] = $row['agriculture'];
                $industry[$row['ID']] = $row['industry'];
                $construction[$row['ID']] = $row['construction'];
                $service[$row['ID']] = $row['service'];
                $trading[$row['ID']] = $row['trading'];
                $hotelsAndRestaurants[$row['ID']] = $row['hotelsAndRestaurants'];
                $transportAndStorage[$row['ID']] = $row['transportAndStorage'];
                $tourism[$row['ID']] = $row['tourism'];
                $legalStatistics[$row['ID']] = $row['legalStatistics'];
                $healthCareAndSocialSecurity[$row['ID']] = $row['healthCareAndSocialSecurity'];
                $education[$row['ID']] = $row['education'];
                $culture[$row['ID']] = $row['culture'];
                $environmentalProtection[$row['ID']] = $row['environmentalProtection'];
                $infrastructure[$row['ID']] = $row['infrastructure'];
            }
            ?> <tr>
                <th><?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Regional Statistics' : 'რეგიონული სტატისტიკა'; ?></th>
            </tr>
            <tbody>
                <tr>
                    <th id="dziritadi1" onclick="GetIdChange()" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $basicInformation[1]; ?> <span class="float-right"><i id="classchange" class="dropdown_img_up"></i></span>
                    </th>
                </tr>
                <tr class="informacia1">
                    <td>
                        <?php echo $basicInformation[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/main%20information/area.xlsx' : '/regions/regions/8/dziritadi%20informacia/regionis%20fartobi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia1">
                    <td>
                        <?php echo $basicInformation[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/main%20information/number%20of%20settlements.xlsx' : '/regions/regions/8/dziritadi%20informacia/municipalitetebis,%20qalaqebis%20da%20soflebis%20raodenoba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi22" onclick="GetIdChange()" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $population[1]; ?></td>
                </tr>
                <tr class="informacia22">
                    <td>
                        <?php echo $population[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population/Number%20of%20population/Kvemo%20Kartli.xlsx' : '/regions/regions/მოსახლეობა/მოსახლეობის%20რიცხოვნობა/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia22">
                    <td>
                        <?php echo $population[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population/Share%20of%20urban%20population/Kvemo%20Kartli.xlsx' : '/regions/regions/მოსახლეობა/საქალაქო%20დასახლებაში%20მცხოვრები/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia22">
                    <td>
                        <?php echo $population[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population/Density%20of%20population/Kvemo%20Kartli.xlsx' : '/regions/regions/მოსახლეობა/მოსახლეობის%20სიმჭიდროვე/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadiMain" title="" onclick="GetIdChange(); demografiaShow();" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $lang['demograph'] ?></td>
                </tr>
                <style>
                    #dziritadi3,
                    #dziritadi4,
                    #dziritadi5,
                    #dziritadi6,
                    #dziritadi7 {
                        display: none;
                        margin-left: 20px;
                    }
                </style>
                <tr>
                    <td id="dziritadi3" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $birth['1']; ?></td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20live%20births/Kvemo%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20birth%20rate/Kvemo%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/შობადობის%20ზოგადი%20კოეფიციენტი/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Kvemo%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Quantitative%20ratio%20of%20sexes/Kvemo%20Kartli.xlsx' : '/regions/regions/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['6']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Mean%20age%20of%20childbearing/Kvemo%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['7']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20stillbirths/Kvemo%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/მკვდრადშობილთა%20რიცხოვნობა/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['8']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20stillbirths%20by%20sex/Kvemo%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi4" onclick="GetIdChange()" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $death['1']; ?>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths/Kvemo%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20death%20rate/Kvemo%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/მოკვდაობის%20ზოგადი%20კოეფიციენტი/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Kvemo%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Infant%20mortality%20rate/Kvemo%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/ჩვილ%20ბავშვთა%20მოკვდაობის%20კოეფიციენტი/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['6']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Under-5%20mortality%20rate/Kvemo%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/5%20წლამდე%20ასაკის%20ბავშვთა%20მოკვდაობის%20კოეფიციენტი/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['7']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Kvemo%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['8']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20by%20urban-rural%20settlements/Kvemo%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20საქალაქო%20სასოფლო%20დასახლებების%20მიხედთვით/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['9']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20by%20age%20groups/Kvemo%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/მიზეზები%20ძირითადი%20კლასების%20და%20ასაკის%20მიხედვით/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['10']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Deaths%20from%20suicide/Kvemo%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/თვითმკვლელობით%20გარდაცვლილთა%20რიცხოვნობა/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['11']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Suicide%20rate/Kvemo%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/თვითმკვლელობის%20შედეგად%20სიკვილიანობის%20კოეფიციენტი/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi5" onclick="GetIdChange()" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $naturalIncrease['1']; ?>
                    </td>
                </tr>
                <tr class="informacia5">
                    <td>
                        <?php echo $naturalIncrease['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Natural%20increase/Kvemo%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/ბუნებრივი%20მატება/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia5">
                    <td>
                        <?php echo $naturalIncrease['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Natural%20increase%20rate/Kvemo%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/ბუნებრივი%20მატების%20კოეფიციენტი/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi6" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $marriage['1']; ?>
                    </td>
                </tr>
                <tr class="informacia6">
                    <td>
                        <?php echo $marriage['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20registered%20marriages/Kvemo%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/რეგისტრირებულ%20ქორწინებათა%20რაოდენობა/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia6">
                    <td>
                        <?php echo $marriage['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20marriage%20rate/Kvemo%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/ქორწინების%20ზოგადი%20კოეფიციენტი/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia6">
                    <td>
                        <?php echo $marriage['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20married%20people/Kvemo%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia6">
                    <td>
                        <?php echo $marriage['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Mean%20age%20of%20spouses/Kvemo%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi7" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $divorce['1']; ?>
                    </td>
                </tr>
                <tr class="informacia7">
                    <td>
                        <?php echo $divorce['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20registered%20divorces/Kvemo%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia7">
                    <td>
                        <?php echo $divorce['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20divorce%20rate/Kvemo%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/განქორწინების%20ზოგადი%20კოეფიციენტი/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia7">
                    <td>
                        <?php echo $divorce['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Kvemo%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi8" onclick="GetIdChange()" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $populationDescription['1']; ?>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Median%20age%20of%20population/Kvemo%20Kartli.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Kvemo%20Kartli.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Age%20dependency%20ratios/Kvemo%20Kartli.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Number%20of%20population/Kvemo%20Kartli.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['6']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Share%20of%20working%20age%20population/Kvemo%20Kartli.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['7']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Number%20of%20private%20households/Kvemo%20Kartli.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/კერძო%20შინამეურნეობები/ქვემო%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $gdbAndValueAdded[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/gdp%20and%20va/gdp%20and%20va.xlsx' : '/regions/regions/8/mshp%20da%20damatebuli%20girebuleba/mshp%20da%20damatebuli%20girebuleba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $foreignDirectInvestment[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/ext.trade%20and%20foreign%20direct%20invset/ext.trade%20and%20foreign%20direct%20invset.xlsx' : '/regions/regions/8/pirdapiri%20uckhouri%20investiciebi/pirdapiri%20uckhouri%20investiciebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi17" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $employmentAndSalaries[1]; ?>
                    </td>
                </tr>
                <tr class="informacia17">
                    <td>
                        <?php echo $employmentAndSalaries[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/employment%20and%20unemployment/employment%20and%20unemployment.xlsx' : '/regions/regions/8/dasaqmeba_umushevroba/dasaqmeba_umushevroba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia17">
                    <td>
                        <?php echo $employmentAndSalaries[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/employment%20and%20unemployment/wages.xlsx' : '/regions/regions/8/dasaqmeba_umushevroba/khelfasi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <style>
                    /* ვმალავთ, რადგან ფაილები არ გვაქვს */
                    #dziritadi4,
                    .informacia4{
                        display: none;
                    }
                </style>
                <tr>
                    <td id="dziritadi4" onclick="GetIdChange()" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '' : ''; ?>"><?php echo $pricesAndInflation[1]; ?>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $pricesAndInflation[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/prices/consumer%20price%20index%2012%20month%20avarage%20over%20the%20previous%2012%20month%20avarage%20-%20gori.xlsx' : '/regions/regions/8/fasebi/samomxmareblo%20fasebis%20indeqsebi%2012%20tvis%20sashualo%20wina%2012%20Tvis%20saSualosTan%20-%20gori.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $pricesAndInflation[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/prices/consumer%20price%20index%20to%20the%20previous%20month%20-%20gori.xlsx' : '/regions/regions/8/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20tvestan%20-%20gori.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $pricesAndInflation[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/prices/consumer%20price%20index%20to%20the%20same%20month%20of%20previous%20year%20-%20gori.xlsx' : '/regions/regions/8/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20wlis%20shesabamis%20TvesTan%20-%20gori.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi18" onclick="GetIdChange()" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $standartOfLiving[1]; ?>
                    </td>
                </tr>
                <tr class="informacia18">
                    <td>
                        <?php echo $standartOfLiving[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/standard%20of%20living/incomes.xlsx' : '/regions/regions/8/ckhovrebis%20done/shemosavlebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia18">
                    <td>
                        <?php echo $standartOfLiving[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/standard%20of%20living/expenditures.xlsx' : '/regions/regions/8/ckhovrebis%20done/kharjebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi14" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $businessSector[1]; ?>
                    </td>
                </tr>
                <tr class="informacia14">
                    <td>
                        <?php echo $businessSector[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/business%20sector/by%20kind%20of%20activity_nace%20rev.2.xlsx' : '/regions/regions/8/biznes%20seqtori/saqmianobis%20mikhedvit_nace%20rev.2.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia14">
                    <td>
                        <?php echo $businessSector[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/business%20sector/by%20ownership.xlsx' : '/regions/regions/8/biznes%20seqtori/sakutrebis%20formis%20mikhedvit.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia14">
                    <td><?php echo $businessSector[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/business%20sector/by%20size.xlsx' : '/regions/regions/8/biznes%20seqtori/zomis%20mikhedvit.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><a target="_blank" href="http://br.geostat.ge/register_geo/"><?php echo $businessRegister[1]; ?></a> <span class="float-right"></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi15" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $agriculture[1]; ?>
                    </td>
                </tr>
                <tr class="informacia15">
                    <td>
                        <?php echo $agriculture[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/agriculture/1.%20Annual%20crops.xlsx' : '/regions/regions/8/soflis%20meurneoba/1.%20erttsliani%20kulturebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia15">
                    <td>
                        <?php echo $agriculture[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/agriculture/2.%20Production%20of%20permanent%20crops.xlsx' : '/regions/regions/8/soflis%20meurneoba/2.%20mravaltslovani%20kulturebis%20tsarmoeba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia15">
                    <td>
                        <?php echo $agriculture[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/agriculture/3.%20Number%20of%20livestock.xlsx' : '/regions/regions/8/soflis%20meurneoba/3.%20pirutkvis%20suladoba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia15">
                    <td>
                        <?php echo $agriculture[5]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/agriculture/4.%20Production%20of%20animal%20housbandry.xlsx' : '/regions/regions/8/soflis%20meurneoba/4.%20metskhoveleobis%20produktsiis%20tsarmoeba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $industry[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/industry/industry.xlsx' : '/regions/regions/8/mretsveloba/mretsveloba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                
                <tr>
                    <td id="dziritadi13" onclick="GetIdChange()" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $construction[1]; ?>
                    </td>
                </tr>
                <tr class="informacia13">
                    <td>
                        <?php echo $construction[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/construction/mshenebloba_nebartvebi.xlsx' : '/regions/regions/8/mshenebloba/mshenebloba_nebartvebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia13">
                    <td>
                        <?php echo $construction[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/construction/eqspluataciashi%20migebuli%20obieqtebi.xlsx' : '/regions/regions/8/mshenebloba/eqspluataciashi%20migebuli%20obieqtebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia13">
                    <td>
                        <?php echo $construction[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/construction/mshenebloba_dziritadi machveneblebi.xlsx' : '/regions/regions/8/mshenebloba/mshenebloba_dziritadi%20machveneblebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi12" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $service[1]; ?>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/By%20organizational%20legal%20forms/Kvemo%20Kartli%20Region.xlsx' : '/regions/regions/მომსახურება/ორგანიზაციულ%20სამართლებრივი/ქვემო%20ქართლის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/By%20ownership%20type/Kvemo%20Kartli%20Region.xlsx' : '/regions/regions/მომსახურება/საკუთრების%20ფორმების%20მიხედვით/ქვემო%20ქართლის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Number%20of%20markets%20and%20fairs%20by%20type/Kvemo%20Kartli%20Region.xlsx' : '/regions/regions/მომსახურება/ტიპების%20მიხედვით/ქვემო%20ქართლის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[5]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Days%20of%20trade/Kvemo%20Kartli%20Region.xlsx' : '/regions/regions/მომსახურება/ვაჭრობის%20დღეთა%20რაოდენობის%20მიხედვით/ქვემო%20ქართლის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[6]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Employed%20persons/Kvemo%20Kartli%20Region.xlsx' : '/regions/regions/მომსახურება/დირექციაში%20დასაქმებულები/ქვემო%20ქართლის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[7]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Market-place%20and%20sellers/Kvemo%20Kartli%20Region.xlsx' : '/regions/regions/მომსახურება/სავაჭრო%20ადგილები%20და%20მოვაჭრეთა%20რაოდენობა/ქვემო%20ქართლის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[8]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Financial%20indices%20of%20markets/Kvemo%20Kartli%20Region.xlsx' : '/regions/regions/მომსახურება/საფინანსო%20მაჩვენებლები/ქვემო%20ქართლის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $trading[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/trade/trade.xlsx' : '/regions/regions/8/vachroba/vachroba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi9" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $hotelsAndRestaurants[1]; ?>
                    </td>
                </tr>
                <tr class="informacia9">
                    <td>
                        <?php echo $hotelsAndRestaurants[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/hotels%20and%20restaurants/hotels%20and%20restaurants.xlsx' : '/regions/regions/8/sastumroebi%20da%20restornebi/sastumroebi%20da%20restornebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia9">
                    <td>
                        <?php echo $hotelsAndRestaurants[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Hotels/Kvemo%20Kartli%20Region.xlsx' : '/regions/regions/სასტუმროები/რაოდენობა%20და%20ფართობი/ქვემო%20ქართლის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia9">
                    <td>
                        <?php echo $hotelsAndRestaurants[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Rooms/Kvemo%20Kartli%20Region.xlsx' : '/regions/regions/სასტუმროები/ნომრების%20რაოდენობა/ქვემო%20ქართლის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia9">
                    <td>
                        <?php echo $hotelsAndRestaurants[5]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Guests/Kvemo%20Kartli%20Region.xlsx' : '/regions/regions/სასტუმროები/სტუმართა%20რაოდენობა/ქვემო%20ქართლის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia9">
                    <td>
                        <?php echo $hotelsAndRestaurants[6]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Employees/Kvemo%20Kartli%20Region.xlsx' : '/regions/regions/სასტუმროები/დასაქმებულთა%20რაოდენობა/ქვემო%20ქართლის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi10" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $transportAndStorage[1]; ?>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $transportAndStorage[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/transport%20and%20communication/transport%20and%20storage.xlsx' : '/regions/regions/8/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $transportAndStorage[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/transport%20and%20communication/number%20of%20motor%20vehicles.xlsx' : '/regions/regions/8/transporti%20da%20kavshirgabmuloba/registrirebuli%20avtomobilebis%20raodenoba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $transportAndStorage[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/transport%20and%20communication/the%20length%20of%20the%20roads.xlsx' : '/regions/regions/8/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi11" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""> <?php echo $tourism[1]; ?><span class="float-right"><i id="classchange" class="dropdown_img_up"></i>
                    </td>
                </tr>
                <tr class="informacia11">
                    <td>
                        <?php echo $tourism[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/tourism/place%20of%20residence.xls' : '/regions/regions/8/turizmi/ganawileba%20sacxovrebeli%20adgilis%20mixedvit.xls'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia11">
                    <td>
                        <?php echo $tourism[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/tourism/visited%20regions.xls' : '/regions/regions/8/turizmi/ganawileba%20monaxulebuli%20regionebit.xls'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $legalStatistics[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/justice%20statistics/justice%20statistics.xlsx' : '/regions/regions/8/samartlebrivi%20statistika/samartlebrivi%20statistika.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $healthCareAndSocialSecurity[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/health%20care%20and%20social%20protection/health%20care%20and%20social%20protection.xlsx' : '/regions/regions/8/jandacva%20da%20socialuri%20uzrunvelkofa/jandacva%20da%20socialuri%20uzrunvelkofa.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $education[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/education/education.xlsx' : '/regions/regions/8/ganatleba/ganatleba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $culture[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/culture/culture.xlsx' : '/regions/regions/8/kultura/kultura.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $environmentalProtection[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/environmental%20protection/environmental%20protection.xlsx' : '/regions/regions/8/garemos%20dacva/garemos%20dacva.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $infrastructure[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/8/infrastructure/infrastructure.xlsx' : '/regions/regions/8/infrastruqtura/infrastruqtura.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>




            </tbody>
        </table>
        <div class="map-box">
            <svg id="svg4380" xmlns="http://www.w3.org/2000/svg" viewBox="" version="1.1">

                <g id="layer8">
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'qvemo-qartli/bolnisi.php?lang=en' : 'qvemo-qartli/bolnisi.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group3-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1293.8,859.96 c 1.847,1.7321 4.89,2.6581 7.8855,3.5783 2.9484,1.3111 5.3015,-2.9487 6.5757,0 0.5333,1.7 2.3934,2.7984 4.356,3.1507 0.3049,0.99942 3.9966,1.4616 5.6325,3.0002 3.1381,-0.57153 2.94,-1.3325 3.9769,-3.3557 1.9071,0.64248 4.9856,-0.14876 6.3452,-1.8968 3.8595,0.71605 7.4335,0.3358 10.09,3.0004 2.3032,-0.0809 3.8834,-0.86193 5.7036,1.0508 1.1767,1.119 4.6,0.17087 6.3453,0.21094 2.3406,-0.99425 4.2838,-3.425 6.0524,-0.18164 3.3096,2.4499 2.4615,5.5804 3.844,7.7755 0.2527,2.3134 3.1628,5.6014 -0.094,6.5886 -1.9185,-0.99676 -2.8286,3.1082 -4.1547,0.95907 -3.1886,0.42051 -4.5023,1.2943 -2.9453,4.1506 2.9541,-1.2445 2.4994,3.3926 5.805,1.7988 2.1137,0.25245 3.2086,2.4807 5.8967,2.4048 2.6546,1.299 4.7222,-1.0935 4.9576,2.2462 0.063,1.2517 3.8775,3.5493 0.3004,2.9006 -2.2366,-0.15747 -2.4271,-2.2838 -4.557,-2.5922 0.2756,-2.2235 -2.2073,-0.0117 -3.3965,1.092 -1.8307,1.0657 -2.6719,3.3651 -5.5039,3.4498 2.1583,2.0105 1.7227,5.0697 -0.5901,5.5509 0.9296,2.0225 -0.2239,3.7376 0.9997,4.7304 -0.1207,3.7899 -5.8158,4.9492 -5.8409,9.2111 -0.3737,3.162 -3.4044,-0.6676 -4.3682,2.5742 -2.839,3.0582 -8.8803,5.0098 -3.6211,9.0625 -3.0511,1.8974 -2.0786,9.0014 -5.9316,8.7247 -4.3954,-0.91344 -4.1381,-6.0202 -2.3406,-9.666 2.2391,-3.0226 5.1444,-7.2537 -0.5176,-8.7012 -4.5263,-1.6977 -6.6969,2.6978 -6.2231,6.7099 -1.807,4.7711 -4.2824,2.098 -3.2154,-1.6552 -0.954,-3.1797 -6.4579,-2.9934 -3.9198,0.71493 -2.7377,-1.0366 -1.8087,5.2699 -2.8242,1.7754 -2.2811,-2.7623 -0.4831,5.207 -3.5701,5.8848 0.1973,5.4082 -5.3634,5.3375 -5.3243,10.332 2.9873,4.9399 -5.6604,11.756 -10.26,8.1504 -7.5956,-0.18185 -6.9701,10.549 -3.7321,15.143 1.6452,1.7031 0.7904,5.4923 -1.5061,6.7949 -4.3001,1.3531 -2.3918,7.6987 -7.1856,7.8828 -3.5112,1.1215 -7.3458,4.6437 -10.656,3.7012 -1.2425,-5.7212 -7.3655,-2.1805 -10.842,-6.1699 -5.1106,0.12433 -5.7327,-5.5806 -9.8203,-7.4238 -2.3819,-3.7298 2.8894,-6.5933 2.8867,-10.811 7.2332,-2.2334 2.52,-5.0824 -1.6931,-9.2176 -5.5635,-4.3779 4.6233,-6.9155 6.0254,-10.632 -1.1975,-5.6059 6.8334,-6.5948 6.0274,-12.398 -1.0045,-4.4583 -10.309,-0.19282 -7.1994,-5.5215 -1.85,-1.3082 -3.9573,-4.0563 -6.9543,-3.2471 -2.9224,0.78196 0.3866,-4.7439 -2.3391,-5.6499 1.8718,-0.74741 0.5107,-4.812 3.8937,-4.2015 0.4162,-2.8168 -1.9183,-3.512 -3.1421,-4.0001 -0.3721,-3.3979 -5.8254,-2.1735 -7.9242,-0.71879 -3.3311,2.9198 3.5313,2.7595 5.425,2.379 1.0042,1.5024 -2.9438,2.321 -4.6217,2.3907 -2.9922,2.1359 -6.1828,1.8922 -9.1065,0.80273 -3.0186,1.1821 -2.0845,-5.3242 -6.3223,-3.5019 -3.0808,-0.53129 -1.8977,-5.0608 -6.041,-3.6875 -3.7625,0.47148 -3.1364,-9.069 -7.1352,-2.4551 -3.8884,4.0261 -2.9106,-7.6329 -6.9656,-3.506 -1.9466,-2.0198 -4.1186,-8.5888 0.6255,-7.0629 1.5541,5.0841 1.7769,0.95749 4.5558,0.16024 -1.3886,-4.4509 2.4916,-3.667 3.7542,-5.4005 0.9795,-2.0102 3.1348,-4.8515 5.6191,-6.8929 1.0526,-1.1221 3.2976,-2.1763 3.9521,-3.7484 1.2366,1.2504 2.3101,-1.6122 3.1568,0.89116 2.3484,1.2303 5.0927,-0.87362 6.2994,1.2011 4.0377,0.6182 5.9416,-1.4028 8.2058,-3.0003 2.5187,0.0412 2.2434,-3.5721 4.9544,-3.4517 0.1264,-3.1405 2.7608,-3.1288 4.9558,-2.6993 -0.3148,-0.45416 4.0784,0.89461 2.8999,-0.44926 1.6315,2.8708 7.1979,0.13792 8.8514,0.59972 2.1285,0.56572 5.6625,-0.35714 7.1605,0.44904 2.2588,-1.8586 0.9375,-1.8993 3.2932,-2.0996 0.4653,-2.6577 -0.071,-5.5996 4.1223,-4.6504 3.2402,-1.059 7.4561,-1.6159 10.955,-2.5281 z" id="path1167" />
                        <text id="svgRegions" x="1270" y="900">
                        <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Bolnisi' : 'ბოლნისი'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'qvemo-qartli/marneuli.php?lang=en' : 'qvemo-qartli/marneuli.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group3-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1405,840.59 c 4.7595,0.96668 9.7277,-0.0375 14.12,2.0824 3.7951,0.96705 7.7059,2.6248 8.494,6.9183 2.1179,0.92445 4.7612,1.5621 6.4529,1.994 -0.268,4.624 5.5709,5.0614 6.737,8.2135 2.3486,3.3002 3.7305,7.3679 0.9759,11.002 -1.7768,3.8398 -0.3201,6.3868 -2.2866,9.7794 0.9679,5.9196 8.3899,7.7266 12.15,11.805 -2.0223,4.3379 2.2834,8.3909 1.0469,12.639 -2.6672,2.5934 -1.1948,7.3965 2.6167,7.9371 1.1454,2.201 4.4344,1.9308 3.6877,5.1385 1.7886,1.5671 5.1224,2.6382 3.8991,5.7012 0.9071,0.93102 5.2012,6.3938 1.9064,5.0352 -3.0348,-2.6088 -6.7253,0.11026 -9.7923,0.59376 -0.041,1.5873 -1.6757,5.276 -7.1543,7.4238 -3.2126,0.86886 -5.4042,0.37584 -6.2485,2.9298 -1.2422,3.3629 -6.5755,2.018 -6.9057,5.258 -1.001,1.8512 -3.98,1.5252 -5.395,2.6994 -1.8096,1.2766 -0.2547,5.9949 -3.9094,5.6995 -0.5787,2.1708 -2.3173,6.9606 -4.5235,3.6017 -1.4144,-1.9529 -2.9329,1.9317 -5.2535,0.74224 -1.4144,-2.1722 -5.1161,0.56417 -6.4498,-1.3496 -0.6542,-1.6188 -1.1561,-3.4213 -2.0294,-5.1797 -1.6977,-2.1262 -3.7843,0.7089 -4.4165,1.586 -2.6936,-0.24711 -3.3597,-3.9649 -6.6426,-2.8486 -2.1548,-1.041 -4.6142,1.5395 -7.0661,0.55293 0.5,-0.75009 -0.1241,-2.4891 0.1445,-4.3026 -0.1084,-0.4173 -0.965,-4.0265 -1.9554,-3.1504 -0.7872,-2.1243 -3.6205,-4.5992 -6.108,-2.5569 -1.4363,1.9952 -4.2823,3.2716 -2.8522,6.7154 0.602,2.7652 -0.2699,5.1477 -0.01,7.0922 -2.926,0.7588 -1.7773,6.9397 0.6096,7.4496 0.9283,2.0375 1.1511,4.4342 3.1526,5.2503 1.3331,1.6667 5.4008,3.2354 7.6534,2.1016 2.9927,-0.55088 2.2009,3.813 5.3932,2.256 0.058,3.2844 2.9744,2.0421 5.053,2.242 0.2945,-2.1212 4.7526,-1.9179 3.4989,0.60166 3.5387,1.2129 -0.7148,2.5045 -2.5354,4.1719 -3.6992,0.62602 -6.5566,-1.6865 -10.115,-2.4316 -0.3899,-2.6694 -4.189,-2.056 -4.4494,-2.4416 -0.4255,1.9553 -4.0688,-1.5455 -5.3055,0.742 -0.01,-1.6489 -2.7435,-0.90088 -2.7014,-0.59942 -1.3109,-1.9798 -0.3814,-4.3677 -2.9966,-4.9417 -1.2512,0.17053 -3.0709,-0.0182 -1.75,2.7988 0.067,0.63906 -3.094,-1.4764 -3.5926,0.50013 -2.9411,0.32213 -2.5294,0.50108 -4.7527,-0.74999 -1.674,0.938 -6.1413,-0.6755 -5.4678,2.8516 -2.8974,-1.5788 -3.0448,6.0371 -5.1464,3.256 0.2612,-2.538 -0.8758,-4.2907 1.4612,-5.4064 -0.095,-1.8789 -1.6336,-3.4219 -3.3585,-1.5997 -2.9162,-0.29413 -2.7921,2.7928 -4.053,1.3497 -2.8481,1.0869 -2.8827,0.48538 -6.473,1.1993 -4.6879,-1.5609 0.083,-5.6516 0.9805,-8.2755 0.6065,-2.6123 -2.5368,0.64526 -3.7972,0.4766 -1.5843,-0.34533 -2.5312,-0.44423 -4.3542,10e-6 -2.1772,1.7899 -7.174,1.1406 -8.903,-0.75 -2.2801,-0.80288 -6.7583,-1.9751 -7.4665,2.0999 -2.2954,1.4719 0.3967,3.8807 -0.3016,5.8458 -0.7807,3.249 -4.4196,1.5289 -6.3497,2.6971 -1.3121,-3.1111 -2.6898,1.1891 -4.3479,1.3574 -2.3642,1.621 -0.8817,3.1067 -3.7703,1.8533 -1.231,1.7911 -1.9748,4.7698 -4.2727,2.6465 -2.3801,-0.60013 -2.517,-2.4484 0.3648,-2.75 2.6597,-1.5249 -3.6748,-6.8274 1.9751,-6.5997 0.7318,-4.1758 -1.1777,-1.25 -4.7272,-2.8773 -3.1186,-4.0575 -5.4112,-14.126 1.6988,-14.974 5.2703,3.7613 12.71,-2.725 12.306,-7.9414 -2.5577,-4.6138 3.1972,-4.6166 3.9616,-8.2676 0.5979,-4.9622 4.1885,-8.435 4.3027,-1.6152 0.6826,3.6785 4.6868,-0.68395 0.674,-3.1172 -1.3584,-3.6589 2.6389,-0.0949 1.7794,-5.1505 1.3283,-0.47498 -1.2827,-4.4244 0.4289,-2.2557 3.0747,-0.16132 0.3836,8.5603 4.6785,5.5508 4.0584,-2.4431 0.6917,-10.247 6.6908,-9.3008 5.1645,1.0692 2.5491,4.2552 0.662,6.9492 -2.4169,3.7136 -2.5787,10.269 1.9181,11.5 5.5536,2.3076 4.1586,-6.2761 7.7586,-8.3496 -2.3445,-4.6462 -0.936,-6.1848 3.5361,-9.5143 1.1968,-2.4184 4.4705,0.84296 4.7757,-2.9799 0.08,-4.0609 4.892,-5.3351 6.1431,-8.3576 -0.4486,-1.2961 -0.3296,-5.552 -0.7502,-5.2988 2.1837,-0.90299 2.1261,-3.3735 1.202,-5.2501 1.8736,-1.4135 3.9005,-2.8704 5.3428,-4.6511 2.7725,0.70214 3.7078,3.2973 6.948,3.1506 3.1555,0.36974 1.6269,-3.701 0.1016,-4.2989 -0.3774,-2.2043 -0.7897,-3.4989 -4.01,-3.1504 -2.119,0.74556 -5.0499,-1.0539 -6.504,-2.4007 -2.3263,-0.5733 -3.6422,0.80198 -4.053,-1.3498 -0.6518,-0.69969 -4.3101,-0.69496 -2.1035,-2.0003 0.9271,-1.709 3.0579,1.5112 4.3421,-0.59979 -0.035,-1.4215 5.6617,-1.8923 3.7011,-3.5998 0.3064,-2.8566 -2.1395,-6.6813 -2.476,-9.8518 -0.2274,-0.2722 -1.6169,-3.559 -3.9803,-4.8011 -1.3536,-1.5833 0.3617,-4.7424 -1.682,-6.0488 2.1714,-0.38777 4.2883,-1.0115 5.74,-2.2525 0.4177,-2.3384 2.0052,-5.1535 3.2742,-2.3986 2.2143,1.079 1.1009,-0.76123 4.4462,0.75005 0.9927,-2.5808 3.6937,-4.5614 5.1248,-1.9493 2.9983,2.5276 -1.0473,-3.4674 0.4795,-4.3516 0.7073,-2.2145 2.9625,-5.0626 4.6725,-5.4943 1.9929,1.3573 5.3285,5.3174 6.9682,1.6914 4.4086,1.885 10.04,-0.617 11.831,-3.9965 2.4348,-0.49505 2.5302,-2.6681 5.8542,-1.9493 0.839,0.16061 1.2646,-0.0595 1.8282,-0.15125 z" id="path1165" />
                        <text id="svgRegions" x="1367" y="920">
                        <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Marneuli' : 'მარნეული'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'qvemo-qartli/dmanisi.php?lang=en' : 'qvemo-qartli/dmanisi.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group3-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1207.7,839.15 c 2.637,0.34855 2.7027,3.2765 5.0269,4.3018 0.7621,1.4105 -1.3465,2.6811 0.6097,3.7505 1.5598,1.0473 2.6981,2.697 3.4366,4.4949 0.1968,0.87543 1.7345,3.9992 -0.9109,3.649 -0.4216,2.491 -2.6347,2.7734 -2.8635,5.4007 -2.9038,0.56639 -0.038,4.0073 -2.0901,5.543 -0.6407,1.457 -1.5818,2.5846 -0.3017,3.7583 -2.1534,1.4811 -0.6439,5.7087 -0.4289,8.5002 1.9152,0.56522 3.5287,1.9865 5.7767,1.6488 1.0036,-2.861 2.872,2.3887 5.2534,0.15008 2.6251,-0.48836 -3.1779,3.8427 -2.3548,3.9493 -0.058,3.3808 -5.7512,1.0377 -4.2009,5.5703 -1.7602,2.9866 -1.7671,1.8264 -4.398,0.455 -4.6952,-0.97929 -3.1954,5.7564 -1.5431,7.9454 1.9207,2.884 4.0552,0.0895 5.0921,4.3097 2.7492,4.5211 7.7601,-5.5668 7.6701,2.8904 2.1761,0.1856 5.83,-0.63703 6.2999,2.5851 1.5561,2.2825 5.6565,0.17061 5.4796,3.0551 1.4105,3.3336 3.9719,0.5049 6.7426,2.8398 4.4921,-1.3702 9.6528,-1.6422 12.802,-4.8613 0.2838,-1.9056 3.9049,1.4502 1.0046,0.86152 -1.4865,1.4469 -1.2289,4.4756 -3.4058,5.2503 1.5525,1.1842 3.5331,3.5674 1.0534,4.1996 0.4331,3.653 2.447,2.7204 5.5175,2.164 0.9731,2.9224 5.4045,0.90112 2.9665,5.5097 2.3563,1.3363 11.307,0.86015 6.5767,6.4748 -5.7022,2.3789 -2.8615,8.9204 -8.2624,11.311 -6.8575,2.9698 -3.5424,8.6938 1.1044,11.84 4.9121,2.9041 -4.9111,4.7384 -3.9908,10.526 -1.5462,1.5114 -1.7513,5.0815 -4.6795,2.5742 -3.586,-0.13201 -6.0077,-4.0824 -9.2361,-1.2012 -4.7932,1.1727 1.9915,5.0675 -1.0033,7.2286 2.1277,4.6263 -3.635,1.1131 -5.402,1.0155 -0.7185,-1.691 -2.8158,-3.2902 -4.9,-4.3867 -0.5526,1.6707 -4.1469,0.53537 -5.7545,1.2443 -0.7878,0.48685 -3.1563,-1.7497 -4.7874,1.4e-4 -2.5575,-2.0204 -5.0118,-2.7641 -6.1616,-6.0009 -2.0454,-3.0804 -3.9708,-1.3612 -6.9849,-2.2501 -3.8484,1.7449 -7.7272,-0.80391 -10.877,-3.5625 -4.0069,-0.98084 -0.9366,4.1871 -3.6914,5.0625 -1.0676,1.9026 -1.2771,3.7844 0.6346,5.8009 2.8186,2.1222 -1.5724,-0.0984 -1.8456,4.0918 -1.1952,1.5694 0.1284,4.4725 -0.1926,5.4081 -1.3798,-0.26704 -3.3515,-3.3721 -3.3776,-0.30129 -3.6743,0.74964 -5.5948,1.2616 -8.4946,0.30078 -4.2424,-0.79744 -8.5053,-1.6468 -13.134,-4.5 -3.2768,1.3839 -6.6678,3.0557 -10.066,3.75 -4.1856,1.6021 -9.0123,0.39483 -13.567,2.4007 -3.7572,1.9751 -7.5602,2.5947 -10.65,5.8496 -5.1754,3.5434 -6.0379,-2.9327 -2.496,-4.877 -0.6775,-4.4922 -0.6299,-9.7511 -3.0762,-14.171 -1.6812,-4.098 -1.9452,-9.2121 -6.5858,-11.962 4.5838,-8.1004 -6.8756,0.68079 -1.3262,-8.1426 1.1349,-4.7616 0.8241,-9.6315 2.9414,-14.258 1.9858,-5.0002 8.9417,-6.6242 5.1367,-13.018 -2.239,-4.001 -3.7523,-8.2901 -5.8339,-12.219 -2.6653,-4.0066 -0.4881,-11.907 -5.92,-12.99 -8.0501,-2.7112 -3.5327,-7.1922 -0.6137,-12.312 2.7128,-5.0397 -1.2171,-11.702 -3.8081,-14.302 2.3737,-0.36898 1.8362,-3.3471 4.1977,-3.5999 1.3711,0.37546 2.9043,-1.8126 5.2558,-1.1993 2.5501,-1.5022 7.403,-0.35579 7.9816,-3.9318 1.6143,-2.6166 1.3029,-3.4529 3.1105,-3.4199 0.9752,-1.2365 3.9631,-1.029 5.4372,-3.0001 1.3879,-0.89137 4.0494,0.14928 5.4047,1.35 3.349,0.82151 5.5435,5.3881 10.31,4.0512 1.5862,-0.46352 5.0822,-3.511 6.0483,-0.94336 2.0805,-2.0449 2.8842,-0.72891 3.7441,1.6935 2.7806,2.7551 4.4833,-4.0434 3.2559,-3.4493 2.3534,-0.22055 3.2907,-1.7199 5.4004,-2.8478 2.4467,-1.2767 3.4145,-4.1712 6.3457,-3.7523 1.229,0.34309 2.3394,-0.0158 4.0455,1.0491 2.2848,2.1111 4.2804,-2.7151 5.6555,-3.9006 0.6216,-2.4525 0.1392,-5.2127 2.3987,-5.543 1.5734,-0.32661 4.2859,-4.4948 6.6461,-3.2386 2.3118,1.8137 5.1713,0.6947 7.6395,-0.36523 2.1124,2.6578 2.8988,-1.4644 5.2147,-1.3007 z" id="path1163" />
                        <text id="svgRegions" x="1150" y="925">
                        <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Dmanisi' : 'დმანისი'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'qvemo-qartli/walka.php?lang=en' : 'qvemo-qartli/walka.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group3-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1111.8,758.84 c 3.1241,-0.55384 2.12,3.8395 5.7367,4.0488 3.0293,1.4948 5.8743,0.78094 8.705,0.90417 1.896,2.0987 4.963,2.3629 6.7721,0.1465 2.51,1.2219 6.2068,0.33791 8.8829,0.66014 2.0338,-0.0401 4.248,-2.3474 6.959,-0.96091 2.9154,0.0554 6.078,-2.6002 7.3187,1.5823 2.6306,1.1107 5.7551,-0.55906 8.1001,0.21871 2.6211,2.2522 5.8764,0.45818 8.9686,1.9551 4.184,-1.1421 7.9006,-2.2706 12.049,-2.2558 2.5804,-2.614 6.0499,0.73101 9.2465,-1.8967 2.2278,-0.27236 4.648,-0.96459 8.1142,0.0976 -1.3302,2.732 -0.7492,5.1818 -0.9692,8.6174 0.1265,3.2842 3.0367,3.3661 3.3474,5.7812 2.4525,3.1186 0.4079,7.2118 4.5999,5.8518 1.8483,1.3836 4.3743,-3.2012 5.3969,-1.1504 -0.9502,2.2934 -5.9048,0.68047 -3.8232,4.5808 -1.0831,5.6806 -0.1541,3.8572 -4.7569,3.5198 -4.4619,-2.1438 -0.9078,6.159 -4.767,7.0512 -1.2565,2.8154 3.0809,2.4112 2.5593,2.9515 2.0163,1.2765 4.0384,3.3094 4.7869,7.2001 4.3475,-1.0262 -0.1319,3.4773 1.7804,5.6316 -1.4878,1.2541 1.0374,2.3631 -1.5145,1.168 -0.6154,-1.5696 -3.9483,1.3074 -5.2476,-0.30091 -4.1301,-0.71126 -3.9206,1.9933 -1.375,4.354 4.1671,3.4138 -3.4976,6.5632 -1.4383,9.6451 2.6307,1.293 6.4002,2.6269 4.802,6.1039 3.6987,1.7209 1.5451,4.3072 -0.7616,4.7992 -1.3386,1.9625 -2.2371,-0.34659 -4.2021,0.75026 -1.7989,0.91957 -2.9473,0.5768 -5.1363,0.68124 -2.0798,-3.6579 -4.775,1.3596 -7.5975,1.4183 -1.5454,1.1767 -3.8728,2.1771 -3.1504,5.3926 -0.7813,2.7093 -2.1652,3.7924 -3.9437,5.7016 -2.6936,-3.118 -8.8123,-2.4487 -10.307,0.90606 -1.1174,1.6951 -4.4327,1.2169 -4.9381,3.0001 -0.532,1.3471 -3.6863,0.0568 -2.8518,2.801 -0.8682,3.2527 -1.0371,1.6152 -2.005,-0.40053 -1.1942,-1.9108 -3.8631,0.0143 -6.2507,-0.45135 -3.1291,1.0014 -6.5547,3.3283 -9.5014,-0.14844 -2.1532,-2.0267 -3.7594,-2.626 -6.1548,-3.4554 -0.1664,-0.51172 -4.7513,-0.93558 -5.5044,0.90431 -2.2174,1.9062 -6.2402,1.0189 -6.8083,5.0314 -1.0575,4.2162 -5.6499,3.2441 -8.7368,4.4826 -1.5927,-0.47664 -3.9759,0.68283 -5.415,1.4375 -2.3966,0.3334 -2.293,3.1994 -4.3367,3.8986 -4.316,1.7526 -1.4829,-5.0633 -3.5712,-7.2983 -1.9799,-4.9583 -1.8103,-12.724 -8.7788,-12.569 -0.8877,-3.0613 -2.7343,-7.2558 -6.55,-5.0312 -3.8615,3.3875 -10.018,-0.19453 -14.02,0.29879 -4.0634,-2.2027 -10.046,4.8321 -13.193,2.6818 -4.3609,-0.31777 -6.7558,2.2488 -9.7156,3.8179 -3.9067,-1.8505 -4.2009,-3.4 -6.5054,-6.0877 -5.7287,-1.7963 -0.7457,-8.5151 2.9908,-9.3488 0.9513,-4.8439 1.0759,-8.655 3.6538,-12.054 -0.3938,-4.6114 4.0273,-10.589 1.5552,-15.484 2.6302,-3.7103 0.6118,-7.2616 1.7321,-10.922 1.2902,-5.6499 5.4394,-11.006 3.4493,-16.395 1.0558,-2.9748 2.0438,-6.3963 4.6695,-8.2578 4.8136,0.31274 9.0651,2.0027 14.274,2.4044 2.4743,2.6176 5.8185,3.7136 9.0486,5.6057 2.679,-1.116 6.9159,1.51 4.85,-2.4101 -2.1565,-2.3332 1.1954,-6.0525 4.5048,-6.049 2.4038,-3.1765 6.6342,-1.3416 9.9573,-3.3479 -1.761,-3.7942 -1.5049,-7.5313 1.9884,-9.9786 0.8959,-0.66368 2.1622,-1.2726 3.0293,-1.8298 z" id="path1161" />
                        <text id="svgRegions" x="1120" y="810">
                        <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Tsalka' : 'წალკა'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'qvemo-qartli/tetriwyaro.php?lang=en' : 'qvemo-qartli/tetriwyaro.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group3-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1244.5,752.24 c 3.4045,0.39287 1.1185,3.3416 2.7177,4.5435 0.5147,2.246 1.5602,3.99 3.6084,4.6154 -0.5414,1.5182 0.9793,3.087 2.551,3.9005 1.1325,2.6528 5.1574,-2.3326 5.2465,1.7481 1.8749,-0.55132 4.2145,0.53185 6.5882,-0.10343 2.3413,1.0308 5.9176,3.2724 8.9567,0.29683 1.7815,-1.9556 5.4975,-0.67897 7.1965,-2.6997 1.2773,-0.76215 2.4133,-3.4043 2.4909,-4.6504 1.8748,1.3317 4.7455,2.3361 6.4439,0.15021 1.2416,-0.22028 4.0387,0.80023 4.9606,-0.29886 2.6166,0.85869 3.8209,-0.26075 5.7041,1.5002 3.5635,-0.58372 6.065,0.81847 4.6004,3.8558 0.8622,2.0866 3.1257,4.3009 4.6506,6.3437 2.3355,0.33604 3.8054,-2.6437 3.3067,0.92746 2.0405,2.1465 2.4073,3.8583 4.6551,4.6275 0.01,1.0541 2.9028,1.6572 0.1442,2.4458 -1.2898,2.6968 1.7214,4.661 3.0041,6.1506 -1.9169,0.80765 -6.794,1.3686 -4.174,4.2988 -0.044,2.6016 1.7992,3.4656 2.9986,5.102 0.4216,1.8472 1.8666,2.8387 2.3906,4.799 3.9197,0.7824 2.8891,10.78 7.9918,9.1506 3.3386,-0.85721 5.8673,-0.83359 7.7897,-3.3009 0.3292,1.9759 5.2872,1.5241 7.6344,1.0509 3.9042,0.25183 9.7268,0.42716 11.874,4.049 3.0879,0.40539 3.5477,2.8412 5.3986,4.9027 -1.0054,3.8273 5.2766,4.6536 6.0012,8.1076 0.6406,1.831 3.6113,3.4567 4.956,5.5979 2.299,2.9016 8.0013,3.9435 10.497,5.6934 1.3585,0.90108 3.7959,1.1532 1.2623,3.0255 -1.1857,2.8759 1.0112,6.729 -1.6267,8.1171 -1.2228,2.5661 -4.8091,-2.5632 -6.6499,-3.1484 -2.2532,3.3584 -5.9708,6.3196 -5.4667,9.3048 -3.7734,-1.3218 -3.3153,4.2142 -5.9854,2.6997 -2.2208,0.20206 -2.7416,-2.7904 -5.4324,-1.0489 -0.4361,2.9906 -2.072,5.0696 -4.9575,4.8013 -0.2307,1.4039 -4.91,0.09 -2.4027,2.1994 2.4633,1.6386 1.426,5.7608 -1.5821,5.8986 -2.8353,1.6624 -5.9403,1.4055 -8.0431,-0.0606 -2.4962,-1.2399 -2.7349,-1.5691 -4.7385,-0.38867 -2.5986,-2.9675 -7.4499,-2.5291 -11.503,-3.0003 -1.1148,1.7534 -0.5968,1.8217 -3.0901,1.9512 -1.0022,0.14715 -3.1116,-1.1897 -3.5924,0.94117 -0.8639,1.3898 -2.1986,3.3958 -4.0936,1.0062 -2.3948,-0.39882 -3.6753,-2.0757 -6.1585,-2.6974 -1.5457,-2.2966 -2.7384,-5.2598 -5.8033,-2.5509 -3.7479,1.5875 -5.5576,-1.1343 -8.8774,-1.9497 -2.343,-2.9044 -6.7202,0.51847 -10.016,0.30131 -2.3529,1.163 -7.2329,-0.0915 -8.0129,3.1484 0.2905,3.0137 -1.0706,0.99972 -2.7834,3.1446 -1.539,0.74275 -3.382,1.016 -5.9113,1.3497 -1.0117,-1.5129 -2.7468,0.1128 -4.1506,-0.14249 -1.775,1.2716 -4.3466,0.25066 -5.7474,-1.051 -1.6624,1.2345 -2.6868,0.0922 -4.9892,0.15043 -1.7103,0.96869 -3.6052,-0.0201 -3.822,2.8419 -1.281,0.96471 -2.3714,1.6858 -3.1566,3.4571 -3.0765,0.41418 -3.9642,3.2929 -7.2456,3.6002 -2.0586,-1.6365 -1.5726,-0.4291 -4.158,-1.7989 -0.6581,1.135 -3.2948,1.0528 -4.1165,-0.75033 -2.3968,0.42772 -3.8928,-0.63976 -4.9065,1.9494 -0.6017,1.5582 -3.3274,1.0181 -3.3204,3.1508 -2.4209,-0.78755 -5.0897,1.2566 -6.2751,-1.6506 -2.5073,0.76118 -1.5557,1.3923 -4.4544,0.15068 -3.0807,0.55263 -2.0209,-4.8705 -1.9778,-6.5005 1.9427,-0.79887 -0.5658,-4.3804 1.6501,-5.5488 1.0802,-1.6871 -0.8126,-4.0431 1.349,-4.2013 0.5084,-1.7632 1.8118,-2.6624 2.2634,-4.1996 1.6145,-0.85763 3.5632,-2.7574 1.9448,-4.9434 1.6315,-0.361 -2.1585,-2.423 -1.3475,-4.1567 -1.1183,-1.5932 -2.1443,-4.6901 -3.0247,-6.4513 -2.5204,-0.0222 -2.0347,-3.1402 -4.4674,-3.7072 1.4888,-1.35 -2.8797,-4.5712 -0.9434,-4.291 -1.7361,-1.5804 -0.7672,-4.4312 -3.7082,-4.9707 -1.0571,-1.5598 -4.4726,-1.2552 -1.9515,-3.5784 2.6856,-2.4252 2.7876,-6.4173 -0.2301,-8.8033 -1.8252,-3.408 3.5043,1.2692 2.9907,-0.79882 2.3819,-1.7072 5.804,2.1269 6.8268,0.30078 0.2972,-2.2918 -2.3685,-5.6907 0.3064,-7.3506 -0.1897,-2.7496 -3.6514,-1.6182 -3.7488,-4.6709 -0.6979,-3.4764 -3.6132,-3.4562 -4.3512,-5.8874 -2.5162,1.4374 -1.0128,-0.94529 -0.01,-2.5843 -0.9757,-4.0134 2.4573,-5.4429 4.028,-3.0606 6.1634,1.0399 0.8548,-9.3582 6.9279,-8.1001 0.029,-1.7776 4.7785,-1.175 2.104,-3.5513 -2.1353,0.18347 -4.5805,-0.84125 -6.397,1.4922 -3.3301,1.3167 -4.4187,-3.8546 -5.5979,-6.6432 -0.5945,-1.5374 -3.1534,-1.8764 -2.997,-4.4566 0.4625,-2.741 -0.3724,-6.202 3.6491,-5.7364 2.312,1.2434 5.2127,2.1914 7.7427,0.14477 1.0361,-3.6892 5.2912,-0.92298 7.4901,0.29869 2.6023,-0.5598 4.6153,-1.2398 5.3114,-4.0511 1.3162,-3.1025 6.4254,0.15493 9.2481,-2.5491 2.2718,-0.22115 -0.4597,-5.0497 3.0968,-4.5001 2.9071,0.0916 2.7403,-2.5279 5.4464,-2.6991 z" id="path1159" />
                        <text id="svgRegions" x="1230" y="835">
                        <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Tetritskaro' : 'თეთრიწყარო'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'qvemo-qartli/gardabani.php?lang=en' : 'qvemo-qartli/gardabani.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group3-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1423,720.55 c 5.0412,0.75988 11.03,2.7117 15.802,3.1995 2.7161,2.7796 9.1126,0.1674 12.117,2.2441 7.8671,-0.37175 9.9833,7.7746 11.4,13.981 2.8771,4.5096 -1.212,6.0294 1.2539,8.1288 2.8298,0.89823 -0.3408,4.139 3.2466,5.3457 0.9911,2.4588 4.7518,2.4029 3.5996,5.4609 -0.8968,3.2074 5.8019,2.7543 5.5125,2.9336 2.5605,0.0966 3.9143,-1.0606 5.9964,-0.90058 2.0559,-1.9525 3.0764,-0.65726 2.5984,2.1504 -1.394,3.2215 -0.078,5.0308 2.9998,4.6659 -0.024,3.7835 4.8151,0.8827 4.7239,4.1837 1.4599,0.45585 -2.7926,2.955 0.065,3.4025 1.1592,1.5511 3.1868,1.3976 0.9161,3.5979 2.6186,0.20665 5.5189,1.9261 4.4243,4.395 -3.0292,-1.493 -0.3009,2.0426 -4.6041,-0.89653 -0.5865,1.3148 -2.9391,1.8611 -1.659,4.3695 0.4291,4.2418 2.3575,9.6688 5.8952,11.482 1.9131,4.4495 0.8499,11.317 -4.3958,13.1 0.147,4.9452 -6.1065,4.4277 -9.1113,1.9492 -3.5563,-2.9941 -3.4848,5.0181 -7.3789,2.1113 -4.1787,-2.4157 -1.6053,2.0278 -3.2774,2.8007 -2.0292,2.8659 -0.8348,7.7364 3.6496,6.5878 3.2278,-0.77412 5.3869,-0.1803 3.9729,3.5177 -2.8385,2.7211 -7.7643,4.2333 -9.9486,8.2816 1.463,3.1276 3.8872,5.3721 3.8068,8.9004 4.9127,-0.5694 10.664,-3.8194 13.042,-8.8459 1.2341,1.8746 3.2314,4.5841 5.202,6.5548 0.2818,-2.7189 2.7867,-4.7241 3.5639,-7.3322 0.071,4.5188 6.3405,5.3971 4.7328,9.5215 2.6175,3.7344 -6.2974,3.3289 -2.0741,7.0957 -0.1654,3.4558 -5.4371,0.65509 -5.7269,2.5568 -0.793,-0.0582 0.1991,4.9137 -0.75,6.6932 -2.4181,6.4342 5.2794,5.4957 7.6816,10.059 3.1167,3.2828 13.284,0.43963 11.056,5.923 -2.2668,8.3334 -11.291,12.704 -17.714,16.778 -2.5803,-1.4616 -6.3145,-4.5417 -7.321,-0.51011 1.0633,5.1553 -6.3558,8.5969 -8.5996,12.955 -4.7309,5.3953 -8.8946,11.548 -13.796,16.133 1.6889,-4.2136 -5.264,-3.9989 -4.1958,-7.883 -2.2654,-1.3858 -3.8445,-3.5609 -6.449,-4.2812 -1.2527,-1.8003 -0.8254,-4.439 0.5998,-6.0176 0.4304,-3.4199 -0.9561,-6.5439 -1.8884,-9.3535 2.1526,-3.4892 -0.8457,-5.2452 -3.3614,-7.1035 -3.1763,-1.5714 -7.8991,-4.5531 -7.8873,-8.6465 2.4213,-2.6692 -0.048,-6.2064 2.4356,-9.5214 2.2536,-2.1172 -0.5656,-6.4065 3.0548,-4.373 1.7079,-2.0501 -0.6957,-3.2998 1.7929,-4.9474 1.298,-3.0666 1.4326,-0.33068 4.3508,-2.6993 0.6301,-2.6349 4.279,-2.3497 5.4444,0.1464 2.2697,1.2262 5.453,-2.0077 2.7859,-3.885 -2.036,-1.2418 -1.2676,-2.9984 -1.4989,-5.3652 -0.7395,-0.34618 -2.6979,-3.936 -2.727,-1.0508 -1.9892,-1.1173 -3.138,-3.8126 -4.9994,-5.6466 -3.428,-2.1021 0.2446,-5.6204 -2.7594,-7.5527 -0.4652,-3.0803 -4.8152,-2.8405 -7.5208,-4.8281 -3.5401,-0.49541 -7.2234,0.51375 -9.6525,-1.6237 -1.0419,0.61614 -4.1709,-0.44797 -4.4263,-2.8497 -3.3502,0.16451 -4.7883,-3.5234 -7.6493,-3.4493 -3.1264,-1.1536 0.9361,4.5917 -3.6928,4.9492 -2.819,0.0657 1.3003,7.3278 -1.4049,4.3436 -0.145,-2.3658 -0.6272,-4.2412 -3.4805,-2.8436 -2.1508,0.1044 -4.1816,-1.7335 -5.5476,-0.75038 -3.3367,0.51018 -2.3003,2.7832 -0.6837,5.2519 1.334,2.0397 -0.1624,5.3263 -0.8167,6.5996 -2.4027,0.004 -4.4523,-0.30919 -5.6002,1.3496 -1.9219,0.2862 -3.0872,3.6117 -6.5722,5.0023 -2.6178,0.26818 -6.5997,0.82749 -4.774,-2.5663 -1.944,-3.2925 2.5946,-6.2676 0.883,-8.1641 -2.682,-2.2196 -8.0942,-3.3186 -11.514,-5.8223 -2.3953,-2.4543 -5.4997,-5.2416 -7.4798,-9.1511 -3.6904,-0.71737 -4.0186,-4.1006 -5.4569,-6.8107 -1.0411,-3.2239 -4.2667,-2.9507 -6.0908,-5.1921 3.5898,-0.78604 4.0818,3.7066 7.7246,3.7033 -0.7011,-3.4152 6.3214,0.47235 6.8757,-1.502 2.8535,-0.4296 2.6541,3.8818 5.6526,2.7013 -0.4342,-2.786 4.1165,-2.523 1.9556,-5.2015 -1.1658,-0.70864 -2.7124,-3.416 -2.2564,-4.3987 2.5091,-1.6817 5.0562,-3.0445 9.1897,-2.4006 2.8605,-0.64093 3.7575,0.37696 6.7179,0.44922 1.9546,-0.0229 3.8206,1.3376 3.7973,3.5585 1.7198,-2.3523 3.5046,0.46134 5.4028,0.69137 -2.9555,4.191 6.463,0.0926 5.1002,3.9005 -0.9725,1.8443 -2.3103,5.1414 1.2989,5.9062 0.089,-2.8812 4.1518,0.41079 5.3331,0.6445 3.8567,-0.87704 -2.7761,-5.2702 0.5108,-6.602 0.6005,-0.96968 3.9184,-3.0854 3.9555,-0.1482 3.066,0.0112 3.4625,-2.1249 6.4048,-1.9513 1.2779,-1.9792 -1.6021,-4.7025 1.5008,-4.1992 0.7733,-1.5401 3.8176,-1.6121 3.8016,-3.4494 3.6547,1.136 6.0806,-1.9298 5.0508,-5.1015 2.5615,-0.66374 0.1876,-5.2721 3.6118,-5.2502 1.9332,-0.47504 1.2394,-2.652 3.1994,-4 -1.3934,-0.48657 0.017,-4.0098 -1.0058,-4.6992 0.4947,-1.8072 -2.3132,-3.8147 0,-4.6504 0.3634,-3.1913 -2.2536,-6.0759 -3.856,-8.758 -0.7135,1.4968 -1.8354,4.1431 -3.7354,3.6449 -3.2628,-3.7489 2.3333,-2.4068 1.4263,-6.1542 -3.5439,-2.2809 -6.7964,-3.7816 -9.452,-4.1328 -1.4152,-1.1182 -4.267,-1.6446 -4.549,-1.7988 -2.7023,-0.0614 -2.4193,-2.5985 -4.901,-2.25 -2.5194,0.14848 -2.3007,1.2494 -4.7502,0.29883 -0.4358,1.8206 -1.2364,4.121 -3.1992,2.4004 -2.4836,0.55016 -5.0472,0.80949 -7.495,-1.0998 1.5324,-1.1638 3.3194,-3.7162 1.422,-5.6506 -1.7682,-2.442 0.3726,-6.2366 0.2208,-7.5488 4.3561,-0.14813 6.3791,-2.883 6.2452,-7.301 -0.3479,-2.2551 -3.2478,-3.21 -4.2061,-5.5512 -1.6168,-0.01 -4.2147,-1.8002 -4.5008,-1.8498 -0.353,-3.4686 4.0265,-1.5644 4.3974,-1.9494 1.4426,0.82634 3.2516,3.295 4.5103,2.2502 4.6355,0.98528 2.7066,-4.7584 7.3051,-5.4008 3.2811,-2.3736 5.4569,-2.5149 7.1773,-4.9874 z" id="path1157" />
                        <text id="svgRegions" x="1376" y="825">
                        <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Gardabani' : 'გარდაბანი'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'qvemo-qartli/rustavi.php?lang=en' : 'qvemo-qartli/rustavi.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group3-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1420.7,823.23 c 1.9327,2.978 5.758,2.932 7.7694,6.1094 2.7716,-0.58276 4.7075,2.5972 7.6516,1.7992 3.9013,-0.89172 8.5543,1.3584 11.083,3.446 2.8732,2.4343 -0.082,4.7788 2.5264,7.48 1.7985,2.4702 4.1089,5.4535 6.1408,7.7329 1.477,-2.2988 3.5081,1.4177 1.5918,3.0121 0.7333,1.6826 4.9456,4.3745 1.3033,4.4804 -1.4486,-1.5462 -6.3398,-3.75 -6.7756,-0.30085 -1.2653,2.2752 -6.4205,-0.96279 -4.5081,3.0157 -1.9153,1.1351 -2.0799,3.1047 -1.8322,4.9339 -3.0917,-2.0813 -3.5859,-8.1781 -7.8629,-9.2993 -3.7933,-0.80907 -1.0231,-6.6923 -4.9596,-5.5508 -3.2658,-0.0656 -5.4702,-2.285 -6.1327,-5.5492 -3.4477,-1.3427 -8.0221,-3.5835 -11.792,-4.3498 -3.4493,0.0157 -6.2046,-0.18825 -9.427,-0.60161 0.7494,-3.3516 1.0301,-6.7558 -1.5433,-9.7989 1.4579,-1.1129 3.1674,-1.3226 4.7026,0.40621 -0.4582,-1.716 2.8315,0.0339 3.503,-0.70703 0.2633,1.786 2.354,6.2934 4.5256,2.5336 -2.2562,-2.8802 -0.028,-5.6377 3.4512,-6.133 0.1088,-2.2983 -2.1397,-2.4276 0.5846,-2.6589 z" id="path8190" />
                        <text id="svgRegions" x="1423" y="846">
                        <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Rustavi' : 'რუსთავი'; ?>
                        </text>
                    </a>

                </g>
            </svg>
        </div>

        <table class="machveneblebi-right">
            <?php
            include('connection.php');
            $tableRight = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'key_indicators_en' : 'key_indicators';
            $query = mysqli_query($link, "select * from " . $tableRight);
            while ($row = mysqli_fetch_array($query)) {
                $keyIndicator[$row['ID']] = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? $row['keyIndicatorsEn'] : $row['keyIndicators'];
                $dataContent[$row['ID']] = $row['dataContent'];
            }
            $query = mysqli_query($link, "select * from `regions` where ID = 8");
            $row = mysqli_fetch_array($query);
            
            
            ?> <tr>
                    <th><?php echo $keyIndicator[1]; ?></th>
                </tr>
                <tbody>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[2]; ?> "><?php echo $keyIndicator[2]; ?><span class="float-right"><?php echo $row['Area']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[3]; ?>"><?php echo $keyIndicator[3]; ?><span class="float-right"><?php echo $row['Population']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[4]; ?>"><?php echo $keyIndicator[4]; ?><span class="float-right"><?php echo $row['liveBirth']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[5]; ?>"><?php echo $keyIndicator[5]; ?><span class="float-right"><?php echo $row['death']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[6]; ?>"><?php echo $keyIndicator[6]; ?><span class="float-right"><?php echo $row['naturalIncrease']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[7]; ?>"><?php echo $keyIndicator[7]; ?><span class="float-right"><?php echo $row['GDP']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[8]; ?>"><?php echo $keyIndicator[8]; ?><span class="float-right"><?php echo $row['GDPPerCapita']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[9]; ?>"><?php echo $keyIndicator[9]; ?><span class="float-right"><?php echo $row['UnemploymentRate']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[10]; ?>"><?php echo $keyIndicator[10]; ?><span class="float-right"><?php echo $row['EmploymentRate']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[11]; ?>"><?php echo $keyIndicator[11]; ?><span class="float-right"><?php echo $row['EmploymentRateIndustry']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[12]; ?>"><?php echo $keyIndicator[12]; ?><span class="float-right"><?php echo $row['AverageSalaryIndustry']; ?></span> </td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[13]; ?>"><?php echo $keyIndicator[13]; ?><span class="float-right"><?php echo $row['RegistredEntities']; ?></span> </td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[14]; ?>"><?php echo $keyIndicator[14]; ?><span class="float-right"><?php echo $row['activeEntities']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[15]; ?>"><?php echo $keyIndicator[15]; ?><span class="float-right"><?php echo $row['newlyRegistredEntities']; ?></span></td>
                    </tr>
                </tbody>
            <?php
            
            ?>
        </table>

        <?php include 'footer.php' ?>
        <script src="script.js"></script>
        <script type="text/javascript" src="lang.js"></script>
</body>

</html>