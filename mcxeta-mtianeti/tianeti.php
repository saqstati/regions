<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="http://www.geostat.ge/regions/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="სტატისტიკური ინფორმაცია მცხეთა-მთიანეთის რეგიონის თიანეთის შესახებ" />
    <meta property="og:description" content="სტატისტიკური ინფორმაცია მცხეთა-მთიანეთის რეგიონის თიანეთის შესახებ" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <title class="tr" Key="PAGE_TITLE">სტატისტიკური ინფორმაცია მცხეთა-მთიანეთის რეგიონის თიანეთის შესახებ</title>
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
                <p id="pagetitlename" class="tr" Key="REGION14">სტატისტიკური ინფორმაცია მცხეთა-მთიანეთის რეგიონის თიანეთის შესახებ</p>
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
                <a class="back-btn" href="../mcxeta-mtianeti.php"> <span class="tr" Key="backBtn">უკან დაბრუნება</span></a>
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

            <svg id="dushetiSVG" version="1.0" xmlns="http://www.w3.org/2000/svg" width="1000px" height="100%" viewBox="0 0 21600.000000 28800.000000" preserveAspectRatio="xMidYMid meet">

                <g transform="translate(0.000000,28800.000000) scale(0.100000,-0.100000)">
                    <a xlink:href="../mcxeta-mtianeti.php" class="text-decoration-none">
                        <path id="group5-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="M171270 275059 c-19 -6 -49 -22 -67 -35 -18 -13 -233 -242 -478 -509
