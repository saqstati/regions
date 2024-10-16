<?php
include "../../config.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="http://www.geostat.ge/regions/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $lang['batumititlename'] ?>" id="og-title" />
    <meta property="og:description" content="<?php echo $lang['batumititlename'] ?>" id="og-description" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <title class="tr" Key="PAGE_TITLE" id="page-title"><?php echo $lang['batumititlename'] ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../../samegrelo.css">
    <link rel="stylesheet" type="text/css" href="../../adjara/adjara.css">
    <link rel="stylesheet" type="text/css" href="../../custom.css">
    <link rel="stylesheet" type="text/css" href="../../genders.scss">
    <link rel="stylesheet" href="../../mediastyles.css">
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
                "../../1600-900-optimized/2.jpg",
                "../../1600-900-optimized/3.jpg",
                "../../1600-900-optimized/4.jpg",
                "../../1600-900-optimized/5.jpg",
                "../../1600-900-optimized/6.jpg",
                "../../1600-900-optimized/7.jpg",
                "../../1600-900-optimized/8.jpg",
                "../../1600-900-optimized/9.jpg",
                "../../1600-900-optimized/10.jpg",
                "../../1600-900-optimized/11.jpg",
                "../../1600-900-optimized/12.jpg",
                "../../1600-900-optimized/15.jpg"
            )
        </script>
    </div>
    <div id="background-main" class="background-image"></div>
    <div class="main-container">
        <div class="content">
            <div id="brand-logo">
                <a href="/regions/index.php" id="brand-logo-link" class=""><img src="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '../../images/logo_transparency_eng.png' : '../../images/logo_transparency_geo.png'; ?>" /></a>
            </div>
            <header class="header1">
                <h1>
                    <p id="pagetitlename" class="tr" Key="REGION14"><?php echo $lang['batumititlename'] ?></p>
                </h1>
            </header>
            <div id="languages">
                <a href="genders.php?lang=ka" id="ka" class="lang"><img src="../../images/ka.png" /></a>
                <a href="genders.php?lang=en" id="en" class="lang"><img src="../../images/en.png" /></a>
            </div>

            <div class="display-flex">
                <a class=" btn textbox-left-home back-btn" onclick="previous()"> <span class="tr" Key="backBtn"><?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Back' : 'უკან დაბრუნება'; ?></span></a>

                <a class="regions-btn btn textbox-right-home" href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '../../listEN.php' : '../../list.php'; ?>"> <span class="tr" Key="regionsBtn"><?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Comparison of Regions' : 'რეგიონების შედარება'; ?></span></a>

                <a class="btn textbox-right-home regions-mun regions-btn" href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '../../muncomEN.php?lang=en' : '../../muncom.php?lang=ka'; ?>"> <span class="tr" Key="regionsBtn"><?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Comparison of Municipalities' : 'მუნიციპალიტეტების შედარება'; ?></span></a>
            </div>

            <div class="center">
                <table class="machveneblebi-left">
                    <?php
                    include('../../connection.php');
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
                                <span id="birth4"><?php echo $birth['4']; ?></span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkBirths" href="#">
                                        <img src="/regions/images/excel-9-24.png" alt="excel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <span id="birth5"><?php echo $birth['5']; ?></span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkRatio" href="#">
                                        <img src="/regions/images/excel-9-24.png" alt="excel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <span id="birth8"><?php echo $birth['8']; ?></span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkStillbirths" href="#">
                                        <img src="/regions/images/excel-9-24.png" alt="excel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi4" onclick="GetIdChange()" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $death['1']; ?>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Infant%20mortality%20rate/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/ჩვილ%20ბავშვთა%20მოკვდაობის%20კოეფიციენტი/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['6']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Under-5%20mortality%20rate/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/5%20წლამდე%20ასაკის%20ბავშვთა%20მოკვდაობის%20კოეფიციენტი/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['7']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['8']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20by%20urban-rural%20settlements/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20საქალაქო%20სასოფლო/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['9']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20by%20age%20groups/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/მიზეზები%20ძირითადი%20კლასების%20და%20ასაკის%20მიხედვით/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['10']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Deaths%20from%20suicide/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/თვითმკვლელობით%20გარდაცვლილთა%20რიცხოვნობა/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <?php echo $death['11']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Suicide%20rate/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/თვითმკვლელობის%20შედეგად%20სიკვილიანობის%20კოეფიციენტი/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Natural%20increase/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/ბუნებრივი%20მატება/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia5">
                            <td>
                                <?php echo $naturalIncrease['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Natural%20increase%20rate/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/ბუნებრივი%20მატების%20კოეფიციენტი/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20registered%20marriages/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/რეგისტრირებულ%20ქორწინებათა%20რაოდენობა/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia6">
                            <td>
                                <?php echo $marriage['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Crude%20marriage%20rate/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/ქორწინების%20ზოგადი%20კოეფიციენტი/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia6">
                            <td>
                                <?php echo $marriage['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20married%20people/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia6">
                            <td>
                                <?php echo $marriage['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia7">
                            <td>
                                <?php echo $divorce['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Crude%20divorce%20rate/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/განქორწინების%20ზოგადი%20კოეფიციენტი/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia7">
                            <td>
                                <?php echo $divorce['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/C.%20Batumi.xlsx' : '/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/C.%20Batumi.xlsx' : '/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/C.%20Batumi.xlsx' : '/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population%20census/Number%20of%20population/C.%20Batumi.xlsx' : '/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['6']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/C.%20Batumi.xlsx' : '/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['7']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population%20census/Number%20of%20private%20households/C.%20Batumi.xlsx' : '/regions/municipal/მოსახლეობის%20აღწერა/კერძო%20შინამეურნეობები/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr>
                            <td id="dziritadi9" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""> <?php echo $employmentAndSalaries['1']; ?>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <?php echo $employmentAndSalaries['2']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <?php echo $employmentAndSalaries['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <?php echo $employmentAndSalaries['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>


                        <tr>
                            <td id="dziritadi18" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $hotels['1']; ?>
                            </td>
                        </tr>
                        <tr class="informacia18">
                            <td>
                                <?php echo $hotels['2']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Hotels/Number%20of%20hotels%20and%20hotel-type%20establishments%20and%20their%20total%20area/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/სასტუმროები/სასტუმროების%20რაოდენობა%20და%20ფართობი/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia18">
                            <td>
                                <?php echo $hotels['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Hotels/Number%20of%20Rooms%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/სასტუმროები/ნომრების%20რაოდენობა%20სასტუმროებსა%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia18">
                            <td>
                                <?php echo $hotels['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Hotels/Guests/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/სასტუმროები/სტუმრები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia18">
                            <td>
                                <?php echo $hotels['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="/regions/images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <?php include '../../footer_mun.php' ?>

        <script src="../../script.js"></script>
        <script src="../../genders.js"></script>
        <script type="../../text/javascript" src="lang.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                function updatePageTitleAndMeta() {

                    var municipality = localStorage.getItem("municipal");
                    var lang = '<?php echo (isset($_GET['lang']) ? $_GET['lang'] : "ka"); ?>';


                    if (municipality) {
                        var pageTitle = "";
                        var ogTitle = "";
                        var ogDescription = "";

                        switch (municipality) {
                            case "batumi":
                                pageTitle = lang === "en" ? "Statistical Information on Batumi Municipality, Adjara Region" : "სტატისტიკური ინფორმაცია აჭარის რეგიონის ბათუმის მუნიციპალიტეტის შესახებ";
                                ogTitle = "Statistical Information on Batumi Municipality, Adjara Region";
                                ogDescription = "Statistical Information on Batumi Municipality, Adjara Region";
                                break;
                            case "qeda":
                                pageTitle = lang === "en" ? "Statistical Information on Keda Municipality, Adjara Region" : "სტატისტიკური ინფორმაცია აჭარის რეგიონის ქედის მუნიციპალიტეტის შესახებ";
                                ogTitle = "Statistical Information on Keda Municipality, Adjara Region";
                                ogDescription = "Statistical Information on Keda Municipality, Adjara Region";
                                break;
                            default:
                                pageTitle = lang === "en" ? "Default Title" : "ძირითადი სათაური";
                                ogTitle = "Default OG Title";
                                ogDescription = "Default description.";
                        }

                        document.title = pageTitle;
                        document.getElementById("og-title").setAttribute("content", ogTitle);
                        document.getElementById("og-description").setAttribute("content", ogDescription);
                        document.getElementById("pagetitlename").textContent = pageTitle;
                    }
                }


                updatePageTitleAndMeta();
            });
        </script>
</body>

</html>