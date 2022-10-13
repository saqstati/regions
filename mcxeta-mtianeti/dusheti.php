<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="http://www.geostat.ge/regions/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="სტატისტიკური ინფორმაცია მცხეთა-მთიანეთის რეგიონის დუშეთის შესახებ" />
    <meta property="og:description" content="სტატისტიკური ინფორმაცია მცხეთა-მთიანეთის რეგიონის დუშეთის შესახებ" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <title class="tr" Key="PAGE_TITLE">სტატისტიკური ინფორმაცია მცხეთა-მთიანეთის რეგიონის დუშეთის შესახებ</title>
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
                <p id="pagetitlename" class="tr" Key="REGION14">სტატისტიკური ინფორმაცია მცხეთა-მთიანეთის რეგიონის დუშეთის შესახებ</p>
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
            <!-- <svg id="svg4380" xmlns="http://www.w3.org/2000/svg" version="1.1">

                <g id="layer5">
                    <a xlink:href="../mcxeta-mtianeti.php" class="text-decoration-none">
                        <path id="group5-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 1419,370.86 c 3.7254,1.02 8.5217,-0.15561 11.299,2.8224 0.1894,3.5599 4.4245,4.6249 5.0452,8.2246 1.9072,2.1568 4.3465,3.9882 6.6222,5.0137 1.9217,1.5826 3.8591,3.1082 3.7112,5.8086 2.791,3.1238 6.7581,-0.30898 9.8338,-0.50779 2.0067,-2.3244 2.4384,-4.826 5.7015,-5.8496 2.4477,2.7556 7.0881,3.3868 10.291,1.4395 3.4983,-1.0188 7.1748,-0.10891 10.361,0.17968 1.1545,3.6811 1.9234,7.2232 5.3999,9.7266 3.2849,2.6586 6.2821,7.2017 11.245,8.207 1.8773,4.2189 6.8708,7.0801 7.9184,12.178 2.8111,2.462 2.6955,6.7418 4.3806,9.7578 2.2467,-0.18955 6.4163,-1.4121 6.9021,0.49206 1.7261,2.6648 -1.6611,6.2536 1.8914,6.6541 2.161,2.1406 1.9452,6.2909 5.63,7.205 -2.228,3.5248 -4.5983,7.8926 -8.2721,8.4988 -0.016,4.0528 -1.9623,6.979 -2.8499,10.972 0.5382,5.0442 -0.2345,10.251 -0.6289,14.904 4.6314,4.1177 -0.5462,11.766 -5.8891,11.621 -2.2412,3.7572 -5.3502,7.0781 -7.7209,10.145 -1.7249,4.9333 3.5207,8.5255 1.4886,13.424 -1.1742,4.8456 -9.2085,3.2786 -10.889,8.1193 -6.0393,1.7778 -12.163,3.1484 -18.219,4.9121 -4.93,-0.25169 -7.9765,3.502 -10.995,6.235 -5.0584,3.5532 -3.1687,-1.3354 -1.87,-4.5202 -4.1126,-1.1832 -8.3219,-3.479 -12.997,-4.8489 -2.5803,1.6944 -4.3075,7.141 -7.1986,9.4778 -4.3715,0.52501 -1.5953,6.203 -5.5489,7.8382 -3.2348,3.8408 -4.499,8.5512 -6.645,13.081 -2.9378,2.5538 -6.5074,0.2328 -8.5682,-1.9513 -3.1455,1.5217 -0.8138,6.2807 -3.762,8.1746 -3.0515,4.1535 -4.0787,7.9424 -6.6594,12.261 -2.0131,2.5027 -4.416,5.8933 -8.5017,6.4479 -3.9794,2.563 -4.2031,8.1136 -3.2526,12.401 0.6274,2.5026 3.5409,1.3015 4.5058,4.0591 2.5432,-0.86364 1.647,2.6732 -0.4312,2.3791 -2.5456,2.1494 -2.1759,7.5968 -6.6622,8.1701 0.9917,3.4828 -1.2621,7.2148 -0.5506,10.451 3.4675,2.4581 2.7011,7.8549 5.0929,10.5 3.7921,-1.1335 2.5889,1.3038 4.2995,3.1524 5.0884,0.87966 0.2969,5.966 1.5294,9.6441 1.5682,4.5929 0.5345,9.7579 3.7235,13.655 -0.3434,5.7852 -8.2697,2.7772 -11.491,4.4355 -2.7988,2.7136 -0.2326,7.5245 -1.4047,11.422 -0.3915,3.9925 -1.5019,7.7136 -0.4492,11.811 -1.4056,4.0334 -1.9851,2.1912 -4.5007,3.377 -1.698,1.3777 -2.6617,-0.0827 -4.2038,1.6505 -1.4667,1.1651 -3.5431,1.8208 -4.6435,1.3496 -2.42,2.0268 -4.2593,-1.7464 -7.3982,-1.7989 -2.0377,-0.74271 -4.0243,-2.6411 -3.1076,1.2987 -3.9011,-0.84098 -5.5911,2.1494 -2.6967,4.051 1.1865,0.84791 2.6357,1.2053 2.1026,2.5937 0.1127,2.6438 -4.5608,3.0269 -6.5482,2.5468 -1.4608,-1.559 2.8294,-5.9007 1.649,-8.143 1.3056,-3.7338 -1.5406,-8.3149 -1.643,-11.664 0.5932,-4.9835 -3.0795,-5.9382 -8.1306,-5.613 -3.8168,0.58868 -9.3395,-1.553 -10.419,1.7206 -2.2303,0.79127 -4.6457,-1.34 -5.6931,1.7989 -2.0732,2.1423 -6.2776,-0.73649 -8.8904,0.0334 -1.6882,1.861 -2.7222,-0.30307 -5.2628,-0.0334 -0.8303,-2.7053 -3.8617,2.2526 -5.5926,-0.65612 -0.7858,-1.4732 -7.0178,-0.0372 -6.6954,-2.9435 -2.295,-1.0977 -3.2476,-3.8231 -7.0001,-2.549 -1.8577,-7e-5 -4.8677,0.18291 -6.6441,-1.0508 -2.6975,-1.509 -5.5618,1.4084 -7.4355,-0.0506 1.3376,-2.8996 0.069,-7.5269 -1.1973,-10 -0.1972,-2.5692 -2.3933,-3.162 -2.8242,-5.6956 -2.1541,-2.4743 -1.5348,-4.8896 -3.0475,-7.6949 2.0895,-0.95424 0.6264,-3.3332 1.9856,-5.094 -0.5429,-4.469 0.2646,-6.9384 4.7912,-6.9434 2.0951,-2.2498 5.3446,0.86744 6.7567,-2.0624 -0.3575,-2.9592 5.951,-0.28083 3.74,-3.7501 2.0985,0.11253 7.0076,-1.5939 2.3986,-2.6604 -3.2222,-3.9133 6.445,-0.24124 4.051,-4.707 1.135,-1.7417 -0.5187,-4.5302 -1.1181,-6.8847 -1.7629,-2.8524 4.4597,0.31597 4.7131,-2.8438 4.8828,-2.9778 -3.9207,-5.9527 1.5,-8.8496 0.7794,-3.5143 2.3492,-6.8506 7.0371,-6.4532 5.1568,0.006 6.249,-4.5456 3.5703,-8.3555 -0.362,-3.6541 -1.0857,-7.5411 0.3398,-11.252 1.377,-4.3585 -0.9759,-9.6481 0.4493,-14.328 -1.5827,-5.5096 -5.9489,-7.939 -6.1661,-13.344 -0.903,-3.6899 -8.7934,-8.1238 -2.9628,-11.268 2.0201,-2.0102 3.3968,-5.2082 5.2292,-7.5352 3.1213,-2.84 0.9732,-9.5798 -3.9587,-9.0019 -4.679,-2.8058 -9.7541,-0.69034 -13.707,-4.9082 -4.0674,-2.8316 -8.416,-4.2343 -11.441,-7.9707 -4.1719,-0.0917 -6.5638,-1.5191 -8.2382,-5.1406 -1.9377,-1.7449 -5.3604,-5.6596 -0.522,-5.5976 3.7665,-0.40665 3.6998,-1.5413 4.7892,-4.0509 2.2397,-2.5756 -1.3593,-4.4735 -1.3579,-6.7483 2.1283,-0.22068 2.7254,-2.5323 0.8969,-3.6017 1.2888,-1.6151 -0.1445,-3.9088 -1.8462,-4.7504 0.1357,-2.6923 -0.079,-7.2522 1.6445,-9.1387 3.1579,1.5049 4.723,-2.0086 7.584,-0.54098 1.9834,-4.1265 7.768,-3.8071 10.658,-3.6524 3.5896,0.77083 3.3745,3.6775 3.9007,6.084 3.135,1.5876 3.7257,-0.60316 6.6803,-1.5 3.145,0.79456 3.2373,4.4193 5.7215,5.6992 2.9457,0.008 6.2582,-0.60931 8.2823,1.7988 2.69,1.7488 3.44,-2.7956 4.449,-4.8163 0.4619,-3.0509 2.9491,-4.7135 5.3992,-6.125 0.164,-2.6958 2.6687,2.9099 4.6012,2.754 3.5599,-2.5053 5.5834,5.7739 6.1951,1.7382 2.0999,-1.2774 3.8202,-5.1594 5.2425,-7.422 2.8013,2.62 4.371,0.79262 7.8492,1.422 3.6636,0.75484 6.8494,-3.9629 10.154,-4.3986 3.4314,-1.5446 1.6824,-5.1648 5.8965,-5.8399 6.7028,-1.5456 5.9888,-10.172 11.43,-13.508 3.4207,-2.82 5.2045,-3.8415 1.5823,-7.9414 -0.7986,-3.173 -3.8924,-5.9111 -6.2956,-6.9004 0.3769,-2.5927 -2.9961,-6.8374 0.5613,-8.8888 0.5139,-3.8543 2.2215,-7.8495 2.114,-11.562 2.4899,0.85473 3.5052,0.33622 5.6914,-1.0468 0.521,-3.6637 5.1779,-5.6723 3.354,-9.4687 -2.0922,-2.2191 2.6264,-4.1114 0.7499,-7.2034 -1.5783,-3.7841 3.4803,-5.0332 3.6196,-8.416 0.7668,-3.4004 5.0923,-2.6916 7.7321,-3.412 3.0833,1.7467 5.3603,-0.74246 8.6787,-0.36411 z" id="path1149" />
                        <text id="svgRegions" x="1337" y="555">
                            დუშეთი
                        </text>
                        
                    </a>

                </g>
            </svg> -->


            <svg id="dushetiSVG" version="1.0" xmlns="http://www.w3.org/2000/svg" width="1000px" height="100%" viewBox="0 0 21600.000000 28800.000000" preserveAspectRatio="xMidYMid meet">

                <g transform="translate(0.000000,28800.000000) scale(0.100000,-0.100000)">
                    <a xlink:href="../mcxeta-mtianeti.php" class="text-decoration-none">
                        <path id="group5-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="M121080 273659 c-583 -120 -635 -133 -730 -177 -91 -42 -102 -45