l-445 -484 -513 -399 c-281 -219 -548 -425 -592 -459 l-80 -60 -950 -348 -950
-348 -311 -208 -311 -207 -3503 -1612 c-1927 -887 -3517 -1621 -3534 -1633
-21 -14 -313 -445 -871 -1283 -462 -695 -847 -1272 -855 -1283 -13 -17 -119
-39 -723 -151 l-708 -130 -861 -470 -862 -471 -771 -19 c-423 -11 -786 -22
-805 -26 -19 -3 -334 -157 -699 -341 l-664 -336 -1046 -279 c-575 -153 -1295
-340 -1600 -414 l-555 -135 -1415 -180 -1416 -179 -1689 -315 c-1387 -259
-1695 -320 -1720 -338 -17 -11 -392 -311 -834 -665 l-803 -643 -827 -145
c-725 -126 -977 -165 -2042 -314 l-1215 -171 -750 -202 -750 -202 -870 -5
-870 -5 -1340 -501 c-1291 -483 -1383 -519 -2505 -983 l-1165 -483 -1350 -676
-1349 -677 -511 -866 -511 -866 -315 -329 c-230 -241 -327 -349 -361 -404 -25
-41 -132 -223 -238 -405 -116 -201 -292 -481 -448 -716 l-256 -385 -1481 -494
-1480 -493 -973 -649 -973 -649 -552 219 c-304 121 -644 255 -756 298 -146 57
-206 85 -213 99 -4 11 -76 276 -158 590 -164 622 -159 591 -141 820 l6 90 871
1395 c480 767 874 1409 878 1425 3 17 44 377 90 800 l85 770 191 600 c205 642
213 676 173 730 -12 17 -257 265 -545 551 -433 432 -529 523 -557 528 -18 3
-187 6 -375 6 l-341 -1 -1474 -162 -1474 -163 -1457 805 -1457 806 -174 289
c-107 177 -186 299 -206 315 -22 17 -236 95 -680 247 l-648 221 -1000 500
-1000 500 -1045 326 c-674 210 -1114 342 -1240 372 -107 25 -702 172 -1321
326 -1033 257 -1130 279 -1166 270 -22 -6 -52 -23 -67 -38 -15 -16 -481 -858
-1036 -1873 l-1008 -1845 -91 -465 c-50 -256 -124 -628 -163 -827 l-72 -362
-985 -1148 c-874 -1018 -1061 -1242 -1643 -1968 l-657 -820 -118 -58 c-65 -32
-366 -185 -670 -338 -469 -238 -555 -285 -572 -312 -10 -18 -166 -396 -346
-842 l-326 -810 -342 -241 -342 -241 -940 -208 c-592 -131 -952 -215 -972
-227 -27 -16 -73 -87 -73 -112 0 -4 -7 -22 -15 -39 -8 -18 -159 -468 -337
-1002 l-322 -970 -6 -1658 -5 -1657 -630 -465 -630 -466 -679 -677 -679 -677
-371 -470 c-205 -258 -381 -484 -393 -500 -64 -92 -617 -1111 -917 -1690
l-347 -670 -197 -195 -197 -195 -301 -188 c-166 -103 -311 -198 -322 -210 -11
-12 -138 -184 -281 -382 l-261 -360 -192 -375 c-106 -206 -308 -611 -451 -900
-142 -289 -379 -758 -525 -1043 l-267 -518 -268 -347 c-174 -226 -279 -371
-301 -417 -19 -38 -92 -191 -163 -340 l-130 -270 -71 -315 c-64 -282 -76 -350
-111 -650 l-39 -335 -135 -310 c-144 -332 -174 -423 -331 -1015 -57 -212 -69
-245 -121 -340 -139 -249 -331 -664 -475 -1025 -121 -303 -190 -456 -381 -845
l-232 -475 -102 -420 -102 -420 -218 -500 -218 -500 -224 -372 -225 -373 -112
-101 c-62 -55 -129 -110 -149 -122 -19 -12 -45 -34 -56 -49 -12 -14 -112 -105
-224 -200 l-202 -174 -160 -68 c-88 -38 -178 -76 -200 -86 -22 -10 -83 -37
-135 -60 l-95 -41 -181 -7 -180 -8 -385 -241 -385 -240 -459 -218 -460 -218
-229 -49 -229 -48 -284 40 c-254 37 -328 52 -701 146 -229 58 -610 164 -847
236 -248 75 -730 208 -1140 314 l-710 185 -470 166 c-258 91 -490 173 -515
182 -54 21 -695 524 -745 585 -201 247 -298 387 -442 644 -124 221 -163 301
-228 467 -62 160 -99 236 -183 380 -58 99 -118 199 -134 223 -41 60 -264 250
-308 262 -61 17 -563 71 -595 64 -16 -3 -109 -54 -205 -112 l-175 -106 -250
-247 c-229 -226 -264 -256 -415 -359 -91 -63 -181 -126 -202 -142 -41 -32
-366 -514 -379 -563 -5 -16 -27 -243 -49 -503 l-41 -473 41 -558 40 -557 64
-344 c58 -312 65 -366 76 -560 8 -152 8 -268 1 -398 l-10 -184 -62 -101 c-35
-56 -122 -172 -194 -257 -72 -85 -141 -169 -152 -186 -12 -16 -90 -156 -174
-310 -106 -196 -188 -331 -274 -454 -117 -166 -131 -192 -289 -527 l-165 -352
-41 -221 -40 -220 -102 -213 c-92 -193 -109 -238 -189 -505 l-88 -293 -163
-177 c-104 -112 -230 -234 -348 -336 -102 -88 -214 -190 -250 -226 -48 -49
-148 -193 -378 -544 l-314 -478 -191 -447 -191 -446 -145 -170 c-80 -93 -249
-278 -376 -410 -240 -251 -469 -529 -486 -590 -7 -24 -5 -70 6 -153 15 -117
15 -121 -10 -282 -14 -90 -29 -168 -32 -174 -47 -78 -271 -370 -389 -506 -168
-195 -159 -183 -416 -580 -110 -170 -256 -378 -361 -515 -135 -176 -206 -279
-299 -438 -148 -251 -378 -570 -663 -917 -111 -135 -215 -265 -231 -290 -62
-93 -192 -326 -198 -355 -4 -19 7 -88 29 -185 l36 -155 -11 -201 -10 -200 -49
-146 c-27 -80 -59 -190 -71 -243 -21 -91 -78 -243 -130 -345 -13 -25 -138
-243 -279 -485 -142 -242 -274 -471 -295 -508 -21 -37 -93 -213 -160 -390
-123 -321 -127 -336 -197 -667 -16 -73 -27 -102 -48 -125 -113 -122 -362 -408
-388 -445 -44 -65 -148 -433 -164 -578 -6 -59 -19 -174 -30 -255 l-19 -148
-200 -241 c-216 -260 -205 -244 -358 -574 -73 -156 -92 -187 -228 -371 -160
-214 -582 -826 -662 -958 -26 -44 -94 -148 -149 -231 -56 -83 -165 -254 -243
-380 -140 -226 -143 -231 -294 -384 -84 -85 -162 -169 -174 -185 -31 -46 -192
-400 -278 -613 -42 -103 -82 -198 -89 -212 -7 -14 -75 -97 -152 -184 -132
-152 -147 -166 -333 -302 -107 -79 -208 -159 -225 -178 -16 -18 -54 -89 -84
-157 -30 -68 -74 -164 -97 -214 -23 -49 -68 -175 -99 -280 -31 -104 -62 -204
-68 -221 -9 -23 -61 -70 -182 -166 -175 -138 -412 -287 -635 -398 -58 -29
-172 -89 -255 -133 -142 -77 -156 -87 -285 -212 -160 -155 -269 -269 -297
-310 -11 -16 -62 -109 -113 -205 -74 -139 -153 -262 -388 -600 -163 -234 -310
-443 -329 -465 -18 -22 -105 -124 -193 -227 l-160 -186 -312 -173 c-172 -95
-466 -257 -653 -360 -217 -119 -378 -216 -445 -265 -58 -43 -246 -179 -417
-301 l-313 -224 -112 -35 c-62 -20 -225 -74 -363 -120 -137 -46 -279 -88 -315
-94 -36 -7 -330 -77 -655 -156 -324 -79 -644 -153 -710 -164 -66 -11 -154 -27
-195 -35 -41 -8 -176 -31 -300 -50 -402 -63 -422 -69 -525 -135 -49 -31 -182
-115 -295 -185 -113 -70 -215 -137 -228 -148 -13 -12 -114 -145 -224 -297
-111 -151 -215 -290 -232 -309 -17 -18 -150 -131 -296 -250 -146 -119 -371
-306 -500 -416 -129 -110 -253 -214 -275 -230 -22 -16 -67 -54 -100 -83 -33
-30 -167 -126 -297 -214 -131 -88 -249 -171 -262 -186 -55 -60 -116 -137 -172
-215 -77 -108 -100 -137 -423 -518 -202 -238 -327 -397 -471 -599 -108 -151
-262 -363 -341 -470 -80 -107 -148 -200 -152 -207 -4 -6 -36 -177 -72 -380
-56 -323 -74 -460 -144 -1108 -91 -840 -85 -738 -116 -2232 l-15 -732 -134
-278 c-73 -153 -136 -291 -140 -308 -3 -16 -36 -289 -71 -605 -64 -562 -66
-578 -55 -700 5 -69 17 -222 25 -340 l15 -216 -105 -412 -106 -412 125 -553
125 -554 41 -444 42 -444 173 -535 172 -535 105 -180 c57 -99 119 -209 137
-244 18 -35 149 -238 292 -452 142 -214 259 -394 259 -398 0 -13 167 -417 201
-486 58 -119 104 -129 415 -86 351 48 456 55 642 42 90 -6 179 -18 200 -26 20
-8 92 -28 158 -44 137 -35 131 -35 312 33 105 40 311 65 379 47 69 -19 75 -32
88 -206 l13 -154 58 -82 c32 -45 72 -97 89 -115 42 -48 293 -189 487 -274 195
-86 241 -124 295 -239 28 -59 38 -97 48 -182 9 -85 24 -141 70 -271 56 -158
61 -167 165 -313 81 -114 114 -169 136 -230 28 -77 35 -86 169 -225 90 -93
166 -183 212 -250 50 -74 109 -142 199 -231 148 -145 134 -139 339 -139 163 0
293 32 470 113 261 120 583 183 801 157 l98 -12 66 -58 c128 -114 186 -183
242 -285 45 -81 57 -115 67 -180 41 -270 84 -469 131 -610 74 -223 69 -217
225 -285 44 -19 89 -42 100 -50 35 -26 213 -509 202 -551 -3 -14 -43 -74 -88
-134 -45 -59 -101 -149 -125 -199 -24 -50 -68 -122 -96 -160 l-53 -70 -95 -26
c-89 -24 -104 -33 -240 -132 -80 -58 -155 -117 -166 -129 -12 -13 -61 -87
-110 -164 l-89 -139 2 -162 c1 -88 9 -206 18 -262 16 -107 20 -242 8 -242 -5
0 -51 5 -103 10 -81 9 -119 20 -260 77 -91 37 -237 106 -325 154 l-160 88
-158 31 c-101 20 -170 29 -190 25 -39 -9 -363 -204 -401 -242 -15 -15 -61 -68
-102 -119 -73 -90 -76 -95 -192 -385 l-117 -294 0 -150 c0 -116 -3 -155 -15
-173 -8 -13 -53 -44 -100 -69 -71 -39 -114 -75 -270 -227 -183 -178 -189 -182
-331 -262 -145 -81 -146 -81 -265 -98 -65 -9 -130 -19 -144 -21 -15 -2 -39 6
-62 22 -53 36 -106 40 -162 14 -25 -13 -54 -37 -65 -54 -24 -40 -143 -321
-351 -827 -121 -296 -202 -475 -345 -759 l-186 -372 -85 -491 -85 -491 -61
-101 c-34 -56 -169 -276 -300 -489 l-238 -388 -116 -332 c-254 -727 -228 -635
-269 -956 l-37 -284 -165 -220 c-131 -173 -228 -287 -467 -545 -311 -336 -391
-435 -704 -873 l-133 -185 -372 -204 c-205 -113 -508 -287 -675 -387 -166
-101 -311 -183 -321 -183 -11 0 -135 16 -276 36 -152 20 -270 32 -289 28 -17
-3 -139 -49 -271 -101 -132 -52 -265 -104 -295 -115 -121 -46 -129 -53 -220
-220 -129 -234 -149 -271 -162 -298 -6 -14 -73 -135 -147 -270 -135 -243 -136
-245 -134 -305 1 -33 11 -98 21 -145 98 -434 154 -674 157 -680 2 -4 38 -137
80 -296 42 -159 90 -328 105 -375 32 -95 36 -114 85 -443 34 -220 35 -239 35
-515 0 -313 -6 -253 96 -897 24 -151 25 -169 14 -305 -6 -79 -17 -205 -25
-279 -8 -74 -22 -209 -30 -300 l-14 -165 -99 -310 -99 -310 -180 -345 -181
-345 -210 -635 -211 -635 -15 -295 c-26 -495 -45 -911 -57 -1214 l-10 -289
-183 -406 c-101 -223 -187 -420 -190 -436 -7 -31 39 -946 50 -1000 7 -36 204
-367 266 -448 103 -134 207 -262 517 -635 l330 -397 747 -1245 c411 -685 754
-1258 764 -1275 10 -16 120 -199 245 -405 126 -206 303 -510 395 -675 92 -165
241 -430 332 -590 l166 -290 330 -1152 331 -1152 86 -438 c69 -350 104 -503
176 -763 50 -179 113 -410 140 -515 122 -472 111 -441 186 -570 79 -137 84
-158 103 -450 10 -139 22 -270 66 -695 10 -92 20 -302 23 -475 l7 -310 92
-182 93 -183 106 -91 c184 -159 295 -242 533 -405 l231 -157 167 -54 c92 -29
204 -64 249 -78 l82 -24 228 29 c244 31 333 45 568 90 393 76 952 119 1306
101 216 -12 249 -18 562 -105 l128 -35 143 21 144 21 176 -42 c173 -40 181
-41 358 -41 l181 0 181 -56 c146 -45 191 -64 234 -95 51 -39 52 -40 52 -93 0
-44 -7 -66 -36 -118 -90 -158 -124 -237 -134 -310 -5 -40 -17 -129 -26 -197
-9 -68 -24 -143 -34 -165 -40 -95 -122 -362 -156 -510 -28 -123 -35 -171 -30
-210 3 -28 11 -94 17 -146 5 -52 42 -220 80 -372 64 -254 76 -291 143 -435 40
-87 88 -192 106 -233 94 -213 249 -483 413 -723 l169 -249 292 -232 c213 -171
388 -298 654 -479 199 -136 370 -251 380 -256 9 -5 168 -45 352 -89 283 -68
381 -87 630 -122 242 -33 324 -40 453 -40 l158 0 47 -32 c26 -18 118 -85 204
-149 140 -104 173 -135 307 -285 99 -111 154 -181 161 -204 21 -73 42 -364 37
-515 -4 -148 -5 -151 -50 -270 -24 -66 -86 -238 -136 -383 -50 -144 -118 -331
-151 -415 l-60 -152 -150 -175 c-158 -184 -161 -190 -179 -315 -6 -38 -137
-751 -291 -1583 l-280 -1514 -40 -2954 c-22 -1625 -37 -2967 -34 -2982 3 -15
302 -949 663 -2077 l656 -2050 5 -2855 5 -2855 41 -70 c55 -94 469 -864 504
-936 15 -31 40 -79 57 -106 26 -41 873 -1608 1148 -2123 148 -278 465 -859
526 -967 33 -56 260 -477 505 -935 l446 -833 -11 -40 c-7 -22 -20 -71 -31
-110 -10 -38 -97 -342 -193 -675 -96 -333 -191 -669 -211 -748 l-36 -143 0
-592 0 -592 -447 -447 -448 -446 -501 -384 -500 -385 -1100 -161 c-967 -142
-1208 -182 -2009 -327 -500 -90 -1110 -203 -1355 -250 -245 -48 -639 -124
-876 -170 l-432 -83 -1872 45 c-1394 34 -1882 42 -1909 34 -20 -6 -107 -68
-196 -139 l-160 -128 -65 17 c-36 9 -175 44 -310 78 -438 109 -564 141 -640
161 -47 13 -88 18 -110 15 -19 -4 -498 -239 -1065 -523 l-1030 -517 -342 -685
c-188 -377 -347 -702 -353 -723 -11 -38 6 -131 297 -1592 19 -99 44 -196 54
-216 9 -19 157 -384 328 -811 l310 -775 -25 -388 -25 -388 22 -81 c12 -44 26
-103 31 -131 5 -27 13 -54 17 -60 4 -5 14 -31 21 -57 10 -37 10 -78 1 -200 -9
-111 -9 -193 -2 -298 16 -215 13 -313 -14 -540 -24 -202 -26 -210 -120 -514
-52 -169 -98 -313 -102 -320 -4 -6 -103 -134 -221 -285 -117 -150 -219 -283
-227 -295 -23 -34 -65 -347 -115 -846 -17 -166 -20 -271 -20 -735 0 -495 -2
-565 -25 -820 -17 -195 -25 -348 -25 -503 l0 -222 50 -233 c48 -225 50 -240
65 -527 14 -253 23 -337 65 -606 69 -436 110 -868 110 -1161 l0 -228 -72 -335
-72 -335 -232 -262 c-128 -144 -239 -272 -248 -285 -8 -13 -47 -140 -86 -282
-53 -197 -69 -268 -64 -294 4 -19 37 -101 74 -181 47 -102 88 -214 134 -368
l67 -222 24 -258 c24 -251 25 -267 13 -562 l-12 -305 -119 -199 c-96 -161
-148 -264 -267 -531 l-147 -331 -111 -430 c-110 -428 -111 -432 -157 -775 -26
-190 -50 -379 -55 -420 -14 -117 -31 -662 -23 -692 5 -15 75 -121 157 -234
l149 -207 13 -161 c7 -89 20 -328 29 -532 l16 -370 -81 -385 c-47 -220 -92
-465 -106 -574 -24 -181 -25 -211 -22 -620 l4 -430 195 -500 195 -500 22 -155
c12 -85 46 -315 76 -510 l55 -355 10 -445 c6 -245 13 -485 17 -533 l6 -88
-580 -997 -580 -997 -538 -1075 c-497 -994 -538 -1079 -538 -1126 0 -42 5 -59
29 -90 16 -22 705 -849 1530 -1839 1048 -1257 1551 -1868 1667 -2025 117 -158
215 -277 330 -400 89 -96 198 -220 240 -275 70 -92 231 -257 448 -461 l85 -80
135 -22 135 -23 237 -117 238 -116 972 -1285 c1121 -1481 1227 -1611 1504
-1851 97 -84 270 -224 383 -310 113 -86 370 -286 571 -445 239 -189 498 -382
750 -559 212 -148 490 -351 619 -450 129 -100 261 -201 295 -226 33 -25 226
-191 428 -371 390 -346 755 -638 1068 -853 218 -149 308 -222 352 -283 19 -27
147 -154 285 -283 l251 -235 46 -130 c25 -71 87 -294 136 -495 126 -508 234
-900 351 -1275 88 -284 118 -364 266 -710 159 -370 179 -412 405 -820 l239
-430 205 -245 c168 -200 222 -272 292 -390 47 -80 142 -237 210 -350 69 -113
197 -339 284 -503 149 -278 182 -331 488 -781 324 -475 333 -487 568 -757 225
-257 258 -291 538 -541 165 -146 427 -395 584 -552 157 -158 334 -332 394
-387 60 -56 121 -117 136 -137 15 -21 91 -112 171 -204 l144 -168 88 -227 c49
-126 95 -244 103 -263 7 -19 65 -255 128 -525 63 -269 181 -758 261 -1085
l146 -595 121 -310 c136 -349 277 -672 316 -725 206 -276 423 -458 922 -772
179 -112 366 -227 415 -256 54 -31 150 -103 240 -181 l150 -130 640 -352 c352
-195 687 -373 745 -397 58 -24 580 -234 1160 -467 l1055 -423 505 -135 505
-136 200 -16 c110 -10 463 -34 785 -55 l585 -38 1090 129 c982 116 1338 164
2050 274 285 45 297 46 990 105 325 27 633 54 685 59 52 6 415 22 805 36 l710
27 1765 -381 c1683 -364 2356 -513 2555 -566 50 -13 245 -58 435 -100 190 -41
397 -87 460 -101 63 -14 144 -32 180 -39 439 -93 542 -118 770 -190 41 -13
158 -47 260 -75 102 -28 226 -64 275 -80 50 -16 342 -93 650 -170 308 -78 904
-231 1325 -340 740 -192 770 -199 905 -208 252 -18 882 -71 1273 -107 l383
-35 1345 0 1345 0 927 51 927 51 1025 -11 c615 -7 1131 -17 1290 -26 279 -15
644 -30 1072 -44 l256 -8 984 -511 c540 -280 1075 -557 1188 -615 l205 -105
600 -166 c330 -91 606 -166 614 -166 17 0 38 -6 1250 -342 l974 -270 566 -99
565 -99 416 -129 415 -129 565 -247 c311 -136 797 -348 1080 -472 l515 -225
440 -88 c409 -82 452 -92 608 -150 92 -34 167 -66 167 -70 0 -5 -11 -143 -25
-307 -47 -562 -94 -1198 -115 -1543 -12 -190 -28 -401 -36 -470 -8 -69 -21
-294 -29 -500 -9 -206 -18 -446 -22 -533 -4 -108 -2 -182 7 -230 16 -98 58
-278 70 -302 5 -11 26 -90 46 -175 19 -85 78 -299 129 -475 199 -682 274 -942
286 -1004 22 -116 -9 -944 -46 -1199 -17 -119 -20 -472 -4 -542 6 -25 14 -178
19 -340 9 -307 24 -459 65 -645 13 -60 27 -126 30 -145 41 -217 164 -384 396
-539 111 -74 397 -226 484 -256 54 -19 106 -64 180 -154 65 -80 248 -534 350
-871 69 -228 105 -361 280 -1030 37 -140 100 -363 140 -495 104 -344 104 -339
120 -492 8 -76 31 -223 50 -328 86 -475 115 -673 115 -780 0 -68 9 -162 25
-254 13 -80 38 -247 55 -371 18 -124 40 -272 50 -330 33 -185 69 -462 75 -580
7 -122 -9 -478 -26 -595 -6 -38 -23 -119 -39 -180 -16 -60 -43 -202 -60 -315
-17 -113 -60 -369 -95 -570 -35 -201 -72 -433 -83 -516 -19 -141 -22 -152 -51
-183 -96 -103 -35 -263 106 -275 26 -3 83 -18 125 -35 42 -17 121 -43 175 -57
85 -23 109 -25 182 -20 46 4 105 14 130 23 86 28 212 92 289 146 42 30 101 65
129 80 l53 26 92 -44 c51 -24 113 -46 138 -50 103 -15 377 -98 449 -135 23
-11 125 -45 227 -75 209 -60 200 -54 276 -180 23 -38 71 -100 107 -136 80 -80
128 -97 207 -75 27 8 76 17 109 20 33 4 104 14 157 23 164 26 217 18 408 -61
91 -37 170 -72 175 -76 6 -5 30 -11 55 -15 78 -11 169 18 346 110 271 141 323
155 414 114 25 -11 61 -35 80 -53 19 -19 80 -64 135 -102 127 -86 192 -141
230 -194 17 -23 89 -91 160 -151 117 -99 145 -118 284 -185 85 -41 198 -88
255 -104 55 -16 173 -59 261 -95 269 -109 316 -114 390 -40 48 48 55 72 55
200 l0 92 772 1154 773 1154 3 2647 2 2647 768 3 767 3 32 23 c54 38 77 80 77
138 0 48 -5 59 -99 198 -83 122 -106 149 -140 165 -22 10 -132 42 -245 71
-113 29 -208 56 -212 59 -4 3 6 91 23 196 27 175 35 206 106 400 116 321 109
231 69 849 l-35 536 139 318 c76 174 145 318 152 320 8 1 45 -4 83 -12 67 -14
73 -14 195 15 69 17 188 48 265 69 77 22 311 80 520 130 209 49 394 97 412
104 17 8 44 31 59 52 23 29 28 47 28 89 0 46 -6 61 -62 148 -34 52 -64 102
-67 109 -5 13 111 205 289 478 81 123 89 139 90 185 1 66 -30 117 -87 144 -23
11 -88 32 -144 46 l-101 27 156 135 c86 74 224 194 306 266 81 73 159 140 172
150 l24 19 162 -139 c90 -77 224 -189 299 -251 74 -61 142 -118 149 -127 8 -9
52 -80 99 -158 82 -135 89 -144 166 -198 76 -53 85 -57 195 -77 250 -46 301
-51 368 -36 34 8 133 29 220 48 l159 33 67 -108 c69 -112 109 -153 161 -162
18 -3 108 14 232 44 111 27 207 49 213 49 7 0 82 -49 169 -108 331 -230 417
-286 454 -299 35 -12 59 -7 435 87 823 206 970 246 1007 275 60 45 500 461
521 491 16 24 19 45 18 122 -2 83 0 92 15 87 9 -3 87 -35 172 -71 339 -144
373 -157 420 -157 35 1 58 8 90 30 62 42 1797 1080 1894 1133 44 24 143 82
220 130 77 48 217 132 310 188 l170 101 560 182 c308 100 594 194 635 210 41
16 428 142 860 280 432 138 801 261 820 273 50 33 1602 1538 1620 1571 24 44
18 117 -13 162 -14 21 -392 457 -839 969 l-813 931 -1340 1123 c-737 618
-1353 1128 -1370 1135 -16 7 -282 74 -590 150 -577 141 -602 149 -691 220
l-26 21 96 614 c53 338 100 622 104 632 4 9 249 204 544 433 l537 417 375 465
375 465 653 528 c359 291 666 545 683 565 47 58 42 111 -29 269 -31 71 -251
609 -487 1195 -237 586 -438 1078 -447 1093 -25 38 -809 775 -848 796 -40 21
-292 68 -1294 243 -569 99 -1038 181 -1041 182 -4 1 100 266 231 588 130 322
240 600 243 619 17 81 -46 173 -125 185 -51 8 -118 1 -1174 -110 -441 -47
-806 -85 -811 -85 -11 0 -28 143 -54 456 -27 335 -187 2189 -193 2239 l-5 40
663 83 662 83 274 -100 c151 -54 401 -140 555 -191 305 -100 351 -108 403 -71
17 12 148 149 292 305 l262 285 141 -50 c78 -27 194 -70 257 -94 63 -24 234
-86 380 -137 l265 -93 1110 -619 1110 -620 184 -214 c101 -118 185 -222 187
-231 2 -9 47 -430 99 -936 52 -506 98 -935 102 -954 6 -36 81 -121 106 -121 8
0 53 -27 100 -60 48 -33 90 -60 93 -60 3 0 227 -145 497 -322 271 -177 508
-327 527 -334 19 -8 429 -126 910 -264 l875 -251 525 -292 c289 -160 557 -310
596 -332 58 -33 98 -70 229 -213 145 -158 173 -195 325 -430 91 -141 169 -265
173 -274 3 -9 78 -125 166 -257 103 -154 161 -250 161 -266 0 -14 -36 -306
-80 -648 -46 -355 -78 -635 -74 -652 9 -41 50 -93 87 -111 18 -8 271 -72 562
-143 l530 -129 1095 38 c602 21 1130 41 1172 43 l77 5 120 86 c65 47 122 86
126 86 4 0 39 24 79 53 222 166 1029 728 1039 724 7 -3 182 -145 390 -315
l378 -310 460 -651 c253 -358 473 -659 488 -670 22 -16 107 -31 434 -77 l406
-57 77 -151 c43 -83 175 -378 295 -656 133 -309 228 -518 246 -538 20 -23 294
-174 1008 -553 539 -287 1007 -535 1039 -551 54 -27 80 -32 275 -53 119 -12
231 -20 250 -18 45 7 116 77 124 124 4 19 0 91 -7 160 -15 131 -30 177 -103
323 -34 68 -35 74 -54 295 -26 304 -47 396 -124 521 -58 96 -155 216 -298 369
-93 98 -93 100 -32 247 l38 91 87 11 c48 7 150 12 226 12 77 0 168 5 204 11
107 17 256 82 336 145 38 31 110 76 159 101 104 53 178 108 251 186 29 31 75
68 104 82 101 51 192 172 220 293 12 52 13 53 83 89 39 19 94 42 121 50 39 12
65 30 116 81 62 63 67 72 84 142 15 67 15 80 2 123 l-14 47 43 25 c23 14 103
52 178 84 74 32 155 72 178 88 83 57 164 90 284 116 196 43 227 46 535 43 349
-4 325 2 615 -141 197 -98 227 -108 436 -149 119 -23 396 -105 559 -166 117
-44 429 -192 600 -285 128 -69 175 -101 268 -183 153 -136 273 -292 387 -504
159 -297 210 -381 249 -412 37 -31 38 -31 149 -29 183 4 203 9 253 59 24 24
44 52 44 63 0 10 140 511 311 1113 l311 1093 265 541 265 541 512 565 c281
311 874 954 1317 1429 443 475 1139 1234 1545 1686 l739 822 275 443 c531 858
952 1519 965 1515 6 -3 283 -174 614 -381 332 -206 618 -380 636 -385 26 -7
162 11 612 81 l578 90 730 -50 730 -50 590 -181 590 -181 435 -214 c239 -118
447 -217 462 -220 15 -4 44 0 65 7 21 7 495 275 1053 595 707 406 1025 593
1046 618 18 19 35 50 38 68 5 27 -639 4635 -661 4726 -12 50 -1005 2686 -1023
2715 -11 17 -176 185 -367 375 l-348 345 -840 505 -840 505 -1167 501 -1166
501 -1463 322 c-805 177 -1464 323 -1465 324 -10 13 -285 1450 -278 1457 5 5
360 218 789 473 580 346 788 475 810 502 l30 37 0 723 0 722 -354 531 c-195
293 -366 540 -380 549 -25 17 -119 18 -1727 21 l-1702 2 -998 -164 c-716 -118
-1330 -212 -2167 -330 l-1168 -166 -1272 -320 c-700 -176 -1277 -322 -1283
-324 -6 -2 -451 729 -989 1625 -740 1232 -986 1634 -1009 1649 -17 11 -551
243 -1188 516 l-1156 497 -829 663 -828 663 -1165 665 c-641 365 -1178 669
-1193 675 -16 6 -39 11 -51 11 -33 0 -3385 -1007 -3414 -1026 -13 -8 -540
-383 -1170 -832 l-1147 -817 -550 -183 c-303 -101 -647 -215 -765 -253 -118
-39 -224 -74 -235 -79 -71 -33 -374 -130 -404 -130 -20 1 -611 74 -1314 164
l-1278 163 -307 207 c-169 114 -598 401 -953 639 l-646 432 -494 985 -494 985
-181 265 c-100 146 -288 427 -418 625 -130 198 -643 965 -1139 1705 l-902
1345 -5 1341 -5 1340 -24 35 c-13 19 -227 204 -475 411 -248 207 -532 445
-631 529 -99 83 -343 288 -542 455 l-362 305 -304 377 c-167 207 -467 582
-666 832 -200 250 -375 463 -390 473 -14 9 -314 112 -666 228 -352 115 -778
256 -947 312 l-308 102 0 610 0 610 60 250 c33 138 65 259 70 270 5 11 14 43
20 70 6 28 45 190 86 360 l76 310 338 670 337 670 656 985 655 985 603 751
c332 412 636 793 675 845 l71 94 159 643 c87 353 161 646 164 650 3 5 504 341
1114 748 611 406 1116 744 1124 749 8 6 175 116 372 246 199 132 366 249 377
265 16 22 101 391 345 1503 l324 1473 295 178 c162 97 529 317 816 489 398
237 528 319 550 348 l28 36 5 1376 5 1376 258 1035 c142 569 290 1161 328
1315 59 236 68 286 61 317 -10 37 -506 709 -1527 2068 l-477 635 -500 1000
c-288 576 -516 1019 -537 1045 -20 25 -225 270 -456 545 -231 275 -438 523
-460 551 -194 249 -730 887 -768 913 -12 9 -537 234 -1167 501 l-1145 486
-639 959 -638 959 -835 1670 -835 1671 -500 1165 -499 1165 -911 1565 c-501
861 -993 1702 -1093 1870 -100 168 -190 322 -201 343 -10 20 -44 79 -75 130
-60 97 -122 278 -563 1628 l-136 415 0 625 0 625 313 319 c171 175 317 325
323 334 6 9 237 543 513 1186 l503 1170 482 800 482 800 824 662 c454 364 835
674 846 690 12 15 398 627 858 1360 l835 1332 667 1338 c613 1231 667 1342
667 1388 0 43 -49 172 -340 890 l-340 840 -658 990 c-582 876 -756 1126 -1498
2170 -462 649 -854 1195 -872 1214 -33 34 -36 35 -1377 367 l-1343 332 -995
500 -995 501 -1420 629 c-781 347 -1432 636 -1447 643 l-28 12 0 1269 0 1269
321 852 c177 469 408 1084 514 1367 106 283 328 848 493 1255 l300 740 463
158 463 158 326 231 c179 128 523 377 765 554 242 178 922 674 1510 1103
l1070 780 315 177 c173 98 690 393 1148 656 l833 478 1672 2 1672 3 32 23 c41
29 190 248 863 1264 540 817 544 823 544 873 -1 42 -58 192 -334 885 l-333
835 -58 280 c-32 154 -103 514 -158 801 l-101 521 0 1500 0 1501 165 998 165
999 165 1330 165 1330 0 812 0 812 511 1028 c559 1125 554 1115 1294 2788
l512 1160 190 290 c342 523 1430 2249 1437 2280 3 17 31 570 61 1230 80 1750
55 1477 201 2250 l124 660 -10 275 c-5 151 -14 421 -20 600 -6 179 -22 622
-36 985 -14 363 -42 1165 -64 1783 l-38 1122 704 703 c689 688 703 703 709
747 3 25 5 540 3 1145 l-3 1100 -111 205 c-62 113 -153 288 -204 390 -51 102
-238 463 -417 802 -204 388 -322 622 -317 630 14 23 622 826 759 1003 314 403
983 1308 989 1337 3 17 6 780 6 1697 l0 1666 74 430 c41 237 116 677 166 979
l91 550 204 730 c403 1447 481 1742 650 2446 l171 715 625 403 c343 221 698
451 789 511 120 78 380 279 950 734 432 345 810 650 841 679 40 38 58 63 62
88 4 19 16 172 27 340 11 168 33 485 49 705 17 220 33 461 36 535 4 74 15 250
26 390 49 665 179 2447 185 2547 l7 112 696 693 c383 381 1055 1051 1495 1488
l798 795 598 745 c328 410 621 774 650 810 l53 65 246 42 c1274 215 1728 296
1754 311 15 9 38 33 50 52 l22 35 0 1540 0 1540 -339 1175 -339 1175 -323 819
-324 818 0 904 0 904 23 0 c12 0 103 4 202 10 99 5 362 17 585 25 223 8 419
18 435 21 46 9 88 39 107 76 10 18 63 175 118 348 96 300 102 324 125 500 14
102 32 225 41 274 l16 89 98 116 c54 64 139 166 190 226 51 61 154 173 230
250 75 77 146 154 157 170 11 17 60 102 108 190 l87 160 321 323 c287 288 388
380 924 844 l601 521 339 123 c186 68 380 142 432 166 63 28 97 39 106 32 8
-5 140 -160 293 -345 154 -185 293 -345 308 -356 16 -11 67 -33 114 -48 47
-15 132 -54 190 -88 58 -33 218 -123 355 -199 138 -77 295 -168 350 -202 201
-125 263 -154 575 -271 173 -65 319 -122 324 -126 5 -5 0 -68 -13 -151 -12
-79 -44 -294 -72 -478 -150 -1012 -150 -1003 -111 -1062 9 -14 122 -96 249
-182 265 -178 234 -168 441 -143 147 18 183 33 217 89 19 31 20 51 20 288 l0
255 109 225 c59 124 200 442 311 707 l204 482 106 533 c59 293 112 542 118
553 7 14 557 781 583 814 2 2 466 115 1031 251 565 137 1138 276 1272 309
l244 62 216 -15 c297 -21 1183 -66 1366 -69 l150 -2 170 74 c94 40 208 93 255
116 47 23 96 46 110 50 14 4 124 53 245 110 320 150 274 138 385 97 52 -20
394 -157 760 -305 366 -147 942 -380 1280 -517 338 -136 687 -278 775 -315
120 -50 173 -67 210 -68 94 -2 159 63 159 158 0 87 -14 101 -269 257 -126 78
-288 180 -360 226 -205 134 -934 586 -1042 646 -54 31 -154 81 -223 112 -234
106 -339 196 -369 318 -9 37 -9 77 -1 170 19 201 40 277 165 596 169 429 228
596 228 645 1 59 -23 107 -68 135 -21 13 -224 56 -631 135 -330 63 -603 115
-607 115 -4 0 -7 105 -7 233 0 129 -5 249 -10 269 -6 21 -23 49 -38 64 -15 14
-133 77 -262 138 -129 62 -363 174 -520 250 l-285 137 -158 161 c-87 89 -156
165 -155 169 2 5 108 80 237 168 l234 159 91 -43 c50 -24 233 -111 406 -195
272 -131 322 -152 365 -153 59 -1 110 25 138 72 9 16 24 76 32 133 28 202 118
1004 119 1064 1 87 26 59 -405 470 l-127 120 155 88 c383 221 383 220 315 436
-75 237 -183 646 -275 1045 l-93 400 82 80 c64 63 83 88 88 117 11 62 -9 112
-62 157 -80 69 -224 185 -594 484 l-357 288 148 187 149 187 188 89 c104 49
204 98 222 109 18 11 81 76 139 146 71 84 223 237 461 462 l354 335 472 -157
c259 -86 554 -187 656 -224 316 -115 660 -218 731 -218 55 -1 -8 -44 609 418
272 204 620 463 772 575 153 113 364 269 470 348 106 78 255 186 332 239 141
99 178 136 190 186 16 66 2 88 -301 479 l-295 380 42 112 c166 449 356 936
364 936 6 0 276 40 601 90 324 49 590 88 591 87 1 -1 102 -184 224 -407 305
-555 332 -601 372 -625 44 -26 122 -26 166 0 20 12 50 48 76 92 65 109 337
397 461 488 55 40 127 101 159 136 32 35 87 94 121 130 70 75 101 134 121 233
12 58 28 90 81 171 65 99 67 102 161 154 l95 53 1671 398 c919 219 1757 417
1861 440 624 136 2548 602 3720 902 l1330 340 525 89 c325 55 1011 187 1804
345 l1280 256 1005 587 1006 586 597 424 596 423 424 426 423 425 645 480
c355 264 662 496 682 516 20 20 256 293 525 608 l488 571 430 689 430 688 3
437 3 437 -51 568 -50 568 65 1500 c35 825 71 1669 80 1875 8 206 17 404 20
440 5 48 -23 333 -104 1065 -60 550 -113 1034 -116 1075 -4 41 -119 903 -257
1915 l-250 1840 -385 1315 -385 1315 -148 1025 c-142 984 -150 1028 -181 1095
-17 39 -181 417 -364 840 -182 424 -702 1589 -1155 2590 l-825 1820 -855 858
-855 858 -630 502 c-346 277 -647 515 -667 530 -42 32 -120 43 -178 26z m663
-823 l582 -465 831 -833 831 -833 816 -1800 c448 -990 961 -2140 1140 -2555
179 -415 339 -786 356 -825 28 -65 40 -141 172 -1060 l142 -990 384 -1315 385
-1315 248 -1815 c136 -998 251 -1851 254 -1895 4 -44 56 -530 117 -1080 80
-728 109 -1018 105 -1065 -4 -36 -11 -177 -16 -315 -6 -137 -42 -981 -80
-1875 l-70 -1625 50 -563 c50 -560 50 -566 50 -959 l0 -396 -397 -636 -396
-636 -488 -570 c-268 -313 -498 -579 -511 -591 -12 -11 -313 -237 -668 -501
l-645 -480 -423 -425 -424 -426 -556 -395 -557 -394 -990 -578 -990 -577
-1195 -239 c-769 -154 -1395 -273 -1755 -335 l-560 -95 -1385 -353 c-1247
-319 -3018 -749 -3730 -906 -146 -32 -992 -232 -1880 -443 -888 -212 -1631
-388 -1650 -392 -28 -6 -220 -106 -322 -168 -10 -7 -35 -39 -55 -72 -20 -33
-67 -105 -104 -160 -52 -78 -69 -113 -78 -160 -7 -33 -14 -70 -16 -82 -5 -21
-26 -47 -155 -186 -30 -32 -100 -92 -155 -132 -69 -51 -141 -118 -235 -219
-74 -80 -137 -142 -141 -138 -4 4 -93 164 -199 355 -285 519 -302 543 -386
561 -19 4 -299 -34 -758 -103 -800 -121 -777 -116 -815 -194 -21 -43 -210
-537 -378 -987 -108 -287 -116 -330 -73 -390 14 -19 136 -179 272 -355 137
-176 248 -322 248 -325 0 -3 -62 -49 -138 -103 -75 -53 -199 -143 -275 -200
-75 -56 -303 -224 -505 -374 -202 -149 -531 -395 -732 -546 l-365 -274 -70 20
c-141 39 -314 96 -495 162 -102 37 -372 129 -600 205 -228 76 -464 156 -525
178 -60 22 -124 43 -142 46 -77 17 -86 10 -520 -401 -263 -248 -442 -426 -503
-499 l-95 -114 -210 -101 c-115 -55 -221 -110 -234 -122 -46 -43 -456 -568
-468 -600 -16 -41 -8 -102 18 -139 12 -16 195 -169 407 -340 213 -172 424
-343 470 -381 l84 -69 -41 -41 c-75 -74 -77 -53 55 -620 64 -276 152 -630 195
-787 48 -173 75 -286 69 -290 -6 -4 -127 -74 -271 -156 -291 -166 -303 -178
-303 -269 0 -32 7 -60 18 -78 11 -15 94 -97 185 -182 91 -84 226 -211 300
-282 l133 -128 -45 -404 c-25 -222 -47 -404 -49 -406 -2 -1 -154 71 -338 160
-185 89 -350 166 -367 169 -18 4 -47 3 -65 -2 -34 -10 -751 -493 -801 -540
-32 -31 -51 -91 -41 -135 10 -50 45 -91 294 -348 l233 -240 256 -125 c141 -68
362 -175 491 -238 l235 -113 5 -264 c5 -249 6 -266 27 -299 31 -50 91 -77 233
-104 69 -13 319 -61 555 -106 237 -45 433 -86 438 -89 8 -8 -27 -108 -128
-366 -144 -365 -182 -507 -205 -755 -11 -120 -11 -127 16 -234 24 -96 35 -122
85 -196 31 -47 72 -99 90 -116 50 -46 248 -179 310 -209 96 -45 32 -20 -411
158 -689 278 -751 301 -798 292 -42 -8 -202 -77 -424 -183 -91 -44 -184 -86
-205 -92 -21 -7 -77 -32 -124 -56 -48 -24 -150 -70 -228 -103 l-142 -61 -212
10 c-492 23 -1017 51 -1227 66 l-225 15 -305 -76 c-168 -42 -777 -191 -1354
-330 -1046 -252 -1048 -253 -1081 -286 -25 -26 -656 -892 -687 -945 -4 -6 -57
-256 -117 -557 l-111 -547 -199 -473 c-178 -422 -384 -876 -429 -946 -15 -22
-17 -55 -16 -223 0 -174 -1 -198 -15 -198 -19 0 -271 166 -271 179 0 19 149
1030 210 1428 26 166 29 209 20 242 -20 77 -37 85 -461 245 -395 149 -472 185
-669 311 -37 23 -174 102 -305 175 -132 73 -258 145 -279 161 -22 16 -43 29
-47 29 -4 0 -40 19 -80 41 -41 23 -109 54 -152 68 l-78 26 -317 380 c-174 208
-329 388 -345 399 -52 38 -113 28 -282 -48 -82 -38 -310 -127 -505 -198 -195
-71 -365 -136 -377 -144 -12 -8 -294 -249 -625 -535 -534 -461 -642 -561 -946
-863 -189 -187 -356 -359 -371 -381 -15 -22 -67 -112 -115 -200 -84 -155 -92
-164 -215 -290 -71 -71 -170 -179 -221 -240 -237 -281 -340 -406 -354 -427
-16 -26 -57 -249 -85 -471 -16 -126 -30 -182 -97 -392 l-77 -245 -31 -4 c-17
-3 -175 -10 -351 -16 -456 -16 -884 -39 -927 -51 -48 -12 -95 -60 -108 -109
-7 -26 -9 -375 -8 -1062 l3 -1023 336 -845 336 -845 327 -1137 326 -1136 0
-1421 c0 -788 -4 -1421 -9 -1421 -4 0 -260 -43 -567 -95 -308 -53 -730 -125
-939 -160 -276 -47 -387 -70 -405 -83 -32 -24 -8 5 -740 -907 l-618 -770 -798
-795 c-440 -437 -1077 -1072 -1417 -1410 -815 -811 -843 -840 -856 -887 -6
-21 -22 -198 -36 -393 -29 -407 -146 -2000 -175 -2380 -10 -140 -21 -316 -25
-390 -3 -74 -22 -344 -40 -600 -19 -256 -40 -555 -46 -665 -12 -198 -13 -201
-38 -220 -14 -10 -350 -278 -746 -594 -396 -316 -754 -601 -795 -632 -41 -31
-429 -284 -861 -563 -629 -406 -790 -514 -803 -539 -9 -18 -91 -345 -182 -727
-164 -690 -273 -1100 -693 -2608 l-190 -683 -96 -577 c-53 -317 -130 -770
-171 -1007 l-74 -430 0 -1640 0 -1641 -408 -545 c-224 -299 -464 -616 -532
-704 -331 -425 -833 -1100 -842 -1131 -5 -20 -6 -50 -2 -67 3 -17 158 -320
344 -672 186 -352 386 -737 445 -855 59 -118 150 -293 201 -387 l94 -173 0
-1033 0 -1034 -700 -696 c-599 -597 -701 -702 -710 -736 -11 -41 24 -1152 90
-2896 16 -429 34 -926 40 -1105 6 -179 15 -449 20 -600 l10 -275 -124 -660
c-146 -772 -121 -501 -201 -2232 l-53 -1173 -613 -967 c-337 -533 -698 -1098
-802 -1258 l-190 -290 -512 -1160 c-741 -1676 -734 -1662 -1307 -2810 l-523
-1050 -5 -895 -6 -895 -162 -1290 c-160 -1276 -164 -1301 -327 -2289 l-165
-998 0 -1502 0 -1501 104 -535 c58 -294 136 -683 174 -865 l69 -330 312 -783
c171 -431 311 -785 311 -787 0 -7 -850 -1295 -1143 -1732 l-82 -122 -1650 -3
-1650 -3 -865 -496 c-476 -273 -1006 -576 -1178 -673 l-312 -176 -1238 -902
c-680 -496 -1379 -1006 -1552 -1133 -173 -127 -439 -320 -592 -428 l-276 -197
-474 -160 c-260 -89 -492 -170 -515 -181 -23 -11 -51 -35 -62 -52 -35 -59
-658 -1611 -822 -2050 -89 -237 -322 -855 -518 -1372 l-356 -940 0 -1385 c0
-1324 1 -1386 18 -1415 10 -17 33 -40 50 -51 18 -11 700 -316 1517 -678 l1485
-658 1005 -505 1005 -505 1323 -327 c727 -180 1324 -330 1326 -332 1 -2 370
-519 818 -1149 714 -1003 895 -1266 1463 -2120 l648 -975 321 -795 322 -795
-648 -1303 -648 -1302 -823 -1311 -822 -1310 -825 -662 c-454 -363 -831 -668
-837 -677 -7 -8 -241 -393 -520 -855 l-507 -840 -493 -1150 -494 -1150 -315
-320 c-173 -176 -327 -337 -342 -359 l-27 -39 0 -711 0 -711 153 -465 c520
-1578 509 -1546 579 -1665 35 -60 68 -117 72 -125 4 -8 92 -157 195 -330 103
-173 194 -326 201 -340 8 -14 417 -716 909 -1560 l895 -1535 499 -1165 500
-1165 835 -1671 835 -1671 675 -1015 c408 -615 686 -1023 702 -1034 16 -10
544 -237 1174 -505 l1146 -486 234 -274 c128 -151 257 -304 285 -341 96 -126
191 -241 650 -787 l458 -546 498 -995 498 -995 492 -655 c271 -360 695 -927
943 -1260 248 -333 468 -628 489 -656 l38 -51 -325 -1311 -325 -1312 0 -1292
0 -1293 -463 -275 c-443 -263 -1021 -610 -1118 -671 -25 -16 -53 -44 -63 -62
-9 -17 -156 -669 -326 -1447 -171 -778 -318 -1441 -328 -1473 l-17 -58 -290
-190 c-159 -105 -321 -213 -360 -239 -38 -26 -574 -384 -1191 -795 -759 -507
-1127 -757 -1141 -779 -14 -20 -76 -253 -183 -686 l-161 -655 -57 -73 c-31
-41 -322 -403 -645 -805 l-588 -732 -686 -1030 -686 -1030 -335 -665 -336
-665 -94 -375 c-51 -206 -129 -521 -173 -699 l-80 -324 3 -693 3 -692 31 -38
c17 -21 50 -48 75 -61 24 -12 325 -115 669 -228 344 -113 638 -212 653 -220
16 -8 35 -15 42 -15 7 0 144 -43 303 -95 l290 -95 312 -392 c173 -216 468
-585 656 -819 l343 -427 338 -284 c186 -156 437 -367 557 -468 121 -102 404
-340 630 -529 l411 -344 5 -1321 5 -1321 895 -1335 c492 -734 1009 -1510 1150
-1725 141 -214 337 -507 435 -650 l179 -260 509 -1015 c280 -558 519 -1028
530 -1043 10 -16 223 -164 471 -329 248 -166 690 -462 981 -658 292 -196 551
-369 577 -384 46 -27 96 -34 1410 -202 l1363 -173 245 83 c424 145 589 201
1195 402 343 113 607 206 630 221 22 15 549 389 1170 832 810 577 1144 810
1180 821 28 10 759 229 1625 489 l1575 473 1125 -642 1125 -642 839 -671 839
-671 676 -291 c372 -160 890 -383 1151 -495 l475 -203 990 -1650 c676 -1126
1001 -1658 1024 -1677 18 -15 47 -30 65 -33 21 -4 456 102 1361 330 l1330 335
1185 168 c838 119 1470 216 2158 329 l973 161 1632 0 1632 -1 288 -432 287
-432 -1 -605 0 -605 -791 -470 c-435 -258 -803 -483 -819 -498 -62 -61 -67
-20 122 -974 186 -944 178 -915 252 -948 18 -8 700 -161 1517 -340 l1485 -326
1168 -501 1168 -501 812 -489 812 -489 314 -313 314 -314 489 -1298 489 -1299
324 -2275 c177 -1251 322 -2276 321 -2277 -1 -1 -417 -240 -924 -532 l-923
-530 -392 195 -392 194 -640 196 -640 195 -739 51 -740 50 -566 -87 -566 -87
-652 407 c-359 223 -666 411 -682 417 -41 14 -110 2 -142 -25 -28 -22 -488
-746 -1038 -1632 l-305 -490 -760 -845 c-419 -465 -1114 -1223 -1546 -1685
-668 -717 -1774 -1925 -1818 -1987 -7 -11 -136 -270 -286 -576 l-273 -557
-298 -1047 c-164 -577 -301 -1048 -304 -1048 -4 0 -12 12 -19 27 -7 16 -55
107 -108 204 -135 248 -286 441 -474 605 -121 107 -154 129 -315 216 -192 104
-502 252 -624 297 -187 70 -474 155 -636 187 -173 35 -178 37 -337 118 -170
87 -254 121 -377 156 -68 20 -105 22 -385 25 -340 3 -353 2 -630 -61 -160 -37
-237 -67 -323 -126 -24 -16 -108 -58 -187 -93 -176 -76 -279 -139 -339 -206
-55 -61 -69 -106 -69 -216 0 -65 -3 -83 -14 -83 -8 0 -67 -27 -132 -60 -113
-57 -120 -63 -164 -127 -26 -39 -52 -92 -60 -123 -21 -85 -36 -104 -122 -161
-44 -30 -107 -82 -140 -117 -47 -50 -83 -75 -165 -117 -58 -30 -134 -78 -169
-106 -45 -37 -88 -61 -145 -81 -74 -25 -93 -28 -221 -28 -131 0 -325 -18 -459
-42 -77 -15 -114 -52 -151 -150 -15 -40 -48 -120 -74 -178 -45 -103 -46 -107
-46 -210 1 -94 4 -111 28 -161 16 -32 66 -97 120 -155 232 -249 308 -355 326
-459 5 -33 15 -134 21 -225 16 -244 31 -316 92 -443 28 -59 49 -109 47 -111
-2 -2 -37 0 -77 5 -72 8 -89 16 -1046 526 l-973 517 -193 451 c-203 473 -403
886 -457 940 -38 39 -32 38 -517 105 -198 28 -363 53 -367 57 -4 5 -205 289
-448 631 l-441 624 -462 379 c-489 400 -491 401 -570 384 -18 -4 -55 -24 -83
-45 -128 -95 -1076 -761 -1111 -780 -21 -12 -50 -32 -64 -44 -14 -13 -59 -46
-100 -74 l-75 -51 -1117 -39 -1118 -40 -417 102 c-310 76 -419 106 -421 118
-2 8 31 279 73 601 42 332 73 599 69 615 -4 15 -83 140 -175 279 -93 139 -173
263 -178 277 -6 13 -98 160 -206 326 -188 291 -202 309 -371 493 -96 105 -190
201 -207 212 -26 18 -1153 647 -1224 684 -12 6 -414 123 -895 261 -480 138
-889 256 -908 264 -19 7 -226 138 -460 291 -234 153 -481 314 -550 358 -69 43
-126 80 -128 81 -1 2 -45 416 -97 922 -53 505 -100 935 -105 955 -11 41 -448
557 -502 594 -18 12 -537 302 -1153 646 l-1120 624 -265 93 c-146 51 -312 111
-370 133 -58 23 -202 75 -320 117 -247 88 -302 96 -357 52 -17 -14 -145 -149
-284 -300 -139 -151 -259 -276 -266 -278 -18 -5 -317 95 -708 236 -176 63
-336 117 -355 119 -33 4 -1411 -163 -1548 -188 -76 -14 -125 -55 -142 -118 -8
-32 8 -253 84 -1128 53 -598 105 -1205 116 -1348 12 -143 25 -287 30 -320 5
-33 14 -116 20 -185 6 -69 13 -140 17 -159 8 -47 78 -117 124 -123 26 -4 1583
153 1848 186 38 5 42 4 36 -12 -3 -9 -106 -262 -227 -562 -248 -612 -249 -616
-193 -685 17 -20 41 -43 55 -51 14 -8 571 -109 1237 -224 667 -116 1223 -214
1235 -219 24 -10 63 -45 478 -436 l265 -249 431 -1066 c236 -586 442 -1090
455 -1120 l26 -55 -618 -500 -617 -500 -373 -464 -374 -464 -560 -435 c-308
-239 -568 -444 -577 -456 -10 -11 -22 -37 -28 -56 -20 -73 -222 -1378 -223
-1445 -2 -57 2 -75 20 -100 19 -28 280 -215 328 -236 11 -5 259 -68 550 -139
292 -72 547 -135 567 -141 28 -7 372 -290 1345 -1106 l1308 -1096 763 -875
764 -875 -44 -42 c-24 -24 -343 -333 -711 -688 l-667 -646 -203 -65 c-1136
-365 -1417 -456 -1451 -470 -21 -9 -295 -99 -610 -201 l-571 -186 -170 -101
c-93 -56 -233 -140 -310 -188 -77 -48 -176 -106 -220 -130 -44 -24 -485 -286
-979 -582 l-899 -538 -81 35 c-45 20 -207 89 -361 153 -245 102 -287 117 -335
117 -64 -1 -99 -20 -132 -73 -26 -42 -28 -84 -15 -287 l9 -130 -193 -179 -193
-180 -105 -28 c-319 -87 -1086 -276 -1095 -271 -31 20 -460 313 -517 354 -37
26 -83 51 -103 54 -25 5 -84 -5 -208 -35 -95 -22 -178 -43 -185 -45 -6 -2 -43
47 -82 109 -39 63 -81 121 -94 129 -50 33 -85 30 -353 -26 l-259 -55 -129 19
c-202 32 -185 20 -295 201 l-96 157 -175 143 c-96 79 -273 228 -394 330 -296
252 -289 251 -502 67 -77 -66 -177 -156 -224 -199 -47 -43 -112 -100 -145
-127 -199 -165 -533 -459 -550 -486 -30 -48 -27 -125 8 -171 15 -19 38 -41 50
-47 18 -10 137 -46 299 -89 l37 -11 -73 -112 c-40 -61 -113 -177 -161 -256
-83 -135 -89 -148 -89 -196 1 -42 8 -62 34 -99 17 -26 29 -50 26 -53 -3 -3
-151 -41 -328 -85 -178 -43 -399 -98 -491 -121 l-168 -44 -122 24 c-149 30
-194 26 -240 -21 -25 -25 -77 -134 -214 -447 -99 -228 -184 -427 -187 -444 -4
-16 9 -272 28 -568 l35 -537 -71 -198 c-39 -108 -77 -213 -83 -232 -7 -19 -29
-142 -49 -272 l-37 -237 16 -93 c25 -141 53 -170 200 -204 l80 -19 -565 -5
c-632 -6 -594 -1 -642 -79 l-23 -36 -3 -2708 -2 -2709 -767 -1146 c-421 -631
-769 -1158 -773 -1172 -8 -31 -18 -29 -120 16 -43 19 -84 34 -92 34 -32 1
-172 52 -281 104 -140 66 -253 154 -368 286 -59 67 -105 106 -200 170 -68 46
-147 104 -175 129 -107 96 -252 161 -358 161 -127 0 -223 -33 -471 -161 -93
-48 -177 -84 -185 -82 -8 3 -37 16 -65 28 -115 51 -243 99 -309 117 -84 22
-206 23 -308 4 -40 -8 -109 -17 -153 -20 -44 -4 -89 -9 -100 -11 -16 -3 -28 8
-54 51 -18 30 -59 88 -91 128 -49 62 -71 80 -131 110 -39 20 -79 36 -89 36
-31 0 -290 80 -338 104 -26 13 -68 29 -92 36 -25 6 -58 18 -75 25 -16 7 -77
26 -135 41 -58 15 -136 35 -175 45 -38 10 -119 42 -179 71 l-108 52 -70 -12
c-78 -14 -156 -52 -280 -139 -106 -75 -236 -134 -308 -140 -72 -7 -225 39
-216 64 3 8 15 85 27 171 11 86 49 321 84 522 35 201 77 453 94 560 17 107 40
228 51 269 53 188 89 586 75 831 -6 118 -42 395 -75 580 -10 58 -32 206 -50
330 -17 124 -42 291 -55 371 -16 92 -25 186 -25 254 0 107 -29 306 -115 780
-19 105 -42 255 -50 335 -18 161 -42 264 -149 615 -41 132 -104 355 -141 495
-172 659 -211 801 -277 1020 -47 157 -112 339 -196 548 l-126 314 -91 106
c-128 150 -181 195 -268 228 -90 34 -315 146 -427 214 -89 54 -182 137 -230
206 -50 71 -109 347 -129 603 -6 74 -11 216 -11 315 0 116 -5 212 -15 266 -20
114 -20 434 0 572 20 143 44 540 52 868 7 330 6 334 -123 780 -256 885 -306
1062 -349 1235 -81 329 -77 303 -71 490 16 498 37 934 50 1045 8 69 24 280 36
470 21 352 67 960 120 1608 17 199 27 374 24 390 -10 43 -40 85 -73 105 -17
10 -133 56 -258 102 l-228 85 -433 86 -433 86 -512 223 c-282 122 -766 334
-1077 470 l-565 247 -445 138 -445 138 -575 101 -575 100 -915 255 c-503 139
-1012 279 -1130 310 -118 32 -465 126 -770 209 l-555 152 -980 508 c-539 280
-1083 562 -1210 627 l-230 118 -135 6 c-74 3 -283 11 -465 17 -181 6 -501 19
-710 30 -274 14 -663 22 -1395 30 l-1015 11 -927 -51 -927 -51 -1345 0 -1345
0 -383 35 c-360 33 -966 84 -1268 107 -127 9 -174 20 -800 183 -366 95 -942
243 -1280 329 -338 85 -655 169 -705 186 -49 17 -124 39 -165 50 -96 24 -260
71 -535 152 -121 36 -254 71 -295 78 -41 7 -178 37 -304 66 -127 30 -240 54
-253 54 -29 0 -678 142 -798 175 -183 50 -785 183 -2600 575 l-1860 402 -700
-26 c-385 -15 -745 -31 -800 -36 -55 -6 -365 -33 -690 -60 -694 -59 -705 -60
-990 -105 -712 -110 -1068 -158 -2050 -274 l-1090 -129 -590 38 c-991 65 -884
50 -1410 191 l-450 121 -1055 423 c-580 233 -1102 443 -1160 467 -58 24 -382
196 -720 383 -579 318 -621 344 -720 428 -58 49 -116 102 -130 116 -28 30 -95
81 -106 81 -15 0 -202 112 -489 293 -382 241 -580 395 -717 560 -87 103 -100
125 -170 282 -42 94 -132 310 -199 480 l-121 310 -158 640 c-87 352 -206 847
-265 1100 l-108 460 -109 277 -109 276 -171 199 c-94 109 -184 215 -198 235
-15 21 -58 65 -96 99 -38 34 -215 208 -394 387 -179 179 -459 443 -624 591
-280 250 -313 283 -538 540 -231 266 -248 288 -532 705 -269 396 -306 456
-453 731 -88 165 -216 392 -285 505 -68 113 -170 282 -226 377 -88 149 -130
205 -306 416 l-204 244 -222 399 c-205 370 -233 427 -387 784 -142 331 -178
427 -260 685 -114 363 -232 792 -359 1300 -52 209 -118 448 -146 530 -60 172
-17 121 -371 453 -109 103 -230 225 -269 272 -39 47 -90 99 -114 115 -23 17
-127 89 -230 161 -334 231 -691 516 -1082 863 -202 180 -395 346 -428 371 -34
25 -167 127 -296 227 -130 100 -408 302 -619 450 -253 177 -509 368 -749 558
-201 159 -458 359 -571 445 -113 86 -286 226 -383 310 -276 239 -381 368
-1473 1812 -522 689 -962 1275 -978 1301 -17 27 -41 54 -55 61 -14 7 -146 72
-293 145 -228 113 -279 134 -335 142 -153 19 -155 20 -249 107 -147 135 -316
312 -388 407 -38 50 -140 166 -227 259 -111 118 -209 238 -325 395 -116 157
-609 756 -1621 1971 -800 960 -1461 1752 -1469 1761 -13 15 44 132 498 1040
l511 1024 592 1015 591 1015 -1 130 c-1 72 -7 333 -13 580 l-12 450 -50 325
c-27 179 -65 429 -84 555 l-33 230 -191 494 -191 494 0 393 c0 363 2 409 25
591 15 119 58 350 106 578 l80 379 -16 361 c-16 382 -41 730 -54 781 -5 16
-75 122 -155 235 l-147 204 5 90 c3 49 8 171 12 270 7 205 7 203 68 656 44
326 48 349 142 710 l97 374 144 325 c121 272 167 362 281 554 l136 229 3 81
c1 45 8 198 13 341 10 248 9 274 -15 535 -14 151 -31 293 -36 315 -50 191
-160 528 -206 629 l-56 121 48 175 c26 96 53 184 60 195 7 11 109 129 228 262
118 133 227 257 240 275 18 23 31 65 47 143 12 61 51 244 86 408 l64 298 0
225 c0 289 -41 722 -110 1158 -42 266 -51 354 -65 601 -15 281 -17 297 -65
522 l-50 233 0 227 c0 160 8 311 25 508 23 255 25 325 25 820 0 572 3 630 60
1110 36 299 40 328 49 339 5 6 107 138 227 292 l219 282 109 358 c60 198 110
366 112 374 2 8 15 113 29 232 27 239 30 333 15 543 -8 101 -8 186 1 305 l11
165 -42 159 c-23 87 -46 170 -51 183 -6 17 -1 160 16 424 14 219 22 411 19
426 -8 32 -638 1612 -660 1655 -13 25 -324 1569 -324 1609 0 9 137 293 303
630 l304 614 524 259 c288 143 535 265 549 273 14 7 205 104 424 214 l400 201
225 -56 c124 -31 377 -95 561 -141 220 -54 346 -82 367 -78 21 3 89 51 205
144 158 127 176 139 213 139 22 0 852 -20 1844 -44 l1803 -44 427 83 c234 45
471 90 526 100 55 10 268 51 472 91 205 41 772 146 1260 234 771 139 1035 182
2008 325 616 90 1139 167 1162 171 35 5 130 74 605 440 l563 433 481 483 c398
399 483 489 488 517 3 18 6 312 6 652 l0 619 31 123 c17 67 114 410 216 762
226 779 247 858 235 905 -8 31 -876 1664 -962 1810 -40 68 -412 750 -545 1000
-54 102 -339 631 -634 1175 -294 545 -568 1053 -609 1130 -41 77 -165 307
-276 510 l-201 370 -5 2835 -5 2835 -663 2065 -662 2065 40 2947 40 2946 280
1514 c154 832 283 1528 286 1546 5 24 45 78 134 182 70 82 137 162 148 177 27
39 126 295 233 605 82 237 117 334 180 494 40 104 50 345 24 609 -35 362 -33
355 -89 411 -12 12 -32 34 -46 50 -209 239 -327 363 -387 404 -37 25 -148 106
-246 178 -98 73 -189 137 -203 142 -14 6 -114 10 -222 10 -283 0 -673 54
-1051 146 -146 35 -277 69 -290 74 -13 6 -164 106 -335 222 -215 146 -402 283
-603 444 l-292 233 -132 195 c-125 184 -305 504 -366 651 -14 33 -41 94 -61
135 -127 270 -131 280 -186 498 -50 195 -63 270 -82 452 -4 40 1 83 20 160 26
109 125 409 151 460 16 30 50 228 61 351 7 79 28 128 128 304 l51 90 0 161 c0
197 3 192 -168 318 l-121 90 -221 70 -220 70 -230 6 c-222 6 -235 7 -388 44
l-157 39 -140 -21 -139 -20 -118 35 c-267 77 -349 92 -575 104 -363 18 -918
-24 -1313 -101 -235 -45 -324 -60 -559 -89 l-219 -28 -180 59 c-100 32 -185
58 -190 58 -11 0 -332 218 -417 283 -36 28 -125 100 -199 161 l-133 111 -64
129 -64 129 0 216 c0 210 -9 334 -60 836 -11 105 -27 287 -35 405 -25 340 -23
332 -115 492 -76 134 -81 144 -130 336 -29 108 -103 384 -166 612 -96 349
-128 486 -203 865 l-89 451 -337 1174 -337 1175 -166 290 c-91 160 -240 425
-332 590 -92 165 -265 462 -385 660 -120 198 -573 952 -1007 1675 l-788 1315
-364 440 c-200 242 -394 476 -430 520 -36 44 -111 155 -166 247 l-102 166 -23
435 -24 435 179 396 c117 258 183 416 189 453 6 32 15 184 21 338 11 314 33
795 55 1200 l15 270 198 596 199 595 181 345 c99 190 187 368 195 395 8 27 58
184 110 349 l95 300 17 190 c8 105 22 246 30 315 8 69 19 193 25 275 10 136 9
162 -9 270 -11 66 -22 145 -26 175 -4 30 -22 149 -41 264 -33 204 -34 217 -34
497 0 269 -2 300 -29 476 -16 103 -35 226 -41 273 -13 95 -56 275 -95 393 -14
43 -57 198 -96 345 -38 146 -72 269 -74 272 -2 4 -29 121 -59 261 -31 140 -63
283 -71 319 -8 36 -15 75 -15 86 0 12 52 115 116 230 64 115 138 250 164 299
111 211 152 285 162 285 5 0 121 45 257 99 l247 100 282 -39 c252 -35 287 -38
321 -26 21 7 184 101 362 208 178 107 495 288 704 403 209 114 392 217 407
227 15 10 96 114 179 231 312 434 384 522 698 863 260 281 336 370 506 596
109 146 202 277 206 291 4 15 24 156 44 314 41 324 12 219 251 905 l114 327
291 473 c161 260 298 484 305 498 7 14 52 247 99 518 l86 494 180 360 c134
267 219 456 331 727 198 484 269 651 275 651 38 0 446 75 468 86 16 8 104 56
194 107 l164 92 187 182 c146 141 201 188 251 213 100 50 115 65 192 178 l72
107 1 165 1 165 95 240 c88 220 101 246 155 310 47 56 83 84 170 138 61 37
120 67 131 67 76 0 172 -34 311 -111 80 -44 235 -117 344 -161 194 -78 202
-80 335 -95 76 -8 173 -15 217 -16 100 -2 123 12 198 121 l52 77 3 128 c3 80
-2 172 -12 245 -8 64 -18 167 -21 227 l-6 110 59 91 c53 81 70 99 163 166 96
70 112 78 209 104 58 15 117 36 132 46 15 10 50 51 79 91 29 39 67 89 86 110
19 21 55 84 82 140 30 66 81 148 143 231 100 134 103 141 113 266 6 73 5 80
-54 245 -82 234 -178 483 -195 507 -22 31 -113 89 -195 123 l-75 32 -33 99
c-39 113 -61 219 -103 487 l-30 188 -78 140 c-44 81 -100 166 -131 201 -83 92
-301 289 -335 303 -17 7 -99 20 -182 30 -147 16 -155 16 -350 -5 -109 -12
-214 -28 -232 -36 -18 -7 -88 -30 -155 -50 -67 -20 -176 -61 -242 -91 -155
-71 -199 -83 -315 -83 l-95 0 -91 92 c-50 51 -121 138 -159 193 -39 58 -113
147 -175 210 -95 96 -112 119 -133 176 -17 44 -61 116 -129 210 -96 133 -108
154 -151 276 -37 103 -50 158 -61 250 -13 109 -19 128 -68 233 -44 94 -68 130
-128 195 -41 44 -86 89 -101 101 -15 11 -108 56 -206 99 -98 43 -233 110 -300
148 -159 90 -169 103 -183 257 -16 183 -28 217 -101 309 -35 43 -77 88 -94 99
-16 11 -82 32 -145 47 l-114 27 -156 -17 c-124 -13 -175 -23 -255 -51 -134
-48 -133 -48 -196 -30 -222 63 -235 66 -399 77 -187 12 -294 6 -609 -37 -106
-15 -187 -22 -192 -17 -5 5 -46 99 -91 209 l-81 199 -247 371 c-136 203 -265
404 -285 445 -21 41 -85 155 -143 254 l-105 180 -158 490 -159 490 -41 422
-40 422 -124 552 -125 551 106 411 105 410 -16 226 c-8 124 -20 278 -26 341
-10 110 -7 138 52 670 l62 555 138 287 c75 157 140 299 143 315 3 15 13 368
21 783 30 1500 25 1403 116 2244 65 604 90 796 134 1048 29 169 57 313 61 320
4 7 54 74 110 149 56 75 192 261 301 415 148 208 269 362 474 603 284 335 327
388 453 556 42 55 90 119 108 142 22 27 117 98 278 208 286 194 298 203 626
484 137 118 380 321 539 451 160 131 301 250 315 264 14 15 120 156 235 314
l210 286 250 158 c138 87 259 162 270 167 11 5 140 28 285 51 482 76 729 127
1280 263 300 74 604 147 675 161 72 15 243 64 380 110 138 46 302 100 365 120
l115 37 345 247 c190 135 379 271 420 302 41 31 100 70 130 86 368 200 1238
686 1282 716 38 25 109 98 210 215 206 240 177 200 556 743 277 396 356 516
428 653 l89 169 170 169 c94 93 186 179 205 191 19 11 123 66 230 121 177 91
540 298 615 350 87 61 417 331 433 355 10 15 27 56 36 92 48 176 119 400 141
445 14 28 54 115 89 195 l65 145 198 146 c191 140 203 152 346 315 81 93 160
187 176 209 15 22 67 136 115 254 49 118 126 298 173 400 l85 186 153 155 154
155 166 269 c92 148 215 342 274 430 59 89 129 197 156 241 82 137 430 639
614 887 187 251 173 226 364 638 26 57 74 123 196 270 89 107 184 216 211 243
31 30 53 61 59 85 11 41 56 384 66 502 3 42 28 155 57 255 l51 180 196 220
c108 121 208 236 222 255 25 33 68 199 108 418 7 34 68 208 136 387 138 361
126 339 487 955 124 212 235 405 248 430 49 97 109 253 125 327 10 43 48 173
85 288 l68 210 12 218 11 217 -32 143 -33 144 72 124 c54 94 120 183 269 365
292 356 541 699 692 954 96 164 168 269 296 435 106 138 250 344 383 550 183
282 236 355 361 500 81 94 220 272 309 396 l162 225 35 224 c32 200 34 232 25
298 -5 40 -10 84 -10 97 0 36 151 217 390 465 196 204 503 549 556 625 12 17
110 236 217 487 l196 457 276 420 c152 232 281 421 285 421 4 0 20 20 34 44
16 28 99 107 236 225 193 168 509 488 592 601 17 24 54 130 113 330 82 275 95
310 196 523 l109 228 40 221 41 221 160 341 c152 323 168 350 284 516 86 122
167 256 270 446 143 263 150 275 281 429 138 162 315 427 328 490 17 88 27
464 16 656 -9 181 -18 244 -75 554 l-65 350 -40 550 -41 550 38 450 38 450
136 205 136 205 194 134 c184 127 206 145 429 366 219 217 244 238 357 307
l122 75 203 -24 c112 -12 212 -28 223 -34 11 -5 50 -38 87 -72 103 -95 235
-327 343 -602 70 -177 107 -253 238 -484 153 -272 192 -330 419 -620 l113
-145 345 -274 c190 -150 363 -286 385 -301 24 -17 242 -99 555 -209 l515 -181
710 -185 c409 -106 892 -240 1140 -314 237 -72 637 -183 890 -247 424 -107
484 -120 762 -161 l301 -44 299 64 298 63 459 218 459 217 367 229 366 229 75
0 c41 1 119 5 174 10 101 9 126 17 369 124 17 8 112 49 211 91 99 43 194 87
210 99 17 11 128 106 249 211 120 104 234 202 253 216 18 15 98 85 176 156
l142 130 246 409 246 409 218 500 218 500 102 420 102 420 232 475 c191 389
260 542 381 845 144 361 336 776 475 1025 52 95 64 128 121 340 158 595 187
682 339 1035 78 182 145 344 149 360 3 17 24 188 46 380 34 301 48 385 97 600
l56 250 90 185 c49 102 117 246 152 322 61 130 76 152 317 465 139 180 263
342 274 358 39 56 478 915 962 1885 l482 965 243 334 242 335 305 190 305 191
230 230 230 230 354 685 c194 377 477 909 629 1183 l276 497 366 463 366 462
674 672 675 672 650 480 c358 264 664 496 680 516 l30 37 6 1706 6 1707 309
925 c170 509 314 933 320 943 8 13 203 60 919 219 l910 201 399 281 c219 155
409 295 421 311 13 17 168 390 345 831 l323 800 631 319 c347 175 644 327 659
338 15 10 328 393 694 850 594 741 776 959 1663 1992 547 638 1005 1174 1017
1191 22 31 62 222 272 1295 l80 405 941 1725 c518 948 953 1743 966 1765 l23
42 858 -215 c472 -118 1018 -252 1213 -299 315 -75 472 -122 1400 -411 l1045
-326 1000 -500 1000 -500 480 -164 c264 -90 546 -186 627 -214 l147 -51 172
-288 172 -287 66 -40 c141 -86 2998 -1660 3024 -1667 15 -4 681 66 1525 159
l1497 165 300 0 300 0 442 -442 442 -443 -105 -330 c-58 -181 -140 -442 -184
-580 l-78 -250 -83 -765 -83 -764 -880 -1410 -881 -1411 -9 -215 -8 -215 176
-670 c97 -368 184 -685 194 -703 9 -18 31 -41 47 -51 17 -9 138 -59 270 -110
132 -51 512 -202 845 -334 495 -197 613 -241 651 -240 45 1 91 30 1050 671
l1004 669 1495 498 c822 274 1508 507 1523 518 52 36 613 892 841 1283 l211
361 320 335 c320 334 320 335 405 478 47 80 270 457 495 840 l410 695 1300
652 1300 651 1165 483 c1136 470 1198 494 2478 971 l1312 488 828 0 827 0 765
205 765 206 1205 169 c1068 151 1305 187 2093 325 743 130 894 159 921 177 17
12 393 312 835 666 l803 645 1626 303 1627 304 1423 180 1423 181 612 149
c337 82 1083 275 1658 428 l1046 279 646 327 645 326 774 20 c425 11 788 22
807 25 19 4 425 220 904 481 l870 475 731 135 c505 93 739 140 756 152 14 10
414 600 889 1312 l864 1295 3476 1598 3476 1599 321 213 320 212 953 349 952
349 127 94 c70 52 358 274 640 493 l513 399 412 449 c227 247 415 450 420 450
4 0 269 -209 590 -464z" />
                    </a>
                        <path d="M54095 156781 c-303 -40 -531 -225 -616 -501 -20 -65 -23 -96 -24
