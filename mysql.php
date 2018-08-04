<?php

$pass = 'changeme';
$dsn = "mysql:host=localhost;dbname=testing;charset=utf8mb4";
$pdo = new PDO($dsn,'php' ,$pass, []);
$stmt = $pdo->query('SELECT firstname FROM personnel');
while ($row = $stmt->fetch()){
echo $row['firstname'] . "<br>\n";
}

?>
