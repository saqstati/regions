<?php
include "../config.php";

$current_page = isset($_GET['region']) ? $_GET['region'] : basename($_SERVER['PHP_SELF']);
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en'; // Default to English if no lang specified

if ($current_page == 'regionComp.php') {
    $page_title = $lang == 'en' ? 'Comparison of Key Indicators by Regions of Georgia' : 'ძირითადი მაჩვენებლების შედარება საქართველოს რეგიონების მიხედვით';
    $copy1 = $lang == 'en' ? 'This website has been produced with the assistance of the European Union, Denmark and the United Nations Development Programme (UNDP).' : 'ვებგვერდი შექმნილია ევროკავშირის, დანიისა და გაეროს განვითარების პროგრამის მხარდაჭერით. მის შინაარსზე სრულად პასუხისმგებელია საქართველოს სტატისტიკის ეროვნული სამსახური.';
    $copy2 = $lang == 'en' ? 'Its contents are the sole responsibility of the GEOSTAT and do not necessarily reflect the views of the European Union, Denmark and UNDP.' : 'ვებგვერდის შინაარსი შესაძლოა არ გამოხატავდეს ევროკავშირის, დანიისა და გაეროს განვითარების პროგრამის შეხედულებებს.';
    $copy3 = $lang == 'en' ? 'Terms of Use' : 'მონაცემთა გამოყენების პირობები';
} else {
    $page_title = $lang == 'en' ? 'Loading...' : 'ჩატვირთვა...';
}

$lang_url_ka = "regionComp.php?lang=ka";
$lang_url_en = "regionComp.php?lang=en";
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Compare key indicators across the regions of Georgia.">
    <meta property="og:url" content="http://www.geostat.ge/regions/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $page_title ?>" />
    <meta property="og:description" content="<?php echo $page_title ?>" />
    <meta property="og:image" content="http://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:secure_url" content="https://www.geostat.ge/regions/images/regionsbanner1.png" />
    <meta property="og:image:width" content="740" />
    <meta property="og:image:height" content="450" />
    <meta property="og:locale" content="ka_GE" />

    <!-- Page Title -->
    <title class="tr" key="PAGE_TITLE"><?php echo $page_title ?></title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@1.5.2/dist/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../custom.css">
    <link rel="stylesheet" href="css/comparison.css">
    <link rel="stylesheet" href="../mediastyles.css">
    <link rel="stylesheet" href="../multiselect/styles/multiselect.css">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="../multiselect/multiselect.min.js"></script>
</head>