-230 0 -175 14 -238 82 -359 43 -78 157 -193 235 -239 221 -131 578 -135 716
-9 l22 20 0 -315 c0 -485 21 -660 99 -833 103 -230 288 -388 541 -461 88 -25
109 -27 280 -28 172 0 192 2 284 28 264 73 473 241 589 471 59 119 88 224 101
370 47 517 -191 894 -634 1006 -68 17 -115 21 -240 22 -139 0 -165 -3 -249
-27 -109 -32 -207 -79 -276 -133 -28 -22 -56 -42 -62 -47 -80 -48 255 384 339
438 33 22 45 15 69 -39 l19 -43 51 13 c28 8 52 15 54 17 9 12 36 112 41 155 9
68 -21 132 -70 156 -86 41 -173 31 -255 -27 -47 -34 -187 -208 -231 -287 l-27
-50 -7 163 c-4 103 -13 191 -25 238 -66 270 -226 442 -471 509 -85 23 -246 33
-335 22z m212 -268 c59 -27 121 -92 152 -159 45 -95 51 -144 51 -420 l0 -261
-67 -31 c-160 -73 -351 -59 -447 34 -41 40 -109 175 -125 249 -38 178 -13 353
70 490 38 63 102 105 183 121 76 14 117 9 183 -23z m1323 -1075 c149 -68 257
-233 301 -459 35 -181 23 -472 -25 -609 -77 -219 -230 -321 -460 -307 -157 9
-272 76 -360 209 -118 178 -156 358 -156 740 l0 217 68 54 c109 87 254 159
357 178 22 4 81 6 130 5 71 -2 102 -8 145 -28z" />
                        <path d="M59908 156760 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
