<?php
	$currentSession = $_SESSION['user'];
	$sql = "SELECT * FROM Patients WHERE userName='$currentSession' AND insuranceGroupNumber=0";
	$result = mysqli_query($db, $sql);
	if (mysqli_num_rows($result) == 1) {
		echo "<h4 style='font-size:30px; color:red;'>Incomplete Insurance</h4><h4 style='font-weight:bold;'>Please update your insurance information using the 'Edit Insurance' link</h4>";	
	} else {
		$newSQL = "SELECT * FROM Patients WHERE userName='$currentSession'";
		$newResult = mysqli_query($db, $newSQL);
		while ($row = mysqli_fetch_assoc($newResult)) {
		echo "<table rules='rows'><tr><th style='background-color:#dcdcdc;'>Insurance Provider:</th><td>".$row['insuranceProvider']."</td></tr>";
		echo "<tr><th style='background-color:#dcdcdc;'>Insurance Group Number:</th><td>".$row['insuranceGroupNumber']."</td></tr>";
		echo "<tr><th style='background-color:#dcdcdc;'>Insurance ID</th><td>".$row['insuranceId']."</td></tr>";
		echo "<tr><th style='background-color:#dcdcdc;'>Balance:</th><td>".$row['balance']."</td></tr></table>";
	
		}
	}

?>
