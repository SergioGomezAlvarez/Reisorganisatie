<?php
//connectie met database
$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);

// vakantie toevoegen
if (isset($_POST['vakantie-toevoegen'])) {
    if ($_POST['vakantie'] != "" && $_POST['korte_omschrijving'] != "" && $_POST['algemene_beschrijving'] != "" && $_POST['ligging_omgeving'] != "" && $_POST['kamers'] != "" && $_POST['faciliteiten'] != "" && $_POST['img1'] != "" && $_POST['img2'] != "" && $_POST['img3'] != "" && $_POST['img4'] != "" && $_POST['img5'] != "" && $_POST['kortetitel'] != "" && $_POST['begin_datum'] != "" && $_POST['eind_datum'] != "") {
        try {
            $vakantie = $_POST['vakantie'];
            $korte_omschrijving = $_POST['korte_omschrijving'];
            $algemene_beschrijving = $_POST['algemene_beschrijving'];
            $ligging_omgeving = $_POST['ligging_omgeving'];
            $kamers = $_POST['kamers'];
            $faciliteiten = $_POST['faciliteiten'];
            $img1 = $_POST['img1'];
            $img2 = $_POST['img2'];
            $img3 = $_POST['img3'];
            $img4 = $_POST['img4'];
            $img5 = $_POST['img5'];
            $kortetitel = $_POST['kortetitel'];
            $begin_datum = $_POST['begin_datum'];
            $eind_datum = $_POST['eind_datum'];

            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO `vakanties` (`vakantie`, `korte_omschrijving`, `algemene_beschrijving`, `ligging_omgeving`, `kamers`, `faciliteiten`, `img1`, `img2`, `img3`, `img4`, `img5`, `kortetitel`, `begin_datum` , `eind_datum`) VALUES (?, ?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $dbh->prepare($sql);
            $stmt->execute([$vakantie, $korte_omschrijving, $algemene_beschrijving, $ligging_omgeving, $kamers, $faciliteiten, $img1, $img2, $img3, $img4, $img5, $kortetitel, $begin_datum, $eind_datum]);

            $_SESSION['message'] = array("text" => "Vakantie succesvol toegevoegd.", "alert" => "info");
            $dbh = null;
            header('location: AdminPanel.php');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    } else {
        echo "
            <script>alert('Please fill up all the required fields!')</script>
            <script>window.location = 'AdminPanel.php'</script>
        ";
    }
}
?>