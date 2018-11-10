<?php
	session_start();
	include("database/tempDbClass.php");	//include db stuff
	$dbMan = new dbHandler();
	$userinfo = array();
	
//	echo $_POST["classID"];
	$classInfo = array();
	$classInfo = $dbMan->getClassInfo($_POST["classID"]);

	if($_SESSION['usertype'] == "parent"){
		//
	}
	else{	//teacher
		
	}
	
	

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>M.A.N. High School Portal HomePage</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="stylesheet_login.css">
  <link rel = "stylesheet" href = "stylesheet_homepage.css">
  <style>
  </style>  
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="logo_black.jpg" alt="homepage logo" class="homepage_logo" width = "90%" height = "80px" ></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="man_homepage.html" style = "padding: 30px"> User Info</a></li>
        <li><a href="#" style = "padding: 30px">Homework</a></li>
        <li><a href="#" style = "padding: 30px">To-Do List</a></li>
        <li><a href="#" style = "padding: 30px">Wish List</a></li>
		<li><a href="#" style = "padding: 30px">Activities</a></li>
		<li><a href="#" style = "padding: 30px">Message Board</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.html" style = "padding: 30px"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="col-sm-8 text-left"> 
      <h1>Welcome to <?php echo $classInfo[1];?></h1>
      <p class = "homepage">
	  <?php echo $classInfo[4]; ?>
	<br>
	<br>
	<b> this is just an example of what the page can look like...</b>
	  </p>
	  <hr>
	  <h3>Announcements</h3>
</div>  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-4 sidenav">
	 <div class="well">
      <p><a href="#">Calendar</a></p>

	<div class="month">      
	  <ul>
		<li class="prev">&#10094;</li>
		<li class="next">&#10095;</li>
		<li>
		  October<br>
		  <span style="font-size:18px">2018</span>
		</li>
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
	  <li><span class="active">10</span></li>
	  <li>11</li>
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
	</div>
    </div>
	</div>


	<footer class="container-fluid">
		<hr class = "style-one">
		<p class = "login-page">Copyright © 2018
		</p>
	</footer>	

</body>
</html>
