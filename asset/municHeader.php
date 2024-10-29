<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name

if ($current_page == 'qeda.php') {
    $page_title = $lang['kedatitlename'];
} elseif ($current_page == 'batumi.php') {
    $page_title = $lang['batumititlename'];
} elseif ($current_page == 'qobuleti.php') {
    $page_title = $lang['kobuletititlename'];
} elseif ($current_page == 'xelvachauri.php') {
    $page_title = $lang['khelvachaurititlename'];
} elseif ($current_page == 'shuaxevi.php') {
    $page_title = $lang['shuakhevititlename'];
} elseif ($current_page == 'xulo.php') {
    $page_title = $lang['khulotitlename'];
} elseif ($current_page == 'lanchxuti.php') {
    $page_title = $lang['lanchkhutititlename'];
} elseif ($current_page == 'ozurgeti.php') {
    $page_title = $lang['ozurgetititlename'];
} elseif ($current_page == 'choxatauri.php') {
    $page_title = $lang['chokhataurititlename'];
} elseif ($current_page == 'khoni.php') {
    $page_title = $lang['khonititlename'];
} elseif ($current_page == 'bagdadi.php') {
    $page_title = $lang['baghdadititlename'];
} elseif ($current_page == 'chiatura.php') {
    $page_title = $lang['chiaturatitlename'];
} elseif ($current_page == 'kutaisi.php') {
    $page_title = $lang['kutaisititlename'];
} elseif ($current_page == 'sachxere.php') {
    $page_title = $lang['sachkheretitlename'];
} elseif ($current_page == 'samtredia.php') {
    $page_title = $lang['samtrediatitlename'];
} elseif ($current_page == 'terjola.php') {
    $page_title = $lang['terjolatitlename'];
} elseif ($current_page == 'tyibuli.php') {
    $page_title = $lang['tkibulititlename'];
} elseif ($current_page == 'vani.php') {
    $page_title = $lang['vanititlename'];
} elseif ($current_page == 'wyaltubo.php') {
    $page_title = $lang['tskaltubotitlename'];
} elseif ($current_page == 'xaragauli.php') {
    $page_title = $lang['kharagaulititlename'];
} elseif ($current_page == 'zestafoni.php') {
    $page_title = $lang['zestaponititlename'];
}

// Determine the language URLs based on the current page
if ($current_page == 'qeda.php') {
    $lang_url_ka = 'qeda.php?lang=ka';
    $lang_url_en = 'qeda.php?lang=en';
} elseif ($current_page == 'batumi.php') {
    $lang_url_ka = 'batumi.php?lang=ka';
    $lang_url_en = 'batumi.php?lang=en';
} elseif ($current_page == 'qobuleti.php') {
    $lang_url_ka = 'qobuleti.php?lang=ka';
    $lang_url_en = 'qobuleti.php?lang=en';
} elseif ($current_page == 'xelvachauri.php') {
    $lang_url_ka = 'xelvachauri.php?lang=ka';
    $lang_url_en = 'xelvachauri.php?lang=en';
} elseif ($current_page == 'shuakhevititlename.php') {
    $lang_url_ka = 'shuakhevititlename.php?lang=ka';
    $lang_url_en = 'shuakhevititlename.php?lang=en';
} elseif ($current_page == 'xulo.php') {
    $lang_url_ka = 'khulotitlename.php?lang=ka';
    $lang_url_en = 'khulotitlename.php?lang=en';
} elseif ($current_page == 'lanchxuti.php') {
    $lang_url_ka = 'lanchxuti.php?lang=ka';
    $lang_url_en = 'lanchxuti.php?lang=en';
} elseif ($current_page == 'ozurgeti.php') {
    $lang_url_ka = 'ozurgeti.php?lang=ka';
    $lang_url_en = 'ozurgeti.php?lang=en';
} elseif ($current_page == 'choxatauri.php') {
    $lang_url_ka = 'choxatauri.php?lang=ka';
    $lang_url_en = 'choxatauri.php?lang=en';
} elseif ($current_page == 'khoni.php') {
    $lang_url_ka = 'khoni.php?lang=ka';
    $lang_url_en = 'khoni.php?lang=en';
} elseif ($current_page == 'bagdadi.php') {
    $lang_url_ka = 'bagdadi.php?lang=ka';
    $lang_url_en = 'bagdadi.php?lang=en';
} elseif ($current_page == 'chiatura.php') {
    $lang_url_ka = 'chiatura.php?lang=ka';
    $lang_url_en = 'chiatura.php?lang=en';
} elseif ($current_page == 'kutaisi.php') {
    $lang_url_ka = 'kutaisi.php?lang=ka';
    $lang_url_en = 'kutaisi.php?lang=en';
} elseif ($current_page == 'sachxere.php') {
    $lang_url_ka = 'sachxere.php?lang=ka';
    $lang_url_en = 'sachxere.php?lang=en';
} elseif ($current_page == 'samtredia.php') {
    $lang_url_ka = 'samtredia.php?lang=ka';
    $lang_url_en = 'samtredia.php?lang=en';
} elseif ($current_page == 'terjola.php') {
    $lang_url_ka = 'terjola.php?lang=ka';
    $lang_url_en = 'terjola.php?lang=en';
} elseif ($current_page == 'tyibuli.php') {
    $lang_url_ka = 'tyibuli.php?lang=ka';
    $lang_url_en = 'tyibuli.php?lang=en';
} elseif ($current_page == 'vani.php') {
    $lang_url_ka = 'vani.php?lang=ka';
    $lang_url_en = 'vani.php?lang=en';
} elseif ($current_page == 'wyaltubo.php') {
    $lang_url_ka = 'wyaltubo.php?lang=ka';
    $lang_url_en = 'wyaltubo.php?lang=en';
} elseif ($current_page == 'xaragauli.php') {
    $lang_url_ka = 'xaragauli.php?lang=ka';
    $lang_url_en = 'xaragauli.php?lang=en';
} elseif ($current_page == 'zestafoni.php') {
    $lang_url_ka = 'zestafoni.php?lang=ka';
    $lang_url_en = 'zestafoni.php?lang=en';
} else {
    // Fallback to default (batumi.php) in case the page isn't matched
    $lang_url_ka = 'batumi.php?lang=ka';
    $lang_url_en = 'batumi.php?lang=en';
}
?>

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
        <div>
            <a class="btn header-btn" onclick="previous()">
                <span class="tr" Key="backBtn"><?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Back' : 'უკან დაბრუნება'; ?></span>
            </a>
        </div>

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

            <a class="btn header-btn" href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '../genders/genders.php?lang=en' : '../genders/genders.php?lang=ka'; ?>">
                <span class="tr" Key="regionsBtn">
                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Gender-based indicators' : 'გენდერული სტატისტიკა'; ?>
                </span>
            </a>
        </div>
    </div>
</div>