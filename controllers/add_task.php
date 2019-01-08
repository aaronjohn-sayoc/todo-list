<?php

require_once('./connection.php');

$name = $_GET['name'];


$sql = "INSERT INTO tasks(name) VALUES ('$name')";

$result = mysqli_query($conn, $sql);


if ($result === TRUE) {
	echo " New task added.";
} else {
	echo 'Error: ' . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>