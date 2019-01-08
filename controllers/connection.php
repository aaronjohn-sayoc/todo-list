<?php

$host = "db4free.net";
$user = "aaron_root";
$password = "aaron123";
$dbname = "aaron_todolist";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
	die('Connection failed!' . mysqli_error($conn) );
}

echo "<p>" . 'Fetching task list...' . "</p>";

















