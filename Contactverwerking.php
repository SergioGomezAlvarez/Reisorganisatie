<?php
	session_start();
	require_once './database/conn.php';

    $naam = $_POST['name'];
    $email = $_POST['email'];
    $onderwerp = $_POST['subject'];
    $bericht = $_POST['message'];

    $sql = "INSERT INTO `contactformulier` (`naam`, `email`, `onderwerp`, `bericht`) VALUES (?, ?, ?, ?)";   
    $query = $conn->prepare($sql);
    $query->execute(array($naam, $email, $onderwerp, $bericht));

    echo "Uw bericht is verzonden";
    header("Location: index.php");
    exit();

 
?>