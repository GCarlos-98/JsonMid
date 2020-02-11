<?php
header('Content-Type: application/json');

$db_username = 'admin';
$db_password = 'root1234';
$db_hostname = 'dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com';
$db_port = '3306';
$db_name = 'db_1821709';

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
$sql = "SELECT * FROM Tb1";
$row = mysqli_query($conn, $sql);

echo "[";
while ($item = mysqli_fetch_object($row)) {
    echo json_encode($item);
}
echo "]";
