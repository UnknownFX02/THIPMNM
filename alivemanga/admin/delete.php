<?php
	require_once("../db/connection.php");
	
	$id = $_GET["id"];

	// sql to delete a record
	$sql = "DELETE FROM user WHERE user_ID='$id'";

	if (mysqli_query($conn, $sql)) {
    	header('Location: index.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>