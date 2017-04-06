<!doctype html>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
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
		
			$sql = "SELECT * FROM forside"; 
		
		$result = mysql_query ($sql) or die (mysql_error());  
		
		echo 'hej';
		
	/*		if ($row = mysql_fetch_assoc ($result))
	{
		//echo siger at det er de felter der skal vises
		echo $row['name']. '<br />';
		echo $row['note']. '<br />';
		
	}
	else{
	echo '';
	}*/
			?>
	

	<div class="show">
		<h1>Opslag</h1>
	</div>
	</div>

</body>
</html>