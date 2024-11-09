<div class="container-fluid">
    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between mb-4">
        <!-- Brand Logo on the left -->
        <div id="brand-logo" class="me-3 mb-2 mb-md-0">
            <a href="../index.php" id="brand-logo-link">
                <img src="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '../images/logo_transparency_eng.png' : '../images/logo_transparency_geo.png'; ?>"
                    alt="Brand Logo"
                    class="img-fluid"
                    style="width: 80px; height: auto;" />
            </a>
        </div>

        <!-- Page Title centered, with responsive text size and wrap control -->
        <h1 id="pagetitlename" class="tr mx-auto text-center text-md-nowrap mb-2 mb-md-0" key="REGION14" style="flex-grow: 1; font-size: 1.5rem;">
            <?php echo $page_title; ?>
        </h1>

        <!-- Languages on the right -->
        <div id="languages" class="d-flex justify-content-center justify-content-md-end">
            <a href="<?php echo $lang_url_ka; ?>" id="ka" class="lang me-2">
                <img src="../images/ka.png" alt="Georgian Language" class="img-fluid" style="width: 20px; height: auto;" />
            </a>
            <a href="<?php echo $lang_url_en; ?>" id="en" class="lang">
                <img src="../images/en.png" alt="English Language" class="img-fluid" style="width: 20px; height: auto;" />
            </a>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
        <!-- Back Button on the left -->
        <div class="mb-2 mb-md-0">
            <a class="btn header-btn" onclick="previous()">
                <span class="tr" key="backBtn">
                    <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Back' : 'უკან დაბრუნება'; ?>
                </span>
            </a>
        </div>
    </div>
</div>


<style>
    /* Additional Styles for Responsive Header */
    @media (max-width: 768px) {
        #pagetitlename {
            font-size: 1.2rem;
        }

        #languages img {
            width: 18px;
        }

        .header-btn {
            font-size: 0.9rem;
            padding: 0.5rem 0.75rem;
        }
    }

    @media (max-width: 576px) {
        #pagetitlename {
            font-size: 1rem;
            padding: 0.25rem 0;
        }

        .header-btn {
            font-size: 0.8rem;
            padding: 0.4rem 0.6rem;
        }
    }
</style>