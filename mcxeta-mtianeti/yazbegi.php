<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="http://www.geostat.ge/regions/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="სტატისტიკური ინფორმაცია მცხეთა-მთიანეთის რეგიონის ყაზბეგის შესახებ" />
    <meta property="og:description" content="სტატისტიკური ინფორმაცია მცხეთა-მთიანეთის რეგიონის ყაზბეგის შესახებ" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <title class="tr" Key="PAGE_TITLE">სტატისტიკური ინფორმაცია მცხეთა-მთიანეთის რეგიონის ყაზბეგის შესახებ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../samegrelo.css">
    <link rel="stylesheet" type="text/css" href="../mcxeta-mtianeti/mcxeta-mtianeti.css">
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
                "../1600-900-optimized/2.jpg",
                "../1600-900-optimized/3.jpg",
                "../1600-900-optimized/4.jpg",
                "../1600-900-optimized/5.jpg",
                "../1600-900-optimized/6.jpg",
                "../1600-900-optimized/7.jpg",
                "../1600-900-optimized/8.jpg",
                "../1600-900-optimized/9.jpg",
                "../1600-900-optimized/10.jpg",
                "../1600-900-optimized/11.jpg",
                "../1600-900-optimized/12.jpg",
                "../1600-900-optimized/15.jpg"
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
                <p id="pagetitlename" class="tr" Key="REGION14">სტატისტიკური ინფორმაცია მცხეთა-მთიანეთის რეგიონის ყაზბეგის შესახებ</p>
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
            $query = mysqli_query($link, "select * from `regions` where ID = 11");
            while ($row = mysqli_fetch_array($query)) {
            ?> <tr>
                    <th>რეგიონული სტატისტიკა</th>
                </tr>
                <tbody>
                    <tr>
                        <th id="dziritadi1" onclick="GetIdChange()" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">ძირითადი ინფორმაცია <span class="float-right"><i id="classchange" class="dropdown_img_up"></i></span>
                        </th>
                    </tr>
                    <tr class="informacia1">
                        <td>
                            რეგიონის ფართობი
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/11/dziritadi%20informacia/regionis%20fartobi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia1">
                        <td>
                            მუნიციპალიტეტების, ქალაქების და სოფლების რაოდენობა
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/11/dziritadi%20informacia/municipalitetebis,%20qalaqebis%20da%20soflebis%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">მოსახლეობა <span class="float-right"><a href="http://localhost/regions/regions/11/mosakhleoba/mosakhleoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi2" onclick="GetIdChange()" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">დემოგრაფია</td>
                    </tr>
                    <tr class="informacia2">
                        <td>
                            მოკვდაობა
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/11/demografia/mokvdaoba_asaki_sqesi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia2">
                        <td>
                            გარდაცვალების მიზეზები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/11/demografia/gardacvalebis%20mizezebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia2">
                        <td>
                            ძირითადი დემოგრაფიული მაჩვენებლები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/11/demografia/dziritadi%20demografiuli%20machveneblebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">მშპ და დამატებული ღირებულება <span class="float-right"><a href="http://localhost/regions/regions/11/mshp%20da%20damatebuli%20girebuleba/mshp%20da%20damatebuli%20girebuleba.xls"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">პირდაპირი უცხოური ინვესტიციები <span class="float-right"><a href="http://localhost/regions/regions/11/pirdapiri%20uckhouri%20investiciebi/pirdapiri%20uckhouri%20investiciebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/11/dasaqmeba_umushevroba/dasaqmeba_umushevroba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia3">
                        <td>
                            ხელფასები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/11/dasaqmeba_umushevroba/khelfasi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/11/fasebi/samomxmareblo%20fasebis%20indeqsebi%2012%20tvis%20sashualo%20wina%2012%20Tvis%20saSualosTan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia4">
                        <td>
                            სამომხმარებლო ფასების ინდექსი წინა თვესთან
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/11/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20tvestan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia4">
                        <td>
                            სამომხმარებლო ფასების ინდექსი წინა წლის შესაბამის თვესთან
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/11/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20wlis%20shesabamis%20TvesTan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/11/ckhovrebis%20done/shemosavlebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia5">
                        <td>
                            ხარჯები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/11/ckhovrebis%20done/kharjebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/11/biznes%20seqtori/saqmianobis%20mikhedvit_nace%20rev.2.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia6">
                        <td>
                            საკუთრების ფორმის მიხედვით
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/11/biznes%20seqtori/sakutrebis%20formis%20mikhedvit.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia6">
                        <td>
                            ზომის მიხედვით
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/11/biznes%20seqtori/zomis%20mikhedvit.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content=""><a target="_blank" href="http://br.geostat.ge/register_geo/">ბიზნეს რეგისტრი</a> <span class="float-right"></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/11/soflis%20meurneoba/1.%20erttsliani%20kulturebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia7">
                        <td>
                            მრავალწლოვანი კულტურების წარმოება
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/11/soflis%20meurneoba/2.%20mravaltslovani%20kulturebis%20tsarmoeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia7">
                        <td>
                            პირუტყვის სულადობა
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/11/soflis%20meurneoba/3.%20pirutkvis%20suladoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia7">
                        <td>
                            მეცხოველეობის პროდუქციის წარმოება
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/11/soflis%20meurneoba/4.%20metskhoveleobis%20produktsiis%20tsarmoeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/11/mshenebloba/dasrulebuli%20msheneblobebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia8">
                        <td>
                            ნებართვები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/11/mshenebloba/mshenebloba_nebartvebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia8">
                        <td>
                            ძირითადი მაჩვენებლები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/11/mshenebloba/mshenebloba_dziritadi%20machveneblebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                        <td id="dziritadi9" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">სასტუმროები და რესტორნები
                        </td>
                    </tr>
                    <tr class="informacia9">
                        <td>
                            სასტუმროები და რესტორნები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/11/sastumroebi%20da%20restornebi/sastumroebi%20da%20restornebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia9">
                        <td>
                            სტუმართა რაოდენობა
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/11/sastumroebi%20da%20restornebi/stumarta%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/11/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia10">
                        <td>
                            რეგისტრირებული ავტომობილების რაოდენობა
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/11/transporti%20da%20kavshirgabmuloba/registrirebuli%20avtomobilebis%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia10">
                        <td>
                            საერთო სარგებლობის საავტომობილო გზების სიგრძე
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/11/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi11" title="" onclick="GetIdChange()" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">ტურიზმი (შიდა) <span class="float-right"><i id="classchange" class="dropdown_img_up"></i>
                        </td>
                    </tr>
                    <tr class="informacia11">
                        <td>
                            საცხოვრებელი ადგილის მიხედვით
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/11/turizmi/ganawileba%20sacxovrebeli%20adgilis%20mixedvit.xls"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia11">
                        <td>
                            მონახულებული რეგიონებით
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/11/turizmi/ganawileba%20monaxulebuli%20regionebit.xls"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">სამართლებრივი სტატისტიკა<span class="float-right"><a href="http://localhost/regions/regions/11/samartlebrivi%20statistika/samartlebrivi%20statistika.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">ჯანდაცვა და სოციალური უზრუნველყოფა<span class="float-right"><a href="http://localhost/regions/regions/11/jandacva%20da%20socialuri%20uzrunvelkofa/jandacva%20da%20socialuri%20uzrunvelkofa.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">განათლება<span class="float-right"><a href="http://localhost/regions/regions/11/ganatleba/ganatleba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">კულტურა<span class="float-right"><a href="http://localhost/regions/regions/11/kultura/kultura.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">გარემოს დაცვა<span class="float-right"><a href="http://localhost/regions/regions/11/garemos%20dacva/garemos%20dacva.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">ინფრასტრუქტურა<span class="float-right"><a href="http://localhost/regions/regions/11/infrastruqtura/infrastruqtura.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>




                </tbody>
            <?php
            }
            ?>
        </table>

        <div class="map-box">


            <svg id="yazbegiSVG" version="1.0" xmlns="http://www.w3.org/2000/svg" width="1000px" height="100%" viewBox="0 0 21600.000000 28800.000000" preserveAspectRatio="xMidYMid meet">

                <g transform="translate(0.000000,28800.000000) scale(0.100000,-0.100000)">
                    <a xlink:href="../mcxeta-mtianeti.php" class="text-decoration-none">
                        <path id="group5-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="M149025 200413 c-11 -3 -132 -41 -270 -86 l-250 -80 -220 -137 c-121
