<?php
require 'connection.php';
if (isset($_POST['get'])) {
	if (!empty($_POST['reg_id'])) {

		$query = mysqli_query($link, "SELECT * FROM `regions` WHERE `ID` IN (" . implode(',', $_POST['reg_id']) . ")") or die(mysqli_error($link));
		echo "";
		while ($fetch = mysqli_fetch_array($query)) {
			echo "
				<tr>
						<td>" . $fetch['Area'] . "</td>
						<td>" . $fetch['Population'] . "</td>
						<td>" . $fetch['GDP'] . "</td>
						<td>" . $fetch['GDPPerCapita'] . "</td>
						<td>" . $fetch['UnemploymentRate'] . "</td>
						<td>" . $fetch['EmploymentRate'] . "</td>
						<td>" . $fetch['EmploymentRateIndustry'] . "</td>
						<td>" . $fetch['AverageSalaryIndustry'] . "</td>
						<td>" . $fetch['RegistredEntities'] . "</td>
						</tr>
					";
		}
		echo "";
	}
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);