-245 -58 -205 -18 -711 -17 -945 2 -113 9 -373 17 -670 20 l-485 6 -188 39
c-114 24 -199 37 -215 33 -51 -13 -83 -46 -173 -180 -84 -126 -95 -138 -187
-205 -53 -39 -113 -86 -132 -105 -22 -20 -75 -48 -139 -74 -57 -22 -150 -68
-207 -100 -56 -33 -143 -77 -192 -99 -86 -37 -96 -39 -233 -46 l-144 -7 -77
31 c-45 18 -146 43 -243 61 -131 24 -184 39 -252 70 -66 31 -123 47 -247 71
-318 61 -481 106 -771 211 l-280 102 -110 106 c-83 80 -143 127 -243 189 -124
78 -138 84 -187 84 -50 0 -59 -4 -231 -121 -99 -67 -205 -148 -238 -181 -57
-57 -72 -66 -290 -163 l-231 -102 -150 -8 c-82 -5 -256 -18 -385 -28 -244 -21
-386 -47 -810 -148 -310 -74 -395 -85 -645 -77 -214 6 -222 6 -308 -19 l-88
-24 -100 24 c-79 19 -127 24 -228 24 -121 0 -141 -3 -347 -54 -153 -37 -255
-69 -339 -104 -258 -109 -472 -179 -645 -212 -160 -30 -169 -33 -288 -97 -67
-36 -134 -77 -147 -91 -14 -14 -34 -54 -44 -91 -53 -180 -81 -283 -96 -356
-10 -44 -40 -132 -67 -195 -46 -106 -51 -124 -58 -225 -7 -99 -13 -122 -58
-235 -98 -245 -117 -278 -206 -370 -45 -47 -97 -106 -114 -132 -19 -27 -77
-81 -137 -128 -89 -69 -115 -96 -167 -173 -34 -51 -96 -139 -138 -197 -116
-160 -191 -275 -250 -385 l-54 -100 -4 -125 c-2 -88 -11 -155 -28 -225 -30
-126 -54 -289 -54 -379 0 -61 -6 -81 -49 -176 -49 -106 -71 -198 -71 -293 0
-33 -7 -54 -29 -83 -37 -50 -322 -329 -381 -374 -25 -19 -76 -62 -115 -95 -38
-34 -101 -86 -139 -115 -104 -81 -222 -221 -285 -336 -55 -101 -166 -247 -243
-320 -37 -36 -58 -45 -148 -70 l-105 -29 -155 -155 c-85 -86 -228 -222 -317
-303 -89 -81 -170 -160 -181 -175 -63 -89 -126 -277 -157 -469 -4 -23 -20 -77
-36 -120 -16 -43 -45 -148 -63 -233 -21 -100 -46 -185 -70 -240 -52 -117 -57
-194 -22 -349 32 -142 33 -221 2 -381 -50 -258 -74 -580 -56 -735 11 -96 127
-565 170 -690 61 -176 78 -296 100 -705 5 -96 13 -202 19 -235 5 -33 12 -109
16 -170 4 -74 16 -146 36 -220 l30 -111 -3 -291 -3 -292 -80 -158 c-70 -140
-88 -167 -160 -243 -113 -118 -125 -138 -133 -217 -6 -56 -15 -78 -49 -128
-53 -79 -154 -282 -183 -368 -22 -68 -22 -68 -113 -129 -113 -75 -261 -210
-368 -334 -108 -126 -291 -389 -346 -499 -55 -109 -59 -156 -20 -255 14 -36
33 -105 42 -155 l17 -90 131 -190 c72 -104 172 -247 223 -317 52 -70 125 -183
163 -251 57 -103 76 -149 111 -273 28 -101 58 -178 90 -239 31 -59 68 -157
108 -285 l60 -195 -8 -85 c-4 -47 -23 -141 -41 -210 -33 -123 -35 -127 -120
-243 -58 -79 -90 -131 -94 -155 -10 -62 55 -271 109 -346 68 -96 158 -267 147
-280 -12 -15 -51 -164 -81 -311 -15 -74 -34 -130 -56 -170 -18 -33 -38 -90
-45 -126 -10 -58 -16 -69 -43 -84 -48 -28 -202 -153 -231 -187 -36 -42 -117
-207 -145 -293 -52 -162 -131 -280 -324 -486 -109 -117 -130 -135 -216 -181
-52 -28 -138 -85 -190 -127 -52 -42 -140 -105 -195 -139 -99 -60 -102 -63
-148 -146 -26 -46 -61 -122 -77 -167 -17 -47 -44 -97 -60 -114 -84 -88 -172
-317 -185 -480 -3 -49 -13 -115 -20 -145 -8 -30 -25 -122 -40 -205 -35 -208
-49 -251 -79 -259 -14 -3 -40 -25 -58 -48 -18 -23 -70 -80 -115 -127 -46 -48
-104 -117 -131 -156 -27 -38 -80 -111 -118 -162 -67 -88 -71 -96 -96 -205 -17
-70 -30 -159 -34 -233 -6 -113 -4 -127 25 -240 l31 -119 -67 -68 c-42 -43 -97
-85 -143 -110 -41 -22 -156 -95 -255 -161 -233 -156 -259 -167 -379 -167 -171
0 -438 -66 -607 -151 -129 -64 -134 -70 -252 -239 -68 -99 -115 -203 -137
-302 -19 -83 -18 -83 -91 -69 -61 11 -69 10 -184 -24 -137 -40 -170 -40 -335
0 -52 13 -183 40 -290 61 l-195 37 -89 56 c-68 43 -106 77 -167 148 -89 104
-201 199 -251 213 -42 13 -300 12 -395 0 -44 -6 -95 -21 -130 -38 l-58 -29
-115 9 c-80 6 -144 6 -210 -3 -52 -6 -165 -14 -250 -18 -220 -10 -237 -22
-284 -208 -64 -250 -71 -327 -82 -888 l-6 -280 40 -145 c32 -120 48 -159 87
-220 29 -45 55 -101 65 -140 9 -36 38 -121 64 -190 l48 -124 -7 -126 c-8 -154
-26 -215 -121 -425 -154 -342 -233 -494 -332 -643 -55 -82 -134 -216 -175
-298 -70 -140 -77 -161 -121 -349 -79 -344 -86 -385 -86 -532 0 -117 -5 -164
-41 -347 -70 -362 -126 -607 -164 -711 -47 -129 -109 -341 -140 -479 -21 -90
-25 -135 -25 -265 0 -171 -19 -364 -50 -512 -11 -54 -64 -254 -116 -445 -88
-318 -97 -358 -100 -454 -3 -58 -9 -232 -14 -388 -19 -517 -47 -680 -154 -892
-35 -69 -87 -179 -116 -245 -33 -75 -85 -169 -140 -250 -48 -71 -97 -153 -109
-181 -16 -37 -36 -61 -69 -85 -26 -19 -99 -77 -162 -129 -173 -144 -363 -272
-447 -303 -59 -21 -103 -29 -230 -37 -216 -15 -221 -17 -314 -109 -112 -113
-123 -167 -53 -281 107 -179 196 -455 234 -730 19 -135 19 -152 5 -257 -8 -62
-32 -172 -54 -245 -43 -142 -85 -332 -96 -438 -3 -36 -13 -103 -20 -150 -8
-47 -17 -142 -20 -211 -7 -125 -7 -126 33 -270 32 -114 42 -168 47 -259 4 -72
18 -166 37 -250 l31 -135 122 -190 c67 -104 164 -271 215 -370 51 -99 117
-219 147 -267 35 -59 53 -99 53 -120 0 -93 22 -163 86 -280 l64 -119 0 -91 c0
-64 -11 -147 -36 -277 -45 -232 -49 -381 -16 -594 18 -118 26 -144 52 -182 28
-41 30 -48 21 -82 -44 -156 41 -659 176 -1048 36 -104 102 -271 146 -370 l81
-180 6 -155 c4 -130 8 -160 25 -188 30 -49 79 -76 141 -76 45 0 59 5 105 40
30 23 149 98 264 167 l210 127 138 0 c105 0 197 -8 383 -35 l244 -35 183 -111
c173 -105 189 -118 325 -252 172 -172 221 -240 258 -362 25 -85 39 -108 248
-410 121 -175 271 -402 332 -503 l111 -183 214 -131 214 -130 188 -186 c157
-155 205 -211 286 -327 110 -157 105 -145 171 -455 41 -194 124 -477 162 -556
17 -35 42 -55 158 -130 l137 -87 68 -136 68 -136 18 -230 c10 -126 23 -246 27
-265 5 -19 105 -253 222 -520 251 -572 366 -787 529 -986 92 -112 108 -126
351 -308 l255 -191 123 -155 c103 -130 135 -180 204 -315 l81 -160 29 -330
c25 -281 34 -350 63 -465 21 -83 30 -137 24 -141 -5 -3 -243 -70 -527 -149
-406 -112 -582 -166 -822 -252 -168 -60 -318 -116 -335 -122 -33 -15 -356
-296 -509 -445 -86 -83 -297 -332 -364 -427 -12 -17 -78 -132 -148 -255 -296
-524 -300 -531 -670 -954 l-332 -380 -209 -111 c-114 -61 -244 -126 -287 -144
-99 -43 -200 -136 -390 -360 -169 -199 -168 -198 -201 -310 -21 -72 -45 -124
-102 -217 -72 -118 -83 -131 -311 -350 -220 -212 -255 -242 -487 -407 -137
-99 -265 -193 -283 -210 -43 -40 -49 -68 -62 -278 l-11 -177 30 -115 31 -116
-22 -177 -22 -178 -191 -310 c-106 -170 -232 -379 -281 -464 l-89 -154 -151
-73 c-105 -51 -156 -81 -169 -100 -10 -15 -37 -100 -60 -188 -35 -135 -66
-216 -187 -496 -100 -230 -174 -384 -235 -490 -49 -85 -109 -191 -133 -235
-23 -44 -77 -123 -120 -175 -98 -122 -120 -155 -217 -330 -80 -143 -81 -148
-158 -425 l-78 -280 -145 -260 c-79 -143 -186 -327 -238 -410 l-93 -150 -32
-172 -33 -173 -113 -97 c-63 -54 -133 -106 -156 -115 -23 -9 -187 -71 -363
-136 -294 -109 -329 -125 -399 -176 -80 -60 -107 -97 -300 -406 -69 -109 -209
-258 -490 -520 l-181 -168 -128 -31 c-123 -30 -136 -31 -349 -31 l-222 -1
-285 -67 -285 -68 -220 -156 c-121 -86 -357 -239 -525 -340 l-305 -184 -140
-32 c-77 -17 -338 -67 -580 -112 l-439 -81 -201 -124 c-156 -97 -205 -132
-218 -157 -10 -18 -47 -143 -82 -277 l-66 -244 -112 -121 c-62 -67 -122 -134
-134 -151 -37 -54 -71 -241 -89 -482 l-16 -221 43 -124 c33 -97 56 -145 111
-226 69 -103 70 -104 63 -155 -5 -38 -23 -80 -66 -153 -57 -98 -62 -102 -156
-166 -114 -75 -372 -214 -663 -355 -179 -87 -226 -115 -375 -224 -144 -105
-199 -155 -361 -319 -189 -194 -191 -196 -309 -388 l-119 -193 -106 -68 c-85
-55 -121 -72 -192 -89 l-87 -22 -128 27 -128 27 -134 98 c-154 112 -167 116
-323 100 l-101 -11 -127 -84 c-194 -130 -570 -404 -937 -682 l-331 -253 -384
-197 c-210 -108 -394 -207 -407 -219 -33 -30 -329 -379 -442 -521 -70 -88
-137 -156 -250 -256 l-154 -135 -240 -109 -240 -108 -110 -8 c-210 -16 -202
-12 -375 -176 -47 -44 -124 -106 -172 -136 -48 -31 -126 -92 -175 -137 l-88
-80 -63 0 c-38 0 -87 -8 -125 -22 -105 -36 -141 -31 -317 49 -110 50 -192 79
-285 102 l-131 32 -164 -41 c-91 -22 -193 -52 -228 -66 l-63 -27 -137 17
c-176 21 -186 19 -277 -79 -82 -87 -86 -88 -210 -50 -148 45 -297 76 -329 69
-17 -4 -56 -20 -86 -36 -50 -27 -61 -29 -120 -23 -43 4 -108 24 -190 56 -88
35 -154 55 -225 65 -127 20 -130 19 -592 -82 -65 -14 -147 -29 -183 -34 -61
-7 -68 -6 -110 21 -38 24 -79 34 -245 63 -110 19 -256 49 -325 65 -98 23 -160
31 -285 37 -153 6 -164 5 -265 -21 -58 -15 -122 -39 -143 -53 -47 -31 -127
-119 -127 -138 0 -8 -18 -25 -40 -39 -22 -14 -66 -58 -98 -97 -31 -40 -78 -94
-103 -122 l-46 -49 -69 26 c-38 15 -88 31 -111 37 -44 11 -56 30 -83 137 -17
67 -54 94 -212 158 -114 46 -159 59 -223 65 -99 9 -151 32 -235 105 -127 110
-232 150 -335 128 -68 -15 -120 4 -230 82 -158 112 -191 130 -343 185 l-143
53 -232 183 c-217 171 -241 187 -363 242 -71 33 -144 63 -160 66 -35 8 -349
-63 -402 -90 -49 -26 -65 -61 -117 -259 -45 -168 -119 -377 -231 -647 -52
-127 -163 -290 -399 -588 -534 -674 -713 -937 -1046 -1537 -221 -398 -236
-429 -314 -638 l-83 -220 -143 -210 c-78 -115 -231 -320 -339 -455 -219 -273
-222 -276 -448 -394 l-117 -62 -87 -174 c-48 -96 -101 -218 -117 -270 -35
-107 -79 -163 -141 -180 -20 -5 -97 -14 -171 -20 -73 -5 -151 -14 -172 -20
-52 -15 -143 -107 -157 -160 -8 -31 -23 -49 -64 -80 -68 -50 -89 -79 -114
-162 -19 -60 -42 -293 -42 -421 l0 -38 -192 168 c-106 93 -257 223 -335 291
-124 107 -158 143 -266 285 -190 251 -197 277 -197 799 l0 341 -36 106 c-42
124 -62 160 -101 182 -15 9 -113 36 -218 59 l-190 43 -131 -10 c-129 -10 -133
-11 -219 -56 -80 -43 -93 -47 -159 -47 -40 0 -123 -6 -186 -14 -63 -8 -172
-17 -241 -21 -120 -5 -134 -4 -250 25 -71 18 -134 29 -148 25 -14 -3 -104 -38
-198 -77 -152 -62 -179 -77 -221 -120 l-48 -48 -84 16 c-71 14 -125 15 -320
10 -212 -6 -241 -5 -294 12 -75 24 -331 200 -524 360 -79 66 -207 159 -285
208 l-142 89 -115 1 c-100 0 -128 4 -215 31 -55 18 -130 39 -166 48 l-66 17
-99 121 c-54 67 -151 176 -214 242 -75 78 -165 190 -259 320 -79 110 -156 213
-170 228 -14 16 -69 52 -121 80 -89 47 -109 64 -322 279 -185 186 -228 234
-228 256 0 15 -14 79 -31 142 l-32 115 -161 237 c-145 213 -166 240 -215 270
-29 18 -88 57 -130 85 -42 29 -146 87 -231 130 -146 72 -159 76 -220 76 -36 0
-84 -5 -107 -12 -56 -16 -120 -80 -166 -168 -29 -55 -56 -89 -119 -145 -172
-154 -172 -154 -192 -252 -16 -72 -18 -112 -13 -225 8 -174 -18 -391 -59 -493
-27 -67 -27 -67 -73 -74 -25 -4 -95 -6 -156 -5 -60 2 -134 3 -162 3 -62 2 -89
-15 -196 -120 -54 -52 -93 -106 -157 -211 l-85 -142 -120 -74 c-146 -89 -230
-117 -360 -119 -145 -2 -151 -8 -256 -249 -32 -74 -40 -84 -144 -173 -60 -52
-121 -97 -135 -100 -14 -3 -41 -10 -61 -15 -50 -12 -147 -103 -191 -180 -31
-52 -47 -69 -90 -91 -29 -15 -80 -33 -113 -39 -80 -15 -265 -91 -340 -140 -50
-32 -68 -52 -102 -111 -32 -56 -80 -111 -208 -238 -92 -91 -175 -176 -185
-190 -10 -14 -55 -113 -100 -220 l-83 -195 -4 -105 c-2 -58 -8 -114 -14 -125
-5 -11 -18 -46 -29 -78 -10 -32 -28 -70 -39 -85 -11 -16 -23 -41 -27 -57 -4
-17 -54 -79 -118 -148 -136 -145 -155 -172 -191 -265 -24 -62 -34 -76 -65 -92
-69 -35 -139 -129 -321 -426 -91 -149 -140 -241 -191 -364 -66 -157 -71 -173
-89 -313 l-20 -147 21 -115 c11 -63 34 -152 50 -197 39 -107 41 -209 5 -353
-14 -55 -25 -101 -25 -102 0 -1 -26 -11 -57 -23 -73 -27 -114 -53 -132 -82 -8
-12 -38 -106 -67 -208 -42 -148 -63 -205 -107 -285 -122 -223 -173 -303 -286
-448 -53 -69 -71 -100 -81 -144 -19 -87 -106 -326 -140 -386 -21 -38 -33 -76
-40 -131 -8 -65 -17 -90 -54 -149 -24 -40 -59 -106 -77 -147 -24 -55 -51 -95
-103 -150 -40 -42 -104 -128 -145 -195 -109 -177 -201 -303 -266 -365 -32 -30
-71 -76 -87 -102 -18 -30 -55 -66 -94 -94 -84 -60 -111 -94 -120 -150 -5 -37
-9 -44 -23 -38 -9 4 -77 25 -152 48 -144 43 -140 41 -301 174 -48 40 -141 72
-211 72 -48 0 -137 33 -199 73 -115 76 -427 311 -498 375 -83 76 -247 198
-286 212 -14 6 -35 10 -47 10 -12 0 -34 13 -49 28 -41 42 -246 149 -304 160
-34 6 -120 46 -251 115 -181 97 -204 112 -254 169 -30 35 -72 91 -92 125 -46
76 -38 72 -412 206 -159 58 -324 121 -365 140 -41 19 -122 44 -180 56 -58 13
-151 38 -208 58 -137 46 -164 42 -247 -38 -67 -64 -157 -106 -280 -129 -57
-11 -78 -21 -139 -69 -39 -31 -112 -86 -163 -123 l-92 -67 -78 44 c-80 44
-161 72 -291 100 -139 29 -259 15 -362 -43 l-65 -37 -160 4 c-290 8 -283 8
-355 -26 -56 -28 -67 -30 -80 -18 -24 22 -451 198 -575 238 -105 33 -119 35
-303 41 -107 3 -224 11 -260 16 -60 10 -80 8 -200 -20 -120 -27 -244 -65 -327
-100 -30 -12 -34 -11 -168 87 -87 64 -172 116 -231 143 l-93 42 -6 57 c-10
106 -97 351 -260 736 -46 110 -87 220 -91 244 -8 55 -259 548 -364 716 -52 83
-105 151 -172 220 -99 103 -116 132 -146 245 -22 84 -42 111 -124 170 -36 27
-102 90 -145 141 -42 50 -91 99 -108 108 -59 31 -89 73 -157 223 -27 60 -57
78 -197 119 -102 30 -120 39 -192 96 -64 51 -108 76 -223 123 -129 54 -148 65
-206 122 -44 44 -76 87 -104 143 -22 44 -83 158 -136 253 -116 209 -119 212
-266 223 -55 4 -128 16 -161 27 -33 11 -94 23 -135 27 -59 6 -90 15 -145 46
-47 25 -97 43 -153 53 -91 17 -101 21 -186 79 -89 60 -107 62 -242 32 -63 -14
-181 -37 -262 -50 -81 -14 -266 -52 -412 -86 -241 -56 -274 -66 -359 -111 -52
-27 -175 -78 -272 -113 -156 -55 -190 -71 -281 -133 -56 -39 -148 -97 -203
-128 -212 -120 -407 -248 -570 -376 -183 -144 -218 -184 -295 -332 l-41 -80
-71 -18 c-85 -21 -132 -50 -303 -187 -71 -56 -140 -107 -151 -111 -13 -5 -36
-3 -60 5 -22 8 -45 14 -52 15 -8 0 -34 16 -58 37 -36 29 -64 41 -142 59 -53
13 -110 24 -127 24 -54 1 -108 35 -270 174 -102 87 -173 140 -195 146 -19 5
-100 14 -180 20 -86 6 -170 18 -208 30 -39 12 -93 20 -137 20 -81 0 -85 3
-104 70 -7 25 -36 104 -63 175 -35 91 -56 165 -69 245 -12 68 -27 125 -37 140
-16 22 -17 36 -10 129 7 89 6 120 -13 210 -22 114 -32 134 -88 191 -73 75
-108 125 -116 167 -3 23 -21 62 -39 85 l-33 43 5 570 4 570 55 210 c49 188 55
218 51 286 -6 107 -25 133 -140 197 -110 61 -154 69 -398 79 l-165 6 -45 33
c-77 56 -117 105 -144 177 -14 38 -44 94 -66 126 -22 31 -40 68 -40 81 0 94
-47 148 -162 186 -46 15 -144 49 -218 76 -116 43 -169 55 -380 90 l-245 40
-170 85 c-280 141 -319 165 -450 289 -118 111 -121 115 -165 215 -24 56 -56
114 -71 128 -42 41 -286 167 -369 190 -132 37 -324 72 -355 65 -16 -3 -130
-47 -252 -96 l-222 -90 -87 -88 c-130 -133 -125 -132 -477 -39 -136 37 -196
49 -220 44 -18 -4 -66 -28 -107 -52 -130 -79 -176 -83 -440 -42 -68 11 -137
17 -153 13 -16 -3 -81 -28 -144 -55 -96 -41 -136 -53 -241 -68 l-126 -18 -90
37 c-50 21 -149 66 -221 100 -71 34 -143 66 -158 71 -16 4 -111 13 -211 19
-151 9 -221 9 -400 -4 l-217 -16 -132 30 c-84 20 -142 28 -162 24 -16 -4 -127
-45 -245 -91 -208 -82 -220 -86 -380 -109 -91 -13 -237 -37 -325 -54 -147 -29
-166 -35 -240 -79 -86 -52 -237 -106 -395 -142 -58 -13 -110 -31 -134 -47 -33
-23 -147 -140 -227 -235 -21 -25 -33 -29 -113 -37 -65 -7 -98 -15 -125 -33
-20 -13 -67 -31 -106 -42 -99 -26 -156 -56 -270 -146 -120 -94 -824 -751 -851
-794 -11 -16 -30 -62 -44 -102 -24 -69 -34 -83 -216 -280 l-191 -208 -154 -84
c-85 -46 -165 -93 -178 -105 -57 -51 -204 -248 -299 -400 -91 -147 -111 -172
-172 -219 l-68 -54 -221 -6 c-205 -7 -234 -5 -389 18 -92 14 -177 30 -188 36
-25 13 -34 60 -34 173 0 97 -13 138 -58 178 -80 73 -286 221 -319 230 -24 6
-63 5 -131 -6 -143 -23 -194 -12 -345 76 -107 63 -126 70 -201 80 -79 11 -86
10 -186 -20 -58 -17 -131 -38 -162 -47 -87 -25 -109 -53 -159 -202 -59 -179
-127 -283 -257 -396 -143 -122 -205 -167 -327 -237 -95 -54 -133 -69 -285
-111 -222 -61 -407 -124 -433 -146 -11 -10 -47 -58 -80 -108 -33 -49 -82 -120
-108 -156 l-49 -66 -129 -8 -128 -7 -145 50 c-268 93 -419 189 -986 625 -122
95 -237 177 -256 184 -60 21 -359 46 -405 33 -71 -19 -90 -49 -186 -297 -49
-125 -135 -340 -192 -477 l-103 -249 -65 -356 c-72 -396 -81 -467 -91 -691
l-6 -155 -53 -145 c-38 -106 -93 -221 -205 -430 -83 -157 -159 -293 -169 -303
-9 -9 -47 -26 -84 -36 -37 -11 -84 -32 -105 -48 -20 -15 -54 -37 -75 -47 -64
-33 -78 -69 -88 -219 -5 -73 -14 -175 -20 -227 -6 -52 -13 -153 -16 -225 -5
-117 -3 -136 17 -190 35 -95 48 -152 59 -264 9 -98 11 -106 54 -171 l45 -67 1
-109 c0 -60 1 -118 1 -129 1 -11 -11 -63 -25 -115 -23 -86 -25 -102 -15 -168
13 -92 57 -161 163 -257 l74 -66 6 -67 c6 -66 3 -76 -138 -507 l-144 -440
-212 -435 c-191 -389 -213 -440 -213 -485 0 -64 15 -86 152 -227 l105 -107 -7
-61 c-6 -55 -1 -82 63 -313 44 -156 76 -295 85 -365 8 -62 22 -125 31 -140 19
-31 89 -86 123 -97 31 -9 131 -114 139 -145 4 -13 29 -47 57 -75 l51 -51 130
-23 c72 -13 140 -27 151 -32 12 -4 38 -38 59 -76 20 -37 42 -71 47 -74 6 -4 5
-22 -2 -50 -23 -85 3 -165 67 -209 27 -19 49 -24 102 -25 63 -1 72 -4 111 -38
32 -27 54 -37 94 -42 29 -4 61 -5 72 -4 10 2 35 -8 54 -23 41 -31 139 -61 166
-52 17 6 17 5 4 -8 -8 -8 -61 -25 -118 -37 -166 -36 -242 -78 -301 -168 -75
-113 -63 -181 75 -419 18 -32 68 -69 106 -79 13 -4 43 -31 67 -61 63 -78 113
-109 240 -146 l111 -33 -6 -40 c-3 -26 0 -56 11 -85 9 -25 19 -55 22 -68 3
-13 27 -47 54 -76 35 -38 49 -62 49 -82 0 -67 41 -154 107 -225 23 -25 24 -28
9 -55 -30 -57 -84 -104 -264 -230 -59 -42 -98 -102 -112 -172 -20 -105 -28
-137 -44 -178 -8 -23 -22 -82 -29 -131 -14 -84 -44 -164 -67 -178 -5 -3 -14
-25 -20 -48 -6 -23 -24 -73 -39 -112 -16 -38 -35 -86 -42 -105 -7 -19 -23 -51
-35 -70 -55 -87 -41 -151 55 -244 37 -37 79 -74 91 -83 27 -19 132 -22 153 -5
11 9 21 4 48 -24 68 -71 139 -93 225 -71 27 7 38 2 108 -55 135 -109 146 -117
200 -129 l52 -11 23 -107 c32 -144 53 -180 137 -221 l41 -20 6 -97 c5 -91 4
-98 -19 -128 -14 -18 -41 -44 -62 -58 -35 -23 -39 -23 -62 -8 -17 11 -47 16
-100 16 -71 0 -81 -3 -137 -37 -38 -24 -73 -38 -95 -38 -61 0 -219 -39 -270
-67 -32 -18 -58 -41 -73 -67 -33 -58 -58 -150 -50 -187 6 -27 2 -36 -36 -75
l-42 -43 -22 82 c-12 45 -29 94 -39 109 -21 31 -90 68 -129 68 -73 0 -143 -60
-177 -151 -22 -57 -79 -126 -181 -216 -58 -52 -93 -120 -135 -268 -14 -51 -27
-70 -81 -123 -76 -75 -104 -131 -111 -224 -5 -78 23 -183 70 -257 l27 -44 -36
-66 c-20 -36 -46 -84 -58 -106 -33 -59 -44 -128 -38 -236 5 -84 2 -111 -22
-208 -23 -93 -27 -127 -23 -209 4 -108 18 -143 72 -180 36 -24 66 -27 198 -20
l88 5 76 58 c42 33 85 71 96 86 19 26 22 26 38 11 13 -13 20 -44 28 -122 8
-82 16 -119 39 -166 37 -76 99 -161 178 -244 74 -78 80 -87 95 -168 7 -34 25
-82 40 -105 l27 -44 -28 -38 c-36 -47 -53 -106 -44 -148 4 -18 25 -56 46 -84
22 -29 42 -59 44 -65 8 -21 67 -55 105 -62 35 -6 35 -7 36 -59 1 -63 22 -103
72 -137 21 -14 46 -33 56 -42 10 -9 38 -26 61 -37 40 -19 43 -23 49 -72 6 -46
13 -58 71 -115 80 -80 94 -117 76 -208 -21 -103 13 -177 96 -212 24 -11 50
-41 98 -115 36 -55 65 -102 65 -105 0 -3 39 -70 88 -150 124 -207 180 -307
187 -335 5 -20 -26 -72 -171 -284 -209 -309 -222 -325 -266 -346 -121 -58
-246 -123 -263 -137 -11 -9 -51 -55 -90 -102 -38 -47 -101 -119 -140 -160 -39
-41 -82 -95 -97 -120 -40 -70 -58 -185 -58 -380 l0 -168 -36 -93 c-53 -137
-75 -175 -154 -263 -108 -121 -125 -153 -155 -279 -46 -196 -52 -256 -31 -334
24 -93 43 -213 47 -303 l4 -74 -345 -57 c-502 -83 -534 -92 -575 -161 -32 -54
-26 -121 17 -198 l37 -64 -112 -29 c-62 -16 -235 -50 -386 -77 -164 -30 -284
-56 -299 -66 -14 -9 -62 -49 -106 -88 -104 -91 -187 -153 -236 -175 -32 -14
-52 -16 -133 -8 -111 10 -272 -11 -676 -88 l-233 -45 -304 11 c-221 8 -323 8
-375 0 -90 -14 -266 -88 -325 -136 -29 -24 -95 -56 -192 -94 -130 -51 -193
-85 -550 -300 -382 -230 -407 -247 -484 -327 -117 -120 -132 -145 -132 -207 0
-40 10 -70 40 -132 l40 -80 -13 -90 c-16 -108 -11 -143 30 -214 30 -53 31 -61
59 -355 23 -240 37 -339 69 -486 22 -102 47 -199 56 -216 24 -46 69 -71 153
-84 41 -6 79 -15 85 -21 5 -5 48 -60 95 -122 81 -107 90 -115 195 -179 133
-81 256 -202 557 -549 l195 -226 209 -131 209 -132 86 -157 c67 -122 105 -207
164 -373 43 -118 87 -227 97 -242 11 -15 117 -114 236 -220 119 -106 298 -275
397 -377 99 -101 290 -290 425 -419 149 -144 292 -292 365 -379 118 -141 121
-146 172 -276 41 -106 54 -155 68 -252 18 -139 128 -545 158 -588 11 -16 60
-76 109 -134 48 -58 94 -117 102 -131 7 -15 44 -108 81 -207 63 -168 76 -193
193 -374 l126 -194 120 -100 c188 -156 212 -171 356 -228 l135 -53 295 -7
c162 -4 324 -10 360 -13 47 -5 94 -1 168 13 l103 20 107 -38 c59 -22 219 -89
357 -150 137 -62 267 -116 290 -121 22 -6 265 -30 540 -55 275 -25 563 -52
640 -60 77 -9 275 -24 440 -35 l300 -19 205 -63 c205 -64 206 -64 480 -216
269 -149 278 -154 419 -279 l144 -128 106 -173 c98 -160 174 -259 352 -462 59
-67 81 -84 207 -153 l141 -78 90 -114 c77 -97 98 -133 147 -247 56 -131 209
-396 335 -578 33 -47 123 -159 202 -250 l142 -165 220 -111 220 -111 304 -77
305 -77 285 -125 286 -126 255 -57 256 -57 114 -80 c90 -62 158 -123 309 -277
l195 -198 156 -79 156 -79 117 -149 c64 -83 129 -159 144 -169 16 -11 129 -50
253 -87 138 -42 287 -95 385 -138 88 -38 169 -73 180 -78 11 -4 137 -92 280
-196 143 -103 287 -206 320 -228 33 -23 251 -180 485 -349 l425 -309 540 -270
c297 -149 592 -294 655 -323 89 -40 369 -214 1250 -775 624 -397 1158 -739
1187 -759 28 -20 290 -227 581 -461 l529 -425 494 -164 c367 -122 506 -164
541 -164 44 1 59 9 220 124 l173 123 260 62 260 63 270 11 c149 5 417 10 596
10 l326 0 296 -129 c163 -72 313 -134 334 -140 21 -6 201 -40 401 -76 l363
-66 427 -150 c421 -148 442 -157 1387 -576 528 -235 980 -432 1005 -439 25 -7
371 -59 770 -114 l725 -101 530 -215 530 -215 214 -142 c212 -141 216 -144
382 -317 l169 -175 0 -275 0 -276 45 -164 c25 -91 75 -253 110 -360 44 -135
81 -277 120 -460 54 -251 62 -281 170 -570 195 -527 179 -469 230 -815 l45
-310 -34 -186 c-19 -103 -39 -196 -45 -208 -52 -96 -209 -316 -326 -456 -175
-209 -285 -325 -457 -480 -122 -109 -143 -133 -235 -270 l-100 -150 -37 -155
c-20 -85 -52 -241 -71 -347 l-35 -191 -97 -182 -98 -182 -160 -136 c-88 -75
-237 -207 -330 -293 -94 -85 -237 -208 -319 -272 -142 -113 -156 -127 -335
-347 -170 -208 -208 -262 -401 -572 -207 -332 -221 -351 -426 -596 -161 -192
-232 -286 -292 -385 -77 -128 -82 -139 -146 -357 -36 -124 -73 -268 -81 -320
-9 -52 -48 -234 -87 -405 l-71 -310 -166 -238 -166 -238 -299 -150 c-283 -142
-310 -158 -500 -298 l-201 -147 -195 -74 c-211 -80 -552 -243 -586 -281 -12
-13 -68 -91 -124 -174 -93 -135 -113 -174 -205 -390 -57 -132 -161 -366 -233
-520 l-129 -280 -106 -400 c-154 -579 -249 -982 -241 -1020 3 -16 39 -91 79
-165 40 -74 227 -441 416 -815 l343 -679 757 -761 756 -760 850 -1056 849
-1056 114 -459 c62 -252 155 -623 206 -824 l93 -365 -110 -761 -111 -761 222
-669 c123 -368 231 -681 242 -696 16 -24 1247 -1054 1337 -1119 20 -14 254
-113 521 -219 267 -106 486 -194 488 -196 4 -2 50 -448 147 -1394 30 -300 60
-580 66 -623 10 -79 12 -82 563 -1080 304 -551 738 -1323 965 -1716 l411 -713
0 -720 0 -720 -299 -687 c-164 -377 -301 -695 -304 -706 -3 -11 -15 -46 -27
-79 -14 -39 -19 -69 -15 -90 4 -17 101 -361 217 -764 144 -504 208 -741 204
-760 -3 -15 -51 -446 -106 -959 l-100 -932 236 -1113 c143 -674 253 -1221 280
-1386 42 -261 44 -283 44 -484 l0 -211 -80 -235 -80 -234 -139 -147 c-77 -80
-149 -159 -161 -174 -12 -16 -50 -116 -83 -225 l-61 -197 -4 -245 c-2 -169 2
-310 13 -455 24 -303 15 -508 -30 -665 -56 -197 -168 -430 -418 -870 -224
-394 -234 -414 -372 -745 -79 -187 -146 -353 -149 -370 -7 -34 29 -545 43
-603 5 -20 50 -128 100 -239 138 -308 264 -632 310 -798 35 -129 42 -173 51
-315 17 -269 46 -454 120 -775 49 -210 79 -367 100 -525 30 -224 31 -226 20
-456 l-11 -231 -59 -189 -60 -189 -123 -185 -123 -185 -57 -230 c-46 -185 -55
-237 -49 -265 5 -19 49 -152 97 -295 l89 -260 177 -290 177 -290 213 -750 212
-750 94 -189 c62 -124 135 -250 215 -370 87 -130 142 -225 194 -336 39 -85
114 -245 166 -355 93 -196 96 -204 136 -390 22 -104 57 -285 76 -400 l36 -210
-44 -212 c-30 -145 -55 -239 -81 -301 -37 -90 -37 -90 -160 -196 -110 -95
-139 -114 -257 -170 -73 -34 -200 -108 -283 -162 -149 -99 -151 -100 -390
-183 -201 -70 -275 -102 -455 -195 l-215 -111 -145 -141 -145 -141 -200 -76
-200 -75 -223 -6 c-198 -6 -257 -12 -540 -55 -295 -46 -335 -50 -572 -56 -440
-11 -404 -5 -805 -145 -251 -87 -445 -146 -685 -210 -193 -51 -468 -134 -650
-195 -173 -58 -391 -128 -485 -155 l-170 -49 -310 -20 c-299 -19 -318 -21
-515 -66 -113 -26 -217 -54 -232 -63 -14 -10 -81 -79 -148 -155 -90 -101 -168
-175 -292 -277 -158 -130 -178 -150 -286 -292 l-116 -152 -38 -160 c-34 -148
-37 -173 -38 -311 0 -107 6 -182 20 -260 11 -61 24 -170 29 -244 l10 -134
-106 -236 c-71 -158 -144 -301 -222 -432 l-115 -196 -179 -109 c-125 -76 -184
-119 -198 -141 -24 -38 -37 -147 -41 -343 -3 -132 -2 -138 41 -295 l43 -161
-65 -129 c-49 -98 -94 -166 -179 -275 -62 -80 -151 -205 -197 -278 -83 -132
-85 -133 -525 -569 l-441 -438 -221 -370 c-323 -542 -441 -747 -448 -777 -4
-16 37 -341 94 -750 129 -934 114 -851 159 -897 34 -37 62 -47 658 -245 l623
-208 9 -36 c6 -20 46 -186 91 -368 l80 -331 0 -316 c0 -365 -3 -387 -82 -574
-50 -121 -52 -124 -132 -195 -45 -39 -138 -133 -207 -207 -172 -186 -301 -302
-524 -475 -55 -43 -168 -134 -251 -204 -138 -116 -157 -137 -228 -242 -42 -63
-117 -194 -166 -290 -75 -148 -98 -184 -147 -232 -53 -52 -67 -59 -168 -91
-60 -19 -150 -43 -200 -53 -49 -10 -178 -51 -285 -92 -400 -152 -463 -171
-613 -192 l-140 -19 -211 39 c-122 23 -264 56 -336 80 -69 22 -219 61 -335 86
l-210 46 -206 -6 c-219 -6 -357 -27 -554 -83 -105 -29 -128 -42 -175 -97 -19
-23 -85 -93 -146 -157 -61 -63 -118 -126 -125 -140 -10 -17 -15 -69 -17 -174
-1 -82 -3 -166 -3 -185 -1 -35 39 -191 108 -425 35 -115 42 -130 192 -365 100
-158 172 -283 201 -350 48 -111 72 -140 263 -319 64 -60 72 -72 152 -243 l84
-179 -10 -88 c-9 -78 -7 -100 15 -202 22 -103 32 -197 51 -460 l7 -86 -63
-164 -63 -164 2 -123 c1 -68 6 -162 12 -209 11 -99 31 -133 105 -179 37 -23
59 -51 110 -134 35 -58 103 -154 152 -214 48 -60 94 -117 102 -128 16 -22 24
-60 57 -287 l25 -174 85 -144 c84 -142 87 -145 175 -210 98 -72 127 -112 148
-211 12 -57 9 -69 -33 -125 -31 -42 -149 -101 -251 -126 -105 -26 -327 -104
-370 -131 -56 -35 -70 -73 -69 -190 0 -97 4 -120 56 -300 31 -107 70 -267 87
-355 35 -180 100 -386 173 -550 70 -156 79 -238 41 -378 -22 -85 -40 -123
-102 -225 -42 -67 -91 -147 -110 -178 -25 -43 -43 -61 -77 -75 l-43 -20 -53
27 c-130 66 -449 151 -518 139 -67 -12 -175 -56 -238 -97 -103 -67 -281 -126
-462 -153 -85 -12 -204 -25 -265 -29 -60 -4 -198 -15 -305 -26 -145 -15 -316
-23 -665 -29 l-470 -8 -179 -62 c-154 -52 -195 -71 -288 -131 -130 -83 -208
-145 -236 -185 -12 -16 -30 -65 -42 -108 l-21 -77 21 -108 c12 -59 30 -138 40
-176 19 -69 19 -69 -2 -165 -25 -110 -29 -304 -9 -431 14 -90 83 -281 119
-330 14 -19 80 -100 145 -179 66 -79 148 -184 183 -232 60 -82 64 -92 79 -180
9 -54 25 -104 36 -120 11 -16 68 -61 127 -102 l108 -74 165 -31 c136 -26 178
-31 244 -26 l81 7 109 -56 c72 -36 207 -87 390 -147 260 -86 335 -115 335
-130 0 -4 -19 -17 -43 -30 -23 -13 -82 -51 -131 -83 -138 -92 -238 -135 -359
-152 -295 -42 -718 -66 -1412 -81 -306 -6 -427 -24 -509 -77 l-49 -31 -31 19
c-76 45 -199 104 -265 125 -70 22 -73 22 -138 6 -93 -23 -149 -52 -172 -89
-10 -18 -40 -92 -66 -164 l-48 -133 -55 -25 c-70 -32 -212 -140 -243 -184 -22
-31 -24 -44 -22 -132 4 -190 19 -287 59 -379 45 -104 123 -217 226 -330 86
-94 121 -153 121 -208 0 -26 -31 -100 -105 -252 -152 -314 -182 -334 -401
-275 -67 19 -180 56 -252 84 -155 60 -438 127 -599 142 -110 11 -114 10 -411
-40 -165 -28 -315 -55 -333 -60 -18 -6 -98 -46 -178 -91 -79 -44 -152 -80
-162 -81 -54 -2 -256 -139 -300 -204 -32 -46 -81 -190 -92 -267 -7 -46 -29
-114 -67 -201 l-57 -132 -6 -203 c-4 -111 -9 -204 -11 -206 -2 -1 -35 -11 -74
-20 -81 -20 -240 -117 -267 -163 -9 -16 -26 -77 -38 -137 -27 -136 -90 -273
-147 -318 -21 -16 -96 -60 -168 -96 -130 -66 -130 -66 -274 -214 -79 -81 -147
-146 -151 -143 -4 2 -70 16 -146 29 -541 97 -632 116 -724 152 -155 60 -407
134 -536 159 -67 13 -183 42 -258 64 -78 23 -180 45 -238 52 -94 10 -112 9
-202 -10 -54 -12 -106 -26 -115 -30 -9 -5 -72 -53 -141 -106 -69 -53 -161
-115 -205 -137 -44 -22 -168 -87 -275 -144 -107 -57 -235 -119 -285 -138 -49
-18 -120 -48 -157 -64 -59 -27 -82 -32 -190 -37 -250 -13 -313 -30 -505 -139
-115 -65 -256 -125 -478 -206 -88 -32 -234 -94 -325 -138 -192 -93 -199 -95
-460 -96 l-185 -1 -75 -39 c-41 -21 -104 -57 -140 -81 l-66 -42 -184 -7 c-102
-4 -219 -11 -260 -16 -41 -5 -143 -9 -227 -10 -112 0 -173 -5 -235 -19 -46
-11 -153 -24 -238 -30 -85 -6 -204 -20 -265 -31 -60 -12 -172 -30 -249 -41
-76 -11 -168 -27 -205 -36 -85 -21 -276 -111 -322 -151 -25 -22 -52 -33 -99
-42 -88 -16 -143 -49 -169 -102 -32 -68 -62 -193 -63 -261 0 -34 0 -138 1
-232 1 -209 -11 -300 -52 -385 l-31 -65 3 -195 c2 -107 4 -269 4 -360 0 -160
-1 -168 -33 -260 -52 -150 -51 -210 2 -395 20 -68 20 -72 4 -142 -14 -56 -17
-109 -14 -240 3 -200 -7 -464 -21 -548 -6 -33 -11 -87 -11 -120 0 -33 -11
-105 -25 -160 -52 -211 -54 -325 -13 -745 10 -105 9 -126 -11 -240 -12 -69
-34 -174 -48 -235 -23 -100 -25 -122 -19 -250 5 -111 3 -153 -9 -200 -10 -36
-18 -124 -21 -220 -5 -158 -6 -162 -55 -312 -27 -84 -49 -161 -49 -171 0 -11
-24 -42 -53 -69 -46 -44 -62 -52 -127 -67 -78 -17 -146 -54 -195 -107 -17 -17
-48 -44 -70 -59 -24 -16 -53 -50 -70 -82 -24 -44 -29 -64 -28 -118 0 -36 1
-143 2 -238 0 -176 10 -267 36 -335 8 -20 15 -62 15 -93 0 -67 40 -253 86
-396 19 -59 34 -115 34 -124 0 -9 7 -31 16 -49 8 -18 23 -66 33 -106 16 -66
16 -79 3 -138 -8 -36 -25 -97 -39 -136 -13 -38 -29 -87 -35 -107 l-10 -38
-177 0 c-188 0 -296 -12 -322 -36 -13 -12 -46 -14 -170 -12 -152 3 -154 3
-192 -24 -52 -35 -82 -81 -113 -175 -22 -67 -25 -91 -21 -168 3 -78 9 -101 41
-170 60 -127 60 -127 22 -204 -19 -36 -40 -97 -49 -136 -8 -38 -33 -142 -56
-229 -45 -174 -49 -227 -24 -326 8 -36 16 -99 17 -140 2 -60 9 -93 36 -160 49
-123 187 -325 311 -455 36 -38 49 -60 54 -95 4 -24 13 -60 20 -79 10 -30 8
-49 -11 -131 -44 -187 -48 -229 -37 -393 9 -124 16 -163 37 -214 14 -34 37
-104 50 -156 32 -121 69 -184 166 -279 88 -85 137 -108 243 -113 80 -3 84 -9
64 -102 -9 -43 -17 -96 -17 -117 0 -68 22 -168 51 -238 23 -53 29 -82 29 -141
0 -105 28 -200 84 -288 27 -41 62 -89 79 -107 40 -41 65 -160 43 -202 -7 -14
-31 -59 -54 -100 -63 -116 -75 -171 -70 -319 3 -123 5 -128 37 -181 19 -30 51
-76 73 -102 26 -31 51 -80 73 -140 18 -51 61 -157 94 -235 34 -78 61 -145 61
-148 0 -22 52 -73 114 -112 82 -53 95 -68 96 -107 0 -71 45 -219 108 -361 71
-158 85 -177 200 -270 93 -75 138 -135 146 -193 8 -63 77 -237 110 -278 17
-22 53 -43 115 -69 82 -34 91 -40 96 -69 4 -17 21 -66 38 -110 35 -87 88 -153
182 -226 31 -25 80 -64 109 -88 28 -24 88 -62 134 -84 l82 -40 0 -53 c0 -30
-7 -84 -16 -122 -9 -37 -13 -83 -10 -102 3 -22 -3 -56 -16 -95 -18 -51 -21
-81 -19 -182 1 -91 -3 -142 -19 -208 -23 -100 -18 -146 24 -200 21 -28 26 -46
26 -97 2 -113 8 -129 71 -191 35 -36 66 -58 79 -58 13 0 39 -15 60 -32 20 -18
50 -40 67 -49 17 -9 49 -41 72 -70 101 -131 246 -294 281 -315 9 -5 39 -41 68
-81 75 -101 146 -163 228 -198 38 -15 80 -36 94 -44 14 -9 42 -25 63 -35 51
-27 152 -136 167 -182 8 -23 10 -60 6 -101 -5 -43 -2 -84 8 -126 8 -34 19 -82
25 -107 29 -130 64 -211 118 -272 46 -52 69 -99 77 -156 6 -44 40 -106 81
-152 12 -14 25 -44 28 -67 3 -23 19 -71 36 -107 16 -35 33 -77 37 -93 4 -15
28 -57 54 -93 35 -48 49 -78 54 -114 4 -30 16 -63 32 -84 27 -34 27 -34 8 -66
-24 -41 -23 -118 4 -179 12 -27 29 -78 38 -115 9 -37 20 -71 24 -77 3 -5 17
-40 29 -77 20 -62 21 -70 7 -115 -51 -169 -50 -164 -37 -223 7 -30 14 -80 15
-110 2 -35 11 -68 25 -92 29 -48 58 -129 67 -184 8 -59 53 -126 111 -168 50
-36 175 -167 258 -271 26 -33 81 -92 121 -131 61 -61 80 -74 126 -84 47 -11
77 -30 161 -101 5 -4 20 -58 34 -120 18 -83 25 -144 25 -224 0 -149 18 -227
68 -293 l40 -52 0 -96 c0 -71 -5 -110 -21 -157 -22 -62 -42 -247 -40 -355 1
-29 -5 -82 -14 -118 -19 -83 -19 -162 1 -244 19 -76 18 -162 -1 -199 -7 -15
-16 -45 -20 -66 -3 -22 -18 -86 -32 -142 l-26 -102 18 -78 c10 -43 27 -97 38
-121 22 -49 81 -102 113 -102 30 0 39 -15 58 -90 18 -74 35 -118 81 -210 18
-36 45 -96 60 -135 15 -38 36 -81 45 -95 10 -14 28 -45 40 -70 13 -25 53 -76
89 -113 l66 -69 -3 -64 c-4 -80 -4 -160 -1 -294 1 -85 -2 -119 -21 -178 -12
-40 -20 -84 -17 -99 3 -15 -3 -39 -14 -58 -11 -18 -34 -76 -52 -128 -31 -93
-34 -97 -86 -134 -76 -53 -106 -112 -107 -213 -1 -62 -6 -87 -32 -143 -17 -37
-38 -90 -46 -117 -9 -29 -35 -75 -62 -108 -26 -31 -59 -82 -73 -112 -15 -30
-48 -85 -73 -122 -61 -88 -75 -150 -55 -236 12 -53 13 -74 2 -135 -23 -127
-28 -141 -61 -192 -22 -35 -42 -89 -64 -179 -29 -116 -32 -138 -26 -220 4 -50
7 -127 6 -171 -1 -124 33 -237 97 -322 30 -40 44 -70 48 -102 3 -25 8 -64 11
-87 7 -56 50 -104 134 -148 121 -64 106 -64 370 10 129 37 250 73 269 81 46
20 73 5 105 -61 36 -72 79 -120 128 -144 24 -11 62 -38 84 -60 46 -43 91 -56
159 -45 54 9 120 75 130 131 5 34 11 41 37 46 41 8 46 3 54 -51 6 -39 16 -56
58 -98 83 -83 156 -84 266 -5 36 25 99 62 140 82 75 37 75 37 162 28 48 -4 92
-11 97 -15 14 -8 82 10 166 45 39 16 110 42 159 56 49 15 110 41 135 58 25 17
66 43 91 58 25 14 63 45 85 67 21 23 44 41 51 41 7 0 46 -16 87 -36 100 -47
148 -50 347 -22 119 17 211 23 330 23 l166 0 74 -35 c59 -27 87 -34 132 -34
70 1 109 27 167 112 58 85 170 188 238 219 95 44 158 89 198 143 21 29 44 50
56 50 23 0 193 44 236 61 29 12 37 10 105 -24 40 -21 118 -49 173 -63 84 -21
112 -24 175 -18 41 4 130 7 198 6 l123 0 57 -40 c64 -45 115 -62 186 -62 43 0
55 -6 115 -52 97 -76 178 -156 216 -214 18 -29 50 -64 70 -80 33 -25 45 -28
113 -28 42 0 98 2 123 5 39 3 53 -1 89 -26 24 -17 62 -50 85 -75 134 -150 237
-235 408 -338 112 -67 157 -86 248 -102 41 -8 76 -22 110 -47 67 -48 160 -76
222 -68 34 5 71 1 131 -15 83 -22 86 -22 148 -6 35 10 86 22 113 27 28 6 74
24 103 41 l52 30 72 -46 c39 -25 77 -46 84 -46 8 0 28 -13 46 -28 18 -15 62
-48 98 -72 60 -41 70 -44 130 -44 42 0 74 6 90 16 34 22 116 38 170 33 25 -2
90 -13 145 -25 95 -21 103 -21 158 -6 55 16 61 15 127 -5 62 -18 76 -20 120
-9 46 11 56 10 103 -10 60 -27 68 -27 330 -10 159 10 219 10 307 0 127 -15
163 -10 246 32 l62 31 88 -21 c87 -19 91 -20 169 -3 44 10 98 27 121 39 39 20
45 20 121 8 44 -7 116 -11 159 -8 90 5 136 -3 284 -47 121 -36 156 -35 229 10
61 37 184 59 373 66 l147 6 36 -31 c79 -70 157 -89 299 -74 55 7 132 14 171
17 130 11 231 43 318 102 44 29 84 53 88 53 5 0 42 -11 83 -25 84 -28 114 -30
200 -13 82 17 141 73 151 143 7 42 10 46 29 40 33 -11 411 -24 508 -18 l87 6
70 -48 c39 -27 105 -80 148 -118 43 -38 98 -83 123 -99 25 -16 116 -98 202
-183 86 -85 161 -155 166 -155 5 0 16 -15 25 -33 49 -99 67 -143 67 -160 0
-53 182 -356 238 -396 16 -11 58 -28 93 -38 35 -9 82 -30 103 -45 21 -15 48
-28 60 -28 12 0 32 -9 46 -20 14 -11 31 -20 37 -20 7 0 34 -15 60 -34 63 -45
135 -87 263 -154 58 -31 133 -79 168 -108 42 -35 76 -54 101 -58 74 -11 170
-60 196 -98 20 -29 106 -103 159 -136 7 -4 24 -28 39 -54 38 -66 107 -124 158
-132 31 -5 55 -20 98 -60 31 -29 66 -58 78 -65 18 -9 21 -17 16 -49 -3 -20
-15 -53 -27 -72 -31 -51 -30 -162 2 -207 18 -25 22 -44 22 -103 0 -67 -2 -75
-39 -126 -45 -62 -66 -137 -56 -192 8 -43 47 -129 74 -163 10 -13 29 -47 42
-74 33 -72 74 -130 110 -156 29 -20 48 -23 208 -30 140 -5 196 -12 271 -32 52
-14 142 -30 200 -36 260 -28 1596 -163 1695 -172 239 -20 1567 -183 1839 -224
251 -39 293 -48 320 -69 81 -62 203 -197 325 -360 91 -121 147 -186 175 -203
22 -14 100 -65 171 -113 128 -86 284 -171 338 -184 15 -3 58 -1 94 5 70 12
160 2 228 -27 17 -7 107 -88 200 -181 94 -93 194 -184 223 -202 62 -40 264
-93 417 -111 129 -15 311 -63 388 -102 50 -25 79 -32 168 -39 l107 -10 116 39
c63 22 141 54 172 73 68 41 188 166 268 280 l60 84 56 1 c42 1 66 8 96 27 23
15 61 28 94 32 138 16 373 89 580 180 105 45 214 85 236 85 20 0 170 66 203
89 14 11 54 30 87 44 l62 25 -6 -41 c-3 -27 -29 -78 -77 -154 -55 -85 -77
-130 -90 -183 -25 -101 -15 -150 39 -205 54 -53 83 -58 209 -34 54 11 124 19
156 19 33 0 90 10 127 21 63 20 82 21 234 14 128 -5 185 -12 255 -31 81 -23
109 -25 278 -25 103 0 192 3 197 6 25 15 169 6 240 -15 114 -34 216 -57 310
-70 47 -6 119 -20 160 -29 52 -13 98 -17 151 -13 l76 4 44 -43 c32 -32 64 -51
114 -68 89 -31 271 -121 355 -176 36 -23 153 -87 261 -142 198 -100 450 -251
502 -298 15 -14 27 -33 27 -41 0 -26 38 -72 86 -105 51 -35 98 -41 310 -42
109 0 111 0 160 33 27 18 65 48 84 66 19 18 65 44 102 59 37 15 87 44 110 65
l43 37 131 5 130 4 64 44 c95 67 121 105 127 182 6 81 -34 243 -71 293 l-26
34 42 29 c81 56 276 153 345 172 144 40 699 160 894 194 l204 36 130 -54 c72
-29 301 -126 510 -216 209 -89 425 -182 480 -205 55 -23 341 -149 635 -280
417 -186 544 -238 575 -238 25 1 288 87 719 237 l679 237 466 -46 c256 -25
471 -45 478 -45 6 0 14 -19 18 -41 9 -54 76 -124 126 -131 42 -7 311 52 394
86 33 13 92 29 130 35 39 6 97 20 129 31 41 14 85 20 141 20 60 0 106 7 166
26 46 14 126 29 177 34 108 11 136 26 188 104 19 28 59 82 89 121 29 38 56 84
60 102 4 24 12 33 33 38 58 12 92 45 167 160 88 136 90 139 214 405 l95 205 4
328 3 327 32 0 c18 0 172 22 342 49 286 45 312 48 339 34 41 -21 205 -52 241
-46 17 3 51 21 76 39 72 52 117 64 245 64 l114 0 0 -72 c0 -102 13 -139 70
-201 28 -30 50 -60 50 -66 0 -23 -49 -112 -94 -169 -26 -32 -51 -74 -56 -93
-19 -67 12 -146 77 -196 28 -22 45 -26 93 -26 55 0 63 3 112 42 68 54 171 122
273 180 l80 45 116 4 c89 3 123 1 145 -11 53 -27 173 -48 233 -42 60 7 232 31
293 41 53 9 144 87 221 191 77 103 158 183 205 202 27 11 51 12 127 3 179 -22
276 -13 375 38 26 13 95 73 160 139 93 93 125 133 163 204 26 48 47 93 47 99
0 6 22 59 49 117 26 58 57 131 67 161 10 30 19 56 20 58 1 2 31 -14 66 -35 35
-21 99 -56 142 -78 69 -35 88 -40 146 -40 98 0 190 48 290 152 125 129 202
243 215 318 19 107 138 389 170 401 6 3 74 -25 150 -61 181 -86 220 -95 430
-95 94 -1 283 -7 420 -14 228 -13 364 -11 1525 15 1301 29 1413 32 2475 70
l610 22 920 -57 c975 -60 2128 -107 2315 -96 97 6 111 5 190 -21 47 -15 126
-32 175 -39 50 -6 108 -16 131 -20 48 -11 94 0 178 42 l59 30 104 -10 c105
-11 135 -7 190 21 17 9 32 14 34 12 3 -2 45 -9 94 -16 64 -8 100 -18 125 -35
19 -13 39 -24 45 -24 5 0 48 -23 95 -50 47 -28 107 -57 133 -66 40 -13 52 -23
64 -52 27 -64 127 -157 229 -211 114 -61 159 -74 214 -62 40 9 43 8 148 -66
59 -42 157 -99 217 -129 125 -60 220 -125 251 -172 21 -31 21 -34 6 -93 -12
-51 -13 -70 -2 -116 10 -47 22 -65 82 -129 150 -158 210 -186 767 -360 10 -3
12 -18 7 -62 -23 -214 -24 -276 -5 -351 14 -56 17 -83 9 -110 -25 -97 -63
-369 -64 -461 0 -31 10 -84 22 -120 11 -36 28 -114 36 -175 13 -103 13 -117
-5 -220 -11 -60 -24 -144 -29 -185 -5 -41 -14 -109 -20 -150 -10 -72 -8 -107
10 -160 4 -14 16 -60 26 -103 9 -43 21 -80 26 -83 4 -3 8 -22 8 -42 1 -45 23
-149 37 -177 6 -11 21 -56 32 -100 12 -44 28 -93 36 -110 8 -16 22 -79 31
-140 8 -60 23 -137 31 -170 25 -97 27 -153 8 -277 -16 -102 -17 -127 -6 -190
20 -114 59 -168 181 -253 30 -21 103 -76 161 -122 l107 -84 -5 -67 c-2 -37
-13 -107 -23 -157 -10 -49 -21 -133 -25 -185 -9 -145 -64 -322 -131 -425 -41
-62 -56 -95 -65 -146 -18 -98 0 -248 56 -473 53 -213 74 -254 209 -416 39 -47
92 -121 118 -165 55 -94 119 -260 143 -371 17 -78 42 -129 142 -291 55 -88
226 -470 224 -500 0 -12 -12 -55 -25 -95 -51 -156 -54 -135 107 -783 111 -444
155 -639 187 -830 60 -360 75 -430 134 -620 47 -149 57 -196 80 -385 39 -306
42 -324 88 -429 41 -95 41 -95 36 -196 -5 -87 -10 -109 -37 -163 -27 -53 -39
-66 -84 -88 -28 -15 -79 -44 -113 -65 -55 -35 -66 -48 -121 -146 -84 -149 -81
-141 -93 -219 -15 -92 -48 -265 -65 -339 -8 -33 -17 -82 -20 -110 -7 -57 19
-293 35 -309 5 -5 10 -17 10 -26 0 -9 15 -34 33 -56 18 -21 44 -55 59 -75 15
-20 56 -55 92 -78 l65 -42 3 -96 c2 -79 0 -100 -15 -122 -10 -14 -45 -78 -77
-142 -63 -125 -76 -174 -100 -394 -9 -78 -23 -140 -50 -215 -21 -58 -50 -159
-65 -225 -17 -73 -42 -149 -65 -195 -20 -41 -43 -100 -50 -129 -13 -54 -60
-167 -102 -246 -12 -22 -100 -159 -197 -305 -222 -336 -215 -317 -202 -605
l10 -210 -146 -192 c-136 -180 -147 -199 -175 -285 -28 -86 -31 -109 -38 -293
-6 -161 -12 -213 -29 -269 -11 -37 -21 -87 -21 -110 0 -22 -5 -57 -10 -76 -6
-19 -12 -69 -14 -111 -4 -100 -29 -137 -160 -234 -69 -52 -112 -92 -136 -129
-19 -29 -64 -89 -98 -132 -35 -43 -80 -108 -99 -144 -20 -36 -46 -82 -59 -102
-32 -50 -74 -181 -74 -229 0 -21 -14 -105 -31 -185 l-31 -147 16 -88 c20 -108
20 -150 0 -214 -17 -57 -12 -99 18 -153 27 -50 59 -83 154 -158 88 -70 155
-143 196 -214 39 -66 152 -172 244 -228 103 -62 140 -69 453 -77 l234 -6 77
-73 c58 -56 85 -74 114 -79 20 -3 50 -17 67 -31 46 -39 111 -54 216 -48 88 4
93 3 128 -23 29 -23 47 -28 93 -29 48 -1 68 5 123 36 36 21 88 57 115 80 118
103 159 124 281 143 23 4 68 22 99 41 57 34 59 35 136 28 69 -6 90 -3 161 19
189 59 220 67 263 67 34 0 62 -9 103 -32 46 -27 66 -32 113 -32 31 1 64 6 72
13 26 22 73 30 93 16 10 -7 45 -21 76 -30 74 -21 138 -8 203 41 24 19 51 34
60 34 8 0 32 -14 53 -31 33 -26 49 -31 117 -36 69 -5 85 -10 125 -39 64 -47
190 -87 243 -78 54 9 81 28 126 88 20 28 72 91 114 140 42 49 79 101 82 115 3
14 12 49 19 76 7 28 16 62 19 77 6 26 7 27 39 13 17 -7 55 -36 83 -63 42 -40
60 -51 99 -56 78 -12 198 26 271 87 16 13 54 32 84 42 40 13 68 31 100 65 55
57 70 63 122 49 23 -6 62 -8 90 -4 41 6 59 16 106 60 55 50 60 52 124 57 112
9 209 84 223 172 11 71 13 73 63 81 34 5 63 19 106 53 l59 46 46 -26 c75 -42
116 -50 205 -37 72 11 82 15 124 55 25 24 53 44 61 44 9 0 29 11 45 24 26 20
34 22 68 13 41 -10 67 -5 181 37 164 59 210 144 172 316 -9 41 -23 109 -31
150 -8 41 -24 122 -35 180 -24 118 -42 155 -102 204 -47 38 -114 56 -205 56
-31 0 -93 3 -138 6 l-80 7 12 96 c7 53 22 157 33 231 34 234 65 593 58 680 -6
70 -5 73 45 285 25 110 37 144 55 158 13 10 38 40 55 65 60 86 38 194 -54 278
-28 26 -37 44 -47 95 -7 35 -35 114 -62 176 -27 61 -49 118 -49 126 0 24 -56
93 -94 116 -20 13 -74 30 -120 40 -74 15 -89 22 -135 63 -28 26 -71 56 -96 68
-25 12 -62 41 -83 65 -21 24 -54 52 -73 63 -32 19 -166 65 -219 76 -15 3 -32
19 -44 41 -30 55 -133 155 -185 179 -37 17 -65 21 -142 21 -65 0 -101 -4 -112
-13 -11 -9 -30 -11 -64 -7 -83 11 -111 25 -156 75 -35 39 -46 59 -51 98 -5 37
-19 67 -57 120 -46 63 -63 77 -160 134 -202 116 -189 105 -256 220 -51 86 -72
112 -116 142 -71 49 -138 69 -203 61 l-51 -6 -7 41 c-3 22 -23 77 -45 123 -21
46 -41 96 -45 112 -7 29 -85 204 -185 417 -51 108 -107 300 -131 448 -14 88
-40 188 -75 290 -14 41 -23 75 -21 77 2 2 224 -27 493 -65 l489 -70 429 39
c434 39 1344 101 1706 117 217 10 231 14 281 84 30 43 32 101 20 678 -9 443
-10 468 -32 530 -21 60 -22 76 -16 215 3 83 10 177 16 210 6 33 13 75 16 94 5
33 6 33 47 27 23 -3 59 -2 79 3 36 8 38 7 78 -40 46 -55 107 -94 161 -104 25
-5 41 -15 50 -32 26 -49 105 -110 151 -117 24 -4 117 -31 208 -60 160 -52 222
-76 435 -166 55 -23 127 -52 160 -64 33 -13 74 -30 90 -38 47 -24 201 -74 305
-98 52 -13 142 -36 200 -51 58 -16 134 -35 170 -43 36 -8 90 -21 120 -29 67
-17 229 -49 365 -72 187 -31 188 -32 280 -85 70 -41 109 -58 245 -110 47 -18
90 -36 95 -40 32 -26 140 -79 200 -99 149 -49 212 -76 265 -111 71 -48 141
-83 210 -105 30 -10 59 -21 64 -26 6 -5 21 -9 34 -9 22 0 23 -3 15 -33 -11
-44 -8 -110 7 -149 29 -78 68 -145 106 -184 55 -56 99 -63 196 -29 39 14 82
32 94 40 34 22 46 19 88 -24 24 -25 41 -54 47 -82 6 -24 21 -58 35 -76 13 -17
24 -38 24 -45 0 -21 108 -176 154 -223 81 -81 178 -68 297 41 25 23 54 44 65
47 218 65 312 95 374 119 l75 30 47 -53 c115 -134 163 -190 232 -275 41 -50
87 -99 103 -109 15 -10 35 -28 43 -39 8 -12 33 -41 56 -66 38 -42 166 -233
228 -342 49 -86 120 -120 199 -94 23 8 62 17 87 21 26 4 64 21 91 40 25 18 57
36 70 40 13 4 53 36 89 70 59 57 72 64 145 83 125 33 204 61 280 99 66 33 135
93 135 117 0 13 76 46 104 46 15 0 53 36 188 176 7 8 47 46 89 84 74 68 78 70
128 70 28 0 59 -4 69 -9 37 -20 142 -41 169 -35 15 4 55 20 87 37 52 25 67 28
113 23 36 -4 67 -16 94 -35 44 -32 175 -86 236 -97 21 -3 76 -17 122 -30 64
-18 92 -22 116 -15 24 6 52 4 101 -9 186 -49 214 -53 264 -32 16 6 24 7 176
14 73 4 97 9 121 26 18 13 60 26 104 33 41 6 79 15 84 19 27 20 114 31 181 22
57 -8 83 -6 154 10 142 33 178 61 232 176 36 75 78 118 125 127 59 11 142 63
176 111 16 23 43 48 59 55 15 6 39 25 53 41 13 15 55 55 93 88 38 33 79 80 91
104 20 38 28 44 61 49 55 7 126 -9 163 -37 40 -30 107 -49 144 -40 38 9 108
50 152 89 20 18 47 36 61 40 49 14 111 57 140 96 38 53 52 124 42 222 -4 42
-5 77 -2 77 4 0 26 17 50 37 24 20 65 48 93 60 62 29 153 102 234 186 l63 66
68 -6 c96 -8 208 18 265 61 73 55 116 78 185 97 77 21 233 73 259 87 10 5 72
17 138 27 95 13 127 22 152 41 29 22 37 24 71 15 28 -8 50 -7 83 2 41 12 46
12 74 -9 34 -25 95 -44 143 -44 24 0 46 -10 73 -34 60 -51 155 -58 219 -17 14
9 46 26 71 39 43 22 51 23 108 12 51 -9 72 -8 114 4 89 26 326 176 408 258 58
58 147 181 161 224 22 65 47 72 253 79 222 7 258 14 339 73 85 62 125 84 161
88 17 1 89 21 160 42 72 22 161 45 199 52 86 14 117 30 181 91 28 26 76 69
108 94 31 25 57 50 57 55 0 6 17 17 38 25 20 9 48 27 62 39 15 14 54 31 95 41
59 15 80 15 142 5 87 -14 124 -5 198 45 l52 36 60 -15 c46 -12 68 -13 98 -5
53 15 129 53 189 96 27 19 51 31 55 26 32 -47 265 -313 287 -327 18 -13 46
-19 81 -19 102 0 83 -30 503 809 355 709 394 782 734 1369 l358 620 5 75 c3
42 0 216 -6 387 -10 258 -18 350 -46 544 -78 533 -61 461 -194 813 l-121 319
0 251 c0 294 14 422 85 763 l45 221 -15 359 c-8 197 -18 375 -21 396 -4 27
-34 75 -100 165 l-94 126 6 201 c7 269 47 541 126 870 58 240 64 259 155 460
86 193 171 351 247 465 l30 45 9 225 c11 309 -9 553 -60 720 -19 63 -42 138
-50 165 -8 28 -31 90 -51 139 l-35 90 23 95 c27 106 19 94 196 288 171 187
154 150 218 465 53 262 56 284 56 425 0 217 -26 519 -65 753 -21 128 -38 276
-45 395 -8 132 -21 234 -41 334 -25 123 -29 167 -29 300 0 86 7 233 15 326 9
109 15 300 15 530 0 362 1 371 49 818 l9 78 89 117 c227 296 203 253 278 492
82 261 81 255 100 424 12 112 13 164 4 287 -8 111 -8 176 0 248 11 90 10 106
-9 182 -12 46 -28 104 -36 127 -12 38 -12 77 1 303 11 183 13 270 6 296 -6 21
-105 273 -220 560 l-209 523 -96 488 c-53 269 -96 496 -96 505 0 21 54 136
233 495 l140 284 598 299 c543 271 601 298 626 288 15 -5 90 -25 167 -44 363
-88 523 -122 552 -118 17 3 52 21 77 41 26 21 74 59 107 85 l61 49 1187 -25
1186 -25 271 49 c148 27 290 53 315 58 247 53 340 71 430 86 58 10 373 67 700
127 435 80 799 139 1355 219 418 61 764 114 770 118 5 4 174 134 375 289 l365
281 291 294 c159 161 303 311 320 332 l29 38 5 431 c4 299 10 442 18 466 17
49 255 896 281 1002 17 67 20 96 13 122 -10 33 -533 1017 -725 1361 -55 99
-135 245 -177 325 -145 276 -842 1565 -860 1590 -9 14 -84 151 -166 305 l-149
280 -5 1845 -5 1845 -432 1330 -433 1330 30 1908 30 1909 171 941 c94 518 178
965 187 992 10 34 37 75 82 125 121 138 120 137 307 665 90 255 104 350 84
570 -18 211 -27 249 -75 309 -112 145 -232 273 -300 319 -81 56 -133 96 -192
147 -65 55 -120 70 -260 70 -161 0 -442 39 -669 92 l-180 43 -215 144 c-118
80 -267 188 -330 241 -63 52 -143 117 -178 143 -88 68 -190 225 -334 517 -129
261 -141 289 -168 375 -67 216 -86 369 -59 482 20 84 49 163 84 233 19 37 29
82 40 176 14 124 16 129 72 233 l57 106 1 120 c0 143 -6 158 -104 232 -114 86
-124 91 -271 134 -134 39 -157 43 -305 49 -106 5 -192 15 -254 29 -83 19 -104
21 -184 12 -88 -10 -92 -10 -246 31 l-156 41 -270 1 c-148 0 -322 -6 -385 -13
-135 -14 -427 -57 -520 -76 -36 -7 -124 -21 -196 -31 l-132 -17 -105 36 c-124
43 -174 74 -398 245 l-167 126 -36 86 c-35 82 -36 90 -36 206 0 67 -13 269
-30 450 -16 181 -32 361 -35 399 -12 141 -25 187 -80 287 -53 94 -68 138 -105
303 -10 44 -45 181 -79 305 -34 124 -91 367 -126 540 -56 272 -95 418 -281
1070 l-216 755 -128 220 c-70 121 -168 294 -217 385 -78 142 -314 540 -413
695 -18 28 -230 381 -473 785 -242 404 -459 764 -482 800 -35 54 -228 296
-564 705 -31 39 -76 106 -100 148 l-43 77 -13 269 -14 268 114 252 c63 138
116 270 119 294 9 64 34 547 47 881 l11 300 128 377 c126 373 129 379 247 600
116 218 122 230 185 444 80 266 74 236 97 475 34 340 35 371 12 523 -12 77
-23 142 -25 146 -18 29 -36 224 -36 393 0 155 -5 226 -25 363 -26 170 -69 373
-88 409 -19 38 -137 510 -186 745 l-11 53 70 122 c38 66 98 174 132 239 l63
119 150 59 150 59 178 -25 c154 -21 183 -23 215 -12 21 7 128 67 237 132 110
66 324 187 475 270 315 172 247 109 507 472 112 156 173 229 325 386 135 142
226 248 333 390 l146 195 29 219 29 218 104 286 104 285 132 220 c73 120 161
264 196 319 38 59 66 116 70 140 4 22 29 171 56 330 l50 290 115 224 c91 177
256 552 368 833 6 18 18 28 31 28 11 0 70 9 130 21 96 18 126 29 235 86 115
61 135 76 255 193 74 72 145 132 165 140 60 23 87 48 147 133 l58 82 1 115 c1
115 1 115 57 255 62 159 95 204 184 256 51 31 63 34 101 27 23 -4 87 -31 140
-61 54 -29 156 -77 227 -106 117 -48 140 -54 258 -67 71 -7 143 -10 160 -7 48
9 83 38 130 106 l42 62 0 115 c0 63 -6 166 -12 229 l-13 114 32 52 c44 70 126
129 210 150 36 9 80 25 96 35 31 19 120 145 181 255 19 33 62 98 97 145 56 76
64 94 74 155 6 37 8 82 4 99 -11 52 -144 398 -169 441 -15 26 -43 52 -82 74
-32 19 -67 40 -79 47 -32 19 -60 111 -94 309 -30 176 -31 181 -85 276 -81 142
-235 303 -330 344 -58 25 -225 38 -327 25 -213 -26 -343 -59 -483 -123 -62
-28 -108 -42 -148 -45 -57 -4 -60 -3 -98 34 -22 21 -58 70 -80 108 -24 39 -74
99 -116 140 -58 55 -76 79 -85 114 -7 27 -37 77 -81 135 -84 109 -131 217
-146 333 -5 44 -24 116 -41 162 -48 124 -110 181 -305 278 -82 41 -178 91
-212 111 -60 35 -63 39 -68 82 -18 151 -27 181 -64 229 -83 105 -129 132 -272
157 -53 10 -223 -12 -300 -39 l-67 -23 -73 18 c-164 41 -337 49 -544 24 -184
-22 -164 -31 -215 87 -29 67 -101 189 -212 359 -92 142 -178 279 -191 306 -14
26 -53 95 -87 153 -55 92 -76 145 -167 415 l-104 310 -25 271 c-23 258 -28
289 -104 629 l-80 358 66 270 66 270 -11 221 c-11 220 -11 222 26 566 l36 345
87 181 c48 100 90 197 93 215 4 19 14 363 22 764 l16 730 55 480 c30 264 68
565 85 669 l29 189 108 146 c59 80 142 193 184 251 42 58 156 200 253 315 98
116 198 237 222 270 148 198 182 233 333 335 162 111 188 131 531 421 134 114
287 242 339 285 78 65 121 114 240 270 l145 190 156 99 c121 76 170 102 215
111 70 15 298 55 475 84 69 11 145 27 169 35 40 14 383 97 620 150 182 41 230
54 452 127 l218 70 287 204 c159 111 331 226 383 255 75 41 496 277 757 426
26 14 81 70 144 146 56 67 121 142 144 167 79 84 459 639 518 755 50 100 65
119 159 211 93 90 116 108 238 171 224 117 417 239 562 355 76 60 146 122 157
136 10 15 40 94 66 176 26 81 70 200 98 263 l52 115 120 89 c77 56 146 118
192 171 153 174 172 206 287 473 l108 250 103 105 c90 91 117 127 205 275 56
94 146 235 199 315 54 80 151 226 216 325 66 99 179 259 251 355 102 136 139
195 169 265 20 50 54 119 73 155 36 65 161 225 258 332 58 63 55 54 84 288 11
91 31 212 45 269 l25 104 118 131 c183 204 175 190 211 353 20 90 60 220 107
350 81 221 93 244 355 694 75 130 140 247 144 260 4 13 18 44 30 69 12 25 26
63 30 85 4 22 26 103 50 180 55 180 52 167 65 325 10 124 9 141 -10 225 l-22
90 36 65 c19 36 90 130 158 210 167 197 354 455 459 631 47 80 136 211 196
290 61 79 170 236 242 349 83 128 167 245 226 313 52 59 146 179 210 267 l116
159 20 148 c12 94 17 169 13 205 l-6 57 178 198 c228 252 383 428 416 473 14
19 78 161 143 315 l118 280 205 308 c205 309 205 309 311 400 118 100 341 324
400 402 32 41 49 84 96 240 44 144 75 225 130 335 69 138 74 152 100 295 l27
150 108 223 c68 140 136 262 183 330 40 59 115 184 166 278 67 123 117 201
178 275 46 57 113 151 148 209 57 95 64 113 74 185 30 237 21 397 -39 745 -32
184 -43 282 -60 535 -11 171 -22 337 -25 370 -3 33 5 180 18 326 l23 266 78
119 c78 117 81 120 195 199 81 56 164 127 276 236 100 99 185 172 227 198 l67
40 118 -10 c111 -11 120 -13 154 -43 52 -45 159 -230 220 -381 81 -201 231
-463 377 -658 l125 -168 246 -193 c135 -106 256 -198 268 -205 12 -6 165 -61
340 -122 255 -88 409 -134 778 -231 253 -66 585 -158 737 -204 462 -141 861
-240 1096 -273 l203 -29 207 43 207 44 298 139 c254 119 332 161 525 283 l227
144 115 5 c111 6 119 8 220 54 58 26 116 53 130 61 14 7 66 30 115 50 108 46
115 51 325 231 313 269 326 284 507 579 154 250 165 273 301 590 l141 330 62
260 62 260 155 310 c110 220 180 377 243 540 53 140 138 334 217 495 128 262
131 268 200 515 39 138 76 270 82 295 7 25 56 142 110 260 54 119 100 229 104
245 3 17 17 131 31 255 14 124 39 292 56 375 30 140 38 162 130 358 96 202
103 213 257 415 86 114 167 221 178 237 51 73 348 645 504 972 291 608 427
860 592 1094 l143 203 200 120 c197 120 201 123 355 276 l155 155 215 420
c118 230 300 575 403 766 l189 346 231 289 c227 282 243 300 682 736 l450 447
412 310 c226 171 422 325 435 343 l23 33 5 1100 5 1100 199 590 c109 325 200
592 201 593 2 2 259 62 572 133 312 71 578 133 590 138 46 21 544 374 561 399
11 15 110 255 222 533 l203 505 416 210 416 209 465 581 c296 370 686 840
1075 1295 336 393 622 730 637 749 21 29 33 72 67 245 23 116 71 356 107 535
l67 325 595 1095 c327 602 603 1109 614 1127 l19 31 771 -194 c713 -180 820
-210 1432 -400 l661 -206 640 -315 640 -316 405 -142 405 -143 110 -185 c100
-169 114 -188 160 -216 158 -95 1944 -1082 1973 -1090 27 -8 251 14 1000 99
898 102 978 110 1156 110 l191 0 263 -263 263 -263 -99 -315 c-55 -173 -107
-339 -116 -369 -8 -30 -38 -266 -66 -525 -28 -258 -52 -478 -54 -488 -2 -9
-260 -427 -572 -928 l-567 -911 -10 -146 -10 -147 117 -440 c64 -242 124 -454
132 -470 23 -43 56 -62 249 -140 94 -37 333 -135 532 -216 198 -81 379 -153
401 -159 31 -8 50 -7 79 3 21 7 324 206 673 442 l635 429 971 321 c534 176
982 328 997 337 36 25 396 561 561 839 l141 236 204 219 c230 247 168 155 608
909 l228 390 844 421 845 422 750 305 c413 168 1122 446 1576 619 l825 313
560 5 560 6 475 127 475 127 810 120 c663 98 1883 296 1932 315 7 2 252 196
545 432 l532 427 1036 193 1035 193 925 116 925 115 395 96 c217 53 706 180
1085 283 l691 188 414 207 414 207 485 14 c267 7 506 18 531 23 27 6 274 133
603 311 l558 301 472 85 c371 67 479 90 504 107 18 12 34 27 37 32 2 6 250
381 550 835 l547 825 2248 1035 2248 1035 199 129 199 130 618 226 c503 184
628 234 670 265 29 21 219 168 424 327 l372 288 279 308 c154 169 296 322 316
340 20 19 40 49 45 70 6 20 28 334 51 697 35 583 46 713 95 1110 62 510 67
573 95 1140 12 226 32 586 45 801 l24 390 116 300 c82 208 117 313 118 344 2
40 -33 114 -332 710 -301 599 -376 739 -758 1410 l-425 745 -118 585 c-66 322
-160 793 -210 1047 l-90 462 149 898 c82 494 173 1044 201 1223 38 238 57 334
72 358 11 18 45 52 76 75 107 82 767 553 1077 769 l310 216 440 444 c242 243
446 454 453 468 7 14 107 308 222 655 l210 630 434 435 434 435 529 632 528
632 375 602 c206 331 389 625 405 654 17 28 81 133 144 233 102 162 118 182
145 187 17 3 310 39 651 80 1029 125 1002 121 1045 153 20 15 315 260 656 545
l619 519 385 144 c212 79 594 221 850 316 256 94 479 181 497 192 18 12 41 39
52 61 11 22 209 517 441 1100 l422 1060 253 495 c139 273 287 568 330 655 l76
160 19 195 c24 248 75 792 95 1020 9 96 25 265 36 375 11 110 24 252 29 315 4
63 18 206 30 316 25 238 22 261 -44 327 -24 23 -216 258 -427 522 -352 441
-403 509 -625 845 -134 201 -324 486 -423 635 -100 148 -181 278 -181 290 0
11 50 360 110 775 74 507 128 840 164 1015 30 143 75 368 100 501 25 133 62
308 81 390 43 183 161 711 181 814 8 41 21 98 29 125 15 55 109 476 155 704
l30 144 0 1402 0 1402 -105 859 -105 858 0 1615 0 1616 85 600 c47 330 93 652
102 715 l18 115 187 140 c103 77 286 214 408 304 121 90 232 178 244 195 13
17 129 202 258 411 129 209 371 598 538 865 294 469 304 487 304 535 0 45 -22
93 -212 472 l-212 423 0 1122 1 1123 97 59 c307 187 377 229 472 284 58 33
150 88 205 121 82 50 358 215 884 528 35 21 98 61 140 89 42 27 117 72 166 99
50 26 122 69 161 94 39 25 111 68 160 94 266 145 412 227 529 297 72 42 193
112 270 155 77 43 192 108 255 145 63 37 150 87 192 112 85 48 112 82 208 258
152 277 210 380 237 420 37 55 167 284 205 362 15 32 63 115 107 185 43 71
110 185 149 254 42 77 103 167 155 230 47 57 148 183 226 279 77 96 182 227
233 291 217 271 274 343 300 379 15 20 165 270 334 555 l307 518 403 399 c221
220 420 422 442 451 37 49 50 88 210 642 246 846 247 849 281 892 16 21 32 52
36 70 15 75 -39 163 -116 183 -34 9 -65 5 -224 -30 -102 -22 -193 -40 -203
-40 -35 0 -410 169 -567 256 -280 153 -466 238 -585 264 -97 22 -114 29 -222
99 -64 42 -174 118 -245 168 l-128 93 -59 109 c-32 60 -87 144 -122 186 -82
98 -75 85 -85 173 -7 65 -14 84 -52 141 -24 36 -59 107 -77 156 -18 50 -40
103 -49 118 -10 17 -66 60 -142 108 l-127 79 -40 118 c-34 97 -44 142 -56 262
-15 145 -15 146 -120 435 -58 160 -112 301 -118 315 -7 13 -70 84 -140 158
l-127 134 -55 166 c-79 240 -84 263 -101 516 -15 223 -15 231 5 337 33 175 7
225 -142 275 -101 33 -150 66 -343 229 -287 244 -374 325 -477 447 -88 104
-124 138 -237 220 -89 65 -145 99 -170 103 -20 3 -85 1 -145 -5 -97 -10 -118
-9 -217 11 -100 20 -111 24 -127 51 -9 16 -32 38 -50 50 -21 13 -48 49 -79
105 -50 88 -199 293 -257 352 -29 28 -49 37 -137 58 -155 36 -179 43 -179 52
0 5 78 87 173 183 l173 173 91 205 c51 113 112 258 137 322 25 65 71 161 103
215 l58 98 6 195 c5 136 13 228 28 305 20 101 21 121 11 250 -6 77 -14 151
-17 165 -3 14 -31 75 -61 135 -47 91 -71 125 -143 200 -92 95 -114 135 -199
345 -21 52 -67 158 -102 235 -45 98 -74 179 -97 270 l-32 130 10 197 c10 187
12 200 40 263 60 133 166 313 266 455 101 142 103 148 153 300 48 149 50 161
57 306 4 100 3 164 -4 192 -14 52 -61 98 -112 112 -64 18 -295 -21 -523 -87
-105 -30 -194 -57 -197 -59 -4 -2 -84 7 -179 21 -149 22 -207 25 -433 25 -392
0 -511 11 -772 70 -257 58 -531 110 -735 140 -106 16 -209 41 -380 93 -233 70
-236 71 -348 146 -106 70 -117 75 -168 75 -69 0 -88 -14 -189 -143 -75 -95
-88 -107 -195 -173 -63 -39 -202 -113 -309 -164 -186 -90 -200 -95 -330 -119
-225 -40 -526 -58 -946 -56 -364 1 -372 1 -464 -23 l-94 -25 -61 62 c-37 38
-82 99 -114 157 l-53 95 6 110 c4 61 17 173 31 251 l24 141 -35 154 c-20 85
-52 203 -73 262 -33 95 -48 123 -128 230 -88 120 -92 127 -162 317 -161 441
-225 636 -287 880 -44 170 -79 286 -107 349 l-42 93 12 69 c7 38 12 118 12
178 0 99 -4 122 -40 243 -27 89 -44 168 -51 238 -10 113 -63 361 -136 640
l-45 175 -116 180 c-64 99 -163 252 -222 340 -58 88 -142 227 -185 309 -97
183 -189 294 -309 372 -69 46 -83 61 -128 135 -37 62 -59 115 -83 199 -17 63
-80 256 -138 428 -102 298 -110 318 -181 430 -84 133 -84 132 -226 232 -58 41
-164 125 -236 187 l-131 112 -80 143 c-78 139 -82 151 -175 463 -53 176 -108
376 -123 445 -22 102 -35 138 -70 195 -24 41 -51 105 -65 155 -29 105 -41 123
-144 210 -109 91 -214 252 -269 410 -36 106 -46 173 -118 785 -16 138 -23 156
-89 228 -90 98 -554 535 -801 754 l-215 191 -116 179 c-63 98 -163 270 -223
383 -124 237 -106 210 -295 455 l-146 190 -16 132 c-11 86 -23 143 -35 163
-10 18 -54 54 -106 87 -67 42 -102 73 -149 132 -100 124 -117 139 -263 236
-193 127 -447 330 -720 574 -126 114 -280 246 -340 293 -129 100 -446 426
-636 653 -69 83 -192 249 -274 370 l-148 220 -52 190 c-28 105 -75 245 -103
313 l-51 123 14 182 c23 303 26 401 17 433 -10 32 -134 206 -168 235 -68 58
-352 192 -894 422 -171 72 -278 126 -445 223 -121 70 -294 163 -385 207 -91
43 -302 157 -470 252 l-305 173 -310 111 c-281 100 -497 189 -1045 430 -102
45 -246 105 -320 132 -365 137 -646 278 -808 408 -48 38 -157 140 -242 227
-85 86 -193 188 -240 227 -47 38 -157 140 -245 227 -88 86 -228 220 -310 297
-140 131 -161 156 -289 340 -148 210 -174 243 -387 478 -110 122 -143 167
-178 236 -48 98 -186 276 -321 414 -51 52 -135 157 -200 250 -89 128 -146 195
-279 330 -91 94 -208 213 -259 266 -87 90 -98 99 -185 134 -159 65 -286 139
-402 235 -71 59 -169 125 -275 187 -186 107 -238 153 -402 347 -56 65 -153
175 -218 245 -64 69 -160 181 -213 248 -106 133 -187 206 -417 377 -80 60
-174 136 -209 170 -83 80 -218 242 -368 441 -89 119 -163 202 -288 325 -127
125 -202 211 -313 355 -80 105 -207 258 -282 340 -229 251 -638 754 -798 980
-51 72 -108 149 -127 172 -26 30 -51 84 -92 195 -47 130 -57 166 -61 241 -6
117 14 377 43 562 42 268 48 359 30 498 -22 164 -19 156 -88 287 -91 175 -227
360 -341 465 -86 78 -101 97 -137 174 -69 148 -105 236 -223 556 l-114 310
-62 385 c-34 212 -77 481 -96 599 l-35 215 -77 109 c-42 60 -92 121 -111 136
-45 34 -78 33 -406 -9 -245 -32 -259 -33 -745 -37 -333 -3 -651 0 -970 11
-261 9 -522 13 -580 10 -175 -10 -263 5 -425 74 -77 33 -176 76 -220 97 -71
32 -101 39 -260 60 -256 34 -876 53 -1202 37 l-231 -11 -134 45 c-258 87 -889
200 -993 178 -96 -20 -266 -102 -395 -189 -74 -50 -178 -117 -230 -148 l-96
-56 -204 -35 c-313 -55 -606 -78 -875 -71 -474 13 -590 23 -829 71 -140 28
-232 42 -251 38 -38 -8 -73 -33 -160 -112 -57 -52 -104 -81 -250 -154 -99 -50
-238 -122 -308 -160 -70 -38 -189 -96 -263 -128 -150 -67 -491 -243 -689 -358
-117 -67 -151 -81 -352 -143 l-222 -69 -204 0 c-176 0 -234 -4 -413 -30 -206
-30 -212 -31 -394 -20 -102 6 -251 22 -332 36 -143 24 -154 27 -340 113 -106
49 -283 128 -392 176 -110 47 -236 107 -280 132 -57 33 -110 53 -178 69 -109
26 -479 70 -668 79 l-125 6 -71 54 c-89 69 -233 152 -499 290 l-210 108 -85
130 c-136 209 -379 517 -549 696 -135 142 -338 323 -451 401 -88 62 -217 11
-588 -233 -139 -92 -290 -197 -335 -235 -45 -37 -89 -72 -97 -79 -9 -7 -99
-30 -200 -53 -102 -22 -234 -54 -295 -70 -60 -16 -181 -38 -269 -49 -245 -31
-257 -43 -267 -291 -4 -91 -10 -177 -14 -192 -13 -50 -160 -148 -319 -213
-119 -48 -170 -62 -345 -96 -144 -29 -214 -47 -235 -62 -92 -63 -201 -159
-371 -327 l-190 -187 -210 -83 c-115 -46 -224 -93 -242 -104 -22 -14 -51 -55
-89 -125 -70 -128 -77 -158 -60 -236 8 -33 17 -112 21 -175 3 -63 13 -180 21
-260 7 -80 21 -233 29 -340 l15 -195 -35 -97 c-48 -136 -102 -227 -232 -392
l-112 -143 -118 -66 c-146 -83 -407 -288 -563 -441 -133 -132 -284 -256 -309
-256 -31 0 -136 38 -309 112 l-167 72 -96 -1 c-52 -1 -131 -6 -174 -12 -74
-11 -90 -18 -246 -110 -158 -93 -171 -99 -250 -110 -136 -19 -331 -78 -527
-159 l-183 -75 -147 -136 c-151 -139 -337 -349 -462 -523 l-70 -96 -73 -7
c-66 -6 -79 -4 -123 18 -27 13 -113 39 -191 56 l-141 32 -224 -16 c-122 -9
-232 -18 -243 -20 -11 -3 -94 -9 -185 -15 -200 -13 -649 -78 -824 -120 l-129
-30 -226 11 c-132 7 -323 8 -461 5 -229 -7 -240 -6 -435 24 -281 43 -456 77
-517 101 -51 20 -55 24 -111 124 -32 58 -118 191 -192 296 -114 164 -160 219
-320 385 l-186 194 11 113 c8 80 8 160 1 274 l-10 161 35 82 c23 52 70 128
130 208 108 146 108 145 103 344 -4 148 -3 145 -111 275 -30 37 -62 98 -108
208 -35 85 -80 176 -100 203 -20 26 -65 85 -100 132 -39 51 -119 186 -200 340
-91 171 -148 267 -175 294 -32 32 -69 52 -175 95 -199 80 -397 190 -510 285
-157 132 -419 297 -655 411 -193 93 -506 282 -542 326 -7 9 -16 74 -21 161 -9
141 -10 146 -41 192 -81 118 -126 160 -249 234 -95 57 -129 84 -158 124 -21
27 -68 72 -105 100 -47 34 -87 75 -129 134 -38 52 -85 102 -123 131 -34 25
-111 94 -172 153 -119 115 -129 120 -237 120 -33 0 -107 11 -166 25 -119 27
-134 26 -242 -19 -62 -26 -70 -27 -175 -20 -101 6 -120 11 -235 57 -69 27
-190 69 -270 94 -142 43 -146 45 -203 101 -32 31 -105 111 -161 177 -137 160
-271 281 -441 397 -151 104 -222 172 -451 428 -185 207 -363 430 -495 619 -63
90 -127 174 -144 186 -16 13 -81 51 -143 85 l-112 61 -70 139 c-69 135 -74
142 -172 232 -55 51 -172 175 -260 275 -121 140 -183 201 -266 266 -156 122
-154 120 -312 167 -170 50 -315 118 -325 152 -4 13 -78 168 -165 344 l-157
321 -56 239 c-31 132 -74 356 -96 499 -55 355 -143 664 -222 781 -28 40 -157
165 -306 296 -40 35 -238 223 -440 418 -203 196 -485 466 -628 600 l-260 245
-160 84 c-126 67 -196 96 -337 142 -171 54 -181 59 -242 113 -85 74 -91 97
-66 259 10 67 21 185 25 263 6 133 5 150 -29 335 -49 264 -145 573 -338 1085
l-156 410 -95 146 c-95 146 -95 146 -204 223 -59 42 -178 119 -263 170 -134
80 -176 99 -313 145 -141 46 -253 99 -985 462 -936 464 -1040 509 -1247 534
-182 23 -529 5 -1205 -62 -488 -48 -535 -48 -845 -14 -49 6 -144 15 -210 21
-66 6 -192 24 -280 40 -217 40 -557 96 -630 105 -47 5 -85 20 -175 69 -101 54
-131 66 -245 90 -71 15 -182 48 -245 72 -337 131 -471 173 -670 209 -107 20
-242 47 -300 61 -100 23 -115 24 -300 18 -175 -6 -214 -4 -385 19 -157 22
-227 26 -400 25 -115 -1 -230 -5 -255 -10z m655 -345 c171 -23 209 -25 385
-19 185 6 200 5 300 -18 58 -14 170 -37 250 -51 146 -27 283 -70 570 -181 77
-30 191 -64 265 -80 117 -25 143 -35 257 -97 120 -65 132 -69 235 -84 161 -22
391 -60 638 -104 218 -39 476 -69 776 -90 151 -10 168 -9 610 34 611 61 1018
84 1162 67 154 -18 272 -70 1154 -507 736 -365 849 -418 990 -464 131 -44 181
-66 293 -133 249 -148 274 -168 347 -281 59 -91 81 -142 228 -531 180 -479
272 -769 311 -984 23 -129 25 -160 19 -280 -3 -75 -15 -198 -26 -273 l-20
-138 32 -112 32 -113 96 -94 c53 -51 114 -106 136 -121 23 -16 116 -52 220
-85 134 -42 214 -75 315 -128 135 -70 135 -70 370 -291 129 -122 403 -383 608
-581 205 -198 405 -388 445 -423 39 -35 115 -103 168 -152 89 -82 99 -96 128
-168 56 -137 100 -320 136 -557 21 -135 65 -356 107 -535 l71 -305 112 -225
c61 -124 145 -296 186 -383 40 -87 84 -169 97 -183 47 -47 270 -149 422 -194
140 -42 147 -45 232 -112 60 -47 141 -130 248 -253 87 -100 196 -215 240 -256
78 -70 85 -80 160 -229 l79 -155 68 -41 c37 -23 107 -63 154 -88 l86 -46 113
-163 c131 -187 309 -410 494 -617 229 -256 300 -324 451 -428 163 -111 303
-236 417 -371 107 -126 243 -266 293 -300 23 -16 95 -44 170 -66 72 -21 209
-70 305 -108 l175 -70 165 -10 c159 -9 167 -9 225 13 120 45 124 45 218 22 47
-12 99 -22 115 -22 20 0 41 -13 77 -51 28 -28 85 -77 127 -110 52 -40 96 -85
138 -144 40 -55 81 -99 118 -125 31 -22 84 -72 117 -111 49 -58 82 -85 180
-145 66 -40 130 -85 142 -101 18 -24 23 -48 31 -179 9 -145 10 -153 40 -195
52 -75 110 -123 312 -255 141 -92 253 -155 405 -229 234 -114 431 -236 571
-356 51 -43 116 -93 145 -112 104 -65 315 -175 422 -218 l107 -43 126 -236
c133 -247 137 -254 250 -402 58 -76 83 -121 134 -243 64 -154 77 -177 142
-256 36 -44 38 -51 38 -116 l0 -69 -83 -112 c-63 -85 -94 -139 -129 -225 -26
-61 -50 -122 -53 -134 -3 -12 -1 -103 5 -201 8 -130 8 -209 0 -286 -9 -91 -8
-120 6 -193 l17 -86 219 -227 c267 -277 383 -435 548 -748 29 -55 54 -88 75
-100 48 -29 205 -90 260 -101 117 -25 334 -63 520 -91 195 -30 206 -31 430
-24 135 4 327 2 465 -5 l235 -11 124 30 c167 41 618 107 821 120 91 6 174 12
185 15 11 2 120 11 243 20 208 15 228 15 300 -1 42 -9 107 -32 143 -50 84 -42
131 -47 301 -36 117 8 141 12 168 32 18 13 79 86 137 164 153 206 301 376 438
502 l120 110 161 66 c178 74 295 108 458 133 l110 17 160 95 c161 95 161 96
248 104 82 8 91 7 145 -17 214 -95 464 -176 544 -177 32 -1 55 6 80 23 101 71
299 238 404 341 164 161 368 320 525 408 71 41 140 85 153 100 14 14 82 98
151 186 155 197 229 326 291 508 l47 139 -11 156 c-7 87 -20 247 -31 357 -10
110 -21 252 -25 315 -3 63 -11 137 -17 164 -9 41 -8 54 6 80 14 27 38 39 179
95 274 108 249 91 482 321 315 309 278 286 513 331 170 33 217 47 349 101 137
56 167 73 303 171 83 61 162 125 176 142 20 26 28 58 44 166 11 74 20 148 20
166 0 30 2 31 53 38 28 4 138 28 242 55 105 27 267 65 360 86 187 41 179 37
335 165 161 133 572 398 617 399 24 0 192 -151 339 -306 200 -212 417 -492
574 -744 29 -47 60 -91 69 -97 9 -7 117 -65 241 -129 327 -170 412 -219 534
-311 124 -92 115 -90 326 -98 141 -6 448 -36 580 -56 46 -7 88 -24 151 -59 48
-27 176 -88 286 -136 109 -47 290 -129 403 -181 l205 -94 200 -34 c128 -22
267 -38 385 -45 179 -11 190 -10 360 16 142 22 226 28 445 34 l270 7 255 80
c234 74 266 87 385 155 198 114 538 291 689 358 74 32 193 90 263 128 70 38
219 115 329 171 134 67 220 117 255 148 30 26 61 53 70 60 13 11 48 6 211 -26
208 -42 336 -53 803 -66 274 -8 569 17 931 80 l257 45 91 52 c50 29 159 98
241 153 98 66 181 114 240 137 l90 36 175 -19 c240 -26 439 -69 672 -145 l197
-64 255 12 c201 9 338 9 643 -1 468 -15 624 -32 728 -80 39 -18 140 -62 225
-98 142 -59 165 -66 280 -80 81 -10 164 -13 235 -9 61 3 324 -2 585 -10 318
-11 638 -14 970 -11 480 4 502 5 744 36 236 29 250 30 262 13 19 -24 29 -67
53 -222 12 -74 52 -328 91 -565 l70 -430 120 -325 c134 -362 158 -421 242
-597 57 -120 59 -122 174 -230 130 -121 204 -218 286 -373 89 -169 94 -268 33
-665 -28 -184 -45 -383 -45 -535 0 -119 15 -179 105 -432 52 -145 62 -162 145
-258 31 -36 94 -119 140 -185 146 -208 561 -718 790 -970 75 -82 202 -235 282
-340 111 -144 186 -230 313 -355 125 -123 199 -206 288 -325 150 -199 285
-361 368 -441 35 -34 129 -110 209 -170 230 -171 311 -244 417 -377 53 -67
149 -179 213 -248 65 -70 162 -180 217 -245 174 -206 245 -267 443 -382 120
-69 211 -131 288 -196 114 -94 271 -187 422 -250 61 -25 82 -44 301 -269 201
-207 253 -266 349 -402 63 -90 152 -201 204 -255 132 -136 207 -232 261 -335
60 -114 71 -129 235 -310 210 -233 238 -266 386 -478 128 -184 149 -209 289
-340 82 -77 222 -211 310 -297 88 -87 198 -189 245 -227 47 -39 153 -139 235
-223 83 -84 202 -194 265 -246 197 -161 495 -315 890 -463 74 -27 218 -87 320
-132 548 -241 764 -330 1045 -430 l310 -111 305 -173 c168 -95 379 -209 470
-252 91 -44 264 -137 385 -207 167 -97 274 -151 445 -223 619 -262 800 -349
844 -407 l25 -34 -10 -148 c-5 -82 -14 -207 -20 -278 -5 -71 -7 -143 -3 -159
3 -15 34 -97 68 -180 37 -88 83 -228 111 -332 l48 -180 186 -275 c109 -163
236 -336 310 -425 190 -227 507 -553 636 -653 60 -47 214 -179 340 -292 264
-237 551 -467 748 -598 121 -82 144 -102 217 -192 68 -84 133 -142 207 -184 1
-1 8 -54 17 -119 17 -135 -2 -102 213 -380 137 -176 165 -220 260 -400 58
-111 171 -303 251 -426 l146 -224 225 -200 c202 -180 694 -639 763 -713 23
-25 28 -43 38 -129 6 -55 27 -226 46 -380 33 -258 39 -290 81 -415 41 -120 58
-153 151 -298 90 -140 116 -173 179 -225 69 -58 75 -67 93 -128 11 -36 20 -70
20 -74 0 -4 20 -39 44 -79 36 -59 48 -92 71 -196 15 -69 70 -269 122 -445 l96
-320 90 -160 c49 -88 99 -173 109 -188 31 -44 279 -253 411 -347 170 -121 186
-147 324 -553 58 -172 121 -364 138 -427 27 -97 45 -136 111 -247 79 -131 79
-131 169 -191 117 -76 171 -139 252 -292 37 -69 115 -197 173 -285 59 -88 158
-241 222 -340 l116 -180 45 -175 c72 -275 95 -388 107 -526 9 -98 22 -160 51
-256 34 -112 39 -139 39 -227 0 -55 -7 -132 -15 -173 -19 -88 -16 -102 48
-242 38 -84 67 -179 123 -391 68 -261 129 -446 310 -943 44 -121 58 -145 140
-255 78 -105 95 -136 127 -227 20 -58 46 -145 57 -194 l20 -88 -25 -145 c-19
-106 -27 -184 -28 -296 l-2 -152 64 -110 c103 -178 154 -247 237 -321 104 -93
143 -121 179 -128 19 -4 76 5 155 24 l125 31 360 -2 c448 -3 711 15 993 67
l193 36 202 98 c111 54 272 140 357 192 129 79 163 105 204 156 l49 61 56 -38
c44 -30 108 -53 296 -111 285 -87 267 -82 475 -114 241 -37 526 -92 765 -147
250 -57 383 -69 775 -69 223 0 282 -3 430 -25 94 -14 184 -22 198 -19 15 3
118 33 229 65 112 32 214 59 228 59 22 0 25 -4 25 -32 0 -18 -16 -82 -36 -143
-32 -95 -48 -125 -120 -225 -45 -63 -102 -146 -125 -185 -60 -98 -197 -371
-209 -414 -5 -20 -14 -137 -20 -261 l-11 -224 47 -191 c38 -153 60 -217 112
-330 35 -77 81 -183 102 -235 21 -52 61 -144 89 -204 46 -96 62 -120 140 -200
123 -126 150 -183 162 -333 9 -102 7 -128 -16 -255 -18 -100 -25 -178 -25
-263 l0 -120 -45 -78 c-25 -43 -70 -139 -99 -215 -30 -75 -86 -209 -126 -297
l-73 -160 -131 -130 c-73 -71 -157 -152 -189 -178 -70 -59 -80 -92 -75 -237 3
-101 5 -107 38 -155 19 -27 55 -70 80 -95 44 -44 49 -46 179 -75 73 -16 139
-34 146 -40 32 -26 138 -182 201 -293 38 -69 79 -129 92 -136 12 -6 33 -31 45
-55 14 -25 38 -51 58 -61 19 -11 124 -37 234 -60 188 -38 205 -40 289 -31 l90
9 72 -53 c45 -33 110 -98 173 -174 101 -119 189 -202 476 -445 146 -124 352
-276 374 -276 13 0 13 -3 0 -59 -7 -31 -5 -111 6 -280 13 -192 22 -259 46
-356 44 -177 138 -454 169 -500 16 -22 78 -93 140 -157 l111 -118 95 -261 c84
-231 96 -273 105 -363 5 -55 14 -127 20 -159 11 -62 98 -321 126 -374 13 -23
53 -55 141 -110 67 -42 126 -82 131 -87 4 -6 18 -40 31 -76 12 -35 38 -87 57
-115 27 -42 35 -66 43 -133 10 -91 25 -119 133 -247 32 -38 84 -117 114 -175
31 -58 65 -117 75 -133 11 -15 74 -66 141 -114 67 -47 136 -98 152 -112 17
-15 98 -70 180 -122 143 -91 155 -97 255 -119 119 -26 305 -111 585 -265 154
-84 562 -268 635 -286 23 -5 56 -3 99 7 35 8 66 13 68 11 2 -2 -75 -276 -172
-608 l-175 -604 -413 -410 c-227 -226 -427 -431 -443 -455 -17 -25 -165 -272
-330 -550 -305 -516 -301 -511 -572 -849 -51 -64 -159 -198 -240 -299 -81
-101 -194 -241 -252 -312 -78 -94 -126 -166 -186 -276 -45 -82 -117 -205 -159
-274 -43 -69 -89 -147 -101 -175 -22 -46 -89 -164 -192 -333 -41 -69 -154
-271 -255 -460 -31 -56 -59 -97 -72 -102 -11 -4 -63 -34 -115 -65 -52 -32
-185 -108 -295 -170 -110 -62 -264 -150 -341 -196 -78 -46 -192 -111 -253
-144 -206 -110 -520 -291 -664 -382 -45 -28 -116 -71 -157 -94 -41 -23 -88
-52 -105 -63 -16 -12 -178 -110 -360 -218 -181 -108 -355 -213 -386 -232 -31
-19 -161 -97 -290 -172 -129 -75 -281 -167 -339 -204 -58 -37 -159 -99 -225
-137 -85 -50 -126 -81 -140 -105 -20 -33 -20 -51 -20 -1268 l0 -1235 202 -401
201 -400 -336 -540 c-186 -296 -411 -660 -502 -808 l-165 -269 -182 -136
c-101 -75 -264 -196 -364 -270 -243 -181 -326 -247 -344 -275 -9 -13 -24 -85
-35 -167 -44 -330 -63 -468 -130 -933 l-70 -490 0 -1616 0 -1616 105 -858 105
-859 0 -1402 0 -1402 -34 -169 c-47 -228 -88 -416 -136 -614 -22 -91 -65 -284
-96 -430 -30 -146 -62 -285 -69 -310 -22 -74 -83 -358 -140 -650 -29 -151 -76
-385 -104 -520 -60 -292 -285 -1807 -275 -1855 4 -16 106 -178 229 -360 122
-181 327 -490 455 -685 220 -333 259 -386 632 -852 306 -383 398 -504 398
-525 0 -16 -9 -116 -20 -223 -21 -205 -27 -276 -90 -960 -50 -549 -67 -731
-86 -916 l-14 -152 -61 -128 c-34 -71 -177 -356 -319 -634 l-258 -505 -380
-955 c-209 -525 -396 -996 -416 -1046 l-37 -91 -267 -98 c-1052 -387 -1403
-524 -1450 -562 -26 -21 -314 -262 -641 -535 -327 -274 -602 -498 -610 -498
-9 0 -395 -47 -858 -104 -944 -116 -887 -104 -938 -198 -16 -29 -87 -145 -158
-258 -72 -113 -144 -230 -162 -260 -17 -30 -188 -307 -380 -615 l-349 -560
-509 -610 -510 -610 -467 -470 -467 -470 -214 -645 -214 -645 -420 -423 -420
-424 -310 -216 c-307 -214 -964 -683 -1080 -771 -71 -54 -72 -55 -130 -152
l-45 -75 -61 -380 c-33 -208 -128 -783 -210 -1277 l-149 -898 90 -462 c50
-254 150 -752 222 -1107 l130 -644 412 -721 c367 -643 446 -790 741 -1376
l330 -657 -97 -248 c-54 -137 -104 -271 -112 -299 -16 -52 -48 -528 -86 -1280
-28 -564 -35 -646 -95 -1140 -48 -388 -58 -511 -90 -1045 -20 -333 -39 -615
-43 -627 -4 -12 -130 -157 -280 -322 l-273 -300 -372 -289 c-205 -159 -377
-292 -384 -296 -7 -3 -286 -107 -620 -229 l-608 -223 -200 -130 -200 -130
-2245 -1033 c-1235 -568 -2266 -1044 -2291 -1058 -44 -24 -78 -72 -598 -857
l-550 -831 -452 -83 -451 -82 -557 -300 -556 -299 -500 -16 c-275 -8 -513 -19
-530 -24 -16 -4 -221 -104 -455 -221 l-424 -212 -691 -188 c-379 -103 -841
-224 -1025 -269 l-335 -81 -920 -115 -920 -115 -1100 -205 c-921 -172 -1105
-209 -1131 -227 -17 -13 -256 -203 -530 -424 -275 -220 -505 -404 -512 -408
-29 -17 -1055 -185 -1810 -296 -447 -66 -850 -129 -895 -141 -45 -11 -262 -68
-482 -127 l-400 -107 -575 -5 -575 -5 -865 -328 c-476 -181 -1202 -466 -1615
-634 l-750 -305 -891 -443 -892 -443 -79 -133 c-44 -74 -194 -330 -333 -569
l-255 -435 -205 -220 -205 -220 -154 -260 c-84 -143 -226 -368 -314 -500
l-161 -240 -954 -315 -954 -315 -619 -417 -620 -418 -327 133 c-180 74 -387
158 -460 188 -74 30 -137 61 -142 69 -4 8 -49 170 -99 360 -60 227 -91 362
-90 395 2 135 -26 85 576 1050 308 495 563 914 567 930 3 17 30 253 60 525
l54 495 123 385 c136 426 141 452 96 517 -49 70 -680 691 -719 708 -30 12 -83
15 -271 15 -232 0 -243 -1 -1158 -105 -508 -58 -937 -105 -954 -105 -21 0
-314 159 -950 513 l-920 512 -115 193 c-78 130 -125 199 -145 212 -17 10 -217
84 -445 163 l-415 145 -650 320 -650 320 -675 210 c-643 199 -716 219 -1542
427 -817 205 -870 218 -907 206 -22 -6 -53 -24 -68 -40 -15 -16 -321 -568
-679 -1227 l-651 -1199 -81 -390 c-44 -214 -93 -454 -108 -532 l-28 -141 -614
-719 c-406 -475 -762 -903 -1050 -1266 l-437 -548 -437 -220 c-425 -213 -438
-220 -461 -262 -13 -23 -115 -269 -227 -547 l-202 -505 -195 -135 c-107 -74
-206 -141 -221 -148 -15 -7 -295 -73 -622 -147 -327 -74 -610 -142 -627 -151
-18 -9 -39 -27 -47 -39 -8 -13 -117 -328 -243 -701 l-227 -679 -4 -1057 -4
-1056 -386 -292 -387 -291 -454 -452 c-454 -451 -455 -453 -707 -767 l-251
-315 -180 -330 c-99 -181 -280 -523 -402 -760 l-222 -430 -117 -115 c-108
-107 -133 -126 -317 -237 -110 -67 -212 -134 -226 -150 -14 -15 -101 -135
-192 -266 -144 -204 -187 -276 -306 -505 -77 -147 -217 -428 -311 -625 -94
-197 -239 -485 -321 -640 -144 -269 -159 -293 -330 -520 -180 -237 -181 -239
-283 -455 l-103 -217 -47 -217 c-29 -137 -54 -289 -68 -415 l-21 -198 -93
-205 c-50 -113 -97 -225 -104 -250 -6 -25 -43 -157 -82 -295 -69 -247 -72
-253 -200 -515 -79 -161 -164 -355 -217 -495 -63 -163 -133 -320 -243 -540
l-155 -310 -62 -260 -62 -260 -141 -330 c-133 -310 -150 -344 -282 -558 l-141
-229 -165 -148 c-284 -254 -281 -252 -443 -324 -80 -36 -164 -74 -186 -86 -32
-16 -59 -20 -138 -20 -54 0 -112 -4 -129 -9 -17 -5 -140 -77 -272 -161 -208
-132 -282 -171 -539 -292 -282 -131 -306 -141 -435 -168 l-137 -30 -183 26
c-214 29 -565 117 -997 249 -152 46 -476 135 -721 199 -357 93 -511 139 -781
232 l-336 116 -215 168 c-211 165 -217 172 -310 297 -118 157 -260 411 -338
601 -83 200 -199 390 -298 487 -108 105 -123 111 -337 130 -98 9 -195 14 -215
10 -19 -3 -89 -38 -155 -77 -107 -63 -139 -89 -295 -242 -127 -125 -207 -193
-292 -251 l-116 -80 -120 -180 c-66 -99 -123 -191 -126 -205 -13 -59 -56 -639
-51 -685 3 -27 15 -189 25 -360 17 -254 27 -351 60 -535 47 -272 64 -475 52
-617 -8 -92 -13 -108 -46 -164 -21 -35 -79 -115 -131 -178 -70 -88 -117 -162
-195 -306 -57 -104 -139 -243 -182 -307 -49 -73 -120 -202 -189 -342 l-109
-226 -26 -146 c-24 -139 -29 -154 -93 -283 -49 -98 -84 -187 -124 -319 l-57
-183 -97 -106 c-54 -58 -163 -162 -243 -231 -80 -69 -151 -135 -159 -145 -8
-11 -91 -137 -185 -281 -95 -143 -191 -287 -215 -319 -29 -40 -82 -150 -166
-348 l-123 -289 -88 -102 c-49 -56 -179 -201 -288 -322 -304 -337 -295 -322
-276 -457 8 -53 7 -100 -1 -170 l-12 -96 -86 -116 c-47 -63 -129 -165 -182
-225 -61 -71 -144 -186 -229 -319 -73 -114 -188 -280 -255 -368 -67 -88 -162
-227 -210 -310 -101 -171 -241 -364 -394 -545 -162 -191 -175 -207 -236 -319
-80 -145 -81 -150 -50 -277 24 -100 25 -114 16 -224 -7 -84 -20 -150 -45 -233
-19 -64 -38 -133 -42 -153 -11 -62 -84 -208 -217 -435 -245 -422 -261 -453
-341 -671 -79 -217 -96 -274 -121 -402 l-14 -77 -118 -130 c-187 -206 -173
-182 -221 -387 -23 -100 -49 -236 -58 -303 l-15 -122 -126 -157 c-132 -166
-166 -220 -242 -390 -34 -77 -72 -138 -142 -230 -53 -69 -163 -226 -245 -350
-308 -464 -402 -607 -454 -695 -38 -64 -87 -125 -169 -210 l-117 -120 -119
-275 c-83 -192 -128 -284 -150 -305 -16 -16 -54 -60 -83 -97 -37 -47 -93 -96
-185 -165 -73 -53 -140 -107 -149 -118 -33 -39 -148 -306 -189 -438 l-42 -134
-101 -80 c-119 -95 -268 -186 -502 -309 l-169 -89 -146 -145 -147 -145 -67
-134 c-47 -95 -117 -206 -242 -385 -97 -138 -197 -273 -222 -301 -26 -27 -84
-96 -131 -152 l-84 -103 -316 -179 c-173 -98 -353 -199 -400 -224 -47 -25
-191 -120 -320 -211 -129 -90 -264 -185 -300 -210 -55 -38 -100 -56 -285 -115
-121 -39 -249 -77 -285 -85 -399 -95 -742 -178 -766 -185 -16 -6 -94 -20 -174
-31 -80 -12 -190 -31 -245 -42 -55 -11 -140 -26 -188 -33 -81 -13 -95 -19
-180 -74 -51 -33 -147 -95 -214 -138 l-121 -78 -149 -195 c-132 -174 -161
-205 -268 -294 -66 -55 -223 -187 -350 -293 -126 -107 -261 -219 -298 -251
-38 -31 -131 -98 -206 -147 -149 -97 -149 -97 -271 -260 -98 -130 -410 -505
-421 -505 -4 0 -18 -17 -30 -37 -31 -50 -206 -292 -334 -463 -56 -74 -104
-140 -108 -147 -17 -27 -90 -540 -141 -988 l-55 -480 -16 -716 -15 -716 -84
-174 c-45 -96 -86 -185 -89 -199 -3 -14 -24 -192 -46 -396 l-41 -371 11 -224
10 -224 -65 -268 -66 -268 80 -357 c76 -344 80 -368 105 -641 14 -155 28 -295
31 -309 3 -15 55 -178 116 -362 100 -302 117 -346 178 -450 36 -63 76 -134 88
-156 11 -23 96 -157 188 -298 143 -221 177 -280 239 -424 87 -200 123 -246
201 -256 27 -4 69 -3 94 3 25 5 115 17 200 27 215 23 368 16 512 -26 l108 -31
87 32 c92 32 248 58 263 43 4 -5 13 -51 20 -103 10 -89 13 -98 63 -170 46 -67
63 -82 142 -130 50 -30 151 -84 225 -121 74 -37 143 -76 152 -86 24 -28 35
-62 48 -150 6 -44 29 -128 51 -189 34 -90 55 -128 115 -208 57 -74 77 -110 86
-150 11 -46 22 -62 106 -147 53 -53 114 -127 139 -166 41 -68 133 -165 217
-229 35 -26 45 -29 146 -33 95 -4 119 -1 199 22 50 14 117 39 149 55 123 62
371 110 501 96 61 -7 65 -9 122 -68 93 -97 124 -161 149 -308 32 -187 46 -246
83 -343 43 -113 69 -144 155 -189 64 -34 72 -42 88 -85 10 -26 35 -91 55 -145
l38 -98 -53 -72 c-29 -40 -70 -103 -91 -142 -63 -115 -68 -120 -129 -134 -43
-10 -80 -30 -161 -89 -96 -71 -109 -85 -176 -187 -40 -60 -77 -127 -82 -147
-9 -35 1 -198 20 -326 l6 -42 -34 6 c-54 10 -224 83 -339 145 -113 62 -213 90
-326 93 -59 1 -64 -1 -190 -77 -118 -71 -136 -86 -198 -162 -61 -76 -74 -101
-144 -277 l-76 -193 0 -97 1 -96 -51 -23 c-35 -16 -92 -63 -181 -150 -104
-101 -147 -136 -215 -172 -111 -60 -195 -76 -263 -53 -62 21 -82 20 -133 -5
-64 -30 -72 -46 -284 -559 -68 -165 -169 -385 -239 -521 l-121 -236 -55 -317
c-59 -345 -60 -349 -158 -498 -30 -46 -106 -171 -170 -278 -114 -192 -117
-199 -226 -501 -115 -320 -120 -339 -147 -564 l-17 -140 -105 -140 c-61 -80
-184 -221 -291 -333 -222 -232 -195 -200 -382 -464 l-150 -213 -237 -130
c-130 -72 -322 -182 -427 -244 l-190 -114 -172 23 c-95 12 -185 19 -200 15
-47 -11 -385 -146 -435 -173 -26 -14 -55 -36 -64 -50 -23 -35 -133 -236 -167
-307 -16 -33 -61 -113 -99 -179 -88 -148 -93 -168 -74 -248 9 -35 38 -162 66
-283 53 -233 150 -610 170 -660 7 -16 25 -113 41 -214 25 -158 29 -214 29
-380 0 -152 5 -223 21 -316 70 -408 67 -353 29 -740 -18 -172 -25 -207 -76
-380 -54 -179 -64 -203 -180 -420 l-122 -230 -140 -420 -141 -420 -11 -315
c-6 -173 -17 -436 -26 -584 l-15 -270 -113 -250 c-63 -138 -116 -265 -120
-281 -7 -31 19 -604 31 -665 10 -56 142 -278 220 -370 126 -148 493 -602 522
-644 15 -23 240 -394 498 -826 259 -432 537 -892 618 -1023 80 -131 187 -313
237 -405 49 -92 148 -266 218 -387 l128 -220 210 -735 c178 -623 220 -781 272
-1035 34 -165 88 -401 121 -525 34 -124 81 -305 105 -403 37 -148 52 -192 90
-259 37 -65 48 -96 55 -152 26 -210 62 -680 68 -877 6 -220 7 -227 32 -265 14
-21 38 -70 54 -109 16 -38 37 -82 47 -97 23 -33 368 -299 503 -386 82 -54 126
-73 260 -118 l160 -54 90 15 c50 8 133 21 185 30 540 88 646 99 970 99 l255 0
162 -42 c162 -42 163 -42 258 -31 99 11 147 6 259 -27 31 -8 96 -14 170 -14
104 0 135 -4 219 -29 100 -30 147 -53 147 -73 0 -6 -22 -55 -50 -108 -41 -80
-52 -115 -65 -196 -26 -164 -31 -186 -64 -264 -18 -41 -47 -141 -66 -221 l-33
-146 13 -114 c12 -104 48 -259 95 -414 24 -79 107 -272 132 -308 11 -15 49
-88 84 -162 40 -85 106 -197 178 -303 114 -167 115 -168 253 -279 76 -61 165
-134 198 -161 33 -27 169 -122 302 -212 l243 -163 237 -57 c261 -64 566 -110
718 -110 l90 0 126 -94 c98 -73 146 -117 212 -196 101 -120 103 -127 101 -360
l-2 -145 -57 -165 c-32 -91 -86 -240 -121 -333 l-62 -167 -101 -117 c-64 -73
-105 -129 -111 -152 -5 -20 -93 -496 -194 -1058 l-186 -1021 -30 -1916 c-17
-1054 -28 -1928 -24 -1943 3 -16 198 -620 433 -1343 l426 -1315 5 -1860 5
-1860 164 -310 c90 -170 167 -314 171 -320 17 -23 677 -1240 865 -1595 45 -85
115 -213 155 -285 40 -71 219 -401 397 -733 l323 -603 -11 -47 c-15 -59 -252
-902 -279 -990 -18 -59 -20 -93 -20 -439 l0 -375 -282 -283 c-273 -272 -294
-291 -594 -522 l-310 -240 -675 -97 c-481 -69 -852 -129 -1294 -210 -341 -63
-667 -121 -725 -131 -58 -9 -204 -37 -325 -61 -121 -25 -326 -64 -456 -88
l-235 -44 -1135 25 c-624 13 -1181 23 -1239 21 l-105 -3 -107 -81 -107 -81
-143 33 c-79 18 -152 38 -163 44 -11 6 -54 16 -95 24 -41 8 -122 26 -180 41
-71 18 -117 25 -143 21 -49 -8 -1341 -653 -1376 -687 -36 -36 -455 -877 -476
-956 -5 -18 85 -501 197 -1053 17 -85 61 -206 229 -626 l208 -522 -15 -246
c-14 -242 -14 -248 6 -334 12 -48 28 -106 36 -130 12 -35 12 -60 3 -137 -8
-68 -8 -135 0 -247 16 -226 0 -346 -79 -592 -33 -104 -64 -194 -67 -200 -4 -6
-66 -87 -138 -181 -72 -93 -139 -181 -147 -195 -20 -31 -35 -104 -48 -224 -49
-440 -50 -459 -50 -821 0 -230 -6 -421 -15 -530 -8 -93 -15 -240 -15 -326 0
-133 4 -177 29 -300 20 -100 33 -202 41 -334 7 -119 24 -267 45 -395 39 -234
65 -536 65 -754 0 -136 -4 -167 -42 -355 l-42 -206 -158 -172 c-176 -194 -161
-166 -227 -430 -35 -139 -35 -149 21 -277 21 -50 58 -154 83 -233 59 -186 79
-374 69 -653 l-6 -185 -78 -135 c-43 -74 -121 -229 -173 -345 -93 -206 -96
-215 -166 -503 -46 -191 -83 -373 -106 -520 -31 -206 -34 -251 -37 -482 l-3
-256 98 -133 98 -133 15 -340 14 -339 -49 -242 c-73 -358 -83 -460 -79 -787
l3 -275 124 -325 c136 -357 123 -304 191 -773 24 -170 32 -269 42 -541 l11
-333 -379 -660 c-345 -601 -404 -709 -654 -1216 -151 -306 -278 -556 -281
-556 -3 -1 -41 41 -84 91 -122 146 -197 179 -321 143 -68 -20 -104 -42 -156
-98 -32 -33 -42 -38 -65 -33 -107 25 -176 15 -258 -37 -48 -31 -53 -32 -165
-33 -82 -1 -128 -6 -160 -18 -25 -10 -65 -24 -89 -32 -24 -8 -65 -28 -91 -44
-26 -17 -54 -30 -62 -30 -9 0 -47 -30 -85 -66 -37 -36 -86 -79 -109 -94 -23
-16 -48 -40 -58 -54 -11 -18 -25 -26 -46 -26 -27 0 -85 -16 -210 -57 -25 -8
-88 -15 -140 -16 -91 -2 -98 -4 -136 -34 -22 -17 -45 -42 -52 -55 -7 -13 -36
-36 -65 -51 -50 -28 -57 -29 -227 -32 -170 -3 -177 -4 -247 -34 -40 -17 -79
-31 -88 -31 -24 0 -99 -85 -135 -153 -75 -146 -133 -209 -275 -298 l-70 -44
-131 0 c-95 0 -135 -4 -147 -13 -14 -12 -21 -10 -49 10 -28 20 -45 23 -118 24
-66 0 -96 5 -131 22 -33 16 -68 22 -120 24 -137 3 -252 -7 -286 -25 -18 -9
-37 -17 -43 -17 -7 0 -23 -9 -37 -19 -13 -11 -45 -23 -71 -26 -133 -18 -269
-51 -293 -72 -8 -7 -21 -13 -27 -13 -7 0 -20 -4 -30 -9 -9 -6 -51 -18 -92 -27
-59 -14 -94 -30 -169 -81 -102 -68 -120 -72 -209 -52 -78 18 -132 5 -185 -44
-24 -23 -68 -62 -98 -87 -30 -24 -76 -68 -104 -97 -29 -30 -71 -61 -100 -73
-27 -12 -66 -33 -85 -48 -48 -37 -89 -63 -135 -87 -45 -23 -91 -82 -105 -136
-8 -28 -7 -54 3 -98 20 -87 14 -112 -39 -145 -40 -25 -48 -27 -72 -16 -47 21
-184 41 -242 35 -117 -13 -165 -27 -220 -66 -31 -21 -64 -53 -74 -70 -25 -42
-179 -196 -238 -238 -27 -19 -54 -44 -63 -57 -8 -12 -29 -25 -47 -29 -18 -4
-40 -13 -48 -19 -8 -7 -35 -24 -60 -39 -25 -14 -77 -57 -117 -95 -54 -51 -74
-79 -82 -110 -13 -46 -14 -47 -76 -31 -31 8 -61 8 -112 0 -37 -7 -96 -16 -131
-21 -34 -6 -70 -14 -80 -19 -9 -5 -55 -17 -102 -27 -46 -9 -91 -20 -100 -25
-21 -11 -225 -27 -285 -22 -27 2 -59 8 -70 13 -40 18 -107 31 -153 29 -26 -1
-63 6 -82 14 -19 8 -65 18 -101 22 -58 6 -73 12 -115 48 -27 22 -71 50 -99 63
-46 21 -62 23 -200 21 -139 -2 -152 -4 -180 -25 -30 -22 -32 -22 -97 -7 -37 8
-111 16 -165 18 -88 2 -104 -1 -155 -25 -31 -14 -85 -53 -121 -85 -35 -32 -93
-83 -129 -113 -36 -30 -76 -71 -89 -92 -24 -39 -48 -53 -112 -64 -38 -6 -73
-37 -170 -143 -16 -17 -36 -31 -45 -31 -9 -1 -35 -8 -57 -16 -22 -8 -84 -28
-139 -44 -103 -30 -151 -57 -220 -120 -25 -23 -56 -41 -79 -45 -20 -4 -40 -11
-43 -16 -12 -19 -25 -5 -94 103 -40 62 -94 136 -120 163 -25 28 -56 63 -68 78
-12 16 -39 43 -60 60 -22 18 -70 70 -107 117 -38 47 -80 96 -94 110 -14 14
-66 74 -114 133 -120 146 -151 174 -198 182 -51 9 -78 2 -222 -56 -67 -28
-196 -72 -286 -99 -90 -28 -178 -59 -196 -70 l-33 -20 -30 53 c-16 29 -35 70
-40 90 -14 50 -65 117 -159 208 -80 78 -115 102 -169 113 -27 6 -33 13 -39 44
-3 20 -21 60 -39 87 -28 42 -47 58 -122 96 -49 25 -114 53 -144 62 -171 48
-209 61 -255 84 -27 14 -63 36 -80 49 -66 50 -164 96 -251 119 -50 13 -120 39
-155 58 -35 19 -77 41 -94 50 -49 26 -146 67 -160 67 -7 0 -18 6 -24 14 -7 8
-27 18 -44 22 -18 3 -43 15 -56 25 -13 11 -30 19 -38 19 -8 0 -34 14 -59 30
-49 34 -84 43 -379 91 -104 17 -212 38 -240 45 -27 8 -81 21 -120 30 -77 18
-500 128 -555 145 -19 6 -69 26 -110 44 -41 18 -106 45 -145 60 -38 15 -135
55 -215 87 -80 33 -227 87 -327 120 -116 37 -187 66 -196 78 -27 39 -114 101
-162 116 -42 12 -53 20 -68 53 -26 57 -119 127 -202 153 -38 11 -95 23 -125
26 -39 3 -65 12 -90 31 -31 23 -44 26 -115 26 -72 0 -84 -3 -123 -29 -75 -51
-86 -85 -133 -401 -46 -318 -49 -496 -11 -645 17 -66 20 -122 25 -472 l6 -397
-62 -5 c-34 -3 -318 -21 -632 -41 -313 -20 -761 -54 -995 -74 l-425 -39 -590
84 c-394 57 -604 83 -633 79 -54 -8 -107 -58 -123 -117 -20 -75 5 -267 46
-348 34 -69 74 -197 84 -275 6 -38 22 -114 36 -167 14 -54 36 -140 49 -190 24
-92 51 -161 106 -268 15 -30 42 -89 60 -130 17 -41 42 -95 55 -120 13 -25 30
-67 38 -95 8 -27 29 -80 46 -117 27 -59 30 -74 25 -126 -18 -171 54 -255 250
-291 56 -10 76 -7 148 23 13 6 21 -2 36 -32 10 -22 41 -68 67 -102 49 -64 97
-99 259 -190 79 -44 81 -46 92 -95 6 -28 18 -66 28 -86 23 -49 180 -210 237
-242 25 -15 101 -41 169 -58 115 -29 129 -30 180 -19 30 7 64 17 74 22 16 9
25 5 50 -24 17 -19 45 -55 63 -80 40 -59 99 -93 220 -128 81 -24 101 -34 127
-64 34 -39 79 -73 141 -107 22 -12 68 -47 101 -79 58 -54 65 -57 136 -69 l76
-12 41 -91 c25 -53 48 -125 57 -172 8 -45 19 -91 24 -104 8 -17 4 -45 -15
-112 -14 -48 -23 -99 -20 -112 6 -23 -7 -86 -45 -213 -17 -57 -21 -105 -25
-255 -4 -189 -34 -516 -59 -650 -8 -41 -20 -120 -26 -175 -6 -55 -18 -130 -26
-168 -25 -103 -14 -147 49 -212 40 -41 64 -57 107 -69 46 -13 275 -35 373 -36
23 0 27 -4 27 -27 0 -27 32 -191 44 -230 5 -16 -1 -18 -78 -18 -76 0 -87 -3
-135 -32 -29 -18 -64 -36 -79 -40 -15 -3 -44 -17 -65 -31 -35 -23 -38 -24 -56
-8 -12 11 -51 20 -110 27 -110 14 -164 3 -231 -45 -33 -24 -60 -34 -100 -39
-30 -3 -68 -12 -85 -21 -16 -9 -36 -16 -43 -16 -33 0 -93 -55 -119 -110 -25
-52 -32 -58 -66 -64 -57 -10 -111 -50 -141 -106 l-27 -50 -55 0 c-35 0 -76 -9
-116 -25 -34 -14 -68 -25 -75 -25 -7 0 -35 -22 -61 -49 -26 -28 -60 -53 -77
-57 -16 -4 -43 -16 -59 -27 -27 -19 -30 -19 -55 -3 -64 42 -114 58 -158 52
-33 -4 -56 0 -96 17 -86 38 -176 60 -220 53 -126 -21 -228 -187 -198 -326 6
-30 17 -60 23 -67 8 -10 4 -19 -16 -38 -15 -13 -35 -45 -46 -70 -11 -25 -22
-45 -25 -45 -3 0 -29 13 -58 29 -28 16 -71 34 -95 41 -26 7 -59 27 -87 55 -53
51 -100 63 -174 45 -44 -10 -51 -9 -87 12 -46 27 -150 32 -177 9 -22 -18 -132
-18 -153 0 -11 9 -41 14 -79 14 -56 0 -66 -3 -106 -36 l-45 -37 -90 5 c-87 5
-217 -9 -239 -26 -5 -5 -26 -11 -46 -15 -21 -4 -51 -14 -69 -22 -23 -12 -45
-14 -83 -10 -88 11 -194 -9 -260 -50 -38 -23 -97 -46 -170 -65 -61 -16 -123
-37 -137 -46 -44 -28 -134 -96 -167 -126 l-32 -30 -41 17 c-28 11 -72 16 -145
16 -99 0 -107 2 -152 30 -26 16 -52 30 -58 30 -6 0 -38 28 -71 63 -98 104
-101 104 -438 113 -265 6 -293 9 -325 27 -52 29 -108 84 -145 142 -50 77 -144
180 -221 241 l-70 56 3 93 c3 65 -1 117 -14 168 l-17 74 32 144 c17 79 31 153
31 165 0 11 27 74 59 140 46 93 76 137 135 203 42 46 76 89 76 96 0 7 48 50
107 96 88 69 115 97 158 164 57 88 86 178 91 280 3 77 21 187 40 249 20 64 33
201 34 352 0 85 5 135 17 170 11 32 71 122 177 263 l161 214 0 86 c0 47 -3
163 -8 257 l-7 171 166 249 c91 137 180 274 198 304 44 76 103 214 120 281 8
30 31 89 52 130 24 49 45 112 61 186 13 62 43 168 67 235 44 124 68 238 85
404 9 82 15 102 66 200 30 60 70 131 87 157 l31 48 0 178 0 179 -38 66 c-33
55 -53 75 -122 123 -104 71 -128 108 -138 215 -5 60 -2 101 14 180 11 57 30
155 42 218 16 83 32 134 58 183 l36 69 105 53 c58 29 113 62 123 73 10 11 43
70 72 130 65 134 90 256 83 410 -4 88 -9 107 -50 207 -37 88 -49 130 -58 210
-35 303 -59 431 -114 606 -50 158 -102 401 -131 614 -13 95 -86 410 -201 869
-130 518 -122 443 -70 674 15 67 23 124 19 140 -15 65 -211 488 -275 597 -39
66 -79 134 -88 150 -10 17 -25 66 -35 109 -42 196 -169 450 -300 600 -33 39
-75 91 -92 116 -39 59 -89 254 -105 411 l-12 118 50 73 c40 59 57 100 97 228
41 133 49 177 61 310 8 85 22 187 31 225 11 45 17 119 18 205 2 124 0 138 -20
171 -15 23 -44 48 -81 67 -32 17 -102 66 -157 109 -55 44 -121 94 -147 112
-56 37 -57 45 -33 181 19 110 19 243 -1 295 -24 60 -42 149 -53 259 -7 71 -17
114 -36 152 -36 74 -75 207 -85 289 -10 75 -24 130 -39 148 -20 26 -41 223
-25 248 2 5 9 48 13 96 5 48 19 143 30 211 12 68 20 126 17 130 -2 4 -12 68
-21 142 -9 74 -25 160 -35 190 -15 43 -17 65 -10 95 5 22 10 65 10 96 0 31 6
90 14 130 51 260 51 262 29 331 -17 54 -19 76 -12 163 13 157 24 220 44 251
27 41 26 119 -3 166 -30 49 -76 69 -262 117 -139 35 -330 97 -462 149 -57 22
-136 76 -145 98 -3 9 1 28 9 43 39 67 30 144 -25 204 -17 19 -51 60 -74 90
-62 83 -207 190 -350 259 -68 33 -125 64 -129 69 -3 5 -21 16 -39 23 -20 9
-49 36 -70 64 -19 28 -52 63 -73 78 -36 28 -41 29 -157 30 -66 0 -129 3 -140
7 -25 9 -53 42 -116 139 -41 63 -58 81 -101 102 -29 14 -63 26 -77 26 -15 0
-51 15 -81 32 -30 17 -82 46 -115 62 -33 17 -82 44 -108 60 -39 23 -67 31
-140 37 -51 5 -114 14 -140 20 -56 13 -124 6 -169 -17 -25 -13 -48 -15 -122
-9 -100 7 -161 -3 -236 -40 -42 -21 -52 -22 -135 -14 -104 11 -108 12 -198 51
l-69 29 -136 -9 c-218 -14 -1272 28 -2347 94 l-920 57 -610 -22 c-1061 -38
-1173 -41 -2475 -70 -951 -22 -1316 -27 -1435 -20 -88 5 -279 13 -425 18
l-265 8 -174 82 c-96 45 -188 92 -205 104 -24 17 -45 22 -96 22 -88 0 -118
-22 -166 -123 -41 -87 -38 -82 -104 -205 -52 -98 -112 -256 -130 -341 -7 -33
-25 -71 -48 -102 -53 -70 -134 -154 -149 -154 -7 0 -68 31 -136 70 -67 38
-130 70 -138 70 -8 0 -21 6 -27 13 -9 8 -46 12 -110 12 -91 0 -99 -2 -134 -29
-52 -39 -95 -114 -124 -214 -14 -47 -47 -133 -73 -191 -27 -58 -52 -116 -55
-127 -17 -57 -73 -137 -146 -208 l-81 -79 -107 8 c-269 21 -339 8 -462 -86
-93 -71 -134 -113 -218 -225 -75 -99 -67 -95 -234 -114 -90 -10 -101 -9 -143
9 -126 56 -401 54 -537 -4 -13 -5 -19 0 -24 22 -10 39 -28 73 -68 125 l-34 46
-4 143 c-3 129 -5 148 -26 180 -45 74 -47 74 -327 74 -234 0 -255 -2 -325 -23
-41 -13 -95 -35 -119 -49 l-43 -25 -67 31 c-37 17 -78 31 -90 31 -13 0 -152
-20 -309 -45 -158 -24 -341 -51 -407 -60 -216 -27 -243 -34 -280 -71 -19 -19
-39 -51 -44 -71 -7 -23 -11 -177 -11 -395 l0 -357 -79 -173 c-142 -315 -174
-367 -247 -403 -78 -39 -130 -95 -150 -162 -24 -78 -82 -137 -144 -147 -24 -4
-49 -11 -55 -16 -31 -26 -109 -43 -220 -50 -81 -5 -140 -14 -180 -28 -33 -12
-109 -32 -170 -46 -60 -14 -137 -36 -169 -49 l-60 -25 -19 39 c-20 42 -56 72
-97 82 -47 13 -1155 118 -1190 114 -20 -3 -330 -107 -690 -232 -360 -126 -659
-228 -665 -228 -5 0 -251 107 -545 238 -294 131 -555 246 -580 256 -25 9 -209
88 -410 174 -509 218 -719 305 -760 311 -54 9 -403 -56 -846 -157 -219 -50
-421 -96 -449 -101 -27 -5 -57 -15 -65 -22 -8 -7 -60 -37 -115 -66 -132 -70
-189 -107 -291 -188 -106 -85 -129 -125 -129 -232 0 -82 11 -106 84 -182 l35
-38 -96 0 c-137 0 -151 -5 -220 -71 -35 -34 -75 -63 -95 -68 -18 -5 -57 -27
-86 -47 -38 -28 -66 -40 -107 -45 -30 -4 -69 -10 -85 -14 -26 -6 -33 -3 -44
18 -27 50 -371 267 -651 410 -107 55 -230 122 -272 148 -83 53 -313 169 -333
169 -7 0 -23 20 -35 45 -35 72 -63 86 -198 97 -64 5 -143 7 -174 5 -36 -3 -76
1 -105 9 -27 8 -100 22 -163 30 -63 8 -158 28 -211 44 -160 50 -249 63 -333
50 -40 -6 -146 -11 -237 -11 -146 -1 -173 2 -249 24 -72 21 -114 26 -280 32
-178 6 -201 5 -263 -14 l-69 -20 15 22 c15 23 47 161 47 203 0 19 11 29 55 49
89 43 139 128 165 286 16 90 2 138 -55 194 -68 66 -116 69 -338 25 -213 -42
-323 -106 -348 -203 -12 -45 -4 -39 -172 -123 -38 -19 -91 -39 -118 -45 -28
-6 -77 -22 -109 -35 -107 -43 -174 -71 -233 -98 -88 -40 -272 -92 -367 -105
-47 -6 -98 -15 -115 -19 -17 -5 -45 -5 -65 1 -48 13 -145 1 -197 -24 -67 -32
-98 -70 -128 -156 -30 -83 -75 -149 -152 -225 -96 -94 -250 -128 -348 -76 -55
29 -328 97 -455 113 -155 20 -246 42 -285 69 -16 11 -108 97 -202 192 -198
197 -211 205 -420 249 -93 20 -136 24 -181 19 -53 -6 -64 -3 -128 29 -38 19
-125 74 -193 120 -123 85 -124 86 -250 253 -69 93 -166 208 -216 257 -89 88
-212 180 -263 198 -96 32 -1716 241 -2282 294 -210 20 -1504 151 -1630 165
-52 6 -139 22 -194 36 -54 13 -144 27 -200 31 l-101 6 -27 41 c-15 22 -33 48
-39 57 -10 13 -6 24 18 60 17 25 36 62 42 84 14 51 14 205 0 319 -9 75 -8 103
6 178 15 77 16 100 6 159 -16 85 -46 129 -137 197 -38 29 -98 74 -134 102 -36
27 -80 54 -98 61 -20 6 -39 23 -49 42 -20 39 -102 121 -140 141 -16 8 -50 41
-76 75 -56 71 -92 98 -155 117 -25 8 -55 20 -66 27 -12 8 -43 19 -70 26 -28 7
-66 26 -88 45 -21 18 -75 53 -121 78 -199 109 -246 136 -306 177 -35 24 -96
58 -135 76 -39 19 -83 42 -96 53 -14 11 -51 26 -83 33 -40 10 -62 21 -76 40
-34 45 -88 162 -96 204 -4 22 -19 65 -34 95 -16 30 -33 67 -39 81 -6 15 -23
42 -39 60 -16 19 -39 50 -51 70 -12 20 -41 49 -64 64 -24 16 -90 76 -148 134
-58 58 -142 132 -187 164 -45 32 -91 69 -101 82 -23 29 -79 73 -187 145 -44
29 -98 67 -120 84 l-39 31 -323 2 -323 3 -82 32 c-106 42 -177 44 -226 8 -43
-32 -79 -93 -88 -148 -4 -29 -11 -41 -19 -38 -38 14 -139 28 -168 22 -19 -3
-73 -34 -121 -67 -115 -80 -137 -88 -274 -99 -64 -5 -135 -12 -157 -15 -37 -6
-47 -2 -119 47 l-78 53 -186 0 c-108 0 -221 -6 -267 -13 -136 -23 -229 -44
-258 -58 -21 -11 -37 -12 -65 -5 -20 5 -66 17 -102 27 -44 11 -115 18 -220 20
-85 2 -182 8 -215 15 -53 10 -68 9 -130 -9 -38 -11 -91 -28 -117 -38 -45 -18
-50 -18 -135 -1 -106 22 -200 11 -273 -29 -43 -24 -46 -25 -137 -13 -72 9
-141 9 -302 -1 -192 -11 -211 -11 -257 6 -31 11 -82 18 -139 20 -49 1 -121 7
-160 13 -53 9 -83 9 -126 0 -65 -13 -114 -9 -179 16 -50 19 -176 17 -307 -4
l-73 -12 -37 30 c-21 17 -65 42 -97 56 -32 14 -79 40 -102 56 -65 44 -124 69
-168 69 -49 0 -152 -26 -191 -49 -17 -10 -52 -21 -78 -24 -27 -4 -57 -13 -67
-20 -17 -12 -31 -11 -92 5 -47 13 -91 18 -125 14 -47 -4 -56 -1 -90 26 -56 45
-132 78 -181 78 -52 0 -87 14 -189 76 -106 64 -204 145 -277 229 -33 39 -80
85 -105 104 -25 19 -77 59 -115 90 l-69 56 -101 1 c-113 1 -99 -6 -220 105
-84 78 -271 218 -320 240 -25 11 -64 19 -99 19 -49 0 -66 5 -103 31 -92 63
-117 69 -295 71 -90 1 -193 -1 -229 -6 -78 -9 -146 11 -253 76 -102 61 -154
63 -296 9 -29 -11 -76 -25 -105 -30 -28 -6 -87 -18 -131 -27 -113 -23 -156
-50 -192 -121 -19 -39 -39 -63 -59 -72 -93 -43 -179 -103 -266 -189 l-97 -95
-88 22 c-75 19 -110 22 -238 19 -83 -2 -228 -14 -323 -27 l-173 -24 -82 39
c-77 37 -87 39 -177 39 -112 0 -150 -16 -240 -99 -83 -78 -162 -124 -264 -156
-50 -15 -109 -35 -130 -44 -51 -21 -74 -20 -116 6 -55 35 -139 30 -215 -12
-170 -94 -170 -93 -178 -51 -10 47 -68 98 -122 107 -39 5 -302 -20 -431 -42
-27 -5 -33 -1 -60 43 -17 26 -43 54 -60 62 -16 7 -38 18 -49 24 -117 65 -143
69 -246 38 -77 -23 -417 -121 -440 -127 -13 -3 -19 8 -27 50 -24 121 -43 167
-83 206 l-40 39 2 93 c1 51 -1 125 -6 163 -9 89 11 164 62 229 33 42 39 61 66
199 31 157 38 249 24 303 -7 28 -3 37 38 85 25 30 48 65 51 79 11 48 35 89 64
110 53 38 92 106 96 166 3 62 8 72 77 166 48 67 51 74 52 132 0 57 3 65 48
125 26 35 47 71 47 80 0 9 6 27 13 41 8 14 19 48 26 75 7 28 25 70 41 95 31
48 49 112 50 172 0 20 7 63 16 95 20 76 28 264 13 327 -9 38 -9 57 2 88 16 49
16 84 1 173 -17 97 -50 158 -129 240 -68 71 -87 102 -184 310 -62 131 -70 154
-79 217 -8 57 -36 143 -70 208 -12 25 -34 43 -78 66 l-60 30 13 30 c7 17 16
51 20 75 4 24 18 69 32 99 36 77 42 233 13 320 -24 71 -25 106 -5 201 9 40 15
98 14 128 -2 116 13 225 35 256 19 27 21 46 24 204 5 246 -16 345 -81 380 -23
13 -24 17 -24 115 0 93 -5 133 -54 381 -15 77 -74 167 -159 240 -96 83 -166
130 -207 139 -35 8 -61 32 -179 171 -97 113 -149 169 -193 209 -64 57 -71 66
-71 84 -1 9 -12 49 -26 87 -27 72 -47 184 -45 244 1 19 10 48 21 66 11 17 22
56 25 86 6 57 -2 91 -63 274 -65 191 -64 186 -47 280 19 99 14 137 -27 202
-17 26 -36 66 -43 89 -7 23 -34 71 -59 108 -45 63 -88 168 -120 291 -15 59
-24 77 -64 127 -16 21 -32 56 -36 78 -11 67 -91 225 -130 255 -50 38 -77 134
-86 305 -9 151 -25 211 -87 313 -44 74 -154 185 -220 223 -27 15 -68 41 -93
58 -25 17 -68 38 -95 48 -64 21 -123 77 -158 150 -28 57 -84 112 -121 119 -11
2 -50 42 -88 89 -146 183 -215 259 -252 280 -21 13 -48 34 -60 47 -11 13 -35
33 -52 44 -28 17 -32 25 -36 77 -3 32 -16 78 -28 101 -13 27 -19 52 -16 69 19
85 25 191 16 243 -9 50 -8 62 11 105 17 37 22 70 23 134 1 47 4 90 8 96 22 33
26 103 13 213 -8 64 -19 131 -24 150 -26 85 -100 151 -186 167 -48 8 -88 28
-135 65 -181 145 -193 162 -219 299 -7 36 -21 79 -31 95 -21 35 -100 84 -182
116 -51 19 -59 26 -72 63 -8 22 -17 60 -20 84 -4 23 -18 73 -33 109 -23 58
-41 81 -132 171 -58 57 -118 111 -132 119 -18 11 -42 52 -83 142 -45 102 -58
144 -66 209 -5 45 -14 99 -20 120 -16 63 -101 170 -169 214 l-59 40 -65 151
c-36 84 -70 170 -77 192 -26 83 -68 162 -113 213 l-47 53 0 75 c0 77 13 115
74 214 60 96 72 186 48 343 -20 136 -28 152 -93 214 -88 84 -109 126 -109 213
0 77 -27 199 -60 271 -24 53 -25 114 -4 211 9 44 13 90 9 117 -8 53 -39 151
-57 180 -18 30 -114 96 -193 133 -55 25 -74 29 -113 25 -45 -6 -49 -4 -81 31
-28 30 -43 64 -74 167 -68 229 -71 364 -11 611 l25 101 -26 98 c-14 53 -25
107 -25 119 0 59 -23 99 -113 194 -123 130 -221 262 -248 334 -13 36 -22 85
-24 131 -1 39 -9 92 -18 117 -24 64 -21 120 12 240 16 58 35 132 42 165 7 33
33 101 58 150 40 81 45 97 44 160 0 80 -22 163 -64 247 -16 31 -29 68 -29 82
0 24 0 24 128 28 103 3 134 7 162 23 32 18 60 20 321 25 l286 5 35 27 c70 53
98 131 77 212 -10 41 -9 54 14 119 14 39 29 90 33 112 4 22 15 51 24 65 30 42
32 80 9 180 -11 52 -25 114 -29 136 -5 23 -34 118 -64 210 -70 218 -86 287
-86 373 0 45 -8 91 -22 133 -19 56 -21 86 -23 273 l-1 210 31 28 c43 39 73 53
130 62 67 9 127 49 222 148 112 117 132 146 139 203 3 27 23 103 45 169 63
195 69 228 69 367 0 88 6 160 21 235 18 92 20 128 14 240 -6 105 -4 142 9 185
28 97 70 352 70 428 1 41 -6 147 -14 235 -17 186 -18 407 -1 485 6 30 20 89
31 130 11 41 20 107 20 145 0 39 5 97 11 130 12 72 21 270 23 540 1 125 7 226
15 270 14 69 14 72 -17 181 -38 133 -39 166 -9 242 49 120 59 265 45 677 -4
119 -2 157 10 185 8 19 26 80 39 135 28 118 47 434 30 522 -6 31 -6 66 0 89 8
35 12 38 60 49 33 8 73 27 107 53 30 23 94 60 142 82 73 34 110 44 223 60 75
10 186 28 246 40 61 11 180 25 265 30 85 6 192 20 237 30 62 15 119 20 235 20
84 1 187 5 228 10 41 5 161 12 265 15 261 8 260 8 351 66 43 28 106 64 139 81
58 30 63 30 159 25 55 -3 159 1 231 8 146 14 171 23 399 137 65 33 191 86 280
118 225 81 359 139 494 214 65 36 140 71 167 79 28 9 127 19 220 24 l170 9
115 51 c63 29 147 63 185 78 39 14 158 72 265 129 107 57 233 123 280 146 47
23 148 90 225 149 l140 106 97 -2 c82 -1 119 -8 235 -42 76 -23 187 -50 247
-61 127 -23 280 -69 491 -146 152 -55 251 -77 730 -159 77 -13 181 -33 230
-43 50 -11 105 -17 123 -15 39 6 153 104 298 255 92 97 110 111 205 158 110
56 276 173 307 218 45 65 132 270 147 347 10 53 22 86 35 96 11 9 52 25 92 34
97 24 118 35 192 108 46 45 65 72 69 97 16 86 27 224 27 332 l0 117 55 127
c39 91 57 149 65 206 20 143 64 204 174 236 28 8 115 50 193 94 l141 79 264
45 c262 45 264 45 383 35 156 -14 330 -56 480 -115 66 -26 202 -70 303 -96
l182 -49 113 21 c124 23 150 37 277 155 60 55 69 71 180 298 93 188 122 260
139 333 l22 93 -26 97 c-15 53 -42 122 -60 152 -30 49 -135 176 -218 264 -61
65 -107 202 -107 324 0 48 3 54 30 71 17 10 59 29 93 42 98 38 134 81 186 227
49 140 40 136 151 74 36 -20 92 -51 125 -69 121 -66 151 -64 278 19 l80 52
271 7 c843 23 1165 42 1499 89 191 27 270 59 487 197 69 44 153 94 187 112 78
42 90 56 154 170 43 79 52 104 53 147 1 72 -24 103 -166 206 l-119 87 -292 97
c-221 73 -324 113 -422 163 l-130 66 -150 1 c-171 2 -290 21 -345 58 -33 22
-37 29 -48 97 -12 69 -18 83 -107 209 -52 74 -149 200 -215 280 -101 122 -125
157 -151 225 -54 141 -61 322 -18 523 l19 92 -34 133 c-53 209 -53 200 -9 234
91 72 177 116 315 162 l143 48 446 6 c335 5 491 12 630 26 101 11 236 23 299
27 63 3 201 19 305 34 164 25 212 36 342 83 91 32 176 70 215 95 91 59 138 74
196 62 94 -21 239 -74 336 -123 71 -36 111 -50 140 -50 63 0 259 88 310 138
23 23 100 137 172 255 128 211 131 217 166 350 50 185 51 189 34 325 -13 110
-19 132 -79 270 -85 196 -129 336 -166 520 -17 83 -52 230 -79 328 -27 98 -45
180 -40 183 20 12 180 63 252 80 57 13 108 35 185 80 94 54 113 70 168 140 72
92 87 120 108 202 15 58 15 68 -5 174 -17 90 -31 130 -66 198 -57 108 -62 114
-161 185 -75 53 -88 67 -136 150 -49 84 -55 101 -66 186 -16 129 -60 369 -71
388 -5 9 -56 72 -114 141 -61 73 -140 183 -190 265 -59 96 -96 147 -119 162
-34 21 -34 21 -40 118 l-6 98 62 161 61 161 -1 125 c-2 173 -19 343 -49 485
-23 112 -24 127 -14 224 6 57 8 117 4 135 -9 45 -209 472 -236 505 -13 16 -74
75 -137 132 -110 100 -116 108 -162 205 -26 55 -114 206 -197 335 -162 254
-157 243 -243 558 -25 92 -27 110 -17 154 6 28 8 75 5 105 l-6 55 100 106
c111 117 109 116 283 151 70 14 160 22 305 27 199 6 210 5 336 -21 72 -15 208
-52 303 -82 121 -38 244 -67 416 -98 l243 -45 174 24 c190 26 272 51 709 217
107 41 236 82 285 92 50 10 145 36 213 58 112 36 129 45 190 97 137 118 163
154 270 367 148 293 159 308 336 456 83 70 197 162 253 206 185 142 348 288
484 434 74 78 163 170 199 203 170 156 180 170 242 320 35 85 69 192 88 271
l30 132 0 321 0 320 -110 453 c-60 249 -117 468 -126 486 -10 18 -31 41 -48
51 -17 10 -304 109 -637 220 l-606 201 -52 373 c-28 204 -71 509 -94 677 l-43
305 86 145 c48 80 91 154 98 165 6 11 102 173 213 360 l203 340 432 428 433
428 97 152 c54 84 154 224 222 311 105 135 136 184 206 325 46 91 86 181 90
200 5 26 -7 84 -44 222 l-50 187 7 128 8 129 135 82 c74 45 147 92 162 103 15
11 90 125 166 253 106 177 167 294 257 492 64 143 122 277 127 299 11 50 -7
307 -33 445 -27 150 -26 368 2 493 21 89 25 98 105 201 70 91 111 131 252 247
114 94 203 178 276 259 58 66 114 122 124 125 140 43 252 58 562 77 l325 20
180 50 c99 28 356 108 570 179 227 75 517 162 695 209 208 54 407 115 625 191
l320 111 315 10 c301 10 329 12 640 59 293 45 350 51 580 58 l255 9 250 94
250 94 155 151 155 151 185 95 c145 75 236 113 425 179 239 83 241 84 390 183
88 58 209 127 292 166 78 37 153 74 167 83 13 9 96 79 184 155 169 149 164
142 237 317 28 67 51 158 91 355 l54 265 -30 180 c-17 99 -58 308 -92 465
l-61 285 -95 200 c-52 110 -125 267 -163 348 -49 106 -103 200 -188 326 -81
121 -150 239 -218 376 l-100 200 -212 750 -213 750 -177 289 -176 289 -80 236
-81 236 42 166 42 166 92 139 c52 76 106 155 120 174 19 24 50 108 98 260 39
124 73 239 76 255 3 17 10 135 16 262 11 232 11 233 -20 463 -22 166 -51 315
-100 528 -75 322 -103 506 -120 782 -10 165 -14 187 -67 380 -60 221 -165 498
-319 843 l-87 192 -18 238 -18 239 133 317 c127 303 143 334 363 721 259 457
360 668 430 905 42 143 45 160 55 342 9 160 8 229 -6 405 -9 117 -16 312 -16
433 l0 220 45 149 45 148 107 114 c222 235 203 203 311 514 l96 275 3 245 4
245 -40 245 c-22 135 -148 758 -280 1384 l-241 1139 75 706 c42 388 89 828
106 977 l30 271 -211 734 -211 734 17 54 c9 29 152 362 318 740 l301 686 0
805 0 805 -446 775 c-354 613 -1379 2451 -1476 2645 -12 24 -23 72 -27 120
-15 169 -206 2012 -212 2040 -13 61 -42 93 -117 128 -40 19 -288 120 -552 226
l-480 192 -620 515 -620 515 -202 604 -201 605 109 747 110 748 -95 375 c-52
206 -152 607 -221 890 -84 339 -134 525 -148 545 -11 17 -408 512 -881 1100
l-860 1070 -741 745 -741 745 -331 655 c-182 360 -356 702 -387 759 -31 58
-56 110 -56 116 0 25 114 481 212 850 l101 380 129 280 c72 154 175 386 230
515 77 182 116 260 171 343 l72 108 155 78 c85 43 244 111 352 152 l198 74
202 148 c196 143 215 155 528 312 179 90 335 174 346 187 12 12 111 151 221
308 l200 285 78 335 c43 184 88 389 100 455 13 66 47 199 75 295 72 238 107
296 378 620 206 246 221 267 432 605 193 308 240 375 389 558 160 195 178 214
318 324 81 64 222 185 313 268 91 83 244 219 341 302 97 84 186 167 197 185
11 18 68 122 126 230 l105 197 41 223 c74 410 82 439 158 553 55 83 89 122
210 230 274 247 541 558 737 861 l124 191 46 249 45 250 -45 304 c-25 168 -50
331 -56 363 -10 59 -50 173 -219 627 -91 245 -103 285 -155 530 -39 183 -76
326 -120 460 -128 389 -119 338 -125 721 l-5 337 -26 36 c-14 19 -112 126
-218 236 l-194 201 -256 171 -256 172 -535 218 c-294 121 -562 225 -595 233
-33 7 -377 57 -765 111 l-705 97 -965 428 c-959 425 -968 428 -1410 584 l-445
156 -383 70 -384 71 -322 141 -321 142 -325 3 c-179 2 -464 -1 -635 -7 l-310
-11 -325 -78 -325 -78 -144 -102 c-79 -56 -149 -102 -155 -102 -6 0 -200 63
-432 140 l-420 140 -495 398 c-272 218 -512 411 -534 428 -22 17 -575 372
-1230 789 -926 590 -1215 770 -1305 810 -63 29 -355 172 -647 319 l-533 266
-459 332 c-752 544 -1031 742 -1070 759 -222 100 -359 154 -544 210 -120 37
-220 69 -221 71 -2 1 -45 57 -96 123 -137 178 -139 179 -310 265 l-155 78
-175 178 c-155 158 -194 192 -340 293 l-165 115 -255 57 -255 57 -286 126
-287 126 -308 78 -309 79 -180 90 -180 91 -142 168 c-178 211 -341 469 -439
698 -59 137 -73 160 -181 298 -65 82 -131 162 -148 176 -17 15 -88 58 -158 97
l-128 69 -128 151 c-94 111 -155 196 -236 328 -117 192 -121 197 -337 384
-131 113 -149 125 -434 282 -319 177 -308 172 -698 286 -113 34 -133 36 -435
55 -174 11 -354 25 -401 30 -47 6 -326 33 -621 60 l-535 48 -261 116 c-144 64
-323 137 -399 162 l-139 47 -120 -22 c-108 -19 -134 -20 -265 -11 -80 5 -224
10 -320 10 l-175 0 -101 40 c-86 35 -117 54 -220 139 -116 95 -123 104 -215
247 -87 134 -104 170 -178 364 l-82 215 -109 130 -109 130 -46 163 c-27 95
-56 228 -70 321 -22 144 -30 172 -90 322 l-65 164 -148 176 c-101 121 -223
248 -392 411 -135 129 -328 320 -430 424 -102 104 -275 269 -385 366 l-200
177 -74 203 c-59 166 -92 237 -176 389 -57 103 -109 197 -117 208 -7 12 -113
85 -235 162 l-221 139 -220 253 c-283 325 -416 455 -544 531 -94 56 -100 62
-194 187 -110 147 -140 176 -192 184 -82 13 -76 8 -95 97 -9 46 -31 229 -47
408 -33 347 -37 373 -73 435 -22 39 -23 42 -10 135 15 105 11 133 -22 200
l-23 45 29 33 c16 18 195 132 397 254 332 201 382 227 522 281 110 42 172 72
213 104 32 24 92 57 135 74 l77 31 317 -11 316 -11 234 45 c128 24 311 56 407
71 158 23 184 25 282 15 113 -11 133 -8 239 34 51 20 235 152 321 229 l57 51
198 34 c298 51 722 157 781 195 76 50 90 145 35 235 -18 29 -31 55 -29 57 5 5
51 13 487 84 333 54 359 62 393 120 28 47 30 92 7 156 -26 69 -34 112 -55 292
-8 73 -23 154 -31 179 -17 51 -15 86 12 211 15 65 23 81 72 135 124 138 160
198 238 392 l48 120 5 232 6 232 61 63 c33 35 91 100 129 146 66 81 123 122
204 147 50 15 172 98 205 138 19 23 121 170 228 327 106 157 205 301 219 320
40 53 54 127 39 203 -11 55 -100 245 -135 287 -16 18 -165 270 -165 277 0 12
-155 250 -192 295 -30 37 -37 52 -32 75 10 53 -49 208 -116 303 -33 47 -60 90
-60 97 0 23 -52 115 -84 146 -18 18 -52 45 -77 62 -51 35 -58 44 -81 107 -21
59 -83 154 -115 175 -22 14 -23 20 -17 77 8 75 -5 125 -50 195 -23 35 -41 81
-52 130 -19 91 -56 151 -166 269 -100 107 -114 134 -126 260 -11 105 -37 180
-86 247 -12 17 -39 59 -58 95 -99 177 -210 230 -341 161 l-55 -29 -4 52 c-5
55 16 107 88 227 19 31 37 77 40 102 8 59 -20 191 -51 237 -55 82 -55 83 12
153 69 72 105 137 123 220 17 85 35 121 75 154 l35 29 58 -57 c51 -49 66 -58
108 -63 60 -8 143 13 193 48 19 14 92 86 162 161 118 124 128 138 134 182 4
27 10 64 14 83 l7 35 82 6 c65 5 96 13 146 39 36 18 70 29 76 25 6 -4 39 -13
72 -21 46 -11 69 -12 101 -3 69 18 165 68 172 89 3 10 22 29 41 41 33 20 78
72 151 175 42 59 50 115 28 191 -14 47 -16 80 -11 178 3 69 2 135 -4 154 -22
77 -88 139 -158 148 l-40 5 -4 79 c-4 64 -9 85 -32 118 -39 56 -89 87 -180
111 -84 23 -168 78 -224 146 -45 54 -112 84 -191 84 -65 0 -67 1 -109 45 -30
31 -59 49 -97 61 -30 10 -55 22 -55 26 0 5 6 21 14 36 7 15 17 42 21 60 3 18
22 58 41 89 39 65 48 93 70 218 8 50 22 100 30 112 8 12 19 55 25 95 10 69 13
74 48 96 20 13 43 35 52 50 9 16 29 34 45 42 92 46 157 109 186 180 3 9 22 42
42 72 84 132 70 272 -38 381 -36 35 -44 50 -49 94 -6 52 -32 114 -70 164 l-20
27 23 32 c27 38 38 143 21 206 -23 85 -114 140 -261 159 -30 4 -98 21 -150 39
-88 29 -96 34 -112 68 -23 48 -82 104 -124 118 -37 13 -64 47 -42 54 7 3 65
16 129 31 103 23 122 31 168 68 28 23 70 56 93 72 23 17 58 52 77 80 34 47 36
53 36 131 0 73 -3 85 -30 124 -61 89 -217 185 -317 197 -37 4 -68 17 -101 39
-30 21 -66 36 -96 40 -41 5 -50 11 -66 40 -17 32 -98 94 -123 94 -7 0 -18 15
-25 33 -8 17 -28 47 -46 66 -17 18 -47 64 -67 103 -33 61 -44 73 -103 108 -67
39 -170 74 -252 85 -44 5 -49 9 -82 64 -22 34 -50 65 -71 76 -19 10 -40 30
-47 43 -8 13 -33 35 -57 49 -44 26 -62 54 -62 97 0 13 -31 135 -70 273 l-70
249 11 86 c16 131 9 146 -121 274 l-111 109 186 379 185 379 158 476 157 476
-2 90 c-4 136 -20 235 -45 270 -12 16 -63 67 -115 113 -57 51 -93 91 -93 103
0 11 12 47 27 82 21 51 26 75 24 132 -4 100 -4 149 0 247 4 79 2 89 -21 120
-83 112 -86 120 -94 224 -5 69 -15 118 -34 168 -23 62 -27 84 -26 181 1 141
29 422 44 440 6 8 43 22 82 32 56 14 82 27 119 61 74 66 104 114 274 432 123
231 171 333 222 470 l65 175 13 240 c15 265 15 265 86 655 l50 274 86 206 c47
113 119 290 159 394 41 104 75 191 77 193 2 2 36 0 75 -3 l70 -7 165 -127 c91
-71 275 -209 410 -308 289 -211 421 -285 671 -375 l171 -61 140 1 c214 1 329
16 370 47 32 25 135 162 220 293 l39 61 161 50 c88 28 207 63 265 78 175 46
406 188 656 405 88 76 112 105 191 226 63 96 99 163 119 222 l29 84 65 18 c36
10 72 18 81 19 9 0 70 -31 135 -69 113 -65 125 -70 237 -90 102 -18 128 -19
196 -9 l79 11 59 -46 c60 -46 60 -46 66 -109 3 -35 14 -102 22 -149 20 -104
38 -130 153 -212 l80 -57 232 -35 231 -35 257 8 257 8 61 33 c34 18 104 68
157 111 91 76 100 86 203 252 59 95 140 214 180 264 67 85 80 96 171 144 228
122 217 113 451 368 119 130 227 251 239 268 12 17 30 59 39 93 l18 63 330
312 c337 318 480 442 545 475 20 10 68 26 106 36 39 10 80 25 91 32 12 8 67
18 122 22 78 7 108 14 131 31 17 11 84 81 151 155 l120 133 92 22 c154 35 309
90 387 137 85 51 141 64 481 113 l205 29 214 84 214 84 121 -29 121 -28 220
16 c170 12 256 13 376 6 l154 -10 130 -62 c146 -69 312 -138 365 -151 24 -6
88 -1 211 17 171 24 267 52 379 109 20 10 41 10 110 -1 227 -37 244 -37 379
-8 93 20 141 36 183 61 l58 34 128 -35 c70 -19 174 -44 230 -55 l102 -21 128
28 127 27 101 97 101 98 167 69 168 68 66 -13 c127 -26 187 -46 278 -95 l90
-49 47 -99 c47 -99 49 -102 205 -248 175 -163 225 -196 579 -372 l162 -80 251
-42 c221 -37 270 -48 399 -94 108 -40 147 -58 150 -72 2 -10 25 -49 51 -88 27
-38 61 -106 76 -150 27 -75 35 -86 129 -180 55 -55 114 -107 130 -115 17 -8
52 -31 80 -50 l49 -35 196 -7 c107 -3 206 -7 220 -7 41 -2 51 -13 41 -47 -5
-16 -30 -105 -55 -199 l-44 -170 -5 -575 c-5 -624 -1 -684 49 -759 12 -20 26
-49 30 -66 4 -16 30 -63 58 -103 28 -40 65 -94 83 -120 17 -26 39 -56 50 -67
20 -22 20 -37 12 -250 -4 -118 -4 -121 24 -161 20 -30 31 -65 42 -131 9 -58
34 -141 69 -232 31 -77 67 -179 81 -227 40 -131 52 -145 158 -199 87 -44 99
-47 202 -55 61 -5 134 -16 164 -24 30 -9 107 -19 173 -22 l119 -7 139 -118
c76 -65 170 -136 208 -158 60 -35 82 -42 178 -54 103 -14 114 -17 163 -55 32
-24 70 -42 93 -46 22 -4 56 -15 76 -25 56 -28 99 -32 184 -20 95 14 139 38
309 176 158 127 162 129 233 137 119 13 198 79 267 224 63 133 80 153 225 267
159 125 277 203 459 305 72 39 159 93 195 119 123 88 165 109 335 169 94 33
213 82 265 110 83 43 121 56 295 96 110 25 243 53 295 61 52 9 163 29 247 46
l151 30 69 -44 c54 -35 86 -47 158 -61 61 -12 112 -30 160 -56 66 -36 114 -48
248 -65 26 -4 73 -15 103 -25 31 -11 78 -23 105 -26 58 -8 55 -3 185 -257 67
-130 88 -160 162 -238 112 -118 153 -146 307 -209 85 -35 154 -71 200 -105
119 -87 128 -92 211 -116 l81 -23 71 -121 c67 -113 74 -122 130 -152 41 -23
78 -55 124 -110 35 -43 88 -94 116 -113 46 -31 54 -42 68 -90 40 -141 63 -179
180 -300 67 -69 131 -147 161 -195 71 -115 323 -610 323 -635 0 -29 24 -92
140 -365 149 -352 191 -477 200 -601 6 -82 12 -111 36 -158 33 -65 38 -68 220
-149 97 -43 157 -80 293 -178 94 -68 183 -127 199 -131 41 -12 89 1 182 47 82
41 195 80 305 105 36 8 69 8 115 1 36 -6 144 -13 240 -17 136 -4 190 -10 240
-26 120 -38 475 -192 525 -227 49 -36 51 -36 150 -36 95 1 102 2 150 33 l50
32 133 -11 c91 -7 166 -7 242 0 102 10 116 14 180 51 58 34 77 40 126 40 93 0
201 -35 316 -102 129 -76 154 -82 241 -61 53 13 79 27 125 64 31 27 95 76 142
110 47 35 97 73 112 85 15 12 54 28 85 34 89 18 223 70 276 107 l49 34 126
-27 c75 -16 158 -41 202 -61 41 -19 203 -81 360 -138 l284 -103 31 -44 c16
-25 65 -84 107 -130 64 -70 93 -94 160 -129 46 -23 153 -80 238 -127 101 -55
176 -88 215 -96 77 -17 164 -65 237 -132 49 -45 64 -53 110 -59 63 -8 104 -33
201 -122 40 -37 124 -105 187 -151 63 -47 180 -134 260 -193 80 -59 172 -121
205 -138 71 -36 222 -81 274 -81 29 0 44 -7 67 -31 16 -17 67 -57 114 -88 72
-48 106 -63 215 -95 75 -22 199 -70 295 -114 209 -96 256 -99 330 -20 36 39
43 89 26 182 -25 131 -24 135 39 184 31 23 71 66 89 95 19 28 53 70 76 92 50
48 181 228 280 385 40 63 100 144 134 180 86 91 108 122 153 225 22 50 63 127
92 173 47 75 53 92 61 163 6 49 17 93 29 112 23 37 112 286 131 365 9 40 28
74 73 130 70 88 202 292 248 384 17 35 48 92 69 128 24 42 50 114 75 205 21
77 42 146 48 152 5 7 31 19 57 27 27 8 59 22 73 31 73 47 167 375 167 581 0
89 -4 110 -39 212 -57 162 -65 224 -47 352 20 147 97 325 246 570 157 258 169
273 245 311 74 36 86 53 136 185 31 83 41 97 144 209 133 144 159 178 175 230
7 22 22 56 34 75 13 19 31 60 41 90 10 30 27 69 39 85 18 26 22 48 25 149 l3
119 64 150 64 151 174 175 c110 112 185 196 204 231 31 55 33 56 134 97 57 23
132 47 168 54 62 11 129 42 252 117 49 30 61 43 93 107 20 40 41 78 48 84 7 5
35 15 61 21 60 13 96 39 261 182 127 110 131 116 177 209 45 92 49 97 85 104
21 3 93 24 159 44 103 33 142 52 260 126 77 48 151 95 167 104 17 10 62 73
122 171 51 85 108 168 125 185 31 30 32 30 153 32 150 2 255 16 327 45 119 48
121 50 195 238 41 103 48 134 70 300 20 154 23 209 19 330 l-6 145 50 38 c67
51 174 165 207 221 15 25 28 46 29 46 21 0 221 -107 300 -161 l103 -70 117
-170 c66 -96 124 -191 132 -217 8 -26 21 -91 29 -145 12 -78 22 -108 45 -142
16 -24 144 -158 282 -298 242 -243 257 -257 350 -306 l96 -52 154 -212 c98
-137 191 -251 259 -322 58 -60 160 -176 227 -257 67 -80 134 -155 149 -165 16
-11 64 -27 107 -37 44 -10 143 -39 220 -64 126 -41 151 -46 236 -47 l95 0 85
-54 c47 -30 141 -100 209 -157 68 -56 221 -170 340 -252 198 -136 224 -151
311 -178 l95 -29 260 3 c228 3 274 1 375 -17 66 -12 129 -18 148 -15 24 5 59
30 116 83 72 68 93 81 189 120 l109 44 111 -27 112 -28 183 11 c101 6 188 13
193 16 5 4 85 10 177 14 l169 8 85 47 c80 43 92 47 179 52 77 5 111 2 187 -16
80 -19 95 -25 103 -47 5 -13 9 -171 9 -351 0 -378 14 -508 72 -664 29 -79 51
-114 188 -296 127 -168 173 -221 255 -292 582 -506 822 -708 928 -785 77 -54
181 -34 230 45 28 45 27 95 -2 340 -22 182 -23 238 -5 437 l5 62 72 46 c70 44
107 85 107 116 0 13 15 18 73 23 39 3 112 13 162 22 78 13 98 21 155 61 135
95 197 172 229 283 12 41 54 141 93 222 67 137 74 148 112 165 22 10 100 57
172 104 l132 87 199 248 c116 146 274 359 379 514 l181 265 78 210 c73 199 90
233 312 634 326 588 468 798 978 1441 72 91 197 257 277 370 124 174 153 222
192 318 110 267 186 477 222 615 l39 147 35 10 c88 26 111 24 202 -19 66 -31
136 -79 300 -208 117 -93 227 -178 243 -189 17 -11 100 -46 185 -78 142 -52
167 -65 295 -154 137 -95 143 -98 250 -124 88 -22 118 -25 150 -18 22 5 45 10
52 10 6 0 49 -32 95 -71 47 -42 110 -85 148 -102 65 -30 203 -66 250 -67 14 0
57 -12 95 -26 l70 -27 29 -75 c15 -41 37 -89 47 -106 22 -38 94 -76 187 -100
34 -9 104 -35 155 -57 116 -52 171 -55 245 -14 81 44 174 126 240 212 50 64
71 83 121 107 63 30 92 64 109 128 13 52 56 61 247 53 129 -5 187 -13 305 -40
80 -19 200 -43 268 -55 106 -18 130 -26 180 -58 55 -35 60 -37 142 -35 80 1
157 16 540 100 74 16 147 25 205 26 86 0 96 -2 232 -56 115 -46 159 -59 239
-68 110 -12 138 -9 245 28 l76 25 144 -43 c122 -37 157 -43 226 -42 152 1 166
6 248 84 l73 70 88 -11 c100 -13 189 1 299 45 33 14 105 36 160 49 l100 25 71
-18 c39 -10 133 -46 210 -81 131 -58 217 -90 291 -105 39 -8 181 11 228 30 19
8 53 15 75 15 62 0 181 30 215 54 17 11 71 57 120 101 50 45 133 110 185 145
52 34 129 96 171 136 85 82 108 94 180 94 124 0 182 18 457 142 147 66 283
132 302 146 19 14 108 91 197 169 119 106 186 175 254 261 51 64 166 203 255
307 l161 190 359 184 c198 101 373 193 389 205 17 11 188 140 380 287 621 472
924 685 990 694 40 7 46 4 163 -81 l121 -88 198 -43 198 -42 150 36 150 36
159 104 159 103 129 208 c128 205 131 209 306 387 241 244 351 325 622 457
112 55 285 143 385 196 192 102 472 285 503 330 11 15 56 89 102 166 l82 138
10 110 c13 139 6 185 -36 240 -76 101 -117 171 -146 249 l-30 82 15 206 c8
113 20 226 26 251 8 35 29 64 107 147 169 180 161 166 233 436 l63 238 129 80
129 80 381 70 c210 38 476 92 592 118 l210 49 300 182 c165 100 401 253 525
340 l225 158 220 51 220 51 220 0 219 0 191 45 c104 25 201 51 214 58 35 17
435 391 581 544 111 116 140 153 260 343 74 117 148 223 165 235 24 18 375
154 705 272 25 9 59 26 75 37 52 35 323 275 344 305 13 18 31 88 55 214 l36
187 89 142 c49 79 154 260 233 403 l145 260 78 280 c77 279 78 280 161 430 55
99 114 187 173 259 51 62 113 153 147 215 31 58 98 176 147 261 123 214 366
773 414 954 36 138 39 146 53 146 5 0 66 27 134 61 l125 61 69 116 c38 64 95
162 127 217 32 55 148 245 258 423 l199 323 30 232 29 232 -30 120 c-29 113
-30 127 -24 243 l6 123 246 177 c230 165 263 193 496 418 l250 242 96 158 c75
123 102 179 123 248 14 48 31 96 38 105 7 9 63 75 124 146 158 184 217 238
292 269 59 25 435 223 511 269 18 11 194 203 390 427 l356 408 126 208 c70
115 180 304 245 419 181 324 329 498 699 825 83 73 159 138 170 145 11 8 153
61 315 120 237 85 412 138 890 271 327 90 610 172 628 182 37 19 66 61 76 108
5 22 -8 93 -44 232 -48 195 -51 214 -80 544 -16 189 -33 357 -36 373 -4 17
-48 113 -100 215 -86 170 -105 201 -246 380 l-153 195 -258 193 c-231 173
-265 203 -331 285 -132 164 -242 373 -471 896 l-207 474 -19 226 c-10 124 -21
242 -25 261 -3 19 -50 123 -105 231 l-99 196 -132 85 -133 85 -48 144 c-26 79
-70 248 -98 374 -27 127 -55 248 -61 270 -6 22 -71 126 -144 230 -123 178
-145 203 -336 390 l-203 201 -196 119 -196 119 -73 120 c-39 67 -175 270 -300
451 -214 311 -229 335 -255 420 -42 140 -144 281 -343 476 -156 154 -158 155
-382 291 -255 154 -212 140 -585 193 -226 33 -267 36 -430 33 l-180 -3 -167
-102 c-104 -63 -168 -97 -168 -88 0 8 -42 110 -94 227 -172 394 -282 759 -306
1023 -15 161 -12 218 11 287 27 80 19 120 -36 195 -41 56 -43 62 -60 183 -21
158 -15 255 31 500 32 165 35 199 32 315 l-3 130 -73 132 c-48 88 -72 143 -72
165 0 95 -21 163 -79 258 -32 52 -100 176 -151 275 -51 99 -148 266 -215 370
-141 218 -149 241 -160 460 -6 107 -14 154 -47 270 -39 137 -39 142 -33 255 4
63 13 153 20 200 7 47 16 112 20 145 10 101 35 212 81 364 30 96 51 195 64
290 l20 145 -21 150 c-30 221 -108 525 -170 665 -27 62 -49 114 -47 116 2 1
59 7 128 13 192 16 277 52 505 211 99 69 230 166 290 216 61 50 138 112 172
138 74 56 91 79 131 175 17 40 69 127 115 195 54 78 103 165 137 242 29 66 81
176 116 245 79 158 135 366 158 595 17 158 36 562 36 753 0 110 2 120 84 420
89 326 148 583 167 722 6 47 14 186 18 310 l7 225 43 143 c23 79 60 194 82
255 41 115 117 440 195 837 39 199 44 241 44 361 0 143 8 197 72 469 27 116
42 157 110 294 44 87 124 226 179 308 142 212 368 687 433 910 35 118 36 130
39 298 l2 175 -61 155 c-33 85 -67 180 -74 210 -7 31 -35 91 -65 140 -36 60
-59 111 -75 171 -21 83 -22 98 -16 355 8 368 22 628 38 694 l13 54 155 18
c130 15 178 17 295 9 155 -11 184 -7 265 35 51 27 64 29 193 32 161 5 137 16
263 -129 73 -85 100 -107 216 -181 117 -75 143 -87 213 -101 321 -65 432 -89
520 -112 149 -39 269 -38 394 3 l94 31 99 -20 c85 -18 110 -19 184 -10 94 12
136 31 164 76 29 49 33 89 15 152 -10 32 -17 69 -17 83 1 43 60 179 110 252
43 63 54 73 132 113 130 65 262 96 460 105 160 7 167 9 240 42 41 20 158 90
259 158 102 67 228 145 280 173 73 38 117 71 182 135 98 94 193 221 204 269 4
22 -5 73 -30 170 -35 133 -36 142 -30 253 9 157 20 194 75 265 26 33 65 87 88
121 22 33 73 92 112 130 40 38 79 81 88 97 9 15 20 27 26 27 25 0 98 47 114
74 37 63 72 180 102 338 17 90 40 208 51 263 11 55 25 138 30 185 5 47 21 120
35 162 25 77 32 89 110 190 24 31 53 87 69 133 48 138 67 164 151 215 41 24
111 74 154 110 43 36 125 90 182 120 92 48 116 68 221 175 242 245 386 452
447 640 13 39 40 104 61 146 42 84 96 134 239 223 42 25 83 59 92 74 9 15 24
68 33 117 10 53 28 111 44 140 16 28 36 88 45 135 10 47 29 132 43 190 23 96
29 109 73 157 78 85 77 147 -3 250 -24 32 -63 94 -87 138 -23 44 -62 107 -85
141 -23 33 -49 82 -58 108 l-17 48 72 98 c68 93 73 104 104 222 18 67 40 146
48 173 9 28 20 106 26 175 l11 125 -51 155 c-28 85 -62 193 -76 240 -15 47
-48 126 -74 175 -33 61 -61 138 -90 239 -35 125 -53 169 -115 279 -40 72 -134
214 -208 317 -287 396 -293 406 -312 505 -9 48 -22 102 -29 119 -12 28 -10 36
16 89 16 32 63 106 105 165 163 229 336 404 525 530 58 39 115 84 126 99 10
15 32 66 47 113 35 107 129 297 201 404 44 66 56 93 61 137 5 49 11 60 67 119
102 106 237 351 288 519 l28 94 0 301 0 300 -29 106 c-21 74 -33 147 -41 249
-6 79 -13 148 -16 153 -3 5 -10 91 -15 191 -21 438 -48 611 -129 842 -39 111
-129 470 -140 560 -19 146 6 479 56 735 30 158 30 229 -1 370 -32 144 -32 183
1 255 15 32 42 128 60 214 18 86 49 198 69 249 19 52 42 133 50 180 50 280 61
300 257 477 84 76 210 196 280 265 l127 127 102 29 c97 27 107 32 168 89 106
99 262 295 324 408 62 114 143 208 244 288 38 29 100 80 138 114 39 33 99 84
135 112 90 71 367 354 422 433 50 70 54 85 67 231 7 85 14 107 61 210 l53 114
8 145 c8 167 19 243 54 372 18 67 25 119 25 186 0 90 1 94 45 176 25 45 76
127 114 182 38 54 110 158 160 231 83 120 101 139 196 213 60 46 119 101 137
128 17 26 82 99 142 163 123 129 128 137 267 489 57 144 62 163 68 260 6 94
11 115 49 197 23 51 48 128 57 175 16 87 71 291 86 319 20 39 125 79 286 109
165 31 389 106 678 225 288 120 545 153 775 100 l108 -25 99 26 c95 25 104 25
303 19 192 -6 214 -5 357 19 83 14 252 50 375 80 122 30 277 66 343 80 133 28
486 61 750 72 204 8 202 7 535 152 l244 107 101 95 c55 52 137 119 182 149
l83 53 52 -32 c29 -18 103 -81 163 -140 61 -59 124 -116 140 -127 17 -11 161
-68 320 -127 296 -108 519 -170 832 -230 92 -17 153 -36 216 -65 71 -33 121
-47 255 -71 111 -21 197 -43 257 -67 109 -43 158 -48 370 -35 l160 10 116 50
c64 28 168 79 230 115 63 35 165 84 228 108 100 38 123 52 180 105 36 33 110
93 163 133 87 63 106 83 165 171 43 65 72 100 84 100 10 0 80 -13 156 -29
l138 -30 480 -5 c293 -3 552 -11 665 -20 327 -27 989 -15 1163 20 16 3 79 29
140 58 115 54 163 66 542 140 179 36 469 36 730 0z" />
                    </a>
                    <path d="M18160 176141 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63
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
                    <path d="M15208 176110 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
                    <path d="M12540 175290 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z" />
                    <path d="M17110 175290 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z" />
                    <path d="M21110 175121 c-346 -52 -618 -263 -708 -551 -41 -130 -37 -261 10
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
                    <path d="M23240 175123 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z" />
                    <path d="M25190 175121 c-36 -5 -107 -20 -159 -35 -318 -92 -555 -334 -646
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
                    <path d="M28640 175121 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z" />
                    <path d="M30865 172718 c-44 -5 -123 -22 -176 -38 -286 -88 -481 -286 -575
