<?php include('server.php'); ?>
<!doctype html>
<html>
<html lang="en">
        <head>
        <title>Register</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>



.button {
    padding: 8px 10px;
    text-align: center;
    border-radius: 6px;
    text-decoration: none;
    display: inline-block;
    font-size: 11px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
}
.button1 {
    background-color: #337ab7;
    color: #fff;
    border: 2px solid #337ab7;

}
.button1:hover {
    background-color: #63a0d4;
    color: white;
}

.leftbottom{
        position: fixed;
        bottom: 200px;
        width: 100%;
}
.rightbottom{
        position: absolute;
        bottom: 25px;
        width: 100%;
        left: 150px;

}

.login-form * {
	display: block;
	width: 55%;
	border-radius: 3px;
	margin: 40px;
	border: solid 1px #565555;
	padding: 5px;
	color: gray;
}

.error {
	width: 50%;
	height:50%;
	margin: 0px auto;
	border: 1px solid #a94442;
	color: #a94442;
	background: #f2dede;
	border-radius: 5px;
	text-align: center;
}
main{
	background-color: #f8f8f8;
	padding: 80px;
	margin: 100px;
	margin-right: 25%;
	margin-left: 25%;
	border-radius: 6px;
	box-shadow: 5px 10px 18px #888888
	 
}
body{
	background-image: url(background.jpg);
}
</style>
</head>
	<body>

		<main>
			<center>
				<h2 style="font-size:5vw; color:#282828; display:inline">EMIS</h2>
				<h2 style="font-weight:bold; color:red; display:inline">medsys</h2>
				<hr />
				<h4>Please fill out the boxes to apply for an account</h4>
			<center>
				
				<?php include('errors.php'); ?>
			<form method="post" action="Register.php" class="login-form">
				<input type="text" name="firstName" placeholder="First Name">
				<input type="text" name="lastName" placeholder="Last Name">
				<input type="text" name="userName" placeholder="Username">
				<input type="password" name="password1" placeholder="Password">
				<input type="password" name="password2" placeholder="Confirm Password">
				<input type="text" name="address" placeholder="Address">
				<input type="text" name="city" placeholder="City">
				<input type="text" name="state" placeholder="State">
				<input type="text" name="phoneNumber" placeholder="Phone Number">
				<input type="text" name="email" placeholder="Email Address">
				<input type="text" name="birthday" placeholder="Birthdate in mm/dd/yyyy format">
				<input type="password" name="social" placeholder="Social Security">
				
				<button type="sumbit" name="register" class="btn">Register</button>
			</form>
			</center>
			</center>
				<center><p2>If you already have an account please login with the link below<li><a href="index.php">Login Here</a></li></p2></center>
		</main>
	</body>
</html>
