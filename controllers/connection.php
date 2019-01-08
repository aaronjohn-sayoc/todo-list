<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "todo_app_db";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
	die('Connection failed!' . mysqli_error($conn) );
}

echo "<p>" . 'Fetching task list...' . "</p>";

















