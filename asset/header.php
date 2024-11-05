<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name

// Set the page title based on the current page
if ($current_page == 'adjara.php') {
    $page_title = $lang['adjaratitlename'];
} elseif ($current_page == 'guria.php') {
    $page_title = $lang['guriatitlename'];
} elseif ($current_page == 'imereti.php') {
    $page_title = $lang['imeretititlename'];
} elseif ($current_page == 'javaxeti.php') {
    $page_title = $lang['javakhetititlename'];
} elseif ($current_page == 'kakheti.php') {
    $page_title = $lang['kakhetititlename'];
} elseif ($current_page == 'mcxeta-mtianeti.php') {
    $page_title = $lang['mtskhetamtianetititlename'];
} elseif ($current_page == 'qvemo-qartli.php') {
    $page_title = $lang['kvemokartlititlename'];
} elseif ($current_page == 'racha.php') {
    $page_title = $lang['rachatitlename'];
} elseif ($current_page == 'kakheti.php') {
    $page_title = $lang['kakhetititlename'];
} elseif ($current_page == 'kakheti.php') {
    $page_title = $lang['kakhetititlename'];
} elseif ($current_page == 'samegrelo.php') {
    $page_title = $lang['samegrelotitlename'];
} elseif ($current_page == 'shida-qartli.php') {
    $page_title = $lang['shidakartlititlename'];
} else {
    $page_title = $lang['loadingtitlename'];
}

// Determine the language URLs based on the current page
if ($current_page == 'adjara.php') {
    $lang_url_ka = 'adjara.php?lang=ka';
    $lang_url_en = 'adjara.php?lang=en';
} elseif ($current_page == 'guria.php') {
    $lang_url_ka = 'guria.php?lang=ka';
    $lang_url_en = 'guria.php?lang=en';
} elseif ($current_page == 'imereti.php') {
    $lang_url_ka = 'imereti.php?lang=ka';
    $lang_url_en = 'imereti.php?lang=en';
} elseif ($current_page == 'javaxeti.php') {
    $lang_url_ka = 'javaxeti.php?lang=ka';
    $lang_url_en = 'javaxeti.php?lang=en';
} elseif ($current_page == 'kakheti.php') {
    $lang_url_ka = 'kakheti.php?lang=ka';
    $lang_url_en = 'kakheti.php?lang=en';
} elseif ($current_page == 'mcxeta-mtianeti.php') {
    $lang_url_ka = 'mcxeta-mtianeti.php?lang=ka';
    $lang_url_en = 'mcxeta-mtianeti.php?lang=en';
} elseif ($current_page == 'qvemo-qartli.php') {
    $lang_url_ka = 'qvemo-qartli.php?lang=ka';
    $lang_url_en = 'qvemo-qartli.php?lang=en';
} elseif ($current_page == 'racha.php') {
    $lang_url_ka = 'racha.php?lang=ka';
    $lang_url_en = 'racha.php?lang=en';
} elseif ($current_page == 'samegrelo.php') {
    $lang_url_ka = 'samegrelo.php?lang=ka';
    $lang_url_en = 'samegrelo.php?lang=en';
} elseif ($current_page == 'shida-qartli.php') {
    $lang_url_ka = 'shida-qartli.php?lang=ka';
    $lang_url_en = 'shida-qartli.php?lang=en';
} else {
    $lang_url_ka = 'default.php?lang=ka';
    $lang_url_en = 'default.php?lang=en';
}
?>

<div class="container-fluid">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <!-- Brand Logo on the left -->
        <div id="brand-logo" class="me-3">
            <a href="./index.php" id="brand-logo-link">
                <img src="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'images/logo_transparency_eng.png' : 'images/logo_transparency_geo.png'; ?>" alt="Brand Logo" class="img-fluid" style="width: 100px; height: auto;" />
            </a>
        </div>

        <!-- Page Title centered -->
        <h1 id="pagetitlename" class="tr mx-auto text-center" Key="REGION14" style="flex-grow: 1;">
            <?php echo $page_title; ?>
        </h1>

        <!-- Languages on the right -->
        <div id="languages" class="d-flex">
            <a href="<?php echo $lang_url_ka; ?>" id="ka" class="lang me-2">
                <img src="images/ka.png" alt="Georgian Language" class="img-fluid" style="width: 25px; height: auto;" />
            </a>
            <a href="<?php echo $lang_url_en; ?>" id="en" class="lang">
                <img src="images/en.png" alt="English Language" class="img-fluid" style="width: 25px; height: auto;" />
            </a>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="d-flex justify-content-between">
        <div>
            <a class="btn header-btn" onclick="previous()">
                <span class="tr" Key="backBtn"><?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Back' : 'უკან დაბრუნება'; ?></span>
            </a>
        </div>

        <div class="d-flex">
            <a class="btn header-btn me-2" href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'listEN.php' : 'list.php'; ?>">
                <span class="tr" Key="regionsBtn">
                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Comparison of Regions' : 'რეგიონების შედარება'; ?>
                </span>
            </a>

            <a class="btn header-btn me-2" href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'muncomEN.php?lang=en' : 'muncom.php?lang=ka'; ?>">
                <span class="tr" Key="regionsBtn">
                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Comparison of Municipalities' : 'მუნიციპალიტეტების შედარება'; ?>
                </span>
            </a>

            <a class="btn header-btn" href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? './genders/genders_reg.php?lang=en' : './genders/genders_reg.php?lang=ka'; ?>">
                <span class="tr" Key="regionsBtn">
                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Gender-based indicators' : 'გენდერული სტატისტიკა'; ?>
                </span>
            </a>
        </div>
    </div>
</div>