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
    <meta property="og:title" content="<?php echo $lang['guriatitlename'] ?>" />
    <meta property="og:description" content="<?php echo $lang['guriatitlename'] ?>" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <title class="tr" Key="PAGE_TITLE"><?php echo $lang['guriatitlename'] ?></title>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <!-- Bootstrap 5.3.0 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="samegrelo.css">
    <link rel="stylesheet" type="text/css" href="guria/guria.css">
    <link rel="stylesheet" type="text/css" href="custom.css">
    <link rel="stylesheet" href="mediastyles.css"
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/main%20information/area.xlsx' : '/regions/regions/3/dziritadi%20informacia/regionis%20fartobi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia1">
                            <td>
                                <?php echo $basicInformation[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/main%20information/number%20of%20settlements.xlsx' : '/regions/regions/3/dziritadi%20informacia/municipalitetebis,%20qalaqebis%20da%20soflebis%20raodenoba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population/Number%20of%20population/Guria.xlsx' : '/regions/regions/მოსახლეობა/მოსახლეობის%20რიცხოვნობა/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia22">
                            <td>
                                <?php echo $population[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population/Share%20of%20urban%20population/Guria.xlsx' : '/regions/regions/მოსახლეობა/საქალაქო%20დასახლებაში%20მცხოვრები/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia22">
                            <td>
                                <?php echo $population[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population/Density%20of%20population/Guria.xlsx' : '/regions/regions/მოსახლეობა/მოსახლეობის%20სიმჭიდროვე/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20live%20births/Guria.xlsx' : '/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20birth%20rate/Guria.xlsx' : '/regions/regions/დემოგრაფია/შობადობის%20ზოგადი%20კოეფიციენტი/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Guria.xlsx' : '/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Quantitative%20ratio%20of%20sexes/Guria.xlsx' : '/regions/regions/სქესთა%20რაოდენობრივი%20თანაფარდობა/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['6']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Mean%20age%20of%20childbearing/Guria.xlsx' : '/regions/regions/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['7']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20stillbirths/Guria.xlsx' : '/regions/regions/დემოგრაფია/მკვდრადშობილთა%20რიცხოვნობა/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['8']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20stillbirths%20by%20sex/Guria.xlsx' : '/regions/regions/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths/Guria.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20death%20rate/Guria.xlsx' : '/regions/regions/დემოგრაფია/მოკვდაობის%20ზოგადი%20კოეფიციენტი/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Guria.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Infant%20mortality%20rate/Guria.xlsx' : '/regions/regions/დემოგრაფია/ჩვილ%20ბავშვთა%20მოკვდაობის%20კოეფიციენტი/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['6']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Under-5%20mortality%20rate/Guria.xlsx' : '/regions/regions/დემოგრაფია/5%20წლამდე%20ასაკის%20ბავშვთა%20მოკვდაობის%20კოეფიციენტი/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['7']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Guria.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['8']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20by%20urban-rural%20settlements/Guria.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20საქალაქო%20სასოფლო%20დასახლებების%20მიხედთვით/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['9']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20by%20age%20groups/Guria.xlsx' : '/regions/regions/დემოგრაფია/მიზეზები%20ძირითადი%20კლასების%20და%20ასაკის%20მიხედვით/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['10']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Deaths%20from%20suicide/Guria.xlsx' : '/regions/regions/დემოგრაფია/თვითმკვლელობით%20გარდაცვლილთა%20რიცხოვნობა/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['11']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Suicide%20rate/Guria.xlsx' : '/regions/regions/დემოგრაფია/თვითმკვლელობის%20შედეგად%20სიკვილიანობის%20კოეფიციენტი/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Natural%20increase/Guria.xlsx' : '/regions/regions/დემოგრაფია/ბუნებრივი%20მატება/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia5">
                            <td>
                                <?php echo $naturalIncrease['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Natural%20increase%20rate/Guria.xlsx' : '/regions/regions/დემოგრაფია/ბუნებრივი%20მატების%20კოეფიციენტი/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20registered%20marriages/Guria.xlsx' : '/regions/regions/დემოგრაფია/რეგისტრირებულ%20ქორწინებათა%20რაოდენობა/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia6">
                            <td>
                                <?php echo $marriage['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20marriage%20rate/Guria.xlsx' : '/regions/regions/დემოგრაფია/ქორწინების%20ზოგადი%20კოეფიციენტი/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia6">
                            <td>
                                <?php echo $marriage['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20married%20people/Guria.xlsx' : '/regions/regions/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia6">
                            <td>
                                <?php echo $marriage['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Mean%20age%20of%20spouses/Guria.xlsx' : '/regions/regions/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20registered%20divorces/Guria.xlsx' : '/regions/regions/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia7">
                            <td>
                                <?php echo $divorce['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20divorce%20rate/Guria.xlsx' : '/regions/regions/დემოგრაფია/განქორწინების%20ზოგადი%20კოეფიციენტი/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia7">
                            <td>
                                <?php echo $divorce['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Guria.xlsx' : '/regions/regions/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Median%20age%20of%20population/Guria.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Guria.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Age%20dependency%20ratios/Guria.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Number%20of%20population/Guria.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['6']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Share%20of%20working%20age%20population/Guria.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['7']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Number%20of%20private%20households/Guria.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/კერძო%20შინამეურნეობები/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $gdbAndValueAdded[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/gdp%20and%20va/gdp%20and%20va.xlsx' : '/regions/regions/3/mshp%20da%20damatebuli%20girebuleba/mshp%20da%20damatebuli%20girebuleba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $foreignDirectInvestment[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/ext.trade%20and%20foreign%20direct%20invset/ext.trade%20and%20foreign%20direct%20invset.xlsx' : '/regions/regions/3/pirdapiri%20uckhouri%20investiciebi/pirdapiri%20uckhouri%20investiciebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/employment%20and%20unemployment/employment%20and%20unemployment.xlsx' : '/regions/regions/3/dasaqmeba_umushevroba/dasaqmeba_umushevroba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia17">
                            <td>
                                <?php echo $employmentAndSalaries[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/employment%20and%20unemployment/wages.xlsx' : '/regions/regions/3/dasaqmeba_umushevroba/khelfasi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <style>
                            /* ვმალავთ, რადგან არ გვაქვს ფაილები */
                            #dziritadi16,
                            .informacia16 {
                                display: none;
                            }
                        </style>
                        <tr>
                            <td id="dziritadi16" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '' : ''; ?>"><?php echo $pricesAndInflation[1]; ?>
                            </td>
                        </tr>
                        <tr class="informacia16">
                            <td>
                                <?php echo $pricesAndInflation[2]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/prices/consumer%20price%20index%2012%20month%20avarage%20over%20the%20previous%2012%20month%20avarage%20-%20gori.xlsx' : '/regions/regions/3/fasebi/samomxmareblo%20fasebis%20indeqsebi%2012%20tvis%20sashualo%20wina%2012%20Tvis%20saSualosTan%20-%20gori.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia16">
                            <td>
                                <?php echo $pricesAndInflation[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/prices/consumer%20price%20index%20to%20the%20previous%20month%20-%20gori.xlsx' : '/regions/regions/3/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20tvestan%20-%20gori.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia16">
                            <td>
                                <?php echo $pricesAndInflation[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/prices/consumer%20price%20index%20to%20the%20same%20month%20of%20previous%20year%20-%20gori.xlsx' : '/regions/regions/3/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20wlis%20shesabamis%20TvesTan%20-%20gori.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/standard%20of%20living/incomes.xlsx' : '/regions/regions/3/ckhovrebis%20done/shemosavlebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia18">
                            <td>
                                <?php echo $standartOfLiving[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/standard%20of%20living/expenditures.xlsx' : '/regions/regions/3/ckhovrebis%20done/kharjebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/business%20sector/by%20kind%20of%20activity_nace%20rev.2.xlsx' : '/regions/regions/3/biznes%20seqtori/saqmianobis%20mikhedvit_nace%20rev.2.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia14">
                            <td>
                                <?php echo $businessSector[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/business%20sector/by%20ownership.xlsx' : '/regions/regions/3/biznes%20seqtori/sakutrebis%20formis%20mikhedvit.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia14">
                            <td><?php echo $businessSector[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/business%20sector/by%20size.xlsx' : '/regions/regions/3/biznes%20seqtori/zomis%20mikhedvit.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/agriculture/1.%20Annual%20crops.xlsx' : '/regions/regions/3/soflis%20meurneoba/1.%20erttsliani%20kulturebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia15">
                            <td>
                                <?php echo $agriculture[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/agriculture/2.%20Production%20of%20permanent%20crops.xlsx' : '/regions/regions/3/soflis%20meurneoba/2.%20mravaltslovani%20kulturebis%20tsarmoeba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia15">
                            <td>
                                <?php echo $agriculture[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/agriculture/3.%20Number%20of%20livestock.xlsx' : '/regions/regions/3/soflis%20meurneoba/3.%20pirutkvis%20suladoba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia15">
                            <td>
                                <?php echo $agriculture[5]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/agriculture/4.%20Production%20of%20animal%20housbandry.xlsx' : '/regions/regions/3/soflis%20meurneoba/4.%20metskhoveleobis%20produktsiis%20tsarmoeba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $industry[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/industry/industry.xlsx' : '/regions/regions/3/mretsveloba/mretsveloba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/construction/mshenebloba_nebartvebi.xlsx' : '/regions/regions/3/mshenebloba/mshenebloba_nebartvebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia13">
                            <td>
                                <?php echo $construction[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/construction/eqspluataciashi%20migebuli%20obieqtebi.xlsx' : '/regions/regions/3/mshenebloba/eqspluataciashi%20migebuli%20obieqtebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia13">
                            <td>
                                <?php echo $construction[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/construction/mshenebloba_dziritadi%20machveneblebi.xlsx' : '/regions/regions/3/mshenebloba/mshenebloba_dziritadi%20machveneblebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/By%20organizational%20legal%20forms/Guria%20Region.xlsx' : '/regions/regions/მომსახურება/ორგანიზაციულ%20სამართლებრივი/გურიის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $service[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/By%20ownership%20type/Guria%20Region.xlsx' : '/regions/regions/მომსახურება/საკუთრების%20ფორმების%20მიხედვით/გურიის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $service[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Number%20of%20markets%20and%20fairs%20by%20type/Guria%20Region.xlsx' : '/regions/regions/მომსახურება/ტიპების%20მიხედვით/გურიის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $service[5]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Days%20of%20trade/Guria%20Region.xlsx' : '/regions/regions/მომსახურება/ვაჭრობის%20დღეთა%20რაოდენობის%20მიხედვით/გურიის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $service[6]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Employed%20persons/Guria%20Region.xlsx' : '/regions/regions/მომსახურება/დირექციაში%20დასაქმებულები/გურიის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $service[7]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Market-place%20and%20sellers/Guria%20Region.xlsx' : '/regions/regions/მომსახურება/სავაჭრო%20ადგილები%20და%20მოვაჭრეთა%20რაოდენობა/გურიის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $service[8]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Financial%20indices%20of%20markets/Guria%20Region.xlsx' : '/regions/regions/მომსახურება/საფინანსო%20მაჩვენებლები/გურიის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $trading[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/trade/trade.xlsx' : '/regions/regions/3/vachroba/vachroba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/hotels%20and%20restaurants/hotels%20and%20restaurants.xlsx' : '/regions/regions/3/sastumroebi%20da%20restornebi/sastumroebi%20da%20restornebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <?php echo $hotelsAndRestaurants[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Hotels/Guria%20Region.xlsx' : '/regions/regions/სასტუმროები/რაოდენობა%20და%20ფართობი/გურიის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <?php echo $hotelsAndRestaurants[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Rooms/Guria%20Region.xlsx' : '/regions/regions/სასტუმროები/ნომრების%20რაოდენობა/გურიის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <?php echo $hotelsAndRestaurants[5]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Guests/Guria%20Region.xlsx' : '/regions/regions/სასტუმროები/სტუმართა%20რაოდენობა/გურიის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <?php echo $hotelsAndRestaurants[6]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Employees/Guria%20Region.xlsx' : '/regions/regions/სასტუმროები/დასაქმებულთა%20რაოდენობა/გურიის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/transport%20and%20communication/transport%20and%20storage.xlsx' : '/regions/regions/3/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia10">
                            <td>
                                <?php echo $transportAndStorage[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/transport%20and%20communication/number%20of%20motor%20vehicles.xlsx' : '/regions/regions/3/transporti%20da%20kavshirgabmuloba/registrirebuli%20avtomobilebis%20raodenoba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia10">
                            <td>
                                <?php echo $transportAndStorage[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/transport%20and%20communication/the%20length%20of%20the%20roads.xlsx' : '/regions/regions/3/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/tourism/place%20of%20residence.xls' : '/regions/regions/3/turizmi/ganawileba%20sacxovrebeli%20adgilis%20mixedvit.xls'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia11">
                            <td>
                                <?php echo $tourism[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/tourism/visited%20regions.xls' : '/regions/regions/3/turizmi/ganawileba%20monaxulebuli%20regionebit.xls'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $legalStatistics[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/justice%20statistics/justice%20statistics.xlsx' : '/regions/regions/3/samartlebrivi%20statistika/samartlebrivi%20statistika.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <style>
                            #dziritadi20,
                            #dziritadi21 {
                                display: none;
                                margin-left: 20px;
                            }
                        </style>
                        <tr>
                            <td id="dziritadiMain20" title="" onclick="GetIdChange(); healthcareShow();" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $healthCareAndSocialSecurity['1'] ?></td>
                        </tr>
                        <tr>
                            <td id="dziritadi20" onclick="GetIdChange();" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $healthCareAndSocialSecurity['2']; ?>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Indicators/Guria.xlsx' : '/regions/regions/ჯანდაცვა/მაჩვენებლები/გურია.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Abortions/Guria.xlsx' : '/regions/regions/ჯანდაცვა/აბორტები/გურია.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Anemia/Guria.xlsx' : '/regions/regions/ჯანდაცვა/ანემია/გურია.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['6']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Diabetes/Guria.xlsx' : '/regions/regions/ჯანდაცვა/დიაბეტი/გურია.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['7']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Cancer/Guria.xlsx' : '/regions/regions/ჯანდაცვა/კიბო/გურია.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['8']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Circulatory/Guria.xlsx' : '/regions/regions/ჯანდაცვა/სისხლის%20მიმოქცევა/გურია.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['9']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Respiratory/Guria.xlsx' : '/regions/regions/ჯანდაცვა/სუნთქვა/გურია.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['10']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Syphilis/Guria.xlsx' : '/regions/regions/ჯანდაცვა/ათაშანგი/გურია.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['11']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/AIDS/Guria.xlsx' : '/regions/regions/ჯანდაცვა/შიდსი/გურია.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['12']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Tuberculosis/Guria.xlsx' : '/regions/regions/ჯანდაცვა/ტუბერკულიოზი/გურია.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['13']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Hepatitis/Guria.xlsx' : '/regions/regions/ჯანდაცვა/ჰეპატიტი/გურია.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi21" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $healthCareAndSocialSecurity['14']; ?>
                            </td>
                        </tr>
                        <tr class="informacia21">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['15']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Social%20Statistic/Indicators/Guria.xlsx' : '/regions/regions/სოციალური%20სტატისტიკა/მაჩვენებლები/გურია.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia21">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['16']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Social%20Statistic/Disability%20Persons/Guria.xlsx' : '/regions/regions/სოციალური%20სტატისტიკა/დევნილი%20შშმ%20პირები/გურია.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia21">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['17']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Social%20Statistic/Disabilities%20Registered/Guria.xlsx' : '/regions/regions/სოციალური%20სტატისტიკა/რეგისტრირებული%20შშმ%20პირები/გურია.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia21">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['18']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Social%20Statistic/Subsistence%20Allowance/Guria.xlsx' : '/regions/regions/სოციალური%20სტატისტიკა/საარსებო/გურია.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia21">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['19']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Social%20Statistic/Receiving/Guria.xlsx' : '/regions/regions/სოციალური%20სტატისტიკა/მიმღები/გურია.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia21">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['20']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Social%20Statistic/Beneficiaries/Guria.xlsx' : '/regions/regions/სოციალური%20სტატისტიკა/ბენეფიციართა/გურია.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi19" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""> <?php echo $education[1]; ?><span class="float-right"><i id="classchange" class="dropdown_img_up"></i>
                            </td>
                        </tr>
                        <tr class="informacia19">
                            <td>
                                <?php echo $education[2]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Education/Preschool%20and%20Education%20Institutions/Guria.xlsx' : '/regions/regions/განათლება/სკოლამდელი%20აღზრდისა%20და%20განათლების%20დაწესებულებები/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia19">
                            <td>
                                <?php echo $education[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Education/General%20Educational%20Institution/Guria.xlsx' : '/regions/regions/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia19">
                            <td>
                                <?php echo $education[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Education/Vocational%20and%20Higher%20educational%20institutions/Guria.xlsx' : '/regions/regions/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/გურია.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $culture[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/culture/culture.xlsx' : '/regions/regions/3/kultura/kultura.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $environmentalProtection[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/environmental%20protection/environmental%20protection.xlsx' : '/regions/regions/3/garemos%20dacva/garemos%20dacva.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $infrastructure[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/3/infrastructure/infrastructure.xlsx' : '/regions/regions/3/infrastruqtura/infrastruqtura.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>




                    </tbody>
                </table>
            </div>


            <!-- Center Content -->
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                <!-- Center content goes here. Adjust height if needed or add other content. -->
                <div class="w-100 text-center p-4 rounded" style="height: 100%;">
                    <svg id="svg3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000" version="1.1">
                        <g id="layer2">
                            <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'guria/ozurgeti.php?lang=en' : 'guria/ozurgeti.php?lang=ka'; ?>" class="text-decoration-none">
                                <path id="group3-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 549.94,632.54 c 1.5901,0.39762 3.3637,2.1407 4.274,0.58046 3.1075,2.1234 -0.32383,3.4372 -0.0721,6.0844 1.3006,2.2108 -1.4662,3.1405 0.14859,4.6812 0.0332,2.8645 2.7948,0.8624 3.7502,1.7757 0.19525,1.1803 2.0809,1.7447 1.3519,3.3422 -1.3775,1.4386 0.30783,4.0901 -0.45134,6.1794 -1.1699,3.4684 5.7404,3.2356 4.1503,-0.37836 2.7098,1.2847 2.2686,-2.3544 3.5998,-3.4491 -0.0763,-2.9156 3.1143,-2.0113 4.807,-2.7003 0.8128,-2.4803 -0.49763,-3.179 0.44316,-5.5804 -0.36182,-1.3106 -2.1445,-1.5474 -1.1643,-3.2703 1.5062,-0.73495 4.3803,-0.68192 5.467,1.2265 -0.79585,0.89521 -1.201,1.7316 -0.95317,2.0234 0.15785,1.7956 2.0057,1.6282 2.445,3.25 1.1196,0.97155 -0.50538,2.5341 0.4072,3.108 0.33519,1.8018 0.50134,1.9588 2.6916,2.0919 1.6768,1.4993 4.3141,0.31184 4.9146,-1.1995 2.3309,-0.0258 -0.50435,-4.0183 2.4004,-3.4496 1.5555,0.7802 3.1395,0.81215 5.0937,-5e-5 0.0291,-0.64101 1.2292,1.6469 1.9942,1.8009 -0.75437,1.5513 0.87591,2.5786 0.60184,3.3032 -1.7785,0.31365 -1.3891,2.872 0.83929,2.846 1.1214,1.1827 3.5888,1.433 5.4634,1.9514 -0.0285,0.9105 1.8396,0.7607 2.5508,1.9495 0.76221,0.56416 0.26519,2.8913 -1.1995,2.8989 -0.85231,1.8904 -2.0523,1.7294 -1.9512,4.0023 1.4774,0.28802 0.18809,0.79766 0.74995,1.3498 0.76069,1.0395 1.3083,2.2921 1.9512,3.4494 0.87001,-0.17439 3.5253,2.35 3.3986,0.90067 1.6374,-0.4606 1.6156,3.4941 4.2501,1.4689 -0.69418,2.5307 2.4579,3.7743 4.2793,3.8674 -2.221,3.4393 1.8628,5.4075 3.8886,7.1134 -0.52612,2.5356 2.1656,5.3304 3.9748,7.6579 2.4437,3.1117 2.4907,7.6833 6.4414,9.6077 1.6754,1.8013 4.5379,2.031 4.2166,4.4847 0.9516,1.2535 2.5317,0.51351 4.0452,0.60176 2.8785,1.7068 -2.3536,3.7467 -1.3456,5.8694 0.0139,3.5158 3.1433,5.3627 3.3874,8.7176 -1.2166,1.8228 -1.0078,5.8893 -2.2291,6.6108 -3.3561,-1.0465 -6.4592,0.3844 -9.5566,1.0508 -2.2909,0.12818 -2.5139,4.6911 -4.0938,2.9999 -3.1159,-0.54567 -2.7867,5.174 -6.2324,4.1992 -3.9543,1.1495 -0.27314,-4.4474 -2.9648,-6.2988 -1.6359,-1.4211 -3.0821,-2.1856 -3.9434,-4.5782 -1.3626,-2.8127 -4.6344,-3.7346 -6.6835,-1.7227 -1.3511,-0.96497 -3.6717,-0.099 -3.754,-0.17774 -1.1963,-0.0851 -2.3648,1.5987 -3.6799,2.5705 -1.694,0.23049 -1.8081,-3.4847 -4.0923,-3.8925 -1.8049,-1.0537 -3.4156,-0.602 -5.1077,-1.5058 -0.77333,-1.4312 -3.0146,1.243 -3.7618,2.4609 -1.9902,2.52 -5.2767,4.2523 -7.215,7.0802 0.714,-0.50685 -0.15621,-3.8451 -1.8146,-4.1 0.78103,-3.2106 -1.9214,-5.3096 -4.6582,-5.5835 -1.8177,-0.45138 -5.0756,0.59896 -6.3125,-1.8711 -2.4907,-1.1027 -2.6322,-4.6278 -5.338,-5.1876 -0.27654,-1.4616 -3.354,-1.6503 -3.9004,-2.2422 -2.6533,-0.42426 -6.3692,1.1414 -8.4532,-0.96094 -1.7179,-1.3683 -4.1525,-1.8383 -3.6974,-4.8195 0.36708,-1.8322 -0.39441,-2.836 -0.75,-4.6202 0.89887,-0.89841 1.4164,-4.095 0,-4.75 0.77924,-2.0287 -1.8407,-1.319 -2.6994,-2.8499 -1.3947,-0.31916 -1.4207,-2.2927 -3.1506,-2.256 -0.99033,-1.4653 -3.69,-1.055 -5.1915,-1.5939 0.12815,-3.4439 -1.737,-0.47247 -2.7578,-0.94918 -1.3555,0.39134 -1.8204,1.9136 -2.9513,2.5488 0.63932,2.1267 -1.7974,2.0282 -3.1222,1.6506 -1.9639,-0.72314 -3.8029,1.9625 -5.0266,0.44923 -1.4378,-0.66192 -2.7358,-1.4635 -4.0509,-2.2481 -1.9147,-0.68154 -2.6085,-0.14865 -3.9006,-0.75002 -0.666,-0.8698 -2.5078,-0.56379 -2.25,-2.3574 -1.3635,0.59482 -2.1828,0.12048 -3.8498,1.1561 -0.58787,-0.007 -1.9698,2.6676 -2.2989,1.3496 -0.1874,-2.3065 -1.6653,-2.9229 -3.748,-1.5 -2.7784,1.6882 -5.3533,0.11308 -8.1034,-0.14844 -1.0327,-1.2482 -1.6496,-2.5075 -2.0969,-4.9387 -1.6376,-3.8258 -0.60611,-8.9579 -1.2017,-13.317 -0.0523,-6.3667 -1.379,-13.046 -0.69336,-19.194 -0.14171,-2.2863 -0.80997,-4.8991 -0.95703,-7.451 2.9094,0.0286 -0.0625,-4.9729 2.3007,-3.2305 -0.96043,0.60396 1.6445,1.6635 1.0491,3.1234 -0.58585,3.0273 0.26905,3.6876 2.3928,4.9086 1.2682,-0.2862 2.7932,-1.7371 3.7501,-0.30073 2.3968,-0.0213 1.4129,-4.2528 3.457,-2.549 2.8269,0.56054 3.808,-1.1342 5.2016,-1.7954 1.1432,-1.5416 1.5921,2.1076 3.3402,0.29479 0.65596,-1.2318 1.7025,0.79221 2.7093,1.1995 3.4485,0.12998 1.837,1.4242 0.34566,3.1485 2.1095,0.47414 1.7083,2.0224 3.1041,1.1576 1.5104,-1.2258 2.3618,-0.72556 2.9506,-3.2573 1.3955,-1.18 1.0439,-0.10439 2.6363,0.30078 2.9094,-1.0981 0.74065,3.933 3.4634,3.4493 -0.87623,-0.10521 3.7755,0.13551 2.9512,2.25 0.69755,1.25 3.608,0.46955 3.8986,-0.89258 0.18542,1.9364 5.3422,-0.66802 4.3008,-1.5001 1.8671,-0.85767 1.804,-3.6535 2.7465,-4.5045 2.1988,0.72592 4.9601,1.5996 4.9043,-0.45311 3.131,-0.0427 0.20001,-4.1442 2.0449,-4.5901 1.4915,-1.0304 4.4486,-0.94319 4.0509,-3.1486 1.6782,-2.0288 -0.0561,-3.8895 3.8502,-4.0288 z" id="path1001" />
                                <text id="svgRegions" x="510" y="675">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Ozurgeti' : 'ოზურგეთი'; ?>
                                </text>
                            </a>
                            <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'guria/choxatauri.php?lang=en' : 'guria/choxatauri.php?lang=ka'; ?>" class="text-decoration-none">
                                <path id="group3-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 607.87,621.96 c 1.4586,1.4339 3.6441,4.1278 4.2715,1.8144 0.40959,-2.2567 2.6311,0.97953 4.094,-1.4e-4 1.9313,-0.22471 0.33401,1.1849 -1.165,0.34977 -0.60361,2.14 1.0763,2.63 2.0656,3.5491 1.7743,-0.58534 2.4008,3.0036 4.2033,2.7051 0.61744,1.6654 1.0872,3.9687 3.711,2.3965 2.9078,2.3575 3.7282,-1.5324 5.0469,-1.1408 2.2277,0.73672 2.8292,2.2208 4.8242,1.1835 1.8934,-2.5238 2.5843,-2.7178 4.4508,-1.5428 1.4821,0.40915 1.4216,1.878 2.3697,2.256 0.95697,1.5947 1.1043,3.2552 1.9436,4.9435 2.1132,0.0946 2.5427,-1.6804 4.7579,-1.6504 0.62972,0.0983 2.3533,0.11788 2.4498,0.64387 1.6019,1.6942 2.0305,-1.5132 3.7678,-1.8432 3.191,-0.89575 -0.48567,-2.7721 0.68358,-4.2012 1.6213,-1.0702 2.4208,-1.7127 4.7988,-1.4981 1.3107,-0.64496 2.7022,1.2715 3.8009,1.5062 -0.37226,1.5362 3.2282,2.2292 3.256,-0.008 2.2226,-1.0366 2.9634,1.2363 4.5431,1.6564 -0.4001,0.67143 0.6696,2.2135 1.6506,3.1448 1.2824,0.95971 0.74252,1.6878 1.9512,3.521 0.33227,1.3245 0.0879,3.6356 0.29283,5.0787 -1.1674,-0.0988 0.27832,5.194 3.0059,3.5508 -0.0909,2.0078 1.2368,2.1153 2.6936,2.6877 0.0323,1.4286 1.3574,1.5469 1.9572,2.4006 1.8191,-0.0114 3.3111,2.6374 4.0494,0.75014 1.5484,0.51198 1.6287,1.7031 2.437,2.8496 2.2858,0.64653 2.2043,-3.1326 4.0672,-0.83766 1.6933,1.4352 2.4212,0.32193 3.8477,-0.8556 0.77532,1.656 2.3143,2.7308 4.3498,2.3285 3.3981,2.9278 7.0648,7.5039 11.082,10.605 2.5432,2.3194 5.4919,4.012 8.4179,6.1739 2.0848,4.236 6.6184,1.0958 9.9233,2.2363 2.9733,-0.73188 6.4344,1.1907 9.7764,0.52847 3.3202,0.9149 3.5383,5.0336 6.3999,6.5712 0.0173,3.4074 1.3865,6.076 1.8457,9.5839 3.4462,3.494 -2.5039,5.097 -1.5721,8.1969 1.1149,3.1983 3.0171,5.8156 -0.21497,8.5784 -1.3522,3.1624 1.0302,6.0554 -0.0586,9.2992 2.7059,3.8715 -2.578,1.4447 -4.6758,1.5465 -2.432,-0.27181 -5.8078,-2.6286 -7.6942,-0.91033 -0.26442,3.5793 -4.6043,4.0991 -4.0979,7.9556 0.48976,2.8732 -0.32387,4.1674 -2.7812,5.7704 -3.1219,0.92424 -4.6845,1.6927 -7.8155,0.52781 -2.5198,0.55069 -4.8555,-1.2884 -5.5352,-3.5997 -2.7142,-0.51521 -4.9285,0.73894 -7.7853,0.35139 -3.0255,1.1872 -6.1273,-0.0132 -9.0233,0.39866 -3.1831,-0.10804 -5.9098,-1.5808 -9.1752,-1.3099 -3.5955,-0.0588 -8.2955,-2.7887 -6.0962,-6.9205 -0.84679,-4.1996 -5.6166,-5.534 -9.25,-4.5976 -1.8318,-3.2382 -4.5856,-4.1646 -7.3428,-3.2206 -0.96926,1.6041 -1.2522,2.7886 -2.8779,3.4492 -0.85434,1.5225 -0.4893,2.3665 -1.8354,3.1506 -2.9627,-0.55726 -5.2409,0.45422 -7.1551,2.1368 -3.2084,-0.98846 -6.2042,0.30805 -8.0351,3.2012 -0.71834,3.4718 -4.4415,3.0343 -6.1862,0.84839 -0.80898,-3.9661 3.4565,-8.0396 0.11206,-11.694 -1.7968,-1.8165 -3.0152,-5.7219 -0.43745,-7.3457 1.6696,-1.9703 0.30195,-3.5831 -0.95527,-4.2483 -1.2537,-0.36175 -2.7256,0.82995 -3.3069,-0.49812 0.13283,-2.4683 -3.3906,-2.4279 -4.8114,-4.3883 -3.867,-2.0022 -3.5841,-6.6868 -6.2807,-9.6701 -2.3192,-2.0062 -3.6624,-5.3011 -3.6894,-7.5179 -4.4151,-1.2982 -3.8329,-4.85 -4.7048,-7.6172 -2.8985,0.14274 -1.0399,-1.8152 -3.1641,-3.3491 0.12356,-1.9654 -3.5264,1.1803 -2.8496,-0.30721 1.119,-0.55553 1.3414,-4.0969 -0.69919,-3.4005 -1.7876,1.1869 -1.519,2.095 -3.3517,1.7929 -1.0331,-0.56462 -1.5627,-1.6328 -1.9492,-2.8439 -1.3206,-0.59063 -1.5576,-3.446 -4e-5,-3.7993 1.2483,-1.167 1.9543,-2.0781 2.957,-4.1508 -0.98375,-0.25165 -2.4027,-3.2849 -3.1583,-3.0569 -0.74074,-0.10888 -2.3796,-1.1644 -3.9982,-1.2954 -3.0451,0.29406 -0.39766,-1.937 -1.9511,-2.0998 -2.2644,-0.89632 -0.87307,-4.766 -2.6992,-5.8502 -1.1357,-0.65798 0.0593,-3.4533 -1.651,-3.2554 -2.1166,0.49243 -0.19649,-0.99841 -0.89994,-2.1458 0.87146,-0.9874 1.3773,-3.318 0.90054,-4.6996 0.5198,-1.2819 0.48906,-3.1733 2.0997,-4.0314 0.0898,-1.4907 -1.9282,-3.6697 0.75791,-3.9064 1.0297,-1.0874 1.5778,-5.374 1.2852,-2.4005 3.0944,0.003 4.3766,-1.4942 7.625,-1.1992 1.2656,-0.62359 2.1499,-1.9773 2.4073,-3.312 z" id="path999" />
                                <text id="svgRegions" x="629" y="685">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Chokhatauri' : 'ჩოხატაური'; ?>
                                </text>
                            </a>
                            <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'guria/lanchxuti.php?lang=en' : 'guria/lanchxuti.php?lang=ka'; ?>" class="text-decoration-none">
                                <path id="group3-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 541.35,583.12 c 1.4838,0.55858 1.2741,3.4974 3.7325,2.4966 0.77411,1.7046 3.1731,2.8944 4.9611,2.3046 0.19735,-2.2174 3.6672,0.22754 4.3578,-1.5001 1.536,-0.83544 4.1535,-1.9325 6.0433,-0.59965 1.2467,0.62587 2.4021,1.5955 4.1584,0.44927 1.363,0.63651 3.0445,0.1651 4.3985,1.051 1.8136,-0.97977 6.0959,-2.7416 5.6934,0.74995 2.6047,0.66902 6.1814,-1.499 3.592,1.8498 -0.95733,1.4356 -3.342,4.5112 0.1992,4.2463 -0.60095,1.5864 0.78529,3.2355 3.0666,1.7028 2.102,-1.0551 4.2918,1.4512 5.9999,0.30087 3.0146,-0.88952 2.9065,-0.13996 3.9433,1.6503 1.2178,0.64216 2.7869,0.6059 3.1487,2.5491 2.4564,1.2977 -1.0426,4.8138 0.34387,5.4497 2.8104,0.99907 6.1833,0.49983 9.3162,0.39984 0.9855,-2.5567 1.906,1.2408 4.9726,0.45117 2.9527,0.96069 4.6213,-0.85845 7.1113,-0.15043 1.78,1.6845 3.7763,-0.38163 4.457,-1.9434 2.4611,0.45354 -1.4926,3.7296 2.172,2.9571 0.34213,2.4683 0.84351,6.2882 -2.129,6.5351 -2.7072,0.94767 -1.1977,5.5888 0.30275,6.8536 1.5374,0.79421 1.4341,1.4567 -0.14632,2.1136 -1.6792,0.69984 -0.7329,5.6672 -1.6992,4.4842 1.6398,-1.7064 -4.4348,-1.0916 -1.6504,-2.1016 1.9975,-1.9599 -0.88148,-3.5265 -2.9921,-2.7989 -0.97062,-1.0136 -3.4009,-1.3657 -3.7072,0.29878 -1.5148,-0.51049 -4.1736,-3.8084 -4.7109,0.35545 -1.8642,2.1378 -5.158,0.33217 -6.8906,1.8945 -1.6024,-2.1832 -3.4822,-1.4033 -2.9492,1.2832 0.32765,2.2507 -3.757,1.6628 -2.4003,4.1113 0.6214,1.7841 0.69946,1.5184 -0.44903,3.0064 -0.63066,1.4658 -1.8078,2.6457 -1.2012,4.7892 -0.15785,1.6384 -1.0788,3.2125 -1.3497,4.3499 -1.1689,2.7258 4.0981,1.579 1.2951,3.1976 -1.9046,0.85132 -2.3728,0.38554 -3.6305,-0.49784 -1.0883,0.15796 -4.5167,1.067 -3.0652,1.9516 0.39683,2.2356 -1.6851,2.7547 -2.6995,3.7502 -1.9189,-0.22949 -3.1087,-1.3001 -3.5001,-1.807 -0.20293,-2.5506 0.2415,-2.888 -0.90044,-4.6448 -1.0198,-0.79636 -2.443,-1.3431 -1.5002,-2.9352 1.0636,-2.4699 -2.3592,-2.9308 -3.9292,-3.6646 -1.1266,0.64293 -3.0529,0.34453 -3.6707,1.6509 -0.62241,1.5748 0.44331,3.245 1.1994,3.4495 -0.0851,1.5026 -2.7721,2.6598 -0.49024,3.4004 2.0372,1.6328 -1.398,1.4466 -3.0014,1.5507 -0.97627,1.426 -2.2871,2.8119 -2.5065,5.0996 -3.5013,-0.47747 -1.2798,3.6278 -4.5509,3.1484 0.003,-2.1364 0.1193,-3.996 0.15047,-6.1992 0.60804,-0.90106 0.57572,-3.7836 -0.89649,-4.3029 0.74266,-1.2952 -1.94,-1.7262 -3.754,-1.4552 -1.9918,-1.801 1.5424,-2.3002 -0.15038,-3.9493 -1.8849,-2.8354 2.4212,-3.2164 1.2012,-5.6992 0.0847,-1.2215 -2.8758,-4.3964 -3.4083,-2.2421 -2.1074,-0.89314 -4.8512,-1.2652 -6.8744,0.20789 -0.45433,1.901 -0.76699,3.7554 -1.9676,4.8918 -1.6404,0.45148 -3.3805,1.0188 -4.3515,2.4761 1.3643,2.526 -0.85709,3.752 -2.9082,4.1236 -1.8361,-0.68199 -4.1731,-0.79165 -3.5412,1.6426 -0.40321,1.8339 -2.4046,2.1692 -2.5571,3.907 -2.6243,1.5058 -1.8792,-1.2228 -3.9944,-1.049 -0.56803,0.96837 0.41382,1.3234 -0.80679,2.4008 -1.5031,-0.45301 -1.6132,-2.748 -3.9433,-2.7012 -3.0329,0.64629 -0.43745,-4.0987 -3.5918,-3.5998 -1.3652,0.28127 -1.7617,-2.4035 -2.1563,-1.3497 -1.0879,-0.70528 -1.2229,-0.069 -2.0022,1.1994 -0.5084,0.99267 -2.6571,3.4782 -3.0489,2.0586 1.223,-0.66085 1.5264,-3.1971 -1.0429,-2.6584 -1.012,-0.69149 -2.6274,-0.91683 -2.8575,-2.2502 -0.88264,-1.1126 -2.7171,1.8158 -3.2988,-0.1095 -2.344,-1.0929 -2.819,1.3012 -4.4517,1.6098 -1.0969,1.5118 -4.9541,-1.5697 -5.0996,1.5 0.18378,2.2274 -4.1641,-0.32754 -4.6507,1.5432 -2.3939,-0.68405 -0.33502,-4.9888 -1.75,-5.4434 -0.0844,-1.0968 -0.0765,-1.813 -1.2989,-2.6994 -1.5007,-1.6938 -3.0311,0.51049 -2.3515,2.3575 -0.45672,3.5385 -0.41898,-1.8498 -1.6996,-1.9142 -1.6819,-2.6084 -2.8215,-4.8041 -4.0511,-7.3502 -1.1717,-2.1414 -1.9431,-5.1642 -3.1485,-7.1118 -0.34028,-1.3376 -1.0208,-2.5984 -1.8007,-4.0313 2.5328,0.49918 -1.0018,-3.7561 -0.59955,-5.0508 -0.44962,-1.8543 -0.96601,-4.2897 -1.9512,-5.5918 1.3858,-1.887 2.4743,-1.7468 4.1243,-3.6943 3.4826,-3.8915 6.8978,-8.3588 10.427,-11.902 2.3391,0.34112 4.4708,0.0412 6.4492,-0.60148 0.0269,-1.5337 0.80674,-2.1521 1.7012,-2.6999 0.48812,1.9123 3.6242,-0.49644 4.6506,1.0507 0.9727,1.6962 2.6408,0.87353 3.75,1.35 -0.0919,2.6948 2.2539,0.27734 3.6342,0.90032 2.0285,0.73629 3.4126,-0.74541 4.4655,-0.90053 2.4222,-0.016 2.7787,-0.89101 5.0489,-1.2014 0.84962,-1.0998 2.2397,0.12131 3.643,0.15037 1.219,1.5976 3.7496,0.0119 5.3576,0.008 1.2512,-0.43124 1.9471,-1.1683 3.051,-1.6585 1.4193,1.2846 3.64,-0.53519 4.6426,-0.59953 2.3615,0.11204 3.1562,-0.28795 3.8616,-2.5472 1.2652,-1.5808 0.24236,-4.1466 2.8536,-3.4532 0.75693,-0.81841 1.652,0.85919 2.2491,-0.6004 z" id="path6402" />
                                <text id="svgRegions" x="495" y="615">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Lanchkhuti' : 'ლანჩხუთი'; ?>
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
                    $query = mysqli_query($link, "select * from `regions` where ID = 3");
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
            </div>

        </div>
    </main>

    <?php include 'asset/components/footer.php' ?>

    <script src="script.js"></script>
    <script type="text/javascript" src="lang.js"></script>
    <script>
        localStorage.setItem('region', 'guria');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>