<?php

/* USE FUNCTIONS LIKE THIS
$result= loadWebContent($con, $type)
while($row=mysqli_fetch_array($result, "MYSQLI_ASSOC")) {
	$row[""];
}
*/

require("configurations/connection.php");
function loadWebContent($con, $type) {
	//return mysqli_query($con,"SELECT * FROM web_content where show_web='yes' OR archive='0' ORDER BY id DESC ");
	return mysqli_query($con, "SELECT * FROM update_web_content WHERE type='$type'");
}

function base_url(){
	// print_r($_SERVER['SERVER_NAME']);exit();
	return "http://".$_SERVER['SERVER_NAME'] . "/";

}