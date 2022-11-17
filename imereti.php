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
    <meta property="og:title" content="<?php echo $lang['imeretititlename'] ?>" />
    <meta property="og:description" content="<?php echo $lang['imeretititlename'] ?>" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <title class="tr" Key="PAGE_TITLE"><?php echo $lang['imeretititlename'] ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="samegrelo.css">
    <link rel="stylesheet" type="text/css" href="imereti/imereti.css">
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
            <a href="http://www.geostat.ge/" id="brand-logo-link" class=""><img src="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'images/logo_transparency_eng.png' : 'images/logo_transparency_geo.png'; ?>" /></a>
        </div>
        <header class="header1">
            <h1>
                <p id="pagetitlename" class="tr" Key="REGION14"><?php echo $lang['imeretititlename'] ?></p>
            </h1>
        </header>
        <div id="languages">
            <a href="imereti.php?lang=ka" id="ka" class="lang"><img src="images/ka.png" /></a>
            <a href="imereti.php?lang=en" id="en" class="lang"><img src="images/en.png" /></a>
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

            <a class="btn textbox-right-home regions-btn" href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'list.php?lang=en' : 'list.php?lang=ka'; ?>"> <span class="tr" Key="regionsBtn"><?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Compare Regions' : 'რეგიონების შედარება'; ?></span></a>

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
                        <span class="float-right"><a href="http://localhost/regions/regions/6/dziritadi%20informacia/regionis%20fartobi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia1">
                    <td>
                        <?php echo $basicInformation[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/6/dziritadi%20informacia/municipalitetebis,%20qalaqebis%20da%20soflebis%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $population[1]; ?> <span class="float-right"><a href="http://localhost/regions/regions/6/mosakhleoba/mosakhleoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="http://localhost/regions/regions/6/demografia/mokvdaoba_asaki_sqesi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia2">
                    <td>
                        <?php echo $demography[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/6/demografia/gardacvalebis%20mizezebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia2">
                    <td>
                        <?php echo $demography[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/6/demografia/dziritadi%20demografiuli%20machveneblebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $gdbAndValueAdded[1]; ?><span class="float-right"><a href="http://localhost/regions/regions/6/mshp%20da%20damatebuli%20girebuleba/mshp%20da%20damatebuli%20girebuleba.xls"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $foreignDirectInvestment[1]; ?><span class="float-right"><a href="http://localhost/regions/regions/6/pirdapiri%20uckhouri%20investiciebi/pirdapiri%20uckhouri%20investiciebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="http://localhost/regions/regions/6/dasaqmeba_umushevroba/dasaqmeba_umushevroba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia3">
                    <td>
                        <?php echo $employmentAndSalaries[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/6/dasaqmeba_umushevroba/khelfasi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="http://localhost/regions/regions/6/fasebi/samomxmareblo%20fasebis%20indeqsebi%2012%20tvis%20sashualo%20wina%2012%20Tvis%20saSualosTan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $pricesAndInflation[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/6/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20tvestan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia4">
                    <td>
                        <?php echo $pricesAndInflation[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/6/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20wlis%20shesabamis%20TvesTan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="http://localhost/regions/regions/6/ckhovrebis%20done/shemosavlebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia5">
                    <td>
                        <?php echo $standartOfLiving[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/6/ckhovrebis%20done/kharjebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="http://localhost/regions/regions/6/biznes%20seqtori/saqmianobis%20mikhedvit_nace%20rev.2.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia6">
                    <td>
                        <?php echo $businessSector[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/6/biznes%20seqtori/sakutrebis%20formis%20mikhedvit.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia6">
                    <td><?php echo $businessSector[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/6/biznes%20seqtori/zomis%20mikhedvit.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="http://localhost/regions/regions/6/soflis%20meurneoba/1.%20erttsliani%20kulturebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia7">
                    <td>
                        <?php echo $agriculture[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/6/soflis%20meurneoba/2.%20mravaltslovani%20kulturebis%20tsarmoeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia7">
                    <td>
                        <?php echo $agriculture[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/6/soflis%20meurneoba/3.%20pirutkvis%20suladoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia7">
                    <td>
                        <?php echo $agriculture[5]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/6/soflis%20meurneoba/4.%20metskhoveleobis%20produktsiis%20tsarmoeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $industry[1]; ?><span class="float-right"><a href="http://localhost/regions/regions/6/mretsveloba/mretsveloba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="http://localhost/regions/regions/6/mshenebloba/dasrulebuli%20msheneblobebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $construction[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/6/mshenebloba/mshenebloba_nebartvebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia8">
                    <td>
                        <?php echo $construction[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/6/mshenebloba/mshenebloba_dziritadi%20machveneblebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $energy[1]; ?><span class="float-right"></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $trading[1]; ?><span class="float-right"><a href="http://localhost/regions/regions/6/vachroba/vachroba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="http://localhost/regions/regions/6/sastumroebi%20da%20restornebi/sastumroebi%20da%20restornebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia9">
                    <td>
                        <?php echo $hotelsAndRestaurants[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/6/sastumroebi%20da%20restornebi/stumarta%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="http://localhost/regions/regions/6/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $transportAndStorage[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/6/transporti%20da%20kavshirgabmuloba/registrirebuli%20avtomobilebis%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia10">
                    <td>
                        <?php echo $transportAndStorage[4]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/6/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <span class="float-right"><a href="http://localhost/regions/regions/6/turizmi/ganawileba%20sacxovrebeli%20adgilis%20mixedvit.xls"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr class="informacia11">
                    <td>
                        <?php echo $tourism[3]; ?>
                    </td>
                    <td>
                        <span class="float-right"><a href="http://localhost/regions/regions/6/turizmi/ganawileba%20monaxulebuli%20regionebit.xls"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $legalStatistics[1]; ?><span class="float-right"><a href="http://localhost/regions/regions/6/samartlebrivi%20statistika/samartlebrivi%20statistika.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $healthCareAndSocialSecurity[1]; ?><span class="float-right"><a href="http://localhost/regions/regions/6/jandacva%20da%20socialuri%20uzrunvelkofa/jandacva%20da%20socialuri%20uzrunvelkofa.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $education[1]; ?><span class="float-right"><a href="http://localhost/regions/regions/6/ganatleba/ganatleba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $culture[1]; ?><span class="float-right"><a href="http://localhost/regions/regions/6/kultura/kultura.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $environmentalProtection[1]; ?><span class="float-right"><a href="http://localhost/regions/regions/6/garemos%20dacva/garemos%20dacva.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>
                <tr>
                    <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><?php echo $infrastructure[1]; ?><span class="float-right"><a href="http://localhost/regions/regions/6/infrastruqtura/infrastruqtura.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                    </td>
                </tr>




            </tbody>
        </table>
        <div class="map-box">
            <svg id="svg4380" xmlns="http://www.w3.org/2000/svg" viewBox="" version="1.1">

                <g id="layer6">
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'imereti/sachxere.php?lang=en' : 'imereti/sachxere.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group6-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1067.2461,508.07812 c -3.703,1.34709 -4.8863,9.88546 -9.502,8.03321 -4.3557,-2.3178 -9.3488,0.16305 -13.33,-2.16406 -3.2701,-4.65586 -9.4281,1.26412 -12.9121,-2.55079 -3.7945,-1.27067 -6.5341,0.19686 -11.1661,-2.3164 -3.9798,-0.49621 -7.5891,2.36647 -10.6484,2.82226 -6.2926,-4.21083 -11.57075,1.53275 -16.36719,5.29688 -5.38513,2.82856 5.13948,3.72014 3.39453,8.37695 -3.17522,4.94791 4.53876,5.69663 8.46096,6.27539 3.7637,0.83958 0.069,4.02783 2.6797,5.60156 5.8741,1.09153 0.6243,7.88573 5.459,9.14844 3.5844,1.56683 2.5187,3.84453 1.3886,5.37305 -0.4583,1.81716 -0.9472,4.31874 -0.6426,5.47851 0.033,2.63892 -0.1417,3.74768 0.4805,6.34766 -1.5098,3.03411 0.5928,4.06177 0.1641,7.04297 1.7019,3.13532 6.176,4.13311 7.1953,6.92969 3.1275,0.46357 1.2171,3.7528 2.9512,5.82617 3.0028,0.77429 3.5921,4.50369 0.8828,4.83984 0.4263,2.47402 -2.227,3.17962 -4.791,3.67969 -1.7461,0.0844 -4.3671,7.76261 -1.125,3.7793 1.0699,2.29575 2.5584,4.87236 4.4882,6.0332 0.5669,2.68487 4.1397,2.55504 6.0411,5.54883 2.6521,0.8417 -2.534,4.46189 0.3828,5.64844 1.6182,1.93385 3.6978,5.98645 5.1054,8.15625 2.0778,-2.81939 3.5263,2.93269 6.7051,1.44726 4.6433,1.80809 0,6.19632 0.1817,9.55469 -2.5794,1.82665 -4.2688,6.05514 -7.8204,5.91211 2.4109,1.7858 1.2071,6.37625 3.9805,7.56836 3.9188,-0.64353 4.7492,4.05603 7.332,6.21484 3.8331,0.89674 3.2529,5.8324 7.2774,4.125 0.9432,-0.87722 9.0316,-2.85856 7.7715,2.8711 -2.0791,4.66726 5.2852,5.68841 6.5605,1.15234 3.4044,-2.16329 8.5763,-1.69592 8.4707,-7.01172 -5.934,-1.20138 4.3588,-3.7971 2.1543,-7.35547 1.6763,-3.21853 1.4586,-8.19327 5.8438,-9.26953 2.3962,-3.21372 4.7375,-6.60393 9.1386,-4.91797 5.8152,3.52029 2.703,0.51386 -0.4355,-2.14648 -5.5203,-6.92538 6.1829,-4.088 5.9297,-10.38672 0.3206,-4.76647 -9.6998,-1.76702 -7.5078,-6.30469 -0.4843,-4.93649 3.0998,-8.52788 2.4668,-12.49414 -3.375,-4.96444 0.1669,-8.71578 1.1015,-13.01953 4.3991,-1.40906 6.0097,-4.39241 10.6797,-5.76563 7.9497,-3.44038 2.0939,-10.2769 -4.4824,-10.3457 -9.4731,3.99047 -4.1004,-7.68495 -11.6758,-9.05859 1.2906,-3.89832 -4.0484,-4.34099 -1.7871,-6.83985 2.7244,-0.63422 2.5085,-4.038 4.6367,-4.80078 0.6849,-2.42066 4.3292,-3.04975 2.4004,-7.2207 -2.7994,-3.49309 -0.1591,-8.44333 -3.4531,-11.31445 -3.506,-4.80252 2.9324,-4.56888 4.3242,-8.23829 -1.4944,-4.4456 -9.7756,-4.50017 -12.8945,-7.84179 -6.5679,1.70249 -9.5512,-6.32978 -15.4883,-7.72071 z" id="path1355" />
                        <text id="svgRegions" x="1025" y="580">
                        <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Sachkhere' : 'საჩხერე'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'imereti/chiatura.php?lang=en' : 'imereti/chiatura.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group6-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 981.23828,518.8418 c -2.01098,0.063 -3.16465,2.43116 -4.23242,3.95312 -2.99582,3.08936 -5.10658,6.99826 -7.52148,9.96485 -6.63996,-2.09461 -13.30355,0.0145 -19.41602,2.36132 -5.03851,0.62241 -7.06475,6.92453 -4.41016,10.44727 0.2881,-1.95209 2.37011,12.55285 -0.96875,8.63086 0.0772,1.30399 -3.05161,4.13462 -2.45507,6.32031 0.0366,3.46013 -0.21414,6.10339 -0.64063,8.56641 -0.0892,1.0476 -0.28774,1.98388 -0.58594,2.82226 0.097,0.0371 0.1953,0.0803 0.29883,0.1543 0.28237,0.20175 0.57722,0.45856 0.62109,0.82812 0.0229,0.0492 -0.016,-0.0223 0.16407,0.25977 0.17675,0.27692 0.12335,0.32152 0.25976,0.48828 -0.0269,-0.003 -0.0995,-0.0268 -0.0801,-0.008 0.0879,0.0849 0.18935,0.10129 0.26758,0.18359 0.0734,0.0772 0.1455,0.15517 0.2168,0.23438 0.19666,0.059 0.38716,0.13028 0.54297,0.25781 0.17322,0.14178 0.10287,0.67497 0.0508,1.05664 0.0994,-0.0328 0.18958,-0.0757 0.30078,-0.0957 -0.40512,2.5908 -1.27957,4.62102 -1.92969,7.32617 -2.47134,2.33886 1.69024,5.36618 0.79688,7.76563 0.48415,2.00915 4.97893,1.93607 3.51953,3.36914 0.67198,3.19784 -1.66098,3.75645 -0.80664,6.87109 -1.78697,0.0664 -7.45127,-0.0322 -5.75977,2.64844 2.49876,1.03656 5.38435,5.9354 6.91211,2.20507 4.47111,0.55573 2.26544,-5.30745 6.08203,-5.27929 1.18198,-1.66665 5.26995,1.87684 6.83399,2.24023 2.32478,2.91411 2.81656,1.2425 4.96289,1.2793 0.86356,6.1176 10.67849,1.67411 9.11914,8.91406 1.81821,3.16542 -1.29235,5.83987 -2.07227,7.83399 1.18677,0.99903 -0.24991,5.57932 -0.16406,7.25195 -0.15616,2.39411 2.8313,3.80947 1.29297,4.74609 -1.48148,0.72362 -6.85807,-0.39968 -4.40625,2.51367 2.3292,-1.12255 4.90961,2.68922 2.16211,4.20899 -0.90474,1.21663 -2.14045,5.19508 1.48437,2.44141 2.70901,-1.30582 4.23789,-3.90596 7.09961,-5.66797 2.7425,-2.05257 3.39221,2.36767 6.38868,2.08203 2.57011,1.3183 3.28098,0.64126 4.59179,-0.79883 5.06332,0.18667 4.40591,-5.60387 8.62305,-5.2168 2.23954,-1.22696 2.34834,-0.30346 1.4082,0.47461 0.0528,0.10389 0.0969,0.22507 0.12305,0.3711 0.32549,0.0319 0.54859,0.008 0.38279,-0.24024 0.062,0.0753 0.1247,0.14895 0.1778,0.23047 0.024,0.0363 0.026,0.0828 0.035,0.125 0.022,0.0976 0.062,0.19498 0.059,0.29492 0,0.0642 -0.022,0.12646 -0.035,0.18946 0.1501,0.4355 0.098,1.22338 -0.3964,2.40625 0.2262,2.2578 4.4035,-0.73877 7.6797,0.1621 -0.5329,2.96446 2.3336,5.36158 4.9043,5.59961 -3.0917,1.8945 -0.9832,2.39261 0.6914,3.51954 2.3933,3.64176 9.5379,-1.79478 7.6875,3.30468 -0.5614,3.18207 4.1063,0.91915 4.5156,-1.38867 -0.711,-3.43625 2.6231,-2.89374 3.6836,-4.79687 3.7539,-0.097 1.4454,-6.83954 6.7051,-4.96094 1.1207,-2.25033 3.0452,-1.93328 4.3496,-4.34766 0.7933,-2.25481 3.7707,-5.55226 2.791,-8.40429 -2.3335,-1.19335 -4.9711,-1.80456 -7.7305,-1.0625 -1.3424,-3.19967 -3.4123,-5.79317 -4.8437,-8.95313 -2.4443,-1.11807 -2.6415,-3.30428 -0.6348,-5.30469 -1.8061,-1.99305 -1.7235,-3.05119 -4.582,-3.91406 -2.3735,-1.8451 -4.2025,-4.6338 -5.9942,-7.42578 -3.4357,2.33107 -2.0923,-3.44688 -0.7402,-5.39844 0.5891,-2.32179 4.1884,-1.38943 5.8633,-3.50781 -0.8979,-2.2996 2.9219,-1.53888 1.5957,-3.09375 -4.354,-1.68916 -1.9396,-6.11218 -5.4512,-7.83984 -2.7085,0.82603 -0.8119,-2.77075 -4.2637,-3.62696 -3.3581,-2.46206 -2.3385,-4.49287 -3.6816,-7.36133 -1.0151,-0.56735 1.2856,-3.47406 0.4355,-4 -0.9162,-2.43112 -0.3117,-4.5538 -0.6406,-6.8789 0.9759,-1.96329 1.2075,-5.38748 1.125,-5.91992 2.7969,-0.48469 -1.7724,-3.94727 -2.1973,-3.83399 -3.257,-2.13546 0.4063,-8.22375 -5.3886,-9.23828 -0.089,-3.52381 -0.55,-4.49207 -4.8047,-4.96094 -7.74385,-0.34901 -5.37053,-4.70875 -6.47462,-9.65429 -3.91341,-3.28957 -8.47532,-3.02078 -13.49219,-3.72461 h -0.002 z" id="path1353" />
                        <text id="svgRegions" x="950" y="588">
                        <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Chiatura' : 'ჭიათურა'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'imereti/kutaisi.php?lang=en' : 'imereti/kutaisi.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group6-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 813.12695,562.14648 c 0.47829,0.54773 0.89249,5.5322 2.34571,6.50782 2.1165,1.70548 -0.69782,3.93677 2.70898,4.47851 2.20105,1.5233 -0.58588,6.31596 -2.34961,3.57422 -2.67678,0.48352 -7.04393,0.63891 -10.08008,3.0918 -0.19189,0.30369 -1.76878,2.95781 -3.73047,2.72265 -1.30772,1.64931 -5.16196,0.33091 -5.92773,2.39649 -3.62749,-1.77045 -4.77547,3.0336 -7.96094,0.80078 -2.20841,-0.18668 -5.47808,-3.52949 -6.60937,-1.5918 2.02611,1.83849 -3.73085,3.16416 -0.94922,4.20703 0.82869,2.46527 3.61447,4.27231 7.1914,4.7129 4.029,1.1444 3.26654,-6.65548 6.04102,-1.51172 0.77781,-1.11382 5.01077,-4.05398 5.33398,-1.1211 -2.95837,1.46644 1.03875,4.24327 -0.77148,5.70703 -3.25693,1.30102 1.95293,1.29419 1.24609,3.84766 0.5424,-0.81354 1.12818,3.47574 2.13477,1.1582 0.76287,-1.71805 6.33978,-0.33933 5.86719,1.28711 -1.1343,3.23187 3.95905,1.56172 0.48047,5.7793 -0.10102,2.13289 -0.10645,1.82756 0.64453,3.49219 2.15657,1.03769 5.97972,2.85559 8.62695,1.44922 4.07026,-0.49568 -0.94323,-2.40465 -1.04883,-4.05274 -1.04021,-1.81576 -1.61825,-4.90729 -0.15234,-6.50781 -0.21301,-1.58079 1.97561,-2.26015 1.43555,-3.45703 -3.26248,-2.40062 2.2442,-3.59846 -0.1543,-5.54883 -2.54761,-3.49113 4.19418,-2.02202 1.28125,-4.16602 -0.76565,-3.00904 1.85685,-5.40124 2.61328,-6.82812 0.83209,0.18282 1.20183,-3.86115 0.58789,-5.80664 0.46069,-3.94194 -4.1239,-3.46403 -4.00195,-7.67969 -2.05536,-2.47497 -2.96318,-6.19302 -4.80274,-6.94141 z" id="path1151" />
                        <text id="svgRegions" x="780" y="590">
                        <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Kutaisi' : 'ქუთაისი'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'imereti/terjola.php?lang=en' : 'imereti/terjola.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group6-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 940.51367,573.0332 c -1.2179,2.25562 -3.42971,3.54781 -6.72656,3.88672 2.64327,3.69598 -3.48377,4.94728 -6.79297,5.29297 -0.94899,3.83953 -6.89288,6.03537 -11.25976,6.54688 0.78495,-4.08967 -4.29915,-6.66228 -7.75,-4.51563 -4.25746,3.0227 -3.27154,-2.28727 -0.72852,-3.5918 3.95463,-2.37757 2.45525,-3.84233 -1.82813,-2.77343 -4.13969,0.53951 -2.73387,-6.59658 -6.21875,-2.55469 -1.76722,3.37277 -10.0166,4.2232 -6.23242,8.30859 3.1907,2.41502 1.42789,7.73244 -2.04492,4.32617 -2.60819,0.35957 -4.80862,1.30425 -4.24609,-2.40429 -4.33382,4.95537 -12.91348,-2.12059 -17.70117,1.95703 -3.33908,5.39377 -5.74867,-0.23014 -9.89649,1.24805 -4.88273,2.17255 -3.69107,-5.46219 -8.14062,-3.18946 0.62099,-3.80317 -2.18883,-6.94646 -5.09375,-8.92383 -3.31764,-0.92136 -6.22759,-2.13131 -9.94532,-2.76562 -1.93993,0.96212 -6.01191,0.4478 -6.1289,3.58984 2.89683,1.11007 -0.64686,3.616 -0.95313,4.29492 0.53313,3.98056 -1.6245,0.73912 -3.66992,2.83594 -1.87924,1.10075 -2.61084,-1.33486 -4.16016,0.63867 -2.86515,2.18708 1.21193,4.88441 -0.94921,6.56055 -3.83177,-0.21546 0.60081,2.59787 -0.86329,3.67969 -1.33044,2.61031 -0.58629,2.24346 0.21289,5.12109 -1.93097,-0.13184 -1.25972,2.71876 -2.55859,3.04102 -0.15957,1.33172 3.09851,1.48472 -0.16406,3.35937 0.0646,3.09044 4.06945,2.95111 4.53711,5.70703 -2.14045,1.43214 -6.36113,3.17726 -9.98242,1.01172 2.35203,1.75701 3.4841,5.45401 2.98437,8.22071 -0.92799,3.19944 -2.04026,10.478 1.86328,4.30664 2.01716,-1.01727 5.13269,-5.11412 7.89844,-5.11328 0.74622,-2.74018 3.70163,-7.63706 6.92773,-3.52735 1.91455,0.44353 2.83786,-0.73153 4.69727,-1.27148 1.13887,-3.92553 5.8494,0.5986 8.15039,-0.6543 2.69288,0.1614 4.0701,0.5278 7.26367,0.16016 -4.05511,2.49832 0.70592,2.83371 3.07422,3.71875 4.11538,2.75914 0.38976,3.04239 -2.85351,1.83984 -3.37214,-1.01663 0.18442,0.0261 -1.13868,1.75977 -7.37582,0.0594 -5.02402,1.60493 2.00782,1.16211 5.0199,2.2147 3.97579,-3.26402 6.8164,-3.14454 3.34408,1.30175 -0.20026,-1.15602 -0.45117,-2.46289 1.32468,-0.2909 4.14292,-1.98878 4.42773,0.32032 -0.76522,-0.60085 0.69811,5.044 3.72657,5.1289 0.77684,-3.55314 4.86121,-1.29683 6.97851,-0.16992 0.23212,2.7652 1.90017,3.39599 3.51563,4.80078 -0.33611,3.36757 2.46621,1.97309 4.48242,3.20508 2.22291,0.27893 -0.49306,4.37544 2.66211,3.15625 1.66141,2.31177 4.83323,5.50439 5.85742,1.97461 -0.12203,-1.56067 1.35285,-2.71612 4.11133,-2.39648 0.38144,-1.48938 1.87128,-1.77204 4.79883,-1.43946 2.23102,2.90765 3.90213,0.26483 6.46679,-0.13086 5.21617,0.35627 1.59743,-3.37243 2.42188,-4.5625 -0.68213,-2.9721 2.78514,-2.37952 1.23242,-3.99218 0.68725,-2.45962 -0.97644,-3.64152 0.67773,-6.51563 2.69428,-0.28 2.1725,-3.39588 4.11915,-4.04492 -1.96244,-1.33963 1.93095,-1.37753 1.75976,-3.15821 0.6496,-2.84904 1.66964,-2.20528 4.43164,-1.43554 2.76105,2.46163 4.12598,-0.85318 5.91211,1.27148 1.16618,1.61707 1.67687,-2.72147 3.72656,-1.43359 3.00755,-2.57971 2.6846,2.22544 5.75391,-0.0293 5.08564,-0.31744 4.91629,1.52741 4.06641,4.29688 1.30975,1.83038 6.06917,-1.75835 2.64648,-3.87696 3.8965,-3.49766 -6.03597,-5.54142 -4.26562,-6.79101 -1.77429,-2.64671 3.81314,-2.19882 3.46679,-4.43164 2.91965,2.93608 2.01617,-0.83084 2.72461,-2.44727 2.37962,-2.6563 -1.68258,-3.14814 -2.875,-4.85351 0.36459,-1.8738 -1.10367,-5.23407 -2.07031,-7.4668 2.62877,-0.91426 1.73721,-5.34457 2.98437,-7.40625 -0.11298,-0.16938 -0.17586,-0.41299 -0.14062,-0.73047 l -0.002,-0.002 c 0.01,-0.09 0.0273,-0.28373 0.0469,-0.4668 -0.0248,-0.004 -0.0494,-0.009 -0.0742,-0.0137 -0.0421,-0.0437 -0.0963,-0.10244 -0.14648,-0.16016 -0.0364,-0.0159 -0.10916,-0.11222 -0.1543,-0.14258 -0.3071,-0.20653 -0.0199,0.0623 -0.45508,-0.48046 -0.0259,-0.0382 -0.0556,-0.074 -0.0762,-0.11524 -0.0421,-0.0838 -0.0723,-0.17249 -0.11133,-0.25781 -0.0421,-0.0918 -0.13424,-0.19136 -0.18945,-0.2793 -0.0478,-0.0762 -0.087,-0.15779 -0.13086,-0.23633 l -0.0859,-0.33593 c -0.0469,-0.0113 0.029,0.0659 0.01,0.0879 -0.0252,0.0282 -0.0646,-0.0424 -0.0977,-0.0606 -0.0346,-0.0189 -0.0571,-0.0406 -0.0879,-0.0606 z" id="path1349" />
                        <text id="svgRegions" x="830" y="605">
                        <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Terjola' : 'თერჯოლა'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'imereti/samtredia.php?lang=en' : 'imereti/samtredia.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group6-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 695.9375,575.73438 c -0.34478,-0.009 -0.71075,0.0134 -1.10352,0.0664 l -0.043,-0.0117 v 0.008 c -1.64843,1.36905 -1.79001,2.44436 -2.875,3.67187 -0.0882,4.02546 -2.03356,7.14606 -4.48047,8.64258 -1.54036,2.15017 -3.88248,4.93152 -6.08789,6.44531 0.95955,1.22964 0.15756,3.26311 0.95507,6.24805 2.01545,0.97204 2.42103,3.70672 0.78711,5.23437 -0.0563,3.46717 -3.24764,4.38263 -1.11914,7.23828 2.67987,1.10965 0.76739,1.22195 0,3.00391 0.0459,2.05213 2.83722,4.10442 1.59766,7.40039 1.60386,0.11861 2.84956,2.51071 1.45117,3.63477 -2.37833,1.64008 1.93303,3.27482 0.16602,4.80078 -1.66859,-0.86614 -2.84925,0.12683 -3.20313,2.125 3.41245,0.81311 -1.16264,3.97195 1.61719,5.28906 1.38431,3.48841 -1.82535,6.80964 -3.83984,9.54883 -4.16894,-0.36821 -9.19644,-2.12764 -12.80079,-4.39258 -2.3652,0.51925 -5.55541,-5.04717 -6.55664,-2.5625 0.83849,1.97204 3.21563,7.41941 0.16797,9.99219 -3.63325,0.15189 -3.04821,5.53566 -0.0195,7.09179 1.23978,2.56245 -4.62949,4.75443 -1.97266,8.63086 3.00595,0.63872 1.01624,3.67075 2.95704,3.26758 3.51206,0.68213 4.26743,-0.58473 6.2832,-2.13672 3.17096,1.93792 4.80023,3.14812 7.17578,-0.47851 1.91657,-2.43061 2.51581,1.39212 4.60742,0.79883 1.31819,0.93716 1.7789,1.75698 2.72656,3.83984 0.6462,2.71817 1.59693,3.55983 3.56641,1.92187 1.93908,-1.5926 4.16383,0.71277 5.44531,0 1.60255,-0.45493 4.38914,-1.86565 1.92578,-2.44531 -1.67453,-2.03497 3.29695,-5.078 3.4668,-5.0332 2.51538,0.54602 6.9823,-1.32639 8,1.70898 2.34901,2.73372 1.98552,-1.9831 5.33399,-0.3125 2.34526,0.77034 3.62627,2.26834 4.76953,4.80078 1.39583,0.01 1.54475,3.09545 3.15039,3.52149 -0.93198,1.70249 0.99932,3.01246 -0.4043,4.42578 1.31896,1.92765 -0.47957,3.20136 0.60938,5.26172 2.79036,0.78421 0.35386,-1.73617 1.16797,-3.44922 2.19271,-0.78485 0.46701,-3.02599 0.33007,-4.29883 1.00152,-1.01183 2.79186,-4.73869 1.43946,-7.79883 0.98312,-3.58781 -6.17689,-2.30613 -4.16016,-5.83398 0.34145,-3.24893 5.40914,-1.79919 5.11133,-4.52344 1.57501,-1.82229 2.13037,-3.75173 2.72656,-5.08398 0.0847,-5.45084 -5.75374,3.49875 -6.08008,-2.08008 -2.19838,-3.64029 -2.82753,-7.32374 -3.51172,-12.36914 -2.44947,-4.13565 -0.97921,-6.17818 3.95899,-3.7832 2.79496,1.00328 7.32396,0.48706 10.8789,-0.46875 3.15966,1.52468 5.42114,3.89851 10.87891,3.36132 2.13324,0.68224 2.19105,2.60812 3.03906,4 3.32575,0.40213 7.14774,2.88259 11.08008,2.71875 -1.35073,-3.90567 -1.94362,-9.43548 0.71289,-12.16015 3.8209,1.50717 4.14745,-8.58355 -0.37305,-6.45313 -2.31591,1.83231 -4.69334,4.23708 -8.17578,2.40039 -2.42878,-2.55794 3.17581,-4.31608 2.77539,-6.65429 -2.59559,-3.52652 -6.02523,-0.35672 -9.20312,0.99804 -2.69479,3.98269 -6.3508,-0.30158 -9.66992,-2.59765 -6.00871,-4.58183 6.75351,-3.36502 4.74414,-7.53321 4.64295,1.0319 5.14747,-2.37425 6.87695,-3.27148 2.82206,-2.03678 3.42762,-6.63062 5.33203,-8.09375 3.14931,-1.92009 -2.6903,-3.74739 -2.13281,-6.65039 -3.09117,-0.12512 -2.03847,-3.60557 -5.2793,-2.99609 -1.2628,-1.21845 -5.07784,-2.09224 -3.84765,-3.83985 -0.72074,-1.3016 -2.82529,-5.08638 -4.36524,-1.76172 -3.73874,-0.0817 -8.56731,0.6189 -10.88281,2.51563 -4.08221,-2.18453 -11.84003,-0.3157 -14.3457,-3.47461 -3.04973,-0.13004 -1.05005,-4.27935 -3.8418,-4.48047 -3.64009,0.21664 -1.00522,-3.53307 -1.28125,-5.59961 -2.36066,-0.54581 -3.74281,-1.93135 -6.15625,-1.98437 z" id="path1343" />
                        <text id="svgRegions" x="664" y="607">
                        <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Samtredia' : 'სამტრედია'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'imereti/zestafoni.php?lang=en' : 'imereti/zestafoni.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group6-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 954.81055,601.00586 c -3.70364,2.42643 -2.34209,0.74426 -4.21875,3.75586 -1.63125,1.83594 -3.23235,1.27909 -4.58594,2.82617 -2.07229,0.0556 -1.32423,3.15171 -2.60742,6.29492 -1.16223,2.17766 -6.04388,1.92202 -5.72266,-0.32031 2.07305,-4.01127 -3.41931,-3.41873 -5.33203,-1.9668 -1.63424,-3.82483 -2.44072,0.57966 -4.63281,0.20703 -1.01462,3.70089 -2.9075,-1.96521 -3.36133,0 -1.02006,2.83455 -4.33736,-1.34653 -4.89063,-1.28125 -3.09884,-1.00584 -2.49074,2.22574 -4.375,3.04102 -0.55263,2.48393 -2.35958,4.66229 -3.19921,5.28125 -3.1507,0.19221 -0.73814,2.66027 -1.2793,4.00586 0.48073,2.57799 0.21848,2.49541 -1.11719,4.64258 -1.28127,3.71645 3.00367,7.5965 -3.71094,6.68164 -2.62035,-0.1312 -2.38702,5.32428 -4.24023,1.78906 -1.89748,0.28981 -2.88786,-2.39331 -4.99609,-1.2793 -1.4847,2.12873 -4.78311,0.0135 -5.75782,3.20313 2.4353,2.44551 -2.22154,1.71807 -3.79687,1.91601 -1.76788,-2.8534 -3.77634,-2.64816 -5.28321,-4.46875 -1.19092,-2.25705 -1.37175,-3.72461 -4.94921,-2.89257 -0.29588,-2.76191 -0.97644,-3.57112 -3.26368,-4.85547 -0.0145,-3.14088 -1.85189,-3.67488 -4.54882,-4.25977 -1.45235,0.57114 -3.26981,3.9844 -5.43555,1.28321 -0.3536,-5.72765 -2.182,-1.69514 -3.30274,-1.54102 -3.64146,-2.8356 -1.27478,4.37632 -5.90429,2.49219 -4.57767,-1.08651 -11.52893,2.08794 -11.75,-3.47852 3.52349,0.45632 6.63269,0.86219 6.08203,-2.70898 1.68085,0.78414 7.46891,1.91481 3.0332,0.58789 -4.31472,-0.54561 -2.77393,-3.63601 -6.71289,-3.19922 -1.75305,0.6771 -3.75168,0.40555 -5.77344,-0.69727 -2.32318,1.637 -1.9821,1.00418 -0.0234,2.7793 -0.4176,2.21043 -2.54729,2.61834 0.80468,3.75391 -0.15966,5.4215 -2.28102,9.37945 5.35157,7.64453 2.74748,-0.60458 6.21545,4.80906 5.6914,7.79101 2.04532,2.15925 3.29084,-3.82985 5.5625,-1.71093 2.97927,-2.65084 4.40095,1.86859 6.22461,-0.31836 2.29673,-0.31532 2.67933,3.8598 4.92774,5.33593 1.35849,-1.68645 2.39148,-1.72686 4.57226,-0.53711 -0.92851,3.00563 0.004,5.94457 2.99024,6.71875 -1.33685,1.52436 -0.16412,3.93943 0.0449,6.1875 -1.98398,2.01056 0.0759,4.85033 0,8.17969 1.19903,0.49464 3.98116,-1.59334 5.49219,-0.92773 0.14133,-1.8896 7.5314,-0.33317 7.14257,3.0332 -0.22814,3.14803 4.77513,4.04651 6.40625,4.17578 3.28447,1.68725 4.30209,5.0168 8.31836,3.6836 6.41735,0.42698 4.75517,6.22244 -0.43945,5.36132 -2.05001,5.45253 5.06126,4.3518 8.73047,4.88086 1.70079,-0.39102 2.90975,-3.72006 4.24414,-4.43554 0.86559,2.74296 3.25321,3.61366 5.42578,2.35351 1.66752,-2.12543 3.05845,1.25975 3.8457,-0.16797 0.073,-1.91249 3.25407,0.87225 3.52539,-2.39258 3.22131,0.44427 3.84177,-2.30601 5.90821,-0.1582 3.56671,0.69686 -0.0941,-5.42535 4.44726,-3.5332 2.12277,0.13482 2.55536,0.50413 4.63086,2.39062 0.24341,1.16406 1.75242,1.59647 3.25586,1.76954 2.82378,-1.52575 -2.27387,-2.86619 -0.16797,-4.80079 1.77003,-0.0208 0.52002,-4.10816 3.00586,-4.32031 2.95443,3.66712 2.0621,-3.40251 5.20703,0.58594 -2.36499,0.2993 -0.93696,4.28109 1.1875,4.20898 2.61141,-2.03561 4.92759,-1.84091 5.97071,-5.11523 3.70589,-0.77695 -1.27532,-4.24515 2.23047,-4.64063 3.94407,0.65962 3.52297,-0.17547 1.12695,-3.07422 -1.17675,-2.04606 0.75716,-5.08398 2.0332,-7.00781 1.00761,2.92371 0.98782,-0.89898 0.6875,-2.4707 3.58548,-3.03059 1.78834,-7.58548 -0.004,-8.87891 0.064,-3.14237 2.91569,-4.73171 2.00195,-6.1875 -1.36052,-0.30718 -3.65035,-0.37466 -3.61719,-3.08984 1.44811,-2.72795 5.55059,0.30021 4.79688,-3.24609 -1.58624,-1.50294 -0.77337,-3.41018 -0.32032,-5.25391 1.91765,-2.76211 -2.14544,-3.22789 -0.0117,-4.93945 0.69727,-2.01504 3.15109,-3.23207 2.0957,-5.96485 0.70357,-4.52657 -3.04479,-5.20157 -6.75195,-6.07422 -1.54047,-3.27849 -5.1684,-1.87999 -7.64454,-4.17382 -1.39764,-0.49429 -2.3257,-1.4585 -3.27343,-2.47266 z" id="path1341" />
                        <text id="svgRegions" x="881" y="655">
                        <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Zestaponi' : 'ზესტაფონი'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'imereti/bagdadi.php?lang=en' : 'imereti/bagdadi.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group6-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 827.66406,617.08008 c -2.19199,0.42381 -1.15876,4.0076 -3.09961,4.74219 -2.32115,0.21918 -4.96527,3.5218 -7.54297,5.02343 -3.15068,1.86389 -3.63073,5.25101 -5.7539,6.39063 -1.55531,3.01491 -3.63633,5.84935 -7.51758,6.35547 -3.34312,0.80468 -3.25618,3.35084 -5.93945,4.71093 1.82048,0.12448 3.19822,3.11938 1.93359,4.62305 0.13627,0.0143 2.87258,-0.49113 1.12305,2.8711 2.26707,0.63982 4.06866,0.24877 4.27734,1.65429 2.39038,0.62305 0.24618,4.27096 3.57031,3.67969 0.37141,0.96392 4.74315,3.71281 4.0625,0.96094 2.19977,-1.3039 3.90998,-1.24917 6.34571,-0.32032 0.10741,3.21683 -0.27233,4.51374 2.56445,5.91993 2.02057,1.36456 0.1699,3.66762 -0.96289,6.14257 3.02888,1.08075 7.65315,-0.0927 6.10937,4.86719 -1.58505,-3.8101 -6.435,0.66515 -3.91406,3.85156 -1.66921,1.79339 -3.51607,13.24139 2.97656,9.77539 3.49683,0.25475 3.56017,-6.21133 6.39844,-0.31835 4.65735,2.65724 -1.97831,6.58041 5.08008,6.40039 4.34572,-1.85205 5.2612,-2.33589 3.67188,1.62109 -2.68244,2.19678 -1.0958,8.53912 -5.82227,8.39648 -1.85652,2.86377 -1.15508,8.49916 -6.16016,9.48633 -2.11742,2.93471 -3.00672,6.90439 -4.81054,8.55664 2.12307,1.18143 -3.12746,5.59432 -1.59766,10.39844 -0.73109,2.16457 -1.26635,2.76288 -2.08203,5.16211 -5.22078,3.66397 -5.28135,9.6804 -4.96094,15.24023 1.12566,3.9653 -0.0396,10.76635 -3.87305,12.97657 -2.61512,3.88487 2.16121,6.71747 5.56641,7.0039 2.77439,5.32509 5.46193,0.60348 8.91406,-2.21484 5.01085,0.45345 9.09546,-2.71358 7.68555,-7.53125 4.1333,-3.76825 8.24042,3.74768 12.58789,0.80273 -0.48981,4.35015 5.11088,5.48018 8.19727,5.50782 4.94885,-0.52577 7.09258,4.58855 11.68945,0.74218 6.00048,-6.53573 6.53345,2.71522 10.5332,4.50391 3.76145,4.1591 9.93301,2.11785 12.69727,-2.09961 0.36064,-5.67218 6.14312,-6.5474 10.53711,-6.8125 1.49183,2.62416 6.12845,1.71259 9.48437,3.07813 5.103,0.8413 9.3084,-0.75409 14.01172,0.74414 4.26695,-0.70562 9.04959,-2.26224 13.20508,0.19726 2.98123,1.58667 3.80898,-1.78918 2.33594,-4.17773 -4.72917,-1.43883 -0.84825,-4.50396 -5.45313,-6.83203 2.93652,-3.85021 5.09089,-7.97358 -0.55664,-10.30274 -5.02205,-0.22602 -5.25614,-6.00602 -4.42383,-8.36719 -2.62919,-0.99859 -4.95391,-2.79807 -4.12695,-5.8789 0.62718,-4.49107 -1.22443,-5.29883 -3.81641,-8.86328 -3.69394,-3.59197 -6.60005,-6.16673 -6.79882,-11.4375 -4.45171,0.13492 -8.36247,-3.16043 -10.63477,-6.57617 -3.24761,-2.12842 -1.34272,-7.90035 -0.5918,-10.99024 1.49599,-3.52392 2.2207,-7.05702 5.15625,-4.89062 1.95712,-1.02859 1.82364,-7.12856 5.57422,-6.00196 5.15665,-0.29312 3.33847,-4.97212 1.46094,-5.73437 -2.06078,1.90874 -3.60973,4.53458 -8.15625,2.69726 -4.58654,0.71146 -7.77775,-2.96325 -5.03516,-6.63086 1.78233,0.35553 7.15085,-2.03779 0.53907,-3.26562 -4.40007,1.68564 -5.18984,-2.06534 -8.63868,-3.90235 -4.3128,0.12727 -6.74879,-2.42862 -7.125,-5.95703 -2.49928,-2.48446 -5.19195,-1.74838 -5.8125,0.043 -1.90258,-3.08427 -5.38704,2.76436 -6.51171,-1.04297 0.6515,-3.62918 -2.57659,-4.58314 -0.48829,-7.97851 0.56725,-3.19528 -1.46524,-5.25185 -1.10156,-7.09375 -1.20532,1.1618 -2.17481,-2.31644 -1.59765,-4.33008 -0.2526,-4.07176 -3.42171,2.24293 -4.22852,-0.6875 -1.70697,-0.30517 -3.2438,-5.49862 -3.66406,-4.26172 -3.40211,2.15792 -2.94612,-2.87101 -6.66407,-0.32031 -3.25117,0.33216 -3.74739,4.40923 -7.17968,1.62109 2.1539,-2.5316 -1.59648,-7.52288 -3.93555,-7.54101 -3.60189,0.26794 -9.43599,-0.35645 -6.48828,-3.30469 2.23913,-5.60038 -5.05037,-5.31366 -1.44336,-8.80078 0.75189,-0.0373 -2.78321,-2.65955 -3.08984,-0.68164 -2.91342,0.55154 -4.23203,-0.52553 -6.6875,-1.59961 z" id="path1339" />
                        <text id="svgRegions" x="840" y="726">
                        <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Baghdati' : 'ბაღდათი'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'imereti/xaragauli.php?lang=en' : 'imereti/xaragauli.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group6-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 998.69336,633.07422 c -0.43691,0.14454 -0.93791,0.21672 -1.47461,0.1543 -1.80213,2.48435 -3.98932,4.63926 -7.83984,5.24023 0.98687,2.84927 -4.06017,1.07246 -5.45899,0.041 -2.06249,1.8021 -2.43352,-3.09445 -4.51562,-1.69532 -2.4051,2.12521 -4.03325,4.03634 -7.13477,5.69532 -3.7493,1.2931 0.34744,6.89217 -3.6875,9.04296 1.99965,4.44199 -2.99941,3.84267 -2.7207,7.45704 -0.43264,3.06061 2.6601,1.09918 2.54492,4.02929 4.98214,0.13237 -2.42564,3.07109 -4.03906,2.04102 -0.19851,1.5618 0.0526,3.82584 -2.32813,4.48242 0.10869,3.29928 -3.76204,2.67123 -5.2832,4.95898 -3.58333,0.66486 -3.9771,-1.95874 -6.27734,-3.61718 -3.15464,-2.16629 -1.15676,3.58173 -3.34766,3.45898 2.96636,2.66643 -0.31111,6.22793 -2.95898,4.47852 -2.8668,-0.18924 -1.52975,-2.06998 -3.66797,-2.56055 -0.54209,-0.98389 -5.00233,-2.64553 -3.75391,1.75977 -2.71635,0.79985 -4.09019,-0.40465 -6.56836,0.48046 -2.6627,0.87478 -3.81372,2.73733 -7.12891,3.68946 -0.62046,-3.45313 -2.84407,1.26964 -4.30859,-0.94922 -0.52958,1.55977 -0.38506,5.28776 -5.66992,5.74023 -2.92254,0.23052 -2.469,5.37156 -4.29297,6.23828 -3.39357,-2.00275 -4.38411,1.97001 -4.85547,4.53125 -0.92639,2.37813 -2.6075,8.28644 0.68164,9.21094 1.45151,5.67067 8.31162,4.42374 11.00781,7.93164 -1.00127,5.59389 4.64392,7.01424 6.92774,11.21485 3.56009,2.95965 3.26194,5.20383 3.34375,9.90234 -1.03606,3.03624 6.18813,3.00573 3.83594,6.14844 -1.6898,6.41433 7.93577,5.57881 8.91211,10.63476 -3.52809,4.07602 -2.76771,6.31708 -1.22852,10.34766 2.04787,0.85226 5.43639,4.10942 3.01563,6.83398 5.58714,-0.9185 11.94809,-2.97379 17.60351,-5.5039 6.72177,0.80927 7.19333,-9.16406 13.49609,-8.27344 7.41009,-2.44521 17.73314,-1.34818 21.92969,-9.00977 4.82983,-0.79754 10.60953,-4.12229 16.10543,-3.08398 6.258,0.5041 6.1409,-7.59241 10.7754,-7.95117 5.8162,0.51958 9.4183,-4.69023 15.2207,-4.64063 7.9146,0.30411 3.2607,-7.11961 3.8243,-10.58008 -3.6203,-3.40934 2.0361,-6.07987 -0.7852,-8.89062 -5.1404,-5.43025 1.9937,-4.77117 5.9023,-7.7832 -4.5226,0.43601 -5.8408,0.9924 -10.5136,-0.90625 3.4823,-0.14679 6.3889,-1.74383 7.7226,-2.97657 -0.673,4.30494 3.769,-0.53036 4.7598,0.93555 0.563,-2.06337 2.8524,-0.7609 4.4453,-2.77539 5.7273,2.41738 3.7895,-4.37421 6.2422,-4.7832 -1.177,-1.52884 1.7934,-7.84346 -3.3125,-8.37305 2.7322,-5.75355 5.6034,-11.53187 4.7324,-18.21875 -3.2968,-4.85745 2.9194,-5.96479 1.0469,-11.06055 -4.2257,0.18007 -5.4561,1.25068 -9.7695,1.83008 -0.3273,-3.9443 -4.3649,-3.519 -6.2149,-7.16601 -1.2495,-4.10088 -3.952,-2.76511 -6.0762,-3.83594 -0.4221,0.62463 -1.5909,-3.55868 -2.1757,-5.90234 -0.9222,-2.14215 -3.5028,-3.15115 -1.2188,-1.03321 -2.558,2.28713 -3.9037,4.13813 -6.8359,5.06836 -0.6763,2.978 -2.8131,7.35193 -6.5235,5.75781 -1.8213,-1.50998 0.4339,-6.07329 -2.9922,-2.51172 -3.4828,-1.14184 -5.7872,-3.06772 -8.8085,-4.1875 3.7355,-2.86033 -3.0544,-3.20188 -2.252,-7.05273 -4.0554,-1.26072 -5.765,3.24441 -7.67578,-0.31055 -0.19234,-1.08255 -0.13019,-1.92854 0.0469,-2.54492 -0.3556,-0.2372 -0.37685,-0.70352 -0.42773,-1.14648 -5e-4,-0.004 4.7e-4,-0.007 0,-0.0117 z" id="path1335" />
                        <text id="svgRegions" x="940" y="700">
                        <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Kharagauli' : 'ხარაგაული'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'imereti/vani.php?lang=en' : 'imereti/vani.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group6-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 715.03139,637.74802 c 0.97935,2.99285 1.97851,6.41904 2.19141,9.29297 0.98196,1.99081 2.77039,2.70922 1.23632,4 1.90943,-0.2544 0.61223,5.92287 3.05274,2.56054 3.15571,-1.71624 4.16721,-0.3056 4.65625,3.16797 0.0804,1.17343 -3.93372,3.42982 -1.58985,6.05859 -2.14963,0.46133 -7.49713,1.39259 -6.01757,4.61133 3.61029,0.73673 5.28341,3.43151 3.93164,6.67383 -0.58525,2.31509 1.12938,5.42467 -1.60352,5.04883 2.17982,0.2304 0.40383,1.69961 0.48438,3.75195 -1.1451,2.74303 0.65248,3.87409 -0.16211,6.04102 2.50451,1.07603 3.16818,2.90357 5.29297,4.00586 1.80585,1.64899 1.94149,-0.3193 2.97851,0.16211 0.6774,0.28366 2.68644,1.11927 3.19141,2.59961 -0.19871,-2.22982 2.63355,-3.60606 3.42773,-0.84766 1.12182,3.03158 3.06699,0.0408 4.95508,-0.3125 0.25068,3.02409 3.4744,2.38858 5.39844,3.64062 6.66448,7.66607 14.58354,13.36007 22.39062,19.56055 6.21755,-1.20526 11.13593,0.31391 17.30078,0.32031 4.63218,0.89002 7.03503,6.68712 8.98243,9.84571 -0.76682,4.68668 4.47949,9.99992 1.41211,14.29492 -5.17809,2.87368 4.02658,8.3135 -1.3418,11.72851 -1.631,4.18994 -0.25705,8.81886 0.42773,13.16602 4.69928,1.01525 6.49416,7.25865 11.71289,5.68555 8.1978,1.87358 -1.33354,-7.13531 5.87696,-9.01563 2.12986,-5.00508 1.68616,-9.31277 1.35547,-14.45898 -1.08769,-4.75175 2.32372,-8.95551 4.77734,-12.375 2.52552,-3.14259 1.5351,-7.91539 3.68164,-12.16016 -1.28244,-3.35698 0.2074,-2.49664 1.83203,-5.9668 1.98965,-2.60339 3.65032,-6.13832 7.18555,-8.60156 1.16276,-3.55314 1.25012,-6.90024 5.41211,-7.86718 -0.68929,-2.70462 3.74387,-6.98724 2.23242,-7.30079 -3.88477,1.50707 -10.52214,-1.10051 -6.65625,-4.76757 -2.89159,-5.12951 -3.70701,-1.70775 -7.44531,0.48242 -3.65327,0.8497 -8.55598,-7.16796 -4.23047,-10.07227 0.43369,-3.33713 -0.84728,-6.24246 2.21094,-8.68555 2.83731,-0.46803 -8.22254,-0.72972 -2.88477,-4.38281 2.04116,-2.32946 -1.41761,-3.54723 -1.97656,-4.94531 -1.7826,-1.11102 -0.37632,-3.41743 -1.60938,-4.16211 -2.67016,-1.29951 -2.09882,2.70226 -5.26562,2.23828 -2.17129,-1.34473 -4.78852,-2.87079 -7.32227,-3.35937 2.04094,-2.1971 -0.75407,-3.36156 -2.20312,-4.00196 -4.11462,0.6687 -0.82277,-5.33494 -3.92578,-1.64453 0.29001,-3.97906 -0.56348,-2.81001 0.63671,-5.82812 -2.44862,0.89555 -5.295,2.73562 -6.06836,5.17773 -0.35061,1.76511 -0.48236,6.61856 -2.57226,3.05274 -2.09757,-0.44364 -3.25547,-1.87502 -6.08594,-1.66993 -3.11027,1.98415 -5.03663,-2.03174 -7.20312,-0.20507 -3.02975,1.50923 -3.83857,-1.2731 -7.20313,-0.64258 -1.51168,-2.11091 -4.82347,1.02847 -6.54687,-1.11914 -0.39691,-2.4891 -3.29468,1.01425 -3.80664,-0.77539 -2.13045,0.28905 -3.90808,0.29236 -5.10743,-1.14453 -2.23902,0.90469 -5.15506,-2.84162 -5.99414,-0.36719 -1.56669,-3.1136 -4.88169,-1.41852 -6.35156,-3.78906 0.65706,-3.98445 -4.38031,-2.10698 -7.03906,-3.04493 -1.75913,-1.18408 -4.00904,-1.38376 -5.43164,-3.04101 -4.82465,1.78023 -9.70786,1.40576 -14.58008,-0.61328 z" id="path7431" />
                        <text id="svgRegions" x="758" y="685">
                        <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Vani' : 'ვანი'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'imereti/khoni.php?lang=en' : 'imereti/khoni.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group6-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 787.67578,459.83594 c -2.42281,0.64351 -5.37094,0.58206 -7.68164,1.8789 -4.30706,4.11764 -9.79578,2.23255 -14.63476,3.66016 -6.34727,0.83189 -3.63926,8.60235 -8.94727,10.72852 -2.11817,3.90011 -9.91794,4.02761 -8.41992,9.42382 2.67592,4.19273 -1.30902,11.67824 -6.85352,10.0918 -1.618,0.93386 -0.39647,7.50875 -0.35156,11.08984 -3.71901,0.53899 -4.0543,5.52391 -6.21875,7.84571 -5.64038,2.30376 4.6245,9.054 -1.21289,10.51758 -1.82377,1.12627 -2.85323,3.35505 -4.8418,4.32226 0.0384,1.51946 -2.024,1.88401 -2.39258,3.36133 -2.62802,1.82782 -4.75964,3.79296 -7.35547,6.72266 -2.22535,2.00786 -2.82192,4.53164 -4.88281,6.81054 -0.87187,2.33653 -2.43069,4.26336 -3.74609,5.66602 -0.16384,2.48627 -1.76997,2.84639 -1.59375,4.16211 -2.5203,0.97066 -5.02789,1.89602 -5.28125,4.79883 -2.09653,2.52604 -0.0964,6.60653 -3.5,7.84375 -0.93855,2.36839 -2.13025,4.17283 -3.83594,5.59961 1.95337,0.33109 3.35145,0.73167 5.1875,1.81445 3.28732,-0.32341 1.98075,4.34819 1.53125,5.59961 1.79583,0.53237 4.50154,0.66104 3.67969,4 2.36787,0.87219 3.64987,3.53392 7.85742,3.04492 4.74352,0.66079 6.07611,0.29758 9.63672,0.15625 2.73907,-1.83849 7.81621,-0.55848 9.60352,-2.7207 2.66376,-1.04981 2.91918,2.23032 4.76171,3.66797 0.87786,2.92445 3.26851,2.89628 6.40235,4.00976 0.41653,4.7688 1.04078,-0.9266 2.61718,-2.19336 -2.11613,-1.62591 -0.69917,-7.41542 0.9629,-9.32422 3.36605,0.77526 1.634,-1.97735 0.32031,-3.83984 2.06633,-0.80042 2.66255,-4.26302 2.08203,-5.65234 -0.57408,-2.43134 -2.42643,-3.67171 -1.76367,-5.54688 0.63489,-1.68916 1.41919,-3.70337 0.95898,-5.11914 0.13056,0.17024 3.88699,-3.2987 1.80274,-4.80078 4.04338,0.55402 -0.0863,-3.9955 2.83593,-4.63867 1.75476,1.23433 2.78792,-0.73129 3.65235,-1.92188 2.48946,-0.0335 1.64674,-3.81883 2.42969,-4.95898 1.3332,-0.72725 4.55029,-4.13338 1.9707,-4.05274 2.12162,-1.48489 1.00929,-2.46941 1.07617,-4.48242 0.37121,-0.6463 -2.30221,1.25931 -4.79883,0.96094 -1.33716,-3.70525 2.08657,-5.7721 1.44141,-9.22656 -1.48192,-1.82859 0.53144,-4.86525 2.66797,-4.31836 1.08072,-1.01974 2.21249,-2.36492 4.52148,-2.24024 2.02953,-2.02624 2.6303,-0.17082 3.68555,-0.16015 1.52832,-0.16171 2.14872,-1.88478 4.60351,-1.26368 3.45565,0.47445 5.59694,-1.56487 8.85547,-2.57617 2.64446,-3.50322 3.10894,-9.76587 4.96875,-12.03711 5.8565,-3.32402 3.43461,-6.66399 3.81055,-12.34179 -4.10307,-1.45087 0.5813,-10.16155 -4.39649,-7.47071 0.6638,-5.60742 -1.9225,-11.886 2.58594,-16.58984 5.29176,-3.93867 -5.08921,-5.33887 -3.80078,-10.30078 z" id="path1361" />
                        <text id="svgRegions" x="752" y="504">
                        <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Khoni' : 'ხონი'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'imereti/wyaltubo.php?lang=en' : 'imereti/wyaltubo.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group6-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 823.06836,486.66797 c -4.34401,-0.0323 -6.62194,4.61498 -8.1875,8.61719 -2.95678,3.19516 -6.66429,5.33869 -11.6875,4.95312 -5.79537,-0.42314 -8.61248,1.89338 -11.91016,6.16406 -2.85299,2.68362 -2.84611,9.45669 -6.45312,13.2461 -4.21351,1.24745 -4.51554,3.0175 -8.77344,2.55859 -2.8835,-1.00307 -4.01313,2.94269 -6.83594,1.28125 -0.88714,0.28704 -4.76713,-0.25304 -4.84179,2.03516 -1.96736,0.89258 -3.59536,-0.10623 -3.35352,2.81054 0.73301,3.08831 -0.17563,5.18558 -1.59375,7.51954 1.73256,3.30916 5.49785,-3.05503 5.11914,2.40039 0.70945,2.23399 0.53005,5.1716 -1.11719,6.51367 -0.42741,1.66057 -3.04835,1.65928 -1.58789,3.375 -1.10857,1.23721 -1.84872,5.65885 -3.31836,3.98633 -0.55423,2.81975 -3.82656,1.14598 -4.52343,2.93359 3.40253,1.45321 -2.03115,3.4165 -1.26953,6.18555 -3.21648,0.52405 -0.0978,4.79835 -2.71485,5.59961 -0.0422,3.00977 2.14722,4.37491 2.24024,7.13672 -0.4334,-0.69836 0.80897,5.67438 -1.44532,4.07226 0.81642,2.09726 0.79496,6.36363 -2.5664,6.7832 -2.50121,3.11679 0.62791,5.75159 0,7.44727 -1.61845,1.46984 -1.90867,3.13418 -0.64063,4.21289 -1.36436,2.33491 2.63282,3.28602 2.39844,6.22852 0.42901,3.82898 -3.89294,4.5581 -4.79688,8.94921 -2.99656,0.31073 -2.15073,4.3234 -4.75976,4.28907 -4.30823,-0.48012 -2.93232,3.72419 -7.75,3.65625 -4.45895,0.83722 0.039,3.18449 1.64258,4.39257 2.51475,3.27544 4.70215,1.48789 7.5625,-0.15624 2.27698,-1.95269 6.52962,-2.80486 7.4707,-2.5586 0.984,1.20255 2.92404,3.25674 0.79883,5.77734 -1.60139,0.95157 -3.86403,3.536 0.0957,3.74415 2.45438,-1.34038 4.18338,-3.10756 6.35156,-3.77344 5.95835,1.19752 2.34944,4.26107 2.46094,8.27734 -0.67893,1.62367 -3.78033,0.74034 -4.11914,3.6875 -0.0829,3.27613 0.54789,8.04293 2.2168,9.96485 2.62119,-0.26777 3.52883,-0.15936 6.09179,-0.80079 0.86922,3.16415 3.87858,0.94069 6.39844,1.44141 0.69302,1.8544 3.43292,-0.10176 4.64453,1.91406 2.28382,0.63119 4.9423,-2.38929 6.89844,0.32813 2.50387,-0.26944 6.67685,-1.44174 8.42969,1.36133 2.70142,-0.85077 1.94279,-4.68896 5.14648,-6.10547 3.40786,-0.90998 0.23308,-4.46831 3.25782,-4.53711 1.84818,-1.59403 3.11537,-3.74573 6.19726,-4.32031 3.87517,0.0666 4.7202,-5.24312 7.57617,-6.56055 -0.67297,-5.59195 3.59976,-11.41015 -0.46484,-16.1875 -1.55348,-2.72894 -4.6349,-1.96364 -4.49414,-5.45899 0.009,-3.38045 2.42648,-4.25913 -0.58789,-5.35351 1.64852,-3.11828 -3.78303,-4.32278 -3.78516,-1.69336 -2.30025,2.56606 -4.3356,-1.42534 -4.42383,-3.14648 0.41056,-1.42358 -3.95423,-1.31948 -1.92578,-3.67774 3.69545,-1.18015 -1.56701,-3.24308 0.96289,-5.49414 -1.82345,1.26373 -4.38677,3.41368 -5.27929,0.16016 0.80446,3.68181 -3.82347,3.93826 -6.3125,2.71875 -3.69949,0.94442 -3.84093,-4.43255 -6.96485,-4.32032 -0.47338,-3.39719 3.08104,-3.70655 2.24024,-7.30664 2.39614,-0.16905 5.59292,2.40596 8.59375,2.87891 2.13042,0.27861 2.93035,-2.86839 5.8164,-1.2793 0.41269,-1.68509 6.82868,0.0701 5.01172,-2.56054 4.45916,1.91497 3.21256,-4.11284 6.26172,-2.60352 1.87252,-3.67997 6.94181,-1.05274 8.25391,-3.63672 1.73622,1.02191 3.74187,2.07435 2.56054,-0.5332 -3.2854,0.0601 -1.47993,-4.14229 -3.52343,-5.1211 -0.0739,-2.06727 -2.44649,-5.65718 -1.35157,-7.14453 2.4186,-2.02376 3.04047,0.80508 4.14649,2.05469 -0.51025,-0.039 2.34228,4.17569 2.58984,5.45703 0.32,2.06996 1.79298,0.27622 3.13867,-0.3125 2.14985,-0.23655 3.60779,-3.7875 4.55469,-1.2832 -0.75754,-1.83753 0.24405,-3.20326 1.86133,-3.06055 3.30108,-4.32795 5.44443,-8.81547 2.10547,-13.82812 0.0833,-2.21737 0.28028,-2.46126 -0.24219,-4.5293 0.73801,-4.64593 -3.9917,-6.56144 -4.79492,-10.30859 -1.53963,-1.8434 -1.39528,-4.47184 -1.91406,-6.4043 1.26985,-3.33672 -1.06926,-5.53867 -1.76172,-7.83008 -1.38836,-5.23174 4.01046,0.62552 7.03125,-1.23633 4.13563,-1.03297 7.14833,-0.66208 11.48047,-1.26953 4.4518,1.39071 5.39403,-4.37224 8.84179,-2.68555 1.47551,-0.22057 4.49557,2.58757 5.14258,-1.76953 -1.47008,-5.7161 2.42052,-4.19701 3.98242,-6.82812 4.31858,-0.69121 7.51976,-4.8366 9.31836,-8.55859 2.10206,-3.69747 2.34972,-7.55034 -2.97461,-7.74024 -3.14818,-3.59491 -7.43283,-2.32547 -10.65625,-5.12305 -0.94221,1.83388 2.26494,3.51356 -1.03906,4.4375 -3.7525,4.35047 -10.69086,4.79937 -15.67578,2.60547 -3.29043,-4.1382 -6.20472,-8.15232 -12.48242,-6.74218 -0.70886,-0.21115 -1.37162,-0.31179 -1.99219,-0.31641 z" id="path1359" />
                        <text id="svgRegions" x="755" y="550">
                        <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Tskaltubo' : 'წყალტუბო'; ?>
                        </text>
                    </a>
                    <a xlink:href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'imereti/tyibuli.php?lang=en' : 'imereti/tyibuli.php?lang=ka'; ?>" class="text-decoration-none">
                        <path id="group6-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 870.50977,494.34961 c -0.59659,4.1317 -2.0662,7.4998 -4.8711,10.48047 -1.77289,3.4981 -6.06325,2.97086 -7.58398,6.01562 -4.09613,-1.56883 -1.0032,5.25377 -3.46485,7.20118 -3.10332,1.38847 -4.10062,0.61654 -6.90039,-0.3125 -1.9187,3.47448 -7.78176,2.46882 -11.51953,3.12109 -4.10919,-2.6e-4 -8.8239,2.15493 -13.16797,0.23047 0.24748,1.94857 3.32346,4.10693 2.07227,5.27929 -0.009,5.5143 0.89399,8.94259 4.03711,13.36719 3.16141,1.32863 0.94909,6.46138 3.64453,7.18164 -1.16332,2.00692 0.5464,3.00109 -0.68164,4.25196 2.84372,4.62565 1.47032,9.58327 -2.16016,13.57812 -0.66741,2.70376 -2.63653,0.46854 -1.78906,3.86328 -1.76297,0.46986 -3.58733,1.19263 -5.59766,1.92383 -5.05594,2.10281 1.9128,1.21918 0.16016,5.41797 1.79092,2.15602 -0.33377,5.95271 1.64648,7.9082 0.0379,-2.62682 3.0506,-0.70583 3.20704,-2.25195 0.85899,-3.20051 1.08152,-5.64434 1.11523,-6.86524 4.1573,-0.46941 8.66024,-4.10512 12.17187,-0.26367 4.20883,-0.89598 7.75752,2.32386 10.09766,5.95508 0.0454,5.2055 5.21626,2.54025 5.22266,6.61328 1.94686,2.531 7.01257,-1.60514 9.01758,2.2168 3.40605,-4.82696 8.26698,-4.38447 13.34375,-3.48242 3.87378,3.08242 8.09493,-3.4037 9.29492,-0.0215 1.19795,0.73969 4.82559,2.87114 6.02343,1.42774 -1.89529,-3.8692 -5.77593,-5.16664 -2.7207,-7.71094 4.0165,-0.71114 6.88899,-6.97829 12.15625,-6.49414 -2.06258,5.96539 6.0463,2.26843 8.75391,4.54297 -1.45855,2.26046 -4.84006,3.95307 -6.13477,6.38281 3.30984,-2.42194 10.80224,-1.91247 10.7168,3.47266 2.53747,-0.16715 6.44229,-1.68728 8.4043,-3.67969 0.48938,-3.7457 5.23245,-2.13486 7.67968,-4.47852 1.83812,-1.34792 -3.06075,-3.3068 1.6543,-3.7832 5.45224,0.83967 4.89499,-4.28006 6.30469,-7.26562 -0.44256,-2.50378 0.93238,-6.35504 0.63867,-9.94532 1.41001,-1.24488 1.81861,-5.5279 3.42969,-5.44726 1.29972,-2.77395 0.0507,-7.97305 -2.44141,-10.62305 -4.01575,-5.27761 -4.75595,3.08387 -8.7207,3.26953 -4.73811,-2.66643 -8.42955,1.97288 -13.60156,2.79688 -4.52999,-3.66109 -3.63198,-13.11565 -11.30274,-13.58789 -5.5287,-1.7755 -10.55455,4.63642 -15.14258,0.24414 0.19244,-3.22495 -3.69585,-12.82819 2.9668,-9.56836 5.92944,0.86206 5.25384,-7.28708 1.26367,-9.35938 -1.81821,-4.86652 -4.98884,-8.93508 -8.91797,-12.27734 -4.72422,-5.45062 -11.16743,-8.81205 -18.30273,-9.32422 z" id="path1357" />
                        <text id="svgRegions" x="840" y="550">
                        <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Tkibuli' : 'ტყიბული'; ?>
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
            $query = mysqli_query($link, "select * from `regions` where ID = 6");
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