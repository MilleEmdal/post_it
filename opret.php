<!doctype html>
<?php
include 'db_con.php';
?>
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
				<li><a href="show.php">Se alle opslagene</a></li>
			</ul>
		</nav>
	</div>
	
<div class="fill">
	
</div>
  
		<?php	
		
			$name = filter_input(INPUT_POST, 'name');
          	$emne = filter_input(INPUT_POST, 'emne');
            $deadline_date = filter_input(INPUT_POST, 'deadline_date');
			$regDate = filter_input(INPUT_POST, 'regDate');            
			$dateofevent = filter_input(INPUT_POST, 'dateOfEvenet');
            $note = filter_input(INPUT_POST, 'note');
			$submit = filter_input(INPUT_POST, 'submit');
	
	if(empty($submit)){
		?>
	<form action="show.php" method="post">
		<fieldset>
			<legend>Opret et Post It</legend>
		<input type="text" name="name" placeholder="Navnx"><br><br>
      	<input type="text" name="emne" placeholder="Emne"><br><br>
		<p>Tilmeldningsfrist:</p>
		<input type="date" name="deadline_date" id="deadline_date" placeholder="Skriv sidste frist for tilmeldning"><br><br>
		<p>Dato pÃ¥ eventet:</p>
		<input type="date" name="dateOfEvenet" id="dateOfEvenet" placeholder="Skriv dato for evnet"><br><br>
		<textarea name="note" id="note" placeholder="Skriv beskrivelse af event"></textarea><br><br>
		<input type="submit" name="submit" id="submit" value="Send opslag">
	</fieldset> 
		</form>
	
		<?php
	}
	else {
		if($submit == 'Send opslag') {
			require_once('db_con.php');
			$sql = 'INSERT INTO post (name, emne, deadline_date, dateOfEvenet, note) VALUES (?, ?, ?, ?, ?)';
			$stmt = $con->prepare($sql);
			$stmt->bind_param('sssss', $name, $emne, $deadline_date, $dateofevent, $note);
			$stmt->execute();
			
			if ($stmt->affected_rows > 0){
				echo 'Du har nu oprettet en ';
			}
			else {
				echo $emne.'Evnentet er oprettet';
			}
		}

	/*	if($cmd == 'Afmeld') {
			require_once('db_con.php');
			$sql = 'DELETE FROM post WHERE id=?';
			$stmt = $con->prepare($sql);
			$stmt->bind_param('s', $id);
			$stmt->execute();
			
			if ($stmt->affected_rows > 0){
				echo 'Du er nu fjernet fra SPAM-listen :-((';
			}
			else {
				echo $email.' var ikke på listen?!?!';
			}
		}

		echo '<hr><a href="newsletter.php"> Tilbage</a>';*/
	}
	
?>

</body>
</html>