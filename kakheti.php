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
    <meta property="og:title" content="<?php echo $lang['kakhetititlename'] ?>" />
    <meta property="og:description" content="<?php echo $lang['kakhetititlename'] ?>" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <title class="tr" Key="PAGE_TITLE"><?php echo $lang['kakhetititlename'] ?></title>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <!-- Bootstrap 5.3.0 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="samegrelo.css">
    <link rel="stylesheet" type="text/css" href="kakheti/kakheti.css">
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
                <table class="table table-hover">
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/main%20information/area.xlsx' : '/regions/regions/9/dziritadi%20informacia/regionis%20fartobi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia1">
                            <td>
                                <?php echo $basicInformation[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/main%20information/number%20of%20settlements.xlsx' : '/regions/regions/9/dziritadi%20informacia/municipalitetebis,%20qalaqebis%20da%20soflebis%20raodenoba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population/Number%20of%20population/Kakheti.xlsx' : '/regions/regions/მოსახლეობა/მოსახლეობის%20რიცხოვნობა/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia22">
                            <td>
                                <?php echo $population[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population/Share%20of%20urban%20population/Kakheti.xlsx' : '/regions/regions/მოსახლეობა/საქალაქო%20დასახლებაში%20მცხოვრები/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia22">
                            <td>
                                <?php echo $population[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population/Density%20of%20population/Kakheti.xlsx' : '/regions/regions/მოსახლეობა/მოსახლეობის%20სიმჭიდროვე/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20live%20births/Kakheti.xlsx' : '/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20birth%20rate/Kakheti.xlsx' : '/regions/regions/დემოგრაფია/შობადობის%20ზოგადი%20კოეფიციენტი/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Kakheti.xlsx' : '/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Quantitative%20ratio%20of%20sexes/Kakheti.xlsx' : '/regions/regions/სქესთა%20რაოდენობრივი%20თანაფარდობა/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['6']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Mean%20age%20of%20childbearing/Kakheti.xlsx' : '/regions/regions/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['7']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20stillbirths/Kakheti.xlsx' : '/regions/regions/დემოგრაფია/მკვდრადშობილთა%20რიცხოვნობა/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['8']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20stillbirths%20by%20sex/Kakheti.xlsx' : '/regions/regions/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths/Kakheti.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20death%20rate/Kakheti.xlsx' : '/regions/regions/დემოგრაფია/მოკვდაობის%20ზოგადი%20კოეფიციენტი/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Kakheti.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Infant%20mortality%20rate/Kakheti.xlsx' : '/regions/regions/დემოგრაფია/ჩვილ%20ბავშვთა%20მოკვდაობის%20კოეფიციენტი/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['6']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Under-5%20mortality%20rate/Kakheti.xlsx' : '/regions/regions/დემოგრაფია/5%20წლამდე%20ასაკის%20ბავშვთა%20მოკვდაობის%20კოეფიციენტი/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['7']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Kakheti.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['8']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20by%20urban-rural%20settlements/Kakheti.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20საქალაქო%20სასოფლო%20დასახლებების%20მიხედთვით/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['9']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20by%20age%20groups/Kakheti.xlsx' : '/regions/regions/დემოგრაფია/მიზეზები%20ძირითადი%20კლასების%20და%20ასაკის%20მიხედვით/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['10']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Deaths%20from%20suicide/Kakheti.xlsx' : '/regions/regions/დემოგრაფია/თვითმკვლელობით%20გარდაცვლილთა%20რიცხოვნობა/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['11']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Suicide%20rate/Kakheti.xlsx' : '/regions/regions/დემოგრაფია/თვითმკვლელობის%20შედეგად%20სიკვილიანობის%20კოეფიციენტი/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Natural%20increase/Kakheti.xlsx' : '/regions/regions/დემოგრაფია/ბუნებრივი%20მატება/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia5">
                            <td>
                                <?php echo $naturalIncrease['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Natural%20increase%20rate/Kakheti.xlsx' : '/regions/regions/დემოგრაფია/ბუნებრივი%20მატების%20კოეფიციენტი/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20registered%20marriages/Kakheti.xlsx' : '/regions/regions/დემოგრაფია/რეგისტრირებულ%20ქორწინებათა%20რაოდენობა/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia6">
                            <td>
                                <?php echo $marriage['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20marriage%20rate/Kakheti.xlsx' : '/regions/regions/დემოგრაფია/ქორწინების%20ზოგადი%20კოეფიციენტი/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia6">
                            <td>
                                <?php echo $marriage['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20married%20people/Kakheti.xlsx' : '/regions/regions/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia6">
                            <td>
                                <?php echo $marriage['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Mean%20age%20of%20spouses/Kakheti.xlsx' : '/regions/regions/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20registered%20divorces/Kakheti.xlsx' : '/regions/regions/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia7">
                            <td>
                                <?php echo $divorce['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20divorce%20rate/Kakheti.xlsx' : '/regions/regions/დემოგრაფია/განქორწინების%20ზოგადი%20კოეფიციენტი/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia7">
                            <td>
                                <?php echo $divorce['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Kakheti.xlsx' : '/regions/regions/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Median%20age%20of%20population/Kakheti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Kakheti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Age%20dependency%20ratios/Kakheti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Number%20of%20population/Kakheti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['6']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Share%20of%20working%20age%20population/Kakheti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['7']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Number%20of%20private%20households/Kakheti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/კერძო%20შინამეურნეობები/კახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $gdbAndValueAdded[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/gdp%20and%20va/gdp%20and%20va.xlsx' : '/regions/regions/9/mshp%20da%20damatebuli%20girebuleba/mshp%20da%20damatebuli%20girebuleba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $foreignDirectInvestment[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/ext.trade%20and%20foreign%20direct%20invset/ext.trade%20and%20foreign%20direct%20invset.xlsx' : '/regions/regions/9/pirdapiri%20uckhouri%20investiciebi/pirdapiri%20uckhouri%20investiciebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/employment%20and%20unemployment/employment%20and%20unemployment.xlsx' : '/regions/regions/9/dasaqmeba_umushevroba/dasaqmeba_umushevroba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia17">
                            <td>
                                <?php echo $employmentAndSalaries[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/employment%20and%20unemployment/wages.xlsx' : '/regions/regions/9/dasaqmeba_umushevroba/khelfasi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi16" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'According C. Telavi' : 'ქ. თელავის მიხედვით'; ?>"><?php echo $pricesAndInflation[1]; ?>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/standard%20of%20living/incomes.xlsx' : '/regions/regions/9/ckhovrebis%20done/shemosavlebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia18">
                            <td>
                                <?php echo $standartOfLiving[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/standard%20of%20living/expenditures.xlsx' : '/regions/regions/9/ckhovrebis%20done/kharjebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/business%20sector/by%20kind%20of%20activity_nace%20rev.2.xlsx' : '/regions/regions/9/biznes%20seqtori/saqmianobis%20mikhedvit_nace%20rev.2.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia14">
                            <td>
                                <?php echo $businessSector[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/business%20sector/by%20ownership.xlsx' : '/regions/regions/9/biznes%20seqtori/sakutrebis%20formis%20mikhedvit.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia14">
                            <td><?php echo $businessSector[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/business%20sector/by%20size.xlsx' : '/regions/regions/9/biznes%20seqtori/zomis%20mikhedvit.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/agriculture/1.%20Annual%20crops.xlsx' : '/regions/regions/9/soflis%20meurneoba/1.%20erttsliani%20kulturebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia15">
                            <td>
                                <?php echo $agriculture[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/agriculture/2.%20Production%20of%20permanent%20crops.xlsx' : '/regions/regions/9/soflis%20meurneoba/2.%20mravaltslovani%20kulturebis%20tsarmoeba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia15">
                            <td>
                                <?php echo $agriculture[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/agriculture/3.%20Number%20of%20livestock.xlsx' : '/regions/regions/9/soflis%20meurneoba/3.%20pirutkvis%20suladoba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia15">
                            <td>
                                <?php echo $agriculture[5]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/agriculture/4.%20Production%20of%20animal%20housbandry.xlsx' : '/regions/regions/9/soflis%20meurneoba/4.%20metskhoveleobis%20produktsiis%20tsarmoeba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $industry[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/industry/industry.xlsx' : '/regions/regions/9/mretsveloba/mretsveloba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/construction/mshenebloba_nebartvebi.xlsx' : '/regions/regions/9/mshenebloba/mshenebloba_nebartvebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia13">
                            <td>
                                <?php echo $construction[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/construction/eqspluataciashi%20migebuli%20obieqtebi.xlsx' : '/regions/regions/9/mshenebloba/eqspluataciashi%20migebuli%20obieqtebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia13">
                            <td>
                                <?php echo $construction[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/construction/mshenebloba_dziritadi%20machveneblebi.xlsx' : '/regions/regions/9/mshenebloba/mshenebloba_dziritadi%20machveneblebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/By%20organizational%20legal%20forms/Kakheti%20Region.xlsx' : '/regions/regions/მომსახურება/ორგანიზაციულ%20სამართლებრივი/კახეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $service[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/By%20ownership%20type/Kakheti%20Region.xlsx' : '/regions/regions/მომსახურება/საკუთრების%20ფორმების%20მიხედვით/კახეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $service[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Number%20of%20markets%20and%20fairs%20by%20type/Kakheti%20Region.xlsx' : '/regions/regions/მომსახურება/ტიპების%20მიხედვით/კახეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $service[5]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Days%20of%20trade/Kakheti%20Region.xlsx' : '/regions/regions/მომსახურება/ვაჭრობის%20დღეთა%20რაოდენობის%20მიხედვით/კახეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $service[6]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Employed%20persons/Kakheti%20Region.xlsx' : '/regions/regions/მომსახურება/დირექციაში%20დასაქმებულები/კახეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $service[7]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Market-place%20and%20sellers/Kakheti%20Region.xlsx' : '/regions/regions/მომსახურება/სავაჭრო%20ადგილები%20და%20მოვაჭრეთა%20რაოდენობა/კახეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $service[8]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Financial%20indices%20of%20markets/Kakheti%20Region.xlsx' : '/regions/regions/მომსახურება/საფინანსო%20მაჩვენებლები/კახეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $trading[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/trade/trade.xlsx' : '/regions/regions/9/vachroba/vachroba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/hotels%20and%20restaurants/hotels%20and%20restaurants.xlsx' : '/regions/regions/9/sastumroebi%20da%20restornebi/sastumroebi%20da%20restornebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <?php echo $hotelsAndRestaurants[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Hotels/Kakheti%20Region.xlsx' : '/regions/regions/სასტუმროები/რაოდენობა%20და%20ფართობი/კახეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <?php echo $hotelsAndRestaurants[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Rooms/Kakheti%20Region.xlsx' : '/regions/regions/სასტუმროები/ნომრების%20რაოდენობა/კახეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <?php echo $hotelsAndRestaurants[5]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Guests/Kakheti%20Region.xlsx' : '/regions/regions/სასტუმროები/სტუმართა%20რაოდენობა/კახეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <?php echo $hotelsAndRestaurants[6]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Employees/Kakheti%20Region.xlsx' : '/regions/regions/სასტუმროები/დასაქმებულთა%20რაოდენობა/კახეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/transport%20and%20communication/transport%20and%20storage.xlsx' : '/regions/regions/9/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia10">
                            <td>
                                <?php echo $transportAndStorage[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/transport%20and%20communication/number%20of%20motor%20vehicles.xlsx' : '/regions/regions/9/transporti%20da%20kavshirgabmuloba/registrirebuli%20avtomobilebis%20raodenoba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia10">
                            <td>
                                <?php echo $transportAndStorage[4]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/transport%20and%20communication/the%20length%20of%20the%20roads.xlsx' : '/regions/regions/9/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/tourism/place%20of%20residence.xls' : '/regions/regions/9/turizmi/ganawileba%20sacxovrebeli%20adgilis%20mixedvit.xls'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia11">
                            <td>
                                <?php echo $tourism[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/tourism/visited%20regions.xls' : '/regions/regions/9/turizmi/ganawileba%20monaxulebuli%20regionebit.xls'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $legalStatistics[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/justice%20statistics/justice%20statistics.xlsx' : '/regions/regions/9/samartlebrivi%20statistika/samartlebrivi%20statistika.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <?php echo $healthCareAndSocialSecurity['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Abortions/Kakheti.xlsx' : '/regions/regions/ჯანდაცვა/აბორტები/კახეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Anemia/Kakheti.xlsx' : '/regions/regions/ჯანდაცვა/ანემია/კახეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['6']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Diabetes/Kakheti.xlsx' : '/regions/regions/ჯანდაცვა/დიაბეტი/კახეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['7']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Cancer/Kakheti.xlsx' : '/regions/regions/ჯანდაცვა/კიბო/კახეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['8']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Circulatory/Kakheti.xlsx' : '/regions/regions/ჯანდაცვა/სისხლის%20მიმოქცევა/კახეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['9']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Respiratory/Kakheti.xlsx' : '/regions/regions/ჯანდაცვა/სუნთქვა/კახეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['10']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Syphilis/Kakheti.xlsx' : '/regions/regions/ჯანდაცვა/ათაშანგი/კახეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['11']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/AIDS/Kakheti.xlsx' : '/regions/regions/ჯანდაცვა/შიდსი/კახეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['12']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Tuberculosis/Kakheti.xlsx' : '/regions/regions/ჯანდაცვა/ტუბერკულიოზი/კახეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['13']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Healthcare/Hepatitis/Kakheti.xlsx' : '/regions/regions/ჯანდაცვა/ჰეპატიტი/კახეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi21" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $healthCareAndSocialSecurity['14']; ?>
                            </td>
                        </tr>
                        <tr class="informacia21">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['16']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Social%20Statistic/Disability%20Persons/Kakheti.xlsx' : '/regions/regions/სოციალური%20სტატისტიკა/დევნილი%20შშმ%20პირები/კახეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia21">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['17']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Social%20Statistic/Disabilities%20Registered/Kakheti.xlsx' : '/regions/regions/სოციალური%20სტატისტიკა/რეგისტრირებული%20შშმ%20პირები/კახეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia21">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['18']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Social%20Statistic/Subsistence%20Allowance/Kakheti.xlsx' : '/regions/regions/სოციალური%20სტატისტიკა/საარსებო/კახეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia21">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['19']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Social%20Statistic/Receiving/Kakheti.xlsx' : '/regions/regions/სოციალური%20სტატისტიკა/მიმღები/კახეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia21">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['20']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Social%20Statistic/Beneficiaries/Kakheti.xlsx' : '/regions/regions/სოციალური%20სტატისტიკა/ბენეფიციართა/კახეთი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $education[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/education/education.xlsx' : '/regions/regions/9/ganatleba/ganatleba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $culture[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/culture/culture.xlsx' : '/regions/regions/9/kultura/kultura.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $environmentalProtection[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/environmental%20protection/environmental%20protection.xlsx' : '/regions/regions/9/garemos%20dacva/garemos%20dacva.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $infrastructure[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/9/infrastructure/infrastructure.xlsx' : '/regions/regions/9/infrastruqtura/infrastruqtura.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>




                    </tbody>
                </table>
            </div>

            <!-- Center Content -->
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                <!-- Center content goes here. Adjust height if needed or add other content. -->
                <div class="w-100 text-center p-4 rounded" style="height: 100%;">
                    <!-- <svg id="svg9" xmlns="http://www.w3.org/2000/svg" viewBox="" version="1.1"> -->
                    <svg id="svg9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000" version="1.1">
                        <g id="layer9">
                            <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'kakheti/dedofliswyaro.php?lang=en' : 'kakheti/dedofliswyaro.php?lang=ka'; ?>" class="text-decoration-none">
                                <path id="group6-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1719.9,830.5 c 2.4832,1.1202 2.7555,4.4349 6.4262,2.8164 2.2165,1.0818 1.2456,2.9196 2.9936,5.5195 4.5669,0.60316 0.2274,-0.80587 3.1106,-2.7071 5.4448,4.1997 5.7767,14.408 13.994,16.828 2.6756,4.0951 8.463,11.27 12.146,6.3066 4.2398,1.263 7.5664,3.8888 12.514,4.2582 2.0153,1.8477 5.5407,13.18 7.8416,6.8379 0.1758,-3.763 2.211,-6.8434 3.931,-8.9146 3.2586,2.2253 5.5628,2.5369 8.2924,-0.1093 3.0202,1.6671 7.2618,6.6124 8.7895,2.8493 2.9162,1.3224 6.4471,3.8235 10.338,2.3984 0.7473,5.5744 4.2186,9.8228 -2.5437,13.633 3.2226,3.4843 3.6884,12.028 10.778,9.6172 3.1367,-0.36783 7.981,1.5112 4.3679,4.8458 -1.0148,2.4001 2.4722,5.1406 4.1636,1.3655 2.7916,-2.8402 9.8067,-5.1073 5.9043,-8.6524 2.7255,-1.7842 8.6978,-3.7746 4.6645,-6.6663 1.4158,-4.8814 1.6292,-8.1906 4.4885,-11.328 3.3154,1.6749 8.506,5.5318 9.4509,1.5371 2.192,-0.99852 0.6755,-6.43 2.7442,-2.5 4.6269,0.64823 2.4235,5.2211 3.5667,8.3868 4.7483,0.34882 3.3521,3.0138 7.8576,4.1074 0.2346,3.9767 5.7122,3.0916 6.0529,6.3557 4.3149,-1.1701 2.8824,2.5338 6.95,3.0607 4.0368,-1.1115 3.5427,5.314 7.2937,1.8966 1.0601,3.7498 5.5091,0.9284 7.8747,3.4416 3.164,0.35024 7.4188,-1.3812 6.6599,2.4002 2.9371,1.4163 8.0483,-0.73331 8.5535,2.7015 3.2265,0.83471 1.8364,-5.2166 5.5974,-1.2952 0.5484,2.4514 -4.2584,3.7802 -1.0998,6.0939 2.4041,0.97901 4.4847,0.9383 4.811,-2.2245 7.5258,0.39882 0.1952,8.1814 0.8387,6.9259 -3.9668,0.1019 -2.5813,4.9991 1.155,3.7597 3.7528,1.914 5.5484,5.0961 10.108,3.3574 -0.8788,1.8217 -1.5935,6.6037 2.4012,4.2324 5.3479,-2.3784 1.3274,1.9934 2.4316,4.0488 1.7353,0.56723 7.7816,-2.0409 3.7659,1.9864 -6.7251,-1.7715 0.1344,4.9906 1.4898,7.0527 -3.9867,5.4057 5.2329,3.2136 7.2813,6.3398 -2.6545,2.0141 -5.1816,5.5838 -3.4164,7.4709 -3.985,-0.30196 -6.1413,4.7622 -1.9143,5.2505 -4.2281,0.77088 -0.3894,6.9938 -4.4974,7.801 -0.7772,1.6666 -5.8383,-0.91717 -3.8115,3.5039 -1.2704,1.5142 -5.2549,2.5825 -1.7594,4.1953 -2.9847,-0.26611 -3.3985,4.3896 -4.4726,5.8185 1.2213,2.7396 0.2572,4.526 3.5997,4.6504 -0.521,1.8436 -3.4555,5.1102 -0.7568,6.8809 -2.7077,1.541 -3.3997,1.5929 -3.5964,4.4317 -0.8913,3.0238 2.7255,5.732 0.3004,9.038 2.1811,3.0815 0.7097,2.3071 -0.1586,5.1342 -3.0945,1.0565 -1.9266,3.3915 -0.9049,5.2482 -2.7902,1.092 -5.8154,2.0578 -8.6921,3.709 -6.0426,2.0058 -14.701,-9.3101 -21.992,-4.1879 -4.2325,6.7625 -5.7395,12.651 -11.222,19.151 -2.0295,6.4003 -6.5577,2.2124 -10.334,0.1599 -1.6052,-4.4116 -1.4739,-9.2487 -3.8929,-13.133 -4.72,0.3256 -8.2959,-3.4068 -12.389,-2.2497 -4.4104,1.5945 -15.95,3.8774 -13.717,-4.7165 -6.5416,-6.8421 -13.533,-12.373 -19.947,-18.385 -5.0352,-2.0839 -5.7081,-13.968 -12.127,-8.6426 -3.0422,2.7211 -9.014,0.65156 -9.9247,-0.85359 0.1777,-5.7116 -1.9475,0.76625 -3.8988,-1.4571 -2.5891,1.2149 -3.6412,-1.1385 -6.7035,-0.5957 -1.943,0.68602 -2.9273,-3.6113 -4.7047,0.20904 -0.6634,-4.4605 -4.3169,-1.3308 -5.3845,-2.6486 -1.0317,-4.4541 -4.3284,2.9419 -3.6369,-1.6074 -2.9159,-0.23151 -2.6088,4.0221 -4.2053,0.0939 -1.5314,1.7756 -2.5999,4.162 -5.5704,3.4729 2.1627,7.16 -8.4587,10.479 -11.147,8.9843 1.1195,-3.2023 -8.0547,-2.0752 -11.342,-4.1309 -6.5581,-0.90427 -12.141,3.6018 -18.25,3.6348 -3.7051,0.0532 -3.6498,2.7686 -9.0371,-0.33792 -6.5858,0.15428 -12.75,-3.6571 -15.912,-9.6758 -4.0075,-5.8844 -11.247,-2.7423 -17.28,-5.4786 -9.6305,-1.454 -16.969,-7.3332 -24.463,-13.623 3.3079,-6.0685 11.029,-7.3459 14.094,-13.377 7.1669,3.8864 3.0966,-8.7795 8.2372,-7.7636 4.5022,2.0268 4.3416,1.2238 4.9622,-3.5458 4.198,-0.81835 3.9275,-3.1545 4.2081,-6.4036 -0.9756,-1.5042 -2.5258,-0.35019 -3.9384,-1.4006 -0.7926,-4.2304 -2.6172,1.6349 -3.5548,-1.7501 2.7027,-2.2006 -7.9958,-4.5802 -2.5318,-3.4492 -2.6067,0.60496 -4.4388,1.2865 -3.5939,-1.4999 -5.3928,-1.0278 2.0077,-10.169 2.6592,-14.016 4.9718,-6.9891 2.3326,-14.555 2.9523,-22.279 4.4084,-6.0618 5.4027,-16.072 10.729,-20.305 2.456,-4.4671 4.8013,-6.3722 6.4361,-10.97 0.425,-2.7864 4.1623,-2.863 4.6849,-6.7558 2.2585,-3.3312 3.8503,-5.0912 3.9616,-8.094 1.3418,-3.6287 4.0362,-1.4872 6.0891,-4.7815 1.4288,-0.57539 3.1648,-0.32111 3.7823,-1.2872 z" id="path1183" />
                                <text id="svgRegions" x="1735" y="930">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Dedoplistskaro' : 'დედოფლისწყარო'; ?>
                                </text>
                            </a>
                            <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'kakheti/signagi.php?lang=en' : 'kakheti/signagi.php?lang=ka'; ?>" class="text-decoration-none">
                                <path id="group6-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1723,777.18 c 0.1942,1.6151 2.0068,3.8568 3.1495,6.1192 2.4377,-2.0882 5.6004,1.5638 8.5132,0.94369 2.8252,0.46281 0.5258,3.2136 3.6481,3.0001 1.7227,0.73515 4.0098,4.7618 6.2609,2.2505 0.366,-5.7191 1.4462,0.19381 0.6096,1.6994 -0.5181,4.4262 3.7271,3.2504 4.4995,0.69907 2.3518,1.5128 4.0837,-0.92317 5.5535,0.85747 0.8889,-2.0643 -3.1864,6.9597 1.9485,4.5513 2.2566,2.2357 4.8332,-0.34051 7.2162,-0.154 1.5026,-0.4645 2.3502,2.3318 2.3973,4.9472 0.9763,0.94741 4.9293,0.81583 1.2,2.1487 -2.585,4.3161 5.2442,1.4454 4.9342,0.27733 -3.8189,1.9368 -1.3833,8.4141 2.0693,4.0626 2.0323,-3.5254 5.1488,3.7238 6.3579,-1.17 1.6062,2.7876 5.8463,-2.0762 4.0528,2.6367 2.0507,2.1248 8.0102,-1.0683 5.4018,3.5761 0.3483,2.4071 3.9104,2.4122 5.2488,2.5683 0.3117,-0.43165 0.01,2.9009 2.6471,2.8499 3.4091,-0.76771 2.4905,7.0452 6.768,2.1952 -0.8954,-3.7158 1.838,-3.3582 2.0423,-5.5996 -4.1632,-4.3233 7.647,-2.144 2.7288,-5.3421 -0.079,-3.6034 4.4214,3.8631 3.1214,4.8968 -2.3463,0.22282 -3.6709,3.5674 -0.017,4.8457 2.4369,0.89673 5.3909,0.5673 7.9027,2.0605 1.8548,-2.0778 -2.117,-4.4086 1.8469,-3.6506 0.1038,-2.1685 5.5564,-1.9101 3.1985,0.48645 -0.6961,4.3933 6.4447,1.7008 4.7992,6.5644 2.5203,2.4723 -2.2683,6.0383 -3.7894,1.8418 -2.8543,1.4456 -4.7552,1.818 -7.6645,2.6058 -0.415,3.3703 3.4293,6.26 1.711,8.5137 -0.6482,3.4885 3.349,4.9338 -0.1524,6.0626 1.7547,2.1877 4.8785,2.3087 6.1238,5.0666 0.7869,2.8835 1.7608,7.3322 2.7157,10.553 4.0623,-1.859 1.3256,2.7091 5.3439,2.8498 1.9207,-0.88507 3.0216,2.9046 5.0088,0.59964 1.5341,3.0755 6.0522,-2.0559 4.6128,1.8536 -6.064,0.9429 -0.1586,4.457 2.68,1.1465 2.8303,-0.79784 -2.6739,4.6452 1.9671,4.6741 -2.1711,2.0391 -8.5272,-7.1104 -9.8696,-0.49618 -2.1365,2.7487 -2.5204,7.3053 -3.0767,10.529 3.3068,2.5889 -1.8272,2.6465 -3.6561,4.9106 -2.4426,1.9967 2.2466,5.1992 -4.1269,7.1035 -2.0247,2.3671 -6.9287,4.5446 -4.0461,0.19697 2.7248,-4.5529 -6.2669,-5.0626 -9.7483,-4.678 -4.2652,-0.67047 -3.2186,-6.9023 -6.0895,-8.6426 8.4268,-3.7808 1.8501,-6.6021 3.0898,-13.916 -2.7362,-1.8668 -7.0659,1.0759 -9.2952,-2.3301 -2.1036,-1.4606 -3.8018,-0.71522 -5.4406,0.29875 -2.8451,-2.1489 -7.2115,-6.0623 -9.7675,-1.7891 -2.8875,-1.6515 -6.1343,-3.2857 -7.1574,-0.01 -1.9803,2.1946 -1.7285,5.8066 -3.1031,8.6257 -3.4936,-3.5294 -4.3943,-9.9016 -10.117,-9.4376 -3.8916,-0.99221 -8.4141,-5.7701 -11.888,-1.58 -5.7487,-4.7704 -12.001,-9.7153 -16.424,-15.728 -0.9052,-3.7058 -5.9713,-13.167 -8.6125,-7.3788 -1.6751,-1.7589 -2.0416,-6.48 -5.6385,-4.395 -1.6292,-0.54489 -4.7877,-4.782 -6.8337,-2.2043 -3.185,0.61843 -5.1914,3.6857 -9.2488,3.7506 2.1585,1.8522 -1.9032,5.2876 -0.9561,5.1001 -0.7217,4.2837 -4.2887,8.0122 -6.4718,10.176 -1.4124,2.1711 -0.496,3.1737 -3.0469,5.4261 -2.783,6.0438 -9.5064,11.528 -11.033,20.366 -4.7462,6.0977 -4.9926,13.552 -3.2287,21.096 -2.3909,7.4332 -9.5221,16.401 -7.5072,23.639 1.9438,-0.23091 0.4114,3.5501 3.6596,3.5468 1.8883,-0.6411 3.4801,-1.5912 4.308,1.5018 0.9723,1.4762 4.6576,1.6177 5.8612,3.0489 -3.9157,0.99687 2.4529,2.2148 -1.2003,3.8655 -4.535,1.619 -1.4337,6.8227 -6.5323,3.785 -4.7336,-2.4336 -1.3763,10.346 -6.361,8.3174 -3.6407,-0.73789 -4.4178,5.8977 -8.6301,6.3136 -4.9603,5.387 -9.1495,9.5901 -13.529,1.3126 -3.2148,-5.5231 -13.603,-11.309 -6.7946,-18.094 2.6117,-5.2178 13.642,-9.6002 9.4768,-16.151 -3.6345,-0.3579 -10.439,-5.0208 -12.428,-0.43155 0.5284,2.7259 -11.839,-2.0024 -9.6968,-1.7226 -3.417,-6.2456 -8.4403,-7.3356 -15.299,-6.3241 -9.6083,3.7477 -15.068,-1.4091 -17.859,-10.602 -0.2507,-5.8304 1.3905,-16.204 8.3312,-16.811 1.5231,-7.8328 1.0752,-15.811 2.1018,-23.637 4.2127,-2.9763 10.296,-6.4687 13.693,-7.5724 -0.6289,-3.0509 -2.834,-7.4066 2.3741,-5.2482 5.0078,-0.0116 7.0769,-1.4188 4.1642,-4.5997 -1.8314,-1.2299 -6.7921,-2.2673 -3.1241,-3.1782 4.9808,2.9464 7.9861,2.7386 13.811,2.7853 6.8427,-6.2494 11.606,-7.5978 17.67,-13.009 2.582,-1.9546 7.5004,-4.9346 6.8916,-7.6513 3.0234,1.0916 3.0825,-4.3709 6.5555,-1.5881 2.255,1.2819 4.3413,2.1424 6.4974,0.39458 -0.9269,-6.231 6.3909,-3.1104 7.9532,-7.2073 1.8578,-2.8663 4.5288,-0.83784 5.7562,-3.1096 3.227,-0.36198 8.3538,-0.57104 7.2852,-4.9825 -0.043,-4.4877 3.9414,-3.8791 5.2997,-7.6588 1.5395,-3.7036 6.1078,-1.9632 4.8952,-5.5512 3.3983,-3.8743 6.1714,-7.5604 8.9809,-11.248 0.1275,-0.0595 2.6926,0.23812 2.5255,-1.2144 z" id="path1181" />
                                <text id="svgRegions" x="1707" y="818">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Sighnaghi' : 'სიღნაღი'; ?>
                                </text>
                            </a>
                            <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'kakheti/gurjaani.php?lang=en' : 'kakheti/gurjaani.php?lang=ka'; ?>" class="text-decoration-none">
                                <path id="group6-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1647.3,701.32 c 3.0931,1.6586 2.3942,5.0506 6.1078,5.9731 1.9346,-0.24592 5.838,2.1891 4.9679,2.2992 -0.7689,3.9569 5.7603,4.5238 6.708,4.3009 2.8758,-1.0706 1.0737,4.2177 4.9888,3.0001 3.0743,2.9053 3.384,7.2248 8.0933,9.0025 2.7726,1.9108 4.2821,4.3805 7.1409,5.6976 0.9105,0.54298 2.3185,-2.2708 4.2456,0.15016 3.2538,0.0456 9.4931,0.13042 9.9095,2.2988 0.5922,4.4212 0.8192,8.9979 4.8741,9.1093 2.1732,1.0497 4.169,3.5768 0.4427,4.2346 -0.8361,2.8291 5.476,0.66849 1.908,3.3008 -2.3679,-3.7268 -2.7866,0.99727 -1.9023,1.9571 -2.2774,0.0874 -3.0784,3.5802 0.1428,3.25 4.2792,0.45413 -1.7558,3.4278 -0.7464,5.1434 0.4561,2.632 2.8697,2.195 3.0017,5.3632 1.8536,2.1085 3.9762,-2.529 4.7938,0.5937 3.1102,0.33691 2.8109,-4.6595 4.9456,-0.90025 1.3682,1.6414 0.095,3.5296 3.3969,3.2521 -3.0864,0.2051 -3.2505,4.1356 0.6185,3.948 3.1082,-2.3447 0.8373,4.8692 -0.7747,3.7969 -2.6106,2.6788 -3.5783,5.2548 -6.9081,8.0064 0.4468,2.5249 -4.2282,3.6433 -3.4386,6.2484 -3.3453,0.2638 -3.3725,2.4059 -5.4105,5.1 -1.0138,-0.14337 -2.2467,2.0887 -4.1693,3.7449 0.7739,4.0378 -0.9683,7.3658 -5.2959,6.1996 -3.6865,1.6296 -7.4249,2.2865 -9.987,6.668 -3.2195,-1.5052 -5.6799,0.93458 -6.0569,5.1388 -2.4889,0.11747 -6.4313,-3.297 -9.4105,-1.6563 -0.5663,2.956 -4.805,1.1509 -3.9028,4.8072 -5.2957,4.611 -11.756,9.3782 -16.916,12.408 -3.535,3.3248 -7.5924,6.2478 -11.84,5.2735 -2.8714,0.19434 -7.9049,-4.7941 -10.364,-1.9298 -2.4543,4.5513 7.018,1.2102 4.6677,6.4492 -5.5742,2.4454 -7.8985,-3.0511 -6.9393,-6.9609 -2.5897,1.2411 -2.406,-3.8311 -5.7949,-4.4494 -0.097,2.7081 -0.1379,-3.2484 -3.2535,-2.0918 -1.6854,-1.9904 -3.867,-1.8375 -4.5039,-3.9434 -0.2695,-4.8132 6.2473,-8.43 9.2927,-12.006 1.5388,-2.4404 -4.4368,-9.5929 2.5492,-7.5 0.1152,-4.2658 2.9072,-5.7576 0.9492,-9.9416 0.1748,-2.3798 3.097,-5.7666 -0.3145,-6.3594 -3.6175,-1.2852 -2.1958,-0.98569 -2.7267,-3.6061 -2.9621,-3.1929 -7.2875,0.88302 -9.7504,-2.3929 -5.2259,-0.50295 -9.5252,-2.884 -13.66,-5.102 -2.2736,-1.6947 -8.4331,-3.6772 -8.2445,-6.342 2.6043,-3.4265 -3.773,-7.5184 -0.2162,-12.555 2.13,-4.2415 2.392,-7.7847 1.043,-12.533 -5.9638,-4.2052 1.351,-7.7779 4.3675,-2.8184 2.8163,-0.54589 -4.0298,-5.8567 1.1799,-7.629 0.283,-2.3311 -4.0224,-5.1625 1.0021,-6.7541 3.5946,1.0581 6.3635,2.9948 8.7229,-0.10738 3.0494,-2.0522 5.2189,-7.7695 10.047,-6.0606 3.4667,-1.8273 8.2322,-2.126 9.166,-6.151 2.9666,-2.124 7.2795,-1.5493 8.6958,-5.5492 3.5154,-2.6225 6.4756,-4.7138 11.543,-7.051 0.4779,-1.8097 2.8799,-1.916 3.0151,-4.3245 z" id="path1179" />
                                <text id="svgRegions" x="1615" y="764">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Gurjaani' : 'გურჯაანი'; ?>
                                </text>
                            </a>
                            <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'kakheti/sagarejo.php?lang=en' : 'kakheti/sagarejo.php?lang=ka'; ?>" class="text-decoration-none">
                                <path id="group6-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1462.6,698.69 c 2.5238,2.0676 3.6343,4.1335 6.8565,5.7266 2.2922,1.5639 6.3322,2.9523 10.213,4.5351 -2.5031,-2.9668 2.0332,-3.6918 4.1426,-1.6504 1.2799,-6.461 7.5212,-10.162 12.584,-4.8786 5.027,3.0633 -2.8641,-1.6077 -0.8738,4.5935 1.9081,0.95189 4.5534,4.0734 5.4012,7.2094 1.9066,-0.94007 6.4008,1.4973 9.7602,0.56385 2.4957,-2.1548 4.5321,0.29289 7.114,0.94346 -0.1799,3.2788 0.7389,7.4401 0.2398,10.553 4.3346,3.6868 7.8203,7.1014 11.511,13.104 8.109,1.0649 15.424,0.38155 21.962,5.0996 6.351,2.3171 11.999,-3.5527 18.376,-2.9044 4.6218,-4.4041 15.028,-3.7669 18.547,-0.61323 -5.2992,4.1625 2.7169,9.5273 1.1582,14.494 -3.652,5.2115 -3.7703,10.194 -1.3521,15.221 -0.9212,2.9839 -2.4386,2.9732 0.808,5.1524 2.0558,1.3295 6.0858,3.7938 8.4437,5.0158 3.1071,1.1822 7.9823,4.1104 10.846,4.2852 3.3304,1.2249 6.2202,2.1132 9.6407,1.297 3.6227,1.0448 -1.7126,3.9133 3.0304,3.803 1.1156,2.2602 4.4892,-0.003 2.1,3.0316 -1.2442,3.5908 1.0037,8.2216 -1.8025,10.518 -1.7157,2.6893 -5.3392,1.2774 -2.5492,7.4491 0.5751,4.364 -5.5535,6.6636 -7.649,9.9182 -1.895,1.5915 -1.4148,4.1053 -1.1931,6.8829 2.7633,1.3386 4.4078,3.2524 7.1036,4.096 0.5028,3.169 3.1508,1.0505 3.8519,3.6641 1.2517,2.4665 2.7281,4.331 3.2249,7.4629 -2.7972,1.8566 0.1463,4.1344 -0.2595,6.3127 -5.0255,3.0713 -15.502,5.4602 -13.747,13.926 -0.6842,7.5873 1.5953,17.212 -7.1198,20.736 -2.5339,3.9502 -0.5238,15.733 -7.9973,10.766 -8.4614,-2.7567 -14.645,-10.102 -21.51,-15.469 -3.1924,-3.2687 -6.6307,6.0389 -9.5938,8.0938 -2.8331,3.0048 -4.4051,1.7927 -8.4677,1.3704 -7.8638,-0.43538 -8.5501,-10.409 -16.456,-11.222 -5.9452,-2.7369 -12.432,-7.6325 -17.582,-1.5625 -8.1766,-3.18 -18.237,-1.4217 -24.228,-8.9258 -6.1984,-1.009 -1.6793,-8.2996 -2.2576,-11.647 2.8932,0.3667 7.5875,-1.3274 4.7904,-5.4414 5.119,-1.3051 4.0306,-8.5293 0.1397,-10.445 -2.5633,-2.6459 -2.2316,-9.0761 -4.4422,-3.4198 -0.9819,2.3483 -2.7696,7.0514 -4.6161,2.5058 -1.407,-1.2793 -3.906,-7.6436 -3.7036,-2.4297 -1.8049,3.539 -8.3009,9.7762 -11.5,6.2168 -1.4616,-2.9055 -4.7357,-7.0157 -0.3612,-8.9767 3.1784,-1.9199 5.6203,-2.4425 6.9364,-5.4788 1.5474,-3.957 -0.8857,-5.4368 -4.7373,-4.2831 -4.0587,2.1829 -5.5356,-6.5698 -1.2716,-4.6543 -1.151,-3.4148 -1.9319,-3.7922 2.011,-2.3164 3.1543,2.2042 3.2847,-5.9716 7.1909,-1.8887 3.8698,3.2076 9.0545,0.489 9.9498,-3.7482 6.0379,-3.3915 5.651,-13.909 -0.082,-16.475 -1.1774,-3.4936 -4.5489,-9.8385 -0.4466,-11.165 0.52,2.1734 4.2182,0.34191 4.3205,1.0547 2.57,-4.6571 -2.819,-5.3437 -3.4505,-6.9011 1.6539,-2.6742 -4.0405,-2.2451 -1.793,-4.6371 1.8727,-1.9892 -2.5376,-4.2728 -4.4919,-4.6271 -0.5376,-3.1306 -5.7165,-1.1574 -3.2992,-4.3925 0.2571,-3.07 -0.5938,-7.805 -2.7012,-5.3494 -1.205,0.98061 -2.4581,1.0387 -5.2015,1.9494 -0.583,-0.58414 -6.8346,1.2044 -6.502,-2.4376 1.7582,-3.2399 -3.0988,-3.3946 -4.4968,-6.1118 -1.7458,-1.1618 -0.4401,-5.0105 -2.977,-5.301 2.5494,-2.6317 -1.9752,-8.6534 -2.1562,-12.506 1.0013,-7.7542 -10.869,-6.7999 -8.2244,-12.362 1.7567,-2.2311 -0.023,-6.3454 3.9391,-6.0204 3.1911,0.47587 13.319,-3.173 6.7762,-6.8534 -1.8574,-2.071 2.3258,-9.0445 -3.971,-8.9685 -1.0706,-2.8891 1.8761,0.19069 2.096,-1.4882 z" id="path1177" />
                                <text id="svgRegions" x="1524" y="811">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Sagarejo' : 'საგარეჯო'; ?>
                                </text>
                            </a>
                            <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'kakheti/lagodexi.php?lang=en' : 'kakheti/lagodexi.php?lang=ka'; ?>" class="text-decoration-none">
                                <path id="group6-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1795.5,657.79 c 2.9762,1.6057 12.098,2.7397 8.8693,6.3496 -3.0088,1.4529 -4.5056,9.518 0.9431,6.2501 3.1941,-0.07 1.9616,6.4161 5.6823,6.8651 1.4612,2.7024 2.0521,5.7901 2.3935,7.8339 4.5671,0.6237 8.0428,3.4878 11.362,6.0002 1.472,-2.5799 3.8044,-2.5844 3.3536,-5.8498 1.8889,-0.86817 5.7777,0.86405 6.5818,2.5312 1.22,4.4751 7.8202,-1.4775 11.193,-0.4687 3.6848,-1.5159 0.3439,8.596 5.6038,6.3399 6.5832,3.2566 -0.06,8.2195 -1.3468,12.578 1.6,2.9524 3.8784,6.8587 0.1606,9.2601 -2.6625,2.908 -0.8648,8.7892 -5.9489,10.158 -3.6568,5.029 -9.9809,6.2098 -13.993,11.25 -3.0916,2.8903 -5.1212,6.2749 -9.0534,8.2754 0.3621,5.5116 -3.1655,6.3419 -7.1924,6.3225 -4.1618,1.61 -9.7212,0.27749 -11.493,3.9942 -4.0126,4.2202 -8.647,-0.18301 -11.432,-3.4415 -3.0685,1.2871 -1.0733,6.7734 -1.9124,7.4572 0.214,3.1129 -2.9825,2.4296 -3.9084,5.2917 -2.4594,3.3637 -1.2127,8.2863 -2.0939,12.103 2.6868,1.6475 0.021,4.5707 2.7019,6.2148 -0.6122,5.3216 1.7664,9.0697 5.6527,13.092 -0.085,0.90346 -0.3149,4.2452 -2.4012,3.9844 -3.9249,1.8485 2.0292,3.6192 -2e-4,6.5998 -1.6726,-2.0553 -2.3505,5.3027 -2.5376,1.8533 1.3538,-4.8446 -4.0681,0.84314 -4.8538,-2.4453 -2.0164,-0.027 -2.1096,4.0797 -3.6485,0.14862 -3.0766,-0.9199 -3.6191,2.5856 -6.174,2.4802 -1.254,-2.7582 8.1008,-6.7979 2.6113,-6.5333 -1.1216,0.77229 -6.2518,4.953 -5.6836,2.6541 4.1088,-1.1674 0.5216,-4.9552 -1.0607,-3.8496 -0.7385,-2.6298 1.6777,-3.7982 -1.5032,-3.9006 0.8392,-5.5094 -3.2634,1.4535 -3.7421,-1.9512 -1.3709,1.1017 -3.0685,3.0732 -4.9653,1.0507 -4.788,1.2224 1.5581,-5.4622 -2.7127,-5.7502 1.0706,-2.8304 -3.424,-1.5516 -2.2701,0.80093 -2.8411,-1.4024 -4.998,0.64562 -6.0005,1.6486 -1.9622,-2.9152 5.9532,-3.5006 1.2116,-4.9497 -2.3446,3.4166 -0.3306,-5.1522 -4.0585,-1.6502 0.4813,4.6013 -3.2019,1.6333 -3.9416,-0.15058 -4.3529,1.1487 0.3867,-5.1608 -4.1535,-2.9982 -3.8725,-0.57977 -6.9352,-1.1766 -9.8216,-2.4513 -0.9963,-2.6718 -2.6405,-4.8914 -2.5832,-7.0487 3.2544,-3.0505 -2.0889,-2.0079 -3.6086,-1.7582 -1.1937,-0.66314 4.1157,-2.8288 0.303,-4.3438 2.1689,-3.3635 -2.2919,-4.9146 -1.6426,-1.6484 -1.3048,-2.4387 -4.1439,-3.7909 -5.5576,-2.8503 -1.8986,-1.1254 -3.8277,4.2342 -4.1997,1.7522 3.2522,-2.9785 -1.0147,-2.4649 -1.5028,-1.7343 -3.6971,-1.9974 0.5248,-0.80705 -1.4921,-3.3184 2.5561,-1.1918 2.7109,-5.3319 -1.2112,-5.4007 -1.8397,-0.3946 3.2677,0.2504 1.8078,-2.6 3.2656,0.0849 3.1401,-4.8315 2.1037,-5.0918 0.9029,-3.3146 -6.5676,-4.9952 -1.808,-5.3976 1.7242,-0.92959 5.1432,-2.5382 7.1946,-3.9132 1.3238,-1.8084 5.4673,-2.5934 6.6,-4.9505 1.2452,-1.3004 3.1087,-3.0489 4.9385,-3.151 2.6757,-2.8676 4.8086,-3.4971 8.1679,-6.8135 2.6285,-1.6777 3.8742,1.7732 6.3548,0.0739 4.2194,2.5085 7.4362,2.3478 12.789,2.2382 -1.5055,-3.3449 5.999,-4.8545 2.5191,-8.0273 -0.9936,-6.6476 -0.2584,-15.659 7.0357,-18.682 1.8518,-6.5166 7.7936,-13.293 0.8023,-19.296 -6.9372,-3.9481 1.7284,-10.406 1.7121,-14.143 2.2593,-2.0461 6.5264,-5.5114 8.8325,-3.8945 -1.7455,4.9058 3.1019,9.4339 6.7382,5.2364 1.6932,-3.5176 6.9484,0.0651 8.175,-4.3713 2.7311,-0.96936 6.1351,-1.1942 7.1132,-3.8649 z" id="path1175" />
                                <text id="svgRegions" x="1750" y="738">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Lagodekhi' : 'ლაგოდეხი'; ?>
                                </text>
                            </a>
                            <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'kakheti/yvareli.php?lang=en' : 'kakheti/yvareli.php?lang=ka'; ?>" class="text-decoration-none">
                                <path id="group6-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1653.5,613.69 c 3.3124,2.6776 9.5211,-0.19458 8.4829,6.0118 1.9081,3.3428 6.5621,8.282 7.612,2.1836 3.0657,-6.2357 7.0796,5.5248 10.819,-0.29687 4.353,0.86839 8.4416,-2.8518 12.035,1.623 3.1286,2.4665 7.3111,-2.7088 8.7732,3.1132 3.6997,0.32661 2.332,4.8792 4.4361,6.5569 -3.7342,3.7453 -1.9416,8.8088 3.0484,10.037 2.2336,3.2356 0.5605,6.7361 -0.7113,9.676 3.2236,-1.4085 4.9304,-3.3917 5.6899,0.71684 4.5721,5.5571 7.6406,-2.9936 10.855,-5.3497 2.9911,-3.191 5.9627,5.24 9.0061,0.68956 5.0932,-2.115 0.4557,7.8609 6.2403,6.6036 2.6011,3.403 4.6121,-0.20422 6.5511,-1.6544 2.5566,-0.25748 4.6645,-8.3282 6.336,-2.9318 2.8571,4.036 -0.2967,10.196 3.8993,13.439 0.7033,3.6953 7.7539,4.862 2.3964,9.0352 -0.4233,6.1457 11.449,11.607 4.252,17.649 0.2213,8.4846 -10.478,10.123 -9.589,18.957 -0.409,5.1998 3.5751,9.5872 -2.1646,12.594 -0.9949,2.4591 -4.8876,0.59644 -6.5672,1.1955 -2.5983,-1.3972 -6.2962,-2.5186 -8.2547,-2.2477 -4.4135,-1.79 -6.2712,4.0258 -9.7752,3.9114 -0.096,2.8803 -4.2181,3.0071 -5.5478,4.6477 -2.4996,1.6854 -3.0313,3.2652 -5.5689,5.1045 -3.9187,-0.1166 -4.2529,4.8367 -8.6339,3.9018 -1.2467,2.5135 -2.5592,0.84055 -3.9105,2.0826 -1.3861,0.0243 -3.1024,-4.3884 -2.3264,-6.4943 1.2305,-3.4153 -5.8748,-3.5129 -9.2569,-3.6991 -3.4308,0.29207 -3.8408,-2.9514 -5.6841,-0.45111 -2.5318,0.22269 -1.9112,-2.035 -4.4008,-3.1526 -1.8805,-2.455 -5.8331,-2.2482 -6.2937,-5.5474 -2.5198,-1.5142 -2.7396,-6.7187 -6.6037,-6.0006 -0.5554,-2.6338 -3.3288,-4.2005 -5.6941,-2.4004 -1.0847,-2.1478 -6.0043,-1.4332 -2.0004,-4.799 -3.5734,-0.93365 -5.6388,-2.0965 -9.3976,-3.1509 -0.7006,-5.227 -8.4156,-5.5018 -8.2056,-10.352 -3.681,0.11512 -4.3107,-3.6144 -7.0391,-4.5025 -2.9012,-2.206 -5.7485,-5.1272 -10.35,-4.9537 -0.9573,-2.2322 1.5138,-5.0524 -2.6879,-4.1932 -3.5631,-0.9903 -3.2596,-4.8685 -6.2885,-6.7511 0.1863,-1.1497 -4.0397,1.7612 -3.8411,-1.5958 -2.3098,-2.3341 -7.4911,-2.5497 -8.2172,-6.6533 -1.6102,-2.2374 -7.0669,0.63702 -6.8934,-4.7123 -0.4784,-3.3296 5.0404,-7.3863 0.3105,-9.1979 0.1667,3.4042 -3.8968,2.8965 -1.3003,0.81843 1.1289,-1.0215 3.4954,-4.3322 0.1616,-4.3283 -0.021,-1.4098 -2.2286,-2.4269 -3.4151,-3.7348 -1.5068,-0.53086 -5.5584,0.23054 -4.5912,-1.6878 1.9845,2.724 2.7524,-5.1722 5.4064,-0.45043 1.7288,1.3086 3.9436,1.4862 4.8011,3.6001 2.1735,3.8349 5.563,1.9257 3.1966,-1.0096 2.8466,-0.88198 -0.4928,-4.1868 1.4017,-3.3396 0.9091,0.62512 4.6313,-0.2734 2.5929,1.201 3.371,-0.35762 5.685,-1.9209 6.4532,1.0452 0.9433,4.3527 5.6498,0.13619 8.7634,0.86923 7.4751,-5.0527 18.326,-6.7329 20.542,-16.634 2.2092,-4.332 8.2344,-5.6714 9.0614,-11.454 0.4029,-1.3692 1.4854,-2.3522 2.0869,-3.5368 z" id="path1173" />
                                <text id="svgRegions" x="1650" y="674">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Kvareli' : 'ყვარელი'; ?>
                                </text>
                            </a>
                            <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'kakheti/telavi.php?lang=en' : 'kakheti/telavi.php?lang=ka'; ?>" class="text-decoration-none">
                                <path id="group6-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1572.4,549.5 c 6.7198,0.0109 9.6349,8.8388 16.325,8.6464 5.3994,3.0413 -0.078,7.6911 3.2846,12.754 0.6583,7.0763 5.0057,9.9672 11.261,6.3496 4.7054,4.5102 6.3396,-2.7277 9.9132,-4.3924 4.1928,-3.3433 -1.5799,4.8943 0.9005,7.0956 0.1914,4.2704 6.87,2.3949 6.9555,7.2484 2.8274,2.2347 4.676,5.7824 8.7489,5.047 4.6732,-0.49947 7.2339,3.7752 11.606,4.5394 2.528,3.0229 6.7016,3.0925 6.9362,7.5139 1.8047,1.1399 9.7,1.7074 5.0758,4.7754 -2.0213,6.1471 -4.189,13.928 -10.865,16.58 -2.5715,7.5414 -7.6374,13.486 -15.912,15.601 -3.4582,2.2592 -8.9526,4.6888 -12.162,3.3593 0.4401,-4.0583 -4.8576,-2.8021 -5.9492,-3.4302 -3.1787,0.49725 -3.6327,-1.2934 -7.3032,-0.30078 1.77,1.655 0.085,5.214 0.4921,6.572 -2.184,-3.0242 -3.1248,-4.5839 -6.5979,-5.6685 -0.6225,-1.6005 -5.4298,-3.5651 -4.5543,0.14648 -3.8742,0.0543 -2.9285,2.1855 -3.6474,4.6099 3.5684,-0.33402 3.7319,-0.45359 5.5013,2.0586 -0.048,-5.2748 1.9739,-0.35534 3.3967,0.51225 0.014,0.62803 3.5451,2.0915 0.01,3.1699 -3.298,1.3322 0.7335,6.0649 2.3014,3.5682 2.6048,-2.6316 -1.194,4.2142 -2.2276,4.8321 2.321,3.5938 2.7557,7.4641 7.7625,5.9601 0.1663,1.5687 3.2261,4.0543 2.991,3.8997 2.2103,1.6328 5.9777,1.8949 6.5969,4.7931 2.1053,0.73956 4.56,-0.13078 5.1088,2.5492 0.956,2.5451 4.0462,5.0406 6.0481,4.551 -1.1612,5.7651 6.1248,3.9967 8.4946,6.4673 2.0688,3.0133 5.8159,3.2838 7.2074,6.8324 3.969,-0.24327 2.1151,4.1874 6.0415,4.5002 -0.1419,4.4417 -7.1266,6.707 -10.195,8.2999 -2.4493,1.8778 -5.8628,4.5699 -7.0492,6.5996 -3.0747,0.49124 -2.794,0.28854 -5.9942,2.2503 -0.7756,3.9925 -4.9735,3.7688 -8.1122,5.7018 -3.0736,-0.8834 -7.8568,2.4909 -9.5449,5.998 -2.6886,1.8757 -4.1278,3.4257 -7.1374,0.90054 -4.5954,-1.9896 -7.4052,4.3665 -3.8608,6.5996 -2.1132,1.3156 -3.0811,3.985 -1.502,5.8925 -3.7089,-2.1497 -7.4888,-6.1206 -15.038,-4.8418 -5.3908,-0.10922 -8.9919,4.7232 -14.561,3.4747 -5.3082,4.697 -12.248,2.6369 -16.963,-0.47457 -2.8382,-2.168 -9.3338,-0.42618 -13.587,-2.25 -4.5627,-0.57486 -7.6398,-8.0695 -10.107,-10.207 -1.4023,-1.4068 -5.0589,-1.8241 -2.8464,-4.9611 -0.3164,-3.9606 -1.2384,-7.7094 -2.4372,-10.369 1.5122,2.6443 3.9886,-2.4582 7.5211,-0.30174 2.2027,-2.5813 3.3409,-1.3043 4.7095,-6.0008 7.6064,-1.5003 7.5241,-7.0081 8.4648,-13.266 3.7508,-4.1446 3.9529,-5.4852 7.8164,-8.484 1.3179,-2.3356 1.6136,-4.875 4.055,-6.4063 0.4225,-3.0183 0.9982,-6.7304 4.0512,-6.9406 1.7339,-4.9194 3.9162,-6.8743 6.2605,-11.368 -5.3161,0.80307 2.5716,-4.3487 -1.9043,-5.5511 -0.9492,-2.2155 -4.3563,-4.7512 -3.4342,-7.3909 3.5184,-0.95838 -2.6018,-7.445 1.3462,-7.0479 2.3712,-2.0223 -0.53,-5.2854 -0.9026,-7.9271 2.2307,-3.4644 0.3758,-7.997 -0.4883,-13.032 -5.2487,-6.6343 -14.417,-14.482 -12.766,-24.022 4.9114,-3.4238 7.1677,-6.7646 8.0996,-13.053 2.5884,-6.8459 12.349,-6.6798 15.461,-13.608 -2.9587,-4.794 -8.4968,-10.339 -2.6621,-14.76 2.0227,-3.4784 5.6378,-3.96 9.571,-4.1957 z" id="path1171" />
                                <text id="svgRegions" x="1566" y="620">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Telavi' : 'თელავი'; ?>
                                </text>
                            </a>
                            <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'kakheti/axmeta.php?lang=en' : 'kakheti/axmeta.php?lang=ka'; ?>" class="text-decoration-none">
                                <path id="group6-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1527.6,440.75 c 4.7401,4.0537 1.931,11.048 4.6627,16.537 2.1518,3.8235 4.5523,4.1643 8.2283,2.5196 4.0231,-2.3319 8.3983,-2.8578 11.693,-6.2949 0.2151,-4.4503 6.8226,-5.6632 8.273,-1.0353 3.3595,2.0269 7.7094,-3.3695 10.362,1.328 4.7198,-0.83122 9.4464,2.6088 14.006,0.80663 1.915,-2.6038 4.5863,-4.609 6.3921,-1.2577 3.4876,1.0447 7.287,-0.60031 10.255,-2.4883 4.0371,-2.848 3.9557,3.5858 7.3864,4.5878 1.5905,1.3089 -1.1651,8.5221 3.9629,9.1546 2.4862,4.7938 7.3113,-2.5848 10.108,2.0078 2.3068,5.586 7.3336,-1.6125 11.09,-0.59977 2.8818,0.67054 2.8184,5.8635 4.1528,8.1054 1.9853,3.0986 6.4118,3.5647 9.4914,3.7441 2.9733,-1.8624 6.5644,-1.5822 9.8734,-3.8125 1.2459,0.634 5.6808,-3.1151 3.8805,2.7693 0.094,3.9946 -2.1627,6.7304 1.1605,9.8204 0.8838,3.0515 -1.5375,6.8277 -1.8195,10.164 -1.4311,4.2006 -5.683,6.4096 -6.0786,11.492 -3.2266,4.1394 -7.3024,9.9298 -2.1545,13.858 -0.3915,3.1842 -0.6212,8.9605 0.3922,12.685 4.6136,1.1779 2.5827,4.2718 2.5535,8.1193 -2.2234,3.6915 -4.3587,7.0358 -8.9331,7.4845 -2.8666,-4.5836 -7.2326,-1.6374 -9.8321,1.6563 -3.8972,0.5326 -6.4758,1.4662 -8.8496,-2.6992 -5.5997,2.6516 -4.693,9.8019 -9.3988,13.254 -1.5619,1.8702 -3.1855,4.3276 -1.145,6.6935 -3.2776,2.4135 -7.7548,3.4417 -9.7081,8.0566 -3.4445,-4.1336 -12.824,4.6122 -12.963,-3.0763 -4.4854,-4.0633 -0.7909,-11.959 -3.4205,-14.428 -2.7672,-4.0483 -8.6906,-3.7652 -11.925,-8.3106 -6.4051,-6.5155 -16.937,-1.9869 -20.163,5.4224 -2.5455,4.5314 9.5862,11.047 2.164,14.951 -7.7693,3.1543 -14.411,8.711 -14.035,17.832 -10.71,2.5389 -6.5381,14.472 -1.2774,20.366 2.995,5.8719 9.224,7.6654 8.504,15.073 3.9152,3.1574 -4.0512,6.6238 0.2654,8.8679 0.1059,2.6696 3.1675,5.7448 -1.7988,6.0365 0.5807,2.0957 3.531,6.3438 0,6.4504 0.2216,5.0216 3.7294,6.9343 5.2339,10.503 -1.366,2.2223 -3.7989,3.1137 -0.1952,4.2603 -1.5392,3.4795 -3.8048,4.9 -4.7457,9.2472 -2.7587,-0.16953 -4.4869,3.9481 -4.1925,6.5339 -0.3906,2.0477 -2.9155,1.2362 -2.5978,3.8173 -1.4564,-0.36423 -1.319,4.6594 -3.7619,4.9528 -3.3483,3.5914 -8.0389,8.5232 -7.101,15.035 -1.2136,3.7741 -9.588,4.2018 -8.9463,9.0478 -1.4188,-0.21092 -3.4553,2.9609 -7.5258,1.8735 -1.5867,-3.9003 -2.5275,3.2746 -4.5319,1.3552 -1.3942,-1.2492 -4.537,-4.9805 -5.4367,-0.19693 4.5954,1.1666 -3.7625,1.2289 -5.6943,-0.1153 -2.0673,-0.93785 -1.8819,1.326 -2.9412,-2.5937 0.7741,-3.8052 -3.1654,-1.1052 -3.1236,-4.5645 -1.9878,-2.779 1.3693,1.4475 4.0935,0.31856 3.3945,-0.65788 -2.5216,-2.7472 -4.0249,-4.3466 -4.9873,-1.23 0.9629,-10.307 -7.0933,-11.129 -0.1028,-6.4839 -8.7965,-1.8491 -13.69,-7.0078 -4.0333,-6.3862 -11.767,5.7639 -14.54,-3.2793 0.3533,-5.1891 -8.614,-7.1696 -3.9257,-11.887 3.6312,-4.5195 9.2263,-10.189 3.766,-16.031 -3.8961,-3.1365 -7.887,-8.8085 -8.6174,-14.299 4.7648,-4.9077 8.6261,-13.926 -1.1054,-15.83 -6.3769,-2.7372 2.7196,-10.517 7.2131,-9.2891 1.7832,-5.4642 -0.6776,-13.208 4.2285,-18.324 0.779,-7.8185 1.0527,-13.488 2.9433,-21.16 2.6705,-3.3175 4.9086,-8.9082 8.1663,-11.188 -1.2921,-4.1246 -0.9629,-6.833 2.6112,-9.3392 2.1267,1.7474 3.3824,5.3928 3.8319,0.13876 1.8497,-2.7462 9.7676,1.4594 5.7896,-2.4553 0.5001,-1.7735 -2.8625,-6.0494 0.057,-6.6679 3.6101,-1.0818 2.8741,-2.7936 4.5063,-2.3946 5.2784,-3.2294 18.487,-2.5173 16.798,-12.944 0.2794,-6.3148 -3.1554,-12.495 -5.7543,-17.226 2.2358,-5.249 -5.9893,-12.456 1.5898,-15.797 1.3022,-6.3837 7.4439,-6.3782 10.706,-10.341 4.5094,-5.1102 -2.1699,-9.178 0.6046,-14.485 -1.9982,-7.2436 2.321,-12.536 1.9492,-18.652 4.8229,-1.7581 7.1331,-6.7453 10.107,-11.381 z" id="path10323" />
                                <text id="svgRegions" x="1550" y="515">
                                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Akhmeta' : 'ახმეტა'; ?>
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
                    $query = mysqli_query($link, "select * from `regions` where ID = 9");
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
        localStorage.setItem('region', 'Kakheti');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>