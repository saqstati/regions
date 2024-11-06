<?php
include "../config.php";

$current_page = isset($_GET['region']) ? $_GET['region'] : basename($_SERVER['PHP_SELF']);
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en'; // Default to English if no lang specified

if ($current_page == 'regionComp.php') {
    $page_title = $lang == 'en' ? 'Comparison of Key Indicators by Municipalities of Georgia' : 'ძირითადი მაჩვენებლების შედარება საქართველოს მუნიციპალიტეტების მიხედვით';
    $copy1 = $lang == 'en' ? 'This website has been produced with the assistance of the European Union, Denmark and the United Nations Development Programme (UNDP).' : 'ვებგვერდი შექმნილია ევროკავშირის, დანიისა და გაეროს განვითარების პროგრამის მხარდაჭერით. მის შინაარსზე სრულად პასუხისმგებელია საქართველოს სტატისტიკის ეროვნული სამსახური.';
    $copy2 = $lang == 'en' ? 'Its contents are the sole responsibility of the GEOSTAT and do not necessarily reflect the views of the European Union, Denmark and UNDP.' : 'ვებგვერდის შინაარსი შესაძლოა არ გამოხატავდეს ევროკავშირის, დანიისა და გაეროს განვითარების პროგრამის შეხედულებებს.';
    $copy3 = $lang == 'en' ? 'Terms of Use' : 'მონაცემთა გამოყენების პირობები';
} else {
    $page_title = $lang == 'en' ? 'Loading...' : 'ჩატვირთვა...';
}

$lang_url_ka = "municipalComp.php?lang=ka";
$lang_url_en = "municipalComp.php?lang=en";
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Compare key indicators across the regions of Georgia.">
    <meta property="og:url" content="http://www.geostat.ge/regions/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $page_title ?>" />
    <meta property="og:description" content="<?php echo $page_title ?>" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="https://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <meta property="og:locale" content="ka_GE" />

    <!-- Page Title -->
    <title class="tr" key="PAGE_TITLE"><?php echo $page_title ?></title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@1.5.2/dist/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="../custom.css">
    <link rel="stylesheet" href="css/comparison.css">
    <link rel="stylesheet" href="../mediastyles.css">
    <link rel="stylesheet" href="../multiselect/styles/multiselect.css">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="../multiselect/multiselect.min.js"></script>
</head>

