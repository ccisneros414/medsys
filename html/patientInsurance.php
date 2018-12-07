<?php

	$currentSession = $_SESSION['user'];
	$sql = "SELECT * FROM Patients WHERE userName='$currentSession' AND insuranceGroupNumber=0";
	if ($result = mysqli_query($db,$sql) ) {
		echo "<h4 style='font-size:30px; color:red;'>Incomplete Insurance</h4><h4 style='font-weight:bold;'>Please update your insurance information using the 'Edit Insurance' link</h4>";	
	} else {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<h4 style='font-size:20px;'>Insurance Provider:</h4>" ."<h4 style='font-weight:bold;'>". $row["insuranceProvider"] . "</h4><hr />";	
			echo "<h4 style='font-size:20px;'>Insurance Group Number:</h4>" ."<h4 style='font-weight:bold;'>". $row["insuranceGroupNumber"] . "</h4><hr />";	
			echo "<h4 style='font-size:20px;'>Insurance ID:</h4>" ."<h4 style='font-weight:bold;'>". $row["insuranceId"] . "</h4><hr />";	
			echo "<h4 style='font-size:20px;'>Balance:</h4>" ."<h4 style='font-weight:bold;'>". $row["balanceDue"] . "</h4><hr />";	
		}
	}
?>
