<?php
include "../config.php";
?>

<?php
$current_page = isset($_GET['region']) ? $_GET['region'] : basename($_SERVER['PHP_SELF']);
$region = isset($_GET['region']) ? $_GET['region'] : '';

if ($current_page == 'adjara') {
    $page_title = $lang['adjaratitlename'];
} elseif ($current_page == 'guria') {
    $page_title = $lang['guriatitlename'];
} elseif ($current_page == 'imereti') {
    $page_title = $lang['imeretititlename'];
} elseif ($current_page == 'samtskhe_javakheti') {
    $page_title = $lang['javakhetititlename'];
} elseif ($current_page == 'Kakheti') {
    $page_title = $lang['kakhetititlename'];
} elseif ($current_page == 'mtskheta_mtianeti') {
    $page_title = $lang['mtskhetamtianetititlename'];
} elseif ($current_page == 'kvemo_kartli') {
    $page_title = $lang['kvemokartlititlename'];
} elseif ($current_page == 'Racha') {
    $page_title = $lang['rachatitlename'];
} elseif ($current_page == 'Samegrelo') {
    $page_title = $lang['samegrelotitlename'];
} elseif ($current_page == 'shida_kartli') {
    $page_title = $lang['shidakartlititlename'];
} elseif ($current_page == 'Tbilisi') {
    $page_title = $lang['tbilisititlename'];
} else {
    $page_title = $lang['loadingtitlename'];
}

$lang_url_ka = "genders_reg.php?region=$region&lang=ka";
$lang_url_en = "genders_reg.php?region=$region&lang=en";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:url" content="http://www.geostat.ge/regions/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $page_title ?>" id="og-title" />
    <meta property="og:description" content="<?php echo $page_title ?>" id="og-description" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />

    <title class="tr" Key="PAGE_TITLE" id="page-title"><?php echo $page_title ?></title>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <!-- Bootstrap 5.3.0 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">

    <!-- Custom and Project-specific CSS -->
    <link rel="stylesheet" type="text/css" href="../samegrelo.css">
    <link rel="stylesheet" type="text/css" href="../custom.css">
    <link rel="stylesheet" type="text/css" href="css/genders.css">
    <link rel="stylesheet" href="../mediastyles.css">

    <!-- GSAP for Animations -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
</head>

