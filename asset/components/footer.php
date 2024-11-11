<?php
$isGendersPage = strpos($_SERVER['REQUEST_URI'], 'genders') !== false;
?>

<footer class="footer mt-4 py-4">
    <div class="container">

        <!-- Social Media Icons Row -->
        <div class="row justify-content-center mb-3">
            <div class="col-auto text-center">
                <div id="fb-root"></div>
                <div class="social-icons">
                    <div class="fb-share-button" data-href="http://regions.geostat.ge/regions/" data-layout="button"></div>
                    <a class="twitter-share-button" href="https://twitter.com/intent/tweet"></a>
                </div>
            </div>
        </div>

        <!-- Logos and Copyright Section -->
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <div class="logos mb-2">
                    <img class="eu-logo" src="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en')
                                                    ? ($isGendersPage ? '../images/logo/eu.png' : '/regions/images/logo/eu.png')
                                                    : ($isGendersPage ? '../images/logo/eu-geo.png' : '/regions/images/logo/eu-geo.png'); ?>" alt="EU Logo">
                    <img class="partner-logo" src="<?php echo $isGendersPage ? '../images/logo/denmark.PNG' : '/regions/images/logo/denmark.PNG'; ?>" alt="Denmark Logo">
                    <img class="partner-logo" src="<?php echo $isGendersPage ? '../images/logo/undp.PNG' : '/regions/images/logo/undp.PNG'; ?>" alt="UNDP Logo">
                </div>
                <div class="footer-text">
                    <span><b><?php echo $lang['COPYRIGHT1'] ?></b></span><br>
                    <span><b><?php echo $lang['COPYRIGHT2'] ?></b></span><br>
                    <span><a href="https://www.geostat.ge/ka/page/monacemta-gamoyenebis-pirobebi"><?php echo $lang['COPYRIGHT3'] ?></a></span>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts for Facebook and Twitter (unchanged) -->
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    window.twttr = (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
        if (d.getElementById(id)) return t;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);
        t._e = [];
        t.ready = function(f) {
            t._e.push(f);
        };
        return t;
    }(document, "script", "twitter-wjs"));
</script>

<style>
    footer {
        position: unset;
    }

    .footer {
        background-color: #f8f9fa;
        color: #333;
        border-top: 1px solid #e7e7e7;
    }

    .social-icons {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-bottom: 15px;
    }

    .logos {
        display: flex;
        justify-content: center;
        gap: 10px;
        align-items: center;
        margin-bottom: 10px;
    }

    .eu-logo,
    .partner-logo {
        height: 40px;
    }

    .footer-text {
        color: #555;
        font-size: 0.9rem;
    }

    .footer-text a {
        color: #007bff;
        text-decoration: none;
    }

    .footer-text a:hover {
        text-decoration: underline;
    }
</style>