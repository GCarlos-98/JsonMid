<?php

		$host = "dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com"; $username = "admin";
		$password = "root1234";
		$connect = @mysqli_connect($host, $username, $password) or die("Unable to connect to host");
		$db = @mysqli_select_db($connect, "db_1821709") or die("Cannot connect to database");
		$sql = "select * from Tb1";
		$dbrecords = mysqli_query($connect,$sql) or die("Unable to query data");


		while($row = mysqli_fetch_object($dbrecords)) {

				echo
					$arr = array('DeltaV' => $row->DeltaV , 'System' => $row->System , 'Name' => $row->Name);
				 echo "<br/>";
					

				mysqli_close($connect);
?>