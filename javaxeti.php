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
    <meta property="og:title" content="<?php echo $lang['javakhetititlename'] ?>" />
    <meta property="og:description" content="<?php echo $lang['javakhetititlename'] ?>" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <title class="tr" Key="PAGE_TITLE"><?php echo $lang['javakhetititlename'] ?></title>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <!-- Bootstrap 5.3.0 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="samegrelo.css">
    <link rel="stylesheet" type="text/css" href="javaxeti/javaxeti.css">
    <link rel="stylesheet" type="text/css" href="custom.css">
    <link rel="stylesheet" href="mediastyles.css">
</head>

<body>
    </div>
    <div id="background-main" class="background-image"></div>
    <div class="main-container">
        <?php include 'asset/header.php' ?>
        <table class="machveneblebi-left col">
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/main%20information/area.xlsx' : '/regions/regions/5/dziritadi%20informacia/regionis%20fartobi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia1">
                    <td>
                        <?php echo $basicInformation[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/main%20information/number%20of%20settlements.xlsx' : '/regions/regions/5/dziritadi%20informacia/municipalitetebis,%20qalaqebis%20da%20soflebis%20raodenoba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population/Number%20of%20population/Samtskhe-Javakheti.xlsx' : '/regions/regions/მოსახლეობა/მოსახლეობის%20რიცხოვნობა/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia22">
                    <td>
                        <?php echo $population[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population/Share%20of%20urban%20population/Samtskhe-Javakheti.xlsx' : '/regions/regions/მოსახლეობა/საქალაქო%20დასახლებაში%20მცხოვრები/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia22">
                    <td>
                        <?php echo $population[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population/Density%20of%20population/Samtskhe-Javakheti.xlsx' : '/regions/regions/მოსახლეობა/მოსახლეობის%20სიმჭიდროვე/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20live%20births/Samtskhe-Javakheti.xlsx' : '/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20birth%20rate/Samtskhe-Javakheti.xlsx' : '/regions/regions/დემოგრაფია/შობადობის%20ზოგადი%20კოეფიციენტი/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Samtskhe-Javakheti.xlsx' : '/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Quantitative%20ratio%20of%20sexes/Samtskhe-Javakheti.xlsx' : '/regions/regions/სქესთა%20რაოდენობრივი%20თანაფარდობა/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['6']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Mean%20age%20of%20childbearing/Samtskhe-Javakheti.xlsx' : '/regions/regions/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['7']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20stillbirths/Samtskhe-Javakheti.xlsx' : '/regions/regions/დემოგრაფია/მკვდრადშობილთა%20რიცხოვნობა/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['8']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20stillbirths%20by%20sex/Samtskhe-Javakheti.xlsx' : '/regions/regions/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths/Samtskhe-Javakheti.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20death%20rate/Samtskhe-Javakheti.xlsx' : '/regions/regions/დემოგრაფია/მოკვდაობის%20ზოგადი%20კოეფიციენტი/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Samtskhe-Javakheti.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Infant%20mortality%20rate/Samtskhe-Javakheti.xlsx' : '/regions/regions/დემოგრაფია/ჩვილ%20ბავშვთა%20მოკვდაობის%20კოეფიციენტი/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['6']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Under-5%20mortality%20rate/Samtskhe-Javakheti.xlsx' : '/regions/regions/დემოგრაფია/5%20წლამდე%20ასაკის%20ბავშვთა%20მოკვდაობის%20კოეფიციენტი/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['7']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Samtskhe-Javakheti.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['8']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20by%20urban-rural%20settlements/Samtskhe-Javakheti.xlsx' : '/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20საქალაქო%20სასოფლო%20დასახლებების%20მიხედთვით/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['9']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20by%20age%20groups/Samtskhe-Javakheti.xlsx' : '/regions/regions/დემოგრაფია/მიზეზები%20ძირითადი%20კლასების%20და%20ასაკის%20მიხედვით/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['10']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Deaths%20from%20suicide/Samtskhe-Javakheti.xlsx' : '/regions/regions/დემოგრაფია/თვითმკვლელობით%20გარდაცვლილთა%20რიცხოვნობა/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['11']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Suicide%20rate/Samtskhe-Javakheti.xlsx' : '/regions/regions/დემოგრაფია/თვითმკვლელობის%20შედეგად%20სიკვილიანობის%20კოეფიციენტი/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Natural%20increase/Samtskhe-Javakheti.xlsx' : '/regions/regions/დემოგრაფია/ბუნებრივი%20მატება/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia5">
                    <td>
                        <?php echo $naturalIncrease['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Natural%20increase%20rate/Samtskhe-Javakheti.xlsx' : '/regions/regions/დემოგრაფია/ბუნებრივი%20მატების%20კოეფიციენტი/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20registered%20marriages/Samtskhe-Javakheti.xlsx' : '/regions/regions/დემოგრაფია/რეგისტრირებულ%20ქორწინებათა%20რაოდენობა/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia6">
                    <td>
                        <?php echo $marriage['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20marriage%20rate/Samtskhe-Javakheti.xlsx' : '/regions/regions/დემოგრაფია/ქორწინების%20ზოგადი%20კოეფიციენტი/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia6">
                    <td>
                        <?php echo $marriage['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20married%20people/Samtskhe-Javakheti.xlsx' : '/regions/regions/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia6">
                    <td>
                        <?php echo $marriage['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Mean%20age%20of%20spouses/Samtskhe-Javakheti.xlsx' : '/regions/regions/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20registered%20divorces/Samtskhe-Javakheti.xlsx' : '/regions/regions/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia7">
                    <td>
                        <?php echo $divorce['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Crude%20divorce%20rate/Samtskhe-Javakheti.xlsx' : '/regions/regions/დემოგრაფია/განქორწინების%20ზოგადი%20კოეფიციენტი/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia7">
                    <td>
                        <?php echo $divorce['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Samtskhe-Javakheti.xlsx' : '/regions/regions/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Median%20age%20of%20population/Samtskhe-Javakheti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Samtskhe-Javakheti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Age%20dependency%20ratios/Samtskhe-Javakheti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Number%20of%20population/Samtskhe-Javakheti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['6']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Share%20of%20working%20age%20population/Samtskhe-Javakheti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['7']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Population%20census/Number%20of%20private%20households/Samtskhe-Javakheti.xlsx' : '/regions/regions/მოსახლეობის%20აღწერა/კერძო%20შინამეურნეობები/სამცხე-ჯავახეთი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $gdbAndValueAdded[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/gdp%20and%20va/gdp%20and%20va.xlsx' : '/regions/regions/5/mshp%20da%20damatebuli%20girebuleba/mshp%20da%20damatebuli%20girebuleba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $foreignDirectInvestment[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/ext.trade%20and%20foreign%20direct%20invset/ext.trade%20and%20foreign%20direct%20invset.xlsx' : '/regions/regions/5/pirdapiri%20uckhouri%20investiciebi/pirdapiri%20uckhouri%20investiciebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/employment%20and%20unemployment/employment%20and%20unemployment.xlsx' : '/regions/regions/5/dasaqmeba_umushevroba/dasaqmeba_umushevroba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia17">
                    <td>
                        <?php echo $employmentAndSalaries[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/employment%20and%20unemployment/wages.xlsx' : '/regions/regions/5/dasaqmeba_umushevroba/khelfasi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <style>
                    /* ვმალავთ, რადგან ფაილები არ გვაქვს. */
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/prices/consumer%20price%20index%2012%20month%20avarage%20over%20the%20previous%2012%20month%20avarage%20-%20gori.xlsx' : '/regions/regions/5/fasebi/samomxmareblo%20fasebis%20indeqsebi%2012%20tvis%20sashualo%20wina%2012%20Tvis%20saSualosTan%20-%20gori.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia16">
                    <td>
                        <?php echo $pricesAndInflation[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/prices/consumer%20price%20index%20to%20the%20previous%20month%20-%20gori.xlsx' : '/regions/regions/5/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20tvestan%20-%20gori.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia16">
                    <td>
                        <?php echo $pricesAndInflation[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/prices/consumer%20price%20index%20to%20the%20same%20month%20of%20previous%20year%20-%20gori.xlsx' : '/regions/regions/5/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20wlis%20shesabamis%20TvesTan%20-%20gori.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/standard%20of%20living/incomes.xlsx' : '/regions/regions/5/ckhovrebis%20done/shemosavlebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia18">
                    <td>
                        <?php echo $standartOfLiving[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/standard%20of%20living/expenditures.xlsx' : '/regions/regions/5/ckhovrebis%20done/kharjebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/business%20sector/by%20kind%20of%20activity_nace%20rev.2.xlsx' : '/regions/regions/5/biznes%20seqtori/saqmianobis%20mikhedvit_nace%20rev.2.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia14">
                    <td>
                        <?php echo $businessSector[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/business%20sector/by%20ownership.xlsx' : '/regions/regions/5/biznes%20seqtori/sakutrebis%20formis%20mikhedvit.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia14">
                    <td><?php echo $businessSector[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/business%20sector/by%20size.xlsx' : '/regions/regions/5/biznes%20seqtori/zomis%20mikhedvit.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/agriculture/1.%20Annual%20crops.xlsx' : '/regions/regions/5/soflis%20meurneoba/1.%20erttsliani%20kulturebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia15">
                    <td>
                        <?php echo $agriculture[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/agriculture/2.%20Production%20of%20permanent%20crops.xlsx' : '/regions/regions/5/soflis%20meurneoba/2.%20mravaltslovani%20kulturebis%20tsarmoeba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia15">
                    <td>
                        <?php echo $agriculture[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/agriculture/3.%20Number%20of%20livestock.xlsx' : '/regions/regions/5/soflis%20meurneoba/3.%20pirutkvis%20suladoba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia15">
                    <td>
                        <?php echo $agriculture[5]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/agriculture/4.%20Production%20of%20animal%20housbandry.xlsx' : '/regions/regions/5/soflis%20meurneoba/4.%20metskhoveleobis%20produktsiis%20tsarmoeba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $industry[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/industry/industry.xlsx' : '/regions/regions/5/mretsveloba/mretsveloba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/construction/mshenebloba_nebartvebi.xlsx' : '/regions/regions/5/mshenebloba/mshenebloba_nebartvebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia13">
                    <td>
                        <?php echo $construction[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/construction/eqspluataciashi%20migebuli%20obieqtebi.xlsx' : '/regions/regions/5/mshenebloba/eqspluataciashi%20migebuli%20obieqtebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia13">
                    <td>
                        <?php echo $construction[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/construction/mshenebloba_dziritadi%20machveneblebi.xlsx' : '/regions/regions/5/mshenebloba/mshenebloba_dziritadi%20machveneblebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/By%20organizational%20legal%20forms/Samtskhe-Javakheti%20Region.xlsx' : '/regions/regions/მომსახურება/ორგანიზაციულ%20სამართლებრივი/სამცხე-ჯავახეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/By%20ownership%20type/Samtskhe-Javakheti%20Region.xlsx' : '/regions/regions/მომსახურება/საკუთრების%20ფორმების%20მიხედვით/სამცხე-ჯავახეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Number%20of%20markets%20and%20fairs%20by%20type/Samtskhe-Javakheti%20Region.xlsx' : '/regions/regions/მომსახურება/ტიპების%20მიხედვით/სამცხე-ჯავახეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[5]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Days%20of%20trade/Samtskhe-Javakheti%20Region.xlsx' : '/regions/regions/მომსახურება/ვაჭრობის%20დღეთა%20რაოდენობის%20მიხედვით/სამცხე-ჯავახეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[6]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Employed%20persons/Samtskhe-Javakheti%20Region.xlsx' : '/regions/regions/მომსახურება/დირექციაში%20დასაქმებულები/სამცხე-ჯავახეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[7]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Market-place%20and%20sellers/Samtskhe-Javakheti%20Region.xlsx' : '/regions/regions/მომსახურება/სავაჭრო%20ადგილები%20და%20მოვაჭრეთა%20რაოდენობა/სამცხე-ჯავახეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $service[8]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/service/Financial%20indices%20of%20markets/Samtskhe-Javakheti%20Region.xlsx' : '/regions/regions/მომსახურება/საფინანსო%20მაჩვენებლები/სამცხე-ჯავახეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $trading[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/trade/trade.xlsx' : '/regions/regions/5/vachroba/vachroba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/hotels%20and%20restaurants/hotels%20and%20restaurants.xlsx' : '/regions/regions/5/sastumroebi%20da%20restornebi/sastumroebi%20da%20restornebi.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia9">
                    <td>
                        <?php echo $hotelsAndRestaurants[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Hotels/Samtskhe-Javakheti%20Region.xlsx' : '/regions/regions/სასტუმროები/რაოდენობა%20და%20ფართობი/სამცხე-ჯავახეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia9">
                    <td>
                        <?php echo $hotelsAndRestaurants[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Rooms/Samtskhe-Javakheti%20Region.xlsx' : '/regions/regions/სასტუმროები/ნომრების%20რაოდენობა/სამცხე-ჯავახეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia9">
                    <td>
                        <?php echo $hotelsAndRestaurants[5]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Guests/Samtskhe-Javakheti%20Region.xlsx' : '/regions/regions/სასტუმროები/სტუმართა%20რაოდენობა/სამცხე-ჯავახეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia9">
                    <td>
                        <?php echo $hotelsAndRestaurants[6]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/Hotels/Number%20of%20Employees/Samtskhe-Javakheti%20Region.xlsx' : '/regions/regions/სასტუმროები/დასაქმებულთა%20რაოდენობა/სამცხე-ჯავახეთის%20რეგიონი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/transport%20and%20communication/transport%20and%20storage.xlsx' : '/regions/regions/5/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $transportAndStorage[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/transport%20and%20communication/number%20of%20motor%20vehicles.xlsx' : '/regions/regions/5/transporti%20da%20kavshirgabmuloba/registrirebuli%20avtomobilebis%20raodenoba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $transportAndStorage[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/transport%20and%20communication/the%20length%20of%20the%20roads.xlsx' : '/regions/regions/5/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/tourism/place%20of%20residence.xls' : '/regions/regions/5/turizmi/ganawileba%20sacxovrebeli%20adgilis%20mixedvit.xls'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia11">
                    <td>
                        <?php echo $tourism[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/tourism/visited%20regions.xls' : '/regions/regions/5/turizmi/ganawileba%20monaxulebuli%20regionebit.xls'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $legalStatistics[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/justice%20statistics/justice%20statistics.xlsx' : '/regions/regions/5/samartlebrivi%20statistika/samartlebrivi%20statistika.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $healthCareAndSocialSecurity[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/health%20care%20and%20social%20protection/health%20care%20and%20social%20protection.xlsx' : '/regions/regions/5/jandacva%20da%20socialuri%20uzrunvelkofa/jandacva%20da%20socialuri%20uzrunvelkofa.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $education[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/education/education.xlsx' : '/regions/regions/5/ganatleba/ganatleba.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $culture[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/culture/culture.xlsx' : '/regions/regions/5/kultura/kultura.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $environmentalProtection[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/environmental%20protection/environmental%20protection.xlsx' : '/regions/regions/5/garemos%20dacva/garemos%20dacva.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $infrastructure[1]; ?><span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/regionseng/5/infrastructure/infrastructure.xlsx' : '/regions/regions/5/infrastruqtura/infrastruqtura.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>




            </tbody>
        </table>

        <div class="col-6" style="height: 100%;">
            <svg id="svg4" xmlns="http://www.w3.org/2000/svg" viewBox="" version="1.1">
                <g id="layer5">
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'javaxeti/ninowminda.php?lang=en' : 'javaxeti/ninowminda.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group5-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1092,846.35 c 3.1937,1.6622 1.5816,6.9324 6.4562,6.4572 4.4054,1.6832 3.5007,8.2925 5.7773,12.281 0.6242,2.7019 0.1285,9.3885 4.6364,7.7482 7.6219,4.9266 4.0644,15.842 -1.8618,20.768 4.0645,4.9463 11.007,5.1417 10.507,12.685 1.239,3.5952 1.6747,7.2811 4.2512,10.077 0.7762,4.8687 7.8403,11.94 0.8886,15.082 -2.8574,3.0966 -5.4288,8.3082 -4.3559,12.979 -3.8794,2.9414 1.8168,9.8164 -4.6602,10.11 6.8428,2.6578 2.9249,1.7417 7.7617,7.297 1.0977,2.8478 2.5418,5.9279 3.4358,9.2756 2.9053,3.938 0.9466,8.6835 3.3652,12.756 -2.9179,5.1149 -6.7837,4.2582 -11.785,4.6152 -4.7043,0.0572 -8.6998,2.4726 -13.611,3.4394 -8.3668,-0.44353 -15.867,3.6128 -22.756,7.4921 -2.6782,2.5256 -4.5607,0.23425 -7.1542,3.5584 -5.312,1.6094 -7.8526,11.826 -12.302,8.3863 -7.5222,-3.2731 -14.536,-10.026 -23.003,-9.726 -5.9639,1.4312 -12.059,1.5947 -18.122,2.0975 -2.2275,-5.4005 -10.325,-6.7476 -15.146,-3.8301 -4.6429,5.2268 -11.958,2.0802 -16.06,6.3655 -7.5037,2.3029 -7.7761,-4.469 -9.4815,-10.961 -0.20382,-5.5946 -3.0688,-9.821 -8.0038,-11.754 -0.98669,-6.8798 1.4272,-14.245 1.3476,-21.262 0.61499,-2.6103 0.56105,-5.0354 0.6332,-7.1238 -0.54421,-1.187 -1.4083,-4.6579 -0.81554,-3.8256 -1.0458,-1.1524 -0.1499,-3.1382 -0.99126,-4.3805 0.44708,-3.1433 1.9504,-7.7506 -0.5876,-9.5378 -0.0461,-2.2738 -4.1054,-2.4561 -1.4984,-5.5257 0.93814,-6.3879 10.484,-4.9946 12.156,-9.6273 1.1702,-1.1358 3.0908,-3.1899 5.2933,-3.1466 0.78547,2.8518 -0.10945,2.6915 1.799,5.3952 0.14913,3.0921 3.8697,1.2532 5.0927,1.6566 0.54051,-0.64683 3.1605,-1.1638 3.852,-2.8578 2.155,0.99985 2.6992,4.0716 5.4867,5.2939 1.5089,-1.4399 1.5776,-3.6067 3.8192,-4.092 0.7138,-0.88436 1.8257,-5.6805 0.5917,-7.6079 -0.2517,-1.4328 -4.5435,-2.4853 -1.1911,-3.6429 2.1558,-0.31486 -0.027,-4.0873 2.1493,-5.1507 1.47,-2.3075 3.1896,-2.9355 4.623,-0.25074 2.4166,3.5699 3.3299,1.4926 5.8653,-0.3556 2.194,-2.2279 4.3272,-6.4022 8.0367,-3.5453 2.3752,-0.83334 7.7234,-4.0301 10.085,-0.60788 3.336,-1.3581 2.2958,-3.4548 5.2932,-3.123 8.0192,-0.7651 -3.1357,-5.6826 2.6463,-9.5634 0.9931,-2.5859 -1.1562,-3.7105 0.7383,-6.5561 -2.2551,-5.5254 -5.5163,-5.6319 1.4487,-9.667 1.3979,-7.2913 0.2838,-16.061 1.7875,-22.833 4.0762,3.4679 6.6155,1.1203 9.9625,-0.90429 5.6642,0.88641 9.2631,-1.7788 14.791,-3.6495 3.8298,0.60473 8.218,1.1062 12.894,1.5323 2.395,-0.8645 4.0525,-0.97658 5.9159,-2.2402 z" id="path1051" />
                        <text id="svgRegions" x="1000" y="954">
                            <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Ninotsminda' : 'ნინოწმინდა'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'javaxeti/axalqalaqi.php?lang=en' : 'javaxeti/axalqalaqi.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group5-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1051.8,787.73 c 8.9744,-1.8748 5.6869,4.3633 3.6621,9.9687 -2.2888,3.9167 0.7723,8.6396 -2.3496,12.1 2.0554,4.2697 -0.1846,9.8977 -1.9961,13.658 3.1403,4.8886 -5.6513,5.5734 -1.9863,11.084 -0.8513,3.7973 -9.3063,5.8894 -6.2461,11.444 3.989,1.5282 4.8937,3.785 4.1741,7.664 -0.4851,6.1551 -0.7025,13.427 -1.07,20.049 -6.0692,4.6149 -8.7132,3.4053 -2.7092,8.2675 1.5477,2.8523 -0.5398,5.7465 0.3397,8.1438 -7.4717,4.6347 3.6811,7.6887 -1.7695,9.0931 -3.897,-0.12009 -2.2778,0.29086 -5.144,2.8417 -3.6682,-4.3114 -8.849,2.747 -13.336,-0.31818 -3.6074,1.4197 -4.9856,5.2102 -7.9725,6.7681 -1.0699,1.0304 -3.4629,-3.2176 -4.3947,-4.0199 -2.1584,-2.2531 -0.8017,1.2111 -3.1137,1.9478 -2.1833,1.5499 -2.1668,3.582 -2.5497,5.8543 -2.4721,0.21856 -3.2537,4.7485 0,4.1838 0.7616,1.18 1.7272,3.3343 0.6036,4.8152 1.1142,3.1989 -2.876,2.3299 -2.7432,5.0999 -0.9211,-1.8033 -0.8763,1.8483 -2.1063,-0.30704 -1.608,-1.3874 -1.8774,-3.4758 -2.6996,-5.0945 -3.8928,-0.61318 -0.78257,3.3737 -4.0574,2.5514 -2.3227,0.81146 -1.5148,1.2386 -4.039,1.801 -2.3994,-1.1799 -2.3569,-4.9307 -3.1611,-7.5013 -2.1898,-0.20076 -6.6022,2.8453 -6.2498,2.6993 -1.0763,2.9918 -5.3707,4.8694 -8.793,5.7913 -3.5945,1.7307 -4.8007,5.905 -5.1489,9.45 2.7555,1.1918 3.1302,3.063 3.4218,5.3557 0.92194,1.9149 -0.65135,5.2782 -1.1833,7.856 2.081,0.23191 0.51024,4.0886 2.1096,5.3988 1.1454,2.8687 -1.3972,3.6385 0.3773,5.9361 -1.2559,7.1161 -1.7809,14.887 -2.3144,22.095 -4.7098,-0.0461 -10.095,-6.1518 -15.527,-8.0553 -4.4673,0.83001 -10.104,-0.28084 -14.674,1.2559 -5.3898,5.331 -13.713,3.0049 -19.69,7.7852 -2.8018,-0.24684 -6.1845,1.4858 -7.8456,0.14844 3.0257,-4.5659 -4.1234,-9.1838 -4.9892,-14.062 -3.7952,-5.1154 -4.4082,-11.051 -6.468,-16.827 -3.5212,0.99642 -7.8804,0.45951 -11.42,3.1934 -2.7031,1.2938 -5.3927,-3.0055 -7.7031,-2.6054 2.7021,-1.096 4.2855,-1.7748 7.1036,-2.9045 0.51013,-2.7321 5.2694,-3.8246 6.5001,-3.7581 2.8459,-0.16985 3.481,-4.3216 6.5391,-4.8535 1.771,0.22741 5.1766,-1.3852 5.2619,-3.4142 0.30632,-1.692 -0.2455,-4.0205 1.3186,-4.8928 1.7043,-2.446 4.1094,-3.6116 4.5354,-6.7315 1.3353,-1.3558 3.9196,-4.6 5.4868,-1.836 -0.21809,5.2396 7.1894,-0.9026 3.7399,-0.94559 0.1898,-1.8841 -0.0183,-4.5178 -0.7759,-5.7232 -1.9107,-3.0935 -2.2252,-5.7786 -0.9576,-9.2533 1.7027,-1.3988 4.498,-1.6729 6.1193,-2.0507 0.49337,2.4129 0.47665,4.6354 3.4375,3.5473 1.9225,-1.9573 3.1946,-2.3794 1.475,-5.2523 -3.0844,-2.3114 -6.9071,-6.5474 -0.3223,-6.7111 0.81122,1.6316 -0.92149,6.0242 1.9316,4.9189 1.5009,3.9001 6.0347,2.7696 5.7036,1.7969 1.9059,1.094 2.8333,0.69648 4.7521,-0.45127 1.022,-1.7943 0.75533,-4.6197 3.5939,-5.2897 1.8476,-2.9451 2.9084,-6.8972 2.4596,-10.66 -2.3104,-1.1367 -3.7578,-3.9906 -6.4728,-2.6037 -0.98233,-2.7437 -0.47092,-4.6986 -2.5638,-5.8951 0.33185,-3.3943 -0.49026,-7.2245 4.1008,-6.1524 2.5825,-0.17024 4.7468,-0.30922 4.2789,-3.3014 0.2931,-3.0315 2.0202,-4.092 1.2285,-7.2153 2.211,2.1259 5.8537,-0.5962 7.3523,2.5652 2.0133,-0.58163 3.0324,-4.6289 1.1616,-6.7022 -0.94911,-0.48893 -2.6029,-1.8233 -0.7344,-2.7506 2.8987,-2.217 -1.5923,-5.3227 -3.9062,-3.7081 -2.0052,-5.0796 -3.4646,-11.494 -6.4498,-16.35 -2.5093,-1.8941 1.2262,-3.5282 1.4983,-5.3925 1.3722,-1.7872 -1.848,-2.2903 -1.0784,-4.5763 2.559,-7.0227 4.5499,-15.851 11.533,-19.791 4.9898,-1.1879 11.878,-1.6295 13.785,-6.4824 1.0033,-2.3995 5.0004,-6.038 7.5514,-2.0977 6.4674,-0.25012 9.5206,6.2625 15.385,6.7135 2.5899,3.1329 3.5039,8.7116 3.5702,13.136 1.0575,0.4527 1.7036,5.3759 3.8576,3.1509 1.4576,-0.84105 2.8124,-1.9088 3.8786,-3.1513 1.1641,-2.2472 2.7988,-1.018 3.0041,-3.6003 1.034,-1.6938 2.4834,-1.699 4.5977,-0.90282 0.3636,-2.7309 3.8679,-1.2237 5.7135,-2.3989 2.3354,-2.3364 -3.3999,-7.8603 2.2317,-7.5412 6.5692,-2.1397 13.628,-4.0369 19.853,-6.4006 0.1477,-1.9282 -0.9202,-7.303 2,-7.4986 0.6756,0.16696 5.2915,-1.8077 7.4809,-2.0976 z" id="path1049" />
                        <text id="svgRegions" x="950" y="884">
                            <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Akhalkalaki' : 'ახალქალაქი'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'javaxeti/aspindza.php?lang=en' : 'javaxeti/aspindza.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group5-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 947.84,777.76 c 4.7838,-0.82848 7.4948,3.1239 8.383,7.3324 3.1063,1.849 4.3956,7.1913 7.1721,7.1836 2.6376,-3.3014 11.125,1.9695 8.7246,6.2969 -1.2418,5.746 -8.334,6.087 -13.525,7.3613 -7.6415,4.1492 -9.6157,13.722 -12.496,21.25 0.66084,2.7301 2.6907,3.7264 -0.2999,4.9826 -1.0638,2.3379 -0.87213,4.1675 0.8967,6.2483 2.4798,4.2102 3.3693,9.3742 5.3991,13.869 -0.33132,3.4509 3.6325,0.4395 4.7951,2.3386 1.5709,1.7244 -3.6845,1.0808 -1.4888,3.4522 -1.6939,2.5457 4.3501,1.9174 2.2508,4.8428 -0.52723,2.691 -3.2757,-0.87236 -5.2941,0.45123 -1.8605,1.159 -3.8665,-3.6829 -3.6543,-0.32058 -0.0433,3.3136 -1.3528,6.5106 -1.996,9.6202 -3.3138,1.002 -8.9336,-0.82276 -7.4711,4.6334 -1.0562,3.4188 0.46783,5.2682 1.4744,7.1898 0.48703,4.6666 4.2955,0.97139 6.1242,4.2775 3.1035,0.86996 0.26517,4.4738 0.418,6.3074 -0.20352,2.3374 -1.9791,5.0843 -4.7395,3.694 0.9556,2.5278 0.32645,2.9309 -0.6368,4.9518 -0.40405,-0.11895 -2.894,1.3484 -4.1522,-0.41034 -1.6385,1.4267 -4.5631,1.5903 -4.5476,-1.7968 -2.7052,2.688 -0.27469,-3.2158 -2.0956,-4.2506 -3.424,-1.718 -9.0885,5.1208 -2.8027,6.3907 -2.4994,1.2594 3.7664,1.8092 1.9927,3.9673 -0.7666,2.5457 -3.9113,2.1935 -3.1545,-0.80288 -1.4352,-2.482 -4.6332,0.28489 -6.7282,0.44146 -2.5961,1.3051 -2.3356,5.3063 -1.9995,6.7662 0.34784,3.3088 2.3884,6.462 2.0612,9.6575 2.0854,2.3527 -2.5566,2.8901 -1.959,-0.12122 -2.2384,-1.7156 -5.5999,-0.61196 -6.3187,2.1216 -1.9106,1.6337 -1.2682,3.4711 -3.8301,5.3305 -1.0508,3.4114 -5.574,1.0656 -7.1464,0.69758 -2.8071,2.6266 -6.0195,-0.13141 -9.166,-0.90807 -1.7974,-5.1968 -9.6192,-1.3131 -10.588,-6.3869 -2.1134,-2.6948 -4.2972,-7.1076 -6.7109,-10.162 -2.8605,-3.3655 -7.7098,-2.609 -10.152,-6.2246 -2.4981,2.0419 -3.8804,-1.941 -5.3907,-3.0176 -2.4406,-2.0084 -4.7321,-1.2029 -6.6795,0.71092 -4.6819,-0.97122 -2.4244,-8.4091 -6.9336,-10.978 -1.9252,-4.0252 -5.5863,-5.7751 -5.5977,-10.355 -4.8426,-1.0036 -5.9872,-4.5691 -3.7656,-7.8652 3.1961,-0.52256 6.6217,-2.2919 9.8125,-3.0763 2.2406,2.1827 4.4034,4.0658 4.8945,7.4593 2.7328,2.546 6.3832,-5.2714 8.5897,-0.27143 1.368,2.6132 6.5596,6.8932 8.6134,2.9177 3.453,-3.0502 -0.99469,-6.6324 0.57426,-9.7256 1.0722,-2.8604 5.4099,-4.9333 3.4472,-8.6065 0.97151,-2.2251 -0.39231,-4.0515 1.3496,-6.032 0.8188,-2.5383 2.2074,-5.5392 4.2207,-6.4145 2.899,-1.1024 6.4922,-2.0572 7.9355,-5.5026 3.3115,-1.3149 4.4503,-3.9501 3.7987,-3.5706 3.1975,-2.3686 -4.0022,-3.8576 -2.305,-6.1494 -2.0926,-0.47503 -1.3848,-5.4359 -3.6836,-4.0353 -2.755,0.63567 -6.5243,-2.9849 -3.5879,-4.9221 -4.0112,1.5712 -4.6718,-3.4446 -8,-0.2013 0.36726,0.71534 -1.9247,-1.9353 0.57017,-1.2229 0.79675,-2.4174 3.237,-3.7677 6.5304,-4.2391 4.414,-0.38635 -1.3232,-4.4939 2.1494,-6.8342 1.0941,-1.3717 2.0486,-6.1394 -1.3262,-4.7856 -0.89908,-2.1211 -6.5576,-0.39189 -3.9022,-3.1255 0.85488,-0.58475 5.7494,-0.49717 6.1758,-1.9964 2.5012,1.5589 4.5787,-4.0168 5.9766,-5.7213 0.18194,-4.068 4.7057,-3.5336 7.8477,-4.1664 2.2826,1.2465 6.1972,-2.2755 7.5178,-4.686 3.7605,-2.3107 6.2001,-7.0822 11.436,-4.9454 4.0238,-2.9223 8.4766,-1.4739 12.682,-3.0039 4.5242,2.8921 9.4723,1.2394 13.297,-1.6504 3.4202,0.12457 8.9114,0.19054 7.0159,-4.2582 z" id="path1047" />
                        <text id="svgRegions" x="885" y="865">
                            <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Aspindza' : 'ასპინძა'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'javaxeti/axalcixe.php?lang=en' : 'javaxeti/axalcixe.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group5-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 846.39,722.17 c 2.775,3.4217 6.2882,1.2595 9.6406,3.2989 4.7282,0.44163 8.8386,-0.36764 13.096,0.54688 4.421,-0.64972 9.2949,-1.1242 13.497,0.0786 5.1683,0.47601 3.5855,6.0934 8.1827,7.3081 1.5455,4.829 3.6884,9.4646 9.3399,10.781 4.0451,1.6441 7.7909,1.9666 7.5761,7.6289 1.4586,1.462 2.8016,4.9899 -0.0157,5.5059 1.6091,3.4458 -5.7529,3.049 -4.2035,5.8033 3.2539,1.7089 8.4542,1.7501 10.797,-0.60365 1.0538,1.3429 3.9397,2.8805 1.5277,4.7092 -1.2502,3.0129 1.9802,0.89523 3.426,4.2949 -0.47327,2.8516 1.8387,2.7214 3.4444,3.7462 3.4249,1.6576 0.56705,5.0414 3.4276,7.0725 -2.9777,1.8196 -8.5924,1.1673 -12.494,3.1778 -5.4377,-2.1314 -7.5976,4.5155 -11.781,5.4006 -0.43525,3.8125 -4.5784,4.9124 -7.7287,4.6644 -3.2565,0.21175 -6.8367,0.49602 -7.0333,4.3912 -1.6621,2.564 -3.0692,6.2926 -6.5,5.5941 -1.1046,3.1183 -7.0716,-0.88258 -6.0956,2.0509 0.0864,1.4394 -2.9748,3.5049 0.76373,4.4009 1.0768,-2.5676 4.3663,0.63597 5.7715,0.61523 0.55738,2.6841 -3.2947,5.0799 -1.6894,8.3876 -0.34777,2.2498 -7.1282,0.91356 -7.0819,4.8482 -2.2435,-0.017 -3.3752,2.1163 -1.3145,3.2524 1.6254,2.1863 2.7819,2.0902 3.0664,0.15045 0.76326,-1.7369 4.5866,1.5653 4.7599,3.4025 1.2211,2.8448 6.0197,0.54257 6.4843,4.5706 -1.2383,1.104 0.56862,1.7738 2.3086,3.6939 3.5124,2.2734 -0.95649,1.4869 -3.2167,1.5846 4.0288,0.98777 2.9861,3.042 0.19318,4.2525 -1.3434,3.905 -6.1493,4.6517 -9.4668,5.4292 0.48482,2.716 -3.179,5.15 -3.0644,8.1305 -1.1929,1.8073 -0.3101,4.2448 -0.57034,6.4304 0.19785,3.7521 -4.9984,5.2661 -4.3868,9.4715 2.1507,2.573 1.4726,6.0271 -0.96683,8.1336 -3.4914,-0.69559 -5.404,-3.4384 -7.4434,-6.1916 0.90032,-2.7985 -3.8269,0.80611 -4.9316,1.6563 -3.8908,2.4661 -1.693,-5.7962 -5.9512,-5.4611 -2.0841,-4.5053 -7.6262,0.8731 -11.166,1.1484 -2.2886,-0.55092 -6.2876,-3.0611 -9.424,-4.7267 -4.332,-1.9182 -1.5639,-5.2909 -6.6835,-6.1973 -3.3694,-1.0067 -7.7774,-2.1334 -5.3692,-6.2364 2.9247,-5.3704 -5.5907,-6.8939 -8.8184,-4.1426 -3.9891,2.3204 -3.305,7.6603 -4.8516,11.002 -3.0426,-1.1713 -7.6738,-2.7221 -9.3007,-6.2364 -1.4752,-2.5161 -7.1991,-2.1964 -5.9922,-5.5312 3.0568,-3.0551 -3.5161,-5.9276 0.60351,-9.0274 1.6037,-3.7583 6.3072,-5.9414 4.9494,-10.801 1.9695,-1.4447 4.5962,-3.4256 4.3751,-6.3241 -0.2059,-2.128 2.0832,-6.298 -0.0254,-7.1308 -2.1509,-1.7836 0.18794,-2.5836 -0.90238,-6.3031 0.21548,-2.5833 1.5689,-3.9361 0.15444,-6.4945 2.3956,-1.2437 4.4097,-0.184 4.795,-1.7989 -0.93132,-4.1797 5.4999,-4.0736 4.0488,-8.4012 2.7436,-1.6332 4.2884,-0.0773 7.2014,-0.15024 2.7049,0.0985 3.1939,-3.6405 0.59945,-4.1569 0.29702,-3.3588 7.9532,0.0994 9.0607,-3.8481 1.2215,-2.7863 0.77302,-7.5636 2.1894,-10.295 -0.37123,-2.2906 -1.0652,-4.3965 -3.0005,-5.202 -0.45181,0.35605 -3.0502,-3.3544 0.0879,-3.6488 3.0678,-1.2968 3.7394,-6.9155 0.53515,-8.5237 -0.35796,-3.2816 1.5952,-3.9442 3.6661,-4.6193 1.8646,-3.5408 -1.4332,-8.0825 -0.83984,-11.834 -2.8293,-0.88871 -1.4587,-5.9119 0.97463,-4.9044 3.1828,2.4755 13.385,1.9604 10.656,-2.9141 -2.7641,-2.3328 1.2615,-6.541 3.3476,-8.7578 0.30892,-5.2293 4.3507,-4.2772 7.7626,-6.1518 z" id="path1045" />
                        <text id="svgRegions" x="829" y="781">
                            <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Akhaltsikhe' : 'ახალციხე'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'javaxeti/adigeni.php?lang=en' : 'javaxeti/adigeni.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group5-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 786.93,719.17 c 4.0424,0.0524 6.0845,2.1816 9.5097,3.0468 2.2376,3.2755 6.4281,3.879 10.08,4.0039 2.8175,1.3062 7.0601,3.3474 10.506,-0.11915 5.6356,-5.1025 4.3653,5.5763 9.9004,6.1954 5.6718,1.5465 8.2229,-1.5814 6.5234,4.5254 4.1222,3.9195 -5.7914,4.5788 -8.4746,2.2286 -3.0207,-2.0098 -5.3895,4.2341 -3.5254,5.1291 2.0206,2.5235 1.7815,7.5238 2.83,11.262 -2.9651,0.90503 -6.0422,3.1134 -4.2032,6.6506 3.2301,1.701 1.8428,7.2974 -2.0136,7.4593 -1.1659,3.3336 0.57297,5.465 3.0863,5.876 0.97022,2.9658 0.85175,5.5331 -0.59943,9.3326 1.8752,6.2094 -4.9161,5.209 -8.7676,6.0118 -2.7956,1.0904 0.0808,3.4644 0.51794,4.1998 -1.6285,2.0083 -4.4078,0.10188 -6.9007,-0.55658 -0.22915,2.6908 -3.9854,1.2158 -2.3106,4.9613 -2.6073,2.108 -3.8544,1.5293 -3.9884,5.1956 -0.58303,1.6263 -5.9067,0.76366 -4.8008,4.301 1.5332,0.93277 -1.4315,5.2516 1.9e-4,7.243 -1.7163,1.6893 0.52859,4.5693 -3.2618,2.5571 -4.6692,-0.87867 -10.162,0.60454 -11.416,4.0644 -1.5201,-5.0787 -7.7142,-1.2561 -9.5839,-6.084 -3.3008,-3.2412 -9.5586,0.52335 -13.295,-3.3476 -7.2666,-0.62779 -14.078,4.3408 -21.863,4.0234 -4.5007,1.7504 -10.336,1.5475 -10.229,-4.5059 -1.8642,-2.6332 -0.82342,-3.1519 -2.4005,-6.0003 -2.829,-3.3497 -2.5603,-10.461 -7.5237,-13.23 -2.3884,-4.9457 -9.965,-0.9503 -11.059,-6.9445 -0.77514,-6.4645 -0.65919,-14.477 -8.1521,-16.97 2.8687,-4.0244 6.7605,-6.8574 6.7852,-11.797 3.2143,-4.6637 5.3477,-11.474 -0.24025,-15.346 -1.0573,-3.6639 -2.6885,-6.4587 -5.2208,-9.7109 5.181,0.73539 9.999,-0.73993 15.367,-0.30078 3.0968,-1.4926 4.6921,5.2844 9.2968,3.291 3.3723,1.817 7.0022,-0.75237 10.209,-2.9472 1.1277,-2.7347 -0.65415,-7.6873 3.4824,-8.998 0.89347,-6.4955 8.468,0.24292 12.709,-0.94533 4.15,0.90865 6.4539,4.6684 9.8458,6.3574 4.2977,-0.49321 11.874,-2.8412 13.844,2.4433 4.3821,-0.0288 6.3606,-6.2392 11.597,-5.5075 5.4831,-0.90296 1.4356,-5.4077 3.7388,-7.0488 z" id="path1043" />
                        <text id="svgRegions" x="733" y="771">
                            <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Adigeni' : 'ადიგენი'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'javaxeti/borjomi.php?lang=en' : 'javaxeti/borjomi.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group5-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 978.8,673.99 c 1.264,5.6852 0.26581,13.664 7.4565,9.2877 4.9546,1.9937 12.108,-0.23371 13.663,6.3583 3.1415,8.0597 15.886,0.63577 18.247,8.5905 -0.5446,5.6665 -0.3881,9.8902 6.5034,12.753 1.362,5.0943 -0.2367,9.4325 3.3267,14.423 2.3429,-1.5904 8.531,0.7567 11.754,-0.92962 3.8305,0.60466 2.1321,2.8207 1.4456,5.0899 0.67,2.9688 2.5333,6.3458 6.2779,6.3535 2.2882,0.26511 5.4217,-1.4538 4.7912,1.8535 2.4409,1.4761 4.55,2.974 7.5271,3.6036 2.3584,1.7436 4.8773,3.5618 7.9266,2.4944 3.8657,1.5306 7.8768,-2.3739 11.243,0.65229 3.0921,1.4813 3.7095,-4.3062 6.4442,-0.95905 6.2595,2.6169 12.061,5.1081 18.469,7.2597 6.0524,-1.333 5.086,1.4721 6.6196,6.8985 -2.7862,2.7925 -6.7816,4.5184 -5.8899,9.1385 2.101,3.7916 -0.1819,3.2552 -1.6132,3.5118 -4.4508,0.0621 -6.9813,2.9284 -10.643,3.7503 -1.4716,1.5601 -2.764,4.5634 -1.3437,6.7504 -0.9329,-0.97279 -4.4904,1.3638 -6.1938,-1.2014 -4.304,-1.4852 -6.2622,-5.777 -11.813,-4.2563 -3.3256,-1.8585 -6.7808,-2.0337 -9.9998,-2.043 -2.7469,3.6774 -5.031,7.4324 -4.2992,12.502 -0.3865,2.9976 -8.8287,-0.40577 -11.955,2.0938 -4.517,0.10962 -5.3874,3.1953 -5.6894,7.2935 1.0506,3.6733 -6.9957,2.3652 -9.4552,4.5726 -3.6055,2.2355 -12.299,1.8086 -13.004,5.4372 2.6947,2.5779 0.6757,5.8334 -1.8425,5.901 -2.4976,0.92492 -4.4856,0.0798 -6.5992,1.7955 -2.1825,1.9798 -4.4364,3.6086 -5.5947,6.3066 -0.866,-1.9374 -2.533,3.7886 -3.606,-0.21676 -0.7434,-4.3211 -1.9063,-9.8382 -3.7069,-14.714 -6.1683,0.20711 -8.8743,-6.4846 -15.135,-6.5841 -6.0461,-4.104 -8.601,1.1953 -10.867,-5.6347 -3.5534,0.0829 -5.8126,-5.0709 -8.8966,-0.58783 -0.68595,-4.7188 -6.8985,-6.0933 -6.8418,-11.397 -1.033,-3.4864 -10.928,-5.5469 -8.5101,-0.15994 -4.9802,1.0721 -9.5587,1.9616 -13.441,4.4941 -3.2986,-0.81494 -6.599,-1.441 -7.59,-4.3537 -0.27494,-2.6357 -0.99128,-5.6802 -4.0499,-6.5958 -1.9921,-0.24227 -1.628,-4.6212 -4.0822,-5.2258 -0.42154,-1.2463 0.87755,-5.0429 -1.8419,-5.3546 -1.3345,-5.1106 -5.6978,3.7052 -9.9238,-0.15226 -4.0701,-0.31071 2.0205,-2.1981 1.8163,-2.3673 1.2632,-1.0875 1.2559,-2.85 2.3321,-4.7933 0.59212,-2.2459 -3.1328,-6.1323 -3.0175,-9.5333 -3.7833,-2.3761 -10.774,-2.6523 -12.873,-7.5352 -1.8714,-3.2714 -2.3848,-6.321 -6.0254,-8.1739 -3.966,-5.8584 -1.0143,-4.1782 5.8456,-6.2008 6.087,-3.1588 13.933,-3.2724 16.916,-9.9398 6.5402,-2.5344 15.535,-2.4409 22.01,-6.2305 2.3632,-5.5288 8.9456,-4.2725 13.885,-6.5313 5.5826,2.208 10.244,-3.2748 12.266,-6.8716 5.6085,0.71619 9.1051,-3.8148 14.308,-4.4047 5.1524,1.843 9.6545,-6.4232 4.9355,-8.8155 3.0528,-3.869 -3.0278,-4.8202 0.33578,-7.4019 z" id="path6846" />
                        <text id="svgRegions" x="935" y="751">
                            <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Borjomi' : 'ბორჯომი'; ?>
                        </text>
                    </a>

                </g>
            </svg>
        </div>

        <table class="machveneblebi-right col">
            <?php
            include('connection.php');
            $tableRight = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'key_indicators_en' : 'key_indicators';
            $query = mysqli_query($link, "select * from " . $tableRight);
            while ($row = mysqli_fetch_array($query)) {
                $keyIndicator[$row['ID']] = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? $row['keyIndicatorsEn'] : $row['keyIndicators'];
                $dataContent[$row['ID']] = $row['dataContent'];
            }
            $query = mysqli_query($link, "select * from `regions` where ID = 5");
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
            localStorage.setItem('region', 'samtskhe_javakheti');
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>