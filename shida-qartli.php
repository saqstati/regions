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
    <meta property="og:title" content="<?php echo $lang['shidakartlititlename'] ?>" />
    <meta property="og:description" content="<?php echo $lang['shidakartlititlename'] ?>" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <title class="tr" Key="PAGE_TITLE"><?php echo $lang['shidakartlititlename'] ?></title>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <!-- Bootstrap 5.3.0 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="samegrelo.css">
    <link rel="stylesheet" type="text/css" href="custom.css">
    <link rel="stylesheet" type="text/css" href="shida-qartli/shida-qartli.css">
    <link rel="stylesheet" href="mediastyles.css">
</head>

<body>
    <div id="background-main" class="background-image"></div>
    <main class="container-fluid my-4">
        <div class="row g-3">
            <?php include 'asset/header.php' ?>
            <!-- Left Table -->
            <div class="col-12 col-md-3">
                <table class="table">
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
                            <th id="dziritadi1" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $basicInformation[1]; ?> <span class="float-right"><i id="classchange" class="dropdown_img_up"></i></span>
                            </th>
                        </tr>
                        <tr class="informacia1">
                            <td>
                                <?php echo $basicInformation[2]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/main%20information/area.xlsx' : '/regions/regions/12/dziritadi%20informacia/regionis%20fartobi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia1">
                            <td>
                                <?php echo $basicInformation[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/main%20information/number%20of%20settlements.xlsx' : '/regions/regions/12/dziritadi%20informacia/municipalitetebis,%20qalaqebis%20da%20soflebis%20raodenoba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population/Number%20of%20population/Shida%20Kartli.xlsx' : '/regions/regions/მოსახლეობა/მოსახლეობის%20რიცხოვნობა/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia22">
                            <td>
                                <?php echo $population[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population/Share%20of%20urban%20population/Shida%20Kartli.xlsx' : '/regions/regions/მოსახლეობა/საქალაქო%20დასახლებაში%20მცხოვრები/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia22">
                            <td>
                                <?php echo $population[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population/Density%20of%20population/Shida%20Kartli.xlsx' : '/regions/regions/მოსახლეობა/მოსახლეობის%20სიმჭიდროვე/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20live%20births/Shida%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20birth%20rate/Shida%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/შობადობის%20ზოგადი%20კოეფიციენტი/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Shida%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Quantitative%20ratio%20of%20sexes/Shida%20Kartli.xlsx' : '/regions/regions/სქესთა%20რაოდენობრივი%20თანაფარდობა/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['6']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Mean%20age%20of%20childbearing/Shida%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['7']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20stillbirths/Shida%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/მკვდრადშობილთა%20რიცხოვნობა/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['8']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20stillbirths%20by%20sex/Shida%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths/Shida%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20death%20rate/Shida%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/მოკვდაობის%20ზოგადი%20კოეფიციენტი/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Shida%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Infant%20mortality%20rate/Shida%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/ჩვილ%20ბავშვთა%20მოკვდაობის%20კოეფიციენტი/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['6']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Under-5%20mortality%20rate/Shida%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/5%20წლამდე%20ასაკის%20ბავშვთა%20მოკვდაობის%20კოეფიციენტი/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['7']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Shida%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['8']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20by%20urban-rural%20settlements/Shida%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20საქალაქო%20სასოფლო%20დასახლებების%20მიხედთვით/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['9']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20by%20age%20groups/Shida%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/მიზეზები%20ძირითადი%20კლასების%20და%20ასაკის%20მიხედვით/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['10']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Deaths%20from%20suicide/Shida%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/თვითმკვლელობით%20გარდაცვლილთა%20რიცხოვნობა/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['11']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Suicide%20rate/Shida%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/თვითმკვლელობის%20შედეგად%20სიკვილიანობის%20კოეფიციენტი/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Natural%20increase/Shida%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/ბუნებრივი%20მატება/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia5">
                            <td>
                                <?php echo $naturalIncrease['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Natural%20increase%20rate/Shida%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/ბუნებრივი%20მატების%20კოეფიციენტი/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20registered%20marriages/Shida%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/რეგისტრირებულ%20ქორწინებათა%20რაოდენობა/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia6">
                            <td>
                                <?php echo $marriage['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20marriage%20rate/Shida%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/ქორწინების%20ზოგადი%20კოეფიციენტი/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia6">
                            <td>
                                <?php echo $marriage['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20married%20people/Shida%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia6">
                            <td>
                                <?php echo $marriage['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Mean%20age%20of%20spouses/Shida%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20registered%20divorces/Shida%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia7">
                            <td>
                                <?php echo $divorce['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20divorce%20rate/Shida%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/განქორწინების%20ზოგადი%20კოეფიციენტი/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia7">
                            <td>
                                <?php echo $divorce['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Shida%20Kartli.xlsx' : '/regions/regions/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Median%20age%20of%20population/Shida%20Kartli.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Shida%20Kartli.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Age%20dependency%20ratios/Shida%20Kartli.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Number%20of%20population/Shida%20Kartli.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['6']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Share%20of%20working%20age%20population/Shida%20Kartli.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['7']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Number%20of%20private%20households/Shida%20Kartli.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/კერძო%20შინამეურნეობები/შიდა%20ქართლი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $gdbAndValueAdded[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/gdp%20and%20va/gdp%20and%20va.xlsx' : '/regions/regions/12/mshp%20da%20damatebuli%20girebuleba/mshp%20da%20damatebuli%20girebuleba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $foreignDirectInvestment[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/ext.trade%20and%20foreign%20direct%20invset/ext.trade%20and%20foreign%20direct%20invset.xlsx' : '/regions/regions/12/pirdapiri%20uckhouri%20investiciebi/pirdapiri%20uckhouri%20investiciebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/employment%20and%20unemployment/employment%20and%20unemployment.xlsx' : '/regions/regions/12/dasaqmeba_umushevroba/dasaqmeba_umushevroba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia17">
                            <td>
                                <?php echo $employmentAndSalaries[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/employment%20and%20unemployment/wages.xlsx' : '/regions/regions/12/dasaqmeba_umushevroba/khelfasi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi16" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'According to C. Gori' : 'ქ. გორის მიხედვით'; ?>"><?php echo $pricesAndInflation[1]; ?>
                            </td>
                        </tr>
                        <tr class="informacia16">
                            <td>
                                <?php echo $pricesAndInflation[2]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/4/prices/consumer-price-index-12-month-avarage-over-the-previous-12-month-avarage.xlsx' : '/regions/regions/4/fasebi/samomxmareblo-fasebis-indeqsebi-12-tvis-sashualo-wina-12-Tvis-saSualosTan.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia16">
                            <td>
                                <?php echo $pricesAndInflation[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/4/prices/Consumer-Price-Indices-(Previous-month=100).xlsx' : '/regions/regions/4/fasebi/samomxmareblo-fasebis-indeqsebi-wina-TvesTan.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia16">
                            <td>
                                <?php echo $pricesAndInflation[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/4/prices/consumer-price-index-to-the-same-month-of-previous-year.xlsx' : '/regions/regions/4/fasebi/samomxmareblo-fasebis-indeqsebi-wina-wlis-shesabamis-TvesTan.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia16">
                            <td>
                                <?php echo $pricesAndInflation[5]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/4/prices/consumer-price-index-2010=100.xlsx' : '/regions/regions/4/fasebi/samomxmareblo-fasebis-indeqsebi-2010-wlis-sashualo=100.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/standard%20of%20living/incomes.xlsx' : '/regions/regions/12/ckhovrebis%20done/shemosavlebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia18">
                            <td>
                                <?php echo $standartOfLiving[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/standard%20of%20living/expenditures.xlsx' : '/regions/regions/12/ckhovrebis%20done/kharjebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/business%20sector/by%20kind%20of%20activity_nace%20rev.2.xlsx' : '/regions/regions/12/biznes%20seqtori/saqmianobis%20mikhedvit_nace%20rev.2.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia14">
                            <td>
                                <?php echo $businessSector[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/business%20sector/by%20ownership.xlsx' : '/regions/regions/12/biznes%20seqtori/sakutrebis%20formis%20mikhedvit.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia14">
                            <td><?php echo $businessSector[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/business%20sector/by%20size.xlsx' : '/regions/regions/12/biznes%20seqtori/zomis%20mikhedvit.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><a target="_blank" href="http://br.geostat.ge/register_geo/"><?php echo $businessRegister[1]; ?></a> <span class="float-right"></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/agriculture/1.%20Annual%20crops.xlsx' : '/regions/regions/12/soflis%20meurneoba/1.%20erttsliani%20kulturebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia15">
                            <td>
                                <?php echo $agriculture[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/agriculture/2.%20Production%20of%20permanent%20crops.xlsx' : '/regions/regions/12/soflis%20meurneoba/2.%20mravaltslovani%20kulturebis%20tsarmoeba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia15">
                            <td>
                                <?php echo $agriculture[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/agriculture/3.%20Number%20of%20livestock.xlsx' : '/regions/regions/12/soflis%20meurneoba/3.%20pirutkvis%20suladoba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia15">
                            <td>
                                <?php echo $agriculture[5]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/agriculture/4.%20Production%20of%20animal%20housbandry.xlsx' : '/regions/regions/12/soflis%20meurneoba/4.%20metskhoveleobis%20produktsiis%20tsarmoeba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $industry[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/industry/industry.xlsx' : '/regions/regions/12/mretsveloba/mretsveloba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/construction/mshenebloba_nebartvebi.xlsx' : '/regions/regions/12/mshenebloba/mshenebloba_nebartvebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia13">
                            <td>
                                <?php echo $construction[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/construction/eqspluataciashi%20migebuli%20obieqtebi.xlsx' : '/regions/regions/12/mshenebloba/eqspluataciashi%20migebuli%20obieqtebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia13">
                            <td>
                                <?php echo $construction[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/construction/mshenebloba_dziritadi%20machveneblebi.xlsx' : '/regions/regions/12/mshenebloba/mshenebloba_dziritadi machveneblebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/By%20organizational%20legal%20forms/Shida%20Kartli%20Region.xlsx' : '/regions/regions/მომსახურება/ორგანიზაციულ%20სამართლებრივი/შიდა%20ქართლის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $service[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/By%20ownership%20type/Shida%20Kartli%20Region.xlsx' : '/regions/regions/მომსახურება/საკუთრების%20ფორმების%20მიხედვით/შიდა%20ქართლის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $service[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Number%20of%20markets%20and%20fairs%20by%20type/Shida%20Kartli%20Region.xlsx' : '/regions/regions/მომსახურება/ტიპების%20მიხედვით/შიდა%20ქართლის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $service[5]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Days%20of%20trade/Shida%20Kartli%20Region.xlsx' : '/regions/regions/მომსახურება/ვაჭრობის%20დღეთა%20რაოდენობის%20მიხედვით/შიდა%20ქართლის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $service[6]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Employed%20persons/Shida%20Kartli%20Region.xlsx' : '/regions/regions/მომსახურება/დირექციაში%20დასაქმებულები/შიდა%20ქართლის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $service[7]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Market-place%20and%20sellers/Shida%20Kartli%20Region.xlsx' : '/regions/regions/მომსახურება/სავაჭრო%20ადგილები%20და%20მოვაჭრეთა%20რაოდენობა/შიდა%20ქართლის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $service[8]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Financial%20indices%20of%20markets/Shida%20Kartli%20Region.xlsx' : '/regions/regions/მომსახურება/საფინანსო%20მაჩვენებლები/შიდა%20ქართლის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $trading[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/trade/trade.xlsx' : '/regions/regions/12/vachroba/vachroba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/hotels%20and%20restaurants/hotels%20and%20restaurants.xlsx' : '/regions/regions/12/sastumroebi%20da%20restornebi/sastumroebi%20da%20restornebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <?php echo $hotelsAndRestaurants[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Hotels/Shida%20Kartli%20Region.xlsx' : '/regions/regions/სასტუმროები/რაოდენობა%20და%20ფართობი/შიდა%20ქართლის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <?php echo $hotelsAndRestaurants[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Rooms/Shida%20Kartli%20Region.xlsx' : '/regions/regions/სასტუმროები/ნომრების%20რაოდენობა/შიდა%20ქართლის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <?php echo $hotelsAndRestaurants[5]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Guests/Shida%20Kartli%20Region.xlsx' : '/regions/regions/სასტუმროები/სტუმართა%20რაოდენობა/შიდა%20ქართლის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <?php echo $hotelsAndRestaurants[6]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Employees/Shida%20Kartli%20Region.xlsx' : '/regions/regions/სასტუმროები/დასაქმებულთა%20რაოდენობა/შიდა%20ქართლის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/transport%20and%20communication/transport%20and%20storage.xlsx' : '/regions/regions/12/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia10">
                            <td>
                                <?php echo $transportAndStorage[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/transport%20and%20communication/number%20of%20motor%20vehicles.xlsx' : '/regions/regions/12/transporti%20da%20kavshirgabmuloba/registrirebuli%20avtomobilebis%20raodenoba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia10">
                            <td>
                                <?php echo $transportAndStorage[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/transport%20and%20communication/the%20length%20of%20the%20roads.xlsx' : '/regions/regions/12/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/tourism/place%20of%20residence.xls' : '/regions/regions/12/turizmi/ganawileba%20sacxovrebeli%20adgilis%20mixedvit.xls'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia11">
                            <td>
                                <?php echo $tourism[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/tourism/visited%20regions.xls' : '/regions/regions/12/turizmi/ganawileba%20monaxulebuli%20regionebit.xls'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $legalStatistics[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/justice%20statistics/justice%20statistics.xlsx' : '/regions/regions/12/samartlebrivi%20statistika/samartlebrivi%20statistika.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $healthCareAndSocialSecurity[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/health%20care%20and%20social%20protection/health%20care%20and%20social%20protection.xlsx' : '/regions/regions/12/jandacva%20da%20socialuri%20uzrunvelkofa/jandacva%20da%20socialuri%20uzrunvelkofa.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $education[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/education/education.xlsx' : '/regions/regions/12/ganatleba/ganatleba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $culture[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/culture/culture.xlsx' : '/regions/regions/12/kultura/kultura.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $environmentalProtection[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/environmental%20protection/environmental%20protection.xlsx' : '/regions/regions/12/garemos%20dacva/garemos%20dacva.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $infrastructure[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/12/infrastructure/infrastructure.xlsx' : '/regions/regions/12/infrastruqtura/infrastruqtura.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>




                    </tbody>
                </table>
            </div>

            <!-- Center Content -->
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                <!-- Center content goes here. Adjust height if needed or add other content. -->
                <div class="w-100 text-center p-4 rounded" style="height: 100%;">
                    <svg id="svg12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000" version="1.1">
                        <g id="layer12">
                            <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'shida-qartli/kaspi.php?lang=en' : 'shida-qartli/kaspi.php?lang=ka'; ?>" class="text-decoration-none">
                                <path id="group2-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1251.2,643.3 c 1.9647,0.90993 3.9991,0.8798 5.6754,1.3876 0.6683,1.754 0.04,3.3715 1.2212,4.0433 -1.0968,2.5832 4.5479,-1.8552 2.422,0.19939 0.9832,1.8893 2.1344,2.6683 3.521,1.2739 1.9142,3.4236 3.6537,-2.2602 0.9714,-2.7172 2.3643,-1.9479 4.3725,1.7479 6.1386,1.0942 2.6843,0.70264 2.5123,1.6277 5.1426,0.49307 0.5107,-3.436 2.8546,2.1313 4.7737,-0.93245 1.9682,-1.3366 3.029,0.0802 3.4398,1.1999 1.0977,0.57414 2.1804,0.91943 2.4015,2.3578 0.8282,0.63076 2.0408,1.7414 2.5276,3.0334 -0.024,2.1714 1.5238,2.7043 1.6504,4.8495 -1.1808,0.7022 1.6442,2.7322 -0.1543,3.9008 -0.6929,3.8609 1.0634,7.9429 1.6504,11.498 0.6151,1.1786 1.2475,2.4102 2.1018,3.4512 0.272,0.70963 1.9265,3.4474 1.2016,3.0996 -0.1654,3.0842 0.8022,5.2363 3.2952,5.8944 2.1334,0.87629 3.1676,2.6528 3.7502,4.9552 0.4163,1.2249 1.448,1.7826 2.25,2.75 -0.1972,1.1077 1.9956,2.9376 1.7989,5.0511 0.9754,0.89253 0.545,3.227 2.106,3.6056 1.176,1.4311 1.0943,3.532 0.6018,5.7443 -1.0877,1.7276 1.8837,4.2493 -0.6018,5.0999 0.2782,2.4611 -2.0252,2.0734 -2.0996,4.0488 -1.8899,0.31238 -2.8366,0.78572 -3.3496,-1.2072 0.035,-2.4513 -3.0897,-0.77437 -3.9789,-0.6658 -0.3852,-1.5051 -3.0488,-0.9435 -3.4537,-2.5822 -2.0729,1.4114 -1.9821,5.1 -4.1977,5.8069 -2.0514,-1.7859 -6.0907,0.62397 -4.4036,2.248 0.6516,2.3594 4.2281,1.041 3.549,1.8027 -0.758,2.4501 1.7512,3.6427 1.7971,5.1 -3.3083,0.34347 -3.3017,4.3584 -4.3462,6.901 -0.2996,0.25043 1.5723,3.3698 -0.6058,3.5999 -1.6647,0.46815 -2.8651,2.8022 -2.5651,3.7504 -1.2927,0.83941 -1.4735,4.2632 -3.7414,3.4494 -0.469,1.9904 -1.4506,3.5269 -1.896,5.0491 -0.8878,0.18526 3.1103,1.8775 2.0372,3.996 1.1096,0.96657 2.207,4.2576 0.5789,4.7543 0.3465,0.71107 -0.5982,3.9281 -2.8498,3.7501 -1.88,1.2592 -4.7581,-0.0984 -6.2527,2.6719 -2.2253,1.8154 -4.8119,-0.0316 -6.401,-0.87109 -2.0301,-0.74109 -5.1792,1.0212 -5.6739,-1.3066 -1.753,1.1982 -3.6501,-1.8285 -6.2502,0.10746 -0.5024,-1.2312 -2.7232,-1.4355 -1.9882,-2.399 -1.1247,-1.0015 0.086,-1.6894 -1.9537,-2.5523 -1.2725,-0.54258 -1.26,-1.9729 -2.4104,-2.7421 -0.4127,-1.9823 -0.7052,-2.2302 -0.6445,-3.4063 0.9507,-0.37015 -1.5402,-3.4098 -3.8735,-2.4008 -3.7749,0.18719 -1.9269,2.2409 -4.8909,2.4006 -2.7329,0.70418 -3.4884,1.3371 -2.7869,4.498 -2.2157,2.4678 -5.0783,0.3683 -7.7156,1.2012 -1.7632,0.95273 -3.6204,1.6886 -3.1488,3.9006 -1.7162,0.33972 -3.6944,2.6586 -5.737,0.29501 -0.9192,-0.56203 -5.5735,-1.9835 -6.198,0.89844 -0.9176,1.3873 -3.4718,1.898 -4.4045,0.60763 -1.3545,-1.271 -5.6757,0.61509 -5.5981,-0.92967 2.5216,-3.5387 -4.3664,-1.1869 -5.8618,-3.2715 -0.9891,2.0232 -3.9894,0.86878 -5.8265,2.3282 -2.5959,0.37555 -4.7912,-0.4659 -4.9174,-3.0783 -0.9522,-0.61874 0.8579,-3.1416 -0.7476,-3.5996 0.3866,-2.2378 -1.958,-1.5462 -0.5945,-3.35 2.0659,-0.59793 1.8473,-0.58871 2.2449,-2.4004 2.8793,0.0791 4.9746,-1.1165 7.3668,-1.5002 -0.8407,-1.4125 2.9221,-0.62411 3.7192,-1.7988 1.4032,-0.40798 1.2118,-2.5625 3.4501,-1.9514 2.059,0.48531 3.0814,-2.0755 5.2539,-1.9495 2.3634,-2.5755 -3.0553,-5.8844 -2.552,-9.0431 3.191,1.3592 3.1748,-2.6721 4.9495,-3.5569 0.6515,-2.8885 1.4359,-5.0331 4.0473,-5.551 1.377,-0.80738 -0.6561,-2.9725 -1.0371,-3.8497 -0.8258,-1.7587 -1.6272,-3.1573 -2.8723,-4.6569 0.1536,-1.1868 -2.7237,-0.74663 -4.4494,0.1563 -0.5211,1.8819 -4.3067,0.77655 -4.6508,2.5508 -1.674,-0.0678 -2.8106,1.2758 -3.5052,1.6486 -1.52,-0.077 -3.5496,-0.026 -5.715,-0.44933 -2.8224,-0.14279 -2.2397,-4.4649 -0.1232,-4.5495 0.3975,-1.957 4.4468,-1.9786 5.9264,-4.127 3.738,-1.3484 7.3781,-3.5324 1.9531,-5.5293 1.5841,0.56302 4.1391,0.37666 2.4772,-1.6952 -1.7554,-0.46307 -0.6389,-0.65896 -2.2172,-1.3494 -1.447,-0.88891 0.8465,-3.0619 -1.0547,-3.5999 -1.3131,-1.0033 -3.6544,-2.9335 -2.2522,-5.1428 0.5104,-2.0052 -1.3306,-2.6347 -1.0488,-4.0508 -0.093,-3.5994 3.1584,-1.4078 5.5572,-1.207 2.0575,-1.5503 2.7967,-3.1783 4.9525,-3.301 1.0845,-1.5092 3.9212,-0.80277 5.1882,-2.7892 2.8626,1.677 1.1714,-2.1034 3.0983,-1.4102 1.3521,0.59196 5.5315,2.4361 4.3138,-0.74964 0.943,-1.432 2.0363,-3.0213 1.127,-5.6192 1.9102,-3.2795 5.5577,-1.7734 7.0195,-0.0761 0.3346,2.5905 2.1035,3.4621 3.594,4.4458 1.3512,1.2456 4.0411,1.5169 5.8667,0.94924 1.438,0.77191 2.9919,-0.0689 2.182,-0.84964 -1.2142,-0.62548 -1.7018,-4.7397 1.3948,-3.2406 2.961,2.7138 2.2441,-0.3163 1.1511,-2.6328 -0.058,-1.1561 -1.781,-3.6712 -4.566,-3.4257 -2.6151,0.4146 -1.1498,-3.215 -3.8268,-3.0003 -3.7236,-0.42126 0.034,-4.0725 -1.2108,-6.5426 0.9981,-2.7418 -1.9978,-6.786 1.8465,-5.4984 0.6871,1.0302 2.9014,0.51886 3.6597,0.50324 2.4387,1.2242 0.9336,-4.7476 2.6316,-5.0022 2.0185,0.55715 3.0888,-1.0082 2.5106,-2.6581 2.7233,-1.4412 1.7731,1.8324 3.3848,2.36 1.0613,-2.3766 3.2013,-1.8311 4.5096,-4.1033 1.4089,-1.3129 0.1721,-3.3343 1.2211,-3.8927 z" id="path1145" />
                                <text id="svgRegions" x="1230" y="715">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Kaspi' : 'კასპი'; ?>
                                </text>
                            </a>
                            <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'shida-qartli/qareli.php?lang=en' : 'shida-qartli/qareli.php?lang=ka'; ?>" class="text-decoration-none">
                                <path id="group2-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1072.6,597.55 c 4.2555,-1.4045 1.4691,4.0168 4.8675,3.3418 1.5967,1.4353 4.5065,-1.1039 7.1429,-0.29885 2.4535,-1.5895 2.4059,2.041 2.4941,3.4378 -1.8267,2.1678 -4.2268,-0.82649 -6.2066,0.21091 -1.1425,0.36047 -0.1336,2.8939 1.0508,4.476 1.7924,0.0229 3.8131,-0.84436 1.0442,1.2133 -1.7656,1.7917 0.168,4.3705 2.269,5.0605 3.0283,-1.0772 2.7042,1.4149 3.8271,3.6157 2.0827,0.7055 4.9298,0.22055 6.2545,2.2925 3.059,-0.1729 4.2,0.35137 4.7009,-3.3516 0.7967,-2.5931 2.8195,-3.3176 2.4749,-6.1562 0.4994,1.4806 6.1783,3.0952 4.5763,-0.73201 -0.8341,-2.5205 0.9775,-4.9332 -0.6014,-7.3248 0.639,-2.1503 -2.5706,-4.305 0.2326,-2.8925 2.24,-3.3154 -0.5634,0.54205 2.9676,0.29884 1.8575,1.0806 4.9329,-0.53722 5.8185,-0.15039 4.4315,-1.0774 2.3954,3.9331 2.5507,5.7831 -2.0854,2.9587 -1.9237,4.7125 1.4124,4.7168 -0.2506,2.6839 1.8321,3.2358 2.3698,5.2934 -2.6388,3.8285 1.2936,2.2392 4.0512,2.6582 0.8539,-1.8083 1.507,-1.4 2.2519,-0.15021 2.5529,1.2638 -0.4385,5.3958 -0.6071,6.2988 1.5376,2.1155 4.4946,3.7473 0.5479,6.5616 0.2648,2.1143 5.5355,0.78354 5.1617,3.7901 2.7349,0.22083 6.4813,-0.006 7.65,2.1367 -0.7167,2.7118 -1.5524,5.7428 1.5,6.2188 2.8118,-0.44339 1.2218,3.6203 3,4.0938 0.013,3.5628 4.9224,3.5357 7.131,4.5 -0.505,0.48356 0.6652,3.3385 3.3694,2.4004 0.7801,1.7925 2.0062,3.0565 2.541,4.9986 -1.2848,0.0914 -3.1526,-1.3379 -4.4983,0.45126 -1.5715,0.0736 -2.1143,4.1112 -3.4868,2.0955 -0.6755,-0.63568 -3.7004,-2.7102 -3.549,-0.74619 -2.1025,-0.45225 -5.1578,-0.33553 -7.0447,-2.0567 1.3152,3.9957 -3.2776,4.3317 -3.3691,8.1057 -0.9715,3.4897 2.2172,2.9653 2.4714,6.0627 0.9226,2.7334 -3.9891,2.2794 -3.5997,5.0702 0.032,1.5114 -2.7689,1.252 -3.4709,2.795 0.06,2.2154 0.1,2.495 -1.6523,4.0059 -1.1712,2.0226 -2.4177,3.5087 -3.0551,5.9992 -1.8557,1.7813 -2.5216,4.6465 -4.3013,6.0067 -3.1941,-0.51248 -2.6545,4.2368 -5.997,3.4512 -1.8483,3.1694 -5.5345,0.007 -8.2032,1.5875 -2.6537,-1.6996 -4.1133,1.7269 -5.5696,3.3218 -2.643,1.2713 -5.8968,2.7074 -4.6812,6.0312 -0.1824,2.4824 -2.8659,0.33176 -4.5096,1.3575 -1.8536,0.48319 -1.0751,3.245 -3.4751,4.0508 -0.4435,0.65623 -2.2585,3.3538 -2.3084,5.7187 -2.6246,0.7179 1.4219,2.5873 -1.7085,4.0483 -0.6355,1.9192 -4.2363,0.33945 -4.2941,3.4088 -2.693,0.95719 -3.7728,4.2849 -2.1502,6.7912 -0.4714,2.9187 4.1416,2.7356 2.2111,5.2854 -2.3383,3.1194 -5.2126,-2.0652 -8.1311,0.0353 -3.1136,1.5794 -6.0799,-0.38101 -9.3351,0.66215 -2.4502,-1.579 -4.283,-3.6941 -7.3074,-3.6584 -1.0872,-1.987 -5.13,-1.3152 -3.8481,-4.359 -1.7079,-1.8166 -5.1421,0.98644 -7.7285,-0.98285 -2.1526,-0.2584 -2.3217,-3.0762 -3.2175,-4.6328 1.2132,-2.39 1.4322,-3.2846 0.5134,-5.3614 3.5512,-1.8831 -2.1746,-4.9516 0.6892,-6.8383 0.3632,-2.0892 1.8696,-5.1698 3.7504,-6.0082 1.0883,-0.59201 4.485,-1.4206 2.2735,-2.9074 -0.7592,-2.7291 -0.351,-3.3816 -0.021,-5.6133 -0.414,-2.2 0.4843,-4.1908 0.1525,-6.78 0.4002,-2.187 0.018,-4.2192 -1.4941,-5.3744 -0.4852,-3.2949 2.576,-2.6431 4.4796,-3.6647 2.3694,1.3779 4.2193,-1.6323 3.9198,-2.6679 0.2251,-2.2037 5.8642,1.2174 3.4492,-1.9438 1.717,-0.90202 3.1519,-1.8924 4.8077,-2.5586 1.5906,-1.1637 4.7956,0.40582 5.8561,-1.9479 1.9274,-1.1887 4.0331,-2.5341 3.6037,-4.1652 -1.8303,0.19342 -4.0255,-1.2881 -2.2502,-2.5911 0.051,-2.9764 2.7227,-2.814 1.4926,-5.2414 -0.9554,-3.0012 -0.9447,-5.4582 -2.8049,-6.6095 1.9985,-1.234 4.1204,-0.3099 5.9576,-1.4927 0.063,-2.2801 -1.5893,-3.9902 -1.5042,-6.7199 -2.0076,-0.14998 -6.4566,2.8392 -4.8008,-0.93989 -1.2925,-2.2155 -1.7463,-4.398 -2.586,-7.454 -1.4741,-1.1982 -1.5091,-2.9126 -4.6125,-2.5588 0.6664,-2.4887 0.8293,-5.2286 4.2678,-5.2903 2.8976,1.2705 2.8277,-4.501 0.8281,-3.9829 -2.399,-1.6982 2.5291,-2.9742 -1.58,-3.0276 1.4146,-3.5217 -6.0632,-2.3624 -2.3846,-3.8014 -0.4978,0.1852 1.5825,-0.23387 1.8189,-2.0984 -1.3289,-3.3383 -2.5921,-2.1584 -5.8283,-4.3317 -2.3908,-0.86193 0.1509,-4.3314 -2.1958,-4.832 -0.2651,-1.2654 -0.8279,-4.4665 2.7717,-3.8184 1.9294,1.9951 5.1809,-1.3706 1.38,-1.3615 -0.9694,-0.72263 -3.5574,-2.9208 -2.2294,-2.7504 0.1795,-1.3261 2.5553,-3.5788 -0.4711,-4.6483 2.1129,0.60038 5.6952,1.3707 6.1892,-1.0508 1.9073,-1.8702 4.2372,-1.642 6.5287,-1.8151 z" id="path1143" />
                                <text id="svgRegions" x="1082" y="655">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Kareli' : 'ქარელი'; ?>
                                </text>
                            </a>
                            <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'shida-qartli/xashuri.php?lang=en' : 'shida-qartli/xashuri.php?lang=ka'; ?>" class="text-decoration-none">
                                <path id="group2-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1032.5,594.76 c 4.0559,-0.80215 5.4061,2.169 8.8886,2.9805 2.4389,0.20389 -0.4305,1.9796 1.6548,3.7582 0.044,2.818 3.7098,5.3075 6.405,3.1426 1.9953,1.4507 5.3557,-0.81451 5.292,1.5684 1.8381,1.2665 6.0571,1.9584 1.7988,4.0801 1.9548,1.8905 -1.0577,3.6226 1.7835,3.9513 -0.8629,3.0172 2.0388,6.0948 5.2853,6.1509 1.8943,2.4767 1.3194,2.2757 -1.0924,3.5322 -4.0723,2.8546 3.2914,1.3585 3.3206,3.9238 -0.8701,2.5076 1.2768,2.7825 2.8299,4.3955 0.3934,2.683 -3.5469,2.0206 -5.3583,2.3017 1.0445,1.5129 -1.762,3.2859 -0.9412,6.8515 3.2644,-1.2145 3.0174,3.1984 4.6883,1.9416 2.3211,2.5227 -1.0048,4.0683 0.3145,5.6159 3.2764,-1.433 0.3539,6.1771 3.7617,4.417 2.9077,-1.5597 3.7829,-0.51728 4.1448,2.2846 -0.3493,1.2868 0.6738,2.356 -2.549,1.9831 -1.5606,0.41798 -4.9413,1.5573 -2.0303,2.9625 0.2081,2.2102 2.0054,3.2849 1.8326,5.6001 -0.4822,-0.10889 -0.31,3.5373 -1.7605,4.9354 -1.5593,1.1941 0.353,4.1131 2.2402,3.7578 -0.8251,1.3862 -2.9705,2.4863 -4.3478,3.7512 -3.0675,-0.37772 -4.4368,0.17279 -6.1545,1.3499 -1.1165,0.75111 -3.294,1.3001 -3.639,2.855 -2.5431,-0.60783 -4.0389,0.64511 -3.5627,3.0208 -2.3087,1.1504 -6.2552,-0.01 -7.5485,2.8267 -1.6351,2.3392 1.1947,4.1334 1.2402,6.3339 -0.781,1.7068 0.8364,4.2734 -0.9473,5.4347 0.7362,1.1974 0.1776,2.9101 0.054,4.2902 -0.3833,1.5792 0.6738,4.3899 0.5956,4.9508 -2.0972,0.89445 -3.9832,1.2492 -4.1966,4.0482 -1.5171,1.8159 -2.8392,4.4947 -3.175,5.3435 1.4004,1.3146 2.9768,5.1606 -0.2519,4.8479 -3.1739,2.0196 -5.5719,-0.59515 -9.428,-0.44071 -1.9265,3.3942 -5.5684,-4.0834 -5.2831,-6.3066 3.4096,-5.4557 -3.2523,-8.8752 -7.2447,-11.261 0.057,-3.469 3.164,-6.3636 -0.6695,-9.569 -1.6384,-4.4071 -8.2428,-2.0574 -11.931,-3.5996 -5.0435,0.74994 -5.8291,-5.9365 -8.5621,-8.0917 -0.008,-1.3923 -6.0189,-0.10722 -8.9011,-1.5964 -4.1164,-2.2605 -8.7547,3.5394 -8.016,-3.7487 -0.40352,-3.7022 -1.4054,-7.0453 -2.6413,-10.124 -4.0213,-2.1964 4.534,-3.0654 6.2008,-4.6992 0.48194,-3.0511 -4.9394,-0.90549 0.22634,-3 2.029,-0.52998 3.0566,-0.72289 4.8215,-2.0999 4.5623,1.2839 5.7757,-1.7691 5.4331,-4.3496 2.3078,-1.0144 0.0619,-4.065 0.6213,-4.3009 2.112,-3.2716 -3.8268,-4.6903 -1.5533,-7.5215 3.2151,-4.0427 3.1059,-10.62 3.502,-15.922 -2.7389,-4.8115 0.29386,-2.0959 3.35166,-1.1972 4.1607,1.1194 3.9859,-5.0818 8.8027,-4.5098 3.6022,0.67552 4.4826,-5.8579 3.3216,-6.7932 0.2744,-1.4691 4.1608,-4.1295 3.4559,-7.6775 1.5332,-1.4217 0.4418,-4.1145 2.8386,-5.1562 3.3491,-0.39168 3.6456,-6.7658 7.3435,-5.1845 3.0578,-0.87229 5.3097,3.0967 8.4412,0.96183 -0.097,-0.60856 -4.9252,-2.9292 -2.7057,-3.0002 z" id="path1141" />
                                <text id="svgRegions" x="1001" y="675">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Khashuri' : 'ხაშური'; ?>
                                </text>
                            </a>
                            <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'shida-qartli/gori.php?lang=en' : 'shida-qartli/gori.php?lang=ka'; ?>" class="text-decoration-none">
                                <path id="group2-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1162.6,570.73 c 2.8157,0.51739 6.4752,1.0633 7.319,3.9824 2.765,2.0904 2.3682,5.4779 2.076,8.193 0.1163,3.6571 0.1997,5.4944 2.9619,5.2444 1.7801,2.2225 -0.086,5.698 -0.058,6.5919 0.8003,1.8084 2.0245,0.35328 2.4692,2.6996 0.8038,0.90016 2.6934,1.882 3.1908,4.5 0.2129,1.4663 3.4846,1.7006 3.2017,3.4006 2.4201,1.2516 -0.155,3.3226 1.8496,4.5509 0.7879,2.7648 -1.2227,3.0695 -0.6428,1.0587 -0.2188,-2.3669 -3.6738,2.2123 -2.5613,4.1368 1.6868,1.634 -1.6853,5.0192 1.5613,5.9043 1.0513,2.5862 2.4085,0.0709 2.5,-1.7969 0.8125,-3.0994 1.616,-8.0361 4.6702,-9.3028 3.2669,1.6234 1.1812,-5.3735 4.6343,-2.1621 1.2145,1.6775 2.6227,-2.7262 3.6411,-0.006 2.765,3.0124 2.3326,-1.4135 5.1255,-0.68157 2.6605,-1.0812 5.1439,-2.0907 3.5748,1.5664 0.2986,1.2406 -0.186,4.9406 -0.3049,5.7804 0.5899,1.1882 3.2001,2.2385 3.1614,4.5027 3.3121,-0.18311 2.8475,-5.0462 5.6934,-1.2012 1.6052,2.4727 4.3628,3.8931 7.1953,3.4512 1.1184,0.44487 1.8989,1.8572 0.4121,2.7792 0.3176,2.2218 2.7695,3.623 1.4439,4.2657 -2.0608,2.4832 -2.7803,7.4685 -5.2742,8.0897 0.2746,1.8484 2.7753,5.1095 0.1241,7.1037 -4.1188,4.0931 3.0183,4.5436 5.0801,2.5722 3.2705,-1.0686 2.0611,-3.0744 4.4608,-5.1739 -7e-4,-1.751 -2.0027,-1.533 2.0643,-2.2909 0.735,-2.7573 1.2052,1.5766 2.4497,0.94132 -0.2956,3.2063 -4.7818,4.9088 -0.5937,6.4492 2.4148,3.8064 -4.8555,3.082 -2.8354,7.2336 -0.6342,3.5616 -2.4755,2.7551 -0.5414,5.7998 -0.3314,2.944 0.4266,6.2464 -1.2581,8.8184 1.6298,1.5217 4.7174,1.0345 4.556,3.6504 1.6045,1.2503 4.8348,0.62651 5.7038,2.7072 2.1844,3.1648 -0.5494,1.0951 -2.4964,2.3809 -2.7147,0.90161 1.2084,3.4069 -1.541,3.8107 -2.5524,1.0484 -3.6075,-0.93948 -5.4654,-1.5001 -1.8025,-0.74957 -2.3039,-3.1288 -2.7451,-4.7991 -3.2625,-0.22232 -5.8946,-3.051 -8.3965,1.418 -0.085,2.1268 0.2262,3.6717 -1.123,4.7324 0.5701,2.6817 -1.5938,2.0156 -3.2058,1.1912 -0.9458,-2.2908 -1.8705,-0.38132 -2.8421,1.207 -0.85,-1.6153 -1.7631,2.4681 -3.879,1.8008 -1.7605,0.39309 -3.513,1.537 -4.0271,1.1188 -1.006,1.1405 -2.7309,4.5767 -5.4365,2.6316 -2.7724,-0.98671 -3.6421,0.0593 -4.008,2.6934 -1.3883,2.1863 2.2608,2.5979 0.7498,4.207 -1.2647,2.6358 1.0844,4.2334 2.0996,5.9492 2.1822,0.33689 0.2363,1.5607 1.2034,2.85 1.7104,1.733 1.9654,1.4822 0.5856,2.0021 -0.8598,2.7636 4.7056,4.0361 -0.9004,5.291 -2.256,1.6141 -5.4078,3.2216 -7.1994,4 -1.38,1.6595 -3.4506,3.7926 -1.0611,6.1079 0.7464,1.8829 4.0777,0.42071 5.9581,1.6506 1.438,-0.57155 1.8048,0.86184 3.5909,-0.5997 0.5494,-1.4735 3.056,-0.98984 3.6684,-2.4004 2.7413,-0.011 3.1018,-1.4687 5.0419,-2.0998 1.8431,-1.0175 1.7099,1.9265 2.7532,2.4067 0.5255,1.5545 2.1517,3.0408 2.096,4.8444 -2.6063,0.15456 -3.1904,2.5351 -3.5901,5.1 -1.8996,1.1273 -1.8022,4.7946 -5.2504,3.6 -1.5961,2.9367 2.9656,5.4808 2.672,8.6993 -1.5622,0.38656 -1.4091,1.3692 -3.8941,2.2502 -2.2571,0.25648 -2.1317,-0.88805 -3.4502,0.59979 -0.9725,2.0826 -3.5291,1.9043 -5.8492,2.5511 -0.9608,2.1116 -4.7551,1.5928 -6.8945,2.4005 -0.018,2.2 -3.3396,2.4944 -2.6942,5.0569 1.045,0.93275 1.2495,2.5301 1.7945,3.3361 -1.6001,2.0251 1.6122,3.2977 0.5727,5.0082 -3.0681,1.7266 -6.099,0.19763 -9.2116,2.0045 -2.9285,2.2474 -5.9403,-0.72911 -8.5965,0.49346 -2.7992,-0.6133 -5.0988,-3.1783 -7.8168,-1.1992 -2.9442,0.60802 -4.5495,-1.9593 -5.8595,-3.3008 -2.4804,0.22962 -5.4156,2.2696 -8.4105,0.74996 -2.4253,0.45056 -3.7064,2.147 -5.7381,1.0996 -2.6148,0.97031 -5.3862,0.15825 -7.6626,-0.3497 -1.6451,1.8201 -4.844,2.1869 -5.8244,-0.29879 -3.3351,-0.41484 -5.61,1.0295 -8.2458,-0.75002 -2.7635,0.6114 -3.2726,-2.2364 -4.505,-3.5586 -4.5633,0.16759 -3.9322,-6.4431 -4.2441,-10.047 -3.9646,4.0492 -9.257,0.33047 -13.617,-1.2076 -3.4474,-2.5245 -8.2196,-2.1521 -11.795,-5.1041 -0.7645,-2.6045 -3.4506,-1.9924 -3.9122,-4.8899 -1.7016,-2.3662 -0.3076,-4.9868 1.8901,-5.8086 0.167,-3.343 4.8727,-0.89186 4.5459,-4.3732 2.8849,-1.5647 0.4405,-4.6031 2.8526,-7.0469 0.8369,-2.1986 3.1633,-3.5071 4.0526,-5.5528 1.3549,-0.34072 4.2002,0.84786 4.6432,-1.066 0.6568,-2.4596 -0.3167,-4.8725 3.1702,-5.7368 2.9953,-0.23661 3.1825,-5.7488 6.172,-3.8472 2.6465,-1.0871 5.3206,0.3884 7.9299,-0.42722 1.2385,-2.1564 4.6799,-0.97121 4.8735,-4.1622 2.8066,0.0482 3.8805,-2.1233 4.9242,-4.2509 1.3141,-2.1775 3.7866,-4.1054 2.9858,-6.5129 2.5621,-0.56733 1.6719,-3.2208 3.8469,-3.3923 0.5961,-1.1268 -0.8679,-3.6631 1.6811,-4.2033 2.4989,-0.1389 1.5691,-4.1208 4.3745,-4.3496 2.4156,-0.64 0.6939,-5.8268 -0.969,-6.1193 -0.3945,-0.88975 -1.137,-3.5684 0.6566,-5.0351 1.9276,-1.301 2.5014,-5.1668 5.2365,-2.7968 2.0161,0.96671 5.2945,-1.4457 5.9918,1.3497 2.8037,1.4193 3.1318,-2.5479 5.3482,-2.5487 0.1818,-2.4605 2.5197,1.3568 3.7605,-0.59999 1.1362,-1.7179 0.4597,-2.9287 -0.762,-4.3009 -1.084,-0.90942 -0.8921,-3.496 -3.7444,-2.6996 0.1783,-1.1501 -3.0178,-2.3416 -3.933,-3.7499 -4.1997,0.92993 -3.9378,-2.1896 -5.225,-4.5 0.4378,-3.4342 -2.8286,-2.1178 -4.1986,-3.92 0.4491,-2.3178 2.122,-6.232 -1.4868,-6.131 -2.0723,-1.1051 -5.6761,-0.483 -6.9129,-2.6992 -3.8286,0.24534 -2.9682,-2.5575 -0.6393,-4.6543 -4.0874,-1.9619 -3.2275,-3.1603 -2.211,-6.4128 0.9127,-3.4703 -1.8005,-5.0234 -4.1449,-5.5838 1.4687,3.1971 -5.8031,2.7405 -2.7445,0.168 -0.4029,-2.3614 -2.7687,-3.0492 -2.401,-5.8269 -2.9366,-0.2543 -3.3193,-2.3442 -1.0492,-4.1328 -0.6989,-2.333 -0.1559,-5.5832 0.1313,-8.625 1.0266,-2.4978 4.2002,-5.1373 2.8164,-7.5841 4.1786,-3.5816 -3.4141,-3.6024 -2.7595,-5.1016 4.1194,2.0187 3.6388,-4.3762 0.2031,-5.2578 -2.2368,-0.50337 -4.3268,-4.8005 -1.1002,-2.2364 2.0323,3.8709 5.8606,3.1466 7.0025,4.2052 2.8845,-0.69292 3.8452,2.7168 6.044,1.6404 1.6685,0.87313 5.356,3.3521 6.1057,0.7909 2.1931,-0.59103 2.4262,-3.3438 3.906,-4.541 3.9716,0.28111 7.4576,-0.40221 10.987,0.004 1.3862,1.9935 3.808,-1.2681 4.75,-2.514 -1.0234,-2.8378 1.8869,-4.1146 4.418,-5.1387 0.9984,-0.12245 0.8313,-0.56141 0.5329,-1.2164 z" id="path11204" />
                                <text id="svgRegions" x="1160" y="675">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Gori' : 'გორი'; ?>
                                </text>
                            </a>

                        </g>
                    </svg>
                </div>
            </div>

            <!-- Right Table -->
            <div class="col-12 col-md-3">
                <table class="table table-hover">
                    <?php
                    include('connection.php');
                    $tableRight = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'key_indicators_en' : 'key_indicators';
                    $query = mysqli_query($link, "select * from " . $tableRight);
                    while ($row = mysqli_fetch_array($query)) {
                        $keyIndicator[$row['ID']] = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? $row['keyIndicatorsEn'] : $row['keyIndicators'];
                        $dataContent[$row['ID']] = $row['dataContent'];
                    }
                    $query = mysqli_query($link, "select * from `regions` where ID = 12");
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
                </table>
            </div>
        </div>
    </main>

    <?php include 'asset/components/footer.php' ?>

    <script src="script.js"></script>
    <script type="text/javascript" src="lang.js"></script>
    <script>
        localStorage.setItem('region', 'shida_kartli');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>