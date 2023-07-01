<?php

$host = "mysql"; // service name from docker-compose.yml
$dbname = "camagru";
$charset = "utf8";
$port = "3306";

try {
	$pdo = new PDO(
		dsn: "mysql:host=$host;dbname=$dbname;charset=$charset;port=$port",
		username: "root",
		password: "root",
	);
	
	$users = $pdo->query("SELECT * FROM Users");
	
	echo '<pre>';
	foreach ($users->fetchAll(PDO::FETCH_ASSOC) as $user) {
		print_r($user);
	}
	echo '</pre>';
} catch (PDOException $e) {
	throw new PDOException(
		message: $e->getMessage(),
		code: (int)$e->getCode(),
	);
}
