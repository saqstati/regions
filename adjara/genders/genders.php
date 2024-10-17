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

    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">

    <!-- Custom and Project-specific CSS -->
    <link rel="stylesheet" type="text/css" href="../../samegrelo.css">
    <link rel="stylesheet" type="text/css" href="../../adjara/adjara.css">
    <link rel="stylesheet" type="text/css" href="../../custom.css">
    <link rel="stylesheet" type="text/css" href="../../genders.css">
    <link rel="stylesheet" href="../../mediastyles.css">

    <!-- GSAP for Animations -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>

    <!-- Bootstrap 5.3.0 JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="background-main" class="background-image"></div>
    <div class="main-container">
        <div class="content">
            <?php
            $current_page = basename($_SERVER['PHP_SELF']); // Get the current page name

            // Set the page title based on the current page
            if ($current_page == 'genders.php') {
                $page_title = $lang['kedatitlename']; // Change this to the appropriate key for the Gender page title
            } else {
                $page_title = $lang['batumititlename']; // Default to Batumi title
            }

            // Determine the language URLs based on the current page
            $lang_url_ka = ($current_page == 'genders.php') ? 'genders.php?lang=ka' : 'batumi.php?lang=ka';
            $lang_url_en = ($current_page == 'genders.php') ? 'genders.php?lang=en' : 'batumi.php?lang=en';
            ?>

            <div class="container">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <!-- Brand Logo on the left -->
                    <div id="brand-logo" class="me-3">
                        <a href="../regions/index.php" id="brand-logo-link">
                            <img src="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '../../images/logo_transparency_eng.png' : '../../images/logo_transparency_geo.png'; ?>" alt="Brand Logo" class="img-fluid" style="width: 100px; height: auto;" />
                        </a>
                    </div>

                    <!-- Page Title centered -->
                    <h1 id="pagetitlename" class="tr mx-auto text-center" Key="REGION14" style="font-size: 20px; flex-grow: 1;">
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

            <div class="container">
                <div class="d-flex justify-content-between">
                    <a class="btn header-btn" onclick="previous()"> <span class="tr" Key="backBtn"><?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Back' : 'უკან დაბრუნება'; ?></span></a>
                </div>
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
                    ?> <tr style="justify-content: center;">
                        <th><?php echo $lang['munstat'] ?></th>
                    </tr>
                    <tbody>
                        <tr class="informacia3">
                            <td>
                                <span id="birth4"><?php echo $birth['4']; ?></span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkBirths" href="#">
                                        <img src="../..//images/excel-9-24.png" alt="excel" width="25" height="25">
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
                                        <img src="../..//images/excel-9-24.png" alt="excel" width="25" height="25">
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
                                        <img src="../..//images/excel-9-24.png" alt="excel" width="25" height="25">
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
                                        <img src="../..//images/excel-9-24.png" alt="excel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr class="informacia4">
                            <td>
                                <span id="death4"> <?php echo $death['4']; ?></span>
                            </td>
                            <td>
                                <span class="float-right">
                                    <a id="linkdeathagesex" href="#">
                                        <img src="../..//images/excel-9-24.png" alt="excel" width="25" height="25">
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
                                        <img src="../..//images/excel-9-24.png" alt="exel" width="25" height="25">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr class="informacia6">
                            <td>
                                <?php echo $marriage['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20married%20people/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../..//images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia6">
                            <td>
                                <?php echo $marriage['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../..//images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia7">
                            <td>
                                <?php echo $divorce['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../..//images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['2']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/C.%20Batumi.xlsx' : '/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../..//images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/C.%20Batumi.xlsx' : '/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../..//images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/C.%20Batumi.xlsx' : '/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../..//images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population%20census/Number%20of%20population/C.%20Batumi.xlsx' : '/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../..//images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia8">
                            <td>
                                <?php echo $populationDescription['6']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/C.%20Batumi.xlsx' : '/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../..//images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <?php echo $employmentAndSalaries['2']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../..//images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <?php echo $employmentAndSalaries['3']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../..//images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia9">
                            <td>
                                <?php echo $employmentAndSalaries['4']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../..//images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>
                        <tr class="informacia18">
                            <td>
                                <?php echo $hotels['5']; ?>
                            </td>
                            <td>
                                <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../..//images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>

</html>