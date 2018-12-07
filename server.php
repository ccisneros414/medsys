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
		$fullAddr = $address . " " . $city . " " . $state;
		$fullName = $firstName . " " . $lastName;
		if (count($errors) == 0) {
			$sql = "INSERT INTO Patients (balanceDue,doctorName,fullName,firstName,lastName,userName,passwordHash,address,phoneNumber,email,birthday,social,auth) 
				VALUES (0,'','$fullName', '$firstName', '$lastName', '$userName', '$password1', '$fullAddr', $phoneNumber, '$email', '$birthday', $social, 'false')";
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

		if (count($errors) == 0) {
			$query = "SELECT auth FROM Patients WHERE userName='$userName' AND passwordHash='$password1'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {
				$queryAuth = "SELECT auth FROM Patients WHERE auth='true'";
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
				$errors[] = "wrong username/password combonation";
			}	
		}
	}

	// log out
	if (isset($_GET['logout'])) {
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
		$userName = $_SESSION['userName'];
		$query = "SELECT * FROM Patients WHERE userName='$userName' AND social='$socail'";
		$result = mysqli_query($db, $query);
		if (mysqli_num_rows($result) != 1) {
			$errors[] = "Incorrect Social Security Number";
		}

		if (count($errors) == 0) {
			$userName = $_SESSION['userName'];
			$sql = "UPDATE Patients SET insuranceProvider='$provider' insuranceGroupNumber='$groupNum' insuranceId='$id'
				WHERE userName='$userName'" ;
			if (mysqli_query($db,$sql)){
				$errors[] = "Your registration request has been received";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($db);
			}
		}
	}
	
	// if patient info is edited
	if (isset($_POST['editInfo'])) {
		
	}

	// if receptionist chooses to authenticate
	//if (isset($_get['authenticate'])) {
		
	//}
	
	// display insurance info

	//UNFINISHED STEPS:
	 
?>
