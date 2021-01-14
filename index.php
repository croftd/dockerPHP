<?php

echo "Hello again world from docker php using MariaDB and Apache - you should be able to edit this file without restarting docker with docker-compose up and docker-compose down";

$servername = "localhost";
$dbname = "itas186";
$user = "myuser";
$pwd = "cats!";
$port = "3306";

try {
	$db = new PDO("	mysql:host=$servername; port=$port; dbname=$dbname", 
			$user, 
			$pwd);

	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "<br>Connected to database";
} catch (PDOException $e) {
   echo "<br>Error connecting to database: " . $e->getMessage();
}
 

