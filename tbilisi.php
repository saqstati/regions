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
    <meta property="og:title" content="<?php echo $lang['tbilisititlename'] ?>" />
    <meta property="og:description" content="<?php echo $lang['tbilisititlename'] ?>" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <title class="tr" Key="PAGE_TITLE"><?php echo $lang['tbilisititlename'] ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="samegrelo.css">
    <link rel="stylesheet" type="text/css" href="racha/racha.css">
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
                <p id="pagetitlename" class="tr" Key="REGION14"><?php echo $lang['tbilisititlename'] ?></p>
            </h1>
        </header>
        <div id="languages">
            <a href="tbilisi.php?lang=ka" id="ka" class="lang"><img src="images/ka.png" /></a>
            <a href="tbilisi.php?lang=en" id="en" class="lang"><img src="images/en.png" /></a>
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
                $budget[$row['ID']] = $row['budget'];
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
                    <th id="dziritadi1" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $basicInformation[1]; ?> <span class="float-right"><i id="classchange" class="dropdown_img_up"></i></span>
                    </th>
                </tr>
                <tr class="informacia1">
                    <td>
                        <?php echo $basicInformation[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/main%20information/area.xlsx' : '/regions/regions/10/dziritadi%20informacia/regionis%20fartobi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia1">
                    <td>
                        <?php echo $basicInformation[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/main%20information/number%20of%20settlements.xlsx' : '/regions/regions/10/dziritadi%20informacia/municipalitetebis,%20qalaqebis%20da%20soflebis%20raodenoba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi22" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $population[1]; ?></td>
                </tr>
                <tr class="informacia22">
                    <td>
                        <?php echo $population[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population/Number%20of%20population/Tbilisi.xlsx' : '/regions/regions/მოსახლეობა/მოსახლეობის%20რიცხოვნობა/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia22">
                    <td>
                        <?php echo $population[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population/Share%20of%20urban%20population/Tbilisi.xlsx' : '/regions/regions/მოსახლეობა/საქალაქო%20დასახლებაში%20მცხოვრები/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia22">
                    <td>
                        <?php echo $population[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population/Density%20of%20population/Tbilisi.xlsx' : '/regions/regions/მოსახლეობა/მოსახლეობის%20სიმჭიდროვე/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadiMain" title="" onclick="GetIdChange(); demografiaShow();" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $lang['demograph'] ?></td>
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
                    <td id="dziritadi3" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $birth['1']; ?></td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20live%20births/Tbilisi.xlsx' : '/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20birth%20rate/Tbilisi.xlsx' : '/regions/regions/დემოგრაფია/შობადობის%20ზოგადი%20კოეფიციენტი/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Tbilisi.xlsx' : '/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Quantitative%20ratio%20of%20sexes/Tbilisi.xlsx' : '/regions/regions/სქესთა%20რაოდენობრივი%20თანაფარდობა/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['6']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Mean%20age%20of%20childbearing/Tbilisi.xlsx' : '/regions/regions/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['7']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20stillbirths/Tbilisi.xlsx' : '/regions/regions/დემოგრაფია/მკვდრადშობილთა%20რიცხოვნობა/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['8']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20stillbirths%20by%20sex/Tbilisi.xlsx' : '/regions/regions/დემოგრაფია/მკვდრადშობილთა%20რიცხოვნობა/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi4" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $death['1']; ?>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths/Tbilisi.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20death%20rate/Tbilisi.xlsx' : '/regions/regions/დემოგრაფია/მოკვდაობის%20ზოგადი%20კოეფიციენტი/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Tbilisi.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Infant%20mortality%20rate/Tbilisi.xlsx' : '/regions/regions/დემოგრაფია/ჩვილ%20ბავშვთა%20მოკვდაობის%20კოეფიციენტი/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['6']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Under-5%20mortality%20rate/Tbilisi.xlsx' : '/regions/regions/დემოგრაფია/5%20წლამდე%20ასაკის%20ბავშვთა%20მოკვდაობის%20კოეფიციენტი/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['7']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Tbilisi.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['8']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20by%20urban-rural%20settlements/Tbilisi.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20საქალაქო%20სასოფლო%20დასახლებების%20მიხედთვით/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['9']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20by%20age%20groups/Tbilisi.xlsx' : '/regions/regions/დემოგრაფია/მიზეზები%20ძირითადი%20კლასების%20და%20ასაკის%20მიხედვით/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['10']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Deaths%20from%20suicide/Tbilisi.xlsx' : '/regions/regions/დემოგრაფია/თვითმკვლელობით%20გარდაცვლილთა%20რიცხოვნობა/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['11']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Suicide%20rate/Tbilisi.xlsx' : '/regions/regions/დემოგრაფია/თვითმკვლელობის%20შედეგად%20სიკვილიანობის%20კოეფიციენტი/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi5" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $naturalIncrease['1']; ?>
                    </td>
                </tr>
                <tr class="informacia5">
                    <td>
                        <?php echo $naturalIncrease['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Natural%20increase/Tbilisi.xlsx' : '/regions/regions/დემოგრაფია/ბუნებრივი%20მატება/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia5">
                    <td>
                        <?php echo $naturalIncrease['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Natural%20increase%20rate/Tbilisi.xlsx' : '/regions/regions/დემოგრაფია/ბუნებრივი%20მატების%20კოეფიციენტი/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi6" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $marriage['1']; ?>
                    </td>
                </tr>
                <tr class="informacia6">
                    <td>
                        <?php echo $marriage['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20registered%20marriages/Tbilisi.xlsx' : '/regions/regions/დემოგრაფია/რეგისტრირებულ%20ქორწინებათა%20რაოდენობა/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia6">
                    <td>
                        <?php echo $marriage['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20marriage%20rate/Tbilisi.xlsx' : '/regions/regions/დემოგრაფია/ქორწინების%20ზოგადი%20კოეფიციენტი/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia6">
                    <td>
                        <?php echo $marriage['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20married%20people/Tbilisi.xlsx' : '/regions/regions/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia6">
                    <td>
                        <?php echo $marriage['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Mean%20age%20of%20spouses/Tbilisi.xlsx' : '/regions/regions/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi7" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $divorce['1']; ?>
                    </td>
                </tr>
                <tr class="informacia7">
                    <td>
                        <?php echo $divorce['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20registered%20divorces/Tbilisi.xlsx' : '/regions/regions/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia7">
                    <td>
                        <?php echo $divorce['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20divorce%20rate/Tbilisi.xlsx' : '/regions/regions/დემოგრაფია/განქორწინების%20ზოგადი%20კოეფიციენტი/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia7">
                    <td>
                        <?php echo $divorce['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Tbilisi.xlsx' : '/regions/regions/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi8" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $populationDescription['1']; ?>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Median%20age%20of%20population/Tbilisi.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Tbilisi.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Age%20dependency%20ratios/Tbilisi.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Number%20of%20population/Tbilisi.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['6']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Share%20of%20working%20age%20population/Tbilisi.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['7']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Number%20of%20private%20households/Tbilisi.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/კერძო%20შინამეურნეობები/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $gdbAndValueAdded[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/gdp%20and%20va/gdp%20and%20va.xlsx' : '/regions/regions/10/mshp%20da%20damatebuli%20girebuleba/mshp%20da%20damatebuli%20girebuleba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $foreignDirectInvestment[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/ext.trade%20and%20foreign%20direct%20invset/ext.trade%20and%20foreign%20direct%20invset.xlsx' : '/regions/regions/10/pirdapiri%20uckhouri%20investiciebi/pirdapiri%20uckhouri%20investiciebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi17" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $employmentAndSalaries[1]; ?>
                    </td>
                </tr>
                <tr class="informacia17">
                    <td>
                        <?php echo $employmentAndSalaries[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/employment%20and%20unemployment/employment%20and%20unemployment.xlsx' : '/regions/regions/10/dasaqmeba_umushevroba/dasaqmeba_umushevroba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia17">
                    <td>
                        <?php echo $employmentAndSalaries[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/employment%20and%20unemployment/wages.xlsx' : '/regions/regions/10/dasaqmeba_umushevroba/khelfasi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi16" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'According to C. Tbilisi' : 'ქ. თბილისის მიხედვით'; ?>"><?php echo $pricesAndInflation[1]; ?>
                    </td>
                </tr>
                <tr class="informacia16">
                    <td>
                        <?php echo $pricesAndInflation[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/4/prices/consumer-price-index-12-month-avarage-over-the-previous-12-month-avarage-Tbilisi.xlsx' : '/regions/regions/4/fasebi/samomxmareblo-fasebis-indeqsebi-12-tvis-sashualo-wina-12-Tvis-saSualosTan-Tbilisi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia16">
                    <td>
                        <?php echo $pricesAndInflation[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/4/prices/Consumer-Price-Indices-(Previous-month=100)-Tbilisi.xlsx' : '/regions/regions/4/fasebi/samomxmareblo-fasebis-indeqsebi-wina-TvesTan-Tbilisi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia16">
                    <td>
                        <?php echo $pricesAndInflation[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/4/prices/consumer-price-index-to-the-same-month-of-previous-year-Tbilisi.xlsx' : '/regions/regions/4/fasebi/samomxmareblo-fasebis-indeqsebi-wina-wlis-shesabamis-TvesTan-Tbilisi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia16">
                    <td>
                        <?php echo $pricesAndInflation[5]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/4/prices/consumer-price-index-2010=100-Tbilisi.xlsx' : '/regions/regions/4/fasebi/samomxmareblo-fasebis-indeqsebi-2010-wlis-sashualo=100-Tbilisi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi18" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $standartOfLiving[1]; ?>
                    </td>
                </tr>
                <tr class="informacia18">
                    <td>
                        <?php echo $standartOfLiving[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/standard%20of%20living/incomes.xlsx' : '/regions/regions/10/ckhovrebis%20done/shemosavlebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia18">
                    <td>
                        <?php echo $standartOfLiving[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/standard%20of%20living/expenditures.xlsx' : '/regions/regions/10/ckhovrebis%20done/kharjebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi14" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $businessSector[1]; ?>
                    </td>
                </tr>
                <tr class="informacia14">
                    <td>
                        <?php echo $businessSector[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/business%20sector/by%20kind%20of%20activity_nace%20rev.2.xlsx' : '/regions/regions/10/biznes%20seqtori/saqmianobis%20mikhedvit_nace%20rev.2.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia14">
                    <td>
                        <?php echo $businessSector[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/business%20sector/by%20ownership.xlsx' : '/regions/regions/10/biznes%20seqtori/sakutrebis%20formis%20mikhedvit.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia14">
                    <td><?php echo $businessSector[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/business%20sector/by%20size.xlsx' : '/regions/regions/10/biznes%20seqtori/zomis%20mikhedvit.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><a target="_blank" href="http://br.geostat.ge/register_geo/"><?php echo $businessRegister[1]; ?></a> <span class="float-right"></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $budget[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Budget/C.%20Tbilisi.xlsx' : '/regions/municipal/ბიუჯეტი/ქ.%20თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi15" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $agriculture[1]; ?>
                    </td>
                </tr>
                <tr class="informacia15">
                    <td>
                        <?php echo $agriculture[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/agriculture/1.%20Annual%20crops.xlsx' : '/regions/regions/10/soflis%20meurneoba/1.%20erttsliani%20kulturebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia15">
                    <td>
                        <?php echo $agriculture[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/agriculture/2.%20Production%20of%20permanent%20crops.xlsx' : '/regions/regions/10/soflis%20meurneoba/2.%20mravaltslovani%20kulturebis%20tsarmoeba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia15">
                    <td>
                        <?php echo $agriculture[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/agriculture/3.%20Number%20of%20livestock.xlsx' : '/regions/regions/10/soflis%20meurneoba/3.%20pirutkvis%20suladoba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia15">
                    <td>
                        <?php echo $agriculture[5]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/agriculture/4.%20Production%20of%20animal%20housbandry.xlsx' : '/regions/regions/10/soflis%20meurneoba/4.%20metskhoveleobis%20produktsiis%20tsarmoeba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $industry[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/industry/industry.xlsx' : '/regions/regions/10/mretsveloba/mretsveloba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi13" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $construction[1]; ?>
                    </td>
                </tr>
                <tr class="informacia13">
                    <td>
                        <?php echo $construction[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/construction/mshenebloba_nebartvebi.xlsx' : '/regions/regions/10/mshenebloba/mshenebloba_nebartvebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia13">
                    <td>
                        <?php echo $construction[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/construction/eqspluataciashi%20migebuli%20obieqtebi.xlsx' : '/regions/regions/10/mshenebloba/eqspluataciashi%20migebuli%20obieqtebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia13">
                    <td>
                        <?php echo $construction[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/construction/mshenebloba_dziritadi%20machveneblebi.xlsx' : '/regions/regions/10/mshenebloba/mshenebloba_dziritadi%20machveneblebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi12" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $service[1]; ?>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/By%20organizational%20legal%20forms/Tbilisi.xlsx' : '/regions/regions/მომსახურება/ორგანიზაციულ%20სამართლებრივი/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/By%20ownership%20type/Tbilisi.xlsx' : '/regions/regions/მომსახურება/საკუთრების%20ფორმების%20მიხედვით/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Number%20of%20markets%20and%20fairs%20by%20type/Tbilisi.xlsx' : '/regions/regions/მომსახურება/ტიპების%20მიხედვით/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[5]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Days%20of%20trade/Tbilisi.xlsx' : '/regions/regions/მომსახურება/ვაჭრობის%20დღეთა%20რაოდენობის%20მიხედვით/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[6]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Employed%20persons/Tbilisi.xlsx' : '/regions/regions/მომსახურება/დირექციაში%20დასაქმებულები/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[7]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Market-place%20and%20sellers/Tbilisi.xlsx' : '/regions/regions/მომსახურება/სავაჭრო%20ადგილები%20და%20მოვაჭრეთა%20რაოდენობა/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[8]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Financial%20indices%20of%20markets/Tbilisi.xlsx' : '/regions/regions/მომსახურება/საფინანსო%20მაჩვენებლები/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $trading[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/trade/trade.xlsx' : '/regions/regions/10/vachroba/vachroba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi9" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $hotelsAndRestaurants[1]; ?>
                    </td>
                </tr>
                <tr class="informacia9">
                    <td>
                        <?php echo $hotelsAndRestaurants[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/hotels%20and%20restaurants/hotels%20and%20restaurants.xlsx' : '/regions/regions/10/sastumroebi%20da%20restornebi/sastumroebi%20da%20restornebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia9">
                    <td>
                        <?php echo $hotelsAndRestaurants[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Hotels/Tbilisi.xlsx' : '/regions/regions/სასტუმროები/რაოდენობა%20და%20ფართობი/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia9">
                    <td>
                        <?php echo $hotelsAndRestaurants[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Rooms/Tbilisi.xlsx' : '/regions/regions/სასტუმროები/ნომრების%20რაოდენობა/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia9">
                    <td>
                        <?php echo $hotelsAndRestaurants[5]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Guests/Tbilisi.xlsx' : '/regions/regions/სასტუმროები/სტუმართა%20რაოდენობა/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia9">
                    <td>
                        <?php echo $hotelsAndRestaurants[6]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Employees/Tbilisi.xlsx' : '/regions/regions/სასტუმროები/დასაქმებულთა%20რაოდენობა/თბილისი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi10" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $transportAndStorage[1]; ?>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $transportAndStorage[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/transport%20and%20communication/transport%20and%20storage.xlsx' : '/regions/regions/10/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $transportAndStorage[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/transport%20and%20communication/number%20of%20motor%20vehicles.xlsx' : '/regions/regions/10/transporti%20da%20kavshirgabmuloba/registrirebuli%20avtomobilebis%20raodenoba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $transportAndStorage[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/transport%20and%20communication/the%20length%20of%20the%20roads.xlsx' : '/regions/regions/10/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi11" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""> <?php echo $tourism[1]; ?><span class="float-right"><i id="classchange" class="dropdown_img_up"></i>
                    </td>
                </tr>
                <tr class="informacia11">
                    <td>
                        <?php echo $tourism[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/tourism/place%20of%20residence.xls' : '/regions/regions/10/turizmi/ganawileba%20sacxovrebeli%20adgilis%20mixedvit.xls'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia11">
                    <td>
                        <?php echo $tourism[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/tourism/visited%20regions.xls' : '/regions/regions/10/turizmi/ganawileba%20monaxulebuli%20regionebit.xls'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $legalStatistics[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/justice%20statistics/justice%20statistics.xlsx' : '/regions/regions/10/samartlebrivi%20statistika/samartlebrivi%20statistika.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $healthCareAndSocialSecurity[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/health%20care%20and%20social%20protection/health%20care%20and%20social%20protection.xlsx' : '/regions/regions/10/jandacva%20da%20socialuri%20uzrunvelkofa/jandacva%20da%20socialuri%20uzrunvelkofa.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $education[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/education/education.xlsx' : '/regions/regions/10/ganatleba/ganatleba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $culture[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/culture/culture.xlsx' : '/regions/regions/10/kultura/kultura.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $environmentalProtection[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/environmental%20protection/environmental%20protection.xlsx' : '/regions/regions/10/garemos%20dacva/garemos%20dacva.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $infrastructure[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/10/infrastructure/infrastructure.xlsx' : '/regions/regions/10/infrastruqtura/infrastruqtura.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>




            </tbody>
        </table>
        <div class="map-box" style="max-width: 700px; margin-left:55px;">
            <img src="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'tbilisien.svg' : 'tbilisi.svg'; ?>" alt="tbilisiSVG" id="tbilisiSVG">
        </div>

        <table class="machveneblebi-right">
            <?php
            include('connection.php');
            $tableRight = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'key_indicators_en' : 'key_indicators';
            $query = mysqli_query($link, "select * from " . $tableRight);
            while ($row = mysqli_fetch_array($query)) {
                // $keyIndicator[$row['ID']] = $row['keyIndicators'];
                $keyIndicator[$row['ID']] = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? $row['keyIndicatorsEn'] : $row['keyIndicators'];
                $dataContent[$row['ID']] = $row['dataContent'];
            }
            $query = mysqli_query($link, "select * from `regions` where ID = 10");
            $row = mysqli_fetch_array($query);


            ?> <tr>
                <th><?php echo $keyIndicator[1]; ?></th>
            </tr>
            <tbody>
                    <tr>
                        <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[2]; ?> "><?php echo $keyIndicator[2]; ?><span class="float-right"><?php echo $row['Area']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[3]; ?>"><?php echo $keyIndicator[3]; ?><span class="float-right"><?php echo $row['Population']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[4]; ?>"><?php echo $keyIndicator[4]; ?><span class="float-right"><?php echo $row['liveBirth']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[5]; ?>"><?php echo $keyIndicator[5]; ?><span class="float-right"><?php echo $row['death']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[6]; ?>"><?php echo $keyIndicator[6]; ?><span class="float-right"><?php echo $row['naturalIncrease']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[7]; ?>"><?php echo $keyIndicator[7]; ?><span class="float-right"><?php echo $row['GDP']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[8]; ?>"><?php echo $keyIndicator[8]; ?><span class="float-right"><?php echo $row['GDPPerCapita']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[9]; ?>"><?php echo $keyIndicator[9]; ?><span class="float-right"><?php echo $row['UnemploymentRate']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[10]; ?>"><?php echo $keyIndicator[10]; ?><span class="float-right"><?php echo $row['EmploymentRate']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[11]; ?>"><?php echo $keyIndicator[11]; ?><span class="float-right"><?php echo $row['EmploymentRateIndustry']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[12]; ?>"><?php echo $keyIndicator[12]; ?><span class="float-right"><?php echo $row['AverageSalaryIndustry']; ?></span> </td>
                    </tr>
                    <tr>
                        <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[13]; ?>"><?php echo $keyIndicator[13]; ?><span class="float-right"><?php echo $row['RegistredEntities']; ?></span> </td>
                    </tr>
                    <tr>
                        <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[14]; ?>"><?php echo $keyIndicator[14]; ?><span class="float-right"><?php echo $row['activeEntities']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[15]; ?>"><?php echo $keyIndicator[15]; ?><span class="float-right"><?php echo $row['newlyRegistredEntities']; ?></span></td>
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