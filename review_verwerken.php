<?php
// Controleer of het formulier is ingediend
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Controleer of alle vereiste velden zijn ingevuld
    if (isset($_POST['vakantie_id'], $_POST['gebruikersnaam'], $_POST['beoordeling'], $_POST['opmerking'])) {
        // Verkrijg de ingediende waarden
        $vakantie_id = $_POST['vakantie_id'];
        $gebruikersnaam = $_POST['gebruikersnaam'];
        $beoordeling = $_POST['beoordeling'];
        $opmerking = $_POST['opmerking'];

        // Voer de nodige validatie uit op de ingediende gegevens
        

        // Voeg de review toe aan de database
        $dsn = 'mysql:dbname=db_login;host=127.0.0.1';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dsn, $user, $password);

        try {
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO `reviews` (`vakantie_id`, `gebruikersnaam`, `beoordeling`, `opmerking`) VALUES (?, ?, ?, ?)";
            $stmt = $dbh->prepare($sql);
            $stmt->execute([$vakantie_id, $gebruikersnaam, $beoordeling, $opmerking]);

            // Geef een succesbericht weer
            echo "Review succesvol toegevoegd!";
            header("Location: index.php");
        } catch (PDOException $e) {
            // Toon een foutbericht als er een fout optreedt
            echo "Fout bij het toevoegen van de review: " . $e->getMessage();
        }

        $dbh = null; // Sluit de databaseverbinding
    } else {
        // Toon een foutbericht als er vereiste velden ontbreken
        echo "Vul alle vereiste velden in.";
    }
}
?>
