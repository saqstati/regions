<div class="container-fluid">
    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between mb-4">
        <!-- Brand Logo on the left -->
        <div id="brand-logo" class="me-3 mb-2 mb-md-0 text-center text-md-start">
            <a href="../index.php" id="brand-logo-link">
                <img src="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '../images/logo_transparency_eng.png' : '../images/logo_transparency_geo.png'; ?>"
                    alt="Brand Logo"
                    class="img-fluid"
                    style="width: 100px; height: auto;" />
            </a>
        </div>

        <!-- Page Title centered -->
        <h1 id="pagetitlename" class="tr text-center mb-2 mb-md-0" key="REGION14" style="flex-grow: 1;">
            <?php echo $page_title; ?>
        </h1>

        <!-- Languages on the right -->
        <div id="languages" class="d-flex justify-content-center justify-content-md-end">
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
    <div class="d-flex justify-content-center justify-content-md-start">
        <a class="btn btn-danger" onclick="previous()">
            <span class="tr" key="backBtn">
                <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Back' : 'უკან დაბრუნება'; ?>
            </span>
        </a>
    </div>
</div>


<style>
    @media (max-width: 576px) {
        #pagetitlename {
            font-size: 1.2rem;
        }

        #brand-logo img {
            width: 80px;
        }

        .btn.btn-danger {
            padding: 0.4rem 0.75rem;
            font-size: 0.9rem;
        }
    }
</style>