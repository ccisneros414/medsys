<?php

	$currentSession = $_SESSION['user'];
	$sql = "SELECT * FROM Appointments WHERE confirmed=0";
	$result = mysqli_query($db,$sql);
		echo" 
		 <table style='width:100%; border-color:#dcdcdc;' rules='rows'>
                <tr style='background-color:#dcdcdc;font-size:15px;'>
			<th>Doctor</th> 
			<th>Patient</th>
			<th>Time</th>
			<th>Date</th>
			<th></th>
			<th></th>
                </tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		$userName = $row['userName'];
		$userStuff = "SELECT * FROM Patients WHERE userName='$userName'";
		$userFetch = mysqli_query($db,$userStuff);
		while ($userRow = mysqli_fetch_assoc($userFetch)) {
			echo "
                	<tr>
                        	<td>" . $row['doctorName'] . "</td>
				<td>" . $userRow['fullName'] . "</td>
				<td>" . $row['aptTime'] . "</td>
                        	<td>" . $row['date'] . "</td>
				<th><a href='patientCard.php?user=" . $userName . "&approveAppt=1
				&apptTime=" . $row['aptTime'] . "&apptDate=" . $row['date'] . "&DoctorName=" . $row['doctorName'] . "'>Approve Appointment</a>
				<th><a href='patientCard.php?user=" . $userName . "&denyAppt=1
				&apptTime=" . $row['aptTime'] . "&apptDate=" . $row['date'] . "&DoctorName=" . $row['doctorName'] . "'>Deny Appointment</a>
			</tr>";
		}
	}
                echo "</table>";
?>
