<?php
	include 'connection.php';	
	$gotid = $_POST['postvariable'];
	$gotlangcheck = $_POST['postvariablelang'];	
	if (strlen($gotid) > 6) {
		$clickedid = substr($gotid, -2);
	} else {
		$clickedid = substr($gotid, -1);
	}
	$sql = "SELECT * FROM regions WHERE ID = '$clickedid' ";
	if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result) > 0){			
			echo "<style>.side-box2 {width: 20.32vw;float: right;}</style>";
			echo "<table class='table table-hover resultright'>";
			while($row = mysqli_fetch_array($result)){
				if ($gotlangcheck == 'geo'){
					if ($clickedid == '2') {
						$value1 = '2014 წლის 1 მარტის მდგომარეობით'; $value2 = '2022 წლის 1 იანვრის მდგომარეობით'; $value3 = '2021 წლის მონაცემების მიხედვით'; $value4 = '2021 წლის მონაცემების მიხედვით'; $value5 = '2021 წლის მიხედვით'; $value6 = '2021 წლის მიხედვით'; $value7 = '2021 წლის მიხედვით'; $value8 = '2021 წლის მიხედვით'; $value9 = '2022 წლის 1 იანვრის მდგომარეობით';
					} else if ($clickedid == '3') {
						$value1 = '2014 წლის 1 მარტის მდგომარეობით'; $value2 = '2022 წლის 1 იანვრის მდგომარეობით'; $value3 = '2021 წლის მონაცემების მიხედვით'; $value4 = '2021 წლის მონაცემების მიხედვით'; $value5 = '2021 წლის მიხედვით'; $value6 = '2021 წლის მიხედვით'; $value7 = '2021 წლის მიხედვით'; $value8 = '2021 წლის მიხედვით'; $value9 = '2022 წლის 1 იანვრის მდგომარეობით';						
					} else if ($clickedid == '4') {
						$value1 = '2014 წლის 1 მარტის მდგომარეობით'; $value2 = '2022 წლის 1 იანვრის მდგომარეობით'; $value3 = '2021 წლის მონაცემების მიხედვით'; $value4 = '2021 წლის მონაცემების მიხედვით'; $value5 = '2021 წლის მიხედვით'; $value6 = '2021 წლის მიხედვით'; $value7 = '2021 წლის მიხედვით'; $value8 = '2021 წლის მიხედვით'; $value9 = '2022 წლის 1 იანვრის მდგომარეობით';						
					} else if ($clickedid == '5') {
						$value1 = '2014 წლის 1 მარტის მდგომარეობით'; $value2 = '2022 წლის 1 იანვრის მდგომარეობით'; $value3 = '2021 წლის მონაცემების მიხედვით'; $value4 = '2021 წლის მონაცემების მიხედვით'; $value5 = '2021 წლის მიხედვით'; $value6 = '2021 წლის მიხედვით'; $value7 = '2021 წლის მიხედვით'; $value8 = '2021 წლის მიხედვით'; $value9 = '2022 წლის 1 იანვრის მდგომარეობით';						
					} else if ($clickedid == '6') {
						$value1 = '2014 წლის 1 მარტის მდგომარეობით'; $value2 = '2022 წლის 1 იანვრის მდგომარეობით'; $value3 = '2021 წლის მონაცემების მიხედვით'; $value4 = '2021 წლის მონაცემების მიხედვით'; $value5 = '2021 წლის მიხედვით.'; $value6 = '2021 წლის მიხედვით.'; $value7 = '2021 წლის მიხედვით'; $value8 = '2021 წლის მიხედვით'; $value9 = '2022 წლის 1 იანვრის მდგომარეობით';						
					} else if ($clickedid == '7') {
						$value1 = '2014 წლის 1 მარტის მდგომარეობით'; $value2 = '2022 წლის 1 იანვრის მდგომარეობით'; $value3 = '2021 წლის მონაცემების მიხედვით'; $value4 = '2021 წლის მონაცემების მიხედვით'; $value5 = '2021 წლის მიხედვით.'; $value6 = '2021 წლის მიხედვით..'; $value7 = '2021 წლის მიხედვით'; $value8 = '2021 წლის მიხედვით'; $value9 = '2022 წლის 1 იანვრის მდგომარეობით';						
					} else if ($clickedid == '8') {
						$value1 = '2014 წლის 1 მარტის მდგომარეობით'; $value2 = '2022 წლის 1 იანვრის მდგომარეობით'; $value3 = '2021 წლის მონაცემების მიხედვით'; $value4 = '2021 წლის მონაცემების მიხედვით'; $value5 = '2021 წლის მიხედვით'; $value6 = '2021 წლის მიხედვით'; $value7 = '2021 წლის მიხედვით'; $value8 = '2021 წლის მიხედვით'; $value9 = '2022 წლის 1 იანვრის მდგომარეობით';						
					} else if ($clickedid == '9') {
						$value1 = '2014 წლის 1 მარტის მდგომარეობით'; $value2 = '2022 წლის 1 იანვრის მდგომარეობით'; $value3 = '2021 წლის მონაცემების მიხედვით'; $value4 = '2021 წლის მონაცემების მიხედვით'; $value5 = '2021 წლის მიხედვით'; $value6 = '2021 წლის მიხედვით'; $value7 = '2021 წლის მიხედვით'; $value8 = '2021 წლის მიხედვით'; $value9 = '2022 წლის 1 იანვრის მდგომარეობით';						
					} else if ($clickedid == '10') {
						$value1 = '2014 წლის 1 მარტის მდგომარეობით'; $value2 = '2022 წლის 1 იანვრის მდგომარეობით'; $value3 = '2021 წლის მონაცემების მიხედვით'; $value4 = '2021 წლის მონაცემების მიხედვით'; $value5 = '2021 წლის მიხედვით'; $value6 = '2021 წლის მიხედვით'; $value7 = '2021 წლის მიხედვით'; $value8 = '2021 წლის მიხედვით'; $value9 = '2022 წლის 1 იანვრის მდგომარეობით';						
					} else if ($clickedid == '11') {
						$value1 = '2014 წლის 1 მარტის მდგომარეობით'; $value2 = '2022 წლის 1 იანვრის მდგომარეობით'; $value3 = '2021 წლის მონაცემების მიხედვით'; $value4 = '2021 წლის მონაცემების მიხედვით'; $value5 = '2021 წლის მიხედვით'; $value6 = '2021 წლის მიხედვით'; $value7 = '2021 წლის მიხედვით'; $value8 = '2021 წლის მიხედვით'; $value9 = '2022 წლის 1 იანვრის მდგომარეობით';						
					} else if ($clickedid == '12') {
						$value1 = '2014 წლის 1 მარტის მდგომარეობით'; $value2 = '2022 წლის 1 იანვრის მდგომარეობით'; $value3 = '2021 წლის მონაცემების მიხედვით'; $value4 = '2021 წლის მონაცემების მიხედვით'; $value5 = '2021 წლის მიხედვით'; $value6 = '2021 წლის მიხედვით'; $value7 = '2021 წლის მიხედვით'; $value8 = '2021 წლის მიხედვით'; $value9 = '2022 წლის 1 იანვრის მდგომარეობით';						
					} else {
						$value1 = NULL; $value2 = NULL; $value3 = NULL; $value4 = NULL; $value5 = NULL; $value6 = NULL; $value7 = NULL; $value8 = NULL; $value9 = NULL;
					}
				} else if ($gotlangcheck == 'eng') {
					if ($clickedid == '2') {						
						$value1 = 'By March 1, 2014'; $value2 = 'By January 1, 2022'; $value3 = 'Data of 2021'; $value4 = 'Data of 2021'; $value5 = 'By 2021'; $value6 = 'By 2021'; $value7 = 'By 2021'; $value8 = 'By 2021'; $value9 = 'By January 1, 2022';
					} else if ($clickedid == '3') {						
						$value1 = 'By March 1, 2014'; $value2 = 'By January 1, 2022'; $value3 = 'Data of 2021'; $value4 = 'Data of 2021'; $value5 = 'By 2021'; $value6 = 'By 2021'; $value7 = 'By 2021'; $value8 = 'By 2021'; $value9 = 'By January 1, 2022'; 
					} else if ($clickedid == '4') {						
						$value1 = 'By March 1, 2014'; $value2 = 'By January 1, 2022'; $value3 = 'Data of 2021'; $value4 = 'Data of 2021'; $value5 = 'By 2021'; $value6 = 'By 2021'; $value7 = 'By 2021'; $value8 = 'By 2021'; $value9 = 'By January 1, 2022';
					} else if ($clickedid == '5') {						
						$value1 = 'By March 1, 2014'; $value2 = 'By January 1, 2022'; $value3 = 'Data of 2021'; $value4 = 'Data of 2021'; $value5 = 'By 2021'; $value6 = 'By 2021'; $value7 = 'By 2021'; $value8 = 'By 2021'; $value9 = 'By January 1, 2022';
					} else if ($clickedid == '6') {						
						$value1 = 'By March 1, 2014'; $value2 = 'By January 1, 2022'; $value3 = 'Data of 2021'; $value4 = 'Data of 2021'; $value5 = 'By 2021'; $value6 = 'By 2021'; $value7 = 'By 2021'; $value8 = 'By 2021'; $value9 = 'By January 1, 2022';
					} else if ($clickedid == '7') {						
						$value1 = 'By March 1, 2014'; $value2 = 'By January 1, 2022'; $value3 = 'Data of 2021'; $value4 = 'Data of 2021'; $value5 = 'By 2021'; $value6 = 'By 2021'; $value7 = 'By 2021'; $value8 = 'By 2021'; $value9 = 'By January 1, 2022';
					} else if ($clickedid == '8') {						
						$value1 = 'By March 1, 2014'; $value2 = 'By January 1, 2022'; $value3 = 'Data of 2021'; $value4 = 'Data of 2021'; $value5 = 'By 2021'; $value6 = 'By 2021'; $value7 = 'By 2021'; $value8 = 'By 2021'; $value9 = 'By January 1, 2022';
					} else if ($clickedid == '9') {						
						$value1 = 'By March 1, 2014'; $value2 = 'By January 1, 2022'; $value3 = 'Data of 2021'; $value4 = 'Data of 2021'; $value5 = 'By 2021'; $value6 = 'By 2021'; $value7 = 'By 2021'; $value8 = 'By 2021'; $value9 = 'By January 1, 2022';
					} else if ($clickedid == '10') {						
						$value1 = 'By March 1, 2014'; $value2 = 'By January 1, 2022'; $value3 = 'Data of 2021'; $value4 = 'Data of 2021'; $value5 = 'By 2021'; $value6 = 'By 2021'; $value7 = 'By 2021'; $value8 = 'By 2021'; $value9 = 'By January 1, 2022';
					} else if ($clickedid == '11') {						
						$value1 = 'By March 1, 2014'; $value2 = 'By January 1, 2022'; $value3 = 'Data of 2021'; $value4 = 'Data of 2021'; $value5 = 'By 2021'; $value6 = 'By 2021'; $value7 = 'By 2021'; $value8 = 'By 2021'; $value9 = 'By January 1, 2022';
					} else if ($clickedid == '12') {						
						$value1 = 'By March 1, 2014'; $value2 = 'By January 1, 2022'; $value3 = 'Data of 2021'; $value4 = 'Data of 2021'; $value5 = 'By 2021'; $value6 = 'By 2021'; $value7 = 'By 2021'; $value8 = 'By 2021'; $value9 = 'By January 1, 2022';
					} else {
						$value1 = NULL; $value2 = NULL; $value3 = NULL; $value4 = NULL; $value5 = NULL; $value6 = NULL; $value7 = NULL; $value8 = NULL; $value9 = NULL;
					}
				}			
				
				if ($clickedid == '2') {
					$value1geo = '2014 წლის 1 მარტის მდგომარეობით'; $value2geo = '2022 წლის 1 იანვრის მდგომარეობით'; $value3geo = '2021 წლის მონაცემების მიხედვით'; $value4geo = '2021 წლის მონაცემების მიხედვით'; $value5geo = '2021 წლის მიხედვით'; $value6geo = '2021 წლის მიხედვით'; $value7geo = '2021 წლის მიხედვით'; $value8geo = '2021 წლის მიხედვით'; $value9geo = '2022 წლის 1 იანვრის მდგომარეობით';
					$value1eng = 'By March 1, 2014'; $value2eng = 'By January 1, 2022'; $value3eng = 'Data of 2021'; $value4eng = 'Data of 2021'; $value5eng = 'By 2021'; $value6eng = 'By 2021'; $value7eng = 'By 2021'; $value8eng = 'By 2021'; $value9eng = 'By January 1, 2021';
				} else if ($clickedid == '3') {
					$value1geo = '2014 წლის 1 მარტის მდგომარეობით'; $value2geo = '2022 წლის 1 იანვრის მდგომარეობით'; $value3geo = '2021 წლის მონაცემების მიხედვით'; $value4geo = '2021 წლის მონაცემების მიხედვით'; $value5geo = '2021 წლის მიხედვით'; $value6geo = '2021 წლის მიხედვით'; $value7geo = '2021 წლის მიხედვით'; $value8geo = '2021 წლის მიხედვით'; $value9geo = '2022 წლის 1 იანვრის მდგომარეობით';
					$value1eng = 'By March 1, 2014'; $value2eng = 'By January 1, 2022'; $value3eng = 'Data of 2021'; $value4eng = 'Data of 2021'; $value5eng = 'By 2021'; $value6eng = 'By 2021'; $value7eng = 'By 2021'; $value8eng = 'By 2021'; $value9eng = 'By January 1, 2021'; 
				} else if ($clickedid == '4') {
					$value1geo = '2014 წლის 1 მარტის მდგომარეობით'; $value2geo = '2022 წლის 1 იანვრის მდგომარეობით'; $value3geo = '2021 წლის მონაცემების მიხედვით'; $value4geo = '2021 წლის მონაცემების მიხედვით'; $value5geo = '2021 წლის მიხედვით'; $value6geo = '2021 წლის მიხედვით'; $value7geo = '2021 წლის მიხედვით'; $value8geo = '2021 წლის მიხედვით'; $value9geo = '2022 წლის 1 იანვრის მდგომარეობით';
					$value1eng = 'By March 1, 2014'; $value2eng = 'By January 1, 2022'; $value3eng = 'Data of 2021'; $value4eng = 'Data of 2021'; $value5eng = 'By 2021'; $value6eng = 'By 2021'; $value7eng = 'By 2021'; $value8eng = 'By 2021'; $value9eng = 'By January 1, 2021';
				} else if ($clickedid == '5') {
					$value1geo = '2014 წლის 1 მარტის მდგომარეობით'; $value2geo = '2022 წლის 1 იანვრის მდგომარეობით'; $value3geo = '2021 წლის მონაცემების მიხედვით'; $value4geo = '2021 წლის მონაცემების მიხედვით'; $value5geo = '2021 წლის მიხედვით'; $value6geo = '2021 წლის მიხედვით'; $value7geo = '2021 წლის მიხედვით'; $value8geo = '2021 წლის მიხედვით'; $value9geo = '2022 წლის 1 იანვრის მდგომარეობით';
					$value1eng = 'By March 1, 2014'; $value2eng = 'By January 1, 2022'; $value3eng = 'Data of 2021'; $value4eng = 'Data of 2021'; $value5eng = 'By 2021'; $value6eng = 'By 2021'; $value7eng = 'By 2021'; $value8eng = 'By 2021'; $value9eng = 'By January 1, 2021';
				} else if ($clickedid == '6') {
					$value1geo = '2014 წლის 1 მარტის მდგომარეობით'; $value2geo = '2022 წლის 1 იანვრის მდგომარეობით'; $value3geo = '2021 წლის მონაცემების მიხედვით'; $value4geo = '2021 წლის მონაცემების მიხედვით'; $value5geo = '2021 წლის მიხედვით'; $value6geo = '2021 წლის მიხედვით.'; $value7geo = '2021 წლის მიხედვით'; $value8geo = '2021 წლის მიხედვით'; $value9geo = '2022 წლის 1 იანვრის მდგომარეობით';
					$value1eng = 'By March 1, 2014'; $value2eng = 'By January 1, 2022'; $value3eng = 'Data of 2021'; $value4eng = 'Data of 2021'; $value5eng = 'By 2021'; $value6eng = 'By 2021'; $value7eng = 'By 2021'; $value8eng = 'By 2021'; $value9eng = 'By January 1, 2021';
				} else if ($clickedid == '7') {
					$value1geo = '2014 წლის 1 მარტის მდგომარეობით'; $value2geo = '2022 წლის 1 იანვრის მდგომარეობით'; $value3geo = '2021 წლის მონაცემების მიხედვით'; $value4geo = '2021 წლის მონაცემების მიხედვით'; $value5geo = '2021 წლის მიხედვით'; $value6geo = '2021 წლის მიხედვით'; $value7geo = '2021 წლის მიხედვით'; $value8geo = '2021 წლის მიხედვით'; $value9geo = '2022 წლის 1 იანვრის მდგომარეობით';
					$value1eng = 'By March 1, 2014'; $value2eng = 'By January 1, 2022'; $value3eng = 'Data of 2021'; $value4eng = 'Data of 2021'; $value5eng = 'By 2021'; $value6eng = 'By 2021'; $value7eng = 'By 2021'; $value8eng = 'By 2021'; $value9eng = 'By January 1, 2021';
				} else if ($clickedid == '8') {
					$value1geo = '2014 წლის 1 მარტის მდგომარეობით'; $value2geo = '2022 წლის 1 იანვრის მდგომარეობით'; $value3geo = '2021 წლის მონაცემების მიხედვით'; $value4geo = '2021 წლის მონაცემების მიხედვით'; $value5geo = '2021 წლის მიხედვით'; $value6geo = '2021 წლის მიხედვით'; $value7geo = '2021 წლის მიხედვით'; $value8geo = '2021 წლის მიხედვით'; $value9geo = '2022 წლის 1 იანვრის მდგომარეობით';
					$value1eng = 'By March 1, 2014'; $value2eng = 'By January 1, 2022'; $value3eng = 'Data of 2021'; $value4eng = 'Data of 2021'; $value5eng = 'By 2021'; $value6eng = 'By 2021'; $value7eng = 'By 2021'; $value8eng = 'By 2021'; $value9eng = 'By January 1, 2021';
				} else if ($clickedid == '9') {
					$value1geo = '2014 წლის 1 მარტის მდგომარეობით'; $value2geo = '2022 წლის 1 იანვრის მდგომარეობით'; $value3geo = '2021 წლის მონაცემების მიხედვით'; $value4geo = '2021 წლის მონაცემების მიხედვით'; $value5geo = '2021 წლის მიხედვით'; $value6geo = '2021 წლის მიხედვით'; $value7geo = '2021 წლის მიხედვით'; $value8geo = '2021 წლის მიხედვით'; $value9geo = '2022 წლის 1 იანვრის მდგომარეობით';
					$value1eng = 'By March 1, 2014'; $value2eng = 'By January 1, 2022'; $value3eng = 'Data of 2021'; $value4eng = 'Data of 2021'; $value5eng = 'By 2021'; $value6eng = 'By 2021'; $value7eng = 'By 2021'; $value8eng = 'By 2021'; $value9eng = 'By January 1, 2021';
				} else if ($clickedid == '10') {
					$value1geo = '2014 წლის 1 მარტის მდგომარეობით'; $value2geo = '2022 წლის 1 იანვრის მდგომარეობით'; $value3geo = '2021 წლის მონაცემების მიხედვით'; $value4geo = '2021 წლის მონაცემების მიხედვით'; $value5geo = '2021 წლის მიხედვით'; $value6geo = '2021 წლის მიხედვით'; $value7geo = '2021 წლის მიხედვით'; $value8geo = '2021 წლის მიხედვით'; $value9geo = '2022 წლის 1 იანვრის მდგომარეობით';
					$value1eng = 'By March 1, 2014'; $value2eng = 'By January 1, 2022'; $value3eng = 'Data of 2021'; $value4eng = 'Data of 2021'; $value5eng = 'By 2021'; $value6eng = 'By 2021'; $value7eng = 'By 2021'; $value8eng = 'By 2021'; $value9eng = 'By January 1, 2021';
				} else if ($clickedid == '11') {
					$value1geo = '2014 წლის 1 მარტის მდგომარეობით'; $value2geo = '2022 წლის 1 იანვრის მდგომარეობით'; $value3geo = '2021 წლის მონაცემების მიხედვით'; $value4geo = '2021 წლის მონაცემების მიხედვით'; $value5geo = '2021 წლის მიხედვით'; $value6geo = '2021 წლის მიხედვით'; $value7geo = '2021 წლის მიხედვით'; $value8geo = '2021 წლის მიხედვით'; $value9geo = '2022 წლის 1 იანვრის მდგომარეობით';
					$value1eng = 'By March 1, 2014'; $value2eng = 'By January 1, 2022'; $value3eng = 'Data of 2021'; $value4eng = 'Data of 2021'; $value5eng = 'By 2021'; $value6eng = 'By 2021'; $value7eng = 'By 2021'; $value8eng = 'By 2021'; $value9eng = 'By January 1, 2021';
				} else if ($clickedid == '12') {
					$value1geo = '2014 წლის 1 მარტის მდგომარეობით'; $value2geo = '2022 წლის 1 იანვრის მდგომარეობით'; $value3geo = '2021 წლის მონაცემების მიხედვით'; $value4geo = '2021 წლის მონაცემების მიხედვით'; $value5geo = '2021 წლის მიხედვით'; $value6geo = '2021 წლის მიხედვით'; $value7geo = '2021 წლის მიხედვით'; $value8geo = '2021 წლის მიხედვით'; $value9geo = '2022 წლის 1 იანვრის მდგომარეობით';
					$value1eng = 'By March 1, 2014'; $value2eng = 'By January 1, 2022'; $value3eng = 'Data of 2021'; $value4eng = 'Data of 2021'; $value5eng = 'By 2021'; $value6eng = 'By 2021'; $value7eng = 'By 2021'; $value8eng = 'By 2021'; $value9eng = 'By January 1, 2021';
				} else {
					$value1geo = NULL; $value2geo = NULL; $value3geo = NULL; $value4geo = NULL; $value5geo = NULL; $value6geo = NULL; $value7geo = NULL; $value8geo = NULL; $value9geo = NULL;
					$value1eng = NULL; $value2eng = NULL; $value3eng = NULL; $value4eng = NULL; $value5eng = NULL; $value6eng = NULL; $value7eng = NULL; $value8eng = NULL; $value9eng = NULL;
				}
				echo "
				<thead>
					<tr>
						<th colspan='2' class='tr' Key='RIGHTBOX_TITLE'>ძირითადი მაჩვენებლები</th>
					</tr>
				</thead>
				<tbody>
				<tr id='popover1'>
					<th Key='RIGHTBOX_AREA'>
						ფართობი (კვ.კმ):
					</th>
					<th>" . $row['Area'] . "</th>
				</tr>
				<tr id='popover2'>
					<th Key='RIGHTBOX_POPULATION'>
						მოსახლეობის რიცხოვნობა (ათასი):
					</th>
					<th>" . $row['Population'] . "</th>
				</tr>
				<tr id='popover3'>
					<th Key='RIGHTBOX_GDP'>
						მთლიანი შიდა პროდუქტი (მლნ. ლარი):
					</th>
					<th>" . $row['GDP'] . "</th>
				</tr>
				<tr id='popover4'>
					<th Key='RIGHTBOX_GDPPERCAPITA'>
						მთლიანი შიდა პროდუქტი ერთ სულ მოსახლეზე (აშშ დოლარი):
					</th>
					<th>" . $row['GDPPerCapita'] . "</th>
				</tr>
				<tr id='popover5'>
					<th Key='RIGHTBOX_UNEMPLOYMENTRATE'>
						უმუშევრობის დონე (%):
					</th>
					<th>" . $row['UnemploymentRate'] . "</th>
				</tr>
				<tr id='popover6'>
					<th Key='RIGHTBOX_EMPLOYMENTRATE'>
						დასაქმებულთა რაოდენობა, სულ (ათასი კაცი):
					</th>
					<th>" . $row['EmploymentRate'] . "</th>
				</tr>
				<tr id='popover7'>
					<th Key='RIGHTBOX_EMPLOYMENTRATEINDUSTRY'>
						დასაქმებულთა რაოდენობა - ბიზნეს სექტორში (ათასი კაცი):
					</th>
					<th>" . $row['EmploymentRateIndustry'] . "</th>
				</tr>
				<tr id='popover8'>
					<th Key='RIGHTBOX_AVERAGESALARYINDUSTRY'>
						დასაქმებულთა საშუალოთვიური ხელფასი - ბიზნეს სექტორში (ლარი):
					</th>
					<th>" . $row['AverageSalaryIndustry'] . "</th>
				</tr>
				<tr id='popover9'>
					<th Key='RIGHTBOX_REGISTREDENTITIES'>
						რეგისტრირებული ეკონომიკური სუბიექტების რაოდენობა (ერთეული):
					</th>
					<th>" . $row['RegistredEntities'] . "</th>
				</tr></tbody>";
			}
			echo "</table>";			
			echo "<script>
					$(document).ready(function() {
						$('th').each(function() {
							if ($(this).html().match(/^(\+|-)?[0-9]\d*(\.\d*)?$/,'') || $(this).html()=='-') {
								$(this).css('text-align', 'right');
							}
						});
						$('tr th:first-child').addClass('tr');
						$('.resultright tbody tr').attr('rel', 'popover');
						$('.resultright tbody tr').attr('data-bs-trigger', 'hover');
						$('#popover1').popover({
								html: true,
								animation: true,
								content: '" . $value1 . "',
								placement: 'left'
						});
						$('#popover2').popover({
								html: true,
								animation: true,
								content: '" . $value2 . "',
								placement: 'left'
						});
						$('#popover3').popover({
								html: true,
								animation: true,
								content: '" . $value3 . "',
								placement: 'left'
						});
						$('#popover4').popover({
								html: true,
								animation: true,
								content: '" . $value4 . "',
								placement: 'left'
						});
						$('#popover5').popover({
								html: true,
								animation: true,
								content: '" . $value5 . "',
								placement: 'left'
						});
						$('#popover6').popover({
								html: true,
								animation: true,
								content: '" . $value6 . "',
								placement: 'left'
						});
						$('#popover7').popover({
								html: true,
								animation: true,
								content: '" . $value7 . "',
								placement: 'left'
						});
						$('#popover8').popover({
								html: true,
								animation: true,
								content: '" . $value8 . "',
								placement: 'left'
						});
						$('#popover9').popover({
								html: true,
								animation: true,
								content: '" . $value9 . "',
								placement: 'left'
						});
						$('#ka').click(function () {
							$('#popover1').attr('data-bs-content', '" . $value1geo . "');
							$('#popover2').attr('data-bs-content', '" . $value2geo . "');
							$('#popover3').attr('data-bs-content', '" . $value3geo . "');
							$('#popover4').attr('data-bs-content', '" . $value4geo . "');
							$('#popover5').attr('data-bs-content', '" . $value5geo . "');
							$('#popover6').attr('data-bs-content', '" . $value6geo . "');
							$('#popover7').attr('data-bs-content', '" . $value7geo . "');
							$('#popover8').attr('data-bs-content', '" . $value8geo . "');
							$('#popover9').attr('data-bs-content', '" . $value9geo . "');
						});
						$('#en').click(function () {
							$('#popover1').attr('data-bs-content', '" . $value1eng . "');
							$('#popover2').attr('data-bs-content', '" . $value2eng . "');
							$('#popover3').attr('data-bs-content', '" . $value3eng . "');
							$('#popover4').attr('data-bs-content', '" . $value4eng . "');
							$('#popover5').attr('data-bs-content', '" . $value5eng . "');
							$('#popover6').attr('data-bs-content', '" . $value6eng . "');
							$('#popover7').attr('data-bs-content', '" . $value7eng . "');
							$('#popover8').attr('data-bs-content', '" . $value8eng . "');
							$('#popover9').attr('data-bs-content', '" . $value9eng . "');
						});
					});
				</script>
				";			
			mysqli_free_result($result);
		} else{
			echo "No records matching your query were found.";
		}
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}	
	mysqli_close($link);
?>

