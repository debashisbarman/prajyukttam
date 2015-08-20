<?php
	include("config.php");

?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Panel | Prajyukttam 2015</title>
<link rel="stylesheet" type="text/css" href="../css/kathamo/kathamo.min.css">
</head>
<body>
<div class="container">
<nav class="navbar-static" id="navigation">
<ul>
<li class="navbar-brand">Prajyukttam 2015</li>
<li class="open-menu"><a href="#navigation">Open</a></li>
<li class="close-menu"><a href="#navbar">Close</a></li>
<div class="navbar-collapse pull-right">
<li class="navbar-item"><a href="">Registration</a></li>
<li class="navbar-item"><a href="">App Request</a></li>
<li class="navbar-item"><a href="">Logout</a></li>
</div>
</ul>
</nav>

<div class="col-lg-2 col-md-2 hidden-sm">
<h3>Events</h3>
<ul class="li-unstyled">
<li><a href="">All Events</a></li>
<li><a href="">Basic Science</a></li>
<li>Circuitronics</li>
<li>Civil</li>
<li>Coding</li>
<li>Debate</li>
<li>Gaming</li>
<li>Marathon</li>
<li>Mechanical</li>
<li>Robotics</li>
<li>Web Designing</li>
</ul>
</div>
<div class="col-lg-10 col-md-10 col-sm-12">
<h3>Registration</h3>
<div class="table-responsive">
<table class="table-striped">
<thead>
<tr>
<th>#</th>
<th>Name</th>
<th>Institute</th>
<th>Email</th>
<th>Contact</th>
<th>Event</th>
</tr>
</thead>
<tbody>
<?php
	$sql = "SELECT * From Registration ORDER BY name ASC";
	$result=mysql_query($sql);

	$counter = 1;
	while($dbarray = mysql_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$counter."</td>";
		echo "<td>".$dbarray['name']."</td>";
		echo "<td>".$dbarray['institute']."</td>";
		echo "<td>".$dbarray['email']."</td>";
		echo "<td>".$dbarray['contact']."</td>";
		echo "<td>".$dbarray['event']."</td>";
		echo "</tr>";
		$counter = $counter + 1;
	}
?>
</tbody>
</table>
</div>
</div>

</div>
</body>
</html>
