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
    <meta property="og:title" content="<?php echo $lang['kutaisititlename'] ?>" />
    <meta property="og:description" content="<?php echo $lang['kutaisititlename'] ?>" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <title class="tr" Key="PAGE_TITLE"><?php echo $lang['kutaisititlename'] ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../samegrelo.css">
    <link rel="stylesheet" type="text/css" href="../imereti/imereti.css">
    <link rel="stylesheet" type="text/css" href="../custom.css">
    <link rel="stylesheet" href="../mediastyles.css">
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
                "../1600-900-optimized/2.jpg",
                "../1600-900-optimized/3.jpg",
                "../1600-900-optimized/4.jpg",
                "../1600-900-optimized/5.jpg",
                "../1600-900-optimized/6.jpg",
                "../1600-900-optimized/7.jpg",
                "../1600-900-optimized/8.jpg",
                "../1600-900-optimized/9.jpg",
                "../1600-900-optimized/10.jpg",
                "../1600-900-optimized/11.jpg",
                "../1600-900-optimized/12.jpg",
                "../1600-900-optimized/15.jpg"
            )
        </script>
    </div>
    <div id="background-main" class="background-image"></div>
    <div class="main-container">
        <div id="brand-logo">
            <a href="http://www.geostat.ge/" id="brand-logo-link" class=""><img src="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '../images/logo_transparency_eng.png' : '../images/logo_transparency_geo.png'; ?>" /></a>
        </div>
        <header class="header1">
            <h1>
                <p id="pagetitlename" class="tr" Key="REGION14"><?php echo $lang['kutaisititlename'] ?></p>
            </h1>
        </header>
        <div id="languages">
            <a href="kutaisi.php?lang=ka" id="ka" class="lang"><img src="../images/ka.png" /></a>
            <a href="kutaisi.php?lang=en" id="en" class="lang"><img src="../images/en.png" /></a>
        </div>
        <div id="recommendation">
            <span class="tr" Key="RECTEXT1">
                <?php echo $lang['RECTEXT1'] ?>
            </span>
            <br>
            <span class="tr" Key="RECTEXT2">
                <?php echo $lang['RECTEXT2'] ?>
            </span>
            <a href="http://www.google.com/chrome/"><img src="../images/chrome-100.png" /></a>
            <a href="https://www.mozilla.org/en-US/firefox/new/"><img src="../images/firefox-100.png" /></a>
            <a href="http://www.opera.com/"><img src="../images/opera-100.png" /></a>
        </div>
        <div class="display-flex">
            <div class="btn textbox-left-home">
                <a class="back-btn" href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '../imereti.php?lang=en' : '../imereti.php?lang=ka'; ?>"> <span class="tr" Key="backBtn"><?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Back' : 'უკან დაბრუნება'; ?></span></a>
            </div>
            <div class="btn textbox-right-home">
                <a class="regions-btn" href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '../list.php?lang=en' : '../list.php?lang=ka'; ?>"> <span class="tr" Key="regionsBtn"><?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Compare Regions' : 'რეგიონების შედარება'; ?></span></a>
            </div>
        </div>

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
                    <th id="dziritadi1" onclick="GetIdChange()" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $basicInformation[1]; ?> <span class="float-right"><i id="classchange" class="dropdown_img_up"></i></span>
                    </th>
                </tr>
                <tr class="informacia1">
                    <td>
                        <?php echo $basicInformation[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/dziritadi%20informacia/regionis%20fartobi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia1">
                    <td>
                        <?php echo $basicInformation['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/dziritadi%20informacia/municipalitetebis,%20qalaqebis%20da%20soflebis%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia1">
                    <td>
                        <?php echo $basicInformation['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/dziritadi%20informacia/regionis%20fartobi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia1">
                    <td>
                        <?php echo $basicInformation['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/dziritadi%20informacia/municipalitetebis,%20qalaqebis%20da%20soflebis%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi2" onclick="GetIdChange()" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $Population['1']; ?></td>
                </tr>
                <tr class="informacia2" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="1 იანვრის მდომარეობით">
                    <td>
                        <?php echo $Population['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/demografia/mokvdaoba_asaki_sqesi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia2" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="1 იანვრის მდგომარეობით">
                    <td>
                        <?php echo $Population['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/demografia/gardacvalebis%20mizezebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia2">
                    <td>
                        <?php echo $Population['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/demografia/dziritadi%20demografiuli%20machveneblebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia2">
                    <td>
                        <?php echo $Population['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/demografia/dziritadi%20demografiuli%20machveneblebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
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
                    }
                </style>
                <tr>
                    <td id="dziritadi3" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $birth['1']; ?></td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/dasaqmeba_umushevroba/dasaqmeba_umushevroba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/dasaqmeba_umushevroba/dasaqmeba_umushevroba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/dasaqmeba_umushevroba/dasaqmeba_umushevroba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/dasaqmeba_umushevroba/dasaqmeba_umushevroba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $birth['6']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/dasaqmeba_umushevroba/khelfasi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi4" onclick="GetIdChange()" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $death['1']; ?>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/fasebi/samomxmareblo%20fasebis%20indeqsebi%2012%20tvis%20sashualo%20wina%2012%20Tvis%20saSualosTan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20tvestan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20wlis%20shesabamis%20TvesTan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20wlis%20shesabamis%20TvesTan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20wlis%20shesabamis%20TvesTan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['6']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20wlis%20shesabamis%20TvesTan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['7']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20wlis%20shesabamis%20TvesTan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $death['8']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20wlis%20shesabamis%20TvesTan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="http://localhost/regions/regions/2/ckhovrebis%20done/shemosavlebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia5">
                    <td>
                        <?php echo $naturalIncrease['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/ckhovrebis%20done/kharjebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="http://localhost/regions/regions/2/biznes%20seqtori/saqmianobis%20mikhedvit_nace%20rev.2.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia6">
                    <td>
                        <?php echo $marriage['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/biznes%20seqtori/sakutrebis%20formis%20mikhedvit.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia6">
                    <td>
                        <?php echo $marriage['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/biznes%20seqtori/zomis%20mikhedvit.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia6">
                    <td>
                        <?php echo $marriage['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/biznes%20seqtori/zomis%20mikhedvit.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="http://localhost/regions/regions/2/soflis%20meurneoba/1.%20erttsliani%20kulturebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia7">
                    <td>
                        <?php echo $divorce['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/soflis%20meurneoba/2.%20mravaltslovani%20kulturebis%20tsarmoeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia7">
                    <td>
                        <?php echo $divorce['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/soflis%20meurneoba/3.%20pirutkvis%20suladoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="http://localhost/regions/regions/2/mshenebloba/dasrulebuli%20msheneblobebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/mshenebloba/mshenebloba_nebartvebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/mshenebloba/mshenebloba_dziritadi%20machveneblebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/mshenebloba/dasrulebuli%20msheneblobebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['6']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/mshenebloba/dasrulebuli%20msheneblobebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['7']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/mshenebloba/dasrulebuli%20msheneblobebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $populationDescription['8']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/mshenebloba/dasrulebuli%20msheneblobebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="http://localhost/regions/regions/2/sastumroebi%20da%20restornebi/sastumroebi%20da%20restornebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia9">
                    <td>
                        <?php echo $employmentAndSalaries['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/sastumroebi%20da%20restornebi/stumarta%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia9">
                    <td>
                        <?php echo $employmentAndSalaries['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/sastumroebi%20da%20restornebi/stumarta%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi10" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $businessSector['1']; ?>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $businessSector['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $businessSector['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/registrirebuli%20avtomobilebis%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $businessSector['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $businessSector['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $businessSector['6']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $businessSector['7']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $businessSector['8']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $businessSector['9']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi11" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $businessRegister['1']; ?>
                    </td>
                </tr>
                <tr class="informacia11">
                    <td>
                        <?php echo $businessRegister['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia11">
                    <td>
                        <?php echo $businessRegister['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/registrirebuli%20avtomobilebis%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia11">
                    <td>
                        <?php echo $businessRegister['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia11">
                    <td>
                        <?php echo $businessRegister['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi12" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $accordingToTheTypesOfActivities['1']; ?>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $accordingToTheTypesOfActivities['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia12">
                    <td>
                        <?php echo $accordingToTheTypesOfActivities['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/registrirebuli%20avtomobilebis%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi13" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $AccordingToTheFormsOfOwnership['1']; ?>
                    </td>
                </tr>
                <tr class="informacia13">
                    <td>
                        <?php echo $AccordingToTheFormsOfOwnership['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia13">
                    <td>
                        <?php echo $AccordingToTheFormsOfOwnership['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/registrirebuli%20avtomobilebis%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi14" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $accordingToOrganizationalLegalForms['1']; ?>
                    </td>
                </tr>
                <tr class="informacia14">
                    <td>
                        <?php echo $accordingToOrganizationalLegalForms['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia14">
                    <td>
                        <?php echo $accordingToOrganizationalLegalForms['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/registrirebuli%20avtomobilebis%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi15" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $agriculture['1']; ?>
                    </td>
                </tr>
                <tr class="informacia15">
                    <td>
                        <?php echo $agriculture['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi16" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $construction['1']; ?>
                    </td>
                </tr>
                <tr class="informacia16">
                    <td>
                        <?php echo $construction['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia16">
                    <td>
                        <?php echo $construction['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/registrirebuli%20avtomobilebis%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi17" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $trading['1']; ?>
                    </td>
                </tr>
                <tr class="informacia17">
                    <td>
                        <?php echo $trading['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia17">
                    <td>
                        <?php echo $trading['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/registrirebuli%20avtomobilebis%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia17">
                    <td>
                        <?php echo $trading['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia17">
                    <td>
                        <?php echo $trading['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia17">
                    <td>
                        <?php echo $trading['6']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia17">
                    <td>
                        <?php echo $trading['7']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia17">
                    <td>
                        <?php echo $trading['8']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia17">
                    <td>
                        <?php echo $trading['9']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia18">
                    <td>
                        <?php echo $hotels['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/registrirebuli%20avtomobilebis%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia18">
                    <td>
                        <?php echo $hotels['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia18">
                    <td>
                        <?php echo $hotels['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/registrirebuli%20avtomobilebis%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia18">
                    <td>
                        <?php echo $hotels['6']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/registrirebuli%20avtomobilebis%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi19" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $transportAndStorage['1']; ?>
                    </td>
                </tr>
                <tr class="informacia19">
                    <td>
                        <?php echo $transportAndStorage['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi20" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $healthCareAndSocialSecurity['1']; ?>
                    </td>
                </tr>
                <tr class="informacia20">
                    <td>
                        <?php echo $healthCareAndSocialSecurity['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia20">
                    <td>
                        <?php echo $healthCareAndSocialSecurity['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia20">
                    <td>
                        <?php echo $healthCareAndSocialSecurity['4']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia20">
                    <td>
                        <?php echo $healthCareAndSocialSecurity['5']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia20">
                    <td>
                        <?php echo $healthCareAndSocialSecurity['6']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi21" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $education['1']; ?>
                    </td>
                </tr>
                <tr class="informacia21">
                    <td>
                        <?php echo $education['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia21">
                    <td>
                        <?php echo $education['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi22" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $culture['1']; ?>
                    </td>
                </tr>
                <tr class="informacia22">
                    <td>
                        <?php echo $culture['2']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia22">
                    <td>
                        <?php echo $culture['3']; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/2/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>




            </tbody>
        </table>
        <div class="map-box">
            <svg id="svg4380" xmlns="http://www.w3.org/2000/svg" viewBox="" version="1.1">

                <g id="layer6" style="transform: scale(9.4);-webkit-transform-origin-x: 856px;-webkit-transform-origin-y: 628px;">

                    <a xlink:href="../imereti.php" class="text-decoration-none">
                        <path id="group6-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 813.12695,562.14648 c 0.47829,0.54773 0.89249,5.5322 2.34571,6.50782 2.1165,1.70548 -0.69782,3.93677 2.70898,4.47851 2.20105,1.5233 -0.58588,6.31596 -2.34961,3.57422 -2.67678,0.48352 -7.04393,0.63891 -10.08008,3.0918 -0.19189,0.30369 -1.76878,2.95781 -3.73047,2.72265 -1.30772,1.64931 -5.16196,0.33091 -5.92773,2.39649 -3.62749,-1.77045 -4.77547,3.0336 -7.96094,0.80078 -2.20841,-0.18668 -5.47808,-3.52949 -6.60937,-1.5918 2.02611,1.83849 -3.73085,3.16416 -0.94922,4.20703 0.82869,2.46527 3.61447,4.27231 7.1914,4.7129 4.029,1.1444 3.26654,-6.65548 6.04102,-1.51172 0.77781,-1.11382 5.01077,-4.05398 5.33398,-1.1211 -2.95837,1.46644 1.03875,4.24327 -0.77148,5.70703 -3.25693,1.30102 1.95293,1.29419 1.24609,3.84766 0.5424,-0.81354 1.12818,3.47574 2.13477,1.1582 0.76287,-1.71805 6.33978,-0.33933 5.86719,1.28711 -1.1343,3.23187 3.95905,1.56172 0.48047,5.7793 -0.10102,2.13289 -0.10645,1.82756 0.64453,3.49219 2.15657,1.03769 5.97972,2.85559 8.62695,1.44922 4.07026,-0.49568 -0.94323,-2.40465 -1.04883,-4.05274 -1.04021,-1.81576 -1.61825,-4.90729 -0.15234,-6.50781 -0.21301,-1.58079 1.97561,-2.26015 1.43555,-3.45703 -3.26248,-2.40062 2.2442,-3.59846 -0.1543,-5.54883 -2.54761,-3.49113 4.19418,-2.02202 1.28125,-4.16602 -0.76565,-3.00904 1.85685,-5.40124 2.61328,-6.82812 0.83209,0.18282 1.20183,-3.86115 0.58789,-5.80664 0.46069,-3.94194 -4.1239,-3.46403 -4.00195,-7.67969 -2.05536,-2.47497 -2.96318,-6.19302 -4.80274,-6.94141 z" id="path1151" />
                        <text id="svgRegions" x="780" y="570">
                        <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Kutaisi' : 'ქუთაისი'; ?>
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
            $query = mysqli_query($link, "select * from `municipalities` where ID = 32");
            $row = mysqli_fetch_array($query);


            ?> <tr>
                <th><?php echo $keyIndicator[1]; ?></th>
            </tr>
            <tbody>
                <tr>
                    <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[2]; ?> "><?php echo $keyIndicator[2]; ?><span class="float-right"><?php echo $row['Area']; ?></span></td>
                </tr>
                <tr>
                    <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[3]; ?>"><?php echo $keyIndicator[3]; ?><span class="float-right"><?php echo $row['NumberOfCT']; ?></span></td>
                </tr>
                <tr>
                    <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[4]; ?>"><?php echo $keyIndicator[4]; ?><span class="float-right"><?php echo $row['Villages']; ?></span></td>
                </tr>
                <tr>
                    <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[5]; ?>"><?php echo $keyIndicator[5]; ?><span class="float-right"><?php echo $row['Population']; ?></span></td>
                </tr>
                <tr>
                    <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[6]; ?>"><?php echo $keyIndicator[6]; ?><span class="float-right"><?php echo $row['LiveBirths']; ?></span></td>
                </tr>
                <tr>
                    <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[7]; ?>"><?php echo $keyIndicator[7]; ?><span class="float-right"><?php echo $row['GeneralBirthRate']; ?></span></td>
                </tr>
                <tr>
                    <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[8]; ?>"><?php echo $keyIndicator[8]; ?><span class="float-right"><?php echo $row['Dead']; ?></span></td>
                </tr>
                <tr>
                    <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[9]; ?>"><?php echo $keyIndicator[9]; ?><span class="float-right"><?php echo $row['GeneralMortalityRate']; ?></span> </td>
                </tr>
                <tr>
                    <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[10]; ?>"><?php echo $keyIndicator[10]; ?><span class="float-right"><?php echo $row['Employees']; ?></span> </td>
                </tr>
                <tr>
                    <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[11]; ?>"><?php echo $keyIndicator[11]; ?><span class="float-right"><?php echo $row['AVGSalary']; ?></span> </td>
                </tr>
                <tr>
                    <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[12]; ?>"><?php echo $keyIndicator[12]; ?><span class="float-right"><?php echo $row['RegEcSub']; ?></span> </td>
                </tr>
                <tr>
                    <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[13]; ?>"><?php echo $keyIndicator[13]; ?><span class="float-right"><?php echo $row['ActEcSub']; ?></span> </td>
                </tr>
            </tbody>
            <?php

            ?>
        </table>




        <footer>
            <div>
                <div>
                    <div id="fb-root"></div>
                    <script>
                        (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    </script>
                    <div class="fb-share-button" data-href="http://geostat.ge/regions/" data-layout="button" data-mobile-iframe="false">
                        <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse"></a>
                    </div>
                    <style media="screen" type="text/css">
                        .fb_iframe_widget span {
                            vertical-align: baseline !important;
                            /* width: 27px !important; */
                            overflow: hidden !important;
                            border-radius: 3px;
                        }

                        #twitter-widget-0 {
                            /* width: 23px !important; */
                            overflow: hidden !important;
                            border-radius: 3px;
                        }
                    </style>
                    <a class="twitter-share-button" href="https://twitter.com/intent/tweet"></a>
                    <script>
                        window.twttr = (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0],
                                t = window.twttr || {};
                            if (d.getElementById(id)) return t;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "https://platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js, fjs);
                            t._e = [];
                            t.ready = function(f) {
                                t._e.push(f);
                            };
                            return t;
                        }(document, "script", "twitter-wjs"));
                    </script>
                </div>
            </div>
            <span class="tr" key="COPYRIGHT1"><?php echo $lang['COPYRIGHT1'] ?></span>
            <br>
            <span class="tr" key="COPYRIGHT2"><?php echo $lang['COPYRIGHT2'] ?></span><br>

            <span class="tr" key="COPYRIGHT3"><a href="https://www.geostat.ge/ka/page/monacemta-gamoyenebis-pirobebi"><?php echo $lang['COPYRIGHT3'] ?></a></span>
        </footer>

        <script src="../script.js"></script>
        <script type="text/javascript" src="../lang.js"></script>
</body>

</html>