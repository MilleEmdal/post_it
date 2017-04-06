<!doctype html>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
?>

<html>
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
		
			"SELECT * FROM post";
		
			?>
	

	<div class="show">
		<h1>Opslag</h1>
	</div>
	</div>

</body>
</html>