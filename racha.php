<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="http://www.geostat.ge/regions/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="სტატისტიკური ინფორმაცია რაჭა-ლეჩხუმისა და ქვემო სვანეთის რეგიონის შესახებ" />
    <meta property="og:description" content="სტატისტიკური ინფორმაცია რაჭა-ლეჩხუმისა და ქვემო სვანეთის რეგიონის შესახებ" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <title class="tr" Key="PAGE_TITLE">სტატისტიკური ინფორმაცია რაჭა-ლეჩხუმისა და ქვემო სვანეთის რეგიონის შესახებ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="samegrelo.css">
    <link rel="stylesheet" type="text/css" href="racha/mcxeta-mtianeti.css">
    <link rel="stylesheet" type="text/css" href="custom.css">
    <link rel="stylesheet" href="mediastyles.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154977204-1"></script>
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
                <p id="pagetitlename" class="tr" Key="REGION14">სტატისტიკური ინფორმაცია რაჭა-ლეჩხუმისა და ქვემო სვანეთის რეგიონის შესახებ</p>
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
        <div class="btn textbox-right zoom-out">
            <a class="regions-btn" href="list.php"><span class="tr" Key="regionsBtn">რეგიონების შედარება</span></a>
        </div>
        <div class="display-flex">
            <div class="btn textbox-left-home">
                <a class="back-btn" href="index.php"> <span class="tr" Key="backBtn">უკან დაბრუნება</span></a>
            </div>
            <div class="btn textbox-right-home">
                <a class="regions-btn" href="list.php"> <span class="tr" Key="regionsBtn">რეგიონების შედარება</span></a>
            </div>
        </div>
        <div class="btn btn-md zoom-out"><span class="tr" key="ZOOMOUT">უკან დაბრუნება</span>
        </div>

        <table class="machveneblebi-left">
            <?php
            include('connection.php');
            $query = mysqli_query($link, "select * from `regions` where ID = 7");
            while ($row = mysqli_fetch_array($query)) {
            ?> <tr>
                    <th>რეგიონული სტატისტიკა</th>
                </tr>
                <tbody>
                    <tr>
                        <th id="dziritadi1" onclick="GetIdChange()" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">ძირითადი ინფორმაცია <span class="float-right"><i id="classchange" class="dropdown_img_up" ></i></span>
                        </th>
                    </tr>
                    <tr class="informacia1">
                        <td>
                            რეგიონის ფართობი
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/dziritadi%20informacia/regionis%20fartobi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia1">
                        <td>
                            მუნიციპალიტეტების, ქალაქების და სოფლების რაოდენობა
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/dziritadi%20informacia/municipalitetebis,%20qalaqebis%20da%20soflebis%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">მოსახლეობა <span class="float-right"><a href="http://localhost/regions/regions/7/mosakhleoba/mosakhleoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi2" onclick="GetIdChange()"  title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">დემოგრაფია</td>
                    </tr>
                    <tr class="informacia2">
                        <td>
                            მოკვდაობა
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/demografia/mokvdaoba_asaki_sqesi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia2">
                        <td>
                            გარდაცვალების მიზეზები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/demografia/gardacvalebis%20mizezebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia2">
                        <td>
                            ძირითადი დემოგრაფიული მაჩვენებლები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/demografia/dziritadi%20demografiuli%20machveneblebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">მშპ და დამატებული ღირებულება <span class="float-right"><a href="http://localhost/regions/regions/7/mshp%20da%20damatebuli%20girebuleba/mshp%20da%20damatebuli%20girebuleba.xls"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">პირდაპირი უცხოური ინვესტიციები <span class="float-right"><a href="http://localhost/regions/regions/7/pirdapiri%20uckhouri%20investiciebi/pirdapiri%20uckhouri%20investiciebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi3" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">დასაქმება და ხელფასები 
                        </td>
                    </tr>
                    <tr class="informacia3">
                        <td>
                            დასაქმება, უმუშევრობა
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/dasaqmeba_umushevroba/dasaqmeba_umushevroba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia3">
                        <td>
                            ხელფასები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/dasaqmeba_umushevroba/khelfasi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi4" onclick="GetIdChange()" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">ფასები და ინფლაცია 
                        </td>
                    </tr>
                    <tr class="informacia4">
                        <td>
                            სამომხმარებლო ფასების ინდექსი 12 თვის საშუალო წინა 12 თვის საშუალოსთან
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/fasebi/samomxmareblo%20fasebis%20indeqsebi%2012%20tvis%20sashualo%20wina%2012%20Tvis%20saSualosTan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia4">
                        <td>
                            სამომხმარებლო ფასების ინდექსი წინა თვესთან
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20tvestan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia4">
                        <td>
                            სამომხმარებლო ფასების ინდექსი წინა წლის შესაბამის თვესთან
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20wlis%20shesabamis%20TvesTan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi5" onclick="GetIdChange()" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">ცხოვრების დონე 
                        </td>
                    </tr>
                    <tr class="informacia5">
                        <td>
                            შემოსავლები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/ckhovrebis%20done/shemosavlebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia5">
                        <td>
                            ხარჯები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/ckhovrebis%20done/kharjebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi6" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">ბიზნეს სექტორი 
                        </td>
                    </tr>
                    <tr class="informacia6">
                        <td>
                            საქმიანობის მიხედვით (NACE rev.2)
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/biznes%20seqtori/saqmianobis%20mikhedvit_nace%20rev.2.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia6">
                        <td>
                            საკუთრების ფორმის მიხედვით
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/biznes%20seqtori/sakutrebis%20formis%20mikhedvit.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia6">
                        <td>
                            ზომის მიხედვით
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/biznes%20seqtori/zomis%20mikhedvit.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi"  title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><a target="_blank" href="http://br.geostat.ge/register_geo/">ბიზნეს რეგისტრი</a> <span class="float-right"></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi7" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">სოფლის მეურნეობა 
                        </td>
                    </tr>
                    <tr class="informacia7">
                        <td>
                            ერთწლიანი კულტურები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/soflis%20meurneoba/1.%20erttsliani%20kulturebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia7">
                        <td>
                            მრავალწლოვანი კულტურების წარმოება
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/soflis%20meurneoba/2.%20mravaltslovani%20kulturebis%20tsarmoeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia7">
                        <td>
                            პირუტყვის სულადობა
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/soflis%20meurneoba/3.%20pirutkvis%20suladoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia7">
                        <td>
                            მეცხოველეობის პროდუქციის წარმოება
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/soflis%20meurneoba/4.%20metskhoveleobis%20produktsiis%20tsarmoeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">მრეწველობა<span class="float-right"><a href=""> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi8" onclick="GetIdChange()" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">მშენებლობა 
                        </td>
                    </tr>
                    <tr class="informacia8">
                        <td>
                            დასრულებული მშენებლობები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/mshenebloba/dasrulebuli%20msheneblobebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia8">
                        <td>
                            ნებართვები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/mshenebloba/mshenebloba_nebartvebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia8">
                        <td>
                            ძირითადი მაჩვენებლები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/mshenebloba/mshenebloba_dziritadi%20machveneblebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">ენერგეტიკა<span class="float-right"></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">ვაჭრობა<span class="float-right"><a href=""> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi9" title="" onclick="GetIdChange()"  data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">სასტუმროები და რესტორნები 
                        </td>
                    </tr>
                    <tr class="informacia9">
                        <td>
                            სასტუმროები და რესტორნები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/sastumroebi%20da%20restornebi/sastumroebi%20da%20restornebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia9">
                        <td>
                            სტუმართა რაოდენობა
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/sastumroebi%20da%20restornebi/stumarta%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi10" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">ტრანსპორტი და დასაწყობება 
                        </td>
                    </tr>
                    <tr class="informacia10">
                        <td>
                            ტრანსპორტი და დასაწყობება
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia10">
                        <td>
                            რეგისტრირებული ავტომობილების რაოდენობა
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/transporti%20da%20kavshirgabmuloba/registrirebuli%20avtomobilebis%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia10">
                        <td>
                            საერთო სარგებლობის საავტომობილო გზების სიგრძე
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi11" title="" onclick="GetIdChange()"  data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">ტურიზმი (შიდა) <span class="float-right"><i id="classchange" class="dropdown_img_up"></i>
                        </td>
                    </tr>
                    <tr class="informacia11">
                        <td>
                            საცხოვრებელი ადგილის მიხედვით
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/turizmi/ganawileba%20sacxovrebeli%20adgilis%20mixedvit.xls"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia11">
                        <td>
                            მონახულებული რეგიონებით
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/7/turizmi/ganawileba%20monaxulebuli%20regionebit.xls"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">სამართლებრივი სტატისტიკა<span class="float-right"><a href="http://localhost/regions/regions/7/samartlebrivi%20statistika/samartlebrivi%20statistika.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">ჯანდაცვა და სოციალური უზრუნველყოფა<span class="float-right"><a href="http://localhost/regions/regions/7/jandacva%20da%20socialuri%20uzrunvelkofa/jandacva%20da%20socialuri%20uzrunvelkofa.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">განათლება<span class="float-right"><a href="http://localhost/regions/regions/7/ganatleba/ganatleba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">კულტურა<span class="float-right"><a href="http://localhost/regions/regions/7/kultura/kultura.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">გარემოს დაცვა<span class="float-right"><a href="http://localhost/regions/regions/7/garemos%20dacva/garemos%20dacva.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">ინფრასტრუქტურა<span class="float-right"><a href="http://localhost/regions/regions/7/infrastruqtura/infrastruqtura.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>




                </tbody>
            <?php
            }
            ?>
        </table>

        <div class="map-box">
            <svg id="svg4380" xmlns="http://www.w3.org/2000/svg" viewBox="" version="1.1">

                <g id="layer5">
                    <a xlink:href="racha/lentexi.php" class="text-decoration-none">
                        <path id="group5-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 957.32812,294.7793 c -0.28488,0.44078 -0.42727,1.01256 -0.7871,1.41992 -0.78581,4.35484 -6.76118,7.24595 -10.47657,8.13672 -2.20617,2.20798 -10.39936,3.75331 -5.50586,8.55273 -2.30436,4.56135 4.39545,9.41422 -2.18359,11.88086 -1.6018,5.57041 -4.62888,13.048 -10.63086,13.64453 -5.86182,-3.83986 0.64905,-8.71816 -2.52148,-12.27344 -3.0403,-5.30787 -7.57342,2.54491 -11.90235,0.77149 -5.86235,-2.10089 -11.1065,2.15524 -16.83008,2.25391 -4.48198,-0.33551 -10.00571,1.99244 -13.34765,0.29101 -0.52053,-7.5497 -9.85344,-6.03341 -14.14844,-9.92383 -2.74899,-2.74216 -11.4186,1.8869 -12.54297,-4.52734 -4.47964,-2.21588 -10.36399,-2.52074 -12.12109,3.06055 -3.71197,0.98132 -6.54043,10.90012 -10.1211,5.30859 -2.12808,-3.61126 -7.85101,-0.89714 -10.42187,-0.5957 -3.81224,4.58833 -8.72815,0.63056 -12.73633,-1.42969 -2.89043,-4.16381 -9.31379,-2.87538 -11.43164,-6.71289 -4.11367,-1.97748 -8.48251,0.35776 -12.43555,1.1582 -3.50461,0.92575 -10.56406,-0.24529 -13.64062,-3.59961 -1.38452,-4.44263 -10.28439,1.22018 -13.26367,-4.44922 -2.61598,-4.68177 -8.88257,-5.73051 -10.80469,0.0879 -1.61364,3.73395 -0.0201,9.36215 2.06641,12.81055 3.62994,6.92101 -2.21225,5.8157 -6.35547,3.39844 -5.76635,2.71312 -12.79077,1.26086 -18.86133,0.11133 -4.43538,-3.18739 -4.5885,6.40612 -7.89258,8.23437 -5.21227,2.6131 -3.53646,8.53767 -6.25195,12.88867 -1.65898,4.87943 6.89423,0.84224 5.41211,5.95313 4.90446,2.40147 0.88773,8.38618 3.89453,11.35351 3.65565,3.3732 5.25763,5.31666 2.24219,9.91993 3.98407,3.36957 11.19728,-1.17804 10.61132,-6.28125 2.94622,3.41522 6.20485,4.74565 10.15821,6.93945 3.15485,-1.13172 6.51506,1.03412 9.70117,2.85351 2.56787,2.2674 8.20069,2.98463 8.875,5.68946 3.20776,1.44084 3.81457,6.92518 8.63672,6.28515 1.341,3.87112 5.63093,5.71006 6.05468,10.13477 -1.32564,3.33 2.77469,4.13994 4.44336,6.68359 3.58227,4.51293 3.7241,-3.44292 5.37891,-5.34765 3.69981,-1.01844 8.02762,0.55473 12.40625,0.0117 4.1141,3.97605 8.97861,0.71324 13.56055,-0.27539 3.96743,1.30964 3.11623,5.33543 6.07812,7.35546 3.67112,1.22815 5.01464,4.93373 6.5918,8.22266 1.99956,2.56137 5.53542,1.84718 7.625,4.35938 5.91771,0.24298 -0.60051,-6.4255 4.30078,-7.03907 2.28115,-2.97128 5.57733,-7.37832 9.93164,-6.9082 2.69555,-2.74084 6.3097,-2.27023 9.27149,-0.29297 2.65068,-1.54996 0.14155,-5.92561 2.18164,-7.75781 2.91219,-1.70964 7.08331,-0.0351 8.86132,-4.18555 3.63613,-3.51592 7.13394,-8.1389 8.07422,-13.35742 4.21223,-3.82602 9.94668,-2.84625 15.05469,-3.95898 4.80753,0.21194 8.3129,6.44798 13.97461,5.14453 5.8168,-0.11382 8.84793,4.87746 13.89258,6.5039 5.86278,-2.55272 11.15265,2.10981 15.99804,4.49219 4.85362,0.70378 4.13043,6.37823 8.25391,7.27344 2.48627,4.37351 6.09657,1.73763 8.84375,6.08789 4.54428,2.16211 8.146,-4.75262 7.52734,-7.23047 -5.31718,-4.5014 -0.6982,-7.69694 1.49805,-11.7832 4.46546,-3.87752 1.00876,-10.29788 6.42578,-12.88282 5.02257,-1.6068 10.19478,4.19284 14.19922,-0.44531 3.94536,-5.61283 5.85766,0.67669 8.14063,-0.34375 1.26153,-7.26479 12.17,-6.80492 11.9277,-14.7832 3.7345,-2.69982 2.5905,-8.60094 7.8965,-9.82227 3.4121,-3.14941 -1.6407,-7.10576 -3.0293,-10.34765 1.0609,-3.79976 4.8025,-6.75446 5.4063,-10.27539 2.2703,-2.54953 -2.9,-9.41167 -6.0313,-7.9336 -4.8442,6.35984 -4.8929,-4.83307 -9.91014,-3.20898 -3.55207,-1.92265 -9.54241,-0.68676 -12.125,-1.94531 -1.97353,-5.07036 -7.72361,-2.41842 -11.51953,-3.83985 -4.11058,-1.99507 -6.17995,-3.67762 -6.44922,-8.3418 -0.64661,-4.55857 -4.75434,-7.06445 -9.11719,-7.17382 z" id="path1422" />
                        <text id="svgRegions" x="1327" y="715">
                            ლენტეხი
                        </text>
                    </a>
                    <a xlink:href="racha/oni.php" class="text-decoration-none">
                        <path id="group5-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1030.1699,325.50977 c -0.6537,0.39671 -1.2716,0.89234 -2.0351,1.08203 -4.3092,3.0471 -8.6566,1.7851 -12.8594,2.52539 -4.0325,-0.41024 -5.1459,5.80197 -6.9766,8.6875 1.9641,2.49299 5.7623,7.10832 3.1192,9.91992 -5.5853,3.0356 -6.4612,6.93905 0.074,10.05859 2.6237,4.44413 4.6245,7.98176 2.3965,12.92188 -2.3641,4.39367 -5.4471,7.28015 -5.0528,12.68554 -1.6046,4.54151 -0.5386,10.65509 0.8692,14.9375 6.4224,3.15731 4.3666,11.00674 6.5,16.48243 1.4651,5.12091 4.1675,10.9878 3.6269,15.60547 -4.3012,1.65033 -10.4576,-2.61452 -12.3984,4.07812 -3.1761,3.61789 -9.05958,4.7384 -11.63087,7.86328 -2.62739,7.20421 -9.48652,12.43367 -11.31445,20.19531 -2.60508,4.55186 -2.87034,7.58614 0.83789,11.19336 -4.0294,2.0466 -2.5235,8.05643 1.18164,8.42579 4.82407,1.41566 12.35911,0.49066 14.04099,6.23632 1.1362,4.63431 -5.38303,7.75221 -1.78903,13.12305 0.49738,5.48945 4.26863,9.04681 9.90823,9.29492 3.5177,0.84853 7.0998,-3.20969 11.3867,-2.41601 4.6146,2.09894 7.2523,1.22701 10.8808,1.81054 4.107,3.02632 7.9916,1.08403 13.2598,1.23047 0.8938,5.74523 7.9001,0.75777 11.3418,3.55274 5.2257,3.17853 6.7148,-3.96161 9.6152,-6.58399 4.1965,-2.82568 8.5063,3.32398 11.8985,5.47852 4.9149,1.13044 8.7655,2.96861 13.7812,4.89062 -0.6119,-4.10119 -2.0479,-8.18776 -0.9843,-12.28906 2.2642,-4.67079 4.8182,-8.78712 2.7187,-14.30078 1.2519,-4.64786 1.4927,-10.14791 4.5195,-14.22852 1.835,-3.66087 -9.7771,-1.42744 -6.2773,-8.45117 2.7252,-6.20816 3.4977,-4.1236 -2.4688,-7.47461 -5.1024,-0.63754 0.3088,-5.31068 1.959,-7.2168 4.3574,-2.04072 5.6943,-8.4755 10.7617,-8.49609 3.8301,-2.70206 3.0366,-7.718 6.4434,-10.94336 3.7332,-2.31202 7.9121,-3.74557 11.4902,-1.3457 3.2792,-1.72756 6.5149,-1.75582 7.3614,-6.04688 3.4341,-3.85831 3.6901,-6.33015 1.6465,-10.61523 3.5935,0.0464 6.0802,-0.70401 10.2011,-0.64844 4.3602,-3.48776 9.0748,-6.85494 12.4785,-10.75976 1.6059,-4.12221 5.1289,-9.31775 3.3731,-14.24219 -2.9846,-3.09342 -5.3579,-6.17855 -9.6406,-6.85938 -3.0737,-2.826 -7.8771,-2.22358 -12.2325,-4.20703 -3.4492,-2.74536 -9.669,-4.48957 -10.0019,-8.79492 1.8241,-7.37967 -5.6687,-2.42861 -9.0723,-2.09375 -6.4735,3.81341 -4.7993,-9.26985 -11.2363,-6.39062 -6.4776,0.8882 -4.3411,-5.2405 -3.8418,-9.42969 -4.6069,-2.61385 -6.5844,-6.88096 -10.3613,-10.28125 -2.7166,-4.73927 -7.4256,-2.96082 -12.4121,-3.63867 -7.2568,0.96041 -13.6907,-2.98769 -17.6758,-8.76172 -3.717,-0.38357 -7.5357,-2.75755 -12.0664,-2.77344 -5.6644,1.32639 -10.4553,-0.60636 -15.3438,-2.99023 z" id="path1420" />
                        <text id="svgRegions" x="1397" y="665">
                            ონი
                        </text>
                    </a>
                    <a xlink:href="racha/dusheti.php" class="text-decoration-none">
                        <path id="group5-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1419,370.86 c 3.7254,1.02 8.5217,-0.15561 11.299,2.8224 0.1894,3.5599 4.4245,4.6249 5.0452,8.2246 1.9072,2.1568 4.3465,3.9882 6.6222,5.0137 1.9217,1.5826 3.8591,3.1082 3.7112,5.8086 2.791,3.1238 6.7581,-0.30898 9.8338,-0.50779 2.0067,-2.3244 2.4384,-4.826 5.7015,-5.8496 2.4477,2.7556 7.0881,3.3868 10.291,1.4395 3.4983,-1.0188 7.1748,-0.10891 10.361,0.17968 1.1545,3.6811 1.9234,7.2232 5.3999,9.7266 3.2849,2.6586 6.2821,7.2017 11.245,8.207 1.8773,4.2189 6.8708,7.0801 7.9184,12.178 2.8111,2.462 2.6955,6.7418 4.3806,9.7578 2.2467,-0.18955 6.4163,-1.4121 6.9021,0.49206 1.7261,2.6648 -1.6611,6.2536 1.8914,6.6541 2.161,2.1406 1.9452,6.2909 5.63,7.205 -2.228,3.5248 -4.5983,7.8926 -8.2721,8.4988 -0.016,4.0528 -1.9623,6.979 -2.8499,10.972 0.5382,5.0442 -0.2345,10.251 -0.6289,14.904 4.6314,4.1177 -0.5462,11.766 -5.8891,11.621 -2.2412,3.7572 -5.3502,7.0781 -7.7209,10.145 -1.7249,4.9333 3.5207,8.5255 1.4886,13.424 -1.1742,4.8456 -9.2085,3.2786 -10.889,8.1193 -6.0393,1.7778 -12.163,3.1484 -18.219,4.9121 -4.93,-0.25169 -7.9765,3.502 -10.995,6.235 -5.0584,3.5532 -3.1687,-1.3354 -1.87,-4.5202 -4.1126,-1.1832 -8.3219,-3.479 -12.997,-4.8489 -2.5803,1.6944 -4.3075,7.141 -7.1986,9.4778 -4.3715,0.52501 -1.5953,6.203 -5.5489,7.8382 -3.2348,3.8408 -4.499,8.5512 -6.645,13.081 -2.9378,2.5538 -6.5074,0.2328 -8.5682,-1.9513 -3.1455,1.5217 -0.8138,6.2807 -3.762,8.1746 -3.0515,4.1535 -4.0787,7.9424 -6.6594,12.261 -2.0131,2.5027 -4.416,5.8933 -8.5017,6.4479 -3.9794,2.563 -4.2031,8.1136 -3.2526,12.401 0.6274,2.5026 3.5409,1.3015 4.5058,4.0591 2.5432,-0.86364 1.647,2.6732 -0.4312,2.3791 -2.5456,2.1494 -2.1759,7.5968 -6.6622,8.1701 0.9917,3.4828 -1.2621,7.2148 -0.5506,10.451 3.4675,2.4581 2.7011,7.8549 5.0929,10.5 3.7921,-1.1335 2.5889,1.3038 4.2995,3.1524 5.0884,0.87966 0.2969,5.966 1.5294,9.6441 1.5682,4.5929 0.5345,9.7579 3.7235,13.655 -0.3434,5.7852 -8.2697,2.7772 -11.491,4.4355 -2.7988,2.7136 -0.2326,7.5245 -1.4047,11.422 -0.3915,3.9925 -1.5019,7.7136 -0.4492,11.811 -1.4056,4.0334 -1.9851,2.1912 -4.5007,3.377 -1.698,1.3777 -2.6617,-0.0827 -4.2038,1.6505 -1.4667,1.1651 -3.5431,1.8208 -4.6435,1.3496 -2.42,2.0268 -4.2593,-1.7464 -7.3982,-1.7989 -2.0377,-0.74271 -4.0243,-2.6411 -3.1076,1.2987 -3.9011,-0.84098 -5.5911,2.1494 -2.6967,4.051 1.1865,0.84791 2.6357,1.2053 2.1026,2.5937 0.1127,2.6438 -4.5608,3.0269 -6.5482,2.5468 -1.4608,-1.559 2.8294,-5.9007 1.649,-8.143 1.3056,-3.7338 -1.5406,-8.3149 -1.643,-11.664 0.5932,-4.9835 -3.0795,-5.9382 -8.1306,-5.613 -3.8168,0.58868 -9.3395,-1.553 -10.419,1.7206 -2.2303,0.79127 -4.6457,-1.34 -5.6931,1.7989 -2.0732,2.1423 -6.2776,-0.73649 -8.8904,0.0334 -1.6882,1.861 -2.7222,-0.30307 -5.2628,-0.0334 -0.8303,-2.7053 -3.8617,2.2526 -5.5926,-0.65612 -0.7858,-1.4732 -7.0178,-0.0372 -6.6954,-2.9435 -2.295,-1.0977 -3.2476,-3.8231 -7.0001,-2.549 -1.8577,-7e-5 -4.8677,0.18291 -6.6441,-1.0508 -2.6975,-1.509 -5.5618,1.4084 -7.4355,-0.0506 1.3376,-2.8996 0.069,-7.5269 -1.1973,-10 -0.1972,-2.5692 -2.3933,-3.162 -2.8242,-5.6956 -2.1541,-2.4743 -1.5348,-4.8896 -3.0475,-7.6949 2.0895,-0.95424 0.6264,-3.3332 1.9856,-5.094 -0.5429,-4.469 0.2646,-6.9384 4.7912,-6.9434 2.0951,-2.2498 5.3446,0.86744 6.7567,-2.0624 -0.3575,-2.9592 5.951,-0.28083 3.74,-3.7501 2.0985,0.11253 7.0076,-1.5939 2.3986,-2.6604 -3.2222,-3.9133 6.445,-0.24124 4.051,-4.707 1.135,-1.7417 -0.5187,-4.5302 -1.1181,-6.8847 -1.7629,-2.8524 4.4597,0.31597 4.7131,-2.8438 4.8828,-2.9778 -3.9207,-5.9527 1.5,-8.8496 0.7794,-3.5143 2.3492,-6.8506 7.0371,-6.4532 5.1568,0.006 6.249,-4.5456 3.5703,-8.3555 -0.362,-3.6541 -1.0857,-7.5411 0.3398,-11.252 1.377,-4.3585 -0.9759,-9.6481 0.4493,-14.328 -1.5827,-5.5096 -5.9489,-7.939 -6.1661,-13.344 -0.903,-3.6899 -8.7934,-8.1238 -2.9628,-11.268 2.0201,-2.0102 3.3968,-5.2082 5.2292,-7.5352 3.1213,-2.84 0.9732,-9.5798 -3.9587,-9.0019 -4.679,-2.8058 -9.7541,-0.69034 -13.707,-4.9082 -4.0674,-2.8316 -8.416,-4.2343 -11.441,-7.9707 -4.1719,-0.0917 -6.5638,-1.5191 -8.2382,-5.1406 -1.9377,-1.7449 -5.3604,-5.6596 -0.522,-5.5976 3.7665,-0.40665 3.6998,-1.5413 4.7892,-4.0509 2.2397,-2.5756 -1.3593,-4.4735 -1.3579,-6.7483 2.1283,-0.22068 2.7254,-2.5323 0.8969,-3.6017 1.2888,-1.6151 -0.1445,-3.9088 -1.8462,-4.7504 0.1357,-2.6923 -0.079,-7.2522 1.6445,-9.1387 3.1579,1.5049 4.723,-2.0086 7.584,-0.54098 1.9834,-4.1265 7.768,-3.8071 10.658,-3.6524 3.5896,0.77083 3.3745,3.6775 3.9007,6.084 3.135,1.5876 3.7257,-0.60316 6.6803,-1.5 3.145,0.79456 3.2373,4.4193 5.7215,5.6992 2.9457,0.008 6.2582,-0.60931 8.2823,1.7988 2.69,1.7488 3.44,-2.7956 4.449,-4.8163 0.4619,-3.0509 2.9491,-4.7135 5.3992,-6.125 0.164,-2.6958 2.6687,2.9099 4.6012,2.754 3.5599,-2.5053 5.5834,5.7739 6.1951,1.7382 2.0999,-1.2774 3.8202,-5.1594 5.2425,-7.422 2.8013,2.62 4.371,0.79262 7.8492,1.422 3.6636,0.75484 6.8494,-3.9629 10.154,-4.3986 3.4314,-1.5446 1.6824,-5.1648 5.8965,-5.8399 6.7028,-1.5456 5.9888,-10.172 11.43,-13.508 3.4207,-2.82 5.2045,-3.8415 1.5823,-7.9414 -0.7986,-3.173 -3.8924,-5.9111 -6.2956,-6.9004 0.3769,-2.5927 -2.9961,-6.8374 0.5613,-8.8888 0.5139,-3.8543 2.2215,-7.8495 2.114,-11.562 2.4899,0.85473 3.5052,0.33622 5.6914,-1.0468 0.521,-3.6637 5.1779,-5.6723 3.354,-9.4687 -2.0922,-2.2191 2.6264,-4.1114 0.7499,-7.2034 -1.5783,-3.7841 3.4803,-5.0332 3.6196,-8.416 0.7668,-3.4004 5.0923,-2.6916 7.7321,-3.412 3.0833,1.7467 5.3603,-0.74246 8.6787,-0.36411 z" id="path1149" />
                        <text id="svgRegions" x="1337" y="555">
                            დუშეთი
                        </text>
                    </a>
                    <a xlink:href="racha/yazbegi.php" class="text-decoration-none">
                        <path id="group5-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1306.2,364.6 c 2.5717,4.3147 7.3485,11.054 12.853,6.865 7.6095,0.0176 16.558,3.5994 22.966,-2.1406 2.8637,-2.4237 3.1586,4.5899 6.2504,4.3808 5.2785,-1.606 5.7862,6.5828 11.289,5.7092 1.8781,2.5882 5.726,5.6682 1.8122,8.2695 -0.9026,5.0407 1.9577,8.689 3.5701,13.039 -2.1733,3.5113 3.2667,5.7953 2.0099,9.6994 -0.011,3.8962 4.0588,3.3991 5.6955,6.3868 2.1519,3.5904 4.4453,9.2732 9.7364,6.9961 2.8776,1.1785 5.4647,-2.7847 7.0953,0.80078 2.1327,2.1581 3.0848,5.5886 4.6345,8.0703 -3.6141,0.63933 -4.57,4.7374 -7.5372,6.4043 -0.9472,3.4686 -2.6914,7.3366 -5.88,9.3827 -5.1123,-0.01 -4.0335,4.23 -7.3574,6.0313 -3.1517,0.19345 -6.2486,5.5765 -9.9634,3.961 -2.7068,0.42438 -4.961,1.0106 -7.4588,-1.1816 -2.3678,1.9438 -3.8526,7.3853 -6.5961,7.8008 0.2359,-4.2822 -4.6647,-0.1984 -6.566,-3.2403 -1.6531,-2.9031 -3.4924,-3.49 -5.0787,-0.32427 -4.2222,1.6664 -3.699,7.1664 -6.6301,10.049 -2.6889,-1.7939 -4.5995,-3.0503 -7.4072,-1.9452 -2.6856,0.576 -3.1455,-2.3891 -4.2996,-4.3495 -2.1629,-1.1497 -4.742,-2.313 -7.0059,0.29893 -3.8624,0.86236 -1.1225,-5.3879 -4.6767,-5.4008 -2.8137,-1.923 -6.3633,-0.90451 -9.8678,-0.44928 -2.5236,1.4646 -3.5192,4.4913 -6.704,2.5507 -1.2968,3.8975 -6.2168,-1.7535 -5.5901,3.7188 -2.0457,1.7371 -0.021,5.1219 -1.2638,7.131 0.6658,1.8396 1.8321,3.0844 2.3129,4.1488 -1.5234,2.4182 2.5528,2.6982 -1.0467,3.6018 -1.6231,3.1402 2.124,4.1518 1.793,6.5998 -1.5615,2.1941 -1.9733,3.7606 -4.3597,4.1993 -3.4159,2.1291 -5.1049,-0.38561 -5.7644,-3.8574 -0.3015,-4.1528 -5.5218,-4.5679 -8.3305,-4.4297 -1.8608,-1.9133 -3.5718,0.0747 -5.5371,-1.1602 -2.854,-0.50228 -3.8284,3.9272 -6.5452,0.45703 -0.6989,-6.8882 -7.7392,-0.50483 -9.5977,-4.7754 -2.408,-2.1791 -6.3718,-6.8742 -1.852,-8.7619 2.5764,-3.4578 13.156,0.43585 9.4864,-5.918 -3.1142,-2.2884 -3.5829,-6.1287 -7.9702,-5.3066 -0.127,-1.889 -0.014,-7.0115 -1.9544,-8.5449 -4.7102,-1.3071 -9.5026,-2.8547 -9.6033,-8.5722 -0.1546,-4.5103 -2.8543,-6.2566 -6.0488,-10.238 -3.685,-0.67399 -5.386,-6.4498 -8.5976,-2 -2.9842,4.3163 -3.8413,2.3463 -5.6877,-2.0858 -2.1002,-1.1763 -4.5789,-0.5136 -2.3113,-4.4063 2.324,-3.5415 -0.7864,-8.1021 1.7734,-10.818 2.8149,-3.4981 0.3992,-8.4142 3.4551,-11.799 0.6722,-4.1371 6.6157,-4.5344 8.1857,-8.1797 4.7179,-0.66499 9.0076,-4.3899 10.265,-9.127 2.8406,-1.735 6.1619,1.2265 9.2074,2.2267 2.7999,3.7123 6.979,-2.213 10.864,-0.16797 3.0215,2.1455 2.6124,5.7154 6.419,2.6914 4.3096,-1.5793 5.1249,-6.523 11.509,-1.9678 7.4769,1.9853 15.209,5.065 22.103,7.2901 2.3534,-4.619 -2.4676,-9.1441 -3.1476,-13.832 -4.2638,-2.5232 1.9854,-5.6496 1.6556,-8.9509 3.5149,0.31758 6.1823,0.14143 9.3613,-1.7109 1.2239,-0.7467 0.4994,-2.8457 1.9337,-3.1183 z" id="path10789" />
                        <text id="svgRegions" x="1277" y="428">
                            ყაზბეგი
                        </text>
                    </a>
                    
                </g>
            </svg>
        </div>

        <table class="machveneblebi-right">
            <?php
            include('connection.php');
            $query = mysqli_query($link, "select * from `regions` where ID = 7");
            while ($row = mysqli_fetch_array($query)) {
            ?> <tr>
                    <th>ძირითადი მაჩვენებლები</th>
                </tr>
                <tbody>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="2014 წლის 1 მარტის მდგომარეობით">ფართობი (კვ.კმ): <span class="float-right"><?php echo $row['Area']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="2021 წლის 1 იანვრის მდგომარეობით">მოსახლეობის რიცხოვნობა (ათასი):<span class="float-right"><?php echo $row['Population']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="2020 წლის მონაცემების მიხედვით">მთლიანი შიდა პროდუქტი (მლნ. ლარი):<span class="float-right"><?php echo $row['GDP']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="2020 წლის მონაცემების მიხედვით">მთლიანი შიდა პროდუქტი ერთ სულ მოსახლეზე (აშშ დოლარი):<span class="float-right"><?php echo $row['GDPPerCapita']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="2021 წლის მიხედვით">უმუშევრობის დონე (%):<span class="float-right"><?php echo $row['UnemploymentRate']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="2021 წლის მიხედვით">დასაქმებულთა რაოდენობა, სულ (ათასი კაცი):<span class="float-right"><?php echo $row['EmploymentRate']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="2020 წლის მიხედვით">დასაქმებულთა რაოდენობა - ბიზნეს სექტორში (ათასი კაცი):<span class="float-right"><?php echo $row['EmploymentRateIndustry']; ?></span></td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="2020 წლის მიხედვით">დასაქმებულთა საშუალოთვიური ხელფასი - ბიზნეს სექტორში (ლარი): <span class="float-right"><?php echo $row['AverageSalaryIndustry']; ?></span> </td>
                    </tr>
                    <tr>
                        <td title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="2021 წლის 1 იანვრის მდგომარეობით">რეგისტრირებული ეკონომიკური სუბიექტების რაოდენობა (ერთეული): <span class="float-right"><?php echo $row['RegistredEntities']; ?></span> </td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>


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
            <span class="tr" key="COPYRIGHT1">© 2022 ყველა უფლება დაცულია.</span>
            <br>
            <span class="tr" key="COPYRIGHT2">საქართველოს სტატისტიკის ეროვნული სამსახური (საქსტატი)</span><br>

            <span class="tr" key="COPYRIGHT3"><a href="https://www.geostat.ge/ka/page/monacemta-gamoyenebis-pirobebi">მონაცემთა გამოყენების პირობები</a></span>
        </footer>

        <script src="script.js"></script>
        <script type="text/javascript" src="lang.js"></script>
</body>

</html>