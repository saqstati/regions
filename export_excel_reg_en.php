<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=regions_en.xls");  
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
	
	$output .= "<th>Regions</th>";
	$output .= str_contains($key,'1') ? "<th>Area (sq. km)</th>" : "" ;
	$output .= str_contains($key,'2') ? "<th>The Number of Population (thousands)</th>" : "" ;
	$output .= str_contains($key,'3') ? "<th>Gross Domestic Product (Mil. GEL)</th>" : "" ;
	$output .= str_contains($key,'4') ? "<th>Gross Domestic Product per capita (USD)" : "" ;
	$output .= str_contains($key,'5') ? "<th>Unemployment Rate (percentage)</th>" : "" ;
	$output .= str_contains($key,'6') ? "<th>Employed (thousand person)</th>" : "" ;
	$output .= str_contains($key,'7') ? "<th>Employment Level in Bussiness Sector (thousand person)</th>" : "" ;
	$output .= str_contains($key,'8') ? "<th>Average monthly remuneration of employed persons (GEL)</th>" : "" ;
	$output .= str_contains($key,'9') ? "<th>The Number of Registered Business Entities (unit)</th>" : "" ;

	$output .="					
				</tr>
			<tbody>
	";
 
	$query = mysqli_query($link, "SELECT * FROM `regions` WHERE ID IN(". $mun .") ORDER BY Name ASC");
	while($fetch = $query->fetch_array()){
 
	$output .= "
				<tr>
                    <td>".$fetch['NameEN']."</td>";

					$output .= str_contains($key,'1') ? "<td>".$fetch['Area']."</td>" : "" ;
					$output .= str_contains($key,'2') ? "<td>".$fetch['Population']."</td>" : "" ;
					$output .= str_contains($key,'3') ? "<td>".$fetch['GDP']."</td>" : "" ;
					$output .= str_contains($key,'4') ? "<td>".$fetch['GDPPerCapita']."</td>" : "" ;
					$output .= str_contains($key,'5') ? "<td>".$fetch['UnemploymentRate']."</td>" : "" ;
                    $output .= str_contains($key,'6') ? "<td>".$fetch['EmploymentRate']."</td>" : "" ;
                    $output .= str_contains($key,'7') ? "<td>".$fetch['EmploymentRateIndustry']."</td>" : "" ;
                    $output .= str_contains($key,'8') ? "<td>".$fetch['AverageSalaryIndustry']."</td>" : "" ;
                    $output .= str_contains($key,'9') ? "<td>".$fetch['RegistredEntities']."</td>" : "" ;

	$output .= "</tr>";
	}
 
	$output .="
			</tbody>
 
		</table>
	";
 
	echo $output;
