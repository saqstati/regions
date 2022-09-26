<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="http://www.geostat.ge/regions/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="სტატისტიკური ინფორმაციის შედარება საქართველოს რეგიონების მიხედვით" />
    <meta property="og:description" content="სტატისტიკური ინფორმაციის შედარება საქართველოს რეგიონების მიხედვით" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <title class="tr" Key="PAGE_TITLE">სტატისტიკური ინფორმაციის შედარება საქართველოს რეგიონების მიხედვით</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="custom.css">
    <link rel="stylesheet" type="text/css" href="list.css">
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
    <form method="POST" action="" name="applyform">

        <table class="table table-bordered bg-black">

            <?php
            require 'connection.php';
            $query = mysqli_query($link, "SELECT * FROM `regions`");
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

    $item[0][] = "ძირითადი მაჩვენებლები";
    $item[0][] = "ფართობი (კვ.კმ)";
    $item[0][] = "მოსახლეობის რიცხოვნობა (ათასი)";
    $item[0][] = "მთლიანი შიდა პროდუქტი (მლნ. ლარი)";
    $item[0][] = "მთლიანი შიდა პროდუქტი ერთ სულ მოსახლეზე (აშშ დოლარი)";
    $item[0][] = "უმუშევრობის დონე (%)";
    $item[0][] = "დასაქმებულთა რაოდენობა, სულ (ათასი კაცი)";
    $item[0][] = "დასაქმებულთა რაოდენობა - ბიზნეს სექტორში (ათასი კაცი)";
    $item[0][] = "დასაქმებულთა საშუალოთვიური ხელფასი - ბიზნეს სექტორში (ლარი)";
    $item[0][] = "რეგისტრირებული ეკონომიკური სუბიექტების რაოდენობა (ერთეული)";

    $i = 0;
    $result = mysqli_query($link, "SELECT * FROM `regions`");
    while ($row = $result->fetch_assoc()) {
        $i++;
        $item[$i][] = $row["Name"];
        $item[$i][] = $row["Area"];
        $item[$i][] = $row["Population"];
        $item[$i][] = $row["GDP"];
        $item[$i][] = $row["GDPPerCapita"];
        $item[$i][] = $row["UnemploymentRate"];
        $item[$i][] = $row["EmploymentRate"];
        $item[$i][] = $row["EmploymentRateIndustry"];
        $item[$i][] = $row["AverageSalaryIndustry"];
        $item[$i][] = $row["RegistredEntities"];
    }
    ?>

    <table class="table table-bordered bg-black">
        <tbody>
            <?php foreach ($item as $k => $v) { ?>
                <tr>
                    <?php foreach ($v as $l => $b) { ?>
                        <?php if ($k == 0 && $l == 0) { ?>
                            <td class="td-empty" style="height : 100px !important; border-right:none;"> <br><?php echo $b; ?></td>
                        <?php } else if ($k == 0) { ?>
                            <th class="machveneblebi_height" style="height : 50px !important;"><?php echo $b; ?> <input class="right" id="myCol<?php echo $l; ?>" type="checkbox" name="dziritadi[]" value="fartobi" onclick="ShowRow(this,<?php echo $l; ?>)" /></th>
                        <?php } else if ($l == 0) { ?>
                            <td class="regionebi reg" style="height : 100px !important;"><input type="checkbox" id="reg<?php echo $k; ?>" name="reg_id[]" value="" onclick="ShowCol(this,<?php echo $k; ?>)" /><?php echo $b; ?></td>
                        <?php } else { ?>
                            <td style="height : 50px !important;">
                                <div class="Col<?php echo $k; ?> Row<?php echo $l; ?> table<?php echo $k . "_" . $l; ?>" style="display: none;"><?php echo $b; ?></div>
                            </td>
                        <?php } ?>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <script>

        function ShowRow(t, i) {
            var j;
            if (t.checked == false) $(".Row" + i).hide();
            else {
                $(".Row" + i).show();
                for (j = 1; j <= 13; j++)
                    if (document.getElementById("reg" + j).checked == false) $(".Col" + j).hide();
            }
        }

        function ShowCol(t, i) {
            var j;
            if (t.checked == false) $(".Col" + i).hide();
            else {
                $(".Col" + i).show();
                for (j = 1; j <= 9; j++) {
                    if (document.getElementById("myCol" + j).checked == false) $(".Row" + j).hide();
                }
            }
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
        const regionInfo = [
            'regionInfo',
            'regionInfo2',
            'regionInfo3',
            'regionInfo4',
            'regionInfo5',
            'regionInfo6',
            'regionInfo7',
            'regionInfo8',
            'regionInfo9',
            'regionInfo10',
            'regionInfo11',
            'regionInfo12',
            'regionInfo13',
        ];

        const trWrapper = [
            'trInfoRow',
            'trInfoRow2',
            'trInfoRow3',
            'trInfoRow4',
            'trInfoRow5',
            'trInfoRow6',
            'trInfoRow7',
            'trInfoRow8',
            'trInfoRow9',
            'trInfoRow10',
            'trInfoRow11',
            'trInfoRow12',
            'trInfoRow13',
        ];

        const tdWrapper = [
            'tdInfoRow',
            'tdInfoRow2',
            'tdInfoRow3',
            'tdInfoRow4',
            'tdInfoRow5',
            'tdInfoRow6',
            'tdInfoRow7',
            'tdInfoRow8',
            'tdInfoRow9',
            'tdInfoRow10',
            'tdInfoRow11',
            'tdInfoRow12',
            'tdInfoRow13',
        ];




        let parent = document.getElementById("append");


        function render(data, index) {
            console.log(index)
            var wrapper = document.createElement("tr");
            wrapper.id = "IdTrInfoRow";
            wrapper.className = trWrapper[index];

            let html = `
                <tr id=trInfoRow>
                    <td class=${tdWrapper[index]}><div class="area">${data.Area}</div></td>
                    <td class=${tdWrapper[index]}><div class="population">${data.Population}</div></td>
                    <td class=${tdWrapper[index]}><div class="GDP"> ${data.GDP} </div> </td>
                    <td class=${tdWrapper[index]}><div class="GDPPerCapita">${data.GDPPerCapita}</div></td>
                    <td class=${tdWrapper[index]}><div class="UnemploymentRate">${data.UnemploymentRate}</div></td>
                    <td class=${tdWrapper[index]}><div class="EmploymentRate">${data.EmploymentRate}</div></td>
                    <td class=${tdWrapper[index]}><div class="EmploymentRateIndustry">${data.EmploymentRateIndustry}</div></td>
                    <td class=${tdWrapper[index]}><div class="AverageSalaryIndustry">${data.AverageSalaryIndustry}</div></td>
                    <td class=${tdWrapper[index]}><div class="RegistredEntities">${data.RegistredEntities}</div></td>
                </tr> 
            `

            wrapper.innerHTML = html;

            return wrapper;

        }

        function trInfoRowFunction() {
            var checkBox = document.getElementById("regionInfo");
            var trInfoRow = document.querySelectorAll(".tdInfoRow");

            if (checkBox.checked == true) {
                trInfoRow.forEach(function(n) {
                    n.style.display = "inline-grid";
                });
            } else {
                trInfoRow.forEach(function(n) {
                    n.style.display = "none";
                    // TestHide.style.display = "none";
                });
            }

            var checkBox = document.getElementById("regionInfo2");
            var trInfoRow2 = document.querySelectorAll(".tdInfoRow2");

            if (checkBox.checked == true) {
                trInfoRow2.forEach(function(z) {
                    z.style.display = "inline-grid";
                });
            } else {
                trInfoRow2.forEach(function(z) {
                    z.style.display = "none";
                    // TestHide.style.display = "none";
                });
            }


        }


        function myFunction() {

            var checkBox = document.getElementById("myCheck");
            var area = document.querySelectorAll(".area");
            if (checkBox.checked == true) {
                area.forEach(function(e) {
                    e.style.display = "block";
                });
            } else {
                area.forEach(function(e) {
                    e.style.display = "none";
                });
            }

            checkBox = document.getElementById("myCheck2");
            area = document.querySelectorAll(".population");
            if (checkBox.checked == true) {
                area.forEach(function(e) {
                    e.style.display = "block";
                });
            } else {
                area.forEach(function(e) {
                    e.style.display = "none";
                });
            }
            checkBox = document.getElementById("myCheck3");
            area = document.querySelectorAll(".GDP");
            if (checkBox.checked == true) {
                area.forEach(function(e) {
                    e.style.display = "block";
                });
            } else {
                area.forEach(function(e) {
                    e.style.display = "none";
                });
            }

            checkBox = document.getElementById("myCheck4");
            area = document.querySelectorAll(".GDPPerCapita");
            if (checkBox.checked == true) {
                area.forEach(function(e) {
                    e.style.display = "block";
                });
            } else {
                area.forEach(function(e) {
                    e.style.display = "none";
                });
            }

            checkBox = document.getElementById("myCheck5");
            area = document.querySelectorAll(".UnemploymentRate");
            if (checkBox.checked == true) {
                area.forEach(function(e) {
                    e.style.display = "block";
                });
            } else {
                area.forEach(function(e) {
                    e.style.display = "none";
                });
            }

            checkBox = document.getElementById("myCheck6");
            area = document.querySelectorAll(".EmploymentRate");
            if (checkBox.checked == true) {
                area.forEach(function(e) {
                    e.style.display = "block";
                });
            } else {
                area.forEach(function(e) {
                    e.style.display = "none";
                });
            }

            checkBox = document.getElementById("myCheck7");
            area = document.querySelectorAll(".EmploymentRateIndustry");
            if (checkBox.checked == true) {
                area.forEach(function(e) {
                    e.style.display = "block";
                });
            } else {
                area.forEach(function(e) {
                    e.style.display = "none";
                });
            }

            checkBox = document.getElementById("myCheck8");
            area = document.querySelectorAll(".AverageSalaryIndustry");
            if (checkBox.checked == true) {
                area.forEach(function(e) {
                    e.style.display = "block";
                });
            } else {
                area.forEach(function(e) {
                    e.style.display = "none";
                });
            }

            checkBox = document.getElementById("myCheck9");
            area = document.querySelectorAll(".RegistredEntities");
            if (checkBox.checked == true) {
                area.forEach(function(e) {
                    e.style.display = "block";
                });
            } else {
                area.forEach(function(e) {
                    e.style.display = "none";
                });
            }

        }




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

                    response.data.map(function(i, index) {
                        let dom = render(i, index);
                        parent.append(dom);
                    });

                    //handle success
                    console.log(response.data);
                    myFunction();
                    // trInfoRowFunction(); 
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


            testRequest(formData);


        }


        var form = document.getElementsByName('applyform')[0];
        console.log("form", form)
        form.addEventListener('submit', validateform);
    </script>


    <script src="script.js"></script>
</body>

</html>