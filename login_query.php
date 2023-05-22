<?php
session_start();

require_once './database/conn.php';





// als form login is ingevuld
if (isset($_POST['login']) && $_POST['username'] != "" || $_POST['password'] != "") {
	// dan wil ik checken of het klopt
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM `member` WHERE `username`=? AND `password`=? ";
	$query = $conn->prepare($sql);
	$query->execute(array($username, $password));
	$row = $query->rowCount();
	$fetch = $query->fetch();


		header("location: index.php");
		echo "
				<script>alert('Invalid username or password')</script>
				<script>window.location = 'index.php'</script>
				";
	}

