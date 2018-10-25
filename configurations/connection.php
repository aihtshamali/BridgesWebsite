<?php

	//& ~E_NOTICE
	ini_set("display_errors", 1); error_reporting(E_ALL);
	//ini_set('session.save_path', 'tmp');

	$homeworkcon = mysqli_connect("localhost","bridge","bridgesdatabas","bird");
	$con = mysqli_connect("localhost","bridge","bridgesdatabas","birdmae");
	if(!$con || !$homeworkcon) {
		echo "Error in connection! ";
		die();
	}
?>