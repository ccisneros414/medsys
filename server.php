<?php
	session_start();
	// connect to the database
	
	$db = mysqli_connect('localhost:3306', 'phpmyadmin', 'team8!', 'database');

	if (mysqli_connect_errno()) {
		echo "connection error: " . mysqli_connect_error();;
	}
	// if the register button is clicked
	if (isset($_POST['register'])) {
		$firstName = ($_POST['firstName']);
		$lastName = ($_POST['lastName']);
		$userName = ($_POST['userName']);
		$password1 = ($_POST['password1']);
		$password2 = ($_POST['password2']);
		$address = ($_POST['address']);
		$city = ($_POST['city']);
		$zip = ($_POST['zip']);
		$state = ($_POST['state']);
		$phoneNumber = ($_POST['phoneNumber']);
		$email = ($_POST['email']);
		$birthday = ($_POST['birthday']);
		$social = ($_POST['social']);
		
		// ensure that the fields are filled properly
		if (empty($firstName) ) {
			$errors[] = "First Name is required";
		}
		if (empty($lastName) ) {
			$errors[] = "Last Name is required";
		}
		if (empty($userName) ) {
			$errors[] = "Username is required";
		}
		if (empty($password1) ) {
			$errors[] = "Password is required";
		}
		if ($password1 != $password2) {
			$errors[] = "The two passwords do not match";
		}
		if (empty($address) ) {
			$errors[] = "Address is required";
		}
		if (empty($city) ) {
			$errors[] = "City is required";
		}
		if (empty($state) ) {
			$errors[] = "State is required";
		}
		if (empty($zip)) {
			$errors[] = "ZIP is required";
		}
		if (empty($phoneNumber) ) {
			$errors[] = "Phone Number is required";
		}
		if (empty($email) ) {
			$errors[] = "Email is required";
		}
		if (empty($birthday) ) {
			$errors[] = "Birthday is required";
		}
		if (empty($social) ) {
			$errors[] = "Social is required";
		}

		// already existing username
		$doctor = "SELECT * FROM Doctors WHERE userName='$userName'";
		$rdoctor = mysqli_query($db, $doctor);
		if (mysqli_num_rows($rdoctor) == 1) {
			$errors[] = "Username unavailable";
		}
		$nurse = "SELECT * FROM Nurses WHERE userName='$userName'";
		$rnurse = mysqli_query($db, $nurse);
		if (mysqli_num_rows($rnurse) == 1) {
			$errors[] = "Username unavailable";
		}
		$reception = "SELECT * FROM Receptionist WHERE userName='$userName'";
		$rreception = mysqli_query($db, $reception);
		if (mysqli_num_rows($rreception) == 1) {
			$errors[] = "Username unavailable";
		}
		$patient = "SELECT * FROM Patients WHERE userName='$userName'";
		$rpatient = mysqli_query($db, $patient);
		if (mysqli_num_rows($rpatient) == 1) {
			$errors[] = "Username unavailable";
		}

		// if correct input, save to database
		$fullAddr = $address . " " . $city . ", " . $state . " " . $zip;
		$fullName = $firstName . " " . $lastName;
		if (count($errors) == 0) {
			$sql = "INSERT INTO Patients (balanceDue,doctorName,fullName,firstName,lastName,userName,passwordHash,address,phoneNumber,email,birthday,social,auth,insuranceProvider,insuranceGroupNumber,insuranceId) 
				VALUES (0,'','$fullName', '$firstName', '$lastName', '$userName', '$password1', '$fullAddr', '$phoneNumber', '$email', '$birthday', $social, 'false', '', 0, 0)";
			if (mysqli_query($db,$sql)){
				$errors[] = "Your registration request has been received";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($db);
			}
		}
	}

	// log in
	if (isset($_POST['login'])) {
		$userName = ($_POST['userName']);
		$password1 = ($_POST['password1']);

		if (empty($userName) ) {
			$errors[] = "Username is required";
		}
		if (empty($password1) ) {
			$errors[] = "Password is required";
		}

		if (count($errors) == 0) { //patient login
			$query = "SELECT auth FROM Patients WHERE userName='$userName' AND passwordHash='$password1'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {
				$queryAuth = "SELECT * FROM Patients WHERE userName='$userName' AND auth='true'";
				$auth = mysqli_query($db, $queryAuth);
				if (mysqli_num_rows($auth) == 1) {
					$_SESSION['user'] = $userName;
					$_SESSION['success'] = "You are now logged in";
					$sql = "SELECT * FROM Patients WHERE userName='$userName'";
					$result = mysqli_query($db,$sql);
					while ($row = mysqli_fetch_assoc($result)) {
						$_SESSION['fullName'] = $row['fullName'];
					}
					header('location: patientDash.php');
				} else {
					$errors[] = "not authenticated";
				}
			} else {		
			//doctor login
			$query = "SELECT * FROM Doctors WHERE userName='$userName' AND passwordHash='$password1'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {
				$_SESSION['user'] = $userName;
				$_SESSION['success'] = "You are now logged in";
				$sql = "SELECT * FROM Doctors WHERE userName='$userName'";
				$result = mysqli_query($db,$sql);
				while ($row = mysqli_fetch_assoc($result)) {
					$_SESSION['fullName'] = $row['fullName'];
				}
				header('location: doctorDash.php');
			} else {
			//nurse login
			$query = "SELECT * FROM Nurses WHERE userName='$userName' AND passwordHash='$password1'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {
				$_SESSION['user'] = $userName;
				$_SESSION['success'] = "You are now logged in";
				$sql = "SELECT * FROM Nurses WHERE userName='$userName'";
				$result = mysqli_query($db,$sql);
				while ($row = mysqli_fetch_assoc($result)) {
					$_SESSION['fullName'] = $row['fullName'];
				}
				header('location: nurseDash.php');
			} else {
			//receptionist login
			$query = "SELECT * FROM Receptionist WHERE userName='$userName' AND passwordHash='$password1'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {
				$_SESSION['user'] = $userName;
				$_SESSION['success'] = "You are now logged in";
				$sql = "SELECT * FROM Receptionist WHERE userName='$userName'";
				$result = mysqli_query($db,$sql);
				while ($row = mysqli_fetch_assoc($result)) {
					$_SESSION['fullName'] = $row['fullName'];
				}
				header('location: receptionistDash.php');
			} else {
				$errors[] = "wrong username/password combonation";
			}
			}
			}
			}	
		}
	}

	// log out
	if (isset($_POST['logout'])) {
		session_destroy();
		unset($_SESSION['userName']);
		header('location: index.php');
	}

	// if insurance is edited
	if (isset($_POST['editInsurance'])) {
		$provider = ($_POST['insuranceProvider']);
		$groupNum = ($_POST['insuranceGroupNumber']);
		$id = ($_POST['insuranceId']);
		$social = ($_POST['social']);

		if (empty($provider)) {
			$errors[] = "Insurance Provider is required";
		}
		if (empty($groupNum)) {
			$errors[] = "Insurance Group # is required";
		}
		if (empty($id)) {
			$errors[] = "Insurance ID is required";
		}
		if (empty($social)) {
			$errors[] = "Social Security Number is required";
		}
		$userName = $_SESSION['user'];
		$query = "SELECT * FROM Patients WHERE userName='$userName' AND social='$social'";
		$result = mysqli_query($db, $query);
		if (mysqli_num_rows($result) != 1) {
			$errors[] = "Incorrect Social Security Number";
		}

		if (count($errors) == 0) {
			$userName = $_SESSION['user'];
			$sql = "UPDATE Patients SET insuranceProvider='$provider', insuranceGroupNumber='$groupNum', insuranceId='$id'
				WHERE userName='$userName'" ;
			if (mysqli_query($db,$sql)){
				$errors[] = "Your Insurance Information has been updated";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($db);
			}
		}
	}
	
	// if patient info is edited
	if (isset($_POST['editInformation'])) {
		$firstName = ($_POST['firstName']);
		$lastName = ($_POST['lastName']);
		$password = ($_POST['password']);
		$phoneNumber = ($_POST['phoneNumber']);
		$address = ($_POST['address']);
		$email = ($_POST['email']);
		$userName = $_SESSION['user'];
		if (empty($firstName) && empty($lastName) && empty($password) && empty($phoneNumber) && empty($address) && empty($email)) {
			$errors[] = "No changes made";
		}
		if ($firstName != '') {
			$sql = "UPDATE Patients SET firstName='$firstName' WHERE userName='$userName'";
			if (mysqli_query($db,$sql)){
				$errors[] = "First Name updated succesfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($db);
			}

		}
		if ($lastName != '') {
			$sql = "UPDATE Patients SET lastName='$lastName' WHERE userName='$userName'";
			if (mysqli_query($db,$sql)){
				$errors[] = "Last Name updated succesfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($db);
			}
		}
		if ($password != '') {
			$sql = "UPDATE Patients SET passwordHash='$password' WHERE userName='$userName'";
			if (mysqli_query($db,$sql)){
				$errors[] = "Password updated succesfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($db);
			}
		}
		if ($phoneNumber != '') {
			$sql = "UPDATE Patients SET phoneNumber='$phoneNumber' WHERE userName='$userName'";
			if (mysqli_query($db,$sql)){
				$errors[] = "Phone Number updated succesfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($db);
			}
		}
		if ($address != '') {
			$sql = "UPDATE Patients SET address='$address' WHERE userName='$userName'";
			if (mysqli_query($db,$sql)){
				$errors[] = "Address updated succesfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($db);
			}
		}
		if ($email != '') {
			$sql = "UPDATE Patients SET email='$email' WHERE userName='$userName'";
			if (mysqli_query($db,$sql)){
				$errors[] = "Email updated succesfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($db);
			}
		}

		

	}

	if(isset($_POST['submitAppointment'])) {
		$currentUserName = $_SESSION['user'];
		$currentFullName = $_SESSION['fullName'];
		$doctorName = ($_POST['doctorName']);
		$date = ($_POST['date']);
		$time = ($_POST['time']);

		if(empty($doctorName)) {
			$errors[] = "Doctor Name required";
		}
		if(empty($date)) {
			$errors[] = "Date required";
		}
		if(empty($time)) {
			$errors[] = "Time required";
		}

		if (count($errors) == 0) {
			$sql = "INSERT INTO Appointments (userName,doctorName,date,aptTime,weekNumber,confirmed) 
			VALUES ('$currentUserName','$doctorName','$date','$time',0,0)";
			if (mysqli_query($db,$sql)){
				$errors[] = "Your registration request has been received";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($db);
			}
		}
			
	}

?>
