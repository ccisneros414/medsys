<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Patient Dashboard</title>
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
.sidenav {
    width: 500px;
	margin-left: 20px;
	
	height: 85%;
    position: fixed;

    top: 85px;
    font-color: #fff;
    left: 0;
	
	font-size: 12px;
    background-color: #f8f8f8;
    overflow-x: hidden;
			box-shadow: 5px 10px 18px #888888;

}


.main {
	
    	margin-left: 555px; /* Same as the width of the sidenav */
	position: fixed;
	top: 85px;
	background-color: #f8f8f8;	
    	height: 85%;
	width: 70%;
	z-index: 1;
	box-shadow: 5px 10px 18px #888888;
    font-size: 12px; /* Increased text to enable scrolling */
}
.tab-content{

    padding:50px;
}
hr {
	border: none;
	height: 2px;
	background-color: #dcdcdc;
}

.nav-tabs{
	background-color: #dcdcdc;
	
}
.nav-tabs > li > a{
	color: black;
	font-weight:bold;
  border: medium none;
}
.nav-tabs .active a {

  background-color: #f8f8f8 !important;
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
	width: 95%;
    font-family: arial, sans-serif;
    border-collapse: collapse;
	overflow: scroll;
}

td, th {
    text-align: left;
    padding: 20px;
}

tr:nth-child(odd) {
    background-color: #dcdcdc;
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
	position: relative;
	top: 90%;
	width: 100%;
}
.mainbottom{
	position:absolute;
	bottom: 10%;
	top: 90%;
	width: 100%;

}
.chartCol1{
	float:left;
	padding: 25px;
	width:65%;
	height: 500px;

}
.chartCol2{
		
	margin-right: 5%;
	float:right;
	padding: 25px;
	width: 30%;
	height: 500px;
	background-color: #dcdcdc;
	border-radius: 5px;
	box-shadow: 5px 10px 18px #888888;
}

</style>
</head>
<body style="background-image: url(background.jpg)">
<h2 style="color: #f8f8f8; font-size:30px; font-weight:bold;"><img style="margin:0px 20px"  src="./images/img_avatar.png" width="50" height="50" alt="avatar"> <?php $fullName=$_SESSION['fullName']; echo "$fullName";?>
				<a name="logout" style="float:right; margin-right:20px;" href="index.php" class="button button1">Logout</a>	
				<a style="float:right; margin-right: 50px;"href="editInformation.php" class="button button1">Patient Files</a>	
</h2>

<div class="sidenav">
	<ul class="nav nav-tabs">
		<li class="active"><a name="patientInfo" data-toggle="tab" href="#home">Personal Info</a></li>
		<li><a data-toggle="tab" href="#insurance">Insurance Information</a></li>
	</ul>
	<div class="tab-content">
		<div id="home" class="tab-pane fade in active">
		<div>
		<h3 style="display:inline;">Personal Info</h3>
		<a style="display:inline; margin: 0px 70px;"href="editInformation.php">Edit Information</a>	
		</div>
		<hr />
		<br />
		<p><?php include('patientInfo.php'); ?></p>

		</div>
		<div id="insurance" class="tab-pane fade">
			<div>
				<h3 style="display:inline;">Insurance</h3>
				<a style="display:inline; margin: 0px 70px;"href="editInsurance.php">Edit Insurance</a>				
			</div>
			<hr />
			<br />
			<p><?php include('patientInsurance.php'); ?></p>
			 <div class="leftbottom"> 
			 </div>	
		</div>
					
	</div>
</div>

