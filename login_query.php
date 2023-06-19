<?php
session_start();

require_once './database/conn.php';

// als form login is ingevuld
if (isset($_POST['login']) && $_POST['username'] != "" || $_POST['password'] != "") {
	// dan wil ik checken of het klopt
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM `member` WHERE `username`=? AND `password`=?";
	$query = $conn->prepare($sql);
	$query->execute(array($username, $password));
	$row = $query->rowCount();
	$fetch = $query->fetch();


	if ($row > 0) {
		$_SESSION['login'] = true;
		$_SESSION['username']=$_POST['username'] ;// Sessievariabele instellen bij succesvolle login
		
		echo "Login successful";
		header("Location: index.php");

		exit();
	} else {
		echo "
			<script>alert('Invalid username or password')</script>
			<script>window.location = 'index.php'</script>
		";
	}
}
?>


