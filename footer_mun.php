<footer>
    <div>
        <div>
            <div id="fb-root"></div>
            <script>
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>
            <div class="fb-share-button" data-href="http://regions.geostat.ge/regions/" data-layout="button" data-mobile-iframe="false">
                <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse"></a>
            </div>
            <style media="screen" type="text/css">
                .fb_iframe_widget span {
                    vertical-align: baseline !important;
                    /* width: 27px !important; */
                    overflow: hidden !important;
                    border-radius: 3px;
                }

                #twitter-widget-0 {
                    /* width: 23px !important; */
                    overflow: hidden !important;
                    border-radius: 3px;
                }
            </style>
            <a class="twitter-share-button" href="https://twitter.com/intent/tweet"></a>
            <script>
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
        </div>
    </div>

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
            <b><?php echo $lang['COPYRIGHT1'] ?></b>
        </span>

        <span class="tr copyright_text" key="COPYRIGHT2">
            <b><?php echo $lang['COPYRIGHT2'] ?></b>
        </span>
        <br>

        <span class="tr copyright_text" key="COPYRIGHT3">
            <a href="https://www.geostat.ge/ka/page/monacemta-gamoyenebis-pirobebi">
                <?php echo $lang['COPYRIGHT3'] ?>
            </a>
        </span>
    </div>
</footer>