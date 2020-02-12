<?php
// header('Content-Type: application/json');

$db_username = 'admin';
$db_password = 'root1234';
$db_hostname = 'dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com';
$db_port = '3306';
$db_name = 'db_1821709';

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
$sql = "SELECT * FROM Tb1";
$row = mysqli_query($conn, $sql);

while ($item = mysqli_fetch_object($row)) {
    $json = json_encode($item);
	$dec = json_decode($json, true);

	echo "<ul>";
	echo "<li>". $dec["DeltaV"] ."</li>";
	echo "<ul>";
	echo "<li>". $dec["System"]." </li>";
	echo "<li>". $dec["Name"] ."</li>";
	echo "<li>". $dec["Orbit"] ."</li>";
	echo "</ul>";
	echo "</ul>";
}
?>