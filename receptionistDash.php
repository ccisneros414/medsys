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


.main {	
	float:right;
	position: relative;
	top: 60px;
	left:20px;	
background-color: #f8f8f8;	
	width: 90%;
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
<h2 style="font-size:25px; margin-left:20px;font-weight:bold;"> <?php $fullName=$_SESSION['fullName']; echo "$fullName" ?>
 <form style="display:inline"action=""method="post"><input type="submit" style="float:right; margin-right:60px;" value="Logout" name="logout" class="button button1" /></form>


</h2>

<div class="main">

	<ul class="nav nav-tabs">
    		<li class="active"><a data-toggle="tab" href="#patients">Patients</a></li>
   		 <li><a data-toggle="tab" href="#schedule">Schedule</a></li>
   		 <li><a data-toggle="tab" href="#requests">Requests</a></li>
 	 </ul>
  
 	<div class="tab-content">
    		<div style="height:500px"id="patients" class="tab-pane fade in active">
  <h3>My Clinic</h3>
  <p>Search for registered patients by name or email:</p>  
  <input style="width:30%; background-color:#dcdcdc;"class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
<div style=" width:100%;box-shadow: 5px 10px 18px #888888;overflow-y:scroll">
 <?php include ('receptionistPatients.php'); ?>
</div>
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
    		<div id="schedule" style="height: 500px;"class="tab-pane fade">
			<h3>This Week</h3>
			<hr />		
		<select id="schedSelect" onchange="schedule()">
			<option value="doctorSched1">DoctorName1</option>
			<option value="doctorSched2">DoctorName2</option>
			<option value="doctorSched3">DoctorName2</option>
			<option value="doctorSched4">DoctorName2</option>
		</select>
		<br/>
		<div id="doc1-currentWeek">
		<table class="table table-striped" style="border: solid 1px #dcdcdc;">
			<tr>
				<th></th>
				<th>MON</th>
				<th>TUE</th>
				<th>WED</th>
				<th>THRS</th>
				<th>FRI</th>
			</tr>
			<tr>
				<th>7:00am</th>
				<td>X</td>
				<td>X</td>
				<td>X</td>
				<td> </td>
				<td> </td>
			</tr>
			<tr>
				<th>8:00am</th>
				<td>X</td>
				<td> </td>
				<td> </td>
				<td>X</td>
				<td>X</td>
			</tr>
			<tr>
				<th>9:00am</th>
				<td>X</td>
				<td>X</td>
				<td>X</td>
				<td>X</td>
				<td>X</td>
			</tr>
			<tr>
				<th>10:00am</th>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
			</tr>
			<tr>
				<th>11:00am</th>
				<td> </td>
				<td>X</td>
				<td>X</td>
				<td> </td>
				<td> </td>
			</tr>
			<tr>
				<th>12:00pm</th>
				<td>X</td>
				<td> </td>
				<td>X </td>
				<td> </td>
				<td> </td>
			</tr>
			<tr>
				<th>1:00pm</th>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
			</tr>
			<tr>
				<th>2:00pm</th>
				<td>X</td>
				<td>X</td>
				<td>X</td>
				<td>X</td>
				<td>X</td>
			</tr>
			<tr>
				<th>3:00pm</th>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
			</tr>

		</table>
		</div>
		<div id="doc2-currentWeek" style="display:none">
		<table class="table table-striped" style="border: solid 1px #dcdcdc;">
			<tr>
				<th></th>
				<th>MON</th>
				<th>TUE</th>
				<th>WED</th>
				<th>THRS</th>
				<th>FRI</th>
			</tr>
			<tr>
				<th>7:00am</th>
				<td></td>
				<td></td>
				<td</td>
				<td> </td>
				<td> </td>
			</tr>
			<tr>
				<th>8:00am</th>
				<td></td>
				<td> </td>
				<td> </td>
				<td></td>
				<td>X</td>
			</tr>
			<tr>
				<th>9:00am</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th>10:00am</th>
				<td>X</td>
				<td>X</td>
				<td>X</td>
				<td>X</td>
				<td>X</td>
			</tr>
			<tr>
				<th>11:00am</th>
				<td>X</td>
				<td>X</td>
				<td>X</td>
				<td>X</td>
				<td>X</td>
			</tr>
			<tr>
				<th>12:00pm</th>
				<td>X</td>
				<td> </td>
				<td>X </td>
				<td> </td>
				<td> </td>
			</tr>
			<tr>
				<th>1:00pm</th>
				<td>X</td>
				<td>X</td>
				<td>X</td>
				<td>X</td>
				<td> </td>
			</tr>
			<tr>
				<th>2:00pm</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th>3:00pm</th>
				<td>X</td>
				<td>X</td>
				<td> </td>
				<td> </td>
				<td> </td>
			</tr>

		</table>
		</div>

		<script>
			function schedule(){
				if(document.getElementById('schedSelect').value=="doctorSched1"){
					var x = document.getElementById("doc1-currentWeek");
					var y = document.getElementById("doc2-currentWeek");
					x.style.display = "block";
					y.style.display = "none";	
					
				} else if(document.getElementById('schedSelect').value=="doctorSched2"){
					var x = document.getElementById("doc1-currentWeek");
					var y = document.getElementById("doc2-currentWeek");
					y.style.display = "block";
					x.style.display = "none";
				
				}
			}
		</script>

	 </div>
	<div id="requests"class="tab-pane fade">
		<h3>Requests</h3>
		<select id="reqSelect" onchange="request()">
			<option value="apptRequests">Appointment Requests</option>
			<option value="regRequests">Registration Requests</option>
		</select>
		<hr />
		<div id="apptRequestDiv" style="overflow-y:scroll;box-shadow: 5px 10px 18px #888888;">
			<?php include('appointmentRequests.php')?>
		</div>
		<div id="registerRequestDiv" style="overflow-y:scroll; box-shadow: 5px 10px 18px #888888; display:none;">
			<?php include('receptionistRequests.php');?>
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
