<?php

	$currentSession = $_SESSION['user'];
	$sql = "SELECT * FROM Chart WHERE userName='$currentSession'";
	$result = mysqli_query($db,$sql);
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<table rules='rows'><tr><th style='font-size:15px;'>Date:</th><td>". $row["visitDate"] . "</td></tr>";	
		echo "<tr><th style='font-size:15px;'>Doctor Name:</th><td>". $row["doctorName"] . "</td></tr>";	
		echo "<tr><th style='font-size:15px;'>About:</th>" ."<td>". $row["about"] . "</td></tr>";	
		echo "<tr><th style='font-size:15px;'>Patient Concerns:</th>" ."<td>". $row["patientConcerns"] . "</td></tr>";	
		echo "<tr><th style='font-size:15px;'>Diagnosis:</th>" ."<td>". $row["diagnosis"] . "</td></tr>";	
		echo "<tr><th style='font-size:15px'>Prescription:</th>" ."<td>". $row["prescription"] . "</td></tr></table>";
		break;
	}
?>
