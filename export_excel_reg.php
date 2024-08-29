<?php
header("Content-Type: application/vnd.ms-excel");
header('Content-Encoding: UTF-8');
header("Content-Transfer-Encoding: binary");
header('Expires: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header("Content-Disposition: attachment; filename=regions.xls");
header("Pragma: no-cache");
header("Expires: 0");
ob_clean();
flush();

require_once 'connection.php';

$key = isset($_GET['key']) ? $_GET['key'] : '0';
$mun = isset($_GET['mun']) ? $_GET['mun'] : '0';

// Sanitize input
$key = htmlspecialchars($key, ENT_QUOTES, 'UTF-8');
$mun = htmlspecialchars($mun, ENT_QUOTES, 'UTF-8');

$output = "";

$output .= "
	<table>
		<thead>
			<tr>
";

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

$output .= "
			</tr>
		</thead>
		<tbody>
";

$query = mysqli_query($link, "SELECT * FROM `regions` WHERE ID IN(" . $mun . ")");
while ($fetch = $query->fetch_array()) {
	$output .= "<tr>
					<td>" . $fetch['Name'] . "</td>";

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
