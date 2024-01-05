<?php
	$servername = '';
	$username = 'root';
	$password = '';
	$dbname = 'attendance';

	$dbcon = mysqli_connect($servername, $username, $password, $dbname);

	// if(!$dbcon) {
	// 	echo "Connection Failed" .mysqli_connect_error($dbcon);
	// } else {
	// 	echo "Connected";
	// }
// 	 // Check for a connection error
//     if ($dbcon->connect_error) {
//         die("Connection failed: " . $dbcon->connect_error);
//     }
// ?>