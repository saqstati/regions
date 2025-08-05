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
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'ka';

// Sanitize and prepare inputs
$key = htmlspecialchars($key, ENT_QUOTES, 'UTF-8');
$mun = htmlspecialchars($mun, ENT_QUOTES, 'UTF-8');
$lang = htmlspecialchars($lang, ENT_QUOTES, 'UTF-8');

// Convert key string to array
$key_array = explode(',', $key);

// Number formatting function
function formatExcelNumber($value)
{
	if (is_numeric($value)) {
		// Format with space as thousand separator, no decimal places
		return number_format((float)$value, 0, '.', ' ');
	}
	return $value;
}

$output = "";
$output .= "<table>
        <thead>
            <tr>";

if ($lang == 'en') {
	$output .= "<th>Regions</th>";
	$output .= in_array('1', $key_array) ? "<th>Area (sq. km)</th>" : "";
	$output .= in_array('2', $key_array) ? "<th>The Number of Population (thousands)</th>" : "";
	$output .= in_array('3', $key_array) ? "<th>Number of live births (persons)</th>" : "";
	$output .= in_array('4', $key_array) ? "<th>Number of deaths (persons)</th>" : "";
	$output .= in_array('5', $key_array) ? "<th>Natural Increase (persons)</th>" : "";
	$output .= in_array('6', $key_array) ? "<th>Gross Domestic Product (Mil. GEL)</th>" : "";
	$output .= in_array('7', $key_array) ? "<th>Gross Domestic Product per capita (USD)</th>" : "";
	$output .= in_array('8', $key_array) ? "<th>Unemployment Rate (percentage)</th>" : "";
	$output .= in_array('9', $key_array) ? "<th>Employed (thousand person)</th>" : "";
	$output .= in_array('10', $key_array) ? "<th>Employment Level in Bussiness Sector (thousand person)</th>" : "";
	$output .= in_array('11', $key_array) ? "<th>Average monthly remuneration of employed persons (GEL)</th>" : "";
	$output .= in_array('12', $key_array) ? "<th>The Number of Registered Business Entities (unit)</th>" : "";
	$output .= in_array('13', $key_array) ? "<th>Number of active economic entities (units)</th>" : "";
	$output .= in_array('14', $key_array) ? "<th>Number of newly registered economic entities (units)</th>" : "";
} else {
	$output .= "<th>რეგიონი</th>";
	$output .= in_array('1', $key_array) ? "<th>ფართობი (კვ.კმ)</th>" : "";
	$output .= in_array('2', $key_array) ? "<th>მოსახლეობის რიცხოვნობა (ათასი)</th>" : "";
	$output .= in_array('3', $key_array) ? "<th>ცოცხლად დაბადებულთა რიცხოვნობა (კაცი)</th>" : "";
	$output .= in_array('4', $key_array) ? "<th>გარდაცვლილთა რიცხოვნობა (კაცი)</th>" : "";
	$output .= in_array('5', $key_array) ? "<th>ბუნებრივი მატება (კაცი)</th>" : "";
	$output .= in_array('6', $key_array) ? "<th>მთლიანი შიდა პროდუქტი (მლნ. ლარი)</th>" : "";
	$output .= in_array('7', $key_array) ? "<th>მთლიანი შიდა პროდუქტი ერთ სულ მოსახლეზე (აშშ დოლარი)</th>" : "";
	$output .= in_array('8', $key_array) ? "<th>უმუშევრობის დონე (%)</th>" : "";
	$output .= in_array('9', $key_array) ? "<th>დასაქმებულთა რაოდენობა, სულ (ათასი კაცი)</th>" : "";
	$output .= in_array('10', $key_array) ? "<th>დასაქმებულთა რაოდენობა - ბიზნეს სექტორში (ათასი კაცი)</th>" : "";
	$output .= in_array('11', $key_array) ? "<th>დასაქმებულთა საშუალოთვიური ხელფასი - ბიზნეს სექტორში (ლარი)</th>" : "";
	$output .= in_array('12', $key_array) ? "<th>რეგისტრირებული ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>" : "";
	$output .= in_array('13', $key_array) ? "<th>მოქმედი ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>" : "";
	$output .= in_array('14', $key_array) ? "<th>ახლადრეგისტრირებული ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>" : "";
}

$output .= "</tr>
        </thead>
        <tbody>";

// Prepare and execute query
$munArray = explode(',', $mun);
if (!empty($munArray) && $munArray[0] !== '') {
	$placeholders = implode(',', array_fill(0, count($munArray), '?'));
	$stmt = $link->prepare("SELECT * FROM `regionsaz` WHERE ID IN ($placeholders)");
	$stmt->bind_param(str_repeat('i', count($munArray)), ...$munArray);
	$stmt->execute();
	$result = $stmt->get_result();

	while ($fetch = $result->fetch_array()) {
		$output .= "<tr>
                    <td>" . ($lang == 'en' ? $fetch['NameEN'] : $fetch['Name']) . "</td>";

		$output .= in_array('1', $key_array) ? '<td style="text-align: right">' . formatExcelNumber($fetch['Area']) . '</td>' : "";
		$output .= in_array('2', $key_array) ? '<td style="text-align: right">' . formatExcelNumber($fetch['Population']) . '</td>' : "";
		$output .= in_array('3', $key_array) ? '<td style="text-align: right">' . formatExcelNumber($fetch['liveBirth']) . '</td>' : "";
		$output .= in_array('4', $key_array) ? '<td style="text-align: right">' . formatExcelNumber($fetch['death']) . '</td>' : "";
		$output .= in_array('5', $key_array) ? '<td style="text-align: right">' . formatExcelNumber($fetch['naturalIncrease']) . '</td>' : "";
		$output .= in_array('6', $key_array) ? '<td style="text-align: right">' . formatExcelNumber($fetch['GDP']) . '</td>' : "";
		$output .= in_array('7', $key_array) ? '<td style="text-align: right">' . formatExcelNumber($fetch['GDPPerCapita']) . '</td>' : "";
		$output .= in_array('8', $key_array) ? '<td style="text-align: right">' . formatExcelNumber($fetch['UnemploymentRate']) . '</td>' : "";
		$output .= in_array('9', $key_array) ? '<td style="text-align: right">' . formatExcelNumber($fetch['EmploymentRate']) . '</td>' : "";
		$output .= in_array('10', $key_array) ? '<td style="text-align: right">' . formatExcelNumber($fetch['EmploymentRateIndustry']) . '</td>' : "";
		$output .= in_array('11', $key_array) ? '<td style="text-align: right">' . formatExcelNumber($fetch['AverageSalaryIndustry']) . '</td>' : "";
		$output .= in_array('12', $key_array) ? '<td style="text-align: right">' . formatExcelNumber($fetch['RegistredEntities']) . '</td>' : "";
		$output .= in_array('13', $key_array) ? '<td style="text-align: right">' . formatExcelNumber($fetch['activeEntities']) . '</td>' : "";
		$output .= in_array('14', $key_array) ? '<td style="text-align: right">' . formatExcelNumber($fetch['newlyRegistredEntities']) . '</td>' : "";

		$output .= "</tr>";
	}
}

$output .= "</tbody>
    </table>";

echo $output;
