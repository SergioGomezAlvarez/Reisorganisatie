<?php
session_start();
require_once './database/conn.php';

// Controleer of de gebruiker is ingelogd
if (!isset($_SESSION['login'])) {
    echo "Je moet ingelogd zijn om een boeking te maken.";
    exit();
}

// Controleer of het vakantie-id is verzonden via het formulier
if (isset($_POST['vakantie_id'])) {
    $vakantieId = $_POST['vakantie_id'];
    
    // Haal de gebruikersnaam op uit de sessie
    $username = $_SESSION['username'];
    
    // Voeg een nieuwe boeking toe aan de database
    $insertSql = "INSERT INTO boekingen (naam, email, vakantie_id, boekingsdatum, memberid) VALUES (:naam, :email, :vakantie_id, :boekingsdatum, :memberid)";
    $insertQuery = $conn->prepare($insertSql);
    $insertQuery->execute([
        'naam' => $username,
        'email' => '', // Vul hier de e-mail van de gebruiker in
        'vakantie_id' => $vakantieId,
        'boekingsdatum' => date('Y-m-d'),
        'memberid' => '' // Vul hier de ID van de gebruiker in
    ]);

    echo "Boeking succesvol!";
    header('location:index.php');
}

?>






