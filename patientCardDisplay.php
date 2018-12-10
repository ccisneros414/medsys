<?php
	//user's card whos information we will dispaly
	if (isset($_GET['user'])) {
		$displayUser = $_GET['user'];
	}
	//confirm account registration
	if (isset($_GET['approveRegistration'])) {
		$approveRegistration = $_GET['approveRegistration'];
	}
	//deny account registration
	if (isset($_GET['denyRegistration'])) {
		$denyRegistration = $_GET['denyRegistration'];
	}
	//accept appt request
	if (isset($_GET['approveAppt'])) {
		$approveAppt = $_GET['approveAppt'];
	}
	//remove appt request
	if (isset($_GET['denyAppt'])) {
		$denyAppt = $_GET['denyAppt'];
	}
	//get appt time (for appt denial or approval)
	if (isset($_GET['apptTime'])) {
		$apptTime = $_GET['apptTime'];
	}
	//get appt date (for appt denail or approval)
	if (isset($_GET['apptDate'])) {
		$apptDate = $_GET['apptDate'];
	}
	//get appt doctor (for appt denail or approval)
	if (isset($_GET['DoctorName'])) {
		$doctorName = $_GET['DoctorName'];
	}
	
	//setup patient card display
	$sql = "SELECT * FROM Patients WHERE userName='$displayUser'";
	$result = mysqli_query($db,$sql);
	while ($row = mysqli_fetch_assoc($result)) {

		//APPOINTMENT HANDLING
		if ($approveAppt == 1) {
			$sql = "UPDATE Appointments SET confirmed=1 WHERE userName='$displayUser' AND aptTime='$apptTime' AND date='$apptDate' AND doctorName='$doctorName'";
			$result = mysqli_query($db,$sql);
			$sql = "UPDATE Patients SET doctorName='$doctorName' WHERE userName='$displayUser'";
			$result = mysqli_query($db,$sql);
			// INSERT SUCCESS APPT APPROVAL MESSAGE
		} else if ($denyAppt == 1) {
			$sql = "DELETE FROM Appointments WHERE userName='$displayUser' AND aptTime='$apptTime' AND date='$apptDate' AND doctorName='$doctorName'";
			$result = mysqli_query($db,$sql);
			// INSERT SUCCESS APPT DENIAL MESSAGE
		} 

		//REGISTRATION HANDLING
		if ($approveRegistration == 1) {
			$sql = "UPDATE Patients SET auth='true' WHERE userName='$displayUser'";
			$result = mysqli_query($db,$sql);
			// INSERT SUCCESS REGISTRATION APPROVAL MESSAGE
		} else if ($denyRegistration == 1) {
			$sql = "DELETE FROM Patients WHERE userName='$displayUser'";
			$result = mysqli_query($db,$sql);
			// INSERT SUCCESS REGISTRATION DENIAL MESSAGE
		}
		
		
		//DISPLAY USER INFO TO CARD
		echo "<br/><h2>".$row['fullName']."</h2><br />";	
		echo "<table style='width:40%;' rules='rows'><tr><th>Date of Birth:</th><td>". $row['birthday'] . "</td></tr>";
		echo "<tr><th>Current Doctor:</th><td>". $row['doctorName'] . "</td></tr>";
		echo "<tr><th>Insurance Provider:</th><td>". $row['insuranceProvider'] . "</td></tr>";
		echo "<tr><th>Insurance ID:</th><td>". $row['insuranceId'] . "</td></tr></table>";
		echo "<br/><h4>Contact Information</h4>";	
		echo "<table style='width:40%;' rules='rows'><tr><th>Phone number:</th><td>". $row['phoneNumber'] . "</td></tr>";
		echo "<tr><th>Email:</th><td>". $row['email'] . "</td></tr>";
		echo "<tr><th>Address:</th><td>". $row['address'] . "</td></tr></table>";

	}
?>
