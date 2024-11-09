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