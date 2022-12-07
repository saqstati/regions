<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=regions_list.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");
 
	require_once 'connection.php';
 
	$output = "";
 
	$output .="
		<table>
			<thead>
				<tr>
					<th>რეგიონი</th>
					<th>ფართობი (კვ.კმ)</th>
					<th>მოსახლეობის რიცხოვნობა (ათასი)</th>
					<th>მთლიანი შიდა პროდუქტი (მლნ. ლარი)</th>
                    <th>მთლიანი შიდა პროდუქტი ერთ სულ მოსახლეზე (აშშ დოლარი)</th>
                    <th>უმუშევრობის დონე (%)</th>
                    <th>დასაქმებულთა რაოდენობა, სულ (ათასი კაცი)</th>
                    <th>დასაქმებულთა რაოდენობა - ბიზნეს სექტორში (ათასი კაცი)</th>
                    <th>დასაქმებულთა საშუალოთვიური ხელფასი - ბიზნეს სექტორში (ლარი)</th>
                    <th>რეგისტრირებული ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>
				</tr>
			<tbody>
	";
 
	$query = mysqli_query($link, "SELECT * FROM `regions`");
	while($fetch = $query->fetch_array()){
 
	$output .= "
				<tr>
                    <td>".$fetch['Name']."</td>
					<td>".$fetch['Area']."</td>
					<td>".$fetch['Population']."</td>
					<td>".$fetch['GDP']."</td>
					<td>".$fetch['GDPPerCapita']."</td>
					<td>".$fetch['UnemploymentRate']."</td>
                    <td>".$fetch['EmploymentRate']."</td>
                    <td>".$fetch['EmploymentRateIndustry']."</td>
                    <td>".$fetch['AverageSalaryIndustry']."</td>
                    <td>".$fetch['RegistredEntities']."</td>
				</tr>
	";
	}
 
	$output .="
			</tbody>
 
		</table>
	";
 
	echo $output;
