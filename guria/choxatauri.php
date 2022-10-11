<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="http://www.geostat.ge/regions/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="სტატისტიკური ინფორმაცია გურიის რეგიონის ჩოხატაურის შესახებ" />
    <meta property="og:description" content="სტატისტიკური ინფორმაცია გურიის რეგიონის ჩოხატაურის შესახებ" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <title class="tr" Key="PAGE_TITLE">სტატისტიკური ინფორმაცია გურიის რეგიონის ჩოხატაურის შესახებ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../samegrelo.css">
    <link rel="stylesheet" type="text/css" href="../guria/guria.css">
    <link rel="stylesheet" type="text/css" href="../custom.css">
    <link rel="stylesheet" href="../mediastyles.css">
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
            <a href="http://www.geostat.ge/" id="brand-logo-link" class=""><img src="../images/logo_transparency_geo.png" /></a>
        </div>
        <header class="header1">
            <h1>
                <p id="pagetitlename" class="tr" Key="REGION14">სტატისტიკური ინფორმაცია გურიის რეგიონის ჩოხატაურის შესახებ</p>
            </h1>
        </header>
        <div id="languages">
            <a href="#" id="ka" class="lang"><img src="../images/ka.png" /></a>
            <a href="#" id="en" class="lang"><img src="../images/en.png" /></a>
        </div>
        <div id="recommendation">
            <span class="tr" Key="RECTEXT1">
                რეკომენდირებულია განახლებული
            </span>
            <br>
            <span class="tr" Key="RECTEXT2">
                ბრაუზერების გამოყენება:
            </span>
            <a href="http://www.google.com/chrome/"><img src="../images/chrome-100.png" /></a>
            <a href="https://www.mozilla.org/en-US/firefox/new/"><img src="../images/firefox-100.png" /></a>
            <a href="http://www.opera.com/"><img src="../images/opera-100.png" /></a>
        </div>
        <div class="btn textbox-right zoom-out">
            <a class="regions-btn" href="list.php"><span class="tr" Key="regionsBtn">რეგიონების შედარება</span></a>
        </div>
        <div class="display-flex">
            <div class="btn textbox-left-home">
                <a class="back-btn" href="../index.php"> <span class="tr" Key="backBtn">უკან დაბრუნება</span></a>
            </div>
            <div class="btn textbox-right-home">
                <a class="regions-btn" href="../list.php"> <span class="tr" Key="regionsBtn">რეგიონების შედარება</span></a>
            </div>
        </div>
        <div class="btn btn-md zoom-out"><span class="tr" key="ZOOMOUT">უკან დაბრუნება</span>
        </div>

        <table class="machveneblebi-left">
            <?php
            include('../connection.php');
            $query = mysqli_query($link, "select * from `regions` where ID = 3");
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
                            <span class="float-right"><a href="http://localhost/regions/regions/3/dziritadi%20informacia/regionis%20fartobi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia1">
                        <td>
                            მუნიციპალიტეტების, ქალაქების და სოფლების რაოდენობა
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/3/dziritadi%20informacia/municipalitetebis,%20qalaqebis%20da%20soflebis%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">მოსახლეობა <span class="float-right"><a href="http://localhost/regions/regions/3/mosakhleoba/mosakhleoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/3/demografia/mokvdaoba_asaki_sqesi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia2">
                        <td>
                            გარდაცვალების მიზეზები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/3/demografia/gardacvalebis%20mizezebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia2">
                        <td>
                            ძირითადი დემოგრაფიული მაჩვენებლები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/3/demografia/dziritadi%20demografiuli%20machveneblebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">მშპ და დამატებული ღირებულება <span class="float-right"><a href="http://localhost/regions/regions/3/mshp%20da%20damatebuli%20girebuleba/mshp%20da%20damatebuli%20girebuleba.xls"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">პირდაპირი უცხოური ინვესტიციები <span class="float-right"><a href="http://localhost/regions/regions/3/pirdapiri%20uckhouri%20investiciebi/pirdapiri%20uckhouri%20investiciebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/3/dasaqmeba_umushevroba/dasaqmeba_umushevroba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia3">
                        <td>
                            ხელფასები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/3/dasaqmeba_umushevroba/khelfasi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi4" onclick="GetIdChange()" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="ქ.ზუგდიდის მიხედვით">ფასები და ინფლაცია 
                        </td>
                    </tr>
                    <tr class="informacia4">
                        <td>
                            სამომხმარებლო ფასების ინდექსი 12 თვის საშუალო წინა 12 თვის საშუალოსთან
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/3/fasebi/samomxmareblo%20fasebis%20indeqsebi%2012%20tvis%20sashualo%20wina%2012%20Tvis%20saSualosTan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia4">
                        <td>
                            სამომხმარებლო ფასების ინდექსი წინა თვესთან
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/3/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20tvestan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia4">
                        <td>
                            სამომხმარებლო ფასების ინდექსი წინა წლის შესაბამის თვესთან
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/3/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20wlis%20shesabamis%20TvesTan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/3/ckhovrebis%20done/shemosavlebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia5">
                        <td>
                            ხარჯები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/3/ckhovrebis%20done/kharjebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/3/biznes%20seqtori/saqmianobis%20mikhedvit_nace%20rev.2.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia6">
                        <td>
                            საკუთრების ფორმის მიხედვით
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/3/biznes%20seqtori/sakutrebis%20formis%20mikhedvit.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia6">
                        <td>
                            ზომის მიხედვით
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/3/biznes%20seqtori/zomis%20mikhedvit.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/3/soflis%20meurneoba/1.%20erttsliani%20kulturebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia7">
                        <td>
                            მრავალწლოვანი კულტურების წარმოება
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/3/soflis%20meurneoba/2.%20mravaltslovani%20kulturebis%20tsarmoeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia7">
                        <td>
                            პირუტყვის სულადობა
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/3/soflis%20meurneoba/3.%20pirutkvis%20suladoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia7">
                        <td>
                            მეცხოველეობის პროდუქციის წარმოება
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/3/soflis%20meurneoba/4.%20metskhoveleobis%20produktsiis%20tsarmoeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/3/mshenebloba/dasrulebuli%20msheneblobebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia8">
                        <td>
                            ნებართვები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/3/mshenebloba/mshenebloba_nebartvebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia8">
                        <td>
                            ძირითადი მაჩვენებლები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/3/mshenebloba/mshenebloba_dziritadi%20machveneblebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/3/sastumroebi%20da%20restornebi/sastumroebi%20da%20restornebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia9">
                        <td>
                            სტუმართა რაოდენობა
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/3/sastumroebi%20da%20restornebi/stumarta%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/3/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia10">
                        <td>
                            რეგისტრირებული ავტომობილების რაოდენობა
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/3/transporti%20da%20kavshirgabmuloba/registrirebuli%20avtomobilebis%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia10">
                        <td>
                            საერთო სარგებლობის საავტომობილო გზების სიგრძე
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/3/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/3/turizmi/ganawileba%20sacxovrebeli%20adgilis%20mixedvit.xls"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia11">
                        <td>
                            მონახულებული რეგიონებით
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/3/turizmi/ganawileba%20monaxulebuli%20regionebit.xls"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">სამართლებრივი სტატისტიკა<span class="float-right"><a href="http://localhost/regions/regions/3/samartlebrivi%20statistika/samartlebrivi%20statistika.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">ჯანდაცვა და სოციალური უზრუნველყოფა<span class="float-right"><a href="http://localhost/regions/regions/3/jandacva%20da%20socialuri%20uzrunvelkofa/jandacva%20da%20socialuri%20uzrunvelkofa.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">განათლება<span class="float-right"><a href="http://localhost/regions/regions/3/ganatleba/ganatleba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">კულტურა<span class="float-right"><a href="http://localhost/regions/regions/3/kultura/kultura.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">გარემოს დაცვა<span class="float-right"><a href="http://localhost/regions/regions/3/garemos%20dacva/garemos%20dacva.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">ინფრასტრუქტურა<span class="float-right"><a href="http://localhost/regions/regions/3/infrastruqtura/infrastruqtura.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>




                </tbody>
            <?php
            }
            ?>
        </table>
        <div class="map-box">
            <svg id="svg4380" xmlns="http://www.w3.org/2000/svg" version="1.1">

                <g id="layer2">
                    <a xlink:href="../guria.php" class="text-decoration-none">
                        <path id="group3-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 607.87,621.96 c 1.4586,1.4339 3.6441,4.1278 4.2715,1.8144 0.40959,-2.2567 2.6311,0.97953 4.094,-1.4e-4 1.9313,-0.22471 0.33401,1.1849 -1.165,0.34977 -0.60361,2.14 1.0763,2.63 2.0656,3.5491 1.7743,-0.58534 2.4008,3.0036 4.2033,2.7051 0.61744,1.6654 1.0872,3.9687 3.711,2.3965 2.9078,2.3575 3.7282,-1.5324 5.0469,-1.1408 2.2277,0.73672 2.8292,2.2208 4.8242,1.1835 1.8934,-2.5238 2.5843,-2.7178 4.4508,-1.5428 1.4821,0.40915 1.4216,1.878 2.3697,2.256 0.95697,1.5947 1.1043,3.2552 1.9436,4.9435 2.1132,0.0946 2.5427,-1.6804 4.7579,-1.6504 0.62972,0.0983 2.3533,0.11788 2.4498,0.64387 1.6019,1.6942 2.0305,-1.5132 3.7678,-1.8432 3.191,-0.89575 -0.48567,-2.7721 0.68358,-4.2012 1.6213,-1.0702 2.4208,-1.7127 4.7988,-1.4981 1.3107,-0.64496 2.7022,1.2715 3.8009,1.5062 -0.37226,1.5362 3.2282,2.2292 3.256,-0.008 2.2226,-1.0366 2.9634,1.2363 4.5431,1.6564 -0.4001,0.67143 0.6696,2.2135 1.6506,3.1448 1.2824,0.95971 0.74252,1.6878 1.9512,3.521 0.33227,1.3245 0.0879,3.6356 0.29283,5.0787 -1.1674,-0.0988 0.27832,5.194 3.0059,3.5508 -0.0909,2.0078 1.2368,2.1153 2.6936,2.6877 0.0323,1.4286 1.3574,1.5469 1.9572,2.4006 1.8191,-0.0114 3.3111,2.6374 4.0494,0.75014 1.5484,0.51198 1.6287,1.7031 2.437,2.8496 2.2858,0.64653 2.2043,-3.1326 4.0672,-0.83766 1.6933,1.4352 2.4212,0.32193 3.8477,-0.8556 0.77532,1.656 2.3143,2.7308 4.3498,2.3285 3.3981,2.9278 7.0648,7.5039 11.082,10.605 2.5432,2.3194 5.4919,4.012 8.4179,6.1739 2.0848,4.236 6.6184,1.0958 9.9233,2.2363 2.9733,-0.73188 6.4344,1.1907 9.7764,0.52847 3.3202,0.9149 3.5383,5.0336 6.3999,6.5712 0.0173,3.4074 1.3865,6.076 1.8457,9.5839 3.4462,3.494 -2.5039,5.097 -1.5721,8.1969 1.1149,3.1983 3.0171,5.8156 -0.21497,8.5784 -1.3522,3.1624 1.0302,6.0554 -0.0586,9.2992 2.7059,3.8715 -2.578,1.4447 -4.6758,1.5465 -2.432,-0.27181 -5.8078,-2.6286 -7.6942,-0.91033 -0.26442,3.5793 -4.6043,4.0991 -4.0979,7.9556 0.48976,2.8732 -0.32387,4.1674 -2.7812,5.7704 -3.1219,0.92424 -4.6845,1.6927 -7.8155,0.52781 -2.5198,0.55069 -4.8555,-1.2884 -5.5352,-3.5997 -2.7142,-0.51521 -4.9285,0.73894 -7.7853,0.35139 -3.0255,1.1872 -6.1273,-0.0132 -9.0233,0.39866 -3.1831,-0.10804 -5.9098,-1.5808 -9.1752,-1.3099 -3.5955,-0.0588 -8.2955,-2.7887 -6.0962,-6.9205 -0.84679,-4.1996 -5.6166,-5.534 -9.25,-4.5976 -1.8318,-3.2382 -4.5856,-4.1646 -7.3428,-3.2206 -0.96926,1.6041 -1.2522,2.7886 -2.8779,3.4492 -0.85434,1.5225 -0.4893,2.3665 -1.8354,3.1506 -2.9627,-0.55726 -5.2409,0.45422 -7.1551,2.1368 -3.2084,-0.98846 -6.2042,0.30805 -8.0351,3.2012 -0.71834,3.4718 -4.4415,3.0343 -6.1862,0.84839 -0.80898,-3.9661 3.4565,-8.0396 0.11206,-11.694 -1.7968,-1.8165 -3.0152,-5.7219 -0.43745,-7.3457 1.6696,-1.9703 0.30195,-3.5831 -0.95527,-4.2483 -1.2537,-0.36175 -2.7256,0.82995 -3.3069,-0.49812 0.13283,-2.4683 -3.3906,-2.4279 -4.8114,-4.3883 -3.867,-2.0022 -3.5841,-6.6868 -6.2807,-9.6701 -2.3192,-2.0062 -3.6624,-5.3011 -3.6894,-7.5179 -4.4151,-1.2982 -3.8329,-4.85 -4.7048,-7.6172 -2.8985,0.14274 -1.0399,-1.8152 -3.1641,-3.3491 0.12356,-1.9654 -3.5264,1.1803 -2.8496,-0.30721 1.119,-0.55553 1.3414,-4.0969 -0.69919,-3.4005 -1.7876,1.1869 -1.519,2.095 -3.3517,1.7929 -1.0331,-0.56462 -1.5627,-1.6328 -1.9492,-2.8439 -1.3206,-0.59063 -1.5576,-3.446 -4e-5,-3.7993 1.2483,-1.167 1.9543,-2.0781 2.957,-4.1508 -0.98375,-0.25165 -2.4027,-3.2849 -3.1583,-3.0569 -0.74074,-0.10888 -2.3796,-1.1644 -3.9982,-1.2954 -3.0451,0.29406 -0.39766,-1.937 -1.9511,-2.0998 -2.2644,-0.89632 -0.87307,-4.766 -2.6992,-5.8502 -1.1357,-0.65798 0.0593,-3.4533 -1.651,-3.2554 -2.1166,0.49243 -0.19649,-0.99841 -0.89994,-2.1458 0.87146,-0.9874 1.3773,-3.318 0.90054,-4.6996 0.5198,-1.2819 0.48906,-3.1733 2.0997,-4.0314 0.0898,-1.4907 -1.9282,-3.6697 0.75791,-3.9064 1.0297,-1.0874 1.5778,-5.374 1.2852,-2.4005 3.0944,0.003 4.3766,-1.4942 7.625,-1.1992 1.2656,-0.62359 2.1499,-1.9773 2.4073,-3.312 z" id="path999" />
                        <text id="svgRegions" x="629" y="685">
                            ჩოხატაური
                        </text>
                    </a>
                </g>
            </svg>
        </div>

        <table class="machveneblebi-right">
            <?php
                include('../connection.php');
                $query = mysqli_query($link, "select * from `regions` where ID = 3");
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

        <script src="../script.js"></script>
        <script type="text/javascript" src="../lang.js"></script>
</body>

</html>