<div class="main">
	<ul class="nav nav-tabs">
    		<li class="active"><a data-toggle="tab" href="#appointments">Appointments</a></li>
   		 <li><a data-toggle="tab" href="#inbox">Inbox</a></li>
   		 <li><a data-toggle="tab" href="#chart">Chart</a></li>
 	 </ul>
  
 	<div class="tab-content">
    		<div id="appointments" class="tab-pane fade in active">
      			<h3 id="upcomingHead">My Upcoming Appointments</h3>
      			<p id="upcomingDescript">Listed below are your currently scheduled appointments. To schedule a new appointment, click the button below.</p>
    		
			<table id="apptsTable">
  		<tr>
   			<th>Doctor</th>
    			<th>Time</th>
    			<th>Date</th>
 		</tr>
 		<tr>
    			<td>Alfreds Futterkiste</td>
   		 	<td>10:30AM</td>
    			<td>10.12.18</td>
  		</tr>
  		<tr>
    			<td>Lady Womanson</td>
    			<td>1:30PM</td>
    			<td>10.12.18</td>
  		</tr>
  		<tr>
    			<td>Ernst Handel</td>
   			<td>2:15PM</td>
    			<td>10.12.18</td>
 	 	</tr>
  		<tr>
    			<td>Guy Dude</td>
    			<td>2:30PM</td>
    			<td>10.12.18</td>
  		</tr>
  		<tr>
    			<td>Guy Dude</td>
    			<td>5:00PM</td>
    			<td>10.12.18</td>
 	 	</tr>
  		<tr>
    			<td>Lady Womanson</td>
    			<td>5:00PM</td>
    			<td>10.12.18</td>
  		</tr>
		</table>
			<p id="date"></p>
			<p id="field1"></p>	
			<p id="field2"></p>	
			<p id="field3"></p>	
			<p id="field4"></p>
			<p id="field5"></p>
			<p id="field6"></p>
			<p id="field7"></p>
			<div class="pagination">
	  			<a href="#">❮</a>
 				<a href="#">❯</a>
			</div>
			 <div class="mainbottom"> 
				 <a id="apptsButton"class="button button1" onclick="newAppt()">New Appointment</a>
				<script>
				function newAppt(){
					document.getElementById("upcomingHead").innerHTML = "";
					document.getElementById("upcomingDescript").innerHTML = "";
					document.getElementById("date").innerHTML = "<h4>current Date</h4>";
					document.getElementById("apptsTable").innerHTML = "<h3>Open Appointments</h3><hr />";				
					document.getElementById("field1").innerHTML = "<a href='addAppt.html' class='button button1'>Lady Womanson &emsp; 10:50am</a>";
						
					document.getElementById("field2").innerHTML = "<a href='addAppt.html' class='button button1'>Lady Womanson &emsp; 11:50am</a>";
				
					document.getElementById("field3").innerHTML = "<a href='addAppt.html' class='button button1'>Lady Womanson &emsp; 1:50pm</a> ";
				
					document.getElementById("field4").innerHTML = "<a href='addAppt.html' class='button button1'>Lady Womanson &emsp; 3:50pm</a> ";
					document.getElementById("field5").innerHTML = "<a href='addAppt.html' class='button button1'>Lady Womanson &emsp; 5:50pm</a> ";
					document.getElementById("apptsButton").innerHTML = "<a/ href='patientDash.php' class='button button1'>Cancel</a>"
				}
				</script>
			</div>
		</div>
   		 <div id="inbox" class="tab-pane fade">
     			 <h3>Inbox</h3>
      			<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    		<div class="container">
  <img src="./images/img_avatar.png" alt="Avatar">
  <p>Hello. How are you today?</p>
  <span class="time-right">11:00</span>
</div>

<div class="container darker">
  <img src="./images/img_avatar.png" alt="Avatar" class="right">
  <p>Hey! I'm fine. Thanks for asking!</p>
  <span class="time-left">11:01</span>
</div>

<div class="container">
  <img src="./images/img_avatar.png" alt="Avatar">
  <p>Sweet! So, what do you wanna do today?</p>
  <span class="time-right">11:02</span>
</div>

<div class="container darker">
  <img src="./images/img_avatar.png" alt="Avatar" class="right">
  <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
  <span class="time-left">11:05</span>
</div>
			<div class="mainbottom"> 
				<a class="button button1" href="appointments.php">New Message</a>	
			</div>
			</div>
    		<div id="chart" class="tab-pane fade">
			<h3>My Chart</h3>
			
			<hr />

			<div class="chartCol1">
			<div>
				<h4 style="display:inline; ">visitDate</h4>
				<h4 style="display:inline; margin:0px 50px;">doctorName</h4>	
			</div><br />
			<hr />
			<div>
				<h4>About the patient:</h4>
				<h4 style="font-size: 13px;">about-------------<h4>
			</div>
			<hr />
			<div>
				<h4>Patient Concerns:</h4>
				<h4 style="font-size: 13px;">patientConcerns-------------<h4>
			</div>
			<hr />
			<div>
				<h4>Diagnosis:</h4>
				<h4 style="font-size: 13px;">diagnosis-------------<h4>
			</div>
			<br />
			<hr />
				<h4 style="font-weight:bold; ">Older Charts:</h4>
				<br />
				<a class="button button1">chart1-DATE</a>
				<a class="button button1">chart1-DATE</a>
				<a class="button button1">chart1-DATE</a>
				<a class="button button1">chart1-DATE</a>
				<a class="button button1">chart1-DATE</a>
				<a class="button button1">chart1-DATE</a>
				<a class="button button1">chart1-DATE</a>


	 </div>

</div>

	</body>
</html>