-585 -26 -83 -28 -103 -28 -245 0 -147 1 -160 32 -255 48 -151 110 -253 218
-360 106 -106 206 -166 359 -216 95 -31 107 -33 255 -33 148 0 160 2 255 33
153 50 253 110 359 216 108 107 170 209 218 360 31 95 32 108 32 255 0 142 -2
162 -28 245 -74 236 -210 407 -408 516 -86 48 -239 96 -328 104 -36 3 -74 7
-85 9 -11 2 -56 -1 -100 -6z" />
                    <path d="M26315 172128 c-44 -5 -123 -22 -176 -38 -286 -88 -481 -286 -575
-585 -26 -83 -28 -103 -28 -245 0 -147 1 -160 32 -255 48 -151 110 -253 218
-360 106 -106 206 -166 359 -216 95 -31 107 -33 255 -33 148 0 160 2 255 33
153 50 253 110 359 216 108 107 170 209 218 360 31 95 32 108 32 255 0 142 -2
162 -28 245 -74 236 -210 407 -408 516 -86 48 -239 96 -328 104 -36 3 -74 7
-85 9 -11 2 -56 -1 -100 -6z" />
                    <path d="M33275 171989 c-197 -38 -194 -32 -73 -166 167 -182 169 -190 175
-845 3 -280 2 -508 -1 -508 -3 0 -29 15 -58 33 -136 87 -337 133 -541 124
-135 -5 -211 -22 -304 -68 -126 -61 -211 -157 -254 -287 -57 -170 -4 -443 94
-488 28 -12 356 -47 365 -39 2 2 8 22 13 44 8 36 6 46 -20 88 -78 127 -97 285
-47 387 23 48 35 59 83 83 50 24 67 27 147 26 140 -3 279 -37 444 -109 l77
-33 3 -758 c2 -625 0 -773 -12 -842 -43 -245 -218 -391 -470 -391 -194 0 -302
107 -346 344 -17 93 -6 295 24 431 l23 105 -34 30 c-18 17 -36 30 -39 30 -15
0 -107 -54 -164 -96 -183 -134 -270 -284 -270 -464 0 -136 39 -245 121 -334
119 -130 266 -222 429 -266 115 -32 374 -35 490 -6 300 74 537 293 621 572 49
163 50 214 47 1694 l-3 1375 -24 58 c-43 109 -152 217 -259 257 -63 24 -169
33 -237 19z" />
                    <path d="M38190 171989 c-75 -13 -169 -59 -226 -111 -103 -94 -148 -210 -142
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
                    <path d="M34730 170981 c-346 -52 -618 -263 -708 -551 -41 -130 -37 -261 10
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
                    <path d="M36850 170983 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z" />
                    <path d="M40880 170983 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z" />
                    <path d="M42840 170981 c-36 -5 -107 -20 -159 -35 -318 -92 -555 -334 -646
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
                    <path d="M46280 170981 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z" />
                    <path d="M67311 152500 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z" />
                    <path d="M71495 152491 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
                    <path d="M79538 152470 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
                    <path d="M66270 151650 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z" />
                    <path d="M70040 151650 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z" />
                    <path d="M73810 151650 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z" />
                    <path d="M63425 151481 c-298 -49 -527 -257 -606 -552 -31 -113 -34 -374 -6
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
                    <path d="M76165 151484 c-112 -18 -233 -87 -305 -176 -50 -62 -91 -155 -178
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
                    <path d="M81720 151481 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z" />
                    <path d="M62565 148408 c-44 -5 -123 -22 -176 -38 -286 -88 -481 -286 -575
