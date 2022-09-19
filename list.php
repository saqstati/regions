<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="http://www.geostat.ge/regions/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="სტატისტიკური ინფორმაცია საქართველოს რეგიონების მიხედვით" />
    <meta property="og:description" content="სტატისტიკური ინფორმაცია საქართველოს რეგიონების მიხედვით" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <title class="tr" Key="PAGE_TITLE">სტატისტიკური ინფორმაცია საქართველოს რეგიონების მიხედვით</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="custom.css">
    <link rel="stylesheet" href="mediastyles.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154977204-1"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-154977204-1');
    </script>


</head>

<body>
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
            <a href="http://www.geostat.ge/" id="brand-logo-link" class=""><img src="images/logo_transparency_geo.png" /></a>
        </div>
        <header class="header1">
            <h1>
                <p id="pagetitlename" class="tr" Key="REGION14">სტატისტიკური ინფორმაციის შედარება საქართველოს რეგიონების მიხედვით</p>
            </h1>
        </header>
        <div id="languages">
            <a href="#" id="ka" class="lang"><img src="images/ka.png" /></a>
            <a href="#" id="en" class="lang"><img src="images/en.png" /></a>
        </div>
        <div id="recommendation">
            <span class="tr" Key="RECTEXT1">
                რეკომენდირებულია განახლებული
            </span>
            <br>
            <span class="tr" Key="RECTEXT2">
                ბრაუზერების გამოყენება:
            </span>
            <a href="http://www.google.com/chrome/"><img src="images/chrome-100.png" /></a>
            <a href="https://www.mozilla.org/en-US/firefox/new/"><img src="images/firefox-100.png" /></a>
            <a href="http://www.opera.com/"><img src="images/opera-100.png" /></a>
        </div>
        <div class="btn btn-md zoom-out"><span class="tr" key="ZOOMOUT">უკან დაბრუნება</span></div>
    </div>
    <div>
        <form method="POST" action="" name="applyform">

            <table class="table table-bordered bg-black">
                <tbody>
                    <td class="td-empty"> <br>ძირითადი მაჩვენებლები</td>
                    <?php
                    require 'connection.php';
                    $query = mysqli_query($link, "SELECT * FROM `regions`");
                    while ($fetch = mysqli_fetch_array($query)) {
                    ?>
                        <tr class="grid">
                            <td><input type="checkbox" name="reg_id[]" value="<?php echo $fetch['ID'] ?>" /><?php echo $fetch['Name'] ?></td>
                        </tr>
                        <script>

                        </script>
                    <?php
                    }
                    ?>
                </tbody>
                <tbody class="col-sm d-flex">
                    <tr class="grid machveneblebi">
                        <th>ფართობი (კვ.კმ) <input class="right" id="myCheck" type="checkbox" name="dziritadi[]" value="fartobi" onclick="myFunction()"/></th>
                        <th>მოსახლეობის რიცხოვნობა (ათასი) <input class="right" id="myCheck2" type="checkbox" name="dziritadi[]" onclick="myFunction2()" /></th>
                        <th>მთლიანი შიდა პროდუქტი (მლნ. ლარი) <input class="right" id="myCheck3" type="checkbox" name="dziritadi[]" /></th>
                        <th>მთლიანი შიდა პროდუქტი ერთ სულ მოსახლეზე (აშშ დოლარი) <input class="right" id="myCheck4" type="checkbox" name="dziritadi[]" /></th>
                        <th>უმუშევრობის დონე (%) <input class="right" id="myCheck5" type="checkbox" name="dziritadi[]" /></th>
                        <th>დასაქმებულთა რაოდენობა, სულ (ათასი კაცი) <input class="right" id="myCheck6" type="checkbox" name="dziritadi[]" /></th>
                        <th>დასაქმებულთა რაოდენობა - ბიზნეს სექტორში (ათასი კაცი) <input class="right" id="myCheck7" type="checkbox" name="dziritadi[]" /></th>
                        <th>დასაქმებულთა საშუალოთვიური ხელფასი - ბიზნეს სექტორში (ლარი) <input class="right" id="myCheck8" type="checkbox" name="dziritadi[]" /></th>
                        <th>რეგისტრირებული ეკონომიკური სუბიექტების რაოდენობა (ერთეული) <input class="right" id="myCheck9" type="checkbox" name="dziritadi[]" /></th>
                    </tr>
                    <td id="append">

                    </td>
                </tbody>
            </table>

            <center class="position-center"><button name="get" class="btn">ძიება</button></center>
        </form>


    </div>


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
                <div class="fb-share-button" data-href="http://geostat.ge/regions/" data-layout="button" data-mobile-iframe="false">
                    <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse"></a>
                </div>
                <style media="screen" type="text/css">
                    .fb_iframe_widget span {
                        vertical-align: baseline !important;
                        width: 27px !important;
                        overflow: hidden !important;
                        border-radius: 3px;
                    }

                    #twitter-widget-0 {
                        width: 23px !important;
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
        <span class="tr" key="COPYRIGHT1">© 2016 ყველა უფლება დაცულია.</span>
        <br>
        <span class="tr" key="COPYRIGHT2">საქართველოს სტატისტიკის ეროვნული სამსახური (საქსტატი)</span><br>

        <span class="tr" key="COPYRIGHT3"><a href="https://www.geostat.ge/ka/page/monacemta-gamoyenebis-pirobebi">მონაცემთა გამოყენების პირობები</a></span>
    </footer>

    <script>
        let parent = document.getElementById("append");


        function render(data) {

            var wrapper = document.createElement("tr");

            let html = `
                <tr>
                    <td id="text" style="display:none" >${data.Area}</td>
                    <td id="text2" style="display:none">${data.Population}</td>
                    <td id="text3" style="display:none">${data.GDP}</td>
                    <td id="text4" style="display:none">${data.GDPPerCapita}</td>
                    <td id="text5" style="display:none">${data.UnemploymentRate}</td>
                    <td id="text6" style="display:none">${data.EmploymentRate}</td>
                    <td id="text7" style="display:none">${data.EmploymentRateIndustry}</td>
                    <td id="text8" style="display:none">${data.AverageSalaryIndustry}</td>
                    <td id="text9" style="display:none">${data.RegistredEntities}</td>
                </tr> 
            `

            wrapper.innerHTML = html;

            return wrapper;

        }


        function myFunction() {
            var checkBox = document.getElementById("myCheck");
            var text = document.getElementById("text");
            if (checkBox.checked == true) {
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }
        }

        function myFunction2() {
            var checkBox2 = document.getElementById("myCheck2");
            var text2 = document.getElementById("text2");
            if (checkBox2.checked == true) {
                text2.style.display = "block";
            } else {
                text2.style.display = "none";
            }
        }

        // function myFunction3() {
        //     var checkBox3 = document.getElementById("myCheck3");
        //     var text3 = document.getElementById("text3");
        //     if (checkBox3.checked == true) {
        //         text3.style.display = "block";
        //     } else {
        //         text3.style.display = "none";
        //     }
        // }


        let testRequest = function(data) {
            return axios({
                    method: "post",
                    url: "get_select.php",
                    data: data,
                    headers: {
                        "Content-Type": "multipart/form-data"
                    },
                })
                .then(function(response) {

                    parent.innerHTML = "";

                    response.data.map(function(i) {
                        let dom = render(i);
                        parent.append(dom);
                    });

                    //handle success
                    console.log(response.data);
                })
                .catch(function(response) {
                    //handle error
                    console.log(response);
                });
        }


        function validateform(e) {

            e.preventDefault();

            const formData = new FormData(e.target);

            for (var pair of formData.entries()) {
                console.log(pair[0] + ', ' + pair[1]);
            }

            testRequest(formData)
        }


        var form = document.getElementsByName('applyform')[0];
        console.log("form", form)
        form.addEventListener('submit', validateform);
    </script>

</body>

</html>