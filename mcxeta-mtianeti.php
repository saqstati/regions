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
    <meta property="og:title" content="<?php echo $lang['mtskhetamtianetititlename'] ?>" />
    <meta property="og:description" content="<?php echo $lang['mtskhetamtianetititlename'] ?>" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <title class="tr" Key="PAGE_TITLE"><?php echo $lang['mtskhetamtianetititlename'] ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="samegrelo.css">
    <link rel="stylesheet" type="text/css" href="mcxeta-mtianeti/mcxeta-mtianeti.css">
    <link rel="stylesheet" type="text/css" href="custom.css">
    <link rel="stylesheet" href="mediastyles.css">
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
                "1600-900-optimized/2.jpg",
                "1600-900-optimized/3.jpg",
                "1600-900-optimized/4.jpg",
                "1600-900-optimized/5.jpg",
                "1600-900-optimized/6.jpg",
                "1600-900-optimized/7.jpg",
                "1600-900-optimized/8.jpg",
                "1600-900-optimized/9.jpg",
                "1600-900-optimized/10.jpg",
                "1600-900-optimized/11.jpg",
                "1600-900-optimized/12.jpg",
                "1600-900-optimized/15.jpg"
            )
        </script>
    </div>
    <div id="background-main" class="background-image"></div>
    <div class="main-container">
        <div id="brand-logo">
            <a href="/regions/index.php" id="brand-logo-link" class=""><img src="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'images/logo_transparency_eng.png' : 'images/logo_transparency_geo.png'; ?>" /></a>
        </div>
        <header class="header1">
            <h1>
                <p id="pagetitlename" class="tr" Key="REGION14"><?php echo $lang['mtskhetamtianetititlename'] ?></p>
            </h1>
        </header>
        <div id="languages">
            <a href="mcxeta-mtianeti.php?lang=ka" id="ka" class="lang"><img src="images/ka.png" /></a>
            <a href="mcxeta-mtianeti.php?lang=en" id="en" class="lang"><img src="images/en.png" /></a>
        </div>
        <div id="recommendation">
            <span class="tr" Key="RECTEXT1">
                <?php echo $lang['RECTEXT1'] ?>
            </span>
            <br>
            <span class="tr" Key="RECTEXT2">
                <?php echo $lang['RECTEXT2'] ?>
            </span>
            <a href="http://www.google.com/chrome/"><img src="images/chrome-100.png" /></a>
            <a href="https://www.mozilla.org/en-US/firefox/new/"><img src="images/firefox-100.png" /></a>
            <a href="http://www.opera.com/"><img src="images/opera-100.png" /></a>
        </div>
        <div class="display-flex">
            <a class=" btn textbox-left-home back-btn" href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'index.php#' : 'index.php?lang=ka'; ?>"> <span class="tr" Key="backBtn"><?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Back' : 'უკან დაბრუნება'; ?></span></a>

            <a class="btn textbox-right-home regions-btn" href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'listEN.php' : 'list.php'; ?>"> <span class="tr" Key="regionsBtn"><?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Compare Regions' : 'რეგიონების შედარება'; ?></span></a>

            <a class="btn textbox-right-home regions-mun regions-btn" href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'muncomEN.php?lang=en' : 'muncom.php?lang=ka'; ?>"> <span class="tr" Key="regionsBtn"><?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Compare Municipaliteties' : 'მუნიციპალიტეტების შედარება'; ?></span></a>
        </div>

        <table class="machveneblebi-left">
            <?php
            include('connection.php');
            $tableLeft = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'regional_statistics_en' : 'regional_statistics';
            $query = mysqli_query($link, "select * from " . $tableLeft);
            while ($row = mysqli_fetch_array($query)) {
                $basicInformation[$row['ID']] = $row['basicInformation'];
                $population[$row['ID']] = $row['population'];
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
                $energy[$row['ID']] = $row['energy'];
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
                    <th id="dziritadi1" onclick="GetIdChange()" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $basicInformation[1]; ?> <span class="float-right"><i id="classchange" class="dropdown_img_up"></i></span>
                    </th>
                </tr>
                <tr class="informacia1">
                    <td>
                        <?php echo $basicInformation[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/dziritadi%20informacia/regionis%20fartobi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia1">
                    <td>
                        <?php echo $basicInformation[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/dziritadi%20informacia/municipalitetebis,%20qalaqebis%20da%20soflebis%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $population[1]; ?> <span class="float-right"><a href="http://localhost/regions/regions/11/mosakhleoba/mosakhleoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi2" onclick="GetIdChange()" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $demography[1]; ?></td>
                </tr>
                <tr class="informacia2">
                    <td>
                        <?php echo $demography[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/demografia/mokvdaoba_asaki_sqesi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia2">
                    <td>
                        <?php echo $demography[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/demografia/gardacvalebis%20mizezebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia2">
                    <td>
                        <?php echo $demography[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/demografia/dziritadi%20demografiuli%20machveneblebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $gdbAndValueAdded[1]; ?><span class="float-right"><a href="http://localhost/regions/regions/11/mshp%20da%20damatebuli%20girebuleba/mshp%20da%20damatebuli%20girebuleba.xls"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $foreignDirectInvestment[1]; ?><span class="float-right"><a href="http://localhost/regions/regions/11/pirdapiri%20uckhouri%20investiciebi/pirdapiri%20uckhouri%20investiciebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi3" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $employmentAndSalaries[1]; ?>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $employmentAndSalaries[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/dasaqmeba_umushevroba/dasaqmeba_umushevroba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $employmentAndSalaries[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/dasaqmeba_umushevroba/khelfasi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi4" onclick="GetIdChange()" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $pricesAndInflation[1]; ?>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $pricesAndInflation[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/fasebi/samomxmareblo%20fasebis%20indeqsebi%2012%20tvis%20sashualo%20wina%2012%20Tvis%20saSualosTan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $pricesAndInflation[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20tvestan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $pricesAndInflation[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20wlis%20shesabamis%20TvesTan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi5" onclick="GetIdChange()" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $standartOfLiving[1]; ?>
                    </td>
                </tr>
                <tr class="informacia5">
                    <td>
                        <?php echo $standartOfLiving[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/ckhovrebis%20done/shemosavlebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia5">
                    <td>
                        <?php echo $standartOfLiving[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/ckhovrebis%20done/kharjebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi6" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $businessSector[1]; ?>
                    </td>
                </tr>
                <tr class="informacia6">
                    <td>
                        <?php echo $businessSector[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/biznes%20seqtori/saqmianobis%20mikhedvit_nace%20rev.2.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia6">
                    <td>
                        <?php echo $businessSector[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/biznes%20seqtori/sakutrebis%20formis%20mikhedvit.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia6">
                    <td><?php echo $businessSector[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/biznes%20seqtori/zomis%20mikhedvit.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><a target="_blank" href="http://br.geostat.ge/register_geo/"><?php echo $businessRegister[1]; ?></a> <span class="float-right"></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi7" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $agriculture[1]; ?>
                    </td>
                </tr>
                <tr class="informacia7">
                    <td>
                        <?php echo $agriculture[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/soflis%20meurneoba/1.%20erttsliani%20kulturebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia7">
                    <td>
                        <?php echo $agriculture[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/soflis%20meurneoba/2.%20mravaltslovani%20kulturebis%20tsarmoeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia7">
                    <td>
                        <?php echo $agriculture[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/soflis%20meurneoba/3.%20pirutkvis%20suladoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia7">
                    <td>
                        <?php echo $agriculture[5]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/soflis%20meurneoba/4.%20metskhoveleobis%20produktsiis%20tsarmoeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $industry[1]; ?><span class="float-right"><a href="http://localhost/regions/regions/11/mretsveloba/mretsveloba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi8" onclick="GetIdChange()" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $construction[1]; ?>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $construction[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/mshenebloba/dasrulebuli%20msheneblobebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $construction[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/mshenebloba/mshenebloba_nebartvebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $construction[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/mshenebloba/mshenebloba_dziritadi%20machveneblebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $energy[1]; ?><span class="float-right"></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $trading[1]; ?><span class="float-right"><a href="http://localhost/regions/regions/11/vachroba/vachroba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi9" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $hotelsAndRestaurants[1]; ?>
                    </td>
                </tr>
                <tr class="informacia9">
                    <td>
                        <?php echo $hotelsAndRestaurants[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/sastumroebi%20da%20restornebi/sastumroebi%20da%20restornebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia9">
                    <td>
                        <?php echo $hotelsAndRestaurants[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/sastumroebi%20da%20restornebi/stumarta%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi10" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $transportAndStorage[1]; ?>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $transportAndStorage[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $transportAndStorage[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/transporti%20da%20kavshirgabmuloba/registrirebuli%20avtomobilebis%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $transportAndStorage[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi11" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""> <?php echo $tourism[1]; ?><span class="float-right"><i id="classchange" class="dropdown_img_up"></i>
                    </td>
                </tr>
                <tr class="informacia11">
                    <td>
                        <?php echo $tourism[2]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/turizmi/ganawileba%20sacxovrebeli%20adgilis%20mixedvit.xls"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia11">
                    <td>
                        <?php echo $tourism[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/11/turizmi/ganawileba%20monaxulebuli%20regionebit.xls"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $legalStatistics[1]; ?><span class="float-right"><a href="http://localhost/regions/regions/11/samartlebrivi%20statistika/samartlebrivi%20statistika.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $healthCareAndSocialSecurity[1]; ?><span class="float-right"><a href="http://localhost/regions/regions/11/jandacva%20da%20socialuri%20uzrunvelkofa/jandacva%20da%20socialuri%20uzrunvelkofa.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $education[1]; ?><span class="float-right"><a href="http://localhost/regions/regions/11/ganatleba/ganatleba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $culture[1]; ?><span class="float-right"><a href="http://localhost/regions/regions/11/kultura/kultura.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $environmentalProtection[1]; ?><span class="float-right"><a href="http://localhost/regions/regions/11/garemos%20dacva/garemos%20dacva.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $infrastructure[1]; ?><span class="float-right"><a href="http://localhost/regions/regions/11/infrastruqtura/infrastruqtura.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>




            </tbody>
        </table>

        <div class="map-box">
            <svg id="svg4380" xmlns="http://www.w3.org/2000/svg" viewBox="" version="1.1">

                <g id="layer5" class="layer11">
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'mcxeta-mtianeti/mcxeta.php?lang=en' : 'mcxeta-mtianeti/mcxeta.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group5-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1296.9,665.6 c 2.5851,1.597 8.0613,2.2898 11.599,1.2032 0.7148,2.2122 3.3565,1.6451 3.3068,4.3459 3.4878,-0.044 6.1371,0.61578 8.3894,2.4005 2.7197,-0.49359 6.0418,-1.0995 7.9594,1.0509 2.6609,-1.3857 4.5866,-1.2275 8.3655,-0.89281 3.009,2.8999 4.5126,-4.388 5.2916,-1.2504 1.3627,0.34439 4.4612,-2.1978 6.4034,-2.6582 6.0659,0.2252 14.632,-1.9354 14.15,4.957 0.122,2.8659 2.013,6.4441 1.9923,9.7934 -0.133,3.231 -1.7248,6.4533 -2.5898,9.1502 1.0107,3.2732 3.0115,0.99837 5.0471,2.3068 0.7217,-1.5396 4.2866,-0.65772 4.6993,-3.3555 -1.4198,-1.413 0.7706,-2.992 -1.6545,-3.8928 -0.9533,-0.3896 -4.4028,-2.9781 -0.6133,-2.5998 3.2839,0.27778 1.556,-3.5004 5.0181,-1.0508 1.7503,0.57496 2.368,1.5126 4.2919,1.8967 1.881,1.125 3.4655,-1.0725 6.0106,-0.54688 1.0774,-1.3455 1.035,-1.0836 3.1465,-1.9942 1.8997,0.81838 4.7831,-3.9087 6.8883,0.60849 2.1283,3.2281 5.8123,5.4346 8.5125,8.6005 0.9825,3.9488 4.7412,6.3466 5.7499,10.098 4.6159,4.1537 11.646,0.75197 16.726,3.0898 5.3376,1.1582 10.722,0.21964 15.769,2.6992 5.7094,0.0926 1.0701,6.9454 4.61,9.0591 1.5311,3.252 0.1155,7.14 -3.1141,5.2304 -3.0968,0.0211 -3.5958,-2.1537 -7.198,-1.5002 -4.5897,-0.86383 -9.3484,-2.7081 -13.754,-2.6993 -0.7816,2.1549 -3.4451,2.2459 -5.2936,4.2581 -2.4174,1.4637 -5.4809,2.3917 -5.7097,5.1916 -1.6188,1.5198 -4.7233,0.26421 -6.0015,-1.3495 -1.0345,-0.2791 -4.2247,-1.3886 -5.5127,0.59975 -1.6178,1.5734 -1.9127,4.4452 1.5574,4.0003 1.7798,1.5787 2.1702,0.5746 3.2422,2.6994 1.4912,1.319 4.3916,3.1509 2.4009,5.7507 -0.1387,2.5783 -1.7409,2.1217 -3.0009,1.0508 0.1614,-2.876 -2.0262,-4.5314 -4.6599,-4.8008 -1.7743,-1.6432 -6.6437,-1.0769 -8.0013,-3.1524 1.0806,-2.8498 -4.4465,0.63344 -5.2151,-1.6465 -1.9245,-1.141 -4.6079,1.4021 -5.5256,-2.3555 -7.4704,-3.5866 -3.3076,4.0484 -9.6319,2.0547 -1.7113,-2.1585 -7.0429,-4.9433 -9.3051,-0.9675 -0.9143,2.2011 -0.8693,5.6333 1.3483,5.7677 -2.5216,-0.71034 -4.0343,-0.0586 -5.1148,1.6505 -2.5294,0.92771 -5.1385,0.91949 -6.0703,-2.1815 -2.8114,1.1403 -5.3107,-0.21873 -7.5693,0.53125 2.9499,3.7375 -2.2512,3.6419 -2.8524,6.4126 -2.963,1.574 -5.5701,4.6644 -5.6762,7.6387 1.635,0.39758 2.6275,2.0638 3.4189,2.7486 -0.1422,2.0704 2.5133,1.2606 2.1467,3.6019 -1.4039,1.3018 2.2033,0.84656 2.701,2.9386 0.03,2.7207 0.6107,3.5769 1.7564,4.8601 -1.382,0.69896 -7.9568,4.6587 -3.1489,6.133 0.1261,2.2437 4.9646,3.6167 1.8522,6.1174 0.7536,0.13202 -2.735,1.9761 -3.8427,1.6995 -0.8633,-0.78869 -1.9778,2.4312 -3.6998,3.0001 -1.1275,1.2853 -2.2901,2.0819 -3.7502,2.7012 -1.1661,1.0067 -4.0719,1.2183 -4.4007,0.89843 -4.4967,0.72357 -7.0347,-0.87293 -8.7025,-4.049 -2.1692,-0.65528 3.0255,-2.3816 0.4512,-4.0939 0.044,-1.0423 -2.9616,-2.3451 -3.7502,-3.707 -2.2135,-0.88612 -0.362,-4.5949 -3.5569,-4.1991 -1.472,1.769 -3.8508,-0.0689 -4.0823,-2.2502 -1.3207,-0.4326 -1.0192,-2.5455 -2.5515,-2.1992 2.6632,-1.8357 0.055,-5.5452 -3.0841,-4.6998 -2.8196,-0.7397 -6.9689,-2.3048 -10.494,-1.2013 -3.3559,-1.7078 -4.6777,3.1714 -7.3556,0.15023 -1.5463,-1.6107 -2.5655,-4.0812 -3.1426,-6.3033 -2.6822,-0.86006 -0.2321,-3.6265 0.4476,-5.1471 2.4458,0.32374 1.9032,-3.7482 4.41,-4.2502 -2.1351,-2.963 3.6003,-2.7811 3.234,-5.3503 -0.6346,-2.4158 -0.2614,-5.5526 1.5016,-7.2013 2.0687,-0.42227 2.8882,-3.3741 1.0516,-4.4494 -1.4995,-1.5257 0.6574,-3.2654 -1.3424,-4.9084 -2.2224,2.5075 -5.4257,-2.0803 -0.6982,-0.69339 2.0225,2.6071 2.1846,-0.68833 4.1552,-3.2987 0.6449,-2.8546 3.069,-0.62045 3.9392,0.30107 2.4834,0.0659 3.2389,-1.6562 4.0432,1.0567 -0.036,2.9151 4.4025,-0.63504 3.6265,1.8985 1.2703,-2.0296 2.0498,-2.8211 3.099,-4.0082 0.2397,-2.019 2.5991,-3.6106 0.7573,-6.1002 0.2893,-1.3527 0.2946,-4.4938 1.4585,-5.2992 -1.8405,-1.9918 -3.1247,-3.0945 -3.7365,-5.4495 -0.1965,0.45315 -0.3923,-3.0014 -1.6258,-4.1017 -0.7269,-3.0143 -3.3249,-3.6953 -3.6023,-6.9006 -1.4612,-2.9562 -6.4056,-2.5428 -6.3054,-6.8986 0.1279,-2.4502 -0.5514,-4.784 -2.4044,-5.8576 -0.2146,-2.8591 -2.4463,-3.4705 -1.5,-5.543 -0.6859,-2.0701 -1.9406,-2.9439 0.6816,-4.25 1.2391,-0.25202 2.7314,-0.2592 3.6339,-0.89669 z" id="path1153" />
                        <text id="svgRegions" x="1327" y="715">
                            <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Mtskheta' : 'მცხეთა'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'mcxeta-mtianeti/tianeti.php?lang=en' : 'mcxeta-mtianeti/tianeti.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group5-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1501.7,513.82 c 4.9293,4.889 6.1482,13.221 4.6837,19.76 -3.4077,5.0184 -11.439,4.8838 -15.59,6.385 -3.3738,0.15129 -1.945,3.9938 -5.8461,3.3575 -0.9337,2.4109 -0.3515,4.5342 -0.7972,5.9529 4.5865,3.1234 -4.6511,0.51032 -4.3527,4.2812 -2.2689,-2.4728 -4.6401,-1.3458 -6.1924,1.4026 -3.2094,1.8738 2.2804,8.0598 -2.5022,9.3644 -3.8029,3.027 -3.0957,7.411 -6.3282,10.651 -0.8901,4.3941 -1.169,7.9843 -1.8602,11.556 0.01,4.7437 -0.9604,9.548 -3.7098,13.815 -2.0437,3.5703 2.5602,11.836 -2.81,11.619 -4.236,1.7194 -8.7652,4.6803 -7.8404,9.9843 4.1244,1.1264 11.987,4.6428 7.6002,9.7453 -3.594,3.4162 -6.1164,8.3677 -1.8405,12.508 1.2514,5.5815 6.4852,7.4389 8.8903,12.336 -0.5551,4.1232 -2.2408,7.1332 -5.0469,9.5446 -3.0829,3.417 -4.1334,7.3326 0.177,9.469 1.7347,3.5982 4.5465,12.132 10.389,8.6993 5.3472,-5.8364 8.5991,4.7063 13.121,3.2538 9.0643,-3.2136 2.2537,4.4711 10.602,5.337 4.2436,4.1196 0.7964,8.7479 -4.0654,5.374 -2.5762,2.0425 -4.3725,8.0372 -7.1702,6.8965 -1.6766,-0.78561 -4.4111,1.0555 -3.8676,2.5566 -2.2035,-4.9231 -6.7093,-0.71705 -8.2047,-5.0175 -4.1688,-0.80927 -4.499,-6.4834 -9.3863,-4.6194 -2.7802,4.4066 2.7968,3.0364 4.1181,6.7054 -7.9239,3.0918 6.4081,7.2109 -1.2853,8.7859 -2.5393,1.9747 -4.5979,1.7648 -7.2913,1.0384 -1.6737,1.9495 -3.1078,4.6702 -3.0786,9.248 -0.7089,2.0474 -3.309,-0.0618 -4.6205,-0.23044 0.8922,-4.2355 -2.5579,-6.8046 -2.2011,-10.678 1.827,-5.3629 -6.5158,-3.7237 -9.4344,-6.289 -7.7476,0.92798 -14.475,-3.0058 -22.22,-1.5 -4.0468,-0.31625 -4.8802,-3.542 -6.3399,-6.3007 -3.421,-3.1198 -3.1798,-7.7794 -7.7109,-9.6602 -1.7719,-3.3027 -8.3449,-5.5017 -4.295,-9.8105 -1.2377,-5.3304 0.888,-10.188 0.4492,-15.711 2.3742,-2.1605 -2.531,-6.5449 1.6435,-7.166 3.9736,0.22134 12.988,0.0391 10.786,-6.209 -2.8506,-4.0573 -2.1431,-9.2983 -3.2122,-14.018 -0.3125,-4.0195 3.1521,-7.9524 -2.0117,-8.976 -0.5378,-2.142 -0.6226,-4.1823 -3.903,-3.4492 -2.4047,-0.58104 -0.9337,-5.6557 -3.3814,-7.4435 -3.9014,-3.1337 0.019,-7.9424 -0.9592,-11.354 3.6537,-1.2559 4.0675,-6.1794 6.3988,-8.6388 2.935,1.2874 2.978,-5.2487 -0.1939,-4.0081 -0.8424,-2.7775 -5.4704,-2.0365 -4.3117,-6.2544 -0.057,-4.4284 1.1625,-8.1943 5.7089,-9.0006 3.7464,-1.6157 5.5161,-4.7647 7.7088,-8.251 1.5204,-3.7992 3.8484,-7.9165 6.532,-11.783 1.4762,-1.6705 0.037,-4.8161 1.9393,-5.8226 2.5151,4.9918 10.48,3.2815 10.924,-2.3558 1.0028,-5.1244 5.3903,-9.0734 7.8359,-13.161 -0.3186,-4.555 5.3139,-4.9647 7.051,-9.1975 0.1537,-6.8139 7.2374,-1.9186 10.504,0.0332 7.5215,-2.1865 -2.2217,6.4227 3.5657,7.0809 3.9413,-1.0121 5.4754,-4.4556 8.5807,-6.3895 4.9374,-1.7157 9.9873,-2.5265 14.867,-4.0756 4.8873,-0.65956 9.2354,-2.1647 12.536,-5.542 2.3779,-1.3035 5.3113,-1.8935 7.248,-3.8299 z" id="path1151" />
                        <text id="svgRegions" x="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '1412' : '1397'; ?>" y="665">
                            <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Tianeti' : 'თიანეთი'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'mcxeta-mtianeti/dusheti.php?lang=en' : 'mcxeta-mtianeti/dusheti.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group5-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1419,370.86 c 3.7254,1.02 8.5217,-0.15561 11.299,2.8224 0.1894,3.5599 4.4245,4.6249 5.0452,8.2246 1.9072,2.1568 4.3465,3.9882 6.6222,5.0137 1.9217,1.5826 3.8591,3.1082 3.7112,5.8086 2.791,3.1238 6.7581,-0.30898 9.8338,-0.50779 2.0067,-2.3244 2.4384,-4.826 5.7015,-5.8496 2.4477,2.7556 7.0881,3.3868 10.291,1.4395 3.4983,-1.0188 7.1748,-0.10891 10.361,0.17968 1.1545,3.6811 1.9234,7.2232 5.3999,9.7266 3.2849,2.6586 6.2821,7.2017 11.245,8.207 1.8773,4.2189 6.8708,7.0801 7.9184,12.178 2.8111,2.462 2.6955,6.7418 4.3806,9.7578 2.2467,-0.18955 6.4163,-1.4121 6.9021,0.49206 1.7261,2.6648 -1.6611,6.2536 1.8914,6.6541 2.161,2.1406 1.9452,6.2909 5.63,7.205 -2.228,3.5248 -4.5983,7.8926 -8.2721,8.4988 -0.016,4.0528 -1.9623,6.979 -2.8499,10.972 0.5382,5.0442 -0.2345,10.251 -0.6289,14.904 4.6314,4.1177 -0.5462,11.766 -5.8891,11.621 -2.2412,3.7572 -5.3502,7.0781 -7.7209,10.145 -1.7249,4.9333 3.5207,8.5255 1.4886,13.424 -1.1742,4.8456 -9.2085,3.2786 -10.889,8.1193 -6.0393,1.7778 -12.163,3.1484 -18.219,4.9121 -4.93,-0.25169 -7.9765,3.502 -10.995,6.235 -5.0584,3.5532 -3.1687,-1.3354 -1.87,-4.5202 -4.1126,-1.1832 -8.3219,-3.479 -12.997,-4.8489 -2.5803,1.6944 -4.3075,7.141 -7.1986,9.4778 -4.3715,0.52501 -1.5953,6.203 -5.5489,7.8382 -3.2348,3.8408 -4.499,8.5512 -6.645,13.081 -2.9378,2.5538 -6.5074,0.2328 -8.5682,-1.9513 -3.1455,1.5217 -0.8138,6.2807 -3.762,8.1746 -3.0515,4.1535 -4.0787,7.9424 -6.6594,12.261 -2.0131,2.5027 -4.416,5.8933 -8.5017,6.4479 -3.9794,2.563 -4.2031,8.1136 -3.2526,12.401 0.6274,2.5026 3.5409,1.3015 4.5058,4.0591 2.5432,-0.86364 1.647,2.6732 -0.4312,2.3791 -2.5456,2.1494 -2.1759,7.5968 -6.6622,8.1701 0.9917,3.4828 -1.2621,7.2148 -0.5506,10.451 3.4675,2.4581 2.7011,7.8549 5.0929,10.5 3.7921,-1.1335 2.5889,1.3038 4.2995,3.1524 5.0884,0.87966 0.2969,5.966 1.5294,9.6441 1.5682,4.5929 0.5345,9.7579 3.7235,13.655 -0.3434,5.7852 -8.2697,2.7772 -11.491,4.4355 -2.7988,2.7136 -0.2326,7.5245 -1.4047,11.422 -0.3915,3.9925 -1.5019,7.7136 -0.4492,11.811 -1.4056,4.0334 -1.9851,2.1912 -4.5007,3.377 -1.698,1.3777 -2.6617,-0.0827 -4.2038,1.6505 -1.4667,1.1651 -3.5431,1.8208 -4.6435,1.3496 -2.42,2.0268 -4.2593,-1.7464 -7.3982,-1.7989 -2.0377,-0.74271 -4.0243,-2.6411 -3.1076,1.2987 -3.9011,-0.84098 -5.5911,2.1494 -2.6967,4.051 1.1865,0.84791 2.6357,1.2053 2.1026,2.5937 0.1127,2.6438 -4.5608,3.0269 -6.5482,2.5468 -1.4608,-1.559 2.8294,-5.9007 1.649,-8.143 1.3056,-3.7338 -1.5406,-8.3149 -1.643,-11.664 0.5932,-4.9835 -3.0795,-5.9382 -8.1306,-5.613 -3.8168,0.58868 -9.3395,-1.553 -10.419,1.7206 -2.2303,0.79127 -4.6457,-1.34 -5.6931,1.7989 -2.0732,2.1423 -6.2776,-0.73649 -8.8904,0.0334 -1.6882,1.861 -2.7222,-0.30307 -5.2628,-0.0334 -0.8303,-2.7053 -3.8617,2.2526 -5.5926,-0.65612 -0.7858,-1.4732 -7.0178,-0.0372 -6.6954,-2.9435 -2.295,-1.0977 -3.2476,-3.8231 -7.0001,-2.549 -1.8577,-7e-5 -4.8677,0.18291 -6.6441,-1.0508 -2.6975,-1.509 -5.5618,1.4084 -7.4355,-0.0506 1.3376,-2.8996 0.069,-7.5269 -1.1973,-10 -0.1972,-2.5692 -2.3933,-3.162 -2.8242,-5.6956 -2.1541,-2.4743 -1.5348,-4.8896 -3.0475,-7.6949 2.0895,-0.95424 0.6264,-3.3332 1.9856,-5.094 -0.5429,-4.469 0.2646,-6.9384 4.7912,-6.9434 2.0951,-2.2498 5.3446,0.86744 6.7567,-2.0624 -0.3575,-2.9592 5.951,-0.28083 3.74,-3.7501 2.0985,0.11253 7.0076,-1.5939 2.3986,-2.6604 -3.2222,-3.9133 6.445,-0.24124 4.051,-4.707 1.135,-1.7417 -0.5187,-4.5302 -1.1181,-6.8847 -1.7629,-2.8524 4.4597,0.31597 4.7131,-2.8438 4.8828,-2.9778 -3.9207,-5.9527 1.5,-8.8496 0.7794,-3.5143 2.3492,-6.8506 7.0371,-6.4532 5.1568,0.006 6.249,-4.5456 3.5703,-8.3555 -0.362,-3.6541 -1.0857,-7.5411 0.3398,-11.252 1.377,-4.3585 -0.9759,-9.6481 0.4493,-14.328 -1.5827,-5.5096 -5.9489,-7.939 -6.1661,-13.344 -0.903,-3.6899 -8.7934,-8.1238 -2.9628,-11.268 2.0201,-2.0102 3.3968,-5.2082 5.2292,-7.5352 3.1213,-2.84 0.9732,-9.5798 -3.9587,-9.0019 -4.679,-2.8058 -9.7541,-0.69034 -13.707,-4.9082 -4.0674,-2.8316 -8.416,-4.2343 -11.441,-7.9707 -4.1719,-0.0917 -6.5638,-1.5191 -8.2382,-5.1406 -1.9377,-1.7449 -5.3604,-5.6596 -0.522,-5.5976 3.7665,-0.40665 3.6998,-1.5413 4.7892,-4.0509 2.2397,-2.5756 -1.3593,-4.4735 -1.3579,-6.7483 2.1283,-0.22068 2.7254,-2.5323 0.8969,-3.6017 1.2888,-1.6151 -0.1445,-3.9088 -1.8462,-4.7504 0.1357,-2.6923 -0.079,-7.2522 1.6445,-9.1387 3.1579,1.5049 4.723,-2.0086 7.584,-0.54098 1.9834,-4.1265 7.768,-3.8071 10.658,-3.6524 3.5896,0.77083 3.3745,3.6775 3.9007,6.084 3.135,1.5876 3.7257,-0.60316 6.6803,-1.5 3.145,0.79456 3.2373,4.4193 5.7215,5.6992 2.9457,0.008 6.2582,-0.60931 8.2823,1.7988 2.69,1.7488 3.44,-2.7956 4.449,-4.8163 0.4619,-3.0509 2.9491,-4.7135 5.3992,-6.125 0.164,-2.6958 2.6687,2.9099 4.6012,2.754 3.5599,-2.5053 5.5834,5.7739 6.1951,1.7382 2.0999,-1.2774 3.8202,-5.1594 5.2425,-7.422 2.8013,2.62 4.371,0.79262 7.8492,1.422 3.6636,0.75484 6.8494,-3.9629 10.154,-4.3986 3.4314,-1.5446 1.6824,-5.1648 5.8965,-5.8399 6.7028,-1.5456 5.9888,-10.172 11.43,-13.508 3.4207,-2.82 5.2045,-3.8415 1.5823,-7.9414 -0.7986,-3.173 -3.8924,-5.9111 -6.2956,-6.9004 0.3769,-2.5927 -2.9961,-6.8374 0.5613,-8.8888 0.5139,-3.8543 2.2215,-7.8495 2.114,-11.562 2.4899,0.85473 3.5052,0.33622 5.6914,-1.0468 0.521,-3.6637 5.1779,-5.6723 3.354,-9.4687 -2.0922,-2.2191 2.6264,-4.1114 0.7499,-7.2034 -1.5783,-3.7841 3.4803,-5.0332 3.6196,-8.416 0.7668,-3.4004 5.0923,-2.6916 7.7321,-3.412 3.0833,1.7467 5.3603,-0.74246 8.6787,-0.36411 z" id="path1149" />
                        <text id="svgRegions" x="1337" y="555">
                            <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Dusheti' : 'დუშეთი'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'mcxeta-mtianeti/yazbegi.php?lang=en' : 'mcxeta-mtianeti/yazbegi.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group5-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1306.2,364.6 c 2.5717,4.3147 7.3485,11.054 12.853,6.865 7.6095,0.0176 16.558,3.5994 22.966,-2.1406 2.8637,-2.4237 3.1586,4.5899 6.2504,4.3808 5.2785,-1.606 5.7862,6.5828 11.289,5.7092 1.8781,2.5882 5.726,5.6682 1.8122,8.2695 -0.9026,5.0407 1.9577,8.689 3.5701,13.039 -2.1733,3.5113 3.2667,5.7953 2.0099,9.6994 -0.011,3.8962 4.0588,3.3991 5.6955,6.3868 2.1519,3.5904 4.4453,9.2732 9.7364,6.9961 2.8776,1.1785 5.4647,-2.7847 7.0953,0.80078 2.1327,2.1581 3.0848,5.5886 4.6345,8.0703 -3.6141,0.63933 -4.57,4.7374 -7.5372,6.4043 -0.9472,3.4686 -2.6914,7.3366 -5.88,9.3827 -5.1123,-0.01 -4.0335,4.23 -7.3574,6.0313 -3.1517,0.19345 -6.2486,5.5765 -9.9634,3.961 -2.7068,0.42438 -4.961,1.0106 -7.4588,-1.1816 -2.3678,1.9438 -3.8526,7.3853 -6.5961,7.8008 0.2359,-4.2822 -4.6647,-0.1984 -6.566,-3.2403 -1.6531,-2.9031 -3.4924,-3.49 -5.0787,-0.32427 -4.2222,1.6664 -3.699,7.1664 -6.6301,10.049 -2.6889,-1.7939 -4.5995,-3.0503 -7.4072,-1.9452 -2.6856,0.576 -3.1455,-2.3891 -4.2996,-4.3495 -2.1629,-1.1497 -4.742,-2.313 -7.0059,0.29893 -3.8624,0.86236 -1.1225,-5.3879 -4.6767,-5.4008 -2.8137,-1.923 -6.3633,-0.90451 -9.8678,-0.44928 -2.5236,1.4646 -3.5192,4.4913 -6.704,2.5507 -1.2968,3.8975 -6.2168,-1.7535 -5.5901,3.7188 -2.0457,1.7371 -0.021,5.1219 -1.2638,7.131 0.6658,1.8396 1.8321,3.0844 2.3129,4.1488 -1.5234,2.4182 2.5528,2.6982 -1.0467,3.6018 -1.6231,3.1402 2.124,4.1518 1.793,6.5998 -1.5615,2.1941 -1.9733,3.7606 -4.3597,4.1993 -3.4159,2.1291 -5.1049,-0.38561 -5.7644,-3.8574 -0.3015,-4.1528 -5.5218,-4.5679 -8.3305,-4.4297 -1.8608,-1.9133 -3.5718,0.0747 -5.5371,-1.1602 -2.854,-0.50228 -3.8284,3.9272 -6.5452,0.45703 -0.6989,-6.8882 -7.7392,-0.50483 -9.5977,-4.7754 -2.408,-2.1791 -6.3718,-6.8742 -1.852,-8.7619 2.5764,-3.4578 13.156,0.43585 9.4864,-5.918 -3.1142,-2.2884 -3.5829,-6.1287 -7.9702,-5.3066 -0.127,-1.889 -0.014,-7.0115 -1.9544,-8.5449 -4.7102,-1.3071 -9.5026,-2.8547 -9.6033,-8.5722 -0.1546,-4.5103 -2.8543,-6.2566 -6.0488,-10.238 -3.685,-0.67399 -5.386,-6.4498 -8.5976,-2 -2.9842,4.3163 -3.8413,2.3463 -5.6877,-2.0858 -2.1002,-1.1763 -4.5789,-0.5136 -2.3113,-4.4063 2.324,-3.5415 -0.7864,-8.1021 1.7734,-10.818 2.8149,-3.4981 0.3992,-8.4142 3.4551,-11.799 0.6722,-4.1371 6.6157,-4.5344 8.1857,-8.1797 4.7179,-0.66499 9.0076,-4.3899 10.265,-9.127 2.8406,-1.735 6.1619,1.2265 9.2074,2.2267 2.7999,3.7123 6.979,-2.213 10.864,-0.16797 3.0215,2.1455 2.6124,5.7154 6.419,2.6914 4.3096,-1.5793 5.1249,-6.523 11.509,-1.9678 7.4769,1.9853 15.209,5.065 22.103,7.2901 2.3534,-4.619 -2.4676,-9.1441 -3.1476,-13.832 -4.2638,-2.5232 1.9854,-5.6496 1.6556,-8.9509 3.5149,0.31758 6.1823,0.14143 9.3613,-1.7109 1.2239,-0.7467 0.4994,-2.8457 1.9337,-3.1183 z" id="path10789" />
                        <text id="svgRegions" x="1277" y="428">
                            <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Kazbegi' : 'ყაზბეგი'; ?>
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
            $query = mysqli_query($link, "select * from `regions` where ID = 11");
            $row = mysqli_fetch_array($query);
            
            
            ?> <tr>
                    <th><?php echo $keyIndicator[1]; ?></th>
                </tr>
                <tbody>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[2]; ?> "><?php echo $keyIndicator[2]; ?><span class="float-right"><?php echo $row['Area']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[3]; ?>"><?php echo $keyIndicator[3]; ?><span class="float-right"><?php echo $row['Population']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[4]; ?>"><?php echo $keyIndicator[4]; ?><span class="float-right"><?php echo $row['GDP']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[5]; ?>"><?php echo $keyIndicator[5]; ?><span class="float-right"><?php echo $row['GDPPerCapita']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[6]; ?>"><?php echo $keyIndicator[6]; ?><span class="float-right"><?php echo $row['UnemploymentRate']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[7]; ?>"><?php echo $keyIndicator[7]; ?><span class="float-right"><?php echo $row['EmploymentRate']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[8]; ?>"><?php echo $keyIndicator[8]; ?><span class="float-right"><?php echo $row['EmploymentRateIndustry']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[9]; ?>"><?php echo $keyIndicator[9]; ?><span class="float-right"><?php echo $row['AverageSalaryIndustry']; ?></span> </td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $dataContent[10]; ?>"><?php echo $keyIndicator[10]; ?><span class="float-right"><?php echo $row['RegistredEntities']; ?></span> </td>
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

        <script src="script.js"></script>
        <script type="text/javascript" src="lang.js"></script>
</body>

</html>