<!doctype html>
<?php
include 'db_con.php';
?>
<head>
<meta charset="utf-8">
<title>Post It Show</title>
<link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body>
	
	<div class="full">
		
	<div class="menu">
	<div class="logo">
		<img src="post it.png">
	</div>	
		<nav>
			<ul>
				<br><br>
				<li><a href="index.php">Skriv dit opslag</a></li>
				<li><a href="#">Se alle opslagene</a></li>
			</ul>
		</nav>
	</div>
		<?php
		//prepared statement for at kunne læse data fra en database
$stmt = $con->prepare("SELECT name, emne, deadline_date, dateOfEvenet, note FROM post");
// execute the statement
$stmt->execute();
// forberedelsen til data afhentning: prepared statement
$stmt->bind_result($name, $emne, $deadline_date, $dateofevent, $note);
// Frontend layout som liste:
echo '<ol>';
// hente data 
// while loop: så længe jeg kan hente noget fra databasen
while($stmt->fetch()){
	// viser ALT som list item
	echo "<li>$name, $emne, $deadline_date, $dateofevent, $note</li>";
 }
			?>
		<div class="show">
		<h1>Opslag</h1>
	</div>
	</div>

</body>
</html>