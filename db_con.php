<?php
const HOSTNAME = 'localhost'; // server
const MYSQLUSER = 'root'; // superbruger
const MYSQLPASS = 'root'; // password
const MYSQLDB = 'post'; // database navn

// 2. Forbindelsen via mysqli metoden

$con = new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);

// at sikre sig, at alle utf8-tegn kan blive brugt under forbindelsen
$con->set_charset ('utf8');

// 3. Tjek

// hvis der er fejl i forbindelsen
if($con->connect_error){
	die($con->connect_error);
// hvis der er hul i gennem
} else {
	echo '<p>Jeg kan se data-bassen!</p>';
}
?>