<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="http://www.geostat.ge/regions/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="სტატისტიკური ინფორმაცია აჭარის რეგიონის ქედას შესახებ" />
    <meta property="og:description" content="სტატისტიკური ინფორმაცია აჭარის რეგიონის ქედას შესახებ" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <title class="tr" Key="PAGE_TITLE">სტატისტიკური ინფორმაცია აჭარის რეგიონის ქედას შესახებ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../samegrelo.css">
    <link rel="stylesheet" type="text/css" href="../adjara/adjara.css">
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
                <p id="pagetitlename" class="tr" Key="REGION14">სტატისტიკური ინფორმაცია აჭარის რეგიონის ქედას შესახებ</p>
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
            <a class="regions-btn" href="../list.php"><span class="tr" Key="regionsBtn">რეგიონების შედარება</span></a>
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
                    <a xlink:href="../adjara.php" class="text-decoration-none">
                        <path id="group3-zoomed" class="nonactive" data-clicked="false" data-scale="2.15" data-trans-x="-660" data-trans-y="-280" d="m 574.39844,816.75781 c -0.61781,0.2983 -1.25947,0.58396 -1.88672,0.87696 -2.57587,4.30492 -1.70343,9.21746 -4.79492,13.10937 -0.46581,3.82578 -2.80728,5.21807 -5.86133,6.77539 -1.98665,1.58728 -4.15974,2.55081 -5.27344,2.44531 -1.69726,0.0635 -3.33919,0.857 -4.96094,1.59961 -1.34889,2.0613 -2.85545,-2.45926 -3.79492,-0.19336 -2.73086,1.81706 -6.81036,1.61946 -8.91797,5.61719 -3.57746,1.43636 -3.44779,6.13722 -7.56445,6.57617 -3.49757,-0.64409 -7.86147,-3.03156 -11.22656,0.30078 -2.73459,3.31592 -7.192,4.44773 -8.32031,8.73633 -3.89747,0.16683 -5.22157,4.95572 -5.30274,7.48828 1.59742,1.44074 0.72526,3.08329 1.44141,5.60743 1.60207,2.54067 -2.13243,4.70446 0.71875,6.15234 1.37087,3.31753 -1.79885,3.91818 -3.71094,2.27734 -1.98842,-0.1936 -2.42869,2.84249 0.15625,1.65039 2.89043,0.16951 5.22568,-0.38979 8.12305,-0.96093 1.19444,-1.30389 4.25971,-1.12646 5.5957,-0.004 1.72009,-0.27443 6.44864,-1.97719 5.91797,0.34375 -2.08585,5.11462 5.88873,1.60915 8.60156,2.08008 2.63774,0.35029 9.3168,-1.05605 8.84766,3.07031 1.55828,1.87294 4.17114,2.70675 5.80078,4.08594 -1.03893,2.85213 -7.87614,5.3831 -3.27149,8.45508 4.2293,1.06217 6.67446,-1.62482 8.32618,-4.27344 2.32958,-3.05299 6.47688,-2.43158 8.45703,-5.33203 3.02258,-1.50132 4.62754,-5.41305 8.60937,-4.24805 2.22153,2.49703 4.88266,-0.22181 7.11133,1.73828 1.89318,1.89737 1.32856,4.07834 2.17969,6.69922 3.04456,0.44757 6.22577,2.2796 9.88867,2.26563 1.52265,2.57365 5.77735,4.00557 7.5,0.95898 3.04979,1.08159 3.79877,-2.70214 6.91992,-3.01367 2.56659,-1.30516 6.69753,-2.48068 8.61133,-0.12891 1.97012,-0.88756 5.80858,-1.38308 4.46875,-5.13281 -0.12928,-2.0498 0.64068,-7.49457 -1.38672,-7.23438 -2.03028,-2.83827 -2.67623,-6.5409 -2.13281,-10.05468 -1.37619,-3.74312 2.2969,-6.96901 0.63867,-10.50391 1.90985,-3.04243 -1.86502,-4.39273 -2.08008,-6.97266 2.27486,-1.42462 5.78999,-2.39172 8.94922,-3.19921 1.53801,-1.84746 -0.65505,-5.213 1.45117,-6.24219 7e-4,-2.48883 2.27269,-5.7924 -0.48633,-7.0918 -2.88216,-0.71967 -1.12327,-3.23787 -2.07421,-4.94922 0.46047,-3.00093 -1.93299,-6.93068 -4.32422,-7.85156 -5.24275,0.30933 -0.64476,-2.36706 0.16406,-4.66016 2.45385,-3.68292 -3.55021,-2.94802 -5.76758,-3.02343 -3.97127,0.81962 -5.76722,-1.12013 -9.33594,-1.11914 -4.31399,-0.6581 -8.32276,-1.79672 -12.77734,-1.1211 -4.59324,1.17695 -8.88857,-0.67387 -13.22656,-1.59961 z" id="path1388" />
                        <text id="svgRegions" x="545" y="865">
                            ქედა
                        </text>
                    </a>

                </g>
            </svg>
        </div>
        <table class="machveneblebi-right">
            <?php
            include('../connection.php');
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

        <script src="../script.js"></script>
        <script type="../text/javascript" src="lang.js"></script>
</body>

</html>