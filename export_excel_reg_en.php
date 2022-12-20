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
	$output .= strrpos($key,'1') ? "<th>Area (sq. km)</th>" : "" ;
	$output .= strrpos($key,'2') ? "<th>The Number of Population (thousands)</th>" : "" ;
	$output .= strrpos($key,'3') ? "<th>Gross Domestic Product (Mil. GEL)</th>" : "" ;
	$output .= strrpos($key,'4') ? "<th>Gross Domestic Product per capita (USD)" : "" ;
	$output .= strrpos($key,'5') ? "<th>Unemployment Rate (percentage)</th>" : "" ;
	$output .= strrpos($key,'6') ? "<th>Employed (thousand person)</th>" : "" ;
	$output .= strrpos($key,'7') ? "<th>Employment Level in Bussiness Sector (thousand person)</th>" : "" ;
	$output .= strrpos($key,'8') ? "<th>Average monthly remuneration of employed persons (GEL)</th>" : "" ;
	$output .= strrpos($key,'9') ? "<th>The Number of Registered Business Entities (unit)</th>" : "" ;

	$output .="					
				</tr>
			<tbody>
	";
 
	$query = mysqli_query($link, "SELECT * FROM `regions` WHERE ID IN(". $mun .") ORDER BY Name ASC");
	while($fetch = $query->fetch_array()){
 
	$output .= "
				<tr>
                    <td>".$fetch['NameEN']."</td>";

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
