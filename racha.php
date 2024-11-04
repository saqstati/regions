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
    <meta property="og:title" content="<?php echo $lang['rachatitlename'] ?>" />
    <meta property="og:description" content="<?php echo $lang['rachatitlename'] ?>" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <title class="tr" Key="PAGE_TITLE"><?php echo $lang['rachatitlename'] ?></title>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <!-- Bootstrap 5.3.0 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="samegrelo.css">
    <link rel="stylesheet" type="text/css" href="racha/racha.css">
    <link rel="stylesheet" type="text/css" href="custom.css">
    <link rel="stylesheet" href="mediastyles.css">
</head>

<body>
    <div id="background-main" class="background-image"></div>
    <div class="main-container">
        <?php include 'asset/header.php' ?>
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
                    <th id="dziritadi1" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $basicInformation[1]; ?> <span class="float-right"><i id="classchange" class="dropdown_img_up"></i></span>
                    </th>
                </tr>
                <tr class="informacia1">
                    <td>
                        <?php echo $basicInformation[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/main%20information/area.xlsx' : '/regions/regions/7/dziritadi%20informacia/regionis%20fartobi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia1">
                    <td>
                        <?php echo $basicInformation[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/main%20information/number%20of%20settlements.xlsx' : '/regions/regions/7/dziritadi%20informacia/municipalitetebis,%20qalaqebis%20da%20soflebis%20raodenoba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population/Number%20of%20population/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/მოსახლეობა/მოსახლეობის%20რიცხოვნობა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia22">
                    <td>
                        <?php echo $population[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population/Share%20of%20urban%20population/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/მოსახლეობა/საქალაქო%20დასახლებაში%20მცხოვრები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia22">
                    <td>
                        <?php echo $population[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population/Density%20of%20population/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/მოსახლეობა/მოსახლეობის%20სიმჭიდროვე/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20live%20births/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20birth%20rate/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/შობადობის%20ზოგადი%20კოეფიციენტი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Quantitative%20ratio%20of%20sexes/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/სქესთა%20რაოდენობრივი%20თანაფარდობა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['6']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Mean%20age%20of%20childbearing/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['7']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20stillbirths/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/მკვდრადშობილთა%20რიცხოვნობა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['8']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20stillbirths%20by%20sex/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20death%20rate/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/მოკვდაობის%20ზოგადი%20კოეფიციენტი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Infant%20mortality%20rate/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/ჩვილ%20ბავშვთა%20მოკვდაობის%20კოეფიციენტი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['6']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Under-5%20mortality%20rate/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/5%20წლამდე%20ასაკის%20ბავშვთა%20მოკვდაობის%20კოეფიციენტი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['7']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['8']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20by%20urban-rural%20settlements/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20საქალაქო%20სასოფლო%20დასახლებების%20მიხედთვით/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['9']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20by%20age%20groups/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['10']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Deaths%20from%20suicide/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/თვითმკვლელობით%20გარდაცვლილთა%20რიცხოვნობა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['11']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Suicide%20rate/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/თვითმკვლელობის%20შედეგად%20სიკვილიანობის%20კოეფიციენტი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Natural%20increase/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/ბუნებრივი%20მატება/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia5">
                    <td>
                        <?php echo $naturalIncrease['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Natural%20increase%20rate/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/ბუნებრივი%20მატების%20კოეფიციენტი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20registered%20marriages/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/რეგისტრირებულ%20ქორწინებათა%20რაოდენობა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia6">
                    <td>
                        <?php echo $marriage['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20marriage%20rate/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/ქორწინების%20ზოგადი%20კოეფიციენტი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia6">
                    <td>
                        <?php echo $marriage['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20married%20people/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia6">
                    <td>
                        <?php echo $marriage['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Mean%20age%20of%20spouses/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20registered%20divorces/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia7">
                    <td>
                        <?php echo $divorce['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20divorce%20rate/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/განქორწინების%20ზოგადი%20კოეფიციენტი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia7">
                    <td>
                        <?php echo $divorce['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Median%20age%20of%20population/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Age%20dependency%20ratios/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Number%20of%20population/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['6']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Share%20of%20working%20age%20population/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['7']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Number%20of%20private%20households/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/კერძო%20შინამეურნეობები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $gdbAndValueAdded[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/gdp%20and%20va/gdp%20and%20va.xlsx' : '/regions/regions/7/mshp%20da%20damatebuli%20girebuleba/mshp%20da%20damatebuli%20girebuleba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $foreignDirectInvestment[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/ext.trade%20and%20foreign%20direct%20invset/ext.trade%20and%20foreign%20direct%20invset.xlsx' : '/regions/regions/7/pirdapiri%20uckhouri%20investiciebi/pirdapiri%20uckhouri%20investiciebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/employment%20and%20unemployment/employment%20and%20unemployment.xlsx' : '/regions/regions/7/dasaqmeba_umushevroba/dasaqmeba_umushevroba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia17">
                    <td>
                        <?php echo $employmentAndSalaries[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/employment%20and%20unemployment/wages.xlsx' : '/regions/regions/7/dasaqmeba_umushevroba/khelfasi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <style>
                    /* დავმალეთ, რადგან არ გვაქვს ეგ ფაილები */
                    #dziritadi4,
                    .informacia4 {
                        display: none;
                    }
                </style>
                <tr>
                    <td id="dziritadi4" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '' : ''; ?>"><?php echo $pricesAndInflation[1]; ?>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $pricesAndInflation[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/prices/consumer%20price%20index%2012%20month%20avarage%20over%20the%20previous%2012%20month%20avarage%20-%20gori.xlsx' : '/regions/regions/7/fasebi/samomxmareblo%20fasebis%20indeqsebi%2012%20tvis%20sashualo%20wina%2012%20Tvis%20saSualosTan%20-%20gori.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $pricesAndInflation[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/prices/consumer%20price%20index%20to%20the%20previous%20month%20-%20gori.xlsx' : '/regions/regions/7/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20tvestan%20-%20gori.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $pricesAndInflation[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/prices/consumer%20price%20index%20to%20the%20same%20month%20of%20previous%20year%20-%20gori.xlsx' : '/regions/regions/7/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20wlis%20shesabamis%20TvesTan%20-%20gori.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/standard%20of%20living/incomes.xlsx' : '/regions/regions/7/ckhovrebis%20done/shemosavlebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia18">
                    <td>
                        <?php echo $standartOfLiving[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/standard%20of%20living/expenditures.xlsx' : '/regions/regions/7/ckhovrebis%20done/kharjebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/business%20sector/by%20kind%20of%20activity_nace%20rev.2.xlsx' : '/regions/regions/7/biznes%20seqtori/saqmianobis%20mikhedvit_nace%20rev.2.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia14">
                    <td>
                        <?php echo $businessSector[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/business%20sector/by%20ownership.xlsx' : '/regions/regions/7/biznes%20seqtori/sakutrebis%20formis%20mikhedvit.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia14">
                    <td><?php echo $businessSector[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/business%20sector/by%20size.xlsx' : '/regions/regions/7/biznes%20seqtori/zomis%20mikhedvit.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/agriculture/1.%20Annual%20crops.xlsx' : '/regions/regions/7/soflis%20meurneoba/1.%20erttsliani%20kulturebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia15">
                    <td>
                        <?php echo $agriculture[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/agriculture/2.%20Production%20of%20permanent%20crops.xlsx' : '/regions/regions/7/soflis%20meurneoba/2.%20mravaltslovani%20kulturebis%20tsarmoeba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia15">
                    <td>
                        <?php echo $agriculture[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/agriculture/3.%20Number%20of%20livestock.xlsx' : '/regions/regions/7/soflis%20meurneoba/3.%20pirutkvis%20suladoba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia15">
                    <td>
                        <?php echo $agriculture[5]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/agriculture/4.%20Production%20of%20animal%20housbandry.xlsx' : '/regions/regions/7/soflis%20meurneoba/4.%20metskhoveleobis%20produktsiis%20tsarmoeba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $industry[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/industry/industry.xlsx' : '/regions/regions/7/mretsveloba/mretsveloba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/construction/mshenebloba_nebartvebi.xlsx' : '/regions/regions/7/mshenebloba/mshenebloba_nebartvebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia13">
                    <td>
                        <?php echo $construction[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/construction/eqspluataciashi%20migebuli%20obieqtebi.xlsx' : '/regions/regions/7/mshenebloba/eqspluataciashi%20migebuli%20obieqtebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia13">
                    <td>
                        <?php echo $construction[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/construction/mshenebloba_dziritadi machveneblebi.xlsx' : '/regions/regions/7/mshenebloba/mshenebloba_dziritadi%20machveneblebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/By%20organizational%20legal%20forms/Racha-Lechkhumi%20and%20Kvemo%20Svaneti%20Region.xlsx' : '/regions/regions/მომსახურება/ორგანიზაციულ%20სამართლებრივი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/By%20ownership%20type/Racha-Lechkhumi%20and%20Kvemo%20Svaneti%20Region.xlsx' : '/regions/regions/მომსახურება/საკუთრების%20ფორმების%20მიხედვით/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Number%20of%20markets%20and%20fairs%20by%20type/Racha-Lechkhumi%20and%20Kvemo%20Svaneti%20Region.xlsx' : '/regions/regions/მომსახურება/ტიპების%20მიხედვით/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[5]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Days%20of%20trade/Racha-Lechkhumi%20and%20Kvemo%20Svaneti%20Region.xlsx' : '/regions/regions/მომსახურება/ვაჭრობის%20დღეთა%20რაოდენობის%20მიხედვით/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[6]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Employed%20persons/Racha-Lechkhumi%20and%20Kvemo%20Svaneti%20Region.xlsx' : '/regions/regions/მომსახურება/დირექციაში%20დასაქმებულები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[7]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Market-place%20and%20sellers/Racha-Lechkhumi%20and%20Kvemo%20Svaneti%20Region.xlsx' : '/regions/regions/მომსახურება/სავაჭრო%20ადგილები%20და%20მოვაჭრეთა%20რაოდენობა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[8]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Financial%20indices%20of%20markets/Racha-Lechkhumi%20and%20Kvemo%20Svaneti%20Region.xlsx' : '/regions/regions/მომსახურება/საფინანსო%20მაჩვენებლები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $trading[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/trade/trade.xlsx' : '/regions/regions/7/vachroba/vachroba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/hotels%20and%20restaurants/hotels%20and%20restaurants.xlsx' : '/regions/regions/7/sastumroebi%20da%20restornebi/sastumroebi%20da%20restornebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia9">
                    <td>
                        <?php echo $hotelsAndRestaurants[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Hotels/Racha-Lechkhumi%20and%20Kvemo%20Svaneti%20Region.xlsx' : '/regions/regions/სასტუმროები/რაოდენობა%20და%20ფართობი/რაჭა-ლეჩხუმისა%20და%20ქვემო%20სვანეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia9">
                    <td>
                        <?php echo $hotelsAndRestaurants[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Rooms/Racha-Lechkhumi%20and%20Kvemo%20Svaneti%20Region.xlsx' : '/regions/regions/სასტუმროები/ნომრების%20რაოდენობა/რაჭა-ლეჩხუმისა%20და%20ქვემო%20სვანეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia9">
                    <td>
                        <?php echo $hotelsAndRestaurants[5]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Guests/Racha-Lechkhumi%20and%20Kvemo%20Svaneti%20Region.xlsx' : '/regions/regions/სასტუმროები/სტუმართა%20რაოდენობა/რაჭა-ლეჩხუმისა%20და%20ქვემო%20სვანეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia9">
                    <td>
                        <?php echo $hotelsAndRestaurants[6]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Employees/Racha-Lechkhumi%20and%20Kvemo%20Svaneti%20Region.xlsx' : '/regions/regions/სასტუმროები/დასაქმებულთა%20რაოდენობა/რაჭა-ლეჩხუმისა%20და%20ქვემო%20სვანეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/transport%20and%20communication/transport%20and%20storage.xlsx' : '/regions/regions/7/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $transportAndStorage[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/transport%20and%20communication/number%20of%20motor%20vehicles.xlsx' : '/regions/regions/7/transporti%20da%20kavshirgabmuloba/registrirebuli%20avtomobilebis%20raodenoba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $transportAndStorage[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/transport%20and%20communication/the%20length%20of%20the%20roads.xlsx' : '/regions/regions/7/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/tourism/place%20of%20residence.xls' : '/regions/regions/7/turizmi/ganawileba%20sacxovrebeli%20adgilis%20mixedvit.xls'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia11">
                    <td>
                        <?php echo $tourism[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/tourism/visited%20regions.xls' : '/regions/regions/7/turizmi/ganawileba%20monaxulebuli%20regionebit.xls'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $legalStatistics[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/justice%20statistics/justice%20statistics.xlsx' : '/regions/regions/7/samartlebrivi%20statistika/samartlebrivi%20statistika.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $healthCareAndSocialSecurity[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/health%20care%20and%20social%20protection/health%20care%20and%20social%20protection.xlsx' : '/regions/regions/7/jandacva%20da%20socialuri%20uzrunvelkofa/jandacva%20da%20socialuri%20uzrunvelkofa.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $education[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/education/education.xlsx' : '/regions/regions/7/ganatleba/ganatleba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $culture[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/culture/culture.xlsx' : '/regions/regions/7/kultura/kultura.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $environmentalProtection[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/environmental%20protection/environmental%20protection.xlsx' : '/regions/regions/7/garemos%20dacva/garemos%20dacva.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $infrastructure[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/7/infrastructure/infrastructure.xlsx' : '/regions/regions/7/infrastruqtura/infrastruqtura.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>




            </tbody>
        </table>
        <div class="map-box">
            <svg id="svg4380" xmlns="http://www.w3.org/2000/svg" version="1.1">

                <g id="layer7">
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'racha/lentexi.php?lang=en' : 'racha/lentexi.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group3-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 957.32812,294.7793 c -0.28488,0.44078 -0.42727,1.01256 -0.7871,1.41992 -0.78581,4.35484 -6.76118,7.24595 -10.47657,8.13672 -2.20617,2.20798 -10.39936,3.75331 -5.50586,8.55273 -2.30436,4.56135 4.39545,9.41422 -2.18359,11.88086 -1.6018,5.57041 -4.62888,13.048 -10.63086,13.64453 -5.86182,-3.83986 0.64905,-8.71816 -2.52148,-12.27344 -3.0403,-5.30787 -7.57342,2.54491 -11.90235,0.77149 -5.86235,-2.10089 -11.1065,2.15524 -16.83008,2.25391 -4.48198,-0.33551 -10.00571,1.99244 -13.34765,0.29101 -0.52053,-7.5497 -9.85344,-6.03341 -14.14844,-9.92383 -2.74899,-2.74216 -11.4186,1.8869 -12.54297,-4.52734 -4.47964,-2.21588 -10.36399,-2.52074 -12.12109,3.06055 -3.71197,0.98132 -6.54043,10.90012 -10.1211,5.30859 -2.12808,-3.61126 -7.85101,-0.89714 -10.42187,-0.5957 -3.81224,4.58833 -8.72815,0.63056 -12.73633,-1.42969 -2.89043,-4.16381 -9.31379,-2.87538 -11.43164,-6.71289 -4.11367,-1.97748 -8.48251,0.35776 -12.43555,1.1582 -3.50461,0.92575 -10.56406,-0.24529 -13.64062,-3.59961 -1.38452,-4.44263 -10.28439,1.22018 -13.26367,-4.44922 -2.61598,-4.68177 -8.88257,-5.73051 -10.80469,0.0879 -1.61364,3.73395 -0.0201,9.36215 2.06641,12.81055 3.62994,6.92101 -2.21225,5.8157 -6.35547,3.39844 -5.76635,2.71312 -12.79077,1.26086 -18.86133,0.11133 -4.43538,-3.18739 -4.5885,6.40612 -7.89258,8.23437 -5.21227,2.6131 -3.53646,8.53767 -6.25195,12.88867 -1.65898,4.87943 6.89423,0.84224 5.41211,5.95313 4.90446,2.40147 0.88773,8.38618 3.89453,11.35351 3.65565,3.3732 5.25763,5.31666 2.24219,9.91993 3.98407,3.36957 11.19728,-1.17804 10.61132,-6.28125 2.94622,3.41522 6.20485,4.74565 10.15821,6.93945 3.15485,-1.13172 6.51506,1.03412 9.70117,2.85351 2.56787,2.2674 8.20069,2.98463 8.875,5.68946 3.20776,1.44084 3.81457,6.92518 8.63672,6.28515 1.341,3.87112 5.63093,5.71006 6.05468,10.13477 -1.32564,3.33 2.77469,4.13994 4.44336,6.68359 3.58227,4.51293 3.7241,-3.44292 5.37891,-5.34765 3.69981,-1.01844 8.02762,0.55473 12.40625,0.0117 4.1141,3.97605 8.97861,0.71324 13.56055,-0.27539 3.96743,1.30964 3.11623,5.33543 6.07812,7.35546 3.67112,1.22815 5.01464,4.93373 6.5918,8.22266 1.99956,2.56137 5.53542,1.84718 7.625,4.35938 5.91771,0.24298 -0.60051,-6.4255 4.30078,-7.03907 2.28115,-2.97128 5.57733,-7.37832 9.93164,-6.9082 2.69555,-2.74084 6.3097,-2.27023 9.27149,-0.29297 2.65068,-1.54996 0.14155,-5.92561 2.18164,-7.75781 2.91219,-1.70964 7.08331,-0.0351 8.86132,-4.18555 3.63613,-3.51592 7.13394,-8.1389 8.07422,-13.35742 4.21223,-3.82602 9.94668,-2.84625 15.05469,-3.95898 4.80753,0.21194 8.3129,6.44798 13.97461,5.14453 5.8168,-0.11382 8.84793,4.87746 13.89258,6.5039 5.86278,-2.55272 11.15265,2.10981 15.99804,4.49219 4.85362,0.70378 4.13043,6.37823 8.25391,7.27344 2.48627,4.37351 6.09657,1.73763 8.84375,6.08789 4.54428,2.16211 8.146,-4.75262 7.52734,-7.23047 -5.31718,-4.5014 -0.6982,-7.69694 1.49805,-11.7832 4.46546,-3.87752 1.00876,-10.29788 6.42578,-12.88282 5.02257,-1.6068 10.19478,4.19284 14.19922,-0.44531 3.94536,-5.61283 5.85766,0.67669 8.14063,-0.34375 1.26153,-7.26479 12.17,-6.80492 11.9277,-14.7832 3.7345,-2.69982 2.5905,-8.60094 7.8965,-9.82227 3.4121,-3.14941 -1.6407,-7.10576 -3.0293,-10.34765 1.0609,-3.79976 4.8025,-6.75446 5.4063,-10.27539 2.2703,-2.54953 -2.9,-9.41167 -6.0313,-7.9336 -4.8442,6.35984 -4.8929,-4.83307 -9.91014,-3.20898 -3.55207,-1.92265 -9.54241,-0.68676 -12.125,-1.94531 -1.97353,-5.07036 -7.72361,-2.41842 -11.51953,-3.83985 -4.11058,-1.99507 -6.17995,-3.67762 -6.44922,-8.3418 -0.64661,-4.55857 -4.75434,-7.06445 -9.11719,-7.17382 z" id="path1422" />
                        <text id="svgRegions" x="829" y="358">
                            <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Lentekhi' : 'ლენტეხი'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'racha/oni.php?lang=en' : 'racha/oni.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group3-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1030.1699,325.50977 c -0.6537,0.39671 -1.2716,0.89234 -2.0351,1.08203 -4.3092,3.0471 -8.6566,1.7851 -12.8594,2.52539 -4.0325,-0.41024 -5.1459,5.80197 -6.9766,8.6875 1.9641,2.49299 5.7623,7.10832 3.1192,9.91992 -5.5853,3.0356 -6.4612,6.93905 0.074,10.05859 2.6237,4.44413 4.6245,7.98176 2.3965,12.92188 -2.3641,4.39367 -5.4471,7.28015 -5.0528,12.68554 -1.6046,4.54151 -0.5386,10.65509 0.8692,14.9375 6.4224,3.15731 4.3666,11.00674 6.5,16.48243 1.4651,5.12091 4.1675,10.9878 3.6269,15.60547 -4.3012,1.65033 -10.4576,-2.61452 -12.3984,4.07812 -3.1761,3.61789 -9.05958,4.7384 -11.63087,7.86328 -2.62739,7.20421 -9.48652,12.43367 -11.31445,20.19531 -2.60508,4.55186 -2.87034,7.58614 0.83789,11.19336 -4.0294,2.0466 -2.5235,8.05643 1.18164,8.42579 4.82407,1.41566 12.35911,0.49066 14.04099,6.23632 1.1362,4.63431 -5.38303,7.75221 -1.78903,13.12305 0.49738,5.48945 4.26863,9.04681 9.90823,9.29492 3.5177,0.84853 7.0998,-3.20969 11.3867,-2.41601 4.6146,2.09894 7.2523,1.22701 10.8808,1.81054 4.107,3.02632 7.9916,1.08403 13.2598,1.23047 0.8938,5.74523 7.9001,0.75777 11.3418,3.55274 5.2257,3.17853 6.7148,-3.96161 9.6152,-6.58399 4.1965,-2.82568 8.5063,3.32398 11.8985,5.47852 4.9149,1.13044 8.7655,2.96861 13.7812,4.89062 -0.6119,-4.10119 -2.0479,-8.18776 -0.9843,-12.28906 2.2642,-4.67079 4.8182,-8.78712 2.7187,-14.30078 1.2519,-4.64786 1.4927,-10.14791 4.5195,-14.22852 1.835,-3.66087 -9.7771,-1.42744 -6.2773,-8.45117 2.7252,-6.20816 3.4977,-4.1236 -2.4688,-7.47461 -5.1024,-0.63754 0.3088,-5.31068 1.959,-7.2168 4.3574,-2.04072 5.6943,-8.4755 10.7617,-8.49609 3.8301,-2.70206 3.0366,-7.718 6.4434,-10.94336 3.7332,-2.31202 7.9121,-3.74557 11.4902,-1.3457 3.2792,-1.72756 6.5149,-1.75582 7.3614,-6.04688 3.4341,-3.85831 3.6901,-6.33015 1.6465,-10.61523 3.5935,0.0464 6.0802,-0.70401 10.2011,-0.64844 4.3602,-3.48776 9.0748,-6.85494 12.4785,-10.75976 1.6059,-4.12221 5.1289,-9.31775 3.3731,-14.24219 -2.9846,-3.09342 -5.3579,-6.17855 -9.6406,-6.85938 -3.0737,-2.826 -7.8771,-2.22358 -12.2325,-4.20703 -3.4492,-2.74536 -9.669,-4.48957 -10.0019,-8.79492 1.8241,-7.37967 -5.6687,-2.42861 -9.0723,-2.09375 -6.4735,3.81341 -4.7993,-9.26985 -11.2363,-6.39062 -6.4776,0.8882 -4.3411,-5.2405 -3.8418,-9.42969 -4.6069,-2.61385 -6.5844,-6.88096 -10.3613,-10.28125 -2.7166,-4.73927 -7.4256,-2.96082 -12.4121,-3.63867 -7.2568,0.96041 -13.6907,-2.98769 -17.6758,-8.76172 -3.717,-0.38357 -7.5357,-2.75755 -12.0664,-2.77344 -5.6644,1.32639 -10.4553,-0.60636 -15.3438,-2.99023 z" id="path1420" />
                        <text id="svgRegions" x="1049" y="415">
                            <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Oni' : 'ონი'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'racha/ambrolauri.php?lang=en' : 'racha/ambrolauri.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group3-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1006.0098,354.875 c -3.9929,3.62477 -3.1459,10.14328 -9.65238,11.85742 -3.99612,0.19136 -5.80627,11.7133 -8.92187,6.17969 -1.98484,-4.41415 -6.36101,4.62318 -10.47266,2.96484 -3.88786,-1.87433 -9.41268,-3.05863 -11.70898,1.74805 1.573,4.41319 -3.27342,9.48645 -4.81836,12.49219 -6.93051,2.75752 5.51486,8.44459 -0.40039,10.92383 0.0346,5.17083 -7.30302,7.73816 -10.29297,3.23046 -2.80873,-2.66552 -9.08906,-0.027 -13.38086,-0.39453 -5.80347,0.27659 -6.99994,5.55005 -8.88867,9.94532 -0.55221,3.82396 -3.62883,1.36892 -6.02539,2.69531 -0.47117,0.2633 -0.86217,0.3905 -1.17579,0.42773 -0.0937,0.13139 -0.19662,0.258 -0.32031,0.36133 -0.0646,0.0541 -0.15527,0.0668 -0.23633,0.0898 -0.46635,0.1324 -0.50579,0.11377 -1.01172,0.16993 -0.12298,0.0136 -0.22692,0.006 -0.32812,-0.006 -0.36176,0.36154 -0.94208,0.60746 -1.71875,0.39648 -3.01971,2.93928 -8.07288,-1.42126 -12.43359,-1.11914 -5.7382,-0.9281 0.39431,4.08311 -2.82422,6.11328 -2.33822,3.23283 -6.63881,4.73591 -8.94141,8.35742 -0.33706,4.64551 -7.30317,1.23475 -7.63086,6.17188 -6.09721,1.21994 1.3262,5.65345 -0.68359,9.62109 -1.49642,2.96936 -2.53746,7.05299 -4.78906,8.375 -1.46698,3.60275 1.57697,6.64452 2.07421,10.54102 0.83104,2.92467 -2.44769,3.06046 -3.30859,4.74023 -1.95198,1.89705 -3.92458,1.24622 -6.08008,2.67383 -2.77853,-1.03199 -5.78369,1.95243 -8.23828,-0.87891 -5.18097,-0.27637 -3.89463,3.77895 -5.5664,6.91407 -3.5716,-0.0153 -3.77789,5.93608 -2.38868,7.62695 5.13212,0.12448 8.54339,4.57623 13.81641,5.73633 3.60392,2.26099 9.00689,1.63517 12.91406,4.41211 5.45788,4.89382 12.43762,9.46616 14.87695,16.65234 2.87037,3.36435 7.3927,9.13951 1.86133,12.63281 -6.97263,-1.84307 -5.95402,2.07718 -4.82422,7.70508 1.85748,3.54153 6.54053,0.0171 9.86915,-0.32226 7.84793,-2.03412 13.0542,5.42885 14.2207,12.05664 2.43624,2.13854 8.20599,-0.12385 10.14453,-2.75391 1.49833,0.43808 7.87225,3.08878 8.60742,-2.63672 2.61481,-3.56103 6.93133,4.84489 6.44141,-1.48242 3.14664,-5.43046 10.62193,-6.11259 16.35937,-7.61914 3.62131,-1.90493 10.45516,3.52869 10.57813,-2.83008 4.13799,-2.76691 5.34782,-9.03643 10.33008,-10.47461 3.94162,-0.30116 9.10263,2.84399 11.05078,-0.71289 1.57588,-4.00957 12.7266,-5.67252 7.76953,-9.4375 -1.43197,-4.78503 -5.63392,-12.08173 -0.73828,-16.11914 2.97625,-5.20465 -4.47445,-7.93766 -8.66407,-7.86523 -3.77436,-1.14709 -9.46496,0.23581 -7.64257,-5.6211 -3.73352,-2.602 4.22048,-6.01729 -2.53711,-9.41406 3.59026,-5.13702 3.96661,-11.84377 8.17382,-16.66016 3.20467,-3.95826 5.62973,-9.32158 8.44336,-12.31836 4.61452,-3.20306 10.55492,-4.77023 12.92772,-10.61328 3.1793,-0.41866 13.0045,2.49319 8.0547,-3.43359 -0.1983,-6.63355 -4.2093,-12.26906 -4.1836,-18.89258 0.9316,-6.4296 -9.0469,-7.92628 -5.7773,-14.59375 -2.918,-4.80956 0.5443,-8.95796 0.4355,-13.70117 1.19,-4.49319 5.1423,-7.96006 5.836,-13.04492 -1.737,-3.91069 -3.7548,-8.86923 -8.1797,-10.86719 z" id="path1418" />
                        <text id="svgRegions" x="891" y="465">
                            <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Ambrolauri' : 'ამბროლაური'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'racha/cageri.php?lang=en' : 'racha/cageri.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group3-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 890.58008,376.66602 c -0.81073,-0.008 -1.66096,0.13925 -2.57031,0.49218 -3.03059,1.15018 -10.09974,-0.28026 -10.72266,4.35352 -2.22302,4.74673 -4.49134,9.74382 -8.91797,12.62305 -1.10879,4.29883 -5.73887,2.15471 -8.19336,3.82617 -0.96543,1.99145 0.87636,8.4718 -3.35742,7.89844 -3.21203,-2.71885 -6.37495,-0.84796 -9.55274,0.25976 -4.73382,0.68245 -6.9416,6.01331 -10.29101,8.17969 2.31657,3.30738 -0.87435,7.3631 -4.82227,5.49805 -2.07806,-3.24915 -7.18004,-1.4709 -8.08203,-6.54883 -0.32021,-4.7302 -6.88057,-5.24555 -7.66406,-9.11133 -0.6545,-4.50524 -4.73777,-3.60368 -7.9707,-2.51953 -4.66279,3.4325 -8.66172,-2.66947 -13.58008,-1.28516 -3.89213,0.19275 -7.95385,-1.91764 -8.14649,4.31836 -0.92052,5.16522 -5.24216,1.75822 -6.98828,-0.95898 -2.70557,-3.09596 -6.19929,1.34437 -10.19531,0.5 0.008,3.77543 -0.18296,4.3241 -0.54687,7.46679 -3.36136,2.18324 -2.41459,4.83669 -1.43946,8.11133 3.08072,2.87144 8.2584,5.05321 7.87305,10.31055 -1.1457,3.52338 1.79957,3.04594 2.31055,5.98437 1.18175,3.71709 0.94837,6.96048 3.67773,9.75 2.76713,2.42057 5.46638,4.29196 3.76367,8.19336 2.97928,3.66515 3.03743,9.00947 7.17969,11.51953 5.43142,3.38707 -2.57209,6.3574 -2.57422,10.71875 -1.35305,6.40155 1.8582,8.13562 2.57031,12.88086 -0.6161,3.58771 4.70742,7.06884 1.54883,11.40235 4.39421,-0.60661 10.07538,-0.76957 15.00195,-1.73828 4.67111,-1.64532 6.09027,-6.90586 9.34571,-10.9375 3.28317,-3.50933 10.25278,-0.62915 15.02148,-1.00977 2.25918,7.94671 13.44276,10.00781 18.59375,4.25586 2.7827,-2.51742 1.02619,-9.07521 3.95117,-12.13086 4.58227,0.57877 0.52084,-7.52253 4.90235,-6.56055 2.72904,-2.29361 4.84504,0.86534 6.81836,0.21875 2.30366,-0.38296 4.69667,-0.70392 6.90039,-1.17773 1.12511,-0.51754 3.29383,-1.27877 4.04687,-2.88867 4.23378,-1.07562 0.24318,-5.76597 -0.004,-8.36328 -1.49215,-4.10557 -0.0936,-6.45781 3.11328,-8.79688 -0.30712,-3.42621 3.41211,-5.85619 0.75976,-9.24219 -4.78769,-4.64806 2.64405,-4.92106 4.53321,-8.9414 5.70854,0.88586 5.97787,-6.62849 10.93164,-8.4336 4.27495,-1.14271 3.14055,-5.43101 2.84375,-8.46875 4.383,-1.41631 9.26351,0.66944 13.01367,1.69336 1.7378,-0.92307 3.18182,-1.20535 4.00781,-1.43945 0.47233,-0.32582 0.78956,-0.36725 0.96485,-0.25586 0.26956,-0.0298 0.42634,-0.0438 0.5957,-0.0859 0.0106,-0.0286 0.0206,-0.0574 0.0312,-0.0859 0.1732,-0.26177 0.26248,-0.36438 0.48828,-0.58007 0.11185,-0.10684 0.19549,-0.15551 0.25977,-0.16016 0.008,-6e-4 0.0119,0.009 0.0195,0.01 0.22367,-0.12719 0.4952,-0.23005 0.83008,-0.2793 4.18257,-0.40672 5.27372,0.15602 6.9375,-4.3457 0.46186,-6.76528 7.91069,-8.45953 13.71874,-8.45313 8.10799,-0.80191 -4.21569,-2.24377 -1.77539,-6.2832 -3.0612,-2.48937 -6.44182,-4.7254 -10.61523,-6.1543 -4.08466,-4.60127 -10.22435,0.486 -14.45898,-3.64453 -3.49971,-4.28927 -9.35519,-4.18625 -14.41797,-4.96289 -3.40467,-1.64977 -6.15481,-4.58718 -9.66797,-4.62109 z" id="path7842" />
                        <text id="svgRegions" x="815" y="445">
                            <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Tsageri' : 'ცაგერი'; ?>
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
            $query = mysqli_query($link, "select * from `regions` where ID = 7");
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
        <?php include 'footer.php' ?>
        <script src="script.js"></script>
        <script type="text/javascript" src="lang.js"></script>
        <script>
            localStorage.setItem('region', 'Racha');
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>