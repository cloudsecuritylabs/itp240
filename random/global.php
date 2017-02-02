<?php
	// print_r($_SERVER);
	//This is file that can get you a lot of information about the server.

	$server_info = $_SERVER;

	foreach ($server_info as $key => $value) {
		# code...
		echo "{$key} = {$value}"; echo "<br>";
	}

?>