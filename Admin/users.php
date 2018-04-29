<?php 
session_start();
$conn=mysqli_connect("localhost","root","","rail_connect") OR die("Unable to connect to the Database.");
?>
<head>
	<title>ADMIN</title>
	<link rel="shortcut icon" type="image/png" href="../images/logo.jpg"/>
	<link rel="stylesheet" href="../css/style.css" />
	 <link rel="stylesheet" href="../css/skel.css" />
</head>
		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<nav class="nav">
				<div class="container">
	    <div class="navbar-header">
	    	<a href="#" class="pull-left ">
	    <div id="logo" alt="TheAppleTalks Logo"></div>
	    </a>
	    <div class="navbar-brand">
	    </div></div></div></nav>
				<nav id="nav" class="">
					<ul>
						<li><strong><a href="admin.php">DASHBOARD</a></strong></li>
						<li><strong><a href="edittrain.php" >ADD/REMOVE TRAIN</a></strong></li>
						<li><strong><a href="edituser.php">ADD/REMOVE USER</a></strong></li>
						<li><strong><div class="dropdown"><a class="dropbtn">VIEW</a>
							<div class="dropdown-content">
							<a href="users.php" class="selected">ALL USERS</a>
							<a href="booked.php">BOOKED TICKETS</a>
							<a href="cancel.php">CANCELLED TICKETS</a>
							</div>
						</div></strong></li>
						<li><strong><a href="review.php">Complaint-Review</a></strong></li>					
					</ul>
				</nav>
			</header>
			<section>
			  <div style="padding:100px; width: 80%;">
				<b><h1>ALL USERS</h1></b>
				<?php
				echo '<table>'; 
				 echo "<tr>";
				   echo "<th>User Id</th>";
				      echo "<th>Username/Email Id</th>";
				      echo "<th>Admin</th></tr>";
				      $q=mysqli_query($conn,"SELECT * FROM users");
				      if($q==TRUE){
				 		$n=mysqli_num_rows($q);
				for($i=0; $i<$n; $i++)
				{   
					$row=mysqli_fetch_array($q);
					if($row['Admin']=='1')
					{
						$a="YES";
					}
					else
						{$a="NO";}
					echo "<tr><td>{$row['uid']}</td><td>{$row['username']}</td><td>{$a}</td></tr>";
				}
			}
					?>
			</div></section>
<script type="text/javascript" src="js/typed.min.js"></script>
			<script type="text/javascript" src="js/script.js"></script>
			