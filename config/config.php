<?php
	$conn = new mysqli('localhost', 'root', '', 'usermarket');
	
	if(!$conn){
		die("Error: Can't connect to database");
	}

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "usermarket"); 