-585 -26 -83 -28 -103 -28 -245 0 -147 1 -160 32 -255 48 -151 110 -253 218
-360 106 -106 206 -166 359 -216 95 -31 107 -33 255 -33 148 0 160 2 255 33
153 50 253 110 359 216 108 107 170 209 218 360 31 95 32 108 32 255 0 142 -2
162 -28 245 -74 236 -210 407 -408 516 -86 48 -239 96 -328 104 -36 3 -74 7
-85 9 -11 2 -56 -1 -100 -6z" />
                    <path d="M115991 133530 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z" />
                    <path d="M102830 133520 c-315 -31 -545 -185 -642 -430 -30 -76 -55 -196 -61
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
                    <path d="M111888 133500 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
                    <path d="M123268 133500 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
                    <path d="M104670 132680 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z" />
                    <path d="M109220 132680 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z" />
                    <path d="M120600 132680 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z" />
                    <path d="M106420 132510 c-276 -39 -534 -298 -622 -624 -19 -69 -22 -107 -22
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
                    <path d="M113830 132510 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
                    <path d="M118632 132491 l-23 -32 24 -42 c56 -94 133 -140 252 -152 172 -16
271 -81 336 -220 72 -154 79 -413 16 -617 -34 -110 -107 -192 -204 -228 -46
-17 -79 -20 -221 -20 -162 -1 -168 -1 -194 -25 -26 -23 -28 -29 -28 -108 0
-124 -1 -123 220 -130 157 -4 182 -7 237 -29 81 -33 114 -61 157 -132 43 -73
65 -165 75 -316 14 -227 -14 -378 -93 -492 -71 -105 -161 -158 -294 -172 -105
-11 -242 30 -322 96 -44 36 -115 129 -147 193 -63 123 -100 332 -89 492 4 62
2 107 -5 133 -14 45 -21 45 -114 7 -196 -81 -285 -241 -272 -490 8 -164 57
-276 176 -402 117 -124 264 -209 441 -255 71 -19 112 -22 245 -22 136 0 175 4
261 25 324 80 575 290 665 555 24 71 31 111 36 212 11 243 -56 429 -208 578
-58 58 -168 130 -237 158 l-43 17 66 36 c164 90 280 247 336 456 31 114 30
325 -1 444 -69 268 -232 417 -526 481 -70 15 -150 22 -297 27 l-202 6 -23 -32z" />
                    <path d="M125450 132511 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z" />
                    <path d="M102980 129659 c-164 -19 -354 -99 -470 -197 -133 -113 -219 -246
