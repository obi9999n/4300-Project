<?php
    session_start();

	include("connection.php");
	include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST") {
		$check = 0;
        
?>