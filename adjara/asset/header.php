<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name

// Set the page title based on the current page
if ($current_page == 'qeda.php') {
    $page_title = $lang['kedatitlename']; // Change this to the appropriate key for the Qeda title
} else {
    $page_title = $lang['batumititlename']; // Default to Batumi title
}

// Determine the language URLs based on the current page
$lang_url_ka = ($current_page == 'qeda.php') ? 'qeda.php?lang=ka' : 'batumi.php?lang=ka';
$lang_url_en = ($current_page == 'qeda.php') ? 'qeda.php?lang=en' : 'batumi.php?lang=en';
?>

<div class="container-fluid">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <!-- Brand Logo on the left -->
        <div id="brand-logo" class="me-3">
            <a href="index.php" id="brand-logo-link">
                <img src="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '../images/logo_transparency_eng.png' : '../images/logo_transparency_geo.png'; ?>" alt="Brand Logo" class="img-fluid" style="width: 100px; height: auto;" />
            </a>
        </div>

        <!-- Page Title centered -->
        <h1 id="pagetitlename" class="tr mx-auto text-center" Key="REGION14" style="font-size: 28px; flex-grow: 1;">
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
        <!-- Back Button on the left -->
        <div>
            <a class="btn header-btn" href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '../adjara.php?lang=en' : '../adjara.php?lang=ka'; ?>">
                <span class="tr" Key="backBtn">
                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Back' : 'უკან დაბრუნება'; ?>
                </span>
            </a>
        </div>

        <!-- Right buttons for region and municipality comparison -->
        <div class="d-flex">
            <a class="btn header-btn me-2" href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '../listEN.php' : '../list.php'; ?>">
                <span class="tr" Key="regionsBtn">
                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Comparison of Regions' : 'რეგიონების შედარება'; ?>
                </span>
            </a>

            <a class="btn header-btn me-2" href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '../muncomEN.php?lang=en' : '../muncom.php?lang=ka'; ?>">
                <span class="tr" Key="regionsBtn">
                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Comparison of Municipalities' : 'მუნიციპალიტეტების შედარება'; ?>
                </span>
            </a>

            <a class="btn header-btn" href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '../adjara/genders/genders.php?lang=en' : '../adjara/genders/genders.php?lang=ka'; ?>">
                <span class="tr" Key="regionsBtn">
                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Gender-based indicators' : 'გენდერული სტატისტიკა'; ?>
                </span>
            </a>
        </div>
    </div>
</div>