-276 -427 -26 -83 -28 -103 -28 -245 0 -147 1 -160 32 -255 48 -150 110 -252
218 -360 108 -107 207 -167 364 -216 99 -31 114 -33 250 -33 136 0 151 2 250
33 157 49 256 109 364 216 108 108 170 210 218 360 31 95 32 108 32 255 0 142
-2 162 -28 245 -95 300 -290 498 -581 588 -71 22 -112 29 -235 41 -19 2 -69 0
-110 -5z" />
                    <path d="M65508 128470 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
                    <path d="M60445 128389 c-55 -17 -88 -57 -99 -120 -6 -36 -3 -58 34 -234 32
-150 29 -277 -13 -505 -19 -102 -33 -186 -32 -188 7 -9 151 35 212 64 154 73
225 183 247 379 11 94 -56 266 -133 343 l-34 34 74 -7 c148 -14 278 -54 332
-104 44 -40 83 -127 101 -226 13 -75 16 -170 16 -583 l0 -493 -57 46 c-99 81
-144 99 -248 99 -105 1 -154 -12 -222 -57 -50 -33 -104 -110 -124 -177 -17
-56 -23 -238 -10 -302 31 -147 136 -271 263 -309 160 -49 308 5 377 136 l20
40 -2 -555 -2 -555 -25 -70 c-70 -199 -251 -316 -468 -303 -178 11 -282 112
-324 313 -19 94 -11 318 16 448 l24 119 -31 29 c-18 15 -36 29 -40 29 -5 0
-29 -12 -55 -27 -207 -118 -334 -266 -372 -432 -26 -111 3 -282 65 -382 88
-142 279 -271 475 -320 82 -21 118 -24 260 -23 137 0 179 4 247 22 361 97 601
373 643 743 5 46 10 273 10 504 l1 420 25 -48 c66 -127 205 -148 384 -57 82
41 83 53 24 184 -55 121 -56 121 -157 86 -31 -11 -70 -20 -85 -20 -39 0 -108
25 -154 56 -37 24 -38 26 -38 84 0 58 1 60 38 85 67 44 179 51 254 15 23 -11
35 -11 66 -1 36 12 39 17 70 105 42 117 37 135 -45 172 -32 14 -90 31 -130 36
-90 14 -117 4 -195 -71 l-58 -54 0 559 c0 606 -1 612 -56 715 -57 106 -185
209 -334 267 -87 35 -243 71 -374 87 -132 16 -314 18 -361 4z m545 -1798 c55
-21 150 -87 150 -104 0 -20 -101 -106 -155 -132 -63 -29 -143 -34 -180 -9 -28
18 -55 81 -55 130 0 48 27 101 59 119 37 20 122 18 181 -4z" />
                    <path d="M62840 127650 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z" />
                    <path d="M70790 127650 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z" />
                    <path d="M67620 127481 c-36 -5 -107 -20 -159 -35 -318 -92 -555 -334 -646
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
                    <path d="M72610 127480 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328
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
                    <path d="M76720 127481 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z" />
                    <path d="M59210 124009 c-164 -19 -354 -99 -470 -197 -133 -113 -219 -246
