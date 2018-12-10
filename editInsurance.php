<?php include('server.php'); ?>
<!doctype html>
<html>
<html lang="en">
        <head>
        <title>Edit Insurance</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
.sidenav {
    width: 500px;
        height: 85%;
    position: fixed;
    z-index: 1;
    top: 68px;
    font-color: #fff;
    left: 0;
        font-size: 12px;
    background-color: #dcdcdc;
    overflow-x: hidden;
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
.tab-content{
    padding:20px;
}
.nav-tabs{
        background-color: #fff;
}
.nav-tabs > li > a{
  border: medium none;
}
.nav-tabs .active a {
  background-color: #dcdcdc !important;
}
img {
    border-radius: 50%;
}
.pagination {
    display: inline-block;
}
.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #dcdcdc;
}
.pagination a:hover:not(.active) {background-color: #ddd;}
table {
        width: 85%;
    font-family: arial, sans-serif;
    border-collapse: collapse;
        overflow: scroll;
}
td, th {
    border: 1px solid #000;
    text-align: left;
    padding: 8px;
}
tr:nth-child(even) {
    background-color: #b4b4b4;
}
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
nav {
	float: right;
	padding-left: 4%;
	padding-right: 1%;
	padding-top: 0px;
}
nav ul li{
	list-style-type: none;
	text-aling: left;
	padding-left: 120px;
	font-size: 20px;
	display: inline-block;
	color: #1908F1;
	padding-top: 0px;
}
nav ul li a{
	text-decoration: none;
	color: #000000
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
</style>

</head>
	<body style="background-image: url(background.jpg)">
		<header>
	<h2 style="color: #f8f8f8; font-size:30px; font-weight:bold;"><img style="margin:0px 20px"  src="./images/img_avatar.png" width="50" height="50" alt="avatar"> <?php $fullName=$_SESSION['fullName']; echo "$fullName";?>
	
			<nav>
				<ul>
					<a href="patientDash.php" class="button button1">Home</a>
					<a href="index.php" class="button button1">Logout</a>
				</ul>
			</nav>
		</header>
		<main>
			<center><p>To update Insurance fill out all boxes below <br />

				<?php include('errors.php'); ?>
				<center><form method="post" action="editInsurance.php" class="login-form">
				<input type="text" name="insuranceProvider" placeholder="Insurance Provider">
				<input type="text" name="insuranceGroupNumber" placeholder="Insurance Group #">
				<input type="text" name="insuranceId" placeholder="Insurance Id">
				<input type="password" name="social" placeholder="Social Security">
				
				<button type="sumbit" name="editInsurance" class="btn">Submit</button>
				</form></center>
		</main>
	</body>
</html>
