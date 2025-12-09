<?php
	$link = mysqli_connect("192.168.0.139", "root", "Ana2013Mari", "geostat_regions");
	$link->query("SET CHARACTER SET utf8");
	

	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	$main_var = array();
?>