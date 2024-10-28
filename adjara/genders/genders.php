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

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Bootstrap 5.3.0 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">

    <!-- Custom and Project-specific CSS -->
    <link rel="stylesheet" type="text/css" href="../../samegrelo.css">
    <link rel="stylesheet" type="text/css" href="../../adjara/adjara.css">
    <link rel="stylesheet" type="text/css" href="../../custom.css">
    <link rel="stylesheet" type="text/css" href="../../genders.css">
    <link rel="stylesheet" href="../../mediastyles.css">

    <!-- GSAP for Animations -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
</head>

<body>
    <div id="background-main" class="background-image"></div>
    <div class="main-container">
        <div class="content">
            <?php
            // Get the municipal value from the URL parameters or fallback to the current page name
            $current_page = isset($_GET['municipal']) ? $_GET['municipal'] : basename($_SERVER['PHP_SELF']);

            // For debugging, you can uncomment the line below
            // print_r($current_page); 

            $municipal = isset($_GET['municipal']) ? $_GET['municipal'] : '';

            if ($current_page == 'qeda') {
                $page_title = $lang['kedatitlename'];
            } elseif ($current_page == 'qobuleti') {
                $page_title = $lang['kobuletititlename'];
            } elseif ($current_page == 'batumi') {
                $page_title = $lang['batumititlename'];
            } elseif ($current_page == 'xelvachauri') {
                $page_title = $lang['khelvachaurititlename'];
            } elseif ($current_page == 'Shuakhevi') {
                $page_title = $lang['shuakhevititlename'];
            } elseif ($current_page == 'Khulo') {
                $page_title = $lang['khulotitlename'];
            }

            $lang_url_ka = "genders.php?municipal=$municipal&lang=ka";
            $lang_url_en = "genders.php?municipal=$municipal&lang=en";
            ?>

            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <!-- Brand Logo on the left -->
                    <div id="brand-logo" class="me-3">
                        <a href="../../index.php" id="brand-logo-link">
                            <img src="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '../../images/logo_transparency_eng.png' : '../../images/logo_transparency_geo.png'; ?>" alt="Brand Logo" class="img-fluid" style="width: 100px; height: auto;" />
                        </a>
                    </div>

                    <!-- Page Title centered -->
                    <h1 id="pagetitlename" class="tr mx-auto text-center" Key="REGION14" style="flex-grow: 1;">
                        <?php echo $page_title; ?>
                    </h1>

                    <!-- Languages on the right -->
                    <div id="languages" class="d-flex">
                        <a href="<?php echo $lang_url_ka; ?>" id="ka" class="lang me-2">
                            <img src="../../images/ka.png" alt="Georgian Language" class="img-fluid" style="width: 25px; height: auto;" />
                        </a>
                        <a href="<?php echo $lang_url_en; ?>" id="en" class="lang">
                            <img src="../../images/en.png" alt="English Language" class="img-fluid" style="width: 25px; height: auto;" />
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
                                        <img src="../../images/excel-9-24.png" alt="excel" width="25" height="25">
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
                                        <img src="../../images/excel-9-24.png" alt="excel" width="25" height="25">
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
                                        <img src="../../images/excel-9-24.png" alt="excel" width="25" height="25">
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
                                        <img src="../../images/excel-9-24.png" alt="excel" width="25" height="25">
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
                                        <img src="../../images/excel-9-24.png" alt="excel" width="25" height="25">
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
                                        <img src="../../images/excel-9-24.png" alt="exel" width="25" height="25">
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
                                        <img src="../../images/excel-9-24.png" alt="exel" width="25" height="25">
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
                                        <img src="../../images/excel-9-24.png" alt="exel" width="25" height="25">
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
                                        <img src="../../images/excel-9-24.png" alt="exel" width="25" height="25">
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
                                        <img src="../../images/excel-9-24.png" alt="exel" width="25" height="25">
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
                                        <img src="../../images/excel-9-24.png" alt="exel" width="25" height="25">
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
                                        <img src="../../images/excel-9-24.png" alt="exel" width="25" height="25">
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
                                        <img src="../../images/excel-9-24.png" alt="exel" width="25" height="25">
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
                                        <img src="../../images/excel-9-24.png" alt="exel" width="25" height="25">
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
                                        <img src="../../images/excel-9-24.png" alt="exel" width="25" height="25">
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
                                        <img src="../../images/excel-9-24.png" alt="exel" width="25" height="25">
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
                                        <img src="../../images/excel-9-24.png" alt="exel" width="25" height="25">
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
                                        <img src="../../images/excel-9-24.png" alt="exel" width="25" height="25">
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
                                        <img src="../../images/excel-9-24.png" alt="exel" width="25" height="25">
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
                                        <img src="../../images/excel-9-24.png" alt="exel" width="25" height="25">
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
                                        <img src="../../images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php include '../../footer_mun.php' ?>
    </div>

    <script src="../../script.js"></script>
    <script src="../../genders.js"></script>
    <script type="../../text/javascript" src="lang.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function updatePageTitleAndMeta() {

                // Retrieve the 'municipal' value from localStorage
                var municipality = localStorage.getItem("municipal");

                // Retrieve the 'lang' parameter from the PHP code
                var lang = '<?php echo (isset($_GET['lang']) ? $_GET['lang'] : "ka"); ?>';

                // Construct the new URL, ensuring both 'municipal' and 'lang' parameters are included
                var newUrl = window.location.href.split("?")[0] + "?municipal=" + municipality + "&lang=" + lang;

                // Perform the redirection only if the current URL is different from the constructed one
                if (window.location.href !== newUrl) {
                    window.location.href = newUrl; // This prevents an infinite loop
                }


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
                        case "qobuleti":
                            pageTitle = lang === "en" ? "Statistical Information on Kobuleti Municipality, Adjara Region" : "სტატისტიკური ინფორმაცია აჭარის რეგიონის ქობულეთის მუნიციპალიტეტის შესხებ";
                            ogTitle = "Statistical Information on Kobuleti Municipality, Adjara Region";
                            ogDescription = "Statistical Information on Kobuleti Municipality, Adjara Region";
                            break;
                        case "xelvachauri":
                            pageTitle = lang === "en" ? "Statistical Information on Khelvachauri Municipality, Adjara Region" : "სტატისტიკური ინფორმაცია აჭარის რეგიონის ხელვაჩაურის მუნიციპალიტეტის შესხებ";
                            ogTitle = "Statistical Information on Khelvachauri Municipality, Adjara Region";
                            ogDescription = "Statistical Information on Khelvachauri Municipality, Adjara Region";
                            break;
                        case "Shuakhevi":
                            pageTitle = lang === "en" ? "Statistical Information on Shuakhevi Municipality, Adjara Region" : "სტატისტიკური ინფორმაცია აჭარის რეგიონის შუახევის მუნიციპალიტეტის შესხებ";
                            ogTitle = "Statistical Information on Shuakhevi Municipality, Adjara Region";
                            ogDescription = "Statistical Information on Shuakhevi Municipality, Adjara Region";
                            break;
                        case "Khulo":
                            pageTitle = lang === "en" ? "Statistical Information on Khulo Municipality, Adjara Region" : "სტატისტიკური ინფორმაცია აჭარის რეგიონის ხულოს მუნიციპალიტეტის შესხებ";
                            ogTitle = "Statistical Information on Khulo Municipality, Adjara Region";
                            ogDescription = "Statistical Information on Khulo Municipality, Adjara Region";
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>

</html>