-60 268 -374 300 -59 6 -60 6 -77 -24z" />
                        <path d="M64157 156762 c-28 -29 -28 -30 -12 -62 25 -48 84 -109 128 -132 26
-13 81 -24 166 -33 180 -20 239 -42 303 -113 80 -88 100 -199 96 -536 l-3
-249 -30 25 c-49 42 -145 85 -230 103 -118 26 -313 16 -452 -24 -314 -90 -540
-329 -625 -661 -27 -104 -30 -131 -31 -285 0 -155 2 -179 28 -280 68 -268 238
-486 464 -599 209 -104 490 -130 689 -62 149 50 257 130 407 299 101 114 145
188 177 295 l23 77 0 800 0 800 -24 94 c-75 297 -249 468 -551 537 -84 20
-144 26 -300 31 l-195 5 -28 -30z m393 -1249 c76 -22 175 -73 238 -123 l52
-42 0 -440 c0 -477 -3 -504 -57 -612 -14 -28 -58 -83 -97 -122 -96 -96 -153
-118 -281 -111 -186 11 -310 107 -399 308 -95 216 -115 599 -42 830 56 178
184 304 336 330 60 10 182 1 250 -18z" />
                        <path d="M69540 156681 c-49 -10 -75 -26 -101 -63 -31 -43 -30 -132 4 -263 48
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
521 42 24 78 44 81 44 3 0 57 -46 120 -103z" />
                        <path d="M57240 155940 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z" />
                        <path d="M62090 155771 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z" />
                        <path d="M66310 155773 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z" />
                        <path d="M68250 155773 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z" />
                        <path d="M72390 155771 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z" />
                        <path d="M88310 154601 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63
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
202 67 12 61 12 139 1z" />
                        <path d="M96151 154600 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z" />
                        <path d="M53355 153788 c-44 -5 -123 -22 -176 -38 -286 -88 -481 -286 -575
