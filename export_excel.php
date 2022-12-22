<?php
// header("Content-Type: application/xls");
// header("Content-Type: application/octet-stream"); 
// header('Content-Encoding: UTF-8');
// header('Content-Type: application/vnd.ms-excel; charset=UTF-8');
// $data = "Some utf-8 characters Ä…Ä‡Å¼ÅºÄ‡Å‚";
// header("Content-Transfer-Encoding: binary"); 
// header('Expires: '.gmdate('D, d M Y H:i:s').' GMT'); 
// header('Content-Disposition: attachment; filename = "Export '.date("Y-m-d").'.tsv"'); 
// header("Content-Disposition: attachment; filename=municipaliteties_list.xls");
// header("Pragma: no-cache");
// header("Expires: 0");


header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=abc.xls");  //File name extension was wrong
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private",false);

header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header("Content-Disposition: attachment;filename=\"filename.xlsx\"");

require_once 'connection.php';

$key = isset($_GET['key']) ? $_GET['key'] : '0';
$mun = isset($_GET['mun']) ? $_GET['mun'] : '0';

$output = "";

$output .= "
		<table>
			<thead>
				<tr>
				";


$output .= "<th>მუნიციპალიტეტი</th>";
$output .= strstr($key, '1') ? "<th>ფართობი (კვ.კმ)</th>" : "";
$output .= strstr($key, '2') ? "<th>ქალაქების და დაბების რაოდენობა (ერთეული)</th>" : "";
$output .= strstr($key, '3') ? "<th>სოფლების რაოდენობა (ერთეული)</th>" : "";
$output .= strstr($key, '4') ? "<th>მოსახლეობის რიცხოვნობა (ათასი)</th>" : "";
$output .= strstr($key, '5') ? "<th>ცოცხლად დაბადებულთა რიცხოვნობა (კაცი)</th>" : "";
$output .= strstr($key, '6') ? "<th>შობადობის ზოგადი კოეფიციენტი (დაბადებულთა რიცხოვნობა მოსახლეობის 1000 კაცზე)</th>" : "";
$output .= strstr($key, '7') ? "<th>გარდაცვლილთა რიცხოვნობა (კაცი)</th>" : "";
$output .= strstr($key, '8') ? "<th>მოკვდაობის ზოგადი კოეფიციენტი (გარდაცვლილთა რიცხოვნობა მოსახლეობის 1000 კაცზე)</th>" : "";
$output .= strstr($key, '9') ? "<th>დასაქმებულთა რაოდენობა-ბიზნეს სექტორში (ათასი კაცი)</th>" : "";
$output .= strstr($key, '10') ? "<th>დასაქმებულთა საშუალოთვიური ხელფასი-ბიზნეს სექტორში (ლარი)</th>" : "";
$output .= strstr($key, '11') ? "<th>რეგისტრირებული ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>" : "";
$output .= strstr($key, '12') ? "<th>აქტიური ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>" : "";

$output .= "					
				</tr>
			<tbody>
	";

$query = mysqli_query($link, "SELECT * FROM `municipalitiesaz` WHERE ID IN(" . $mun . ") ORDER BY Name ASC");
while ($fetch = $query->fetch_array()) {

	$output .= "
				<tr>
                    <td>" . $fetch['Name'] . "</td>";

	$output .= strstr($key, '1') ? "<td>" . $fetch['Area'] . "</td>" : "";
	$output .= strstr($key, '2') ? "<td>" . $fetch['NumberOfCT'] . "</td>" : "";
	$output .= strstr($key, '3') ? "<td>" . $fetch['Villages'] . "</td>" : "";
	$output .= strstr($key, '4') ? "<td>" . $fetch['Population'] . "</td>" : "";
	$output .= strstr($key, '5') ? "<td>" . $fetch['LiveBirths'] . "</td>" : "";
	$output .= strstr($key, '6') ? "<td>" . $fetch['GeneralBirthRate'] . "</td>" : "";
	$output .= strstr($key, '7') ? "<td>" . $fetch['Dead'] . "</td>" : "";
	$output .= strstr($key, '8') ? "<td>" . $fetch['GeneralMortalityRate'] . "</td>" : "";
	$output .= strstr($key, '9') ? "<td>" . $fetch['Employees'] . "</td>" : "";
	$output .= strstr($key, '10') ? "<td>" . $fetch['AVGSalary'] . "</td>" : "";
	$output .= strstr($key, '11') ? "<td>" . $fetch['RegEcSub'] . "</td>" : "";
	$output .= strstr($key, '12') ? "<td>" . $fetch['ActEcSub'] . "</td>" : "";
	$output .= "</tr>";
}

$output .= "
			</tbody>
 
		</table>
	";

echo $output;
