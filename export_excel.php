<?php
header("Content-Type: application/xls");
header('Content-Encoding: UTF-8');
header("Content-Transfer-Encoding: binary");
header('Expires: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header("Content-Disposition: attachment; filename=municipaliteties.xls");
header("Pragma: no-cache");
header("Expires: 0");
ob_clean();
flush();

require_once 'connection.php';

$lang = isset($_GET['lang']) ? $_GET['lang'] : 'ka'; // Default to Georgian if no lang specified
$key = isset($_GET['key']) ? $_GET['key'] : '0';
$mun = isset($_GET['mun']) ? $_GET['mun'] : '0';

$output = "";

$output .= "
		<table>
			<thead>
				<tr>
				";

if ($lang == 'en') {
    $output .= "<th>Municipaliteties</th>";
    $output .= strstr($key, '1') ? "<th>Area (sq. km)</th>" : "";
    $output .= strstr($key, '2') ? "<th>Number of cities and towns (unit)</th>" : "";
    $output .= strstr($key, '3') ? "<th>Number of villages (unit)</th>" : "";
    $output .= strstr($key, '4') ? "<th>Population (thousands)</th>" : "";
    $output .= strstr($key, '5') ? "<th>Number of live births (male)</th>" : "";
    $output .= strstr($key, '6') ? "<th>General birth rate (number of births per 1000 people)</th>" : "";
    $output .= strstr($key, '7') ? "<th>Number of Death (persons)</th>" : "";
    $output .= strstr($key, '8') ? "<th>General mortality rate (number of deaths per 1000 people)</th>" : "";
    $output .= strstr($key, '9') ? "<th>Natural Increase (persons)</th>" : "";
    $output .= strstr($key, '10') ? "<th>Number of employees in the business sector (thousands of people)</th>" : "";
    $output .= strstr($key, '11') ? "<th>Average monthly salary of employees in the business sector (GEL)</th>" : "";
    $output .= strstr($key, '12') ? "<th>Number of registered economic entities (unit)</th>" : "";
    $output .= strstr($key, '13') ? "<th>Number of active economic entities (unit)</th>" : "";
    $output .= strstr($key, '14') ? "<th>Number of newly registered economic entities (units)</th>" : "";
} else {
    $output .= "<th>მუნიციპალიტეტი</th>";
    $output .= strstr($key, '1') ? "<th>ფართობი (კვ.კმ)</th>" : "";
    $output .= strstr($key, '2') ? "<th>ქალაქების და დაბების რაოდენობა (ერთეული)</th>" : "";
    $output .= strstr($key, '3') ? "<th>სოფლების რაოდენობა (ერთეული)</th>" : "";
    $output .= strstr($key, '4') ? "<th>მოსახლეობის რიცხოვნობა (ათასი)</th>" : "";
    $output .= strstr($key, '5') ? "<th>ცოცხლად დაბადებულთა რიცხოვნობა (კაცი)</th>" : "";
    $output .= strstr($key, '6') ? "<th>შობადობის ზოგადი კოეფიციენტი (დაბადებულთა რიცხოვნობა მოსახლეობის 1000 კაცზე)</th>" : "";
    $output .= strstr($key, '7') ? "<th>გარდაცვლილთა რიცხოვნობა (კაცი)</th>" : "";
    $output .= strstr($key, '8') ? "<th>მოკვდაობის ზოგადი კოეფიციენტი (გარდაცვლილთა რიცხოვნობა მოსახლეობის 1000 კაცზე)</th>" : "";
    $output .= strstr($key, '9') ? "<th>ბუნებრივი მატება (კაცი)</th>" : "";
    $output .= strstr($key, '10') ? "<th>დასაქმებულთა რაოდენობა-ბიზნეს სექტორში (ათასი კაცი)</th>" : "";
    $output .= strstr($key, '11') ? "<th>დასაქმებულთა საშუალოთვიური ხელფასი-ბიზნეს სექტორში (ლარი)</th>" : "";
    $output .= strstr($key, '12') ? "<th>რეგისტრირებული ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>" : "";
    $output .= strstr($key, '13') ? "<th>აქტიური ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>" : "";
    $output .= strstr($key, '14') ? "<th>ახლადრეგისტრირებული ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>" : "";
}

$output .= "					
				</tr>
			<tbody>
	";

$query = mysqli_query($link, "SELECT * FROM `municipalitiesaz` WHERE ID IN(" . $mun . ") ORDER BY " . ($lang == 'en' ? "NameEN" : "Name") . " ASC");
while ($fetch = $query->fetch_array()) {

	$output .= "
				<tr>
                    <td>" . ($lang == 'en' ? $fetch['NameEN'] : $fetch['Name']) . "</td>";

	$output .= strstr($key, '1') ? "<td>" . $fetch['Area'] . "</td>" : "";
	$output .= strstr($key, '2') ? "<td>" . $fetch['NumberOfCT'] . "</td>" : "";
	$output .= strstr($key, '3') ? "<td>" . $fetch['Villages'] . "</td>" : "";
	$output .= strstr($key, '4') ? "<td>" . $fetch['Population'] . "</td>" : "";
	$output .= strstr($key, '5') ? "<td>" . $fetch['LiveBirths'] . "</td>" : "";
	$output .= strstr($key, '6') ? "<td>" . $fetch['GeneralBirthRate'] . "</td>" : "";
	$output .= strstr($key, '7') ? "<td>" . $fetch['Dead'] . "</td>" : "";
	$output .= strstr($key, '8') ? "<td>" . $fetch['GeneralMortalityRate'] . "</td>" : "";
	$output .= strstr($key, '9') ? "<td>" . $fetch['NaturalIncrease'] . "</td>" : "";
	$output .= strstr($key, '10') ? "<td>" . $fetch['Employees'] . "</td>" : "";
	$output .= strstr($key, '11') ? "<td>" . $fetch['AVGSalary'] . "</td>" : "";
	$output .= strstr($key, '12') ? "<td>" . $fetch['RegEcSub'] . "</td>" : "";
	$output .= strstr($key, '13') ? "<td>" . $fetch['ActEcSub'] . "</td>" : "";
	$output .= strstr($key, '14') ? "<td>" . $fetch['NewlyEcEnt'] . "</td>" : "";
	$output .= "</tr>";
}

$output .= "
			</tbody>
 
		</table>
	";

echo $output;
