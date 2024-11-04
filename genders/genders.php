<?php
include "../config.php";
?>

<?php
$current_page = isset($_GET['municipal']) ? $_GET['municipal'] : basename($_SERVER['PHP_SELF']);
$municipal = isset($_GET['municipal']) ? $_GET['municipal'] : '';

if ($current_page == 'Keda') {
    $page_title = $lang['kedatitlename'];
} elseif ($current_page == 'Kobuleti') {
    $page_title = $lang['kobuletititlename'];
} elseif ($current_page == 'batumi') {
    $page_title = $lang['batumititlename'];
} elseif ($current_page == 'Khelvachauri') {
    $page_title = $lang['khelvachaurititlename'];
} elseif ($current_page == 'Shuakhevi') {
    $page_title = $lang['shuakhevititlename'];
} elseif ($current_page == 'Khulo') {
    $page_title = $lang['khulotitlename'];
} elseif ($current_page == 'Lanchkhuti') {
    $page_title = $lang['lanchkhutititlename'];
} elseif ($current_page == 'Ozurgeti') {
    $page_title = $lang['ozurgetititlename'];
} elseif ($current_page == 'Chokhatauri') {
    $page_title = $lang['chokhataurititlename'];
} elseif ($current_page == 'Khoni') {
    $page_title = $lang['khonititlename'];
} elseif ($current_page == 'Baghdati') {
    $page_title = $lang['baghdadititlename'];
} elseif ($current_page == 'Chiatura') {
    $page_title = $lang['chiaturatitlename'];
} elseif ($current_page == 'Kutaisi') {
    $page_title = $lang['kutaisititlename'];
} elseif ($current_page == 'Sachkhere') {
    $page_title = $lang['sachkheretitlename'];
} elseif ($current_page == 'Samtredia') {
    $page_title = $lang['samtrediatitlename'];
} elseif ($current_page == 'Terjola') {
    $page_title = $lang['terjolatitlename'];
} elseif ($current_page == 'Tkibuli') {
    $page_title = $lang['tkibulititlename'];
} elseif ($current_page == 'Vani') {
    $page_title = $lang['vanititlename'];
} elseif ($current_page == 'Tskaltubo') {
    $page_title = $lang['tskaltubotitlename'];
} elseif ($current_page == 'Kharagauli') {
    $page_title = $lang['kharagaulititlename'];
} elseif ($current_page == 'Zestaponi') {
    $page_title = $lang['zestaponititlename'];
} elseif ($current_page == 'Adigeni') {
    $page_title = $lang['adigenititlename'];
} elseif ($current_page == 'Aspindza') {
    $page_title = $lang['aspindzatitlename'];
} elseif ($current_page == 'Akhaltsikhe') {
    $page_title = $lang['akhaltsikhetitlename'];
} elseif ($current_page == 'Akhalkalaki') {
    $page_title = $lang['akhalkalakititlename'];
} elseif ($current_page == 'Borjomi') {
    $page_title = $lang['borjomititlename'];
} elseif ($current_page == 'Ninotsminda') {
    $page_title = $lang['ninotsmindatitlename'];
} elseif ($current_page == 'Gardabani') {
    $page_title = $lang['gardabanititlename'];
} elseif ($current_page == 'Bolnisi') {
    $page_title = $lang['bolnisititlename'];
} elseif ($current_page == 'Dmanisi') {
    $page_title = $lang['dmanisititlename'];
} elseif ($current_page == 'Tetritskaro') {
    $page_title = $lang['tetritskarotitlename'];
} elseif ($current_page == 'Tsalka') {
    $page_title = $lang['tsalkatitlename'];
} elseif ($current_page == 'Marneuli') {
    $page_title = $lang['marneulititlename'];
} elseif ($current_page == 'Lagodekhi') {
    $page_title = $lang['lagodekhititlename'];
} elseif ($current_page == 'Gurjaani') {
    $page_title = $lang['gurjaanititlename'];
} elseif ($current_page == 'Kvareli') {
    $page_title = $lang['kvarelititlename'];
} elseif ($current_page == 'Telavi') {
    $page_title = $lang['telavititlename'];
} elseif ($current_page == 'Sagarejo') {
    $page_title = $lang['sagarejotitlename'];
} elseif ($current_page == 'Dedoplistskaro') {
    $page_title = $lang['dedoplistskarotitlename'];
} elseif ($current_page == 'Sighnaghi') {
    $page_title = $lang['sighnaghititlename'];
} elseif ($current_page == 'Mtskheta') {
    $page_title = $lang['mtskhetatitlename'];
} elseif ($current_page == 'Dusheti') {
    $page_title = $lang['dushetititlename'];
} elseif ($current_page == 'Kazbegi') {
    $page_title = $lang['kazbegititlename'];
} elseif ($current_page == 'Tianeti') {
    $page_title = $lang['tianetititlename'];
} elseif ($current_page == 'Akhmeta') {
    $page_title = $lang['akhmetatitlename'];
} elseif ($current_page == 'Gori') {
    $page_title = $lang['gorititlename'];
} elseif ($current_page == 'Kaspi') {
    $page_title = $lang['kaspititlename'];
} elseif ($current_page == 'Kareli') {
    $page_title = $lang['karelitiitlename'];
} elseif ($current_page == 'Javakheti') {
    $page_title = $lang['javakhetititlename'];
} elseif ($current_page == 'Tskhinvali') {
    $page_title = $lang['tskhinvalititlename'];
} elseif ($current_page == 'Khashuri') {
    $page_title = $lang['khashuritiitlename'];
} elseif ($current_page == 'Rustavi') {
    $page_title = $lang['rustavititlename'];
} elseif ($current_page == 'Zugdidi') {
    $page_title = $lang['zugdidititlename'];
} elseif ($current_page == 'Tsalenjikha') {
    $page_title = $lang['tsalenjikhatitlename'];
} elseif ($current_page == 'Jvari') {
    $page_title = $lang['jvarititlename'];
} elseif ($current_page == 'Abasha') {
    $page_title = $lang['abashatitlename'];
} elseif ($current_page == 'Poti') {
    $page_title = $lang['potititlename'];
} elseif ($current_page == 'Senaki') {
    $page_title = $lang['senakititlename'];
} elseif ($current_page == 'Khobi') {
    $page_title = $lang['khobititlename'];
} elseif ($current_page == 'Martvili') {
    $page_title = $lang['martvilititlename'];
} elseif ($current_page == 'Chkhorotsku') {
    $page_title = $lang['chkhorotskutitlename'];
} elseif ($current_page == 'Tsageri') {
    $page_title = $lang['tsagerititlename'];
} elseif ($current_page == 'Lentekhi') {
    $page_title = $lang['lentekhititlename'];
} elseif ($current_page == 'Mestia') {
    $page_title = $lang['mestiatitlename'];
} elseif ($current_page == 'Tbilisi') {
    $page_title = $lang['tbilisititlename'];
} elseif ($current_page == 'Ambrolauri') {
    $page_title = $lang['ambrolaurititlename'];
} elseif ($current_page == 'Oni') {
    $page_title = $lang['onititlename'];
} else {
    $page_title = $lang['loadingtitlename'];
}

