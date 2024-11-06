<footer class="mt-5">
    <?php
    $isGendersPage = strpos($_SERVER['REQUEST_URI'], 'genders') !== false;
    ?>

    <div style="background:white; height:100%">
        <span class="tr" key="COPYRIGHT1">
            <img class="eu_png"
                src="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en')
                            ? ($isGendersPage ? '../images/logo/eu.png' : '../images/logo/eu.png')
                            : ($isGendersPage ? '../images/logo/eu-geo.png' : '../images/logo/eu-geo.png'); ?>">

            <img class="footer_img"
                src="<?php echo $isGendersPage ? '../images/logo/denmark.PNG' : '../images/logo/denmark.PNG'; ?>">

            <img class="footer_img_undp"
                src="<?php echo $isGendersPage ? '../images/logo/undp.PNG' : '../images/logo/undp.PNG'; ?>">
        </span>
        </br>
        <span class="tr copyright_text" key="COPYRIGHT1">
            <b><?php echo $copy1 ?></b>
        </span>
        </br>
        <span class="tr copyright_text" key="COPYRIGHT2">
            <b><?php echo $copy2 ?></b>
        </span>
        <br>

        <span class="tr copyright_text" key="COPYRIGHT3">
            <a href="https://www.geostat.ge/ka/page/monacemta-gamoyenebis-pirobebi">
                <?php echo $copy3 ?>
            </a>
        </span>
    </div>
</footer>