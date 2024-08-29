<?php
header("Content-Type: application/xls");
header('Content-Encoding: UTF-8');
header("Content-Transfer-Encoding: binary");
header('Expires: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header("Content-Disposition: attachment; filename=regions_en.xls");
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

$output .= "<th>Regions</th>";
$output .= strstr($key, '1') ? "<th>Area (sq. km)</th>" : "";
$output .= strstr($key, '2') ? "<th>The Number of Population (thousands)</th>" : "";
$output .= strstr($key, '3') ? "<th>Number of live births (persons)</th>" : "";
$output .= strstr($key, '4') ? "<th>Number of deaths (persons)</th>" : "";
$output .= strstr($key, '5') ? "<th>Natural Increase (persons)</th>" : "";
$output .= strstr($key, '6') ? "<th>Gross Domestic Product (Mil. GEL)</th>" : "";
$output .= strstr($key, '7') ? "<th>Gross Domestic Product per capita (USD)" : "";
$output .= strstr($key, '8') ? "<th>Unemployment Rate (percentage)</th>" : "";
$output .= strstr($key, '9') ? "<th>Employed (thousand person)</th>" : "";
$output .= strstr($key, '10') ? "<th>Employment Level in Bussiness Sector (thousand person)</th>" : "";
$output .= strstr($key, '11') ? "<th>Average monthly remuneration of employed persons (GEL)</th>" : "";
$output .= strstr($key, '12') ? "<th>The Number of Registered Business Entities (unit)</th>" : "";
$output .= strstr($key, '13') ? "<th>Number of active economic entities (units)</th>" : "";
$output .= strstr($key, '14') ? "<th>Number of newly registered economic entities (units)</th>" : "";

$output .= "					
				</tr>
			<tbody>
	";

$query = mysqli_query($link, "SELECT * FROM `regions` WHERE ID IN(" . $mun . ")");
while ($fetch = $query->fetch_array()) {

	$output .= "
				<tr>
                    <td>" . $fetch['NameEN'] . "</td>";

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
