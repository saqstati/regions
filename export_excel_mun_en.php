<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=municipaliteties_en_list.xls");  
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
	
	$output .= "<th>Municipaliteties</th>";
	$output .= str_contains($key,'1') ? "<th>Area (sq. km)</th>" : "" ;
	$output .= str_contains($key,'2') ? "<th>Number of cities and towns (unit)</th>" : "" ;
	$output .= str_contains($key,'3') ? "<th>Number of villages (unit)</th>" : "" ;
	$output .= str_contains($key,'4') ? "<th>Population (thousands)</th>" : "" ;
	$output .= str_contains($key,'5') ? "<th>Number of live births (male)</th>" : "" ;
	$output .= str_contains($key,'6') ? "<th>General birth rate (number of births per 1000 people)</th>" : "" ;
	$output .= str_contains($key,'7') ? "<th>Death (men)</th>" : "" ;
	$output .= str_contains($key,'8') ? "<th>General mortality rate (number of deaths per 1000 people)</th>" : "" ;
	$output .= str_contains($key,'9') ? "<th>Number of employees in the business sector (thousands of people)</th>" : "" ;
	$output .= str_contains($key,'10') ? "<th>Average monthly salary of employees in the business sector (GEL)</th>" : "" ;
	$output .= str_contains($key,'11') ? "<th>Number of registered economic entities (unit)</th>" : "" ;
	$output .= str_contains($key,'12') ? "<th>Number of active economic entities (unit)</th>" : "" ;

	$output .="					
				</tr>
			<tbody>
	";
 
	$query = mysqli_query($link, "SELECT * FROM `municipalities` WHERE ID IN(". $mun .")");
	while($fetch = $query->fetch_array()){
 
	$output .= "
				<tr>
                    <td>".$fetch['NameEN']."</td>";

					$output .= str_contains($key,'1') ? "<td>".$fetch['Area']."</td>" : "" ;
					$output .= str_contains($key,'2') ? "<td>".$fetch['NumberOfCT']."</td>" : "" ;
					$output .= str_contains($key,'3') ? "<td>".$fetch['Villages']."</td>" : "" ;
					$output .= str_contains($key,'4') ? "<td>".$fetch['Population']."</td>" : "" ;
					$output .= str_contains($key,'5') ? "<td>".$fetch['LiveBirths']."</td>" : "" ;
                    $output .= str_contains($key,'6') ? "<td>".$fetch['GeneralBirthRate']."</td>" : "" ;
                    $output .= str_contains($key,'7') ? "<td>".$fetch['Dead']."</td>" : "" ;
                    $output .= str_contains($key,'8') ? "<td>".$fetch['GeneralMortalityRate']."</td>" : "" ;
                    $output .= str_contains($key,'9') ? "<td>".$fetch['Employees']."</td>" : "" ;
                    $output .= str_contains($key,'10') ? "<td>".$fetch['AVGSalary']."</td>" : "" ;
                    $output .= str_contains($key,'11') ? "<td>".$fetch['RegEcSub']."</td>" : "" ;
                    $output .= str_contains($key,'12') ? "<td>".$fetch['ActEcSub']."</td>" : "" ;
	$output .= "</tr>";
	}
 
	$output .="
			</tbody>
 
		</table>
	";
 
	echo $output;
