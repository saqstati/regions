<?php 
				
	include 'connection.php';
	
	$sql = "SELECT * FROM pagetitle WHERE TitleID = '14' ";
	if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result) > 0){
			
			while($row = mysqli_fetch_array($result)){
				echo "<center><h1>" . $row['PageTitleName'] . "</h1></center>";
			}
						
			mysqli_free_result($result);
		} else{
			echo "No records matching your query were found.";
		}
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	
	mysqli_close($link);
?>