-585 -26 -83 -28 -103 -28 -245 0 -147 1 -160 32 -255 48 -151 110 -253 218
-360 106 -106 206 -166 359 -216 95 -31 107 -33 255 -33 148 0 160 2 255 33
153 50 253 110 359 216 108 107 170 209 218 360 31 95 32 108 32 255 0 142 -2
162 -28 245 -74 236 -210 407 -408 516 -86 48 -239 96 -328 104 -36 3 -74 7
-85 9 -11 2 -56 -1 -100 -6z" />
                        <path d="M87270 153750 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z" />
                        <path d="M91190 153750 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z" />
                        <path d="M93010 153580 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328
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
l-23 -50 -30 60 c-76 149 -198 265 -323 309 -57 21 -220 29 -305 16z" />
                        <path d="M98900 153580 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
288 -494 285 -49 -1 -109 -5 -134 -9z" />
                        <path d="M101755 153581 c-298 -49 -527 -257 -606 -552 -31 -113 -34 -374 -6
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
-391 466 -27 320 58 554 226 618 60 23 74 25 148 20 51 -3 87 -12 131 -34z" />
                        <path d="M104790 153583 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z" />
                        <path d="M106630 153580 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328
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
l-23 -50 -30 60 c-76 149 -198 265 -323 309 -57 21 -220 29 -305 16z" />
                        <path d="M110740 153581 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z" />
                        <path d="M90815 151338 c-44 -5 -123 -22 -176 -38 -286 -88 -481 -286 -575
