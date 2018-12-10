<?php include('server.php'); ?>
<!doctype html>
<html>
<html lang="en">
        <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>

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
	padding-top: 10px;
}

nav ul li{
	list-style-type: none;
	text-aling: left;
	padding-left: 120px;
	padding-right: 120px;
	font-size: 20px;
	display: inline-block;
	color: #1908F1;
	padding-top: 0px;
}

nav ul li a{
	text-decoration: none;
	color: #000000
	padding: 50px;
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
	
	<body>
		
		<main>
		
			<center>
				<h2 style="font-size:5vw; color:#282828; display:inline">EMIS</h2>
				<h2 style="font-weight:bold;color:red; display:inline">medsys</h2>
				<hr />
			<center>
	
				<?php include('errors.php'); ?>
			<center>
				<center><form method="post" action="index.php" class="login-form">
				<input type="text" name="userName" value="<?php echo "$userName"; ?>" placeholder="USERNAME">	
				<input type="password" name="password1" placeholder="PASSWORD">
				
				<button type="submit" value="Login" name="login" class="btn">Login</button>
				</form></center>
If you do not have an account please use link below<li><a href="Register.php">Register Here</a></li>			
				</center>
		
		</main>
	</body>
</html>
