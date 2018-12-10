<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Receptionist Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
	/* Chat containers */
.container {
    border: 2px solid #dedede;
    background-color: #f1f1f1;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
}

/* Darker chat container */
.darker {
    border-color: #ccc;
    background-color: #ddd;
}

/* Clear floats */
.container::after {
    content: "";
    clear: both;
    display: table;
}

/* Style images */
.container img {
    float: left;
    max-width: 60px;
    width: 100%;
    margin-right: 20px;
    border-radius: 50%;
}

/* Style the right image */
.container img.right {
    float: right;
    margin-left: 20px;
    margin-right:0;
}

/* Style time text */
.time-right {
    float: right;
    color: #aaa;
}

/* Style time text */
.time-left {
    float: left;
    color: #999;
}


.main {
	border-radius: 30px;
	margin:4%;	
	background-color: #f8f8f8;	
	width: 50%;
	box-shadow: 5px 10px 18px #888888;
    font-size: 12px; /* Increased text to enable scrolling */
}
.tab-content{
    padding:50px;
}


.nav-tabs{
	background-color: #dcdcdc;
	
}
.nav-tabs > li > a{
	color: black;
	font-weight:bold;
}
.nav-tabs .active a {

  background-color: #f8f8f8 !important;
}
img {
	margin-top:8%;
	border:30px solid #dcdcdc;
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
	width: 95%;
    font-family: arial, sans-serif;
    border-collapse: collapse;
	overflow: scroll;
}

td, th {
    text-align: left;
    padding: 20px;
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
	position: absolute;
	top: 90%;
	width: 100%;
}
.mainbottom{
	position:absolute;
	bottom: 10%;
	top: 90%;
	width: 100%;

}
select {
	border: 1px solid #ccc;
	padding: 5px 35px 5px 5px;
  font-size: 16px;
  height: 34px;
}


</style>
</head>
<body style="background-image: url(clinical-background-10.jpg)">
<h2 style="font-size:25px; margin-left:20px;font-weight:bold;"> <?php $fullName=$_SESSION['fullName']; echo "$fullName";?>
 <form style="display:inline"action=""method="post"><input type="submit" style="float:right; margin-right:60px;" value="Logout" name="logout" class="button button1" /></form>
<button style="display:inline; float:right; margin-right:60px;" class="button button1"onclick="goBack()">Go Back</button>

<script>
function goBack() {
    window.history.back();
}
</script>


</h2>

	<center>
	<div class="main">
	<div class="circle"><img src="./images/img_avatar.png" width="200" height="200" alt="avatar"> </div> 
	<br/>
	<br/>
	<br/>
	<form action="/action_page.php">
  <input type="file" name="pic" accept="image/*">
  <input type="submit">
</form>

	<br/>
	<br/>
	<br/>
	<br/>
	</main>
	</center>
	</body>
</html>
