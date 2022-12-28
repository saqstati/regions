<?php
header("Content-Type: application/xls");
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

$output = "";

$output .= "
		<table>
			<thead>
				<tr>
				";

$output .= "<th>რეგიონი</th>";
$output .= strstr($key, '1') ? "<th>ფართობი (კვ.კმ)</th>" : "";
$output .= strstr($key, '2') ? "<th>მოსახლეობის რიცხოვნობა (ათასი)</th>" : "";
$output .= strstr($key, '3') ? "<th>მთლიანი შიდა პროდუქტი (მლნ. ლარი)</th>" : "";
$output .= strstr($key, '4') ? "<th>მთლიანი შიდა პროდუქტი ერთ სულ მოსახლეზე (აშშ დოლარი)" : "";
$output .= strstr($key, '5') ? "<th>უმუშევრობის დონე (%)</th>" : "";
$output .= strstr($key, '6') ? "<th>დასაქმებულთა რაოდენობა, სულ (ათასი კაცი)</th>" : "";
$output .= strstr($key, '7') ? "<th>დასაქმებულთა რაოდენობა - ბიზნეს სექტორში (ათასი კაცი)</th>" : "";
$output .= strstr($key, '8') ? "<th>დასაქმებულთა საშუალოთვიური ხელფასი - ბიზნეს სექტორში (ლარი)</th>" : "";
$output .= strstr($key, '9') ? "<th>რეგისტრირებული ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>" : "";

$output .= "					
				</tr>
			<tbody>
	";

$query = mysqli_query($link, "SELECT * FROM `regions` WHERE ID IN(" . $mun . ")");
while ($fetch = $query->fetch_array()) {

	$output .= "
				<tr>
                    <td>" . $fetch['Name'] . "</td>";

	$output .= strstr($key, '1') ? "<td>" . $fetch['Area'] . "</td>" : "";
	$output .= strstr($key, '2') ? "<td>" . $fetch['Population'] . "</td>" : "";
	$output .= strstr($key, '3') ? "<td>" . $fetch['GDP'] . "</td>" : "";
	$output .= strstr($key, '4') ? "<td>" . $fetch['GDPPerCapita'] . "</td>" : "";
	$output .= strstr($key, '5') ? "<td>" . $fetch['UnemploymentRate'] . "</td>" : "";
	$output .= strstr($key, '6') ? "<td>" . $fetch['EmploymentRate'] . "</td>" : "";
	$output .= strstr($key, '7') ? "<td>" . $fetch['EmploymentRateIndustry'] . "</td>" : "";
	$output .= strstr($key, '8') ? "<td>" . $fetch['AverageSalaryIndustry'] . "</td>" : "";
	$output .= strstr($key, '9') ? "<td>" . $fetch['RegistredEntities'] . "</td>" : "";

	$output .= "</tr>";
}

$output .= "
			</tbody>
 
		</table>
	";

echo $output;
