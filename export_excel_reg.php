<?php
header("Content-Type: application/vnd.ms-excel; charset=UTF-8");
header('Content-Encoding: UTF-8');
header("Content-Transfer-Encoding: binary");
header('Expires: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header("Content-Disposition: attachment; filename=regions.xls");
header("Pragma: no-cache");
header("Expires: 0");
echo "\xEF\xBB\xBF"; // UTF-8 BOM

require_once 'connection.php';

$key = isset($_GET['key']) ? $_GET['key'] : '0';
$mun = isset($_GET['mun']) ? $_GET['mun'] : '0';
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'ka'; // Default to Georgian if no lang specified

// Sanitize input
$key = htmlspecialchars($key, ENT_QUOTES, 'UTF-8');
$mun = htmlspecialchars($mun, ENT_QUOTES, 'UTF-8');
$lang = htmlspecialchars($lang, ENT_QUOTES, 'UTF-8');

$output = "";

$output .= "
	<table>
		<thead>
			<tr>
";

if ($lang == 'en') {
	$output .= "<th>Regions</th>";
	$output .= strstr($key, '1') ? "<th>Area (sq. km)</th>" : "";
	$output .= strstr($key, '2') ? "<th>The Number of Population (thousands)</th>" : "";
	$output .= strstr($key, '3') ? "<th>Number of live births (persons)</th>" : "";
	$output .= strstr($key, '4') ? "<th>Number of deaths (persons)</th>" : "";
	$output .= strstr($key, '5') ? "<th>Natural Increase (persons)</th>" : "";
	$output .= strstr($key, '6') ? "<th>Gross Domestic Product (Mil. GEL)</th>" : "";
	$output .= strstr($key, '7') ? "<th>Gross Domestic Product per capita (USD)</th>" : "";
	$output .= strstr($key, '8') ? "<th>Unemployment Rate (percentage)</th>" : "";
	$output .= strstr($key, '9') ? "<th>Employed (thousand person)</th>" : "";
	$output .= strstr($key, '10') ? "<th>Employment Level in Bussiness Sector (thousand person)</th>" : "";
	$output .= strstr($key, '11') ? "<th>Average monthly remuneration of employed persons (GEL)</th>" : "";
	$output .= strstr($key, '12') ? "<th>The Number of Registered Business Entities (unit)</th>" : "";
	$output .= strstr($key, '13') ? "<th>Number of active economic entities (units)</th>" : "";
	$output .= strstr($key, '14') ? "<th>Number of newly registered economic entities (units)</th>" : "";
} else {
	$output .= "<th>რეგიონი</th>";
	$output .= strstr($key, '1') ? "<th>ფართობი (კვ.კმ)</th>" : "";
	$output .= strstr($key, '2') ? "<th>მოსახლეობის რიცხოვნობა (ათასი)</th>" : "";
	$output .= strstr($key, '3') ? "<th>ცოცხლად დაბადებულთა რიცხოვნობა (კაცი)</th>" : "";
	$output .= strstr($key, '4') ? "<th>გარდაცვლილთა რიცხოვნობა (კაცი)</th>" : "";
	$output .= strstr($key, '5') ? "<th>ბუნებრივი მატება (კაცი)</th>" : "";
	$output .= strstr($key, '6') ? "<th>მთლიანი შიდა პროდუქტი (მლნ. ლარი)</th>" : "";
	$output .= strstr($key, '7') ? "<th>მთლიანი შიდა პროდუქტი ერთ სულ მოსახლეზე (აშშ დოლარი)</th>" : "";
	$output .= strstr($key, '8') ? "<th>უმუშევრობის დონე (%)</th>" : "";
	$output .= strstr($key, '9') ? "<th>დასაქმებულთა რაოდენობა, სულ (ათასი კაცი)</th>" : "";
	$output .= strstr($key, '10') ? "<th>დასაქმებულთა რაოდენობა - ბიზნეს სექტორში (ათასი კაცი)</th>" : "";
	$output .= strstr($key, '11') ? "<th>დასაქმებულთა საშუალოთვიური ხელფასი - ბიზნეს სექტორში (ლარი)</th>" : "";
	$output .= strstr($key, '12') ? "<th>რეგისტრირებული ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>" : "";
	$output .= strstr($key, '13') ? "<th>მოქმედი ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>" : "";
	$output .= strstr($key, '14') ? "<th>ახლადრეგისტრირებული ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>" : "";
}

$output .= "
			</tr>
		</thead>
		<tbody>
";

$munArray = explode(',', $mun);
$placeholders = implode(',', array_fill(0, count($munArray), '?'));
$stmt = $link->prepare("SELECT * FROM `regionsaz` WHERE ID IN ($placeholders)");
$stmt->bind_param(str_repeat('i', count($munArray)), ...$munArray);
$stmt->execute();
$result = $stmt->get_result();

while ($fetch = $result->fetch_array()) {
	$output .= "<tr>
					<td>" . ($lang == 'en' ? $fetch['NameEN'] : $fetch['Name']) . "</td>";

	$output .= strstr($key, '1') ? "<td>" . $fetch['Area'] . "</td>" : "";
	$output .= strstr($key, '2') ? "<td>" . $fetch['Population'] . "</td>" : "";
	$output .= strstr($key, '3') ? "<td>" . $fetch['liveBirth'] . "</td>" : "";
	$output .= strstr($key, '4') ? "<td>" . $fetch['death'] . "</td>" : "";
	$output .= strstr($key, '5') ? "<td>" . $fetch['naturalIncrease'] . "</td>" : "";
	$output .= strstr($key, '6') ? "<td>" . $fetch['GDP'] . "</td>" : "";
	$output .= strstr($key, '7') ? "<td>" . $fetch['GDPPerCapita'] . "</td>" : "";
	$output .= strstr($key, '8') ? "<td>" . $fetch['UnemploymentRate'] . "</td>" : "";
	$output .= strstr($key, '9') ? "<td>" . $fetch['EmploymentRate'] . "</td>" : "";
	$output .= strstr($key, '10') ? "<td>" . $fetch['EmploymentRateIndustry'] . "</td>" : "";
	$output .= strstr($key, '11') ? "<td>" . $fetch['AverageSalaryIndustry'] . "</td>" : "";
	$output .= strstr($key, '12') ? "<td>" . $fetch['RegistredEntities'] . "</td>" : "";
	$output .= strstr($key, '13') ? "<td>" . $fetch['activeEntities'] . "</td>" : "";
	$output .= strstr($key, '14') ? "<td>" . $fetch['newlyRegistredEntities'] . "</td>" : "";

	$output .= "</tr>";
}

$output .= "
		</tbody>
	</table>
";

echo $output;
