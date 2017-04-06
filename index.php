<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Post It</title>
<link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body>

	<div class="menu">
	<div class="logo">
		<img src="post it.png">
	</div>	
		<nav>
			<ul>
				<br>
				<li><a href="index.php">Skriv dit opslag</a></li>
				<li><a href="#">Se alle opslagene</a></li>
			</ul>
		</nav>
	</div>
	
<div class="fill">
	
</div>
  
		<?php		
                if(isset($_POST['Submit']))
        {
			$name = $_POST['name'];
          	$emne = $_POST['emne'];
            $deadline_date = $_POST['deadline_date'];
			$regDate = $_POST['regDate'];            
			$dateofevent = $_POST['dateOfEvenet'];
            $note = $_POST['note'];
           
           $query = "INSERT INTO post    
                     (`name`, `regDate`, `emne`, `note`, `deadline_date`, `dateOfEvenet`) 
                     VALUES 
					('$name',' '$emne', $deadline_date', '$regDate' , '$dateofevent','$note')";
           
   
    mysql_query($query) or die(mysql_error());
    mysql_close();
   
           $msg = "Post it´en er oprettet";
		}
   ?>
<fieldset>
	<h2>Opret et Post It</h2>
	<form action="show.php" method="post">
		<input type="text" name="name" placeholder="Name"><br><br>
      	<input type="text" name="emne" placeholder="Emne"><br><br>
		<input type="date" name="deadline_date" id="deadline_date"> Sidste udkald<br><br>
		<input type="date" name="dateOfEvenet" id="dateOfEvenet" > Dato på eventet<br><br>
		<textarea name="note" id="note" placeholder="your note here"></textarea><br><br>
		<input type="submit" name="submit" id="submit" value="Send Opslag">
	</form>
	
</fieldset>
<?php echo $msg; ?>
</body>
</html>