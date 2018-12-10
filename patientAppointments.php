<?php
	$currentSession = $_SESSION['user'];
	$sql = "SELECT * FROM Appointments WHERE userName='$currentSession' AND confirmed=1";
	$result = mysqli_query($db,$sql);
	echo "<table rules='rows' id='apptsTable'>
  		<tr style='font-size:15px;'>
   			<th>Doctor</th>
    			<th>Time</th>
    			<th>Date</th>
		</tr> 
	";
	while ($row = mysqli_fetch_assoc($result)) {
		echo "
 		<tr>
    			<td>" . $row["doctorName"] . "</td>
   		 	<td>" . $row["aptTime"] . "</td>
    			<td>" . $row["date"] . "</td>
  		</tr>
		";
	}
		echo "</table>";
?>