-276 -427 -26 -83 -28 -103 -28 -245 0 -147 1 -160 32 -255 48 -150 110 -252
218 -360 108 -107 207 -167 364 -216 99 -31 114 -33 250 -33 136 0 151 2 250
33 157 49 256 109 364 216 108 108 170 210 218 360 31 95 32 108 32 255 0 142
-2 162 -28 245 -95 300 -290 498 -581 588 -71 22 -112 29 -235 41 -19 2 -69 0
-110 -5z" />
                    <path d="M66545 108440 c-252 -32 -442 -216 -500 -482 -32 -152 -17 -396 45
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
233 87 55 232 73 324 41z" />
                    <path d="M73428 108420 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
                    <path d="M70750 107600 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z" />
                    <path d="M62730 107431 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z" />
                    <path d="M64810 107431 c-346 -52 -618 -263 -708 -551 -41 -130 -37 -261 10
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
                    <path d="M68787 107410 c-196 -85 -356 -202 -437 -320 -113 -165 -153 -325
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
                    <path d="M75360 107430 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
-1 -109 -5 -134 -9z" />
                    <path d="M60530 107350 c-98 -193 -66 -324 110 -452 19 -15 98 -61 175 -103
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
-48 -60z" />
                    <path d="M58530 103969 c-164 -19 -354 -99 -470 -197 -133 -113 -219 -246
