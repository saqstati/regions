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
    <meta property="og:title" content="<?php echo $lang['samegrelotitlename'] ?>" />
    <meta property="og:description" content="<?php echo $lang['samegrelotitlename'] ?>" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <title class="tr" Key="PAGE_TITLE"><?php echo $lang['samegrelotitlename'] ?></title>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <!-- Bootstrap 5.3.0 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="samegrelo.css">
    <link rel="stylesheet" type="text/css" href="custom.css">
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/main%20information/area.xlsx' : '/regions/regions/2/dziritadi%20informacia/regionis%20fartobi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia1">
                            <td>
                                <?php echo $basicInformation[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/main%20information/number%20of%20settlements.xlsx' : '/regions/regions/2/dziritadi%20informacia/municipalitetebis,%20qalaqebis%20da%20soflebis%20raodenoba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi23" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $populationCensus[1]; ?></td>
                        </tr>
                        <tr class="informacia23">
                            <td>
                                <?php echo $populationCensus[2]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census%20pre/urban-rural%20settlements/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა%20წინასწარი/მოსახლეობა%20საქალაქო-სასოფლო/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia23">
                            <td>
                                <?php echo $populationCensus[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census%20pre/number%20of%20population%20by%20sex/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა%20წინასწარი/მოსახლეობა%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population/Number%20of%20population/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/მოსახლეობა/მოსახლეობის%20რიცხოვნობა/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia22">
                            <td>
                                <?php echo $population[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population/Share%20of%20urban%20population/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/მოსახლეობა/საქალაქო%20დასახლებაში%20მცხოვრები/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia22">
                            <td>
                                <?php echo $population[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population/Density%20of%20population/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/მოსახლეობა/მოსახლეობის%20სიმჭიდროვე/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20live%20births/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20birth%20rate/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/შობადობის%20ზოგადი%20კოეფიციენტი/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Quantitative%20ratio%20of%20sexes/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/სქესთა%20რაოდენობრივი%20თანაფარდობა/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['6']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Mean%20age%20of%20childbearing/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['7']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20stillbirths/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/მკვდრადშობილთა%20რიცხოვნობა/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['8']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20stillbirths%20by%20sex/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20death%20rate/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/მოკვდაობის%20ზოგადი%20კოეფიციენტი/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Infant%20mortality%20rate/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/ჩვილ%20ბავშვთა%20მოკვდაობის%20კოეფიციენტი/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['6']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Under-5%20mortality%20rate/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/5%20წლამდე%20ასაკის%20ბავშვთა%20მოკვდაობის%20კოეფიციენტი/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['7']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['8']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20by%20urban-rural%20settlements/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20საქალაქო%20სასოფლო%20დასახლებების%20მიხედთვით/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['9']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20by%20age%20groups/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/მიზეზები%20ძირითადი%20კლასების%20და%20ასაკის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['10']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Deaths%20from%20suicide/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/თვითმკვლელობით%20გარდაცვლილთა%20რიცხოვნობა/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['11']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Suicide%20rate/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/თვითმკვლელობის%20შედეგად%20სიკვილიანობის%20კოეფიციენტი/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Natural%20increase/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/ბუნებრივი%20მატება/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia5">
                            <td>
                                <?php echo $naturalIncrease['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Natural%20increase%20rate/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/ბუნებრივი%20მატების%20კოეფიციენტი/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20registered%20marriages/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/რეგისტრირებულ%20ქორწინებათა%20რაოდენობა/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia6">
                            <td>
                                <?php echo $marriage['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20marriage%20rate/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/ქორწინების%20ზოგადი%20კოეფიციენტი/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia6">
                            <td>
                                <?php echo $marriage['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20married%20people/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia6">
                            <td>
                                <?php echo $marriage['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Mean%20age%20of%20spouses/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20registered%20divorces/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia7">
                            <td>
                                <?php echo $divorce['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20divorce%20rate/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/განქორწინების%20ზოგადი%20კოეფიციენტი/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia7">
                            <td>
                                <?php echo $divorce['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Median%20age%20of%20population/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Age%20dependency%20ratios/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Number%20of%20population/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['6']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Share%20of%20working%20age%20population/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['7']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Number%20of%20private%20households/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/კერძო%20შინამეურნეობები/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $gdbAndValueAdded[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/gdp%20and%20va/gdp%20and%20va.xlsx' : '/regions/regions/2/mshp%20da%20damatebuli%20girebuleba/mshp%20da%20damatebuli%20girebuleba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $foreignDirectInvestment[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/ext.trade%20and%20foreign%20direct%20invset/ext.trade%20and%20foreign%20direct%20invset.xlsx' : '/regions/regions/2/pirdapiri%20uckhouri%20investiciebi/pirdapiri%20uckhouri%20investiciebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/employment%20and%20unemployment/employment%20and%20unemployment.xlsx' : '/regions/regions/2/dasaqmeba_umushevroba/dasaqmeba_umushevroba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia17">
                            <td>
                                <?php echo $employmentAndSalaries[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/employment%20and%20unemployment/wages.xlsx' : '/regions/regions/2/dasaqmeba_umushevroba/khelfasi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi16" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'According to C. Zugdidi' : 'ქ. ზუგდიდის მიხედვით'; ?>"><?php echo $pricesAndInflation[1]; ?>
                            </td>
                        </tr>
                        <tr class="informacia16">
                            <td>
                                <?php echo $pricesAndInflation[2]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/prices/consumer-price-index-12-month-avarage-over-the-previous-12-month-avarage.xlsx' : '/regions/regions/2/fasebi/samomxmareblo-fasebis-indeqsebi-12-tvis-sashualo-wina-12-Tvis-saSualosTan.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia16">
                            <td>
                                <?php echo $pricesAndInflation[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/prices/Consumer-Price-Indices-(Previous-month=100).xlsx' : '/regions/regions/2/fasebi/samomxmareblo-fasebis-indeqsebi-wina-TvesTan.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia16">
                            <td>
                                <?php echo $pricesAndInflation[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/prices/consumer-price-index-to-the-same-month-of-previous-year.xlsx' : '/regions/regions/2/fasebi/samomxmareblo-fasebis-indeqsebi-wina-wlis-shesabamis-TvesTan.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/standard%20of%20living/incomes.xlsx' : '/regions/regions/2/ckhovrebis%20done/shemosavlebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia18">
                            <td>
                                <?php echo $standartOfLiving[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/standard%20of%20living/expenditures.xlsx' : '/regions/regions/2/ckhovrebis%20done/kharjebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/business%20sector/by%20kind%20of%20activity_nace%20rev.2.xlsx' : '/regions/regions/2/biznes%20seqtori/saqmianobis%20mikhedvit_nace%20rev.2.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia14">
                            <td>
                                <?php echo $businessSector[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/business%20sector/by%20ownership.xlsx' : '/regions/regions/2/biznes%20seqtori/sakutrebis%20formis%20mikhedvit.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia14">
                            <td><?php echo $businessSector[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/business%20sector/by%20size.xlsx' : '/regions/regions/2/biznes%20seqtori/zomis%20mikhedvit.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/agriculture/1.%20Annual%20crops.xlsx' : '/regions/regions/2/soflis%20meurneoba/1.%20erttsliani%20kulturebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia15">
                            <td>
                                <?php echo $agriculture[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/agriculture/2.%20Production%20of%20permanent%20crops.xlsx' : '/regions/regions/2/soflis%20meurneoba/2.%20mravaltslovani%20kulturebis%20tsarmoeba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia15">
                            <td>
                                <?php echo $agriculture[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/agriculture/3.%20Number%20of%20livestock.xlsx' : '/regions/regions/2/soflis%20meurneoba/3.%20pirutkvis%20suladoba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia15">
                            <td>
                                <?php echo $agriculture[5]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/agriculture/4.%20Production%20of%20animal%20housbandry.xlsx' : '/regions/regions/2/soflis%20meurneoba/4.%20metskhoveleobis%20produktsiis%20tsarmoeba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $industry[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/industry/industry.xlsx' : '/regions/regions/2/mretsveloba/mretsveloba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/construction/mshenebloba_nebartvebi.xlsx' : '/regions/regions/2/mshenebloba/mshenebloba_nebartvebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia13">
                            <td>
                                <?php echo $construction[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/construction/eqspluataciashi%20migebuli%20obieqtebi.xlsx' : '/regions/regions/2/mshenebloba/eqspluataciashi%20migebuli%20obieqtebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia13">
                            <td>
                                <?php echo $construction[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/construction/mshenebloba_dziritadi machveneblebi.xlsx' : '/regions/regions/2/mshenebloba/mshenebloba_dziritadi%20machveneblebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/By%20organizational%20legal%20forms/Samegrelo-Zemo%20Svaneti%20Region.xlsx' : '/regions/regions/მომსახურება/ორგანიზაციულ%20სამართლებრივი/სამეგრელო-ზემო%20სვანეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $service[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/By%20ownership%20type/Samegrelo-Zemo%20Svaneti%20Region.xlsx' : '/regions/regions/მომსახურება/საკუთრების%20ფორმების%20მიხედვით/სამეგრელო-ზემო%20სვანეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $service[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Number%20of%20markets%20and%20fairs%20by%20type/Samegrelo-Zemo%20Svaneti%20Region.xlsx' : '/regions/regions/მომსახურება/ტიპების%20მიხედვით/სამეგრელო-ზემო%20სვანეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $service[5]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Days%20of%20trade/Samegrelo-Zemo%20Svaneti%20Region.xlsx' : '/regions/regions/მომსახურება/ვაჭრობის%20დღეთა%20რაოდენობის%20მიხედვით/სამეგრელო-ზემო%20სვანეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $service[6]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Employed%20persons/Samegrelo-Zemo%20Svaneti%20Region.xlsx' : '/regions/regions/მომსახურება/დირექციაში%20დასაქმებულები/სამეგრელო-ზემო%20სვანეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $service[7]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Market-place%20and%20sellers/Samegrelo-Zemo%20Svaneti%20Region.xlsx' : '/regions/regions/მომსახურება/სავაჭრო%20ადგილები%20და%20მოვაჭრეთა%20რაოდენობა/სამეგრელო-ზემო%20სვანეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $service[8]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Financial%20indices%20of%20markets/Samegrelo-Zemo%20Svaneti%20Region.xlsx' : '/regions/regions/მომსახურება/საფინანსო%20მაჩვენებლები/სამეგრელო-ზემო%20სვანეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $trading[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/trade/trade.xlsx' : '/regions/regions/2/vachroba/vachroba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/hotels%20and%20restaurants/hotels%20and%20restaurants.xlsx' : '/regions/regions/2/sastumroebi%20da%20restornebi/sastumroebi%20da%20restornebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <?php echo $hotelsAndRestaurants[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Hotels/Samegrelo-Zemo%20Svaneti%20Region.xlsx' : '/regions/regions/სასტუმროები/რაოდენობა%20და%20ფართობი/სამეგრელო-ზემო%20სვანეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <?php echo $hotelsAndRestaurants[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Rooms/Samegrelo-Zemo%20Svaneti%20Region.xlsx' : '/regions/regions/სასტუმროები/ნომრების%20რაოდენობა/სამეგრელო-ზემო%20სვანეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <?php echo $hotelsAndRestaurants[5]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Guests/Samegrelo-Zemo%20Svaneti%20Region.xlsx' : '/regions/regions/სასტუმროები/სტუმართა%20რაოდენობა/სამეგრელო-ზემო%20სვანეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <?php echo $hotelsAndRestaurants[6]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Employees/Samegrelo-Zemo%20Svaneti%20Region.xlsx' : '/regions/regions/სასტუმროები/დასაქმებულთა%20რაოდენობა/სამეგრელო-ზემო%20სვანეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/transport%20and%20communication/transport%20and%20storage.xlsx' : '/regions/regions/2/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia10">
                            <td>
                                <?php echo $transportAndStorage[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/transport%20and%20communication/number%20of%20motor%20vehicles.xlsx' : '/regions/regions/2/transporti%20da%20kavshirgabmuloba/registrirebuli%20avtomobilebis%20raodenoba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia10">
                            <td>
                                <?php echo $transportAndStorage[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/transport%20and%20communication/the%20length%20of%20the%20roads.xlsx' : '/regions/regions/2/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/tourism/place%20of%20residence.xls' : '/regions/regions/2/turizmi/ganawileba%20sacxovrebeli%20adgilis%20mixedvit.xls'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia11">
                            <td>
                                <?php echo $tourism[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/tourism/visited%20regions.xls' : '/regions/regions/2/turizmi/ganawileba%20monaxulebuli%20regionebit.xls'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $legalStatistics[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/justice%20statistics/justice%20statistics.xlsx' : '/regions/regions/2/samartlebrivi%20statistika/samartlebrivi%20statistika.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Indicators/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/ჯანდაცვა/მაჩვენებლები/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Abortions/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/ჯანდაცვა/აბორტები/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Anemia/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/ჯანდაცვა/ანემია/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['6']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Diabetes/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/ჯანდაცვა/დიაბეტი/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['7']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Cancer/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/ჯანდაცვა/კიბო/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['8']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Circulatory/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/ჯანდაცვა/სისხლის%20მიმოქცევა/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['9']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Respiratory/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/ჯანდაცვა/სუნთქვა/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['10']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Syphilis/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/ჯანდაცვა/ათაშანგი/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['11']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/AIDS/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/ჯანდაცვა/შიდსი/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['12']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Tuberculosis/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/ჯანდაცვა/ტუბერკულიოზი/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['13']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Hepatitis/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/ჯანდაცვა/ჰეპატიტი/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Social%20Statistic/Indicators/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/სოციალური%20სტატისტიკა/მაჩვენებლები/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia21">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['16']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Social%20Statistic/Disability%20Persons/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/სოციალური%20სტატისტიკა/დევნილი%20შშმ%20პირები/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia21">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['17']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Social%20Statistic/Disabilities%20Registered/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/სოციალური%20სტატისტიკა/რეგისტრირებული%20შშმ%20პირები/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia21">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['18']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Social%20Statistic/Subsistence%20Allowance/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/სოციალური%20სტატისტიკა/საარსებო/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia21">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['19']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Social%20Statistic/Receiving/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/სოციალური%20სტატისტიკა/მიმღები/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia21">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['20']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Social%20Statistic/Beneficiaries/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/სოციალური%20სტატისტიკა/ბენეფიციართა/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Education/Preschool%20and%20Education%20Institutions/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/განათლება/სკოლამდელი%20აღზრდისა%20და%20განათლების%20დაწესებულებები/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia19">
                            <td>
                                <?php echo $education[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Education/General%20Educational%20Institution/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia19">
                            <td>
                                <?php echo $education[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Education/Vocational%20and%20Higher%20educational%20institutions/Samegrelo-Zemo%20Svaneti.xlsx' : '/regions/regions/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/სამეგრელო-ზემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $culture[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/culture/culture.xlsx' : '/regions/regions/2/kultura/kultura.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $environmentalProtection[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/environmental%20protection/environmental%20protection.xlsx' : '/regions/regions/2/garemos%20dacva/garemos%20dacva.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $infrastructure[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/2/infrastructure/infrastructure.xlsx' : '/regions/regions/2/infrastruqtura/infrastruqtura.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>




                    </tbody>
                </table>
            </div>

            <!-- Center Content -->
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                <!-- Center content goes here. Adjust height if needed or add other content. -->
                <div class="w-100 text-center p-4 rounded" style="height: 100%;">
                    <svg id="svg2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000" preserveAspectRatio="xMidYMid meet">
                        <g id="layer1" class="layer1">
                            <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'samegrelo/mestia.php?lang=en' : 'samegrelo/mestia.php?lang=ka'; ?>" class="text-decoration-none">
                                <path id="group2-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 692.35,160.09 c 2.7668,1.7198 4.6907,0.93241 7.4548,2.4065 0.43008,3.4252 3.9806,5.7056 0.1485,8.0742 0.21284,5.4936 5.948,7.441 9.082,10.158 4.251,-1.067 5.4162,4.4762 10.322,2.7597 1.666,3.5948 7.0484,4.9726 8.793,8.9433 4.4233,2.6507 9.5442,-0.28724 13.346,2.996 3.27,-1.6193 1.7753,6.2214 6.4199,2.6993 2.2946,0.79105 3.3629,3.5386 5.8264,3.3967 3.2052,0.80852 3.4892,4.6271 6.9589,5.457 3.2507,1.0909 2.4782,5.3734 6.2207,2.586 -0.42805,-1.9871 -1.4051,-4.1679 0.74414,-7.0977 1.4654,-3.0895 -1.3102,-9.3376 4.3693,-7.1912 3.6014,1.6164 3.8806,-3.3571 7.2422,-2.3028 2.7416,-2.1564 4.4212,0.31367 6.5801,0.0566 1.356,-4.5626 6.1417,-2.2243 9.7344,-3.0564 2.2121,1.04 6.0577,1.7974 5.3086,5.4571 2.541,1.5077 5.3772,4.7924 7.7597,1.1953 4.6853,-0.72805 10.584,-4.3944 13.897,0.51173 2.3613,0.40748 0.17734,4.2566 2.4961,6.1192 0.63876,2.1595 5.9258,-3.4367 6.5958,1.2286 2.9533,0.21481 6.0755,1.4925 8.256,2.3557 -1.8227,1.8118 -3.506,4.1698 -2.3517,6.2794 -0.35552,7.0079 8.0672,1.5917 11.959,3.5684 2.5314,1.1499 5.018,3.5213 7.6738,2.627 3.2724,2.4871 6.2219,6.392 9.7168,8.0119 0.40771,2.7518 6.6618,2.8702 2.3944,5.3478 -3.4336,0.45724 -8.3637,5.4418 -4.1933,8.3574 1.7192,2.7068 -0.56894,5.9016 2.2461,6.8966 3.9845,1.9902 -1.6205,6.9923 3.3026,6.965 1.0186,4.4335 7.3965,4.1765 9.2325,8.332 2.6648,2.3789 5.3889,4.5336 9.7758,3.5997 1.747,-1.1854 1.1769,4.9461 4.4743,4.6504 3.042,0.34846 1.5365,3.6993 4.4179,4.5312 1.2673,2.9463 1.9389,6.6013 -2.1509,8.1562 -4.5422,2.7912 -6.6982,3.4011 -11.099,5.7073 -4.0758,3.0707 -0.22837,8.0125 -0.29486,11.865 2.4951,4.0055 -4.5858,5.2025 -3.8204,9.84 -1.7523,3.7685 -6.9082,11.066 -9.1387,3.9884 -0.57199,-2.8428 3.8477,-5.3598 -0.0976,-7.7562 -3.6411,-5.7892 -9.4216,3.6397 -14.541,-0.29693 -7.3234,1.2262 -14.42,4.042 -22.18,3.3692 -4.1336,2.3784 -3.769,-7.2247 -9.2462,-6.6391 -5.865,-1.0806 -8.5634,-5.7921 -15.154,-3.6153 -3.5948,-2.909 -8.6282,-7.2362 -13.873,-3.918 -2.5069,3.3995 -5.8679,7.7746 -9.3048,9.7677 -1.6726,-5.0019 -7.0328,-1.9798 -10.867,-3.1995 -5.4883,8.0131 -12.958,-2.8127 -19.379,-3.9999 -3.6838,-3.2274 -8.9912,-3.7657 -13.953,-2.2774 -4.0997,2.3086 -13.488,1.2982 -13.764,-4.5195 -6.3864,1.9714 -12.862,-0.0595 -16.102,-6.1348 -6.952,-1.1379 -10.7,6.9149 -7.9337,12.579 1.8496,5.3747 5.3908,11.684 -2.6664,6.6521 -6.6373,2.6346 -14.555,1.0199 -21.021,-0.69166 -2.185,4.9725 -5.8094,9.2648 -9.1182,13.102 -0.97738,2.5985 -1.0046,11.634 -4.753,8.7772 -6.4018,-3.4369 -12.69,-4.2626 -20.227,-3.6074 -4.8948,2.4135 -7.1846,6.2447 -11.711,8.2168 -4.3546,-2.1685 -7.4947,2.1784 -11.571,-1.4089 -1.1422,-5.9546 -2.3586,-7.8221 -9.0786,-8.1183 -4.5011,-1.9921 -5.488,-10.928 -12.165,-7.8832 -2.2118,-1.7071 -8.5563,-5.0977 -6.7383,0.56836 -0.44611,3.5951 -4.4545,4.7336 -5.4042,8.5918 -2.9551,2.3101 -8.4038,2.4695 -10.105,-1.6778 -3.4229,0.0146 -9.6273,5.9125 -14.859,2.3144 -6.2322,-1.546 -10.659,-8.936 -17.662,-6.332 -3.1579,0.15753 -6.6584,-0.98879 -9.5077,-2.2501 -2.4381,2.7668 -4.9608,5.9686 -6.4512,0.11911 1.6669,-2.3781 3.9958,-5.0032 4.8028,-7.0117 2.7482,-3.1783 7.7984,-3.7996 11.656,-5.2208 2.848,-2.0018 6.0177,-8.4215 0.2539,-8.6094 -4.788,-2.4769 -8.3998,-3.0017 -7.83,-10.062 -1.2289,-4.5262 -3.7627,-5.9008 -1.084,-9.8262 6.0795,-2.7367 2.1439,-11.122 -3.7104,-10.677 -4.274,-1.2593 -6.3859,-5.3505 -2.8678,-8.2215 -1.0925,-4.5732 6.4199,-5.5475 6.2578,-9.8593 5.2428,-1.6494 11.324,2.9287 15.684,-1.8261 2.9885,-0.43764 5.6048,-2.4318 8.7383,-3.457 2.6651,-1.4791 5.5076,-2.2273 8.3574,-3.996 5.5777,3.1845 11.723,-2.0334 13.191,-7.7012 -1.0552,-4.8593 5.8882,-6.2306 8.2012,-8.3028 -1.3541,-4.0281 4.2632,-5.5502 3.4297,-9.0664 5.8449,-0.55259 5.1717,-8.8133 9.209,-11.799 0.77853,-3.6903 -2.3237,-6.5405 -0.90053,-9.0236 5.6116,1.1915 3.6719,-5.1002 8.3946,-5.5432 -1.9792,-2.9856 -6.1341,-9.5017 -2.0468,-11.711 2.9018,0.89649 4.6124,-2.5546 7.7519,-1.9531 0.47742,-2.6624 3.396,4.6713 5.8632,1.6504 3.9224,0.66339 2.7794,-5.3209 7.2774,-3.92 2.7195,-1.2847 5.5945,1.7164 8.5527,0.2949 5.0157,0.084 1.088,7.7329 6.6386,7.2246 3.6042,-2.0242 8.8214,2.4833 10.187,-1.9102 2.1439,-2.6916 4.2424,0.0593 6.6894,-1.2792 3.898,1.2212 6.9122,-0.14486 8.5897,-3.6894 0.54345,-2.6655 1.1656,-7.5708 5.0332,-5.4219 3.0724,-1.8288 4.5629,2.2398 7.9689,-0.4513 3.0392,0.42304 4.5483,-1.41 5.4448,-3.8386 z" id="path1029" />
                                <text id="svgRegions" x="660" y="255">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Mestia' : 'მესტია'; ?>
                                </text>
                            </a>
                            <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'samegrelo/walenjixa.php?lang=en' : 'samegrelo/walenjixa.php?lang=ka'; ?>" class="text-decoration-none">
                                <path id="group2-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 597.56,312.37 c 3.3549,0.5488 5.3895,3.6301 9.1622,2.1466 4.9664,2.1944 5.6183,10.065 12.379,9.3027 5.684,-1.2079 1.6995,10.163 9.584,8.8458 2.6828,4.729 5.7403,8.8135 11.385,10.758 0.37744,2.8005 -4.2776,3.7478 -4.3066,7.8476 0.83583,4.8012 -6.0536,6.8373 -3.9082,11.174 1.0158,2.4777 10.504,3.7873 4.2599,5.5098 -3.9952,-0.009 -7.3604,6.079 -8.7598,9.5725 -0.61448,4.0463 -7.4468,4.7131 -10.469,3.1618 -2.6249,1.9848 -5.8232,1.4698 -7.6387,4.1874 3.8572,1.3346 8.2001,5.2907 5.8007,9.5002 -1.2015,2.0314 -2.3292,4.1831 -4.9004,4.3498 1.6938,1.1766 -2.7264,1.731 -2.4005,3.6014 2.6454,2.7239 -2.7555,3.4616 -2.1428,6.1487 -2.5213,0.46499 -0.45133,3.6766 -2.4005,3.7503 0.0754,2.031 -0.31033,3.1887 -1.5,3 -1.1439,1.704 -0.53208,3.5601 -0.45154,3.9436 -2.2845,1.9882 -3.3469,3.9913 -3.6036,6.7036 -2.1782,2.2416 0.47326,5.265 0.25769,7.0507 -4.0295,-1.9159 0.25328,2.9364 -0.25372,2.8088 -1.03,0.71781 -0.34683,4.0027 -2.7423,1.0939 -4.2191,-1.247 -5.908,0.74544 -6.1076,0.19322 -0.90707,1.6557 -2.5971,3.116 -3.3503,1.7578 -2.9358,-0.32538 -2.2333,4.5652 -5.801,4.0492 -0.74605,0.99168 -3.535,4.7608 -2.4414,1.4513 1.2652,-1.6978 -2.341,-1.2727 -1.6505,-3.8522 -2.9562,-0.1446 -5.5199,2.7481 -6.6077,-0.59761 1.2922,-1.9606 -3.3672,-0.93489 -3,-4.0178 2.7687,-2.1507 2.0116,-4.9955 -1.1992,-5.4396 0.0593,-1.7574 -0.62251,-4.7441 -1.6465,-6.4473 -4.8676,-3.9036 5.1732,-1.5208 5.3963,-6.0293 2.0856,-1.4663 3.6603,-3.4592 4.2423,-5.4165 3.1194,-2.2055 -2.7344,-2.741 -1.5429,-6.4688 -1.9984,-2.109 -0.20683,-2.093 -1.3495,-4.5824 -3.3793,0.0954 -4.1971,-3.0764 -6.2501,-0.1484 -1.5381,1.8196 -4.7065,1.9 -6.7503,3.1485 -0.29351,1.4092 -2.934,-6.0155 -4.6546,-1.0525 -1.0191,-1.6356 -2.1534,-1.2943 -2.7462,-0.81444 -1.0664,-1.6865 -2.9853,-0.93678 0.008,-2.9825 4.1309,-0.62739 -0.37482,-5.8883 -1.8574,-7.1777 -0.71083,-0.45733 -2.1757,-3.1477 -1.1425,-4.6716 0.14498,-3.0181 1.7445,-6.4927 1.3986,-9.801 -0.76038,-3.265 -4.5666,-5.3265 -4.7031,-8.9025 2.6768,-7.3965 -5.493,-16.231 -1.6917,-23.756 0.75715,-2.5833 -3.2774,-8.2382 0.10177,-11.898 -4.6698,-0.1199 -0.077,-6.4252 -2.7636,-9.455 -0.41952,-2.934 -2.8173,-8.2162 1.8458,-7.2832 3.6197,2.2876 8.1113,1.9064 11.936,1.1972 6.9466,2.0879 12.224,9.5303 20.149,7.6484 5.0789,-0.21057 7.449,-5.9595 10.663,-5e-5 5.173,1.4106 9.6263,-1.4539 11.307,-6.2989 2.5828,-1.4961 3.145,-3.5725 2.8581,-6.8091 z" id="path1027" />
                                <text id="svgRegions" x="545" y="355">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Tsalenjikha' : 'წალენჯიხა'; ?>
                                </text>
                            </a>
                            <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'samegrelo/chxorowyu.php?lang=en' : 'samegrelo/chxorowyu.php?lang=ka'; ?>" class="text-decoration-none">
                                <path id="group2-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 650.22,323.83 c 5.1033,0.19129 9.7432,0.37229 13.822,2.3964 3.8534,1.6108 8.1387,3.6426 11.166,4.6973 2.2981,3.1971 3.6784,6.7391 3,10.799 1.5945,3.4702 7.5933,5.2908 3.1504,9.385 0.49591,3.4975 5.8021,3.1494 7.3518,6.4281 -0.4668,4.9996 -7.9661,7.2915 -10.389,11.223 -1.4903,3.219 4.8966,5.241 -0.47265,8.1231 -3.6623,5.0454 -9.5163,8.4604 -13.457,12.982 -0.35133,3.2602 7.2391,4.1341 4.9004,7.213 -2.9366,2.321 -3.8929,8.0252 -9.2324,7.7929 -4.9619,2.0121 -8.5634,6.7406 -12.945,8.5567 -3.0059,-1.5109 -3.6592,4.7544 -4.9553,5.5492 -3.259,-1.3737 -6.1786,0.7754 -4.9008,3.6015 0.86222,2.4381 -4.4026,1.8856 -1.9494,4.8986 2.7645,0.72869 3.5791,4.5375 3,7.1406 -2.7806,0.63221 -1.1174,3.96 -3.7581,4.1601 -2.8295,2.7902 -4.5443,2.3892 -5.696,5.9967 0.88184,3.3468 -5.3062,5.4466 -2.9959,6.1097 -0.12863,1.7408 2.7312,-0.26064 3.6407,2.3945 4.0889,-1.2421 -0.14182,3.1474 -2.1408,2.0432 -0.71796,2.0554 -4.3656,3.7507 -5.551,6.2562 -1.1748,2.087 -1.8513,2.6282 -2.9999,4.1992 -3.4387,1.0196 -3.2252,7.7533 -7.1995,6.301 -1.2754,3.0195 -5.3891,-1.5126 -5.7503,1.8438 -1.1892,-1.8034 -8.4108,-0.82666 -5.5,2.1583 0.90133,1.2823 2.5107,5.832 -0.30051,6.6508 -0.4185,3.8875 -2.2802,6.6112 -3.4494,9.4064 -0.42104,1.2344 -3.7791,-1.7246 -2.9008,-1.0057 -1.3368,-2.2619 -4.7487,-2.8788 -4.5003,-4.0511 -1.2646,-1.1059 -3.8164,-3.469 -5.4007,-1.0995 -1.0085,-4.2898 -3.0185,-0.20559 -6.1504,-0.40028 -3.4455,-0.0528 -1.1323,-4.1384 1.1192,-4.1 1.8536,-2.0356 3.612,-3.8286 2.0314,-5.6583 -1.4708,-1.6085 -4.4312,-2.731 -6.8497,-3.4414 -1.2061,2.5216 -4.4638,-1.6678 -6.1995,0.29872 -1.7774,-2.2732 -2.1557,-5.1495 -1.2012,-7.6583 0.83352,-2.4039 2.1979,-4.1207 4.0568,-3.1916 1.4778,-2.0518 2.8149,-1.5244 2.9941,-4.4512 -3.2379,-1.0865 1.6865,-3.684 -1.8692,-4.799 1.4703,-4.0487 4.0561,1.699 4.8731,-2.7462 -0.68499,-2.8172 0.89995,-2.1531 1.9455,-3.4551 1.2131,-1.4484 1.8872,-2.4301 4.3498,-3.7443 2.5123,-0.68792 0.79031,-4.287 2.901,-1.6565 2.5768,1.3322 1.4385,-1.9585 3.6504,-1.8928 2.2154,-3.6815 5.9662,-0.48005 7.0002,1.2928 2.805,-0.46602 1.6382,-3.6877 2.6505,-5.9574 0.68104,-2.1832 -1.0445,-4.4759 -0.60151,-6.344 0.19305,-3.0828 1.1494,-4.8293 2.875,-7.5176 2.2318,0.98089 0.14894,-3.4512 1.6253,-3.4319 1.7392,-2.0643 1.5018,-3.2558 2.7578,-5.2988 -1.7894,-1.9896 2.4108,-1.7569 1.5938,-4.7499 2.7666,-0.5222 2.102,-4.4808 2.5998,-6.301 2.5318,0.60526 2.8149,-2.4892 4.9003,-3.4493 1.9048,-3.2358 3.7482,-10.145 -2.8512,-11.702 -0.72303,-2.3563 5.5433,-4.7714 7.4648,-2.9844 5.047,0.66421 8.7028,-2.9184 9.6289,-6.4278 2.1971,-4.0597 4.8493,-8.1789 9.6953,-8.2168 3.2966,-4.169 -11.11,-4.4496 -5.1114,-9.6036 4.2137,-3.5524 2.0225,-11.262 7.7226,-13.066 0.40222,-5.0956 -8.2604,-3.8232 -8.4981,-9.0274 -5.5912,-2.396 0.61709,-6.9505 4.1062,-3.7661 3.986,-2.4082 6.2467,-5.5918 10.546,-7.9995 0.76696,-0.61402 1.7391,-0.54039 2.6575,-0.70257 z" id="path1025" />
                                <text id="svgRegions" x="645" y="345">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Chkhorotsku' : 'ჩხოროწყუ'; ?>
                                </text>
                            </a>
                            <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'samegrelo/martvili.php?lang=en' : 'samegrelo/martvili.php?lang=ka'; ?>" class="text-decoration-none">
                                <path id="group2-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 693.15,348.29 c 2.4498,3.0029 6.4204,3.5698 9.6212,6.1288 3.6785,-2.8661 7.7025,3.1822 11.533,3.8517 3.7831,1.8885 5.9521,3.9043 8.1465,7.7678 3.3067,0.91589 4.9737,2.2819 6.8614,5.1621 4.3044,3.1265 3.3566,11.489 -3.4179,9.0802 -3.0732,2.3368 -1.8028,5.0163 -2.0918,7.3692 -1.2231,2.3262 -4.0307,4.1706 -1.5,7.463 0.70327,4.7345 9.1998,5.7274 7.1524,11.641 0.0244,3.2836 1.7494,2.8595 2.9338,5.8693 -0.129,5.0911 3.159,9.1681 7.0351,12.244 -2.9736,4.8685 6.9251,10.047 -2.9024,9.5645 -4.5401,2.6081 -9.1502,4.0378 -14.135,3.6002 -7.4128,0.33627 -5.1168,8.364 -10.484,11.078 -2.3281,3.5384 -11.134,4.7895 -7.1271,10.469 1.9589,6.2595 -6.1018,7.5877 -8.2649,8.1448 0.70942,3.3686 1.4841,7.5425 -0.64726,10.539 -1.8684,3.2987 -4.3534,6.2706 -5.8105,9.219 -0.8137,3.2082 5.0008,6.991 -0.45121,7.5488 -0.57407,0.5162 -1.2484,2.6953 -3.6,3.1508 -1.3956,4.3214 -5.5767,4.988 -7.7998,8.7023 -2.3193,1.6975 -3.6249,4.3152 -5.1024,5.9989 -0.1258,1.068 -1.9372,2.9694 -2.4066,4.8009 -2.9465,2.1522 -2.6764,4.3182 -4.1996,6.4497 -3.3161,-0.22569 -4.1562,3.9088 -4.9436,4.6508 0.52521,3.7381 -3.9514,2.0061 -4.9942,4.0512 -1.0581,-0.40715 -3.2065,-2.5677 -5.3555,-0.60146 -2.0003,1.106 -3.0973,3.2239 -5.2502,3.6026 0.18363,3.3089 -4.1323,2.0907 -5.301,4.0498 -0.57327,-2.3012 -1.3695,-3.3123 -4.0494,-4.3467 -2.9908,-1.6116 -10.797,1.3185 -9.4512,-5.1019 0.0859,-2.8964 -5.1416,-4.1474 -1.1503,-5.9102 1.2523,4.3011 2.2571,-2.9005 2.6505,-4.4474 1.7932,-1.6562 0.22518,-5.1764 3.4516,-5.2931 2.0742,-2.0424 2.452,-2.2437 0.45305,-5.2035 -2.0668,-2.8414 -3.7205,-5.202 -6.4048,-7.2057 -1.7702,0.29612 -1.2907,-3.2924 -0.59958,-0.19178 4.339,0.45579 3.8712,-3.4311 8.1995,-4.0512 -1.2755,-3.3679 4.879,-2.156 3.3048,-5.9962 2.7553,-0.62407 0.4085,-3.0007 1.0137,-5.8145 4.1397,-0.12159 1.8977,-3.9502 -0.0745,-4.6389 -1.5944,1.1335 -2.412,1.6374 -3.6369,2.8498 -1.9543,-2.2169 -4.4954,-2.3809 -6.9065,-1.0548 -0.059,-2.1909 4.1666,-3.7372 1.4103,-5.3418 0.12565,-2.4065 -2.8555,-0.73198 -3.211,-2.752 -3.1171,-2.0758 -8.2739,2.7686 -8.8496,-2.1015 -1.265,0.0633 -3.0157,3.4544 -3.1508,0.80673 1.9524,-1.9335 2.6384,-3.0103 3.3012,-4.4574 0.59096,-2.3603 4.5412,-3.2852 4.1174,-4.9515 2.2267,-2.2896 4.1836,-6.3091 7.1335,-7.3499 2.2952,-1.4729 5.9972,-2.2664 4.5,-6.5059 -1.7752,2.871 -4.3217,-0.38625 -5.9376,-0.768 2.8829,-0.78961 3.2676,-7.6704 4.9379,-7.1688 2.3547,-0.85214 3.0139,-3.5005 5.7992,-4.4572 -0.3876,-2.204 0.65684,-2.8135 2.5507,-3.4511 -0.56117,-2.9907 -0.4984,-4.418 -0.75,-7 -2.9363,0.10719 -3.957,-2.7155 -0.90024,-3.1994 0.69817,-1.718 -0.69949,-4.3627 1.4005,-5.0996 3.8357,2.5994 3.9658,-2.0691 5.6505,-3.9006 0.72911,-2.0987 4.9634,-1.4189 6.7128,-4.457 4.3426,-4.3205 9.9472,-5.4974 15.037,-8.8848 -0.30196,-3.8985 7.1588,-6.1089 1.5,-9.3085 -6.5814,-2.6988 0.14879,-5.9544 3.291,-8.8341 2.8475,-3.9413 10.685,-7.5699 8.5178,-12.715 -4.8579,-2.5056 3.9215,-5.4567 4.8478,-8.2774 4.003,-1.2917 6.6304,-6.5958 1.9824,-8.373 -0.91992,-2.019 6.056,-2.8506 5.8109,-6.6412 z" id="path1023" />
                                <text id="svgRegions" x="645" y="438">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Martvili' : 'მარტვილი'; ?>
                                </text>
                            </a>
                            <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'samegrelo/zugdidi.php?lang=en' : 'samegrelo/zugdidi.php?lang=ka'; ?>" class="text-decoration-none">
                                <path id="group2-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 546.32,400.92 c -0.32284,2.9076 2.3714,4.114 4.5373,2.4066 0.10454,4.5045 4.4249,-3.2189 3.0001,1.2012 1.8989,-0.3425 2.1086,3.7562 4.1504,0.74984 1.1332,-1.4764 5.0557,-0.64987 5.8501,-2.7425 0.44379,0.82115 2.1058,-3.1301 2.7501,-0.10947 4.9122,-0.90976 0.093,3.2806 3.1504,3.4513 0.26261,3.3618 1.8727,3.9431 1.5878,6.7031 0.29051,2.1043 -3.2359,3.2874 -4.35,6.1507 -2.0627,2.281 -9.4503,1.3539 -6.3712,4.5703 1.4553,0.36321 2.8308,3.2572 2.9825,6.0176 -0.20307,3.0224 5.7278,3.0106 1.0899,6.4571 -0.68643,3.151 3.5186,3.2967 3.4024,5.2012 1.0623,1.8788 2.3426,2.136 4.801,1.1992 1.7307,-1.0057 0.92917,-0.22509 3.0063,1.5062 -0.63133,2.7286 0.17908,4.834 -0.89861,6.6448 -2.7241,-2.6138 -3.2936,0.65809 -4.9942,2.7364 3.2996,0.22779 0.0852,3.6814 1.5431,5.0137 -2.0901,1.468 0.33451,2.7142 -3.2989,2.1426 -1.4188,1.9842 -3.7295,4.7213 -3.0023,5.2992 -2.7805,1.1568 -2.6663,-2.5032 -5.2911,-1.3928 -2.6326,0.15304 -4.1434,-1.6903 -4.9084,1.2009 -1.1659,1.4223 -3.0201,0.26778 -4.3085,3.2988 -1.478,1.889 -2.7673,3.8436 -2.8909,5.8011 3.494,2.1524 -0.98855,5.041 1.6508,7.6508 1.2003,3.0104 3.8254,3.1096 0.44353,6.9494 -0.52227,2.7715 -3.2174,3.6656 -4.3525,6.3016 -1.9386,1.4286 -3.1558,3.531 -5.8421,3.7501 -0.45783,1.6716 -4.675,0.59096 -3.3008,4 -2.3645,0.69397 -1.1302,4.9525 -2.5997,3.4998 -3.5478,0.95469 -3.9399,-1.0294 -5.8499,-2.2503 -2.891,-0.89145 -6.6231,-1.7854 -8.8517,-4.3576 -0.35929,-3.2602 -3.4667,-4.8868 -3.8615,-8.5358 -3.4643,-0.27359 -2.864,-1.4512 -4.6837,-3.6116 -2.12,-1.9173 -4.919,-2.9425 -3.879,-2.8285 -3.7625,0.75153 -5.5303,2.7089 -10.475,2.0821 -4.6814,2.6458 -7.3434,7.4184 -6.301,13.407 2.1816,-2.4233 4.4816,5.6561 0.66817,3.0549 -2.0333,-3.6419 -5.3774,4.4248 -9.0686,0.3833 -2.0822,2.8784 2.659,7.0118 -1.049,9.249 0.19442,3.2975 -0.75236,7.1523 -1.9512,9.4582 -1.1271,1.8697 -3.6802,5.7712 -6.3501,3.0006 -0.95601,-0.10783 -4.7231,-0.4615 -6.1504,-1.9493 -1.3755,-2.1656 -4.1334,-2.2393 -6.6005,-2.8583 0.22812,-3.6872 -2.8519,-2.2688 -4.4925,-2.3926 -2.8895,0.1713 -4.4097,0.74592 -5.6017,-1.799 -0.56883,-0.6115 -2.6777,-1.4961 -2.5059,-4.8009 -1.9744,-5.7891 -3.6639,-12.947 -8.8498,-17.401 -4.1548,-1.245 -6.5021,-4.249 -6.9284,-9.1235 -2.6759,-7.0784 5.8083,0.17364 7.0781,-4.8691 1.6935,-0.54934 3.2602,-3.0526 4.0923,-3.3068 1.7601,1.5508 5.6933,0.91317 5.8148,-2.2499 2.368,0.52469 5.5409,0.85014 7.2971,0.51166 3.0492,1.9597 5.2605,0.56742 7.6954,-0.96111 1.9228,-2.2741 -0.61891,-5.5569 -1.75,-2.3515 -0.93299,-0.85986 1.9454,-3.5747 -0.19923,-5.001 0.64043,-2.4373 1.858,-7.3548 -1.6506,-6.4035 -1.3632,-0.65436 -3.0321,-2.4148 0.15048,-2.8971 0.33524,-2.4953 3.8168,-1.3974 4.6548,-3.4502 2.1168,-1.4269 2.6174,-4.1774 5.5457,-4.2027 0.78154,-0.81434 3.3874,-0.51745 3.0003,-2.5495 1.8122,-1.8797 6.0574,0.4308 7.8479,-1.5 0.83373,4.255 2.4826,-1.371 5.0606,-1.2033 2.7893,-1.3689 5.302,-2.8286 8.8423,-3.3013 0.87127,-4.7492 7.9389,-3.1543 8.4244,-7.403 4.9839,-3.0095 9.7313,-8.4075 15.836,-9.6976 1.8464,-3.9682 2.0493,-7.8045 5.4434,-10.795 1.3492,-2.466 5.173,-2.8582 6.147,-4.6548 2.8496,-1.3466 4.0198,-5.6532 8.1079,-6.0007 2.005,-2.5571 5.0168,-1.0511 7.806,-2.0994 z" id="path1021" />
                                <text id="svgRegions" x="485" y="458">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Zugdidi' : 'ზუგდიდი'; ?>
                                </text>
                            </a>
                            <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'samegrelo/xobi.php?lang=en' : 'samegrelo/xobi.php?lang=ka'; ?>" class="text-decoration-none">
                                <path id="group2-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 556.66,464.83 c 2.3547,1.2095 5.8969,-0.83935 5.6018,1.8011 4.0563,-0.73702 1.9746,3.7456 3.8987,5.5996 -2.0759,3.3352 3.7174,0.25574 5.3926,1.9004 3.6575,-1.1508 4.8413,0.88302 8.258,1.6564 1.4489,3.1067 -2.0224,5.0202 -3.7503,5.5923 -1.3962,1.3539 -2.2919,3.5174 -0.29879,5.0941 1.488,3.0396 -2.364,5.0526 -2.2852,7.8075 -2.8871,1.6035 3.6744,1.4385 2.2773,3.0022 -1.6614,2.9195 -4.115,3.9794 -3.2407,7.1396 -2.0751,2.1947 -4.7179,2.3884 -5.7248,3.6664 -3.1437,3.2864 -2.573,-1.9549 -3.6777,-4.2074 -1.8354,-3.212 -4.0458,0.94475 -6.2502,1.0512 -3.1817,0.38002 -6.4884,-1.6871 -9.051,-1.9513 -1.7777,-2.3387 -4.8678,0.95856 -1.9866,2.5723 1.6253,2.7851 3.6373,4.7746 5.0371,6.9791 1.6397,1.6951 -5.0337,4.9172 -0.75018,6.9011 -1.3066,4.8887 1.1939,1.5528 3.5995,3.3011 1.7754,1.3978 5.5823,1.701 4.5005,4.9497 -0.89166,2.8766 1.1628,8.5722 -3.1506,9.493 -1.6487,0.89615 -1.1523,2.7158 -3.0081,3.7583 2.0923,2.9733 -2.1203,5.4591 0,7.35 -3.7428,0.82938 1.7019,9.1534 -4.627,8.4533 -2.2594,4.5093 -7.1596,0.24975 -10.283,3.0978 -3.1977,0.0835 -6.4249,2.2111 -9.2832,2.4396 -4.1013,-3.2826 -4.7457,0.049 -3.086,3.8691 0.14291,5.3953 -1.2661,10.586 -3.1147,15.791 -1.0783,2.8862 1.2552,12.47 -2.798,8.7992 -3.7719,-0.91844 -6.4505,1.6129 -9.8497,1.6503 -2.5446,1.1328 -5.0969,0.19558 -5.301,-0.15019 -2.9063,-0.40569 -4.5273,-2.6078 -8.4006,-1.9494 -3.8193,-2.2231 -2.6536,3.8193 -6.6486,2.8498 -3.2242,-2.106 -7.9894,5.9566 -11.482,9.6832 -1.9734,4.3386 -6.0533,4.9431 -6.0181,-0.22811 -0.37533,-3.9029 -0.98699,-7.3043 -2.8166,-10.555 1.522,-2.0542 -0.56003,-3.8057 0.11523,-5.25 2.0864,-1.9341 3.6796,-3.377 7.9102,-2.25 1.0039,-3.5554 -9.0869,-1.7207 -6.0487,-5.6993 -0.23829,-3.7199 2.7393,-4.0016 3.6466,-6.1014 -3.9583,0.75066 -5.188,-5.1711 -10.451,-4.1999 -4.8348,0.36481 -9.0355,-1.8964 -11.706,-4.9496 -2.104,-1.6932 1.7877,-4.0788 2.0998,-6.5006 1.1264,-5.6848 0.71674,-13.21 -0.45117,-17.508 -1.8015,-6.6068 -3.0429,-15.454 -5.1994,-22.092 1.0386,2.2833 3.771,2.9104 5.6487,1.9006 0.77814,1.1099 3.2222,-0.25914 4.4006,0.65647 -0.0354,3.925 5.9771,1.3249 6.7503,4.7934 2.601,1.4063 6.6602,2.3506 10,2.85 3.1348,-0.44784 3.4429,-3.7028 5.4008,-5.1006 0.38314,-3.6844 0.8801,-7.3931 2.0996,-10.194 2.7863,-1.9702 -3.8698,-7.7722 2.1704,-6.6064 2.706,0.1807 4.0181,-3.6059 6.8335,-0.7504 3.2877,0.28932 2.207,-4.9944 0.14656,-6.1021 -2.5192,-0.86151 0.28984,-5.3194 0.45689,-6.6493 1.3915,-2.413 5.5517,-5.8249 9.1935,-3.8946 1.1979,1.7856 1.8656,-2.5117 4.9024,-2.4476 2.9103,1.6038 5.3035,3.1166 4.9984,6.8015 4.4688,-3.2478 3.5712,3.199 5.5138,4.6391 1.9652,0.995 1.149,4.9841 4.2367,5.4006 1.7852,1.3396 6.1557,2.5379 6.0489,2.8496 1.6414,1.1817 3.6612,3.0248 6.0998,2.25 2.3641,1.2441 2.4167,-3.3203 2.6504,-1.7989 1.1189,-1.7502 3.2803,-1.4857 1.6932,-3.9005 2.3673,-1.152 3.9974,-1.8668 5.6564,-3.2932 2.1104,0.27936 1.6595,-2.8012 3.7505,-3.3013 1.7558,-1.9249 1.8554,-2.1326 3.7504,-4.7992 1.0207,-2.9087 3.758,-5.8873 0.90056,-7.9084 -3.1664,-1.6951 -0.53578,-4.5342 -1.3499,-7.4987 -2.8973,-2.3168 1.1771,-5.0389 2.4591,-7.6976 1.8311,-0.8945 2.4937,1.192 2.9414,-1.3537 0.7785,-0.0186 1.2796,-0.52787 1.0486,-1.5013 z" id="path1019" />
                                <text id="svgRegions" x="485" y="534">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Khobi' : 'ხობი'; ?>
                                </text>
                            </a>
                            <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'samegrelo/senaki.php?lang=en' : 'samegrelo/senaki.php?lang=ka'; ?>" class="text-decoration-none">
                                <path id="group2-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 607.51,473.53 c 0.0657,-0.0316 1.1326,3.7862 2.3187,1.3516 2.4647,-2.3528 3.5987,2.6393 4.1819,2.0996 1.6377,-1.8386 2.5685,1.3036 4.6404,0 3.0705,-1.4268 6.5848,-1.1877 7.9531,1.3497 2.8387,-0.50317 1.0577,2.388 -0.29295,4.2422 -1.6542,4.2072 5.7782,-0.95849 6.7501,2.6583 1.4198,0.98343 4.1247,-0.69397 5.4004,-1.9434 2.2874,2.312 -4.962,2.607 -1.1113,5.1976 -0.34589,1.9949 -1.0285,3.8131 -2.3379,6.3869 -3.99,-0.062 -1.6477,3.036 -5.1093,3.9084 -1.7907,0.71103 -3.0604,4.1747 -4.7423,0.39295 -4.0877,2.9832 2.1119,4.424 3.0432,7.0062 1.489,1.7555 2.6974,2.6101 3.807,4.7017 2.2188,2.8286 -4.8539,3.1334 -2.85,6.4925 -2.3905,1.9681 -2.1375,3.3822 -2.25,5.6972 -6.9538,1.3502 -1.2284,5.3927 -0.75,8.2539 0.15947,2.8911 -1.3052,5.9136 -3.7541,6.4554 -1.9606,2.4715 -1.5839,7.0336 -4.1778,9.4528 -3.419,0.17661 -1.0916,-4.9395 -4.6563,-5.0474 -0.72586,-2.0393 -6.7101,-5.3462 -5.2304,-0.70129 -0.54962,2.89 -3.1825,4.1134 -3.584,6.5964 -2.0434,2.0022 -1.1997,5.426 -2.5998,8.0452 -0.43897,0.0168 -3.8547,0.60948 -6.4904,1.4591 -2.7258,-0.28133 -3.7625,3.3782 -5.6584,3.8928 -0.0291,2.8693 -5.2051,1.3308 -4.049,4.9573 -2.8979,-1.0968 -1.9277,6.2546 -4.7015,5.0939 -2.1093,-3.4421 -1.0903,2.9956 -2.5488,2.6994 -1.1632,-2.1982 -2.9248,1.0596 -4.9006,0.30683 -0.59468,3.4258 -6.3355,-0.71911 -7.4261,3.6881 -0.69117,2.8997 -2.0124,4.8486 -2.4807,7.563 -3.2604,-1.3061 -8.3196,-2.5829 -10.651,0.4496 -2.8441,-1.2527 -5.6999,2.7681 -7.4335,-1.5002 -2.991,1.0074 -3.0774,-4.6454 -6.3672,-2.1 -1.7117,0.36455 -3.3562,0.44526 -3.4454,2.9963 -0.37995,3.3252 -3.1023,3.0628 -5.4049,3.7545 -1.8774,0.46252 -4.5126,-0.0803 -5.7933,1.4436 -3.4896,2.7309 -2.6692,-6.6084 -1.9355,-10.351 2.6836,-4.6797 2.5981,-9.2484 2.8731,-14.551 -3.2456,-7.2027 3.6308,0.24953 5.2637,-3.7344 5.4372,-0.86279 8.9515,-2.7995 13.98,-2.4065 4.2253,-1.8782 8.3809,-3.0238 6.7188,-9.2101 1.7257,-2.0034 1.5973,-2.7417 0.98232,-4.6885 1.9856,-2.8844 0.14352,-6.6826 3.6683,-7.4006 0.43258,-0.77877 3.3653,-2.7325 2.4006,-6.1511 0.41879,-3.0491 2.2504,-8.6166 -2.0978,-9.1063 -1.9666,-2.1976 -5.855,-1.9795 -6.303,-5.3975 -0.20329,-1.9998 4.0598,-5.1991 1.0488,-6.8991 -1.2986,-2.3782 -3.2047,-3.6238 -5.0998,-6.3076 -1.4971,-2.8976 2.6265,0.78377 4.6898,0.40678 2.8586,1.4472 6.7225,1.3057 9.1113,-0.14847 1.5732,-2.6504 2.1678,0.29724 3.049,2.0197 -3.0143,0.58822 2.9743,6.471 3.9726,2.4747 1.4586,-0.81311 2.8383,-1.3518 4.9849,-3.4457 2.3559,-2.0486 0.64181,-3.5778 2.3946,-4.7989 0.19255,-2.7135 5.3529,-2.9704 1.8772,-5.268 -2.5363,-0.87925 -1.7687,-4.9368 -0.22824,-3.4342 -0.44011,-2.2199 1.6229,-3.5869 0.75007,-5.8503 2.608,1.2653 4.392,-1.3843 5.7501,-1.2989 -1.0394,4.2422 3.5292,-0.93714 3.7498,1.5996 2.1581,0.17431 1.3412,2.9839 3.5997,2.8497 2.6764,1.2054 3.2165,4.0092 6.8519,4.1996 2.3675,-1.7621 2.1801,-5.1067 3.6431,-8.0999 1.1789,-0.86182 3.1778,-6.7854 1.6132,-8.7988 -0.75575,-0.97731 -0.18278,-1.8897 -0.4065,-2.6018 1.6676,-1.0358 5.8816,2.794 5.7999,-0.90156 z" id="path1017" />
                                <text id="svgRegions" x="566" y="534">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Senaki' : 'სენაკი'; ?>
                                </text>
                            </a>
                            <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'samegrelo/abasha.php?lang=en' : 'samegrelo/abasha.php?lang=ka'; ?>" class="text-decoration-none">
                                <path id="group2-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 658.96,532.33 c 1.6926,-0.27434 2.4874,0.27332 1.3964,2.2993 -2.5143,1.7916 -3.0955,5.1942 -5.3972,6.6025 -1.8237,2.6406 -3.8567,4.1263 -3.7858,7.9516 -1.2578,2.4956 -3.8193,4.3442 -5.5238,6.4497 -0.41554,0.93692 -2.3401,2.9634 -4.1916,4.0511 -1.4717,0.25498 1.8059,4.4652 0.1914,5.6992 -0.24289,2.1105 4.1992,2.9038 1.9084,4.1997 -0.49453,3.5935 -3.9068,6.9496 -1.051,9.4512 -1.4795,3.8582 2.1117,5.6002 1.5002,10 3.5394,0.63298 -1.5188,3.1362 0.5568,5.1491 -2.1478,0.44336 -3.0323,4.0436 -1.459,5.2463 -2.0413,3.003 2.0409,3.7761 0.6037,5.6973 -0.61568,3.1878 -3.4606,7.6726 -7.1271,4.3847 -5.4527,-1.0659 -9.5543,-4.295 -14.158,-6.8537 -0.43836,2.1369 -3.1264,0.84969 -3.8343,3.5939 -2.1249,-1.4582 -4.8669,-0.0239 -6.4319,-0.67571 -1.9359,1.1715 -5.0137,-1.1817 -8.3496,-1.1914 0.12274,2.242 -7.9873,1.2026 -7.2499,0.69922 0.61416,-4.0118 -0.49109,-7.3732 -4.1994,-7.9064 0.11849,-4.5922 -6.4091,-0.20969 -7.4515,-2.4999 -1.0801,-0.46073 -6.1964,2.1862 -3.9982,-0.95883 -7.2286,0.56749 4.2497,-7.1117 -2.2596,-6.7346 -3.3894,1.5036 -3.8522,-4.0851 -8.1487,-1.1995 -2.0643,1.2515 -7.9094,-0.23404 -4.2383,-3.1995 -0.6222,-3.2323 3.1726,-7.917 6.5958,-4.9418 1.116,-2.0266 2.9827,-2.25 4.3496,-2.8519 0.76598,0.13142 2.6352,1.9106 3.2991,-0.84003 1.0939,-1.5851 3.8313,-1.6064 4.0509,-4.1175 2.0259,-2.848 2.217,-4.9536 5.6582,-6.301 1.1225,-1.85 2.7719,-2.0262 3.7837,-4.538 1.9563,0.43333 5.697,-2.2092 8.3065,-1.6544 2.0148,-1.878 3.0356,-1.9681 1.6466,-4.5588 0.65049,-3.1526 2.3749,-3.8475 2.5117,-6.1996 2.382,-1.6816 3.0618,-5.2988 2.8907,-6.5959 0.9458,0.90823 4.5473,2.1546 2.7461,3.596 4.6528,-0.39558 1.1906,5.8875 6.6641,4.7992 2.1992,-1.7797 1.9362,-5.1782 3.8478,-6.3018 -1.2832,-1.1413 0.45288,-3.6748 1.7386,-4.0478 0.51155,2.4734 3.1227,-6.5919 2.5566,-2.3011 2.1062,0.24317 3.4642,0.37178 6.293,0.5 2.7705,-0.62019 1.825,0.75346 3.6074,1.7581 1.9762,-1.4572 2.519,1.6432 2.8499,3.4502 1.9434,0.71724 2.4337,-2.1724 4.4516,-1.9067 2.6638,-0.16035 2.5103,-3.402 5.2499,-3.6025 0.88901,-1.5846 3.0112,-3.6925 4.9984,-3.1531 -0.5041,2.6264 4.7734,0.92104 4.6019,-0.44751 z" id="path1015" />
                                <text id="svgRegions" x="599" y="578">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Abasha' : 'აბაშა'; ?>
                                </text>
                            </a>
                            <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'samegrelo/poti.php?lang=en' : 'samegrelo/poti.php?lang=ka'; ?>" class="text-decoration-none">
                                <path id="group2-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 450.54,564.43 c 3.6534,2.7483 7.5087,5.5347 13.093,5.2505 3.5926,-0.61884 6.696,3.0405 7.5682,4.4009 -2.211,1.873 -1.5652,4.7959 -3.0645,7.2989 7.2854,2.7888 3.7522,-0.0159 1.3633,3.7013 -4.1184,0.78517 -1.7612,2.448 -3.1993,4.549 1.5493,1.063 0.79869,4.4149 2.8066,6.457 0.1384,4.1265 1.9806,8.956 2.5428,12.493 -2.8866,1.2562 1.1209,4.4598 0.35356,5.8224 -1.1707,-3.538 -3.922,-3.638 -5.457,-7.5899 -2.7119,-5.3885 -6.9185,-9.9748 -8.4396,-14.775 0.52528,-2.5858 -3.0833,-6.8827 2.0996,-5.8495 -1.9395,-2.5601 -2.6894,-3.0289 -4.0488,-5.2129 -2.4013,-4.7554 -4.9291,-9.9036 -5.4631,-15.812 -0.26827,-0.15357 0.0477,-0.52538 -0.15456,-0.73232 z" id="path1015" />
                                <text id="svgRegions" x="429" y="578">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Poti' : 'ფოთი'; ?>
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
                    $query = mysqli_query($link, "select * from `regions` where ID = 2");
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
        localStorage.setItem('region', 'Samegrelo');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>