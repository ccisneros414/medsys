<!DOCTYPE html>
<html lang="en">
        <head>
        <title>Dashboard</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>

.main {
    position: fixed;
        background-color: #dcdcdc;
    height: 85%;
            width: 100%;
    font-size: 12px; /* Increased text to enable scrolling */
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
.rightbottom{
        position: absolute;
        bottom: 25px;
        width: 100%;
        left: 150px;

}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

/* Month header */
.month {
    padding: 70px 25px;
    width: 100%;
    background: #1abc9c;
    text-align: center;
}

/* Month list */
.month ul {
    margin: 0;
    padding: 0;
}

.month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
}

/* Previous button inside month header */
.month .prev {
    float: left;
    padding-top: 10px;
}

/* Next button */
.month .next {
    float: right;
    padding-top: 10px;
}

/* Weekdays (Mon-Sun) */
.weekdays {
    margin: 0;
    padding: 10px 0;
    background-color:#ddd;
}

.weekdays li {
    display: inline-block;
    width: 13.6%;
    color: #666;
    text-align: center;
}

/* Days (1-31) */
.days {
    padding: 10px 0;
    background: #eee;
    margin: 0;
}

.days li {
    list-style-type: none;
    display: inline-block;
    width: 13.6%;
    text-align: center;
    margin-bottom: 5px;
    font-size:12px;
    color: #777;
}

/* Highlight the "current" day */
.days li .active {
    padding: 5px;
    background: #1abc9c;
    color: white !important
}
</style>
</head>
<body>
<h2><img style="margin:0px 10px"  src="img_avatar.png" width="40" height="40" alt="avatar"> Patient Name</h2>


<div class="main">
        <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#appointments">Appointments</a></li>
         </ul>

        <div class="tab-content">
                <div id="appointments" class="tab-pane fade in active">
                        <h3>Appointments</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <table>
                <tr>
                        <th>Doctor</th>
                        <th>Time</th>
                        <th>Date</th>
                </tr>
                <tr>
                        <td>Alfreds Futterkiste</td>
                        <td>10:30AM</td>
                        <td>12.12.18</td>
                </tr>
                <tr>
                        <td>Lady Womanson</td>
                        <td>1:30PM</td>
                        <td>12.12.18</td>
                </tr>
                <tr>
                        <td>Ernst Handel</td>
                        <td>2:15PM</td>
                        <td>12.12.18</td>
                </tr>
                <tr>
                        <td>Guy Dude</td>
                        <td>2:30PM</td>
                        <td>12.12.18</td>
                </tr>
                <tr>
                        <td>Guy Dude</td>
                        <td>5:00PM</td>
                        <td>12.12.18</td>
                </tr>
                <tr>
                        <td>Lady Womanson</td>
                        <td>5:00PM</td>
                        <td>12.12.18</td>
                </tr>
                </table>
                        <div class="pagination">
                                <a href="#">�</a>
                                <a href="#">�</a>
                        </div>
                        <div class="rightbottom">
                                <a class="button button1" href="appointments.php">Confirm</a>
                        </div>


                </div>
         </div>
	<div class="month"> 
  		<ul>
    		<li class="prev">&#10094;</li>
    		<li class="next">&#10095;</li>
    		<li>December<br><span style="font-size:18px">2018</span></li>
  		</ul>
	</div>

		<ul class="weekdays">
  			<li>Mo</li>
  			<li>Tu</li>
  			<li>We</li>
  			<li>Th</li>
  			<li>Fr</li>
  			<li>Sa</li>
  			<li>Su</li>
		</ul>

		<ul class="days"> 
  			<li>1</li>
  			<li>2</li>
  			<li>3</li>
  			<li>4</li>
  			<li>5</li>
  			<li>6</li>
  			<li>7</li>
  			<li>8</li>
  			<li>9</li>
  			<li>10</li>
			<li><span class="active">11</span></li>
  			<li>12</li>
			<li>13</li>
			<li>14</li>
			<li>15</li>
			<li>16</li>
			<li>17</li>
			<li>18</li>
			<li>19</li>
			<li>20</li>
			<li>21</li>
			<li>22</li>
			<li>23</li>
			<li>24</li>
			<li>25</li>
			<li>26</li>
			<li>27</li>
			<li>28</li>
			<li>29</li>
			<li>30</li>
			<li>31</li>
</ul>

</div>

        </body>
</html>
                                         