-276 -427 -26 -83 -28 -103 -28 -245 0 -147 1 -160 32 -255 48 -150 110 -252
218 -360 108 -107 207 -167 364 -216 99 -31 114 -33 250 -33 136 0 151 2 250
33 157 49 256 109 364 216 108 108 170 210 218 360 31 95 32 108 32 255 0 142
-2 162 -28 245 -95 300 -290 498 -581 588 -71 22 -112 29 -235 41 -19 2 -69 0
-110 -5z" />
                    <path d="M65320 101411 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63
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
                    <path d="M69791 101410 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z" />
                    <path d="M72577 101382 c-28 -29 -28 -30 -12 -62 25 -48 84 -109 128 -132 26
-13 81 -24 166 -33 180 -20 239 -42 303 -113 80 -88 100 -199 96 -536 l-3
-249 -30 25 c-49 42 -145 85 -230 103 -118 26 -313 16 -452 -24 -314 -90 -540
-329 -625 -661 -27 -104 -30 -131 -31 -285 0 -155 2 -179 28 -280 68 -268 238
-486 464 -599 209 -104 490 -130 689 -62 149 50 257 130 407 299 101 114 145
188 177 295 l23 77 0 800 0 800 -24 94 c-75 297 -249 468 -551 537 -84 20
-144 26 -300 31 l-195 5 -28 -30z m393 -1249 c76 -22 175 -73 238 -123 l52
-42 0 -440 c0 -477 -3 -504 -57 -612 -14 -28 -58 -83 -97 -122 -96 -96 -153
-118 -281 -111 -186 11 -310 107 -399 308 -95 216 -115 599 -42 830 56 178
184 304 336 330 60 10 182 1 250 -18z" />
                    <path d="M77758 101380 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
                    <path d="M64010 100391 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z" />
                    <path d="M68480 100391 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z" />
                    <path d="M74820 100391 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z" />
                    <path d="M79940 100391 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z" />
                    <path d="M61810 100310 c-98 -193 -66 -324 110 -452 19 -15 98 -61 175 -103
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
-48 -60z" />
                    <path d="M58970 98309 c-164 -19 -354 -99 -470 -197 -133 -113 -219 -246 -276
-427 -26 -83 -28 -103 -28 -245 0 -147 1 -160 32 -255 48 -150 110 -252 218
-360 108 -107 207 -167 364 -216 99 -31 114 -33 250 -33 136 0 151 2 250 33
157 49 256 109 364 216 108 108 170 210 218 360 31 95 32 108 32 255 0 142 -2
162 -28 245 -95 300 -290 498 -581 588 -71 22 -112 29 -235 41 -19 2 -69 0
-110 -5z" />
                    <path d="M62480 93949 c-164 -19 -354 -99 -470 -197 -133 -113 -219 -246 -276
-427 -26 -83 -28 -103 -28 -245 0 -147 1 -160 32 -255 48 -150 110 -252 218
-360 108 -107 207 -167 364 -216 99 -31 114 -33 250 -33 136 0 151 2 250 33
157 49 256 109 364 216 108 108 170 210 218 360 31 95 32 108 32 255 0 142 -2
162 -28 245 -95 300 -290 498 -581 588 -71 22 -112 29 -235 41 -19 2 -69 0
-110 -5z" />
                    <path d="M65695 92861 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
                    <path d="M69465 92861 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
                    <path d="M75768 92840 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
                    <path d="M64240 92020 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65 -161
-10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455 89
-643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135 -95
263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108
-314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240
330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369
-35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311
282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54
45 -25 1 -70 -2 -100 -6z" />
                    <path d="M68000 92020 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65 -161
-10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455 89
-643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135 -95
263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108
-314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240
330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369
-35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311
282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54
45 -25 1 -70 -2 -100 -6z" />
                    <path d="M72385 91854 c-112 -18 -233 -87 -305 -176 -50 -62 -91 -155 -178
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
                    <path d="M77950 91851 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                    <path d="M84775 77701 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
                    <path d="M89100 76860 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65 -161
-10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455 89
-643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29 218
-1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236 -25
-53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175 -61
427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101 239
-209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10 48
7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70 -2
-100 -6z" />
                    <path d="M83040 76691 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                    <path d="M87160 76691 c-346 -52 -618 -263 -708 -551 -41 -130 -37 -261 10
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
                    <path d="M90930 76690 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328 -318
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
                    <path d="M95030 76691 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                    <path d="M81720 76673 c-8 -4 -80 -63 -160 -132 -187 -164 -213 -183 -285
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
                    <path d="M80400 72949 c-164 -19 -354 -99 -470 -197 -133 -113 -219 -246 -276
-427 -26 -83 -28 -103 -28 -245 0 -147 1 -160 32 -255 48 -150 110 -252 218
-360 108 -107 207 -167 364 -216 99 -31 114 -33 250 -33 136 0 151 2 250 33
157 49 256 109 364 216 108 108 170 210 218 360 31 95 32 108 32 255 0 142 -2
162 -28 245 -95 300 -290 498 -581 588 -71 22 -112 29 -235 41 -19 2 -69 0
-110 -5z" />
                    <path d="M78330 71489 c-164 -19 -354 -99 -470 -197 -133 -113 -219 -246 -276
-427 -26 -83 -28 -103 -28 -245 0 -147 1 -160 32 -255 48 -150 110 -252 218
-360 108 -107 207 -167 364 -216 99 -31 114 -33 250 -33 136 0 151 2 250 33
157 49 256 109 364 216 108 108 170 210 218 360 31 95 32 108 32 255 0 142 -2
162 -28 245 -95 300 -290 498 -581 588 -71 22 -112 29 -235 41 -19 2 -69 0
-110 -5z" />
                    <path d="M66650 70569 c-75 -13 -169 -59 -226 -111 -103 -94 -148 -210 -142
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
                    <path d="M85000 70190 c-302 -38 -518 -236 -602 -552 -22 -83 -22 -85 -25
