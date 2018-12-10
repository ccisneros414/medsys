<?php

	$currentSession = $_SESSION['user'];
	$docSQL = "SELECT * FROM Doctors WHERE userName='$currentSession'";
	$docResult = mysqli_query($db,$docSQL);
	while ($docRow = mysqli_fetch_assoc($docResult)) {

		$docName = $docRow['fullName'];
		$sql = "SELECT * FROM Patients WHERE auth='true' AND doctorName='$docName'";
		$result = mysqli_query($db,$sql);
		while ($row = mysqli_fetch_assoc($result)) {

	echo "      <tr>
	<td><img style='margin:0px 20px;' width='50px;'height='50px;' src='./images/img_avatar.png'></th> &emsp; 
	" . $row['firstName'] . "</td>
        <td>" . $row['lastName'] . "</td>
	<td>" . $row['email'] . "</td>
	<th><a href='patientCard.php?user=" . $row['userName'] . "'>View Patient Card</a></th>
      </tr>
      <tr>
	";

		}
	}
