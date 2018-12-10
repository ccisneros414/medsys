<?php

	$currentSession = $_SESSION['user'];
	$sql = "SELECT * FROM Patients WHERE userName='$currentSession'";
	$result = mysqli_query($db,$sql);
	while ($row = mysqli_fetch_assoc($result)) {
		$firstName = $row['firstName'];
		$lastName = $row['lastName'];
		$phoneNumber = $row['phoneNumber'];
		$address = $row['address'];
		$email = $row['email'];
		echo "<table rules='rows'><tr><th style='height:20px;background-color:#dcdcdc;'>Patient Name:</th><td>".$row['fullName']."</td></tr>";
		echo "<tr><th style='background-color:#dcdcdc;'>User Name:</th><td>".$row['userName']."</td></tr>";
		echo "<tr><th style='background-color:#dcdcdc;'>Address:</th><td>".$row['address']."</td></tr>";
		echo "<tr><th style='background-color:#dcdcdc;'>Email Address:</th><td>".$row['email']."</td></tr>";
		echo "<tr><th style='background-color:#dcdcdc;'>Date of Birth:</th><td>".$row['birthday']."</td></tr>";
		echo "<tr><th style='background-color:#dcdcdc;'>Social Security:</th><td>".$row['social']."</td></tr></table>";
	}
?>
