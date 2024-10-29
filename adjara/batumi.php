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

    <!-- Correct Bootstrap 5.3.0 CSS URL -->
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
    <div class="main-container">
        <?php include '../asset/municHeader.php' ?>

        <table class="machveneblebi-left">
            <?php
            include('../connection.php');
            $table = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'municipal_statistics_en' : 'municipal_statistics';
            $query = mysqli_query($link, "select * from " . $table);
            while ($row = mysqli_fetch_array($query)) {
                $basicInformation[$row['ID']] = $row['basicInformation'];
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Main%20Information/Municipality%20area/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/ძირითადი%20ინფორმაცია/მუნიციპალიტეტის%20ფართობი/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia1">
                    <td>
                        <?php echo $basicInformation['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Main%20Information/Administrative%20structure/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ძირითადი%20ინფორმაცია/ადმინისტრაციული%20მოწყობა/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population/Number%20of%20population/C.%20Batumi.xlsx' : '/regions/municipal/მოსახლეობა/მოსახლეობის%20რიცხოვნობა%20საქალაქო-სასოფლო%20დასახლებების%20მიხედვით/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia2" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="">
                    <td>
                        <?php echo $Population['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population/Share%20of%20urban%20population/C.%20Batumi.xlsx' : '/regions/municipal/მოსახლეობა/საქალაქო%20დასახლებაში%20მცხოვრები%20მოსახლეობის%20წილი/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia2">
                    <td>
                        <?php echo $Population['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population/Density%20of%20population/C.%20Batumi.xlsx' : '/regions/municipal/მოსახლეობა/მოსახლეობის%20სიმჭიდროვე/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20live%20births/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Crude%20birth%20rate/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/შობადობის%20ზოგადი%20კოეფიციენტი/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['6']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['7']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20stillbirths/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/მკვდრადშობილთა%20რიცხოვნობა/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['8']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20deaths/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Crude%20death%20rate/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/მოკვდაობის%20ზოგადი%20კოეფიციენტი/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Infant%20mortality%20rate/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/ჩვილ%20ბავშვთა%20მოკვდაობის%20კოეფიციენტი/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['6']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Under-5%20mortality%20rate/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/5%20წლამდე%20ასაკის%20ბავშვთა%20მოკვდაობის%20კოეფიციენტი/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['7']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['8']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20by%20urban-rural%20settlements/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20საქალაქო%20სასოფლო/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['9']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20by%20age%20groups/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/მიზეზები%20ძირითადი%20კლასების%20და%20ასაკის%20მიხედვით/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['10']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Deaths%20from%20suicide/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/თვითმკვლელობით%20გარდაცვლილთა%20რიცხოვნობა/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['11']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Suicide%20rate/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/თვითმკვლელობის%20შედეგად%20სიკვილიანობის%20კოეფიციენტი/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Natural%20increase/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/ბუნებრივი%20მატება/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia5">
                    <td>
                        <?php echo $naturalIncrease['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Natural%20increase%20rate/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/ბუნებრივი%20მატების%20კოეფიციენტი/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20registered%20marriages/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/რეგისტრირებულ%20ქორწინებათა%20რაოდენობა/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia6">
                    <td>
                        <?php echo $marriage['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Crude%20marriage%20rate/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/ქორწინების%20ზოგადი%20კოეფიციენტი/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia6">
                    <td>
                        <?php echo $marriage['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20married%20people/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia6">
                    <td>
                        <?php echo $marriage['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia7">
                    <td>
                        <?php echo $divorce['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Crude%20divorce%20rate/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/განქორწინების%20ზოგადი%20კოეფიციენტი/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia7">
                    <td>
                        <?php echo $divorce['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/C.%20Batumi.xlsx' : '/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/C.%20Batumi.xlsx' : '/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/C.%20Batumi.xlsx' : '/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population%20census/Number%20of%20population/C.%20Batumi.xlsx' : '/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['6']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/C.%20Batumi.xlsx' : '/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['7']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population%20census/Number%20of%20private%20households/C.%20Batumi.xlsx' : '/regions/municipal/მოსახლეობის%20აღწერა/კერძო%20შინამეურნეობები/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia9">
                    <td>
                        <?php echo $employmentAndSalaries['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia9">
                    <td>
                        <?php echo $employmentAndSalaries['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Sector/turnover/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ბიზნეს%20სექტორი/ბრუნვა/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $businessSector['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Sector/Production%20Value/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ბიზნეს%20სექტორი/პროდუქციის%20გამოშვება/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $businessSector['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Sector/Pesronal%20Costs/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ბიზნეს%20სექტორი/შრომითი%20დანახარჯები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $businessSector['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Sector/Purchase%20of%20good%20and%20services/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ბიზნეს%20სექტორი/საქონლისა%20და%20მომსახურების%20ყიდვები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $businessSector['6']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Sector/Purchase%20of%20good%20and%20services%20for%20resale/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ბიზნეს%20სექტორი/გადასაყიდად%20განკუთვნილი%20საქონლისა%20და%20მომსახურების%20ყიდვები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $businessSector['7']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Sector/Value%20added/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ბიზნეს%20სექტორი/დამატებული%20ღირებულება/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $businessSector['8']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Sector/Intermediate%20consumption/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ბიზნეს%20სექტორი/შუალედური%20მოხმარება/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $businessSector['9']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Sector/Investments%20in%20fixed%20assets/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ბიზნეს%20სექტორი/ინვესტიციები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Register/Registered%20entities%20per%201000%20persons/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ბიზნეს%20რეგისტრი/რეგისტრირებული%20სუბიექტები/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia11">
                    <td>
                        <?php echo $businessRegister['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Register/Number%20of%20newly%20registered%20business%20entities%20in%20Georgia/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/ბიზნეს%20რეგისტრი/ახლად%20რეგისტრირებული%20ბიზნეს%20სუბიექტები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia11">
                    <td>
                        <?php echo $businessRegister['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Register/Number%20of%20active%20business%20entities%20registered%20in%20Georgia/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/ბიზნეს%20რეგისტრი/ეკონომიკურად%20აქტიური%20ბიზნეს%20სუბიექტების%20რაოდენობა/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia11">
                    <td>
                        <?php echo $businessRegister['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Register/Number%20of%20public%20institutions/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/ბიზნეს%20რეგისტრი/საჯარო%20დაწესებულებების%20რაოდენობა/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/byKindOfEconomicActivity/Number%20of%20registered%20entities%20by%20kind%20of%20economic%20activity/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ეკონომიკური%20საქმიანობის%20სახეების%20მიხედვით/რეგისტრირებულ%20სუბიექტთა%20რაოდენობა%20ეკონომიკური%20საქმიანობის%20სახეების%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $accordingToTheTypesOfActivities['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/byKindOfEconomicActivity/Number%20of%20active%20entities%20by%20kind%20of%20economic%20activity/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ეკონომიკური%20საქმიანობის%20სახეების%20მიხედვით/რეგისტრირებულ%20მოქმედ%20სუბიექტთა%20რაოდენობა%20ეკონომიკური%20საქმიანობის%20სახეების%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/byOwnershipType/Number%20of%20registered%20entities%20by%20ownership%20type/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/საკუთრების%20ფორმების%20მიხედვით/რეგისტრირებულ%20სუბიექტთა%20რაოდენობა%20საკუთრების%20ფორმების%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia13">
                    <td>
                        <?php echo $AccordingToTheFormsOfOwnership['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/byOwnershipType/Number%20of%20active%20entities%20by%20ownership%20type%20and%20size/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/საკუთრების%20ფორმების%20მიხედვით/რეგისტრირებულ%20მოქმედ%20სუბიექტთა%20რაოდენობა%20საკუთრების%20ფორმებისა%20და%20ზომების%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia13">
                    <td>
                        <?php echo $AccordingToTheFormsOfOwnership['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/byOwnershipType/Number%20of%20entities%20newly%20registered%20in%20Georgia%20by%20ownership%20type/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/საკუთრების%20ფორმების%20მიხედვით/ახლადრეგისტრირებულ%20სუბიექტთა%20რაოდენობა/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/byOrganization-legalForms/Number%20of%20registered%20entities%20by%20organizational-legal%20form/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ორგანიზაციულ-სამართლებრივი%20ფორმების%20მიხედვით/რეგისტრირებულ%20სუბიექტთა%20რაოდენობა%20ორგანიზაციულ-სამართლებრივი%20ფორმების%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia14">
                    <td>
                        <?php echo $accordingToOrganizationalLegalForms['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/byOrganization-legalForms/Number%20of%20active%20entities%20by%20organizational-legal%20form/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ორგანიზაციულ-სამართლებრივი%20ფორმების%20მიხედვით/რეგისტრირებულ%20მოქმედ%20სუბიექტთა%20რაოდენობა%20ორგანიზაციულ-სამართლებრივი%20ფორმების%20მიხედვ/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia14">
                    <td>
                        <?php echo $accordingToOrganizationalLegalForms['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/byOrganization-legalForms/Number%20of%20entities%20newly%20registered%20in%20Georgia%20by%20organizational-legal%20form/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ორგანიზაციულ-სამართლებრივი%20ფორმების%20მიხედვით/ახლადრეგისტრირებულ%20სუბიექტთა%20რაოდენობა/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="withoutArrow" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $budget['1']; ?>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Budget/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ბიუჯეტი/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a>
                    </td>
                </tr>
                <tr>
                    <td id="withoutArrow" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $agriculture['1']; ?>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Share%20of%20Agriculture%20Land%20Area/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/soflis%20meurneoba/ეკო_აქტ/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Construction/Permissions%20granted/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/მშენებლობა/მშენებლობაზე%20გაცემული%20ნებართვები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia16">
                    <td>
                        <?php echo $construction['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Construction/Completed%20Construction/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/მშენებლობა/დასრულებული%20მშენებლობა/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Trading/Number%20of%20markets%20and%20fairs%20by%20organizational%20legal%20forms%20in%20Georgia/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/ვაჭრობა/ბაზრების%20და%20ბაზრობების%20რაოდენობა%20ორგანიზაციულ-სამართლებლივი%20ფორმების%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia17">
                    <td>
                        <?php echo $trading['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Trading/Number%20of%20markets%20and%20fairs%20by%20ownership%20type%20in%20Georgia/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/ვაჭრობა/ბაზრების%20და%20ბაზრობების%20რაოდენობა%20საკუთრების%20ფორმის%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia17">
                    <td>
                        <?php echo $trading['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Trading/Number%20of%20markets%20and%20fairs%20by%20type%20in%20Georgia/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/ვაჭრობა/ბაზრების%20და%20ბაზრობების%20რაოდენობა%20ტიპების%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia17">
                    <td>
                        <?php echo $trading['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Trading/Number%20of%20markets%20and%20fairs%20on%20days%20of%20trade/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/ვაჭრობა/ბაზრების%20და%20ბაზრობების%20რაოდენობა%20ვაჭრობის%20დღეთა%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia17">
                    <td>
                        <?php echo $trading['6']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Trading/Average%20annual%20number%20of%20employed%20persons/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/ვაჭრობა/ბაზრების%20და%20ბაზრობების%20დირექციებში%20დასაქმებულთა%20რაოდენობა/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia17">
                    <td>
                        <?php echo $trading['7']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Trading/Number%20of%20market-place%20and%20sellers%20on%20the%20markets%20and%20fairs/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/ვაჭრობა/ბაზრებში%20და%20ბაზრობებში%20სავაჭრო%20ადგილების%20და%20მოვაჭრეთა%20რაოდენობა/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia17">
                    <td>
                        <?php echo $trading['8']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Trading/Financial%20indices%20of%20markets%20and%20fairs/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/ვაჭრობა/ბაზრების%20და%20ბაზრობების%20საფინანსო%20მაჩვენებლები/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Hotels/Number%20of%20hotels%20and%20hotel-type%20establishments%20and%20their%20total%20area/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/სასტუმროები/სასტუმროების%20რაოდენობა%20და%20ფართობი/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia18">
                    <td>
                        <?php echo $hotels['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Hotels/Number%20of%20Rooms%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/სასტუმროები/ნომრების%20რაოდენობა%20სასტუმროებსა%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia18">
                    <td>
                        <?php echo $hotels['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Hotels/Guests/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/სასტუმროები/სტუმრები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia18">
                    <td>
                        <?php echo $hotels['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="withoutArrow" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $transportAndStorage['1']; ?>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/TransportAndStorage/Length%20of%20transport%20ways/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/ტრანსპორტი%20და%20დასაწყობება/საერთო%20სარგებლობის%20საავტომობილო%20გზების%20სიგრძე/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a>
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
                    <td id="dziritadi20" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $healthCareAndSocialSecurity['2']; ?>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Healthcare/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ჯანდაცვა/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi21" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $healthCareAndSocialSecurity['11']; ?>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Education/Preschool%20and%20Education%20Institutions/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/განათლება/სკოლამდელი%20აღზრდისა%20და%20განათლების%20დაწესებულებები/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia22">
                    <td>
                        <?php echo $education['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia22">
                    <td>
                        <?php echo $education['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/C.%20Batumi.xlsx' : '/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="withoutArrow" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $culture['1']; ?>
                        <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Culture/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/კულტურა/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a>
                    </td>
                </tr>




            </tbody>
        </table>
        <div class="map-box">
            <svg id="svg4380" xmlns="http://www.w3.org/2000/svg" version="1.1">

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
        <table class="machveneblebi-right">
            <?php
            include('../connection.php');
            $tableRight = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'key_indicators_reg_en' : 'key_indicators_reg';
            $query = mysqli_query($link, "select * from " . $tableRight);
            while ($row = mysqli_fetch_array($query)) {
                // $keyIndicator[$row['ID']] = $row['keyIndicators'];
                $keyIndicator[$row['ID']] = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? $row['keyIndicators'] : $row['keyIndicators'];
                $dataContent[$row['ID']] = $row['dataContent'];
            }
            $query = mysqli_query($link, "select * from `municipalities` where ID = 13");
            $row = mysqli_fetch_array($query);


            ?> <tr>
                <th><?php echo $keyIndicator[1]; ?></th>
            </tr>
            <tbody>
                <tr>
                    <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[2]; ?> "><?php echo $keyIndicator[2]; ?><span class="float-right"><?php echo $row['Area']; ?></span></td>
                </tr>
                <tr>
                    <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[3]; ?>"><?php echo $keyIndicator[3]; ?><span class="float-right"><?php echo $row['NumberOfCT']; ?></span></td>
                </tr>
                <tr>
                    <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[4]; ?>"><?php echo $keyIndicator[4]; ?><span class="float-right"><?php echo $row['Villages']; ?></span></td>
                </tr>
                <tr>
                    <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[5]; ?>"><?php echo $keyIndicator[5]; ?><span class="float-right"><?php echo $row['Population']; ?></span></td>
                </tr>
                <tr>
                    <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[6]; ?>"><?php echo $keyIndicator[6]; ?><span class="float-right"><?php echo $row['LiveBirths']; ?></span></td>
                </tr>
                <tr>
                    <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[7]; ?>"><?php echo $keyIndicator[7]; ?><span class="float-right"><?php echo $row['GeneralBirthRate']; ?></span></td>
                </tr>
                <tr>
                    <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[8]; ?>"><?php echo $keyIndicator[8]; ?><span class="float-right"><?php echo $row['Dead']; ?></span></td>
                </tr>
                <tr>
                    <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[9]; ?>"><?php echo $keyIndicator[9]; ?><span class="float-right"><?php echo $row['GeneralMortalityRate']; ?></span> </td>
                </tr>
                <tr>
                    <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[10]; ?>"><?php echo $keyIndicator[10]; ?><span class="float-right"><?php echo $row['NaturalIncrease']; ?></span> </td>
                </tr>
                <tr>
                    <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[11]; ?>"><?php echo $keyIndicator[11]; ?><span class="float-right"><?php echo $row['Employees']; ?></span> </td>
                </tr>
                <tr>
                    <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[12]; ?>"><?php echo $keyIndicator[12]; ?><span class="float-right"><?php echo $row['AVGSalary']; ?></span> </td>
                </tr>
                <tr>
                    <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[13]; ?>"><?php echo $keyIndicator[13]; ?><span class="float-right"><?php echo $row['RegEcSub']; ?></span> </td>
                </tr>
                <tr>
                    <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[14]; ?>"><?php echo $keyIndicator[14]; ?><span class="float-right"><?php echo $row['ActEcSub']; ?></span> </td>
                </tr>
                <tr>
                    <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[15]; ?>"><?php echo $keyIndicator[15]; ?><span class="float-right"><?php echo $row['NewlyEcEnt']; ?></span> </td>
                </tr>
            </tbody>
            <?php

            ?>
        </table>
        <?php include '../footer_mun.php' ?>

        <script src="../script.js"></script>
        <!-- Fixing the incorrect type for lang.js -->
        <script type="text/javascript" src="../lang.js"></script>
        <script>
            localStorage.setItem('municipal', 'batumi');
        </script>
        <!-- Popper.js and Bootstrap 5 JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>

</body>

</html>