-585 -26 -83 -28 -103 -28 -245 0 -147 1 -160 32 -255 48 -151 110 -253 218
-360 106 -106 206 -166 359 -216 95 -31 107 -33 255 -33 148 0 160 2 255 33
153 50 253 110 359 216 108 107 170 209 218 360 31 95 32 108 32 255 0 142 -2
162 -28 245 -74 236 -210 407 -408 516 -86 48 -239 96 -328 104 -36 3 -74 7
-85 9 -11 2 -56 -1 -100 -6z" />
                        <path d="M67050 150499 c-75 -13 -169 -59 -226 -111 -103 -94 -148 -210 -142
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
310 338 340 68 13 204 1 279 -25z" />
                        <path d="M73548 150480 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
-60 268 -374 300 -59 6 -60 6 -77 -24z" />
                        <path d="M76930 150401 c-49 -10 -75 -26 -101 -63 -31 -43 -30 -132 4 -263 48
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
521 42 24 78 44 81 44 3 0 57 -46 120 -103z" />
                        <path d="M62100 150050 c-171 -26 -303 -130 -346 -272 -25 -83 -15 -197 25
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
-157 -86 -12 -137 51 -130 162 4 68 36 142 96 224 44 60 42 62 110 -77z" />
                        <path d="M65015 149494 c-112 -18 -233 -87 -305 -176 -50 -62 -91 -155 -178
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
c-36 55 -95 100 -168 130 -49 19 -83 25 -167 28 -58 2 -119 1 -136 -1z" />
                        <path d="M70165 149494 c-112 -18 -233 -87 -305 -176 -50 -62 -91 -155 -178
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
c-36 55 -95 100 -168 130 -49 19 -83 25 -167 28 -58 2 -119 1 -136 -1z" />
                        <path d="M75640 149493 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z" />
                        <path d="M79770 149491 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z" />
                        <path d="M59465 147178 c-44 -5 -123 -22 -176 -38 -286 -88 -481 -286 -575
-585 -26 -83 -28 -103 -28 -245 0 -147 1 -160 32 -255 48 -151 110 -253 218
-360 106 -106 206 -166 359 -216 95 -31 107 -33 255 -33 148 0 160 2 255 33
153 50 253 110 359 216 108 107 170 209 218 360 31 95 32 108 32 255 0 142 -2
162 -28 245 -74 236 -210 407 -408 516 -86 48 -239 96 -328 104 -36 3 -74 7
-85 9 -11 2 -56 -1 -100 -6z" />
                        <path d="M71535 144331 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
-1238 4 -779 4 -791 26 -884 80 -334 272 -542 577 -627 92 -25 114 -28 280
-28 176 0 182 1 279 33 302 98 520 344 604 681 23 94 26 125 26 290 1 163 -2
196 -23 280 -49 195 -155 366 -297 481 -86 70 -183 120 -305 155 -82 24 -112
27 -239 28 -128 1 -153 -2 -215 -23 -86 -29 -173 -79 -243 -138 l-53 -45 3
453 c4 477 7 511 49 524 39 13 147 -28 320 -120 199 -107 264 -133 362 -145
250 -29 442 109 507 365 15 60 17 82 9 98 -25 47 -26 47 -123 6 -202 -84 -382
-114 -547 -89 -46 6 -179 36 -296 66 -222 56 -305 68 -388 55z m732 -1278 c75
-30 155 -104 196 -180 41 -76 73 -218 87 -378 38 -436 -80 -753 -320 -855 -76
-32 -220 -33 -299 -1 -104 42 -175 111 -234 226 -54 104 -57 133 -57 595 l0
426 43 36 c101 84 214 141 312 158 79 13 202 1 272 -27z" />
                        <path d="M70070 143490 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z" />
                        <path d="M64620 143321 c-36 -5 -107 -20 -159 -35 -318 -92 -555 -334 -646
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
836 63 181 187 300 342 329 78 15 188 2 258 -30z" />
                        <path d="M68060 143321 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z" />
                        <path d="M74020 143323 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z" />
                        <path d="M75980 143321 c-36 -5 -107 -20 -159 -35 -318 -92 -555 -334 -646
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
836 63 181 187 300 342 329 78 15 188 2 258 -30z" />
                        <path d="M79430 143321 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z" />
                        <path d="M89150 141791 c-49 -10 -75 -26 -101 -63 -31 -43 -30 -132 4 -263 48
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
521 42 24 78 44 81 44 3 0 57 -46 120 -103z" />
                        <path d="M95360 141440 c-171 -26 -303 -130 -346 -272 -25 -83 -15 -197 25
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
-157 -86 -12 -137 51 -130 162 4 68 36 142 96 224 44 60 42 62 110 -77z" />
                        <path d="M97670 141050 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z" />
                        <path d="M87860 140883 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z" />
                        <path d="M91760 140880 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
288 -494 285 -49 -1 -109 -5 -134 -9z" />
                        <path d="M86630 140863 c-8 -4 -80 -63 -160 -132 -187 -164 -213 -183 -285
-214 -103 -45 -185 -59 -350 -58 -82 0 -183 4 -223 10 l-73 9 -35 -36 c-41
-45 -94 -146 -94 -181 0 -20 15 -37 59 -73 123 -98 202 -241 204 -369 1 -79
-23 -124 -86 -160 -54 -30 -142 -30 -190 0 -57 35 -71 86 -64 230 l5 118 -27
15 c-24 14 -30 14 -67 -1 -120 -48 -169 -134 -169 -296 0 -88 3 -107 27 -157
71 -152 247 -239 458 -225 173 11 312 90 410 233 93 134 76 340 -38 478 -34
41 -133 126 -176 151 -12 7 32 10 146 11 155 1 168 2 259 32 121 40 202 92
229 147 l20 40 0 -910 c0 -547 -4 -934 -10 -970 -22 -136 -71 -232 -155 -307
-78 -69 -191 -108 -315 -108 -252 0 -374 186 -356 540 3 69 16 173 28 233 l22
107 -32 32 -31 32 -38 -18 c-97 -46 -233 -153 -293 -231 -81 -106 -112 -194
-111 -324 1 -145 44 -254 140 -354 117 -123 240 -195 404 -239 69 -18 109 -22
257 -22 201 0 282 16 418 82 279 137 446 381 481 704 7 62 11 475 11 1143 l0
1045 -92 -1 c-51 0 -100 -3 -108 -6z" />
                        <path d="M78845 140668 c-44 -5 -123 -22 -176 -38 -286 -88 -481 -286 -575
-585 -26 -83 -28 -103 -28 -245 0 -147 1 -160 32 -255 48 -151 110 -253 218
-360 106 -106 206 -166 359 -216 95 -31 107 -33 255 -33 148 0 160 2 255 33
153 50 253 110 359 216 108 107 170 209 218 360 31 95 32 108 32 255 0 142 -2
162 -28 245 -74 236 -210 407 -408 516 -86 48 -239 96 -328 104 -36 3 -74 7
-85 9 -11 2 -56 -1 -100 -6z" />
                        <path d="M83975 137758 c-44 -5 -123 -22 -176 -38 -286 -88 -481 -286 -575
-585 -26 -83 -28 -103 -28 -245 0 -147 1 -160 32 -255 48 -151 110 -253 218
-360 106 -106 206 -166 359 -216 95 -31 107 -33 255 -33 148 0 160 2 255 33
153 50 253 110 359 216 108 107 170 209 218 360 31 95 32 108 32 255 0 142 -2
162 -28 245 -74 236 -210 407 -408 516 -86 48 -239 96 -328 104 -36 3 -74 7
-85 9 -11 2 -56 -1 -100 -6z" />
                        <path d="M75945 94091 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
-1238 4 -779 4 -791 26 -884 80 -334 272 -542 577 -627 92 -25 114 -28 280
-28 176 0 182 1 279 33 302 98 520 344 604 681 23 94 26 125 26 290 1 163 -2
196 -23 280 -49 195 -155 366 -297 481 -86 70 -183 120 -305 155 -82 24 -112
27 -239 28 -128 1 -153 -2 -215 -23 -86 -29 -173 -79 -243 -138 l-53 -45 3
453 c4 477 7 511 49 524 39 13 147 -28 320 -120 199 -107 264 -133 362 -145
250 -29 442 109 507 365 15 60 17 82 9 98 -25 47 -26 47 -123 6 -202 -84 -382
-114 -547 -89 -46 6 -179 36 -296 66 -222 56 -305 68 -388 55z m732 -1278 c75
-30 155 -104 196 -180 41 -76 73 -218 87 -378 38 -436 -80 -753 -320 -855 -76
-32 -220 -33 -299 -1 -104 42 -175 111 -234 226 -54 104 -57 133 -57 595 l0
426 43 36 c101 84 214 141 312 158 79 13 202 1 272 -27z" />
                        <path d="M79714 93106 c-89 -33 -130 -61 -188 -132 -62 -75 -107 -163 -114
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
576 138 200 93 414 -117 553 -108 72 -296 93 -419 47z" />
                        <path d="M64310 93081 c-36 -5 -107 -20 -159 -35 -318 -92 -555 -334 -646
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
836 63 181 187 300 342 329 78 15 188 2 258 -30z" />
                        <path d="M67510 93080 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