$lang_url_ka = "genders.php?municipal=$municipal&lang=ka";
$lang_url_en = "genders.php?municipal=$municipal&lang=en";
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
    <!-- Bootstrap 5.3.0 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

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
    <div class="main-container">
        <div class="content">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <!-- Brand Logo on the left -->
                    <div id="brand-logo" class="me-3">
                        <a href="../index.php" id="brand-logo-link">
                            <img src="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '../images/logo_transparency_eng.png' : '../images/logo_transparency_geo.png'; ?>" alt="Brand Logo" class="img-fluid" style="width: 100px; height: auto;" />
                        </a>
                    </div>

                    <!-- Page Title centered -->
                    <h1 id="pagetitlename" class="tr mx-auto text-center" Key="REGION14" style="flex-grow: 1;">
                        <?php echo $page_title; ?>
                    </h1>

                    <!-- Languages on the right -->
                    <div id="languages" class="d-flex">
                        <a href="<?php echo $lang_url_ka; ?>" id="ka" class="lang me-2">
                            <img src="../images/ka.png" alt="Georgian Language" class="img-fluid" style="width: 25px; height: auto;" />
                        </a>
                        <a href="<?php echo $lang_url_en; ?>" id="en" class="lang">
                            <img src="../images/en.png" alt="English Language" class="img-fluid" style="width: 25px; height: auto;" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <a class="btn header-btn" onclick="previous()"> <span class="tr" Key="backBtn"><?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Back' : 'უკან დაბრუნება'; ?></span></a>
                </div>
            </div>

            <div class="center">
                <table class="container gender_table">
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
                            <td id="genderListTitle" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $employmentAndSalaries['1']; ?></td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <span id="employmentAndSalaries2">
                                    <?php echo $employmentAndSalaries['2']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkemploymentAndSalaries2" href="#">
                                        <img src="../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <span id="employmentAndSalaries3">
                                    <?php echo $employmentAndSalaries['3']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkemploymentAndSalaries3" href="#">
                                        <img src="../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <span id="employmentAndSalaries4">
                                    <?php echo $employmentAndSalaries['4']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkemploymentAndSalaries4" href="#">
                                        <img src="../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td id="genderListTitle" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $hotels['1']; ?></td>
                        </tr>
                        <tr class="informacia18">
                            <td>
                                <span id="hotels5">
                                    <?php echo $hotels['5']; ?>
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
                        <tr class="informacia21">
                            <td>
                                <span id="healthCareAndSocialSecurity21">
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
                        <tr>
                            <td id="genderListTitle" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $education['1']; ?></td>
                        </tr>
                        <tr class="informacia22">
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
                        <tr class="informacia22">
                            <td>
                                <span id="education4">
                                    <?php echo $education['4']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkeducation4" href="#">
                                        <img src="../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php include '../footer_mun.php' ?>
    </div>

    <script src="../script.js"></script>
    <script src="../genders.js"></script>
    <script type="../text/javascript" src="lang.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>

</html>