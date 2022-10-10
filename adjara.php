<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="http://www.geostat.ge/regions/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="სტატისტიკური ინფორმაცია აჭარის რეგიონის შესახებ" />
    <meta property="og:description" content="სტატისტიკური ინფორმაცია აჭარის რეგიონის შესახებ" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <title class="tr" Key="PAGE_TITLE">სტატისტიკური ინფორმაცია აჭარის რეგიონის შესახებ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="samegrelo.css">
    <link rel="stylesheet" type="text/css" href="adjara/adjara.css">
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
                <p id="pagetitlename" class="tr" Key="REGION14">სტატისტიკური ინფორმაცია აჭარის რეგიონის შესახებ</p>
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
            $query = mysqli_query($link, "select * from `regions` where ID = 4");
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
                            <span class="float-right"><a href="http://localhost/regions/regions/4/dziritadi%20informacia/regionis%20fartobi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia1">
                        <td>
                            მუნიციპალიტეტების, ქალაქების და სოფლების რაოდენობა
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/4/dziritadi%20informacia/municipalitetebis,%20qalaqebis%20da%20soflebis%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">მოსახლეობა <span class="float-right"><a href="http://localhost/regions/regions/4/mosakhleoba/mosakhleoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/4/demografia/mokvdaoba_asaki_sqesi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia2">
                        <td>
                            გარდაცვალების მიზეზები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/4/demografia/gardacvalebis%20mizezebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia2">
                        <td>
                            ძირითადი დემოგრაფიული მაჩვენებლები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/4/demografia/dziritadi%20demografiuli%20machveneblebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">მშპ და დამატებული ღირებულება <span class="float-right"><a href="http://localhost/regions/regions/4/mshp%20da%20damatebuli%20girebuleba/mshp%20da%20damatebuli%20girebuleba.xls"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">პირდაპირი უცხოური ინვესტიციები <span class="float-right"><a href="http://localhost/regions/regions/4/pirdapiri%20uckhouri%20investiciebi/pirdapiri%20uckhouri%20investiciebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/4/dasaqmeba_umushevroba/dasaqmeba_umushevroba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia3">
                        <td>
                            ხელფასები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/4/dasaqmeba_umushevroba/khelfasi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/4/fasebi/samomxmareblo%20fasebis%20indeqsebi%2012%20tvis%20sashualo%20wina%2012%20Tvis%20saSualosTan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia4">
                        <td>
                            სამომხმარებლო ფასების ინდექსი წინა თვესთან
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/4/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20tvestan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia4">
                        <td>
                            სამომხმარებლო ფასების ინდექსი წინა წლის შესაბამის თვესთან
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/4/fasebi/samomxmareblo%20fasebis%20indeqsebi%20wina%20wlis%20shesabamis%20TvesTan%20-%20zugdidi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/4/ckhovrebis%20done/shemosavlebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia5">
                        <td>
                            ხარჯები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/4/ckhovrebis%20done/kharjebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/4/biznes%20seqtori/saqmianobis%20mikhedvit_nace%20rev.2.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia6">
                        <td>
                            საკუთრების ფორმის მიხედვით
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/4/biznes%20seqtori/sakutrebis%20formis%20mikhedvit.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia6">
                        <td>
                            ზომის მიხედვით
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/4/biznes%20seqtori/zomis%20mikhedvit.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/4/soflis%20meurneoba/1.%20erttsliani%20kulturebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia7">
                        <td>
                            მრავალწლოვანი კულტურების წარმოება
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/4/soflis%20meurneoba/2.%20mravaltslovani%20kulturebis%20tsarmoeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia7">
                        <td>
                            პირუტყვის სულადობა
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/4/soflis%20meurneoba/3.%20pirutkvis%20suladoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia7">
                        <td>
                            მეცხოველეობის პროდუქციის წარმოება
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/4/soflis%20meurneoba/4.%20metskhoveleobis%20produktsiis%20tsarmoeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/4/mshenebloba/dasrulebuli%20msheneblobebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia8">
                        <td>
                            ნებართვები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/4/mshenebloba/mshenebloba_nebartvebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia8">
                        <td>
                            ძირითადი მაჩვენებლები
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/4/mshenebloba/mshenebloba_dziritadi%20machveneblebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/4/sastumroebi%20da%20restornebi/sastumroebi%20da%20restornebi.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia9">
                        <td>
                            სტუმართა რაოდენობა
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/4/sastumroebi%20da%20restornebi/stumarta%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/4/transporti%20da%20kavshirgabmuloba/transporti%20da%20dasawyobeba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia10">
                        <td>
                            რეგისტრირებული ავტომობილების რაოდენობა
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/4/transporti%20da%20kavshirgabmuloba/registrirebuli%20avtomobilebis%20raodenoba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia10">
                        <td>
                            საერთო სარგებლობის საავტომობილო გზების სიგრძე
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/4/transporti%20da%20kavshirgabmuloba/gzebis%20sigrdze.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                            <span class="float-right"><a href="http://localhost/regions/regions/4/turizmi/ganawileba%20sacxovrebeli%20adgilis%20mixedvit.xls"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr class="informacia11">
                        <td>
                            მონახულებული რეგიონებით
                        </td>
                        <td>
                            <span class="float-right"><a href="http://localhost/regions/regions/4/turizmi/ganawileba%20monaxulebuli%20regionebit.xls"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">სამართლებრივი სტატისტიკა<span class="float-right"><a href="http://localhost/regions/regions/4/samartlebrivi%20statistika/samartlebrivi%20statistika.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">ჯანდაცვა და სოციალური უზრუნველყოფა<span class="float-right"><a href="http://localhost/regions/regions/4/jandacva%20da%20socialuri%20uzrunvelkofa/jandacva%20da%20socialuri%20uzrunvelkofa.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">განათლება<span class="float-right"><a href="http://localhost/regions/regions/4/ganatleba/ganatleba.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">კულტურა<span class="float-right"><a href="http://localhost/regions/regions/4/kultura/kultura.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">გარემოს დაცვა<span class="float-right"><a href="http://localhost/regions/regions/4/garemos%20dacva/garemos%20dacva.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="dziritadi" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">ინფრასტრუქტურა<span class="float-right"><a href="http://localhost/regions/regions/4/infrastruqtura/infrastruqtura.xlsx"> <img src="images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                        </td>
                    </tr>




                </tbody>
            <?php
            }
            ?>
        </table>
        <div class="map-box">
            <svg id="svg4380" xmlns="http://www.w3.org/2000/svg" version="1.1">

                <g id="layer3">
                    <a xlink:href="adjara/qobuleti.php" class="text-decoration-none">
                        <path id="group3-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 514.7832,729.71875 c 0.30949,1.74143 0.0565,3.50006 0.30274,5.23828 1.56471,8.23993 1.58783,16.55376 -0.11914,24.72852 -0.59232,8.79672 -4.53936,16.07357 -7.03321,24.27734 -1.60852,0.84202 -1.84068,4.42168 -4.15234,5.12109 -2.42974,5.61916 -3.7247,11.4053 -6.55859,16.69336 1.32692,-1.06439 2.71618,0.35687 4.1582,-0.32226 1.52625,0.52223 3.90153,0.42284 1.91211,2.3457 -2.40041,0.93525 -1.38648,3.04455 -2.875,4.64453 -1.94281,0.79936 -2.51534,3.29097 -3.84375,4.31836 -1.07146,2.10494 2.45207,1.34032 1.59961,4.00781 1.53771,0.94378 -0.92891,3.99782 1.91992,4.52735 -1.09023,2.99773 1.03238,2.94082 2.24219,4.1582 0.11701,2.37095 2.20271,2.1206 4.95703,1.91797 0.31765,1.94323 3.00078,1.81287 5.27148,2.24023 2.80777,2.01362 5.1713,-0.30738 7.91016,-0.79882 4.40402,-0.69248 3.54445,3.98506 1.94531,6.44531 -1.7155,3.21704 2.76851,2.93856 3.38672,5.38867 2.59865,2.77608 -2.74874,7.21675 2.44727,7.04688 3.24509,1.59828 6.48919,-0.14437 7.38281,-3.84375 3.80562,-1.45333 5.71236,-7.35414 10.11328,-6.2461 1.59113,-3.24434 3.96942,-1.03905 6.07031,-1.27148 1.46719,-1.63395 3.97724,-0.97842 5.96485,-2.12305 1.6354,0.42058 4.49066,-3.06918 7.25,-3.7168 1.29087,-3.2693 3.16481,-6.27232 4.01367,-9.67773 0.58431,-3.74877 1.99304,-10.55474 7.57422,-8.96094 6.75087,3.93501 14.72018,-0.64988 21.61718,2.35938 3.91624,-0.32565 6.9257,1.80521 10.81836,1.32031 2.4915,-1.52031 7.75049,2.89893 7.95899,-1.15234 2.31049,-1.83188 6.508,-1.15953 7.67578,-4.20313 -0.011,-2.11742 4.30095,-3.11646 1.57617,-4.88476 0.74783,-2.23327 4.10744,-2.13296 3.63672,-5.15235 1.4098,-1.64446 -0.0443,-2.58181 -1.15039,-3.88281 -2.71112,-2.67518 0.64259,-5.31712 1.4707,-7.79102 1.16842,-1.16191 3.97292,-3.78779 6.28906,-2.28125 2.50345,1.72991 6.95261,1.87692 8.90235,0.0645 2.17555,-1.68138 4.68544,-3.67353 5.49805,-6.42188 2.22419,-3.66535 1.3412,-8.90486 -2.69141,-10.3457 -0.68746,-3.21683 -4.44691,-7.1385 -7.09766,-4.40625 -1.63305,1.59041 -3.07716,-0.97251 -5.0332,0.48828 -1.24287,0.2193 -3.70167,4.05591 -5.22656,1.59961 -1.15359,-2.87582 -4.16884,-4.9524 -7.31836,-4.32617 -1.39455,-2.29769 -3.25415,0.16209 -3.9336,1.66992 -2.61512,2.53502 -5.90602,5.04491 -8.5332,7.92969 -5.33553,2.02558 1.61731,-3.63932 -2.04687,-3.8418 -1.23967,-2.38515 -0.90541,-6.98204 -5.15625,-6.71875 -1.97748,-0.38005 -5.94654,0.41992 -7.34375,-2.48438 -2.41844,-1.21257 -3.1633,-4.99379 -5.50782,-5.3496 -1.23284,-0.12875 -1.78762,-2.72982 -3.70312,-1.44727 -1.35988,-1.93501 -6.32249,1.02226 -8.29688,-1.27149 -2.40456,-0.69748 -3.04237,-1.58406 -4.5039,-2.72656 -1.62975,-0.61514 -1.02779,-3.97828 -1.25782,-5.54883 -0.0635,-0.27381 -1.32555,-3.16362 -0.1582,-4.52734 0.33589,-1.97929 0.19197,-3.44879 -1.55469,-4.00586 0.0253,-1.26559 -2.3222,-2.21294 -3.40625,-2.87891 -0.65994,-1.03231 -1.50286,-2.24035 -3.38476,-2.40039 -2.29012,-0.16181 -3.95255,-0.65314 -5.62891,-1.32617 -0.98783,1.99017 -1.9858,4.06146 -4.3125,4.84766 -3.34834,-0.86653 -5.17558,1.14797 -7.95508,0.47851 -1.40233,-1.21087 -3.35926,-1.86541 -4.79882,-3.03906 -1.68426,-1.00813 -2.98704,1.90538 -4,-0.64062 -1.21333,-0.81184 -2.99167,-0.70866 -2.98633,-2.17969 -1.14346,0.5761 -2.8783,1.24238 -3.4668,2.49805 -1.49748,2.43784 -4.40526,-1.77851 -2.93359,-2.39844 -2.14057,-0.34283 -5.04122,2.28802 -7.58008,1.28125 -2.49033,-1.03647 -5.75591,-0.25323 -6.31641,-3.04297 z" id="path1400" />
                        <text id="svgRegions" x="518" y="798">
                            ქობულეთი
                        </text>
                    </a>
                    <a xlink:href="adjara/xulo.php" class="text-decoration-none">
                        <path id="group3-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 709,760.52344 c -0.65028,0.20476 -1.07209,0.73212 -1.54102,1.19336 -2.11111,-1.26303 -0.61327,2.80801 -3.03906,2.40039 -0.7477,1.59988 -1.23514,2.53329 -1.76758,4.16015 -2.85011,0.0943 -5.87099,-0.48757 -7.68164,1.43946 -2.34216,1.7906 -6.06252,-0.57731 -8.40234,2.38086 -2.07582,2.75421 -4.52403,5.35453 -0.0762,6.94726 -0.4108,3.94152 -0.17427,8.05722 0.31836,11.04492 0.73245,2.11583 0.0992,3.38987 1.28125,4.64063 1.83145,1.54175 -0.13646,3.22643 -2.71094,3.62695 -5.20189,-0.66058 -1.47222,5.96357 -6.08594,4.00391 -1.85086,1.52735 -3.9647,1.8478 -4.29883,4.66015 -0.2769,2.125 -2.37018,3.5326 -3.06445,5.26368 -0.81941,1.80798 -2.04983,3.57166 -2.71289,4.95117 -4.80476,-0.66112 -1.02066,4.65892 -0.9668,7.41015 -0.80319,3.2419 -0.55078,7.41442 -3.85742,8.27149 -4.67088,0.87946 1.45808,5.70772 0.34961,8.3125 -0.24416,3.05896 4.37957,2.54864 3.03516,5.58008 -2.29727,2.69192 5.04729,4.68437 0.22461,5.46679 -1.25614,2.06783 1.09384,1.96414 1.04882,4.20508 0.72362,1.83224 1.87076,1.39823 2.40625,2.08789 1.899,0.8704 2.07604,2.76226 0.32032,2.66797 -1.05098,1.21354 -1.2316,3.68854 -2.88086,4.32227 3.04936,1.17556 5.85752,3.39205 8.94336,4.65039 4.22439,-0.224 2.93482,5.03217 6.36914,6.1289 2.57854,3.01267 6.15779,3.05968 9.16406,4.88868 0.12672,2.30088 2.73675,3.58586 3.83594,4.9082 2.62963,0.74911 6.17557,-0.90669 6.61523,2.24219 0.0332,3.42366 3.56309,3.5374 6.21875,4.27343 2.11934,-1.47657 5.64272,-0.17938 7.19727,2.42188 1.20948,1.71646 6.70973,4.10043 5.04297,5.04492 2.42344,2.09513 3.50585,6.74407 7.24609,5.33203 0.63967,2.16542 3.91245,1.63233 4.26367,4.29492 2.5619,3.07432 3.11559,7.94208 5.9336,10.67774 5.12294,3.24936 -1.19444,-3.78879 2.84179,-5.24414 4.34514,-0.0545 3.50051,-6.62264 6.88672,-6.69922 3.28765,-0.98986 4.22491,-2.84483 6.22852,-4.24609 0.59519,-3.62867 7.84809,-1.34543 3.49804,-5.76758 -1.34057,-3.12531 -0.4402,-5.67064 1.94922,-7.70508 2.9892,-2.29182 2.26033,-6.19732 0.39453,-9.375 0.24832,-4.6966 5.20228,-5.21308 7.35352,-8.82617 3.4101,-2.72425 -2.22413,-5.14494 -2.01563,-7.97852 -0.50926,-2.8148 -2.52264,-2.57549 -1.43945,-4.73633 -1.94932,-1.99955 -1.86412,-4.39682 -3.25195,-6.96875 -0.48117,-5.10449 -4.84494,-8.53872 -8.48438,-11.77539 -4.76337,1.13301 -9.82185,-2.56472 -9.4707,-7.58398 -0.2368,-4.39058 -0.66593,-10.32289 -4.30078,-12.83594 -5.6588,-1.61641 -3.75184,-4.76481 -0.30664,-7.86719 1.06655,-2.42216 4.18125,-3.91197 3.30469,-7.1289 1.54078,-2.9635 3.31002,-5.98052 3.6289,-9.44727 1.88009,-4.26044 -5.76109,-6.39089 -4.59961,-10.77539 -1.7043,-2.55518 -3.46929,-5.89419 -5.87695,-7.66601 -4.43836,-1.42005 -11.70345,0.14465 -13.80274,-5.36133 0.31094,-3.01907 0.19715,-7.29442 -3.90234,-7.83203 -4.3974,0.93737 -6.36213,-1.26069 -9.36328,-4.08008 z" id="path1398" />
                        <text id="svgRegions" x="689" y="835">
                            ხულო
                        </text>
                    </a>
                    <a xlink:href="adjara/shuaxevi.php" class="text-decoration-none">
                        <path id="group3-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 674.43945,773.46094 c -1.50654,0.53574 -3.19111,-0.27659 -4.58203,0.74023 -1.5939,0.34517 -7.25691,1.74362 -4.9668,3.77539 -1.19007,2.61275 -5.06969,-1.78474 -5.71093,2.74024 -1.37396,3.45939 -6.29865,0.36353 -7.30078,3.58398 -0.69418,2.8803 -3.28933,4.83289 -5.31641,6.37891 -2.60968,3.14281 -8.09381,2.12342 -11.20898,0.12109 -2.22356,0.22912 -4.12841,1.92655 -5.11329,4.1211 -2.53725,2.01896 -1.05853,5.33973 1.3711,6.77929 -0.31115,2.66814 -1.08879,6.4435 -4.04492,7.38086 2.35742,1.81257 -1.00746,3.2074 -1.59571,4.95117 -0.47797,2.54825 -2.29419,2.83777 -4.32617,3.82032 -4.32764,-0.2256 -4.42648,4.34648 -5.55469,7.39648 -2.90522,2.37904 -0.59077,1.49954 0.96485,2.76172 2.66824,1.43305 3.5427,5.82537 4.15625,8.34375 -0.97173,2.84563 1.29067,4.82932 3.95508,4.94141 -1.71892,1.86537 -1.49105,5.00869 -1.71485,7.3164 -1.55868,1.40991 -0.85311,3.86698 -1.28125,6.08008 -2.2019,1.97886 -7.34638,1.53965 -8.89453,3.94336 2.01357,1.86569 3.32396,2.71337 1.69336,5.51367 1.62611,3.73224 -1.71696,7.07657 -0.63867,10.98438 -0.72394,1.7523 0.35202,9.08477 1.44726,6.74804 2.34825,3.36467 2.27371,7.52291 2.03516,11.57813 -1.73631,3.95054 3.22378,6.90884 6.02344,4.11718 3.03784,1.8753 7.61982,1.12041 9.51367,-1.16992 2.11561,-1.10495 4.93707,-1.48065 6.00586,1.11133 3.03144,0.26571 3.96349,1.89788 4.41406,4.70703 0.6976,1.94654 1.38291,5.04068 3.08594,1.3125 2.99187,-0.24738 4.79203,-1.12542 7.42187,-0.47851 2.64371,2.69808 5.4754,0.15341 8.28711,1.98828 2.37364,1.15248 5.12761,-1.03757 7.81836,0.48242 2.59347,1.80788 3.05261,1.21001 5.22657,3.60156 1.24254,1.99717 4.09624,0.65523 4.74804,2.40625 1.23274,0.51946 2.64509,4.47116 4.29297,4.50977 2.95827,-1.37625 4.57012,-1.4387 7.28711,-0.35156 1.65599,2.03102 4.23732,2.30911 6.51367,2.0332 3.02355,-2.48862 2.47644,2.48237 5.31055,0.0469 2.79251,-0.82047 4.52313,1.02514 6.15234,3.09766 2.07412,0.19915 4.02454,2.29052 5.11914,4.16016 1.36341,1.98227 2.71592,3.23011 4.92774,3.46289 2.08062,1.59261 4.63578,1.43704 7.40429,2.30664 1.97727,0.39263 4.78954,-1.2192 6.56446,-1.78125 0.78484,-4.45598 5.4598,2.35887 6.16015,-0.25391 0.45845,1.52931 4.76779,3.78077 4.41602,-0.11328 -1.81315,-1.80852 -0.18479,-5.22433 -2.86914,-6.31445 -5.78278,-0.75157 -5.10777,-8.16613 -8.53516,-11.32813 0.0892,-2.81256 -3.27817,-2.33001 -3.84765,-4.16797 -2.50398,0.38773 -4.48185,-1.22158 -5.95118,-3.875 -2.18163,-1.87731 -2.33386,-4.50499 -5.13671,-5.63672 -2.18228,-1.18612 -4.59726,-6.16652 -6.67383,-3.44921 -2.98035,-0.70453 -8.73112,-0.64438 -8.24219,-4.56446 -1.1569,-2.12585 -5.21256,-2.91398 -6.94727,-1.08008 0.12363,-1.94867 -1.76235,-2.96417 -3.20117,-4.42773 -0.30303,-1.81758 -1.66269,-2.09871 -3.20508,-3.20312 -3.72018,0.18175 -5.40156,-3.40251 -8.79492,-5.05274 0.0512,-3.65853 -3.16107,-4.15637 -5.8164,-5.35156 -1.94249,-2.24905 -7.87438,-2.52336 -7.62305,-5.23438 2.41491,-0.76298 1.60236,-4.35393 3.88672,-4.79297 -1.49151,-0.56127 -2.898,-1.2532 -3.40821,-3.08593 -0.56473,-1.74783 -2.80885,-3.58543 -1.44726,-5.55469 3.34087,-0.30336 -2.90704,-3.67939 0.20898,-5.33399 -1.03551,-0.77279 -2.99441,-3.16033 -3.56054,-4.5664 1.63181,-3.20595 -4.793,-7.28844 -0.16797,-9.7793 3.70257,2.2e-4 2.58946,-4.53339 3.93164,-6.80078 0.4822,-2.63411 -3.2708,-7.08266 -0.54688,-8.55859 3.11245,0.0803 1.69731,-1.43037 2.06446,-3.04102 1.93028,0.0623 2.03149,-0.62773 2.875,-3.36328 3.05885,-0.95594 1.94028,-5.36119 4.32031,-6.88086 1.2866,-1.62836 4.8191,-1.5027 5.2832,-3.19922 -0.13514,-3.26002 6.23731,-2.53255 5.92188,-4.21094 -1.001,-0.52596 -1.21328,-2.5602 -0.80078,-2.8789 -1.40407,-1.91903 -0.85801,-5.52866 -0.96094,-8.28906 0.54687,-3.56829 -0.26999,-5.95825 -2.83594,-8.02735 -3.33693,1.01386 -4.92257,-2.92937 -7.98633,-3.14453 z" id="path1396" />
                        <text id="svgRegions" x="621" y="865">
                            შუახევი
                        </text>
                    </a>
                    <a xlink:href="adjara/xelvachauri.php" class="text-decoration-none">
                        <path id="group3-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 495.6875,822.73047 c -0.0576,0.0162 -0.062,0.11017 0.0176,0.32812 0.0319,0.0874 0.0657,0.17431 0.0976,0.26172 0.0322,0.0207 0.0702,0.0345 0.0957,0.0625 0.0246,0.0271 -0.0622,-0.0363 -0.0937,-0.0547 -9.2e-4,-0.002 -0.001,-0.005 -0.002,-0.008 -0.11995,-0.0771 -0.26522,-0.127 -0.35546,-0.23633 -0.007,-0.01 0.0212,-0.0251 0.0137,-0.0352 -0.0165,-0.0219 -0.0466,-0.0273 -0.0703,-0.041 -0.55797,0.001 -1.11583,2.6e-4 -1.67382,-0.004 -0.43141,5.8e-4 -0.86515,0.0375 -1.29492,-0.01 -0.12626,-0.0225 -0.20696,-0.0352 -0.21094,-0.041 -0.0398,0.0553 -0.014,0.0334 -0.67383,0.26563 -0.0661,-0.0373 0.0323,-0.11625 0.0176,-0.10742 -0.2408,0.14482 -0.43512,0.44236 -0.78321,0.36133 0.0154,-0.0152 0.0679,-0.0502 0.0469,-0.0449 -0.0438,0.011 -0.0788,0.0485 -0.12109,0.0645 -0.11637,0.0442 -0.23323,0.0833 -0.35352,0.11523 -0.007,0.002 -0.002,-0.0177 -0.01,-0.0176 -0.0231,7e-5 -0.07,0.0424 -0.0664,0.0195 -0.15104,0.1379 -0.30221,0.27456 -0.4336,0.43164 -0.0999,0.11946 -0.17852,0.28801 -0.26562,0.40625 -0.0196,0.0265 -0.0441,0.0479 -0.0684,0.0703 0.006,0.13609 0.0173,0.27213 0.004,0.4082 -0.009,0.0797 -0.0215,0.20955 -0.0371,0.29102 -0.002,0.0127 -0.006,0.0243 -0.01,0.0371 0.0431,0.0546 0.0858,0.10941 0.12891,0.16406 0.0814,0.21588 0.10485,0.26323 0.16406,0.54492 0.0423,0.20125 -0.0358,0.51705 0.004,0.72266 10e-4,0.29487 -0.0189,0.59009 -0.0137,0.88476 0.0541,0.54583 0.17473,0.68847 -0.21679,1.19141 -0.008,0.01 -0.0248,0.0239 -0.0371,0.0371 -0.002,0.0123 -0.003,0.025 -0.006,0.0371 -0.0163,0.0648 -0.044,0.12641 -0.0664,0.18945 -0.006,0.004 -0.0168,0.006 -0.0195,0.0137 -0.16449,0.43359 -0.0181,0.17087 -0.20117,0.46289 -0.13502,0.14617 -0.32759,0.34061 -0.48438,0.46289 -0.0146,0.0114 0.0288,-0.0657 0.0156,-0.0527 -0.11563,0.11442 -0.14543,0.30247 -0.30273,0.38281 -0.0821,0.0344 -0.16395,0.0692 -0.2461,0.10352 0.0171,-0.011 0.0493,-0.0469 0.0352,-0.0371 -0.0229,0.0159 -0.0448,0.0331 -0.0664,0.0508 -10e-4,9.1e-4 -0.003,0.001 -0.004,0.002 -0.0486,0.0399 -0.0957,0.0827 -0.15039,0.11328 -0.0166,0.009 0.0714,-0.084 0.0195,-0.0586 0,0 -0.002,0 -0.002,0 0,0 -0.002,0 -0.002,0 0.0608,-0.23715 -0.006,0.0422 -0.0781,0.16602 -0.12917,0.2229 -0.18559,0.21339 -0.35937,0.37695 -0.11891,0.11191 -0.22728,0.23536 -0.34766,0.3457 -0.12981,0.11899 -0.26824,0.22766 -0.40234,0.3418 -0.14918,0.12697 -0.29367,0.19941 -0.43359,0.24805 -0.43678,0.49315 -1.43159,1.0862 -1.79883,1.61328 -0.92277,1.70441 -4.44578,-0.22925 -3.82227,1.97265 1.25474,0.82656 2.20393,3.33966 2.06445,4.58594 1.41237,0.31872 -1.02022,4.11098 -2.67578,1.92188 -0.55647,-3.12904 -2.05732,-2.29713 -3.83789,-1.76172 -1.98756,1.10896 -1.42534,-3.51649 -2.93359,-0.95118 1.40772,0.92234 -0.52322,1.9322 1.14258,2.44532 1.65785,1.34239 -0.55709,2.92101 1.0957,4.48047 1.58228,2.5139 0.78746,6.04135 -1.59961,6.67382 -1.13963,1.1601 0.0332,1.49408 -1.2793,2.39258 -2.33833,0.34304 -1.37724,1.80394 0.95704,1.49414 0.0154,1.60778 2.0941,2.16616 2.72265,3.51953 0.11971,2.76958 0.40267,4.53854 0.79883,7.14844 -2.51806,-0.006 -3.55431,-1.47127 -5.38672,-2.56054 -0.80906,-2.25257 -2.88197,-2.73901 -4.48047,-4.36524 -3.86514,-2.01833 -7.78678,-3.30638 -11.67773,-4.43555 -0.35349,1.18453 -1.36735,3.95429 -1.49414,5.59961 -1.6484,0.48576 -2.06403,2.34961 -0.80078,3.40821 -0.51392,2.57437 0.41305,2.4811 -2.07813,3.95117 -0.40755,2.0685 0.31087,2.03237 0.006,2.88086 -1.68097,1.33727 -0.0999,1.74455 -0.9668,2.5664 0.88672,2.27134 -1.28697,2.4687 -1.75976,4.4961 -0.0509,2.16851 -0.1058,3.24264 -2.82813,3.6582 -0.74858,-2.36969 -5.20148,-1.79077 -4,-5.27148 -2.07581,1.30665 -2.5945,4.32381 -2.76757,6.55078 -1.24341,2.9085 2.53961,2.13131 3.93554,2.22656 2.78921,-0.72277 6.44739,1.00233 6.6211,4.38086 2.54877,0.82911 5.05103,2.18034 7.66796,3.08398 3.69533,-0.0804 4.95734,3.42062 6.40821,5.64844 1.88542,2.59242 5.82236,1.82658 8.50586,2.36133 2.48094,1.97674 5.32431,0.72259 7.63672,-0.68945 3.7685,1.73225 5.99323,-4.90332 9.74414,-2.75977 3.46016,1.86889 1.42492,6.84085 -0.44141,8.4707 -0.007,-0.37408 4.39402,1.93965 6.50195,0.98047 2.50174,1.56223 6.28907,0.1962 7.98633,2.67383 2.90664,1.43376 4.41361,3.06223 6.88281,2.17578 4.47485,-0.0493 1.39294,5.44006 4.4375,6.45117 3.64403,-0.80842 5.62985,3.36668 6.63672,6.25391 2.82569,1.1729 5.4931,-0.99688 8.0918,-2.28711 1.32383,-2.47102 2.20294,-4.45454 5.51758,-4.99805 2.32627,-2.18419 7.86105,-1.37154 7.59375,-5.60937 0.81364,-2.23582 4.52971,-2.95937 3.03906,-4.97461 1.51753,-1.58825 3.30517,-4.62204 -1.17383,-3.42578 -4.1686,-0.73824 -2.73262,-7.93678 1.45508,-7.94531 1.90846,-2.80937 -3.6593,-1.74712 -3.57813,-4.40235 -1.5059,-2.99123 -4.43993,-2.96359 -8.07617,-3.51953 -3.62258,-0.29415 -9.44215,3.08486 -11.39648,-0.70508 1.26527,-3.20765 -0.51965,-1.71982 -3.12891,-1.63086 -2.7972,0.022 -2.53451,-0.30097 -4.92383,-0.73632 -1.88883,1.2565 -4.67433,1.72769 -6.8789,1.76171 -2.30516,-2.9e-4 -4.85148,0.86395 -6.61914,-0.53711 0.63071,-2.1845 3.1068,-4.25294 5.07617,-2.67578 2.88902,1.28191 -1.04652,-2.9405 -0.27539,-4.5039 1.86151,-1.39434 -0.21903,-3.62186 0.32031,-5.6211 -0.65994,-2.73949 -2.54702,-3.38556 -0.73242,-5.78906 0.20277,-3.1892 3.04571,-5.32191 5.45508,-6.58398 1.685,-4.04274 6.2258,-5.40309 9.14258,-8.79688 4.52113,-0.3713 6.40681,-4.5847 3.88086,-8.23437 -3.54295,-0.20011 -3.8743,-3.91304 -2.54493,-6.32422 3.10323,-3.29877 -1.16061,-4.82971 -3.7207,-2.99805 -2.31337,2.02039 -4.40606,0.0867 -7.06055,-0.29297 -3.16893,1.28337 -3.92882,-2.55834 -5.38086,-1.03515 -0.70762,-1.30954 -4.71403,0.31774 -4.31836,-1.3711 -0.11413,-2.62856 -4.18275,-1.15618 -3.31445,-4.28906 2.34042,-1.11818 -0.3971,-1.44024 -0.52734,-3.25195 -0.5018,-0.11366 -0.60184,-0.51683 -0.58399,-1.03125 -0.2946,-0.0434 -0.98,-0.7298 -1.1582,-0.67969 z" id="path1386" />
                        <text id="svgRegions" x="455" y="895">
                            ხელვაჩაური
                        </text>
                    </a>
                    <a xlink:href="adjara/qeda.php" class="text-decoration-none">
                        <path id="group3-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 574.39844,816.75781 c -0.61781,0.2983 -1.25947,0.58396 -1.88672,0.87696 -2.57587,4.30492 -1.70343,9.21746 -4.79492,13.10937 -0.46581,3.82578 -2.80728,5.21807 -5.86133,6.77539 -1.98665,1.58728 -4.15974,2.55081 -5.27344,2.44531 -1.69726,0.0635 -3.33919,0.857 -4.96094,1.59961 -1.34889,2.0613 -2.85545,-2.45926 -3.79492,-0.19336 -2.73086,1.81706 -6.81036,1.61946 -8.91797,5.61719 -3.57746,1.43636 -3.44779,6.13722 -7.56445,6.57617 -3.49757,-0.64409 -7.86147,-3.03156 -11.22656,0.30078 -2.73459,3.31592 -7.192,4.44773 -8.32031,8.73633 -3.89747,0.16683 -5.22157,4.95572 -5.30274,7.48828 1.59742,1.44074 0.72526,3.08329 1.44141,5.60743 1.60207,2.54067 -2.13243,4.70446 0.71875,6.15234 1.37087,3.31753 -1.79885,3.91818 -3.71094,2.27734 -1.98842,-0.1936 -2.42869,2.84249 0.15625,1.65039 2.89043,0.16951 5.22568,-0.38979 8.12305,-0.96093 1.19444,-1.30389 4.25971,-1.12646 5.5957,-0.004 1.72009,-0.27443 6.44864,-1.97719 5.91797,0.34375 -2.08585,5.11462 5.88873,1.60915 8.60156,2.08008 2.63774,0.35029 9.3168,-1.05605 8.84766,3.07031 1.55828,1.87294 4.17114,2.70675 5.80078,4.08594 -1.03893,2.85213 -7.87614,5.3831 -3.27149,8.45508 4.2293,1.06217 6.67446,-1.62482 8.32618,-4.27344 2.32958,-3.05299 6.47688,-2.43158 8.45703,-5.33203 3.02258,-1.50132 4.62754,-5.41305 8.60937,-4.24805 2.22153,2.49703 4.88266,-0.22181 7.11133,1.73828 1.89318,1.89737 1.32856,4.07834 2.17969,6.69922 3.04456,0.44757 6.22577,2.2796 9.88867,2.26563 1.52265,2.57365 5.77735,4.00557 7.5,0.95898 3.04979,1.08159 3.79877,-2.70214 6.91992,-3.01367 2.56659,-1.30516 6.69753,-2.48068 8.61133,-0.12891 1.97012,-0.88756 5.80858,-1.38308 4.46875,-5.13281 -0.12928,-2.0498 0.64068,-7.49457 -1.38672,-7.23438 -2.03028,-2.83827 -2.67623,-6.5409 -2.13281,-10.05468 -1.37619,-3.74312 2.2969,-6.96901 0.63867,-10.50391 1.90985,-3.04243 -1.86502,-4.39273 -2.08008,-6.97266 2.27486,-1.42462 5.78999,-2.39172 8.94922,-3.19921 1.53801,-1.84746 -0.65505,-5.213 1.45117,-6.24219 7e-4,-2.48883 2.27269,-5.7924 -0.48633,-7.0918 -2.88216,-0.71967 -1.12327,-3.23787 -2.07421,-4.94922 0.46047,-3.00093 -1.93299,-6.93068 -4.32422,-7.85156 -5.24275,0.30933 -0.64476,-2.36706 0.16406,-4.66016 2.45385,-3.68292 -3.55021,-2.94802 -5.76758,-3.02343 -3.97127,0.81962 -5.76722,-1.12013 -9.33594,-1.11914 -4.31399,-0.6581 -8.32276,-1.79672 -12.77734,-1.1211 -4.59324,1.17695 -8.88857,-0.67387 -13.22656,-1.59961 z" id="path1388" />
                        <text id="svgRegions" x="545" y="865">
                            ქედა
                        </text>
                    </a>
                    <a xlink:href="adjara/batumi.php" class="text-decoration-none">
                        <path id="group3-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 498.34375,806.51758 c -3.24541,0.93322 -2.96683,7.35544 -6.67773,8.64258 -1.77471,2.69459 -2.9277,5.57577 -4.68555,8.16796 -0.85365,1.37311 -1.62854,2.41344 -3.44922,3.35352 -2.45523,3.10675 -4.09831,7.6465 -7.85742,7.19922 -0.075,0.21826 -5.47644,2.76808 -5.28125,-0.88672 -0.45493,-0.94506 -0.52472,-3.60609 -2.44727,-2.47266 -6.66864,3.70877 -10.32302,9.97134 -15.20117,15.04297 -0.74154,3.29416 -5.1635,4.54395 -5.60547,7.51758 -2.49342,7.67034 -1.70477,16.12991 -3.67969,23.51758 -1.94323,1.64095 0.68122,2.71016 1.44141,3.56836 1.76174,1.83486 2.41715,-0.27456 2.45117,-2.07422 1.40224,-1.31114 1.89222,-2.51728 1.60156,-5.12109 1.12868,-1.07071 1.40373,-2.59219 0.96094,-4.63868 0.57919,-0.89012 3.43693,-1.95346 1.59961,-3.11718 -0.81311,-1.7122 0.52798,-4.92412 1.55469,-4.5625 0.56447,-1.67455 1.0212,-4.05455 1.95703,-5.91992 3.9941,0.74666 7.85542,2.75015 12.12109,4.31835 2.30047,1.70164 4.89868,2.89032 5.91407,5.27344 1.24105,0.74079 3.41923,3.00511 2.45312,-0.38867 -0.91475,-1.94078 0.25283,-2.86462 -1.28711,-4.13672 -1.22868,-1.48959 -2.08079,-2.24912 -4.15234,-2.55859 -2.13033,-1.69631 -0.14718,-2.44295 1.5918,-2.82813 0.48391,-1.71211 1.24789,-2.46474 2.42578,-3.04492 -0.0656,-0.24793 2.35753,-3.35918 0.46289,-3.72852 -1.30826,-1.04809 -0.27639,-4.22499 -1.28907,-4.48242 -0.0137,-2.24958 -1.09996,-1.68747 -1.27148,-4.58398 0.36672,-1.69198 4.13882,-2.05944 4.54102,-0.80078 0.0946,1.07101 4.05366,0.22464 4.83007,1.83789 -0.0679,-0.97369 -0.25244,-2.04758 -0.73242,-1.73242 -0.39162,-1.60351 -2.91276,-3.21344 -0.16601,-4.58399 2.51279,0.63146 3.71248,-1.3309 5.23047,-2.22461 0.0623,-0.0844 0.13332,-0.17011 0.23632,-0.2539 0.32553,-0.26432 0.62275,-0.55783 0.92969,-0.8418 0.0236,-0.049 0.0471,-0.0992 0.0703,-0.14844 0.0598,-0.071 0.1065,-0.15329 0.17774,-0.21289 0.0969,-0.0811 0.21687,-0.13073 0.32031,-0.20312 0.0114,-0.007 -0.0523,0.0176 -0.041,0.01 0.0812,-0.0582 0.17089,-0.11527 0.26758,-0.1543 0.0927,-0.12619 0.24569,-0.24188 0.33008,-0.32031 0.022,-0.0204 0.0363,-0.0466 0.0547,-0.0703 0.0743,-0.057 0.15059,-0.11207 0.22265,-0.17188 0.0201,-0.0166 -0.0442,0.0273 -0.0664,0.041 0.007,-0.0145 0.0342,-0.0531 0.0215,-0.043 -0.0205,0.0162 -0.054,0.0876 -0.0469,0.0625 0.0242,-0.0863 0.0682,-0.166 0.0996,-0.25 0.007,-0.0263 0.0155,-0.0518 0.0234,-0.0781 -0.004,-0.002 -0.0131,-0.002 -0.0117,-0.006 0.0304,-0.10229 0.0687,-0.20185 0.10351,-0.30274 0.11563,-0.10417 0.0794,-0.0751 0.14258,-0.13476 -0.0139,-0.1112 -0.0319,-0.26331 -0.0352,-0.29492 -0.0211,-0.33433 0.008,-0.66932 0.006,-1.00391 -10e-4,-0.20511 -0.002,-0.41012 -0.002,-0.61524 -3e-5,-0.0387 0.0146,-0.0794 0,-0.11523 -0.007,-0.0165 -0.01,0.0229 -0.0137,0.0508 0,0 0,0.002 0,0.002 0,0 -0.002,0 -0.002,0 -10e-4,0.008 -0.002,0.0104 -0.004,0.0156 -0.002,-0.007 -0.005,-0.0129 -0.008,-0.0195 -0.0227,0.005 -0.0643,-0.0552 -0.0801,-0.0898 -0.2541,-0.555 -0.18816,-0.61037 -0.13086,-1.13282 0.0229,-0.13029 -0.0572,-0.41762 -0.0137,-0.51953 0.0846,-0.19853 0.20301,-0.38192 0.30468,-0.57226 0.0429,-0.0432 0.0908,-0.0815 0.12891,-0.12891 0.0126,-0.0157 -0.06,0.0511 -0.0508,0.0332 0.20028,-0.3905 0.55207,-0.70066 0.87109,-0.99218 0.33753,-0.21335 0.40918,-0.19247 0.78125,-0.24805 0.0423,-0.006 -0.0909,0.0257 -0.1289,0.006 -0.023,-0.0118 0.0435,-0.0297 0.0684,-0.0371 0.122,-0.0362 0.24764,-0.061 0.37109,-0.0918 0.0306,-3.6e-4 0.0611,-0.002 0.0918,-0.002 -0.007,-0.002 -0.0205,10e-4 -0.0254,-0.002 -0.0328,-0.021 0.0534,-0.06 0.0879,-0.0781 0.12678,-0.0667 0.25436,-0.13628 0.39257,-0.17383 0.12029,-0.0327 0.21613,-0.0387 0.31055,-0.0332 0.0787,-0.059 0.15347,-0.1295 0.2461,-0.16211 0.16807,-0.0592 0.31938,-0.0779 0.4707,-0.0762 0.15132,0.002 0.30306,0.0245 0.46875,0.0527 0.35897,0.0141 0.71857,-0.009 1.07812,-0.01 0.55788,0.004 1.11401,0.005 1.67188,0.004 0.37059,0.004 0.62351,0.21412 0.91406,0.4043 0.13009,0.0851 0.16048,0.0498 0.30274,0.1875 0.0951,0.0922 0.1691,0.20496 0.2539,0.30664 0.0122,0.0515 0.0249,0.10285 0.0371,0.1543 0.15952,-1.14256 0.47312,-2.55516 -0.9043,-3.17188 -1.47563,-1.31689 -0.24362,-1.27648 -0.79882,-3.78515 1.94067,-0.21558 1.85071,-3.18783 3.83203,-3.83985 1.59386,-1.26473 0.72302,-3.34559 2.24023,-4.64062 -0.23082,-0.81867 -1.33654,0.44201 -2.91797,-0.85547 z" id="path1394" />
                        <text id="svgRegions" x="430" y="848">
                            ბათუმი
                        </text>
                    </a>

                </g>
            </svg>
        </div>

        <table class="machveneblebi-right">
            <?php
            include('connection.php');
            $query = mysqli_query($link, "select * from `regions` where ID = 4");
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