<body onload="zoom()">
    <div class="hidden">
        <script type="text/javascript">
            var images = new Array()

            function preload() {
                for (i = 0; i < preload.arguments.length; i++) {
                    images[i] = new Image()
                    images[i].src = preload.arguments[i]
                }
            }
            preload(
                "1600-900-optimized/2.jpg",
                "1600-900-optimized/3.jpg",
                "1600-900-optimized/4.jpg",
                "1600-900-optimized/5.jpg",
                "1600-900-optimized/6.jpg",
                "1600-900-optimized/7.jpg",
                "1600-900-optimized/8.jpg",
                "1600-900-optimized/9.jpg",
                "1600-900-optimized/10.jpg",
                "1600-900-optimized/11.jpg",
                "1600-900-optimized/12.jpg",
                "1600-900-optimized/15.jpg"
            )
        </script>
    </div>
    <div id="background-main" class="background-image"></div>
    <div class="main-container">
        <div id="brand-logo">
            <a href="/regions/index.php" id="brand-logo-link" class=""><img src="images/logo_transparency_geo.png" /></a>
        </div>
        <header class="header1">
            <h1>
                <p id="pagetitlename" class="tr" Key="REGION14">ძირითადი მაჩვენებლების შედარება საქართველოს მუნიციპალიტეტების მიხედვით</p>
            </h1>
        </header>
        <div id="languages">
            <a href="municipalComp.php" id="ka" class="lang" <?php echo $lang['lang_ka'] ?>><img src="images/ka.png" /></a>
            <a href="muncomEN.php" id="en" class="lang" <?php echo $lang['lang_en'] ?>><img src="images/en.png" /></a>
        </div>
        <div id="recommendation">
            <span class="tr" Key="RECTEXT1">
                რეკომენდირებულია განახლებული
            </span>
            <br>
            <span class="tr" Key="RECTEXT2">
                ბრაუზერის გამოყენება:
            </span>
            <a href="http://www.google.com/chrome/"><img src="images/chrome-100.png" /></a>
            <a href="https://www.mozilla.org/en-US/firefox/new/"><img src="images/firefox-100.png" /></a>
            <a href="http://www.opera.com/"><img src="images/opera-100.png" /></a>
        </div>
    </div>

    <div class="display-flex">
        <a class=" btn textbox-left-home back-btn" onclick="previous()"> <span class="tr" Key="backBtn"><?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Back' : 'უკან დაბრუნება'; ?></span></a>
    </div>

    <form method="POST" action="" name="applyform">

        <table class="table table-bordered bg-black">

            <?php
            require 'connection.php';
            $query = mysqli_query($link, "SELECT * FROM `municipalitiesaz`");
            $i = '';
            while ($fetch = mysqli_fetch_array($query)) {
            ?>

            <?php
                $i = ($i == '') ? 2 : $i + 1;
            }
            ?>


        </table>
    </form>



    </div>

    <?php
    $j = 0;
    $item[$j++][0] = "";
    $item[$j++][0] = "ფართობი (კვ.კმ)";
    $item[$j++][0] = "ქალაქების და დაბების რაოდენობა (ერთეული)";
    $item[$j++][0] = "სოფლების რაოდენობა (ერთეული)";
    $item[$j++][0] = "მოსახლეობის რიცხოვნობა (ათასი)";
    $item[$j++][0] = "ცოცხლად დაბადებულთა რიცხოვნობა (კაცი)";
    $item[$j++][0] = "შობადობის ზოგადი კოეფიციენტი (დაბადებულთა რიცხოვნობა მოსახლეობის 1000 კაცზე)";
    $item[$j++][0] = "გარდაცვლილთა რიცხოვნობა (კაცი)";
    $item[$j++][0] = "მოკვდაობის ზოგადი კოეფიციენტი (გარდაცვლილთა რიცხოვნობა მოსახლეობის 1000 კაცზე)";
    $item[$j++][0] = "ბუნებრივი მატება (კაცი):";
    $item[$j++][0] = "დასაქმებულთა რაოდენობა-ბიზნეს სექტორში (ათასი კაცი)";
    $item[$j++][0] = "დასაქმებულთა საშუალოთვიური ხელფასი-ბიზნეს სექტორში (ლარი)";
    $item[$j++][0] = "რეგისტრირებული ეკონომიკური სუბიექტების რაოდენობა (ერთეული)";
    $item[$j++][0] = "მოქმედი ეკონომიკური სუბიექტების რაოდენობა (ერთეული)";
    $item[$j++][0] = "ახლადრეგის-</br>ტრირებული ეკონომიკური სუბიექტების რაოდენობა (ერთეული)";

    $i = 0;
    $result = mysqli_query($link, "SELECT * FROM `municipalitiesaz` ORDER BY Name ASC");
    while ($row = $result->fetch_assoc()) {
        $i++;
        $j = 0;
        $item[$j++][$i] = $row["Name"];
        $item[$j++][$i] = $row["Area"];
        $item[$j++][$i] = $row["NumberOfCT"];
        $item[$j++][$i] = $row["Villages"];
        $item[$j++][$i] = $row["Population"];
        $item[$j++][$i] = $row["LiveBirths"];
        $item[$j++][$i] = $row["GeneralBirthRate"];
        $item[$j++][$i] = $row["Dead"];
        $item[$j++][$i] = $row["GeneralMortalityRate"];
        $item[$j++][$i] = $row["NaturalIncrease"];
        $item[$j++][$i] = $row["Employees"];
        $item[$j++][$i] = $row["AVGSalary"];
        $item[$j++][$i] = $row["RegEcSub"];
        $item[$j++][$i] = $row["ActEcSub"];
        $item[$j++][$i] = $row["NewlyEcEnt"];
    }

    ?>

    <div class="selector">
        <div class="maps">
            <span class="selector-text">აირჩიეთ მუნიციპალიტეტები</span>
            <select id="municipaliteties" name="states[]" multiple="multiple" style="width: 60%; height:20px;">
                <?php foreach ($item[0] as $x => $y) if ($x > 0) { ?>
                    <option value="<?php echo $x; ?>"><?php echo $y; ?></option>
                <?php } ?>
            </select>
            <img class="chart" src="1600-900-optimized/geomaps.png" alt="chart">
        </div>
        <!-- <br /> -->

        <div class="chart">
            <span class="selector-text">აირჩიეთ მაჩვენებლები</span>
            <select id="key_indicators" name="states[]" multiple="multiple" style="width: 60%; height:20px;">
                <?php foreach ($item as $x => $y) if ($x > 0) { ?>
                    <option value="<?php echo $x; ?>"><?php echo $y[0]; ?></option>
                <?php } ?>
            </select>
            <img class="chart" src="1600-900-optimized/1612523122750-Charts.jpg" alt="chart" style="height:147px;">
        </div>

        <br />

        <button id="srch" type="button" class="btn btn-srch" onclick="addbackcolor()">ძიება</button>

    </div>

    <?php
    $tableRight = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'key_indicators_reg' : 'key_indicators_reg';
    $query = mysqli_query($link, "select * from " . $tableRight);
    while ($row = mysqli_fetch_array($query)) {
        $dataHover[$row['ID']] = $row['dataHover'];
    }
    ?>

    <?php // print_r($dataContent); exit; 
    ?>

    <table class="table table-responsive table-bordered bg-black" style="text-align: center;">
        <tbody id="cxrili">
            <?php $index = 0; ?>
            <?php foreach ($item as $k => $v) { ?>
                <tr>
                    <?php foreach ($v as $l => $b) { ?>
                        <?php if ($k == 0 && $l == 0) { ?>
                            <td class="td-empty" style="height : 160px !important; border:none;">
                                <br><?php echo $b; ?>
                                <br>

                            </td>
                        <?php } else if ($k == 0) { ?>
                            <th class="machveneblebi_height Col<?php echo $k; ?> Row<?php echo $l; ?> table<?php echo $k . "_" . $l; ?>" style="height : 50px !important;display:none;"><?php echo $b; ?></th>
                        <?php } else if ($l == 0) { ?>
                            <?php if ($index <= 15) $index = $index + 1;  ?>
                            <td title="" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-content="<?php echo $dataHover[$index] ?>" class="regionebi reg Col<?php echo $k; ?> Row<?php echo $l; ?>" style="height : 160px !important; width: 131px; display:none;"><?php echo $b; ?></td>
                        <?php } else { ?>
                            <td class="Col<?php echo $k; ?> Row<?php echo $l; ?> table<?php echo $k . "_" . $l; ?>" style="height : 50px !important; text-align: right;display: none;">
                                <div style=""><?php echo $b; ?></div>
                            </td>
                        <?php } ?>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <div id="displayNone" class="download center displayNone">

        <button id="export" type="button" class="btn btn-success"><img src="images/download.png" alt="download" style="width:25px;">გადმოწერა</button>

    </div>



    <script>
        $("#srch").on("click", function(e) {
            var i, j;
            var selected;
            selected = $('#municipaliteties').val();
            for (j = 1; j <= 64; j++) {
                if (!inArray(selected, j)) $(".Row" + j).hide();
                else $(".Row" + j).show();
            }
            selected = $('#key_indicators').val();
            if (selected != '') $(".Row0").show();
            for (j = 1; j <= 15; j++) {
                if (!inArray(selected, j)) $(".Col" + j).hide();
            }
        });

        function ShowCol(t, i) {
            console.log($('#municipaliteties').val());

            var j;
            var selected = $('.js-example-basic-multiple').val();
            if (t.checked == false) $(".Col" + i).hide();
            else {
                $(".Col" + i).show();
                for (j = 1; j <= 64; j++) {

                    if (!inArray(selected, j)) $(".Row" + j).hide();
                }
            }
        }

        /*
        $('.js-example-basic-multiple').select2().on("change", function(e) {
            var selected = $('.js-example-basic-multiple').val();
            var i;
            for (i = 1; i <= 64; i++) {
                var j;

                if (!inArray(selected, i)) $(".Row" + i).hide();
                else {
                    $(".Row" + i).show();
                    for (j = 1; j <= 13; j++)
                        if (!$("#reg" + j).is(':checked')) $(".Col" + j).hide();
                }
            }
        });
*/
        $(document).ready(function() {
            $('#municipaliteties').multiselect();
            $('#key_indicators').multiselect();

            $('#export').on('click', function() {
                var mun;
                mun = $('#municipaliteties').val();
                var key;
                key = $('#key_indicators').val();
                if (mun != '' && key != '')
                    //console.log("/regions/export_excel.php?mun=" + mun + "&key=" + key);
                    window.location = "/regions/export_excel.php?mun=" + mun + "&key=" + key;
            });
        });



        //document.multiselect('#municipaliteties');
        //document.multiselect('#key_indicators');
        /*
                $(document).ready(function() {
                    $('.js-example-basic-multiple').select2({
                        placeholder: "აირჩიე მუნიციპალიტეტები"
                    });
                });

                $('select').select2({
                    theme: 'bootstrap4',
                });
                */


        function inArray(haystack, needle) {
            var length = haystack.length;
            for (var i = 0; i < length; i++) {
                if (haystack[i] == needle) return true;
            }
            return false;
        }
    </script>

    <footer id="list-footer">
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
                <div class="fb-share-button" data-href="http://geostat.ge/regions/" data-layout="button" data-mobile-iframe="false">
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
                <!-- <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=Hello%20world" data-size="large"></a> -->
                <!-- <div class="footer-icons">
                    <a class="iconsPng" target="_blank" href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u=http%3A%2F%2Fgeostat.ge%2Fregions%2F&display=popup&ref=plugin&src=share_button"> <img class="pngIcons" src="images/facebook.png" alt="icon"> </a>
                    <a class="iconsPng" target="_blank" href="https://twitter.com/intent/tweet?original_referer=http%3A%2F%2Flocalhost%2F&ref_src=twsrc%5Etfw%7Ctwcamp%5Ebuttonembed%7Ctwterm%5Eshare%7Ctwgr%5E&text=%E1%83%A1%E1%83%A2%E1%83%90%E1%83%A2%E1%83%98%E1%83%A1%E1%83%A2%E1%83%98%E1%83%99%E1%83%A3%E1%83%A0%E1%83%98%20%E1%83%98%E1%83%9C%E1%83%A4%E1%83%9D%E1%83%A0%E1%83%9B%E1%83%90%E1%83%AA%E1%83%98%E1%83%90%20%E1%83%A1%E1%83%90%E1%83%A5%E1%83%90%E1%83%A0%E1%83%97%E1%83%95%E1%83%94%E1%83%9A%E1%83%9D%E1%83%A1%20%E1%83%A0%E1%83%94%E1%83%92%E1%83%98%E1%83%9D%E1%83%9C%E1%83%94%E1%83%91%E1%83%98%E1%83%A1%20%E1%83%9B%E1%83%98%E1%83%AE%E1%83%94%E1%83%93%E1%83%95%E1%83%98%E1%83%97&url=http%3A%2F%2Flocalhost%2Fregions%2F"> <img class="pngIcons" src="images/twitter.png" alt="icon"> </a>
                </div> -->
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
        <span class="tr" key="COPYRIGHT1">© 2022 ყველა უფლება დაცულია.</span>
        <br>
        <span class="tr" key="COPYRIGHT2">საქართველოს სტატისტიკის ეროვნული სამსახური (საქსტატი)</span><br>

        <span class="tr copy3" key="COPYRIGHT3"><a href="https://www.geostat.ge/ka/page/monacemta-gamoyenebis-pirobebi">მონაცემთა გამოყენების პირობები</a></span>
    </footer>



    <script src="script.js"></script>
    <script type="text/javascript" src="lang.js"></script>
</body>

</html>