288 -494 285 -49 -1 -109 -5 -134 -9z" />
                        <path d="M70450 93080 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328 -318
-508 -30 -104 -32 -120 -33 -290 -1 -158 1 -190 21 -260 76 -274 277 -531 565
-725 103 -68 347 -185 522 -250 77 -28 156 -57 175 -65 31 -11 14 -12 -135 -8
-237 7 -295 -13 -329 -114 -19 -56 -33 -183 -20 -183 5 0 43 11 85 25 105 33
198 39 384 26 275 -21 481 -64 800 -170 288 -95 495 -181 667 -277 l97 -55 37
16 c30 12 35 19 31 37 -3 13 -9 45 -13 73 -9 67 -53 170 -99 234 -90 125 -159
161 -1035 541 -647 280 -848 388 -1017 544 -133 123 -208 244 -251 405 -22 84
-25 117 -26 261 0 177 10 249 51 370 48 139 112 233 198 288 54 34 160 36 221
4 79 -41 154 -156 188 -290 24 -92 38 -301 31 -454 l-7 -136 27 -36 27 -36
157 0 157 0 28 29 27 28 8 274 c10 295 19 353 74 470 35 73 101 147 152 170
54 25 144 25 194 0 48 -25 107 -91 131 -147 49 -114 62 -222 61 -521 l-1 -251
31 -26 c30 -25 34 -26 182 -26 151 1 152 1 184 28 l31 27 5 265 c3 211 8 278
22 330 40 148 110 253 206 304 71 39 181 43 245 9 135 -72 202 -255 191 -520
-9 -221 -52 -328 -201 -503 -75 -87 -96 -118 -92 -134 3 -12 6 -27 6 -35 0
-11 14 -12 74 -7 87 8 194 42 274 88 151 86 292 283 349 488 13 50 17 102 17
220 0 144 -2 161 -29 240 -58 174 -196 316 -370 381 -200 74 -439 64 -603 -28
-88 -49 -207 -168 -257 -258 -39 -68 -39 -69 -45 -39 -20 95 -140 244 -252
311 -113 69 -299 83 -433 32 -141 -52 -259 -167 -324 -314 l-23 -50 -30 60
c-76 149 -198 265 -323 309 -57 21 -220 29 -305 16z" />
                        <path d="M74470 93083 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z" />
                        <path d="M81560 93081 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                        <path d="M63140 90259 c-164 -19 -354 -99 -470 -197 -133 -113 -219 -246 -276
-427 -26 -83 -28 -103 -28 -245 0 -147 1 -160 32 -255 48 -150 110 -252 218
-360 108 -107 207 -167 364 -216 99 -31 114 -33 250 -33 136 0 151 2 250 33
157 49 256 109 364 216 108 108 170 210 218 360 31 95 32 108 32 255 0 142 -2
162 -28 245 -95 300 -290 498 -581 588 -71 22 -112 29 -235 41 -19 2 -69 0
-110 -5z" />
                        <path d="M57430 88799 c-164 -19 -354 -99 -470 -197 -133 -113 -219 -246 -276
-427 -26 -83 -28 -103 -28 -245 0 -147 1 -160 32 -255 48 -150 110 -252 218
-360 108 -107 207 -167 364 -216 99 -31 114 -33 250 -33 136 0 151 2 250 33
157 49 256 109 364 216 108 108 170 210 218 360 31 95 32 108 32 255 0 142 -2
162 -28 245 -95 300 -290 498 -581 588 -71 22 -112 29 -235 41 -19 2 -69 0
-110 -5z" />
                        <path d="M100591 86980 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z" />
                        <path d="M108205 86971 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
-1238 4 -779 4 -791 26 -884 80 -334 272 -542 577 -627 92 -25 114 -28 280
-28 176 0 182 1 279 33 302 98 520 344 604 681 23 94 26 125 26 290 1 163 -2
196 -23 280 -49 195 -155 366 -297 481 -86 70 -183 120 -305 155 -82 24 -112
27 -239 28 -128 1 -153 -2 -215 -23 -86 -29 -173 -79 -243 -138 l-53 -45 3
453 c4 477 7 511 49 524 39 13 147 -28 320 -120 199 -107 264 -133 362 -145
250 -29 442 109 507 365 15 60 17 82 9 98 -25 47 -26 47 -123 6 -202 -84 -382
-114 -547 -89 -46 6 -179 36 -296 66 -222 56 -305 68 -388 55z m732 -1278 c75
-30 155 -104 196 -180 41 -76 73 -218 87 -378 38 -436 -80 -753 -320 -855 -76
-32 -220 -33 -299 -1 -104 42 -175 111 -234 226 -54 104 -57 133 -57 595 l0
426 43 36 c101 84 214 141 312 158 79 13 202 1 272 -27z" />
                        <path d="M58531 86750 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z" />
                        <path d="M79210 86751 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63 -66
100 -115 116 -152 50 -117 51 -134 51 -921 0 -764 6 -902 42 -1055 74 -317
288 -547 592 -637 95 -29 111 -30 286 -31 174 -1 191 0 290 27 467 126 736
543 690 1069 -44 509 -342 801 -860 846 -211 18 -349 -16 -509 -123 -30 -20
-50 -31 -44 -24 44 59 194 242 227 276 23 24 54 51 70 59 27 14 31 14 44 -3 8
-11 19 -32 24 -47 10 -28 13 -29 57 -22 25 4 49 9 53 11 18 11 49 123 49 176
1 110 -54 160 -176 162 -78 1 -111 -12 -176 -71 -66 -60 -200 -250 -225 -322
-11 -31 -13 10 -14 285 0 345 -2 362 -56 459 -31 55 -115 138 -172 170 -102
57 -191 66 -342 36z m1115 -1261 c256 -37 413 -229 466 -575 16 -102 16 -370
0 -455 -44 -238 -141 -368 -315 -422 -100 -30 -243 -22 -336 20 -178 80 -293
271 -340 562 -6 36 -14 188 -17 338 l-6 273 54 56 c100 102 243 184 355 202
67 12 61 12 139 1z" />
                        <path d="M63720 86740 c-315 -31 -545 -185 -642 -430 -30 -76 -55 -196 -61
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
1 296 -21z" />
                        <path d="M68165 86741 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
-1238 4 -779 4 -791 26 -884 80 -334 272 -542 577 -627 92 -25 114 -28 280
-28 176 0 182 1 279 33 302 98 520 344 604 681 23 94 26 125 26 290 1 163 -2
196 -23 280 -49 195 -155 366 -297 481 -86 70 -183 120 -305 155 -82 24 -112
27 -239 28 -128 1 -153 -2 -215 -23 -86 -29 -173 -79 -243 -138 l-53 -45 3
453 c4 477 7 511 49 524 39 13 147 -28 320 -120 199 -107 264 -133 362 -145
250 -29 442 109 507 365 15 60 17 82 9 98 -25 47 -26 47 -123 6 -202 -84 -382
-114 -547 -89 -46 6 -179 36 -296 66 -222 56 -305 68 -388 55z m732 -1278 c75
-30 155 -104 196 -180 41 -76 73 -218 87 -378 38 -436 -80 -753 -320 -855 -76
-32 -220 -33 -299 -1 -104 42 -175 111 -234 226 -54 104 -57 133 -57 595 l0
426 43 36 c101 84 214 141 312 158 79 13 202 1 272 -27z" />
                        <path d="M74225 86741 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
-1238 4 -779 4 -791 26 -884 80 -334 272 -542 577 -627 92 -25 114 -28 280
-28 176 0 182 1 279 33 302 98 520 344 604 681 23 94 26 125 26 290 1 163 -2
196 -23 280 -49 195 -155 366 -297 481 -86 70 -183 120 -305 155 -82 24 -112
27 -239 28 -128 1 -153 -2 -215 -23 -86 -29 -173 -79 -243 -138 l-53 -45 3
453 c4 477 7 511 49 524 39 13 147 -28 320 -120 199 -107 264 -133 362 -145
250 -29 442 109 507 365 15 60 17 82 9 98 -25 47 -26 47 -123 6 -202 -84 -382
-114 -547 -89 -46 6 -179 36 -296 66 -222 56 -305 68 -388 55z m732 -1278 c75
-30 155 -104 196 -180 41 -76 73 -218 87 -378 38 -436 -80 -753 -320 -855 -76
-32 -220 -33 -299 -1 -104 42 -175 111 -234 226 -54 104 -57 133 -57 595 l0
426 43 36 c101 84 214 141 312 158 79 13 202 1 272 -27z" />
                        <path d="M103580 85961 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z" />
                        <path d="M105630 85960 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
288 -494 285 -49 -1 -109 -5 -134 -9z" />
                        <path d="M110790 85961 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z" />
                        <path d="M72770 85900 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65 -161
-10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455 89
-643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135 -95
263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108
-314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240
330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369
-35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311
282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54
45 -25 1 -70 -2 -100 -6z" />
                        <path d="M61520 85731 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                        <path d="M65590 85730 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
288 -494 285 -49 -1 -109 -5 -134 -9z" />
                        <path d="M70750 85731 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                        <path d="M76740 85731 c-36 -5 -107 -20 -159 -35 -318 -92 -555 -334 -646
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
836 63 181 187 300 342 329 78 15 188 2 258 -30z" />
                        <path d="M82270 85733 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z" />
                        <path d="M84100 85731 c-346 -52 -618 -263 -708 -551 -41 -130 -37 -261 10
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
-104 25 -350 36 -449 22z" />
                        <path d="M86320 85731 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                        <path d="M99850 83419 c-164 -19 -354 -99 -470 -197 -133 -113 -219 -246 -276
-427 -26 -83 -28 -103 -28 -245 0 -147 1 -160 32 -255 48 -150 110 -252 218
-360 108 -107 207 -167 364 -216 99 -31 114 -33 250 -33 136 0 151 2 250 33
157 49 256 109 364 216 108 108 170 210 218 360 31 95 32 108 32 255 0 142 -2
162 -28 245 -95 300 -290 498 -581 588 -71 22 -112 29 -235 41 -19 2 -69 0
-110 -5z" />
                        <path d="M69100 82349 c-164 -19 -354 -99 -470 -197 -133 -113 -219 -246 -276
-427 -26 -83 -28 -103 -28 -245 0 -147 1 -160 32 -255 48 -150 110 -252 218
-360 108 -107 207 -167 364 -216 99 -31 114 -33 250 -33 136 0 151 2 250 33
157 49 256 109 364 216 108 108 170 210 218 360 31 95 32 108 32 255 0 142 -2
162 -28 245 -95 300 -290 498 -581 588 -71 22 -112 29 -235 41 -19 2 -69 0
-110 -5z" />
                        <path d="M45960 80961 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63 -66
100 -115 116 -152 50 -117 51 -134 51 -921 0 -764 6 -902 42 -1055 74 -317
288 -547 592 -637 95 -29 111 -30 286 -31 174 -1 191 0 290 27 467 126 736
543 690 1069 -44 509 -342 801 -860 846 -211 18 -349 -16 -509 -123 -30 -20
-50 -31 -44 -24 44 59 194 242 227 276 23 24 54 51 70 59 27 14 31 14 44 -3 8
-11 19 -32 24 -47 10 -28 13 -29 57 -22 25 4 49 9 53 11 18 11 49 123 49 176
1 110 -54 160 -176 162 -78 1 -111 -12 -176 -71 -66 -60 -200 -250 -225 -322
-11 -31 -13 10 -14 285 0 345 -2 362 -56 459 -31 55 -115 138 -172 170 -102
57 -191 66 -342 36z m1115 -1261 c256 -37 413 -229 466 -575 16 -102 16 -370
0 -455 -44 -238 -141 -368 -315 -422 -100 -30 -243 -22 -336 20 -178 80 -293
271 -340 562 -6 36 -14 188 -17 338 l-6 273 54 56 c100 102 243 184 355 202
67 12 61 12 139 1z" />
                        <path d="M52091 80960 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z" />
                        <path d="M63391 80960 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z" />
                        <path d="M58808 80930 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
-60 268 -374 300 -59 6 -60 6 -77 -24z" />
                        <path d="M49020 79943 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z" />
                        <path d="M50850 79941 c-346 -52 -618 -263 -708 -551 -41 -130 -37 -261 10
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
-104 25 -350 36 -449 22z" />
                        <path d="M55435 79944 c-112 -18 -233 -87 -305 -176 -50 -62 -91 -155 -178
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
c-36 55 -95 100 -168 130 -49 19 -83 25 -167 28 -58 2 -119 1 -136 -1z" />
                        <path d="M60920 79941 c-36 -5 -107 -20 -159 -35 -318 -92 -555 -334 -646
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
836 63 181 187 300 342 329 78 15 188 2 258 -30z" />
                        <path d="M66150 79940 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
288 -494 285 -49 -1 -109 -5 -134 -9z" />
                        <path d="M69005 79941 c-298 -49 -527 -257 -606 -552 -31 -113 -34 -374 -6
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
-391 466 -27 320 58 554 226 618 60 23 74 25 148 20 51 -3 87 -12 131 -34z" />
                        <path d="M72040 79943 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z" />
                        <path d="M73880 79940 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328 -318
-508 -30 -104 -32 -120 -33 -290 -1 -158 1 -190 21 -260 76 -274 277 -531 565
-725 103 -68 347 -185 522 -250 77 -28 156 -57 175 -65 31 -11 14 -12 -135 -8
-237 7 -295 -13 -329 -114 -19 -56 -33 -183 -20 -183 5 0 43 11 85 25 105 33
198 39 384 26 275 -21 481 -64 800 -170 288 -95 495 -181 667 -277 l97 -55 37
16 c30 12 35 19 31 37 -3 13 -9 45 -13 73 -9 67 -53 170 -99 234 -90 125 -159
161 -1035 541 -647 280 -848 388 -1017 544 -133 123 -208 244 -251 405 -22 84
-25 117 -26 261 0 177 10 249 51 370 48 139 112 233 198 288 54 34 160 36 221
4 79 -41 154 -156 188 -290 24 -92 38 -301 31 -454 l-7 -136 27 -36 27 -36
157 0 157 0 28 29 27 28 8 274 c10 295 19 353 74 470 35 73 101 147 152 170
54 25 144 25 194 0 48 -25 107 -91 131 -147 49 -114 62 -222 61 -521 l-1 -251
31 -26 c30 -25 34 -26 182 -26 151 1 152 1 184 28 l31 27 5 265 c3 211 8 278
22 330 40 148 110 253 206 304 71 39 181 43 245 9 135 -72 202 -255 191 -520
-9 -221 -52 -328 -201 -503 -75 -87 -96 -118 -92 -134 3 -12 6 -27 6 -35 0
-11 14 -12 74 -7 87 8 194 42 274 88 151 86 292 283 349 488 13 50 17 102 17
220 0 144 -2 161 -29 240 -58 174 -196 316 -370 381 -200 74 -439 64 -603 -28
-88 -49 -207 -168 -257 -258 -39 -68 -39 -69 -45 -39 -20 95 -140 244 -252
311 -113 69 -299 83 -433 32 -141 -52 -259 -167 -324 -314 l-23 -50 -30 60
c-76 149 -198 265 -323 309 -57 21 -220 29 -305 16z" />
                        <path d="M77980 79941 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                        <path d="M74750 75539 c-164 -19 -354 -99 -470 -197 -133 -113 -219 -246 -276
