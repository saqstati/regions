<?php
require 'connection.php';

function testResult($request, $link) {
	$rows = [];

	if(isset($request['reg_id']) && !empty($request['reg_id'])) {
		$result = mysqli_query($link, "SELECT * FROM `regions` WHERE `ID` IN (" . implode(',', $request['reg_id']) . ")") or die(mysqli_error($link));
		while($row = $result->fetch_assoc()) {

			$item = [];
			$item["Area"] = $row["Area"];
			$item["Population"] = $row["Population"];
			$item["GDP"] = $row["GDP"];
			$item["GDPPerCapita"] = $row["GDPPerCapita"];
			$item["UnemploymentRate"] = $row["UnemploymentRate"];
			$item["EmploymentRate"] = $row["EmploymentRate"];
			$item["EmploymentRateIndustry"] = $row["EmploymentRateIndustry"];
			$item["AverageSalaryIndustry"] = $row["AverageSalaryIndustry"];
			$item["RegistredEntities"] = $row["RegistredEntities"];

			$rows[] = $item;
		}	
	}

	return json_encode($rows);	
};

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$request = json_decode(json_encode($_POST), true);
	echo testResult($request, $link);
};


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);