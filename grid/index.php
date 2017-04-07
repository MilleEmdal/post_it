<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Opret Post It</title>
<link href="style.css" rel="stylesheet">

</head>

<body>

	<div class="grid grid-pad">
		<div class="col-10-12 push-1-12">
			<div class="content nav">
				<nav>
					<ul>
						<li><a href="index.php">Opret Post It</a></li>
						<li><a href="show.php">Se alle opslagene</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="col-4-12">
			<div class="content box">
				
			</div>
		</div>
		<div class="col-4-12">
			<div class="content box">
				<fieldset>
					<h2>Opret et Post It</h2>
					<form action="show.php" method="post">
						<input type="text" name="name" placeholder="Name"><br><br>
						<input type="text" name="emne" placeholder="Emne"><br><br>
						<p>Sidste udkald</p>
						<input type="date" name="deadline_date" id="deadline_date"><br><br>
						<p>Dato på eventet</p>
						<input type="date" name="dateOfEvenet" id="dateOfEvenet" ><br><br>
						<textarea name="note" id="note" placeholder="your note here"></textarea><br><br>
						<input type="submit" name="submit" id="submit" value="Send Opslag">
					</form>
	
				</fieldset>
			</div>
		</div>
		<div class="col-4-12">
			<div class="content box">
				
			</div>
		</div>
		
		<!-- emmet shortcuts
			ul*3>li*10	
			ul>li*20>a
			
	
		-->	
	</div>

</body>
</html>