<body>
    <div id="background-main" class="background-image"></div>

    <div class="container content py-3">
        <?php include 'components/header.php'; ?>

        <form method="POST" action="" name="applyform" class="w-100">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover text-light">
                    <?php
                    require '../connection.php';
                    $query = mysqli_query($link, "SELECT * FROM `regions`");
                    $i = '';
                    while ($fetch = mysqli_fetch_array($query)) {
                    ?>
                        <!-- Your table rows and data will go here -->
                    <?php
                        $i = ($i == '') ? 2 : $i + 1;
                    }
                    ?>
                </table>
            </div>
        </form>
    </div>

    <?php
    $j = 0;
    if ($lang == 'en') {
        $item[$j++][0] = "";
        $item[$j++][0] = "Area (sq. km)";
        $item[$j++][0] = "The Number of Population (thousands)";
        $item[$j++][0] = "Number of live births (persons):";
        $item[$j++][0] = "Number of deaths (persons)";
        $item[$j++][0] = "Natural Increase (persons)";
        $item[$j++][0] = "Gross Domestic Product (Mil. GEL)";
        $item[$j++][0] = "Gross Domestic Product per capita (USD)";
        $item[$j++][0] = "Unemployment Rate (percentage)";
        $item[$j++][0] = "Employed (thousand person)";
        $item[$j++][0] = "Employment Level in Bussiness Sector (thousand person)";
        $item[$j++][0] = "Average monthly remuneration of employed persons (GEL)";
        $item[$j++][0] = "The Number of Registered Business Entities (unit)";
        $item[$j++][0] = "Number of active economic entities (units):";
        $item[$j++][0] = "Number of newly registered economic entities (units):";
    } else {
        $item[$j++][0] = "";
        $item[$j++][0] = "ფართობი (კვ.კმ)";
        $item[$j++][0] = "მოსახლეობის რიცხოვნობა (ათასი)";
        $item[$j++][0] = "ცოცხლად დაბადებულთა რიცხოვნობა (კაცი):";
        $item[$j++][0] = "გარდაცვლილთა რიცხოვნობა (კაცი):";
        $item[$j++][0] = "ბუნებრივი მატება (კაცი):";
        $item[$j++][0] = "მთლიანი შიდა პროდუქტი (მლნ. ლარი)";
        $item[$j++][0] = "მთლიანი შიდა პროდუქტი ერთ სულ მოსახლეზე (აშშ დოლარი)";
        $item[$j++][0] = "უმუშევრობის დონე (%)";
        $item[$j++][0] = "დასაქმებულთა რაოდენობა, სულ (ათასი კაცი)";
        $item[$j++][0] = "დასაქმებულთა რაოდენობა - ბიზნეს სექტორში (ათასი კაცი)";
        $item[$j++][0] = "დასაქმებულთა საშუალოთვიური ხელფასი - ბიზნეს სექტორში (ლარი)";
        $item[$j++][0] = "რეგისტრირებული ეკონომიკური სუბიექტების რაოდენობა (ერთეული)";
        $item[$j++][0] = "მოქმედი ეკონომიკური სუბიექტების რაოდენობა (ერთეული)";
        $item[$j++][0] = "ახლადრეგისტრირებული ეკონომიკური სუბიექტების რაოდენობა (ერთეული)";
    }
    $i = 0;
    $result = mysqli_query($link, "SELECT * FROM `regionsaz`");
    while ($row = $result->fetch_assoc()) {
        $i++;
        $j = 0;
        if ($lang == "en") {
            $item[$j++][$i] = $row["NameEN"];
        } else {
            $item[$j++][$i] = $row["Name"];
        }
        $item[$j++][$i] = $row["Area"];
        $item[$j++][$i] = $row["Population"];
        $item[$j++][$i] = $row["liveBirth"];
        $item[$j++][$i] = $row["death"];
        $item[$j++][$i] = $row["naturalIncrease"];
        $item[$j++][$i] = $row["GDP"];
        $item[$j++][$i] = $row["GDPPerCapita"];
        $item[$j++][$i] = $row["UnemploymentRate"];
        $item[$j++][$i] = $row["EmploymentRate"];
        $item[$j++][$i] = $row["EmploymentRateIndustry"];
        $item[$j++][$i] = $row["AverageSalaryIndustry"];
        $item[$j++][$i] = $row["RegistredEntities"];
        $item[$j++][$i] = $row["activeEntities"];
        $item[$j++][$i] = $row["newlyRegistredEntities"];
    }

    ?>

    <div class="container">
        <div class="row mb-4">
            <div class="col-md-6 mb-3">
                <div class="maps d-flex flex-column align-items-center">
                    <span class="selector-text">
                        <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Choose Regions' : 'აირჩიეთ რეგიონები'; ?>
                    </span>
                    <select id="municipaliteties" name="states[]" multiple="multiple" class="form-select" style="width: 100%;">
                        <?php foreach ($item[0] as $x => $y) if ($x > 0) { ?>
                            <option value="<?php echo $x; ?>"><?php echo $y; ?></option>
                        <?php } ?>
                    </select>
                    <img class="mt-3 responsive-img" src="../1600-900-optimized/geomaps.png" alt="chart">
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="chart d-flex flex-column align-items-center">
                    <span class="selector-text">
                        <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Choose Indicators' : 'აირჩიეთ მაჩვენებლები'; ?>
                    </span>
                    <select id="key_indicators" name="states[]" multiple="multiple" class="form-select" style="width: 100%;">
                        <?php foreach ($item as $x => $y) if ($x > 0) { ?>
                            <option value="<?php echo $x; ?>"><?php echo $y[0]; ?></option>
                        <?php } ?>
                    </select>
                    <img class="mt-3 responsive-img" src="../1600-900-optimized/1612523122750-Charts.jpg" alt="chart">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button id="srch" type="button" class="btn btn-danger" data-bs-toggle="button" onclick="addbackcolor()">
                <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Search' : 'ძიება'; ?>
            </button>
        </div>
    </div>

    <?php
    $tableRight = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'key_indicators_en' : 'key_indicators';
    $stmt = $link->prepare("SELECT * FROM " . $tableRight);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $dataHover[$row['ID']] = $row['dataHover'];
    }
    ?>

    <table id="center_table" class="table table-sm table-responsive table-bordered table-hover mt-5">
        <tbody id="cxrili">
            <?php $index = 0; ?>
            <?php foreach ($item as $k => $v) { ?>
                <tr>
                    <?php foreach ($v as $l => $b) { ?>
                        <?php if ($k == 0 && $l == 0) { ?>
                            <td class="td-empty" style="height : 160px !important; border:none;">
                                <br><?php echo $b; ?>
                                <br>

                            </td>
                        <?php } else if ($k == 0) { ?>
                            <th class="machveneblebi_height Col<?php echo $k; ?> Row<?php echo $l; ?> table<?php echo $k . "_" . $l; ?>" style="height : 50px !important;display:none;"><?php echo $b; ?></th>
                        <?php } else if ($l == 0) { ?>
                            <?php if ($index <= 15) $index = $index + 1;  ?>
                            <td title="" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-content="<?php echo $dataHover[$index] ?>" class="regionebi reg Col<?php echo $k; ?> Row<?php echo $l; ?>" style="height : 160px !important; width: 131px; display:none; border-bottom: 1px solid #dee2e6"><?php echo $b; ?></td>
                        <?php } else { ?>
                            <td class="Col<?php echo $k; ?> Row<?php echo $l; ?> table<?php echo $k . "_" . $l; ?>" style="height : 50px !important; text-align: right;display: none;">
                                <div style=""><?php echo $b; ?></div>
                            </td>
                        <?php } ?>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <div id="displayNone" class="download justify-content-center displayNone">
        <button id="export" type="button" class="btn btn-success d-flex align-items-center gap-2">
            <i class="fas fa-download" aria-hidden="true"></i>
            <span><?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'Download' : 'გადმოწერა'; ?></span>
        </button>
    </div>

    <?php include 'components/footer.php'; ?>

    <script>
        $("#srch").on("click", function(e) {
            var i, j;
            var selected;
            selected = $('#municipaliteties').val();
            for (j = 1; j <= 64; j++) {
                if (!inArray(selected, j)) $(".Row" + j).hide();
                else $(".Row" + j).show();
            }
            selected = $('#key_indicators').val();
            if (selected != '') $(".Row0").show();
            for (j = 1; j <= 15; j++) {
                if (!inArray(selected, j)) $(".Col" + j).hide();
            }
        });

        function ShowCol(t, i) {
            console.log($('#municipaliteties').val());

            var j;
            var selected = $('.js-example-basic-multiple').val();
            if (t.checked == false) $(".Col" + i).hide();
            else {
                $(".Col" + i).show();
                for (j = 1; j <= 64; j++) {

                    if (!inArray(selected, j)) $(".Row" + j).hide();
                }
            }
        }

        $(document).ready(function() {
            $('#municipaliteties').multiselect();
            $('#key_indicators').multiselect();

            $('#export').on('click', function() {
                var mun = $('#municipaliteties').val().join(',');
                var key = $('#key_indicators').val().join(',');
                if (mun != '' && key != '')
                    window.location = "/regions/export_excel_reg.php?mun=" + mun + "&key=" + key + "&lang=<?php echo $lang; ?>";
            });
        });


        function inArray(haystack, needle) {
            var length = haystack.length;
            for (var i = 0; i < length; i++) {
                if (haystack[i] == needle) return true;
            }
            return false;
        }
    </script>

    <script type="text/javascript" src="../lang.js"></script>
    <script src="../script.js"></script>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>
    <script src="../multiselect/multiselect.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#municipalities, #key_indicators').select2({
                theme: 'bootstrap4',
                placeholder: '<?php echo $lang == "en" ? "Select Options" : "აირჩიეთ პარამეტრები"; ?>'
            });
        });
    </script>
</body>

</html>