-1215 l-4 -1133 211 0 210 0 0 523 0 524 68 46 c175 120 355 162 519 121 160
-40 259 -150 293 -327 11 -54 11 -90 2 -185 -19 -198 -87 -377 -225 -600 l-70
-113 23 -24 22 -24 82 30 c257 95 443 264 547 496 49 109 64 192 63 338 -1
112 -5 140 -28 203 -81 231 -268 394 -530 464 -122 32 -342 32 -446 -1 -84
-26 -179 -75 -256 -133 -28 -21 -54 -38 -57 -38 -4 0 -7 46 -7 103 l0 103 123
17 c459 63 802 285 912 591 25 68 29 93 29 190 0 82 -4 125 -18 166 -69 208
-240 354 -481 410 -94 22 -263 32 -355 20z m188 -245 c91 -12 177 -76 221
-163 52 -103 54 -286 5 -384 -52 -104 -157 -194 -304 -261 -64 -29 -290 -107
-311 -107 -19 0 -6 571 15 643 30 108 94 199 172 247 35 22 106 39 139 34 11
-1 39 -5 63 -9z" />
                    <path d="M86655 70191 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
                    <path d="M99138 70170 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
                    <path d="M80120 70091 c-49 -10 -75 -26 -101 -63 -31 -43 -30 -132 4 -263 48
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
                    <path d="M31530 69951 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63 -66
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
                    <path d="M49035 69941 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
                    <path d="M51370 69940 c-302 -38 -518 -236 -602 -552 -22 -83 -22 -85 -25
-1215 l-4 -1133 211 0 210 0 0 523 0 524 68 46 c175 120 355 162 519 121 160
-40 259 -150 293 -327 11 -54 11 -90 2 -185 -19 -198 -87 -377 -225 -600 l-70
-113 23 -24 22 -24 82 30 c257 95 443 264 547 496 49 109 64 192 63 338 -1
112 -5 140 -28 203 -81 231 -268 394 -530 464 -122 32 -342 32 -446 -1 -84
-26 -179 -75 -256 -133 -28 -21 -54 -38 -57 -38 -4 0 -7 46 -7 103 l0 103 123
17 c459 63 802 285 912 591 25 68 29 93 29 190 0 82 -4 125 -18 166 -69 208
-240 354 -481 410 -94 22 -263 32 -355 20z m188 -245 c91 -12 177 -76 221
-163 52 -103 54 -286 5 -384 -52 -104 -157 -194 -304 -261 -64 -29 -290 -107
-311 -107 -19 0 -6 571 15 643 30 108 94 199 172 247 35 22 106 39 139 34 11
-1 39 -5 63 -9z" />
                    <path d="M60740 69560 c-149 -20 -328 -100 -455 -203 -166 -134 -276 -296
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
                    <path d="M64625 69564 c-112 -18 -233 -87 -305 -176 -50 -62 -91 -155 -178
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
                    <path d="M69340 69563 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z" />
                    <path d="M71300 69561 c-36 -5 -107 -20 -159 -35 -318 -92 -555 -334 -646
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
                    <path d="M74740 69561 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                    <path d="M44120 69490 c-171 -26 -303 -130 -346 -272 -25 -83 -15 -197 25
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
                    <path d="M56030 69359 c-41 -5 -113 -20 -160 -35 -292 -89 -489 -285 -583
-578 -30 -96 -32 -109 -31 -256 0 -148 1 -160 32 -255 51 -153 111 -253 218
-360 108 -108 207 -167 364 -216 98 -30 114 -33 250 -33 136 0 152 3 250 33
157 49 256 108 364 216 107 107 170 211 218 361 31 94 32 107 32 254 0 142 -2
162 -28 245 -95 301 -289 498 -581 588 -71 22 -112 29 -235 41 -19 2 -69 0
-110 -5z" />
                    <path d="M93400 69350 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65 -161
-10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455 89
-643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29 218
-1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236 -25
-53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175 -61
427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101 239
-209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10 48
7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70 -2
-100 -6z" />
                    <path d="M91190 69191 c-328 -39 -570 -289 -570 -586 0 -38 7 -94 14 -123 40
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
                    <path d="M82960 69181 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                    <path d="M89240 69181 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                    <path d="M95755 69184 c-112 -18 -233 -87 -305 -176 -50 -62 -91 -155 -178
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
                    <path d="M101320 69181 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z" />
                    <path d="M30490 69100 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65 -161
-10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455 89
-643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29 218
-1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236 -25
-53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175 -61
427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101 239
-209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10 48
7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70 -2
-100 -6z" />
                    <path d="M34410 69100 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65 -161
-10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455 89
-643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29 218
-1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236 -25
-53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175 -61
427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101 239
-209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10 48
7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70 -2
-100 -6z" />
                    <path d="M53310 69100 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65 -161
-10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455 89
-643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29 218
-1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236 -25
-53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175 -61
427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101 239
-209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10 48
7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70 -2
-100 -6z" />
                    <path d="M36230 68930 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328 -318
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
                    <path d="M40340 68931 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                    <path d="M46460 68930 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
                    <path d="M63184 65579 c-301 -50 -563 -265 -675 -553 -157 -405 21 -878 407
-1083 443 -235 991 -49 1203 409 61 131 76 201 76 363 0 162 -15 232 -76 363
-165 357 -554 565 -935 501z" />
                    <path d="M35655 63731 c-303 -40 -531 -225 -616 -501 -20 -65 -23 -96 -24
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
                    <path d="M31470 63631 c-49 -10 -75 -26 -101 -63 -31 -43 -30 -132 4 -263 48
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
                    <path d="M90071 62890 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z" />
                    <path d="M34040 62890 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65 -161
-10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455 89
-643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29 218
-1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236 -25
-53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175 -61
427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101 239
-209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10 48
7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70 -2
-100 -6z" />
                    <path d="M38810 62890 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65 -161
-10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455 89
-643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29 218
-1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236 -25
-53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175 -61
427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101 239
-209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10 48
7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70 -2
-100 -6z" />
                    <path d="M80678 62860 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
                    <path d="M97998 62860 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
                    <path d="M92598 62753 c-76 -162 -62 -294 41 -384 68 -60 114 -80 345 -148
230 -68 278 -86 331 -127 56 -43 78 -95 78 -184 -2 -242 -184 -370 -490 -346
-75 6 -85 5 -113 -15 -29 -22 -30 -25 -30 -104 0 -123 -1 -122 230 -127 165
-4 190 -7 235 -27 100 -45 169 -139 207 -282 19 -74 22 -110 23 -294 0 -191
-2 -216 -23 -282 -67 -214 -199 -315 -411 -315 -99 0 -177 25 -253 83 -99 74
-188 222 -229 375 -23 86 -29 271 -15 434 l7 85 -32 18 -32 18 -94 -46 c-149
-73 -211 -151 -249 -312 -24 -103 -15 -267 21 -353 43 -104 105 -188 226 -306
133 -129 197 -169 334 -209 92 -26 113 -28 265 -28 135 0 184 4 270 23 329 72
585 279 674 546 67 203 52 443 -39 624 -73 143 -202 271 -347 345 l-87 44 62
29 c221 105 334 285 325 517 -2 75 -8 100 -32 149 -36 73 -82 125 -161 181
-82 59 -175 91 -455 160 -276 67 -354 99 -387 160 -12 22 -27 70 -34 107 -13
72 -19 78 -87 78 -32 0 -35 -3 -74 -87z" />
                    <path d="M40630 62720 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328 -318
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
                    <path d="M44640 62723 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z" />
                    <path d="M46600 62721 c-36 -5 -107 -20 -159 -35 -318 -92 -555 -334 -646
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
                    <path d="M50050 62721 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                    <path d="M75965 62649 c-44 -6 -121 -23 -170 -39 -283 -90 -475 -285 -568
-574 -30 -96 -32 -109 -31 -256 0 -148 1 -159 33 -255 96 -294 288 -484 581
-576 98 -30 114 -33 250 -33 136 0 152 3 250 33 293 92 485 282 581 576 32 96
33 107 33 255 1 147 -1 160 -31 256 -93 289 -286 485 -568 574 -80 26 -115 32
-245 44 -19 2 -71 0 -115 -5z" />
                    <path d="M53155 62059 c-44 -6 -121 -23 -170 -39 -283 -90 -475 -285 -568
-574 -30 -96 -32 -109 -31 -256 0 -148 1 -159 33 -255 96 -294 288 -484 581
-576 98 -30 114 -33 250 -33 136 0 152 3 250 33 293 92 485 282 581 576 32 96
33 107 33 255 1 147 -1 160 -31 256 -93 289 -286 485 -568 574 -80 26 -115 32
-245 44 -19 2 -71 0 -115 -5z" />
                    <path d="M78010 62040 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65 -161
-10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455 89
-643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29 218
-1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236 -25
-53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175 -61
427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101 239
-209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10 48
7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70 -2
-100 -6z" />
                    <path d="M82580 62040 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65 -161
-10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455 89
-643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29 218
-1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236 -25
-53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175 -61
427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101 239
-209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10 48
7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70 -2
-100 -6z" />
                    <path d="M84260 61881 c-328 -39 -570 -289 -570 -586 0 -38 7 -94 14 -123 40
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
                    <path d="M86540 61871 c-346 -52 -618 -263 -708 -551 -41 -130 -37 -261 10
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
                    <path d="M88760 61871 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                    <path d="M95050 61871 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                    <path d="M100170 61871 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z" />
                    <path d="M25111 57070 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z" />
                    <path d="M21557 57042 c-28 -29 -28 -30 -12 -62 25 -48 84 -109 128 -132 26
-13 81 -24 166 -33 180 -20 239 -42 303 -113 80 -88 100 -199 96 -536 l-3
-249 -30 25 c-49 42 -145 85 -230 103 -118 26 -313 16 -452 -24 -314 -90 -540
-329 -625 -661 -27 -104 -30 -131 -31 -285 0 -155 2 -179 28 -280 68 -268 238
-486 464 -599 209 -104 490 -130 689 -62 149 50 257 130 407 299 101 114 145
188 177 295 l23 77 0 800 0 800 -24 94 c-75 297 -249 468 -551 537 -84 20
-144 26 -300 31 l-195 5 -28 -30z m393 -1249 c76 -22 175 -73 238 -123 l52
-42 0 -440 c0 -477 -3 -504 -57 -612 -14 -28 -58 -83 -97 -122 -96 -96 -153
-118 -281 -111 -186 11 -310 107 -399 308 -95 216 -115 599 -42 830 56 178
184 304 336 330 60 10 182 1 250 -18z" />
                    <path d="M58528 56900 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
                    <path d="M45945 56819 c-55 -17 -88 -57 -99 -120 -6 -36 -3 -58 34 -234 32
-150 29 -277 -13 -505 -19 -102 -33 -186 -32 -188 7 -9 151 35 212 64 154 73
225 183 247 379 11 94 -56 266 -133 343 l-34 34 74 -7 c148 -14 278 -54 332
-104 44 -40 83 -127 101 -226 13 -75 16 -170 16 -583 l0 -493 -57 46 c-99 81
-144 99 -248 99 -105 1 -154 -12 -222 -57 -50 -33 -104 -110 -124 -177 -17
-56 -23 -238 -10 -302 31 -147 136 -271 263 -309 160 -49 308 5 377 136 l20
40 -2 -555 -2 -555 -25 -70 c-70 -199 -251 -316 -468 -303 -178 11 -282 112
-324 313 -19 94 -11 318 16 448 l24 119 -31 29 c-18 15 -36 29 -40 29 -5 0
-29 -12 -55 -27 -207 -118 -334 -266 -372 -432 -26 -111 3 -282 65 -382 88
-142 279 -271 475 -320 82 -21 118 -24 260 -23 137 0 179 4 247 22 361 97 601
373 643 743 5 46 10 273 10 504 l1 420 25 -48 c66 -127 205 -148 384 -57 82
41 83 53 24 184 -55 121 -56 121 -157 86 -31 -11 -70 -20 -85 -20 -39 0 -108
25 -154 56 -37 24 -38 26 -38 84 0 58 1 60 38 85 67 44 179 51 254 15 23 -11
35 -11 66 -1 36 12 39 17 70 105 42 117 37 135 -45 172 -32 14 -90 31 -130 36
-90 14 -117 4 -195 -71 l-58 -54 0 559 c0 606 -1 612 -56 715 -57 106 -185
209 -334 267 -87 35 -243 71 -374 87 -132 16 -314 18 -361 4z m545 -1798 c55
-21 150 -87 150 -104 0 -20 -101 -106 -155 -132 -63 -29 -143 -34 -180 -9 -28
18 -55 81 -55 130 0 48 27 101 59 119 37 20 122 18 181 -4z" />
                    <path d="M61180 56470 c-171 -26 -303 -130 -346 -272 -25 -83 -15 -197 25
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
                    <path d="M18640 56050 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
                    <path d="M23800 56051 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                    <path d="M28110 56051 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                    <path d="M48610 55911 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                    <path d="M50700 55910 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328 -318
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
                    <path d="M55155 55914 c-112 -18 -233 -87 -305 -176 -50 -62 -91 -155 -178
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
                    <path d="M63760 55911 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                    <path d="M91310 55120 c-302 -38 -518 -236 -602 -552 -22 -83 -22 -85 -25
-1215 l-4 -1133 211 0 210 0 0 523 0 524 68 46 c175 120 355 162 519 121 160
-40 259 -150 293 -327 11 -54 11 -90 2 -185 -19 -198 -87 -377 -225 -600 l-70
-113 23 -24 22 -24 82 30 c257 95 443 264 547 496 49 109 64 192 63 338 -1
112 -5 140 -28 203 -81 231 -268 394 -530 464 -122 32 -342 32 -446 -1 -84
-26 -179 -75 -256 -133 -28 -21 -54 -38 -57 -38 -4 0 -7 46 -7 103 l0 103 123
17 c459 63 802 285 912 591 25 68 29 93 29 190 0 82 -4 125 -18 166 -69 208
-240 354 -481 410 -94 22 -263 32 -355 20z m188 -245 c91 -12 177 -76 221
-163 52 -103 54 -286 5 -384 -52 -104 -157 -194 -304 -261 -64 -29 -290 -107
-311 -107 -19 0 -6 571 15 643 30 108 94 199 172 247 35 22 106 39 139 34 11
-1 39 -5 63 -9z" />
                    <path d="M98988 55100 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
                    <path d="M80000 55021 c-49 -10 -75 -26 -101 -63 -31 -43 -30 -132 4 -263 48
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
                    <path d="M78425 54519 c-44 -6 -121 -23 -170 -39 -283 -90 -475 -285 -568
-574 -30 -96 -32 -109 -31 -256 0 -148 1 -159 33 -255 96 -294 288 -484 581
-576 98 -30 114 -33 250 -33 136 0 152 3 250 33 293 92 485 282 581 576 32 96
33 107 33 255 1 147 -1 160 -31 256 -93 289 -286 485 -568 574 -80 26 -115 32
-245 44 -19 2 -71 0 -115 -5z" />
                    <path d="M89550 54280 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65 -161
-10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455 89
-643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29 218
-1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236 -25
-53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175 -61
427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101 239
-209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10 48
7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70 -2
-100 -6z" />
                    <path d="M93260 54280 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65 -161
-10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455 89
-643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29 218
-1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236 -25
-53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175 -61
427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101 239
-209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10 48
7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70 -2
-100 -6z" />
                    <path d="M83185 54114 c-112 -18 -233 -87 -305 -176 -50 -62 -91 -155 -178
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
                    <path d="M85710 54110 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328 -318
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
                    <path d="M95615 54114 c-112 -18 -233 -87 -305 -176 -50 -62 -91 -155 -178
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
                    <path d="M101170 54111 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z" />
                    <path d="M17735 53859 c-44 -6 -121 -23 -170 -39 -283 -90 -475 -285 -568
-574 -30 -96 -32 -109 -31 -256 0 -148 1 -159 33 -255 96 -294 288 -484 581
-576 98 -30 114 -33 250 -33 136 0 152 3 250 33 293 92 485 282 581 576 32 96
33 107 33 255 1 147 -1 160 -31 256 -93 289 -286 485 -568 574 -80 26 -115 32
-245 44 -19 2 -71 0 -115 -5z" />
                    <path d="M44965 52309 c-44 -6 -121 -23 -170 -39 -283 -90 -475 -285 -568
-574 -30 -96 -32 -109 -31 -256 0 -148 1 -159 33 -255 96 -294 288 -484 581
-576 98 -30 114 -33 250 -33 136 0 152 3 250 33 293 92 485 282 581 576 32 96
33 107 33 255 1 147 -1 160 -31 256 -93 289 -286 485 -568 574 -80 26 -115 32
-245 44 -19 2 -71 0 -115 -5z" />
                    <path d="M55200 48720 c-315 -31 -545 -185 -642 -430 -30 -76 -55 -196 -61
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
                    <path d="M62280 48719 c-75 -13 -169 -59 -226 -111 -103 -94 -148 -210 -142
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
                    <path d="M22980 48540 c-315 -31 -545 -185 -642 -430 -30 -76 -55 -196 -61
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
                    <path d="M42258 48520 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
                    <path d="M24655 48439 c-55 -17 -88 -57 -99 -120 -6 -36 -3 -58 34 -234 32
-150 29 -277 -13 -505 -19 -102 -33 -186 -32 -188 7 -9 151 35 212 64 154 73
225 183 247 379 11 94 -56 266 -133 343 l-34 34 74 -7 c148 -14 278 -54 332
-104 44 -40 83 -127 101 -226 13 -75 16 -170 16 -583 l0 -493 -57 46 c-99 81
-144 99 -248 99 -105 1 -154 -12 -222 -57 -50 -33 -104 -110 -124 -177 -17
-56 -23 -238 -10 -302 31 -147 136 -271 263 -309 160 -49 308 5 377 136 l20
40 -2 -555 -2 -555 -25 -70 c-70 -199 -251 -316 -468 -303 -178 11 -282 112
-324 313 -19 94 -11 318 16 448 l24 119 -31 29 c-18 15 -36 29 -40 29 -5 0
-29 -12 -55 -27 -207 -118 -334 -266 -372 -432 -26 -111 3 -282 65 -382 88
-142 279 -271 475 -320 82 -21 118 -24 260 -23 137 0 179 4 247 22 361 97 601
373 643 743 5 46 10 273 10 504 l1 420 25 -48 c66 -127 205 -148 384 -57 82
41 83 53 24 184 -55 121 -56 121 -157 86 -31 -11 -70 -20 -85 -20 -39 0 -108
25 -154 56 -37 24 -38 26 -38 84 0 58 1 60 38 85 67 44 179 51 254 15 23 -11
35 -11 66 -1 36 12 39 17 70 105 42 117 37 135 -45 172 -32 14 -90 31 -130 36
-90 14 -117 4 -195 -71 l-58 -54 0 559 c0 606 -1 612 -56 715 -57 106 -185
209 -334 267 -87 35 -243 71 -374 87 -132 16 -314 18 -361 4z m545 -1798 c55
-21 150 -87 150 -104 0 -20 -101 -106 -155 -132 -63 -29 -143 -34 -180 -9 -28
18 -55 81 -55 130 0 48 27 101 59 119 37 20 122 18 181 -4z" />
                    <path d="M60960 47880 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65 -161
-10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455 89
-643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29 218
-1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236 -25
-53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175 -61
427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101 239
-209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10 48
7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70 -2
-100 -6z" />
                    <path d="M57120 47710 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328 -318
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
                    <path d="M64960 47713 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z" />
                    <path d="M27050 47700 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65 -161
-10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455 89
-643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29 218
-1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236 -25
-53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175 -61
427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101 239
-209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10 48
7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70 -2
-100 -6z" />
                    <path d="M39590 47700 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65 -161
-10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455 89
-643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29 218
-1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236 -25
-53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175 -61
427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101 239
-209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10 48
7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70 -2
-100 -6z" />
                    <path d="M36004 47556 c-89 -33 -130 -61 -188 -132 -62 -75 -107 -163 -114
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
                    <path d="M28980 47530 c-149 -20 -328 -100 -455 -203 -166 -134 -276 -296
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
                    <path d="M32520 47531 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                    <path d="M37640 47531 c-346 -52 -618 -263 -708 -551 -41 -130 -37 -261 10
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
                    <path d="M44440 47531 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                    <path d="M85461 45130 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z" />
                    <path d="M72365 45120 c-252 -32 -442 -216 -500 -482 -32 -152 -17 -396 45
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
233 87 55 232 73 324 41z" />
                    <path d="M40725 44459 c-44 -6 -121 -23 -170 -39 -283 -90 -475 -285 -568
-574 -30 -96 -32 -109 -31 -256 0 -148 1 -159 33 -255 96 -294 288 -484 581
-576 98 -30 114 -33 250 -33 136 0 152 3 250 33 293 92 485 282 581 576 32 96
33 107 33 255 1 147 -1 160 -31 256 -93 289 -286 485 -568 574 -80 26 -115 32
-245 44 -19 2 -71 0 -115 -5z" />
                    <path d="M74910 44111 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                    <path d="M77130 44111 c-36 -5 -107 -20 -159 -35 -318 -92 -555 -334 -646
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
                    <path d="M80480 44113 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z" />
                    <path d="M82320 44110 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328 -318
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
                    <path d="M88210 44110 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
                    <path d="M91065 44111 c-298 -49 -527 -257 -606 -552 -31 -113 -34 -374 -6
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
                    <path d="M94100 44113 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z" />
                    <path d="M95940 44110 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328 -318
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
                    <path d="M100050 44111 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z" />
                    <path d="M59065 43879 c-44 -6 -121 -23 -170 -39 -283 -90 -475 -285 -568
-574 -30 -96 -32 -109 -31 -256 0 -148 1 -159 33 -255 96 -294 288 -484 581
-576 98 -30 114 -33 250 -33 136 0 152 3 250 33 293 92 485 282 581 576 32 96
33 107 33 255 1 147 -1 160 -31 256 -93 289 -286 485 -568 574 -80 26 -115 32
-245 44 -19 2 -71 0 -115 -5z" />
                    <path d="M65815 43099 c-44 -6 -121 -23 -170 -39 -283 -90 -475 -285 -568
-574 -30 -96 -32 -109 -31 -256 0 -148 1 -159 33 -255 96 -294 288 -484 581
-576 98 -30 114 -33 250 -33 136 0 152 3 250 33 293 92 485 282 581 576 32 96
33 107 33 255 1 147 -1 160 -31 256 -93 289 -286 485 -568 574 -80 26 -115 32
-245 44 -19 2 -71 0 -115 -5z" />
                    <path d="M44241 41690 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z" />
                    <path d="M51518 41660 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
                    <path d="M55350 41680 c-315 -31 -545 -185 -642 -430 -30 -76 -55 -196 -61
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
                    <path d="M78505 41059 c-44 -6 -121 -23 -170 -39 -283 -90 -475 -285 -568
-574 -30 -96 -32 -109 -31 -256 0 -148 1 -159 33 -255 96 -294 288 -484 581
-576 98 -30 114 -33 250 -33 136 0 152 3 250 33 293 92 485 282 581 576 32 96
33 107 33 255 1 147 -1 160 -31 256 -93 289 -286 485 -568 574 -80 26 -115 32
-245 44 -19 2 -71 0 -115 -5z" />
                    <path d="M46960 40840 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65 -161
-10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455 89
-643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29 218
-1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236 -25
-53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175 -61
427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101 239
-209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10 48
7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70 -2
-100 -6z" />
                    <path d="M53430 40840 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65 -161
-10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455 89
-643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29 218
-1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236 -25
-53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175 -61
427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101 239
-209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10 48
7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70 -2
-100 -6z" />
                    <path d="M48622 40651 l-23 -32 24 -42 c56 -94 133 -140 252 -152 172 -16 271
-81 336 -220 72 -154 79 -413 16 -617 -34 -110 -107 -192 -204 -228 -46 -17
-79 -20 -221 -20 -162 -1 -168 -1 -194 -25 -26 -23 -28 -29 -28 -108 0 -124
-1 -123 220 -130 157 -4 182 -7 237 -29 81 -33 114 -61 157 -132 43 -73 65
-165 75 -316 14 -227 -14 -378 -93 -492 -71 -105 -161 -158 -294 -172 -105
-11 -242 30 -322 96 -44 36 -115 129 -147 193 -63 123 -100 332 -89 492 4 62
2 107 -5 133 -14 45 -21 45 -114 7 -196 -81 -285 -241 -272 -490 8 -164 57
-276 176 -402 117 -124 264 -209 441 -255 71 -19 112 -22 245 -22 136 0 175 4
261 25 324 80 575 290 665 555 24 71 31 111 36 212 11 243 -56 429 -208 578
-58 58 -168 130 -237 158 l-43 17 66 36 c164 90 280 247 336 456 31 114 30
325 -1 444 -69 268 -232 417 -526 481 -70 15 -150 22 -297 27 l-202 6 -23 -32z" />
                    <path d="M57805 40674 c-112 -18 -233 -87 -305 -176 -50 -62 -91 -155 -178
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
                    <path d="M60340 40670 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328 -318
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
                    <path d="M64200 40670 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
-1 -109 -5 -134 -9z" />
                    <path d="M76215 38949 c-44 -6 -121 -23 -170 -39 -283 -90 -475 -285 -568
-574 -30 -96 -32 -109 -31 -256 0 -148 1 -159 33 -255 96 -294 288 -484 581
-576 98 -30 114 -33 250 -33 136 0 152 3 250 33 293 92 485 282 581 576 32 96
33 107 33 255 1 147 -1 160 -31 256 -93 289 -286 485 -568 574 -80 26 -115 32
-245 44 -19 2 -71 0 -115 -5z" />
                    <path d="M88941 38380 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z" />
                    <path d="M90960 38381 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63 -66
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
                    <path d="M84425 38371 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
                    <path d="M80400 38271 c-49 -10 -75 -26 -101 -63 -31 -43 -30 -132 4 -263 48
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
                    <path d="M79130 37530 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65 -161
-10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455 89
-643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29 218
-1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236 -25
-53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175 -61
427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101 239
-209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10 48
7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70 -2
-100 -6z" />
                    <path d="M82970 37530 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65 -161
-10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455 89
-643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29 218
-1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236 -25
-53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175 -61
427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101 239
-209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10 48
7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70 -2
-100 -6z" />
                    <path d="M86770 37360 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
                    <path d="M94020 37363 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z" />
                    <path d="M95850 37361 c-346 -52 -618 -263 -708 -551 -41 -130 -37 -261 10
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
                    <path d="M98070 37361 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
                    <path d="M80255 33889 c-44 -6 -121 -23 -170 -39 -283 -90 -475 -285 -568
-574 -30 -96 -32 -109 -31 -256 0 -148 1 -159 33 -255 96 -294 288 -484 581
-576 98 -30 114 -33 250 -33 136 0 152 3 250 33 293 92 485 282 581 576 32 96
33 107 33 255 1 147 -1 160 -31 256 -93 289 -286 485 -568 574 -80 26 -115 32
-245 44 -19 2 -71 0 -115 -5z" />
                    <path d="M92048 31840 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
                    <path d="M86048 31733 c-76 -162 -62 -294 41 -384 68 -60 114 -80 345 -148
230 -68 278 -86 331 -127 56 -43 78 -95 78 -184 -2 -242 -184 -370 -490 -346
-75 6 -85 5 -113 -15 -29 -22 -30 -25 -30 -104 0 -123 -1 -122 230 -127 165
-4 190 -7 235 -27 100 -45 169 -139 207 -282 19 -74 22 -110 23 -294 0 -191
-2 -216 -23 -282 -67 -214 -199 -315 -411 -315 -99 0 -177 25 -253 83 -99 74
-188 222 -229 375 -23 86 -29 271 -15 434 l7 85 -32 18 -32 18 -94 -46 c-149
-73 -211 -151 -249 -312 -24 -103 -15 -267 21 -353 43 -104 105 -188 226 -306
133 -129 197 -169 334 -209 92 -26 113 -28 265 -28 135 0 184 4 270 23 329 72
585 279 674 546 67 203 52 443 -39 624 -73 143 -202 271 -347 345 l-87 44 62
29 c221 105 334 285 325 517 -2 75 -8 100 -32 149 -36 73 -82 125 -161 181
-82 59 -175 91 -455 160 -276 67 -354 99 -387 160 -12 22 -27 70 -34 107 -13
72 -19 78 -87 78 -32 0 -35 -3 -74 -87z" />
                    <path d="M80965 31759 c-55 -17 -88 -57 -99 -120 -6 -36 -3 -58 34 -234 32
-150 29 -277 -13 -505 -19 -102 -33 -186 -32 -188 7 -9 151 35 212 64 154 73
225 183 247 379 11 94 -56 266 -133 343 l-34 34 74 -7 c148 -14 278 -54 332
-104 44 -40 83 -127 101 -226 13 -75 16 -170 16 -583 l0 -493 -57 46 c-99 81
-144 99 -248 99 -105 1 -154 -12 -222 -57 -50 -33 -104 -110 -124 -177 -17
-56 -23 -238 -10 -302 31 -147 136 -271 263 -309 160 -49 308 5 377 136 l20
40 -2 -555 -2 -555 -25 -70 c-70 -199 -251 -316 -468 -303 -178 11 -282 112
-324 313 -19 94 -11 318 16 448 l24 119 -31 29 c-18 15 -36 29 -40 29 -5 0
-29 -12 -55 -27 -207 -118 -334 -266 -372 -432 -26 -111 3 -282 65 -382 88
-142 279 -271 475 -320 82 -21 118 -24 260 -23 137 0 179 4 247 22 361 97 601
373 643 743 5 46 10 273 10 504 l1 420 25 -48 c66 -127 205 -148 384 -57 82
41 83 53 24 184 -55 121 -56 121 -157 86 -31 -11 -70 -20 -85 -20 -39 0 -108
25 -154 56 -37 24 -38 26 -38 84 0 58 1 60 38 85 67 44 179 51 254 15 23 -11
35 -11 66 -1 36 12 39 17 70 105 42 117 37 135 -45 172 -32 14 -90 31 -130 36
-90 14 -117 4 -195 -71 l-58 -54 0 559 c0 606 -1 612 -56 715 -57 106 -185
209 -334 267 -87 35 -243 71 -374 87 -132 16 -314 18 -361 4z m545 -1798 c55
-21 150 -87 150 -104 0 -20 -101 -106 -155 -132 -63 -29 -143 -34 -180 -9 -28
18 -55 81 -55 130 0 48 27 101 59 119 37 20 122 18 181 -4z" />
                    <path d="M94700 31410 c-171 -26 -303 -130 -346 -272 -25 -83 -15 -197 25
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
                    <path d="M83390 30850 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
                    <path d="M88260 30850 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
                    <path d="M97280 30851 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z" />
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