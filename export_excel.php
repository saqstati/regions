<?php
header("Content-Type: application/xls");
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
$output .= strpos($key, '1') ? "<th>ფართობი (კვ.კმ)</th>" : "";
$output .= strpos($key, '2') ? "<th>ქალაქების და დაბების რაოდენობა (ერთეული)</th>" : "";
$output .= strpos($key, '3') ? "<th>სოფლების რაოდენობა (ერთეული)</th>" : "";
$output .= strpos($key, '4') ? "<th>მოსახლეობის რიცხოვნობა (ათასი)</th>" : "";
$output .= strpos($key, '5') ? "<th>ცოცხლად დაბადებულთა რიცხოვნობა (კაცი)</th>" : "";
$output .= strpos($key, '6') ? "<th>შობადობის ზოგადი კოეფიციენტი (დაბადებულთა რიცხოვნობა მოსახლეობის 1000 კაცზე)</th>" : "";
$output .= strpos($key, '7') ? "<th>გარდაცვლილთა რიცხოვნობა (კაცი)</th>" : "";
$output .= strpos($key, '8') ? "<th>მოკვდაობის ზოგადი კოეფიციენტი (გარდაცვლილთა რიცხოვნობა მოსახლეობის 1000 კაცზე)</th>" : "";
$output .= strpos($key, '9') ? "<th>დასაქმებულთა რაოდენობა-ბიზნეს სექტორში (ათასი კაცი)</th>" : "";
$output .= strpos($key, '10') ? "<th>დასაქმებულთა საშუალოთვიური ხელფასი-ბიზნეს სექტორში (ლარი)</th>" : "";
$output .= strpos($key, '11') ? "<th>რეგისტრირებული ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>" : "";
$output .= strpos($key, '12') ? "<th>აქტიური ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>" : "";

$output .= "					
				</tr>
			<tbody>
	";

$query = mysqli_query($link, "SELECT * FROM `municipalities` WHERE ID IN(" . $mun . ") ORDER BY Name ASC");
while ($fetch = $query->fetch_array()) {

	$output .= "
				<tr>
                    <td>" . $fetch['Name'] . "</td>";

	$output .= strpos($key, '1') ? "<td>" . $fetch['Area'] . "</td>" : "";
	$output .= strpos($key, '2') ? "<td>" . $fetch['NumberOfCT'] . "</td>" : "";
	$output .= strpos($key, '3') ? "<td>" . $fetch['Villages'] . "</td>" : "";
	$output .= strpos($key, '4') ? "<td>" . $fetch['Population'] . "</td>" : "";
	$output .= strpos($key, '5') ? "<td>" . $fetch['LiveBirths'] . "</td>" : "";
	$output .= strpos($key, '6') ? "<td>" . $fetch['GeneralBirthRate'] . "</td>" : "";
	$output .= strpos($key, '7') ? "<td>" . $fetch['Dead'] . "</td>" : "";
	$output .= strpos($key, '8') ? "<td>" . $fetch['GeneralMortalityRate'] . "</td>" : "";
	$output .= strpos($key, '9') ? "<td>" . $fetch['Employees'] . "</td>" : "";
	$output .= strpos($key, '10') ? "<td>" . $fetch['AVGSalary'] . "</td>" : "";
	$output .= strpos($key, '11') ? "<td>" . $fetch['RegEcSub'] . "</td>" : "";
	$output .= strpos($key, '12') ? "<td>" . $fetch['ActEcSub'] . "</td>" : "";
	$output .= "</tr>";
}

$output .= "
			</tbody>
 
		</table>
	";

echo $output;
