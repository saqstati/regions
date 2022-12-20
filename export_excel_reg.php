<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=regions.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");
 
	require_once 'connection.php';

	$key = isset($_GET['key']) ? $_GET['key'] : '0';
	$mun = isset($_GET['mun']) ? $_GET['mun'] : '0';
 
	$output = "";
 
	$output .="
		<table>
			<thead>
				<tr>
				";
	
	$output .= "<th>რეგიონი</th>";
	$output .= strrpos($key,'1') ? "<th>ფართობი (კვ.კმ)</th>" : "" ;
	$output .= strrpos($key,'2') ? "<th>მოსახლეობის რიცხოვნობა (ათასი)</th>" : "" ;
	$output .= strrpos($key,'3') ? "<th>მთლიანი შიდა პროდუქტი (მლნ. ლარი)</th>" : "" ;
	$output .= strrpos($key,'4') ? "<th>მთლიანი შიდა პროდუქტი ერთ სულ მოსახლეზე (აშშ დოლარი)" : "" ;
	$output .= strrpos($key,'5') ? "<th>უმუშევრობის დონე (%)</th>" : "" ;
	$output .= strrpos($key,'6') ? "<th>დასაქმებულთა რაოდენობა, სულ (ათასი კაცი)</th>" : "" ;
	$output .= strrpos($key,'7') ? "<th>დასაქმებულთა რაოდენობა - ბიზნეს სექტორში (ათასი კაცი)</th>" : "" ;
	$output .= strrpos($key,'8') ? "<th>დასაქმებულთა საშუალოთვიური ხელფასი - ბიზნეს სექტორში (ლარი)</th>" : "" ;
	$output .= strrpos($key,'9') ? "<th>რეგისტრირებული ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>" : "" ;

	$output .="					
				</tr>
			<tbody>
	";
 
	$query = mysqli_query($link, "SELECT * FROM `regions` WHERE ID IN(". $mun .") ORDER BY Name ASC ");
	while($fetch = $query->fetch_array()){
 
	$output .= "
				<tr>
                    <td>".$fetch['Name']."</td>";

					$output .= strrpos($key,'1') ? "<td>".$fetch['Area']."</td>" : "" ;
					$output .= strrpos($key,'2') ? "<td>".$fetch['Population']."</td>" : "" ;
					$output .= strrpos($key,'3') ? "<td>".$fetch['GDP']."</td>" : "" ;
					$output .= strrpos($key,'4') ? "<td>".$fetch['GDPPerCapita']."</td>" : "" ;
					$output .= strrpos($key,'5') ? "<td>".$fetch['UnemploymentRate']."</td>" : "" ;
                    $output .= strrpos($key,'6') ? "<td>".$fetch['EmploymentRate']."</td>" : "" ;
                    $output .= strrpos($key,'7') ? "<td>".$fetch['EmploymentRateIndustry']."</td>" : "" ;
                    $output .= strrpos($key,'8') ? "<td>".$fetch['AverageSalaryIndustry']."</td>" : "" ;
                    $output .= strrpos($key,'9') ? "<td>".$fetch['RegistredEntities']."</td>" : "" ;

	$output .= "</tr>";
	}
 
	$output .="
			</tbody>
 
		</table>
	";
 
	echo $output;
