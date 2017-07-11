<?php
	header('Content-type: application/json');

	$conn = new mysqli("5.196.80.71", "altissim", "@Mtsmst01", "altissim_sandmdl");

	// Check connection
	if ($conn->connect_error)
		echo "Connection failed";
	else
	{
		$sql = "SELECT id, username FROM sandmdl_user";
		$result = $conn->query($sql);
		echo $result;
		echo json_encode($result);
	}
?>