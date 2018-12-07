<?php

	$currentSession = $_SESSION['user'];
	$sql = "SELECT * FROM Patients WHERE userName='$currentSession'";
	$result = mysqli_query($db,$sql);
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<h4 style='font-size:20px;'>Patient Name:</h4>" ."<h4 style='font-weight:bold;'>". $row["fullName"] . "</h4><hr />";	
		echo "<h4 style='font-size:20px;'>Username:</h4>" ."<h4 style='font-weight:bold;'>". $row["userName"] . "</h4><hr />";	
		echo "<h4 style='font-size:20px;'>Phone Number:</h4>" ."<h4 style='font-weight:bold;'>". $row["phoneNumber"] . "</h4><hr />";	
		echo "<h4 style='font-size:20px;'>Address:</h4>" ."<h4 style='font-weight:bold;'>". $row["address"] . "</h4><hr />";	
		echo "<h4 style='font-size:20px;'>Email:</h4>" ."<h4 style='font-weight:bold;'>". $row["email"] . "</h4><hr />";	
		echo "<h4 style='font-size:20px;'>Birth Date:</h4>" ."<h4 style='font-weight:bold;'>". $row["birthday"] . "</h4><hr />";	
		echo "<h4 style='font-size:20px;'>Social Security:</h4>" ."<h4 style='font-weight:bold;'>". $row["social"] . "</h4><hr />";	
	}
?>
