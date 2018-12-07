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
	float:right;
	position: relative;
	top: 60px;
	background-color: #f8f8f8;	
    	height: 90%;
	width: 90%;
	z-index: 1;
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
select {
	border: 1px solid #ccc;
	padding: 5px 35px 5px 5px;
  font-size: 16px;
  height: 34px;
}


</style>
</head>
<body style="background-image: url(clinical-background-10.jpg)">
<h2 style="font-size:25px; margin-left:20px;font-weight:bold;"> Receptionist Name
				<a style="float:right; margin-right:20px;" href="index.php" class="button button1">Logout</a>	
</h2>

<div class="main">

	<ul class="nav nav-tabs">
    		<li class="active"><a data-toggle="tab" href="#patients">Patients</a></li>
   		 <li><a data-toggle="tab" href="#inbox">Inbox</a></li>
   		 <li><a data-toggle="tab" href="#schedule">Schedule</a></li>
   		 <li><a data-toggle="tab" href="#requests">Requests</a></li>
 	 </ul>
  
 	<div class="tab-content">
    		<div id="patients" class="tab-pane fade in active">
  <h3>My Patients</h3>
  <p>Search by name or email:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table style="overflow:scroll;" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
	<th>Email</th>
	<th> </th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
        <td><img style="margin:0px 20px;" width="50px;"height="50px;" src="./images/img_avatar.png"></th> &emsp; John</td>
        <td>Doe</td>
	<td>john@example.com</td>
	<th><a href="patientCard.php">View Patient Card</a>
      </tr>
      <tr>
        <td><img style="margin:0px 20px;" width="50px;"height="50px;" src="./images/img_avatar.png"></th> &emsp; Mary</td>
        <td>Moe</td>
        <td>mary@mail.com</td>
	<th><a href="patientCard.php">View Patient Card</a>
      </tr>
      <tr>
        <td><img style="margin:0px 20px;" width="50px;"height="50px;" src="./images/img_avatar.png"></th> &emsp; July</td>
        <td>Dooley</td>
        <td>july@john.com</td>
	<th><a href="patientCard.php">View Patient Card</a>
      </tr>
      <tr>
        <td><img style="margin:0px 20px;" width="50px;"height="50px;" src="./images/img_avatar.png"></th> &emsp; Aria</td>
        <td>Ravendale</td>
        <td>a_r@test.com</td>
	<th><a href="patientCard.php">View Patient Card</a>
      </tr>
    </tbody>
  </table>
  

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>



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
    		<div id="schedule" class="tab-pane fade">
			<h3>This Week</h3>
			<hr />			
	 </div>
	<div id="requests" class="tab-pane fad">
		<h3>Requests</h3>
		<div class ="custom-select">
		<select id="reqSelect" onchange="request()">
			<option value="apptRequests">Appointment Requests</option>
			<option value="regRequests">Registration Requests</option>
		</select>
		</div>
		<div id="apptRequestDiv">
		
		 <table>
                <tr style="background-color:#dcdcdc">
			<th>Doctor</th> 
			<th>Patient</th>
			<th>Time</th>
			<th>Date</th>
			<th></th>
                </tr>
                <tr>
                        <td>Alfreds Futterkiste</td>
			<td>Patient Sickboi</td>
			<td>10:30AM</td>
                        <td>10.12.18</td>
			<th><a href="patientCard.php">Confirm Appointment</a>
                </tr>
                <tr>
                        <td>Lady Womanson</td>
			<td>Patient Sickboi</td>
                        <td>1:30PM</td>
                        <td>10.12.18</td>
			<th><a href="patientCard.php">Confirm Appointment</a>
                </tr>
                <tr>
                        <td>Ernst Handel</td>
			<td>Patient Sickboi</td>
                        <td>2:15PM</td>
                        <td>10.12.18</td>
			<th><a href="patientCard.php">Confirm Appointment</a>
                </tr>
                <tr>
                        <td>Guy Dude</td>
			<td>Patient Sickboi</td>
                        <td>2:30PM</td>
                        <td>10.12.18</td>
			<th><a href="patientCard.php">Confirm Appointment</a>
                </tr>
                <tr>
                        <td>Guy Dude</td>
			<td>Patient Sickboi</td>
                        <td>5:00PM</td>
                        <td>10.12.18</td>
			<th><a href="patientCard.php">Confirm Appointment</a>
                </tr>
                <tr>
                        <td>Lady Womanson</td>
			<td>Patient Sickboi</td>
                        <td>5:00PM</td>
                        <td>10.12.18</td>
			<th><a href="patientCard.php">Confirm Appointment</a>
                </tr>
                </table>


		</div>

		<div id="registerRequestDiv" style="display:none;">
			<table>
                <tr style="background-color:#dcdcdc">
			<th>Doctor</th> 
			<th>Patient</th>
			<th>Time</th>
			<th>Date</th>
			<th></th>
                </tr>
                <tr>
                        <td>Alfreds Futterkiste</td>
			<td>Patient Sickboi</td>
			<td>10:30AM</td>
                        <td>10.12.18</td>
			<th><a href="patientCard.php">Verify Patient Card</a>
                </tr>
                <tr>
                        <td>Lady Womanson</td>
			<td>Patient Sickboi</td>
                        <td>1:30PM</td>
                        <td>10.12.18</td>
			<th><a href="patientCard.php">Verify Patient Card</a>
                </tr>
                </table>

		</div>

		<script>
			function request(){
				if(document.getElementById('reqSelect').value=="apptRequests"){
					var x = document.getElementById("apptRequestDiv");
					var y = document.getElementById("registerRequestDiv");
					x.style.display = "block";
					y.style.display = "none";	
					
				} else if(document.getElementById('reqSelect').value=="regRequests"){
					var x = document.getElementById("apptRequestDiv");
					var y = document.getElementById("registerRequestDiv");
					y.style.display = "block";
					x.style.display = "none";
				
				}
			}
		</script>

</div>
	</div>

</div>

	</body>
</html>
