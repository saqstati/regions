<?php
header("Content-Type: application/xls");
header('Content-Encoding: UTF-8');
header("Content-Transfer-Encoding: binary");
header('Expires: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header("Pragma: no-cache");
header("Expires: 0");

require_once 'connection.php';

$lang = isset($_GET['lang']) ? $_GET['lang'] : 'ka';
$key = isset($_GET['key']) ? preg_replace('/[^0-9,]/', '', $_GET['key']) : '0';
$mun = isset($_GET['mun']) ? preg_replace('/[^0-9,]/', '', $_GET['mun']) : '0';
$key_array = explode(',', $key);

// ===== DYNAMIC FILENAME GENERATION =====
$filename = "municipalities_export_" . date('Y-m-d_H-i');
$filename .= "_" . ($lang == 'en' ? 'en' : 'ka');
if (!empty($key_array)) {
    $indicator_suffix = implode('-', array_slice($key_array, 0, 3));
    $filename .= "_indicators-" . $indicator_suffix;
}
$filename .= ".xls";
header("Content-Disposition: attachment; filename=$filename");
// ======================================

ob_start();

$output = "";

// Create array of selected indicator IDs
$key_array = explode(',', $key);

$output .= "
        <table>
            <thead>
                <tr>
                ";

if ($lang == 'en') {
    $output .= "<th>Municipaliteties</th>";
    $output .= in_array('1', $key_array) ? "<th>Area (sq.km)</th>" : "";
    $output .= in_array('2', $key_array) ? "<th>Number of cities and towns (unit)</th>" : "";
    $output .= in_array('3', $key_array) ? "<th>Number of villages (unit)</th>" : "";
    $output .= in_array('4', $key_array) ? "<th>Population (thousands)</th>" : "";
    $output .= in_array('5', $key_array) ? "<th>Number of live births (male)</th>" : "";
    $output .= in_array('6', $key_array) ? "<th>General birth rate (number of births per 1000 people)</th>" : "";
    $output .= in_array('7', $key_array) ? "<th>Number of Death (persons)</th>" : "";
    $output .= in_array('8', $key_array) ? "<th>General mortality rate (number of deaths per 1000 people)</th>" : "";
    $output .= in_array('9', $key_array) ? "<th>Natural Increase (persons)</th>" : "";
    $output .= in_array('10', $key_array) ? "<th>Number of employees in the business sector (thousands of people)</th>" : "";
    $output .= in_array('11', $key_array) ? "<th>Average monthly salary of employees in the business sector (GEL)</th>" : "";
    $output .= in_array('12', $key_array) ? "<th>Number of registered economic entities (unit)</th>" : "";
    $output .= in_array('13', $key_array) ? "<th>Number of active economic entities (unit)</th>" : "";
    $output .= in_array('14', $key_array) ? "<th>Number of newly registered economic entities (units)</th>" : "";
} else {
    $output .= "<th>მუნიციპალიტეტი</th>";
    $output .= in_array('1', $key_array) ? "<th>ფართობი (კვ.კმ)</th>" : "";
    $output .= in_array('2', $key_array) ? "<th>ქალაქების და დაბების რაოდენობა (ერთეული)</th>" : "";
    $output .= in_array('3', $key_array) ? "<th>სოფლების რაოდენობა (ერთეული)</th>" : "";
    $output .= in_array('4', $key_array) ? "<th>მოსახლეობის რიცხოვნობა (ათასი)</th>" : "";
    $output .= in_array('5', $key_array) ? "<th>ცოცხლად დაბადებულთა რიცხოვნობა (კაცი)</th>" : "";
    $output .= in_array('6', $key_array) ? "<th>შობადობის ზოგადი კოეფიციენტი (დაბადებულთა რიცხოვნობა მოსახლეობის 1000 კაცზე)</th>" : "";
    $output .= in_array('7', $key_array) ? "<th>გარდაცვლილთა რიცხოვნობა (კაცი)</th>" : "";
    $output .= in_array('8', $key_array) ? "<th>მოკვდაობის ზოგადი კოეფიციენტი (გარდაცვლილთა რიცხოვნობა მოსახლეობის 1000 კაცზე)</th>" : "";
    $output .= in_array('9', $key_array) ? "<th>ბუნებრივი მატება (კაცი)</th>" : "";
    $output .= in_array('10', $key_array) ? "<th>დასაქმებულთა რაოდენობა-ბიზნეს სექტორში (ათასი კაცი)</th>" : "";
    $output .= in_array('11', $key_array) ? "<th>დასაქმებულთა საშუალოთვიური ხელფასი-ბიზნეს სექტორში (ლარი)</th>" : "";
    $output .= in_array('12', $key_array) ? "<th>რეგისტრირებული ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>" : "";
    $output .= in_array('13', $key_array) ? "<th>აქტიური ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>" : "";
    $output .= in_array('14', $key_array) ? "<th>ახლადრეგისტრირებული ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>" : "";
}

$output .= "                    
                </tr>
            <tbody>
    ";

// Count total municipalities in the database
$count_query = mysqli_query($link, "SELECT COUNT(*) as total FROM municipalitiesaz");
$count_result = mysqli_fetch_assoc($count_query);
$total_municipalities = $count_result['total'];

// If number of selected municipalities equals total, or if a specific "all" flag is set
if (substr_count($mun, ',') + 1 >= $total_municipalities - 1) {
    // Get all municipalities without filtering
    $query = mysqli_query($link, "SELECT * FROM `municipalitiesaz` ORDER BY " . ($lang == 'en' ? "NameEN" : "Name") . " ASC");
} else {
    // Use the selected municipalities
    $query = mysqli_query($link, "SELECT * FROM `municipalitiesaz` WHERE ID IN(" . $mun . ") ORDER BY " . ($lang == 'en' ? "NameEN" : "Name") . " ASC");
}

while ($fetch = $query->fetch_array()) {
    $output .= "
                <tr>
                    <td>" . ($lang == 'en' ? $fetch['NameEN'] : $fetch['Name']) . "</td>";

    $output .= in_array('1', $key_array) ? "<td>" . $fetch['Area'] . "</td>" : "";
    $output .= in_array('2', $key_array) ? "<td>" . $fetch['NumberOfCT'] . "</td>" : "";
    $output .= in_array('3', $key_array) ? "<td>" . $fetch['Villages'] . "</td>" : "";
    $output .= in_array('4', $key_array) ? "<td>" . $fetch['Population'] . "</td>" : "";
    $output .= in_array('5', $key_array) ? "<td>" . $fetch['LiveBirths'] . "</td>" : "";
    $output .= in_array('6', $key_array) ? "<td>" . $fetch['GeneralBirthRate'] . "</td>" : "";
    $output .= in_array('7', $key_array) ? "<td>" . $fetch['Dead'] . "</td>" : "";
    $output .= in_array('8', $key_array) ? "<td>" . $fetch['GeneralMortalityRate'] . "</td>" : "";
    $output .= in_array('9', $key_array) ? "<td>" . $fetch['NaturalIncrease'] . "</td>" : "";
    $output .= in_array('10', $key_array) ? "<td>" . $fetch['Employees'] . "</td>" : "";
    $output .= in_array('11', $key_array) ? "<td>" . $fetch['AVGSalary'] . "</td>" : "";
    $output .= in_array('12', $key_array) ? "<td>" . $fetch['RegEcSub'] . "</td>" : "";
    $output .= in_array('13', $key_array) ? "<td>" . $fetch['ActEcSub'] . "</td>" : "";
    $output .= in_array('14', $key_array) ? "<td>" . $fetch['NewlyEcEnt'] . "</td>" : "";

    $output .= "</tr>";
}

$output .= "
            </tbody>
        </table>
    ";

echo $output;
ob_end_flush();
