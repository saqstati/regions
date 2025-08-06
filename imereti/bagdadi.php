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
    <meta property="og:title" content="<?php echo $lang['baghdadititlename'] ?>" />
    <meta property="og:description" content="<?php echo $lang['baghdadititlename'] ?>" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <title class="tr" Key="PAGE_TITLE"><?php echo $lang['baghdadititlename'] ?></title>

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
            <div class="col-12 col-md-3">
                <table class="table">
                    <?php
                    include('../connection.php');
                    $table = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'municipal_statistics_en' : 'municipal_statistics';
                    $query = mysqli_query($link, "select * from " . $table);
                    while ($row = mysqli_fetch_array($query)) {
                        $basicInformation[$row['ID']] = $row['basicInformation'];
                        $populationCensus[$row['ID']] = $row['populationCensus'];
                        $Population[$row['ID']] = $row['Population'];
                        $birth[$row['ID']] = $row['birth'];
                        $death[$row['ID']] = $row['death'];
                        $naturalIncrease[$row['ID']] = $row['naturalIncrease'];
                        $marriage[$row['ID']] = $row['marriage'];
                        $divorce[$row['ID']] = $row['divorce'];
                        $populationDescription[$row['ID']] = $row['populationDescription'];
                        $employmentAndSalaries[$row['ID']] = $row['employmentAndSalaries'];
                        $businessSector[$row['ID']] = $row['businessSector'];
                        $businessRegister[$row['ID']] = $row['businessRegister'];
                        $accordingToTheTypesOfActivities[$row['ID']] = $row['accordingToTheTypesOfActivities'];
                        $AccordingToTheFormsOfOwnership[$row['ID']] = $row['AccordingToTheFormsOfOwnership'];
                        $accordingToOrganizationalLegalForms[$row['ID']] = $row['accordingToOrganizationalLegalForms'];
                        $budget[$row['ID']] = $row['budget'];
                        $agriculture[$row['ID']] = $row['agriculture'];
                        $construction[$row['ID']] = $row['construction'];
                        $trading[$row['ID']] = $row['trading'];
                        $hotels[$row['ID']] = $row['hotels'];
                        $transportAndStorage[$row['ID']] = $row['transportAndStorage'];
                        $healthCareAndSocialSecurity[$row['ID']] = $row['healthCareAndSocialSecurity'];
                        $education[$row['ID']] = $row['education'];
                        $culture[$row['ID']] = $row['culture'];
                    }
                    ?> <tr>
                        <th><?php echo $lang['munstat'] ?></th>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Main%20Information/Municipality%20area/Baghdati%20Municipality.xlsx' : '/regions/municipal/ძირითადი%20ინფორმაცია/მუნიციპალიტეტის%20ფართობი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia1">
                            <td>
                                <?php echo $basicInformation['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Main%20Information/Administrative%20structure/Imereti/Baghdati.xlsx' : '/regions/municipal/ძირითადი%20ინფორმაცია/ადმინისტრაციული%20მოწყობა/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population%20census%20pre/urban-rural%20settlements/Imereti/Baghdati.xlsx' : '/regions/municipal/მოსახლეობის%20აღწერა%20წინასწარი/მოსახლეობა%20საქალაქო-სასოფლო/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia23">
                            <td>
                                <?php echo $populationCensus[3]; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population%20census%20pre/number%20of%20population%20by%20sex/Imereti/Baghdati.xlsx' : '/regions/municipal/მოსახლეობის%20აღწერა%20წინასწარი/მოსახლეობა%20სქესის%20მიხედვით/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi2" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $Population['1']; ?></td>
                        </tr>
                        <tr class="informacia2" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="">
                            <td>
                                <?php echo $Population['2']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population/Number%20of%20population/Baghdati.xlsx' : '/regions/municipal/მოსახლეობა/მოსახლეობის%20რიცხოვნობა%20საქალაქო-სასოფლო%20დასახლებების%20მიხედვით/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia2" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="">
                            <td>
                                <?php echo $Population['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population/Share%20of%20urban%20population/Baghdati.xlsx' : '/regions/municipal/მოსახლეობა/საქალაქო%20დასახლებაში%20მცხოვრები%20მოსახლეობის%20წილი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia2">
                            <td>
                                <?php echo $Population['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population/Density%20of%20population/Baghdati.xlsx' : '/regions/municipal/მოსახლეობა/მოსახლეობის%20სიმჭიდროვე/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20live%20births/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Crude%20birth%20rate/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/შობადობის%20ზოგადი%20კოეფიციენტი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['6']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['7']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20stillbirths/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/მკვდრადშობილთა%20რიცხოვნობა/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <?php echo $birth['8']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Imereti/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20deaths/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Crude%20death%20rate/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/მოკვდაობის%20ზოგადი%20კოეფიციენტი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Infant%20mortality%20rate/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/ჩვილ%20ბავშვთა%20მოკვდაობის%20კოეფიციენტი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['6']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Under-5%20mortality%20rate/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/5%20წლამდე%20ასაკის%20ბავშვთა%20მოკვდაობის%20კოეფიციენტი/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['7']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['8']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20by%20urban-rural%20settlements/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20საქალაქო%20სასოფლო/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['9']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20by%20age%20groups/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/მიზეზები%20ძირითადი%20კლასების%20და%20ასაკის%20მიხედვით/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['10']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Deaths%20from%20suicide/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/თვითმკვლელობით%20გარდაცვლილთა%20რიცხოვნობა/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['11']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Suicide%20rate/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/თვითმკვლელობის%20შედეგად%20სიკვილიანობის%20კოეფიციენტი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Natural%20increase/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/ბუნებრივი%20მატება/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia5">
                            <td>
                                <?php echo $naturalIncrease['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Natural%20increase%20rate/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/ბუნებრივი%20მატების%20კოეფიციენტი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20registered%20marriages/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/რეგისტრირებულ%20ქორწინებათა%20რაოდენობა/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia6">
                            <td>
                                <?php echo $marriage['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Crude%20marriage%20rate/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/ქორწინების%20ზოგადი%20კოეფიციენტი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia6">
                            <td>
                                <?php echo $marriage['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20married%20people/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia6">
                            <td>
                                <?php echo $marriage['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia7">
                            <td>
                                <?php echo $divorce['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Crude%20divorce%20rate/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/განქორწინების%20ზოგადი%20კოეფიციენტი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia7">
                            <td>
                                <?php echo $divorce['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Baghdati.xlsx' : '/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Baghdati.xlsx' : '/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Baghdati.xlsx' : '/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Baghdati.xlsx' : '/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population%20census/Number%20of%20population/Baghdati.xlsx' : '/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['6']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Baghdati.xlsx' : '/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['7']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population%20census/Number%20of%20private%20households/Baghdati.xlsx' : '/regions/municipal/მოსახლეობის%20აღწერა/კერძო%20შინამეურნეობები/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi9" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""> <?php echo $employmentAndSalaries['1']; ?>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <?php echo $employmentAndSalaries['2']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Imereti/Baghdati.xlsx' : '/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <?php echo $employmentAndSalaries['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Employment%20and%20Wages/Employees/Imereti/Baghdati.xlsx' : '/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <?php echo $employmentAndSalaries['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Imereti/Baghdati.xlsx' : '/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi10" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $businessSector['1']; ?>
                            </td>
                        </tr>
                        <tr class="informacia10">
                            <td>
                                <?php echo $businessSector['2']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Sector/turnover/Imereti/Baghdati.xlsx' : '/regions/municipal/ბიზნეს%20სექტორი/ბრუნვა/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia10">
                            <td>
                                <?php echo $businessSector['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Sector/Production%20Value/Imereti/Baghdati.xlsx' : '/regions/municipal/ბიზნეს%20სექტორი/პროდუქციის%20გამოშვება/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia10">
                            <td>
                                <?php echo $businessSector['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Sector/Pesronal%20Costs/Imereti/Baghdati.xlsx' : '/regions/municipal/ბიზნეს%20სექტორი/შრომითი%20დანახარჯები/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia10">
                            <td>
                                <?php echo $businessSector['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Sector/Purchase%20of%20good%20and%20services/Imereti/Baghdati.xlsx' : '/regions/municipal/ბიზნეს%20სექტორი/საქონლისა%20და%20მომსახურების%20ყიდვები/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia10">
                            <td>
                                <?php echo $businessSector['6']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Sector/Purchase%20of%20good%20and%20services%20for%20resale/Imereti/Baghdati.xlsx' : '/regions/municipal/ბიზნეს%20სექტორი/გადასაყიდად%20განკუთვნილი%20საქონლისა%20და%20მომსახურების%20ყიდვები/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia10">
                            <td>
                                <?php echo $businessSector['7']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Sector/Value%20added/Imereti/Baghdati.xlsx' : '/regions/municipal/ბიზნეს%20სექტორი/დამატებული%20ღირებულება/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia10">
                            <td>
                                <?php echo $businessSector['8']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Sector/Intermediate%20consumption/Imereti/Baghdati.xlsx' : '/regions/municipal/ბიზნეს%20სექტორი/შუალედური%20მოხმარება/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia10">
                            <td>
                                <?php echo $businessSector['9']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Sector/Investments%20in%20fixed%20assets/Imereti/Baghdati.xlsx' : '/regions/municipal/ბიზნეს%20სექტორი/ინვესტიციები/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <style>
                            #dziritadi12,
                            #dziritadi13,
                            #dziritadi14 {
                                display: none;
                                margin-left: 20px;
                            }
                        </style>
                        <tr>
                            <td id="dziritadiMain2" title="" onclick="GetIdChange(); registerShow();" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $businessRegister['1']; ?>
                            </td>
                        </tr>
                        <tr class="informacia11">
                            <td>
                                <?php echo $businessRegister['2']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Register/Registered%20entities%20per%201000%20persons/Imereti/Baghdati.xlsx' : '/regions/municipal/ბიზნეს%20რეგისტრი/რეგისტრირებული%20სუბიექტები/იმერეთი/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia11">
                            <td>
                                <?php echo $businessRegister['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Register/Number%20of%20newly%20registered%20business%20entities%20in%20Georgia/Imereti/Baghdati%20Municipality.xlsx' : '/regions/municipal/ბიზნეს%20რეგისტრი/ახლად%20რეგისტრირებული%20ბიზნეს%20სუბიექტები/იმერეთი/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia11">
                            <td>
                                <?php echo $businessRegister['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Register/Number%20of%20active%20business%20entities%20registered%20in%20Georgia/Imereti/Baghdati%20Municipality.xlsx' : '/regions/municipal/ბიზნეს%20რეგისტრი/ეკონომიკურად%20აქტიური%20ბიზნეს%20სუბიექტების%20რაოდენობა/იმერეთი/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia11">
                            <td>
                                <?php echo $businessRegister['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Register/Number%20of%20public%20institutions/Imereti/Baghdati%20Municipality.xlsx' : '/regions/municipal/ბიზნეს%20რეგისტრი/საჯარო%20დაწესებულებების%20რაოდენობა/იმერეთი/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi12" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $accordingToTheTypesOfActivities['1']; ?>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $accordingToTheTypesOfActivities['2']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/byKindOfEconomicActivity/Number%20of%20registered%20entities%20by%20kind%20of%20economic%20activity/Imereti/Baghdati.xlsx' : '/regions/municipal/ეკონომიკური%20საქმიანობის%20სახეების%20მიხედვით/რეგისტრირებულ%20სუბიექტთა%20რაოდენობა%20ეკონომიკური%20საქმიანობის%20სახეების%20მიხედვით/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia12">
                            <td>
                                <?php echo $accordingToTheTypesOfActivities['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/byKindOfEconomicActivity/Number%20of%20active%20entities%20by%20kind%20of%20economic%20activity/Imereti/Baghdati.xlsx' : '/regions/municipal/ეკონომიკური%20საქმიანობის%20სახეების%20მიხედვით/რეგისტრირებულ%20მოქმედ%20სუბიექტთა%20რაოდენობა%20ეკონომიკური%20საქმიანობის%20სახეების%20მიხედვით/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi13" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $AccordingToTheFormsOfOwnership['1']; ?>
                            </td>
                        </tr>
                        <tr class="informacia13">
                            <td>
                                <?php echo $AccordingToTheFormsOfOwnership['2']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/byOwnershipType/Number%20of%20registered%20entities%20by%20ownership%20type/Imereti/Baghdati.xlsx' : '/regions/municipal/საკუთრების%20ფორმების%20მიხედვით/რეგისტრირებულ%20სუბიექტთა%20რაოდენობა%20საკუთრების%20ფორმების%20მიხედვით/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia13">
                            <td>
                                <?php echo $AccordingToTheFormsOfOwnership['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/byOwnershipType/Number%20of%20active%20entities%20by%20ownership%20type%20and%20size/Imereti/Baghdati.xlsx' : '/regions/municipal/საკუთრების%20ფორმების%20მიხედვით/რეგისტრირებულ%20მოქმედ%20სუბიექტთა%20რაოდენობა%20საკუთრების%20ფორმებისა%20და%20ზომების%20მიხედვით/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia13">
                            <td>
                                <?php echo $AccordingToTheFormsOfOwnership['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/byOwnershipType/Number%20of%20entities%20newly%20registered%20in%20Georgia%20by%20ownership%20type/Imereti/Baghdati.xlsx' : '/regions/municipal/საკუთრების%20ფორმების%20მიხედვით/ახლადრეგისტრირებულ%20სუბიექტთა%20რაოდენობა/იმერეთი/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi14" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $accordingToOrganizationalLegalForms['1']; ?>
                            </td>
                        </tr>
                        <tr class="informacia14">
                            <td>
                                <?php echo $accordingToOrganizationalLegalForms['2']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/byOrganization-legalForms/Number%20of%20registered%20entities%20by%20organizational-legal%20form/Imereti/Baghdati.xlsx' : '/regions/municipal/ორგანიზაციულ-სამართლებრივი%20ფორმების%20მიხედვით/რეგისტრირებულ%20სუბიექტთა%20რაოდენობა%20ორგანიზაციულ-სამართლებრივი%20ფორმების%20მიხედვით/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia14">
                            <td>
                                <?php echo $accordingToOrganizationalLegalForms['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/byOrganization-legalForms/Number%20of%20active%20entities%20by%20organizational-legal%20form/Imereti/Baghdati.xlsx' : '/regions/municipal/ორგანიზაციულ-სამართლებრივი%20ფორმების%20მიხედვით/რეგისტრირებულ%20მოქმედ%20სუბიექტთა%20რაოდენობა%20ორგანიზაციულ-სამართლებრივი%20ფორმების%20მიხედვ/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia14">
                            <td>
                                <?php echo $accordingToOrganizationalLegalForms['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/byOrganization-legalForms/Number%20of%20entities%20newly%20registered%20in%20Georgia%20by%20organizational-legal%20form/Imereti/Baghdati.xlsx' : '/regions/municipal/ორგანიზაციულ-სამართლებრივი%20ფორმების%20მიხედვით/ახლადრეგისტრირებულ%20სუბიექტთა%20რაოდენობა/იმერეთი/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="withoutArrow" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $budget['1']; ?>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Budget/Imereti/Baghdati%20Municipality.xlsx' : '/regions/municipal/ბიუჯეტი/იმერეთი/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a>
                            </td>
                        </tr>
                        <tr>
                            <td id="withoutArrow" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $agriculture['1']; ?>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Share%20of%20Agriculture%20Land%20Area/Imereti/Baghdati%20Municipality.xlsx' : '/regions/municipal/soflis%20meurneoba/ეკო_აქტ/იმერეთი/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi16" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $construction['1']; ?>
                            </td>
                        </tr>
                        <tr class="informacia16">
                            <td>
                                <?php echo $construction['2']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Construction/Permissions%20granted/Imereti/Baghdati%20Municipality.xlsx' : '/regions/municipal/მშენებლობა/მშენებლობაზე%20გაცემული%20ნებართვები/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia16">
                            <td>
                                <?php echo $construction['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Construction/Completed%20Construction/Imereti/Baghdati%20Municipality.xlsx' : '/regions/municipal/მშენებლობა/დასრულებული%20მშენებლობა/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi17" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $trading['1']; ?>
                            </td>
                        </tr>
                        <tr class="informacia17">
                            <td>
                                <?php echo $trading['2']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Trading/Number%20of%20markets%20and%20fairs%20by%20organizational%20legal%20forms%20in%20Georgia/Imereti/Baghdati%20Municipality.xlsx' : '/regions/municipal/ვაჭრობა/ბაზრების%20და%20ბაზრობების%20რაოდენობა%20ორგანიზაციულ-სამართლებლივი%20ფორმების%20მიხედვით/იმერეთი/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia17">
                            <td>
                                <?php echo $trading['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Trading/Number%20of%20markets%20and%20fairs%20by%20ownership%20type%20in%20Georgia/Imereti/Baghdati%20Municipality.xlsx' : '/regions/municipal/ვაჭრობა/ბაზრების%20და%20ბაზრობების%20რაოდენობა%20საკუთრების%20ფორმის%20მიხედვით/იმერეთი/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia17">
                            <td>
                                <?php echo $trading['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Trading/Number%20of%20markets%20and%20fairs%20by%20type%20in%20Georgia/Imereti/Baghdati%20Municipality.xlsx' : '/regions/municipal/ვაჭრობა/ბაზრების%20და%20ბაზრობების%20რაოდენობა%20ტიპების%20მიხედვით/იმერეთი/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia17">
                            <td>
                                <?php echo $trading['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Trading/Number%20of%20markets%20and%20fairs%20on%20days%20of%20trade/Imereti/Baghdati%20Municipality.xlsx' : '/regions/municipal/ვაჭრობა/ბაზრების%20და%20ბაზრობების%20რაოდენობა%20ვაჭრობის%20დღეთა%20მიხედვით/იმერეთი/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia17">
                            <td>
                                <?php echo $trading['6']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Trading/Average%20annual%20number%20of%20employed%20persons/Imereti/Baghdati%20Municipality.xlsx' : '/regions/municipal/ვაჭრობა/ბაზრების%20და%20ბაზრობების%20დირექციებში%20დასაქმებულთა%20რაოდენობა/იმერეთი/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia17">
                            <td>
                                <?php echo $trading['7']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Trading/Number%20of%20market-place%20and%20sellers%20on%20the%20markets%20and%20fairs/Imereti/Baghdati%20Municipality.xlsx' : '/regions/municipal/ვაჭრობა/ბაზრებში%20და%20ბაზრობებში%20სავაჭრო%20ადგილების%20და%20მოვაჭრეთა%20რაოდენობა/იმერეთი/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia17">
                            <td>
                                <?php echo $trading['8']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Trading/Financial%20indices%20of%20markets%20and%20fairs/Imereti/Baghdati%20Municipality.xlsx' : '/regions/municipal/ვაჭრობა/ბაზრების%20და%20ბაზრობების%20საფინანსო%20მაჩვენებლები/იმერეთი/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi18" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $hotels['1']; ?>
                            </td>
                        </tr>
                        <tr class="informacia18">
                            <td>
                                <?php echo $hotels['2']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Hotels/Number%20of%20hotels%20and%20hotel-type%20establishments%20and%20their%20total%20area/Imereti/Baghdati%20Municipality.xlsx' : '/regions/municipal/სასტუმროები/სასტუმროების%20რაოდენობა%20და%20ფართობი/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia18">
                            <td>
                                <?php echo $hotels['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Hotels/Number%20of%20Rooms%20in%20Hotels%20and%20Hotel-type%20enterprises/Imereti/Baghdati%20Municipality.xlsx' : '/regions/municipal/სასტუმროები/ნომრების%20რაოდენობა%20სასტუმროებსა%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia18">
                            <td>
                                <?php echo $hotels['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Hotels/Guests/Imereti/Baghdati%20Municipality.xlsx' : '/regions/municipal/სასტუმროები/სტუმრები/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia18">
                            <td>
                                <?php echo $hotels['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Imereti/Baghdati%20Municipality.xlsx' : '/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="withoutArrow" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $transportAndStorage['1']; ?>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/TransportAndStorage/Length%20of%20transport%20ways/Imereti/Baghdati%20Municipality.xlsx' : '/regions/municipal/ტრანსპორტი%20და%20დასაწყობება/საერთო%20სარგებლობის%20საავტომობილო%20გზების%20სიგრძე/იმერეთი/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Healthcare/Indicators/Imereti/Baghdati.xlsx' : '/regions/municipal/ჯანდაცვა/მაჩვენებლები/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Healthcare/Abortions/Imereti/Baghdati.xlsx' : '/regions/municipal/ჯანდაცვა/აბორტები/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Healthcare/Anemia/Imereti/Baghdati.xlsx' : '/regions/municipal/ჯანდაცვა/ანემია/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['6']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Healthcare/Diabetes/Imereti/Baghdati.xlsx' : '/regions/municipal/ჯანდაცვა/დიაბეტი/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['7']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Healthcare/Cancer/Imereti/Baghdati.xlsx' : '/regions/municipal/ჯანდაცვა/კიბო/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['8']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Healthcare/Circulatory/Imereti/Baghdati.xlsx' : '/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['9']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Healthcare/Respiratory/Imereti/Baghdati.xlsx' : '/regions/municipal/ჯანდაცვა/სუნთქვა/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['10']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Healthcare/Syphilis/Imereti/Baghdati.xlsx' : '/regions/municipal/ჯანდაცვა/ათაშანგი/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['11']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Healthcare/AIDS/Imereti/Baghdati.xlsx' : '/regions/municipal/ჯანდაცვა/შიდსი/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['12']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Healthcare/Tuberculosis/Imereti/Baghdati.xlsx' : '/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia20">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['13']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Healthcare/Hepatitis/Imereti/Baghdati.xlsx' : '/regions/municipal/ჯანდაცვა/ჰეპატიტი/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Social%20Statistic/Indicators/Imereti/Baghdati.xlsx' : '/regions/municipal/სოციალური%20სტატისტიკა/მაჩვენებლები/იმერეთი/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia21">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['16']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Social%20Statistic/Disability%20Persons/Imereti/Baghdati.xlsx' : '/regions/municipal/სოციალური%20სტატისტიკა/დევნილი%20შშმ%20პირები/იმერეთი/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia21">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['17']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Social%20Statistic/Disabilities%20Registered/Imereti/Baghdati.xlsx' : '/regions/municipal/სოციალური%20სტატისტიკა/რეგისტრირებული%20შშმ%20პირები/იმერეთი/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia21">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['18']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Social%20Statistic/Subsistence%20Allowance/Imereti/Baghdati.xlsx' : '/regions/municipal/სოციალური%20სტატისტიკა/საარსებო/იმერეთი/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia21">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['19']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Social%20Statistic/Receiving/Imereti/Baghdati.xlsx' : '/regions/municipal/სოციალური%20სტატისტიკა/მიმღები/იმერეთი/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia21">
                            <td>
                                <?php echo $healthCareAndSocialSecurity['20']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Imereti/Baghdati.xlsx' : '/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi22" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $education['1']; ?>
                            </td>
                        </tr>
                        <tr class="informacia22">
                            <td>
                                <?php echo $education['2']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Education/Preschool%20and%20Education%20Institutions/Imereti/Baghdati.xlsx' : '/regions/municipal/განათლება/სკოლამდელი%20აღზრდისა%20და%20განათლების%20დაწესებულებები/იმერეთი/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia22">
                            <td>
                                <?php echo $education['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Education/General%20Educational%20Institution/Imereti/Baghdati.xlsx' : '/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia22">
                            <td>
                                <?php echo $education['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Imereti/Baghdati.xlsx' : '/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/იმერეთი/ბაღდათის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="withoutArrow" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $culture['1']; ?>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Culture/Imereti/Baghdati.xlsx' : '/regions/municipal/კულტურა/იმერეთი/ბაღდათი.xlsx'; ?>"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a>
                            </td>
                        </tr>




                    </tbody>
                </table>
            </div>
            <!-- Center Content -->
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                <!-- Center content goes here. Adjust height if needed or add other content. -->
                <div class="w-100 text-center p-4 rounded" style="height: 100%;">
                    <img src="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'maps/baghdatien.svg' : 'maps/baghdati.svg'; ?>" alt="baghdatiSVG" id="baghdatiSVG">
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
        localStorage.setItem('municipal', 'Baghdati');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>