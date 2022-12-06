<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=municipaliteties_list.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");
 
	require_once 'connection.php';
 
	$output = "";
 
	$output .="
		<table>
			<thead>
				<tr>
                    <th>მუნიციპალიტეტი</th>
					<th>ფართობი (კვ.კმ)</th>
					<th>ქალაქების და დაბების რაოდენობა (ერთეული)</th>
					<th>სოფლების რაოდენობა (ერთეული)</th>
					<th>მოსახლეობის რიცხოვნობა (ათასი)</th>
					<th>ცოცხლად დაბადებულთა რიცხოვნობა (კაცი)</th>
                    <th>შობადობის ზოგადი კოეფიციენტი (დაბადებულთა რიცხოვნობა მოსახლეობის 1000 კაცზე)</th>
                    <th>გარდაცვლილთა რიცხოვნობა (კაცი)</th>
                    <th>მოკვდაობის ზოგადი კოეფიციენტი (გარდაცვლილთა რიცხოვნობა მოსახლეობის 1000 კაცზე)</th>
                    <th>დასაქმებულთა რაოდენობა-ბიზნეს სექტორში (ათასი კაცი)</th>
                    <th>დასაქმებულთა საშუალოთვიური ხელფასი-ბიზნეს სექტორში (ლარი)</th>
                    <th>რეგისტრირებული ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>
                    <th>აქტიური ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>
				</tr>
			<tbody>
	";
 
	$query = mysqli_query($link, "SELECT * FROM `municipalities`");
	while($fetch = $query->fetch_array()){
 
	$output .= "
				<tr>
                    <td>".$fetch['Name']."</td>
					<td>".$fetch['Area']."</td>
					<td>".$fetch['NumberOfCT']."</td>
					<td>".$fetch['Villages']."</td>
					<td>".$fetch['Population']."</td>
					<td>".$fetch['LiveBirths']."</td>
                    <td>".$fetch['GeneralBirthRate']."</td>
                    <td>".$fetch['Dead']."</td>
                    <td>".$fetch['GeneralMortalityRate']."</td>
                    <td>".$fetch['Employees']."</td>
                    <td>".$fetch['AVGSalary']."</td>
                    <td>".$fetch['RegEcSub']."</td>
                    <td>".$fetch['ActEcSub']."</td>
				</tr>
	";
	}
 
	$output .="
			</tbody>
 
		</table>
	";
 
	echo $output;
