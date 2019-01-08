<?php

require_once("./connection.php");

$id = $_POST['task_id'];

$sql = "DELETE FROM tasks WHERE id=$id";

$result = mysqli_query($conn, $sql);

if ($result === TRUE) {
	echo 'Deleted successfully!';
	/*header("Location: ../views/index.php");*/ //redirect browser
} else {
	echo 'Error: ' . $sql . "<br>" . mysqli_error($conn);
}