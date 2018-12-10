<?php

	$currentSession = $_SESSION['user'];
	$sql = "SELECT * FROM Patients WHERE auth='false'";
	$result = mysqli_query($db,$sql);
		echo" 
		 <table style='width:100%;border-color:#dcdcdc;' rules='rows'>
                <tr style='background-color:#dcdcdc; font-size:15px;'>
			<th>First Name</th> 
			<th>Last Name</th>
			<th>Email</th>
			<th></th>
			<th></th>
                </tr>";
	while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>" . $row['firstName'] . "</td>
			<td>" . $row['lastName'] . "</td>
			<td>" . $row['email'] . "</td>
			<th><a href='patientCard.php?user=" . $row['userName'] . "&approveRegistration=1'>Confirm Registration</a>
			<th><a href='patientCard.php?user=" . $row['userName'] . "&denyRegistration=1'>Deny Registration</a>
                </tr>";
	}
?>