<body>
    <div id="background-main" class="background-image"></div>
    <div class="container-fluid">
        <div class="content">
            <?php include "components/header.php"; ?>

            <div class="center">
                <table class="container gender_table">
                    <?php
                    include('../connection.php');
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
                    ?> <tr style="justify-content: center;">
                        <th><?php echo $lang['genderTitleName'] ?></th>
                    </tr>
                    <tbody>
                        <tr>
                            <td id="genderListTitle" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $lang['demograph'] ?></td>
                        </tr>
                        <tr>
                            <td id="genderListTitle" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $birth['1']; ?></td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <span id="birth4"><?php echo $birth['4']; ?></span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkBirths" href="#">
                                        <img src="../images/excel-9-24.png" alt="excel" width="25" height="25">
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
                                        <img src="../images/excel-9-24.png" alt="excel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr class="informacia3">
                            <td>
                                <span id="birth6"><?php echo $birth['6']; ?></span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="motherAge" href="#">
                                        <img src="../images/excel-9-24.png" alt="excel" width="25" height="25">
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
                                        <img src="../images/excel-9-24.png" alt="excel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td id="genderListTitle" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $death['1']; ?></td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <span id="death4"> <?php echo $death['4']; ?></span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkdeathagesex" href="#">
                                        <img src="../images/excel-9-24.png" alt="excel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <span id="death7">
                                    <?php echo $death['7']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkdeathclases" href="#">
                                        <img src="../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td id="genderListTitle" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $marriage['1']; ?></td>
                        </tr>
                        <tr class="informacia6">
                            <td>
                                <span id="marriage4">
                                    <?php echo $marriage['4']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkagemarriage" href="#">
                                        <img src="../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr class="informacia6">
                            <td>
                                <span id="marriage5">
                                    <?php echo $marriage['5']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkmeanagemarriage" href="#">
                                        <img src="../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td id="genderListTitle" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $divorce['1']; ?></td>
                        </tr>
                        <tr class="informacia7">
                            <td>
                                <span id="divorce4">
                                    <?php echo $divorce['4']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linknumberdivorce" href="#">
                                        <img src="../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td id="genderListTitle" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $populationDescription['1']; ?></td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <span id="populationDescription2">
                                    <?php echo $populationDescription['2']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkpopulationDescription2" href="#">
                                        <img src="../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <span id="populationDescription3">
                                    <?php echo $populationDescription['3']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkpopulationDescription3" href="#">
                                        <img src="../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <span id="populationDescription4">
                                    <?php echo $populationDescription['4']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkpopulationDescription4" href="#">
                                        <img src="../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <span id="populationDescription5">
                                    <?php echo $populationDescription['5']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkpopulationDescription5" href="#">
                                        <img src="../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <span id="populationDescription6">
                                    <?php echo $populationDescription['6']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkpopulationDescription6" href="#">
                                        <img src="../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td id="genderListTitle" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $hotelsAndRestaurants['1']; ?></td>
                        </tr>
                        <tr class="informacia18">
                            <td>
                                <span id="hotels5">
                                    <?php echo $hotelsAndRestaurants['6']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkhotels5" href="#">
                                        <img src="../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td id="genderListTitle" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $healthCareAndSocialSecurity['1']; ?></td>
                        </tr>
                        <tr>
                            <td id="genderListTitle" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $healthCareAndSocialSecurity['2']; ?></td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <span id="healthCareAndSocialSecurity4">
                                    <?php echo $healthCareAndSocialSecurity['4']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkhealthCareAndSocialSecurity4" href="#">
                                        <img src="../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <span id="healthCareAndSocialSecurity7">
                                    <?php echo $healthCareAndSocialSecurity['7']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkhealthCareAndSocialSecurity7" href="#">
                                        <img src="../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <span id="healthCareAndSocialSecurity8">
                                    <?php echo $healthCareAndSocialSecurity['8']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkhealthCareAndSocialSecurity8" href="#">
                                        <img src="../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <span id="healthCareAndSocialSecurity9">
                                    <?php echo $healthCareAndSocialSecurity['9']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkhealthCareAndSocialSecurity9" href="#">
                                        <img src="../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <span id="healthCareAndSocialSecurity10">
                                    <?php echo $healthCareAndSocialSecurity['10']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkhealthCareAndSocialSecurity10" href="#">
                                        <img src="../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <span id="healthCareAndSocialSecurity11">
                                    <?php echo $healthCareAndSocialSecurity['11']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkhealthCareAndSocialSecurity11" href="#">
                                        <img src="../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <span id="healthCareAndSocialSecurity12">
                                    <?php echo $healthCareAndSocialSecurity['12']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkhealthCareAndSocialSecurity12" href="#">
                                        <img src="../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td id="genderListTitle" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $healthCareAndSocialSecurity['14']; ?></td>
                        </tr>
                        <tr class="informacia10">
                            <td>
                                <span id="healthCareAndSocialSecurity15">
                                    <?php echo $healthCareAndSocialSecurity['15']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkhealthCareAndSocialSecurity15" href="#">
                                        <img src="../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr class="informacia10">
                            <td>
                                <span id="healthCareAndSocialSecurity20">
                                    <?php echo $healthCareAndSocialSecurity['20']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkhealthCareAndSocialSecurity20" href="#">
                                        <img src="../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td id="genderListTitle" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $education['1']; ?></td>
                        </tr>
                        <tr class="informacia11">
                            <td>
                                <span id="education2">
                                    <?php echo $education['2']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkeducation2" href="#">
                                        <img src="../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr class="informacia11">
                            <td>
                                <span id="education3">
                                    <?php echo $education['3']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkeducation3" href="#">
                                        <img src="../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include '../asset/components/footer.php' ?>

    <script src="../script.js"></script>
    <script src="../asset/script/genders_reg.js"></script>
    <script type="../text/javascript" src="lang.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>