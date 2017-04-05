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
<fieldset>
	<h2>Opret et Post It</h2>
	<form>
		<input type="text" name="name" placeholder="Name"><br><br>
		<input type="date" name="call"> Last call<br><br>
		<input type="date" name="date"> Date of event<br><br>
		<textarea name="note" placeholder="your note here"></textarea><br><br>
		<input type="submit" name="cmd" value="Send Opslag">
	</form>
	
</fieldset>

</body>
</html>