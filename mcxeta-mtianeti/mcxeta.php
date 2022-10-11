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


            <svg id="mcxetaSVG" version="1.0" xmlns="http://www.w3.org/2000/svg" width="1000px" height="100%" viewBox="0 0 21600.000000 28800.000000" preserveAspectRatio="xMidYMid meet">

                <g transform="translate(0.000000,28800.000000) scale(0.100000,-0.100000)">
                    <a xlink:href="../mcxeta-mtianeti.php" class="text-decoration-none">
                        <path id="group5-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="M40340 203394 c-8 -3 -40 -16 -70 -29 -109 -46 -307 -104 -390 -115
-197 -25 -303 -50 -362 -86 -85 -52 -133 -111 -147 -183 -6 -32 -19 -65 -29
-74 -9 -9 -54 -32 -100 -51 -157 -67 -302 -155 -381 -230 -84 -81 -317 -328
-346 -368 l-20 -27 -94 40 c-107 45 -267 83 -387 93 -107 9 -393 -10 -519 -34
-55 -11 -173 -24 -263 -30 -90 -6 -197 -18 -238 -26 -99 -18 -182 -18 -230 2
-22 9 -82 40 -134 69 -163 90 -304 106 -467 53 -57 -19 -80 -35 -182 -129
-108 -100 -186 -161 -334 -261 -45 -31 -98 -52 -218 -89 -88 -26 -213 -69
-279 -94 l-120 -45 -111 16 c-94 14 -119 21 -156 47 -36 26 -53 31 -101 32
-61 0 -88 -10 -212 -75 -207 -110 -262 -141 -345 -196 l-93 -60 -30 100 c-17
56 -34 119 -37 141 -13 77 -60 126 -135 139 -53 10 -731 -69 -775 -90 -41 -19
-102 -86 -107 -117 -8 -55 -64 -11 -95 74 -11 30 -32 88 -47 130 -32 90 -79
144 -139 160 -22 6 -53 23 -68 39 -40 39 -109 70 -171 77 -61 6 -249 -41 -613
-153 -115 -36 -255 -76 -310 -89 -54 -14 -127 -34 -161 -45 -34 -12 -71 -22
-81 -22 -10 -1 -54 21 -98 47 -68 42 -87 49 -130 49 -61 0 -112 -28 -137 -76
-24 -46 -48 -143 -48 -196 0 -49 27 -176 44 -210 9 -18 6 -50 -17 -165 -29
-147 -29 -139 -11 -357 5 -51 1 -79 -15 -128 -27 -80 -44 -203 -35 -265 4 -30
19 -67 41 -99 19 -29 40 -77 48 -107 7 -31 30 -92 50 -135 22 -47 41 -106 46
-145 18 -127 64 -240 128 -314 22 -25 31 -50 41 -113 l13 -80 -33 -65 c-17
-35 -46 -91 -62 -124 -17 -33 -37 -87 -46 -120 -22 -88 -36 -111 -127 -206
-88 -91 -102 -122 -86 -189 13 -54 44 -98 93 -129 36 -23 46 -36 51 -64 5 -31
46 -98 176 -285 16 -24 35 -68 41 -97 9 -44 22 -66 68 -118 32 -34 68 -80 81
-101 32 -51 50 -142 51 -251 1 -132 17 -268 43 -371 19 -75 34 -106 82 -175
32 -46 87 -114 122 -151 36 -37 62 -72 58 -78 -3 -5 1 -59 10 -118 17 -117 15
-130 -28 -199 -13 -21 -34 -78 -47 -128 -22 -82 -24 -111 -24 -310 1 -228 9
-294 45 -367 16 -30 19 -56 17 -135 -4 -126 24 -304 54 -347 12 -17 43 -55 69
-83 64 -71 137 -178 145 -211 4 -15 15 -40 24 -57 10 -16 27 -69 39 -117 22
-94 43 -136 83 -168 15 -11 32 -37 38 -58 7 -20 33 -66 59 -102 25 -36 66 -95
89 -132 42 -64 43 -68 32 -109 -15 -53 -10 -81 46 -256 l45 -141 -16 -64 c-14
-57 -27 -251 -29 -423 0 -66 14 -112 51 -162 13 -18 26 -47 30 -65 3 -18 14
-49 23 -68 10 -19 20 -62 23 -96 3 -42 13 -74 31 -102 14 -23 26 -47 26 -53 0
-22 44 -84 96 -134 l51 -50 18 -105 c10 -58 23 -116 30 -130 7 -14 16 -41 20
-60 4 -19 15 -46 25 -60 9 -14 24 -56 33 -93 9 -38 25 -80 35 -95 35 -49 41
-92 39 -252 -3 -150 -4 -156 -30 -195 -41 -61 -68 -272 -40 -307 6 -7 14 -29
18 -48 4 -19 19 -51 32 -72 l25 -37 -45 -58 c-67 -87 -82 -179 -37 -242 15
-22 16 -30 3 -89 -20 -98 -18 -286 5 -328 7 -14 8 -34 1 -62 -11 -50 -5 -82
28 -139 23 -40 23 -43 8 -67 -15 -22 -37 -162 -38 -243 -1 -64 44 -160 108
-233 17 -19 26 -51 39 -138 10 -62 26 -133 37 -158 l19 -45 -33 -41 c-31 -38
-32 -44 -32 -127 1 -100 15 -136 81 -210 24 -27 44 -57 44 -67 0 -44 24 -97
56 -127 19 -17 80 -87 135 -153 54 -67 118 -137 141 -156 78 -64 208 -200 208
-218 0 -9 9 -43 20 -75 11 -32 25 -88 30 -123 6 -35 24 -91 41 -125 24 -46 33
-81 39 -148 7 -73 13 -95 37 -127 15 -22 54 -76 86 -120 93 -130 204 -202 311
-202 30 0 36 -4 36 -21 0 -29 95 -119 160 -151 30 -14 69 -41 86 -60 28 -31
32 -43 48 -163 9 -71 16 -145 16 -164 0 -18 7 -77 16 -130 18 -106 41 -152 99
-198 20 -15 55 -58 77 -95 22 -38 44 -68 48 -68 3 0 15 -28 24 -62 10 -35 27
-78 38 -96 27 -44 43 -155 42 -292 l-1 -116 -35 -46 c-26 -34 -38 -61 -43
-100 -4 -29 -15 -66 -25 -83 -10 -16 -21 -48 -25 -70 -4 -22 -16 -56 -28 -75
-16 -26 -22 -51 -22 -96 0 -52 4 -66 30 -99 17 -21 52 -66 78 -99 26 -34 59
-79 74 -101 14 -22 44 -60 67 -85 23 -25 51 -61 63 -80 25 -40 452 -457 498
-485 17 -11 75 -60 131 -110 119 -106 191 -163 239 -188 43 -23 138 -33 186
-19 32 8 44 5 122 -33 49 -24 110 -64 143 -94 60 -55 223 -141 339 -179 94
-31 122 -51 141 -102 9 -25 30 -72 46 -104 24 -48 28 -63 19 -78 -11 -18 -23
-90 -41 -244 -9 -79 -7 -104 11 -195 11 -57 27 -122 34 -144 8 -22 17 -62 20
-90 7 -51 41 -128 80 -180 12 -17 26 -45 30 -64 4 -19 20 -54 35 -78 15 -24
38 -69 51 -101 12 -31 33 -72 46 -89 31 -42 48 -91 67 -192 8 -45 25 -98 37
-118 21 -33 21 -39 10 -99 -15 -71 -9 -119 24 -214 13 -36 25 -94 28 -130 4
-55 12 -77 52 -145 26 -44 64 -98 84 -121 20 -22 56 -69 81 -104 25 -35 64
-83 88 -107 23 -24 59 -71 79 -106 41 -70 120 -157 169 -188 21 -12 37 -33 45
-57 18 -58 68 -140 89 -147 10 -3 33 -28 50 -55 17 -27 38 -54 46 -60 7 -7 14
-21 14 -32 0 -11 14 -50 31 -86 18 -37 35 -76 40 -87 15 -38 39 -164 39 -207
0 -24 5 -59 10 -78 54 -204 101 -321 164 -403 20 -26 36 -49 36 -52 0 -3 12
-23 26 -44 14 -22 41 -81 60 -132 34 -93 35 -96 32 -236 l-2 -141 35 -54 c20
-29 42 -74 49 -101 7 -26 16 -50 21 -52 4 -3 10 -24 14 -48 4 -23 13 -58 21
-77 13 -34 35 -161 54 -309 8 -61 15 -81 45 -119 19 -25 33 -53 31 -61 -2 -9
-10 -40 -17 -70 -7 -32 -26 -73 -45 -99 -19 -24 -36 -53 -39 -65 -3 -12 -10
-44 -15 -72 -6 -27 -26 -73 -45 -101 -41 -63 -79 -166 -108 -296 -21 -96 -21
-97 -3 -195 29 -157 45 -213 68 -246 17 -24 22 -46 23 -101 1 -47 11 -100 29
-158 21 -65 27 -98 22 -130 -3 -24 -10 -133 -15 -243 -9 -189 -22 -267 -53
-328 -24 -48 -27 -182 -5 -247 2 -8 13 -41 23 -73 12 -38 37 -80 72 -123 l54
-65 3 -167 c2 -186 21 -283 77 -398 26 -54 38 -67 104 -108 45 -29 74 -54 74
-65 0 -9 13 -38 30 -64 28 -44 29 -52 33 -184 4 -111 9 -148 25 -188 12 -28
26 -70 32 -95 7 -25 17 -51 22 -57 7 -9 6 -20 -5 -36 -8 -12 -18 -38 -22 -57
-8 -36 -14 -48 -56 -120 -35 -58 -73 -256 -59 -314 9 -42 6 -58 -20 -96 -21
-31 -38 -108 -39 -175 -1 -77 -11 -125 -39 -185 -23 -49 -26 -71 -30 -195 -8
-258 -9 -249 24 -290 35 -45 123 -186 124 -200 3 -70 222 -324 397 -460 31
-24 64 -63 84 -98 34 -59 69 -87 143 -113 50 -18 106 -60 106 -80 0 -50 77
-231 115 -269 11 -11 27 -40 35 -65 15 -45 49 -104 95 -168 29 -40 116 -101
163 -114 31 -9 120 -50 222 -103 67 -35 103 -64 130 -105 15 -23 57 -70 93
-103 58 -55 66 -68 76 -117 6 -30 21 -75 33 -100 11 -25 28 -60 37 -79 16 -35
74 -81 102 -81 20 0 80 -77 126 -161 46 -84 107 -172 154 -221 22 -24 48 -56
57 -71 9 -15 37 -40 61 -54 25 -14 63 -43 85 -63 55 -49 101 -80 119 -80 9 0
96 -23 194 -51 165 -47 181 -54 216 -90 21 -21 48 -41 60 -44 13 -4 31 -22 42
-41 22 -42 62 -67 146 -95 46 -15 78 -19 114 -14 33 4 69 0 105 -11 59 -18 74
-31 229 -203 47 -51 107 -111 135 -133 28 -22 68 -61 89 -86 21 -26 52 -55 69
-65 17 -10 61 -45 98 -77 74 -63 90 -68 215 -68 54 0 84 -6 130 -27 67 -30
133 -85 155 -129 22 -45 118 -144 179 -185 55 -37 171 -81 212 -81 12 0 33 -7
47 -15 49 -27 150 -63 224 -80 40 -9 93 -28 118 -41 25 -13 74 -38 110 -55 36
-16 78 -37 94 -45 16 -8 56 -24 88 -35 33 -11 83 -33 111 -48 29 -16 86 -36
127 -45 205 -46 279 -65 395 -102 72 -23 228 -84 240 -94 17 -14 165 -60 194
-60 14 0 64 -7 111 -15 46 -9 136 -20 200 -25 112 -10 117 -12 181 -54 36 -24
83 -53 105 -64 69 -35 197 -75 264 -81 l65 -6 7 -66 c3 -37 13 -77 21 -90 8
-13 18 -35 22 -49 4 -14 18 -41 31 -60 30 -46 56 -155 59 -255 2 -71 6 -88 40
-150 20 -38 46 -82 56 -96 10 -14 39 -70 63 -123 70 -149 193 -268 327 -315
30 -10 74 -29 99 -43 25 -13 95 -40 154 -59 119 -37 118 -37 178 -149 44 -82
72 -174 94 -310 9 -58 29 -139 44 -180 15 -41 33 -100 40 -130 12 -49 81 -223
123 -305 8 -16 23 -47 32 -67 19 -39 75 -79 129 -92 16 -4 90 -48 165 -98 105
-70 137 -97 142 -117 3 -15 14 -39 24 -54 11 -17 19 -50 21 -82 3 -84 69 -175
127 -175 21 0 110 -164 118 -215 3 -22 11 -78 18 -125 9 -58 24 -111 50 -166
25 -52 43 -109 51 -163 11 -70 20 -93 60 -155 26 -41 66 -88 89 -106 27 -22
45 -46 51 -71 6 -21 24 -52 41 -69 28 -27 32 -41 40 -112 10 -87 42 -165 84
-204 13 -12 27 -39 30 -60 4 -22 15 -53 24 -69 10 -17 21 -58 24 -91 3 -33 15
-85 26 -115 11 -30 32 -99 47 -153 l27 -100 -29 -115 c-19 -77 -36 -122 -51
-139 -48 -51 -53 -146 -11 -204 12 -18 21 -49 23 -82 5 -78 27 -117 123 -215
l84 -86 -6 -60 c-3 -33 -2 -76 4 -95 5 -19 14 -72 19 -117 6 -46 18 -94 27
-108 12 -19 15 -37 10 -73 -9 -70 1 -106 45 -156 32 -37 38 -49 33 -74 -9 -43
13 -131 41 -168 14 -18 25 -38 25 -44 0 -7 8 -24 19 -38 33 -47 78 -146 85
-187 10 -56 110 -201 185 -268 17 -15 45 -57 62 -94 25 -52 60 -95 168 -207
75 -77 149 -158 165 -179 31 -42 319 -340 553 -573 150 -149 178 -187 261
-349 9 -16 45 -75 82 -130 36 -55 83 -127 103 -161 20 -34 72 -95 115 -136 82
-78 158 -122 231 -134 44 -7 63 -26 96 -96 27 -59 95 -115 148 -123 l45 -7 6
-58 c5 -43 17 -73 45 -117 40 -62 102 -123 126 -123 9 0 16 -16 21 -46 4 -26
21 -67 40 -96 19 -28 41 -65 50 -84 34 -72 149 -147 281 -185 57 -16 105 -45
214 -128 18 -14 29 -34 33 -63 8 -49 40 -105 64 -112 10 -3 53 -35 97 -70 68
-56 89 -67 149 -81 55 -13 77 -24 99 -48 15 -17 27 -37 27 -44 0 -23 162 -184
235 -233 79 -54 178 -153 190 -190 4 -14 21 -44 38 -67 l30 -43 -6 -128 c-10
-206 -50 -406 -83 -419 -28 -11 -53 -72 -75 -188 -15 -78 -32 -134 -48 -160
-53 -87 -48 -143 24 -262 26 -43 62 -104 79 -136 25 -46 44 -65 91 -94 33 -19
72 -40 87 -45 20 -7 29 -19 34 -44 3 -19 10 -37 15 -40 5 -3 9 -14 9 -26 0
-12 30 -50 74 -95 49 -48 77 -85 82 -106 3 -17 13 -42 21 -54 8 -12 11 -27 8
-34 -19 -29 -23 -93 -15 -206 7 -98 13 -130 30 -158 27 -43 99 -108 146 -130
50 -24 161 -135 170 -170 4 -17 10 -34 14 -40 4 -5 13 -27 19 -47 15 -44 48
-109 88 -169 23 -35 28 -53 28 -103 0 -43 7 -76 23 -111 46 -98 52 -111 77
-175 14 -36 57 -122 95 -192 39 -70 70 -136 70 -147 0 -10 18 -43 41 -72 22
-30 43 -66 46 -82 3 -15 22 -46 42 -70 20 -23 53 -63 74 -89 21 -27 59 -60 85
-74 26 -15 72 -44 102 -64 30 -21 71 -45 90 -55 19 -9 53 -34 75 -55 22 -21
64 -54 94 -73 50 -33 58 -44 86 -115 18 -44 38 -104 45 -133 16 -73 34 -123
64 -189 16 -35 27 -79 29 -122 4 -53 11 -75 35 -110 24 -36 34 -67 50 -159 22
-128 22 -125 -52 -242 -48 -76 -73 -204 -58 -295 7 -37 14 -96 18 -132 3 -36
10 -89 16 -118 7 -38 6 -57 -2 -66 -32 -40 -18 -235 25 -331 33 -76 38 -108
25 -169 -9 -44 -8 -74 5 -153 42 -254 79 -416 142 -617 37 -118 39 -121 113
-199 78 -82 142 -131 246 -186 33 -18 85 -56 114 -86 52 -53 53 -55 39 -81 -8
-15 -14 -50 -14 -79 1 -83 26 -112 152 -178 60 -32 130 -78 159 -105 l50 -47
-14 -35 c-20 -49 -19 -130 3 -168 16 -27 17 -35 6 -59 -24 -49 -26 -208 -4
-298 11 -46 16 -91 12 -105 -4 -14 -7 -55 -8 -91 -1 -36 -4 -69 -8 -72 -3 -4
-14 -28 -24 -54 -9 -27 -34 -86 -54 -133 -41 -96 -85 -271 -85 -341 0 -119 55
-256 131 -325 102 -93 372 -194 515 -194 68 0 74 -2 74 -21 0 -35 27 -81 97
-165 36 -43 72 -95 80 -114 8 -19 30 -70 49 -112 19 -42 42 -113 51 -158 13
-67 26 -97 69 -163 29 -45 71 -117 93 -159 39 -75 41 -81 41 -172 0 -68 -4
-97 -14 -105 -8 -7 -33 -40 -55 -74 -35 -55 -43 -78 -62 -182 -12 -66 -23
-183 -26 -260 -5 -125 -2 -154 21 -264 24 -110 64 -211 84 -211 4 0 6 -35 5
-78 -3 -134 3 -153 83 -275 41 -61 74 -114 74 -117 0 -4 28 -25 63 -46 56 -35
69 -39 132 -40 60 0 75 -4 110 -29 22 -16 56 -50 76 -75 23 -29 56 -56 85 -69
27 -13 66 -43 86 -66 40 -45 167 -128 221 -144 220 -66 455 -186 504 -258 28
-41 51 -102 58 -153 3 -25 19 -78 36 -118 22 -54 32 -99 39 -177 9 -98 13
-112 65 -219 31 -63 77 -139 103 -169 66 -77 172 -214 203 -262 14 -23 65 -75
112 -117 77 -66 95 -78 154 -92 36 -10 79 -26 94 -36 15 -11 51 -25 80 -32 45
-9 65 -21 117 -72 43 -41 74 -82 95 -126 36 -74 122 -166 180 -194 21 -10 62
-20 90 -23 29 -3 77 -17 107 -32 44 -21 59 -36 81 -75 21 -38 39 -57 79 -78
29 -15 70 -43 91 -62 53 -49 92 -67 158 -73 52 -6 59 -9 108 -62 29 -31 52
-65 53 -77 0 -11 6 -41 14 -67 7 -25 10 -49 5 -54 -4 -4 -19 -30 -32 -58 -55
-111 -60 -278 -12 -360 l25 -43 -28 -53 c-41 -80 -93 -173 -103 -184 -4 -6
-11 -31 -15 -55 -3 -25 -14 -56 -22 -70 -11 -16 -17 -52 -19 -102 -1 -47 -8
-87 -17 -100 -21 -34 -29 -87 -18 -133 57 -240 89 -318 164 -400 l47 -52 -26
-14 c-35 -19 -113 -107 -113 -128 0 -20 -81 -191 -109 -230 -30 -41 -54 -139
-56 -221 -1 -41 -7 -127 -15 -190 l-13 -115 33 -130 c19 -74 44 -146 58 -167
24 -36 25 -45 29 -235 5 -282 4 -276 70 -341 l56 -54 3 -72 c1 -39 11 -111 22
-159 l20 -88 -32 -47 c-37 -55 -52 -127 -62 -284 -5 -99 -9 -112 -40 -164 -19
-32 -39 -77 -45 -101 -9 -34 -17 -44 -38 -49 -31 -7 -96 -48 -132 -84 -29 -27
-69 -97 -69 -118 0 -16 -113 -252 -145 -302 -19 -31 -40 -96 -75 -239 -10 -39
11 -163 35 -219 9 -19 15 -63 15 -103 0 -62 -4 -77 -38 -137 -47 -82 -91 -144
-159 -223 -54 -63 -61 -83 -84 -232 -6 -39 -15 -81 -21 -92 -6 -11 -12 -45
-14 -75 -2 -59 -13 -110 -38 -175 -20 -56 -33 -199 -30 -334 3 -111 3 -115
-25 -155 l-29 -41 -124 -11 c-140 -13 -175 -27 -211 -84 -18 -28 -22 -50 -22
-110 0 -60 4 -82 22 -110 26 -42 66 -67 121 -76 39 -6 42 -9 42 -38 0 -77 -31
-228 -56 -278 -33 -64 -101 -176 -125 -203 -59 -69 -79 -154 -59 -250 7 -33
14 -105 15 -160 0 -58 7 -113 14 -130 25 -57 30 -70 37 -105 3 -19 11 -40 16
-47 5 -7 7 -21 3 -33 -8 -26 31 -176 55 -210 19 -26 19 -27 -4 -76 -32 -70
-36 -101 -22 -170 12 -58 31 -94 82 -156 12 -15 25 -47 29 -70 9 -53 53 -125
121 -198 39 -42 56 -69 69 -115 9 -33 25 -74 35 -91 13 -20 23 -65 30 -135 19
-193 53 -281 126 -324 61 -36 148 -169 184 -282 15 -48 41 -103 56 -122 26
-33 29 -43 29 -113 0 -48 5 -82 13 -89 6 -7 12 -27 12 -44 0 -50 39 -186 65
-231 14 -24 57 -71 96 -106 l70 -63 -6 -45 c-4 -24 -17 -58 -28 -75 -19 -25
-22 -44 -22 -120 0 -105 16 -141 81 -180 36 -22 39 -27 54 -107 10 -53 13 -96
8 -118 -4 -19 -9 -89 -10 -155 -1 -97 3 -136 21 -205 12 -47 31 -127 42 -178
17 -82 26 -104 77 -180 73 -109 79 -125 85 -239 4 -85 8 -98 41 -155 l37 -61
-15 -71 c-34 -156 -57 -251 -65 -261 -5 -5 -14 -28 -21 -50 -7 -22 -23 -62
-35 -90 -22 -46 -69 -221 -100 -375 -8 -36 -28 -103 -45 -150 -18 -47 -42
-116 -54 -155 -33 -104 -67 -148 -232 -307 -115 -111 -166 -153 -222 -183 -52
-27 -89 -56 -127 -100 -58 -66 -179 -147 -245 -165 -48 -13 -216 -175 -244
-235 -50 -104 -134 -212 -188 -241 -48 -25 -132 -105 -160 -152 -14 -25 -29
-66 -33 -91 -12 -80 -80 -201 -178 -317 -57 -67 -137 -180 -158 -221 -26 -53
-60 -192 -53 -215 3 -9 -13 -49 -37 -90 -23 -40 -48 -100 -55 -133 -16 -71
-18 -206 -5 -325 14 -125 16 -360 4 -479 -6 -63 -7 -120 -1 -146 10 -48 -1
-123 -31 -207 -11 -31 -25 -98 -31 -150 -7 -64 -29 -151 -70 -278 -53 -165
-68 -197 -132 -300 -40 -64 -100 -148 -133 -186 -33 -39 -89 -105 -125 -148
-69 -82 -173 -165 -230 -185 -19 -6 -130 -27 -247 -46 -117 -19 -224 -40 -239
-45 -14 -6 -57 -40 -95 -77 -68 -65 -73 -68 -212 -116 -78 -26 -160 -54 -182
-60 -30 -8 -64 -35 -139 -111 -209 -214 -276 -375 -204 -493 19 -32 19 -33 -1
-79 -12 -26 -21 -50 -21 -55 0 -5 -16 -29 -35 -54 -24 -32 -36 -61 -41 -96 -4
-28 -14 -56 -22 -62 -50 -38 -123 -121 -128 -145 -4 -19 -20 -37 -49 -56 -68
-43 -140 -127 -154 -180 -16 -64 -107 -189 -153 -210 -22 -10 -73 -58 -130
-122 -127 -144 -165 -202 -173 -267 -4 -28 -13 -61 -20 -72 -7 -11 -16 -36
-20 -55 -4 -19 -13 -54 -21 -78 -21 -64 -23 -192 -3 -223 10 -14 18 -56 22
-104 6 -95 33 -171 90 -256 72 -108 149 -266 161 -329 5 -32 0 -44 -40 -100
-25 -36 -66 -104 -90 -152 -24 -49 -48 -88 -52 -88 -5 0 -16 15 -25 33 -68
130 -188 262 -292 322 -28 16 -88 54 -135 84 -47 30 -105 63 -129 74 -24 11
-65 34 -90 52 -25 18 -71 38 -101 44 -30 7 -86 22 -124 33 -56 17 -85 20 -149
15 -62 -5 -97 -2 -156 13 -63 16 -118 20 -321 22 -221 3 -257 1 -363 -20 -144
-27 -228 -70 -332 -171 -38 -37 -106 -96 -150 -131 -44 -35 -109 -91 -145
-126 -44 -43 -78 -66 -105 -73 -22 -6 -61 -24 -86 -40 -26 -16 -59 -32 -75
-35 -16 -4 -87 -31 -157 -60 -127 -53 -128 -53 -170 -39 -56 20 -129 11 -179
-22 -30 -20 -59 -28 -126 -35 -48 -5 -118 -14 -157 -21 -96 -17 -209 -13 -313
12 -65 16 -123 22 -227 23 -129 1 -148 -1 -250 -31 -60 -17 -141 -36 -180 -43
-155 -25 -177 -30 -207 -51 l-31 -23 -66 18 c-36 10 -87 23 -114 29 -41 10
-58 22 -125 93 -160 169 -194 214 -290 387 -172 310 -205 390 -247 605 -32
160 -52 222 -101 304 -20 35 -43 81 -50 102 -8 22 -25 53 -37 70 -13 17 -36
78 -52 136 -15 58 -39 125 -51 150 -13 25 -32 72 -43 105 -39 119 -123 321
-161 385 -33 56 -110 234 -110 254 0 4 -29 61 -65 126 -44 80 -79 161 -106
247 -140 442 -134 426 -281 721 -78 158 -156 307 -173 332 -17 25 -35 56 -41
70 -6 14 -51 69 -100 123 -49 54 -118 132 -153 175 -104 126 -142 163 -257
248 -181 136 -279 193 -463 271 -169 73 -179 76 -284 84 -116 9 -254 -4 -382
-38 -65 -16 -224 -91 -291 -135 -22 -14 -73 -42 -112 -61 -39 -19 -108 -61
-152 -93 -45 -33 -87 -62 -94 -65 -6 -3 -24 -14 -41 -23 -33 -19 -63 -32 -145
-67 -30 -13 -73 -36 -95 -51 -37 -27 -150 -66 -235 -83 -39 -8 -120 -52 -120
-66 0 -18 -43 -47 -86 -58 -28 -7 -57 -25 -81 -50 -33 -34 -45 -39 -97 -44
-35 -4 -70 -14 -86 -25 -14 -11 -41 -23 -59 -27 -36 -8 -182 -94 -222 -131
-14 -13 -28 -24 -32 -24 -25 0 -105 -67 -129 -109 -28 -48 -56 -67 -168 -115
-28 -12 -122 -101 -137 -129 -7 -13 -47 -27 -144 -51 -74 -18 -165 -47 -203
-64 -52 -24 -83 -32 -127 -32 -71 0 -156 -17 -188 -37 -20 -13 -45 -15 -125
-10 l-101 5 -55 60 c-41 44 -61 76 -74 119 -30 94 -79 162 -214 294 -196 190
-233 219 -407 309 -66 34 -140 77 -165 95 -25 18 -89 49 -143 70 -74 27 -119
52 -181 100 -45 35 -89 71 -96 80 -8 10 -57 48 -110 85 -52 37 -106 80 -120
95 -14 15 -57 51 -95 80 -39 28 -111 90 -161 136 -50 46 -103 91 -120 99 -47
24 -195 130 -250 180 -80 71 -196 148 -238 156 -23 4 -79 34 -135 73 -53 36
-132 84 -176 107 -82 43 -271 144 -430 230 -50 27 -104 59 -120 70 -48 33
-452 229 -555 269 -52 20 -153 60 -225 90 -147 60 -184 73 -415 145 -431 136
-500 150 -734 150 -146 0 -260 14 -456 57 -78 17 -157 26 -375 42 -71 5 -188
21 -258 36 -198 41 -229 28 -306 -131 -29 -59 -68 -131 -87 -161 -32 -51 -72
-140 -112 -253 -10 -29 -15 -73 -14 -122 2 -71 -3 -91 -49 -220 -60 -167 -295
-690 -344 -765 -19 -28 -54 -93 -78 -145 -24 -51 -71 -140 -104 -198 -50 -87
-128 -235 -231 -439 -174 -348 -244 -473 -472 -856 -92 -154 -227 -388 -300
-520 -183 -329 -420 -721 -620 -1025 -92 -140 -177 -271 -188 -291 -26 -46
-10 -19 -221 -400 -142 -257 -254 -440 -527 -860 -191 -294 -525 -808 -742
-1144 -217 -335 -396 -611 -397 -613 -2 -2 -61 11 -131 28 -71 18 -167 34
-214 37 -67 4 -93 10 -120 28 -36 25 -139 55 -184 55 -14 0 -72 22 -129 49
-56 27 -127 56 -157 65 -31 8 -76 26 -100 39 -25 13 -91 34 -148 47 -91 21
-110 22 -165 12 -34 -7 -90 -23 -123 -37 l-62 -25 -72 30 c-40 17 -76 30 -81
30 -4 0 -19 10 -32 23 -46 42 -173 107 -252 128 -112 31 -238 31 -323 0 -67
-24 -142 -23 -162 2 -51 64 -82 94 -129 127 -31 20 -63 50 -71 64 -7 15 -29
36 -48 48 -19 12 -54 38 -79 59 -84 74 -126 91 -226 98 -78 5 -100 11 -142 36
-44 26 -60 29 -125 29 -41 0 -109 -5 -150 -11 -90 -15 -312 -77 -358 -101 -32
-16 -40 -16 -150 0 -65 9 -133 17 -152 18 -22 0 -52 12 -80 31 -88 59 -160 90
-229 98 -51 5 -79 15 -121 42 -73 47 -132 59 -260 54 -80 -3 -124 -10 -185
-31 -119 -40 -148 -43 -295 -33 -190 13 -226 4 -306 -76 -53 -54 -118 -107
-173 -140 -9 -5 -29 -19 -46 -31 -45 -31 -59 -34 -105 -22 -30 8 -61 8 -108 0
-37 -6 -101 -16 -142 -22 -41 -6 -88 -19 -105 -29 -17 -10 -58 -21 -90 -25
-72 -7 -370 17 -475 40 -59 12 -84 14 -116 5 -73 -20 -96 -54 -159 -239 -31
-92 -116 -329 -188 -527 -71 -198 -134 -378 -139 -400 -5 -22 -74 -353 -154
-735 -79 -382 -153 -735 -163 -785 -11 -49 -59 -292 -106 -538 -48 -247 -93
-467 -102 -490 -8 -23 -15 -64 -16 -92 -2 -92 44 -137 186 -181 45 -14 140
-49 210 -76 102 -40 149 -53 225 -61 149 -17 178 -14 304 26 107 34 121 36
166 26 28 -5 83 -30 123 -55 87 -52 251 -117 337 -134 46 -9 72 -10 109 -1 60
14 495 7 568 -9 28 -6 91 -24 140 -39 50 -16 149 -36 220 -45 118 -15 136 -16
200 -1 39 8 89 25 111 37 l41 21 29 -20 c33 -23 225 -73 281 -73 59 0 105 17
167 60 67 47 112 59 221 60 44 0 121 7 170 15 50 8 112 15 138 15 27 0 94 9
149 20 l99 21 92 -57 c51 -32 121 -76 157 -99 84 -54 210 -101 318 -120 47 -8
103 -20 124 -26 48 -13 92 -5 138 26 20 12 54 32 78 44 l42 21 57 -32 c32 -18
90 -65 128 -104 62 -64 76 -73 118 -79 27 -4 71 -5 99 -3 l50 5 137 -101 c75
-56 165 -122 201 -146 36 -24 82 -58 102 -76 21 -18 61 -46 90 -61 49 -25 65
-28 213 -34 153 -6 266 -22 378 -53 29 -8 75 -17 102 -21 28 -3 76 -15 108
-26 68 -23 91 -23 166 -5 31 8 91 16 133 18 66 3 77 1 73 -12 -18 -61 -36
-202 -31 -240 5 -38 2 -51 -19 -82 -14 -20 -25 -41 -25 -46 0 -6 -26 -33 -59
-61 -32 -28 -66 -66 -75 -85 -21 -44 -46 -165 -46 -222 0 -24 -5 -44 -11 -44
-5 0 -35 -12 -65 -27 -69 -33 -110 -99 -120 -189 -3 -32 -9 -70 -14 -84 -38
-114 -43 -121 -101 -160 -31 -22 -104 -92 -162 -157 -57 -65 -112 -125 -121
-132 -32 -27 -122 -166 -137 -211 -21 -67 -18 -163 10 -256 l24 -80 -52 -52
c-28 -28 -51 -59 -51 -70 0 -10 -16 -34 -36 -53 -65 -62 -89 -114 -88 -194 1
-38 9 -91 18 -117 16 -47 16 -48 -9 -98 -14 -27 -47 -80 -74 -118 -39 -54 -53
-85 -71 -157 -35 -140 -37 -220 -6 -353 27 -122 50 -178 117 -294 52 -90 313
-359 434 -448 44 -32 103 -81 130 -110 54 -55 185 -144 241 -163 l34 -12 -25
-38 c-59 -87 -55 -244 10 -342 46 -70 214 -245 288 -300 140 -104 166 -127
201 -179 34 -51 205 -412 221 -466 4 -14 20 -47 36 -75 31 -55 94 -98 161
-110 42 -8 41 -4 67 -140 16 -86 17 -112 8 -185 -18 -142 -14 -180 28 -258 41
-79 63 -103 159 -169 60 -42 72 -55 90 -103 34 -91 81 -163 118 -182 43 -22
104 -38 146 -38 29 0 33 -4 39 -32 4 -22 28 -55 72 -99 82 -81 118 -93 261
-83 54 4 114 4 135 0 l38 -7 -7 -47 c-4 -32 0 -72 15 -132 26 -102 39 -129 90
-185 39 -43 40 -43 29 -91 -11 -50 -5 -120 11 -130 5 -3 9 -16 9 -28 0 -13 14
-51 32 -85 26 -50 41 -67 84 -91 58 -34 64 -46 64 -138 0 -48 -5 -71 -20 -92
-11 -15 -26 -54 -35 -85 -13 -50 -13 -66 -1 -119 14 -63 11 -120 -14 -225 -8
-36 -10 -89 -7 -155 4 -56 9 -136 11 -179 3 -42 8 -81 11 -86 3 -6 -16 -42
-41 -82 -49 -75 -83 -188 -84 -275 l0 -41 -87 -7 c-114 -8 -200 -31 -243 -64
-70 -54 -157 -98 -218 -110 -82 -17 -151 -61 -179 -115 -13 -23 -23 -49 -23
-57 0 -24 -47 -55 -151 -101 -51 -22 -104 -49 -119 -59 -15 -10 -64 -35 -110
-56 l-84 -36 -95 16 c-78 14 -109 15 -164 6 -70 -11 -157 -45 -207 -80 -18
-13 -44 -20 -72 -20 -50 0 -167 -29 -219 -54 -20 -9 -64 -39 -98 -67 -42 -34
-78 -53 -112 -61 -33 -8 -66 -26 -102 -56 -50 -42 -63 -61 -103 -147 -11 -22
-58 -80 -105 -130 -47 -49 -96 -106 -109 -125 -13 -19 -70 -80 -126 -135 -73
-72 -108 -115 -124 -152 -15 -33 -31 -55 -44 -59 -12 -3 -53 -21 -93 -40 -39
-19 -97 -39 -130 -44 -135 -23 -170 -36 -235 -88 -36 -28 -90 -61 -121 -72
-64 -24 -219 -123 -256 -164 -14 -14 -31 -26 -38 -26 -19 0 -91 -50 -124 -87
-45 -48 -136 -196 -144 -233 -9 -46 -45 -101 -115 -175 -31 -33 -66 -73 -77
-90 -27 -40 -46 -133 -38 -188 l7 -44 -69 -21 c-94 -29 -155 -71 -198 -136
-42 -62 -54 -106 -55 -192 0 -47 -6 -72 -29 -115 -35 -66 -44 -114 -33 -167 9
-37 8 -40 -22 -58 -71 -42 -130 -122 -141 -194 -4 -25 -16 -60 -27 -78 -13
-21 -20 -51 -21 -85 -1 -107 24 -354 48 -474 l25 -125 -45 -50 c-25 -28 -45
-55 -45 -62 0 -6 -15 -36 -32 -66 -33 -56 -71 -140 -89 -195 -6 -16 -11 -64
-12 -106 -3 -72 -5 -78 -49 -140 -25 -35 -58 -75 -73 -89 -34 -31 -131 -179
-150 -229 -16 -43 -45 -182 -45 -220 0 -14 -11 -71 -25 -126 -14 -55 -28 -122
-31 -150 -6 -48 -64 -182 -120 -275 -27 -45 -27 -45 -30 -276 -2 -217 -4 -235
-25 -275 -16 -31 -21 -59 -20 -99 4 -153 4 -158 -16 -187 -33 -46 -87 -155
-98 -198 -7 -27 -17 -41 -30 -44 -31 -6 -99 -56 -143 -106 -34 -38 -42 -58
-53 -115 -7 -39 -15 -70 -19 -70 -15 0 -92 -75 -121 -117 -24 -34 -32 -59 -36
-106 -4 -45 -12 -70 -30 -91 -63 -76 -83 -163 -63 -273 19 -102 67 -240 110
-313 21 -36 55 -100 75 -142 l36 -77 -54 -65 c-62 -77 -62 -76 -116 -227 -38
-110 -94 -210 -159 -289 -46 -56 -132 -188 -132 -203 0 -7 -11 -36 -25 -62
-13 -27 -27 -60 -30 -74 -6 -30 19 -133 39 -162 23 -34 -7 -102 -64 -143 -57
-41 -95 -90 -104 -131 -5 -23 -18 -37 -52 -55 -25 -14 -52 -37 -60 -52 -7 -14
-31 -47 -52 -71 -59 -68 -80 -107 -88 -164 -11 -87 1 -134 51 -191 24 -29 49
-69 56 -89 23 -73 51 -116 130 -199 43 -47 79 -89 79 -95 0 -6 -14 -31 -32
-57 -44 -63 -44 -126 -1 -197 20 -33 33 -70 37 -109 4 -32 11 -66 16 -76 6
-10 10 -29 10 -41 0 -37 31 -151 53 -194 11 -21 43 -64 72 -95 41 -43 54 -64
59 -99 4 -24 16 -57 28 -73 17 -25 20 -38 14 -85 -3 -30 -16 -73 -28 -96 -32
-61 -32 -170 0 -214 31 -43 137 -117 187 -131 22 -6 60 -18 85 -27 26 -10 57
-14 75 -11 25 5 36 1 56 -20 32 -35 142 -123 199 -159 96 -62 137 -103 149
-148 10 -41 8 -48 -25 -111 -27 -51 -48 -75 -82 -97 -46 -29 -82 -72 -82 -99
0 -9 -20 -42 -45 -75 -25 -33 -45 -66 -45 -73 0 -7 -15 -43 -34 -80 -54 -107
-69 -212 -74 -526 -2 -154 1 -317 7 -380 16 -168 -1 -222 -195 -598 -85 -165
-154 -304 -154 -309 0 -5 -4 -17 -9 -27 -5 -9 -31 -71 -57 -137 -100 -251
-242 -396 -569 -575 -284 -157 -538 -313 -677 -417 -76 -57 -198 -137 -271
-177 -121 -68 -148 -79 -307 -121 -96 -26 -265 -62 -375 -81 -110 -19 -267
-55 -350 -79 -82 -24 -194 -56 -248 -72 -88 -24 -114 -37 -240 -123 -135 -90
-145 -100 -212 -192 -38 -54 -81 -126 -94 -160 -29 -75 -129 -207 -251 -333
-48 -49 -161 -175 -251 -280 -90 -104 -213 -246 -274 -315 -140 -158 -149
-171 -170 -250 -23 -83 -25 -88 -101 -187 -36 -46 -84 -123 -108 -171 -59
-117 -95 -156 -255 -277 -75 -56 -188 -153 -252 -216 -110 -108 -117 -117
-133 -176 -13 -48 -31 -80 -81 -141 -88 -109 -176 -246 -186 -290 -5 -21 -18
-87 -29 -149 -20 -108 -20 -117 -5 -235 9 -68 28 -179 42 -248 24 -112 35
-143 114 -300 100 -201 171 -328 237 -419 38 -54 48 -78 63 -155 11 -50 38
-140 61 -201 l43 -110 144 -144 145 -143 -39 -35 c-22 -20 -114 -104 -204
-187 -99 -92 -197 -172 -250 -205 l-86 -54 -160 21 c-88 12 -246 24 -351 28
l-190 6 -120 -32 c-65 -18 -132 -42 -149 -54 -16 -11 -78 -64 -136 -118 -85
-79 -135 -138 -254 -302 -147 -202 -151 -208 -263 -453 -203 -442 -226 -503
-257 -657 -25 -129 -32 -151 -101 -288 -86 -172 -157 -345 -208 -510 -41 -132
-264 -617 -325 -707 -21 -31 -75 -89 -119 -129 -90 -81 -194 -210 -387 -479
-108 -151 -139 -202 -175 -290 -42 -104 -50 -116 -215 -313 -94 -113 -180
-218 -192 -235 -22 -32 -35 -88 -53 -230 -18 -139 -38 -201 -104 -314 -34 -58
-79 -153 -102 -213 -39 -105 -42 -109 -99 -150 l-58 -41 -135 17 c-116 15
-154 25 -261 68 -174 69 -577 293 -661 367 -112 98 -118 101 -237 113 -104 10
-109 10 -232 -22 -69 -18 -139 -42 -156 -53 -16 -12 -67 -56 -113 -99 -46 -43
-87 -78 -91 -78 -4 0 -16 -17 -27 -37 -10 -21 -45 -77 -76 -126 -31 -48 -80
-130 -108 -183 -50 -92 -56 -98 -213 -232 -308 -262 -306 -260 -403 -403 -71
-104 -97 -152 -117 -214 -53 -169 -55 -200 -61 -690 -3 -254 -10 -485 -16
-514 -9 -46 -19 -63 -75 -123 -64 -68 -133 -191 -195 -349 -33 -83 -98 -195
-166 -287 -52 -72 -63 -94 -74 -153 -12 -60 -24 -85 -90 -182 -41 -62 -99
-143 -127 -182 -28 -38 -87 -137 -131 -220 -88 -165 -95 -193 -107 -395 -11
-188 33 -454 91 -542 13 -21 24 -49 24 -62 0 -60 -120 -281 -257 -473 l-94
-131 -24 -174 c-61 -441 -60 -438 -230 -549 -105 -69 -119 -75 -335 -141 -153
-48 -290 -82 -428 -109 -112 -21 -252 -52 -310 -68 -59 -17 -141 -38 -182 -47
-125 -28 -174 -76 -174 -169 0 -44 6 -60 53 -128 38 -57 71 -91 118 -125 212
-151 285 -215 432 -380 167 -188 263 -282 401 -393 52 -43 111 -94 131 -115
42 -46 133 -189 142 -224 4 -14 18 -38 33 -55 14 -16 37 -52 51 -80 71 -139
201 -286 485 -548 115 -105 164 -143 244 -186 54 -30 125 -72 158 -94 40 -27
116 -59 245 -103 607 -206 700 -252 1101 -540 290 -209 281 -199 393 -435 53
-113 67 -152 77 -224 l12 -87 -53 -54 c-30 -30 -100 -85 -157 -122 l-103 -67
-66 -135 c-71 -146 -88 -202 -98 -325 -10 -127 6 -221 80 -455 59 -189 78
-235 158 -385 49 -93 114 -206 144 -250 60 -90 65 -118 34 -193 -40 -96 -57
-240 -38 -318 8 -32 20 -91 26 -130 11 -62 19 -80 68 -145 174 -229 258 -306
529 -489 88 -59 172 -123 186 -142 14 -18 30 -56 36 -83 17 -78 34 -304 27
-349 -4 -23 -29 -80 -55 -128 -49 -89 -95 -211 -106 -283 -3 -22 -1 -80 4
-130 9 -71 20 -111 57 -193 25 -57 53 -115 63 -130 23 -36 253 -293 517 -579
122 -131 240 -265 264 -298 l42 -60 -6 -90 c-14 -193 51 -414 150 -505 60 -55
119 -146 176 -272 83 -185 89 -196 136 -248 48 -54 124 -96 238 -134 44 -14
85 -30 91 -34 6 -4 29 -46 51 -93 56 -119 128 -222 214 -305 70 -66 204 -156
283 -189 61 -26 232 -141 253 -171 34 -49 43 -93 43 -207 0 -137 27 -300 85
-517 25 -91 52 -208 60 -260 8 -52 20 -121 25 -153 13 -83 89 -294 114 -317
12 -10 35 -30 52 -44 22 -18 44 -56 74 -128 65 -157 106 -208 226 -280 42 -25
93 -44 174 -62 162 -38 186 -49 265 -125 81 -78 136 -113 218 -136 84 -24 218
-81 417 -177 250 -121 333 -152 530 -198 188 -43 237 -59 400 -126 58 -24 170
-61 250 -83 80 -21 226 -65 325 -96 99 -32 270 -85 380 -120 322 -101 364
-121 480 -220 82 -70 271 -210 379 -280 57 -36 116 -65 165 -79 146 -44 507
-189 613 -247 196 -108 350 -149 564 -149 102 0 222 21 409 72 142 38 169 70
190 223 9 61 14 159 13 227 l-3 119 57 3 c72 4 160 45 187 89 23 37 61 180 61
229 0 18 4 38 8 44 18 28 72 41 182 47 183 10 309 40 405 96 133 79 235 132
294 153 81 28 332 67 436 68 50 0 127 4 173 10 127 14 208 66 394 250 162 160
176 182 237 375 23 69 31 115 31 166 0 64 2 70 18 64 32 -14 157 -17 200 -6
59 16 147 105 162 163 25 98 34 114 109 188 42 42 93 88 114 104 l37 28 153
-16 c83 -10 169 -22 190 -27 27 -7 54 -7 91 2 50 11 56 10 99 -15 37 -22 67
-29 149 -37 148 -15 554 12 733 48 101 20 183 13 412 -32 136 -26 187 -41 240
-69 96 -49 509 -162 883 -240 225 -47 301 -59 490 -76 140 -13 183 -23 285
-69 72 -32 89 -35 170 -35 115 0 163 21 255 110 l68 65 53 -15 c30 -8 131 -22
224 -30 163 -14 179 -17 357 -75 103 -34 205 -61 226 -61 56 0 127 24 186 63
30 20 143 67 278 115 l228 81 43 -18 c42 -18 182 -51 216 -51 9 0 42 -24 72
-53 47 -46 64 -55 117 -67 111 -23 140 -14 349 111 244 145 254 152 348 249
44 45 130 125 190 178 61 52 130 115 155 138 41 40 56 46 180 79 190 51 246
71 316 116 33 21 69 39 80 39 10 0 64 -11 119 -24 55 -13 127 -27 160 -31 33
-4 132 -24 220 -45 88 -21 205 -43 260 -50 55 -7 127 -21 160 -31 100 -31 362
-73 460 -72 50 0 117 7 150 16 103 27 312 57 402 57 79 0 91 -3 147 -34 106
-59 242 -96 391 -106 126 -9 134 -11 265 -65 271 -113 333 -124 479 -85 84 22
161 26 194 9 49 -26 216 -191 237 -234 30 -62 160 -181 213 -197 102 -28 301
-1 417 57 81 41 226 136 302 198 32 26 64 47 72 47 7 0 78 -33 157 -74 150
-76 224 -100 354 -111 40 -3 82 -14 100 -24 32 -20 133 -44 163 -39 10 2 36
-12 56 -30 88 -77 153 -91 506 -111 120 -7 237 -21 370 -46 107 -19 206 -35
220 -35 14 0 97 19 185 41 307 79 429 94 544 65 34 -9 143 -17 284 -21 l227
-7 39 -82 c21 -44 49 -95 62 -112 128 -169 225 -253 674 -589 297 -222 611
-435 750 -509 50 -27 176 -97 280 -156 385 -217 445 -250 455 -250 6 0 24 -7
40 -15 16 -8 63 -20 104 -26 69 -10 82 -9 163 14 76 22 123 27 328 37 256 12
432 33 665 80 197 40 360 51 610 40 213 -9 226 -11 440 -75 114 -34 136 -37
250 -38 106 -1 140 3 224 26 92 26 112 27 325 29 639 4 663 2 880 -72 82 -27
155 -50 162 -50 28 0 398 -145 474 -185 80 -43 238 -114 411 -185 94 -39 171
-86 259 -159 142 -117 273 -151 819 -209 69 -8 104 -17 160 -46 39 -19 98 -44
131 -54 80 -25 191 -90 268 -159 34 -30 133 -107 220 -170 86 -63 157 -120
157 -127 0 -6 -4 -16 -10 -22 -5 -5 -14 -44 -20 -87 -23 -165 42 -358 165
-487 78 -82 123 -157 173 -290 24 -65 67 -148 112 -220 40 -63 84 -139 97
-169 60 -135 123 -472 123 -662 0 -36 -11 -122 -25 -190 -30 -145 -28 -171 21
-404 50 -238 50 -239 26 -272 -41 -58 -74 -147 -76 -208 -2 -53 -8 -67 -41
-110 -21 -28 -42 -60 -48 -72 -11 -24 -19 -28 -85 -38 -30 -5 -62 -22 -110
-59 -37 -29 -150 -113 -251 -186 -176 -127 -185 -136 -236 -215 -30 -46 -57
-100 -61 -121 -3 -22 -22 -75 -41 -119 -36 -82 -62 -163 -88 -273 -15 -65 -11
-112 16 -178 7 -16 16 -99 20 -184 7 -163 17 -210 85 -425 25 -81 46 -125 76
-165 23 -30 59 -98 79 -150 43 -107 119 -217 240 -345 41 -44 108 -120 149
-169 63 -76 76 -99 96 -166 23 -80 54 -138 108 -202 17 -20 56 -78 86 -129 35
-59 90 -130 151 -195 54 -56 111 -128 128 -161 45 -85 114 -168 178 -216 85
-64 100 -81 114 -128 15 -51 66 -136 118 -196 20 -22 53 -62 74 -87 30 -35 62
-57 135 -93 85 -41 111 -61 210 -158 63 -60 118 -118 123 -128 12 -22 60 -176
104 -332 24 -89 59 -172 133 -325 99 -202 102 -207 236 -367 129 -154 148
-172 418 -394 156 -128 312 -258 348 -289 36 -31 88 -72 115 -92 28 -20 69
-56 92 -80 37 -39 43 -52 59 -133 10 -49 46 -171 81 -270 74 -207 82 -261 83
-515 0 -145 4 -179 28 -284 26 -107 33 -125 74 -177 25 -31 49 -72 52 -90 29
-148 53 -239 70 -264 49 -72 173 -210 274 -302 60 -55 162 -158 227 -229 200
-218 515 -532 612 -610 92 -73 153 -146 296 -350 31 -45 74 -97 95 -116 128
-116 521 -265 772 -293 111 -12 167 -28 260 -75 52 -26 124 -59 160 -72 36
-14 108 -42 161 -62 54 -20 140 -45 193 -54 82 -14 97 -19 100 -37 3 -11 9
-69 16 -130 6 -60 20 -165 31 -232 18 -107 27 -138 81 -250 33 -70 91 -172
130 -226 60 -85 81 -105 160 -158 90 -61 90 -61 187 -69 53 -5 125 -13 161
-19 36 -5 135 -15 220 -21 154 -11 156 -11 235 14 44 14 90 34 102 44 11 9 51
64 87 122 61 96 73 108 136 147 64 39 82 45 222 68 83 14 289 46 457 70 263
37 317 48 384 76 43 18 91 44 106 59 16 16 53 90 90 181 58 140 107 226 145
258 11 9 26 9 68 -3 67 -18 243 -29 283 -17 90 26 325 230 509 442 61 71 72
78 142 104 100 35 126 53 208 147 58 66 76 80 122 95 l53 16 92 -78 c112 -95
137 -110 501 -305 l288 -154 232 -192 232 -192 38 -128 38 -129 -16 -112 c-22
-165 -11 -194 97 -265 55 -35 74 -42 132 -46 67 -5 68 -5 62 -29 -12 -49 7
-92 93 -204 88 -117 101 -146 102 -237 0 -30 -5 -44 -16 -49 -9 -3 -82 -1
-163 5 -132 11 -170 19 -395 82 l-250 70 -230 0 -231 0 -220 -60 c-121 -33
-235 -68 -253 -78 -81 -42 -102 -151 -45 -232 18 -25 216 -272 440 -549 l408
-505 540 -398 c297 -219 554 -413 572 -431 18 -18 141 -170 275 -339 l243
-306 224 -464 c206 -426 237 -484 390 -727 91 -145 185 -284 208 -310 22 -26
46 -65 52 -86 6 -22 19 -49 29 -61 23 -27 114 -84 136 -84 9 0 33 -18 54 -40
36 -39 106 -93 188 -147 38 -24 42 -31 54 -92 7 -36 22 -85 32 -108 23 -48 89
-113 116 -113 42 0 201 -99 277 -172 42 -40 107 -88 121 -88 18 0 51 -19 77
-43 10 -10 34 -25 53 -33 22 -9 45 -32 64 -63 17 -27 37 -52 45 -55 10 -3 15
-19 15 -43 0 -62 18 -107 61 -154 22 -24 58 -69 79 -100 50 -72 113 -126 162
-140 29 -7 39 -16 44 -37 10 -40 42 -90 64 -97 11 -3 21 -19 25 -38 4 -18 15
-45 25 -62 10 -16 25 -54 35 -83 9 -28 29 -64 44 -80 15 -15 40 -47 56 -72 31
-50 57 -78 96 -102 21 -13 27 -27 32 -69 9 -75 45 -178 78 -223 16 -22 29 -46
29 -54 0 -34 161 -212 192 -212 6 0 43 -32 83 -71 61 -58 75 -78 80 -112 13
-75 44 -149 98 -231 30 -44 64 -102 77 -129 28 -56 61 -78 157 -101 72 -18
140 -16 224 5 50 12 181 149 213 223 23 51 26 54 67 61 24 3 59 9 77 12 18 3
55 23 82 44 l48 38 32 -24 c43 -32 94 -39 153 -21 26 8 49 10 52 6 3 -5 26
-12 52 -16 42 -6 93 -41 93 -64 0 -3 34 -28 75 -54 41 -26 75 -54 75 -62 0
-31 66 -150 104 -188 25 -25 62 -49 94 -60 45 -15 54 -23 59 -48 13 -64 149
-178 213 -178 15 0 32 -24 71 -102 90 -180 151 -254 269 -327 30 -19 57 -37
60 -39 3 -2 8 -55 11 -117 5 -109 7 -116 36 -153 20 -24 39 -67 53 -118 37
-138 69 -176 158 -190 36 -6 42 -10 36 -26 -18 -59 39 -160 130 -229 59 -45
94 -53 161 -38 45 10 59 9 133 -15 46 -14 93 -26 105 -26 13 0 32 -6 43 -14
11 -8 38 -17 60 -21 63 -10 116 -36 109 -53 -15 -40 -25 -105 -19 -130 9 -36
77 -137 128 -190 42 -44 100 -68 141 -58 18 5 30 -7 74 -70 43 -60 69 -86 136
-131 68 -45 85 -61 91 -87 3 -17 21 -52 40 -78 30 -43 33 -51 31 -121 -1 -74
-1 -75 53 -162 30 -48 82 -115 115 -149 51 -52 71 -65 132 -85 65 -22 77 -30
115 -78 62 -81 146 -152 194 -164 28 -7 46 -19 58 -40 17 -29 17 -32 -3 -74
-11 -24 -25 -65 -31 -90 -6 -26 -17 -56 -25 -68 -22 -34 -45 -135 -38 -170 6
-33 47 -113 93 -182 22 -32 31 -64 44 -155 15 -110 15 -118 -3 -175 -27 -88
-60 -155 -75 -155 -20 0 -258 -109 -291 -134 -16 -13 -59 -28 -95 -35 -136
-25 -211 -53 -254 -93 -22 -21 -68 -53 -103 -70 -87 -42 -104 -72 -110 -191
-7 -143 -6 -163 11 -189 16 -24 15 -26 -45 -92 -36 -39 -89 -83 -128 -106 -37
-21 -73 -46 -80 -54 -21 -25 -92 -62 -166 -86 -38 -12 -83 -30 -100 -38 -23
-12 -69 -16 -200 -18 -93 -1 -185 -7 -203 -12 -19 -6 -57 -31 -86 -55 -39 -34
-65 -48 -111 -58 -33 -7 -78 -25 -100 -39 -22 -15 -65 -33 -95 -40 -30 -7 -83
-30 -117 -52 -33 -21 -78 -44 -98 -49 -53 -15 -155 -84 -177 -120 -10 -17 -25
-55 -33 -85 -11 -41 -27 -69 -63 -109 -50 -55 -55 -66 -68 -177 -5 -43 -11
-59 -25 -63 -22 -7 -54 -59 -63 -101 -4 -17 -2 -70 4 -118 l11 -86 -29 -43
c-39 -55 -46 -92 -32 -169 16 -91 79 -251 120 -306 l36 -47 -18 -36 c-10 -20
-22 -59 -28 -85 -6 -27 -18 -60 -27 -74 -10 -14 -17 -48 -18 -82 -1 -31 -6
-63 -12 -70 -33 -40 -11 -192 41 -280 24 -42 70 -78 98 -78 7 0 29 -8 48 -18
19 -11 46 -22 60 -25 31 -8 86 -59 122 -112 26 -39 192 -213 255 -268 21 -18
35 -43 43 -75 14 -58 14 -58 1 -106 -14 -56 -6 -87 50 -203 l50 -102 77 -44
c42 -24 102 -54 132 -67 49 -19 60 -29 90 -82 43 -74 82 -99 164 -105 59 -5
64 -7 81 -39 10 -19 33 -44 52 -55 30 -19 33 -25 33 -67 0 -95 12 -114 138
-226 64 -57 149 -131 189 -164 40 -33 70 -62 67 -65 -3 -3 -1 -28 5 -56 11
-50 10 -52 -23 -99 -48 -67 -52 -101 -21 -195 14 -43 35 -91 47 -108 17 -22
24 -51 29 -111 5 -58 13 -89 28 -109 28 -38 58 -164 67 -278 3 -52 10 -107 14
-121 9 -30 104 -162 143 -199 40 -36 129 -54 199 -40 l57 12 73 -46 c54 -33
97 -50 164 -66 50 -11 103 -21 116 -21 17 0 42 -18 81 -59 32 -33 57 -62 57
-64 0 -27 35 -172 59 -249 43 -132 92 -178 193 -178 75 0 104 -39 138 -180 37
-154 103 -226 216 -237 33 -3 68 -12 80 -20 11 -7 58 -18 103 -24 52 -7 89
-18 100 -28 25 -26 51 -69 51 -86 0 -9 13 -44 29 -78 16 -34 34 -80 40 -102 6
-22 30 -63 54 -90 25 -28 48 -66 52 -85 4 -19 22 -60 40 -90 26 -43 48 -64 96
-92 34 -21 82 -40 106 -44 39 -6 48 -12 83 -63 39 -59 133 -138 177 -150 17
-5 29 -18 38 -43 20 -60 73 -134 115 -163 22 -15 49 -42 60 -60 26 -42 118
-90 203 -106 64 -12 67 -14 76 -46 10 -35 51 -93 110 -156 23 -25 51 -42 79
-49 29 -7 49 -20 64 -42 12 -17 52 -64 89 -105 47 -51 70 -86 74 -110 11 -58
36 -90 101 -129 62 -38 145 -121 180 -180 23 -41 66 -68 119 -77 22 -4 72 -17
110 -30 39 -12 94 -26 123 -30 40 -5 57 -13 75 -35 39 -48 70 -60 208 -80 74
-11 139 -20 146 -20 6 0 14 -9 18 -20 3 -10 23 -29 43 -41 20 -12 60 -44 89
-72 47 -46 58 -51 138 -68 71 -15 94 -25 125 -53 24 -21 53 -36 79 -41 34 -6
47 -15 71 -50 63 -91 143 -135 246 -135 30 0 43 -9 94 -64 33 -35 75 -71 93
-79 18 -9 43 -27 56 -41 14 -15 41 -31 60 -36 32 -8 36 -13 36 -42 1 -18 4
-52 9 -75 7 -41 7 -41 -38 -72 -72 -50 -99 -92 -99 -155 0 -148 91 -181 477
-174 187 4 202 6 288 42 13 6 18 -2 27 -46 30 -137 203 -309 341 -338 49 -10
72 -10 115 -1 117 26 219 137 244 262 22 108 19 105 52 59 40 -55 146 -121
244 -153 189 -62 404 -117 456 -117 210 1 386 153 664 575 89 136 164 220 188
212 7 -2 33 -35 58 -73 50 -76 132 -152 219 -205 50 -30 62 -33 130 -33 89 0
359 64 402 95 l28 19 5 -27 c16 -75 62 -179 121 -278 37 -61 75 -129 85 -153
26 -60 103 -140 148 -152 104 -29 216 12 327 120 34 33 45 39 50 27 10 -26
126 -94 182 -107 30 -7 72 -9 95 -6 59 9 142 69 187 135 20 31 61 81 89 111
l52 55 25 -30 c14 -16 40 -53 59 -81 48 -74 125 -127 223 -153 93 -25 232 25
379 137 125 95 158 185 118 318 -17 55 -19 102 -6 123 10 16 97 17 146 2 66
-20 155 -68 250 -136 139 -99 161 -110 253 -130 70 -15 90 -16 144 -5 181 35
314 161 352 333 4 15 12 27 20 27 10 0 15 -24 18 -92 7 -124 36 -188 132 -284
56 -56 91 -80 166 -116 52 -25 127 -54 165 -63 72 -18 118 -39 315 -143 203
-106 344 -133 498 -93 124 32 239 135 308 274 34 69 94 236 94 262 0 8 36 -11
88 -46 110 -76 158 -97 246 -110 39 -5 122 -22 184 -36 135 -32 153 -30 390
49 l153 52 27 -21 c15 -11 47 -46 72 -77 41 -52 153 -146 174 -146 5 0 37 -14
72 -31 84 -41 112 -83 95 -139 -12 -42 -37 -63 -116 -102 -86 -42 -129 -69
-163 -101 -163 -154 -155 -362 19 -485 75 -54 105 -68 176 -83 99 -20 187 5
308 90 80 56 147 145 215 285 33 67 75 148 95 181 20 33 50 94 67 136 32 82
63 116 199 215 31 23 81 75 112 116 51 68 73 110 116 228 24 65 27 68 82 84
l51 15 96 -46 c135 -66 200 -135 247 -262 8 -20 27 -73 44 -119 34 -96 63
-137 131 -191 91 -72 248 -78 373 -15 74 38 176 145 216 225 32 65 32 67 29
195 l-3 129 34 69 c40 81 94 139 172 184 85 49 144 106 178 173 55 111 52 198
-16 354 -19 44 -37 103 -40 132 l-6 52 37 7 c70 13 81 0 110 -133 15 -65 35
-134 44 -153 24 -49 128 -157 181 -188 25 -14 109 -67 186 -117 212 -138 220
-141 339 -164 88 -17 146 -21 327 -21 271 0 375 17 509 85 141 72 213 142 339
333 48 73 81 115 81 103 0 -30 18 -66 86 -171 86 -132 128 -168 220 -189 99
-23 196 17 300 126 138 144 207 328 218 588 5 125 28 260 64 374 18 60 70 112
131 132 37 12 327 184 415 247 27 19 79 49 115 68 79 41 133 43 261 14 47 -11
105 -20 128 -20 69 0 93 -32 207 -270 76 -158 84 -171 119 -203 87 -77 183
-104 345 -94 110 7 292 52 371 92 113 58 301 199 419 316 128 127 303 428 365
629 38 122 42 160 21 238 -36 134 -92 211 -193 264 -54 29 -254 68 -347 68
-38 0 -47 4 -56 23 -8 18 -6 34 14 78 22 48 309 488 381 581 34 45 70 50 113
15 95 -77 211 -145 274 -160 14 -4 37 -17 50 -30 37 -36 132 -94 183 -111 185
-63 413 63 447 248 9 50 7 67 -16 149 -30 106 -96 213 -151 248 -19 12 -41 31
-49 43 -16 24 -40 217 -31 242 5 13 24 -1 85 -59 43 -41 100 -87 127 -102 27
-15 83 -49 124 -76 93 -59 102 -63 225 -93 176 -44 289 -58 369 -47 89 13 185
44 255 83 60 33 221 148 221 158 0 3 21 30 46 60 63 73 105 163 147 310 20 69
65 195 100 280 75 180 97 276 97 422 0 152 24 206 130 292 241 195 321 252
420 298 177 84 272 108 297 76 6 -7 18 -47 28 -88 21 -91 91 -214 155 -274 58
-54 139 -74 228 -55 69 14 79 19 162 81 93 70 143 152 164 266 20 109 20 237
1 339 -27 140 -18 272 35 503 16 69 32 150 35 180 4 30 16 94 27 141 18 81 24
92 83 161 75 88 157 147 211 155 24 3 78 -5 144 -21 58 -14 128 -26 156 -26
138 0 245 80 275 205 7 29 29 73 52 105 71 95 82 154 46 255 l-21 61 31 90
c32 95 49 167 76 329 10 55 28 120 40 145 25 48 137 160 188 187 47 24 124 22
179 -5 26 -13 87 -29 135 -37 48 -7 116 -22 150 -34 109 -37 227 -23 347 39
75 40 189 125 242 181 55 58 144 189 185 271 l32 65 136 6 c75 3 159 12 186
20 l50 14 53 -48 c79 -72 135 -83 243 -49 118 38 226 142 260 252 17 52 19 79
13 177 -8 152 -25 226 -76 325 -36 70 -65 104 -217 259 -268 271 -390 469
-352 569 9 24 16 28 51 28 46 0 68 -10 190 -84 47 -29 111 -65 144 -80 32 -16
90 -57 130 -93 114 -103 231 -177 308 -196 83 -21 124 -21 250 -1 127 20 673
15 1168 -10 184 -10 367 -15 405 -13 66 5 185 37 209 56 6 5 45 23 86 41 98
42 303 169 497 308 56 40 140 94 185 119 46 25 101 58 123 73 22 15 92 51 155
80 63 29 137 67 163 85 27 17 155 137 285 267 256 254 322 309 440 370 87 44
137 54 362 68 197 12 282 25 369 54 117 41 214 131 243 228 l11 37 40 -40 c80
-78 195 -80 343 -4 89 46 95 47 200 52 92 4 127 1 227 -21 65 -14 133 -26 151
-26 184 0 325 208 257 379 -12 29 -42 80 -66 112 l-45 58 127 -2 c128 -2 583
25 743 43 227 27 531 78 624 105 272 80 401 281 353 548 l-14 77 41 0 c66 1
133 30 257 113 142 95 164 126 164 232 0 86 -38 173 -109 252 -38 42 -44 53
-29 53 45 0 179 112 237 198 68 102 63 164 -25 328 -35 65 -83 138 -107 163
-23 25 -41 51 -39 56 2 6 10 39 17 75 16 84 -1 151 -60 230 l-40 54 93 96 c51
52 183 187 293 300 l200 205 61 175 c33 96 149 443 258 770 227 682 219 640
133 723 -27 27 -66 56 -86 64 -21 8 -75 37 -122 64 -47 26 -125 64 -175 83
-151 57 -171 68 -193 107 -16 28 -39 46 -94 73 -40 20 -86 47 -103 61 l-30 25
120 -6 c107 -6 127 -4 185 16 92 31 125 54 150 106 17 34 21 57 18 94 -6 62
-34 103 -110 160 -33 25 -84 71 -114 103 -29 32 -91 81 -136 109 -46 28 -123
84 -173 123 -49 40 -157 114 -240 165 -118 72 -170 111 -243 183 -115 113
-139 149 -168 255 -30 108 -51 140 -118 180 -42 26 -58 42 -67 70 -24 76 -79
169 -138 236 -69 78 -68 76 -75 261 -3 87 -11 155 -25 205 -11 41 -21 102 -21
135 0 73 -21 156 -48 190 -43 54 -271 262 -318 290 -45 26 -60 29 -172 35
l-122 6 -106 104 c-58 58 -124 128 -146 155 -22 28 -88 100 -147 160 -150 155
-283 318 -297 366 -7 22 -19 51 -28 64 -20 31 -145 154 -206 204 -25 20 -51
45 -59 56 -8 11 -59 65 -115 121 -56 55 -175 181 -266 280 -91 98 -215 231
-276 294 -60 64 -146 161 -190 216 -45 54 -148 167 -231 250 l-150 151 1 149
c1 138 -1 152 -23 194 -35 69 -107 172 -141 205 -16 16 -30 35 -30 43 0 23 77
139 121 183 44 44 69 93 69 136 0 37 -36 108 -64 126 -13 9 -459 253 -992 542
-858 467 -1053 577 -1706 968 -445 267 -737 448 -737 457 -1 8 21 98 49 199
l49 185 58 60 c32 33 379 385 771 782 560 567 722 726 755 739 23 10 87 21
142 25 110 9 217 40 275 79 41 28 96 94 125 151 10 19 33 61 53 92 32 53 35
66 42 168 5 71 13 118 23 133 8 13 48 43 88 67 40 24 134 87 208 142 209 151
1077 777 1157 833 71 50 648 635 722 732 20 26 203 291 406 588 203 297 370
541 371 543 2 2 39 -8 82 -21 137 -44 256 -52 459 -32 211 21 311 16 409 -19
41 -15 91 -25 120 -25 50 0 68 5 182 53 34 15 100 36 145 47 82 20 271 106
376 171 113 70 339 223 411 278 42 31 100 85 129 119 29 33 61 61 70 61 9 0
62 -11 117 -25 113 -28 177 -31 251 -11 76 20 109 43 160 113 31 42 63 72 99
92 97 55 126 165 81 306 -14 44 -26 99 -26 122 0 24 -11 76 -25 117 -18 53
-25 97 -26 153 0 43 -4 107 -8 143 -5 36 -14 115 -20 175 -17 156 -30 262 -41
320 -5 28 -14 94 -20 148 -5 53 -24 140 -41 193 -28 87 -111 285 -130 309 -4
6 -16 33 -27 60 -11 28 -45 103 -76 167 -31 64 -56 120 -56 125 0 17 -129 219
-196 305 -71 93 -220 245 -309 316 -27 22 -88 77 -135 123 -76 74 -131 123
-359 321 -36 31 -109 90 -161 130 -52 39 -108 84 -125 99 -16 15 -67 52 -113
83 -46 31 -102 70 -125 87 -23 16 -81 58 -129 92 -284 202 -338 243 -338 257
0 8 30 177 66 375 88 482 91 555 39 845 -42 238 -255 1231 -314 1465 -49 197
-28 41 -290 2167 -238 1930 -221 1820 -290 1861 -19 11 -76 23 -156 32 -124
15 -130 17 -269 84 -77 38 -161 76 -186 84 -103 35 -155 60 -193 93 -58 49
-129 80 -227 99 -47 9 -135 29 -196 45 -88 24 -132 30 -213 30 -89 0 -111 4
-181 30 -108 42 -184 53 -310 44 -169 -11 -293 -7 -403 16 -56 11 -124 24
-152 30 -27 5 -129 14 -225 20 -96 6 -204 15 -240 20 -95 14 -236 37 -305 50
-87 16 -194 29 -325 40 -63 5 -146 14 -185 20 -38 5 -130 9 -204 10 -123 0
-133 1 -126 17 52 127 65 181 65 278 0 67 -7 124 -20 175 -11 41 -20 78 -20
83 0 4 93 7 207 7 190 0 297 7 712 50 107 10 134 25 195 102 73 93 73 154 -2
246 -66 82 -76 88 -187 124 -94 30 -104 36 -176 103 -58 55 -106 88 -200 138
-113 60 -133 75 -225 169 -136 139 -148 158 -178 268 -48 178 -114 475 -136
605 -12 72 -33 181 -46 244 -14 63 -27 155 -31 206 l-6 92 57 81 c93 132 96
181 20 278 -45 59 -151 136 -240 175 -37 17 -42 23 -47 62 -3 24 -17 67 -31
96 l-24 54 32 47 c39 57 70 160 62 205 -4 18 -15 44 -26 58 l-19 24 27 25 c15
14 64 51 109 82 143 99 157 131 123 266 -36 140 -58 162 -217 215 -69 24 -88
26 -121 18 l-39 -10 -25 51 c-14 28 -66 105 -115 171 -49 66 -101 140 -115
165 -25 42 -77 96 -173 180 -108 94 -197 148 -288 174 -32 9 -89 37 -127 61
-101 64 -259 143 -305 151 -22 4 -56 17 -76 30 -21 13 -59 34 -85 47 -27 14
-105 54 -174 89 -69 35 -156 74 -195 87 -38 13 -122 50 -185 83 -113 58 -118
59 -272 81 -86 12 -160 26 -164 30 -4 4 0 7 8 7 22 0 187 55 255 85 40 18 88
29 158 35 55 6 147 24 205 40 58 17 150 40 205 51 174 36 197 65 215 274 6 72
15 171 21 221 9 82 8 101 -11 175 -12 46 -30 98 -40 115 -26 41 -309 202 -387
218 -25 6 -34 15 -43 42 -17 51 -109 140 -177 171 -56 26 -67 28 -268 33 -220
5 -231 7 -275 55 -24 26 -25 33 -30 188 l-5 162 -38 68 c-76 135 -167 213
-412 353 -105 60 -133 71 -254 101 -75 18 -155 32 -177 33 -40 0 -42 1 -48 38
-12 64 -118 209 -207 282 -91 75 -116 86 -221 95 -72 7 -79 10 -99 39 -12 17
-57 58 -101 91 -46 35 -88 75 -98 95 -24 46 -54 73 -180 159 -83 56 -115 72
-155 78 -27 3 -55 13 -62 22 -7 9 -13 43 -13 76 0 77 -12 119 -66 232 -43 90
-45 92 -121 139 -43 26 -111 59 -152 73 l-74 26 -51 116 c-28 64 -58 125 -66
136 -40 50 -286 266 -328 287 -80 41 -80 42 -96 154 -8 56 -21 113 -30 127 -9
13 -55 61 -102 107 -48 46 -118 119 -157 163 -39 44 -103 106 -143 137 -51 41
-83 78 -112 125 -22 38 -53 75 -69 84 -54 32 -196 71 -232 64 -19 -4 -84 -38
-144 -76 -60 -38 -112 -69 -115 -69 -4 0 -49 71 -100 158 -51 86 -98 164 -105
172 -7 9 -55 51 -107 95 -52 43 -158 140 -235 215 l-140 136 -166 61 c-92 34
-204 69 -250 78 -80 16 -86 19 -114 58 -65 91 -94 115 -178 148 -94 37 -168
42 -207 16 l-26 -17 -38 155 c-31 128 -44 163 -72 199 -19 25 -34 50 -34 56 0
6 123 217 274 468 191 318 305 497 375 589 l102 132 327 255 c180 139 338 265
351 280 18 19 143 407 537 1663 282 901 519 1652 526 1670 10 23 220 200 833
699 451 367 872 711 935 764 63 53 169 139 235 192 66 52 372 302 679 556
l559 461 181 61 c233 79 324 123 407 196 37 33 634 523 1326 1089 693 567
1271 1045 1284 1064 19 27 24 50 27 110 3 81 17 117 77 201 18 25 47 72 64
105 18 33 46 83 64 112 18 29 58 96 90 150 32 54 72 118 88 143 16 25 35 57
42 72 13 27 133 197 217 308 25 32 65 89 90 127 92 139 203 227 360 287 175
66 678 319 825 415 111 72 225 160 285 220 30 31 109 107 175 170 218 206 269
259 335 345 36 47 72 85 81 85 22 1 139 64 236 127 44 30 85 54 90 54 4 0 34
18 67 39 47 31 71 58 121 136 35 54 74 123 86 154 12 31 26 61 30 67 8 10 165
64 244 84 22 5 72 30 110 55 39 24 90 54 115 66 73 35 133 83 173 141 63 89
149 222 157 243 4 11 24 54 43 96 20 41 39 87 42 102 7 25 10 26 49 21 41 -6
66 -26 66 -51 0 -7 10 -29 22 -47 73 -111 209 -91 375 56 100 87 153 159 197
269 82 204 146 300 314 474 54 55 109 116 123 135 47 62 145 156 224 215 155
114 217 196 281 365 25 66 28 89 28 190 l1 115 96 47 c162 80 231 159 264 306
14 59 20 73 38 76 12 2 47 9 77 15 30 6 111 16 180 22 172 14 347 46 386 70
72 44 93 153 42 224 -13 18 -574 621 -1247 1340 -674 719 -1235 1321 -1249
1336 -29 35 -22 47 42 78 43 19 220 51 289 51 74 0 251 42 359 85 62 25 142
50 178 56 216 35 426 128 565 249 98 85 134 99 315 120 52 6 134 18 183 27
l87 15 48 -38 c77 -62 82 -69 112 -190 16 -63 44 -143 62 -176 46 -87 205
-245 283 -283 104 -50 215 -89 290 -100 27 -4 133 -29 235 -57 226 -60 308
-77 426 -85 166 -11 350 32 629 147 83 34 233 92 335 130 102 37 281 104 398
148 l213 81 62 -10 c42 -7 124 -7 254 0 105 6 251 11 324 11 74 0 203 9 293
20 89 12 341 38 561 59 l400 38 90 -45 c83 -42 97 -46 181 -50 104 -5 224 9
363 42 104 24 140 43 160 80 12 22 15 22 49 10 21 -7 69 -13 108 -14 40 0 176
-20 313 -45 262 -50 291 -50 342 -3 l24 23 41 -41 c62 -62 148 -78 276 -50
170 36 192 38 248 22 30 -9 68 -16 84 -16 18 0 49 -12 71 -27 40 -28 41 -28
210 -28 161 0 172 1 208 23 33 21 45 23 100 17 34 -4 77 -16 97 -28 27 -17 54
-22 130 -25 59 -2 133 -13 195 -29 88 -22 112 -25 200 -19 55 4 108 7 119 9
15 2 86 -181 495 -1283 262 -707 485 -1299 495 -1316 29 -48 72 -69 134 -65
100 5 177 4 269 -4 l92 -8 65 -67 c51 -54 84 -77 158 -113 116 -57 204 -84
299 -92 41 -4 124 -13 184 -22 219 -30 253 -32 471 -33 252 0 379 -11 544 -45
212 -45 241 -47 413 -34 174 13 175 13 297 -43 36 -17 82 -37 103 -44 78 -28
272 -129 370 -194 56 -37 113 -71 127 -75 84 -25 286 -172 425 -309 44 -43 89
-85 101 -92 34 -23 650 -114 769 -114 107 0 167 14 504 116 111 33 117 34 295
34 l181 0 291 99 292 99 108 78 c147 104 156 114 224 229 46 78 82 124 167
207 l108 108 150 66 c139 62 170 71 430 129 154 35 296 69 315 77 33 14 38 13
84 -15 28 -16 95 -45 150 -65 90 -33 111 -37 196 -37 86 0 103 4 173 34 45 20
93 50 116 72 l38 38 319 3 319 3 165 109 c91 59 203 134 250 166 47 31 104 67
128 80 24 14 52 38 63 56 29 48 79 172 93 234 l13 55 170 55 c94 30 182 61
197 69 30 16 84 97 144 216 22 44 81 134 132 200 88 115 94 120 148 137 41 12
77 35 127 78 89 77 115 123 115 204 0 86 83 314 131 361 20 19 198 119 426
239 216 113 430 228 476 255 96 57 82 35 214 336 49 110 113 246 143 302 51
95 58 104 96 117 23 8 46 11 50 7 5 -4 50 -22 99 -40 50 -18 115 -46 145 -62
98 -50 784 -342 890 -378 19 -7 58 -19 85 -27 91 -27 109 -33 220 -69 61 -20
119 -40 130 -45 11 -5 52 -16 90 -25 39 -9 97 -25 130 -35 70 -22 366 -83 475
-99 41 -6 170 -20 285 -31 116 -11 274 -27 353 -36 86 -9 170 -12 211 -8 59 5
78 3 158 -25 50 -17 109 -31 131 -31 53 0 125 24 185 62 42 27 63 32 175 44
70 7 154 18 187 23 33 5 125 19 205 30 80 12 199 31 265 42 158 26 337 55 460
74 191 29 242 38 540 96 390 76 415 81 915 190 715 154 946 224 1150 347 96
58 162 102 175 116 6 6 30 27 55 45 25 19 50 39 55 46 27 30 139 113 257 191
140 92 223 169 313 288 58 78 281 318 337 363 18 15 67 59 109 97 108 101 198
178 239 206 19 13 42 31 50 40 29 33 176 147 225 175 83 48 122 83 146 132 22
45 22 50 10 162 -7 64 -16 143 -22 176 -23 144 -59 416 -59 444 0 21 30 84 90
189 105 183 115 223 78 289 -22 40 -151 156 -468 422 -74 63 -137 115 -139
117 -2 2 6 23 18 47 41 85 21 151 -78 254 -65 67 -114 89 -175 77 -51 -9 -196
-136 -196 -171 0 -7 -27 -45 -60 -85 -36 -42 -60 -80 -60 -95 0 -12 -6 -23
-13 -23 -22 0 -154 -95 -314 -225 -82 -66 -186 -147 -232 -180 -46 -33 -107
-81 -136 -106 -28 -25 -67 -51 -86 -59 -19 -7 -52 -26 -75 -41 -22 -15 -67
-40 -100 -56 -32 -16 -135 -75 -229 -131 -482 -286 -722 -452 -956 -660 -52
-46 -107 -91 -124 -99 -16 -9 -43 -27 -59 -40 -39 -33 -66 -42 -150 -53 -66
-8 -75 -7 -136 19 -107 47 -158 54 -304 47 -138 -8 -333 -28 -451 -47 -99 -16
-189 -51 -352 -136 -88 -46 -191 -90 -266 -114 -67 -22 -141 -49 -165 -61 -44
-22 -212 -164 -212 -178 0 -11 -82 -50 -106 -50 -11 0 -44 25 -74 56 -71 72
-152 125 -240 159 -117 45 -156 100 -369 531 -88 178 -301 637 -301 649 0 6
-107 228 -295 610 -157 320 -220 464 -300 690 -23 66 -77 216 -119 333 -66
187 -76 222 -76 282 0 83 27 176 84 285 l41 80 0 171 0 171 -72 109 c-88 132
-143 279 -143 379 0 58 7 76 105 281 58 120 125 255 148 299 l42 80 6 205 6
205 102 300 c56 165 125 381 153 480 50 174 52 186 58 345 7 165 7 166 63 345
41 133 82 236 157 395 56 118 117 255 136 303 160 416 279 649 448 877 55 74
137 191 182 260 75 115 90 132 190 211 214 170 252 179 754 184 l345 3 785
242 785 241 230 35 c127 19 482 72 790 119 790 119 706 111 815 80 458 -129
2663 -793 2729 -822 46 -21 114 -55 150 -77 39 -23 160 -71 296 -118 265 -92
347 -116 430 -124 33 -4 71 -15 85 -24 14 -9 206 -106 427 -215 l401 -197 28
-52 c102 -187 430 -746 451 -768 15 -15 36 -31 47 -34 12 -4 39 -21 61 -39 22
-18 68 -51 103 -74 57 -38 66 -50 104 -128 47 -99 140 -237 203 -303 42 -43
44 -48 55 -135 21 -170 56 -307 110 -428 68 -152 263 -256 425 -227 111 21
164 74 206 208 26 80 40 94 112 105 l38 6 72 -147 c80 -163 93 -200 102 -285
6 -50 12 -63 50 -103 25 -27 46 -60 49 -79 11 -58 66 -108 158 -144 46 -18
160 -65 253 -105 94 -40 208 -88 255 -107 l85 -34 245 -6 c233 -5 253 -7 410
-42 91 -20 210 -43 265 -52 55 -8 141 -26 190 -40 50 -13 151 -36 225 -52 134
-27 139 -27 525 -28 318 0 412 3 510 17 146 21 344 45 485 58 58 5 143 16 190
25 47 8 106 15 133 15 26 0 141 13 255 30 391 56 603 66 1082 51 454 -14 500
-18 815 -71 97 -17 318 -37 595 -55 278 -17 416 -31 525 -51 44 -8 109 -19
145 -24 36 -5 86 -14 110 -20 25 -6 131 -31 235 -55 304 -69 457 -106 505
-120 46 -14 250 -60 305 -69 29 -5 179 -43 280 -71 131 -36 157 -45 183 -58
82 -42 162 -77 202 -87 97 -26 190 13 230 95 20 40 22 58 17 124 -4 63 -15
104 -60 217 -67 168 -96 256 -131 394 l-27 106 45 87 c61 116 80 192 72 284
-9 109 -44 257 -81 342 -18 42 -36 96 -40 120 -11 68 -41 146 -80 210 -80 133
-90 187 -55 288 34 97 30 131 -60 513 -11 47 -27 135 -35 195 -7 61 -23 132
-34 159 -14 31 -21 69 -21 109 0 69 -22 207 -44 277 -31 99 -38 177 -22 258
13 62 14 108 8 237 -5 101 -5 167 1 180 19 38 47 160 47 207 0 56 -28 135 -65
184 -17 22 -30 57 -37 97 -6 34 -16 91 -23 127 -7 36 -12 65 -11 66 1 1 6863
-1014 6949 -1028 13 -2 44 -49 92 -138 353 -654 791 -1476 1140 -2135 230
-434 429 -805 442 -823 35 -47 60 -60 138 -72 39 -5 363 -42 720 -80 490 -52
664 -74 705 -89 40 -15 81 -20 151 -21 53 0 121 -5 152 -11 84 -17 178 9 277
76 42 29 103 66 136 83 l59 30 46 -23 c25 -13 74 -33 108 -45 34 -11 70 -24
79 -29 30 -15 66 -29 104 -41 21 -6 58 -28 83 -49 25 -21 62 -47 83 -58 172
-92 211 -112 241 -118 35 -7 54 -17 128 -67 23 -15 65 -34 94 -44 30 -9 85
-27 124 -41 38 -13 115 -31 171 -38 57 -8 122 -21 146 -29 24 -8 72 -22 107
-30 35 -8 73 -23 85 -33 20 -18 82 -59 171 -114 89 -56 192 -77 291 -60 37 7
77 17 88 23 12 6 86 37 166 68 120 47 167 72 275 146 72 49 147 98 168 108 30
16 50 42 106 135 119 202 148 263 190 401 23 74 45 138 49 142 5 5 35 -13 68
-38 99 -77 142 -95 263 -104 160 -12 332 -67 628 -200 160 -72 188 -89 430
-262 84 -60 183 -126 220 -147 76 -43 175 -71 249 -71 47 0 51 -2 62 -32 27
-74 131 -168 268 -244 l72 -39 -23 -29 c-27 -34 -37 -87 -26 -136 7 -32 4 -39
-40 -87 -38 -42 -48 -62 -54 -101 -6 -46 -9 -50 -45 -61 -51 -15 -133 -90
-160 -147 -45 -91 -26 -194 52 -279 76 -84 124 -108 223 -113 96 -5 191 17
324 77 202 91 229 97 482 106 251 8 380 27 591 84 316 86 370 93 713 98 338 5
452 -3 536 -40 84 -38 314 -77 448 -77 80 0 603 -68 689 -89 42 -11 115 -27
162 -36 203 -40 327 -75 460 -131 115 -48 291 -104 391 -124 54 -11 139 -31
191 -44 75 -20 138 -27 318 -36 124 -6 290 -17 370 -26 156 -16 347 -21 475
-12 90 5 156 28 280 97 28 15 153 80 278 145 126 64 236 121 245 127 34 19
154 69 167 69 7 0 53 20 102 45 77 39 102 46 171 52 96 7 92 15 61 -114 -59
-248 -466 -2331 -461 -2362 3 -21 19 -49 46 -76 l41 -42 875 -173 c481 -95
963 -195 1070 -222 107 -27 256 -65 330 -83 157 -41 574 -115 641 -115 26 0
166 -20 312 -45 146 -24 335 -52 419 -60 389 -40 824 -142 1181 -275 153 -58
375 -171 441 -226 49 -41 183 -108 266 -133 94 -29 315 -67 465 -82 132 -12
157 -21 290 -97 60 -34 258 -98 430 -139 33 -8 85 -23 115 -33 107 -36 177
-44 630 -80 278 -22 314 -29 690 -131 118 -32 249 -65 290 -74 119 -24 389
-114 465 -154 39 -20 97 -48 130 -61 33 -13 78 -31 100 -41 22 -9 101 -31 175
-49 74 -18 167 -47 205 -66 110 -52 403 -207 475 -250 36 -22 81 -46 100 -53
19 -7 44 -17 55 -21 33 -14 182 -38 310 -50 66 -6 156 -17 200 -25 44 -8 112
-19 150 -24 64 -9 490 -114 638 -158 35 -10 81 -34 115 -61 31 -24 104 -72
162 -107 58 -34 142 -86 187 -116 179 -118 245 -158 412 -252 96 -54 199 -106
229 -115 40 -13 58 -24 69 -46 58 -113 208 -235 369 -302 109 -45 193 -87 259
-129 28 -17 80 -44 115 -60 36 -15 117 -51 180 -81 63 -29 144 -63 179 -75 36
-13 84 -38 107 -56 76 -58 118 -79 179 -92 33 -7 101 -26 150 -41 50 -16 151
-42 225 -59 127 -28 142 -30 245 -21 61 4 154 18 209 29 54 12 142 24 195 27
l96 6 150 -55 c83 -30 211 -72 285 -92 218 -59 368 -105 475 -146 168 -64 424
-107 525 -89 54 10 70 8 158 -16 160 -43 175 -46 227 -41 28 3 78 19 110 35
33 16 69 33 80 36 31 9 118 -17 251 -74 65 -29 164 -67 219 -87 55 -19 147
-61 205 -92 58 -32 154 -78 213 -101 115 -45 226 -123 254 -178 8 -15 20 -34
27 -42 7 -8 81 -153 163 -322 l151 -306 -22 -20 c-54 -48 -156 -118 -331 -227
-104 -65 -212 -135 -240 -155 -27 -21 -71 -48 -98 -60 -69 -33 -121 -96 -140
-173 -9 -35 -14 -74 -11 -87 21 -89 90 -175 180 -222 38 -20 83 -51 99 -68 17
-18 50 -46 75 -63 25 -16 70 -55 100 -86 30 -31 66 -61 80 -67 22 -10 224 -75
330 -106 19 -6 40 -15 46 -19 6 -5 33 -12 60 -16 54 -7 83 -22 130 -66 31 -28
31 -29 16 -60 -20 -39 -20 -105 0 -143 15 -29 27 -51 108 -198 46 -84 113
-150 162 -160 18 -3 68 -30 113 -60 44 -29 108 -68 142 -86 66 -34 96 -72 124
-155 7 -22 17 -45 21 -51 5 -7 17 -40 27 -75 42 -141 111 -269 213 -390 21
-25 38 -49 38 -53 0 -4 9 -21 21 -37 16 -23 20 -44 20 -102 0 -94 -33 -202
-116 -372 -132 -271 -171 -397 -163 -518 10 -138 82 -265 249 -441 104 -110
173 -207 189 -265 11 -41 2 -111 -25 -206 -21 -71 -16 -194 10 -249 38 -79
165 -188 273 -233 18 -7 60 -34 93 -58 33 -24 76 -47 96 -51 l35 -7 -4 -67
c-5 -67 -35 -137 -76 -172 -26 -24 -176 -105 -219 -118 -56 -18 -122 -62 -179
-122 -100 -103 -124 -170 -124 -341 0 -153 6 -174 60 -228 35 -35 57 -48 88
-54 56 -9 139 16 227 68 l70 42 125 1 c87 1 142 6 180 18 30 10 78 22 105 28
65 12 130 50 182 106 l43 44 256 -37 c334 -49 387 -45 503 43 18 14 61 38 95
54 33 17 88 46 120 66 l59 35 112 -21 c107 -21 210 -49 285 -77 19 -7 70 -18
113 -25 l78 -13 -44 -46 c-25 -25 -61 -72 -81 -104 -20 -32 -54 -80 -74 -106
-21 -26 -65 -94 -97 -151 -67 -118 -168 -227 -279 -304 -38 -26 -93 -68 -123
-94 -31 -27 -106 -73 -176 -107 -108 -53 -127 -66 -168 -118 -51 -64 -65 -112
-53 -187 8 -52 64 -113 134 -147 57 -27 210 -53 313 -53 60 0 85 -4 105 -18
43 -29 146 -70 193 -76 24 -3 130 -10 234 -16 105 -6 211 -13 237 -16 44 -6
48 -9 46 -33 -4 -63 3 -82 45 -125 71 -71 131 -70 294 5 92 43 165 109 229
208 35 55 41 59 83 64 81 10 178 46 232 87 62 46 114 57 197 41 70 -13 139 2
203 46 24 16 91 52 149 80 132 62 161 88 202 171 41 86 49 95 113 127 73 35
139 105 182 192 40 80 37 79 148 87 148 11 209 47 261 152 20 41 37 60 66 75
21 11 92 68 156 126 64 58 146 126 182 151 36 25 83 63 106 84 32 31 57 43
113 58 101 26 191 99 230 187 24 53 49 101 93 179 49 89 69 162 77 279 7 105
10 116 65 236 52 116 57 136 67 235 11 123 8 153 -27 233 -21 46 -24 66 -19
111 3 30 2 69 -3 85 -8 26 -3 45 29 115 21 47 39 101 39 120 0 19 11 76 25
125 14 50 25 113 25 141 0 36 9 71 30 115 44 95 90 287 100 414 10 133 18 156
63 184 48 29 62 55 80 141 9 41 28 109 43 150 23 64 28 93 29 198 l2 123 44
29 c63 42 113 89 144 137 14 23 45 54 68 69 23 15 90 66 149 113 113 90 112
88 187 254 22 48 84 154 139 235 117 175 165 260 191 333 10 30 55 127 99 215
65 130 84 178 96 245 9 46 25 134 36 194 35 182 35 176 4 246 -16 35 -44 83
-62 107 -44 58 -49 91 -23 151 11 27 21 66 21 86 0 38 28 103 55 125 65 54
104 211 105 418 0 162 -7 187 -68 254 -22 24 -51 67 -66 96 -41 81 -148 178
-263 237 l-97 50 -22 65 c-11 36 -38 99 -59 140 -21 41 -55 128 -76 194 l-37
118 25 47 c22 40 24 55 20 121 -3 53 -12 91 -30 130 -23 48 -26 63 -20 125 6
75 -14 191 -42 246 -20 38 -19 55 10 118 14 30 31 90 39 135 7 45 20 96 30
114 23 44 105 152 116 152 31 0 110 249 110 345 0 51 -16 113 -38 152 -19 34
-72 61 -147 73 -39 7 -95 23 -125 35 -30 13 -91 31 -134 40 -73 16 -90 25
-215 115 -75 54 -184 124 -241 155 -206 112 -323 200 -337 255 -3 14 -12 34
-18 45 -7 11 -15 44 -18 73 -8 72 -32 101 -127 153 -45 24 -111 65 -147 92
-36 26 -70 47 -75 47 -29 0 -354 267 -588 482 -24 23 -81 68 -125 99 -44 32
-96 72 -115 89 -19 17 -40 34 -45 38 -17 11 -134 230 -247 462 -57 118 -120
240 -139 270 -20 30 -53 88 -74 128 -68 130 -160 214 -348 318 -273 151 -335
189 -377 229 -25 23 -90 72 -145 107 -201 129 -671 614 -755 777 -12 25 -38
70 -58 100 -169 266 -204 307 -407 489 -77 69 -167 156 -200 193 -33 37 -145
147 -250 244 -216 201 -251 247 -279 370 -10 44 -25 105 -32 135 -7 30 -18
100 -24 154 -19 166 -67 294 -145 388 -49 60 -160 136 -230 158 -22 7 -70 25
-107 41 -36 16 -106 38 -155 49 -48 12 -104 27 -123 35 -19 8 -104 31 -189 51
-116 28 -166 35 -206 31 -41 -4 -320 -88 -406 -122 -11 -4 -23 8 -43 45 -66
121 -121 157 -306 198 -74 17 -155 33 -180 37 -25 3 -73 15 -107 26 -83 27
-431 236 -513 309 -36 31 -105 84 -153 118 -82 56 -98 63 -205 88 -145 33
-185 53 -219 107 -106 168 -137 209 -210 273 -99 89 -149 124 -298 210 -177
103 -212 120 -296 143 -88 25 -122 26 -204 6 -81 -20 -80 -20 -45 24 34 41 60
115 60 166 0 17 -14 60 -31 94 -25 51 -40 67 -82 91 -99 56 -133 58 -335 17
-123 -26 -189 -35 -217 -31 -22 4 -107 40 -189 81 -194 98 -294 135 -446 168
-183 40 -306 70 -386 95 l-72 21 -12 47 c-17 68 -67 158 -109 194 -59 52 -184
104 -304 127 -133 26 -178 26 -287 1 -47 -11 -102 -20 -123 -20 -72 0 -378
-78 -426 -107 -22 -14 -25 -13 -55 15 -37 36 -122 87 -351 209 -93 51 -201
112 -240 138 -85 56 -401 211 -447 220 -18 3 -52 2 -75 -3 -24 -6 -43 -8 -43
-5 0 3 50 78 111 167 70 100 147 197 204 256 80 83 100 110 150 210 57 114
168 282 272 412 93 117 199 293 233 386 17 48 58 148 90 222 46 105 69 177
104 325 25 105 50 217 56 250 8 46 28 525 30 732 0 35 74 131 184 238 71 69
501 458 624 564 45 39 140 131 211 204 l130 133 128 42 c70 23 150 47 177 54
68 16 261 161 294 221 23 41 26 100 7 148 -5 13 3 18 36 23 24 4 57 15 74 26
23 14 47 18 105 17 81 -2 124 14 190 69 30 26 38 28 134 28 69 1 120 -5 161
-17 79 -23 281 -40 375 -32 154 13 247 47 280 100 18 30 25 33 83 37 41 4 82
15 122 35 33 17 78 34 100 37 52 10 92 31 125 67 26 29 26 29 70 14 24 -8 50
-21 57 -27 8 -6 35 -12 61 -12 37 -1 69 10 153 52 66 32 121 53 145 54 52 2
175 -19 249 -42 111 -35 215 -49 315 -43 l93 6 -7 -42 c-15 -94 102 -389 176
-444 119 -89 276 -156 461 -199 43 -10 344 24 380 43 12 7 58 47 103 90 88 84
87 84 230 94 64 4 89 2 120 -12 54 -23 180 -21 262 5 l62 20 6 -27 c9 -44 27
-72 75 -122 42 -43 51 -48 118 -59 72 -12 75 -12 189 25 113 36 119 37 222 30
96 -6 109 -9 155 -39 60 -39 105 -50 156 -36 32 9 47 7 86 -9 27 -11 72 -25
101 -30 43 -9 62 -20 96 -54 26 -27 56 -47 77 -51 18 -5 115 -12 214 -16 99
-5 196 -12 215 -17 19 -6 74 -35 121 -65 47 -30 110 -63 140 -73 30 -10 90
-34 134 -53 66 -29 94 -35 160 -38 44 -1 83 -3 87 -3 3 -1 35 -26 71 -56 63
-54 64 -56 71 -117 5 -55 12 -70 61 -134 31 -39 97 -112 148 -161 105 -103
168 -195 187 -273 19 -81 31 -99 107 -161 87 -70 109 -104 117 -176 6 -49 15
-68 59 -127 34 -46 67 -78 96 -93 27 -14 51 -36 60 -55 8 -17 55 -72 103 -122
49 -50 101 -113 115 -141 44 -87 69 -111 208 -200 128 -81 141 -87 198 -91
144 -9 142 -8 267 -122 128 -118 321 -249 443 -302 57 -25 87 -45 112 -76 19
-23 58 -59 86 -80 50 -36 57 -38 143 -42 73 -4 97 -9 126 -28 91 -60 225 -83
289 -50 30 16 40 17 93 6 33 -7 68 -20 77 -29 30 -26 108 -220 126 -310 18
-95 25 -110 69 -164 80 -99 96 -111 192 -134 105 -26 106 -26 157 -12 25 7 57
29 90 64 48 49 56 53 110 58 62 6 113 32 136 69 8 13 24 52 36 87 14 44 30 71
51 87 28 21 31 22 69 8 39 -15 59 -20 175 -46 35 -7 74 -26 106 -50 45 -34 62
-40 132 -48 57 -6 99 -18 144 -41 80 -41 147 -44 201 -10 32 20 45 22 96 16
49 -6 72 -2 147 23 49 16 116 35 149 42 33 6 75 21 94 31 31 18 37 19 80 5 72
-23 104 -27 137 -17 22 6 40 4 65 -7 20 -9 67 -16 116 -16 59 -1 87 -6 100
-18 38 -33 150 -95 183 -101 20 -4 58 -1 90 8 30 8 68 15 84 15 16 0 68 14
117 30 93 32 138 32 192 -2 12 -8 44 -23 72 -33 27 -10 58 -29 68 -42 70 -88
283 -119 413 -59 32 15 78 34 101 41 23 7 73 35 110 62 103 75 175 119 217
133 20 6 55 29 78 51 24 23 60 44 89 52 26 8 70 30 96 50 27 20 62 39 78 43
38 9 135 61 203 107 68 47 109 55 169 32 86 -33 171 -21 257 37 27 18 54 36
60 40 6 3 57 18 113 33 72 19 117 38 150 62 27 19 62 40 78 47 17 7 54 34 84
59 30 26 58 47 62 47 15 0 58 86 71 138 7 31 19 57 29 63 10 5 33 31 51 57 40
58 52 68 105 81 24 6 54 24 70 42 15 16 37 38 47 47 11 9 29 27 41 39 13 13
61 34 122 51 94 27 163 62 163 82 0 4 10 10 23 14 39 9 105 63 129 105 19 33
30 41 61 46 21 4 57 22 80 40 23 19 79 59 123 90 50 35 89 71 102 93 24 44
385 943 396 987 4 17 45 441 91 944 l83 913 56 82 c30 44 59 97 62 116 11 59
60 156 122 242 32 46 99 150 148 232 52 87 112 172 144 205 80 83 367 273 570
378 96 50 258 140 360 200 180 107 383 208 565 283 87 36 473 266 660 395 84
58 613 361 1070 613 111 61 358 208 549 327 192 119 360 221 374 226 14 5 46
25 71 43 25 18 192 105 371 193 334 164 1938 1048 2643 1457 186 108 342 196
346 196 5 0 118 66 252 146 354 212 897 521 1177 670 l243 129 267 268 c147
147 277 286 290 309 31 58 28 94 -17 183 l-38 76 31 36 c17 20 67 71 111 114
44 42 94 100 110 129 29 49 31 51 66 46 19 -3 51 -1 70 5 19 6 60 11 91 10 80
-2 206 26 248 54 19 14 61 45 94 71 32 25 95 68 141 95 45 26 112 77 147 112
53 53 68 63 82 55 10 -6 82 -12 159 -15 270 -10 270 -10 315 20 31 20 49 25
71 21 39 -8 177 22 219 48 57 35 167 216 237 393 22 54 37 79 46 76 74 -20 93
-20 157 -5 89 22 139 55 252 169 96 97 128 117 155 95 22 -18 87 -17 194 3
101 19 211 71 275 132 24 22 53 35 108 48 59 14 92 29 145 68 37 27 109 78
159 114 114 80 139 122 139 232 0 91 11 104 62 76 83 -45 143 -38 241 27 33
22 69 40 80 40 42 0 169 34 217 58 105 52 213 144 276 234 13 18 46 58 74 89
41 45 58 75 83 146 17 49 35 109 41 132 5 23 12 45 15 48 3 3 32 0 65 -6 63
-12 56 -13 216 32 28 8 81 33 117 56 58 36 70 50 104 114 20 39 73 126 117
192 85 127 110 177 147 290 22 68 257 540 368 740 31 55 89 151 130 213 l74
112 81 0 c133 0 664 -105 980 -194 148 -42 280 -69 469 -96 199 -28 285 -46
418 -86 114 -35 395 -101 520 -123 36 -7 189 -20 340 -31 249 -17 282 -21 345
-45 87 -34 136 -46 375 -90 217 -41 174 -45 448 40 l172 54 369 -38 370 -38
574 -198 574 -198 288 -213 c230 -170 324 -233 464 -310 97 -54 239 -134 316
-179 77 -45 155 -85 174 -88 19 -4 512 -41 1095 -82 584 -42 1090 -80 1126
-86 36 -6 442 -55 903 -109 461 -55 841 -101 846 -104 4 -3 61 -17 127 -31 65
-14 414 -102 774 -195 360 -93 1200 -309 1865 -479 666 -171 1338 -344 1495
-386 157 -41 353 -93 435 -114 83 -22 958 -245 1945 -496 987 -251 1890 -480
2006 -510 l211 -54 374 -11 c206 -6 561 -15 789 -20 l415 -8 397 -61 c218 -34
406 -61 417 -61 14 0 23 -8 27 -27 19 -87 28 -106 74 -156 27 -30 76 -68 111
-86 54 -30 74 -34 173 -41 84 -5 131 -14 196 -37 110 -39 114 -40 274 -58 74
-8 146 -19 160 -25 46 -17 258 -42 306 -35 55 8 111 53 174 143 40 55 138 142
161 142 7 0 39 21 71 46 33 25 113 77 179 117 66 39 175 109 242 155 81 55
129 81 141 78 9 -3 49 -2 87 3 57 7 77 5 110 -9 47 -20 78 -26 204 -40 117
-13 166 -39 202 -107 14 -27 44 -80 67 -120 23 -40 42 -78 42 -84 0 -16 153
-331 191 -392 16 -26 29 -54 29 -62 0 -22 105 -227 152 -298 96 -143 143 -184
307 -267 46 -23 101 -53 122 -67 20 -13 83 -35 140 -49 57 -14 108 -28 114
-32 5 -5 37 -16 70 -27 33 -10 71 -27 84 -37 29 -22 123 -67 261 -125 58 -24
109 -48 115 -54 5 -5 15 -9 23 -9 8 0 39 -15 70 -34 44 -26 86 -40 185 -60
191 -38 246 -68 387 -207 117 -116 142 -133 240 -166 48 -16 82 -18 268 -15
258 4 335 -5 582 -69 41 -11 102 -24 135 -30 33 -6 85 -17 115 -25 30 -8 74
-14 98 -14 45 0 130 17 147 30 15 12 283 97 340 109 56 11 183 27 291 36 60 5
100 -1 272 -39 l201 -44 118 -79 c65 -43 122 -80 128 -82 5 -2 21 -12 35 -21
27 -19 128 -55 175 -64 17 -2 116 -21 220 -40 105 -19 237 -40 295 -46 108
-12 202 -38 305 -85 164 -75 296 -118 493 -160 62 -14 118 -28 124 -31 9 -6
63 -11 340 -34 217 -17 294 -38 463 -121 66 -33 185 -84 265 -115 80 -30 159
-61 175 -70 37 -18 225 -54 282 -54 23 0 77 -7 120 -15 127 -25 436 -57 608
-62 122 -4 184 -2 265 11 207 34 372 81 493 142 58 30 235 140 312 194 64 45
205 162 205 171 0 9 156 129 167 129 10 0 245 151 324 209 204 148 332 171
549 101 159 -51 439 -118 540 -129 90 -10 232 -4 346 15 56 9 131 75 172 152
30 56 38 96 103 489 39 235 99 590 134 788 36 198 76 436 90 530 14 93 40 224
56 290 58 226 95 657 86 998 -5 230 -42 532 -92 762 -14 66 -44 257 -65 425
-22 168 -53 391 -69 495 -16 105 -32 251 -35 325 -6 150 -83 697 -142 1000
-20 102 -49 277 -65 390 -32 225 -70 380 -189 780 -43 146 -106 371 -139 500
-33 129 -79 296 -101 370 -22 74 -72 263 -111 420 -101 416 -244 878 -355
1155 -189 472 -215 526 -303 643 -73 97 -204 230 -270 274 -14 10 -48 25 -76
34 -122 39 -521 244 -640 329 -76 54 -204 186 -237 245 -47 82 -95 274 -118
470 -34 292 -50 521 -50 721 0 175 -4 237 -21 330 -30 163 -29 507 1 693 11
70 25 207 30 304 6 96 15 227 20 291 5 64 10 294 10 511 0 503 -1 507 -165
1055 -242 807 -426 1464 -446 1588 -6 34 -14 66 -19 72 -4 5 -18 57 -30 115
-31 151 -41 371 -24 545 8 77 17 291 20 475 5 287 10 369 35 570 18 142 41
424 59 715 28 458 78 1104 156 2020 19 231 33 441 30 467 -6 56 -27 91 -70
117 -17 11 -165 67 -329 125 l-298 106 -539 105 -539 105 -631 275 c-347 151
-634 275 -637 275 -3 0 -341 148 -752 329 l-746 329 -519 156 c-286 87 -547
163 -580 171 -34 8 -367 68 -741 135 l-680 121 -1425 391 c-784 214 -1756 482
-2160 593 l-735 203 -930 482 c-511 265 -1195 620 -1520 788 l-589 306 -226 8
c-350 12 -936 36 -1500 63 -436 21 -701 26 -1730 35 l-1215 11 -1175 -61
-1175 -62 -1745 5 -1745 5 -560 46 c-308 25 -715 59 -905 76 -190 16 -403 34
-475 40 -71 6 -168 15 -215 21 -50 5 -396 89 -845 204 -418 108 -1145 293
-1615 411 -470 119 -911 233 -980 254 -288 88 -409 123 -670 195 -151 42 -322
92 -380 111 -95 30 -265 70 -545 125 -118 23 -160 32 -240 53 -33 9 -256 56
-495 105 -239 50 -487 104 -550 120 -344 90 -1487 344 -3496 777 l-2252 484
-828 -30 c-456 -16 -910 -36 -1008 -45 -99 -9 -472 -41 -830 -71 -358 -30
-658 -56 -666 -59 -8 -2 -100 -11 -205 -20 -104 -8 -296 -31 -426 -50 -406
-60 -1091 -165 -1173 -180 -43 -8 -707 -89 -1474 -180 l-1396 -165 -695 50
c-383 27 -830 59 -994 70 l-298 20 -582 159 -582 159 -1165 465 c-641 255
-1293 515 -1450 577 l-285 113 -790 445 -790 444 -145 121 c-80 67 -161 137
-181 156 -19 20 -105 76 -190 125 -85 49 -323 195 -529 325 -295 184 -421 271
-591 403 -202 157 -225 178 -338 312 -121 143 -121 143 -202 327 -45 101 -160
378 -256 614 l-174 430 -189 795 c-408 1719 -486 2029 -538 2161 -65 163 -200
487 -218 521 -8 15 -90 116 -182 225 -92 109 -200 238 -240 287 -40 48 -110
122 -155 164 -45 42 -289 281 -542 532 -330 328 -555 541 -799 756 l-339 299
-297 343 -298 342 -374 553 c-366 541 -378 559 -567 912 -107 198 -282 509
-391 690 -108 182 -239 404 -291 494 -90 157 -106 177 -360 470 l-266 307
-270 489 c-149 270 -279 508 -291 530 -11 22 -112 258 -225 525 -189 448 -215
515 -331 880 -124 386 -177 579 -450 1640 -133 518 -219 794 -264 847 -15 17
-165 160 -334 318 -280 262 -387 374 -435 456 -11 18 -52 51 -103 81 -390 234
-979 693 -1690 1319 -284 250 -532 465 -552 479 -20 14 -162 121 -315 239
-153 118 -503 375 -778 571 -357 254 -647 471 -1015 761 -283 222 -606 471
-717 553 -112 81 -308 239 -435 351 -217 188 -249 221 -465 471 -202 233 -389
476 -1415 1839 -650 864 -1201 1598 -1225 1632 -39 54 -53 66 -126 101 -45 22
-211 103 -369 181 l-288 142 -149 28 -150 28 -118 111 c-214 200 -380 375
-480 503 -55 70 -187 222 -295 339 -158 169 -239 268 -407 495 -172 233 -560
704 -2134 2592 -1057 1269 -2050 2463 -2206 2653 -156 190 -293 353 -305 362
-21 17 -77 40 -149 60 -38 11 -54 9 -182 -23 -72 -18 -142 -66 -213 -145 -52
-58 -74 -75 -146 -108 l-85 -38 -48 30 c-52 33 -154 57 -200 46 -70 -15 -191
-75 -275 -135 l-93 -66 -55 15 c-30 8 -82 15 -115 15 -107 2 -287 -21 -335
-41 -25 -11 -92 -33 -150 -49 -97 -26 -108 -32 -165 -85 -44 -41 -72 -58 -100
-64 -62 -11 -137 -65 -184 -131 -39 -55 -67 -79 -186 -156 -32 -21 -66 -57
-98 -104 l-49 -73 -47 0 c-81 0 -174 -19 -242 -50 -49 -23 -86 -32 -141 -35
-55 -3 -84 -10 -118 -29 -25 -14 -73 -35 -107 -46 -58 -20 -64 -20 -108 -6
-54 19 -92 20 -168 5 -65 -13 -124 -58 -168 -127 -19 -30 -50 -58 -101 -89
-40 -24 -87 -58 -104 -74 l-30 -29 -230 -11 c-126 -6 -269 -8 -319 -4 -150 11
-159 10 -218 -18 -32 -15 -64 -27 -71 -27 -14 0 -147 -59 -236 -104 -29 -15
-62 -45 -94 -87 -48 -63 -146 -249 -146 -276 0 -8 -16 -33 -35 -56 -19 -23
-62 -75 -94 -115 -33 -40 -84 -92 -113 -115 -92 -74 -202 -147 -219 -147 -10
0 -41 -22 -71 -48 -66 -60 -165 -124 -193 -124 -11 0 -54 5 -95 11 -208 33
-328 22 -409 -35 -50 -35 -142 -87 -145 -82 -1 2 -10 24 -20 51 -30 81 -95
127 -178 127 -51 0 -132 -23 -170 -48 -21 -14 -40 -23 -41 -21 -2 2 -18 24
-36 49 -47 68 -81 85 -176 86 -44 0 -100 7 -125 14 -54 15 -122 7 -159 -19
-26 -19 -27 -19 -90 2 -58 19 -70 20 -133 9 -39 -7 -82 -21 -97 -31 -14 -10
-42 -22 -61 -26 -19 -4 -60 -26 -90 -49 -52 -40 -62 -43 -135 -49 -105 -9
-253 -36 -285 -52 -14 -8 -44 -17 -65 -20 -22 -4 -44 -11 -50 -15 -5 -4 -39
-10 -75 -14 -49 -4 -75 -13 -106 -35 -23 -16 -57 -32 -75 -36 -19 -4 -45 -15
-58 -24 -14 -9 -50 -21 -80 -28 -182 -38 -225 -52 -280 -92 -31 -23 -85 -58
-121 -80 -36 -21 -74 -49 -85 -61 -11 -12 -31 -28 -45 -35 -71 -35 -266 -41
-382 -10 -105 27 -140 18 -234 -63 -43 -37 -116 -104 -162 -149 -45 -45 -91
-85 -101 -88 -43 -13 -103 -68 -122 -110 -13 -30 -38 -58 -81 -90 -73 -55 -95
-66 -168 -90 -58 -19 -134 -68 -172 -113 -24 -28 -47 -42 -182 -115 -137 -73
-170 -117 -182 -247 -5 -42 0 -73 18 -130 18 -56 22 -84 16 -111 -5 -26 -1
-57 12 -104 11 -37 17 -71 15 -75 -3 -4 -22 -11 -42 -15 -58 -10 -182 -83
-246 -143 l-57 -55 -48 26 c-123 66 -146 76 -190 82 -26 3 -90 12 -142 20 -72
12 -113 13 -170 6 -279 -35 -278 -35 -374 -117 -75 -64 -128 -132 -145 -186
-9 -27 -22 -42 -48 -54 -19 -10 -47 -33 -61 -52 -39 -51 -225 -232 -238 -232
-7 0 -34 -19 -60 -43 -27 -23 -66 -55 -87 -71 -22 -16 -49 -50 -65 -82 -26
-53 -27 -54 -72 -54 -67 -1 -116 -15 -162 -47 -57 -39 -58 -40 -102 -59 -22
-10 -56 -40 -80 -71 -23 -29 -63 -66 -88 -82 -62 -40 -124 -124 -133 -181 -4
-25 -17 -67 -29 -93 -19 -44 -26 -49 -73 -63 -29 -8 -60 -15 -70 -15 -60 1
-134 12 -172 26 -49 18 -120 11 -281 -24 -47 -11 -110 -22 -140 -26 -33 -4
-70 -16 -92 -31 -24 -15 -52 -24 -78 -24 -50 0 -215 -27 -255 -42 -16 -6 -45
-22 -64 -36 -32 -24 -36 -25 -97 -13 -65 12 -143 2 -171 -21 -8 -7 -37 -9 -74
-5 -38 3 -82 0 -119 -10 -52 -13 -64 -13 -111 1 -29 9 -89 16 -136 16 -75 0
-89 3 -139 31 -67 38 -159 48 -264 30 l-68 -13 -51 36 c-48 32 -103 48 -156
45 -19 -1 -62 7 -192 33 -38 8 -63 22 -93 50 -23 21 -52 41 -64 44 -12 3 -30
21 -41 40 -23 43 -60 66 -151 94 -58 17 -78 19 -115 11 -34 -8 -54 -7 -84 4
-49 17 -213 19 -287 4 -31 -7 -73 -26 -99 -45 -26 -19 -75 -44 -109 -56 l-62
-23 -49 27 c-52 30 -121 43 -294 60 -157 15 -183 13 -276 -23 -100 -37 -152
-75 -277 -198 -55 -53 -102 -91 -113 -91 -23 0 -199 -168 -238 -228 -56 -85
-104 -142 -117 -142 -8 0 -29 -7 -46 -16 -17 -9 -53 -18 -80 -20 -86 -6 -215
-103 -283 -213 -47 -76 -137 -135 -227 -151 -72 -12 -112 -26 -148 -50 -14
-10 -54 -20 -89 -24 -39 -4 -85 -17 -120 -34 -31 -16 -73 -32 -95 -36 -100
-19 -209 -89 -339 -218 -52 -52 -74 -68 -96 -68 -64 0 -96 -14 -141 -60 -38
-41 -52 -49 -95 -54 l-50 -6 -165 261 c-204 324 -215 340 -271 382 -26 21 -70
74 -107 128 -50 77 -72 100 -116 127 -41 24 -90 73 -189 190 -73 86 -149 177
-167 202 -99 126 -517 608 -543 625 -57 36 -108 26 -387 -78 -140 -52 -401
-141 -580 -197 l-325 -103 -97 -69 c-53 -37 -103 -71 -111 -74 -8 -3 -25 11
-42 36 -15 22 -30 40 -34 40 -7 0 -55 91 -71 135 -6 17 -29 57 -50 90 -25 39
-42 81 -49 120 -19 100 -118 227 -325 416 -102 92 -116 101 -190 125 -51 16
-91 23 -110 19 -41 -8 -155 -54 -186 -75 -40 -28 -148 -80 -165 -80 -8 0 -15
4 -15 9 0 5 -3 16 -6 24 -3 10 11 24 43 42 129 74 182 116 202 158 30 62 28
129 -7 196 -36 73 -71 105 -183 172 -118 69 -150 82 -318 124 -75 19 -172 44
-216 55 -95 25 -322 137 -488 241 -165 104 -246 147 -291 155 -22 3 -64 15
-94 25 -30 10 -83 24 -118 30 -44 8 -90 26 -151 61 -48 28 -94 53 -103 56 -8
3 -28 16 -45 28 -49 36 -202 109 -324 153 -62 23 -135 53 -160 65 -25 13 -67
29 -91 36 -25 6 -52 18 -61 26 -9 8 -55 34 -102 58 -47 24 -112 60 -145 81
-67 41 -122 58 -248 74 -137 19 -261 39 -474 76 -107 20 -224 40 -260 45 -62
9 -112 22 -360 89 -196 53 -705 184 -755 194 -27 5 -104 25 -170 43 -66 18
-136 35 -155 39 -19 3 -75 24 -125 45 -49 21 -144 60 -210 85 -66 26 -162 65
-214 87 -52 22 -133 55 -180 73 -47 17 -117 45 -156 60 -38 15 -104 41 -145
57 -41 17 -99 41 -128 54 -72 33 -346 130 -402 143 -25 6 -145 43 -267 83
-213 70 -221 74 -227 102 -11 54 -44 91 -126 140 -44 27 -138 70 -207 95
l-127 46 -12 48 c-18 69 -56 121 -106 146 -24 11 -51 33 -60 49 -26 44 -86 79
-163 98 -38 9 -94 23 -124 32 -66 18 -154 11 -191 -16 l-26 -20 -22 34 c-34
51 -123 114 -188 131 -108 28 -202 -6 -268 -96 -31 -42 -37 -60 -42 -118 -4
-37 -14 -95 -24 -128 -9 -33 -21 -87 -24 -120 -4 -33 -23 -161 -41 -285 -62
-415 -68 -478 -69 -750 l-1 -255 39 -105 c31 -83 41 -127 48 -210 11 -135 25
-843 27 -1352 l1 -398 -27 0 c-49 0 -534 -29 -1538 -90 -789 -49 -1150 -76
-1854 -140 l-875 -80 -1005 145 c-553 80 -1081 157 -1172 171 -136 21 -173 24
-207 15 -49 -14 -107 -76 -115 -124 -7 -41 28 -363 47 -443 8 -34 28 -95 44
-135 56 -140 171 -504 182 -574 6 -38 15 -92 21 -118 5 -27 9 -65 9 -86 0 -20
36 -168 80 -327 60 -217 96 -324 142 -429 33 -77 64 -145 69 -150 13 -17 148
-313 187 -410 20 -49 51 -115 69 -145 29 -49 93 -221 93 -252 0 -11 58 -138
83 -183 63 -112 77 -178 58 -284 -6 -36 -12 -103 -13 -148 -2 -78 0 -85 29
-120 41 -52 170 -130 246 -150 34 -8 98 -16 142 -17 89 -1 110 8 211 91 l52
41 31 -32 c17 -17 31 -35 31 -40 0 -4 20 -35 43 -69 24 -34 50 -78 57 -97 50
-130 258 -323 460 -425 126 -64 318 -186 342 -217 20 -26 26 -48 30 -108 6
-92 30 -149 105 -250 70 -92 221 -250 283 -294 63 -45 231 -113 315 -127 39
-6 79 -15 90 -20 11 -4 57 -15 102 -24 77 -15 85 -15 156 3 41 11 90 31 109
46 55 41 107 37 171 -16 80 -67 116 -108 150 -173 18 -33 57 -84 87 -115 59
-59 58 -59 356 -160 178 -60 185 -64 271 -147 39 -39 89 -78 110 -88 21 -10
50 -33 66 -51 15 -18 53 -45 85 -60 37 -17 89 -57 147 -113 132 -127 150 -139
231 -151 38 -5 101 -10 139 -11 82 -1 115 -9 125 -29 4 -8 26 -53 49 -99 79
-156 159 -399 186 -561 15 -89 23 -112 52 -153 20 -26 50 -58 69 -71 l33 -22
-29 -18 c-58 -34 -91 -99 -134 -270 -12 -47 -13 -69 -4 -107 10 -41 8 -63 -17
-166 -15 -65 -38 -147 -51 -182 -64 -171 -90 -382 -64 -520 10 -54 10 -88 1
-162 -7 -52 -16 -141 -22 -199 -19 -205 -39 -437 -49 -569 -6 -74 -13 -137
-15 -141 -2 -3 -9 -56 -15 -116 -6 -60 -19 -143 -30 -185 -11 -42 -26 -145
-35 -230 -22 -226 -23 -237 -45 -324 -30 -119 -48 -236 -43 -271 6 -36 76
-130 125 -168 19 -14 61 -32 94 -40 65 -17 518 -46 710 -46 85 0 124 -4 131
-12 11 -14 163 -759 163 -795 0 -19 -12 -26 -85 -48 -59 -18 -90 -23 -102 -17
-10 5 -43 15 -75 22 -48 11 -69 10 -148 -5 -82 -16 -95 -22 -139 -61 -40 -36
-62 -47 -120 -60 -58 -13 -80 -24 -119 -59 -26 -23 -54 -54 -61 -69 -8 -14
-23 -26 -33 -26 -11 0 -28 -5 -39 -11 -17 -8 -24 -6 -42 13 -27 29 -121 83
-162 93 -40 10 -160 18 -266 19 -75 0 -91 -3 -130 -26 -25 -15 -62 -46 -82
-70 -74 -88 -78 -90 -117 -81 -19 4 -66 8 -105 7 -58 -1 -80 -6 -129 -32 -32
-18 -69 -32 -80 -32 -31 0 -106 -50 -148 -99 -29 -34 -37 -55 -47 -114 -11
-64 -10 -80 8 -151 12 -43 18 -82 15 -87 -3 -5 -28 9 -55 31 -60 47 -142 74
-194 64 -53 -10 -139 -92 -162 -155 -12 -30 -41 -73 -77 -110 l-57 -61 -42 8
c-23 5 -82 8 -132 8 -81 -1 -99 -5 -188 -43 -125 -52 -178 -89 -224 -156 -39
-56 -60 -68 -140 -79 -51 -7 -166 -82 -233 -150 -46 -48 -60 -55 -60 -33 0 36
-53 115 -101 151 -74 55 -140 71 -221 52 -62 -14 -64 -14 -143 16 -44 16 -104
41 -133 54 -29 13 -101 35 -159 49 -95 23 -113 24 -165 14 -69 -14 -132 -63
-183 -144 -36 -55 -75 -169 -75 -216 0 -43 38 -149 67 -188 l26 -33 -18 -84
c-16 -78 -20 -84 -57 -109 -41 -27 -78 -78 -78 -107 0 -19 -55 -87 -137 -170
l-56 -56 -60 44 c-34 24 -69 44 -78 44 -10 0 -21 4 -24 10 -10 16 -140 78
-200 95 -30 9 -71 15 -92 13 -36 -3 -40 0 -80 59 -47 69 -94 109 -144 124 -40
11 -169 -5 -211 -27 -44 -23 -80 -17 -113 18 -43 46 -129 82 -192 81 -58 0
-127 -34 -163 -80 l-21 -26 -42 23 c-60 34 -133 33 -179 -2 l-35 -26 -16 28
c-45 75 -159 98 -237 46 -35 -23 -123 -129 -133 -160 -2 -7 -17 -4 -43 7 -99
44 -283 62 -441 43 -107 -13 -128 -18 -165 -44 -35 -24 -57 -31 -113 -35 -52
-4 -89 -14 -145 -41 -103 -50 -129 -53 -211 -26 -72 23 -107 23 -239 -1 -67
-12 -171 -53 -225 -89 -96 -64 -135 -81 -231 -99 -207 -40 -351 -98 -433 -175
-31 -29 -83 -73 -116 -98 -33 -25 -89 -72 -125 -103 -96 -84 -93 -84 -190 -35
-102 51 -136 55 -348 41 l-163 -11 -27 25 c-15 14 -42 30 -61 36 -19 7 -55 24
-79 40 -24 15 -58 31 -76 35 -55 11 -92 42 -172 142 -84 105 -83 104 -163 159
l-53 38 -212 2 c-116 0 -382 7 -591 15 l-380 15 -95 57 c-139 83 -281 224
-339 335 -57 109 -208 272 -421 455 -205 176 -193 161 -175 220 21 69 20 348
-1 436 -8 36 -22 96 -29 135 -16 83 -15 90 102 605 8 36 12 80 9 99 -4 28 8
62 70 190 175 362 176 363 335 526 56 57 106 120 136 172 47 80 54 87 253 244
l205 161 81 128 c76 121 82 134 109 251 20 86 29 147 28 199 -1 48 7 113 22
180 13 58 28 150 34 205 5 55 21 142 35 194 35 129 66 439 66 662 0 175 0 177
39 307 l38 130 297 406 c163 223 302 419 308 437 8 22 8 161 -1 506 -10 424
-9 478 5 504 37 72 259 411 465 710 296 430 394 623 483 949 13 47 56 155 95
241 71 155 111 287 157 519 9 47 48 171 87 275 38 105 78 217 89 250 21 66 58
370 58 481 0 140 22 210 142 448 61 121 130 248 154 283 70 103 74 127 71 443
l-2 275 -53 100 -52 100 -160 114 c-131 92 -169 125 -204 175 -76 106 -95 160
-111 329 -15 165 -9 244 35 447 12 52 43 216 71 364 l49 270 87 153 c49 84 93
158 98 166 23 31 188 126 299 172 65 27 130 61 145 76 25 24 203 387 222 452
22 75 41 312 37 478 l-3 174 -88 199 -88 200 -15 158 c-13 142 -97 725 -125
868 -6 30 -57 208 -114 395 l-103 340 -91 545 c-74 438 -106 606 -167 855 -42
171 -106 441 -144 600 -115 486 -328 1336 -353 1409 -22 66 -23 73 -11 165 7
53 24 125 37 161 37 97 99 387 91 424 -6 33 -317 761 -366 861 -17 33 -76 137
-133 230 -200 332 -229 392 -275 570 -23 88 -75 252 -116 365 -70 191 -84 220
-206 424 -117 197 -143 233 -264 368 -74 82 -160 187 -190 232 -60 91 -68 114
-154 486 -33 142 -73 425 -82 581 -2 45 29 107 133 259 l78 115 91 303 c97
323 104 364 115 607 6 122 14 182 46 322 33 144 41 202 50 360 18 308 3 367
-109 432 -37 21 -85 47 -107 57 -22 11 -134 92 -249 182 -115 90 -250 192
-301 227 l-92 65 -23 70 c-20 62 -22 82 -16 167 4 54 16 149 26 213 10 63 22
176 26 251 7 149 -1 209 -41 289 -29 56 -61 237 -80 435 -15 164 -37 249 -87
330 -18 29 -46 106 -68 185 -21 74 -46 155 -55 180 -21 59 -45 183 -45 240 -1
55 -21 140 -48 200 -12 25 -32 109 -47 187 -14 79 -30 154 -37 168 -13 29 5
213 28 283 8 24 14 83 14 135 0 65 10 140 34 257 59 287 60 307 37 546 -27
278 -68 476 -118 562 l-25 44 22 56 c18 44 25 88 30 192 5 87 15 162 29 210
12 41 28 136 36 210 9 74 27 182 41 239 29 116 27 156 -8 224 -44 86 -54 151
-45 287 4 69 17 175 28 236 10 61 19 136 19 167 0 43 10 82 40 157 53 134 58
167 30 224 -12 25 -35 54 -53 64 -18 11 -133 45 -257 77 -272 69 -622 181
-904 287 -290 110 -321 127 -448 248 -60 56 -108 107 -108 113 0 6 22 58 50
117 63 136 69 174 40 234 -12 25 -35 54 -52 63 -16 10 -60 63 -98 118 -38 55
-92 123 -122 151 -77 74 -262 214 -343 261 -105 61 -316 163 -336 163 -23 0
-311 193 -358 240 -20 19 -48 58 -62 85 -29 56 -90 97 -181 121 -61 16 -227 4
-300 -21 -46 -15 -47 -15 -121 19 -91 41 -206 146 -244 221 -14 27 -56 97 -94
155 -82 127 -123 157 -226 169 -62 8 -212 62 -245 88 -7 6 -76 42 -153 81 -77
38 -179 95 -227 125 -87 55 -173 85 -205 73 -18 -7 -144 5 -315 31 -130 19
-208 8 -273 -38 l-41 -30 -115 11 c-63 6 -141 15 -174 21 -103 19 -131 11
-395 -104 l-105 -46 -55 14 c-30 7 -109 19 -175 25 -166 16 -333 62 -405 112
-65 45 -128 57 -217 40 -177 -35 -331 -34 -1703 8 l-1325 41 -1750 115 c-1423
94 -1774 114 -1880 109 -71 -3 -688 -24 -1370 -45 -682 -22 -1546 -51 -1920
-65 -374 -14 -1663 -45 -2864 -70 l-2185 -46 -610 21 c-336 12 -687 25 -781
30 -93 5 -215 9 -271 10 l-101 0 -407 200 c-224 110 -426 205 -450 211 -79 20
-153 -17 -189 -94 -9 -18 -37 -84 -64 -147 -27 -63 -75 -155 -106 -203 -31
-48 -57 -90 -57 -93 0 -3 -8 -18 -18 -32 -46 -68 -156 -351 -203 -527 -58
-218 -100 -327 -135 -356 -9 -8 -35 -36 -57 -64 -62 -80 -237 -255 -291 -291
-63 -42 -78 -39 -223 43 -62 35 -124 68 -137 73 -13 5 -66 35 -117 68 -131 84
-345 157 -434 149 -33 -3 -76 -11 -97 -17 -75 -22 -167 -152 -214 -300 -43
-140 -200 -543 -268 -689 -110 -239 -168 -326 -333 -494 -98 -100 -147 -133
-236 -157 -66 -18 -373 -8 -482 15 -156 33 -310 4 -469 -90 -204 -120 -366
-281 -535 -532 -23 -34 -65 -88 -94 -119 -51 -55 -54 -56 -132 -70 -347 -61
-537 -65 -655 -14 -130 56 -267 80 -458 80 -125 0 -159 -4 -274 -31 -136 -32
-215 -64 -357 -143 -46 -25 -86 -45 -88 -42 -2 2 1 44 8 94 10 83 10 96 -10
159 -28 92 -83 180 -165 263 l-68 70 6 57 c3 32 8 158 12 280 6 215 5 224 -16
267 -13 27 -36 54 -58 68 -36 23 -42 23 -387 26 -440 4 -523 -3 -705 -65 -101
-35 -153 -59 -207 -96 l-73 -51 -64 12 c-42 8 -93 28 -146 58 -45 25 -97 50
-115 55 -27 8 -171 -11 -672 -85 -980 -146 -1152 -174 -1182 -192 -36 -21 -63
-66 -78 -129 -9 -36 -12 -236 -13 -737 l0 -686 -139 -324 c-195 -456 -295
-651 -412 -804 -35 -46 -46 -52 -116 -74 -73 -22 -84 -30 -158 -105 -57 -57
-85 -94 -99 -130 -10 -27 -37 -89 -58 -136 -32 -70 -48 -92 -83 -117 -28 -19
-58 -55 -84 -101 l-41 -70 -83 1 c-62 1 -95 -4 -137 -20 -242 -93 -250 -95
-465 -102 -212 -8 -227 -10 -429 -80 -51 -17 -149 -39 -228 -50 -77 -11 -153
-27 -169 -36 -97 -50 -350 -134 -441 -147 l-37 -6 -6 67 c-4 37 -11 82 -17
100 -13 43 -61 89 -106 101 -20 6 -535 58 -1145 116 -790 75 -1117 103 -1140
97 -17 -5 -624 -212 -1347 -461 l-1316 -451 -1139 501 c-627 276 -1448 634
-1825 796 -377 162 -737 317 -800 345 -176 76 -638 268 -700 290 l-56 19 -406
-70 c-273 -47 -635 -121 -1109 -225 -854 -188 -976 -218 -1020 -247 -13 -9
-35 -20 -49 -24 -14 -4 -38 -17 -55 -29 -16 -11 -89 -50 -161 -86 -246 -124
-620 -400 -683 -504 -45 -75 -52 -223 -15 -302 10 -21 53 -73 95 -114 61 -60
80 -85 92 -125 8 -27 26 -77 38 -109 l23 -59 -30 -24 -29 -24 -250 3 c-299 4
-289 7 -415 -122 -104 -106 -129 -124 -219 -154 -83 -28 -237 -122 -280 -171
-17 -19 -33 -30 -36 -25 -3 5 -24 14 -47 21 -47 12 -100 2 -175 -33 -40 -19
-49 -20 -99 -9 -29 7 -64 9 -76 6 -13 -4 -30 -9 -39 -11 -12 -3 -18 4 -23 28
-14 71 -112 178 -190 207 -14 6 -47 27 -73 46 -53 40 -247 167 -388 253 -149
92 -545 306 -808 437 -136 68 -285 151 -331 184 -147 104 -379 226 -601 317
l-129 53 -22 49 c-12 28 -44 72 -70 100 -47 48 -52 50 -144 68 -74 14 -153 18
-365 19 -260 2 -273 3 -360 29 -94 27 -269 60 -390 72 -38 4 -155 31 -260 61
-104 30 -260 68 -345 85 l-155 31 -245 -24 c-268 -25 -512 -29 -670 -11 -52 7
-157 30 -234 52 -108 31 -155 40 -216 40 -43 0 -169 7 -281 16 -112 8 -233 12
-269 9 -69 -7 -260 -48 -306 -65 -27 -11 -227 -29 -316 -30 l-47 0 32 55 c18
30 66 101 107 157 72 100 75 106 101 220 15 64 30 160 34 213 7 92 9 97 39
120 17 13 77 46 132 74 95 48 104 55 142 113 42 66 73 160 113 342 27 125 20
155 -56 231 -70 69 -105 79 -245 71 -94 -6 -366 -59 -515 -100 -74 -20 -274
-136 -309 -179 -24 -30 -29 -45 -29 -91 0 -31 6 -62 12 -70 15 -18 0 -29 -119
-85 -47 -22 -104 -53 -127 -70 -75 -54 -155 -88 -423 -175 -146 -48 -303 -105
-350 -126 -47 -21 -141 -64 -210 -95 -178 -81 -274 -117 -445 -163 -205 -56
-251 -66 -470 -101 -104 -17 -204 -35 -222 -40 -22 -6 -43 -5 -70 4 -50 18
-106 18 -225 0 -82 -12 -105 -20 -159 -55 -73 -47 -88 -68 -133 -198 -19 -53
-45 -120 -58 -149 -26 -60 -206 -281 -320 -395 l-76 -76 -184 -61 -184 -60
-126 8 -125 9 -119 60 c-110 54 -138 63 -364 116 -173 40 -314 65 -479 86
-191 24 -264 38 -399 77 -217 61 -272 94 -415 245 -127 134 -127 134 -229 222
-44 38 -124 122 -179 187 -54 65 -111 126 -126 137 -60 41 -225 94 -443 142
l-225 50 -115 -26 -116 -27 -169 103 c-447 270 -622 389 -706 476 -36 38 -107
130 -159 204 -92 133 -235 323 -354 469 -79 97 -315 298 -458 389 l-115 72
-564 90 c-310 49 -578 94 -594 98 -17 5 -66 12 -110 16 -44 4 -750 86 -1570
182 -1833 214 -1520 180 -3050 334 -709 72 -1366 139 -1460 150 -93 11 -242
27 -330 35 -121 11 -209 27 -360 64 -233 57 -409 77 -570 67 l-104 -7 -15 50
c-19 64 -28 81 -92 167 -29 39 -67 99 -84 133 l-32 61 52 57 c61 67 123 190
139 277 29 155 0 535 -47 622 -10 19 -8 28 43 264 8 36 15 111 15 168 0 117
-17 180 -72 261 -32 49 -126 125 -194 157 -17 8 -56 41 -86 72 -30 31 -67 64
-84 72 -16 8 -61 36 -101 62 -39 26 -101 60 -138 75 -69 28 -71 30 -128 141
-24 46 -109 127 -224 214 -115 86 -140 111 -204 203 -61 89 -106 120 -253 175
-60 22 -123 49 -140 59 -18 11 -65 26 -105 32 -75 13 -73 12 -207 120 -24 19
-84 57 -132 84 -48 26 -123 71 -167 98 -44 28 -138 80 -210 117 -140 72 -184
98 -297 173 -123 82 -255 155 -307 171 -59 17 -86 31 -112 57 -37 37 -157 89
-231 99 -96 14 -114 32 -240 243 -103 174 -119 211 -137 312 -6 33 -31 103
-56 155 -141 296 -218 408 -338 489 -45 30 -127 106 -221 205 -184 194 -280
277 -535 465 -25 18 -84 70 -131 116 -107 104 -184 164 -390 305 -91 62 -178
122 -193 134 -27 19 -38 20 -175 16 -359 -12 -1007 3 -1113 26 -60 12 -106 28
-289 95 -68 26 -116 20 -180 -22 -60 -39 -91 -97 -94 -177 -1 -42 -8 -67 -25
-91 -18 -24 -25 -51 -29 -102 -2 -38 -6 -69 -7 -69 -2 0 -27 9 -57 19 -122 45
-227 73 -289 78 -101 9 -152 -12 -304 -124 -171 -126 -239 -158 -380 -178 -64
-10 -133 -14 -165 -10 -38 4 -105 -2 -215 -20 -118 -20 -178 -25 -229 -21 -64
6 -73 10 -115 49 -163 150 -314 186 -666 157 -60 -5 -164 -13 -230 -19 -264
-21 -572 -89 -682 -151 l-53 -30 -50 25 c-27 14 -80 29 -118 35 -37 5 -84 16
-103 24 -93 39 -187 49 -479 51 -220 2 -305 6 -374 19 -71 14 -102 15 -155 7
-66 -10 -83 -16 -274 -85 -102 -37 -172 -45 -222 -26 -27 10 -175 36 -269 47
-78 9 -193 -22 -304 -84 l-96 -53 -111 10 c-60 6 -156 18 -213 27 -87 14 -121
14 -230 4 -70 -6 -181 -11 -247 -11 -66 0 -136 -5 -155 -11 -19 -5 -96 -13
-170 -16 -134 -5 -135 -5 -201 25 -74 35 -172 62 -219 62 -18 0 -68 -10 -112
-22 -70 -19 -84 -20 -111 -8 -164 68 -214 72 -374 34 -100 -24 -114 -25 -183
-14 -41 7 -115 26 -165 43 -82 27 -104 30 -238 33 -109 2 -160 -1 -195 -12
-26 -8 -86 -19 -133 -24 -59 -5 -102 -16 -136 -34 l-51 -25 -43 28 c-24 16
-60 45 -79 66 -46 49 -106 89 -155 105 -67 21 -147 65 -272 148 -92 62 -131
82 -178 92 -117 24 -288 -11 -388 -80 -50 -35 -66 -40 -112 -40 -78 0 -155
-18 -197 -47 -51 -34 -100 -34 -223 2 -86 24 -116 28 -218 27 -104 0 -125 2
-173 24 -30 13 -73 41 -97 62 -93 84 -182 122 -289 122 -77 0 -226 49 -308
102 -30 19 -104 61 -164 94 -166 90 -335 238 -589 517 -75 82 -128 128 -221
192 -67 47 -143 107 -168 134 -55 58 -109 78 -167 64 -21 -5 -51 -5 -73 0 -27
6 -52 4 -90 -7 -30 -8 -78 -18 -108 -21 l-55 -6 -25 42 c-14 23 -46 57 -72 76
-26 19 -77 69 -112 111 -88 106 -121 135 -273 245 -206 150 -336 233 -389 247
-27 7 -97 14 -156 14 l-107 1 -38 36 c-84 80 -198 140 -301 159 -34 6 -141 12
-239 15 -98 2 -203 7 -234 11 -44 5 -73 2 -125 -14 -93 -27 -242 -36 -319 -18
-56 13 -212 73 -287 112 -18 9 -60 36 -93 59 -75 53 -206 87 -265 69z m134
-369 c95 -68 290 -152 431 -187 120 -29 311 -28 427 3 44 12 88 18 101 15 12
-4 111 -9 221 -12 229 -5 252 -11 342 -93 96 -88 215 -127 349 -115 l70 6 91
-60 c117 -77 279 -196 323 -236 18 -17 67 -70 107 -118 41 -48 88 -95 104
-104 19 -12 32 -31 41 -62 7 -27 30 -64 61 -98 75 -81 120 -88 325 -54 174 30
198 24 343 -77 112 -79 166 -130 339 -322 97 -108 312 -295 421 -368 41 -27
116 -71 165 -98 50 -26 114 -63 143 -82 96 -61 324 -133 419 -133 43 0 58 -5
85 -28 58 -50 151 -109 228 -143 73 -33 78 -33 220 -34 131 -1 157 -5 263 -34
90 -25 129 -31 160 -26 85 14 173 39 199 57 19 13 44 18 92 18 83 0 157 25
235 80 48 34 70 43 118 47 l58 5 115 -77 c110 -74 240 -145 267 -145 7 0 37
-22 67 -49 60 -55 145 -114 225 -157 46 -24 66 -29 125 -29 64 0 77 3 120 33
41 26 59 32 105 32 31 1 74 8 96 17 63 25 267 26 324 1 24 -10 111 -31 193
-45 l150 -27 109 28 c124 32 155 31 248 -9 89 -37 149 -41 248 -16 45 12 90
21 100 21 10 0 54 -19 98 -42 80 -41 80 -41 210 -45 77 -3 161 0 205 7 41 7
125 14 185 16 61 2 180 9 266 15 133 10 170 9 255 -5 54 -8 149 -20 209 -26
151 -14 199 -4 333 71 134 75 146 75 379 17 117 -29 214 -22 363 27 63 20 131
45 150 55 58 29 109 33 206 14 71 -15 133 -18 307 -16 265 2 389 -8 446 -37
23 -12 72 -25 109 -30 38 -5 86 -18 108 -29 21 -11 77 -28 124 -37 100 -21
152 -12 197 34 16 15 39 33 52 40 66 36 320 86 511 102 69 5 175 14 235 19
174 14 306 12 356 -5 24 -9 66 -37 94 -64 96 -92 132 -110 260 -128 113 -16
119 -16 263 7 85 14 200 24 272 26 164 2 365 41 459 89 36 18 126 76 199 129
73 53 142 96 153 96 22 0 66 -13 226 -66 130 -44 235 -54 318 -29 162 46 207
120 169 279 -17 73 -17 76 2 111 10 19 19 35 21 35 1 0 13 -4 27 -10 14 -5 86
-23 158 -39 120 -26 159 -30 398 -38 146 -4 398 -8 560 -8 l295 0 115 -80
c162 -111 242 -175 340 -270 47 -46 106 -98 131 -116 257 -190 359 -279 539
-470 80 -85 151 -158 160 -163 8 -5 47 -33 87 -63 59 -44 81 -68 121 -137 73
-124 147 -293 167 -380 22 -103 33 -126 133 -296 120 -203 171 -277 234 -336
68 -64 90 -76 207 -104 89 -22 159 -57 191 -95 7 -8 45 -25 84 -37 39 -11 98
-35 131 -53 141 -76 183 -101 230 -136 65 -49 132 -87 290 -169 125 -66 379
-213 420 -245 11 -9 37 -28 57 -43 20 -15 60 -46 90 -69 43 -34 73 -47 152
-68 55 -14 104 -29 110 -34 6 -4 58 -25 116 -45 114 -41 144 -65 197 -155 30
-52 55 -80 98 -107 87 -55 235 -173 235 -189 0 -4 13 -25 29 -48 15 -23 40
-63 55 -89 15 -27 31 -48 36 -48 6 0 27 -15 47 -34 21 -18 74 -48 118 -65 91
-36 177 -92 250 -162 57 -54 162 -129 181 -129 7 0 22 -12 34 -27 21 -26 22
-35 17 -133 -7 -125 -28 -210 -62 -246 -65 -70 -59 -209 12 -280 34 -34 36
-41 45 -128 5 -50 8 -143 6 -206 -4 -132 -15 -160 -96 -244 -69 -72 -80 -92
-92 -173 -19 -121 16 -220 146 -410 35 -51 64 -100 64 -108 0 -7 26 -64 57
-125 83 -161 67 -155 378 -156 280 0 336 -7 600 -74 119 -30 202 -44 325 -55
91 -8 242 -24 335 -35 94 -11 751 -78 1460 -150 710 -71 1349 -136 1420 -144
100 -11 3003 -349 3165 -369 19 -2 296 -46 614 -96 l579 -93 81 -53 c112 -72
302 -239 373 -327 118 -145 261 -336 353 -468 128 -185 203 -259 379 -378 286
-194 780 -496 826 -506 20 -4 77 4 160 24 l129 31 146 -31 c80 -17 189 -47
242 -66 l97 -36 83 -101 c46 -55 125 -138 177 -184 51 -47 153 -146 226 -221
113 -116 150 -147 243 -203 102 -62 121 -69 328 -127 195 -54 246 -64 465 -91
167 -21 307 -45 430 -74 163 -39 199 -51 314 -109 72 -36 141 -68 155 -71 14
-3 99 -11 190 -17 l165 -11 226 74 c214 70 232 78 312 136 92 66 125 101 323
336 133 159 180 238 225 383 14 44 28 72 37 72 7 0 27 -13 43 -30 30 -30 82
-50 130 -50 49 0 126 30 161 63 33 31 43 34 189 56 233 35 613 129 789 196 47
18 141 58 210 90 69 31 163 74 210 95 47 21 204 78 350 126 262 85 355 124
417 171 18 14 92 54 164 89 128 63 195 105 232 148 27 32 67 126 74 173 5 34
12 47 37 62 37 22 276 81 360 89 54 5 58 4 53 -14 -3 -10 -11 -38 -18 -61 -11
-38 -17 -44 -73 -69 -33 -15 -82 -42 -107 -60 -26 -19 -52 -34 -58 -34 -6 0
-31 -19 -54 -43 -58 -58 -84 -139 -102 -325 -8 -81 -19 -161 -24 -179 -5 -17
-46 -80 -90 -139 -45 -58 -88 -121 -95 -138 -7 -18 -25 -51 -40 -74 -14 -23
-45 -88 -68 -144 -35 -87 -42 -114 -42 -173 0 -79 24 -129 79 -162 38 -23 169
-23 235 1 28 10 124 22 252 31 172 13 225 21 309 46 163 48 227 53 471 35 117
-9 242 -16 277 -16 41 0 96 -9 147 -25 131 -40 258 -62 424 -75 166 -13 211
-11 563 22 222 20 231 20 330 3 56 -9 172 -37 257 -62 228 -65 336 -90 415
-98 121 -11 246 -35 374 -72 l125 -36 153 8 c84 4 202 4 262 0 l110 -8 8 -38
c9 -43 64 -119 104 -143 14 -8 46 -18 70 -22 128 -20 552 -228 746 -366 48
-34 193 -115 332 -184 503 -251 1005 -542 1153 -668 22 -19 60 -43 84 -53 45
-19 48 -23 60 -108 6 -42 15 -57 58 -100 41 -41 63 -55 112 -68 62 -18 121
-20 164 -8 16 5 33 2 50 -8 27 -18 122 -20 182 -3 28 8 47 7 80 -5 62 -21 122
-11 215 37 60 32 90 54 118 91 47 62 125 114 216 145 39 13 91 38 116 54 24
17 47 30 52 30 16 0 77 53 118 102 23 28 48 55 55 58 7 4 114 4 238 0 259 -9
285 -4 360 59 27 23 54 41 61 41 6 0 27 9 45 21 45 27 85 111 91 191 5 68 -17
210 -40 256 -8 15 -17 47 -21 70 -4 24 -15 61 -26 82 -19 36 -140 177 -167
193 -17 10 100 122 191 182 34 22 75 50 91 61 77 54 140 91 260 151 72 35 157
79 190 96 33 18 107 47 165 65 188 58 1428 325 1836 396 209 36 392 66 405 67
22 1 363 -136 669 -269 63 -28 423 -183 800 -345 377 -162 1214 -527 1860
-812 1042 -459 1181 -518 1225 -518 40 0 326 95 1389 461 l1339 460 1011 -96
c556 -52 1012 -96 1013 -97 1 0 7 -47 12 -104 8 -78 16 -110 33 -134 54 -77
88 -84 276 -57 176 25 320 64 502 135 74 29 159 56 188 59 88 11 262 54 357
87 85 30 101 33 285 40 172 6 208 11 307 38 62 16 143 42 180 58 62 24 78 27
174 24 177 -4 211 14 286 155 32 60 51 84 81 101 29 16 49 42 90 116 29 52 69
133 88 179 19 45 45 93 57 104 12 12 58 34 102 48 95 32 102 37 186 146 157
203 260 397 485 920 l149 345 3 675 3 675 152 23 c83 12 424 63 756 112 332
50 613 91 625 92 11 0 53 -17 93 -40 61 -35 91 -45 212 -67 104 -19 149 -24
174 -17 18 5 71 36 117 69 64 45 112 70 195 99 l110 38 314 4 c301 4 313 3
307 -14 -3 -11 -6 -116 -8 -234 l-3 -215 62 -85 c34 -47 80 -103 103 -125 62
-60 82 -104 74 -168 -10 -84 -80 -218 -197 -377 -59 -81 -108 -156 -109 -170
-6 -82 27 -152 95 -204 76 -57 139 -43 255 53 232 195 626 420 796 455 99 20
325 21 417 2 37 -8 84 -23 105 -34 22 -11 74 -30 118 -42 104 -29 320 -32 481
-6 346 54 359 57 409 84 67 35 199 168 261 262 133 202 289 365 421 441 125
73 173 81 319 54 110 -21 421 -31 512 -16 75 11 98 20 218 76 82 39 135 83
265 221 152 160 275 350 381 584 56 124 213 531 248 645 34 107 42 125 57 125
40 0 190 -64 267 -114 49 -31 100 -61 114 -67 14 -5 71 -36 127 -68 154 -88
161 -91 251 -102 71 -8 92 -6 143 10 63 19 166 83 248 154 106 91 337 351 384
432 33 56 80 189 121 345 46 175 166 483 210 539 11 13 19 27 19 31 0 4 23 42
51 84 28 43 62 102 75 132 13 30 26 54 30 54 3 0 166 -79 362 -176 l357 -177
225 -8 c124 -4 324 -12 445 -18 121 -6 438 -18 705 -27 l485 -15 2175 45
c1196 25 2483 57 2860 71 377 14 1243 43 1925 65 682 21 1299 42 1370 45 106
5 457 -15 1880 -109 l1750 -115 1325 -41 c1116 -34 1350 -39 1490 -30 91 6
188 15 216 22 49 10 53 9 95 -19 55 -38 317 -109 451 -124 51 -5 145 -19 208
-30 l115 -20 70 22 c39 12 130 48 203 81 l134 60 111 -16 c260 -35 344 -30
421 29 l37 28 107 -16 c113 -17 286 -36 313 -35 8 1 48 -20 88 -46 40 -26 134
-78 209 -116 76 -38 148 -76 162 -84 46 -28 218 -96 270 -107 56 -12 63 -20
135 -157 22 -42 68 -105 107 -147 74 -79 222 -194 278 -215 19 -7 69 -30 110
-51 121 -60 212 -61 274 -4 19 17 38 25 64 25 32 0 40 -5 59 -38 23 -41 69
-84 148 -137 353 -238 380 -255 410 -255 39 0 328 -161 427 -238 124 -96 159
-132 230 -237 l54 -80 -22 -50 c-12 -28 -30 -88 -40 -135 -17 -85 -17 -87 5
-158 19 -62 31 -82 89 -144 111 -119 257 -242 337 -285 163 -89 907 -348 1171
-408 l120 -27 -18 -52 c-11 -31 -17 -81 -18 -130 0 -44 -9 -129 -19 -190 -11
-61 -24 -171 -29 -245 -9 -132 -9 -136 20 -245 17 -61 36 -122 43 -135 10 -20
8 -40 -11 -120 -12 -53 -27 -148 -34 -211 -7 -63 -25 -164 -41 -225 -21 -79
-29 -133 -29 -194 0 -65 -6 -102 -26 -160 -36 -105 -31 -172 24 -284 54 -110
68 -173 92 -432 24 -248 22 -276 -32 -530 -16 -77 -33 -185 -38 -240 -4 -55
-19 -185 -34 -288 -24 -176 -25 -190 -10 -230 31 -82 42 -123 69 -252 15 -71
35 -150 46 -174 10 -24 19 -59 19 -78 0 -58 40 -258 66 -335 14 -40 45 -141
68 -225 24 -84 52 -164 62 -179 43 -60 52 -90 59 -189 6 -92 19 -181 61 -405
8 -47 27 -110 41 -140 24 -53 25 -60 18 -185 -3 -71 -15 -183 -25 -247 -11
-64 -22 -161 -26 -215 -5 -86 -3 -110 20 -200 46 -181 81 -237 197 -318 46
-32 182 -135 302 -229 287 -224 329 -255 347 -256 40 -1 41 -9 30 -202 -8
-156 -16 -212 -49 -354 -34 -146 -41 -196 -49 -364 l-11 -195 -81 -270 -81
-270 -83 -125 c-114 -172 -113 -170 -141 -254 -17 -51 -24 -88 -20 -113 3 -21
14 -126 26 -233 20 -192 60 -385 153 -754 33 -133 36 -141 116 -260 45 -70
136 -185 206 -262 106 -118 142 -167 239 -329 104 -173 121 -208 189 -395 41
-113 93 -277 116 -365 46 -178 75 -238 275 -570 131 -217 128 -211 315 -645
l158 -367 -23 -99 c-13 -54 -38 -137 -55 -184 -22 -58 -38 -130 -51 -228 l-19
-144 44 -136 c75 -230 549 -2182 586 -2412 12 -74 55 -328 95 -565 l74 -430
105 -345 104 -345 51 -332 c28 -183 58 -408 66 -500 8 -93 17 -184 21 -203 3
-19 43 -122 90 -228 l84 -193 0 -152 c-1 -245 -15 -316 -95 -488 l-68 -147
-81 -33 c-114 -46 -358 -206 -389 -256 -30 -46 -197 -335 -220 -380 -9 -17
-42 -168 -72 -335 -31 -167 -69 -368 -85 -448 -49 -247 -51 -270 -35 -430 25
-268 55 -353 180 -525 72 -98 85 -110 223 -209 105 -74 152 -114 163 -138 13
-27 16 -75 17 -254 l1 -222 -38 -53 c-21 -30 -90 -157 -153 -284 -112 -223
-117 -234 -147 -375 -17 -81 -31 -176 -31 -213 0 -37 -7 -133 -16 -214 -15
-143 -18 -155 -99 -378 -60 -167 -90 -267 -109 -365 -39 -201 -68 -291 -146
-461 -39 -85 -77 -182 -85 -216 -28 -118 -115 -344 -184 -481 -50 -97 -136
-233 -297 -467 -223 -324 -435 -648 -473 -722 -41 -82 -42 -100 -30 -582 l11
-460 -284 -388 c-157 -213 -289 -397 -295 -408 -6 -11 -34 -100 -62 -198 l-51
-178 0 -187 c0 -247 -22 -470 -65 -657 -19 -82 -39 -197 -44 -255 -6 -58 -22
-140 -36 -182 -22 -69 -23 -83 -14 -126 18 -78 -10 -197 -70 -297 -46 -76 -60
-89 -272 -260 -221 -178 -224 -181 -265 -259 -28 -52 -67 -104 -116 -155 -155
-158 -269 -326 -328 -483 -11 -31 -33 -74 -47 -95 -23 -35 -59 -112 -101 -218
-8 -22 -16 -76 -17 -120 -2 -53 -22 -176 -63 -367 l-61 -287 26 -118 c20 -89
27 -155 30 -270 4 -144 3 -157 -22 -228 -23 -67 -24 -80 -14 -118 29 -107 72
-158 299 -353 202 -173 318 -300 400 -437 55 -91 82 -124 170 -206 105 -97
192 -161 325 -238 57 -34 88 -44 170 -57 108 -17 745 -42 975 -39 l135 2 78
-99 c84 -107 201 -201 267 -215 30 -6 69 -25 141 -70 10 -5 32 -22 51 -37 64
-51 129 -60 339 -47 208 12 207 12 319 -65 39 -27 53 -31 110 -31 55 1 76 6
135 37 39 20 103 63 142 95 171 138 249 200 289 235 47 39 122 71 224 95 231
52 240 55 312 101 40 25 95 56 122 69 58 29 145 46 163 31 7 -5 59 -14 117
-20 101 -10 108 -10 193 17 48 15 104 35 123 45 19 9 61 21 94 25 77 9 148 31
177 54 32 24 161 35 257 21 71 -10 148 -42 237 -98 32 -21 53 -26 105 -26 77
-1 126 24 155 78 14 26 23 33 34 27 30 -16 86 -21 119 -12 30 9 36 7 76 -33
70 -70 212 -111 301 -87 61 16 150 91 176 149 l23 49 40 -9 c39 -9 131 -5 188
8 21 5 27 2 33 -18 12 -40 54 -86 103 -115 43 -26 55 -28 157 -29 123 -1 143
-8 262 -91 34 -24 67 -43 73 -43 6 0 26 -11 43 -24 18 -13 72 -33 122 -46 145
-36 222 -13 269 81 14 28 43 70 64 93 22 22 65 67 95 99 31 32 65 78 77 102
12 24 36 53 54 64 42 27 80 98 100 191 9 41 28 126 43 188 31 134 25 170 -38
233 -21 21 -39 42 -39 45 0 11 85 -8 118 -27 18 -10 40 -19 48 -19 7 0 58 -19
111 -41 54 -23 130 -49 170 -57 63 -14 72 -19 76 -42 7 -34 65 -119 98 -143
43 -31 140 -34 251 -7 121 30 154 47 237 125 64 61 76 67 175 99 120 38 174
75 225 154 26 42 40 52 100 75 82 32 95 33 211 7 95 -21 120 -20 182 11 38 19
168 141 168 158 0 5 13 11 28 14 15 3 40 17 56 32 28 26 29 26 97 14 91 -16
167 0 248 53 77 50 96 83 122 207 20 99 19 144 -5 202 -6 13 4 20 44 33 35 11
56 14 68 7 32 -17 116 -23 159 -12 47 13 189 116 233 169 l28 35 66 -13 c35
-6 69 -9 75 -6 5 4 39 -16 76 -44 36 -28 79 -57 94 -65 47 -24 124 -29 183
-12 29 9 71 19 93 22 55 8 124 57 162 114 29 45 35 48 83 54 58 7 130 45 171
89 l26 30 49 -18 c77 -27 161 -21 296 20 206 64 269 101 308 182 20 40 22 55
15 127 -3 45 -31 201 -61 347 -30 146 -68 339 -85 430 -17 91 -35 182 -40 203
-10 36 -56 90 -127 144 -49 39 -165 62 -307 63 -130 0 -509 18 -564 26 -31 5
-33 7 -28 37 2 18 14 68 25 112 12 44 28 152 37 240 16 168 24 224 49 340 8
39 17 99 21 135 3 36 12 108 20 160 8 52 16 136 20 185 13 191 51 610 66 720
8 60 8 100 -2 162 -20 133 -8 271 34 394 20 57 52 176 72 264 30 128 36 172
31 218 -9 85 -1 105 45 117 44 12 117 80 156 147 38 65 38 151 0 215 -27 47
-116 135 -166 164 -26 15 -31 29 -61 163 -18 80 -41 169 -52 196 -11 28 -35
94 -54 148 -18 55 -49 127 -67 160 -19 34 -42 86 -52 116 -21 63 -87 136 -154
171 -59 29 -202 60 -287 60 l-70 0 -103 105 c-76 78 -112 107 -140 115 -20 5
-53 24 -72 41 -18 16 -54 43 -79 59 -81 52 -91 61 -121 109 -16 27 -43 55 -61
64 -46 22 -183 72 -248 91 -30 9 -106 36 -169 60 l-113 43 -33 61 c-17 33 -48
79 -68 103 -21 23 -37 46 -37 49 0 4 -17 19 -39 33 -21 14 -48 41 -60 60 -47
77 -212 127 -378 114 -63 -5 -79 -10 -134 -47 -67 -46 -59 -46 -164 -6 -22 8
-61 15 -87 16 -29 0 -76 13 -131 36 -77 32 -94 44 -175 128 -119 123 -152 170
-152 216 0 90 -22 153 -88 250 -35 52 -71 100 -81 107 -25 20 -361 218 -411
243 -116 58 -236 164 -277 245 -14 28 -42 75 -63 105 -20 30 -43 72 -49 92
-16 47 -138 171 -202 203 -57 29 -157 48 -206 39 -61 -11 -124 -44 -172 -89
-41 -38 -50 -42 -84 -37 -34 4 -38 7 -33 26 3 11 8 62 12 111 9 126 -23 250
-104 406 -33 65 -71 157 -86 210 -14 52 -48 138 -76 191 -28 54 -63 131 -79
170 -31 78 -139 314 -189 413 -77 155 -126 287 -187 504 -36 129 -65 250 -65
268 0 18 -16 113 -35 211 -34 170 -125 468 -209 690 -31 81 -54 212 -37 212 4
0 489 -70 1077 -155 l1069 -155 880 80 c728 66 1063 91 1935 145 580 35 1188
71 1350 80 162 8 309 18 325 21 50 10 93 43 114 88 20 41 21 56 20 527 -1 573
-15 1299 -27 1454 -11 126 -13 137 -55 265 l-32 95 1 225 c1 242 11 344 70
732 18 125 34 236 34 247 0 11 5 32 10 46 l10 26 29 -20 c16 -12 34 -21 39
-21 5 0 34 -17 63 -37 51 -36 58 -38 130 -38 71 0 79 2 132 38 31 20 60 37 64
37 5 0 18 -18 31 -41 13 -22 41 -52 62 -67 21 -15 41 -38 45 -51 20 -78 135
-162 300 -219 123 -43 145 -58 145 -99 0 -24 55 -86 120 -134 19 -15 60 -32
90 -39 30 -7 130 -39 223 -71 92 -32 198 -66 235 -74 79 -18 354 -116 421
-149 25 -13 57 -27 71 -31 29 -8 136 -52 164 -67 10 -5 37 -16 60 -23 63 -20
212 -78 317 -123 52 -22 148 -61 214 -87 66 -26 161 -65 210 -87 50 -22 126
-48 170 -58 44 -10 123 -30 175 -44 52 -14 147 -37 210 -51 137 -31 419 -103
433 -112 5 -3 46 -14 90 -24 45 -10 132 -32 192 -49 158 -43 342 -85 480 -109
66 -12 181 -33 255 -46 158 -28 311 -52 395 -61 41 -4 81 -18 130 -44 162 -87
191 -104 220 -125 17 -13 66 -35 110 -50 44 -15 100 -37 125 -49 25 -13 77
-33 115 -45 88 -29 284 -121 328 -155 19 -14 38 -26 44 -26 6 0 28 -12 49 -27
70 -48 168 -90 237 -102 38 -7 92 -20 120 -30 29 -10 77 -26 107 -36 30 -9
122 -59 205 -109 181 -112 383 -218 467 -247 34 -11 148 -42 252 -69 105 -26
211 -57 235 -67 l44 -19 -71 -42 c-130 -77 -176 -160 -146 -263 19 -64 124
-279 159 -325 39 -50 89 -77 149 -78 32 0 62 6 77 15 13 9 51 24 84 33 33 10
94 36 135 58 41 22 92 49 113 59 l38 20 71 -63 c39 -35 103 -100 142 -145 71
-80 72 -83 85 -162 12 -71 18 -85 57 -131 24 -28 44 -56 44 -61 0 -26 86 -186
120 -223 22 -24 40 -48 40 -54 0 -22 92 -132 136 -163 42 -29 57 -33 114 -33
80 -1 169 38 197 86 10 16 54 56 98 87 78 56 89 61 405 161 179 56 409 133
513 171 103 38 189 69 192 69 5 0 326 -375 390 -455 164 -207 362 -430 415
-467 44 -30 75 -64 112 -122 30 -45 74 -96 103 -119 27 -21 63 -60 79 -86 218
-349 399 -624 432 -657 62 -62 118 -67 214 -19 25 13 77 28 117 35 73 12 148
51 176 90 7 10 35 24 62 31 68 16 84 27 198 141 102 103 156 137 242 152 22 4
55 16 73 27 18 10 46 19 62 19 56 0 136 22 181 51 25 16 54 29 63 29 42 0 144
33 181 59 22 16 67 42 100 59 74 37 118 80 150 147 30 64 49 81 105 89 25 4
68 18 97 31 28 14 58 25 65 25 27 0 135 84 168 131 19 26 38 48 42 49 3 0 21
24 39 53 45 73 98 123 144 136 50 14 72 32 123 101 54 73 159 165 215 189 25
11 48 17 51 14 3 -3 57 -9 121 -13 73 -5 124 -14 139 -23 20 -14 65 -28 181
-58 56 -15 115 -5 181 31 31 16 62 30 69 30 7 0 36 16 64 35 59 41 102 45 202
19 35 -9 82 -14 106 -11 36 4 45 1 58 -19 17 -27 97 -84 117 -84 8 0 41 -20
74 -43 50 -37 77 -48 171 -70 61 -15 119 -27 128 -27 8 0 26 -7 39 -15 12 -8
46 -17 74 -19 32 -3 66 -15 94 -32 37 -24 54 -28 118 -28 41 0 105 4 142 8 56
7 71 6 93 -8 40 -26 171 -56 247 -56 48 0 79 -6 104 -19 60 -33 129 -36 204
-11 50 17 79 21 125 17 45 -4 75 0 119 14 54 18 67 19 123 9 35 -7 83 -9 106
-6 40 7 137 60 137 76 0 13 85 30 147 30 32 0 90 9 128 21 39 11 108 31 155
43 47 13 98 29 113 35 36 14 92 14 119 0 12 -6 56 -13 97 -15 42 -2 86 -6 98
-9 28 -7 245 47 316 79 28 12 67 38 85 56 38 40 109 184 118 241 6 34 13 42
56 66 33 18 58 41 75 70 14 24 28 43 32 43 5 0 28 13 52 30 29 20 57 30 82 30
102 0 230 79 287 177 34 59 67 88 143 127 21 10 51 32 65 49 75 83 221 218
279 258 34 23 51 47 88 123 25 51 54 101 64 110 25 22 70 34 174 46 141 16
250 -7 391 -84 106 -58 114 -60 183 -61 69 0 74 2 135 44 35 25 82 66 105 91
48 53 120 95 181 105 149 24 281 258 228 405 -8 23 -9 46 -4 65 10 37 4 83
-24 158 -12 34 -17 62 -12 66 5 5 50 30 99 56 115 61 122 66 151 108 18 27 38
40 87 56 99 33 313 185 359 254 11 18 37 43 58 55 20 13 69 59 109 103 39 43
96 94 125 114 48 31 56 34 87 24 66 -20 217 -19 334 3 132 24 190 47 267 108
106 84 206 150 226 150 42 0 251 59 298 84 27 14 56 26 64 26 9 0 26 7 38 16
12 8 42 17 65 19 24 2 61 11 83 20 87 37 193 67 271 76 46 5 122 13 170 19 90
10 134 30 185 84 13 13 42 29 65 35 23 7 45 16 48 22 4 6 21 1 43 -13 50 -30
202 -33 245 -5 42 27 122 14 167 -28 55 -50 91 -70 148 -83 69 -15 127 -15
174 2 38 13 38 13 58 -20 12 -18 46 -55 76 -83 42 -39 64 -51 99 -56 53 -9
135 9 170 37 13 10 62 36 107 58 46 21 93 47 105 59 33 31 100 29 300 -10 44
-9 65 -7 130 11 43 12 100 36 128 54 27 18 65 38 82 45 18 7 50 31 70 52 21
21 43 39 50 39 6 0 31 15 55 33 24 18 63 47 88 64 109 75 217 169 274 240 33
42 89 104 123 138 63 62 93 113 93 160 0 33 76 185 93 185 7 0 45 16 85 35 40
19 90 39 112 45 22 6 158 13 302 15 278 4 468 17 532 35 25 8 58 32 95 69 37
37 87 73 140 101 66 35 86 51 107 86 14 24 29 44 33 44 4 0 32 -5 62 -11 49
-10 66 -8 153 15 54 14 118 35 142 45 24 11 91 29 149 41 59 12 130 32 158 46
36 17 70 24 112 24 79 0 162 21 217 53 51 30 121 103 144 149 9 19 38 47 67
66 92 58 167 123 190 163 18 33 31 41 77 55 77 22 102 37 157 92 45 44 56 50
163 79 63 17 158 37 210 43 87 11 103 10 182 -9 73 -18 94 -20 140 -10 51 10
122 50 201 111 38 30 128 78 147 78 6 0 27 -11 48 -24 21 -13 72 -31 113 -40
89 -20 97 -18 284 69 112 52 126 62 200 141 64 66 88 86 116 90 l35 6 199
-244 c110 -133 1099 -1322 2198 -2641 1636 -1964 2036 -2450 2208 -2682 168
-228 249 -326 407 -496 108 -116 245 -274 305 -350 77 -98 176 -204 343 -368
322 -314 307 -304 478 -335 76 -14 154 -30 175 -36 20 -6 174 -79 343 -163
l308 -152 1215 -1615 c1060 -1408 1245 -1649 1448 -1884 216 -250 248 -283
465 -471 127 -112 323 -270 435 -351 111 -82 434 -331 717 -553 368 -290 657
-507 1015 -761 464 -331 933 -679 1015 -755 19 -18 58 -48 86 -66 28 -19 282
-237 565 -486 593 -521 1015 -859 1419 -1137 146 -100 280 -191 299 -202 18
-10 64 -60 101 -109 49 -65 155 -172 377 -380 l310 -290 52 -150 c29 -82 109
-368 177 -635 276 -1074 325 -1251 453 -1650 122 -378 144 -438 340 -898 l209
-493 255 -462 c141 -254 275 -497 299 -539 30 -55 121 -168 308 -383 l265
-305 120 -208 c67 -114 191 -324 276 -467 86 -143 243 -422 350 -620 168 -313
220 -399 394 -655 110 -162 294 -433 409 -602 197 -292 223 -324 505 -650
l298 -343 339 -299 c244 -215 469 -428 799 -756 253 -251 497 -491 543 -533
46 -42 112 -112 146 -154 35 -43 132 -160 217 -260 l154 -181 99 -236 c54
-130 113 -280 132 -334 36 -100 184 -702 514 -2092 l189 -795 174 -430 c96
-236 215 -520 263 -630 l88 -200 149 -177 c147 -176 149 -178 385 -362 197
-153 306 -227 642 -438 223 -140 454 -283 513 -317 72 -43 174 -119 310 -232
l202 -168 815 -459 815 -459 285 -113 c157 -62 809 -322 1450 -577 l1165 -465
615 -168 c338 -92 627 -170 641 -173 14 -4 164 -16 335 -27 170 -11 620 -43
1000 -70 l690 -50 1396 165 c767 91 1431 172 1474 180 82 15 767 120 1173 180
130 19 322 42 426 50 105 9 197 18 205 20 8 3 285 27 615 55 330 27 701 59
825 70 136 12 556 32 1063 50 l837 30 2186 -470 c2149 -463 2996 -651 3444
-767 52 -13 280 -62 505 -109 226 -47 460 -98 520 -114 61 -15 164 -38 230
-50 66 -13 167 -34 225 -47 58 -13 146 -33 195 -44 50 -11 133 -33 185 -49 52
-16 210 -61 350 -100 243 -68 371 -105 650 -190 69 -21 501 -133 960 -249 459
-115 1202 -304 1651 -420 449 -115 842 -214 875 -220 56 -10 154 -19 434 -41
69 -6 251 -22 405 -35 154 -14 532 -46 840 -71 l560 -46 1745 -5 1745 -5 1175
62 1175 61 1215 -11 c1029 -9 1295 -14 1735 -35 684 -32 1171 -53 1430 -61
l210 -6 700 -363 c385 -200 1058 -549 1495 -775 l795 -412 755 -208 c2281
-630 3612 -992 3731 -1014 74 -14 402 -73 729 -131 l595 -107 515 -155 515
-155 746 -329 c411 -181 749 -329 752 -329 3 0 290 -124 639 -276 348 -152
650 -280 671 -285 21 -5 269 -54 550 -109 l512 -99 233 -83 c220 -78 232 -84
232 -108 0 -14 -11 -158 -25 -320 -71 -837 -128 -1585 -155 -2015 -18 -291
-41 -573 -59 -715 -25 -201 -30 -283 -35 -570 -3 -184 -12 -398 -20 -475 -24
-240 -7 -426 69 -750 60 -255 284 -1049 495 -1750 120 -399 113 -348 117 -820
3 -306 0 -467 -11 -635 -9 -124 -18 -265 -21 -315 -3 -49 -15 -146 -26 -215
-29 -182 -29 -528 0 -689 17 -93 21 -155 21 -330 0 -288 37 -694 86 -946 41
-208 85 -336 150 -435 86 -132 240 -278 392 -374 144 -91 515 -278 607 -307
50 -15 156 -109 224 -198 54 -72 95 -162 265 -586 111 -276 253 -739 355
-1155 39 -157 89 -346 111 -420 22 -74 68 -241 101 -370 33 -129 96 -354 139
-500 112 -376 136 -474 160 -655 12 -88 39 -253 61 -366 64 -335 139 -867 146
-1024 3 -77 18 -221 33 -320 16 -99 45 -306 65 -460 19 -154 49 -343 65 -420
55 -268 92 -569 97 -810 8 -335 -26 -744 -78 -943 -16 -63 -43 -202 -60 -310
-16 -109 -55 -336 -85 -507 -48 -269 -194 -1137 -194 -1156 0 -13 -149 -18
-235 -8 -104 11 -227 41 -455 110 -138 42 -182 51 -270 56 -60 3 -122 0 -145
-6 -22 -5 -65 -16 -95 -24 -73 -19 -139 -56 -328 -183 -86 -58 -182 -119 -212
-134 -66 -33 -263 -181 -340 -254 -128 -122 -374 -279 -495 -315 -22 -7 -49
-16 -60 -21 -72 -30 -261 -60 -380 -60 -134 0 -570 40 -661 60 -27 6 -94 15
-149 20 -78 7 -125 18 -209 50 -175 65 -274 107 -386 164 -58 29 -131 61 -163
70 -97 28 -290 65 -373 71 -402 30 -587 72 -879 200 -133 58 -244 89 -395 110
-254 34 -324 46 -335 55 -6 5 -46 13 -90 19 -111 14 -132 23 -279 121 -156
104 -219 135 -306 150 -102 17 -218 40 -309 62 -68 16 -101 19 -170 13 -141
-11 -368 -43 -388 -54 -10 -6 -45 -17 -78 -26 -84 -21 -148 -41 -235 -71 l-75
-26 -80 17 c-44 10 -143 32 -220 51 -266 64 -376 77 -591 70 -129 -5 -200 -3
-220 4 -15 6 -77 60 -136 121 -98 99 -189 169 -221 169 -7 0 -25 7 -42 16 -46
24 -102 41 -190 59 -108 21 -154 35 -195 61 -19 12 -101 50 -182 84 -81 34
-162 72 -180 84 -50 33 -177 96 -193 96 -9 0 -23 4 -33 9 -9 6 -59 20 -111 32
-72 17 -130 40 -240 98 -143 74 -147 77 -189 141 -49 73 -142 255 -142 278 0
7 -9 27 -20 42 -17 24 -163 320 -192 390 -19 44 -61 124 -79 150 -9 14 -28 50
-42 80 -30 69 -77 125 -158 191 -100 80 -124 89 -278 104 -83 9 -159 23 -196
36 -42 15 -86 22 -145 23 -47 1 -92 5 -100 8 -74 31 -124 18 -207 -51 -85 -71
-199 -150 -362 -249 -284 -172 -422 -273 -476 -352 -33 -48 -56 -50 -181 -20
-45 10 -133 24 -195 30 -82 9 -149 23 -239 52 -92 30 -148 42 -212 46 l-88 5
0 42 c0 78 -11 105 -62 155 -71 70 -116 88 -259 106 -68 8 -286 40 -484 70
l-360 56 -420 9 c-231 4 -582 13 -780 19 l-360 10 -2050 521 c-1127 287 -2053
523 -2056 524 -9 6 -676 179 -1909 495 -646 166 -1461 375 -1810 465 -349 91
-687 176 -750 190 -63 14 -155 36 -205 50 -66 18 -292 48 -860 115 -423 50
-837 99 -920 111 -82 11 -614 53 -1181 93 l-1032 73 -138 80 c-77 45 -210 120
-296 168 -117 64 -228 139 -431 290 -151 111 -285 210 -298 218 -22 14 -1180
416 -1239 430 -57 14 -813 87 -838 81 -15 -3 -112 -32 -217 -64 l-190 -58
-175 32 c-118 22 -204 44 -265 69 -49 19 -101 38 -115 41 -14 4 -160 15 -325
26 -368 25 -476 43 -765 130 -139 42 -343 83 -590 120 -80 12 -194 35 -255 51
-203 54 -662 158 -857 194 -199 36 -352 45 -428 25 -117 -30 -168 -66 -210
-150 -17 -33 -53 -91 -80 -128 -63 -86 -101 -155 -313 -567 -94 -185 -185
-374 -204 -430 -19 -55 -51 -125 -70 -155 -137 -216 -172 -272 -175 -281 -2
-6 -28 -16 -58 -23 -48 -11 -67 -11 -145 6 -51 10 -105 16 -125 12 -50 -8 -99
-49 -122 -101 -11 -24 -31 -61 -44 -80 -13 -20 -31 -62 -40 -92 -36 -130 -55
-175 -91 -216 -21 -23 -63 -73 -93 -109 -70 -87 -124 -116 -240 -128 -68 -6
-95 -14 -133 -38 -45 -28 -51 -29 -93 -19 -26 7 -77 9 -120 6 -62 -5 -84 -11
-135 -42 -116 -71 -220 -236 -203 -323 5 -26 -1 -33 -68 -83 -100 -74 -92 -70
-170 -80 -75 -9 -70 -7 -216 -124 -52 -42 -97 -46 -151 -13 -27 18 -50 23 -96
22 -53 0 -68 -5 -120 -39 -33 -22 -73 -45 -89 -53 -16 -7 -73 -56 -125 -110
l-96 -97 -35 12 c-71 24 -200 5 -262 -38 -41 -30 -127 -161 -159 -245 -33 -85
-95 -212 -116 -236 -11 -13 -21 -14 -48 -7 -44 12 -114 -4 -165 -37 -35 -24
-43 -25 -92 -16 -59 10 -108 15 -153 14 -16 0 -60 4 -96 10 -50 8 -83 8 -134
-2 -71 -13 -97 -33 -237 -173 -21 -21 -53 -44 -71 -52 -17 -7 -77 -48 -132
-90 l-100 -76 -65 2 c-36 0 -121 -1 -190 -3 -123 -3 -126 -4 -173 -36 -29 -21
-66 -61 -95 -104 -50 -75 -113 -145 -174 -190 -20 -15 -42 -40 -49 -56 -7 -15
-41 -49 -75 -75 -104 -77 -133 -133 -118 -226 5 -30 20 -56 52 -92 l45 -51
-203 -203 -204 -204 -210 -112 c-254 -135 -809 -452 -1145 -653 -134 -80 -247
-146 -252 -146 -4 0 -160 -88 -346 -196 -701 -407 -2309 -1293 -2648 -1460
-181 -90 -346 -175 -365 -189 -19 -15 -48 -32 -65 -39 -16 -7 -187 -111 -380
-230 -192 -120 -439 -267 -550 -328 -429 -237 -984 -554 -1055 -604 -169 -117
-589 -369 -675 -404 -182 -75 -385 -176 -565 -283 -102 -60 -264 -150 -360
-200 -166 -86 -465 -277 -607 -389 -76 -60 -174 -188 -284 -373 -45 -77 -107
-172 -136 -211 -55 -74 -113 -188 -133 -264 -7 -25 -39 -82 -72 -128 l-60 -83
-88 -952 -87 -952 -175 -435 -176 -435 -58 -37 c-33 -20 -77 -42 -99 -48 -52
-15 -139 -81 -171 -130 -15 -22 -32 -40 -38 -40 -6 0 -31 -16 -55 -35 -24 -19
-52 -35 -63 -35 -11 0 -28 -5 -39 -11 -11 -5 -43 -12 -71 -15 -62 -5 -84 -18
-168 -102 -36 -36 -96 -85 -135 -110 -38 -25 -106 -82 -151 -127 -81 -82 -99
-112 -124 -212 -9 -38 -14 -43 -47 -49 -26 -5 -51 -22 -83 -54 -51 -52 -91
-70 -160 -70 -81 0 -111 -11 -156 -55 l-42 -42 -68 14 c-62 13 -78 13 -159 -3
-75 -14 -103 -25 -166 -65 -42 -27 -82 -49 -88 -49 -7 0 -25 -8 -39 -19 -15
-10 -48 -21 -73 -25 -36 -5 -59 -18 -101 -54 -37 -33 -69 -51 -106 -61 -38 -9
-67 -26 -100 -57 -25 -24 -49 -44 -53 -44 -4 0 -48 -26 -99 -57 -50 -32 -110
-68 -133 -81 -22 -12 -48 -29 -57 -37 -9 -8 -22 -15 -29 -15 -6 0 -29 -9 -51
-20 -50 -25 -52 -25 -84 5 -34 31 -109 70 -156 80 -19 4 -60 20 -90 35 -32 16
-95 35 -147 44 -90 16 -92 15 -185 -9 -51 -14 -124 -31 -161 -38 l-68 -13 -21
38 c-12 22 -37 48 -55 59 -40 25 -202 45 -253 32 -24 -7 -49 -5 -81 4 -33 10
-58 11 -88 4 -33 -7 -57 -5 -113 11 -63 18 -78 19 -137 8 -36 -7 -79 -20 -96
-30 -16 -10 -62 -25 -100 -34 -39 -8 -87 -22 -108 -31 -30 -12 -49 -13 -112
-4 -75 10 -129 6 -152 -13 -7 -6 -22 -4 -43 7 -17 9 -59 19 -94 23 -53 7 -69
14 -95 40 -32 31 -83 52 -131 52 -14 0 -41 5 -60 10 -119 36 -338 79 -368 74
-40 -8 -243 -188 -262 -233 -9 -23 -20 -31 -50 -36 -25 -4 -55 -21 -83 -46
-53 -46 -55 -45 -86 64 -22 74 -112 286 -149 349 -30 53 -137 106 -284 144
-138 35 -174 36 -232 7 -26 -14 -31 -13 -55 6 -83 67 -103 76 -166 75 -59 0
-63 1 -83 32 -21 33 -36 41 -217 120 -148 65 -255 135 -383 253 -145 133 -262
218 -309 225 -21 3 -64 2 -95 -2 -55 -8 -58 -7 -121 32 -54 35 -69 51 -98 106
-22 42 -58 88 -101 129 -38 36 -68 71 -68 80 0 8 -9 33 -20 56 -19 40 -91 99
-166 138 -26 13 -32 24 -37 62 -4 26 -25 81 -47 124 -32 62 -54 89 -110 135
-56 47 -72 67 -81 100 -6 22 -28 68 -49 101 -20 33 -50 84 -66 113 -18 36 -64
87 -140 157 l-111 105 -5 82 c-5 99 -18 123 -91 170 -29 18 -73 51 -98 74 -25
22 -81 63 -125 90 -79 49 -79 49 -169 50 -68 0 -101 6 -135 21 -25 11 -69 28
-99 38 -30 10 -93 43 -140 73 -79 51 -97 58 -215 84 -98 21 -157 28 -237 28
-106 0 -108 0 -131 29 -36 44 -67 59 -148 72 -41 7 -111 28 -155 48 -65 28
-92 35 -140 34 -44 -1 -69 4 -93 19 -27 17 -61 23 -170 30 -164 11 -241 6
-310 -21 l-51 -20 -42 79 c-47 92 -75 113 -166 130 -69 12 -81 10 -207 -32
l-89 -30 -74 22 c-69 21 -80 21 -221 11 -81 -6 -160 -14 -176 -17 -38 -8 -209
-127 -235 -163 -18 -25 -28 -28 -118 -39 -91 -10 -103 -10 -173 11 -41 12
-105 39 -141 59 -62 35 -67 41 -102 115 -33 71 -36 83 -30 140 9 93 -1 123
-72 219 -94 128 -97 129 -290 130 -172 1 -225 7 -260 30 -12 8 -76 21 -141 29
-66 8 -136 19 -156 25 -30 9 -56 6 -140 -13 -57 -14 -129 -36 -161 -50 l-58
-26 -65 21 c-63 21 -66 21 -166 4 -102 -17 -160 -44 -175 -82 -3 -8 -12 -14
-19 -14 -8 0 -38 -12 -67 -27 -47 -25 -62 -27 -158 -28 -100 0 -107 -1 -142
-28 -21 -16 -46 -46 -57 -67 -18 -36 -24 -39 -74 -45 -70 -9 -252 11 -340 37
-61 18 -84 20 -215 14 -194 -9 -206 -12 -253 -57 -39 -37 -42 -38 -112 -36
-52 1 -86 -4 -126 -20 -47 -18 -64 -20 -105 -12 -88 17 -121 5 -196 -70 -62
-62 -68 -71 -73 -121 -5 -41 -2 -73 13 -125 l20 -70 -26 -20 c-24 -18 -174
-68 -338 -113 -58 -15 -67 -23 -230 -186 -93 -94 -206 -201 -250 -239 -87 -75
-522 -467 -618 -557 -55 -50 -160 -174 -247 -288 l-34 -45 -8 -276 c-14 -493
-22 -586 -66 -766 -29 -114 -58 -203 -105 -310 -35 -82 -76 -181 -91 -220 -26
-69 -96 -181 -209 -332 -127 -170 -219 -308 -263 -396 -35 -69 -65 -112 -123
-172 -84 -89 -123 -139 -257 -338 -105 -155 -174 -271 -184 -307 -5 -21 -6
-74 -1 -131 16 -174 87 -299 180 -313 49 -8 251 44 302 78 l40 27 112 -55 c61
-31 135 -72 162 -92 28 -20 151 -90 275 -156 220 -116 227 -121 311 -207 71
-74 92 -90 125 -95 52 -9 89 3 163 54 69 47 218 97 316 106 33 3 103 15 155
26 113 25 216 20 304 -12 64 -24 79 -43 97 -115 22 -96 69 -155 159 -200 53
-28 285 -92 454 -126 174 -36 269 -70 463 -167 76 -39 155 -77 176 -86 55 -22
187 -37 228 -26 19 6 35 10 37 10 1 0 -9 -17 -22 -37 -39 -60 -51 -124 -36
-191 16 -73 38 -103 113 -155 l62 -42 110 1 c88 0 137 7 247 33 153 36 181 35
263 -7 237 -123 402 -245 463 -344 121 -193 141 -214 275 -293 42 -26 81 -38
150 -50 118 -21 151 -37 267 -135 52 -45 118 -96 145 -114 58 -39 355 -216
400 -239 56 -28 149 -55 245 -71 52 -9 129 -24 170 -32 l75 -16 55 -81 c70
-103 132 -152 213 -166 63 -11 137 -1 190 26 43 22 302 103 328 103 13 0 74
-14 134 -30 61 -17 160 -44 222 -60 61 -16 129 -38 150 -48 21 -11 63 -27 93
-37 68 -22 133 -73 149 -117 7 -18 17 -41 23 -52 5 -10 16 -69 24 -130 23
-181 83 -425 125 -506 45 -87 91 -139 299 -331 107 -100 229 -218 270 -264 41
-46 127 -128 190 -183 189 -164 265 -259 399 -499 25 -46 109 -159 185 -253
181 -222 501 -531 651 -627 55 -36 120 -84 145 -108 35 -33 268 -185 284 -185
2 0 56 -29 120 -64 142 -79 209 -133 242 -198 14 -27 41 -74 61 -106 20 -31
90 -165 155 -297 198 -403 250 -496 297 -532 23 -18 53 -46 67 -63 14 -17 53
-46 86 -66 34 -19 88 -59 122 -89 34 -30 106 -94 161 -142 205 -182 449 -374
529 -417 12 -6 54 -33 93 -60 62 -42 74 -54 79 -85 8 -42 42 -97 139 -223 66
-87 77 -97 200 -172 72 -43 173 -102 226 -131 52 -29 158 -98 235 -153 134
-96 143 -100 234 -122 52 -12 100 -25 105 -30 6 -4 33 -15 60 -23 37 -11 49
-19 47 -31 -3 -17 -39 -70 -103 -151 -57 -73 -108 -188 -122 -277 -8 -46 -18
-92 -25 -103 -6 -12 -20 -59 -32 -105 -27 -105 -23 -175 15 -250 26 -51 27
-59 21 -146 -6 -84 -5 -99 19 -169 21 -61 25 -82 16 -99 -25 -49 -30 -139 -11
-216 33 -137 82 -284 125 -370 23 -47 50 -110 60 -140 39 -124 122 -214 244
-265 80 -33 122 -73 198 -189 l45 -69 -4 -116 -3 -116 -39 -50 c-51 -66 -103
-176 -115 -245 -5 -30 -17 -75 -26 -100 -34 -91 2 -274 71 -363 35 -45 36 -49
29 -104 -4 -31 -15 -88 -26 -127 -10 -39 -19 -83 -19 -99 0 -15 -34 -96 -76
-180 -42 -83 -85 -176 -95 -206 -26 -73 -74 -158 -191 -333 -55 -81 -119 -190
-143 -242 -48 -102 -51 -106 -252 -251 -35 -24 -76 -64 -93 -87 -41 -59 -57
-75 -117 -114 -29 -18 -72 -59 -97 -90 -52 -66 -59 -99 -60 -269 -1 -149 -36
-266 -99 -334 -72 -77 -116 -219 -117 -377 0 -72 -41 -224 -86 -317 -31 -66
-38 -92 -45 -180 -9 -113 -39 -234 -94 -376 -20 -52 -37 -108 -36 -125 1 -171
8 -223 39 -295 28 -65 31 -81 25 -135 -4 -39 -20 -91 -45 -145 -63 -138 -88
-230 -88 -325 0 -77 -3 -89 -36 -152 -20 -38 -52 -100 -71 -137 -20 -38 -40
-70 -47 -72 -6 -2 -45 -14 -86 -26 -64 -20 -84 -32 -145 -89 -38 -36 -99 -87
-135 -112 -36 -25 -105 -82 -155 -127 -49 -45 -108 -92 -129 -103 -52 -27
-141 -111 -156 -148 -11 -25 -18 -30 -48 -30 -56 0 -162 -29 -225 -63 -72 -38
-106 -78 -148 -173 -29 -69 -35 -75 -73 -86 -61 -19 -176 -132 -210 -207 -26
-58 -27 -59 -113 -97 -49 -21 -100 -46 -116 -57 -22 -15 -37 -17 -82 -12 -90
12 -243 -28 -325 -83 -59 -40 -73 -45 -147 -52 -92 -9 -147 -38 -215 -112
l-36 -41 -45 12 c-25 6 -80 11 -121 11 -41 0 -148 7 -238 15 -90 8 -220 17
-290 21 l-127 6 -68 45 c-37 24 -80 47 -95 50 -16 3 -28 8 -28 12 0 10 90 84
160 131 128 86 236 211 355 410 49 80 133 201 181 257 46 55 110 99 178 123
78 27 102 45 131 103 33 66 32 100 -6 175 -26 54 -39 67 -103 106 -93 59 -171
83 -309 96 -62 6 -137 19 -167 29 -128 43 -420 111 -476 111 -109 0 -152 -18
-421 -177 l-92 -55 -68 10 c-38 6 -106 16 -153 22 -47 7 -123 18 -169 26 -104
17 -172 18 -236 0 -68 -18 -90 -30 -148 -85 -71 -66 -201 -104 -324 -94 l-72
6 96 48 c153 78 214 129 293 248 85 127 113 308 74 466 -25 98 -107 183 -194
200 -19 4 -53 19 -75 34 -22 15 -74 44 -115 65 -41 20 -86 45 -99 55 l-25 19
22 98 c36 163 37 193 12 294 -19 76 -33 107 -90 193 -37 56 -117 156 -179 222
-62 66 -124 142 -138 170 -44 84 -25 159 111 438 36 73 84 190 107 258 36 112
40 134 42 234 1 116 -11 169 -59 265 -24 47 -101 157 -141 200 -29 30 -107
191 -123 250 -22 85 -70 199 -116 275 -53 87 -107 133 -229 192 -44 22 -100
55 -125 74 -25 19 -64 42 -87 53 -30 13 -48 30 -66 65 l-25 46 24 44 c24 45
31 105 18 170 -7 34 -59 94 -114 132 -19 13 -62 46 -95 74 -78 66 -181 123
-236 131 -60 9 -155 36 -269 76 -72 25 -106 43 -140 76 -25 23 -66 56 -92 74
-26 18 -53 43 -60 56 -7 13 -32 35 -56 49 -24 14 -40 29 -35 34 4 4 108 71
230 148 323 203 463 314 496 390 6 14 20 40 31 56 31 44 29 139 -2 183 -13 18
-93 173 -177 345 -180 365 -238 458 -348 550 -93 79 -152 113 -277 162 -52 21
-142 64 -200 95 -58 32 -150 74 -205 93 -55 20 -153 58 -218 86 -121 52 -217
83 -319 101 -67 12 -156 -5 -242 -46 l-50 -24 -135 36 c-130 34 -139 35 -206
25 -99 -16 -264 8 -400 59 -102 38 -283 93 -505 154 -69 18 -180 54 -247 80
-197 73 -271 89 -384 82 -53 -3 -141 -15 -195 -27 -55 -11 -150 -25 -212 -30
-126 -10 -160 -4 -385 65 -65 20 -127 36 -137 36 -10 0 -31 11 -47 24 -45 38
-144 93 -209 116 -32 12 -111 46 -174 75 -63 29 -144 65 -180 80 -35 16 -87
43 -115 60 -65 42 -150 85 -250 125 -44 18 -89 41 -100 50 -11 10 -39 29 -62
43 -30 19 -43 35 -48 59 -18 85 -108 159 -245 203 -55 18 -370 191 -432 238
-18 14 -60 40 -93 58 -33 18 -82 49 -110 70 -27 20 -97 64 -155 97 -58 34
-127 82 -153 106 -36 33 -67 51 -125 70 -125 41 -701 184 -793 196 -46 6 -102
15 -125 20 -22 5 -119 18 -215 30 -202 23 -260 39 -349 93 -71 44 -363 198
-475 251 -38 19 -131 48 -205 66 -74 18 -139 36 -145 40 -5 5 -39 18 -75 30
-36 12 -105 42 -155 67 -97 49 -350 136 -505 173 -52 12 -185 46 -295 75 -467
123 -517 133 -805 155 -374 29 -456 39 -530 60 -36 10 -135 38 -220 61 -157
42 -247 74 -310 110 -131 75 -178 90 -344 110 -397 47 -476 68 -616 167 -123
86 -329 192 -495 254 -266 100 -597 190 -855 233 -52 8 -140 24 -195 35 -55
11 -169 26 -253 35 -84 8 -273 36 -419 60 -146 25 -286 45 -311 45 -91 0 -465
73 -767 150 -211 54 -560 128 -1094 235 -432 85 -787 157 -789 159 -3 4 406
2061 454 2276 14 63 26 151 27 195 2 92 -10 119 -72 157 -34 22 -45 23 -200
21 -230 -4 -330 -22 -455 -84 -55 -27 -105 -49 -112 -49 -12 0 -133 -51 -166
-69 -14 -9 -415 -215 -499 -257 -19 -10 -45 -24 -59 -31 -58 -33 -95 -44 -158
-50 -98 -10 -246 -6 -422 12 -85 8 -247 19 -360 25 -113 6 -227 17 -255 25
-27 8 -95 24 -150 35 -126 28 -259 69 -401 126 -149 59 -281 98 -444 129 -74
15 -181 38 -237 51 -57 13 -183 33 -280 44 -98 11 -205 25 -238 30 -33 5 -125
14 -205 20 -227 16 -295 27 -350 54 -97 49 -169 58 -510 63 -196 3 -355 1
-420 -6 -108 -11 -368 -66 -570 -119 -138 -37 -244 -49 -530 -62 -118 -5 -231
-14 -250 -20 -19 -5 -36 -10 -36 -10 -1 0 -4 20 -5 44 -3 33 0 47 12 54 21 13
59 91 59 119 0 17 11 25 53 39 121 39 196 91 250 173 36 57 42 73 45 132 7
113 -40 183 -157 237 -87 40 -165 41 -297 3 -60 -17 -124 -31 -142 -31 -37 0
-139 48 -193 91 -28 22 -38 38 -42 68 -8 62 -41 107 -100 136 -64 31 -172 55
-250 55 -69 0 -115 24 -287 145 -319 226 -442 295 -726 404 -153 59 -432 131
-507 131 -38 0 -55 9 -150 79 -84 62 -117 81 -153 87 -64 9 -142 -3 -190 -31
-55 -32 -150 -137 -157 -172 -16 -86 -94 -306 -139 -391 -82 -154 -96 -171
-219 -257 -96 -66 -140 -89 -277 -142 -89 -35 -167 -63 -173 -63 -18 0 -162
89 -226 140 -63 49 -112 70 -168 70 -16 0 -59 9 -95 21 -36 11 -110 27 -165
35 -55 8 -133 26 -173 40 -40 13 -77 24 -83 24 -6 0 -27 14 -47 31 -38 34
-113 70 -180 89 -59 15 -189 87 -240 131 -23 20 -73 49 -110 65 -37 15 -97 40
-134 56 -36 15 -71 28 -77 28 -6 0 -48 17 -94 39 -161 74 -244 78 -364 17 -39
-20 -74 -36 -79 -36 -5 0 -44 -24 -87 -54 l-77 -54 -133 5 c-86 4 -142 11
-161 20 -18 10 -265 40 -712 87 -377 40 -689 77 -694 82 -5 5 -200 369 -433
809 -233 440 -553 1041 -711 1335 -159 294 -336 625 -395 734 -58 109 -119
212 -134 227 -15 16 -45 33 -65 38 -20 6 -1666 251 -3656 546 -2395 354 -3632
533 -3654 529 -41 -8 -94 -52 -115 -97 -9 -17 -21 -61 -27 -97 -13 -73 -2
-163 46 -410 22 -111 33 -144 60 -185 39 -57 39 -60 18 -100 -36 -66 -43 -132
-34 -305 7 -137 6 -175 -7 -225 -14 -51 -14 -74 -4 -159 7 -55 24 -142 37
-195 14 -53 29 -148 33 -211 6 -74 17 -138 31 -180 12 -36 28 -115 36 -176 8
-62 22 -140 33 -175 10 -35 31 -119 47 -186 l27 -123 -21 -88 c-12 -48 -22
-113 -22 -143 0 -93 50 -241 120 -355 13 -20 35 -82 50 -138 15 -56 37 -121
49 -145 25 -47 60 -197 61 -251 0 -34 -24 -91 -69 -163 -11 -18 -28 -65 -37
-103 -19 -81 -14 -158 16 -236 11 -29 20 -62 20 -73 1 -11 20 -78 44 -150 24
-71 43 -131 41 -133 -1 -2 -18 3 -36 11 -19 7 -86 26 -149 41 -63 16 -136 34
-162 42 -26 7 -76 18 -110 25 -58 10 -123 25 -523 120 -421 100 -591 137 -671
149 -39 5 -77 12 -85 15 -35 13 -254 36 -459 50 -498 32 -585 41 -880 90 -150
25 -277 34 -660 46 -479 15 -691 5 -1082 -51 -114 -17 -228 -30 -254 -30 -25
0 -101 -9 -168 -19 -66 -11 -193 -27 -281 -36 -266 -28 -304 -32 -450 -50
-116 -14 -198 -16 -480 -12 -366 5 -369 5 -635 72 -74 19 -184 41 -245 50 -60
9 -196 34 -301 56 -180 37 -202 39 -367 39 -162 0 -179 2 -243 25 -148 55
-454 191 -454 201 0 7 -20 38 -44 71 -23 32 -46 75 -50 94 -16 89 -185 433
-247 505 -56 65 -76 78 -162 98 -72 18 -72 18 -182 -7 -127 -29 -192 -52 -219
-75 -33 -30 -101 -134 -111 -170 -16 -54 -32 -51 -61 14 -36 81 -51 149 -69
302 -19 166 -43 218 -147 323 -65 65 -82 92 -145 220 -78 158 -86 167 -233
261 -126 81 -155 118 -361 478 -105 184 -210 364 -232 399 l-41 64 -450 224
c-248 124 -470 236 -494 250 -34 20 -65 27 -140 34 -72 6 -121 17 -187 42 -50
19 -155 55 -233 81 -83 27 -174 64 -220 91 -42 24 -113 60 -157 79 -71 32
-2573 782 -2834 850 -123 33 -44 40 -836 -79 -308 -47 -668 -101 -800 -120
-131 -20 -251 -38 -265 -41 -14 -4 -371 -112 -795 -242 l-770 -235 -315 -2
c-297 -1 -360 -6 -540 -37 -106 -18 -237 -90 -405 -225 l-148 -117 -92 -141
c-51 -77 -143 -210 -206 -295 -189 -257 -308 -490 -473 -917 -19 -48 -80 -185
-136 -303 -84 -178 -114 -255 -172 -445 l-71 -230 -7 -170 c-7 -201 -3 -182
-188 -740 l-126 -380 -6 -185 -6 -185 -41 -80 c-22 -44 -87 -177 -144 -295
l-104 -215 -3 -115 -4 -116 51 -154 c42 -129 61 -170 111 -245 l60 -90 0 -83
c0 -72 -4 -90 -30 -143 -17 -33 -47 -115 -66 -182 -33 -114 -35 -129 -31 -232
4 -109 5 -113 91 -355 49 -135 107 -299 131 -365 80 -226 220 -552 281 -655 9
-14 30 -56 48 -95 18 -38 52 -107 74 -152 22 -45 43 -91 47 -102 3 -11 22 -47
41 -78 19 -32 40 -76 46 -98 7 -22 22 -56 35 -75 13 -19 23 -38 23 -42 0 -32
363 -789 475 -991 113 -206 232 -322 385 -377 52 -18 81 -38 147 -100 102 -97
149 -120 252 -127 145 -10 257 42 411 193 58 56 76 67 165 99 55 20 115 41
134 47 27 8 219 99 306 145 99 52 190 69 511 93 152 12 174 9 244 -25 106 -52
225 -56 399 -11 72 18 104 34 201 98 63 42 134 94 157 115 23 21 59 54 80 73
21 19 58 51 83 70 25 18 53 41 62 51 9 9 54 43 100 75 46 32 111 79 145 104
95 69 559 349 668 403 33 16 73 38 88 49 16 11 56 34 90 50 57 27 137 83 257
178 25 20 101 81 170 136 189 151 324 251 351 259 13 4 56 24 94 45 l70 38
120 -100 c66 -55 182 -154 258 -220 131 -114 137 -121 124 -142 -8 -11 -43
-73 -78 -136 -60 -108 -64 -117 -62 -175 2 -52 29 -266 63 -485 5 -36 13 -93
16 -126 l6 -62 -58 -41 c-124 -87 -255 -196 -528 -439 -173 -154 -337 -327
-495 -522 -38 -48 -149 -136 -248 -198 -38 -24 -116 -84 -174 -132 -132 -113
-271 -212 -363 -260 -39 -20 -150 -62 -246 -93 -170 -54 -240 -73 -440 -117
-52 -11 -165 -36 -250 -56 -242 -55 -356 -79 -777 -164 -371 -75 -458 -91
-675 -124 -254 -39 -311 -49 -408 -67 -58 -11 -174 -29 -258 -39 -85 -11 -170
-24 -190 -29 -20 -5 -102 -17 -182 -25 -253 -28 -291 -35 -367 -72 -70 -35
-72 -35 -115 -21 -86 29 -155 39 -234 34 -79 -4 -142 1 -599 48 -322 34 -365
40 -470 65 -188 45 -514 139 -585 168 -14 6 -85 30 -159 53 -74 23 -187 64
-250 92 -64 27 -161 69 -216 92 -277 118 -414 178 -456 200 -25 14 -88 41
-140 60 -52 20 -110 44 -129 55 -88 47 -184 34 -357 -46 -77 -37 -115 -74
-145 -143 -10 -24 -40 -83 -66 -130 -26 -47 -86 -173 -133 -279 -47 -106 -95
-199 -105 -206 -10 -8 -210 -114 -444 -237 -401 -211 -429 -227 -498 -293 -41
-39 -80 -82 -87 -97 -29 -55 -136 -365 -143 -413 l-7 -51 -61 -20 c-33 -11
-72 -28 -87 -37 -43 -29 -286 -356 -332 -448 l-43 -86 -174 -57 c-96 -31 -189
-60 -208 -63 -20 -5 -50 -24 -75 -49 -45 -45 -55 -75 -55 -180 -1 -98 -24
-135 -127 -201 -48 -32 -145 -95 -214 -141 l-127 -83 -310 0 c-170 0 -324 -3
-342 -6 -20 -4 -56 -29 -94 -64 -69 -64 -94 -80 -128 -80 -43 0 -151 42 -242
94 -111 63 -141 64 -281 13 -55 -20 -215 -62 -355 -93 -240 -52 -266 -60 -435
-132 l-180 -77 -161 -158 c-89 -87 -167 -170 -175 -185 -62 -126 -90 -161
-167 -215 -68 -47 -106 -63 -318 -135 l-241 -82 -174 0 -175 0 -234 -71 c-312
-95 -348 -97 -707 -41 l-253 40 -87 79 c-135 122 -280 227 -426 307 -73 40
-156 89 -185 110 -65 45 -270 150 -348 176 -32 11 -76 31 -98 44 -23 13 -84
38 -136 56 l-95 33 -155 -9 c-211 -11 -246 -9 -390 21 -206 43 -232 46 -575
55 -223 5 -359 13 -420 24 -49 9 -137 20 -193 25 -77 7 -126 18 -190 43 -79
30 -95 41 -175 121 -117 115 -129 121 -252 123 -55 0 -135 5 -177 9 -71 7 -78
10 -86 34 -136 376 -949 2554 -960 2574 -24 40 -76 70 -125 70 -23 0 -87 -7
-142 -16 -136 -23 -196 -21 -288 8 -52 17 -101 25 -148 25 -43 0 -81 6 -100
15 -16 9 -104 27 -196 40 -184 27 -222 24 -265 -20 -33 -35 -98 -34 -150 1
-29 21 -55 28 -120 34 -46 4 -117 15 -158 25 -41 9 -88 14 -105 12 -29 -5 -30
-4 -30 38 0 30 -9 54 -29 83 -55 81 -136 113 -242 97 -41 -6 -56 -16 -112 -71
-58 -58 -68 -64 -105 -64 -63 0 -112 -17 -144 -49 l-28 -29 -175 34 c-96 18
-194 33 -218 34 -24 0 -61 10 -85 22 -31 16 -65 23 -132 26 -144 7 -202 -20
-242 -109 -9 -21 -23 -41 -31 -44 -9 -3 -63 -8 -121 -12 l-106 -6 -90 45 c-49
25 -103 48 -120 52 -30 6 -734 -58 -1025 -93 -197 -24 -702 -41 -920 -30 -75
3 -76 3 -370 -108 -162 -61 -357 -134 -434 -162 -76 -28 -152 -58 -170 -65
-82 -38 -240 -98 -312 -120 -195 -58 -304 -57 -544 4 -41 11 -142 35 -225 55
-270 63 -340 92 -407 163 -66 70 -73 86 -102 213 -19 81 -38 135 -62 175 -65
112 -259 266 -351 280 -32 5 -84 0 -162 -14 -64 -12 -161 -26 -216 -32 -219
-25 -367 -83 -463 -183 -31 -32 -79 -71 -107 -86 -63 -35 -213 -87 -280 -96
-71 -9 -143 -30 -275 -79 -114 -43 -180 -56 -375 -76 -204 -22 -291 -55 -445
-172 -63 -48 -120 -93 -125 -100 -48 -60 -58 -82 -58 -133 0 -39 6 -61 23 -84
12 -18 562 -609 1222 -1314 l1200 -1282 -68 -13 c-38 -7 -121 -22 -184 -33
-138 -23 -187 -52 -241 -138 -45 -71 -56 -97 -65 -157 -9 -62 -47 -99 -136
-133 -62 -25 -153 -80 -194 -119 -66 -62 -84 -140 -59 -250 18 -80 14 -116
-24 -204 -21 -50 -93 -133 -133 -154 -54 -28 -147 -114 -253 -235 -59 -68
-149 -167 -199 -220 -116 -123 -132 -142 -174 -208 -44 -69 -112 -197 -112
-212 0 -14 -75 -168 -94 -192 -13 -17 -17 -16 -64 13 -101 62 -323 85 -413 44
-69 -32 -114 -78 -153 -155 -20 -39 -36 -76 -36 -83 0 -21 -82 -176 -138 -260
-29 -43 -52 -82 -52 -86 0 -5 -30 -22 -67 -40 -37 -17 -83 -43 -102 -57 -20
-15 -112 -52 -220 -88 -229 -77 -248 -91 -300 -234 -35 -94 -102 -211 -122
-211 -6 0 -52 -26 -102 -58 -141 -90 -174 -107 -277 -138 -80 -24 -102 -35
-137 -71 -41 -41 -49 -60 -46 -120 1 -15 -49 -69 -180 -195 -99 -95 -218 -209
-262 -254 -45 -44 -124 -110 -176 -146 -148 -103 -644 -356 -848 -434 -180
-68 -358 -200 -450 -331 -20 -28 -60 -87 -90 -130 -30 -43 -69 -96 -88 -117
-18 -22 -33 -45 -33 -51 0 -7 -10 -20 -21 -31 -20 -17 -107 -146 -149 -219
-37 -64 -163 -271 -180 -295 -10 -14 -29 -46 -43 -70 -13 -25 -39 -72 -58
-105 -18 -33 -50 -83 -71 -111 -21 -28 -38 -54 -38 -58 0 -5 -9 -20 -19 -35
-19 -26 -50 -139 -52 -184 0 -17 -301 -268 -1270 -1062 -699 -572 -1292 -1052
-1317 -1066 -26 -15 -137 -57 -247 -94 -110 -37 -216 -79 -235 -93 -19 -14
-300 -245 -625 -512 -324 -267 -635 -521 -690 -565 -55 -43 -165 -133 -245
-200 -80 -66 -508 -417 -952 -778 -444 -361 -815 -669 -826 -685 -10 -15 -252
-773 -537 -1684 l-519 -1658 -323 -250 -323 -251 -126 -165 c-101 -133 -186
-266 -435 -681 -170 -284 -313 -531 -318 -550 -16 -58 -3 -96 65 -182 l64 -81
51 -207 c57 -230 66 -247 156 -315 49 -37 62 -42 108 -42 46 0 61 5 113 42 33
23 64 42 69 42 5 0 31 -29 57 -65 69 -95 93 -110 219 -135 59 -12 167 -43 239
-70 l132 -50 111 -108 c60 -60 151 -143 201 -184 86 -73 94 -83 194 -250 57
-95 119 -189 139 -208 29 -27 58 -41 134 -63 69 -20 107 -26 130 -21 18 3 79
38 136 75 57 38 107 69 110 69 3 0 16 -18 29 -40 13 -22 57 -68 100 -103 42
-34 95 -82 117 -107 22 -25 84 -90 137 -145 l98 -101 15 -119 c20 -150 32
-167 173 -244 76 -42 127 -80 204 -153 102 -96 103 -97 147 -205 24 -59 55
-123 68 -140 28 -39 140 -106 203 -123 111 -30 135 -65 142 -212 5 -96 5 -97
54 -165 26 -37 73 -93 104 -124 56 -57 84 -69 159 -69 38 0 141 -60 141 -82 0
-23 53 -80 138 -145 48 -37 90 -72 94 -77 3 -5 9 -34 13 -64 6 -46 13 -60 50
-97 59 -60 109 -73 190 -50 33 9 69 22 81 30 19 12 25 10 63 -27 44 -43 46
-50 56 -140 5 -47 13 -64 46 -102 22 -24 63 -62 91 -82 l51 -38 131 -7 c72 -4
154 -14 183 -22 86 -25 289 -145 360 -212 l63 -61 0 -124 c0 -107 4 -138 27
-215 26 -88 29 -92 112 -175 73 -72 97 -89 161 -115 73 -29 79 -30 277 -33
l201 -3 7 -48 c13 -93 113 -179 218 -188 48 -4 82 -16 150 -51 l89 -46 -8 -46
c-4 -25 -10 -85 -13 -134 l-6 -90 -90 -24 c-151 -40 -208 -52 -255 -52 -57 0
-183 -35 -323 -89 l-109 -42 -146 6 c-81 4 -171 14 -201 22 -76 22 -185 14
-239 -17 -87 -49 -145 -196 -121 -310 12 -57 51 -135 106 -213 22 -32 49 -53
95 -76 71 -35 135 -46 353 -61 83 -5 213 -19 289 -30 120 -18 150 -26 215 -60
86 -44 166 -80 180 -80 10 0 165 -64 191 -78 35 -20 158 -87 195 -106 22 -12
55 -32 73 -45 19 -13 68 -32 110 -43 42 -11 93 -29 112 -41 19 -12 49 -29 65
-37 17 -8 64 -36 107 -63 42 -26 105 -56 140 -65 119 -34 239 -138 390 -341
105 -141 162 -243 173 -314 12 -69 71 -137 118 -137 31 0 26 -19 -10 -37 -20
-11 -51 -36 -67 -57 -28 -35 -31 -43 -31 -116 0 -73 2 -81 31 -117 31 -38 31
-40 14 -63 -9 -14 -24 -62 -33 -108 -16 -82 -16 -82 10 -165 14 -45 26 -104
27 -132 7 -157 44 -210 181 -258 115 -39 114 -37 74 -87 l-34 -42 1 -157 c1
-124 5 -174 22 -244 12 -49 31 -144 42 -211 25 -154 75 -387 146 -676 l56
-225 56 -75 c31 -41 112 -132 180 -201 118 -122 129 -130 253 -195 121 -64
212 -134 196 -151 -4 -4 -152 -10 -330 -14 -194 -4 -342 -12 -372 -19 -68 -17
-178 -83 -212 -127 -26 -33 -28 -44 -28 -123 l0 -87 45 -59 c44 -58 45 -61 48
-145 4 -81 1 -92 -37 -190 -22 -57 -52 -120 -65 -140 -37 -54 -67 -151 -59
-191 9 -45 41 -93 78 -115 27 -16 64 -19 355 -24 179 -3 359 -11 400 -17 41
-6 131 -16 199 -22 67 -6 157 -18 200 -26 69 -14 110 -21 321 -53 36 -5 142
-15 235 -21 153 -10 206 -17 395 -51 123 -22 238 -28 375 -18 l140 10 105 -37
c93 -33 121 -38 240 -44 96 -5 162 -14 230 -33 52 -14 120 -31 151 -37 31 -6
65 -19 75 -29 45 -42 139 -92 226 -120 51 -17 161 -65 243 -107 120 -61 167
-79 237 -92 49 -10 88 -20 88 -23 0 -11 380 -3090 410 -3329 24 -182 45 -295
95 -500 84 -347 234 -1045 286 -1335 58 -323 56 -372 -44 -920 -43 -236 -73
-423 -70 -440 8 -44 38 -80 101 -125 31 -22 109 -78 172 -125 108 -79 364
-262 491 -351 180 -125 525 -414 704 -588 50 -48 119 -112 155 -141 180 -147
357 -367 419 -521 11 -27 38 -87 62 -134 23 -47 49 -105 59 -130 9 -25 42 -97
72 -160 73 -152 95 -224 108 -350 5 -58 16 -139 24 -180 8 -41 17 -118 20
-170 4 -52 11 -113 16 -135 5 -22 12 -103 15 -180 6 -142 21 -251 37 -272 5
-6 16 -54 23 -106 8 -52 17 -101 21 -110 3 -10 -15 -38 -52 -79 -31 -35 -59
-65 -60 -67 -2 -2 -51 9 -110 24 -141 36 -224 32 -319 -14 -36 -18 -77 -46
-92 -62 -95 -104 -164 -168 -226 -211 -176 -119 -245 -163 -312 -196 -16 -9
-48 -28 -71 -43 -49 -33 -145 -72 -234 -94 -36 -9 -98 -30 -138 -47 l-74 -31
-106 27 c-127 31 -232 34 -456 11 -204 -21 -290 -9 -500 65 -67 24 -113 21
-158 -11 -15 -11 -202 -275 -415 -587 -213 -312 -409 -596 -436 -632 -72 -94
-651 -688 -716 -735 -31 -21 -272 -195 -536 -385 -622 -449 -655 -472 -788
-555 -184 -116 -246 -216 -264 -429 -5 -54 -13 -81 -40 -125 -40 -67 -62 -80
-130 -81 -73 0 -197 -25 -278 -57 l-70 -27 -663 -665 c-365 -366 -740 -747
-835 -846 l-172 -180 -82 -315 c-57 -221 -80 -325 -76 -348 3 -20 21 -49 42
-71 22 -23 348 -225 836 -518 714 -428 893 -531 1670 -953 479 -260 873 -475
877 -479 8 -7 4 -16 -52 -116 -32 -56 -34 -66 -35 -155 0 -117 18 -161 103
-253 88 -95 87 -91 87 -262 0 -220 -8 -205 213 -425 102 -102 221 -230 265
-284 45 -55 131 -152 191 -216 61 -63 183 -194 271 -290 88 -96 201 -216 250
-266 50 -51 109 -112 131 -136 23 -23 78 -76 123 -117 50 -45 83 -83 87 -100
8 -38 23 -63 76 -123 25 -29 74 -87 107 -128 129 -159 569 -622 641 -675 57
-42 134 -64 254 -73 l95 -7 85 -84 c84 -81 86 -85 86 -130 0 -25 9 -78 21
-116 14 -50 22 -118 29 -240 11 -234 30 -289 135 -401 50 -52 101 -146 111
-204 5 -26 27 -55 89 -116 70 -70 84 -89 98 -138 23 -84 111 -207 234 -328 92
-91 133 -122 273 -208 91 -56 205 -134 254 -173 98 -79 98 -75 -5 -96 -60 -13
-138 -68 -176 -126 -33 -50 -47 -137 -32 -198 16 -68 65 -142 109 -164 19 -10
71 -48 115 -84 44 -37 113 -87 153 -113 39 -25 72 -50 72 -55 0 -33 138 -111
301 -171 44 -16 109 -45 144 -65 l64 -35 -217 -648 -216 -647 -302 -310 c-351
-360 -390 -405 -397 -448 -11 -72 2 -98 85 -180 l79 -77 -12 -60 c-15 -76 -6
-170 22 -227 11 -23 44 -65 72 -92 29 -28 63 -71 76 -96 23 -43 23 -47 7 -63
-14 -14 -37 -17 -134 -17 -107 0 -121 -2 -172 -27 -40 -20 -63 -41 -86 -75
-35 -56 -57 -131 -48 -171 19 -85 98 -180 204 -243 103 -61 98 -54 68 -84 -21
-21 -48 -31 -125 -47 -54 -11 -111 -28 -128 -38 -68 -42 -138 -139 -149 -207
-5 -25 -1 -84 9 -148 21 -135 16 -168 -33 -199 -47 -31 -157 -61 -292 -80 -58
-9 -150 -22 -205 -31 -173 -26 -685 -59 -886 -57 -162 2 -195 -1 -251 -18 -35
-11 -73 -28 -84 -38 -101 -95 -132 -296 -64 -417 12 -21 19 -39 16 -42 -2 -2
-21 0 -43 6 -56 16 -245 13 -346 -4 -61 -11 -103 -25 -138 -46 -39 -25 -52
-29 -64 -19 -29 24 -76 109 -109 198 -54 145 -117 208 -236 236 -134 32 -220
17 -306 -52 -91 -74 -126 -165 -103 -273 15 -75 49 -129 119 -190 44 -38 61
-61 66 -86 4 -19 4 -36 1 -39 -15 -15 -150 -36 -282 -44 -351 -22 -431 -45
-655 -194 -84 -56 -152 -117 -358 -320 l-253 -251 -117 -54 c-64 -29 -135 -66
-157 -81 -22 -15 -71 -44 -110 -65 -38 -21 -106 -63 -150 -93 -315 -217 -442
-296 -568 -353 -62 -27 -132 -52 -157 -55 -25 -3 -198 2 -385 12 -505 25
-1046 30 -1173 10 -178 -28 -198 -22 -330 98 -84 77 -162 131 -244 171 -40 19
-98 51 -128 71 -177 117 -297 139 -468 84 -134 -43 -201 -124 -227 -279 -15
-86 -15 -99 0 -174 21 -103 45 -160 113 -267 100 -157 174 -250 320 -402 4 -4
38 -35 75 -70 96 -87 122 -143 130 -274 3 -56 3 -104 0 -107 -3 -4 -30 11 -59
32 -78 55 -152 69 -241 45 -52 -13 -107 -18 -233 -19 -163 -1 -166 -1 -219
-30 -70 -38 -104 -80 -174 -211 -32 -60 -73 -130 -91 -155 -71 -96 -219 -197
-274 -186 -15 3 -61 15 -102 26 -41 11 -89 21 -106 21 -17 0 -71 14 -120 31
-121 42 -179 46 -284 19 -122 -31 -206 -83 -326 -205 -82 -82 -108 -116 -137
-178 -20 -42 -41 -105 -47 -139 -37 -229 -75 -382 -111 -450 -21 -39 -28 -146
-13 -203 15 -56 15 -57 -14 -103 -16 -26 -32 -59 -36 -73 -6 -26 -8 -26 -43
-18 -187 46 -216 48 -336 15 -64 -17 -106 -36 -160 -72 -90 -61 -255 -229
-292 -298 -30 -55 -78 -242 -95 -371 -6 -44 -24 -136 -40 -205 -53 -234 -62
-360 -34 -509 11 -57 15 -122 12 -193 -3 -94 -6 -111 -25 -129 l-21 -21 -15
23 c-8 13 -25 66 -37 117 -28 114 -67 170 -159 223 -156 92 -313 75 -601 -64
-112 -54 -307 -191 -450 -315 -30 -26 -69 -57 -86 -69 -16 -12 -56 -55 -87
-95 -79 -105 -107 -200 -117 -403 l-6 -150 -66 -160 c-36 -88 -80 -212 -98
-275 -50 -178 -95 -251 -195 -319 -123 -83 -195 -99 -336 -76 -136 22 -196 40
-253 76 -28 18 -77 49 -110 68 -32 20 -93 72 -135 117 -89 96 -154 138 -234
153 -75 14 -145 -1 -213 -44 -82 -53 -112 -110 -139 -265 -18 -102 -16 -144
17 -320 16 -85 29 -126 49 -156 28 -41 124 -134 139 -134 6 0 30 -52 30 -66 0
-2 -9 -4 -20 -4 -11 0 -20 4 -20 8 0 15 -184 129 -220 137 -44 10 -64 21 -123
68 -173 139 -338 163 -490 70 -71 -43 -120 -107 -361 -471 -175 -265 -198
-308 -222 -408 -21 -90 2 -193 63 -291 58 -91 121 -129 240 -143 288 -35 287
-34 298 -70 20 -64 -146 -411 -258 -540 -79 -90 -265 -238 -366 -289 -66 -34
-186 -61 -270 -61 l-76 1 -67 137 c-94 191 -178 306 -262 361 -86 56 -127 70
-207 71 -36 0 -99 9 -140 20 -138 37 -266 22 -404 -47 -49 -24 -106 -57 -125
-72 -50 -39 -360 -227 -390 -236 -87 -26 -219 -132 -272 -220 -60 -97 -124
-387 -137 -615 -8 -147 -9 -152 -45 -224 -21 -41 -48 -84 -61 -96 l-23 -21
-20 33 c-10 18 -22 49 -25 68 -15 104 -38 151 -106 220 -36 37 -82 76 -101 86
-50 26 -152 25 -210 -4 -66 -32 -144 -116 -184 -199 -81 -167 -182 -286 -289
-341 l-72 -37 -285 0 -285 0 -53 28 c-75 39 -364 230 -385 254 -9 11 -22 47
-28 79 -6 32 -25 103 -41 157 -25 80 -37 105 -72 140 -52 54 -109 81 -211 102
-75 15 -86 15 -170 -1 -112 -22 -145 -35 -196 -81 -57 -51 -86 -107 -101 -191
-18 -106 -3 -187 76 -400 9 -24 14 -48 10 -53 -3 -5 -25 -19 -49 -30 -76 -36
-197 -149 -251 -236 -55 -88 -66 -113 -100 -233 -22 -73 -24 -97 -19 -176 l7
-91 -37 -32 c-20 -18 -44 -31 -53 -29 -15 3 -38 54 -71 158 -30 94 -138 256
-207 311 -98 78 -293 178 -391 200 -42 10 -62 8 -152 -15 -57 -14 -123 -35
-146 -46 -58 -28 -161 -139 -170 -182 -4 -18 -18 -57 -31 -86 -13 -29 -24 -56
-24 -60 0 -25 -67 -106 -117 -143 -102 -75 -183 -152 -215 -204 l-31 -50 -13
37 c-7 20 -21 49 -32 65 -10 15 -31 47 -47 71 -34 52 -103 102 -217 159 -73
36 -95 53 -127 97 -43 58 -109 119 -155 143 -42 22 -155 53 -192 53 -32 0
-205 -50 -259 -74 -16 -8 -56 -22 -87 -32 -57 -17 -60 -17 -160 5 -247 56
-235 51 -343 150 -34 31 -81 70 -105 86 -40 27 -50 30 -126 30 -76 0 -86 -3
-125 -30 -66 -47 -96 -99 -134 -231 -20 -65 -40 -127 -45 -136 -6 -10 -10 -23
-10 -29 0 -26 -60 -136 -90 -164 -29 -28 -37 -30 -104 -30 -77 0 -86 4 -381
158 -44 23 -114 51 -155 61 -98 25 -214 81 -247 120 -25 29 -25 34 -18 111 5
44 9 110 9 147 0 59 -3 72 -30 109 -17 23 -50 56 -73 73 -42 30 -45 31 -160
31 -152 0 -241 -18 -294 -59 -62 -48 -104 -109 -129 -189 -46 -152 -110 -161
-273 -36 -156 118 -289 177 -451 200 -191 26 -346 -54 -422 -219 -22 -49 -26
-72 -26 -157 -1 -55 2 -114 6 -130 6 -29 3 -32 -43 -59 -27 -15 -56 -26 -64
-24 -8 2 -40 41 -73 88 -91 132 -173 185 -287 184 -87 -1 -236 -96 -327 -209
-28 -36 -55 -65 -59 -65 -4 0 -17 15 -28 34 -27 43 -84 82 -143 96 -38 10 -56
9 -101 -4 -60 -17 -162 -87 -190 -129 -10 -15 -21 -27 -25 -27 -11 0 -107 167
-131 226 -11 28 -24 84 -30 125 -6 41 -15 90 -21 109 -15 52 -81 141 -129 175
-38 27 -51 30 -114 30 -109 0 -178 -35 -242 -123 -32 -44 -36 -47 -126 -69
l-93 -23 -33 26 c-19 14 -58 61 -89 104 -71 102 -173 196 -228 211 -48 13
-135 5 -181 -17 -48 -22 -225 -184 -263 -241 -19 -26 -73 -109 -122 -183 -144
-223 -289 -370 -362 -370 -42 0 -362 94 -416 122 -13 7 -53 56 -89 110 -106
157 -163 182 -337 149 -205 -39 -253 -105 -228 -316 12 -103 5 -117 -36 -70
-40 45 -41 75 -4 163 36 88 37 174 3 223 -13 19 -45 49 -71 67 -120 82 -214
64 -324 -63 -58 -67 -116 -95 -197 -95 l-59 0 0 43 c0 23 9 60 20 82 29 57 25
115 -16 243 -42 127 -69 165 -134 182 -40 11 -78 7 -116 -12 -16 -7 -28 -6
-45 5 -13 8 -35 17 -49 21 -15 3 -35 22 -49 45 -29 47 -138 141 -184 158 -17
7 -48 10 -67 7 -31 -4 -37 -1 -55 26 -29 46 -97 89 -161 103 -37 8 -69 22 -95
45 -41 36 -84 52 -136 52 -39 0 -78 31 -127 102 -20 29 -57 66 -82 82 -42 26
-57 29 -178 37 l-134 9 -73 44 c-49 29 -100 50 -149 61 -41 9 -98 25 -125 36
-28 10 -57 19 -66 19 -18 0 -88 72 -117 121 -12 19 -37 44 -57 55 -24 13 -38
29 -44 51 -6 21 -43 66 -104 127 -52 52 -113 119 -136 149 -47 64 -118 125
-158 136 -29 8 -33 16 -53 98 -8 30 -27 60 -68 102 -55 57 -59 59 -130 71 -40
7 -76 9 -79 6 -3 -3 -15 12 -25 34 -20 39 -71 80 -100 80 -11 0 -17 15 -22 47
-8 61 -74 172 -117 197 -19 11 -59 21 -98 24 l-66 4 -55 81 c-67 99 -94 120
-154 121 -34 1 -46 5 -46 16 0 8 -25 53 -55 99 -30 46 -55 91 -55 99 0 8 -13
37 -30 63 -16 27 -32 61 -36 76 -7 28 -10 36 -55 127 -33 66 -140 173 -187
186 -20 5 -73 13 -117 16 -57 5 -92 13 -122 30 -23 13 -51 24 -62 24 -15 0
-23 10 -31 43 -34 131 -40 143 -104 218 -76 89 -94 102 -170 124 -68 20 -78
38 -64 110 19 95 6 119 -177 312 -125 132 -181 162 -315 167 -61 3 -73 8 -170
66 -116 70 -156 83 -215 70 -26 -6 -42 -5 -46 1 -3 6 -9 48 -13 93 -6 80 -58
291 -77 310 -5 6 -9 29 -9 53 0 46 -31 150 -56 188 -14 22 -14 26 4 52 34 48
45 120 30 189 -12 49 -12 66 -1 104 26 88 -2 152 -92 209 -33 21 -100 73 -150
116 -174 150 -159 130 -173 228 -13 98 -32 139 -78 168 -19 12 -34 30 -37 48
-13 63 -71 97 -231 135 -42 9 -53 17 -77 56 -32 52 -50 64 -174 115 -49 20
-96 42 -103 47 -9 8 -11 31 -6 87 4 55 2 89 -9 121 -8 25 -18 66 -22 92 -7 51
-49 113 -121 178 -92 83 -217 219 -250 272 -20 32 -39 58 -43 58 -4 0 -33 22
-63 48 -31 27 -71 59 -90 70 l-35 22 15 45 c12 37 12 53 2 88 -24 84 -23 92 4
122 15 16 29 40 33 54 3 14 10 31 15 38 17 22 28 78 22 115 -4 26 -30 69 -79
134 -42 55 -83 122 -95 155 l-22 58 30 43 c37 52 47 98 33 157 -9 41 -8 47 15
68 27 24 67 107 78 160 4 17 2 50 -4 74 -11 41 -10 43 33 108 25 36 48 81 52
98 5 28 13 34 48 44 23 6 67 28 97 49 31 21 79 43 110 50 30 7 73 25 95 40 22
15 69 33 105 40 62 13 130 49 160 85 12 15 27 16 105 10 104 -7 264 14 323 44
20 10 69 28 107 41 73 24 182 82 232 124 16 13 56 40 90 60 79 46 261 237 284
299 9 23 26 58 37 77 30 52 36 99 18 150 -21 59 -20 60 15 98 27 30 42 36 158
61 102 21 136 33 167 57 50 39 195 104 231 104 57 0 102 21 156 73 43 40 56
61 61 92 4 22 17 69 31 105 13 36 38 111 56 168 l32 103 -17 62 c-9 34 -21
109 -26 166 -6 77 -14 111 -28 130 -10 14 -33 47 -51 72 l-33 46 16 47 c9 26
16 55 16 65 0 10 7 25 17 32 29 25 95 120 104 152 17 59 1 106 -56 167 -42 43
-54 64 -60 100 -6 38 -17 54 -66 102 -59 56 -103 78 -160 78 -30 0 -54 23 -63
62 -11 47 -61 84 -168 126 -83 33 -107 47 -129 77 l-28 37 22 29 c15 22 21 44
21 82 0 65 -27 114 -82 145 -36 20 -40 27 -46 72 -9 65 -33 92 -172 189 -105
73 -110 79 -127 131 -10 30 -28 66 -40 79 -47 51 -118 99 -155 106 l-39 6 -12
77 c-8 57 -21 93 -50 142 -35 59 -47 70 -123 112 -45 26 -108 54 -138 63 -30
9 -67 23 -82 31 -15 8 -51 18 -80 21 -29 3 -91 16 -137 29 -46 13 -93 24 -106
24 -20 0 -24 8 -35 63 -6 34 -19 75 -28 90 -18 30 -109 90 -153 100 -22 6 -29
16 -43 71 -10 36 -24 73 -32 83 -7 10 -14 35 -14 56 0 47 -27 181 -45 224 -20
47 -93 116 -156 146 -30 14 -68 40 -85 59 -39 40 -108 178 -119 233 -4 22 -14
53 -23 68 -20 33 -99 85 -156 101 -30 9 -41 18 -47 38 -17 66 -101 140 -196
174 -56 20 -63 30 -98 142 -20 62 -59 104 -119 127 -30 12 -46 24 -50 40 -8
33 -123 133 -165 145 -20 5 -53 10 -75 10 -21 0 -53 9 -70 19 -45 27 -87 34
-138 21 -38 -10 -53 -8 -109 10 -97 33 -180 32 -253 -5 -32 -16 -63 -40 -69
-52 -6 -13 -18 -23 -28 -23 -25 0 -104 -27 -166 -57 -42 -21 -59 -38 -90 -87
-21 -33 -45 -77 -54 -97 -9 -20 -21 -39 -27 -43 -12 -7 -89 85 -108 131 -8 17
-11 45 -8 61 13 66 -11 107 -139 239 -67 69 -146 141 -174 160 -29 18 -53 39
-53 46 0 37 -25 91 -56 121 -35 34 -35 36 -29 89 4 30 4 74 0 96 -9 52 -66
127 -130 169 -26 17 -59 50 -74 74 -15 24 -35 49 -45 57 -33 27 -96 178 -121
290 -24 105 -49 146 -113 185 -32 19 -79 40 -106 47 -67 17 -85 38 -102 122
-21 102 -21 101 -67 149 -24 24 -53 64 -65 90 -13 25 -35 54 -50 64 -15 9 -43
33 -64 54 -31 32 -164 107 -220 124 -10 3 -31 24 -47 47 -34 46 -145 129 -172
129 -10 0 -30 11 -45 25 -14 13 -48 38 -74 55 -42 27 -49 36 -54 74 -9 56
-101 180 -163 219 -24 15 -46 34 -50 43 -3 8 -29 28 -57 44 -28 16 -59 43 -69
59 -9 16 -36 39 -60 50 -33 16 -47 31 -64 69 -18 39 -36 58 -90 94 -66 44 -72
51 -209 269 -124 196 -170 283 -373 704 l-233 480 -269 340 c-149 187 -284
354 -302 372 -18 18 -275 212 -572 431 l-540 398 -332 410 c-182 225 -332 411
-332 414 -1 3 28 14 63 23 51 13 108 17 272 17 l207 0 251 -70 c246 -68 255
-70 453 -85 233 -18 260 -15 315 42 77 81 146 182 153 224 8 47 -3 277 -15
319 -4 16 -34 63 -67 106 l-58 77 0 92 c0 106 -7 120 -116 231 -65 67 -100 84
-175 84 l-42 0 1 78 c0 66 -8 103 -56 260 -37 123 -63 192 -79 209 -26 28
-506 427 -553 460 -16 11 -174 98 -350 193 -293 157 -330 180 -435 269 -208
175 -187 169 -395 107 l-150 -46 -95 -99 c-89 -94 -100 -102 -170 -127 -96
-34 -113 -47 -206 -152 -112 -127 -283 -300 -329 -332 -38 -26 -44 -27 -110
-20 -38 4 -104 17 -145 30 -99 30 -130 21 -230 -62 -98 -83 -193 -219 -250
-358 -24 -58 -49 -111 -56 -119 -8 -9 -117 -29 -311 -56 -164 -24 -378 -57
-477 -74 l-179 -31 -131 -80 -131 -80 -59 -95 c-32 -52 -62 -97 -66 -100 -11
-7 -241 12 -395 32 l-130 17 -43 45 c-29 30 -64 87 -107 178 -72 148 -62 101
-110 513 -33 280 -45 294 -276 335 -170 29 -355 93 -549 190 -88 44 -240 83
-405 104 -92 12 -363 103 -452 152 -77 43 -95 60 -161 154 -143 204 -204 276
-295 349 -97 78 -412 392 -611 609 -64 70 -168 174 -229 231 -96 88 -161 157
-214 227 -7 8 -22 73 -33 145 -22 134 -29 151 -90 218 -50 55 -58 101 -64 366
-3 118 -9 243 -15 277 -6 34 -42 151 -80 260 -39 109 -77 239 -86 288 -13 74
-23 101 -57 150 -52 76 -109 136 -173 183 -27 20 -79 61 -115 92 -36 31 -192
161 -348 289 -253 208 -294 246 -393 364 -104 123 -117 144 -201 317 -88 181
-109 241 -183 520 -31 116 -63 168 -175 284 -138 143 -234 222 -320 263 -41
20 -81 44 -88 55 -8 10 -36 44 -63 75 -27 31 -49 63 -49 72 0 30 -67 155 -96
182 -16 14 -47 38 -69 54 -72 51 -116 99 -147 160 -37 72 -76 123 -184 235
-48 50 -97 113 -119 155 -21 39 -61 98 -88 133 -36 47 -55 84 -71 140 -13 47
-38 99 -61 132 -52 73 -214 267 -255 305 -73 68 -131 154 -175 261 -24 60 -54
121 -65 136 -11 16 -29 41 -41 57 -11 15 -37 79 -56 142 -32 103 -36 130 -43
279 -6 118 -13 182 -27 225 -19 58 -19 63 -3 120 9 33 33 95 53 137 19 43 41
101 47 130 6 31 22 66 38 85 15 17 112 92 215 167 174 126 193 137 260 152 40
9 85 24 100 33 16 9 50 52 77 96 27 44 69 106 94 139 51 65 77 138 75 209 -2
38 5 57 34 104 39 64 63 164 52 222 -3 20 -21 108 -40 196 -49 236 -50 263
-20 405 27 132 30 196 15 351 -18 178 -98 529 -145 634 -12 28 -55 102 -95
165 -45 71 -88 155 -112 219 -49 129 -135 276 -209 356 -67 72 -96 124 -105
193 -5 41 -3 57 14 84 29 48 36 97 22 176 -18 111 -64 165 -259 306 -87 64
-183 138 -213 164 -111 102 -286 210 -383 238 -33 9 -82 29 -110 45 -72 39
-167 66 -286 79 -451 49 -533 66 -617 126 -161 116 -266 181 -346 214 -168 69
-348 150 -410 185 -68 38 -465 190 -524 201 -20 4 -73 20 -117 36 -218 80
-482 117 -735 102 -74 -4 -223 -6 -332 -5 -192 3 -198 3 -285 -25 -75 -24
-104 -28 -198 -28 -96 1 -123 5 -206 33 -166 54 -321 79 -529 84 -214 6 -388
-5 -515 -33 -245 -53 -436 -77 -730 -90 -201 -9 -256 -15 -337 -36 -130 -34
-80 -55 -613 246 -104 59 -230 129 -280 155 -194 104 -732 487 -1057 754 -160
131 -222 205 -283 336 -59 127 -114 183 -210 212 -60 19 -105 23 -307 28 -152
4 -257 12 -290 21 -114 30 -330 5 -597 -71 -69 -19 -136 -35 -150 -35 -14 0
-113 16 -219 35 -199 36 -384 55 -529 55 -81 0 -153 18 -153 38 0 5 -24 25
-52 44 -56 38 -148 64 -190 53 -16 -4 -37 1 -60 14 -23 14 -82 28 -174 42
-135 21 -142 23 -273 90 -196 101 -258 115 -383 85 -48 -11 -71 -25 -135 -81
-139 -122 -291 -207 -390 -219 -57 -7 -51 -12 -115 87 -43 67 -270 275 -343
314 -105 55 -264 67 -392 28 -81 -25 -110 -19 -290 54 -181 74 -291 101 -414
101 -74 0 -173 30 -259 78 -145 81 -349 80 -730 -3 -51 -12 -95 -15 -139 -10
-98 9 -278 42 -354 64 -37 11 -124 27 -195 37 -70 9 -183 31 -252 50 -69 18
-164 38 -211 44 -47 5 -135 21 -195 35 -169 39 -217 33 -324 -36 -83 -53 -132
-72 -303 -114 -78 -20 -155 -41 -172 -48 -16 -6 -64 -43 -105 -82 -41 -39
-111 -101 -155 -139 -44 -38 -129 -118 -190 -178 -95 -92 -131 -120 -260 -197
l-150 -89 -21 23 c-42 45 -141 86 -228 95 -54 5 -103 17 -146 36 -51 22 -80
28 -135 28 -63 0 -96 -10 -330 -94 -160 -57 -280 -106 -311 -127 l-52 -34
-155 50 c-179 58 -271 77 -417 86 -58 4 -142 16 -188 27 -160 39 -241 16 -357
-101 -33 -34 -65 -61 -71 -61 -6 0 -36 11 -65 23 -81 36 -260 76 -389 87 -258
23 -437 55 -730 131 -326 85 -447 122 -534 164 -50 24 -118 49 -151 55 -33 6
-130 24 -215 40 -215 40 -297 46 -395 27 -104 -21 -224 -33 -472 -48 l-201
-12 -63 57 c-97 87 -171 96 -251 29 -29 -24 -48 -33 -62 -29 -23 7 -95 17
-285 41 -175 22 -192 16 -358 -130 -139 -122 -246 -248 -267 -318 -5 -16 -8
-16 -28 -3 -13 8 -53 20 -89 26 -93 16 -131 4 -195 -62 -98 -102 -103 -114
-113 -312 -11 -193 -31 -238 -170 -379 -142 -145 -150 -149 -336 -158 -181 -9
-419 -48 -536 -87 -78 -27 -246 -112 -348 -176 -56 -35 -111 -46 -291 -55
l-155 -8 -83 -42 c-139 -70 -219 -159 -228 -253 -9 -94 -10 -96 -53 -103 -92
-15 -242 -169 -258 -265 -4 -25 -7 -111 -6 -191 l2 -146 -37 -11 c-96 -28
-168 -35 -300 -29 -160 6 -209 21 -381 116 -105 58 -466 203 -612 246 -103 31
-274 143 -449 295 -95 83 -208 155 -297 191 -43 17 -168 59 -278 94 -110 35
-281 88 -380 120 -99 31 -245 75 -325 96 -80 22 -192 59 -250 83 -163 67 -212
83 -400 126 -199 46 -279 76 -540 202 -195 94 -341 156 -425 178 -39 11 -67
30 -130 89 -101 96 -174 132 -337 169 -165 37 -180 49 -232 179 -44 109 -78
165 -128 209 -42 37 -81 143 -98 264 -6 47 -34 175 -62 285 -67 268 -88 389
-88 515 -1 203 -30 304 -126 423 -54 68 -252 205 -399 277 -65 32 -110 64
-163 114 -64 61 -81 85 -133 190 -102 208 -142 245 -325 306 -92 31 -134 53
-134 71 0 6 -27 69 -60 141 -60 130 -134 245 -218 339 -66 74 -75 108 -77 299
-1 91 -7 180 -13 197 -21 64 -171 252 -387 486 -399 432 -469 514 -503 592
-61 139 -54 195 43 372 45 81 57 114 70 192 20 118 8 297 -33 474 -25 112 -30
122 -89 202 -58 78 -73 92 -225 193 -306 204 -477 375 -507 506 -21 93 -17
173 15 242 44 98 45 111 29 222 -15 98 -18 107 -69 180 -29 42 -95 155 -146
251 -72 137 -104 209 -146 340 -90 277 -95 376 -23 536 40 89 42 91 117 140
74 48 234 192 273 247 12 16 23 58 30 105 8 65 7 99 -10 208 -19 122 -24 139
-90 277 -88 185 -215 377 -274 415 -23 15 -157 109 -297 209 -401 286 -496
333 -1102 539 -115 39 -205 75 -234 96 -26 17 -84 53 -130 78 -92 51 -242 184
-436 387 -98 101 -128 140 -181 235 -97 174 -224 369 -270 417 -23 24 -85 78
-137 120 -138 112 -234 206 -401 394 -103 115 -178 190 -244 240 -52 40 -91
76 -87 80 5 5 105 26 223 48 159 30 279 60 470 119 l255 78 165 109 164 109
61 98 c74 119 94 196 140 539 l17 127 84 118 c92 128 160 244 232 393 l45 95
1 115 c0 94 -3 121 -18 143 -79 121 -92 178 -90 408 l1 176 78 144 c42 79 96
169 119 199 23 30 80 114 127 185 71 107 88 141 99 195 10 53 24 80 70 142 70
95 128 202 208 383 56 128 67 147 127 205 99 98 101 103 124 245 18 110 21
192 27 594 l6 466 26 85 c44 139 112 226 305 389 320 272 324 276 395 402 116
207 154 263 233 345 72 75 84 83 144 99 81 22 134 16 180 -22 19 -15 55 -44
79 -63 76 -60 532 -305 680 -365 133 -53 151 -58 345 -86 113 -16 218 -27 235
-23 64 13 345 232 345 268 0 5 6 22 14 39 7 18 24 61 36 97 22 63 77 173 128
254 33 54 69 178 92 326 11 69 20 128 20 132 0 4 73 94 163 200 89 106 172
207 183 223 12 17 43 82 69 145 51 125 104 206 302 461 66 86 149 179 199 225
60 54 108 111 155 181 89 132 304 589 355 751 52 168 122 339 213 520 75 149
81 167 106 298 30 157 39 182 225 588 128 281 135 293 250 450 83 113 145 186
208 243 122 112 141 117 395 108 117 -4 243 -15 322 -28 72 -12 157 -21 190
-21 59 0 65 2 208 91 124 77 175 118 329 260 101 92 215 200 254 239 70 69 72
71 85 145 20 110 17 160 -11 200 -51 73 -173 211 -239 269 -60 53 -73 72 -100
138 -17 42 -40 124 -52 182 -19 97 -25 111 -78 185 -73 102 -127 197 -233 410
-90 181 -98 205 -124 413 -13 112 -13 132 1 209 18 96 34 126 139 258 102 128
113 146 127 198 10 41 25 59 113 140 55 51 156 135 223 185 148 111 223 198
298 342 31 58 86 145 124 194 57 73 72 101 88 160 16 62 27 81 88 152 337 390
472 543 554 629 131 136 280 337 310 417 37 98 82 152 185 220 86 59 101 65
309 125 133 38 288 75 395 93 97 17 280 58 406 91 222 58 232 62 368 137 76
42 205 126 286 186 147 110 378 252 657 405 250 138 449 290 544 417 25 33 65
85 88 115 28 36 67 113 113 225 38 93 70 172 70 175 0 3 67 137 150 297 139
272 152 300 190 442 l41 151 -10 106 c-14 141 -14 572 0 670 17 117 72 214
199 350 21 24 56 73 76 110 20 38 51 91 69 118 18 28 38 73 45 101 10 47 9 61
-20 167 -41 148 -83 209 -206 299 -198 145 -208 153 -233 201 -43 79 -188 158
-263 142 l-30 -7 9 49 c15 87 10 226 -9 255 -9 14 -14 34 -12 45 14 51 -15
102 -107 192 l-89 88 0 59 c-1 32 -7 77 -15 99 -8 22 -15 54 -15 70 0 17 -5
46 -10 65 -8 28 -6 48 11 103 20 61 20 73 9 129 -20 104 -70 187 -181 303 -27
28 -55 70 -64 94 -8 25 -27 65 -40 89 l-25 44 39 37 c21 20 58 52 83 73 24 20
62 63 84 96 21 33 54 68 72 78 39 21 98 113 107 169 4 22 16 68 27 101 18 55
19 68 8 120 -6 33 -18 69 -26 81 -9 14 -12 33 -8 50 7 30 59 107 94 138 12 11
38 49 58 85 19 36 49 82 65 103 16 20 51 99 79 174 42 116 57 145 99 192 150
168 169 248 83 358 -24 31 -44 61 -44 67 0 7 -27 59 -59 118 -57 101 -111 236
-111 275 0 11 17 29 41 43 57 35 81 79 87 159 4 66 5 68 44 92 55 34 79 78 85
154 5 61 7 63 36 69 57 11 114 53 136 99 12 24 32 54 46 67 28 26 50 91 41
123 -6 23 23 84 69 144 43 56 82 241 65 305 -8 29 -8 53 -1 87 6 25 13 135 16
245 3 152 7 202 18 215 29 33 100 208 113 281 18 93 28 136 53 225 11 39 20
95 20 126 1 79 25 146 71 204 67 82 174 228 197 265 23 38 58 191 50 221 -5
20 27 105 61 159 12 19 22 38 22 42 0 4 29 40 65 80 50 55 70 86 82 127 17 61
13 123 -13 173 -42 81 -74 404 -49 488 7 25 16 57 19 72 4 17 22 36 51 55 56
35 108 110 130 186 14 49 15 66 5 107 -11 44 -10 53 8 82 23 38 42 120 42 182
l0 43 62 18 c121 34 214 122 249 235 18 59 19 78 11 112 -10 40 -10 43 31 88
67 76 159 218 179 278 18 57 61 122 79 122 14 0 88 52 146 102 27 23 77 54
113 70 107 48 124 57 179 99 34 26 70 43 102 49 83 16 166 39 216 61 28 12 74
22 109 23 81 3 122 29 162 103 16 32 36 78 42 103 10 37 30 63 121 151 60 59
109 112 109 119 0 6 35 48 78 93 43 45 83 89 88 98 5 8 26 25 46 38 23 14 45
39 60 69 16 33 34 53 58 65 20 9 65 40 100 70 79 65 104 74 201 80 52 2 90 11
115 24 22 12 66 35 99 53 65 34 64 34 210 9 38 -6 90 -9 115 -6 46 6 234 84
280 117 15 10 69 37 121 60 133 59 282 168 314 231 10 18 26 30 47 34 28 7
168 81 244 131 16 11 61 19 137 25 165 12 216 32 284 115 29 36 40 63 55 127
9 45 18 107 18 138 0 51 5 63 64 153 35 54 67 113 70 131 4 20 0 59 -8 93 -9
32 -15 83 -15 113 1 30 -2 87 -6 126 -6 54 -4 88 8 130 20 75 30 229 18 270
-8 28 -5 41 17 80 26 46 27 53 26 198 -1 229 -23 279 -163 385 l-33 25 17 53
c32 97 9 169 -85 267 -32 33 -60 72 -64 86 -3 14 -1 54 5 88 15 94 -6 155 -76
225 -91 92 -212 136 -372 136 -72 0 -73 0 -89 33 -46 89 -122 146 -222 167
l-74 15 -19 49 c-29 77 -66 123 -149 181 l-78 54 2 123 c2 68 -1 136 -5 152
-5 16 -18 80 -29 142 -23 128 -47 191 -96 250 -41 51 -86 80 -137 89 -22 4
-41 15 -44 24 -15 40 -178 391 -201 431 -75 129 -146 206 -283 302 -61 44
-249 230 -249 248 0 5 16 32 35 61 42 64 52 123 36 204 -24 117 -106 210 -216
245 -60 19 -104 47 -170 110 -33 32 -87 77 -120 100 -33 24 -128 110 -211 193
-125 123 -158 163 -192 226 -94 175 -97 344 -10 455 22 27 63 97 91 155 48 97
52 112 52 176 0 52 -5 78 -18 99 l-18 27 39 43 c22 24 42 52 46 62 3 11 19 27
35 37 36 21 75 100 93 185 11 58 10 70 -16 177 -17 69 -25 123 -21 136 4 13
37 55 74 93 36 39 92 101 125 138 32 38 87 88 122 113 105 75 142 131 189 285
l22 75 58 7 c138 18 211 133 171 271 -9 30 -16 82 -16 115 l0 60 48 31 c48 31
84 76 97 121 4 14 22 41 40 60 66 71 83 133 59 216 -23 82 -20 116 15 155 39
43 89 145 103 212 14 66 -12 281 -39 328 -66 112 -236 90 -386 -49 l-63 -59
-84 -6 c-47 -4 -98 -11 -115 -15 -18 -5 -43 -4 -65 4 -19 7 -71 17 -114 23
-44 6 -108 20 -144 31 -35 11 -78 20 -96 20 -17 0 -53 7 -80 15 -32 10 -91 15
-167 15 l-118 0 -120 84 c-170 120 -269 194 -320 238 -66 57 -145 91 -220 94
-58 2 -67 6 -111 43 -45 38 -175 123 -245 160 -20 11 -55 16 -105 15 -70 0
-81 -3 -159 -46 -73 -40 -88 -45 -115 -37 -17 5 -44 9 -61 9 -67 0 -174 54
-398 199 -46 29 -111 62 -147 72 -71 21 -105 19 -204 -12 -32 -11 -82 -19
-110 -19 -28 0 -78 -5 -111 -11 -33 -6 -118 -14 -190 -19 -175 -12 -289 -26
-315 -40 -12 -6 -40 -28 -62 -48 l-39 -35 -52 13 c-29 7 -68 24 -88 37 -83 55
-203 54 -315 -3 -51 -26 -52 -26 -150 -14 -54 7 -150 27 -211 46 -62 18 -143
38 -180 44 -95 16 -553 23 -601 10 -34 -9 -49 -6 -126 24 -48 19 -118 53 -154
75 -82 49 -126 65 -240 86 -98 18 -121 15 -282 -40 -70 -24 -79 -25 -155 -14
-64 9 -193 50 -306 97 -14 6 -5 64 72 462 48 250 93 475 99 500 6 25 78 370
160 768 l149 723 125 342 c69 188 141 393 161 455 30 93 39 112 53 108 9 -3
96 -12 192 -21 220 -19 358 -10 423 28 41 24 163 42 242 36 97 -9 162 -1 217
23 31 14 65 35 76 46 11 11 29 23 39 26 11 4 35 20 53 36 19 17 40 30 48 30
28 0 78 39 99 77 l22 38 108 -7 c123 -8 261 9 337 42 31 13 76 21 133 24 l86
3 39 -38 c46 -45 88 -59 174 -59 53 0 68 -5 125 -40 110 -70 143 -81 258 -91
58 -5 149 -16 201 -25 111 -18 165 -12 211 22 40 29 115 52 279 84 25 5 59 12
76 15 26 6 37 1 77 -33 55 -47 105 -59 178 -42 l49 12 48 -43 c26 -24 60 -59
76 -77 17 -19 54 -47 83 -64 39 -22 58 -41 75 -74 36 -73 141 -124 329 -160
99 -19 150 -13 202 23 32 23 44 25 92 20 62 -6 162 -48 171 -71 12 -32 120
-82 317 -147 80 -26 103 -24 226 17 118 39 142 38 246 -11 28 -13 70 -28 95
-35 25 -6 101 -39 170 -73 105 -51 135 -62 190 -65 51 -4 71 -10 100 -32 45
-36 97 -50 185 -50 136 0 294 -38 369 -88 48 -33 125 -36 173 -7 24 14 83 97
214 300 100 154 464 713 808 1243 344 529 636 982 649 1005 13 23 98 177 188
342 91 165 169 307 174 315 5 8 22 38 38 65 16 28 93 145 170 261 174 262 446
712 622 1029 73 132 208 366 300 520 224 376 296 506 478 865 85 168 185 359
223 426 38 66 89 165 115 220 25 54 57 114 70 132 32 42 252 520 314 682 88
230 111 316 109 395 -2 58 3 83 28 145 25 59 106 206 126 226 2 2 39 -3 83
-12 43 -8 138 -20 209 -25 195 -14 289 -24 302 -32 6 -4 72 -16 147 -27 75
-10 142 -23 148 -26 7 -4 116 -11 243 -15 256 -8 227 -3 595 -118 232 -73 269
-86 415 -146 72 -30 173 -70 225 -90 103 -40 507 -236 555 -269 16 -11 70 -43
120 -70 162 -88 348 -188 430 -230 75 -39 119 -67 208 -135 20 -16 61 -35 90
-41 51 -12 123 -57 162 -100 11 -12 62 -52 113 -89 52 -36 122 -86 157 -111
35 -25 101 -79 147 -121 46 -42 103 -89 128 -106 25 -17 59 -45 75 -63 17 -18
63 -55 103 -82 41 -27 97 -71 126 -96 149 -134 252 -202 369 -246 54 -20 119
-52 145 -70 26 -19 96 -59 155 -90 130 -67 167 -95 319 -245 109 -107 120
-121 139 -181 37 -111 157 -261 275 -342 91 -63 426 -77 511 -22 12 8 44 14
70 14 68 0 165 25 258 65 44 19 136 48 204 64 144 34 219 75 266 143 19 27 47
52 75 65 122 58 198 113 232 165 43 65 183 169 249 183 18 4 40 11 49 15 8 4
42 13 74 19 35 6 85 26 120 47 50 30 72 37 122 39 50 2 72 8 120 38 55 33 94
78 94 109 0 8 36 24 91 42 50 15 112 43 139 61 27 18 67 36 89 40 21 3 54 18
73 31 18 14 47 31 63 39 17 7 64 40 105 74 41 33 108 76 149 96 40 20 92 48
115 63 22 15 84 49 136 75 77 38 114 50 195 62 158 24 221 14 395 -60 248
-106 430 -237 563 -405 28 -36 83 -99 123 -141 104 -111 154 -192 307 -500
141 -284 136 -270 276 -712 27 -86 62 -167 106 -247 36 -65 65 -122 65 -126 0
-27 118 -286 150 -329 12 -17 110 -273 110 -289 0 -14 6 -27 49 -113 20 -38
81 -234 81 -259 0 -6 32 -67 71 -135 94 -163 95 -166 139 -364 40 -183 70
-275 123 -382 45 -90 232 -428 259 -467 57 -81 346 -387 395 -417 18 -11 63
-24 105 -29 40 -4 114 -18 163 -30 50 -13 118 -23 152 -24 55 -1 67 3 109 33
36 25 68 37 129 48 44 8 130 29 190 45 104 29 117 30 225 24 63 -4 135 -14
160 -22 63 -22 254 -37 310 -25 103 22 126 25 310 34 46 2 76 9 102 25 28 18
44 21 80 16 53 -7 155 19 291 75 51 21 113 41 139 45 31 5 62 19 93 43 26 20
67 42 91 49 58 17 122 62 214 149 41 39 109 96 150 127 41 30 95 77 120 103
69 72 107 92 212 111 163 28 563 6 612 -35 21 -18 98 -24 143 -12 35 10 53 9
99 -5 30 -9 65 -14 76 -11 13 4 37 -6 66 -28 26 -18 65 -40 86 -49 65 -27 248
-146 298 -195 51 -48 114 -146 198 -306 80 -151 120 -199 182 -216 46 -12 90
-5 134 22 32 19 89 115 225 374 40 77 87 158 104 180 51 64 85 131 91 177 8
56 -29 243 -61 306 -13 26 -36 74 -50 107 -57 126 -68 146 -86 156 -26 13 -62
87 -56 113 3 11 13 41 22 66 13 36 15 63 10 134 -4 49 -11 103 -16 120 -16 54
22 147 92 229 34 39 73 77 88 85 51 27 89 62 127 119 21 32 59 86 85 121 26
35 51 78 54 95 9 42 18 52 90 99 68 46 89 67 114 118 9 19 38 56 64 82 51 53
92 124 102 181 4 20 22 58 41 84 19 26 34 52 34 58 0 5 16 59 35 118 38 117
44 186 21 250 l-14 38 64 73 c58 67 70 76 146 104 46 18 120 43 165 57 85 27
161 71 228 136 39 37 43 38 195 64 279 46 348 66 416 117 17 12 63 47 102 76
39 29 79 63 89 76 31 41 165 199 214 253 26 29 68 87 93 130 26 43 67 111 93
152 62 99 176 451 196 603 9 64 22 119 36 146 29 58 42 178 35 327 -4 76 -2
135 5 161 8 29 8 91 0 225 -5 101 -12 240 -15 309 l-6 125 36 60 c60 100 69
126 72 201 3 82 18 121 71 186 114 140 211 270 226 306 7 15 19 38 28 52 9 14
24 55 34 92 17 66 20 69 114 151 80 69 110 104 178 208 98 150 135 195 169
203 45 12 283 177 322 223 20 25 57 55 82 68 75 38 140 92 306 255 170 165
245 268 277 376 8 29 34 103 57 165 23 63 50 150 60 194 54 241 71 307 83 327
8 13 23 48 32 78 10 30 22 61 28 68 9 11 40 140 88 362 30 137 23 213 -25 282
-26 39 -36 64 -36 93 -1 101 -47 226 -117 317 -42 55 -49 73 -76 187 -33 140
-40 277 -18 368 10 38 10 60 1 89 -6 22 -15 89 -19 149 -9 121 -31 187 -76
229 l-25 24 20 105 c12 60 18 118 14 134 -13 54 -56 125 -97 163 -23 21 -62
56 -86 77 l-44 40 -2 74 c-1 44 -8 86 -17 103 -12 22 -13 38 -5 67 15 60 1
120 -45 188 -22 34 -44 61 -49 61 -4 0 -17 30 -29 68 -35 104 -161 301 -238
369 l-36 31 -12 127 c-11 110 -17 136 -47 198 -19 40 -44 105 -56 145 -20 66
-28 78 -91 139 -39 37 -70 72 -70 78 0 34 -34 118 -64 157 -22 29 -31 49 -26
59 4 8 15 50 24 95 20 97 10 167 -34 229 -24 34 -27 48 -23 85 3 29 -1 62 -12
90 -9 25 -22 69 -29 97 -7 29 -19 60 -26 68 -9 11 -11 35 -7 83 5 45 2 85 -8
122 l-14 55 55 83 c133 199 155 265 193 570 12 89 21 164 21 165 0 1 25 28 55
59 30 32 66 79 80 105 14 26 36 64 48 83 21 33 22 48 24 230 1 177 4 205 27
287 45 158 57 215 66 311 5 61 13 98 23 105 8 7 35 44 60 82 26 39 59 88 75
110 16 22 51 83 78 134 l49 94 0 151 c0 139 -2 155 -23 194 -13 24 -24 57 -24
72 -2 48 24 122 65 189 21 35 43 76 48 90 6 14 24 56 42 93 28 60 35 67 67 73
64 12 141 79 183 160 8 17 23 60 32 95 9 36 37 103 62 150 l45 85 4 138 4 139
41 58 c51 73 60 140 34 240 -10 36 -17 92 -17 125 2 69 -34 267 -54 307 -8 15
-30 43 -48 62 l-35 34 0 163 c0 90 0 187 1 215 2 57 -25 111 -65 133 -18 9
-28 30 -41 81 -20 75 -17 160 10 278 8 36 11 80 8 103 -5 32 -2 46 13 68 12
15 33 52 48 81 53 107 78 138 132 165 66 34 90 71 111 174 16 78 16 82 -6 172
-28 115 -49 150 -109 180 -27 13 -50 25 -52 26 -2 1 7 18 19 38 34 55 37 137
9 226 -12 41 -23 90 -23 109 1 65 28 154 56 184 17 19 39 69 63 145 21 64 44
136 52 161 9 28 12 60 8 85 -6 43 -50 125 -65 125 -17 0 -11 18 16 47 65 69
89 209 53 298 -9 22 -22 67 -28 100 -11 63 -38 108 -120 203 -132 154 -173
182 -268 182 -34 0 -53 8 -97 41 -30 22 -67 59 -82 80 -15 22 -44 53 -63 68
-51 40 -196 106 -267 122 -65 14 -69 18 -84 72 -8 26 -43 71 -123 155 -128
134 -170 165 -253 182 -32 7 -68 19 -80 26 -12 7 -47 20 -79 29 -61 18 -116
65 -183 156 -17 24 -72 96 -120 159 -102 133 -137 201 -146 285 -6 58 -23 128
-84 345 -40 139 -53 168 -117 255 -86 115 -290 247 -495 318 -198 69 -206 73
-247 135 -36 52 -72 80 -125 95 -31 9 -51 25 -76 57 -19 25 -49 54 -68 65 -18
11 -39 32 -45 48 -19 44 -87 106 -132 118 -38 10 -79 5 -128 -15 -10 -5 -20 2
-29 19 -11 20 -11 37 -1 92 11 58 11 78 -3 138 -18 73 -56 149 -80 158 -25 10
-46 108 -46 217 0 144 28 320 51 320 4 0 21 14 38 31 47 47 71 138 71 273 0
160 -13 233 -55 309 -19 35 -35 71 -35 80 0 9 -21 42 -47 74 -58 70 -83 118
-83 155 0 33 -33 127 -90 256 -38 88 -91 170 -149 234 -18 21 -27 45 -32 93
-19 157 -95 206 -336 221 -95 5 -132 12 -191 35 -40 16 -78 29 -86 29 -7 0
-32 14 -56 31 l-43 31 6 82 c4 61 13 102 40 166 55 135 76 183 91 210 17 33
26 70 36 155 4 39 14 89 20 112 11 37 9 51 -14 125 -31 101 -33 159 -6 273 11
47 20 97 20 111 0 15 16 45 40 73 41 48 60 94 60 141 0 80 -51 151 -121 170
-47 13 -122 63 -195 131 -27 25 -66 54 -85 64 -19 10 -35 18 -36 19 -1 1 -9
37 -18 81 -20 97 -40 128 -154 237 -59 57 -112 97 -170 128 -46 25 -108 67
-137 93 -44 41 -56 60 -83 135 -68 190 -137 550 -119 622 16 61 -4 214 -35
276 -37 74 -40 99 -21 181 9 43 13 88 10 106 -4 18 -14 88 -22 157 -30 242
-31 221 10 283 97 153 113 209 92 326 -9 47 -20 126 -26 175 -7 67 -15 98 -34
125 -14 20 -37 83 -51 140 -14 57 -36 124 -49 150 -13 25 -33 84 -44 131 -29
118 -95 274 -137 326 -19 23 -56 55 -82 71 -25 15 -58 40 -72 54 -36 35 -129
102 -171 124 -94 48 -198 127 -216 162 -9 21 -36 65 -59 98 -24 34 -48 78 -53
99 -6 21 -17 46 -25 55 -24 26 -124 221 -151 291 -13 36 -31 78 -40 94 -8 16
-12 34 -9 39 3 5 -3 49 -12 97 -15 75 -24 99 -61 149 -24 34 -44 67 -44 74 0
7 -8 24 -17 37 -14 19 -18 45 -18 111 0 75 -3 90 -25 122 -29 43 -83 82 -127
91 -20 5 -40 20 -54 41 -13 18 -46 47 -74 64 l-51 31 5 72 c2 40 3 100 2 133
0 33 4 81 10 106 21 94 -29 182 -149 259 -64 41 -70 48 -76 86 -4 23 -20 62
-36 87 -36 53 -158 153 -198 162 -19 4 -41 22 -62 51 l-32 46 16 50 c9 28 16
75 16 105 0 48 4 58 35 90 36 37 55 85 55 138 0 17 9 59 21 95 54 174 85 522
56 632 -16 60 -76 173 -139 259 -62 85 -176 197 -227 223 -68 35 -173 150
-188 208 -8 31 -27 60 -58 92 -49 48 -85 63 -188 75 -44 6 -64 14 -87 36 -17
16 -30 35 -30 42 0 34 -47 98 -142 193 -57 56 -119 109 -138 117 -19 8 -53 23
-75 33 -22 10 -60 24 -85 30 -68 17 -130 44 -130 56 0 6 -9 23 -21 38 -12 15
-29 54 -39 86 -20 67 -60 124 -131 190 -45 41 -50 51 -60 109 -10 65 -27 107
-60 150 -29 36 -110 90 -147 97 -23 5 -43 19 -66 50 -93 122 -141 157 -236
175 -55 11 -72 19 -113 58 -26 25 -60 66 -74 91 -15 25 -45 69 -67 98 -22 30
-53 80 -70 112 -137 262 -140 265 -320 445 -298 297 -491 498 -548 570 -31 39
-106 120 -168 180 -66 65 -118 126 -129 151 -24 54 -101 157 -161 216 -34 34
-53 61 -60 91 -11 44 -69 173 -98 217 -22 34 -42 92 -35 103 3 5 -3 49 -12 98
-14 69 -25 99 -50 132 -24 32 -33 56 -38 98 -3 31 -13 72 -22 90 -21 40 -35
143 -38 281 -2 100 -3 105 -40 164 -20 34 -44 64 -51 67 -28 11 -96 108 -96
138 0 15 -7 49 -16 74 -14 42 -14 53 0 113 8 37 27 100 41 139 29 85 33 194 9
258 -33 88 -76 254 -84 328 -5 48 -17 92 -29 113 -12 19 -26 56 -32 82 -7 26
-25 70 -41 97 -16 28 -33 57 -37 65 -5 8 -13 38 -19 65 -14 72 -55 179 -86
223 -14 21 -26 43 -26 48 0 20 -78 115 -118 144 -22 16 -43 33 -46 39 -4 6
-14 50 -22 97 -9 53 -28 112 -48 153 -24 47 -35 86 -40 136 -11 122 -36 217
-71 270 -18 28 -40 64 -49 82 -20 39 -104 160 -116 168 -5 3 -16 29 -25 57 -8
28 -21 61 -28 72 -8 12 -17 39 -21 61 -15 78 -43 112 -146 172 -132 78 -229
145 -269 187 -19 20 -48 40 -64 44 -27 7 -35 20 -77 117 -26 61 -53 135 -60
165 -7 30 -23 83 -35 116 -13 34 -28 99 -34 145 -18 151 -83 335 -155 441 -12
18 -28 48 -35 66 -16 38 -85 112 -121 129 -14 6 -70 24 -125 39 -55 14 -127
40 -160 56 -33 17 -85 39 -115 49 -78 28 -124 77 -176 188 -25 52 -51 102 -58
110 -21 23 -55 118 -50 139 8 29 -65 294 -91 332 -27 39 -49 118 -65 230 -23
163 -105 260 -222 260 -14 0 -49 -5 -78 -12 -85 -20 -168 9 -315 108 -89 60
-46 50 -436 98 -125 16 -203 39 -424 126 -87 34 -152 53 -345 100 -165 40
-229 59 -265 80 -16 10 -59 28 -95 40 -36 12 -69 26 -75 30 -5 5 -34 17 -63
28 -30 12 -84 39 -120 60 -44 27 -94 46 -146 58 -101 21 -187 56 -253 101 -46
31 -62 36 -120 39 -62 2 -71 6 -95 34 -16 16 -28 38 -28 46 0 50 -87 154 -129
154 -6 0 -34 17 -61 39 -27 21 -99 60 -161 86 -92 39 -127 49 -188 52 -55 3
-83 10 -106 26 -48 34 -212 192 -400 388 -64 66 -133 128 -165 146 -53 31
-171 72 -277 96 -56 13 -132 62 -165 107 -11 16 -39 38 -62 49 -35 18 -423
131 -447 131 -18 0 -107 75 -192 164 -68 70 -97 108 -124 166 -19 41 -48 90
-63 110 -15 19 -33 53 -39 75 -6 22 -19 49 -29 60 -24 28 -86 73 -115 84 -18
7 -27 22 -36 56 -23 90 -66 159 -145 231 -41 37 -95 98 -120 134 -31 45 -58
73 -83 85 -47 22 -66 32 -123 64 -85 47 -241 121 -255 121 -18 0 -60 72 -74
126 -6 23 -27 62 -46 87 -19 25 -35 50 -35 56 0 6 -9 28 -21 50 -11 22 -25 70
-30 106 -15 105 -40 135 -179 205 -25 12 -59 30 -77 39 -25 13 -36 27 -48 67
-24 81 -109 154 -182 154 -6 0 -59 50 -117 111 -77 81 -107 120 -112 145 -5
28 -48 107 -117 214 -13 20 -19 56 -23 133 -5 96 -3 109 21 168 16 41 31 106
40 179 10 75 24 139 41 180 27 64 30 96 24 216 -3 55 2 70 49 170 60 126 57
120 96 175 27 39 30 49 30 123 0 75 -3 85 -34 134 -18 28 -36 52 -40 52 -13 0
-30 98 -36 200 -8 120 -31 238 -54 270 -10 14 -21 45 -25 70 -10 66 -41 105
-133 166 -105 71 -108 79 -108 309 -1 148 -4 179 -23 240 -26 81 -41 105 -92
154 -45 42 -60 107 -42 175 6 23 20 75 32 116 15 55 23 130 31 285 6 115 13
242 15 280 4 51 1 83 -11 115 -45 126 -48 142 -35 207 16 85 -4 162 -58 219
-23 24 -52 117 -52 164 0 48 57 206 91 253 16 22 40 76 54 120 14 43 39 98 55
121 19 27 36 72 50 129 11 49 27 101 35 117 38 74 23 186 -35 249 -40 43 -56
92 -75 227 -15 110 -46 228 -91 342 -13 34 -24 68 -24 74 0 6 -9 30 -19 52
-15 31 -20 69 -23 161 -4 108 -8 131 -43 230 -54 156 -97 242 -161 322 -63 79
-123 249 -124 347 0 62 -64 306 -95 366 -13 25 -29 64 -35 87 -6 26 -46 89
-106 170 -53 70 -102 142 -109 160 -22 53 -94 141 -147 178 -27 20 -57 50 -66
66 -17 32 -79 130 -114 184 -11 17 -38 43 -59 58 -21 15 -55 51 -74 80 -20 29
-51 71 -69 94 -25 31 -35 55 -41 98 -4 31 -14 80 -23 109 -11 36 -16 93 -16
192 -1 133 -2 142 -27 180 -14 21 -40 93 -58 159 -18 66 -43 138 -56 160 -49
80 -88 172 -106 249 -22 91 -46 134 -86 158 -29 17 -44 62 -89 266 -18 82 -4
201 31 252 49 72 42 159 -23 300 -19 41 -47 106 -63 143 -58 138 -155 233
-273 267 -117 33 -257 101 -312 151 -53 48 -158 114 -229 143 -22 10 -62 31
-89 49 -41 26 -59 31 -110 32 -34 0 -75 -4 -92 -8 -30 -8 -37 -3 -139 90 -59
54 -126 112 -149 128 -63 44 -433 404 -458 445 -12 19 -42 58 -67 86 -25 29
-62 73 -81 99 -19 26 -41 55 -48 65 -10 14 -10 27 -1 66 7 27 18 58 25 69 6
11 15 36 19 55 4 19 22 61 41 92 30 49 37 74 49 165 8 60 15 137 15 172 0 106
-39 317 -71 377 -11 22 -31 72 -44 112 -25 78 -63 150 -90 172 -9 8 -30 40
-46 71 -16 32 -44 73 -64 92 -31 31 -35 39 -35 88 0 30 -5 83 -11 119 -6 36
-14 108 -19 160 -5 52 -14 113 -20 134 -15 51 -111 151 -212 223 -43 30 -78
62 -78 71 0 28 -51 90 -99 121 -49 32 -147 61 -203 61 -64 0 -125 94 -157 240
-13 58 -30 118 -38 134 -24 47 -41 109 -84 311 -6 27 -17 61 -24 75 -14 27
-112 129 -263 272 -157 150 -272 308 -272 374 0 6 -15 32 -34 59 l-35 48 20
27 c42 56 35 182 -17 295 -16 36 -26 82 -33 164 -10 123 -2 104 -102 236 -33
43 -33 71 -3 164 28 83 29 154 5 226 -17 51 -21 77 -16 118 5 36 2 66 -9 97
-26 74 -31 167 -12 249 14 60 15 83 5 131 l-11 58 45 55 c49 60 60 97 53 184
-3 40 -13 67 -45 115 -52 80 -52 86 -1 283 13 51 24 142 31 251 9 151 8 175
-6 215 -10 24 -26 68 -37 98 -10 29 -27 65 -38 80 -10 14 -24 53 -30 87 -5 33
-25 92 -44 130 -22 46 -39 102 -50 167 -25 146 -70 250 -121 277 -57 30 -103
140 -94 220 11 98 -7 147 -78 216 -37 37 -44 48 -39 71 3 16 10 96 15 178 6
83 15 182 22 220 11 68 10 73 -24 180 -33 104 -34 111 -18 134 11 17 16 47 16
91 -1 60 -5 73 -54 160 -68 122 -109 187 -158 253 -22 29 -44 64 -48 77 -10
34 -42 87 -81 136 -22 27 -35 57 -39 85 -16 120 -39 217 -57 244 -11 17 -40
46 -64 65 -24 19 -44 38 -44 42 0 4 -29 42 -63 85 -59 72 -64 83 -72 143 -8
71 -9 95 -4 215 3 75 1 84 -30 140 -30 55 -32 66 -28 125 2 36 0 100 -5 142
-7 51 -6 109 0 170 9 81 16 102 51 163 54 94 66 172 46 308 -9 54 -12 109 -9
122 17 66 -64 215 -171 315 -55 52 -96 115 -111 174 -8 28 -16 123 -19 211 -9
249 -39 380 -117 502 -85 133 -111 176 -129 214 -9 20 -55 89 -101 155 -63 87
-89 133 -98 171 -6 29 -21 64 -31 77 -24 31 -24 33 5 70 35 47 71 123 91 196
9 36 30 90 45 120 15 30 42 83 59 117 42 82 65 191 56 263 -4 30 -6 72 -6 93
2 65 -18 114 -78 189 -68 85 -91 133 -91 195 0 50 -27 135 -76 243 -19 41 -42
104 -50 141 -8 37 -26 81 -39 99 -27 37 -27 42 12 190 26 97 27 136 7 319 -7
59 7 142 38 236 15 45 18 74 14 115 l-6 55 172 52 c95 29 210 62 255 73 45 11
146 40 225 64 79 25 168 51 198 60 30 8 108 30 173 49 l117 33 50 -48 c27 -26
61 -50 74 -54 19 -4 29 -18 42 -57 9 -29 37 -91 62 -139 42 -82 50 -91 111
-127 36 -22 87 -49 113 -61 28 -12 75 -49 115 -89 76 -77 116 -92 190 -72 86
23 137 110 150 254 7 79 -13 70 203 92 85 9 164 18 176 20 19 4 24 -6 52 -98
17 -56 37 -122 44 -147 25 -95 100 -175 173 -186 89 -13 122 0 256 97 68 50
158 108 199 130 41 21 113 60 160 87 74 43 88 48 115 40 16 -5 66 -13 110 -18
44 -5 126 -16 182 -25 99 -15 106 -15 182 5 44 11 121 36 173 56 51 20 170 60
265 89 167 52 175 55 293 136 66 46 137 93 157 104 20 11 88 67 151 125 62 58
121 108 130 112 10 4 41 7 71 7 46 1 65 -6 142 -49 211 -119 316 -141 503
-106 41 8 148 20 238 26 90 6 208 19 263 30 147 28 426 44 553 31 88 -9 122
-19 235 -65 253 -103 303 -111 378 -60 33 23 129 149 129 170 0 6 74 86 164
179 154 161 169 173 267 226 57 31 133 68 169 83 142 59 271 187 285 281 l7
43 56 10 c32 6 111 18 177 27 110 15 364 87 460 130 17 8 31 14 33 14 2 1 32
-19 66 -44z m51176 -190050 c-36 -37 -80 -57 -99 -46 -7 5 16 22 56 43 38 19
70 36 72 37 3 0 -10 -15 -29 -34z"/>
<path d="M39021 198940 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z"/>
<path d="M51081 198940 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z"/>
<path d="M38335 198929 c-197 -38 -194 -32 -73 -166 167 -182 169 -190 175
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
<path d="M47578 198910 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
<path d="M35430 197933 c-71 -9 -224 -64 -308 -109 -64 -35 -109 -70 -177
-139 -107 -106 -165 -203 -216 -360 -32 -95 -33 -107 -33 -255 0 -148 1 -160
33 -255 51 -157 109 -254 216 -360 106 -107 207 -168 362 -218 93 -30 106 -31
253 -31 142 0 163 2 245 28 298 93 501 295 588 586 67 221 44 451 -66 664
-103 200 -280 344 -510 418 -77 24 -113 29 -222 32 -71 3 -146 2 -165 -1z"/>
<path d="M41770 197920 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
<path d="M44710 197921 c-346 -52 -618 -263 -708 -551 -41 -130 -37 -261 10
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
<path d="M49760 197921 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M54070 197921 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M125885 195251 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
<path d="M133565 195251 c-303 -40 -531 -225 -616 -501 -20 -65 -23 -96 -24
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
357 178 22 4 81 6 130 5 71 -2 102 -8 145 -28z"/>
<path d="M128190 194410 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M131950 194410 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M130000 194241 c-346 -52 -618 -263 -708 -551 -41 -130 -37 -261 10
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
<path d="M136990 194241 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M113048 192190 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
<path d="M116775 192211 c-303 -40 -531 -225 -616 -501 -20 -65 -23 -96 -24
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
357 178 22 4 81 6 130 5 71 -2 102 -8 145 -28z"/>
<path d="M138295 191790 c-176 -30 -340 -116 -470 -246 -107 -108 -167 -207
-216 -364 -31 -99 -33 -114 -33 -250 0 -136 2 -151 33 -250 49 -157 109 -256
216 -364 108 -108 210 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 300 95 498 290 588 582 123 395 -61 843 -422 1024 -131 65 -238 92 -381 96
-69 1 -147 -1 -175 -6z"/>
<path d="M109275 191201 c-298 -49 -527 -257 -606 -552 -31 -113 -34 -374 -6
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
<path d="M115140 191203 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M120100 191203 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M122060 191201 c-36 -5 -107 -20 -159 -35 -318 -92 -555 -334 -646
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
<path d="M125500 191201 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M83478 188510 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
<path d="M112605 188480 c-177 -30 -342 -117 -470 -246 -106 -106 -166 -206
-216 -359 -31 -95 -33 -107 -33 -255 0 -148 2 -160 33 -255 50 -153 110 -253
216 -359 107 -108 209 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 180 57 318 146 425 274 142 171 220 424 198 645 -30 295 -208 561 -457 687
-131 65 -238 92 -381 96 -69 1 -147 -1 -175 -6z"/>
<path d="M90790 187690 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M80800 187523 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M85570 187523 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M87520 187520 c-149 -20 -328 -100 -455 -203 -166 -134 -276 -296
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
<path d="M62125 186821 c-303 -40 -531 -225 -616 -501 -20 -65 -23 -96 -24
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
357 178 22 4 81 6 130 5 71 -2 102 -8 145 -28z"/>
<path d="M69015 186821 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
<path d="M117100 186000 c-315 -31 -545 -185 -642 -430 -30 -76 -55 -196 -61
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
<path d="M126605 186001 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
<path d="M136848 185980 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
<path d="M60510 185980 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M67560 185980 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M58570 185811 c-346 -52 -618 -263 -708 -551 -41 -130 -37 -261 10
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
<path d="M65550 185811 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M71600 185811 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M103880 185160 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M125150 185160 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M134180 185160 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M111810 185001 c-328 -39 -570 -289 -570 -586 0 -38 7 -94 14 -123
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
<path d="M105630 184990 c-276 -39 -534 -298 -622 -624 -19 -69 -22 -107 -22
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
18 -279 5z"/>
<path d="M108610 184990 c-149 -20 -328 -100 -455 -203 -166 -134 -276 -296
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
<path d="M114060 184990 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
<path d="M119020 184990 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328
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
<path d="M123130 184991 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M129120 184991 c-36 -5 -107 -20 -159 -35 -318 -92 -555 -334 -646
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
<path d="M132212 184971 l-23 -32 24 -42 c56 -94 133 -140 252 -152 172 -16
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
<path d="M139030 184991 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M88055 184340 c-177 -30 -342 -117 -470 -246 -106 -106 -166 -206
-216 -359 -31 -95 -33 -107 -33 -255 0 -148 2 -160 33 -255 50 -153 110 -253
216 -359 107 -108 209 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 180 57 318 146 425 274 142 171 220 424 198 645 -30 295 -208 561 -457 687
-131 65 -238 92 -381 96 -69 1 -147 -1 -175 -6z"/>
<path d="M57580 182943 c-71 -9 -224 -64 -308 -109 -64 -35 -109 -70 -177
-139 -107 -106 -165 -203 -216 -360 -32 -95 -33 -107 -33 -255 0 -148 1 -160
33 -255 51 -157 109 -254 216 -360 106 -107 207 -168 362 -218 93 -30 106 -31
253 -31 142 0 163 2 245 28 298 93 501 295 588 586 67 221 44 451 -66 664
-103 200 -280 344 -510 418 -77 24 -113 29 -222 32 -71 3 -146 2 -165 -1z"/>
<path d="M138595 182320 c-176 -30 -340 -116 -470 -246 -107 -108 -167 -207
-216 -364 -31 -99 -33 -114 -33 -250 0 -136 2 -151 33 -250 49 -157 109 -256
216 -364 108 -108 210 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 300 95 498 290 588 582 123 395 -61 843 -422 1024 -131 65 -238 92 -381 96
-69 1 -147 -1 -175 -6z"/>
<path d="M88901 182050 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z"/>
<path d="M79687 182022 c-28 -29 -28 -30 -12 -62 25 -48 84 -109 128 -132 26
-13 81 -24 166 -33 180 -20 239 -42 303 -113 80 -88 100 -199 96 -536 l-3
-249 -30 25 c-49 42 -145 85 -230 103 -118 26 -313 16 -452 -24 -314 -90 -540
-329 -625 -661 -27 -104 -30 -131 -31 -285 0 -155 2 -179 28 -280 68 -268 238
-486 464 -599 209 -104 490 -130 689 -62 149 50 257 130 407 299 101 114 145
188 177 295 l23 77 0 800 0 800 -24 94 c-75 297 -249 468 -551 537 -84 20
-144 26 -300 31 l-195 5 -28 -30z m393 -1249 c76 -22 175 -73 238 -123 l52
-42 0 -440 c0 -477 -3 -504 -57 -612 -14 -28 -58 -83 -97 -122 -96 -96 -153
-118 -281 -111 -186 11 -310 107 -399 308 -95 216 -115 599 -42 830 56 178
184 304 336 330 60 10 182 1 250 -18z"/>
<path d="M81650 181200 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M83470 181030 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328
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
<path d="M87580 181031 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M91890 181031 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M78720 179043 c-71 -9 -224 -64 -308 -109 -64 -35 -109 -70 -177
-139 -107 -106 -165 -203 -216 -360 -32 -95 -33 -107 -33 -255 0 -148 1 -160
33 -255 51 -157 109 -254 216 -360 106 -107 207 -168 362 -218 93 -30 106 -31
253 -31 142 0 163 2 245 28 298 93 501 295 588 586 67 221 44 451 -66 664
-103 200 -280 344 -510 418 -77 24 -113 29 -222 32 -71 3 -146 2 -165 -1z"/>
<path d="M99395 177570 c-252 -32 -442 -216 -500 -482 -32 -152 -17 -396 45
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
<path d="M111215 177571 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
<path d="M109760 176730 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M101940 176561 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M104040 176560 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328
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
<path d="M107802 176541 l-23 -32 24 -42 c56 -94 133 -140 252 -152 172 -16
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
<path d="M113800 176561 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M125691 175570 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z"/>
<path d="M122260 175560 c-315 -31 -545 -185 -642 -430 -30 -76 -55 -196 -61
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
<path d="M130625 175559 c-197 -38 -194 -32 -73 -166 167 -182 169 -190 175
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
<path d="M128410 174720 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M124370 174551 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M134680 174551 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M136870 174553 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M138710 174550 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328
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
<path d="M142820 174551 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M132480 174470 c-98 -193 -66 -324 110 -452 19 -15 98 -61 175 -103
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
<path d="M98075 173690 c-177 -30 -342 -117 -470 -246 -106 -106 -166 -206
-216 -359 -31 -95 -33 -107 -33 -255 0 -148 2 -160 33 -255 50 -153 110 -253
216 -359 107 -108 209 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 180 57 318 146 425 274 142 171 220 424 198 645 -30 295 -208 561 -457 687
-131 65 -238 92 -381 96 -69 1 -147 -1 -175 -6z"/>
<path d="M137775 170970 c-176 -30 -340 -116 -470 -246 -107 -108 -167 -207
-216 -364 -31 -99 -33 -114 -33 -250 0 -136 2 -151 33 -250 49 -157 109 -256
216 -364 108 -108 210 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 300 95 498 290 588 582 123 395 -61 843 -422 1024 -131 65 -238 92 -381 96
-69 1 -147 -1 -175 -6z"/>
<path d="M119405 169430 c-177 -30 -342 -117 -470 -246 -106 -106 -166 -206
-216 -359 -31 -95 -33 -107 -33 -255 0 -148 2 -160 33 -255 50 -153 110 -253
216 -359 107 -108 209 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 180 57 318 146 425 274 142 171 220 424 198 645 -30 295 -208 561 -457 687
-131 65 -238 92 -381 96 -69 1 -147 -1 -175 -6z"/>
<path d="M167065 167770 c-252 -32 -442 -216 -500 -482 -32 -152 -17 -396 45
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
<path d="M169520 167770 c-315 -31 -545 -185 -642 -430 -30 -76 -55 -196 -61
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
<path d="M173025 167771 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
<path d="M162420 167671 c-49 -10 -75 -26 -101 -63 -31 -43 -30 -132 4 -263
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
<path d="M101360 167631 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63
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
<path d="M116525 167621 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
<path d="M112490 167521 c-49 -10 -75 -26 -101 -63 -31 -43 -30 -132 4 -263
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
<path d="M100320 166780 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M104240 166780 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M115070 166780 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M165260 166761 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M171550 166763 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M175530 166760 c-149 -20 -328 -100 -455 -203 -166 -134 -276 -296
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
<path d="M179070 166761 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M106060 166610 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328
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
<path d="M110515 166614 c-112 -18 -233 -87 -305 -176 -50 -62 -91 -155 -178
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
<path d="M119110 166611 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M161075 165360 c-176 -30 -340 -116 -470 -246 -107 -108 -167 -207
-216 -364 -31 -99 -33 -114 -33 -250 0 -136 2 -151 33 -250 49 -157 109 -256
216 -364 108 -108 210 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 300 95 498 290 588 582 123 395 -61 843 -422 1024 -131 65 -238 92 -381 96
-69 1 -147 -1 -175 -6z"/>
<path d="M66920 164691 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63
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
<path d="M62720 164680 c-315 -31 -545 -185 -642 -430 -30 -76 -55 -196 -61
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
<path d="M70738 164660 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
<path d="M74105 164681 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
<path d="M72640 163840 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M65175 163674 c-112 -18 -233 -87 -305 -176 -50 -62 -91 -155 -178
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
<path d="M76680 163671 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M61630 161683 c-71 -9 -224 -64 -308 -109 -64 -35 -109 -70 -177
-139 -107 -106 -165 -203 -216 -360 -32 -95 -33 -107 -33 -255 0 -148 1 -160
33 -255 51 -157 109 -254 216 -360 106 -107 207 -168 362 -218 93 -30 106 -31
253 -31 142 0 163 2 245 28 298 93 501 295 588 586 67 221 44 451 -66 664
-103 200 -280 344 -510 418 -77 24 -113 29 -222 32 -71 3 -146 2 -165 -1z"/>
<path d="M168535 158360 c-252 -32 -442 -216 -500 -482 -32 -152 -17 -396 45
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
<path d="M172815 158361 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
<path d="M177050 158360 c-315 -31 -545 -185 -642 -430 -30 -76 -55 -196 -61
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
<path d="M178947 158342 c-28 -29 -28 -30 -12 -62 25 -48 84 -109 128 -132 26
-13 81 -24 166 -33 180 -20 239 -42 303 -113 80 -88 100 -199 96 -536 l-3
-249 -30 25 c-49 42 -145 85 -230 103 -118 26 -313 16 -452 -24 -314 -90 -540
-329 -625 -661 -27 -104 -30 -131 -31 -285 0 -155 2 -179 28 -280 68 -268 238
-486 464 -599 209 -104 490 -130 689 -62 149 50 257 130 407 299 101 114 145
188 177 295 l23 77 0 800 0 800 -24 94 c-75 297 -249 468 -551 537 -84 20
-144 26 -300 31 l-195 5 -28 -30z m393 -1249 c76 -22 175 -73 238 -123 l52
-42 0 -440 c0 -477 -3 -504 -57 -612 -14 -28 -58 -83 -97 -122 -96 -96 -153
-118 -281 -111 -186 11 -310 107 -399 308 -95 216 -115 599 -42 830 56 178
184 304 336 330 60 10 182 1 250 -18z"/>
<path d="M186668 158340 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
<path d="M192325 158361 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
<path d="M202568 158340 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
<path d="M126580 157931 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63
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
<path d="M118445 157921 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
<path d="M135188 157900 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
<path d="M175130 157520 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M190870 157520 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M199900 157520 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M123230 157470 c-171 -26 -303 -130 -346 -272 -25 -83 -15 -197 25
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
<path d="M130210 157470 c-171 -26 -303 -130 -346 -272 -25 -83 -15 -197 25
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
<path d="M171080 157351 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M180930 157350 c-276 -39 -534 -298 -622 -624 -19 -69 -22 -107 -22
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
18 -279 5z"/>
<path d="M183800 157351 c-346 -52 -618 -263 -708 -551 -41 -130 -37 -261 10
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
<path d="M188850 157351 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M194840 157351 c-36 -5 -107 -20 -159 -35 -318 -92 -555 -334 -646
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
<path d="M197932 157331 l-23 -32 24 -42 c56 -94 133 -140 252 -152 172 -16
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
<path d="M204750 157351 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M120750 157080 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M125540 157080 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M132510 157080 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M137360 156911 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M78258 155000 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
<path d="M83405 155019 c-197 -38 -194 -32 -73 -166 167 -182 169 -190 175
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
<path d="M86255 155021 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
<path d="M68618 154893 c-76 -162 -62 -294 41 -384 68 -60 114 -80 345 -148
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
72 -19 78 -87 78 -32 0 -35 -3 -74 -87z"/>
<path d="M73280 154570 c-171 -26 -303 -130 -346 -272 -25 -83 -15 -197 25
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
<path d="M70800 154180 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M75590 154180 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M80170 154180 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M84800 154180 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M92030 154180 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M173295 154120 c-176 -30 -340 -116 -470 -246 -107 -108 -167 -207
-216 -364 -31 -99 -33 -114 -33 -250 0 -136 2 -151 33 -250 49 -157 109 -256
216 -364 108 -108 210 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 300 95 498 290 588 582 123 395 -61 843 -422 1024 -131 65 -238 92 -381 96
-69 1 -147 -1 -175 -6z"/>
<path d="M132245 154040 c-177 -30 -342 -117 -470 -246 -106 -106 -166 -206
-216 -359 -31 -95 -33 -107 -33 -255 0 -148 2 -160 33 -255 50 -153 110 -253
216 -359 107 -108 209 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 180 57 318 146 425 274 142 171 220 424 198 645 -30 295 -208 561 -457 687
-131 65 -238 92 -381 96 -69 1 -147 -1 -175 -6z"/>
<path d="M88760 154010 c-149 -20 -328 -100 -455 -203 -166 -134 -276 -296
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
<path d="M167315 153551 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
<path d="M156440 152710 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M162100 152710 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M165860 152710 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M154230 152551 c-328 -39 -570 -289 -570 -586 0 -38 7 -94 14 -123
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
<path d="M158260 152540 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328
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
<path d="M163910 152541 c-346 -52 -618 -263 -708 -551 -41 -130 -37 -261 10
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
<path d="M169890 152541 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M68100 151633 c-71 -9 -224 -64 -308 -109 -64 -35 -109 -70 -177
-139 -107 -106 -165 -203 -216 -360 -32 -95 -33 -107 -33 -255 0 -148 1 -160
33 -255 51 -157 109 -254 216 -360 106 -107 207 -168 362 -218 93 -30 106 -31
253 -31 142 0 163 2 245 28 298 93 501 295 588 586 67 221 44 451 -66 664
-103 200 -280 344 -510 418 -77 24 -113 29 -222 32 -71 3 -146 2 -165 -1z"/>
<path d="M171665 150400 c-176 -30 -340 -116 -470 -246 -107 -108 -167 -207
-216 -364 -31 -99 -33 -114 -33 -250 0 -136 2 -151 33 -250 49 -157 109 -256
216 -364 108 -108 210 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 300 95 498 290 588 582 123 395 -61 843 -422 1024 -131 65 -238 92 -381 96
-69 1 -147 -1 -175 -6z"/>
<path d="M179465 150131 c-303 -40 -531 -225 -616 -501 -20 -65 -23 -96 -24
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
357 178 22 4 81 6 130 5 71 -2 102 -8 145 -28z"/>
<path d="M184825 150129 c-197 -38 -194 -32 -73 -166 167 -182 169 -190 175
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
<path d="M188878 150110 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
<path d="M182610 149290 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M186210 149290 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M190820 149120 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
<path d="M72457 148942 c-28 -29 -28 -30 -12 -62 25 -48 84 -109 128 -132 26
-13 81 -24 166 -33 180 -20 239 -42 303 -113 80 -88 100 -199 96 -536 l-3
-249 -30 25 c-49 42 -145 85 -230 103 -118 26 -313 16 -452 -24 -314 -90 -540
-329 -625 -661 -27 -104 -30 -131 -31 -285 0 -155 2 -179 28 -280 68 -268 238
-486 464 -599 209 -104 490 -130 689 -62 149 50 257 130 407 299 101 114 145
188 177 295 l23 77 0 800 0 800 -24 94 c-75 297 -249 468 -551 537 -84 20
-144 26 -300 31 l-195 5 -28 -30z m393 -1249 c76 -22 175 -73 238 -123 l52
-42 0 -440 c0 -477 -3 -504 -57 -612 -14 -28 -58 -83 -97 -122 -96 -96 -153
-118 -281 -111 -186 11 -310 107 -399 308 -95 216 -115 599 -42 830 56 178
184 304 336 330 60 10 182 1 250 -18z"/>
<path d="M86085 148959 c-197 -38 -194 -32 -73 -166 167 -182 169 -190 175
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
<path d="M88925 148961 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
<path d="M87470 148120 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M94700 148120 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M148668 147970 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
<path d="M151900 147989 c-75 -13 -169 -59 -226 -111 -103 -94 -148 -210 -142
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
<path d="M156055 147991 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
<path d="M74490 147951 c-346 -52 -618 -263 -708 -551 -41 -130 -37 -261 10
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
<path d="M76620 147953 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M78460 147950 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328
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
<path d="M82560 147951 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M91430 147950 c-149 -20 -328 -100 -455 -203 -166 -134 -276 -296
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
<path d="M146000 147150 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M150570 147150 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M161830 147150 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M154580 146983 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M158560 146980 c-149 -20 -328 -100 -455 -203 -166 -134 -276 -296
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
<path d="M179355 146860 c-176 -30 -340 -116 -470 -246 -107 -108 -167 -207
-216 -364 -31 -99 -33 -114 -33 -250 0 -136 2 -151 33 -250 49 -157 109 -256
216 -364 108 -108 210 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 300 95 498 290 588 582 123 395 -61 843 -422 1024 -131 65 -238 92 -381 96
-69 1 -147 -1 -175 -6z"/>
<path d="M171755 145600 c-176 -30 -340 -116 -470 -246 -107 -108 -167 -207
-216 -364 -31 -99 -33 -114 -33 -250 0 -136 2 -151 33 -250 49 -157 109 -256
216 -364 108 -108 210 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 300 95 498 290 588 582 123 395 -61 843 -422 1024 -131 65 -238 92 -381 96
-69 1 -147 -1 -175 -6z"/>
<path d="M72390 145163 c-71 -9 -224 -64 -308 -109 -64 -35 -109 -70 -177
-139 -107 -106 -165 -203 -216 -360 -32 -95 -33 -107 -33 -255 0 -148 1 -160
33 -255 51 -157 109 -254 216 -360 106 -107 207 -168 362 -218 93 -30 106 -31
253 -31 142 0 163 2 245 28 298 93 501 295 588 586 67 221 44 451 -66 664
-103 200 -280 344 -510 418 -77 24 -113 29 -222 32 -71 3 -146 2 -165 -1z"/>
<path d="M163965 144470 c-176 -30 -340 -116 -470 -246 -107 -108 -167 -207
-216 -364 -31 -99 -33 -114 -33 -250 0 -136 2 -151 33 -250 49 -157 109 -256
216 -364 108 -108 210 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 300 95 498 290 588 582 123 395 -61 843 -422 1024 -131 65 -238 92 -381 96
-69 1 -147 -1 -175 -6z"/>
<path d="M169755 143711 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
<path d="M181948 143690 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
<path d="M187055 143711 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
<path d="M197308 143690 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
<path d="M108835 143060 c-252 -32 -442 -216 -500 -482 -32 -152 -17 -396 45
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
<path d="M113978 143040 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
<path d="M122255 143061 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
<path d="M172060 142870 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M179280 142870 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M183860 142870 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M185600 142870 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M194630 142870 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M173870 142701 c-346 -52 -618 -263 -708 -551 -41 -130 -37 -261 10
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
<path d="M176010 142700 c-149 -20 -328 -100 -455 -203 -166 -134 -276 -296
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
<path d="M189570 142701 c-36 -5 -107 -20 -159 -35 -318 -92 -555 -334 -646
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
<path d="M192672 142681 l-23 -32 24 -42 c56 -94 133 -140 252 -152 172 -16
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
<path d="M199480 142701 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M120800 142220 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M68870 142201 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63
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
<path d="M73341 142200 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z"/>
<path d="M76127 142172 c-28 -29 -28 -30 -12 -62 25 -48 84 -109 128 -132 26
-13 81 -24 166 -33 180 -20 239 -42 303 -113 80 -88 100 -199 96 -536 l-3
-249 -30 25 c-49 42 -145 85 -230 103 -118 26 -313 16 -452 -24 -314 -90 -540
-329 -625 -661 -27 -104 -30 -131 -31 -285 0 -155 2 -179 28 -280 68 -268 238
-486 464 -599 209 -104 490 -130 689 -62 149 50 257 130 407 299 101 114 145
188 177 295 l23 77 0 800 0 800 -24 94 c-75 297 -249 468 -551 537 -84 20
-144 26 -300 31 l-195 5 -28 -30z m393 -1249 c76 -22 175 -73 238 -123 l52
-42 0 -440 c0 -477 -3 -504 -57 -612 -14 -28 -58 -83 -97 -122 -96 -96 -153
-118 -281 -111 -186 11 -310 107 -399 308 -95 216 -115 599 -42 830 56 178
184 304 336 330 60 10 182 1 250 -18z"/>
<path d="M81308 142170 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
<path d="M111290 142053 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M115920 142050 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
<path d="M118850 142051 c-346 -52 -618 -263 -708 -551 -41 -130 -37 -261 10
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
<path d="M124840 142051 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M67560 141181 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M72030 141181 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M78370 141181 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M83490 141181 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M65360 141100 c-98 -193 -66 -324 110 -452 19 -15 98 -61 175 -103
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
<path d="M147325 140750 c-176 -30 -340 -116 -470 -246 -107 -108 -167 -207
-216 -364 -31 -99 -33 -114 -33 -250 0 -136 2 -151 33 -250 49 -157 109 -256
216 -364 108 -108 210 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 300 95 498 290 588 582 123 395 -61 843 -422 1024 -131 65 -238 92 -381 96
-69 1 -147 -1 -175 -6z"/>
<path d="M144341 139290 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z"/>
<path d="M154938 139260 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
<path d="M158770 139280 c-315 -31 -545 -185 -642 -430 -30 -76 -55 -196 -61
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
<path d="M107825 138800 c-177 -30 -342 -117 -470 -246 -106 -106 -166 -206
-216 -359 -31 -95 -33 -107 -33 -255 0 -148 2 -160 33 -255 50 -153 110 -253
216 -359 107 -108 209 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 180 57 318 146 425 274 142 171 220 424 198 645 -30 295 -208 561 -457 687
-131 65 -238 92 -381 96 -69 1 -147 -1 -175 -6z"/>
<path d="M147060 138440 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M156850 138440 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M63080 138393 c-71 -9 -224 -64 -308 -109 -64 -35 -109 -70 -177
-139 -107 -106 -165 -203 -216 -360 -32 -95 -33 -107 -33 -255 0 -148 1 -160
33 -255 51 -157 109 -254 216 -360 106 -107 207 -168 362 -218 93 -30 106 -31
253 -31 142 0 163 2 245 28 298 93 501 295 588 586 67 221 44 451 -66 664
-103 200 -280 344 -510 418 -77 24 -113 29 -222 32 -71 3 -146 2 -165 -1z"/>
<path d="M148730 138281 c-328 -39 -570 -289 -570 -586 0 -38 7 -94 14 -123
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
<path d="M151565 138274 c-112 -18 -233 -87 -305 -176 -50 -62 -91 -155 -178
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
<path d="M160640 138270 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
<path d="M89460 136611 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63
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
<path d="M78440 136600 c-302 -38 -518 -236 -602 -552 -22 -83 -22 -85 -25
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
<path d="M83048 136580 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
<path d="M109428 135770 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
<path d="M117705 135791 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
<path d="M80380 135760 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M88420 135760 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M85150 135590 c-149 -20 -328 -100 -455 -203 -166 -134 -276 -296
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
<path d="M92620 135591 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M116250 134950 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M103400 134791 c-328 -39 -570 -289 -570 -586 0 -38 7 -94 14 -123
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
<path d="M105640 134780 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
<path d="M111370 134780 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
<path d="M114300 134781 c-346 -52 -618 -263 -708 -551 -41 -130 -37 -261 10
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
<path d="M120290 134781 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M95115 134690 c-177 -30 -342 -117 -470 -246 -106 -106 -166 -206
-216 -359 -31 -95 -33 -107 -33 -255 0 -148 2 -160 33 -255 50 -153 110 -253
216 -359 107 -108 209 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 180 57 318 146 425 274 142 171 220 424 198 645 -30 295 -208 561 -457 687
-131 65 -238 92 -381 96 -69 1 -147 -1 -175 -6z"/>
<path d="M101855 131910 c-177 -30 -342 -117 -470 -246 -106 -106 -166 -206
-216 -359 -31 -95 -33 -107 -33 -255 0 -148 2 -160 33 -255 50 -153 110 -253
216 -359 107 -108 209 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 180 57 318 146 425 274 142 171 220 424 198 645 -30 295 -208 561 -457 687
-131 65 -238 92 -381 96 -69 1 -147 -1 -175 -6z"/>
<path d="M61871 121920 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z"/>
<path d="M61185 121909 c-197 -38 -194 -32 -73 -166 167 -182 169 -190 175
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
<path d="M66045 121911 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
<path d="M64590 121070 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M68630 120901 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M59500 117813 c-71 -9 -224 -64 -308 -109 -64 -35 -109 -70 -177
-139 -107 -106 -165 -203 -216 -360 -32 -95 -33 -107 -33 -255 0 -148 1 -160
33 -255 51 -157 109 -254 216 -360 106 -107 207 -168 362 -218 93 -30 106 -31
253 -31 142 0 163 2 245 28 298 93 501 295 588 586 67 221 44 451 -66 664
-103 200 -280 344 -510 418 -77 24 -113 29 -222 32 -71 3 -146 2 -165 -1z"/>
<path d="M36800 112651 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63
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
<path d="M58621 112650 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z"/>
<path d="M48365 112641 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
<path d="M52980 112640 c-302 -38 -518 -236 -602 -552 -22 -83 -22 -85 -25
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
<path d="M54460 112541 c-49 -10 -75 -26 -101 -63 -31 -43 -30 -132 4 -263 48
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
<path d="M75697 112322 c-28 -29 -28 -30 -12 -62 25 -48 84 -109 128 -132 26
-13 81 -24 166 -33 180 -20 239 -42 303 -113 80 -88 100 -199 96 -536 l-3
-249 -30 25 c-49 42 -145 85 -230 103 -118 26 -313 16 -452 -24 -314 -90 -540
-329 -625 -661 -27 -104 -30 -131 -31 -285 0 -155 2 -179 28 -280 68 -268 238
-486 464 -599 209 -104 490 -130 689 -62 149 50 257 130 407 299 101 114 145
188 177 295 l23 77 0 800 0 800 -24 94 c-75 297 -249 468 -551 537 -84 20
-144 26 -300 31 l-195 5 -28 -30z m393 -1249 c76 -22 175 -73 238 -123 l52
-42 0 -440 c0 -477 -3 -504 -57 -612 -14 -28 -58 -83 -97 -122 -96 -96 -153
-118 -281 -111 -186 11 -310 107 -399 308 -95 216 -115 599 -42 830 56 178
184 304 336 330 60 10 182 1 250 -18z"/>
<path d="M119080 112091 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63
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
<path d="M115550 112080 c-315 -31 -545 -185 -642 -430 -30 -76 -55 -196 -61
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
<path d="M35760 111800 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M39680 111800 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29
218 -1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236
-25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175
-61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101
239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10
48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70
-2 -100 -6z"/>
<path d="M41500 111630 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328
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
<path d="M45610 111631 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M50950 111631 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M57310 111631 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M61620 111631 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M79530 111341 c-328 -39 -570 -289 -570 -586 0 -38 7 -94 14 -123 40
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
<path d="M77840 111333 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M81820 111331 c-346 -52 -618 -263 -708 -551 -41 -130 -37 -261 10
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
<path d="M84030 111331 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M127280 111240 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M122140 111073 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M124100 111071 c-36 -5 -107 -20 -159 -35 -318 -92 -555 -334 -646
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
<path d="M117850 110990 c-98 -193 -66 -324 110 -452 19 -15 98 -61 175 -103
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
<path d="M50410 109143 c-71 -9 -224 -64 -308 -109 -64 -35 -109 -70 -177
-139 -107 -106 -165 -203 -216 -360 -32 -95 -33 -107 -33 -255 0 -148 1 -160
33 -255 51 -157 109 -254 216 -360 106 -107 207 -168 362 -218 93 -30 106 -31
253 -31 142 0 163 2 245 28 298 93 501 295 588 586 67 221 44 451 -66 664
-103 200 -280 344 -510 418 -77 24 -113 29 -222 32 -71 3 -146 2 -165 -1z"/>
<path d="M74200 108973 c-71 -9 -224 -64 -308 -109 -64 -35 -109 -70 -177
-139 -107 -106 -165 -203 -216 -360 -32 -95 -33 -107 -33 -255 0 -148 1 -160
33 -255 51 -157 109 -254 216 -360 106 -107 207 -168 362 -218 93 -30 106 -31
253 -31 142 0 163 2 245 28 298 93 501 295 588 586 67 221 44 451 -66 664
-103 200 -280 344 -510 418 -77 24 -113 29 -222 32 -71 3 -146 2 -165 -1z"/>
<path d="M128704 108669 c-301 -50 -563 -265 -675 -553 -157 -405 21 -878 407
-1083 443 -235 991 -49 1203 409 61 131 76 201 76 363 0 162 -15 232 -76 363
-165 357 -554 565 -935 501z"/>
<path d="M51220 106683 c-71 -9 -224 -64 -308 -109 -64 -35 -109 -70 -177
-139 -107 -106 -165 -203 -216 -360 -32 -95 -33 -107 -33 -255 0 -148 1 -160
33 -255 51 -157 109 -254 216 -360 106 -107 207 -168 362 -218 93 -30 106 -31
253 -31 142 0 163 2 245 28 298 93 501 295 588 586 67 221 44 451 -66 664
-103 200 -280 344 -510 418 -77 24 -113 29 -222 32 -71 3 -146 2 -165 -1z"/>
<path d="M145474 106400 c-32 -13 -189 -165 -268 -260 -415 -497 -631 -1152
-587 -1780 42 -605 293 -1170 706 -1587 164 -166 163 -165 260 -100 107 70
106 79 -28 234 -352 410 -520 840 -557 1428 -25 397 33 799 165 1140 98 254
223 461 402 668 56 66 93 117 93 131 0 31 -23 59 -77 94 -58 36 -81 43 -109
32z"/>
<path d="M162162 106389 c-67 -34 -102 -71 -102 -111 0 -29 14 -51 86 -134
325 -375 496 -773 556 -1289 16 -139 16 -528 -1 -660 -65 -527 -240 -934 -560
-1305 -112 -129 -114 -142 -30 -207 31 -24 71 -46 91 -49 33 -6 40 -1 158 112
126 122 228 242 317 374 179 266 324 634 389 985 25 138 28 170 28 410 1 231
-2 274 -22 385 -65 346 -182 670 -331 914 -147 240 -429 562 -516 589 -12 4
-38 -2 -63 -14z"/>
<path d="M135506 106347 c-19 -93 11 -171 86 -227 70 -52 160 -80 291 -91 237
-19 308 -37 383 -94 68 -52 94 -175 55 -261 -35 -77 -98 -104 -261 -111 -90
-4 -142 -1 -239 16 -68 11 -130 21 -139 21 -12 0 -14 -11 -9 -65 15 -156 93
-218 299 -235 157 -14 183 -19 252 -50 119 -53 166 -119 166 -232 -1 -112 -55
-187 -162 -224 -43 -16 -82 -19 -208 -18 -85 0 -188 6 -229 12 -45 8 -78 9
-83 4 -6 -6 -12 -36 -15 -69 -7 -78 15 -126 75 -164 56 -35 115 -48 279 -59
148 -10 244 -34 313 -78 191 -122 270 -384 174 -573 -77 -153 -221 -229 -434
-229 -291 1 -472 117 -554 358 -13 38 -27 93 -31 123 -10 77 -26 99 -74 99
-35 0 -45 -6 -95 -62 -31 -34 -68 -86 -83 -115 -23 -49 -25 -61 -20 -133 5
-60 14 -94 37 -140 127 -251 521 -405 942 -369 225 20 384 81 571 221 184 137
240 233 241 412 1 209 -74 367 -231 485 -65 50 -205 124 -258 137 -35 9 -31
17 15 38 22 9 65 40 95 67 149 137 164 365 34 531 -33 41 -113 97 -174 120
l-39 15 52 27 c73 37 166 132 200 203 23 50 27 70 26 148 0 81 -3 96 -31 150
-87 167 -340 309 -613 343 -47 6 -139 14 -205 17 -134 7 -237 25 -331 59 l-62
23 -6 -30z"/>
<path d="M139101 106350 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z"/>
<path d="M150190 106351 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63
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
<path d="M159981 106350 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z"/>
<path d="M130995 106341 c-303 -40 -531 -225 -616 -501 -20 -65 -23 -96 -24
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
357 178 22 4 81 6 130 5 71 -2 102 -8 145 -28z"/>
<path d="M146660 106340 c-315 -31 -545 -185 -642 -430 -30 -76 -55 -196 -61
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
<path d="M134140 105500 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M138040 105333 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M142090 105331 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M153260 105333 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M155220 105331 c-36 -5 -107 -20 -159 -35 -318 -92 -555 -334 -646
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
<path d="M158660 105331 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M52691 105300 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z"/>
<path d="M56451 105300 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z"/>
<path d="M58480 105301 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63
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
<path d="M148960 105250 c-98 -193 -66 -324 110 -452 19 -15 98 -61 175 -103
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
<path d="M65178 105270 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
<path d="M55410 104450 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M61390 104280 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
<path d="M67360 104281 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M131975 102200 c-177 -30 -342 -117 -470 -246 -106 -106 -166 -206
-216 -359 -31 -95 -33 -107 -33 -255 0 -148 2 -160 33 -255 50 -153 110 -253
216 -359 107 -108 209 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 180 57 318 146 425 274 142 171 220 424 198 645 -30 295 -208 561 -457 687
-131 65 -238 92 -381 96 -69 1 -147 -1 -175 -6z"/>
<path d="M43240 98423 c-71 -9 -224 -64 -308 -109 -64 -35 -109 -70 -177 -139
-107 -106 -165 -203 -216 -360 -32 -95 -33 -107 -33 -255 0 -148 1 -160 33
-255 51 -157 109 -254 216 -360 106 -107 207 -168 362 -218 93 -30 106 -31
253 -31 142 0 163 2 245 28 298 93 501 295 588 586 67 221 44 451 -66 664
-103 200 -280 344 -510 418 -77 24 -113 29 -222 32 -71 3 -146 2 -165 -1z"/>
<path d="M66641 97760 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z"/>
<path d="M45385 97749 c-197 -38 -194 -32 -73 -166 167 -182 169 -190 175
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
<path d="M50900 97750 c-315 -31 -545 -185 -642 -430 -30 -76 -55 -196 -61
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
<path d="M56385 97751 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
<path d="M61000 97750 c-302 -38 -518 -236 -602 -552 -22 -83 -22 -85 -25
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
<path d="M111010 97691 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63
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
<path d="M106810 97680 c-315 -31 -545 -185 -642 -430 -30 -76 -55 -196 -61
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
<path d="M126038 97660 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
<path d="M62480 97651 c-49 -10 -75 -26 -101 -63 -31 -43 -30 -132 4 -263 48
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
<path d="M113900 96840 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65
-161 -10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455
89 -643 -62 -158 -207 -257 -375 -257 -102 0 -171 27 -239 95 -73 73 -95 135
-95 263 0 62 7 127 20 180 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250
-108 -314 -236 -25 -53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168
-240 330 -297 175 -61 427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6
369 -35 128 -101 239 -209 349 -79 82 -165 145 -348 258 -172 106 -290 212
-311 282 -11 38 -10 48 7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9
44 -54 45 -25 1 -70 -2 -100 -6z"/>
<path d="M46840 96741 c-346 -52 -618 -263 -708 -551 -41 -130 -37 -261 10
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
<path d="M48960 96743 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M52780 96740 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
<path d="M58960 96741 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z"/>
<path d="M65320 96741 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z"/>
<path d="M69630 96741 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z"/>
<path d="M118940 96681 c-328 -39 -570 -289 -570 -586 0 -38 7 -94 14 -123 40
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
<path d="M109265 96674 c-112 -18 -233 -87 -305 -176 -50 -62 -91 -155 -178
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
<path d="M115840 96671 c-36 -5 -107 -20 -159 -35 -318 -92 -555 -334 -646
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
<path d="M121230 96671 c-346 -52 -618 -263 -708 -551 -41 -130 -37 -261 10
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
<path d="M123350 96673 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M128140 96670 c-149 -20 -328 -100 -455 -203 -166 -134 -276 -296
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
<path d="M131680 96671 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M133255 94220 c-177 -30 -342 -117 -470 -246 -106 -106 -166 -206
-216 -359 -31 -95 -33 -107 -33 -255 0 -148 2 -160 33 -255 50 -153 110 -253
216 -359 107 -108 209 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 300 95 498 290 588 582 123 395 -61 843 -422 1024 -131 65 -238 92 -381 96
-69 1 -147 -1 -175 -6z"/>
<path d="M35190 93483 c-71 -9 -224 -64 -308 -109 -64 -35 -109 -70 -177 -139
-107 -106 -165 -203 -216 -360 -32 -95 -33 -107 -33 -255 0 -148 1 -160 33
-255 51 -157 109 -254 216 -360 106 -107 207 -168 362 -218 93 -30 106 -31
253 -31 142 0 163 2 245 28 298 93 501 295 588 586 67 221 44 451 -66 664
-103 200 -280 344 -510 418 -77 24 -113 29 -222 32 -71 3 -146 2 -165 -1z"/>
<path d="M56741 91130 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z"/>
<path d="M35745 91121 c-303 -40 -531 -225 -616 -501 -20 -65 -23 -96 -24
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
357 178 22 4 81 6 130 5 71 -2 102 -8 145 -28z"/>
<path d="M41010 91120 c-315 -31 -545 -185 -642 -430 -30 -76 -55 -196 -61
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
<path d="M46485 91121 c-105 -17 -190 -80 -239 -178 -70 -141 -78 -273 -74
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
<path d="M51110 91120 c-302 -38 -518 -236 -602 -552 -22 -83 -22 -85 -25
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
<path d="M52580 91021 c-49 -10 -75 -26 -101 -63 -31 -43 -30 -132 4 -263 48
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
<path d="M39070 90113 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M42880 90110 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
<path d="M49070 90111 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z"/>
<path d="M55430 90111 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z"/>
<path d="M59740 90111 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328 -377
-535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28 c13
16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154 627
-59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401 -513
25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126 -113
-156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151 198
217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3 -184
1 -220 -3z"/>
<path d="M87085 59490 c-252 -32 -442 -216 -500 -482 -32 -152 -17 -396 45
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
<path d="M99538 59470 c-16 -28 -16 -35 -3 -67 28 -67 17 -108 -39 -143 -20
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
<path d="M89390 58480 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
<path d="M92450 58480 c-149 -20 -328 -100 -455 -203 -166 -134 -276 -296
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
<path d="M95750 58480 c-284 -51 -541 -305 -636 -631 -26 -87 -28 -107 -28
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
<path d="M101630 58483 c-74 -7 -227 -61 -307 -108 -123 -72 -285 -225 -355
-335 -58 -92 -81 -178 -82 -305 -1 -132 18 -200 79 -290 69 -100 147 -148 263
-162 44 -5 50 -3 66 21 16 25 16 39 5 180 -31 380 46 625 225 716 182 92 441
43 532 -101 26 -42 38 -86 61 -224 20 -121 31 -1325 13 -1485 -38 -348 -140
-551 -315 -629 -77 -35 -211 -40 -295 -11 -150 51 -266 190 -314 375 -31 123
-29 401 5 554 5 24 8 45 7 47 -2 1 -24 8 -49 15 -45 12 -47 11 -110 -26 -138
-83 -247 -225 -279 -364 -17 -72 -6 -228 21 -317 73 -241 285 -437 549 -511
109 -30 322 -42 437 -24 445 70 670 347 751 924 14 104 17 216 17 757 0 590
-1 641 -19 725 -65 300 -238 489 -509 556 -82 20 -297 32 -397 22z"/>
<path d="M103590 58481 c-36 -5 -107 -20 -159 -35 -318 -92 -555 -334 -646
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
<path d="M107030 58481 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M98625 55810 c-177 -30 -342 -117 -470 -246 -106 -106 -166 -206
-216 -359 -31 -95 -33 -107 -33 -255 0 -148 2 -160 33 -255 50 -153 110 -253
216 -359 107 -108 209 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 180 57 318 146 425 274 142 171 220 424 198 645 -30 295 -208 561 -457 687
-131 65 -238 92 -381 96 -69 1 -147 -1 -175 -6z"/>
<path d="M107535 54280 c-177 -30 -342 -117 -470 -246 -106 -106 -166 -206
-216 -359 -31 -95 -33 -107 -33 -255 0 -148 2 -160 33 -255 50 -153 110 -253
216 -359 107 -108 209 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 180 57 318 146 425 274 142 171 220 424 198 645 -30 295 -208 561 -457 687
-131 65 -238 92 -381 96 -69 1 -147 -1 -175 -6z"/>
<path d="M105341 52950 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z"/>
<path d="M99920 51930 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328 -318
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
c-76 149 -198 265 -323 309 -57 21 -220 29 -305 16z"/>
<path d="M104020 51931 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M108330 51931 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M88421 47010 c-51 -10 -95 -21 -96 -22 -1 -2 -5 -12 -9 -24 -5 -16
11 -38 79 -107 95 -98 133 -163 161 -277 16 -69 18 -154 24 -995 7 -903 7
-921 29 -997 61 -220 183 -378 359 -467 216 -109 597 -113 852 -8 219 90 388
271 454 487 29 97 49 260 40 334 -15 124 -78 245 -232 443 -54 71 -115 155
-135 188 -126 207 -99 395 71 491 31 18 33 22 27 58 -3 22 -8 43 -12 49 -12
19 -182 -3 -272 -35 -183 -66 -271 -168 -272 -312 0 -100 20 -145 136 -291
194 -245 237 -363 237 -650 0 -354 -94 -521 -323 -579 -87 -21 -210 -21 -273
1 -67 24 -164 116 -205 193 -63 118 -61 73 -61 1140 0 589 -4 999 -10 1035
-15 91 -60 174 -132 241 -124 114 -246 144 -437 104z"/>
<path d="M90440 47011 c-47 -9 -91 -20 -97 -24 -27 -17 -9 -49 80 -144 63 -66
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
67 12 61 12 139 1z"/>
<path d="M87280 47000 c-315 -31 -545 -185 -642 -430 -30 -76 -55 -196 -61
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
<path d="M93330 46160 c-98 -14 -220 -75 -273 -135 -36 -41 -60 -101 -65 -161
-10 -134 62 -218 342 -395 225 -142 296 -201 366 -299 124 -175 163 -455 89
-643 -79 -202 -309 -309 -504 -236 -76 28 -156 108 -184 184 -28 75 -29 218
-1 333 18 73 18 87 6 116 l-14 33 -55 -8 c-131 -17 -250 -108 -314 -236 -25
-53 -28 -67 -28 -163 1 -85 5 -116 24 -165 52 -136 168 -240 330 -297 175 -61
427 -68 610 -17 255 71 487 294 562 539 29 98 32 273 6 369 -35 128 -101 239
-209 349 -79 82 -165 145 -348 258 -172 106 -290 212 -311 282 -11 38 -10 48
7 90 18 42 77 101 115 114 10 3 10 15 3 49 -9 44 -9 44 -54 45 -25 1 -70 -2
-100 -6z"/>
<path d="M95150 45990 c-125 -19 -273 -95 -362 -187 -174 -180 -267 -328 -318
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
c-76 149 -198 265 -323 309 -57 21 -220 29 -305 16z"/>
<path d="M99170 45990 c-149 -20 -328 -100 -455 -203 -166 -134 -276 -296
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
<path d="M102720 45991 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M104920 45990 c-149 -20 -328 -100 -455 -203 -166 -134 -276 -296
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
<path d="M108460 45991 c-187 -23 -357 -97 -509 -221 -214 -174 -322 -328
-377 -535 -29 -107 -26 -367 4 -493 90 -371 353 -618 732 -687 l92 -17 24 28
c13 16 23 34 24 41 0 6 -28 33 -62 60 -93 73 -209 219 -268 337 -130 264 -154
627 -59 882 62 165 184 291 335 345 89 33 273 33 369 0 200 -68 346 -255 401
-513 25 -116 25 -362 0 -478 -41 -194 -112 -324 -273 -500 -98 -105 -113 -126
-113 -156 0 -19 3 -34 8 -34 26 0 191 53 262 84 150 66 284 176 400 326 151
198 217 437 190 695 -41 401 -304 705 -695 807 -91 23 -137 29 -265 32 -85 3
-184 1 -220 -3z"/>
<path d="M87035 43050 c-177 -30 -342 -117 -470 -246 -106 -106 -166 -206
-216 -359 -31 -95 -33 -107 -33 -255 0 -148 2 -160 33 -255 50 -153 110 -253
216 -359 107 -108 209 -170 360 -218 95 -31 108 -32 255 -32 142 0 162 2 245
28 180 57 318 146 425 274 142 171 220 424 198 645 -30 295 -208 561 -457 687
-131 65 -238 92 -381 96 -69 1 -147 -1 -175 -6z"/>
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