-427 -26 -83 -28 -103 -28 -245 0 -147 1 -160 32 -255 48 -150 110 -252 218
-360 108 -107 207 -167 364 -216 99 -31 114 -33 250 -33 136 0 151 2 250 33
157 49 256 109 364 216 108 108 170 210 218 360 31 95 32 108 32 255 0 142 -2
162 -28 245 -95 300 -290 498 -581 588 -71 22 -112 29 -235 41 -19 2 -69 0
-110 -5z" />
                        <path d="M107770 74261 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63
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
202 67 12 61 12 139 1z" />
                        <path d="M106558 74230 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
-60 268 -374 300 -59 6 -60 6 -77 -24z" />
                        <path d="M72491 73860 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z" />
                        <path d="M83268 73830 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
-60 268 -374 300 -59 6 -60 6 -77 -24z" />
                        <path d="M90075 73851 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
-1238 4 -779 4 -791 26 -884 80 -334 272 -542 577 -627 92 -25 114 -28 280
-28 176 0 182 1 279 33 302 98 520 344 604 681 23 94 26 125 26 290 1 163 -2
196 -23 280 -49 195 -155 366 -297 481 -86 70 -183 120 -305 155 -82 24 -112
27 -239 28 -128 1 -153 -2 -215 -23 -86 -29 -173 -79 -243 -138 l-53 -45 3
453 c4 477 7 511 49 524 39 13 147 -28 320 -120 199 -107 264 -133 362 -145
250 -29 442 109 507 365 15 60 17 82 9 98 -25 47 -26 47 -123 6 -202 -84 -382
-114 -547 -89 -46 6 -179 36 -296 66 -222 56 -305 68 -388 55z m732 -1278 c75
-30 155 -104 196 -180 41 -76 73 -218 87 -378 38 -436 -80 -753 -320 -855 -76
-32 -220 -33 -299 -1 -104 42 -175 111 -234 226 -54 104 -57 133 -57 595 l0
426 43 36 c101 84 214 141 312 158 79 13 202 1 272 -27z" />
                        <path d="M102770 73240 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
288 -494 285 -49 -1 -109 -5 -134 -9z" />
                        <path d="M110830 73243 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z" />
                        <path d="M112660 73241 c-346 -52 -618 -263 -708 -551 -41 -130 -37 -261 10
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
-104 25 -350 36 -449 22z" />
                        <path d="M114870 73241 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z" />
                        <path d="M75210 73010 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65 -161
-10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455 89
-643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29 218
-1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236 -25
-53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175 -61
427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101 239
-209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10 48
7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70 -2
-100 -6z" />
                        <path d="M76907 72820 c-196 -85 -356 -202 -437 -320 -113 -165 -153 -325
-131 -528 20 -192 98 -348 228 -457 161 -134 380 -196 614 -175 171 16 298 67
373 150 l36 40 0 -502 c0 -555 -2 -579 -62 -690 -55 -103 -151 -183 -257 -214
-77 -22 -212 -22 -278 0 -114 38 -188 142 -220 308 -20 107 -12 309 19 455
l22 103 -34 35 -33 34 -46 -26 c-214 -123 -343 -270 -381 -432 -16 -69 -7
-217 17 -291 69 -210 261 -368 523 -430 77 -18 124 -22 250 -23 137 0 166 3
250 27 304 84 525 296 609 582 47 162 51 255 51 1318 l0 977 -22 29 -22 30
-172 0 -172 0 -21 -34 c-21 -33 -21 -44 -21 -518 l0 -484 -47 -45 c-115 -110
-218 -151 -382 -152 -87 0 -114 3 -152 20 -134 61 -197 181 -219 414 -11 118
-3 241 21 334 22 82 69 176 148 294 45 66 81 126 81 134 0 12 -50 67 -61 67
-2 -1 -35 -14 -72 -30z" />
                        <path d="M79070 72840 c-149 -20 -328 -100 -455 -203 -166 -134 -276 -296
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
-334 391 -72 210 -80 489 -21 685 42 140 148 275 254 325 87 41 157 51 264 35z" />
                        <path d="M85450 72841 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                        <path d="M87490 72840 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
288 -494 285 -49 -1 -109 -5 -134 -9z" />
                        <path d="M92650 72841 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                        <path d="M101590 70609 c-164 -19 -354 -99 -470 -197 -133 -113 -219 -246
-276 -427 -26 -83 -28 -103 -28 -245 0 -147 1 -160 32 -255 48 -150 110 -252
218 -360 108 -107 207 -167 364 -216 99 -31 114 -33 250 -33 136 0 151 2 250
33 157 49 256 109 364 216 108 108 170 210 218 360 31 95 32 108 32 255 0 142
-2 162 -28 245 -95 300 -290 498 -581 588 -71 22 -112 29 -235 41 -19 2 -69 0
-110 -5z" />
                        <path d="M78950 63641 c-49 -10 -75 -26 -101 -63 -31 -43 -30 -132 4 -263 48
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
521 42 24 78 44 81 44 3 0 57 -46 120 -103z" />
                        <path d="M61850 62730 c-276 -39 -534 -298 -622 -624 -19 -69 -22 -107 -22
-261 0 -203 16 -292 80 -464 118 -315 392 -629 697 -796 37 -21 66 -39 64 -41
-1 -2 -68 1 -148 7 -209 14 -308 1 -361 -49 -52 -48 -44 -114 25 -197 34 -40
43 -45 78 -45 27 0 51 8 72 24 46 35 82 38 257 27 481 -31 900 -151 1266 -361
116 -67 161 -99 236 -167 26 -24 51 -43 55 -43 13 0 99 91 113 119 38 75 -5
198 -104 296 -92 90 -152 126 -496 291 -435 209 -546 265 -668 341 -381 235
-607 504 -694 827 -19 69 -22 108 -23 256 0 153 3 186 23 260 76 276 248 415
417 336 85 -39 134 -116 170 -266 14 -57 19 -130 23 -303 l4 -228 35 -14 c45
-19 291 -20 343 -1 l35 13 6 189 c7 207 13 269 36 358 44 177 151 277 295 278
77 0 124 -21 185 -84 46 -48 104 -162 127 -251 28 -107 40 -294 27 -407 -21
-192 -79 -315 -226 -485 -120 -139 -122 -152 -35 -213 88 -62 105 -59 220 36
188 155 318 312 396 476 59 124 85 233 86 355 0 120 -7 173 -39 281 -33 112
-90 209 -172 293 -158 163 -308 233 -521 244 -130 6 -200 -7 -309 -59 -83 -40
-196 -147 -236 -225 l-30 -58 -30 58 c-64 126 -211 237 -356 272 -67 15 -186
18 -279 5z" />
                        <path d="M65255 62734 c-112 -18 -233 -87 -305 -176 -50 -62 -91 -155 -178
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
c-36 55 -95 100 -168 130 -49 19 -83 25 -167 28 -58 2 -119 1 -136 -1z" />
                        <path d="M67780 62730 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328 -318
-508 -30 -104 -32 -120 -33 -290 -1 -158 1 -190 21 -260 76 -274 277 -531 565
-725 103 -68 347 -185 522 -250 77 -28 156 -57 175 -65 31 -11 14 -12 -135 -8
-237 7 -295 -13 -329 -114 -19 -56 -33 -183 -20 -183 5 0 43 11 85 25 105 33
198 39 384 26 275 -21 481 -64 800 -170 288 -95 495 -181 667 -277 l97 -55 37
16 c30 12 35 19 31 37 -3 13 -9 45 -13 73 -9 67 -53 170 -99 234 -90 125 -159
161 -1035 541 -647 280 -848 388 -1017 544 -133 123 -208 244 -251 405 -22 84
-25 117 -26 261 0 177 10 249 51 370 48 139 112 233 198 288 54 34 160 36 221
4 79 -41 154 -156 188 -290 24 -92 38 -301 31 -454 l-7 -136 27 -36 27 -36
157 0 157 0 28 29 27 28 8 274 c10 295 19 353 74 470 35 73 101 147 152 170
54 25 144 25 194 0 48 -25 107 -91 131 -147 49 -114 62 -222 61 -521 l-1 -251
31 -26 c30 -25 34 -26 182 -26 151 1 152 1 184 28 l31 27 5 265 c3 211 8 278
22 330 40 148 110 253 206 304 71 39 181 43 245 9 135 -72 202 -255 191 -520
-9 -221 -52 -328 -201 -503 -75 -87 -96 -118 -92 -134 3 -12 6 -27 6 -35 0
-11 14 -12 74 -7 87 8 194 42 274 88 151 86 292 283 349 488 13 50 17 102 17
220 0 144 -2 161 -29 240 -58 174 -196 316 -370 381 -200 74 -439 64 -603 -28
-88 -49 -207 -168 -257 -258 -39 -68 -39 -69 -45 -39 -20 95 -140 244 -252
311 -113 69 -299 83 -433 32 -141 -52 -259 -167 -324 -314 l-23 -50 -30 60
c-76 149 -198 265 -323 309 -57 21 -220 29 -305 16z" />
                        <path d="M71800 62733 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z" />
                        <path d="M73640 62730 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328 -318
-508 -30 -104 -32 -120 -33 -290 -1 -158 1 -190 21 -260 76 -274 277 -531 565
-725 103 -68 347 -185 522 -250 77 -28 156 -57 175 -65 31 -11 14 -12 -135 -8
-237 7 -295 -13 -329 -114 -19 -56 -33 -183 -20 -183 5 0 43 11 85 25 105 33
198 39 384 26 275 -21 481 -64 800 -170 288 -95 495 -181 667 -277 l97 -55 37
16 c30 12 35 19 31 37 -3 13 -9 45 -13 73 -9 67 -53 170 -99 234 -90 125 -159
161 -1035 541 -647 280 -848 388 -1017 544 -133 123 -208 244 -251 405 -22 84
-25 117 -26 261 0 177 10 249 51 370 48 139 112 233 198 288 54 34 160 36 221
4 79 -41 154 -156 188 -290 24 -92 38 -301 31 -454 l-7 -136 27 -36 27 -36
157 0 157 0 28 29 27 28 8 274 c10 295 19 353 74 470 35 73 101 147 152 170
54 25 144 25 194 0 48 -25 107 -91 131 -147 49 -114 62 -222 61 -521 l-1 -251
31 -26 c30 -25 34 -26 182 -26 151 1 152 1 184 28 l31 27 5 265 c3 211 8 278
22 330 40 148 110 253 206 304 71 39 181 43 245 9 135 -72 202 -255 191 -520
-9 -221 -52 -328 -201 -503 -75 -87 -96 -118 -92 -134 3 -12 6 -27 6 -35 0
-11 14 -12 74 -7 87 8 194 42 274 88 151 86 292 283 349 488 13 50 17 102 17
220 0 144 -2 161 -29 240 -58 174 -196 316 -370 381 -200 74 -439 64 -603 -28
-88 -49 -207 -168 -257 -258 -39 -68 -39 -69 -45 -39 -20 95 -140 244 -252
311 -113 69 -299 83 -433 32 -141 -52 -259 -167 -324 -314 l-23 -50 -30 60
c-76 149 -198 265 -323 309 -57 21 -220 29 -305 16z" />
                        <path d="M77660 62733 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z" />
                        <path d="M81790 62731 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                        <path d="M88760 62310 c-315 -31 -545 -185 -642 -430 -30 -76 -55 -196 -61
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
1 296 -21z" />
                        <path d="M95418 62290 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
-60 268 -374 300 -59 6 -60 6 -77 -24z" />
                        <path d="M98775 62311 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
-1238 4 -779 4 -791 26 -884 80 -334 272 -542 577 -627 92 -25 114 -28 280
-28 176 0 182 1 279 33 302 98 520 344 604 681 23 94 26 125 26 290 1 163 -2
196 -23 280 -49 195 -155 366 -297 481 -86 70 -183 120 -305 155 -82 24 -112
27 -239 28 -128 1 -153 -2 -215 -23 -86 -29 -173 -79 -243 -138 l-53 -45 3
453 c4 477 7 511 49 524 39 13 147 -28 320 -120 199 -107 264 -133 362 -145
250 -29 442 109 507 365 15 60 17 82 9 98 -25 47 -26 47 -123 6 -202 -84 -382
-114 -547 -89 -46 6 -179 36 -296 66 -222 56 -305 68 -388 55z m732 -1278 c75
-30 155 -104 196 -180 41 -76 73 -218 87 -378 38 -436 -80 -753 -320 -855 -76
-32 -220 -33 -299 -1 -104 42 -175 111 -234 226 -54 104 -57 133 -57 595 l0
426 43 36 c101 84 214 141 312 158 79 13 202 1 272 -27z" />
                        <path d="M90600 61470 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65 -161
-10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455 89
-643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29 218
-1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236 -25
-53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175 -61
427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101 239
-209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10 48
7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70 -2
-100 -6z" />
                        <path d="M97320 61470 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65 -161
-10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455 89
-643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29 218
-1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236 -25
-53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175 -61
427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101 239
-209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10 48
7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70 -2
-100 -6z" />
                        <path d="M92270 61311 c-328 -39 -570 -289 -570 -586 0 -38 7 -94 14 -123 40
-149 174 -272 330 -304 61 -12 90 -7 123 20 l21 19 -33 99 c-60 179 -65 385
-13 506 73 170 322 186 430 28 63 -92 71 -138 76 -457 3 -232 1 -283 -10 -283
-18 0 -212 -94 -273 -133 -270 -169 -445 -381 -516 -622 -21 -71 -24 -100 -24
-250 0 -146 4 -183 24 -265 79 -313 290 -527 603 -612 105 -28 125 -31 293
-32 160 -1 189 2 259 22 178 51 307 139 478 325 130 141 184 227 224 354 25
79 27 103 28 243 0 119 -4 170 -17 220 -78 286 -248 496 -563 698 l-81 52 -6
278 c-4 259 -6 282 -30 357 -68 222 -235 377 -460 429 -81 19 -223 27 -307 17z
m651 -1346 c267 -233 363 -431 362 -750 -1 -149 -11 -231 -45 -335 -69 -216
-221 -330 -444 -331 -74 0 -103 4 -146 22 -348 148 -482 711 -263 1104 45 80
159 203 239 258 72 49 188 116 198 114 4 -1 48 -38 99 -82z" />
                        <path d="M101270 61303 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z" />
                        <path d="M103230 61301 c-36 -5 -107 -20 -159 -35 -318 -92 -555 -334 -646
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
836 63 181 187 300 342 329 78 15 188 2 258 -30z" />
                        <path d="M106680 61301 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z" />
                        <path d="M65145 58799 c-44 -6 -121 -23 -170 -39 -283 -90 -475 -285 -568
-574 -30 -96 -32 -109 -31 -256 0 -148 1 -159 33 -255 96 -294 288 -484 581
-576 98 -30 114 -33 250 -33 136 0 152 3 250 33 293 92 485 282 581 576 32 96
33 107 33 255 1 147 -1 160 -31 256 -93 289 -286 485 -568 574 -80 26 -115 32
-245 44 -19 2 -71 0 -115 -5z" />
                        <path d="M87515 58479 c-44 -6 -121 -23 -170 -39 -283 -90 -475 -285 -568
-574 -30 -96 -32 -109 -31 -256 0 -148 1 -159 33 -255 96 -294 288 -484 581
-576 98 -30 114 -33 250 -33 136 0 152 3 250 33 293 92 485 282 581 576 32 96
33 107 33 255 1 147 -1 160 -31 256 -93 289 -286 485 -568 574 -80 26 -115 32
-245 44 -19 2 -71 0 -115 -5z" />
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