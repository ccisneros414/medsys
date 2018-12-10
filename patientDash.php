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
	box-shadow: 5px 10px 18px #888888;
	width: 100%;
    	font-family: arial, sans-serif;
    	border-collapse: collapse;
	border: 1px solid #dcdcdc;
		overflow: scroll;
}

td, th {
    text-align: left;
    padding: 20px;
}

tr:nth-child(odd) {
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
input{
	padding: 12px 20px;	
	margin: 8px 0;
	border-radius: 4px;
	border: 1px solid #ccc;

}
</style>
</head>
<body style="background-image: url(background.jpg)">
<h2 style="color: #f8f8f8; font-size:30px; font-weight:bold;"><img style="margin:0px 20px"  src="./images/img_avatar.png" width="50" height="50" alt="avatar"> <?php $fullName=$_SESSION['fullName']; echo "$fullName";?>
				<form style="display:inline"action=""method="post"><input type="submit" style="float:right; margin-right:60px;" value="Logout" name="logout" class="button button1" /></form>
				<a style="float:right; margin-right: 50px;"href="editInformation.php" class="button button1">Patient Files</a>	
</h2>

<div class="sidenav">
	<ul class="nav nav-tabs">
		<li class="active"><a name="patientInfo" data-toggle="tab" href="#home">Personal Info</a></li>
		<li><a data-toggle="tab" href="#insurance">Insurance Information</a></li>
	</ul>
	<div class="tab-content">
		<div id="home" class="tab-pane fade in active">
		<h3 style="display:inline;">Personal Info</h3>
		<a style="display:inline; margin: 0px 70px;"href="editInformation.php">Edit Information</a>	
		<hr />
		<div>
		</div>
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
			<div id="myAppts">
			<h3 id="upcomingHead">My Upcoming Appointments</h3>
			<hr />	
			<?php include "patientAppointments.php"; ?>
			<div class="mainbottom"> 
				 <a id="apptsButton"class="button button1" onclick="newAppt()">New Appointment</a>
			</div>
			</div>

			<div id="newAppointmentDiv" style="display:none;">
			<h3>Schedule an Appointment</h3>
			<hr />
			<?php include('errors.php'); ?>
			<form method="post" action="" >
				<table>
				<tr>
				<th>
				<h4>Enter Doctor's name:</h4>
				</th>
				<td>
				<input name="doctorName" placeholder="Doctor Name"></input>
				</td>
				</tr>
				<tr>
				<th>
				<h4>Enter appointment date:</h4>
				</th>
				<td>
				<input name="date" placeholder="mm/dd/yyyy"></input>
				</td>
				</tr>
				<tr>
				<th>
				<h4>Enter appointment time:</h4>
				</th>
				<td>
				<input name="time" placeholder="h:mm"></input>
				</td>
				</tr>
				</table>
						
				<button style="margin:25px;width:100px;background-color:#dcdcdc"class="btn" name="submitAppointment">Submit</button>
			</form>
			<div class="mainbottom"> 
				 <a class="button button1" href="patientDash.php">Cancel</a>
			</div>
			
				<script>
					function newAppt(){
					x = document.getElementById("myAppts");
					y = document.getElementById("newAppointmentDiv");
					x.style.display = "none";
					y.style.display = "block";
				}
				</script>
		</div>
	</div>
   		 <div id="inbox" class="tab-pane fade">
		<h3>Inbox</h3>
		<hr />
                <div id="inboxTable" style="overflow-y:scroll; height:500px;;border-radius:6px;display:block;">
                <center>
                <table rules="rows" >
                        <tr>
                        <td>message content</td>
                        <td>timestamp</td>
                        <tr>
                        <td>message content</td>
                        <td>timestamp</td>
                        </tr>
                        <tr>
                        <td>message content</td>
                        <td>timestamp</td>
                        </tr>
                        <tr>
                        <td>message content</td>
                        <td>timestamp</td>
                        </tr>
<tr>
                        <td>message content</td>
                        <td>timestamp</td>
                        </tr>
<tr>
                        <td>message content</td>
                        <td>timestamp</td>
                        </tr><tr>
                        <td>message content</td>
                        <td>timestamp</td>
                        </tr><tr>
                        <td>message content</td>
                        <td>timestamp</td>
                        </tr><tr>
                        <td>message content</td>
                        <td>timestamp</td>
                        </tr>
                </table>
                </center>
                </div>			 

<div id="replyDiv">
                </div>
                <script>
                        function reply(){
                                x = document.getElementById("replyDiv");
                                x.innerHTML = "<div class='replyBox'><textarea placeholder='Please write a reply...'></textarea><a class='button button1'>Reply<a/></div>";
                        }
                </script>
			</div>
    <div id="chart" class="tab-pane fade">
			<h3>My Chart</h3>
			<hr/>	

			<?php include('patientChart.php'); ?>
						
				<br />	
				<br />	
				<br />	
				<br />	
				<hr />
				<h4 style="font-weight:bold; ">Older Charts:</h4>
				<a class="button button1">chart1-DATE</a>
				<a class="button button1">chart1-DATE</a>
				<a class="button button1">chart1-DATE</a>
				<a class="button button1">chart1-DATE</a>
				<a class="button button1">chart1-DATE</a>
				<a class="button button1">chart1-DATE</a>
				<a class="button button1">chart1-DATE</a>



</div>

	</body>
</html>