-75 -396 -232 -612 -349 l-392 -213 -194 -173 c-110 -98 -199 -185 -205 -201
-27 -67 -164 -635 -197 -819 -32 -179 -54 -257 -211 -760 l-176 -560 -206
-404 c-114 -223 -238 -477 -277 -565 l-70 -161 -105 -38 c-99 -36 -128 -41
-495 -87 -214 -26 -408 -51 -430 -56 -23 -4 -197 -96 -420 -222 l-380 -216
-500 -127 -500 -127 -295 -162 c-162 -89 -311 -174 -330 -189 -19 -14 -197
-168 -395 -342 -359 -315 -361 -317 -695 -686 l-335 -370 -225 -144 -225 -143
-378 -82 -379 -83 -311 38 -312 39 -410 145 c-356 126 -458 167 -771 310 -399
184 -352 169 -719 217 -126 17 -253 35 -280 40 -45 9 -84 3 -395 -59 -210 -43
-510 -113 -768 -180 l-422 -111 -313 -20 -312 -21 -195 40 c-192 39 -199 41
-455 151 l-260 112 -340 49 c-189 28 -353 47 -369 43 -42 -9 -865 -402 -906
-432 -19 -15 -206 -185 -415 -378 l-380 -351 -364 -593 c-200 -326 -370 -609
-377 -629 -7 -23 -16 -161 -23 -374 l-10 -337 55 -398 55 -397 -20 -370 -20
-370 -85 -236 -85 -236 -130 -669 c-72 -368 -152 -782 -178 -919 l-49 -251
-364 -445 -365 -445 -920 -700 -920 -701 -343 -479 c-189 -263 -350 -492 -358
-509 -8 -16 -39 -142 -69 -279 -53 -239 -55 -256 -55 -395 0 -142 1 -150 56
-375 52 -214 59 -235 97 -286 22 -30 243 -320 491 -644 l449 -589 436 -460
c384 -405 482 -502 815 -806 l379 -346 356 -605 355 -605 438 -1155 439 -1155
219 -875 c121 -481 361 -1419 534 -2085 l314 -1210 651 -1575 650 -1575 423
-810 c344 -660 506 -985 876 -1760 l453 -950 -10 -680 -10 -680 -156 -595
c-86 -327 -199 -761 -251 -965 -84 -325 -101 -380 -141 -452 -24 -46 -48 -85
-53 -88 -4 -2 -51 16 -105 41 -116 54 -129 56 -587 84 l-327 21 -413 -56 -413
-55 -602 -15 -602 -16 -833 397 -833 397 -1320 765 -1320 765 -1325 469 -1325
469 -4750 1474 c-5612 1741 -5000 1553 -9245 2840 -3764 1141 -3724 1129
-9740 3072 l-2925 944 -2485 745 c-1367 410 -2633 791 -2815 847 -217 66 -346
101 -375 101 -57 0 -102 -26 -128 -73 -11 -20 -81 -298 -157 -621 l-137 -585
-510 -1445 -510 -1445 -332 -700 c-272 -574 -366 -760 -518 -1030 l-185 -330
-224 -91 c-137 -57 -284 -125 -378 -178 l-154 -86 -298 -11 c-210 -7 -366 -7
-523 0 l-224 11 -349 169 c-305 147 -362 172 -458 194 -60 15 -245 58 -409 97
l-299 70 -326 -35 c-179 -19 -339 -38 -356 -41 -34 -7 -1173 -613 -1225 -652
-19 -15 -330 -274 -690 -578 -624 -525 -665 -562 -869 -775 -256 -269 -271
-283 -281 -272 -4 4 -101 289 -215 632 l-208 624 -156 201 c-254 327 -300 390
-457 626 l-150 225 -223 710 c-197 629 -235 740 -332 969 -59 142 -119 270
-131 284 -34 36 -820 650 -908 708 -41 28 -248 161 -460 296 l-385 246 -590
195 -590 195 -515 76 -515 76 -294 -43 -294 -44 -281 106 -281 106 -485 -1
c-391 -1 -572 -7 -933 -28 -580 -34 -771 -33 -1320 4 -243 16 -737 41 -1097
55 l-655 26 -520 -126 -520 -126 -600 -211 c-330 -116 -613 -220 -630 -232
-16 -11 -225 -168 -463 -349 -343 -260 -525 -408 -875 -709 -243 -209 -527
-449 -632 -532 l-190 -153 -512 -142 -512 -142 -376 -37 -377 -38 -83 63 c-66
50 -152 140 -412 435 -282 320 -372 415 -636 667 -266 254 -368 342 -760 660
-249 201 -464 373 -477 382 -14 9 -151 45 -306 82 l-280 66 -259 -30 -258 -29
-256 36 -256 36 -240 101 -240 101 -210 197 -210 197 -280 464 -279 463 -241
245 c-132 135 -254 255 -272 268 -18 12 -238 132 -490 266 l-458 243 -450 112
-450 111 -505 60 c-278 32 -741 84 -1030 115 l-525 55 -350 -64 c-324 -59
-375 -71 -666 -159 l-315 -96 -155 11 -156 12 -96 90 -97 91 -276 710 c-152
391 -285 734 -296 762 -24 65 -67 109 -118 123 -69 19 -1247 -77 -1434 -116
-17 -4 -165 -67 -330 -142 -166 -74 -518 -230 -784 -347 l-483 -211 -536 -380
-537 -379 -260 -305 c-144 -168 -271 -318 -282 -335 -12 -16 -147 -329 -301
-695 -254 -600 -312 -750 -598 -1535 -309 -847 -320 -878 -396 -1175 -78 -306
-341 -1266 -359 -1307 -5 -12 -96 -127 -203 -255 -162 -196 -264 -336 -637
-873 -244 -352 -457 -657 -473 -678 -54 -70 -600 -522 -1242 -1029 -465 -367
-823 -638 -1310 -994 l-670 -489 -630 -315 -630 -315 -340 -387 c-336 -383
-707 -780 -775 -829 -23 -17 -113 -49 -260 -92 l-225 -65 -375 -8 -375 -7
-220 -62 c-246 -70 -186 -40 -940 -450 -412 -224 -857 -422 -1110 -494 l-180
-51 -557 -15 -557 -16 -188 -53 -188 -53 -193 -120 -193 -121 -218 -343 -218
-344 -107 -290 c-59 -159 -117 -303 -128 -320 -51 -71 -630 -735 -685 -785
-32 -30 -292 -260 -576 -510 l-518 -455 -447 -216 c-367 -178 -508 -253 -792
-419 -190 -111 -358 -212 -375 -223 -167 -118 -1574 -1192 -2305 -1761 -773
-601 -1072 -826 -1818 -1368 -722 -524 -953 -698 -1214 -912 -277 -228 -340
-274 -462 -344 -784 -445 -1019 -579 -1069 -610 -55 -35 -61 -43 -118 -157
-59 -119 -60 -124 -219 -762 -88 -353 -236 -958 -330 -1345 -228 -937 -328
-1258 -705 -2258 l-263 -695 -189 -385 -190 -385 -258 -325 c-141 -179 -296
-365 -344 -413 -47 -49 -193 -176 -323 -283 -131 -108 -249 -210 -262 -227
-16 -22 -39 -96 -75 -242 -29 -115 -114 -408 -190 -650 -77 -242 -142 -452
-145 -467 -4 -15 7 -225 24 -465 l30 -438 -15 -475 -16 -475 -84 -713 c-108
-906 -107 -841 -30 -1858 l55 -729 -30 -834 -30 -835 -180 -765 -180 -766
-236 -610 -237 -610 -261 -419 -261 -419 -290 -272 c-257 -240 -332 -303 -660
-555 -435 -334 -825 -648 -853 -687 -11 -15 -124 -257 -252 -538 -213 -465
-246 -547 -384 -930 l-151 -420 0 -385 0 -385 74 -155 c86 -181 61 -143 320
-485 174 -229 230 -313 373 -553 l168 -283 55 -323 55 -322 0 -456 0 -457 -45
-308 c-25 -169 -90 -544 -145 -833 l-100 -525 0 -645 -1 -645 -133 -295 -133
-294 -149 -185 c-175 -216 -189 -236 -198 -276 -3 -16 -31 -565 -61 -1220
l-54 -1190 -67 -600 -67 -600 -325 -720 c-324 -718 -325 -721 -534 -1295
l-208 -575 -130 -500 c-128 -492 -132 -504 -231 -745 l-101 -245 -216 -340
c-119 -187 -258 -405 -310 -485 -52 -80 -99 -161 -103 -181 -7 -29 7 -116 66
-409 l75 -373 161 -496 161 -496 152 -238 c117 -185 192 -288 333 -461 100
-123 194 -233 210 -244 70 -49 558 -268 753 -337 113 -39 218 -75 233 -79 43
-10 692 119 731 147 17 11 101 87 186 167 96 91 231 204 355 296 110 83 205
153 211 157 7 4 59 -54 130 -145 168 -215 289 -354 332 -383 20 -13 194 -104
386 -203 l349 -179 77 -144 c42 -79 241 -423 442 -764 366 -620 366 -620 478
-885 81 -191 191 -418 395 -815 l283 -550 277 -680 c369 -906 891 -2142 921
-2182 13 -18 153 -141 310 -274 320 -270 263 -208 698 -772 253 -328 279 -357
450 -520 99 -95 195 -183 211 -194 17 -11 199 -94 405 -183 319 -138 383 -162
426 -163 48 0 59 6 261 141 116 77 220 153 231 169 53 74 356 602 363 633 5
19 47 262 94 540 l85 505 137 470 136 470 305 419 c364 502 611 800 677 817
22 6 427 114 900 239 l860 227 890 542 c490 298 906 555 924 570 19 15 197
225 396 467 l361 439 366 325 c202 179 409 364 461 412 l94 88 92 -43 91 -42
218 -250 c160 -183 230 -271 262 -330 59 -109 406 -691 439 -737 68 -95 434
-539 458 -556 15 -11 147 -88 293 -172 193 -111 406 -220 784 -402 l519 -249
336 -246 336 -246 353 -336 c195 -185 373 -350 395 -367 23 -18 548 -278 1167
-579 811 -394 1237 -596 1525 -720 220 -95 413 -179 428 -186 30 -13 472 -501
1002 -1104 165 -187 483 -535 709 -774 363 -384 441 -461 685 -676 l276 -242
195 -333 195 -333 142 -136 c78 -75 346 -329 595 -566 l454 -430 539 -719
c346 -461 611 -803 736 -951 108 -128 204 -243 212 -256 9 -13 38 -87 65 -164
85 -245 86 -248 73 -1247 -11 -801 -7 -1144 15 -1282 6 -39 31 -102 86 -214
32 -65 66 -94 124 -106 17 -4 173 2 348 14 l317 20 442 94 c532 113 606 126
731 126 91 0 96 -1 100 -22 3 -13 8 -725 11 -1583 3 -858 9 -1657 14 -1775 l7
-215 163 -548 162 -548 50 -867 50 -867 115 -625 c63 -344 122 -654 129 -690
8 -36 126 -508 263 -1050 l250 -985 118 -193 c98 -159 159 -242 353 -480 128
-158 399 -496 601 -752 202 -256 455 -575 562 -710 l194 -245 420 -358 c230
-197 437 -370 459 -386 29 -20 117 -49 312 -105 l273 -77 236 11 c131 6 250 8
265 5 30 -7 29 -4 58 -120 5 -22 53 -271 106 -554 76 -405 101 -521 118 -545
60 -87 339 -426 364 -443 18 -13 188 -56 493 -126 l465 -107 555 -58 555 -59
315 -175 c208 -116 500 -294 860 -523 l545 -347 453 -214 452 -213 759 -145
759 -145 304 -174 c166 -96 499 -274 739 -395 l437 -222 158 -25 c153 -24 195
-26 1047 -43 488 -11 889 -21 891 -23 2 -2 12 -101 21 -219 l16 -215 -70 -485
c-51 -353 -68 -495 -62 -520 5 -19 80 -206 169 -415 l160 -380 270 -443 270
-444 6 -71 c3 -40 13 -253 21 -475 l16 -403 -144 -482 c-80 -265 -147 -493
-151 -507 -6 -25 29 -528 40 -585 3 -16 55 -214 116 -440 100 -377 123 -449
285 -895 96 -267 296 -786 443 -1155 147 -368 275 -695 284 -724 l16 -55 -274
-470 c-321 -551 -595 -1046 -607 -1096 -6 -24 3 -126 26 -325 54 -448 45 -410
138 -560 146 -235 144 -233 349 -407 436 -370 521 -434 987 -748 251 -169 470
-310 486 -314 17 -3 284 -33 595 -66 l565 -60 375 50 c206 28 384 53 395 56
11 3 207 66 435 139 395 127 436 138 835 224 l420 91 423 29 424 29 266 -150
c147 -82 271 -154 276 -158 20 -20 1040 -2292 1536 -3425 205 -467 382 -863
394 -880 28 -40 686 -751 1104 -1193 l334 -352 151 -104 c204 -138 933 -586
1187 -728 113 -64 320 -175 460 -248 140 -72 362 -191 492 -262 236 -130 238
-132 513 -355 204 -166 275 -229 271 -241 -3 -9 -24 -109 -47 -222 l-42 -205
-265 -570 -264 -570 -167 -550 -167 -550 -158 -360 c-87 -198 -161 -363 -165
-366 -12 -12 -2093 -110 -3281 -154 -953 -36 -1446 -49 -2435 -65 l-1240 -20
-1015 -60 -1016 -60 -459 -90 -460 -90 -630 -212 -630 -212 -755 -521 -755
-521 -338 -435 c-186 -238 -353 -453 -372 -476 -19 -23 -328 -279 -687 -570
l-652 -528 -1342 -1217 c-738 -669 -1350 -1229 -1361 -1245 -11 -15 -41 -80
-67 -143 -75 -180 -80 -158 114 -515 89 -165 172 -313 183 -329 11 -15 191
-165 401 -333 297 -238 428 -350 592 -509 l212 -204 207 -317 207 -317 168
-876 c93 -481 173 -893 178 -915 5 -22 213 -553 462 -1180 l453 -1140 316
-449 316 -450 418 -443 418 -443 622 -489 c380 -299 752 -602 956 -778 l334
-288 796 -1240 796 -1240 220 -172 c127 -100 235 -176 255 -182 19 -5 233 -26
475 -46 l440 -35 515 76 515 77 1015 277 1015 278 1220 246 c1108 223 1268
253 1744 325 l524 79 316 -100 c209 -67 361 -121 449 -162 l132 -61 512 -435
c282 -239 547 -465 589 -502 61 -53 136 -147 391 -490 l315 -423 756 -1505
c557 -1109 765 -1514 789 -1536 37 -35 1056 -858 1103 -890 17 -12 442 -244
945 -516 969 -524 936 -508 1355 -657 135 -48 1252 -367 1531 -437 101 -26
114 -19 330 177 104 95 217 199 252 232 67 64 64 59 115 252 15 57 53 147 101
244 l78 154 197 216 c223 245 461 531 638 766 107 143 139 177 294 316 l174
155 145 62 c140 60 151 63 325 87 l180 25 335 -26 c293 -23 353 -25 480 -16
142 10 151 12 420 97 l275 86 405 34 c223 19 419 38 435 41 17 3 118 46 225
95 107 49 200 89 205 89 6 0 61 -37 122 -83 110 -80 115 -83 235 -115 112 -29
151 -34 423 -51 l300 -19 75 -43 c62 -37 110 -81 281 -259 l207 -215 408 -239
409 -240 195 -9 195 -10 175 47 c290 78 272 71 333 132 62 64 43 57 589 204
142 38 268 76 280 86 13 10 88 95 167 190 79 95 164 192 190 217 l46 44 183
32 184 32 87 -83 c47 -46 141 -144 208 -218 67 -74 197 -210 290 -301 138
-137 198 -188 338 -287 146 -103 212 -141 470 -270 l300 -150 223 -196 c209
-183 234 -209 410 -423 157 -191 204 -241 295 -314 63 -51 120 -89 139 -93 19
-4 76 2 138 15 l105 21 265 167 265 168 590 151 c551 142 621 157 1065 237
419 75 527 90 910 131 421 44 442 45 645 39 l210 -7 505 -160 505 -160 980
-525 c539 -289 985 -529 990 -533 6 -4 165 -95 355 -202 l345 -195 405 -121
c365 -109 423 -124 585 -147 99 -15 183 -29 186 -33 4 -4 60 -176 125 -382
l118 -375 237 -360 237 -360 116 -480 c198 -818 188 -785 424 -1390 209 -537
211 -541 343 -775 82 -146 131 -244 130 -260 0 -14 -14 -96 -31 -184 l-29
-158 29 -226 c29 -218 30 -242 30 -622 0 -217 3 -413 7 -435 5 -34 24 -58 118
-155 65 -67 174 -198 262 -315 119 -159 224 -280 509 -589 l359 -389 190 -321
c105 -177 262 -461 350 -631 l160 -310 138 -141 139 -142 131 -424 c73 -233
140 -436 150 -451 9 -15 266 -312 569 -659 498 -571 997 -1118 1052 -1153 34
-21 81 -27 126 -15 35 10 67 36 188 161 l145 149 676 413 676 413 240 89 c316
116 315 116 409 188 56 44 123 82 220 126 125 57 148 64 235 72 61 6 159 6
266 -1 94 -5 323 -14 510 -20 l340 -11 425 80 c234 44 559 101 723 126 l297
45 183 -16 c100 -8 198 -12 217 -9 68 13 246 87 305 128 194 133 283 203 397
309 l127 119 428 70 c445 72 503 85 958 219 110 33 227 67 260 76 84 23 120
48 145 100 17 35 21 55 16 87 -6 36 -93 207 -163 320 -13 20 -21 37 -18 37 11
0 1483 241 1535 251 74 15 115 41 139 93 28 56 26 75 -10 176 -60 165 -79 256
-94 453 -16 198 -32 289 -72 401 -19 53 -24 82 -20 125 8 102 57 335 84 406
25 64 103 178 148 215 21 17 141 175 207 272 55 81 185 384 225 523 28 98 28
104 29 375 0 277 10 467 24 506 5 11 50 65 102 120 51 54 163 180 249 279 134
155 218 235 246 235 16 0 391 186 422 209 66 49 403 526 801 1130 l115 175 0
110 0 111 -52 105 c-29 58 -92 175 -141 260 -48 85 -110 196 -137 245 -27 50
-84 149 -128 220 -44 72 -139 227 -210 345 -118 198 -224 345 -269 378 -15 11
-17 23 -12 80 8 83 -30 250 -77 344 -40 80 -110 180 -166 239 -29 30 -49 62
-58 95 -7 27 -28 83 -45 124 -18 41 -45 116 -61 166 -69 218 -222 405 -408
499 -36 18 -90 49 -120 69 -30 19 -74 38 -98 42 -24 3 -43 9 -43 12 0 3 21 36
48 75 l47 69 0 92 -1 91 -55 100 c-78 143 -96 189 -113 294 -11 68 -22 104
-43 135 -54 81 -129 173 -219 267 -50 53 -118 135 -150 183 -110 162 -105 150
-111 304 -3 75 -12 164 -20 196 -18 72 -62 164 -112 231 -21 28 -40 58 -44 68
-14 37 -130 232 -168 283 -79 103 -182 144 -291 114 -46 -13 -121 -89 -151
-155 -13 -27 -52 -112 -87 -189 -55 -120 -70 -143 -108 -172 -25 -19 -56 -34
-69 -34 -22 0 -23 3 -17 38 3 20 23 107 44 192 46 187 57 313 40 462 l-12 106
60 120 c32 66 74 140 91 166 92 133 113 256 70 413 -14 54 -35 103 -56 132
-61 86 -87 150 -91 227 l-4 72 43 30 c72 49 112 92 176 187 55 80 67 107 108
245 71 236 70 235 233 396 160 159 144 156 177 38 18 -67 79 -153 139 -199 44
-33 127 -43 218 -26 47 9 82 25 138 63 70 47 120 101 237 252 17 23 56 59 85
80 68 50 136 137 143 185 3 20 11 66 17 103 6 37 8 95 4 132 l-6 65 52 15 c29
8 123 21 208 29 171 16 233 35 333 101 l55 36 48 -24 c27 -13 85 -34 128 -46
l79 -22 84 23 c90 24 169 71 224 134 17 19 36 35 41 35 5 0 34 15 64 33 43 25
66 49 103 107 27 41 58 84 70 94 11 11 38 49 58 85 34 60 38 73 38 141 0 47
-7 95 -19 130 -16 47 -19 92 -20 310 -3 285 -6 299 -71 363 -46 45 -97 61
-187 60 l-68 0 -10 36 c-24 92 -30 133 -30 220 0 132 -15 161 -123 233 -75 51
-91 58 -188 77 -59 12 -109 21 -113 21 -3 0 -38 30 -78 66 -40 36 -112 92
-159 124 -47 32 -96 74 -109 93 -28 40 -74 74 -121 87 -51 15 -163 12 -231 -6
-33 -8 -61 -14 -62 -12 -2 2 -13 25 -26 51 -37 79 -109 143 -186 167 -73 22
-158 26 -217 9 -22 -6 -40 -9 -42 -7 -5 5 47 153 82 233 17 39 44 106 59 150
15 44 40 98 55 120 50 72 100 221 139 417 21 102 43 195 49 206 15 29 81 300
81 334 0 19 6 31 18 34 50 15 93 46 157 112 42 44 96 87 135 108 124 68 183
125 232 219 17 33 41 74 53 90 62 82 115 195 125 263 10 75 -1 175 -25 222
-20 39 -90 127 -151 190 -52 53 -54 58 -64 130 -24 181 -60 259 -162 348 -21
19 -38 43 -38 54 0 12 22 42 49 69 61 60 76 100 76 209 0 106 -15 157 -61 204
-51 52 -101 74 -211 92 -250 39 -388 73 -513 126 -54 23 -124 89 -152 143 -47
90 -96 132 -197 169 l-60 22 -56 108 c-30 59 -53 112 -49 117 10 17 128 72
184 85 30 8 120 25 200 40 160 28 185 40 267 125 25 26 68 59 96 75 173 93
223 173 216 343 -4 69 -8 84 -35 123 -36 51 -202 184 -292 235 -86 48 -151 64
-238 56 l-71 -6 -69 57 c-87 71 -175 102 -262 92 l-57 -6 -27 73 c-44 115
-111 174 -213 184 l-52 6 -12 52 c-14 64 -60 138 -112 183 -34 30 -79 106 -79
136 0 24 -68 109 -115 145 -65 49 -193 117 -253 135 -27 7 -98 21 -158 30 -60
10 -134 22 -165 28 l-56 10 -12 51 c-19 81 -61 138 -136 182 -38 22 -87 62
-116 96 -45 52 -179 149 -206 149 -6 0 -15 53 -22 121 -10 98 -35 204 -131
567 l-119 447 11 154 c8 117 7 164 -2 194 -9 31 -50 79 -178 211 -92 94 -187
192 -211 218 l-43 46 145 289 c79 158 235 475 345 703 l200 415 87 285 c47
157 169 535 270 840 100 305 186 569 190 587 9 44 -24 471 -39 508 -14 31 -48
66 -261 262 -110 101 -131 125 -138 158 -12 57 -2 120 45 264 l40 126 -16 130
c-14 118 -14 144 0 279 9 81 13 164 9 182 -3 19 -26 59 -50 89 -25 30 -64 90
-88 132 -42 76 -44 82 -66 262 -22 182 -49 299 -97 417 -40 101 -34 263 32
831 l26 223 61 60 c65 63 63 62 251 115 54 15 69 26 160 118 l101 102 287 560
c249 486 301 595 394 830 59 149 113 290 120 313 9 29 17 150 24 345 7 190 20
374 35 497 13 107 27 224 30 260 4 36 47 271 96 522 l90 458 179 428 c98 235
233 578 301 762 67 184 123 336 124 337 1 2 90 -5 198 -14 l196 -17 103 -80
c57 -44 200 -157 318 -251 118 -94 406 -309 640 -478 404 -293 436 -314 645
-424 201 -106 245 -124 518 -218 164 -57 310 -106 326 -110 33 -7 690 42 741
55 20 5 50 24 67 42 31 33 177 236 348 484 l89 130 216 68 c118 38 339 101
490 141 l275 72 210 123 c238 140 414 268 692 503 l192 162 152 230 152 230
64 179 c35 99 65 181 67 184 2 2 65 21 140 43 76 21 145 43 155 49 29 15 138
-8 201 -43 30 -16 125 -72 210 -122 85 -51 166 -95 180 -98 14 -3 98 -15 188
-27 154 -19 169 -20 286 -5 191 23 166 31 347 -106 l161 -121 -7 -76 c-6 -66
-1 -102 29 -252 20 -96 41 -188 48 -203 11 -27 189 -199 256 -246 29 -20 76
-28 420 -72 l387 -49 450 8 450 8 90 46 c66 34 129 79 240 174 83 70 155 135
162 143 7 9 96 147 199 306 124 193 235 351 331 471 l144 181 282 156 c155 86
292 165 304 176 40 38 778 854 795 880 10 14 36 81 58 147 l41 122 602 568
c595 561 845 779 1007 878 52 32 92 45 206 71 119 26 148 37 183 65 41 32 45
33 174 41 179 11 209 16 244 42 17 12 82 81 144 152 122 141 313 340 342 356
10 6 98 28 195 49 108 23 250 64 363 103 158 55 203 76 296 135 60 38 119 75
132 81 30 16 392 81 761 136 168 26 321 50 340 55 19 5 208 76 419 158 l384
148 226 -53 226 -53 400 25 c391 25 406 25 682 11 l281 -15 249 -121 c251
-123 557 -256 626 -271 27 -7 112 1 310 26 149 20 283 39 297 42 39 10 288
108 381 150 l84 39 100 -13 c55 -7 195 -27 312 -43 l212 -30 203 48 c202 48
205 49 316 116 l112 67 242 -66 c134 -36 325 -84 426 -105 l183 -40 194 49
c110 27 204 56 217 67 14 11 86 85 161 165 l137 146 331 133 c182 73 341 132
353 132 11 0 131 -25 266 -57 l245 -56 180 -107 180 -107 95 -189 94 -189 268
-247 267 -246 203 -116 c112 -64 337 -181 500 -261 l297 -145 138 -25 c76 -14
276 -49 446 -78 305 -52 309 -53 610 -153 l302 -101 8 -59 c7 -51 18 -73 83
-164 58 -83 84 -133 124 -236 28 -72 58 -151 68 -176 14 -36 44 -67 152 -162
74 -65 200 -162 280 -215 l145 -97 300 -8 c423 -10 500 -18 569 -58 54 -30 56
-33 56 -74 0 -24 -22 -117 -49 -207 -27 -90 -72 -255 -100 -366 l-51 -202 0
-743 c0 -409 -5 -862 -10 -1008 -9 -248 -8 -273 11 -385 20 -113 24 -124 69
-185 36 -51 48 -77 54 -119 6 -45 18 -69 66 -136 33 -46 86 -111 117 -146 32
-35 70 -84 85 -109 14 -25 41 -58 60 -75 29 -26 36 -42 52 -117 18 -84 18 -92
-2 -325 -11 -131 -18 -251 -15 -268 3 -16 24 -55 46 -85 40 -52 42 -60 69
-224 26 -152 38 -193 117 -410 49 -133 114 -319 146 -414 35 -107 67 -184 82
-203 16 -19 78 -56 161 -97 l135 -66 181 -7 c143 -5 195 -11 245 -27 79 -26
151 -36 401 -59 l195 -17 267 -221 c184 -151 299 -239 367 -277 104 -60 97
-58 336 -87 149 -18 179 -28 238 -80 83 -73 106 -86 182 -106 39 -10 99 -30
135 -45 94 -39 125 -42 244 -25 158 22 201 46 527 295 374 286 334 261 432
270 141 13 282 87 342 179 13 20 43 88 66 151 28 75 62 145 100 201 54 81 73
99 336 311 302 243 440 336 878 586 127 73 312 190 413 260 l182 127 293 99
c247 84 321 114 477 194 l185 94 300 70 c165 38 370 85 455 105 85 20 209 46
275 58 66 12 235 45 375 75 l255 53 145 -95 c157 -102 160 -104 360 -129 90
-11 102 -16 225 -84 140 -78 187 -91 400 -114 63 -7 124 -22 205 -52 109 -40
121 -43 226 -43 l111 -1 111 -200 c60 -110 151 -281 201 -380 81 -162 100
-192 189 -295 93 -108 191 -202 272 -262 41 -30 296 -146 428 -194 119 -43
123 -46 207 -114 150 -122 207 -153 393 -211 l173 -54 33 -65 c80 -156 189
-347 209 -367 12 -12 63 -44 112 -71 84 -45 98 -58 212 -189 94 -108 147 -159
230 -221 l109 -81 28 -108 c15 -59 49 -157 74 -218 l47 -110 192 -195 c179
-183 197 -205 288 -350 54 -85 153 -265 220 -400 67 -135 153 -301 192 -370
131 -232 169 -318 182 -403 12 -86 6 -69 266 -687 236 -560 336 -863 350
-1060 7 -100 29 -207 51 -252 23 -45 68 -71 314 -183 l235 -107 290 -211 c160
-116 296 -215 304 -221 7 -6 36 -10 65 -10 45 0 71 10 206 80 128 67 179 87
295 119 77 20 163 45 190 55 28 10 86 26 131 35 76 15 87 14 205 -4 134 -22
430 -41 627 -41 117 0 131 -2 255 -41 166 -52 880 -365 960 -421 58 -40 60
-41 185 -50 152 -12 191 -4 253 51 85 74 75 73 345 45 l239 -24 168 21 c92 11
181 24 196 29 16 4 80 36 143 70 l113 63 105 4 c202 9 412 -52 676 -195 99
-54 195 -102 214 -105 36 -8 200 17 234 35 12 6 64 52 116 103 52 51 140 123
195 161 55 37 138 96 185 129 76 55 98 65 205 95 116 32 313 103 378 137 18 9
74 47 126 85 l93 70 72 -26 c39 -14 159 -44 266 -67 178 -38 207 -48 330 -106
82 -40 340 -138 660 -253 l525 -188 39 -70 c22 -39 103 -144 180 -234 l141
-163 275 -140 c151 -77 343 -177 426 -222 135 -73 161 -83 235 -94 78 -12 95
-19 237 -101 105 -61 167 -105 199 -140 72 -76 92 -86 190 -101 86 -13 91 -15
183 -82 52 -38 147 -113 210 -165 324 -271 978 -759 1095 -817 44 -22 141 -59
215 -82 74 -24 141 -48 149 -55 8 -6 52 -11 100 -12 47 -1 92 -2 98 -2 7 -1
48 -34 90 -73 43 -40 103 -88 133 -107 30 -19 92 -61 137 -94 44 -32 85 -58
90 -58 4 0 109 -32 232 -71 177 -55 281 -96 500 -195 229 -104 285 -126 326
-127 68 -2 116 28 146 90 l23 47 -22 165 c-12 91 -22 202 -22 246 l1 80 91 65
c120 86 146 113 193 199 30 56 60 91 127 151 70 62 118 119 233 279 80 110
203 294 272 407 113 185 140 221 259 349 l133 144 97 193 c53 106 128 245 167
308 38 63 76 129 83 145 7 17 18 87 24 154 11 118 14 129 59 220 57 113 197
491 239 641 29 105 30 107 146 258 162 210 357 512 428 662 33 69 88 172 123
230 63 104 64 107 140 394 41 160 76 290 78 291 1 0 25 8 52 17 148 49 210 75
235 99 43 44 128 248 144 348 8 47 31 154 51 238 l37 152 -4 193 -4 193 -68
165 c-59 146 -69 180 -85 295 -18 127 -18 135 0 336 l19 206 105 242 c58 133
114 258 124 279 36 69 446 736 506 824 60 86 60 87 135 114 165 59 169 64 260
328 l55 159 130 136 c184 192 330 354 345 380 6 13 20 48 31 79 11 31 37 86
59 122 24 40 50 105 68 171 16 58 42 124 57 148 32 47 43 129 44 323 l1 108
69 172 c38 95 96 236 130 313 l61 140 144 140 c229 224 465 487 538 601 74
114 52 99 312 209 130 55 175 69 240 76 45 5 95 12 111 15 53 11 294 131 361
180 58 44 69 58 119 154 41 81 68 119 117 166 64 62 87 73 193 89 22 4 51 14
65 23 35 22 511 430 532 456 10 12 54 107 99 212 l81 192 87 -2 c79 -1 103 4
296 63 l210 63 170 113 c94 62 222 144 286 183 l116 71 154 263 c156 267 187
308 305 405 l44 35 113 -16 c111 -16 116 -16 332 10 228 27 304 45 432 105 70
33 88 57 128 168 15 40 49 126 77 190 65 149 64 146 88 346 11 94 30 226 41
295 l22 126 -22 179 c-12 99 -21 213 -21 254 0 125 6 135 159 269 75 66 177
162 226 213 76 79 100 112 148 205 39 78 63 113 78 117 35 9 379 -173 622
-329 l217 -140 233 -341 234 -341 35 -124 c20 -67 43 -180 52 -251 l16 -127
87 -126 c77 -112 96 -132 178 -193 51 -37 120 -99 153 -137 33 -38 163 -174
288 -302 l229 -233 194 -107 195 -107 273 -375 c223 -306 309 -415 467 -590
106 -119 290 -329 409 -466 118 -138 226 -257 238 -265 13 -8 89 -30 169 -49
80 -18 246 -69 370 -113 124 -44 242 -84 263 -89 23 -5 94 -5 173 1 l135 9
192 -117 c151 -92 235 -152 392 -281 110 -91 227 -183 260 -205 33 -22 124
-89 203 -148 78 -59 226 -163 330 -230 l187 -123 160 -44 160 -45 485 -5 c468
-6 491 -7 657 -33 244 -40 216 -52 449 201 35 38 63 52 269 135 l230 93 200
-48 200 -49 245 11 c135 6 315 18 400 26 85 9 256 19 380 23 l225 6 170 88
170 88 177 10 177 10 212 -45 c116 -25 212 -46 214 -46 2 0 17 -42 34 -92 l31
-93 6 -580 c5 -507 9 -607 29 -795 23 -214 23 -216 79 -364 32 -82 62 -159 68
-170 6 -12 128 -175 271 -364 l261 -343 180 -147 c99 -81 372 -313 606 -516
605 -524 1032 -867 1097 -881 81 -16 176 48 188 128 6 37 -39 489 -50 507 -2
4 -10 71 -19 151 -10 105 -12 176 -6 264 5 66 9 191 9 277 1 221 2 221 173
336 73 50 139 100 147 113 8 13 16 57 19 97 4 64 7 73 26 77 11 2 98 6 191 9
125 4 206 12 305 31 l135 26 122 83 c104 70 134 97 194 172 39 49 75 97 80
106 5 9 37 96 70 193 43 124 96 249 180 418 l119 242 117 56 c76 36 189 104
317 192 l198 137 357 447 c315 395 393 500 661 893 166 244 309 460 318 480 8
19 72 187 143 373 71 186 140 360 153 385 13 26 199 367 413 757 l389 710 246
361 c259 380 785 1079 1168 1554 143 177 276 357 435 590 226 330 230 338 323
545 51 116 145 345 209 510 95 246 130 354 198 604 65 243 86 307 101 313 26
10 323 78 344 78 9 0 99 -38 199 -85 l183 -85 423 -328 424 -327 267 -95 267
-95 256 -186 256 -187 181 -36 182 -36 81 17 81 17 53 -26 c29 -14 94 -61 143
-105 120 -106 169 -139 305 -211 105 -55 127 -62 222 -76 57 -9 131 -16 164
-16 45 0 89 -11 184 -45 68 -25 144 -58 167 -73 42 -26 46 -33 96 -167 65
-174 78 -198 118 -228 62 -47 173 -94 273 -117 70 -15 145 -43 250 -92 192
-90 219 -92 325 -29 41 25 92 61 114 81 23 20 68 58 101 85 33 27 116 117 185
201 125 152 125 153 217 199 104 51 119 69 152 180 27 88 56 110 198 154 l102
32 268 -11 268 -10 270 -65 c149 -36 377 -83 509 -105 l239 -41 91 -58 c50
-32 107 -61 126 -64 83 -16 571 59 820 124 63 17 171 39 240 50 69 10 176 30
239 44 l113 26 122 -17 c102 -13 138 -23 231 -64 61 -27 169 -72 240 -100
l130 -51 170 -11 c170 -11 170 -11 265 16 52 15 123 41 157 58 l63 31 87 -17
c49 -10 178 -44 288 -76 264 -76 238 -72 399 -60 196 15 204 18 297 107 61 58
144 155 153 180 1 0 44 -7 96 -17 52 -10 140 -21 195 -25 92 -6 110 -4 222 24
67 17 160 44 205 61 46 16 177 52 291 79 l208 51 142 -31 c132 -29 160 -40
403 -154 245 -115 269 -124 396 -150 128 -26 141 -27 259 -18 103 9 138 16
199 42 66 27 86 31 170 31 71 0 119 6 190 26 52 14 103 30 113 35 20 11 143
117 297 254 65 58 169 135 270 200 149 96 180 122 322 263 l157 156 213 12
c117 7 230 15 252 19 21 3 257 105 523 227 l485 221 325 283 325 283 154 198
c85 109 289 358 454 553 l300 355 662 348 663 349 640 485 c730 553 1335 994
1606 1170 l185 121 112 7 112 7 222 -160 223 -160 325 -65 326 -66 249 52 250
53 261 172 260 172 219 366 219 366 336 330 c297 291 362 350 570 512 l235
183 310 147 c171 82 477 233 680 337 357 182 379 194 620 364 l250 175 153
243 c85 133 163 262 174 286 17 38 21 71 26 232 l5 188 -27 53 c-14 29 -78
126 -142 216 -113 158 -117 166 -171 320 -40 112 -56 170 -54 202 0 25 10 189
22 365 18 285 24 333 51 444 l32 124 220 234 c122 129 229 247 238 262 10 15
71 227 137 470 65 243 120 443 122 445 56 40 511 311 533 318 17 5 348 67 736
138 491 90 804 153 1030 208 l325 78 543 327 c443 267 614 377 935 600 l392
273 425 107 425 107 393 0 392 0 318 76 c174 42 329 84 343 93 72 44 823 741
1014 939 l210 218 238 386 238 385 75 55 c71 53 100 65 537 223 670 243 843
310 880 338 60 47 538 475 557 500 15 19 35 109 81 359 l60 333 179 270 c135
205 239 379 428 722 l250 453 140 510 140 509 153 273 c142 253 163 286 314
474 127 160 178 233 240 346 43 79 160 281 260 449 l182 307 256 603 256 604
63 251 62 251 155 68 c309 135 359 162 384 203 13 20 118 204 234 407 115 204
359 610 542 904 l331 534 14 81 c8 45 33 222 57 393 l43 313 -56 212 -55 213
13 259 c7 142 15 260 16 261 2 2 203 147 447 324 l443 320 439 418 438 418
169 271 169 271 53 174 53 174 160 185 c88 102 246 272 351 378 l191 194 180
87 c220 107 848 434 880 458 25 19 1208 1382 1257 1448 44 60 417 682 668
1116 222 381 224 386 436 655 189 241 234 291 406 456 106 102 320 296 475
432 l282 246 568 200 c587 206 803 270 2393 715 279 78 326 97 354 139 35 54
31 86 -57 456 l-85 355 -51 585 c-28 322 -56 612 -61 645 -8 48 -41 122 -151
335 -78 151 -152 294 -165 316 -13 23 -144 197 -293 388 l-269 347 -458 343
-459 343 -134 168 c-108 135 -169 227 -314 468 l-180 301 -373 862 -373 863
-25 398 c-15 219 -30 427 -36 463 -8 54 -34 113 -161 360 -84 162 -162 310
-174 329 -15 25 -86 74 -265 187 l-244 153 -83 278 c-51 168 -111 402 -154
593 -38 173 -88 391 -111 484 l-40 168 -212 282 c-207 278 -217 289 -576 659
l-365 376 -360 222 -360 222 -125 210 c-69 116 -312 483 -540 816 l-415 606
-60 181 -60 180 -122 170 c-115 159 -138 185 -405 444 l-283 275 -383 239
c-211 131 -398 242 -415 247 -79 21 -624 100 -825 119 -183 17 -276 21 -510
18 l-287 -3 -475 -288 c-261 -159 -486 -299 -499 -310 -18 -17 -578 -617 -766
-822 -16 -18 -88 -63 -160 -101 l-130 -68 -159 -17 -160 -16 -260 124 c-143
68 -280 130 -305 138 -25 8 -197 30 -382 50 l-336 35 -618 0 -617 0 -972 -110
c-534 -60 -1137 -123 -1341 -139 -486 -40 -1173 -65 -1530 -56 -238 6 -309 4
-605 -19 -231 -18 -360 -33 -415 -47 -426 -109 -819 -219 -1115 -314 -295 -94
-388 -119 -550 -149 l-195 -36 -232 24 -232 24 -267 87 c-147 47 -273 89 -279
93 -6 4 -136 103 -287 220 l-275 213 -957 1012 c-802 847 -1001 1052 -1222
1257 l-265 245 -169 251 -169 250 -15 248 c-9 137 -16 279 -16 316 0 37 -3 81
-6 98 -9 43 -400 498 -924 1074 l-415 456 -118 206 c-95 166 -143 264 -248
513 -128 304 -130 310 -175 518 -101 470 -107 491 -231 800 l-118 290 -214
320 c-134 200 -330 472 -523 725 -291 383 -328 427 -681 812 -361 395 -379
412 -579 575 l-206 169 -304 158 c-167 88 -391 212 -498 277 -194 118 -196
120 -279 219 -76 92 -93 121 -205 358 l-123 257 -78 373 -77 373 -122 222
c-66 122 -128 232 -137 244 -20 29 -506 405 -776 600 -204 148 -223 159 -476
281 -237 115 -274 136 -377 217 -63 50 -154 121 -202 158 -48 37 -132 107
-187 155 -88 77 -126 101 -342 216 l-244 130 -170 8 c-93 5 -493 10 -888 11
-698 3 -718 3 -736 22 -10 11 -68 94 -129 185 l-111 165 -117 705 -116 705
-155 530 c-131 451 -179 636 -319 1235 -164 703 -165 706 -275 1020 -60 173
-141 417 -178 541 l-68 226 19 304 18 304 95 360 c52 198 151 545 220 770 96
312 125 419 122 447 -3 20 -36 114 -73 209 -60 151 -83 195 -189 360 -103 161
-149 220 -325 419 l-205 233 -156 621 c-160 635 -297 1131 -326 1176 -9 14
-93 128 -187 254 l-170 230 -128 355 c-142 394 -120 353 -348 661 l-145 198
-239 213 c-131 118 -249 221 -263 230 -13 9 -111 42 -217 75 l-193 59 -93 121
-93 121 -247 734 c-136 404 -276 817 -312 919 l-65 185 13 210 c7 116 13 217
13 225 1 9 44 74 97 145 53 72 166 231 252 355 l157 225 167 389 c100 232 172
412 177 445 6 31 31 259 57 506 44 426 46 453 32 505 -8 30 -112 350 -230 710
l-216 655 -16 345 -15 345 -76 260 -76 260 -171 320 c-168 313 -178 330 -485
768 -172 246 -317 456 -322 465 -5 9 -46 141 -91 292 -82 271 -85 279 -217
542 -176 355 -451 815 -685 1150 -101 145 -288 425 -415 623 -128 198 -290
449 -360 557 l-128 197 -210 145 c-195 136 -218 149 -347 197 l-137 52 -20 91
c-12 51 -27 188 -36 311 -9 121 -40 481 -70 800 -47 502 -66 663 -144 1195
-118 804 -165 1243 -191 1775 -17 366 -25 451 -70 790 -57 433 -38 359 -271
1081 l-148 461 -29 410 -30 411 84 378 c58 262 86 408 90 474 l6 95 -90 290
-90 290 -15 415 c-15 409 -14 421 8 773 l24 358 99 112 c55 62 335 352 623
645 l524 533 198 316 198 315 322 388 322 387 317 539 c174 297 321 550 326
564 5 14 31 143 57 287 42 230 47 268 37 302 -9 27 -83 120 -262 326 -137 158
-280 329 -318 379 -46 60 -211 341 -482 821 -384 679 -422 743 -553 920 -77
105 -260 353 -405 553 l-265 363 -213 576 c-118 317 -222 589 -232 604 -9 15
-147 155 -307 311 l-290 284 -291 202 -292 202 -293 397 c-161 219 -435 582
-608 806 -315 407 -317 409 -599 865 -325 526 -421 671 -461 695 -15 9 -171
42 -357 76 l-329 60 -1105 66 -1105 65 -692 130 -692 130 -172 89 -172 89
-544 648 c-444 529 -579 697 -735 915 l-191 267 -481 293 c-463 282 -512 314
-1313 881 l-831 589 -418 452 c-330 357 -483 533 -730 836 l-312 385 -101 255
-102 256 -24 300 c-14 165 -36 406 -50 535 l-25 235 -61 125 c-72 149 -188
329 -226 351 -16 9 -82 28 -148 43 l-120 26 -539 -40 -539 -40 -351 55 c-193
30 -464 78 -602 105 l-251 50 -335 -85 -336 -85 -587 -55 -587 -55 -631 81
c-624 80 -638 82 -1071 175 -242 52 -446 100 -455 107 -9 6 -158 148 -332 314
-300 288 -325 309 -520 444 l-204 142 -327 141 -327 141 -160 200 -160 200
-170 365 c-93 201 -181 399 -195 440 -22 66 -27 106 -41 338 -9 166 -20 274
-28 295 -12 27 -373 625 -409 676 -7 10 -103 112 -212 227 -226 238 -554 619
-688 803 l-91 124 -88 296 c-48 163 -104 332 -124 376 -20 44 -44 102 -52 128
-16 54 -38 77 -299 308 l-150 134 -676 328 c-1112 538 -1327 635 -1743 785
-198 71 -373 132 -388 136 -17 4 -111 -8 -235 -29 -166 -29 -212 -40 -237 -59
-16 -13 -129 -120 -250 -238 l-220 -215 -293 -451 c-276 -423 -322 -487 -767
-1071 l-473 -621 -418 -331 c-368 -291 -473 -367 -858 -627 l-440 -296 -429
-148 -430 -148 -1601 -319 c-881 -176 -1997 -405 -2481 -510 l-880 -190 -1605
-145 -1605 -145 -1295 -275 -1295 -275 -485 -46 -485 -45 -900 204 -900 204
-575 6 c-316 4 -894 18 -1283 32 l-708 24 -517 146 c-382 108 -574 157 -742
190 -124 24 -349 70 -500 103 -151 33 -396 83 -545 111 -148 29 -277 56 -286
61 -9 5 -297 92 -640 194 -343 103 -745 224 -894 270 -148 46 -295 91 -326
100 -52 14 -158 14 -1370 -5 l-1314 -20 -940 114 c-797 98 -1056 125 -1702
181 -918 78 -977 80 -1689 35 -705 -44 -840 -60 -1134 -126 -606 -138 -506
-105 -1065 -354 -275 -122 -684 -302 -910 -400 -331 -143 -533 -240 -1045
-501 l-634 -322 -331 -28 c-523 -44 -621 -64 -868 -180 l-189 -88 -752 -4
-751 -4 -94 -57 c-78 -47 -100 -57 -132 -54 -34 3 -112 60 -618 450 l-579 448
-250 315 -250 315 -449 343 c-246 188 -590 448 -764 577 l-315 235 -453 230
-453 230 -693 673 -693 672 -1159 1363 c-638 749 -1384 1629 -1659 1955 l-499
594 -154 266 c-84 147 -191 337 -238 422 -47 85 -90 162 -97 171 -6 10 -75 67
-153 128 l-141 111 -284 402 -284 403 -161 365 c-89 201 -216 498 -283 660
-67 162 -153 356 -190 430 -37 74 -75 160 -85 190 -25 79 -55 128 -90 150 -33
20 -89 31 -120 23z m8 -520 c42 -87 127 -279 188 -428 61 -148 183 -434 272
-635 l161 -365 319 -452 318 -452 134 -106 c124 -97 136 -110 175 -182 23 -43
130 -231 237 -419 l195 -341 577 -685 c317 -376 1072 -1268 1679 -1981 l1104
-1297 694 -675 c382 -371 709 -685 727 -698 18 -13 241 -131 497 -261 l465
-238 270 -201 c148 -111 471 -356 718 -544 l449 -343 250 -315 250 -315 606
-468 c334 -257 625 -481 646 -498 39 -29 41 -29 171 -29 l131 0 98 59 98 58
157 -6 c86 -3 419 -2 741 2 l585 7 207 97 c255 119 282 125 793 168 198 17
374 35 392 39 17 5 321 156 675 336 533 271 719 360 1088 520 245 106 657 287
915 402 l470 209 335 77 c394 90 468 99 1224 147 712 45 771 43 1689 -35 645
-56 907 -84 1705 -181 l942 -115 1300 21 1300 20 273 -84 c149 -47 553 -168
896 -271 343 -102 631 -190 641 -195 24 -13 112 -32 470 -100 173 -33 425 -85
560 -115 135 -30 319 -68 410 -86 100 -18 372 -89 690 -179 289 -81 537 -150
551 -154 52 -12 1475 -55 2029 -61 l575 -7 902 -204 902 -204 476 45 476 45
1293 274 1293 275 1609 146 1609 145 785 170 c432 94 1573 328 2537 521 l1752
349 443 153 444 153 474 319 c430 289 516 352 909 662 l433 343 489 641 c455
598 507 670 774 1079 l286 439 198 193 198 193 128 21 128 21 331 -120 c382
-138 628 -249 1689 -763 l656 -317 158 -142 158 -143 52 -118 c31 -71 83 -224
128 -379 41 -143 81 -276 88 -295 42 -110 484 -653 825 -1013 l207 -218 181
-295 180 -295 13 -247 12 -247 44 -130 c25 -75 117 -286 218 -502 l174 -372
198 -246 c109 -135 210 -254 224 -264 14 -10 179 -83 366 -163 332 -141 344
-147 492 -250 135 -94 193 -144 508 -445 195 -187 365 -345 377 -351 13 -6
257 -61 543 -122 l520 -111 622 -79 621 -80 594 55 593 56 333 84 332 84 243
-48 c133 -27 402 -74 598 -105 l356 -56 537 40 c296 22 556 37 577 34 50 -8
68 -32 142 -179 l55 -111 21 -199 c12 -110 34 -351 50 -535 l28 -335 118 -294
c110 -275 123 -300 180 -370 566 -698 639 -785 1039 -1218 l418 -452 881 -624
c837 -592 904 -637 1307 -881 234 -142 436 -270 450 -285 14 -14 103 -134 198
-267 135 -189 293 -385 730 -905 l557 -664 214 -111 c137 -70 235 -115 270
-122 31 -6 369 -70 751 -142 l695 -130 1100 -65 1100 -65 261 -47 c259 -46
261 -47 281 -77 11 -17 156 -251 323 -521 l303 -489 337 -436 c185 -239 468
-614 629 -833 l293 -397 294 -204 293 -203 274 -269 274 -269 207 -560 c114
-307 213 -569 219 -581 11 -20 519 -718 728 -1000 67 -91 194 -307 510 -864
472 -836 461 -819 815 -1225 l197 -227 -35 -193 -35 -192 -304 -517 -304 -517
-318 -382 -318 -382 -188 -302 -187 -302 -504 -513 c-459 -468 -722 -746 -792
-838 -33 -44 -33 -44 -62 -510 -23 -364 -24 -386 -11 -750 8 -206 16 -404 19
-440 3 -43 33 -156 91 -340 86 -275 86 -275 81 -357 -4 -46 -43 -250 -90 -461
l-84 -379 28 -394 c16 -217 31 -414 34 -439 3 -25 79 -274 169 -555 90 -280
174 -544 186 -585 11 -41 41 -230 66 -420 39 -298 48 -400 65 -755 26 -532 73
-970 191 -1775 78 -533 97 -693 144 -1197 30 -320 61 -682 70 -805 14 -191 22
-248 57 -398 22 -96 47 -187 54 -202 20 -40 70 -73 149 -98 192 -63 279 -106
431 -211 l151 -104 90 -140 c50 -77 199 -309 332 -515 133 -206 327 -496 430
-645 235 -337 498 -778 675 -1133 131 -263 134 -271 216 -542 45 -151 86 -283
91 -292 5 -9 150 -219 322 -465 307 -438 317 -455 485 -768 l171 -320 62 -210
61 -210 14 -305 c7 -168 15 -330 18 -360 3 -35 88 -309 231 -743 l226 -689
-46 -441 -46 -442 -161 -378 -161 -378 -126 -182 c-70 -100 -188 -266 -263
-368 -159 -215 -141 -156 -163 -534 l-14 -240 81 -235 c44 -129 194 -570 332
-980 l251 -745 136 -176 c75 -96 147 -182 160 -190 13 -9 110 -42 214 -73 105
-32 200 -64 211 -71 12 -8 116 -98 230 -201 206 -183 211 -190 355 -385 l146
-198 118 -328 c65 -180 126 -347 135 -369 10 -23 82 -129 161 -235 80 -107
161 -217 181 -245 32 -44 49 -92 122 -345 47 -162 150 -557 231 -879 80 -322
151 -598 159 -615 8 -16 113 -142 235 -280 267 -303 373 -458 458 -673 29 -73
53 -139 53 -148 0 -8 -47 -169 -105 -357 -58 -188 -155 -529 -215 -757 l-109
-415 -20 -324 -20 -323 25 -87 c82 -281 149 -493 250 -781 l113 -325 165 -705
c137 -587 189 -788 309 -1201 l145 -496 122 -732 122 -733 181 -265 c100 -145
195 -274 211 -286 28 -20 49 -22 256 -30 124 -4 362 -6 530 -2 168 3 480 1
693 -5 l389 -11 197 -105 c143 -76 216 -122 262 -163 35 -32 147 -123 249
-202 102 -80 212 -166 245 -193 40 -32 150 -91 335 -180 253 -122 288 -142
442 -254 184 -134 651 -492 685 -526 12 -11 69 -107 126 -213 l105 -192 77
-373 78 -373 128 -269 c138 -288 135 -284 277 -453 l93 -112 237 -144 c130
-79 365 -211 520 -292 283 -147 284 -148 460 -292 164 -134 205 -176 550 -551
353 -385 389 -428 680 -812 170 -223 387 -522 483 -665 l175 -260 122 -300
c130 -321 134 -336 236 -810 45 -208 47 -214 175 -518 108 -256 151 -344 256
-527 69 -120 139 -236 154 -257 15 -21 214 -243 442 -493 228 -250 507 -563
620 -695 l206 -240 17 -290 c9 -159 19 -309 22 -332 5 -34 49 -107 220 -360
l213 -318 265 -245 c222 -205 420 -409 1224 -1260 l960 -1015 324 -249 323
-248 290 -94 c160 -52 308 -98 330 -104 22 -5 151 -21 286 -35 l246 -25 239
44 c214 40 279 58 614 165 206 66 538 163 737 215 l361 96 324 26 c285 22 356
25 598 19 363 -9 1050 16 1535 56 204 16 807 79 1341 139 l972 110 623 0 624
-1 310 -33 310 -34 275 -132 c151 -73 292 -136 313 -141 34 -8 359 18 452 37
17 3 109 47 205 97 204 107 151 58 672 622 l323 349 425 258 425 257 250 1
c301 0 554 -22 930 -81 l259 -41 341 -211 340 -212 273 -265 c230 -223 287
-285 363 -389 88 -122 90 -126 142 -291 l54 -167 399 -584 c256 -373 462 -688
573 -872 95 -159 185 -297 200 -308 14 -10 184 -117 378 -236 l351 -218 354
-364 c330 -341 364 -379 530 -600 l177 -236 30 -120 c16 -66 66 -282 110 -480
83 -374 242 -935 279 -985 10 -14 130 -95 267 -181 l248 -156 137 -266 137
-266 17 -268 c10 -147 23 -349 31 -449 l13 -180 381 -885 382 -884 196 -328
c170 -284 218 -355 353 -524 l155 -197 458 -342 459 -342 247 -319 247 -318
146 -282 145 -283 52 -592 52 -593 71 -298 c41 -171 67 -302 62 -306 -5 -5
-101 -34 -214 -66 -113 -31 -554 -156 -980 -276 -724 -206 -813 -233 -1350
-421 -322 -113 -589 -212 -607 -225 -80 -59 -637 -553 -811 -720 -171 -165
-217 -216 -410 -462 -120 -152 -231 -296 -248 -321 -17 -25 -131 -217 -253
-428 -122 -211 -312 -533 -422 -715 l-199 -332 -589 -680 c-324 -374 -600
-689 -612 -701 -29 -26 -786 -415 -924 -476 -100 -43 -100 -43 -289 -228 -178
-174 -581 -621 -631 -699 -12 -20 -46 -114 -75 -209 l-53 -174 -142 -229 -142
-229 -430 -410 -431 -411 -463 -334 c-264 -191 -476 -350 -491 -371 -32 -42
-34 -61 -48 -354 -18 -385 -20 -361 40 -578 l52 -192 -46 -331 -45 -331 -339
-547 c-186 -300 -422 -693 -523 -872 l-184 -326 -245 -108 c-263 -116 -303
-140 -326 -188 -7 -18 -43 -151 -79 -297 l-66 -265 -256 -604 -256 -605 -165
-275 c-90 -152 -202 -345 -249 -430 -69 -124 -117 -194 -247 -356 -152 -191
-170 -219 -325 -494 l-163 -291 -140 -510 -140 -510 -256 -463 c-196 -354
-297 -524 -432 -727 l-176 -265 -37 -205 c-21 -113 -47 -256 -59 -318 l-20
-113 -232 -206 -231 -205 -181 -68 c-99 -37 -390 -143 -645 -235 l-464 -168
-127 -95 c-146 -107 -103 -50 -448 -607 l-174 -280 -215 -222 c-121 -124 -370
-361 -565 -537 l-349 -315 -251 -60 -251 -61 -395 0 -395 0 -485 -122 -485
-122 -390 -272 c-320 -222 -488 -330 -935 -600 l-545 -328 -260 -63 c-219 -53
-585 -124 -1810 -350 -40 -7 -673 -401 -697 -433 -11 -15 -70 -218 -138 -470
-66 -245 -124 -454 -129 -465 -5 -11 -105 -121 -221 -245 -117 -124 -223 -241
-235 -260 -13 -20 -42 -113 -68 -220 -45 -182 -46 -191 -67 -510 -31 -479 -34
-431 48 -662 l70 -198 127 -180 127 -180 -4 -128 -4 -127 -129 -206 -130 -205
-190 -134 c-160 -113 -235 -158 -480 -284 -159 -82 -474 -239 -700 -347 l-410
-198 -270 -210 c-250 -194 -295 -235 -617 -551 l-348 -341 -212 -356 -213
-356 -205 -136 -205 -135 -180 -38 -180 -39 -255 51 c-140 28 -264 55 -275 59
-11 5 -121 82 -244 171 l-224 161 -66 6 c-36 2 -132 0 -212 -5 l-145 -10 -220
-143 c-300 -195 -952 -668 -1669 -1212 l-600 -456 -670 -352 c-368 -193 -682
-360 -696 -370 -36 -25 -604 -699 -793 -942 l-154 -197 -296 -258 -296 -257
-444 -203 -444 -203 -233 -14 c-129 -8 -250 -17 -269 -21 -49 -8 -82 -35 -275
-224 -154 -151 -186 -177 -335 -273 -104 -67 -201 -139 -261 -194 -126 -115
-207 -185 -243 -208 -23 -15 -57 -20 -175 -26 -132 -6 -152 -9 -216 -37 -55
-24 -91 -32 -165 -37 -144 -10 -196 5 -490 143 l-255 119 -210 47 -210 46
-270 -66 c-148 -36 -324 -84 -390 -107 -115 -40 -125 -42 -230 -40 -68 1 -163
11 -252 28 -84 15 -153 23 -170 19 -46 -11 -79 -41 -142 -127 -33 -45 -79
-101 -103 -123 l-43 -42 -98 -6 c-97 -5 -100 -5 -285 49 -226 66 -469 117
-515 108 -17 -4 -58 -22 -90 -40 -110 -65 -156 -75 -297 -68 -140 7 -183 20
-450 138 -128 56 -144 60 -301 83 l-167 24 -113 -24 c-63 -14 -177 -34 -254
-46 -117 -17 -325 -62 -345 -75 -14 -9 -467 -86 -550 -93 l-95 -9 -85 53 -85
54 -292 50 c-161 27 -413 79 -560 114 l-268 65 -277 11 c-152 6 -289 8 -305 4
-15 -3 -91 -24 -168 -47 -133 -38 -145 -44 -231 -109 -117 -88 -124 -96 -149
-176 -22 -67 -22 -67 -91 -102 -64 -33 -79 -48 -212 -209 -78 -95 -155 -183
-170 -194 -15 -12 -53 -43 -84 -70 l-58 -49 -107 50 c-66 30 -147 59 -208 72
-55 13 -118 32 -140 44 -38 20 -42 28 -92 159 -77 205 -82 212 -210 284 -63
36 -168 83 -253 113 -138 50 -151 53 -287 61 l-142 9 -113 60 c-86 46 -137 83
-214 153 -184 167 -340 228 -498 193 -71 -16 -75 -16 -190 9 l-119 26 -246
179 c-273 199 -219 172 -633 320 l-147 52 -418 323 -418 324 -217 101 c-119
56 -232 105 -250 111 -27 8 -82 -2 -328 -57 -316 -72 -347 -84 -376 -147 -8
-18 -52 -176 -100 -352 -72 -271 -103 -367 -204 -630 -65 -170 -161 -405 -212
-520 -90 -203 -100 -220 -288 -495 -127 -187 -265 -373 -400 -540 -403 -498
-909 -1173 -1203 -1604 l-280 -411 -389 -710 c-215 -390 -401 -731 -414 -757
-13 -25 -82 -199 -153 -385 -71 -186 -136 -355 -145 -376 -8 -21 -136 -215
-283 -430 -228 -334 -319 -458 -624 -840 l-357 -448 -148 -101 c-103 -70 -196
-124 -303 -174 -86 -40 -169 -84 -187 -97 -19 -16 -42 -52 -60 -94 -16 -37
-77 -165 -135 -283 -72 -146 -126 -272 -168 -393 -70 -205 -106 -260 -218
-335 -83 -56 -153 -69 -422 -82 -272 -13 -308 -20 -369 -75 -27 -24 -67 -68
-90 -98 -35 -45 -43 -64 -48 -113 l-6 -59 -112 -75 c-111 -75 -111 -75 -154
-160 -66 -133 -72 -161 -72 -354 -1 -94 -5 -229 -10 -300 -7 -105 -5 -162 10
-300 11 -94 22 -182 26 -195 6 -19 4 -22 -8 -15 -38 22 -294 237 -683 575
-231 200 -501 430 -601 511 l-180 147 -234 308 c-233 308 -234 308 -282 432
-73 190 -85 328 -93 1090 l-6 594 -55 170 c-61 190 -79 226 -126 250 -18 10
-171 47 -340 83 l-308 65 -187 -11 c-104 -6 -204 -13 -223 -17 -19 -3 -107
-44 -196 -90 l-161 -83 -131 0 c-72 0 -225 -9 -339 -20 -115 -10 -316 -24
-449 -30 l-240 -11 -213 50 c-170 41 -219 49 -249 42 -30 -6 -214 -79 -547
-216 -26 -10 -75 -53 -140 -121 l-101 -105 -172 25 c-163 25 -191 26 -598 26
l-428 0 -120 32 c-116 31 -127 36 -281 136 -88 58 -233 161 -323 228 -89 68
-172 128 -183 135 -12 6 -121 93 -244 193 -191 157 -254 202 -450 321 -125 75
-243 142 -262 147 -21 6 -88 5 -179 -1 l-145 -10 -207 73 c-114 40 -268 87
-342 105 l-135 32 -185 216 c-102 119 -276 318 -388 442 -171 190 -248 287
-484 611 -154 212 -289 392 -300 401 -11 8 -105 62 -210 120 l-190 104 -233
240 c-128 132 -249 259 -269 283 -19 24 -78 74 -130 112 -71 53 -105 86 -139
137 -42 62 -46 75 -52 148 -6 70 -62 297 -100 406 -8 20 -135 215 -284 432
l-271 395 -93 59 c-50 32 -171 109 -267 171 -104 67 -262 156 -389 220 -239
119 -244 120 -401 93 -74 -13 -76 -15 -142 -82 -49 -51 -80 -96 -121 -176 -49
-96 -67 -119 -154 -203 -54 -53 -153 -145 -221 -204 -132 -116 -145 -135 -186
-264 -33 -105 -34 -200 -5 -448 l22 -182 -21 -118 c-12 -66 -29 -184 -38 -263
-16 -138 -19 -150 -84 -304 l-66 -160 -50 -17 c-27 -10 -132 -27 -234 -39
l-186 -21 -139 20 c-76 11 -152 18 -170 14 -36 -7 -74 -35 -233 -177 l-117
-104 -153 -261 -153 -260 -87 -53 c-48 -29 -150 -96 -226 -148 -139 -95 -139
-95 -315 -148 l-176 -54 -115 11 c-63 5 -126 7 -140 3 -75 -18 -125 -98 -246
-392 l-59 -144 -208 -179 c-170 -146 -216 -182 -255 -192 -185 -51 -168 -42
-289 -160 -100 -97 -118 -120 -164 -209 l-51 -99 -123 -59 c-74 -36 -136 -59
-156 -59 -91 0 -172 -24 -369 -107 -273 -115 -341 -162 -419 -286 -69 -111
-290 -358 -532 -595 l-177 -173 -62 -137 c-34 -75 -105 -243 -158 -372 l-96
-235 -6 -180 c-5 -147 -10 -185 -24 -207 -9 -14 -31 -75 -47 -135 -19 -68 -45
-132 -70 -173 -21 -36 -46 -88 -55 -115 -19 -57 -60 -104 -309 -365 -92 -96
-173 -188 -181 -203 -8 -15 -37 -90 -64 -165 -26 -75 -51 -145 -55 -154 -4 -9
-39 -29 -78 -44 -40 -15 -84 -35 -98 -45 -46 -32 -229 -304 -451 -669 -118
-195 -224 -373 -235 -395 -11 -22 -71 -157 -133 -300 l-113 -260 -23 -245 -22
-245 24 -167 c21 -155 28 -179 89 -335 l65 -169 0 -154 c0 -146 -2 -164 -40
-319 -22 -90 -40 -171 -40 -181 0 -10 -12 -46 -26 -79 l-26 -60 -77 -29 c-42
-16 -98 -35 -126 -42 -62 -16 -112 -52 -131 -93 -7 -18 -50 -171 -95 -342
l-80 -310 -64 -105 c-35 -58 -88 -158 -119 -222 -69 -149 -237 -408 -405 -626
-72 -94 -135 -181 -141 -194 -5 -12 -21 -66 -35 -118 -41 -150 -170 -492 -241
-642 -65 -136 -66 -137 -78 -265 l-12 -128 -71 -115 c-39 -63 -109 -191 -156
-285 -84 -166 -89 -173 -207 -300 -109 -117 -136 -154 -263 -360 -208 -339
-352 -534 -476 -645 -79 -72 -110 -108 -148 -173 -45 -77 -56 -88 -181 -182
-185 -139 -178 -124 -174 -319 2 -127 0 -157 -10 -153 -7 3 -67 30 -134 60
-95 44 -544 197 -577 197 -4 0 -40 24 -80 53 -39 30 -82 59 -94 65 -12 7 -65
52 -117 101 -118 110 -193 143 -321 146 -92 2 -272 54 -390 113 -107 53 -697
495 -1005 752 -94 78 -373 288 -416 313 -6 4 -44 11 -85 18 -68 10 -78 14
-115 53 -25 26 -120 89 -241 159 -194 113 -203 118 -289 131 -82 13 -103 21
-259 106 -93 51 -262 138 -375 195 l-205 103 -105 124 c-58 67 -121 150 -139
183 -71 127 -92 153 -134 174 -23 11 -280 105 -572 209 -326 117 -582 215
-665 255 -123 58 -152 68 -330 106 -113 24 -252 62 -330 90 -230 82 -231 82
-349 -36 -46 -46 -102 -95 -125 -108 -62 -36 -257 -108 -391 -145 -119 -32
-122 -34 -270 -140 -82 -59 -193 -136 -245 -173 -52 -36 -120 -91 -150 -121
-30 -31 -63 -56 -73 -56 -10 0 -93 40 -185 89 -183 98 -309 142 -536 187 -143
28 -248 30 -371 8 -73 -14 -110 -28 -205 -79 -115 -62 -115 -63 -250 -79 -133
-16 -139 -16 -380 9 -135 14 -258 23 -275 20 -52 -10 -158 -57 -206 -92 -42
-30 -51 -32 -95 -26 -29 3 -65 17 -89 34 -74 51 -798 363 -975 419 -156 50
-172 53 -290 56 -306 9 -582 27 -691 45 l-118 19 -148 -31 c-81 -17 -170 -39
-198 -49 -27 -10 -113 -35 -190 -55 -103 -28 -166 -52 -241 -91 -56 -30 -106
-54 -112 -54 -6 0 -129 86 -273 191 -258 189 -263 192 -463 283 l-201 92 -7
49 c-4 28 -11 87 -17 132 -24 194 -172 620 -410 1180 -161 380 -194 465 -206
540 -17 100 -62 200 -197 442 -45 80 -134 252 -199 381 -67 136 -168 317 -238
430 -120 191 -126 199 -296 370 -160 161 -177 181 -210 255 -20 44 -52 139
-71 210 -20 72 -43 142 -52 157 -10 15 -74 69 -142 121 -101 76 -148 120 -243
230 -146 170 -145 169 -242 222 l-80 43 -75 139 c-41 76 -87 165 -101 198 -35
82 -49 103 -84 124 -16 10 -120 47 -230 81 -216 68 -229 75 -386 202 -85 69
-109 83 -215 122 -65 24 -182 72 -259 107 -115 52 -153 74 -212 127 -132 117
-203 212 -293 393 -114 230 -359 666 -393 700 -42 42 -94 52 -227 45 l-115 -7
-135 44 c-108 36 -163 48 -275 61 l-140 15 -136 76 -137 75 -154 23 -154 22
-146 98 c-121 80 -156 99 -195 104 -37 4 -115 -8 -318 -50 -149 -31 -341 -68
-428 -82 -87 -14 -168 -31 -180 -36 -12 -5 -224 -56 -472 -113 l-450 -103
-175 -91 c-148 -76 -222 -106 -475 -193 l-300 -103 -185 -128 c-102 -70 -288
-187 -415 -260 -465 -266 -643 -385 -963 -643 l-292 -237 -93 -136 c-71 -105
-101 -161 -133 -245 -47 -125 -53 -130 -166 -139 -105 -9 -187 -44 -286 -122
-195 -153 -529 -404 -561 -420 -51 -27 -148 -38 -180 -22 -14 8 -62 24 -106
36 -65 18 -90 32 -143 77 -36 30 -74 60 -86 67 -29 19 -294 74 -388 82 -112
10 -168 46 -498 318 -189 156 -297 240 -320 246 -19 5 -155 20 -301 34 -212
20 -287 31 -374 55 -96 28 -124 31 -242 31 -128 0 -136 1 -193 30 l-59 30 -51
156 c-28 86 -85 247 -126 358 -68 181 -78 220 -109 395 -30 175 -36 198 -66
240 l-32 46 17 215 17 215 -36 165 c-21 91 -44 177 -53 193 -9 15 -33 39 -54
53 -21 15 -49 47 -64 72 -15 25 -58 79 -96 120 -89 96 -100 113 -109 175 -6
37 -22 71 -58 122 -69 99 -72 125 -61 452 5 147 10 600 10 1006 l0 738 36 142
c19 78 63 232 97 342 60 196 61 203 65 335 3 127 2 138 -20 180 -22 40 -39 52
-164 122 -76 43 -155 82 -174 88 -58 15 -438 40 -625 40 l-176 0 -77 52 c-42
28 -128 95 -189 147 -99 84 -115 102 -130 146 -43 131 -103 257 -162 340 -61
85 -64 93 -73 169 -11 98 -38 158 -83 186 -18 11 -196 75 -396 141 l-362 120
-433 75 -432 75 -303 148 c-167 82 -374 189 -461 239 -151 87 -164 97 -385
301 l-228 210 -102 204 c-97 195 -104 206 -150 234 -26 17 -136 82 -243 146
l-195 116 -328 75 c-286 67 -333 75 -370 66 -45 -10 -202 -70 -567 -215 l-225
-90 -160 -163 -160 -163 -117 -29 -117 -30 -113 25 c-62 13 -254 63 -427 110
-242 65 -323 84 -350 79 -20 -4 -99 -44 -176 -89 -134 -79 -146 -84 -277 -115
-121 -28 -143 -30 -195 -21 -32 6 -176 26 -321 46 -192 25 -273 32 -300 26
-20 -5 -81 -30 -136 -56 -54 -25 -151 -67 -215 -92 -109 -43 -131 -48 -360
-78 l-243 -33 -162 68 c-88 37 -276 124 -416 193 -140 68 -268 127 -285 131
-16 3 -166 13 -333 21 -299 15 -306 15 -698 -10 l-395 -25 -235 55 c-189 44
-243 53 -272 46 -20 -4 -219 -78 -442 -164 l-405 -156 -215 -31 c-200 -29
-715 -116 -840 -142 -40 -8 -93 -35 -190 -96 -121 -77 -153 -91 -330 -152
-128 -44 -256 -80 -375 -105 -136 -29 -188 -44 -213 -63 -63 -46 -225 -207
-330 -327 -158 -181 -150 -175 -230 -175 -37 0 -107 -5 -156 -10 -84 -9 -92
-12 -146 -53 -52 -41 -68 -47 -186 -72 -112 -24 -141 -35 -219 -81 -199 -116
-450 -333 -1113 -958 -700 -661 -632 -584 -697 -788 l-29 -86 -365 -403 -366
-403 -290 -161 -290 -160 -170 -213 c-126 -157 -218 -286 -355 -500 l-185
-288 -122 -104 c-186 -159 -136 -146 -613 -154 l-406 -7 -329 42 -329 41 -63
55 c-35 31 -63 57 -63 58 0 2 -9 47 -20 101 -17 83 -20 119 -14 220 8 143 2
183 -33 224 -40 48 -501 391 -540 402 -24 7 -84 3 -209 -12 -169 -20 -179 -20
-306 -4 l-132 17 -136 82 c-262 157 -272 162 -416 186 l-129 21 -150 -50 c-82
-27 -193 -60 -245 -73 -145 -36 -155 -49 -248 -319 l-74 -215 -121 -185 -120
-185 -191 -162 c-264 -224 -378 -308 -605 -441 l-196 -115 -275 -72 c-314 -82
-722 -209 -762 -237 -15 -10 -78 -92 -139 -181 -192 -277 -302 -429 -313 -432
-6 -2 -135 -13 -286 -24 l-274 -20 -271 93 c-241 84 -293 105 -485 207 -200
105 -242 132 -595 388 -209 151 -477 352 -595 446 -367 293 -518 406 -552 415
-18 5 -162 21 -321 35 -311 28 -343 26 -389 -19 -35 -36 -35 -36 -189 -456
-77 -211 -223 -582 -324 -825 l-184 -440 -100 -510 c-54 -280 -102 -539 -106
-575 -3 -36 -17 -155 -30 -265 -15 -121 -28 -309 -34 -476 l-10 -276 -106
-269 c-92 -234 -141 -337 -382 -806 -330 -644 -309 -615 -493 -663 -110 -29
-117 -32 -175 -86 -38 -36 -73 -59 -95 -64 -51 -11 -82 -32 -109 -73 -21 -32
-25 -53 -32 -181 -4 -81 -15 -202 -24 -271 -34 -281 -55 -531 -55 -664 0 -122
4 -150 24 -206 13 -36 35 -99 50 -140 19 -52 35 -134 52 -270 14 -107 29 -212
35 -232 10 -39 112 -228 146 -271 18 -24 19 -30 6 -148 -11 -105 -10 -141 2
-240 15 -115 15 -115 -9 -187 -14 -39 -34 -119 -46 -176 -19 -93 -20 -116 -10
-207 l10 -103 57 -74 c32 -42 123 -135 204 -209 l146 -133 12 -165 11 -166
-174 -527 c-96 -290 -214 -655 -261 -812 l-87 -285 -205 -425 c-113 -234 -282
-577 -376 -763 -154 -304 -171 -343 -170 -387 0 -26 7 -58 16 -70 8 -12 114
-124 235 -249 l220 -227 -9 -124 c-10 -143 -22 -80 132 -659 87 -326 102 -392
114 -520 20 -196 24 -222 46 -253 27 -37 137 -114 178 -123 23 -5 57 -31 110
-84 42 -42 97 -91 122 -108 40 -28 47 -38 58 -88 14 -60 54 -121 111 -166 39
-30 171 -64 317 -80 45 -5 101 -13 126 -19 57 -12 197 -88 197 -106 0 -12 11
-41 44 -114 6 -13 39 -54 72 -90 68 -72 85 -116 61 -154 -28 -42 -48 -128 -41
-176 9 -61 100 -154 159 -164 52 -8 150 16 180 44 l24 22 7 -38 c5 -28 22 -54
64 -95 72 -73 129 -89 244 -69 l76 13 43 -40 c91 -84 196 -121 314 -111 67 6
89 -2 179 -70 l61 -46 -76 -49 c-42 -27 -94 -67 -117 -89 -36 -34 -50 -40
-110 -49 -69 -10 -138 -25 -267 -60 -144 -39 -298 -142 -353 -235 -73 -125
-66 -191 46 -411 44 -86 92 -170 107 -186 43 -44 103 -82 154 -96 41 -12 52
-21 94 -81 58 -85 166 -189 227 -218 96 -45 279 -101 414 -127 76 -14 147 -29
157 -32 15 -4 8 -15 -42 -63 -63 -60 -68 -72 -62 -149 1 -19 10 -46 20 -60 10
-14 23 -50 29 -80 14 -61 76 -152 135 -196 41 -32 43 -37 76 -214 25 -130 31
-140 142 -258 43 -45 81 -93 84 -106 8 -29 -27 -103 -90 -192 -23 -33 -45 -70
-49 -83 -11 -33 -42 -59 -121 -100 -46 -24 -97 -63 -148 -113 -42 -42 -89 -80
-104 -84 -43 -10 -110 -62 -143 -110 -30 -44 -56 -130 -80 -275 -6 -36 -25
-103 -41 -150 -15 -47 -44 -161 -63 -255 -35 -174 -77 -298 -126 -370 -14 -22
-39 -76 -54 -120 -15 -44 -44 -116 -63 -160 -19 -44 -43 -105 -53 -135 -28
-84 -62 -161 -89 -199 -38 -53 -34 -123 12 -190 57 -86 184 -209 226 -221 75
-21 132 -8 196 45 61 49 74 46 112 -28 43 -81 104 -144 157 -159 57 -16 169
-16 243 1 l61 15 52 -47 c29 -26 57 -47 63 -47 15 0 114 -76 182 -141 82 -77
146 -114 235 -133 159 -36 146 -27 153 -100 3 -35 15 -99 25 -142 11 -44 25
-111 32 -151 14 -87 51 -149 112 -191 52 -36 119 -56 158 -47 l28 6 6 -168 c4
-111 13 -196 26 -252 l19 -84 -54 -53 c-39 -37 -55 -60 -55 -78 0 -16 -7 -29
-17 -33 -34 -12 -130 -82 -156 -113 -14 -16 -36 -34 -49 -39 -26 -10 -81 9
-140 47 -24 15 -57 26 -96 29 -96 9 -145 -3 -220 -54 -95 -64 -116 -71 -249
-83 -350 -33 -492 -114 -543 -315 -16 -63 -17 -83 -8 -127 6 -29 8 -73 4 -98
-6 -40 -12 -49 -58 -80 -28 -19 -67 -56 -87 -81 -93 -119 -167 -207 -182 -217
-13 -9 -21 8 -52 117 -20 69 -41 151 -47 181 -22 110 -62 220 -92 250 -70 70
-195 58 -244 -24 -10 -17 -33 -68 -50 -113 -41 -108 -88 -169 -260 -338 -116
-115 -152 -156 -193 -228 -28 -49 -51 -95 -51 -102 0 -7 -21 -80 -46 -161 -57
-183 -95 -242 -211 -324 -55 -38 -116 -131 -131 -198 -35 -157 9 -355 115
-510 37 -55 43 -70 43 -116 0 -42 -7 -63 -36 -112 -113 -184 -166 -296 -189
-399 -13 -59 -14 -85 -4 -165 17 -139 5 -267 -42 -453 -21 -86 -42 -190 -45
-230 -9 -98 11 -239 39 -282 41 -62 113 -87 185 -62 28 10 64 13 106 10 111
-9 145 1 243 74 139 104 150 116 220 262 l65 134 25 -44 c14 -24 35 -67 48
-95 12 -27 36 -66 52 -85 66 -74 80 -120 87 -282 8 -187 31 -265 111 -375 30
-41 55 -83 55 -93 0 -18 34 -57 206 -239 120 -127 150 -173 164 -247 18 -103
40 -163 100 -283 l58 -116 -45 -59 c-55 -74 -79 -118 -94 -179 -11 -46 -12
-46 -78 -66 -114 -34 -226 -104 -326 -206 -106 -106 -166 -206 -216 -359 -31
-95 -33 -107 -33 -255 0 -148 2 -160 33 -255 50 -153 110 -253 216 -359 107
-108 209 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245 28 231 73 412
214 510 398 l32 60 26 -34 c42 -54 88 -163 94 -220 3 -36 -2 -81 -16 -140 -23
-96 -20 -136 13 -183 28 -42 45 -53 94 -66 55 -15 91 -57 195 -229 44 -74 133
-220 197 -325 64 -104 138 -230 165 -280 27 -49 81 -146 121 -215 115 -201
184 -338 184 -369 0 -33 -457 -725 -655 -990 l-124 -167 -148 -73 c-81 -40
-166 -80 -188 -89 -22 -8 -79 -42 -127 -73 -73 -50 -110 -86 -245 -241 -87
-101 -199 -227 -250 -281 -145 -153 -177 -204 -197 -312 -24 -135 -35 -327
-29 -550 4 -162 2 -213 -11 -268 -15 -62 -121 -329 -169 -422 -26 -52 -125
-183 -196 -261 -169 -183 -221 -293 -278 -588 -50 -258 -50 -324 -1 -471 34
-98 39 -130 53 -295 10 -121 25 -228 44 -310 16 -69 28 -125 27 -126 -1 -1
-148 -25 -1031 -169 -187 -31 -400 -65 -474 -76 -142 -21 -171 -33 -212 -90
-16 -22 -22 -46 -22 -83 0 -47 8 -64 102 -220 55 -92 101 -172 101 -176 0 -8
-252 -84 -314 -95 -21 -3 -46 -10 -55 -15 -62 -32 -289 -79 -700 -145 -536
-87 -457 -56 -675 -259 -180 -168 -331 -277 -445 -322 l-86 -34 -177 15 -178
15 -297 -45 c-164 -25 -489 -82 -723 -126 l-425 -80 -340 11 c-187 6 -415 15
-507 21 -153 9 -319 2 -423 -17 -16 -3 -108 -40 -203 -82 -136 -61 -190 -91
-254 -141 -85 -66 -109 -77 -518 -226 -91 -34 -201 -98 -815 -472 -685 -419
-713 -437 -800 -523 l-90 -88 -170 180 c-93 100 -414 460 -711 801 l-542 621
-92 295 c-50 163 -112 361 -137 440 l-45 144 -143 146 -143 146 -156 298 c-86
165 -247 452 -358 640 l-202 341 -375 405 c-302 328 -405 447 -537 621 -89
118 -187 240 -218 270 l-56 54 0 371 c-1 351 -2 381 -30 590 l-29 220 35 194
c28 152 34 202 26 231 -5 20 -73 151 -151 291 l-143 254 -210 540 c-236 605
-226 572 -424 1390 l-116 480 -237 360 -237 360 -128 405 c-70 223 -137 424
-148 447 -33 71 -56 79 -345 123 -251 38 -267 41 -618 148 l-360 109 -340 193
c-187 106 -344 196 -350 200 -5 4 -449 243 -985 531 l-975 523 -545 174 -545
174 -230 10 -230 10 -445 -46 c-402 -42 -493 -55 -945 -136 -479 -86 -527 -96
-1130 -251 l-630 -162 -258 -164 c-142 -89 -269 -166 -282 -169 -40 -10 -108
57 -310 303 -178 216 -193 231 -437 444 l-253 221 -319 160 c-420 210 -505
270 -772 540 -105 106 -231 238 -280 293 -49 55 -148 157 -221 227 -102 98
-143 130 -173 138 -35 9 -82 4 -326 -40 -202 -35 -294 -56 -313 -69 -43 -31
-178 -176 -300 -323 -63 -76 -114 -138 -115 -138 -3 0 -497 -134 -631 -171
l-159 -44 -63 -59 c-63 -58 -65 -59 -206 -98 l-142 -40 -145 7 -145 6 -353
206 -352 205 -197 207 c-109 113 -206 213 -218 222 -41 32 -251 147 -280 153
-16 3 -172 15 -345 26 -206 13 -335 26 -375 37 -48 13 -88 38 -199 121 -141
107 -185 128 -237 117 -16 -4 -131 -54 -257 -112 l-227 -105 -410 -35 -410
-35 -275 -86 c-363 -113 -382 -115 -857 -78 l-340 26 -234 -34 -234 -35 -165
-72 c-91 -39 -181 -83 -200 -97 -19 -15 -116 -98 -214 -187 -160 -143 -192
-177 -299 -320 -180 -240 -416 -522 -660 -790 l-218 -239 -93 -186 c-74 -146
-99 -209 -122 -299 l-29 -114 -169 -153 c-93 -85 -176 -154 -183 -154 -8 0
-289 77 -626 170 -581 162 -878 257 -1167 373 -47 19 -487 252 -978 518 l-892
484 -521 420 -520 420 -746 1484 -745 1485 -321 430 c-176 237 -335 450 -354
474 -31 37 -1173 1016 -1248 1069 -88 62 -322 154 -660 261 -192 61 -360 113
-372 117 -12 3 -263 -30 -557 -75 -491 -74 -637 -101 -1794 -335 l-1260 -254
-989 -271 -988 -271 -500 -74 -499 -75 -396 31 c-239 18 -405 35 -421 43 -14
7 -95 67 -180 133 l-154 120 -779 1214 c-429 668 -790 1229 -804 1247 -54 74
-744 649 -1325 1106 l-606 476 -418 443 -418 443 -281 400 -281 399 -451 1136
-451 1137 -176 913 -176 914 -237 363 c-230 353 -240 367 -352 476 -279 272
-366 348 -710 623 l-366 292 -132 244 c-73 134 -132 249 -132 254 0 6 10 33
21 62 20 47 122 142 1354 1259 l1331 1207 652 528 c359 291 668 547 687 570
19 23 186 238 372 477 l338 434 705 486 705 487 615 206 615 207 410 80 410
80 1010 60 1010 59 1245 21 c996 16 1486 29 2450 65 1286 48 3380 149 3442
165 49 14 95 61 108 113 6 23 86 213 177 422 l167 380 167 550 167 550 264
570 265 570 67 323 c76 368 76 369 4 438 -44 42 -599 493 -653 531 -53 37
-471 265 -765 418 -404 210 -617 332 -1090 623 -643 395 -559 330 -959 752
-190 201 -506 539 -701 750 l-356 385 -384 875 c-334 764 -1093 2461 -1431
3204 -63 138 -125 260 -139 274 -29 28 -647 378 -704 399 -35 12 -90 11 -485
-17 l-446 -30 -485 -106 c-467 -101 -500 -110 -885 -234 l-400 -128 -350 -46
-350 -46 -535 58 -535 57 -398 269 c-403 271 -518 359 -922 702 l-190 161 -80
129 -80 129 -35 290 -35 290 153 280 c85 154 283 503 442 775 159 272 291 511
295 530 11 64 -59 265 -334 954 -148 369 -348 889 -444 1156 -158 435 -187
524 -276 860 l-101 375 -19 258 -20 258 144 480 c79 264 147 494 150 512 8 42
-33 1024 -44 1062 -4 17 -133 235 -285 485 l-278 455 -152 360 -152 361 68
469 68 470 -21 310 c-12 171 -25 327 -30 347 -12 47 -59 95 -107 107 -20 6
-475 19 -1012 31 -761 16 -998 24 -1080 36 l-105 16 -425 216 c-234 118 -565
295 -735 393 l-310 178 -762 145 -761 145 -444 210 -443 209 -545 347 c-377
240 -645 403 -870 528 -179 99 -338 184 -355 188 -16 5 -291 35 -611 69 l-580
60 -389 90 c-213 49 -391 93 -395 97 -4 4 -62 77 -129 161 l-123 154 -88 466
c-97 518 -149 744 -182 804 -31 55 -65 72 -205 102 l-121 27 -226 -11 -225
-10 -214 61 -214 61 -414 352 -413 351 -194 245 c-107 135 -337 425 -510 645
-174 220 -438 551 -587 735 -213 263 -292 369 -369 495 l-99 160 -244 965
-244 965 -119 645 -119 645 -51 879 c-27 484 -55 898 -61 920 -6 23 -80 275
-164 561 l-153 520 -7 280 c-4 154 -11 964 -14 1800 l-6 1520 -58 112 c-81
156 -83 157 -295 161 -197 4 -207 3 -797 -123 -437 -93 -442 -94 -676 -110
-321 -21 -315 -21 -323 10 -21 84 -26 436 -15 1245 l10 865 -25 165 c-21 139
-34 193 -86 340 -34 96 -68 184 -75 196 -7 11 -116 142 -242 291 -161 190
-387 482 -768 989 l-539 719 -582 552 -581 551 -196 334 c-145 246 -209 345
-244 379 -26 25 -157 141 -289 257 -208 181 -299 271 -650 643 -225 238 -546
589 -714 780 -504 573 -983 1104 -1016 1126 -17 12 -228 107 -470 211 -334
144 -706 319 -1553 732 l-1115 542 -355 338 -356 337 -355 259 c-195 143 -369
270 -386 281 -17 12 -262 133 -545 269 -357 171 -591 290 -766 391 l-251 144
-199 247 c-187 233 -209 265 -379 552 -100 168 -206 350 -237 405 -46 83 -97
148 -301 380 -135 154 -261 290 -280 302 -50 32 -327 159 -363 167 -67 15
-101 -6 -273 -166 -89 -84 -322 -295 -518 -468 l-356 -315 -365 -444 -366
-444 -875 -532 -875 -532 -905 -238 c-559 -147 -916 -246 -933 -258 -16 -11
-108 -112 -205 -225 -126 -146 -275 -340 -517 -673 l-340 -468 -147 -508 -148
-508 -85 -507 -85 -508 -153 -260 -154 -261 -126 -85 -127 -85 -320 139 -319
138 -169 161 c-155 149 -189 188 -437 510 -436 564 -380 503 -693 767 -244
206 -282 243 -300 284 -220 516 -652 1549 -867 2077 l-277 680 -283 550 c-204
397 -314 624 -395 815 l-112 265 -383 650 c-210 358 -417 718 -460 800 -49 94
-92 163 -115 185 -24 22 -176 106 -410 225 l-372 190 -77 90 c-43 49 -151 184
-241 298 -90 115 -177 219 -194 231 -38 29 -77 39 -121 30 -54 -10 -623 -442
-789 -599 l-138 -130 -260 -51 -261 -51 -176 62 c-97 35 -286 114 -421 178
l-244 114 -158 194 c-108 132 -201 260 -290 399 l-131 205 -159 485 c-155 476
-159 491 -220 795 l-61 310 87 134 c48 74 183 285 301 470 l213 336 101 245
c99 241 103 253 231 745 l130 500 208 575 209 575 328 725 c180 399 331 739
336 755 4 17 40 311 79 655 l70 625 54 1168 54 1167 139 173 c76 94 148 186
160 202 11 17 88 176 169 355 l149 325 5 710 5 710 93 475 c51 261 115 625
143 808 l49 333 0 457 0 457 -65 378 -64 377 -167 283 c-204 344 -183 313
-431 639 -184 243 -209 280 -263 397 l-60 130 0 306 0 307 136 386 c125 354
156 429 365 887 l228 500 223 180 c123 100 390 309 593 465 328 252 403 315
662 557 161 151 305 293 321 316 16 23 147 231 292 462 l263 420 233 600 234
600 200 844 200 844 30 836 30 836 -55 729 c-77 1017 -78 952 30 1858 l84 713
16 475 15 475 -29 432 -30 431 120 379 c66 208 147 481 179 607 32 126 65 234
72 241 7 7 110 91 228 188 118 96 252 213 297 259 45 46 211 245 368 443 l287
360 200 405 200 405 263 695 c377 1001 477 1321 705 2258 367 1513 486 1981
527 2061 l38 75 335 190 c184 105 452 257 595 339 l260 147 348 285 c290 239
491 390 1239 933 746 542 1045 767 1818 1368 509 396 1222 944 1585 1218 l660
499 346 203 c286 167 423 240 794 419 247 119 462 226 479 238 75 52 1189
1042 1248 1108 36 41 199 229 362 418 l295 345 117 315 117 316 184 290 184
290 142 89 c130 81 153 92 276 127 l134 38 560 16 559 16 232 66 c209 59 261
79 546 205 214 95 411 192 615 303 723 393 704 383 886 435 l165 48 375 6 374
7 280 81 c280 81 280 81 365 141 113 81 447 431 834 874 l298 341 572 286
c314 157 596 300 626 319 30 18 365 259 745 536 507 371 859 637 1330 1009
642 507 1188 959 1242 1029 16 21 229 326 473 678 389 560 471 673 662 903
121 145 225 274 232 285 17 27 279 968 379 1362 72 280 85 321 399 1180 292
798 353 955 592 1520 147 347 276 644 288 660 12 17 126 152 253 300 l232 270
489 346 489 346 430 188 c237 103 583 256 770 340 l340 152 235 26 c247 28
958 82 966 74 3 -3 127 -317 275 -698 149 -382 278 -709 286 -728 25 -51 317
-319 362 -330 20 -6 128 -17 241 -26 l205 -16 320 96 c176 53 323 99 326 101
4 2 155 31 335 64 l329 60 525 -55 c289 -31 751 -83 1027 -115 l501 -59 394
-99 393 -99 440 -235 440 -235 219 -221 220 -221 244 -403 c134 -222 264 -436
288 -475 36 -57 92 -116 267 -281 122 -114 238 -220 257 -234 19 -14 154 -76
300 -138 l265 -112 305 -44 305 -45 261 30 260 30 75 -19 c41 -10 136 -33 212
-50 l138 -33 430 -347 c366 -297 475 -391 737 -642 263 -251 354 -346 635
-666 320 -363 332 -375 469 -478 77 -59 156 -110 174 -116 25 -7 145 2 447 32
l412 41 565 156 c502 138 571 160 615 191 118 83 461 366 872 720 343 295 535
451 856 695 l413 314 600 211 599 211 458 111 458 110 652 -25 c359 -14 851
-39 1094 -55 546 -37 744 -38 1313 -4 285 16 592 27 890 31 l455 6 260 -98
c386 -144 303 -134 662 -81 l308 46 495 -74 495 -74 550 -185 550 -184 420
-270 c395 -253 443 -287 810 -575 l390 -307 96 -233 c80 -191 137 -361 320
-943 l224 -710 184 -275 c192 -285 251 -367 460 -634 l124 -160 246 -740 c136
-408 255 -755 265 -772 34 -57 106 -83 175 -64 50 13 211 165 538 506 210 219
254 258 868 775 l646 544 557 299 557 299 305 34 305 33 345 -81 345 -82 370
-179 370 -180 115 -10 c141 -13 785 -13 971 0 l135 9 180 100 c127 71 253 130
432 203 170 69 263 112 280 130 15 15 125 202 244 416 185 332 265 490 542
1074 l324 685 510 1445 510 1445 122 520 c67 286 123 521 124 522 1 1 89 -25
196 -58 107 -33 1327 -399 2710 -814 l2515 -754 2925 -944 c6016 -1943 5976
-1931 9740 -3072 4245 -1287 3633 -1099 9245 -2840 l4750 -1474 1325 -469
1325 -469 1320 -765 1320 -765 845 -403 c465 -221 860 -407 878 -412 22 -6
256 -4 659 7 l625 16 406 55 407 54 340 -20 c187 -11 358 -25 380 -30 23 -5
101 -38 175 -73 152 -72 187 -81 241 -67 57 16 85 51 191 241 l96 174 62 240
c34 132 152 584 262 1005 l200 765 8 170 c5 94 10 429 12 745 l3 575 -458 960
c-378 792 -533 1105 -888 1785 l-430 825 -650 1575 -651 1575 -314 1210 c-173
666 -413 1604 -534 2085 l-219 875 -436 1150 -436 1150 -377 643 c-207 353
-387 653 -399 666 -12 14 -189 176 -392 360 -326 297 -420 390 -808 799 l-439
464 -455 594 -454 594 -42 165 c-41 157 -43 172 -43 313 0 135 3 162 40 330
23 100 43 189 45 197 3 8 148 215 322 459 l318 444 920 700 920 700 393 481
c216 265 398 489 403 498 5 9 37 158 70 330 33 172 114 591 180 932 l120 619
88 246 c48 135 91 257 94 271 4 14 16 198 28 410 l20 385 -55 398 -56 398 11
312 10 311 340 553 340 552 361 333 361 333 390 186 389 185 287 -42 286 -42
242 -105 243 -105 253 -51 253 -52 320 21 319 21 460 119 c265 69 587 146 759
180 l300 60 80 -14 c45 -8 176 -27 291 -42 l210 -26 350 -160 c302 -138 409
-181 775 -310 234 -83 442 -155 462 -159 21 -5 187 -27 368 -49 324 -40 331
-40 393 -24 34 9 231 53 437 98 l375 82 250 159 c138 87 259 165 271 174 11 9
174 186 363 393 340 375 344 379 696 687 l354 311 283 156 283 156 500 127
500 127 371 210 371 210 394 48 394 47 150 51 c199 67 249 91 274 132 11 18
56 113 98 212 43 99 173 366 290 594 l211 415 180 575 c197 630 187 593 237
869 44 244 150 660 173 682 9 9 76 68 147 131 l130 115 386 211 c213 116 477
267 587 335 190 119 207 128 353 175 85 28 156 51 160 51 3 1 40 -70 82 -156z"/>
<path d="M178905 187530 c-176 -30 -340 -116 -470 -246 -107 -108 -167 -207
-216 -364 -31 -99 -33 -114 -33 -250 0 -136 2 -151 33 -250 49 -157 109 -256
216 -364 108 -108 210 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 300 95 498 290 588 582 123 395 -61 843 -422 1024 -131 65 -238 92 -381 96
-69 1 -147 -1 -175 -6z"/>
<path d="M179760 185501 c-328 -39 -570 -289 -570 -586 0 -38 7 -94 14 -123
40 -149 174 -272 330 -304 61 -12 90 -7 123 20 l21 19 -33 99 c-60 179 -65
385 -13 506 73 170 322 186 430 28 63 -92 71 -138 76 -457 3 -232 1 -283 -10
-283 -18 0 -212 -94 -273 -133 -270 -169 -445 -381 -516 -622 -21 -71 -24
-100 -24 -250 0 -146 4 -183 24 -265 79 -313 290 -527 603 -612 105 -28 125
-31 293 -32 160 -1 189 2 259 22 178 51 307 139 478 325 130 141 184 227 224
354 25 79 27 103 28 243 0 119 -4 170 -17 220 -78 286 -248 496 -563 698 l-81
52 -6 278 c-4 259 -6 282 -30 357 -68 222 -235 377 -460 429 -81 19 -223 27
-307 17z m651 -1346 c267 -233 363 -431 362 -750 -1 -149 -11 -231 -45 -335
-69 -216 -221 -330 -444 -331 -74 0 -103 4 -146 22 -348 148 -482 711 -263
1104 45 80 159 203 239 258 72 49 188 116 198 114 4 -1 48 -38 99 -82z"/>
<path d="M182040 185491 c-346 -52 -618 -263 -708 -551 -41 -130 -37 -261 10
-354 50 -99 164 -180 272 -195 56 -8 56 -8 77 26 19 31 20 42 14 161 -19 336
94 575 310 658 68 26 274 27 356 2 90 -28 161 -81 202 -152 74 -128 102 -268
87 -443 -16 -185 -67 -321 -152 -404 -69 -68 -110 -79 -295 -79 -151 0 -155
-1 -189 -26 -34 -26 -34 -27 -34 -108 0 -77 2 -84 28 -108 27 -26 29 -27 202
-30 165 -3 178 -4 232 -30 118 -55 209 -179 239 -323 15 -77 15 -232 -2 -315
-35 -178 -145 -345 -280 -423 -145 -84 -362 -77 -491 16 -183 131 -250 350
-227 741 6 92 8 170 6 172 -2 2 -25 7 -51 10 -55 8 -100 -9 -189 -70 -71 -48
-118 -111 -148 -196 -21 -57 -23 -83 -23 -220 0 -142 2 -161 27 -228 86 -237
297 -420 572 -494 69 -19 106 -22 265 -22 168 0 194 3 285 27 195 51 363 151
497 293 86 91 148 196 188 319 31 93 34 110 34 240 1 154 -13 216 -73 320 -59
103 -233 267 -338 318 -24 12 -43 24 -43 28 0 4 21 20 48 35 26 15 88 68 137
118 156 156 217 308 217 536 -1 103 -5 139 -25 206 -78 262 -294 455 -588 523
-104 25 -350 36 -449 22z"/>
<path d="M184170 185493 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M186000 185490 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328
-318 -508 -30 -104 -32 -120 -33 -290 -1 -158 1 -190 21 -260 76 -274 277
-531 565 -725 103 -68 347 -185 522 -250 77 -28 156 -57 175 -65 31 -11 14
-12 -135 -8 -237 7 -295 -13 -329 -114 -19 -56 -33 -183 -20 -183 5 0 43 11
85 25 105 33 198 39 384 26 275 -21 481 -64 800 -170 288 -95 495 -181 667
-277 l97 -55 37 16 c30 12 35 19 31 37 -3 13 -9 45 -13 73 -9 67 -53 170 -99
234 -90 125 -159 161 -1035 541 -647 280 -848 388 -1017 544 -133 123 -208
244 -251 405 -22 84 -25 117 -26 261 0 177 10 249 51 370 48 139 112 233 198
288 54 34 160 36 221 4 79 -41 154 -156 188 -290 24 -92 38 -301 31 -454 l-7
-136 27 -36 27 -36 157 0 157 0 28 29 27 28 8 274 c10 295 19 353 74 470 35
73 101 147 152 170 54 25 144 25 194 0 48 -25 107 -91 131 -147 49 -114 62
-222 61 -521 l-1 -251 31 -26 c30 -25 34 -26 182 -26 151 1 152 1 184 28 l31
27 5 265 c3 211 8 278 22 330 40 148 110 253 206 304 71 39 181 43 245 9 135
-72 202 -255 191 -520 -9 -221 -52 -328 -201 -503 -75 -87 -96 -118 -92 -134
3 -12 6 -27 6 -35 0 -11 14 -12 74 -7 87 8 194 42 274 88 151 86 292 283 349
488 13 50 17 102 17 220 0 144 -2 161 -29 240 -58 174 -196 316 -370 381 -200
74 -439 64 -603 -28 -88 -49 -207 -168 -257 -258 -39 -68 -39 -69 -45 -39 -20
95 -140 244 -252 311 -113 69 -299 83 -433 32 -141 -52 -259 -167 -324 -314
l-23 -50 -30 60 c-76 149 -198 265 -323 309 -57 21 -220 29 -305 16z"/>
<path d="M190020 185493 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M191980 185491 c-36 -5 -107 -20 -159 -35 -318 -92 -555 -334 -646
-661 -26 -92 -28 -115 -29 -280 -1 -158 2 -192 23 -275 47 -188 137 -340 279
-469 95 -87 212 -151 349 -192 104 -31 114 -32 293 -33 173 0 192 2 285 28
265 75 485 254 600 490 139 285 137 693 -6 942 -16 28 -29 54 -29 57 0 10 123
93 180 122 121 61 220 79 325 60 147 -27 290 -190 364 -415 81 -246 64 -578
-39 -780 -77 -149 -185 -260 -360 -369 -82 -51 -100 -67 -100 -87 0 -37 34
-66 73 -60 18 3 59 8 92 11 96 10 217 51 309 106 64 38 114 80 198 168 188
193 275 346 320 561 41 195 5 467 -85 646 -105 209 -305 375 -529 441 -84 24
-109 27 -253 27 -134 0 -173 -3 -237 -21 -119 -34 -222 -78 -347 -149 l-114
-65 -56 54 c-69 67 -168 122 -275 154 -64 19 -111 25 -221 28 -77 2 -169 0
-205 -4z m268 -271 c112 -52 198 -141 266 -277 109 -217 136 -565 64 -803 -81
-263 -259 -392 -497 -359 -163 23 -288 123 -379 304 -111 223 -136 600 -54
836 63 181 187 300 342 329 78 15 188 2 258 -30z"/>
<path d="M195420 185491 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M185800 162580 c-149 -20 -328 -100 -455 -203 -166 -134 -276 -296
-335 -493 -32 -105 -33 -116 -34 -289 -1 -158 2 -191 22 -265 28 -106 36 -126
84 -224 161 -326 464 -567 980 -782 64 -26 116 -49 115 -50 -1 -1 -42 2 -92 7
-130 11 -244 11 -290 -2 -92 -25 -135 -93 -135 -215 l0 -63 38 -6 c20 -4 42
-8 47 -10 6 -1 23 9 38 24 l29 26 184 -2 c250 -4 494 -39 714 -105 189 -56
690 -257 889 -357 l78 -40 27 28 26 27 -16 78 c-31 153 -111 275 -228 350 -30
19 -238 120 -462 226 -440 206 -977 479 -1113 567 -276 178 -413 359 -465 608
-46 223 -23 468 59 642 59 126 134 208 234 255 40 19 63 22 166 22 106 -1 128
-4 190 -28 96 -37 170 -86 236 -159 l56 -61 -34 -72 c-18 -40 -45 -122 -60
-181 -25 -96 -28 -126 -27 -263 0 -136 4 -168 28 -258 89 -336 313 -561 647
-648 96 -25 119 -28 294 -27 181 0 195 1 295 30 198 57 358 160 486 315 287
346 295 916 18 1271 -163 208 -400 319 -714 333 -115 5 -161 3 -222 -9 -179
-38 -373 -133 -474 -232 l-62 -61 -26 43 c-67 105 -247 210 -426 248 -74 16
-214 18 -310 5z m1480 -240 c172 -25 307 -137 400 -332 50 -103 76 -207 91
-351 37 -372 -89 -666 -326 -757 -89 -34 -234 -33 -328 4 -151 57 -265 192
-334 391 -72 210 -80 489 -21 685 42 140 148 275 254 325 87 41 157 51 264 35z"/>
<path d="M189100 162580 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
-269 0 -149 3 -187 23 -260 77 -292 269 -563 518 -731 59 -40 80 -49 115 -49
39 0 49 5 96 53 70 71 70 95 1 162 -235 229 -355 664 -294 1063 27 175 63 259
147 338 77 73 110 89 188 88 107 -1 185 -56 236 -169 44 -95 55 -175 61 -423
l5 -233 35 -14 c45 -19 291 -20 343 -1 l35 13 6 214 c9 299 39 424 123 525 74
88 197 112 295 58 224 -121 317 -605 197 -1017 -47 -160 -154 -339 -268 -447
-49 -47 -58 -61 -57 -90 0 -31 7 -40 61 -79 76 -54 98 -52 200 17 93 63 235
134 363 183 55 20 109 41 119 45 14 5 17 4 12 -4 -4 -8 3 -16 19 -22 31 -12
145 -13 163 -2 12 8 42 151 42 203 0 111 -253 55 -455 -100 l-70 -55 66 70
c223 235 321 482 304 764 -24 386 -237 684 -559 779 -97 29 -260 39 -337 21
-162 -37 -301 -137 -382 -272 l-34 -56 -25 52 c-89 180 -275 288 -494 285 -49
-1 -109 -5 -134 -9z"/>
<path d="M183680 162500 c-98 -193 -66 -324 110 -452 19 -15 98 -61 175 -103
158 -87 195 -118 231 -192 23 -46 26 -62 23 -136 -3 -71 -9 -93 -38 -151 -38
-75 -77 -114 -152 -152 -44 -22 -68 -26 -177 -31 -101 -4 -134 -9 -159 -25
-32 -19 -33 -21 -33 -90 0 -55 4 -76 21 -99 20 -28 23 -29 102 -29 184 -1 280
-33 371 -126 60 -62 97 -130 123 -224 24 -88 24 -306 -1 -405 -48 -196 -181
-357 -344 -418 -48 -17 -79 -21 -187 -20 -119 0 -137 3 -210 30 -102 38 -209
108 -270 175 -118 130 -205 311 -246 513 -31 149 -33 491 -5 660 66 399 239
810 452 1072 41 51 41 53 31 97 -6 25 -16 46 -23 46 -7 0 -53 -13 -104 -30
-335 -109 -564 -403 -705 -904 -62 -221 -78 -348 -79 -631 -1 -278 9 -359 66
-538 135 -427 471 -702 913 -747 387 -40 761 89 1003 345 152 160 213 312 213
532 1 155 -37 275 -132 414 -74 109 -235 235 -352 275 l-48 16 92 45 c216 106
332 298 314 520 -10 134 -65 228 -183 315 -30 22 -154 89 -276 148 -126 62
-239 123 -263 144 -39 34 -113 159 -113 191 0 11 -50 25 -92 25 -12 0 -28 -21
-48 -60z"/>
<path d="M181955 159370 c-176 -30 -340 -116 -470 -246 -107 -108 -167 -207
-216 -364 -31 -99 -33 -114 -33 -250 0 -136 2 -151 33 -250 49 -157 109 -256
216 -364 108 -108 210 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 300 95 498 290 588 582 123 395 -61 843 -422 1024 -131 65 -238 92 -381 96
-69 1 -147 -1 -175 -6z"/>
<path d="M187131 144870 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z"/>
<path d="M199135 144861 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
-1238 4 -779 4 -791 26 -884 80 -334 272 -542 577 -627 92 -25 114 -28 280
-28 176 0 182 1 279 33 302 98 520 344 604 681 23 94 26 125 26 290 1 163 -2
196 -23 280 -49 195 -155 366 -297 481 -86 70 -183 120 -305 155 -82 24 -112
27 -239 28 -128 1 -153 -2 -215 -23 -86 -29 -173 -79 -243 -138 l-53 -45 3
453 c4 477 7 511 49 524 39 13 147 -28 320 -120 199 -107 264 -133 362 -145
250 -29 442 109 507 365 15 60 17 82 9 98 -25 47 -26 47 -123 6 -202 -84 -382
-114 -547 -89 -46 6 -179 36 -296 66 -222 56 -305 68 -388 55z m732 -1278 c75
-30 155 -104 196 -180 41 -76 73 -218 87 -378 38 -436 -80 -753 -320 -855 -76
-32 -220 -33 -299 -1 -104 42 -175 111 -234 226 -54 104 -57 133 -57 595 l0
426 43 36 c101 84 214 141 312 158 79 13 202 1 272 -27z"/>
<path d="M201235 144860 c-252 -32 -442 -216 -500 -482 -32 -152 -17 -396 45
-708 42 -214 317 -1357 507 -2110 123 -489 170 -661 186 -677 19 -22 28 -23
161 -23 l141 1 145 297 c79 163 247 503 372 755 322 649 383 816 382 1047 -1
209 -68 364 -224 520 -112 112 -198 164 -340 205 -82 24 -114 27 -240 29 -164
1 -252 -17 -365 -77 -67 -36 -189 -152 -220 -210 l-20 -37 -52 292 c-82 456
-93 606 -57 754 38 158 170 228 301 161 85 -45 146 -188 165 -391 11 -116 13
-125 35 -135 30 -14 268 -15 292 -1 15 7 20 28 25 107 15 198 54 322 126 393
51 52 87 63 153 48 85 -19 125 -78 134 -193 6 -83 -14 -166 -74 -296 -29 -64
-32 -79 -23 -103 10 -28 12 -29 75 -24 138 12 288 115 351 243 56 115 41 302
-33 410 -29 43 -99 109 -145 138 -48 30 -171 65 -253 72 -199 17 -363 -63
-455 -220 l-27 -47 -22 35 c-37 60 -141 148 -216 183 -103 49 -195 61 -330 44z
m670 -1407 c66 -24 148 -107 186 -187 16 -34 39 -100 50 -146 20 -77 21 -102
16 -270 -10 -286 -48 -504 -132 -750 -62 -183 -299 -810 -306 -810 -3 0 -10
28 -13 63 -29 256 -179 1016 -302 1525 l-64 265 22 36 c61 100 137 181 219
233 87 55 232 73 324 41z"/>
<path d="M203700 144860 c-315 -31 -545 -185 -642 -430 -30 -76 -55 -196 -61
-297 -5 -84 -7 -83 113 -83 137 0 254 49 297 125 12 21 27 68 34 104 30 165
67 234 152 288 158 100 463 70 564 -54 84 -106 95 -162 100 -548 4 -268 3
-318 -8 -309 -8 6 -34 27 -59 46 -60 48 -181 112 -255 134 -47 15 -91 19 -205
18 -127 -1 -157 -4 -240 -28 -52 -15 -124 -44 -160 -64 -195 -108 -348 -322
-416 -582 -25 -96 -27 -121 -28 -295 0 -176 2 -197 27 -290 37 -134 93 -248
171 -348 121 -155 259 -253 434 -310 94 -30 102 -31 277 -30 173 1 184 2 285
33 311 94 492 303 572 661 23 104 23 106 23 839 l0 735 -27 97 c-103 369 -364
574 -753 591 -60 3 -148 2 -195 -3z m270 -1270 c83 -27 171 -77 238 -135 l52
-47 0 -361 c0 -199 -5 -402 -10 -450 -36 -311 -230 -489 -492 -450 -97 14
-160 45 -230 115 -130 130 -188 330 -188 645 1 418 108 645 334 704 52 14 225
1 296 -21z"/>
<path d="M207545 144861 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
-1238 4 -779 4 -791 26 -884 80 -334 272 -542 577 -627 92 -25 114 -28 280
-28 176 0 182 1 279 33 302 98 520 344 604 681 23 94 26 125 26 290 1 163 -2
196 -23 280 -49 195 -155 366 -297 481 -86 70 -183 120 -305 155 -82 24 -112
27 -239 28 -128 1 -153 -2 -215 -23 -86 -29 -173 -79 -243 -138 l-53 -45 3
453 c4 477 7 511 49 524 39 13 147 -28 320 -120 199 -107 264 -133 362 -145
250 -29 442 109 507 365 15 60 17 82 9 98 -25 47 -26 47 -123 6 -202 -84 -382
-114 -547 -89 -46 6 -179 36 -296 66 -222 56 -305 68 -388 55z m732 -1278 c75
-30 155 -104 196 -180 41 -76 73 -218 87 -378 38 -436 -80 -753 -320 -855 -76
-32 -220 -33 -299 -1 -104 42 -175 111 -234 226 -54 104 -57 133 -57 595 l0
426 43 36 c101 84 214 141 312 158 79 13 202 1 272 -27z"/>
<path d="M190590 144410 c-171 -26 -303 -130 -346 -272 -25 -83 -15 -197 25
-275 30 -60 117 -151 184 -192 20 -12 37 -26 37 -29 -1 -4 -21 -23 -46 -42
-69 -54 -151 -151 -183 -220 -37 -78 -46 -144 -31 -223 33 -177 171 -284 378
-295 213 -11 378 71 454 226 29 59 33 76 33 147 -1 66 -5 91 -28 140 -38 81
-73 131 -111 155 -38 24 -30 25 39 5 241 -71 476 -428 558 -850 30 -151 32
-535 4 -695 -49 -282 -177 -543 -329 -673 -271 -232 -706 -249 -1014 -39 -231
156 -409 442 -480 772 -109 503 2 1015 284 1311 l44 47 -31 7 c-42 9 -141 -3
-217 -26 -68 -21 -162 -78 -230 -141 -149 -137 -291 -397 -344 -628 -28 -122
-38 -358 -21 -496 78 -635 520 -1117 1128 -1230 118 -22 378 -29 501 -14 348
42 635 191 856 445 212 244 323 513 357 865 32 341 -39 667 -205 939 -223 366
-562 591 -926 613 l-45 3 45 24 c132 69 189 184 169 343 -19 150 -114 256
-261 287 -69 15 -189 20 -248 11z m172 -282 c35 -24 52 -85 43 -154 -7 -59
-51 -155 -91 -199 l-27 -29 -50 54 c-68 74 -97 138 -97 217 0 55 4 67 28 94
44 49 137 57 194 17z m-14 -716 c38 -79 45 -101 44 -152 -1 -96 -40 -146 -120
-157 -86 -12 -137 51 -130 162 4 68 36 142 96 224 44 60 42 62 110 -77z"/>
<path d="M197680 144020 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M213320 144020 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M193080 143853 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M194835 143851 c-298 -49 -527 -257 -606 -552 -31 -113 -34 -374 -6
-487 63 -260 260 -455 527 -523 121 -31 311 -31 430 1 268 72 464 268 538 541
56 204 33 493 -52 644 l-23 43 76 35 c101 47 151 59 243 59 151 0 265 -63 335
-182 73 -124 101 -415 54 -565 -42 -136 -139 -259 -243 -308 -50 -24 -69 -27
-159 -27 -94 0 -105 -2 -136 -26 l-33 -25 0 -87 c1 -114 4 -117 163 -126 148
-9 212 -31 282 -97 93 -88 136 -217 136 -414 0 -287 -120 -481 -364 -589 -144
-63 -392 -80 -551 -37 -355 95 -476 394 -312 771 29 68 31 79 21 110 -14 41
-27 45 -100 30 -127 -26 -286 -139 -361 -255 -67 -105 -94 -270 -65 -398 37
-163 185 -319 396 -416 180 -84 373 -122 615 -123 282 0 513 53 725 169 296
161 451 371 486 657 38 315 -97 547 -408 701 l-95 47 60 36 c208 127 346 300
388 490 25 111 15 288 -22 397 -81 237 -270 410 -530 486 -67 20 -102 23 -234
23 -117 0 -170 -4 -217 -17 -79 -22 -177 -66 -248 -112 l-57 -36 -41 34 c-57
46 -138 86 -222 109 -79 21 -306 32 -390 19z m281 -271 c91 -45 152 -132 190
-275 27 -99 27 -429 1 -524 -54 -192 -143 -271 -305 -271 -238 0 -364 150
-391 466 -27 320 58 554 226 618 60 23 74 25 148 20 51 -3 87 -12 131 -34z"/>
<path d="M205810 143851 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M210050 143850 c-149 -20 -328 -100 -455 -203 -166 -134 -276 -296
-335 -493 -32 -105 -33 -116 -34 -289 -1 -158 2 -191 22 -265 28 -106 36 -126
84 -224 161 -326 464 -567 980 -782 64 -26 116 -49 115 -50 -1 -1 -42 2 -92 7
-130 11 -244 11 -290 -2 -92 -25 -135 -93 -135 -215 l0 -63 38 -6 c20 -4 42
-8 47 -10 6 -1 23 9 38 24 l29 26 184 -2 c250 -4 494 -39 714 -105 189 -56
690 -257 889 -357 l78 -40 27 28 26 27 -16 78 c-31 153 -111 275 -228 350 -30
19 -238 120 -462 226 -440 206 -977 479 -1113 567 -276 178 -413 359 -465 608
-46 223 -23 468 59 642 59 126 134 208 234 255 40 19 63 22 166 22 106 -1 128
-4 190 -28 96 -37 170 -86 236 -159 l56 -61 -34 -72 c-18 -40 -45 -122 -60
-181 -25 -96 -28 -126 -27 -263 0 -136 4 -168 28 -258 89 -336 313 -561 647
-648 96 -25 119 -28 294 -27 181 0 195 1 295 30 198 57 358 160 486 315 287
346 295 916 18 1271 -163 208 -400 319 -714 333 -115 5 -161 3 -222 -9 -179
-38 -373 -133 -474 -232 l-62 -61 -26 43 c-67 105 -247 210 -426 248 -74 16
-214 18 -310 5z m1480 -240 c172 -25 307 -137 400 -332 50 -103 76 -207 91
-351 37 -372 -89 -666 -326 -757 -89 -34 -234 -33 -328 4 -151 57 -265 192
-334 391 -72 210 -80 489 -21 685 42 140 148 275 254 325 87 41 157 51 264 35z"/>
<path d="M186555 141600 c-176 -30 -340 -116 -470 -246 -107 -108 -167 -207
-216 -364 -31 -99 -33 -114 -33 -250 0 -136 2 -151 33 -250 49 -157 109 -256
216 -364 108 -108 210 -170 360 -218 95 -30 108 -32 255 -32 147 -1 160 1 256
31 289 93 484 285 574 568 74 231 49 479 -69 695 -105 192 -277 330 -500 401
-81 25 -116 31 -226 34 -71 2 -152 0 -180 -5z"/>
<path d="M180995 131391 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
-1238 4 -779 4 -791 26 -884 80 -334 272 -542 577 -627 92 -25 114 -28 280
-28 176 0 182 1 279 33 302 98 520 344 604 681 23 94 26 125 26 290 1 163 -2
196 -23 280 -49 195 -155 366 -297 481 -86 70 -183 120 -305 155 -82 24 -112
27 -239 28 -128 1 -153 -2 -215 -23 -86 -29 -173 -79 -243 -138 l-53 -45 3
453 c4 477 7 511 49 524 39 13 147 -28 320 -120 199 -107 264 -133 362 -145
250 -29 442 109 507 365 15 60 17 82 9 98 -25 47 -26 47 -123 6 -202 -84 -382
-114 -547 -89 -46 6 -179 36 -296 66 -222 56 -305 68 -388 55z m732 -1278 c75
-30 155 -104 196 -180 41 -76 73 -218 87 -378 38 -436 -80 -753 -320 -855 -76
-32 -220 -33 -299 -1 -104 42 -175 111 -234 226 -54 104 -57 133 -57 595 l0
426 43 36 c101 84 214 141 312 158 79 13 202 1 272 -27z"/>
<path d="M182890 131389 c-75 -13 -169 -59 -226 -111 -103 -94 -148 -210 -142
-367 3 -85 7 -105 36 -163 59 -120 167 -196 299 -211 50 -6 51 -5 64 24 11 27
8 43 -22 137 -30 96 -34 119 -33 217 0 124 13 166 64 209 30 25 55 31 110 26
117 -10 209 -178 226 -414 6 -90 9 -102 33 -122 24 -21 36 -23 140 -24 96 0
119 3 146 20 32 20 32 20 39 122 19 288 96 421 241 420 122 -1 198 -77 231
-231 10 -48 14 -148 14 -374 l0 -308 -42 34 c-62 50 -132 82 -223 102 -117 26
-313 16 -451 -24 -314 -90 -541 -329 -626 -661 -27 -105 -30 -130 -30 -285 -1
-153 2 -180 26 -273 17 -65 43 -132 71 -183 52 -93 211 -279 294 -343 187
-144 377 -198 621 -175 393 37 657 254 752 619 22 84 22 97 25 910 4 731 2
833 -12 904 -51 252 -214 438 -441 504 -153 45 -319 35 -420 -24 -69 -40 -145
-122 -179 -192 l-30 -62 -29 57 c-37 75 -135 172 -207 205 -96 45 -198 57
-319 37z m959 -1274 c76 -26 154 -70 217 -122 l44 -37 0 -441 c-1 -473 -3
-499 -54 -610 -38 -83 -143 -185 -221 -214 -53 -20 -72 -22 -160 -18 -112 6
-165 23 -238 75 -88 63 -155 168 -195 307 -64 219 -68 555 -10 745 59 190 178
310 338 340 68 13 204 1 279 -25z"/>
<path d="M188080 130940 c-171 -26 -303 -130 -346 -272 -25 -83 -15 -197 25
-275 30 -60 117 -151 184 -192 20 -12 37 -26 37 -29 -1 -4 -21 -23 -46 -42
-69 -54 -151 -151 -183 -220 -37 -78 -46 -144 -31 -223 33 -177 171 -284 378
-295 213 -11 378 71 454 226 29 59 33 76 33 147 -1 66 -5 91 -28 140 -38 81
-73 131 -111 155 -38 24 -30 25 39 5 241 -71 476 -428 558 -850 30 -151 32
-535 4 -695 -49 -282 -177 -543 -329 -673 -271 -232 -706 -249 -1014 -39 -231
156 -409 442 -480 772 -109 503 2 1015 284 1311 l44 47 -31 7 c-42 9 -141 -3
-217 -26 -68 -21 -162 -78 -230 -141 -149 -137 -291 -397 -344 -628 -28 -122
-38 -358 -21 -496 78 -635 520 -1117 1128 -1230 118 -22 378 -29 501 -14 348
42 635 191 856 445 212 244 323 513 357 865 32 341 -39 667 -205 939 -223 366
-562 591 -926 613 l-45 3 45 24 c132 69 189 184 169 343 -19 150 -114 256
-261 287 -69 15 -189 20 -248 11z m172 -282 c35 -24 52 -85 43 -154 -7 -59
-51 -155 -91 -199 l-27 -29 -50 54 c-68 74 -97 138 -97 217 0 55 4 67 28 94
44 49 137 57 194 17z m-14 -716 c38 -79 45 -101 44 -152 -1 -96 -40 -146 -120
-157 -86 -12 -137 51 -130 162 4 68 36 142 96 224 44 60 42 62 110 -77z"/>
<path d="M179540 130550 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M176695 130381 c-298 -49 -527 -257 -606 -552 -31 -113 -34 -374 -6
-487 63 -260 260 -455 527 -523 121 -31 311 -31 430 1 268 72 464 268 538 541
56 204 33 493 -52 644 l-23 43 76 35 c101 47 151 59 243 59 151 0 265 -63 335
-182 73 -124 101 -415 54 -565 -42 -136 -139 -259 -243 -308 -50 -24 -69 -27
-159 -27 -94 0 -105 -2 -136 -26 l-33 -25 0 -87 c1 -114 4 -117 163 -126 148
-9 212 -31 282 -97 93 -88 136 -217 136 -414 0 -287 -120 -481 -364 -589 -144
-63 -392 -80 -551 -37 -355 95 -476 394 -312 771 29 68 31 79 21 110 -14 41
-27 45 -100 30 -127 -26 -286 -139 -361 -255 -67 -105 -94 -270 -65 -398 37
-163 185 -319 396 -416 180 -84 373 -122 615 -123 282 0 513 53 725 169 296
161 451 371 486 657 38 315 -97 547 -408 701 l-95 47 60 36 c208 127 346 300
388 490 25 111 15 288 -22 397 -81 237 -270 410 -530 486 -67 20 -102 23 -234
23 -117 0 -170 -4 -217 -17 -79 -22 -177 -66 -248 -112 l-57 -36 -41 34 c-57
46 -138 86 -222 109 -79 21 -306 32 -390 19z m281 -271 c91 -45 152 -132 190
-275 27 -99 27 -429 1 -524 -54 -192 -143 -271 -305 -271 -238 0 -364 150
-391 466 -27 320 58 554 226 618 60 23 74 25 148 20 51 -3 87 -12 131 -34z"/>
<path d="M185580 130383 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M190660 130381 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M175595 127170 c-176 -30 -340 -116 -470 -246 -107 -108 -167 -207
-216 -364 -31 -99 -33 -114 -33 -250 0 -136 2 -151 33 -250 49 -157 109 -256
216 -364 108 -108 210 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 300 95 498 290 588 582 123 395 -61 843 -422 1024 -131 65 -238 92 -381 96
-69 1 -147 -1 -175 -6z"/>
<path d="M180320 123291 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63
-66 100 -115 116 -152 50 -117 51 -134 51 -921 0 -764 6 -902 42 -1055 74
-317 288 -547 592 -637 95 -29 111 -30 286 -31 174 -1 191 0 290 27 467 126
736 543 690 1069 -44 509 -342 801 -860 846 -211 18 -349 -16 -509 -123 -30
-20 -50 -31 -44 -24 44 59 194 242 227 276 23 24 54 51 70 59 27 14 31 14 44
-3 8 -11 19 -32 24 -47 10 -28 13 -29 57 -22 25 4 49 9 53 11 18 11 49 123 49
176 1 110 -54 160 -176 162 -78 1 -111 -12 -176 -71 -66 -60 -200 -250 -225
-322 -11 -31 -13 10 -14 285 0 345 -2 362 -56 459 -31 55 -115 138 -172 170
-102 57 -191 66 -342 36z m1115 -1261 c256 -37 413 -229 466 -575 16 -102 16
-370 0 -455 -44 -238 -141 -368 -315 -422 -100 -30 -243 -22 -336 20 -178 80
-293 271 -340 562 -6 36 -14 188 -17 338 l-6 273 54 56 c100 102 243 184 355
202 67 12 61 12 139 1z"/>
<path d="M179080 123280 c-302 -38 -518 -236 -602 -552 -22 -83 -22 -85 -25
-1215 l-4 -1133 211 0 210 0 0 523 0 524 68 46 c175 120 355 162 519 121 160
-40 259 -150 293 -327 11 -54 11 -90 2 -185 -19 -198 -87 -377 -225 -600 l-70
-113 23 -24 22 -24 82 30 c257 95 443 264 547 496 49 109 64 192 63 338 -1
112 -5 140 -28 203 -81 231 -268 394 -530 464 -122 32 -342 32 -446 -1 -84
-26 -179 -75 -256 -133 -28 -21 -54 -38 -57 -38 -4 0 -7 46 -7 103 l0 103 123
17 c459 63 802 285 912 591 25 68 29 93 29 190 0 82 -4 125 -18 166 -69 208
-240 354 -481 410 -94 22 -263 32 -355 20z m188 -245 c91 -12 177 -76 221
-163 52 -103 54 -286 5 -384 -52 -104 -157 -194 -304 -261 -64 -29 -290 -107
-311 -107 -19 0 -6 571 15 643 30 108 94 199 172 247 35 22 106 39 139 34 11
-1 39 -5 63 -9z"/>
<path d="M186840 122830 c-171 -26 -303 -130 -346 -272 -25 -83 -15 -197 25
-275 30 -60 117 -151 184 -192 20 -12 37 -26 37 -29 -1 -4 -21 -23 -46 -42
-69 -54 -151 -151 -183 -220 -37 -78 -46 -144 -31 -223 33 -177 171 -284 378
-295 213 -11 378 71 454 226 29 59 33 76 33 147 -1 66 -5 91 -28 140 -38 81
-73 131 -111 155 -38 24 -30 25 39 5 241 -71 476 -428 558 -850 30 -151 32
-535 4 -695 -49 -282 -177 -543 -329 -673 -271 -232 -706 -249 -1014 -39 -231
156 -409 442 -480 772 -109 503 2 1015 284 1311 l44 47 -31 7 c-42 9 -141 -3
-217 -26 -68 -21 -162 -78 -230 -141 -149 -137 -291 -397 -344 -628 -28 -122
-38 -358 -21 -496 78 -635 520 -1117 1128 -1230 118 -22 378 -29 501 -14 348
42 635 191 856 445 212 244 323 513 357 865 32 341 -39 667 -205 939 -223 366
-562 591 -926 613 l-45 3 45 24 c132 69 189 184 169 343 -19 150 -114 256
-261 287 -69 15 -189 20 -248 11z m172 -282 c35 -24 52 -85 43 -154 -7 -59
-51 -155 -91 -199 l-27 -29 -50 54 c-68 74 -97 138 -97 217 0 55 4 67 28 94
44 49 137 57 194 17z m-14 -716 c38 -79 45 -101 44 -152 -1 -96 -40 -146 -120
-157 -86 -12 -137 51 -130 162 4 68 36 142 96 224 44 60 42 62 110 -77z"/>
<path d="M177320 122440 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M183230 122270 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
-269 0 -149 3 -187 23 -260 77 -292 269 -563 518 -731 59 -40 80 -49 115 -49
39 0 49 5 96 53 70 71 70 95 1 162 -235 229 -355 664 -294 1063 27 175 63 259
147 338 77 73 110 89 188 88 107 -1 185 -56 236 -169 44 -95 55 -175 61 -423
l5 -233 35 -14 c45 -19 291 -20 343 -1 l35 13 6 214 c9 299 39 424 123 525 74
88 197 112 295 58 224 -121 317 -605 197 -1017 -47 -160 -154 -339 -268 -447
-49 -47 -58 -61 -57 -90 0 -31 7 -40 61 -79 76 -54 98 -52 200 17 93 63 235
134 363 183 55 20 109 41 119 45 14 5 17 4 12 -4 -4 -8 3 -16 19 -22 31 -12
145 -13 163 -2 7 5 21 57 31 117 l19 109 -22 18 c-63 53 -278 -16 -441 -141
l-70 -55 66 70 c223 235 321 482 304 764 -24 386 -237 684 -559 779 -97 29
-260 39 -337 21 -162 -37 -301 -137 -382 -272 l-34 -56 -25 52 c-89 180 -275
288 -494 285 -49 -1 -109 -5 -134 -9z"/>
<path d="M189420 122271 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M167348 121810 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
-11 -122 -52 -228 -89 -353 -125 -492 -188 -635 -287 -432 -299 -663 -723
-663 -1219 0 -445 182 -801 541 -1057 78 -56 101 -68 134 -68 36 0 47 6 93 53
72 73 71 89 -19 185 -173 185 -253 383 -279 685 -30 350 73 670 244 760 64 34
160 30 223 -9 86 -53 139 -160 162 -329 6 -42 11 -164 11 -271 l0 -194 36 -15
c27 -11 74 -15 174 -15 100 0 147 4 174 15 l36 15 0 103 c1 505 93 720 310
721 79 0 126 -21 194 -91 91 -92 139 -223 158 -429 34 -389 -77 -744 -302
-961 -54 -52 -60 -62 -60 -98 0 -37 4 -43 58 -80 78 -54 106 -51 192 23 408
349 585 685 566 1072 -12 256 -101 457 -273 621 -125 119 -267 177 -453 186
-129 6 -197 -7 -304 -57 -109 -52 -231 -174 -267 -267 -10 -26 -10 -25 -38 33
-61 129 -205 245 -349 279 -79 19 -230 17 -286 -4 -16 -7 -31 -9 -34 -6 -11
11 168 176 248 227 190 124 359 190 720 281 250 64 363 124 409 221 77 158
-60 268 -374 300 -59 6 -60 6 -77 -24z"/>
<path d="M168830 121829 c-75 -13 -169 -59 -226 -111 -103 -94 -148 -210 -142
-367 3 -85 7 -105 36 -163 59 -120 167 -196 299 -211 50 -6 51 -5 64 24 11 27
8 43 -22 137 -30 96 -34 119 -33 217 0 124 13 166 64 209 30 25 55 31 110 26
117 -10 209 -178 226 -414 6 -90 9 -102 33 -122 24 -21 36 -23 140 -24 96 0
119 3 146 20 32 20 32 20 39 122 19 288 96 421 241 420 122 -1 198 -77 231
-231 10 -48 14 -148 14 -374 l0 -308 -42 34 c-62 50 -132 82 -223 102 -117 26
-313 16 -451 -24 -314 -90 -541 -329 -626 -661 -27 -105 -30 -130 -30 -285 -1
-153 2 -180 26 -273 17 -65 43 -132 71 -183 52 -93 211 -279 294 -343 187
-144 377 -198 621 -175 393 37 657 254 752 619 22 84 22 97 25 910 4 731 2
833 -12 904 -51 252 -214 438 -441 504 -153 45 -319 35 -420 -24 -69 -40 -145
-122 -179 -192 l-30 -62 -29 57 c-37 75 -135 172 -207 205 -96 45 -198 57
-319 37z m959 -1274 c76 -26 154 -70 217 -122 l44 -37 0 -441 c-1 -473 -3
-499 -54 -610 -38 -83 -143 -185 -221 -214 -53 -20 -72 -22 -160 -18 -112 6
-165 23 -238 75 -88 63 -155 168 -195 307 -64 219 -68 555 -10 745 59 190 178
310 338 340 68 13 204 1 279 -25z"/>
<path d="M164680 120990 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M171340 120990 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M175505 120360 c-176 -30 -340 -116 -470 -246 -107 -108 -167 -207
-216 -364 -31 -99 -33 -114 -33 -250 0 -136 2 -151 33 -250 49 -157 109 -256
216 -364 108 -108 210 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 300 95 498 290 588 582 123 395 -61 843 -422 1024 -131 65 -238 92 -381 96
-69 1 -147 -1 -175 -6z"/>
<path d="M168075 118400 c-176 -30 -340 -116 -470 -246 -107 -108 -167 -207
-216 -364 -31 -99 -33 -114 -33 -250 0 -136 2 -151 33 -250 49 -157 109 -256
216 -364 108 -108 210 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 300 95 498 290 588 582 123 395 -61 843 -422 1024 -131 65 -238 92 -381 96
-69 1 -147 -1 -175 -6z"/>
<path d="M154488 118070 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
-11 -122 -52 -228 -89 -353 -125 -492 -188 -635 -287 -432 -299 -663 -723
-663 -1219 0 -445 182 -801 541 -1057 78 -56 101 -68 134 -68 36 0 47 6 93 53
72 73 71 89 -19 185 -173 185 -253 383 -279 685 -30 350 73 670 244 760 64 34
160 30 223 -9 86 -53 139 -160 162 -329 6 -42 11 -164 11 -271 l0 -194 36 -15
c27 -11 74 -15 174 -15 100 0 147 4 174 15 l36 15 0 103 c1 505 93 720 310
721 79 0 126 -21 194 -91 91 -92 139 -223 158 -429 34 -389 -77 -744 -302
-961 -54 -52 -60 -62 -60 -98 0 -37 4 -43 58 -80 78 -54 106 -51 192 23 408
349 585 685 566 1072 -12 256 -101 457 -273 621 -125 119 -267 177 -453 186
-129 6 -197 -7 -304 -57 -109 -52 -231 -174 -267 -267 -10 -26 -10 -25 -38 33
-61 129 -205 245 -349 279 -79 19 -230 17 -286 -4 -16 -7 -31 -9 -34 -6 -11
11 168 176 248 227 190 124 359 190 720 281 250 64 363 124 409 221 77 158
-60 268 -374 300 -59 6 -60 6 -77 -24z"/>
<path d="M155980 118089 c-75 -13 -169 -59 -226 -111 -103 -94 -148 -210 -142
-367 3 -85 7 -105 36 -163 59 -120 167 -196 299 -211 50 -6 51 -5 64 24 11 27
8 43 -22 137 -30 96 -34 119 -33 217 0 124 13 166 64 209 30 25 55 31 110 26
117 -10 209 -178 226 -414 6 -90 9 -102 33 -122 24 -21 36 -23 140 -24 96 0
119 3 146 20 32 20 32 20 39 122 19 288 96 421 241 420 122 -1 198 -77 231
-231 10 -48 14 -148 14 -374 l0 -308 -42 34 c-62 50 -132 82 -223 102 -117 26
-313 16 -451 -24 -314 -90 -541 -329 -626 -661 -27 -105 -30 -130 -30 -285 -1
-153 2 -180 26 -273 17 -65 43 -132 71 -183 52 -93 211 -279 294 -343 187
-144 377 -198 621 -175 393 37 657 254 752 619 22 84 22 97 25 910 4 731 2
833 -12 904 -51 252 -214 438 -441 504 -153 45 -319 35 -420 -24 -69 -40 -145
-122 -179 -192 l-30 -62 -29 57 c-37 75 -135 172 -207 205 -96 45 -198 57
-319 37z m959 -1274 c76 -26 154 -70 217 -122 l44 -37 0 -441 c-1 -473 -3
-499 -54 -610 -38 -83 -143 -185 -221 -214 -53 -20 -72 -22 -160 -18 -112 6
-165 23 -238 75 -88 63 -155 168 -195 307 -64 219 -68 555 -10 745 59 190 178
310 338 340 68 13 204 1 279 -25z"/>
<path d="M147590 117640 c-171 -26 -303 -130 -346 -272 -25 -83 -15 -197 25
-275 30 -60 117 -151 184 -192 20 -12 37 -26 37 -29 -1 -4 -21 -23 -46 -42
-69 -54 -151 -151 -183 -220 -37 -78 -46 -144 -31 -223 33 -177 171 -284 378
-295 213 -11 378 71 454 226 29 59 33 76 33 147 -1 66 -5 91 -28 140 -38 81
-73 131 -111 155 -38 24 -30 25 39 5 241 -71 476 -428 558 -850 30 -151 32
-535 4 -695 -49 -282 -177 -543 -329 -673 -271 -232 -706 -249 -1014 -39 -231
156 -409 442 -480 772 -109 503 2 1015 284 1311 l44 47 -31 7 c-42 9 -141 -3
-217 -26 -68 -21 -162 -78 -230 -141 -149 -137 -291 -397 -344 -628 -28 -122
-38 -358 -21 -496 78 -635 520 -1117 1128 -1230 118 -22 378 -29 501 -14 348
42 635 191 856 445 212 244 323 513 357 865 32 341 -39 667 -205 939 -223 366
-562 591 -926 613 l-45 3 45 24 c132 69 189 184 169 343 -19 150 -114 256
-261 287 -69 15 -189 20 -248 11z m172 -282 c35 -24 52 -85 43 -154 -7 -59
-51 -155 -91 -199 l-27 -29 -50 54 c-68 74 -97 138 -97 217 0 55 4 67 28 94
44 49 137 57 194 17z m-14 -716 c38 -79 45 -101 44 -152 -1 -96 -40 -146 -120
-157 -86 -12 -137 51 -130 162 4 68 36 142 96 224 44 60 42 62 110 -77z"/>
<path d="M161170 117640 c-171 -26 -303 -130 -346 -272 -25 -83 -15 -197 25
-275 30 -60 117 -151 184 -192 20 -12 37 -26 37 -29 -1 -4 -21 -23 -46 -42
-69 -54 -151 -151 -183 -220 -37 -78 -46 -144 -31 -223 33 -177 171 -284 378
-295 213 -11 378 71 454 226 29 59 33 76 33 147 -1 66 -5 91 -28 140 -38 81
-73 131 -111 155 -38 24 -30 25 39 5 241 -71 476 -428 558 -850 30 -151 32
-535 4 -695 -49 -282 -177 -543 -329 -673 -271 -232 -706 -249 -1014 -39 -231
156 -409 442 -480 772 -109 503 2 1015 284 1311 l44 47 -31 7 c-42 9 -141 -3
-217 -26 -68 -21 -162 -78 -230 -141 -149 -137 -291 -397 -344 -628 -28 -122
-38 -358 -21 -496 78 -635 520 -1117 1128 -1230 118 -22 378 -29 501 -14 348
42 635 191 856 445 212 244 323 513 357 865 32 341 -39 667 -205 939 -223 366
-562 591 -926 613 l-45 3 45 24 c132 69 189 184 169 343 -19 150 -114 256
-261 287 -69 15 -189 20 -248 11z m172 -282 c35 -24 52 -85 43 -154 -7 -59
-51 -155 -91 -199 l-27 -29 -50 54 c-68 74 -97 138 -97 217 0 55 4 67 28 94
44 49 137 57 194 17z m-14 -716 c38 -79 45 -101 44 -152 -1 -96 -40 -146 -120
-157 -86 -12 -137 51 -130 162 4 68 36 142 96 224 44 60 42 62 110 -77z"/>
<path d="M151820 117250 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M149847 117060 c-196 -85 -356 -202 -437 -320 -113 -165 -153 -325
-131 -528 20 -192 98 -348 228 -457 161 -134 380 -196 614 -175 171 16 298 67
373 150 l36 40 0 -502 c0 -555 -2 -579 -62 -690 -55 -103 -151 -183 -257 -214
-77 -22 -212 -22 -278 0 -114 38 -188 142 -220 308 -20 107 -12 309 19 455
l22 103 -34 35 -33 34 -46 -26 c-214 -123 -343 -270 -381 -432 -16 -69 -7
-217 17 -291 69 -210 261 -368 523 -430 77 -18 124 -22 250 -23 137 0 166 3
250 27 304 84 525 296 609 582 47 162 51 255 51 1318 l0 977 -22 29 -22 30
-172 0 -172 0 -21 -34 c-21 -33 -21 -44 -21 -518 l0 -484 -47 -45 c-115 -110
-218 -151 -382 -152 -87 0 -114 3 -152 20 -134 61 -197 181 -219 414 -11 118
-3 241 21 334 22 82 69 176 148 294 45 66 81 126 81 134 0 12 -50 67 -61 67
-2 -1 -35 -14 -72 -30z"/>
<path d="M158670 117083 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M163740 117081 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M171298 116070 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
-11 -122 -52 -228 -89 -353 -125 -492 -188 -635 -287 -432 -299 -663 -723
-663 -1219 0 -445 182 -801 541 -1057 78 -56 101 -68 134 -68 36 0 47 6 93 53
72 73 71 89 -19 185 -173 185 -253 383 -279 685 -30 350 73 670 244 760 64 34
160 30 223 -9 86 -53 139 -160 162 -329 6 -42 11 -164 11 -271 l0 -194 36 -15
c27 -11 74 -15 174 -15 100 0 147 4 174 15 l36 15 0 103 c1 505 93 720 310
721 79 0 126 -21 194 -91 91 -92 139 -223 158 -429 34 -389 -77 -744 -302
-961 -54 -52 -60 -62 -60 -98 0 -37 4 -43 58 -80 78 -54 106 -51 192 23 408
349 585 685 566 1072 -12 256 -101 457 -273 621 -125 119 -267 177 -453 186
-129 6 -197 -7 -304 -57 -109 -52 -231 -174 -267 -267 -10 -26 -10 -25 -38 33
-61 129 -205 245 -349 279 -79 19 -230 17 -286 -4 -16 -7 -31 -9 -34 -6 -11
11 168 176 248 227 190 124 359 190 720 281 250 64 363 124 409 221 77 158
-60 268 -374 300 -59 6 -60 6 -77 -24z"/>
<path d="M176775 116091 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
-1238 4 -779 4 -791 26 -884 80 -334 272 -542 577 -627 92 -25 114 -28 280
-28 176 0 182 1 279 33 302 98 520 344 604 681 23 94 26 125 26 290 1 163 -2
196 -23 280 -49 195 -155 366 -297 481 -86 70 -183 120 -305 155 -82 24 -112
27 -239 28 -128 1 -153 -2 -215 -23 -86 -29 -173 -79 -243 -138 l-53 -45 3
453 c4 477 7 511 49 524 39 13 147 -28 320 -120 199 -107 264 -133 362 -145
250 -29 442 109 507 365 15 60 17 82 9 98 -25 47 -26 47 -123 6 -202 -84 -382
-114 -547 -89 -46 6 -179 36 -296 66 -222 56 -305 68 -388 55z m732 -1278 c75
-30 155 -104 196 -180 41 -76 73 -218 87 -378 38 -436 -80 -753 -320 -855 -76
-32 -220 -33 -299 -1 -104 42 -175 111 -234 226 -54 104 -57 133 -57 595 l0
426 43 36 c101 84 214 141 312 158 79 13 202 1 272 -27z"/>
<path d="M172740 115991 c-49 -10 -75 -26 -101 -63 -31 -43 -30 -132 4 -263
48 -185 45 -377 -8 -551 -28 -93 -26 -120 10 -134 43 -16 206 52 290 121 101
83 149 187 143 315 -3 73 -8 91 -46 166 -24 47 -61 104 -83 127 -22 22 -38 41
-35 41 40 0 316 -68 362 -89 118 -55 154 -155 154 -431 l0 -165 -98 -40 c-406
-165 -657 -418 -738 -745 -29 -117 -26 -373 5 -500 81 -320 283 -524 606 -613
104 -29 120 -30 300 -31 188 0 191 0 295 33 135 42 253 108 351 196 152 136
249 288 304 475 26 86 29 109 28 250 0 127 -4 170 -21 237 -73 273 -225 461
-531 658 l-71 45 0 192 c-1 106 -5 223 -9 260 -28 217 -211 367 -530 435 -122
26 -492 83 -526 82 -11 -1 -36 -4 -55 -8z m950 -1224 c202 -182 280 -303 326
-505 24 -102 23 -344 0 -452 -46 -209 -141 -345 -288 -410 -108 -47 -259 -48
-360 0 -135 63 -269 252 -316 445 -26 108 -23 354 6 460 62 223 200 389 431
521 42 24 78 44 81 44 3 0 57 -46 120 -103z"/>
<path d="M185021 115440 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z"/>
<path d="M187455 115431 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
-1238 4 -779 4 -791 26 -884 80 -334 272 -542 577 -627 92 -25 114 -28 280
-28 176 0 182 1 279 33 302 98 520 344 604 681 23 94 26 125 26 290 1 163 -2
196 -23 280 -49 195 -155 366 -297 481 -86 70 -183 120 -305 155 -82 24 -112
27 -239 28 -128 1 -153 -2 -215 -23 -86 -29 -173 -79 -243 -138 l-53 -45 3
453 c4 477 7 511 49 524 39 13 147 -28 320 -120 199 -107 264 -133 362 -145
250 -29 442 109 507 365 15 60 17 82 9 98 -25 47 -26 47 -123 6 -202 -84 -382
-114 -547 -89 -46 6 -179 36 -296 66 -222 56 -305 68 -388 55z m732 -1278 c75
-30 155 -104 196 -180 41 -76 73 -218 87 -378 38 -436 -80 -753 -320 -855 -76
-32 -220 -33 -299 -1 -104 42 -175 111 -234 226 -54 104 -57 133 -57 595 l0
426 43 36 c101 84 214 141 312 158 79 13 202 1 272 -27z"/>
<path d="M168630 115250 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M175310 115250 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M166420 115091 c-328 -39 -570 -289 -570 -586 0 -38 7 -94 14 -123
40 -149 174 -272 330 -304 61 -12 90 -7 123 20 l21 19 -33 99 c-60 179 -65
385 -13 506 73 170 322 186 430 28 63 -92 71 -138 76 -457 3 -232 1 -283 -10
-283 -18 0 -212 -94 -273 -133 -270 -169 -445 -381 -516 -622 -21 -71 -24
-100 -24 -250 0 -146 4 -183 24 -265 79 -313 290 -527 603 -612 105 -28 125
-31 293 -32 160 -1 189 2 259 22 178 51 307 139 478 325 130 141 184 227 224
354 25 79 27 103 28 243 0 119 -4 170 -17 220 -78 286 -248 496 -563 698 l-81
52 -6 278 c-4 259 -6 282 -30 357 -68 222 -235 377 -460 429 -81 19 -223 27
-307 17z m651 -1346 c267 -233 363 -431 362 -750 -1 -149 -11 -231 -45 -335
-69 -216 -221 -330 -444 -331 -74 0 -103 4 -146 22 -348 148 -482 711 -263
1104 45 80 159 203 239 258 72 49 188 116 198 114 4 -1 48 -38 99 -82z"/>
<path d="M179350 115081 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M189800 114420 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
-269 0 -149 3 -187 23 -260 77 -292 269 -563 518 -731 59 -40 80 -49 115 -49
39 0 49 5 96 53 70 71 70 95 1 162 -235 229 -355 664 -294 1063 27 175 63 259
147 338 77 73 110 89 188 88 107 -1 185 -56 236 -169 44 -95 55 -175 61 -423
l5 -233 35 -14 c45 -19 291 -20 343 -1 l35 13 6 214 c9 299 39 424 123 525 74
88 197 112 295 58 224 -121 317 -605 197 -1017 -47 -160 -154 -339 -268 -447
-49 -47 -58 -61 -57 -90 0 -31 7 -40 61 -79 76 -54 98 -52 200 17 93 63 235
134 363 183 55 20 109 41 119 45 14 5 17 4 12 -4 -4 -8 3 -16 19 -22 31 -12
145 -13 163 -2 12 8 42 151 42 203 0 111 -253 55 -455 -100 l-70 -55 66 70
c223 235 321 482 304 764 -24 386 -237 684 -559 779 -97 29 -260 39 -337 21
-162 -37 -301 -137 -382 -272 l-34 -56 -25 52 c-89 180 -275 288 -494 285 -49
-1 -109 -5 -134 -9z"/>
<path d="M145001 114110 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z"/>
<path d="M151700 114111 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63
-66 100 -115 116 -152 50 -117 51 -134 51 -921 0 -764 6 -902 42 -1055 74
-317 288 -547 592 -637 95 -29 111 -30 286 -31 174 -1 191 0 290 27 467 126
736 543 690 1069 -44 509 -342 801 -860 846 -211 18 -349 -16 -509 -123 -30
-20 -50 -31 -44 -24 44 59 194 242 227 276 23 24 54 51 70 59 27 14 31 14 44
-3 8 -11 19 -32 24 -47 10 -28 13 -29 57 -22 25 4 49 9 53 11 18 11 49 123 49
176 1 110 -54 160 -176 162 -78 1 -111 -12 -176 -71 -66 -60 -200 -250 -225
-322 -11 -31 -13 10 -14 285 0 345 -2 362 -56 459 -31 55 -115 138 -172 170
-102 57 -191 66 -342 36z m1115 -1261 c256 -37 413 -229 466 -575 16 -102 16
-370 0 -455 -44 -238 -141 -368 -315 -422 -100 -30 -243 -22 -336 20 -178 80
-293 271 -340 562 -6 36 -14 188 -17 338 l-6 273 54 56 c100 102 243 184 355
202 67 12 61 12 139 1z"/>
<path d="M141498 114080 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
-11 -122 -52 -228 -89 -353 -125 -492 -188 -635 -287 -432 -299 -663 -723
-663 -1219 0 -445 182 -801 541 -1057 78 -56 101 -68 134 -68 36 0 47 6 93 53
72 73 71 89 -19 185 -173 185 -253 383 -279 685 -30 350 73 670 244 760 64 34
160 30 223 -9 86 -53 139 -160 162 -329 6 -42 11 -164 11 -271 l0 -194 36 -15
c27 -11 74 -15 174 -15 100 0 147 4 174 15 l36 15 0 103 c1 505 93 720 310
721 79 0 126 -21 194 -91 91 -92 139 -223 158 -429 34 -389 -77 -744 -302
-961 -54 -52 -60 -62 -60 -98 0 -37 4 -43 58 -80 78 -54 106 -51 192 23 408
349 585 685 566 1072 -12 256 -101 457 -273 621 -125 119 -267 177 -453 186
-129 6 -197 -7 -304 -57 -109 -52 -231 -174 -267 -267 -10 -26 -10 -25 -38 33
-61 129 -205 245 -349 279 -79 19 -230 17 -286 -4 -16 -7 -31 -9 -34 -6 -11
11 168 176 248 227 190 124 359 190 720 281 250 64 363 124 409 221 77 158
-60 268 -374 300 -59 6 -60 6 -77 -24z"/>
<path d="M87065 114071 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
-1238 4 -779 4 -791 26 -884 80 -334 272 -542 577 -627 92 -25 114 -28 280
-28 176 0 182 1 279 33 302 98 520 344 604 681 23 94 26 125 26 290 1 163 -2
196 -23 280 -49 195 -155 366 -297 481 -86 70 -183 120 -305 155 -82 24 -112
27 -239 28 -128 1 -153 -2 -215 -23 -86 -29 -173 -79 -243 -138 l-53 -45 3
453 c4 477 7 511 49 524 39 13 147 -28 320 -120 199 -107 264 -133 362 -145
250 -29 442 109 507 365 15 60 17 82 9 98 -25 47 -26 47 -123 6 -202 -84 -382
-114 -547 -89 -46 6 -179 36 -296 66 -222 56 -305 68 -388 55z m732 -1278 c75
-30 155 -104 196 -180 41 -76 73 -218 87 -378 38 -436 -80 -753 -320 -855 -76
-32 -220 -33 -299 -1 -104 42 -175 111 -234 226 -54 104 -57 133 -57 595 l0
426 43 36 c101 84 214 141 312 158 79 13 202 1 272 -27z"/>
<path d="M83040 113971 c-49 -10 -75 -26 -101 -63 -31 -43 -30 -132 4 -263 48
-185 45 -377 -8 -551 -28 -93 -26 -120 10 -134 43 -16 206 52 290 121 101 83
149 187 143 315 -3 73 -8 91 -46 166 -24 47 -61 104 -83 127 -22 22 -38 41
-35 41 40 0 316 -68 362 -89 118 -55 154 -155 154 -431 l0 -165 -98 -40 c-406
-165 -657 -418 -738 -745 -29 -117 -26 -373 5 -500 81 -320 283 -524 606 -613
104 -29 120 -30 300 -31 188 0 191 0 295 33 135 42 253 108 351 196 152 136
249 288 304 475 26 86 29 109 28 250 0 127 -4 170 -21 237 -73 273 -225 461
-531 658 l-71 45 0 192 c-1 106 -5 223 -9 260 -28 217 -211 367 -530 435 -122
26 -492 83 -526 82 -11 -1 -36 -4 -55 -8z m950 -1224 c202 -182 280 -303 326
-505 24 -102 23 -344 0 -452 -46 -209 -141 -345 -288 -410 -108 -47 -259 -48
-360 0 -135 63 -269 252 -316 445 -26 108 -23 354 6 460 62 223 200 389 431
521 42 24 78 44 81 44 3 0 57 -46 120 -103z"/>
<path d="M164345 113730 c-176 -30 -340 -116 -470 -246 -107 -108 -167 -207
-216 -364 -31 -99 -33 -114 -33 -250 0 -136 2 -151 33 -250 49 -157 109 -256
216 -364 108 -108 210 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 300 95 498 290 588 582 123 395 -61 843 -422 1024 -131 65 -238 92 -381 96
-69 1 -147 -1 -175 -6z"/>
<path d="M81770 113230 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M85610 113230 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M157645 113160 c-176 -30 -340 -116 -470 -246 -107 -108 -167 -207
-216 -364 -31 -99 -33 -114 -33 -250 0 -136 2 -151 33 -250 49 -157 109 -256
216 -364 108 -108 210 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 300 95 498 290 588 582 123 395 -61 843 -422 1024 -131 65 -238 92 -381 96
-69 1 -147 -1 -175 -6z"/>
<path d="M135470 113101 c-328 -39 -570 -289 -570 -586 0 -38 7 -94 14 -123
40 -149 174 -272 330 -304 61 -12 90 -7 123 20 l21 19 -33 99 c-60 179 -65
385 -13 506 73 170 322 186 430 28 63 -92 71 -138 76 -457 3 -232 1 -283 -10
-283 -18 0 -212 -94 -273 -133 -270 -169 -445 -381 -516 -622 -21 -71 -24
-100 -24 -250 0 -146 4 -183 24 -265 79 -313 290 -527 603 -612 105 -28 125
-31 293 -32 160 -1 189 2 259 22 178 51 307 139 478 325 130 141 184 227 224
354 25 79 27 103 28 243 0 119 -4 170 -17 220 -78 286 -248 496 -563 698 l-81
52 -6 278 c-4 259 -6 282 -30 357 -68 222 -235 377 -460 429 -81 19 -223 27
-307 17z m651 -1346 c267 -233 363 -431 362 -750 -1 -149 -11 -231 -45 -335
-69 -216 -221 -330 -444 -331 -74 0 -103 4 -146 22 -348 148 -482 711 -263
1104 45 80 159 203 239 258 72 49 188 116 198 114 4 -1 48 -38 99 -82z"/>
<path d="M137710 113090 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
-269 0 -149 3 -187 23 -260 77 -292 269 -563 518 -731 59 -40 80 -49 115 -49
39 0 49 5 96 53 70 71 70 95 1 162 -235 229 -355 664 -294 1063 27 175 63 259
147 338 77 73 110 89 188 88 107 -1 185 -56 236 -169 44 -95 55 -175 61 -423
l5 -233 35 -14 c45 -19 291 -20 343 -1 l35 13 6 214 c9 299 39 424 123 525 74
88 197 112 295 58 224 -121 317 -605 197 -1017 -47 -160 -154 -339 -268 -447
-49 -47 -58 -61 -57 -90 0 -31 7 -40 61 -79 76 -54 98 -52 200 17 93 63 235
134 363 183 55 20 109 41 119 45 14 5 17 4 12 -4 -4 -8 3 -16 19 -22 31 -12
145 -13 163 -2 7 5 21 57 31 117 l19 109 -22 18 c-63 53 -278 -16 -441 -141
l-70 -55 66 70 c223 235 321 482 304 764 -24 386 -237 684 -559 779 -97 29
-260 39 -337 21 -162 -37 -301 -137 -382 -272 l-34 -56 -25 52 c-89 180 -275
288 -494 285 -49 -1 -109 -5 -134 -9z"/>
<path d="M143680 113091 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M150380 113091 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M154760 113093 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M89410 113060 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
-269 0 -149 3 -187 23 -260 77 -292 269 -563 518 -731 59 -40 80 -49 115 -49
39 0 49 5 96 53 70 71 70 95 1 162 -235 229 -355 664 -294 1063 27 175 63 259
147 338 77 73 110 89 188 88 107 -1 185 -56 236 -169 44 -95 55 -175 61 -423
l5 -233 35 -14 c45 -19 291 -20 343 -1 l35 13 6 214 c9 299 39 424 123 525 74
88 197 112 295 58 224 -121 317 -605 197 -1017 -47 -160 -154 -339 -268 -447
-49 -47 -58 -61 -57 -90 0 -31 7 -40 61 -79 76 -54 98 -52 200 17 93 63 235
134 363 183 55 20 109 41 119 45 14 5 17 4 12 -4 -4 -8 3 -16 19 -22 31 -12
145 -13 163 -2 12 8 42 151 42 203 0 111 -253 55 -455 -100 l-70 -55 66 70
c223 235 321 482 304 764 -24 386 -237 684 -559 779 -97 29 -260 39 -337 21
-162 -37 -301 -137 -382 -272 l-34 -56 -25 52 c-89 180 -275 288 -494 285 -49
-1 -109 -5 -134 -9z"/>
<path d="M148180 113010 c-98 -193 -66 -324 110 -452 19 -15 98 -61 175 -103
158 -87 195 -118 231 -192 23 -46 26 -62 23 -136 -3 -71 -9 -93 -38 -151 -38
-75 -77 -114 -152 -152 -44 -22 -68 -26 -177 -31 -101 -4 -134 -9 -159 -25
-32 -19 -33 -21 -33 -90 0 -55 4 -76 21 -99 20 -28 23 -29 102 -29 184 -1 280
-33 371 -126 60 -62 97 -130 123 -224 24 -88 24 -306 -1 -405 -48 -196 -181
-357 -344 -418 -48 -17 -79 -21 -187 -20 -119 0 -137 3 -210 30 -102 38 -209
108 -270 175 -118 130 -205 311 -246 513 -31 149 -33 491 -5 660 66 399 239
810 452 1072 41 51 41 53 31 97 -6 25 -16 46 -23 46 -7 0 -53 -13 -104 -30
-335 -109 -564 -403 -705 -904 -62 -221 -78 -348 -79 -631 -1 -278 9 -359 66
-538 135 -427 471 -702 913 -747 387 -40 761 89 1003 345 152 160 213 312 213
532 1 155 -37 275 -132 414 -74 109 -235 235 -352 275 l-48 16 92 45 c216 106
332 298 314 520 -10 134 -65 228 -183 315 -30 22 -154 89 -276 148 -126 62
-239 123 -263 144 -39 34 -113 159 -113 191 0 11 -50 25 -92 25 -12 0 -28 -21
-48 -60z"/>
<path d="M184445 112430 c-176 -30 -340 -116 -470 -246 -107 -108 -167 -207
-216 -364 -31 -99 -33 -114 -33 -250 0 -136 2 -151 33 -250 49 -157 109 -256
216 -364 108 -108 210 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 300 95 498 290 588 582 123 395 -61 843 -422 1024 -131 65 -238 92 -381 96
-69 1 -147 -1 -175 -6z"/>
<path d="M161245 111870 c-176 -30 -340 -116 -470 -246 -107 -108 -167 -207
-216 -364 -31 -99 -33 -114 -33 -250 0 -136 2 -151 33 -250 49 -157 109 -256
216 -364 108 -108 210 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 300 95 498 290 588 582 123 395 -61 843 -422 1024 -131 65 -238 92 -381 96
-69 1 -147 -1 -175 -6z"/>
<path d="M162911 111850 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z"/>
<path d="M170525 111841 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
-1238 4 -779 4 -791 26 -884 80 -334 272 -542 577 -627 92 -25 114 -28 280
-28 176 0 182 1 279 33 302 98 520 344 604 681 23 94 26 125 26 290 1 163 -2
196 -23 280 -49 195 -155 366 -297 481 -86 70 -183 120 -305 155 -82 24 -112
27 -239 28 -128 1 -153 -2 -215 -23 -86 -29 -173 -79 -243 -138 l-53 -45 3
453 c4 477 7 511 49 524 39 13 147 -28 320 -120 199 -107 264 -133 362 -145
250 -29 442 109 507 365 15 60 17 82 9 98 -25 47 -26 47 -123 6 -202 -84 -382
-114 -547 -89 -46 6 -179 36 -296 66 -222 56 -305 68 -388 55z m732 -1278 c75
-30 155 -104 196 -180 41 -76 73 -218 87 -378 38 -436 -80 -753 -320 -855 -76
-32 -220 -33 -299 -1 -104 42 -175 111 -234 226 -54 104 -57 133 -57 595 l0
426 43 36 c101 84 214 141 312 158 79 13 202 1 272 -27z"/>
<path d="M165900 110831 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M167950 110830 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
-269 0 -149 3 -187 23 -260 77 -292 269 -563 518 -731 59 -40 80 -49 115 -49
39 0 49 5 96 53 70 71 70 95 1 162 -235 229 -355 664 -294 1063 27 175 63 259
147 338 77 73 110 89 188 88 107 -1 185 -56 236 -169 44 -95 55 -175 61 -423
l5 -233 35 -14 c45 -19 291 -20 343 -1 l35 13 6 214 c9 299 39 424 123 525 74
88 197 112 295 58 224 -121 317 -605 197 -1017 -47 -160 -154 -339 -268 -447
-49 -47 -58 -61 -57 -90 0 -31 7 -40 61 -79 76 -54 98 -52 200 17 93 63 235
134 363 183 55 20 109 41 119 45 14 5 17 4 12 -4 -4 -8 3 -16 19 -22 31 -12
145 -13 163 -2 7 5 21 57 31 117 l19 109 -22 18 c-63 53 -278 -16 -441 -141
l-70 -55 66 70 c223 235 321 482 304 764 -24 386 -237 684 -559 779 -97 29
-260 39 -337 21 -162 -37 -301 -137 -382 -272 l-34 -56 -25 52 c-89 180 -275
288 -494 285 -49 -1 -109 -5 -134 -9z"/>
<path d="M173110 110831 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M80410 110773 c-71 -9 -224 -64 -308 -109 -64 -35 -109 -70 -177
-139 -107 -106 -165 -203 -216 -360 -32 -95 -33 -107 -33 -255 0 -148 1 -160
33 -255 51 -157 109 -254 216 -360 106 -107 207 -168 362 -218 93 -30 106 -31
253 -31 142 0 162 2 245 28 180 57 318 146 425 274 142 171 220 424 198 645
-30 295 -208 561 -457 687 -131 65 -238 92 -381 95 -69 2 -141 1 -160 -2z"/>
<path d="M158515 110330 c-176 -30 -340 -116 -470 -246 -107 -108 -167 -207
-216 -364 -31 -99 -33 -114 -33 -250 0 -136 2 -151 33 -250 49 -157 109 -256
216 -364 108 -108 210 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 300 95 498 290 588 582 123 395 -61 843 -422 1024 -131 65 -238 92 -381 96
-69 1 -147 -1 -175 -6z"/>
<path d="M154815 109590 c-176 -30 -340 -116 -470 -246 -107 -108 -167 -207
-216 -364 -31 -99 -33 -114 -33 -250 0 -136 2 -151 33 -250 49 -157 109 -256
216 -364 108 -108 210 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 300 95 498 290 588 582 123 395 -61 843 -422 1024 -131 65 -238 92 -381 96
-69 1 -147 -1 -175 -6z"/>
<path d="M123940 109091 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63
-66 100 -115 116 -152 50 -117 51 -134 51 -921 0 -764 6 -902 42 -1055 74
-317 288 -547 592 -637 95 -29 111 -30 286 -31 174 -1 191 0 290 27 467 126
736 543 690 1069 -44 509 -342 801 -860 846 -211 18 -349 -16 -509 -123 -30
-20 -50 -31 -44 -24 44 59 194 242 227 276 23 24 54 51 70 59 27 14 31 14 44
-3 8 -11 19 -32 24 -47 10 -28 13 -29 57 -22 25 4 49 9 53 11 18 11 49 123 49
176 1 110 -54 160 -176 162 -78 1 -111 -12 -176 -71 -66 -60 -200 -250 -225
-322 -11 -31 -13 10 -14 285 0 345 -2 362 -56 459 -31 55 -115 138 -172 170
-102 57 -191 66 -342 36z m1115 -1261 c256 -37 413 -229 466 -575 16 -102 16
-370 0 -455 -44 -238 -141 -368 -315 -422 -100 -30 -243 -22 -336 20 -178 80
-293 271 -340 562 -6 36 -14 188 -17 338 l-6 273 54 56 c100 102 243 184 355
202 67 12 61 12 139 1z"/>
<path d="M137681 109090 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z"/>
<path d="M130808 109060 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
-11 -122 -52 -228 -89 -353 -125 -492 -188 -635 -287 -432 -299 -663 -723
-663 -1219 0 -445 182 -801 541 -1057 78 -56 101 -68 134 -68 36 0 47 6 93 53
72 73 71 89 -19 185 -173 185 -253 383 -279 685 -30 350 73 670 244 760 64 34
160 30 223 -9 86 -53 139 -160 162 -329 6 -42 11 -164 11 -271 l0 -194 36 -15
c27 -11 74 -15 174 -15 100 0 147 4 174 15 l36 15 0 103 c1 505 93 720 310
721 79 0 126 -21 194 -91 91 -92 139 -223 158 -429 34 -389 -77 -744 -302
-961 -54 -52 -60 -62 -60 -98 0 -37 4 -43 58 -80 78 -54 106 -51 192 23 408
349 585 685 566 1072 -12 256 -101 457 -273 621 -125 119 -267 177 -453 186
-129 6 -197 -7 -304 -57 -109 -52 -231 -174 -267 -267 -10 -26 -10 -25 -38 33
-61 129 -205 245 -349 279 -79 19 -230 17 -286 -4 -16 -7 -31 -9 -34 -6 -11
11 168 176 248 227 190 124 359 190 720 281 250 64 363 124 409 221 77 158
-60 268 -374 300 -59 6 -60 6 -77 -24z"/>
<path d="M171181 108760 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z"/>
<path d="M164218 108730 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
-11 -122 -52 -228 -89 -353 -125 -492 -188 -635 -287 -432 -299 -663 -723
-663 -1219 0 -445 182 -801 541 -1057 78 -56 101 -68 134 -68 36 0 47 6 93 53
72 73 71 89 -19 185 -173 185 -253 383 -279 685 -30 350 73 670 244 760 64 34
160 30 223 -9 86 -53 139 -160 162 -329 6 -42 11 -164 11 -271 l0 -194 36 -15
c27 -11 74 -15 174 -15 100 0 147 4 174 15 l36 15 0 103 c1 505 93 720 310
721 79 0 126 -21 194 -91 91 -92 139 -223 158 -429 34 -389 -77 -744 -302
-961 -54 -52 -60 -62 -60 -98 0 -37 4 -43 58 -80 78 -54 106 -51 192 23 408
349 585 685 566 1072 -12 256 -101 457 -273 621 -125 119 -267 177 -453 186
-129 6 -197 -7 -304 -57 -109 -52 -231 -174 -267 -267 -10 -26 -10 -25 -38 33
-61 129 -205 245 -349 279 -79 19 -230 17 -286 -4 -16 -7 -31 -9 -34 -6 -11
11 168 176 248 227 190 124 359 190 720 281 250 64 363 124 409 221 77 158
-60 268 -374 300 -59 6 -60 6 -77 -24z"/>
<path d="M180525 108751 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
-1238 4 -779 4 -791 26 -884 80 -334 272 -542 577 -627 92 -25 114 -28 280
-28 176 0 182 1 279 33 302 98 520 344 604 681 23 94 26 125 26 290 1 163 -2
196 -23 280 -49 195 -155 366 -297 481 -86 70 -183 120 -305 155 -82 24 -112
27 -239 28 -128 1 -153 -2 -215 -23 -86 -29 -173 -79 -243 -138 l-53 -45 3
453 c4 477 7 511 49 524 39 13 147 -28 320 -120 199 -107 264 -133 362 -145
250 -29 442 109 507 365 15 60 17 82 9 98 -25 47 -26 47 -123 6 -202 -84 -382
-114 -547 -89 -46 6 -179 36 -296 66 -222 56 -305 68 -388 55z m732 -1278 c75
-30 155 -104 196 -180 41 -76 73 -218 87 -378 38 -436 -80 -753 -320 -855 -76
-32 -220 -33 -299 -1 -104 42 -175 111 -234 226 -54 104 -57 133 -57 595 l0
426 43 36 c101 84 214 141 312 158 79 13 202 1 272 -27z"/>
<path d="M176500 108651 c-49 -10 -75 -26 -101 -63 -31 -43 -30 -132 4 -263
48 -185 45 -377 -8 -551 -28 -93 -26 -120 10 -134 43 -16 206 52 290 121 101
83 149 187 143 315 -3 73 -8 91 -46 166 -24 47 -61 104 -83 127 -22 22 -38 41
-35 41 40 0 316 -68 362 -89 118 -55 154 -155 154 -431 l0 -165 -98 -40 c-406
-165 -657 -418 -738 -745 -29 -117 -26 -373 5 -500 81 -320 283 -524 606 -613
104 -29 120 -30 300 -31 188 0 191 0 295 33 135 42 253 108 351 196 152 136
249 288 304 475 26 86 29 109 28 250 0 127 -4 170 -21 237 -73 273 -225 461
-531 658 l-71 45 0 192 c-1 106 -5 223 -9 260 -28 217 -211 367 -530 435 -122
26 -492 83 -526 82 -11 -1 -36 -4 -55 -8z m950 -1224 c202 -182 280 -303 326
-505 24 -102 23 -344 0 -452 -46 -209 -141 -345 -288 -410 -108 -47 -259 -48
-360 0 -135 63 -269 252 -316 445 -26 108 -23 354 6 460 62 223 200 389 431
521 42 24 78 44 81 44 3 0 57 -46 120 -103z"/>
<path d="M152335 108380 c-176 -30 -340 -116 -470 -246 -107 -108 -167 -207
-216 -364 -31 -99 -33 -114 -33 -250 0 -136 2 -151 33 -250 49 -157 109 -256
216 -364 108 -108 210 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 300 95 498 290 588 582 123 395 -61 843 -422 1024 -131 65 -238 92 -381 96
-69 1 -147 -1 -175 -6z"/>
<path d="M127435 108074 c-112 -18 -233 -87 -305 -176 -50 -62 -91 -155 -178
-399 -60 -168 -90 -221 -138 -244 -109 -52 -218 39 -245 206 -20 118 2 228 78
391 45 96 45 96 27 123 -18 25 -22 26 -101 22 -70 -3 -93 -9 -155 -40 -118
-58 -216 -170 -259 -295 -27 -77 -27 -209 1 -300 70 -235 264 -362 550 -362
156 0 270 34 372 111 117 88 171 181 249 436 82 265 129 318 250 282 55 -17
104 -73 130 -149 20 -59 23 -88 27 -315 l4 -251 30 -17 c24 -14 56 -17 175
-17 129 0 149 2 178 20 l33 20 4 268 c4 261 5 268 30 323 30 67 75 104 142
119 107 24 191 -18 236 -120 l25 -55 0 -840 c0 -837 0 -840 -23 -920 -62 -226
-208 -390 -427 -483 -113 -48 -228 -71 -390 -78 -309 -14 -563 63 -716 217
-81 82 -109 146 -116 269 -6 101 11 177 64 293 34 72 35 80 24 117 -14 46 -24
48 -130 26 -166 -36 -318 -160 -375 -306 -64 -162 -27 -393 86 -537 153 -194
448 -300 903 -323 449 -22 797 50 1070 220 223 139 355 320 419 575 33 132 38
268 34 1025 -4 718 -5 747 -24 805 -36 104 -70 160 -135 218 -73 67 -123 91
-249 124 -85 22 -109 24 -235 20 -202 -7 -304 -47 -401 -155 l-41 -46 -27 41
c-36 55 -95 100 -168 130 -49 19 -83 25 -167 28 -58 2 -119 1 -136 -1z"/>
<path d="M132920 108071 c-36 -5 -107 -20 -159 -35 -318 -92 -555 -334 -646
-661 -26 -92 -28 -115 -29 -280 -1 -158 2 -192 23 -275 47 -188 137 -340 279
-469 95 -87 212 -151 349 -192 104 -31 114 -32 293 -33 173 0 192 2 285 28
265 75 485 254 600 490 139 285 137 693 -6 942 -16 28 -29 54 -29 57 0 10 123
93 180 122 121 61 220 79 325 60 147 -27 290 -190 364 -415 81 -246 64 -578
-39 -780 -77 -149 -185 -260 -360 -369 -82 -51 -100 -67 -100 -87 0 -37 34
-66 73 -60 18 3 59 8 92 11 96 10 217 51 309 106 64 38 114 80 198 168 188
193 275 346 320 561 41 195 5 467 -85 646 -105 209 -305 375 -529 441 -84 24
-109 27 -253 27 -134 0 -173 -3 -237 -21 -119 -34 -222 -78 -347 -149 l-114
-65 -56 54 c-69 67 -168 122 -275 154 -64 19 -111 25 -221 28 -77 2 -169 0
-205 -4z m268 -271 c112 -52 198 -141 266 -277 109 -217 136 -565 64 -803 -81
-263 -259 -392 -497 -359 -163 23 -288 123 -379 304 -111 223 -136 600 -54
836 63 181 187 300 342 329 78 15 188 2 258 -30z"/>
<path d="M136360 108071 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M140670 108071 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M161550 107910 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M179070 107910 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M159610 107741 c-346 -52 -618 -263 -708 -551 -41 -130 -37 -261 10
-354 50 -99 164 -180 272 -195 56 -8 56 -8 77 26 19 31 20 42 14 161 -19 336
94 575 310 658 68 26 274 27 356 2 90 -28 161 -81 202 -152 74 -128 102 -268
87 -443 -16 -185 -67 -321 -152 -404 -69 -68 -110 -79 -295 -79 -151 0 -155
-1 -189 -26 -34 -26 -34 -27 -34 -108 0 -77 2 -84 28 -108 27 -26 29 -27 202
-30 165 -3 178 -4 232 -30 118 -55 209 -179 239 -323 15 -77 15 -232 -2 -315
-35 -178 -145 -345 -280 -423 -145 -84 -362 -77 -491 16 -183 131 -250 350
-227 741 6 92 8 170 6 172 -2 2 -25 7 -51 10 -55 8 -100 -9 -189 -70 -71 -48
-118 -111 -148 -196 -21 -57 -23 -83 -23 -220 0 -142 2 -161 27 -228 86 -237
297 -420 572 -494 69 -19 106 -22 265 -22 168 0 194 3 285 27 195 51 363 151
497 293 86 91 148 196 188 319 31 93 34 110 34 240 1 154 -13 216 -73 320 -59
103 -233 267 -338 318 -24 12 -43 24 -43 28 0 4 21 20 48 35 26 15 88 68 137
118 156 156 217 308 217 536 -1 103 -5 139 -25 206 -78 262 -294 455 -588 523
-104 25 -350 36 -449 22z"/>
<path d="M166320 107740 c-149 -20 -328 -100 -455 -203 -166 -134 -276 -296
-335 -493 -32 -105 -33 -116 -34 -289 -1 -158 2 -191 22 -265 28 -106 36 -126
84 -224 161 -326 464 -567 980 -782 64 -26 116 -49 115 -50 -1 -1 -42 2 -92 7
-130 11 -244 11 -290 -2 -92 -25 -135 -93 -135 -215 l0 -63 38 -6 c20 -4 42
-8 47 -10 6 -1 23 9 38 24 l29 26 184 -2 c250 -4 494 -39 714 -105 189 -56
690 -257 889 -357 l78 -40 27 28 26 27 -16 78 c-31 153 -111 275 -228 350 -30
19 -238 120 -462 226 -440 206 -977 479 -1113 567 -276 178 -413 359 -465 608
-46 223 -23 468 59 642 59 126 134 208 234 255 40 19 63 22 166 22 106 -1 128
-4 190 -28 96 -37 170 -86 236 -159 l56 -61 -34 -72 c-18 -40 -45 -122 -60
-181 -25 -96 -28 -126 -27 -263 0 -136 4 -168 28 -258 89 -336 313 -561 647
-648 96 -25 119 -28 294 -27 181 0 195 1 295 30 198 57 358 160 486 315 287
346 295 916 18 1271 -163 208 -400 319 -714 333 -115 5 -161 3 -222 -9 -179
-38 -373 -133 -474 -232 l-62 -61 -26 43 c-67 105 -247 210 -426 248 -74 16
-214 18 -310 5z m1480 -240 c172 -25 307 -137 400 -332 50 -103 76 -207 91
-351 37 -372 -89 -666 -326 -757 -89 -34 -234 -33 -328 4 -151 57 -265 192
-334 391 -72 210 -80 489 -21 685 42 140 148 275 254 325 87 41 157 51 264 35z"/>
<path d="M169860 107741 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M174515 107744 c-112 -18 -233 -87 -305 -176 -50 -62 -91 -155 -178
-399 -60 -168 -90 -221 -138 -244 -109 -52 -218 39 -245 206 -20 118 2 228 78
391 45 96 45 96 27 123 -18 25 -22 26 -101 22 -70 -3 -93 -9 -155 -40 -118
-58 -216 -170 -259 -295 -27 -77 -27 -209 1 -300 70 -235 264 -362 550 -362
156 0 270 34 372 111 117 88 171 181 249 436 82 265 129 318 250 282 55 -17
104 -73 130 -149 20 -59 23 -88 27 -315 l4 -251 30 -17 c24 -14 56 -17 175
-17 129 0 149 2 178 20 l33 20 4 268 c4 261 5 268 30 323 30 67 75 104 142
119 107 24 191 -18 236 -120 l25 -55 0 -840 c0 -837 0 -840 -23 -920 -62 -226
-208 -390 -427 -483 -113 -48 -228 -71 -390 -78 -309 -14 -563 63 -716 217
-81 82 -109 146 -116 269 -6 101 11 177 64 293 34 72 35 80 24 117 -14 46 -24
48 -130 26 -166 -36 -318 -160 -375 -306 -64 -162 -27 -393 86 -537 153 -194
448 -300 903 -323 449 -22 797 50 1070 220 223 139 355 320 419 575 33 132 38
268 34 1025 -4 718 -5 747 -24 805 -36 104 -70 160 -135 218 -73 67 -123 91
-249 124 -85 22 -109 24 -235 20 -202 -7 -304 -47 -401 -155 l-41 -46 -27 41
c-36 55 -95 100 -168 130 -49 19 -83 25 -167 28 -58 2 -119 1 -136 -1z"/>
<path d="M183110 107741 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M146800 106841 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63
-66 100 -115 116 -152 50 -117 51 -134 51 -921 0 -764 6 -902 42 -1055 74
-317 288 -547 592 -637 95 -29 111 -30 286 -31 174 -1 191 0 290 27 467 126
736 543 690 1069 -44 509 -342 801 -860 846 -211 18 -349 -16 -509 -123 -30
-20 -50 -31 -44 -24 44 59 194 242 227 276 23 24 54 51 70 59 27 14 31 14 44
-3 8 -11 19 -32 24 -47 10 -28 13 -29 57 -22 25 4 49 9 53 11 18 11 49 123 49
176 1 110 -54 160 -176 162 -78 1 -111 -12 -176 -71 -66 -60 -200 -250 -225
-322 -11 -31 -13 10 -14 285 0 345 -2 362 -56 459 -31 55 -115 138 -172 170
-102 57 -191 66 -342 36z m1115 -1261 c256 -37 413 -229 466 -575 16 -102 16
-370 0 -455 -44 -238 -141 -368 -315 -422 -100 -30 -243 -22 -336 20 -178 80
-293 271 -340 562 -6 36 -14 188 -17 338 l-6 273 54 56 c100 102 243 184 355
202 67 12 61 12 139 1z"/>
<path d="M155120 106829 c-75 -13 -169 -59 -226 -111 -103 -94 -148 -210 -142
-367 3 -85 7 -105 36 -163 59 -120 167 -196 299 -211 50 -6 51 -5 64 24 11 27
8 43 -22 137 -30 96 -34 119 -33 217 0 124 13 166 64 209 30 25 55 31 110 26
117 -10 209 -178 226 -414 6 -90 9 -102 33 -122 24 -21 36 -23 140 -24 96 0
119 3 146 20 32 20 32 20 39 122 19 288 96 421 241 420 122 -1 198 -77 231
-231 10 -48 14 -148 14 -374 l0 -308 -42 34 c-62 50 -132 82 -223 102 -117 26
-313 16 -451 -24 -314 -90 -541 -329 -626 -661 -27 -105 -30 -130 -30 -285 -1
-153 2 -180 26 -273 17 -65 43 -132 71 -183 52 -93 211 -279 294 -343 187
-144 377 -198 621 -175 393 37 657 254 752 619 22 84 22 97 25 910 4 731 2
833 -12 904 -51 252 -214 438 -441 504 -153 45 -319 35 -420 -24 -69 -40 -145
-122 -179 -192 l-30 -62 -29 57 c-37 75 -135 172 -207 205 -96 45 -198 57
-319 37z m959 -1274 c76 -26 154 -70 217 -122 l44 -37 0 -441 c-1 -473 -3
-499 -54 -610 -38 -83 -143 -185 -221 -214 -53 -20 -72 -22 -160 -18 -112 6
-165 23 -238 75 -88 63 -155 168 -195 307 -64 219 -68 555 -10 745 59 190 178
310 338 340 68 13 204 1 279 -25z"/>
<path d="M142445 106740 c-176 -30 -340 -116 -470 -246 -107 -108 -167 -207
-216 -364 -31 -99 -33 -114 -33 -250 0 -136 2 -151 33 -250 49 -157 109 -256
216 -364 108 -108 210 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 300 95 498 290 588 582 123 395 -61 843 -422 1024 -131 65 -238 92 -381 96
-69 1 -147 -1 -175 -6z"/>
<path d="M144655 105821 c-298 -49 -527 -257 -606 -552 -31 -113 -34 -374 -6
-487 63 -260 260 -455 527 -523 121 -31 311 -31 430 1 268 72 464 268 538 541
56 204 33 493 -52 644 l-23 43 76 35 c101 47 151 59 243 59 151 0 265 -63 335
-182 73 -124 101 -415 54 -565 -42 -136 -139 -259 -243 -308 -50 -24 -69 -27
-159 -27 -94 0 -105 -2 -136 -26 l-33 -25 0 -87 c1 -114 4 -117 163 -126 148
-9 212 -31 282 -97 93 -88 136 -217 136 -414 0 -287 -120 -481 -364 -589 -144
-63 -392 -80 -551 -37 -355 95 -476 394 -312 771 29 68 31 79 21 110 -14 41
-27 45 -100 30 -127 -26 -286 -139 -361 -255 -67 -105 -94 -270 -65 -398 37
-163 185 -319 396 -416 180 -84 373 -122 615 -123 282 0 513 53 725 169 296
161 451 371 486 657 38 315 -97 547 -408 701 l-95 47 60 36 c208 127 346 300
388 490 25 111 15 288 -22 397 -81 237 -270 410 -530 486 -67 20 -102 23 -234
23 -117 0 -170 -4 -217 -17 -79 -22 -177 -66 -248 -112 l-57 -36 -41 34 c-57
46 -138 86 -222 109 -79 21 -306 32 -390 19z m281 -271 c91 -45 152 -132 190
-275 27 -99 27 -429 1 -524 -54 -192 -143 -271 -305 -271 -238 0 -364 150
-391 466 -27 320 58 554 226 618 60 23 74 25 148 20 51 -3 87 -12 131 -34z"/>
<path d="M149860 105823 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M151700 105820 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328
-318 -508 -30 -104 -32 -120 -33 -290 -1 -158 1 -190 21 -260 76 -274 277
-531 565 -725 103 -68 347 -185 522 -250 77 -28 156 -57 175 -65 31 -11 14
-12 -135 -8 -237 7 -295 -13 -329 -114 -19 -56 -33 -183 -20 -183 5 0 43 11
85 25 105 33 198 39 384 26 275 -21 481 -64 800 -170 288 -95 495 -181 667
-277 l97 -55 37 16 c30 12 35 19 31 37 -3 13 -9 45 -13 73 -9 67 -53 170 -99
234 -90 125 -159 161 -1035 541 -647 280 -848 388 -1017 544 -133 123 -208
244 -251 405 -22 84 -25 117 -26 261 0 177 10 249 51 370 48 139 112 233 198
288 54 34 160 36 221 4 79 -41 154 -156 188 -290 24 -92 38 -301 31 -454 l-7
-136 27 -36 27 -36 157 0 157 0 28 29 27 28 8 274 c10 295 19 353 74 470 35
73 101 147 152 170 54 25 144 25 194 0 48 -25 107 -91 131 -147 49 -114 62
-222 61 -521 l-1 -251 31 -26 c30 -25 34 -26 182 -26 151 1 152 1 184 28 l31
27 5 265 c3 211 8 278 22 330 40 148 110 253 206 304 71 39 181 43 245 9 135
-72 202 -255 191 -520 -9 -221 -52 -328 -201 -503 -75 -87 -96 -118 -92 -134
3 -12 6 -27 6 -35 0 -11 14 -12 74 -7 87 8 194 42 274 88 151 86 292 283 349
488 13 50 17 102 17 220 0 144 -2 161 -29 240 -58 174 -196 316 -370 381 -200
74 -439 64 -603 -28 -88 -49 -207 -168 -257 -258 -39 -68 -39 -69 -45 -39 -20
95 -140 244 -252 311 -113 69 -299 83 -433 32 -141 -52 -259 -167 -324 -314
l-23 -50 -30 60 c-76 149 -198 265 -323 309 -57 21 -220 29 -305 16z"/>
<path d="M157810 105823 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M198000 105791 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63
-66 100 -115 116 -152 50 -117 51 -134 51 -921 0 -764 6 -902 42 -1055 74
-317 288 -547 592 -637 95 -29 111 -30 286 -31 174 -1 191 0 290 27 467 126
736 543 690 1069 -44 509 -342 801 -860 846 -211 18 -349 -16 -509 -123 -30
-20 -50 -31 -44 -24 44 59 194 242 227 276 23 24 54 51 70 59 27 14 31 14 44
-3 8 -11 19 -32 24 -47 10 -28 13 -29 57 -22 25 4 49 9 53 11 18 11 49 123 49
176 1 110 -54 160 -176 162 -78 1 -111 -12 -176 -71 -66 -60 -200 -250 -225
-322 -11 -31 -13 10 -14 285 0 345 -2 362 -56 459 -31 55 -115 138 -172 170
-102 57 -191 66 -342 36z m1115 -1261 c256 -37 413 -229 466 -575 16 -102 16
-370 0 -455 -44 -238 -141 -368 -315 -422 -100 -30 -243 -22 -336 20 -178 80
-293 271 -340 562 -6 36 -14 188 -17 338 l-6 273 54 56 c100 102 243 184 355
202 67 12 61 12 139 1z"/>
<path d="M210520 105791 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63
-66 100 -115 116 -152 50 -117 51 -134 51 -921 0 -764 6 -902 42 -1055 74
-317 288 -547 592 -637 95 -29 111 -30 286 -31 174 -1 191 0 290 27 467 126
736 543 690 1069 -44 509 -342 801 -860 846 -211 18 -349 -16 -509 -123 -30
-20 -50 -31 -44 -24 44 59 194 242 227 276 23 24 54 51 70 59 27 14 31 14 44
-3 8 -11 19 -32 24 -47 10 -28 13 -29 57 -22 25 4 49 9 53 11 18 11 49 123 49
176 1 110 -54 160 -176 162 -78 1 -111 -12 -176 -71 -66 -60 -200 -250 -225
-322 -11 -31 -13 10 -14 285 0 345 -2 362 -56 459 -31 55 -115 138 -172 170
-102 57 -191 66 -342 36z m1115 -1261 c256 -37 413 -229 466 -575 16 -102 16
-370 0 -455 -44 -238 -141 -368 -315 -422 -100 -30 -243 -22 -336 20 -178 80
-293 271 -340 562 -6 36 -14 188 -17 338 l-6 273 54 56 c100 102 243 184 355
202 67 12 61 12 139 1z"/>
<path d="M196960 104940 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M200880 104940 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M202700 104770 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328
-318 -508 -30 -104 -32 -120 -33 -290 -1 -158 1 -190 21 -260 76 -274 277
-531 565 -725 103 -68 347 -185 522 -250 77 -28 156 -57 175 -65 31 -11 14
-12 -135 -8 -237 7 -295 -13 -329 -114 -19 -56 -33 -183 -20 -183 5 0 43 11
85 25 105 33 198 39 384 26 275 -21 481 -64 800 -170 288 -95 495 -181 667
-277 l97 -55 37 16 c30 12 35 19 31 37 -3 13 -9 45 -13 73 -9 67 -53 170 -99
234 -90 125 -159 161 -1035 541 -647 280 -848 388 -1017 544 -133 123 -208
244 -251 405 -22 84 -25 117 -26 261 0 177 10 249 51 370 48 139 112 233 198
288 54 34 160 36 221 4 79 -41 154 -156 188 -290 24 -92 38 -301 31 -454 l-7
-136 27 -36 27 -36 157 0 157 0 28 29 27 28 8 274 c10 295 19 353 74 470 35
73 101 147 152 170 54 25 144 25 194 0 48 -25 107 -91 131 -147 49 -114 62
-222 61 -521 l-1 -251 31 -26 c30 -25 34 -26 182 -26 151 1 152 1 184 28 l31
27 5 265 c3 211 8 278 22 330 40 148 110 253 206 304 71 39 181 43 245 9 135
-72 202 -255 191 -520 -9 -221 -52 -328 -201 -503 -75 -87 -96 -118 -92 -134
3 -12 6 -27 6 -35 0 -11 14 -12 74 -7 87 8 194 42 274 88 151 86 292 283 349
488 13 50 17 102 17 220 0 144 -2 161 -29 240 -58 174 -196 316 -370 381 -200
74 -439 64 -603 -28 -88 -49 -207 -168 -257 -258 -39 -68 -39 -69 -45 -39 -20
95 -140 244 -252 311 -113 69 -299 83 -433 32 -141 -52 -259 -167 -324 -314
l-23 -50 -30 60 c-76 149 -198 265 -323 309 -57 21 -220 29 -305 16z"/>
<path d="M209200 104771 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M213580 104773 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M207000 104690 c-98 -193 -66 -324 110 -452 19 -15 98 -61 175 -103
158 -87 195 -118 231 -192 23 -46 26 -62 23 -136 -3 -71 -9 -93 -38 -151 -38
-75 -77 -114 -152 -152 -44 -22 -68 -26 -177 -31 -101 -4 -134 -9 -159 -25
-32 -19 -33 -21 -33 -90 0 -55 4 -76 21 -99 20 -28 23 -29 102 -29 184 -1 280
-33 371 -126 60 -62 97 -130 123 -224 24 -88 24 -306 -1 -405 -48 -196 -181
-357 -344 -418 -48 -17 -79 -21 -187 -20 -119 0 -137 3 -210 30 -102 38 -209
108 -270 175 -118 130 -205 311 -246 513 -31 149 -33 491 -5 660 66 399 239
810 452 1072 41 51 41 53 31 97 -6 25 -16 46 -23 46 -7 0 -53 -13 -104 -30
-335 -109 -564 -403 -705 -904 -62 -221 -78 -348 -79 -631 -1 -278 9 -359 66
-538 135 -427 471 -702 913 -747 387 -40 761 89 1003 345 152 160 213 312 213
532 1 155 -37 275 -132 414 -74 109 -235 235 -352 275 l-48 16 92 45 c216 106
332 298 314 520 -10 134 -65 228 -183 315 -30 22 -154 89 -276 148 -126 62
-239 123 -263 144 -39 34 -113 159 -113 191 0 11 -50 25 -92 25 -12 0 -28 -21
-48 -60z"/>
<path d="M89065 104619 c-197 -38 -194 -32 -73 -166 167 -182 169 -190 175
-845 3 -280 2 -508 -1 -508 -3 0 -29 15 -58 33 -136 87 -337 133 -541 124
-135 -5 -211 -22 -304 -68 -126 -61 -211 -157 -254 -287 -57 -170 -4 -443 94
-488 28 -12 356 -47 365 -39 2 2 8 22 13 44 8 36 6 46 -20 88 -78 127 -97 285
-47 387 23 48 35 59 83 83 50 24 67 27 147 26 140 -3 279 -37 444 -109 l77
-33 3 -758 c2 -625 0 -773 -12 -842 -43 -245 -218 -391 -470 -391 -194 0 -302
107 -346 344 -17 93 -6 295 24 431 l23 105 -34 30 c-18 17 -36 30 -39 30 -15
0 -107 -54 -164 -96 -183 -134 -270 -284 -270 -464 0 -136 39 -245 121 -334
119 -130 266 -222 429 -266 115 -32 374 -35 490 -6 300 74 537 293 621 572 49
163 50 214 47 1694 l-3 1375 -24 58 c-43 109 -152 217 -259 257 -63 24 -169
33 -237 19z"/>
<path d="M94580 104620 c-315 -31 -545 -185 -642 -430 -30 -76 -55 -196 -61
-297 -5 -84 -7 -83 113 -83 137 0 254 49 297 125 12 21 27 68 34 104 30 165
67 234 152 288 158 100 463 70 564 -54 84 -106 95 -162 100 -548 4 -268 3
-318 -8 -309 -8 6 -34 27 -59 46 -60 48 -181 112 -255 134 -47 15 -91 19 -205
18 -127 -1 -157 -4 -240 -28 -52 -15 -124 -44 -160 -64 -195 -108 -348 -322
-416 -582 -25 -96 -27 -121 -28 -295 0 -176 2 -197 27 -290 37 -134 93 -248
171 -348 121 -155 259 -253 434 -310 94 -30 102 -31 277 -30 173 1 184 2 285
33 311 94 492 303 572 661 23 104 23 106 23 839 l0 735 -27 97 c-103 369 -364
574 -753 591 -60 3 -148 2 -195 -3z m270 -1270 c83 -27 171 -77 238 -135 l52
-47 0 -361 c0 -199 -5 -402 -10 -450 -36 -311 -230 -489 -492 -450 -97 14
-160 45 -230 115 -130 130 -188 330 -188 645 1 418 108 645 334 704 52 14 225
1 296 -21z"/>
<path d="M103715 104619 c-197 -38 -194 -32 -73 -166 167 -182 169 -190 175
-845 3 -280 2 -508 -1 -508 -3 0 -29 15 -58 33 -136 87 -337 133 -541 124
-135 -5 -211 -22 -304 -68 -126 -61 -211 -157 -254 -287 -57 -170 -4 -443 94
-488 28 -12 356 -47 365 -39 2 2 8 22 13 44 8 36 6 46 -20 88 -78 127 -97 285
-47 387 23 48 35 59 83 83 50 24 67 27 147 26 140 -3 279 -37 444 -109 l77
-33 3 -758 c2 -625 0 -773 -12 -842 -43 -245 -218 -391 -470 -391 -194 0 -302
107 -346 344 -17 93 -6 295 24 431 l23 105 -34 30 c-18 17 -36 30 -39 30 -15
0 -107 -54 -164 -96 -183 -134 -270 -284 -270 -464 0 -136 39 -245 121 -334
119 -130 266 -222 429 -266 115 -32 374 -35 490 -6 300 74 537 293 621 572 49
163 50 214 47 1694 l-3 1375 -24 58 c-43 109 -152 217 -259 257 -63 24 -169
33 -237 19z"/>
<path d="M106028 104600 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
-11 -122 -52 -228 -89 -353 -125 -492 -188 -635 -287 -432 -299 -663 -723
-663 -1219 0 -445 182 -801 541 -1057 78 -56 101 -68 134 -68 36 0 47 6 93 53
72 73 71 89 -19 185 -173 185 -253 383 -279 685 -30 350 73 670 244 760 64 34
160 30 223 -9 86 -53 139 -160 162 -329 6 -42 11 -164 11 -271 l0 -194 36 -15
c27 -11 74 -15 174 -15 100 0 147 4 174 15 l36 15 0 103 c1 505 93 720 310
721 79 0 126 -21 194 -91 91 -92 139 -223 158 -429 34 -389 -77 -744 -302
-961 -54 -52 -60 -62 -60 -98 0 -37 4 -43 58 -80 78 -54 106 -51 192 23 408
349 585 685 566 1072 -12 256 -101 457 -273 621 -125 119 -267 177 -453 186
-129 6 -197 -7 -304 -57 -109 -52 -231 -174 -267 -267 -10 -26 -10 -25 -38 33
-61 129 -205 245 -349 279 -79 19 -230 17 -286 -4 -16 -7 -31 -9 -34 -6 -11
11 168 176 248 227 190 124 359 190 720 281 250 64 363 124 409 221 77 158
-60 268 -374 300 -59 6 -60 6 -77 -24z"/>
<path d="M114215 104621 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
-1238 4 -779 4 -791 26 -884 80 -334 272 -542 577 -627 92 -25 114 -28 280
-28 176 0 182 1 279 33 302 98 520 344 604 681 23 94 26 125 26 290 1 163 -2
196 -23 280 -49 195 -155 366 -297 481 -86 70 -183 120 -305 155 -82 24 -112
27 -239 28 -128 1 -153 -2 -215 -23 -86 -29 -173 -79 -243 -138 l-53 -45 3
453 c4 477 7 511 49 524 39 13 147 -28 320 -120 199 -107 264 -133 362 -145
250 -29 442 109 507 365 15 60 17 82 9 98 -25 47 -26 47 -123 6 -202 -84 -382
-114 -547 -89 -46 6 -179 36 -296 66 -222 56 -305 68 -388 55z m732 -1278 c75
-30 155 -104 196 -180 41 -76 73 -218 87 -378 38 -436 -80 -753 -320 -855 -76
-32 -220 -33 -299 -1 -104 42 -175 111 -234 226 -54 104 -57 133 -57 595 l0
426 43 36 c101 84 214 141 312 158 79 13 202 1 272 -27z"/>
<path d="M112760 103780 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M116530 103780 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M90520 103611 c-346 -52 -618 -263 -708 -551 -41 -130 -37 -261 10
-354 50 -99 164 -180 272 -195 56 -8 56 -8 77 26 19 31 20 42 14 161 -19 336
94 575 310 658 68 26 274 27 356 2 90 -28 161 -81 202 -152 74 -128 102 -268
87 -443 -16 -185 -67 -321 -152 -404 -69 -68 -110 -79 -295 -79 -151 0 -155
-1 -189 -26 -34 -26 -34 -27 -34 -108 0 -77 2 -84 28 -108 27 -26 29 -27 202
-30 165 -3 178 -4 232 -30 118 -55 209 -179 239 -323 15 -77 15 -232 -2 -315
-35 -178 -145 -345 -280 -423 -145 -84 -362 -77 -491 16 -183 131 -250 350
-227 741 6 92 8 170 6 172 -2 2 -25 7 -51 10 -55 8 -100 -9 -189 -70 -71 -48
-118 -111 -148 -196 -21 -57 -23 -83 -23 -220 0 -142 2 -161 27 -228 86 -237
297 -420 572 -494 69 -19 106 -22 265 -22 168 0 194 3 285 27 195 51 363 151
497 293 86 91 148 196 188 319 31 93 34 110 34 240 1 154 -13 216 -73 320 -59
103 -233 267 -338 318 -24 12 -43 24 -43 28 0 4 21 20 48 35 26 15 88 68 137
118 156 156 217 308 217 536 -1 103 -5 139 -25 206 -78 262 -294 455 -588 523
-104 25 -350 36 -449 22z"/>
<path d="M92640 103613 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M96460 103610 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
-269 0 -149 3 -187 23 -260 77 -292 269 -563 518 -731 59 -40 80 -49 115 -49
39 0 49 5 96 53 70 71 70 95 1 162 -235 229 -355 664 -294 1063 27 175 63 259
147 338 77 73 110 89 188 88 107 -1 185 -56 236 -169 44 -95 55 -175 61 -423
l5 -233 35 -14 c45 -19 291 -20 343 -1 l35 13 6 214 c9 299 39 424 123 525 74
88 197 112 295 58 224 -121 317 -605 197 -1017 -47 -160 -154 -339 -268 -447
-49 -47 -58 -61 -57 -90 0 -31 7 -40 61 -79 76 -54 98 -52 200 17 93 63 235
134 363 183 55 20 109 41 119 45 14 5 17 4 12 -4 -4 -8 3 -16 19 -22 31 -12
145 -13 163 -2 7 5 21 57 31 117 l19 109 -22 18 c-63 53 -278 -16 -441 -141
l-70 -55 66 70 c223 235 321 482 304 764 -24 386 -237 684 -559 779 -97 29
-260 39 -337 21 -162 -37 -301 -137 -382 -272 l-34 -56 -25 52 c-89 180 -275
288 -494 285 -49 -1 -109 -5 -134 -9z"/>
<path d="M100380 103610 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
-269 0 -149 3 -187 23 -260 77 -292 269 -563 518 -731 59 -40 80 -49 115 -49
39 0 49 5 96 53 70 71 70 95 1 162 -235 229 -355 664 -294 1063 27 175 63 259
147 338 77 73 110 89 188 88 107 -1 185 -56 236 -169 44 -95 55 -175 61 -423
l5 -233 35 -14 c45 -19 291 -20 343 -1 l35 13 6 214 c9 299 39 424 123 525 74
88 197 112 295 58 224 -121 317 -605 197 -1017 -47 -160 -154 -339 -268 -447
-49 -47 -58 -61 -57 -90 0 -31 7 -40 61 -79 76 -54 98 -52 200 17 93 63 235
134 363 183 55 20 109 41 119 45 14 5 17 4 12 -4 -4 -8 3 -16 19 -22 31 -12
145 -13 163 -2 7 5 21 57 31 117 l19 109 -22 18 c-63 53 -278 -16 -441 -141
l-70 -55 66 70 c223 235 321 482 304 764 -24 386 -237 684 -559 779 -97 29
-260 39 -337 21 -162 -37 -301 -137 -382 -272 l-34 -56 -25 52 c-89 180 -275
288 -494 285 -49 -1 -109 -5 -134 -9z"/>
<path d="M107970 103610 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
-269 0 -149 3 -187 23 -260 77 -292 269 -563 518 -731 59 -40 80 -49 115 -49
39 0 49 5 96 53 70 71 70 95 1 162 -235 229 -355 664 -294 1063 27 175 63 259
147 338 77 73 110 89 188 88 107 -1 185 -56 236 -169 44 -95 55 -175 61 -423
l5 -233 35 -14 c45 -19 291 -20 343 -1 l35 13 6 214 c9 299 39 424 123 525 74
88 197 112 295 58 224 -121 317 -605 197 -1017 -47 -160 -154 -339 -268 -447
-49 -47 -58 -61 -57 -90 0 -31 7 -40 61 -79 76 -54 98 -52 200 17 93 63 235
134 363 183 55 20 109 41 119 45 14 5 17 4 12 -4 -4 -8 3 -16 19 -22 31 -12
145 -13 163 -2 7 5 21 57 31 117 l19 109 -22 18 c-63 53 -278 -16 -441 -141
l-70 -55 66 70 c223 235 321 482 304 764 -24 386 -237 684 -559 779 -97 29
-260 39 -337 21 -162 -37 -301 -137 -382 -272 l-34 -56 -25 52 c-89 180 -275
288 -494 285 -49 -1 -109 -5 -134 -9z"/>
<path d="M110787 103590 c-196 -85 -356 -202 -437 -320 -113 -165 -153 -325
-131 -528 20 -192 98 -348 228 -457 161 -134 380 -196 614 -175 171 16 298 67
373 150 l36 40 0 -502 c0 -555 -2 -579 -62 -690 -55 -103 -151 -183 -257 -214
-77 -22 -212 -22 -278 0 -114 38 -188 142 -220 308 -20 107 -12 309 19 455
l22 103 -34 35 -33 34 -46 -26 c-214 -123 -343 -270 -381 -432 -16 -69 -7
-217 17 -291 69 -210 261 -368 523 -430 77 -18 124 -22 250 -23 137 0 166 3
250 27 304 84 525 296 609 582 47 162 51 255 51 1318 l0 977 -22 29 -22 30
-172 0 -172 0 -21 -34 c-21 -33 -21 -44 -21 -518 l0 -484 -47 -45 c-115 -110
-218 -151 -382 -152 -87 0 -114 3 -152 20 -134 61 -197 181 -219 414 -11 118
-3 241 21 334 22 82 69 176 148 294 45 66 81 126 81 134 0 12 -50 67 -61 67
-2 -1 -35 -14 -72 -30z"/>
<path d="M195040 103494 c-70 -10 -227 -66 -310 -112 -61 -34 -109 -72 -175
-138 -108 -108 -167 -207 -216 -364 -30 -98 -33 -114 -33 -250 0 -136 3 -152
33 -250 49 -157 108 -256 216 -364 107 -107 207 -167 360 -218 95 -31 107 -32
255 -32 147 -1 160 1 256 31 289 93 484 285 574 568 74 231 49 479 -69 695
-105 192 -277 330 -500 401 -82 26 -115 31 -226 34 -71 2 -146 1 -165 -1z"/>
<path d="M137075 102630 c-176 -30 -340 -116 -470 -246 -107 -108 -167 -207
-216 -364 -31 -99 -33 -114 -33 -250 0 -136 2 -151 33 -250 49 -157 109 -256
216 -364 108 -108 210 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 300 95 498 290 588 582 123 395 -61 843 -422 1024 -131 65 -238 92 -381 96
-69 1 -147 -1 -175 -6z"/>
<path d="M193560 101694 c-70 -10 -227 -66 -310 -112 -61 -34 -109 -72 -175
-138 -108 -108 -167 -207 -216 -364 -30 -98 -33 -114 -33 -250 0 -136 3 -152
33 -250 49 -157 108 -256 216 -364 107 -107 207 -167 360 -218 95 -31 107 -32
255 -32 147 -1 160 1 256 31 289 93 484 285 574 568 74 231 49 479 -69 695
-105 192 -277 330 -500 401 -82 26 -115 31 -226 34 -71 2 -146 1 -165 -1z"/>
<path d="M134365 101371 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
-1238 4 -779 4 -791 26 -884 80 -334 272 -542 577 -627 92 -25 114 -28 280
-28 176 0 182 1 279 33 302 98 520 344 604 681 23 94 26 125 26 290 1 163 -2
196 -23 280 -49 195 -155 366 -297 481 -86 70 -183 120 -305 155 -82 24 -112
27 -239 28 -128 1 -153 -2 -215 -23 -86 -29 -173 -79 -243 -138 l-53 -45 3
453 c4 477 7 511 49 524 39 13 147 -28 320 -120 199 -107 264 -133 362 -145
250 -29 442 109 507 365 15 60 17 82 9 98 -25 47 -26 47 -123 6 -202 -84 -382
-114 -547 -89 -46 6 -179 36 -296 66 -222 56 -305 68 -388 55z m732 -1278 c75
-30 155 -104 196 -180 41 -76 73 -218 87 -378 38 -436 -80 -753 -320 -855 -76
-32 -220 -33 -299 -1 -104 42 -175 111 -234 226 -54 104 -57 133 -57 595 l0
426 43 36 c101 84 214 141 312 158 79 13 202 1 272 -27z"/>
<path d="M139100 101271 c-49 -10 -75 -26 -101 -63 -31 -43 -30 -132 4 -263
48 -185 45 -377 -8 -551 -28 -93 -26 -120 10 -134 43 -16 206 52 290 121 101
83 149 187 143 315 -3 73 -8 91 -46 166 -24 47 -61 104 -83 127 -22 22 -38 41
-35 41 40 0 316 -68 362 -89 118 -55 154 -155 154 -431 l0 -165 -98 -40 c-406
-165 -657 -418 -738 -745 -29 -117 -26 -373 5 -500 81 -320 283 -524 606 -613
104 -29 120 -30 300 -31 188 0 191 0 295 33 135 42 253 108 351 196 152 136
249 288 304 475 26 86 29 109 28 250 0 127 -4 170 -21 237 -73 273 -225 461
-531 658 l-71 45 0 192 c-1 106 -5 223 -9 260 -28 217 -211 367 -530 435 -122
26 -492 83 -526 82 -11 -1 -36 -4 -55 -8z m950 -1224 c202 -182 280 -303 326
-505 24 -102 23 -344 0 -452 -46 -209 -141 -345 -288 -410 -108 -47 -259 -48
-360 0 -135 63 -269 252 -316 445 -26 108 -23 354 6 460 62 223 200 389 431
521 42 24 78 44 81 44 3 0 57 -46 120 -103z"/>
<path d="M184371 100650 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z"/>
<path d="M112425 100640 c-177 -30 -342 -117 -470 -246 -106 -106 -166 -206
-216 -359 -31 -95 -33 -107 -33 -255 0 -148 2 -160 33 -255 50 -153 110 -253
216 -359 107 -108 209 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 180 57 318 146 425 274 142 171 220 424 198 645 -30 295 -208 561 -457 687
-131 65 -238 92 -381 96 -69 1 -147 -1 -175 -6z"/>
<path d="M180795 100639 c-197 -38 -194 -32 -73 -166 167 -182 169 -190 175
-845 3 -280 2 -508 -1 -508 -3 0 -29 15 -58 33 -136 87 -337 133 -541 124
-135 -5 -211 -22 -304 -68 -126 -61 -211 -157 -254 -287 -57 -170 -4 -443 94
-488 28 -12 356 -47 365 -39 2 2 8 22 13 44 8 36 6 46 -20 88 -78 127 -97 285
-47 387 23 48 35 59 83 83 50 24 67 27 147 26 140 -3 279 -37 444 -109 l77
-33 3 -758 c2 -625 0 -773 -12 -842 -43 -245 -218 -391 -470 -391 -194 0 -302
107 -346 344 -17 93 -6 295 24 431 l23 105 -34 30 c-18 17 -36 30 -39 30 -15
0 -107 -54 -164 -96 -183 -134 -270 -284 -270 -464 0 -136 39 -245 121 -334
119 -130 266 -222 429 -266 115 -32 374 -35 490 -6 300 74 537 293 621 572 49
163 50 214 47 1694 l-3 1375 -24 58 c-43 109 -152 217 -259 257 -63 24 -169
33 -237 19z"/>
<path d="M132910 100530 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M130947 100340 c-196 -85 -356 -202 -437 -320 -113 -165 -153 -325
-131 -528 20 -192 98 -348 228 -457 161 -134 380 -196 614 -175 171 16 298 67
373 150 l36 40 0 -502 c0 -555 -2 -579 -62 -690 -55 -103 -151 -183 -257 -214
-77 -22 -212 -22 -278 0 -114 38 -188 142 -220 308 -20 107 -12 309 19 455
l22 103 -34 35 -33 34 -46 -26 c-214 -123 -343 -270 -381 -432 -16 -69 -7
-217 17 -291 69 -210 261 -368 523 -430 77 -18 124 -22 250 -23 137 0 166 3
250 27 304 84 525 296 609 582 47 162 51 255 51 1318 l0 977 -22 29 -22 30
-172 0 -172 0 -21 -34 c-21 -33 -21 -44 -21 -518 l0 -484 -47 -45 c-115 -110
-218 -151 -382 -152 -87 0 -114 3 -152 20 -134 61 -197 181 -219 414 -11 118
-3 241 21 334 22 82 69 176 148 294 45 66 81 126 81 134 0 12 -50 67 -61 67
-2 -1 -35 -14 -72 -30z"/>
<path d="M136710 100360 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
-269 0 -149 3 -187 23 -260 77 -292 269 -563 518 -731 59 -40 80 -49 115 -49
39 0 49 5 96 53 70 71 70 95 1 162 -235 229 -355 664 -294 1063 27 175 63 259
147 338 77 73 110 89 188 88 107 -1 185 -56 236 -169 44 -95 55 -175 61 -423
l5 -233 35 -14 c45 -19 291 -20 343 -1 l35 13 6 214 c9 299 39 424 123 525 74
88 197 112 295 58 224 -121 317 -605 197 -1017 -47 -160 -154 -339 -268 -447
-49 -47 -58 -61 -57 -90 0 -31 7 -40 61 -79 76 -54 98 -52 200 17 93 63 235
134 363 183 55 20 109 41 119 45 14 5 17 4 12 -4 -4 -8 3 -16 19 -22 31 -12
145 -13 163 -2 7 5 21 57 31 117 l19 109 -22 18 c-63 53 -278 -16 -441 -141
l-70 -55 66 70 c223 235 321 482 304 764 -24 386 -237 684 -559 779 -97 29
-260 39 -337 21 -162 -37 -301 -137 -382 -272 l-34 -56 -25 52 c-89 180 -275
288 -494 285 -49 -1 -109 -5 -134 -9z"/>
<path d="M141950 100361 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M182210 99630 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
-269 0 -149 3 -187 23 -260 77 -292 269 -563 518 -731 59 -40 80 -49 115 -49
39 0 49 5 96 53 70 71 70 95 1 162 -235 229 -355 664 -294 1063 27 175 63 259
147 338 77 73 110 89 188 88 107 -1 185 -56 236 -169 44 -95 55 -175 61 -423
l5 -233 35 -14 c45 -19 291 -20 343 -1 l35 13 6 214 c9 299 39 424 123 525 74
88 197 112 295 58 224 -121 317 -605 197 -1017 -47 -160 -154 -339 -268 -447
-49 -47 -58 -61 -57 -90 0 -31 7 -40 61 -79 76 -54 98 -52 200 17 93 63 235
134 363 183 55 20 109 41 119 45 14 5 17 4 12 -4 -4 -8 3 -16 19 -22 31 -12
145 -13 163 -2 7 5 21 57 31 117 l19 109 -22 18 c-63 53 -278 -16 -441 -141
l-70 -55 66 70 c223 235 321 482 304 764 -24 386 -237 684 -559 779 -97 29
-260 39 -337 21 -162 -37 -301 -137 -382 -272 l-34 -56 -25 52 c-89 180 -275
288 -494 285 -49 -1 -109 -5 -134 -9z"/>
<path d="M187280 99633 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M189110 99630 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328
-318 -508 -30 -104 -32 -120 -33 -290 -1 -158 1 -190 21 -260 76 -274 277
-531 565 -725 103 -68 347 -185 522 -250 77 -28 156 -57 175 -65 31 -11 14
-12 -135 -8 -237 7 -295 -13 -329 -114 -19 -56 -33 -183 -20 -183 5 0 43 11
85 25 105 33 198 39 384 26 275 -21 481 -64 800 -170 288 -95 495 -181 667
-277 l97 -55 37 16 c30 12 35 19 31 37 -3 13 -9 45 -13 73 -9 67 -53 170 -99
234 -90 125 -159 161 -1035 541 -647 280 -848 388 -1017 544 -133 123 -208
244 -251 405 -22 84 -25 117 -26 261 0 177 10 249 51 370 48 139 112 233 198
288 54 34 160 36 221 4 79 -41 154 -156 188 -290 24 -92 38 -301 31 -454 l-7
-136 27 -36 27 -36 157 0 157 0 28 29 27 28 8 274 c10 295 19 353 74 470 35
73 101 147 152 170 54 25 144 25 194 0 48 -25 107 -91 131 -147 49 -114 62
-222 61 -521 l-1 -251 31 -26 c30 -25 34 -26 182 -26 151 1 152 1 184 28 l31
27 5 265 c3 211 8 278 22 330 40 148 110 253 206 304 71 39 181 43 245 9 135
-72 202 -255 191 -520 -9 -221 -52 -328 -201 -503 -75 -87 -96 -118 -92 -134
3 -12 6 -27 6 -35 0 -11 14 -12 74 -7 87 8 194 42 274 88 151 86 292 283 349
488 13 50 17 102 17 220 0 144 -2 161 -29 240 -58 174 -196 316 -370 381 -200
74 -439 64 -603 -28 -88 -49 -207 -168 -257 -258 -39 -68 -39 -69 -45 -39 -20
95 -140 244 -252 311 -113 69 -299 83 -433 32 -141 -52 -259 -167 -324 -314
l-23 -50 -30 60 c-76 149 -198 265 -323 309 -57 21 -220 29 -305 16z"/>
<path d="M193220 99631 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M239310 99000 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M231304 98856 c-89 -33 -130 -61 -188 -132 -62 -75 -107 -163 -114
-220 -4 -35 -1 -44 23 -62 15 -12 33 -22 40 -22 7 0 47 16 91 36 116 54 181
74 239 74 63 0 115 -30 126 -74 9 -32 -4 -103 -25 -145 -21 -39 -54 -68 -405
-354 l-325 -265 -173 360 c-95 198 -187 385 -205 416 -80 142 -202 255 -333
309 -111 46 -182 57 -355 58 -149 0 -171 -2 -230 -24 -143 -53 -265 -150 -311
-248 -34 -71 -34 -209 0 -276 49 -100 179 -197 326 -244 80 -26 102 -24 129
14 19 26 19 27 -2 67 -45 89 -54 122 -59 222 -8 148 20 213 99 235 109 29 218
-50 326 -236 76 -131 452 -869 448 -880 -2 -5 -242 -196 -533 -424 l-530 -414
15 -62 15 -63 122 -4 c115 -4 123 -5 161 -33 69 -49 89 -88 89 -175 0 -99 -25
-142 -102 -177 -49 -23 -72 -26 -221 -31 -163 -5 -166 -6 -188 -31 l-22 -26
21 -39 c44 -78 154 -127 317 -140 191 -15 325 28 459 148 126 112 170 188 178
306 14 201 -87 323 -326 396 -10 3 -4 12 19 25 61 37 365 276 593 464 32 26
59 46 61 44 2 -2 115 -227 251 -499 279 -559 297 -591 376 -678 155 -170 306
-228 532 -203 161 18 260 62 340 150 45 50 61 81 81 158 20 77 20 176 1 234
-18 53 -80 131 -136 172 -50 37 -159 75 -236 83 l-58 6 -11 -41 c-11 -39 -10
-43 12 -57 77 -51 117 -233 79 -361 -12 -39 -23 -57 -49 -72 -67 -42 -126 -19
-197 74 -35 46 -650 1244 -649 1264 0 3 129 103 286 221 465 350 573 443 664
576 138 200 93 414 -117 553 -108 72 -296 93 -419 47z"/>
<path d="M233485 98834 c-112 -18 -233 -87 -305 -176 -50 -62 -91 -155 -178
-399 -60 -168 -90 -221 -138 -244 -109 -52 -218 39 -245 206 -20 118 2 228 78
391 45 96 45 96 27 123 -18 25 -22 26 -101 22 -70 -3 -93 -9 -155 -40 -118
-58 -216 -170 -259 -295 -27 -77 -27 -209 1 -300 70 -235 264 -362 550 -362
156 0 270 34 372 111 117 88 171 181 249 436 82 265 129 318 250 282 55 -17
104 -73 130 -149 20 -59 23 -88 27 -315 l4 -251 30 -17 c24 -14 56 -17 175
-17 129 0 149 2 178 20 l33 20 4 268 c4 261 5 268 30 323 30 67 75 104 142
119 107 24 191 -18 236 -120 l25 -55 0 -840 c0 -837 0 -840 -23 -920 -62 -226
-208 -390 -427 -483 -113 -48 -228 -71 -390 -78 -309 -14 -563 63 -716 217
-81 82 -109 146 -116 269 -6 101 11 177 64 293 34 72 35 80 24 117 -14 46 -24
48 -130 26 -166 -36 -318 -160 -375 -306 -64 -162 -27 -393 86 -537 153 -194
448 -300 903 -323 449 -22 797 50 1070 220 223 139 355 320 419 575 33 132 38
268 34 1025 -4 718 -5 747 -24 805 -36 104 -70 160 -135 218 -73 67 -123 91
-249 124 -85 22 -109 24 -235 20 -202 -7 -304 -47 -401 -155 l-41 -46 -27 41
c-36 55 -95 100 -168 130 -49 19 -83 25 -167 28 -58 2 -119 1 -136 -1z"/>
<path d="M236130 98831 c-36 -5 -107 -20 -159 -35 -318 -92 -555 -334 -646
-661 -26 -92 -28 -115 -29 -280 -1 -158 2 -192 23 -275 47 -188 137 -340 279
-469 95 -87 212 -151 349 -192 104 -31 114 -32 293 -33 173 0 192 2 285 28
265 75 485 254 600 490 139 285 137 693 -6 942 -16 28 -29 54 -29 57 0 10 123
93 180 122 121 61 220 79 325 60 147 -27 290 -190 364 -415 81 -246 64 -578
-39 -780 -77 -149 -185 -260 -360 -369 -82 -51 -100 -67 -100 -87 0 -37 34
-66 73 -60 18 3 59 8 92 11 96 10 217 51 309 106 64 38 114 80 198 168 188
193 275 346 320 561 41 195 5 467 -85 646 -105 209 -305 375 -529 441 -84 24
-109 27 -253 27 -134 0 -173 -3 -237 -21 -119 -34 -222 -78 -347 -149 l-114
-65 -56 54 c-69 67 -168 122 -275 154 -64 19 -111 25 -221 28 -77 2 -169 0
-205 -4z m268 -271 c112 -52 198 -141 266 -277 109 -217 136 -565 64 -803 -81
-263 -259 -392 -497 -359 -163 23 -288 123 -379 304 -111 223 -136 600 -54
836 63 181 187 300 342 329 78 15 188 2 258 -30z"/>
<path d="M206868 98480 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
-11 -122 -52 -228 -89 -353 -125 -492 -188 -635 -287 -432 -299 -663 -723
-663 -1219 0 -445 182 -801 541 -1057 78 -56 101 -68 134 -68 36 0 47 6 93 53
72 73 71 89 -19 185 -173 185 -253 383 -279 685 -30 350 73 670 244 760 64 34
160 30 223 -9 86 -53 139 -160 162 -329 6 -42 11 -164 11 -271 l0 -194 36 -15
c27 -11 74 -15 174 -15 100 0 147 4 174 15 l36 15 0 103 c1 505 93 720 310
721 79 0 126 -21 194 -91 91 -92 139 -223 158 -429 34 -389 -77 -744 -302
-961 -54 -52 -60 -62 -60 -98 0 -37 4 -43 58 -80 78 -54 106 -51 192 23 408
349 585 685 566 1072 -12 256 -101 457 -273 621 -125 119 -267 177 -453 186
-129 6 -197 -7 -304 -57 -109 -52 -231 -174 -267 -267 -10 -26 -10 -25 -38 33
-61 129 -205 245 -349 279 -79 19 -230 17 -286 -4 -16 -7 -31 -9 -34 -6 -11
11 168 176 248 227 190 124 359 190 720 281 250 64 363 124 409 221 77 158
-60 268 -374 300 -59 6 -60 6 -77 -24z"/>
<path d="M213750 98500 c-302 -38 -518 -236 -602 -552 -22 -83 -22 -85 -25
-1215 l-4 -1133 211 0 210 0 0 523 0 524 68 46 c175 120 355 162 519 121 160
-40 259 -150 293 -327 11 -54 11 -90 2 -185 -19 -198 -87 -377 -225 -600 l-70
-113 23 -24 22 -24 82 30 c257 95 443 264 547 496 49 109 64 192 63 338 -1
112 -5 140 -28 203 -81 231 -268 394 -530 464 -122 32 -342 32 -446 -1 -84
-26 -179 -75 -256 -133 -28 -21 -54 -38 -57 -38 -4 0 -7 46 -7 103 l0 103 123
17 c459 63 802 285 912 591 25 68 29 93 29 190 0 82 -4 125 -18 166 -69 208
-240 354 -481 410 -94 22 -263 32 -355 20z m188 -245 c91 -12 177 -76 221
-163 52 -103 54 -286 5 -384 -52 -104 -157 -194 -304 -261 -64 -29 -290 -107
-311 -107 -19 0 -6 571 15 643 30 108 94 199 172 247 35 22 106 39 139 34 11
-1 39 -5 63 -9z"/>
<path d="M204200 97660 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M215700 97660 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M202242 97471 l-23 -32 24 -42 c56 -94 133 -140 252 -152 172 -16
271 -81 336 -220 72 -154 79 -413 16 -617 -34 -110 -107 -192 -204 -228 -46
-17 -79 -20 -221 -20 -162 -1 -168 -1 -194 -25 -26 -23 -28 -29 -28 -108 0
-124 -1 -123 220 -130 157 -4 182 -7 237 -29 81 -33 114 -61 157 -132 43 -73
65 -165 75 -316 14 -227 -14 -378 -93 -492 -71 -105 -161 -158 -294 -172 -105
-11 -242 30 -322 96 -44 36 -115 129 -147 193 -63 123 -100 332 -89 492 4 62
2 107 -5 133 -14 45 -21 45 -114 7 -196 -81 -285 -241 -272 -490 8 -164 57
-276 176 -402 117 -124 264 -209 441 -255 71 -19 112 -22 245 -22 136 0 175 4
261 25 324 80 575 290 665 555 24 71 31 111 36 212 11 243 -56 429 -208 578
-58 58 -168 130 -237 158 l-43 17 66 36 c164 90 280 247 336 456 31 114 30
325 -1 444 -69 268 -232 417 -526 481 -70 15 -150 22 -297 27 l-202 6 -23 -32z"/>
<path d="M208702 97471 l-23 -32 24 -42 c56 -94 133 -140 252 -152 172 -16
271 -81 336 -220 72 -154 79 -413 16 -617 -34 -110 -107 -192 -204 -228 -46
-17 -79 -20 -221 -20 -162 -1 -168 -1 -194 -25 -26 -23 -28 -29 -28 -108 0
-124 -1 -123 220 -130 157 -4 182 -7 237 -29 81 -33 114 -61 157 -132 43 -73
65 -165 75 -316 14 -227 -14 -378 -93 -492 -71 -105 -161 -158 -294 -172 -105
-11 -242 30 -322 96 -44 36 -115 129 -147 193 -63 123 -100 332 -89 492 4 62
2 107 -5 133 -14 45 -21 45 -114 7 -196 -81 -285 -241 -272 -490 8 -164 57
-276 176 -402 117 -124 264 -209 441 -255 71 -19 112 -22 245 -22 136 0 175 4
261 25 324 80 575 290 665 555 24 71 31 111 36 212 11 243 -56 429 -208 578
-58 58 -168 130 -237 158 l-43 17 66 36 c164 90 280 247 336 456 31 114 30
325 -1 444 -69 268 -232 417 -526 481 -70 15 -150 22 -297 27 l-202 6 -23 -32z"/>
<path d="M211285 97494 c-112 -18 -233 -87 -305 -176 -50 -62 -91 -155 -178
-399 -60 -168 -90 -221 -138 -244 -109 -52 -218 39 -245 206 -20 118 2 228 78
391 45 96 45 96 27 123 -18 25 -22 26 -101 22 -70 -3 -93 -9 -155 -40 -118
-58 -216 -170 -259 -295 -27 -77 -27 -209 1 -300 70 -235 264 -362 550 -362
156 0 270 34 372 111 117 88 171 181 249 436 82 265 129 318 250 282 55 -17
104 -73 130 -149 20 -59 23 -88 27 -315 l4 -251 30 -17 c24 -14 56 -17 175
-17 129 0 149 2 178 20 l33 20 4 268 c4 261 5 268 30 323 30 67 75 104 142
119 107 24 191 -18 236 -120 l25 -55 0 -840 c0 -837 0 -840 -23 -920 -62 -226
-208 -390 -427 -483 -113 -48 -228 -71 -390 -78 -309 -14 -563 63 -716 217
-81 82 -109 146 -116 269 -6 101 11 177 64 293 34 72 35 80 24 117 -14 46 -24
48 -130 26 -166 -36 -318 -160 -375 -306 -64 -162 -27 -393 86 -537 153 -194
448 -300 903 -323 449 -22 797 50 1070 220 223 139 355 320 419 575 33 132 38
268 34 1025 -4 718 -5 747 -24 805 -36 104 -70 160 -135 218 -73 67 -123 91
-249 124 -85 22 -109 24 -235 20 -202 -7 -304 -47 -401 -155 l-41 -46 -27 41
c-36 55 -95 100 -168 130 -49 19 -83 25 -167 28 -58 2 -119 1 -136 -1z"/>
<path d="M228150 95794 c-70 -10 -227 -66 -310 -112 -61 -34 -109 -72 -175
-138 -108 -108 -167 -207 -216 -364 -30 -98 -33 -114 -33 -250 0 -136 3 -152
33 -250 49 -157 108 -256 216 -364 107 -107 207 -167 360 -218 95 -31 107 -32
255 -32 147 -1 160 1 256 31 289 93 484 285 574 568 74 231 49 479 -69 695
-105 192 -277 330 -500 401 -82 26 -115 31 -226 34 -71 2 -146 1 -165 -1z"/>
<path d="M200130 95534 c-70 -10 -227 -66 -310 -112 -61 -34 -109 -72 -175
-138 -108 -108 -167 -207 -216 -364 -30 -98 -33 -114 -33 -250 0 -136 3 -152
33 -250 49 -157 108 -256 216 -364 107 -107 207 -167 360 -218 95 -31 107 -32
255 -32 147 -1 160 1 256 31 289 93 484 285 574 568 74 231 49 479 -69 695
-105 192 -277 330 -500 401 -82 26 -115 31 -226 34 -71 2 -146 1 -165 -1z"/>
<path d="M136840 90051 c-49 -10 -75 -26 -101 -63 -31 -43 -30 -132 4 -263 48
-185 45 -377 -8 -551 -28 -93 -26 -120 10 -134 43 -16 206 52 290 121 101 83
149 187 143 315 -3 73 -8 91 -46 166 -24 47 -61 104 -83 127 -22 22 -38 41
-35 41 40 0 316 -68 362 -89 118 -55 154 -155 154 -431 l0 -165 -98 -40 c-406
-165 -657 -418 -738 -745 -29 -117 -26 -373 5 -500 81 -320 283 -524 606 -613
104 -29 120 -30 300 -31 188 0 191 0 295 33 135 42 253 108 351 196 152 136
249 288 304 475 26 86 29 109 28 250 0 127 -4 170 -21 237 -73 273 -225 461
-531 658 l-71 45 0 192 c-1 106 -5 223 -9 260 -28 217 -211 367 -530 435 -122
26 -492 83 -526 82 -11 -1 -36 -4 -55 -8z m950 -1224 c202 -182 280 -303 326
-505 24 -102 23 -344 0 -452 -46 -209 -141 -345 -288 -410 -108 -47 -259 -48
-360 0 -135 63 -269 252 -316 445 -26 108 -23 354 6 460 62 223 200 389 431
521 42 24 78 44 81 44 3 0 57 -46 120 -103z"/>
<path d="M132452 89121 l-23 -32 24 -42 c56 -94 133 -140 252 -152 172 -16
271 -81 336 -220 72 -154 79 -413 16 -617 -34 -110 -107 -192 -204 -228 -46
-17 -79 -20 -221 -20 -162 -1 -168 -1 -194 -25 -26 -23 -28 -29 -28 -108 0
-124 -1 -123 220 -130 157 -4 182 -7 237 -29 81 -33 114 -61 157 -132 43 -73
65 -165 75 -316 14 -227 -14 -378 -93 -492 -71 -105 -161 -158 -294 -172 -105
-11 -242 30 -322 96 -44 36 -115 129 -147 193 -63 123 -100 332 -89 492 4 62
2 107 -5 133 -14 45 -21 45 -114 7 -196 -81 -285 -241 -272 -490 8 -164 57
-276 176 -402 117 -124 264 -209 441 -255 71 -19 112 -22 245 -22 136 0 175 4
261 25 324 80 575 290 665 555 24 71 31 111 36 212 11 243 -56 429 -208 578
-58 58 -168 130 -237 158 l-43 17 66 36 c164 90 280 247 336 456 31 114 30
325 -1 444 -69 268 -232 417 -526 481 -70 15 -150 22 -297 27 l-202 6 -23 -32z"/>
<path d="M134440 89140 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
-269 0 -149 3 -187 23 -260 77 -292 269 -563 518 -731 59 -40 80 -49 115 -49
39 0 49 5 96 53 70 71 70 95 1 162 -235 229 -355 664 -294 1063 27 175 63 259
147 338 77 73 110 89 188 88 107 -1 185 -56 236 -169 44 -95 55 -175 61 -423
l5 -233 35 -14 c45 -19 291 -20 343 -1 l35 13 6 214 c9 299 39 424 123 525 74
88 197 112 295 58 224 -121 317 -605 197 -1017 -47 -160 -154 -339 -268 -447
-49 -47 -58 -61 -57 -90 0 -31 7 -40 61 -79 76 -54 98 -52 200 17 93 63 235
134 363 183 55 20 109 41 119 45 14 5 17 4 12 -4 -4 -8 3 -16 19 -22 31 -12
145 -13 163 -2 7 5 21 57 31 117 l19 109 -22 18 c-63 53 -278 -16 -441 -141
l-70 -55 66 70 c223 235 321 482 304 764 -24 386 -237 684 -559 779 -97 29
-260 39 -337 21 -162 -37 -301 -137 -382 -272 l-34 -56 -25 52 c-89 180 -275
288 -494 285 -49 -1 -109 -5 -134 -9z"/>
<path d="M139680 89141 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M130995 86050 c-177 -30 -342 -117 -470 -246 -106 -106 -166 -206
-216 -359 -31 -95 -33 -107 -33 -255 0 -148 2 -160 33 -255 50 -153 110 -253
216 -359 107 -108 209 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 180 57 318 146 425 274 142 171 220 424 198 645 -30 295 -208 561 -457 687
-131 65 -238 92 -381 96 -69 1 -147 -1 -175 -6z"/>
<path d="M136971 83960 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z"/>
<path d="M134080 83950 c-315 -31 -545 -185 -642 -430 -30 -76 -55 -196 -61
-297 -5 -84 -7 -83 113 -83 137 0 254 49 297 125 12 21 27 68 34 104 30 165
67 234 152 288 158 100 463 70 564 -54 84 -106 95 -162 100 -548 4 -268 3
-318 -8 -309 -8 6 -34 27 -59 46 -60 48 -181 112 -255 134 -47 15 -91 19 -205
18 -127 -1 -157 -4 -240 -28 -52 -15 -124 -44 -160 -64 -195 -108 -348 -322
-416 -582 -25 -96 -27 -121 -28 -295 0 -176 2 -197 27 -290 37 -134 93 -248
171 -348 121 -155 259 -253 434 -310 94 -30 102 -31 277 -30 173 1 184 2 285
33 311 94 492 303 572 661 23 104 23 106 23 839 l0 735 -27 97 c-103 369 -364
574 -753 591 -60 3 -148 2 -195 -3z m270 -1270 c83 -27 171 -77 238 -135 l52
-47 0 -361 c0 -199 -5 -402 -10 -450 -36 -311 -230 -489 -492 -450 -97 14
-160 45 -230 115 -130 130 -188 330 -188 645 1 418 108 645 334 704 52 14 225
1 296 -21z"/>
<path d="M143435 83951 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
-1238 4 -779 4 -791 26 -884 80 -334 272 -542 577 -627 92 -25 114 -28 280
-28 176 0 182 1 279 33 302 98 520 344 604 681 23 94 26 125 26 290 1 163 -2
196 -23 280 -49 195 -155 366 -297 481 -86 70 -183 120 -305 155 -82 24 -112
27 -239 28 -128 1 -153 -2 -215 -23 -86 -29 -173 -79 -243 -138 l-53 -45 3
453 c4 477 7 511 49 524 39 13 147 -28 320 -120 199 -107 264 -133 362 -145
250 -29 442 109 507 365 15 60 17 82 9 98 -25 47 -26 47 -123 6 -202 -84 -382
-114 -547 -89 -46 6 -179 36 -296 66 -222 56 -305 68 -388 55z m732 -1278 c75
-30 155 -104 196 -180 41 -76 73 -218 87 -378 38 -436 -80 -753 -320 -855 -76
-32 -220 -33 -299 -1 -104 42 -175 111 -234 226 -54 104 -57 133 -57 595 l0
426 43 36 c101 84 214 141 312 158 79 13 202 1 272 -27z"/>
<path d="M126365 83890 c-177 -30 -342 -117 -470 -246 -106 -106 -166 -206
-216 -359 -31 -95 -33 -107 -33 -255 0 -148 2 -160 33 -255 50 -153 110 -253
216 -359 107 -108 209 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 180 57 318 146 425 274 142 171 220 424 198 645 -30 295 -208 561 -457 687
-131 65 -238 92 -381 96 -69 1 -147 -1 -175 -6z"/>
<path d="M128250 83110 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M135930 83110 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M141980 83110 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M130070 82940 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328
-318 -508 -30 -104 -32 -120 -33 -290 -1 -158 1 -190 21 -260 76 -274 277
-531 565 -725 103 -68 347 -185 522 -250 77 -28 156 -57 175 -65 31 -11 14
-12 -135 -8 -237 7 -295 -13 -329 -114 -19 -56 -33 -183 -20 -183 5 0 43 11
85 25 105 33 198 39 384 26 275 -21 481 -64 800 -170 288 -95 495 -181 667
-277 l97 -55 37 16 c30 12 35 19 31 37 -3 13 -9 45 -13 73 -9 67 -53 170 -99
234 -90 125 -159 161 -1035 541 -647 280 -848 388 -1017 544 -133 123 -208
244 -251 405 -22 84 -25 117 -26 261 0 177 10 249 51 370 48 139 112 233 198
288 54 34 160 36 221 4 79 -41 154 -156 188 -290 24 -92 38 -301 31 -454 l-7
-136 27 -36 27 -36 157 0 157 0 28 29 27 28 8 274 c10 295 19 353 74 470 35
73 101 147 152 170 54 25 144 25 194 0 48 -25 107 -91 131 -147 49 -114 62
-222 61 -521 l-1 -251 31 -26 c30 -25 34 -26 182 -26 151 1 152 1 184 28 l31
27 5 265 c3 211 8 278 22 330 40 148 110 253 206 304 71 39 181 43 245 9 135
-72 202 -255 191 -520 -9 -221 -52 -328 -201 -503 -75 -87 -96 -118 -92 -134
3 -12 6 -27 6 -35 0 -11 14 -12 74 -7 87 8 194 42 274 88 151 86 292 283 349
488 13 50 17 102 17 220 0 144 -2 161 -29 240 -58 174 -196 316 -370 381 -200
74 -439 64 -603 -28 -88 -49 -207 -168 -257 -258 -39 -68 -39 -69 -45 -39 -20
95 -140 244 -252 311 -113 69 -299 83 -433 32 -141 -52 -259 -167 -324 -314
l-23 -50 -30 60 c-76 149 -198 265 -323 309 -57 21 -220 29 -305 16z"/>
<path d="M139960 82941 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M146020 82941 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M112748 42610 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
-11 -122 -52 -228 -89 -353 -125 -492 -188 -635 -287 -432 -299 -663 -723
-663 -1219 0 -445 182 -801 541 -1057 78 -56 101 -68 134 -68 36 0 47 6 93 53
72 73 71 89 -19 185 -173 185 -253 383 -279 685 -30 350 73 670 244 760 64 34
160 30 223 -9 86 -53 139 -160 162 -329 6 -42 11 -164 11 -271 l0 -194 36 -15
c27 -11 74 -15 174 -15 100 0 147 4 174 15 l36 15 0 103 c1 505 93 720 310
721 79 0 126 -21 194 -91 91 -92 139 -223 158 -429 34 -389 -77 -744 -302
-961 -54 -52 -60 -62 -60 -98 0 -37 4 -43 58 -80 78 -54 106 -51 192 23 408
349 585 685 566 1072 -12 256 -101 457 -273 621 -125 119 -267 177 -453 186
-129 6 -197 -7 -304 -57 -109 -52 -231 -174 -267 -267 -10 -26 -10 -25 -38 33
-61 129 -205 245 -349 279 -79 19 -230 17 -286 -4 -16 -7 -31 -9 -34 -6 -11
11 168 176 248 227 190 124 359 190 720 281 250 64 363 124 409 221 77 158
-60 268 -374 300 -59 6 -60 6 -77 -24z"/>
<path d="M107010 41790 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M98280 41631 c-328 -39 -570 -289 -570 -586 0 -38 7 -94 14 -123 40
-149 174 -272 330 -304 61 -12 90 -7 123 20 l21 19 -33 99 c-60 179 -65 385
-13 506 73 170 322 186 430 28 63 -92 71 -138 76 -457 3 -232 1 -283 -10 -283
-18 0 -212 -94 -273 -133 -270 -169 -445 -381 -516 -622 -21 -71 -24 -100 -24
-250 0 -146 4 -183 24 -265 79 -313 290 -527 603 -612 105 -28 125 -31 293
-32 160 -1 189 2 259 22 178 51 307 139 478 325 130 141 184 227 224 354 25
79 27 103 28 243 0 119 -4 170 -17 220 -78 286 -248 496 -563 698 l-81 52 -6
278 c-4 259 -6 282 -30 357 -68 222 -235 377 -460 429 -81 19 -223 27 -307 17z
m651 -1346 c267 -233 363 -431 362 -750 -1 -149 -11 -231 -45 -335 -69 -216
-221 -330 -444 -331 -74 0 -103 4 -146 22 -348 148 -482 711 -263 1104 45 80
159 203 239 258 72 49 188 116 198 114 4 -1 48 -38 99 -82z"/>
<path d="M101105 41624 c-112 -18 -233 -87 -305 -176 -50 -62 -91 -155 -178
-399 -60 -168 -90 -221 -138 -244 -109 -52 -218 39 -245 206 -20 118 2 228 78
391 45 96 45 96 27 123 -18 25 -22 26 -101 22 -70 -3 -93 -9 -155 -40 -118
-58 -216 -170 -259 -295 -27 -77 -27 -209 1 -300 70 -235 264 -362 550 -362
156 0 270 34 372 111 117 88 171 181 249 436 82 265 129 318 250 282 55 -17
104 -73 130 -149 20 -59 23 -88 27 -315 l4 -251 30 -17 c24 -14 56 -17 175
-17 129 0 149 2 178 20 l33 20 4 268 c4 261 5 268 30 323 30 67 75 104 142
119 107 24 191 -18 236 -120 l25 -55 0 -840 c0 -837 0 -840 -23 -920 -62 -226
-208 -390 -427 -483 -113 -48 -228 -71 -390 -78 -309 -14 -563 63 -716 217
-81 82 -109 146 -116 269 -6 101 11 177 64 293 34 72 35 80 24 117 -14 46 -24
48 -130 26 -166 -36 -318 -160 -375 -306 -64 -162 -27 -393 86 -537 153 -194
448 -300 903 -323 449 -22 797 50 1070 220 223 139 355 320 419 575 33 132 38
268 34 1025 -4 718 -5 747 -24 805 -36 104 -70 160 -135 218 -73 67 -123 91
-249 124 -85 22 -109 24 -235 20 -202 -7 -304 -47 -401 -155 l-41 -46 -27 41
c-36 55 -95 100 -168 130 -49 19 -83 25 -167 28 -58 2 -119 1 -136 -1z"/>
<path d="M103740 41620 c-149 -20 -328 -100 -455 -203 -166 -134 -276 -296
-335 -493 -32 -105 -33 -116 -34 -289 -1 -158 2 -191 22 -265 28 -106 36 -126
84 -224 161 -326 464 -567 980 -782 64 -26 116 -49 115 -50 -1 -1 -42 2 -92 7
-130 11 -244 11 -290 -2 -92 -25 -135 -93 -135 -215 l0 -63 38 -6 c20 -4 42
-8 47 -10 6 -1 23 9 38 24 l29 26 184 -2 c250 -4 494 -39 714 -105 189 -56
690 -257 889 -357 l78 -40 27 28 26 27 -16 78 c-31 153 -111 275 -228 350 -30
19 -238 120 -462 226 -440 206 -977 479 -1113 567 -276 178 -413 359 -465 608
-46 223 -23 468 59 642 59 126 134 208 234 255 40 19 63 22 166 22 106 -1 128
-4 190 -28 96 -37 170 -86 236 -159 l56 -61 -34 -72 c-18 -40 -45 -122 -60
-181 -25 -96 -28 -126 -27 -263 0 -136 4 -168 28 -258 89 -336 313 -561 647
-648 96 -25 119 -28 294 -27 181 0 195 1 295 30 198 57 358 160 486 315 287
346 295 916 18 1271 -163 208 -400 319 -714 333 -115 5 -161 3 -222 -9 -179
-38 -373 -133 -474 -232 l-62 -61 -26 43 c-67 105 -247 210 -426 248 -74 16
-214 18 -310 5z m1480 -240 c172 -25 307 -137 400 -332 50 -103 76 -207 91
-351 37 -372 -89 -666 -326 -757 -89 -34 -234 -33 -328 4 -151 57 -265 192
-334 391 -72 210 -80 489 -21 685 42 140 148 275 254 325 87 41 157 51 264 35z"/>
<path d="M109375 41624 c-112 -18 -233 -87 -305 -176 -50 -62 -91 -155 -178
-399 -60 -168 -90 -221 -138 -244 -109 -52 -218 39 -245 206 -20 118 2 228 78
391 45 96 45 96 27 123 -18 25 -22 26 -101 22 -70 -3 -93 -9 -155 -40 -118
-58 -216 -170 -259 -295 -27 -77 -27 -209 1 -300 70 -235 264 -362 550 -362
156 0 270 34 372 111 117 88 171 181 249 436 82 265 129 318 250 282 55 -17
104 -73 130 -149 20 -59 23 -88 27 -315 l4 -251 30 -17 c24 -14 56 -17 175
-17 129 0 149 2 178 20 l33 20 4 268 c4 261 5 268 30 323 30 67 75 104 142
119 107 24 191 -18 236 -120 l25 -55 0 -840 c0 -837 0 -840 -23 -920 -62 -226
-208 -390 -427 -483 -113 -48 -228 -71 -390 -78 -309 -14 -563 63 -716 217
-81 82 -109 146 -116 269 -6 101 11 177 64 293 34 72 35 80 24 117 -14 46 -24
48 -130 26 -166 -36 -318 -160 -375 -306 -64 -162 -27 -393 86 -537 153 -194
448 -300 903 -323 449 -22 797 50 1070 220 223 139 355 320 419 575 33 132 38
268 34 1025 -4 718 -5 747 -24 805 -36 104 -70 160 -135 218 -73 67 -123 91
-249 124 -85 22 -109 24 -235 20 -202 -7 -304 -47 -401 -155 l-41 -46 -27 41
c-36 55 -95 100 -168 130 -49 19 -83 25 -167 28 -58 2 -119 1 -136 -1z"/>
<path d="M114930 41621 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M116085 39140 c-177 -30 -342 -117 -470 -246 -106 -106 -166 -206
-216 -359 -31 -95 -33 -107 -33 -255 0 -148 2 -160 33 -255 50 -153 110 -253
216 -359 107 -108 209 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 180 57 318 146 425 274 142 171 220 424 198 645 -30 295 -208 561 -457 687
-131 65 -238 92 -381 96 -69 1 -147 -1 -175 -6z"/>
<path d="M108071 34680 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z"/>
<path d="M114770 34681 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63
-66 100 -115 116 -152 50 -117 51 -134 51 -921 0 -764 6 -902 42 -1055 74
-317 288 -547 592 -637 95 -29 111 -30 286 -31 174 -1 191 0 290 27 467 126
736 543 690 1069 -44 509 -342 801 -860 846 -211 18 -349 -16 -509 -123 -30
-20 -50 -31 -44 -24 44 59 194 242 227 276 23 24 54 51 70 59 27 14 31 14 44
-3 8 -11 19 -32 24 -47 10 -28 13 -29 57 -22 25 4 49 9 53 11 18 11 49 123 49
176 1 110 -54 160 -176 162 -78 1 -111 -12 -176 -71 -66 -60 -200 -250 -225
-322 -11 -31 -13 10 -14 285 0 345 -2 362 -56 459 -31 55 -115 138 -172 170
-102 57 -191 66 -342 36z m1115 -1261 c256 -37 413 -229 466 -575 16 -102 16
-370 0 -455 -44 -238 -141 -368 -315 -422 -100 -30 -243 -22 -336 20 -178 80
-293 271 -340 562 -6 36 -14 188 -17 338 l-6 273 54 56 c100 102 243 184 355
202 67 12 61 12 139 1z"/>
<path d="M96095 34669 c-197 -38 -194 -32 -73 -166 167 -182 169 -190 175
-845 3 -280 2 -508 -1 -508 -3 0 -29 15 -58 33 -136 87 -337 133 -541 124
-135 -5 -211 -22 -304 -68 -126 -61 -211 -157 -254 -287 -57 -170 -4 -443 94
-488 28 -12 356 -47 365 -39 2 2 8 22 13 44 8 36 6 46 -20 88 -78 127 -97 285
-47 387 23 48 35 59 83 83 50 24 67 27 147 26 140 -3 279 -37 444 -109 l77
-33 3 -758 c2 -625 0 -773 -12 -842 -43 -245 -218 -391 -470 -391 -194 0 -302
107 -346 344 -17 93 -6 295 24 431 l23 105 -34 30 c-18 17 -36 30 -39 30 -15
0 -107 -54 -164 -96 -183 -134 -270 -284 -270 -464 0 -136 39 -245 121 -334
119 -130 266 -222 429 -266 115 -32 374 -35 490 -6 300 74 537 293 621 572 49
163 50 214 47 1694 l-3 1375 -24 58 c-43 109 -152 217 -259 257 -63 24 -169
33 -237 19z"/>
<path d="M100720 34670 c-315 -31 -545 -185 -642 -430 -30 -76 -55 -196 -61
-297 -5 -84 -7 -83 113 -83 137 0 254 49 297 125 12 21 27 68 34 104 30 165
67 234 152 288 158 100 463 70 564 -54 84 -106 95 -162 100 -548 4 -268 3
-318 -8 -309 -8 6 -34 27 -59 46 -60 48 -181 112 -255 134 -47 15 -91 19 -205
18 -127 -1 -157 -4 -240 -28 -52 -15 -124 -44 -160 -64 -195 -108 -348 -322
-416 -582 -25 -96 -27 -121 -28 -295 0 -176 2 -197 27 -290 37 -134 93 -248
171 -348 121 -155 259 -253 434 -310 94 -30 102 -31 277 -30 173 1 184 2 285
33 311 94 492 303 572 661 23 104 23 106 23 839 l0 735 -27 97 c-103 369 -364
574 -753 591 -60 3 -148 2 -195 -3z m270 -1270 c83 -27 171 -77 238 -135 l52
-47 0 -361 c0 -199 -5 -402 -10 -450 -36 -311 -230 -489 -492 -450 -97 14
-160 45 -230 115 -130 130 -188 330 -188 645 1 418 108 645 334 704 52 14 225
1 296 -21z"/>
<path d="M98095 33664 c-112 -18 -233 -87 -305 -176 -50 -62 -91 -155 -178
-399 -60 -168 -90 -221 -138 -244 -109 -52 -218 39 -245 206 -20 118 2 228 78
391 45 96 45 96 27 123 -18 25 -22 26 -101 22 -70 -3 -93 -9 -155 -40 -118
-58 -216 -170 -259 -295 -27 -77 -27 -209 1 -300 70 -235 264 -362 550 -362
156 0 270 34 372 111 117 88 171 181 249 436 82 265 129 318 250 282 55 -17
104 -73 130 -149 20 -59 23 -88 27 -315 l4 -251 30 -17 c24 -14 56 -17 175
-17 129 0 149 2 178 20 l33 20 4 268 c4 261 5 268 30 323 30 67 75 104 142
119 107 24 191 -18 236 -120 l25 -55 0 -840 c0 -837 0 -840 -23 -920 -62 -226
-208 -390 -427 -483 -113 -48 -228 -71 -390 -78 -309 -14 -563 63 -716 217
-81 82 -109 146 -116 269 -6 101 11 177 64 293 34 72 35 80 24 117 -14 46 -24
48 -130 26 -166 -36 -318 -160 -375 -306 -64 -162 -27 -393 86 -537 153 -194
448 -300 903 -323 449 -22 797 50 1070 220 223 139 355 320 419 575 33 132 38
268 34 1025 -4 718 -5 747 -24 805 -36 104 -70 160 -135 218 -73 67 -123 91
-249 124 -85 22 -109 24 -235 20 -202 -7 -304 -47 -401 -155 l-41 -46 -27 41
c-36 55 -95 100 -168 130 -49 19 -83 25 -167 28 -58 2 -119 1 -136 -1z"/>
<path d="M102650 33660 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328
-318 -508 -30 -104 -32 -120 -33 -290 -1 -158 1 -190 21 -260 76 -274 277
-531 565 -725 103 -68 347 -185 522 -250 77 -28 156 -57 175 -65 31 -11 14
-12 -135 -8 -237 7 -295 -13 -329 -114 -19 -56 -33 -183 -20 -183 5 0 43 11
85 25 105 33 198 39 384 26 275 -21 481 -64 800 -170 288 -95 495 -181 667
-277 l97 -55 37 16 c30 12 35 19 31 37 -3 13 -9 45 -13 73 -9 67 -53 170 -99
234 -90 125 -159 161 -1035 541 -647 280 -848 388 -1017 544 -133 123 -208
244 -251 405 -22 84 -25 117 -26 261 0 177 10 249 51 370 48 139 112 233 198
288 54 34 160 36 221 4 79 -41 154 -156 188 -290 24 -92 38 -301 31 -454 l-7
-136 27 -36 27 -36 157 0 157 0 28 29 27 28 8 274 c10 295 19 353 74 470 35
73 101 147 152 170 54 25 144 25 194 0 48 -25 107 -91 131 -147 49 -114 62
-222 61 -521 l-1 -251 31 -26 c30 -25 34 -26 182 -26 151 1 152 1 184 28 l31
27 5 265 c3 211 8 278 22 330 40 148 110 253 206 304 71 39 181 43 245 9 135
-72 202 -255 191 -520 -9 -221 -52 -328 -201 -503 -75 -87 -96 -118 -92 -134
3 -12 6 -27 6 -35 0 -11 14 -12 74 -7 87 8 194 42 274 88 151 86 292 283 349
488 13 50 17 102 17 220 0 144 -2 161 -29 240 -58 174 -196 316 -370 381 -200
74 -439 64 -603 -28 -88 -49 -207 -168 -257 -258 -39 -68 -39 -69 -45 -39 -20
95 -140 244 -252 311 -113 69 -299 83 -433 32 -141 -52 -259 -167 -324 -314
l-23 -50 -30 60 c-76 149 -198 265 -323 309 -57 21 -220 29 -305 16z"/>
<path d="M106750 33661 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M113460 33661 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M117840 33663 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M111250 33580 c-98 -193 -66 -324 110 -452 19 -15 98 -61 175 -103
158 -87 195 -118 231 -192 23 -46 26 -62 23 -136 -3 -71 -9 -93 -38 -151 -38
-75 -77 -114 -152 -152 -44 -22 -68 -26 -177 -31 -101 -4 -134 -9 -159 -25
-32 -19 -33 -21 -33 -90 0 -55 4 -76 21 -99 20 -28 23 -29 102 -29 184 -1 280
-33 371 -126 60 -62 97 -130 123 -224 24 -88 24 -306 -1 -405 -48 -196 -181
-357 -344 -418 -48 -17 -79 -21 -187 -20 -119 0 -137 3 -210 30 -102 38 -209
108 -270 175 -118 130 -205 311 -246 513 -31 149 -33 491 -5 660 66 399 239
810 452 1072 41 51 41 53 31 97 -6 25 -16 46 -23 46 -7 0 -53 -13 -104 -30
-335 -109 -564 -403 -705 -904 -62 -221 -78 -348 -79 -631 -1 -278 9 -359 66
-538 135 -427 471 -702 913 -747 387 -40 761 89 1003 345 152 160 213 312 213
532 1 155 -37 275 -132 414 -74 109 -235 235 -352 275 l-48 16 92 45 c216 106
332 298 314 520 -10 134 -65 228 -183 315 -30 22 -154 89 -276 148 -126 62
-239 123 -263 144 -39 34 -113 159 -113 191 0 11 -50 25 -92 25 -12 0 -28 -21
-48 -60z"/>
                </g>
            </svg>



        </div>

        <table class="machveneblebi-right">
            <?php
            include('../connection.php');
            $query = mysqli_query($link, "select * from `regions` where ID = 11");
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