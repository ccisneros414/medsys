<?php

	$currentSession = $_SESSION['user'];
	$sql = "SELECT * FROM Patients WHERE auth='true'";
	$result = mysqli_query($db,$sql);
  echo "<table rules='rows' style='width:100%;border-color:#dcdcdc;overflow:scroll;' >
    <thead>
      <tr style='background-color:#dcdcdc;font-size:15px;'>
        <th>First Name</th>
        <th>Last Name</th>
	<th>Email</th>
	<th> </th>
      </tr>
    </thead>";
	while ($row = mysqli_fetch_assoc($result)) {
    echo "<tbody id='myTable'>
      <tr>
	<td>" . $row['firstName'] . "</td>
        <td>" . $row['lastName'] . "</td>
	<td>" . $row['email'] . "</td>
	<th><a href='patientCard.php?user=" . $row['userName'] . "'>View Patient Card</a>
      </tr>
      <tr>";
	}
echo "</tbody>
	</table>";
?>
