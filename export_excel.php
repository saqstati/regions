<?php
header("Content-Type: application/xls");
header("Content-Type: application/octet-stream"); 
header('Content-Encoding: UTF-8');
header('Content-Type: application/vnd.ms-excel; charset=UTF-8');
$data = "Some utf-8 characters Ä…Ä‡Å¼ÅºÄ‡Å‚";
header("Content-Transfer-Encoding: binary"); 
header('Expires: '.gmdate('D, d M Y H:i:s').' GMT'); 
header('Content-Disposition: attachment; filename = "Export '.date("Y-m-d").'.tsv"'); 
header("Content-Disposition: attachment; filename=municipaliteties_list.xls");
header("Pragma: no-cache");
header("Expires: 0");

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
$output .= strrpos($key, '1') ? "<th>ფართობი (კვ.კმ)</th>" : "";
$output .= strrpos($key, '2') ? "<th>ქალაქების და დაბების რაოდენობა (ერთეული)</th>" : "";
$output .= strrpos($key, '3') ? "<th>სოფლების რაოდენობა (ერთეული)</th>" : "";
$output .= strrpos($key, '4') ? "<th>მოსახლეობის რიცხოვნობა (ათასი)</th>" : "";
$output .= strrpos($key, '5') ? "<th>ცოცხლად დაბადებულთა რიცხოვნობა (კაცი)</th>" : "";
$output .= strrpos($key, '6') ? "<th>შობადობის ზოგადი კოეფიციენტი (დაბადებულთა რიცხოვნობა მოსახლეობის 1000 კაცზე)</th>" : "";
$output .= strrpos($key, '7') ? "<th>გარდაცვლილთა რიცხოვნობა (კაცი)</th>" : "";
$output .= strrpos($key, '8') ? "<th>მოკვდაობის ზოგადი კოეფიციენტი (გარდაცვლილთა რიცხოვნობა მოსახლეობის 1000 კაცზე)</th>" : "";
$output .= strrpos($key, '9') ? "<th>დასაქმებულთა რაოდენობა-ბიზნეს სექტორში (ათასი კაცი)</th>" : "";
$output .= strrpos($key, '10') ? "<th>დასაქმებულთა საშუალოთვიური ხელფასი-ბიზნეს სექტორში (ლარი)</th>" : "";
$output .= strrpos($key, '11') ? "<th>რეგისტრირებული ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>" : "";
$output .= strrpos($key, '12') ? "<th>აქტიური ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>" : "";

$output .= "					
				</tr>
			<tbody>
	";

$query = mysqli_query($link, "SELECT * FROM `municipalitiesaz` WHERE ID IN(" . $mun . ") ORDER BY Name ASC");
while ($fetch = $query->fetch_array()) {

	$output .= "
				<tr>
                    <td>" . $fetch['Name'] . "</td>";

	$output .= strrpos($key, '1') ? "<td>" . $fetch['Area'] . "</td>" : "";
	$output .= strrpos($key, '2') ? "<td>" . $fetch['NumberOfCT'] . "</td>" : "";
	$output .= strrpos($key, '3') ? "<td>" . $fetch['Villages'] . "</td>" : "";
	$output .= strrpos($key, '4') ? "<td>" . $fetch['Population'] . "</td>" : "";
	$output .= strrpos($key, '5') ? "<td>" . $fetch['LiveBirths'] . "</td>" : "";
	$output .= strrpos($key, '6') ? "<td>" . $fetch['GeneralBirthRate'] . "</td>" : "";
	$output .= strrpos($key, '7') ? "<td>" . $fetch['Dead'] . "</td>" : "";
	$output .= strrpos($key, '8') ? "<td>" . $fetch['GeneralMortalityRate'] . "</td>" : "";
	$output .= strrpos($key, '9') ? "<td>" . $fetch['Employees'] . "</td>" : "";
	$output .= strrpos($key, '10') ? "<td>" . $fetch['AVGSalary'] . "</td>" : "";
	$output .= strrpos($key, '11') ? "<td>" . $fetch['RegEcSub'] . "</td>" : "";
	$output .= strrpos($key, '12') ? "<td>" . $fetch['ActEcSub'] . "</td>" : "";
	$output .= "</tr>";
}

$output .= "
			</tbody>
 
		</table>
	";

echo $output;

?>