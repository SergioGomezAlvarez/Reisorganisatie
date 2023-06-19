<?php
session_start();
require_once './database/conn.php';


// Controleer of de gebruiker is ingelogd
if (!isset($_SESSION['login'])) {
    echo "Je moet ingelogd zijn om een boeking te maken.";
    exit();
}

// Controleer of de vereiste gegevens zijn ingevuld
if (isset($_POST['vakantie_id'])) {
    $vakantieId = $_POST['vakantie_id'];
    $memberId = $_SESSION['memberid']; // Haal de member_id op uit de sessie

    // Boeking in de database opslaan
    $sql = "INSERT INTO boekingen (naam, email, vakantie_id, memberid) SELECT naam, email, ?, ? FROM member WHERE memberid = ?";
    $query = $conn->prepare($sql);
    $query->execute([$vakantieId, $memberId, $memberId]);

    // Verdere verwerking of bevestigingsbericht tonen
    echo "Boeking succesvol opgeslagen!";
} else {
    echo "Er zijn onvoldoende gegevens verstrekt om de boeking te voltooien.";
}
?>






