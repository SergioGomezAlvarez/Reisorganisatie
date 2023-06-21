<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Contact.css">
    <link rel="stylesheet" href="css/bestemming.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="css/adminpanel.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;1,600&family=Roboto+Condensed&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body>
    <div class="terug-div">
        <a class="terug-button" href="index.php"><i class="fas fa-arrow-left"></i>Terug</a>
    </div>
    <h1>Admin Panel</h1>

    <div class="container">
        <div class="box">

            <!-- Aanmaakformulier voor nieuwe gebruiker -->
            <form method="POST" class="aanmaken" action="register.php">
                <h2>Gebruikersaccount aanmaken</h2>
                <label for="firstname">Voornaam:</label>
                <input type="text" id="firstname" name="firstname" required><br>

                <label for="lastname">Achternaam:</label>
                <input type="text" id="lastname" name="lastname" required><br>

                <label for="username">Gebruikersnaam:</label>
                <input type="text" id="username" name="username" required><br>

                <label for="password">Wachtwoord:</label>
                <input type="password" id="password" name="password" required><br>

                <input type="submit" name="register" value="Account aanmaken">
            </form>

            <?php
            if (isset($_POST['update'])) {
                // Verwerk bijgewerkte gegevens
                $id = $_POST['id'];
                $newUsername = $_POST['username'];
                $newPassword = $_POST['password'];

                // Verbind met de database en update de gebruikersgegevens
                require_once './database/conn.php';
                $sql = "UPDATE `member` SET `username` = ?, `password` = ? WHERE `id` = ?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$newUsername, $newPassword, $id]);

                echo "Gebruikersgegevens succesvol bijgewerkt.";
            }
            ?>

            <?php
            // Verbind met de database en haal alle gebruikers op
            require_once './database/conn.php';
            $sql = "SELECT * FROM `member`";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ($users) {
                // Toon de lijst van gebruikers om uit te kiezen
                foreach ($users as $user) {
                    ?>
                    <form method="POST" class="bewerken" action="">

                        <h2>Gebruikersaccount bewerken</h2>
                        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

                        <label for="firstname">Voornaam:</label>
                        <input type="text" id="firstname" name="firstname" value="<?php echo $user['firstname']; ?>"
                            required><br>

                        <label for="lastname">Achternaam:</label>
                        <input type="text" id="lastname" name="lastname" value="<?php echo $user['lastname']; ?>" required><br>

                        <label for="username">Gebruikersnaam:</label>
                        <input type="text" id="username" name="username" value="<?php echo $user['username']; ?>" required><br>

                        <label for="password">Wachtwoord:</label>
                        <input type="password" id="password" name="password" value="<?php echo $user['password']; ?>"
                            required><br>

                        <input type="submit" name="update" value="Bijwerken">
                    </form>
                    <?php
                }
            } else {
                echo "Geen gebruikers gevonden.";
            }
            ?>
        </div>



    </div>
    <div class="box">
        <?php
        // Verwijderen van een lid
        if (isset($_POST['delete'])) {
            // Verwerk bijgewerkte gegevens
            $id = $_POST['id'];

            // Verbind met de database en verwijder het lid
            require_once './database/conn.php';
            $sql = "DELETE FROM `member` WHERE `id` = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$id]);

            echo "Gebruiker succesvol verwijderd.";
        }

        // Toon de lijst van gebruikers om uit te kiezen
        require_once './database/conn.php';
        $stmt = $conn->prepare("SELECT * FROM `member`");
        $stmt->execute();

        // Maak een array van alle gebruikers voor gebruik in keuzelijst
        $users = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $users[$row['id']] = $row['username'];
        }
        // Sluit de databaseverbinding
        $conn = null;
        ?>

        <h2>Gebruikersaccount verwijderen</h2>
        <form method="POST">
            <label for="user">Gebruiker:</label>
            <select name="id" id="user">
                <?php foreach ($users as $id => $username) { ?>
                    <option value="<?php echo $id; ?>"><?php echo $username; ?></option>
                <?php } ?>
            </select>
            <input type="submit" name="delete" value="Verwijderen">
        </form>

        <div class="box">
            <?php
            //connectie met database
            $dsn = 'mysql:dbname=db_login;host=127.0.0.1';
            $user = 'root';
            $password = '';
            $dbh = new PDO($dsn, $user, $password);

            // Verwerk vakantie formulier
            if (isset($_POST['vakantie-verwijderen'])) {
                $vakantie_id = $_POST['vakantie_id'];

                // Voer query uit om de vakantie te verwijderen
                $stmt = $dbh->prepare("DELETE FROM vakanties WHERE id = :id");
                $stmt->bindParam(':id', $vakantie_id);
                $stmt->execute();

                header("Location: AdminPanel.php");
                exit;
            }

            //voer query uit om alle vakanties op te halen
            $stmt = $dbh->query("SELECT * FROM vakanties");

            // Maak een array van alle vakanties voor gebruik in keuzelijst
            $vakanties = array();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $vakanties[$row['id']] = $row['vakantie'];
            }

            // Sluit de databaseverbinding
            $dbh = null;
            ?>
            <h2>Selecteer een vakantie om te verwijderen</h2>
            <form method="POST">
                <label for="vakantie">Vakantie:</label>
                <select name="vakantie_id" id="vakantie">
                    <?php foreach ($vakanties as $id => $vakantie) { ?>
                        <option value="<?php echo $id; ?>"><?php echo $vakantie; ?></option>
                    <?php } ?>
                </select>
                <input type="submit" name="vakantie-verwijderen" value="Verwijderen">
            </form>

        </div>

        <div class="box vakantie-box">
      

            <h2>Vakantie toevoegen</h2>
            <form method="POST" class="aanmaken" action="vakantietoevoegen.php  ">
                <div class="form-row">
                    <label for="vakantie">Vakantie:</label>
                    <input type="text" id="vakantie" name="vakantie" required><br>
                </div>
                <div class="form-row">
                    <label for="korte_omschrijving">Korte omschrijving:</label>
                    <input type="text" id="korte_omschrijving" name="korte_omschrijving" required><br>
                </div>
                <div class="form-row">
                    <label for="algemene_beschrijving">Algemene beschrijving:</label>
                    <input type="text" id="algemene_beschrijving" name="algemene_beschrijving" required><br>
                </div>
                <div class="form-row">
                    <label for="ligging_omgeving">Ligging en omgeving:</label>
                    <input type="text" id="ligging_omgeving" name="ligging_omgeving" required><br>
                </div>
                <div class="form-row">
                    <label for="kamers">Kamers:</label>
                    <input type="text" id="kamers" name="kamers" required><br>
                </div>
                <div class="form-row">
                    <label for="faciliteiten">Faciliteiten:</label>
                    <input type="text" id="faciliteiten" name="faciliteiten" required><br>
                </div>
                <div class="form-row">
                    <label for="img1">Afbeelding 1:</label>
                    <input type="text" id="img1" name="img1"><br>
                </div>
                <div class="form-row">
                    <label for="img2">Afbeelding 2:</label>
                    <input type="text" id="img2" name="img2"><br>
                </div>
                <div class="form-row">
                    <label for="img3">Afbeelding 3:</label>
                    <input type="text" id="img3" name="img3"><br>
                </div>
                <div class="form-row">
                    <label for="img4">Afbeelding 4:</label>
                    <input type="text" id="img4" name="img4"><br>
                </div>
                <div class="form-row">
                    <label for="img5">Afbeelding 5:</label>
                    <input type="text" id="img5" name="img5"><br>
                </div>
                <div class="form-row">
                    <label for="kortetitel">Korte titel:</label>
                    <input type="text" id="kortetitel" name="kortetitel" required><br>
                </div>
                <div class="form-row">
                    <label for="begin_datum">Begin datum:</label>
                    <input type="date" id="begin_datum" name="begin_datum" required><br>
                </div>
                <div class="form-row">
                    <label for="eind_datum">Eind datum:</label>
                    <input type="date" id="eind_datum" name="eind_datum" required><br>
                </div>
                <input type="submit" name="vakantie-toevoegen" value="Vakantie toevoegen">
            </form>
            <?php
                 //connectie met database
                 $dsn = 'mysql:dbname=db_login;host=127.0.0.1';
                 $user = 'root';
                 $password = '';
                 $dbh = new PDO($dsn, $user, $password);
                  
                    // Verwerk vakantie formulier
                    if(isset($_POST['vakantie_verwerk'])){
                        $vakantie_id = $_POST['vakantie_id'];
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

                        //voer query uit om de vakantie te bewerken
                        $stmt = $dbh->prepare("UPDATE vakanties SET vakantie = :vakantie, korte_omschrijving = :korte_omschrijving, algemene_beschrijving = :algemene_beschrijving, ligging_omgeving = :ligging_omgeving, kamers = :kamers, faciliteiten = :faciliteiten, img1 = :img1, img2 = :img2, img3 = :img3, img4 = :img4, img5 = :img5, kortetitel = :kortetitel, begin_datum = :begin_datum, eind_datum = :eind_datum WHERE id = :id");
                        $stmt->bindParam(':id', $vakantie_id);
                        $stmt->bindParam(':vakantie', $vakantie);
                        $stmt->bindParam(':korte_omschrijving', $korte_omschrijving);
                        $stmt->bindParam(':algemene_beschrijving', $algemene_beschrijving);
                        $stmt->bindParam(':ligging_omgeving', $ligging_omgeving);
                        $stmt->bindParam(':kamers', $kamers);
                        $stmt->bindParam(':faciliteiten', $faciliteiten);
                        $stmt->bindParam(':img1', $img1);
                        $stmt->bindParam(':img2', $img2);
                        $stmt->bindParam(':img3', $img3);
                        $stmt->bindParam(':img4', $img4);
                        $stmt->bindParam(':img5', $img5);
                        $stmt->bindParam(':kortetitel', $kortetitel);
                        $stmt->bindParam(':begin_datum', $begin_datum);
                        $stmt->bindParam(':eind_datum', $eind_datum);
                        $stmt->execute();

                        header("Location: AdminPanel.php");
                        exit;

                    }

                    //voer query uit om alle vakanties op te halen
                    $stmt = $dbh->query("SELECT * FROM vakanties");

                    //Maak een array van alle vakanties voor gebruik in keuzelijst
                    $vakanties = array();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $vakanties[$row['id']] = $row['vakantie'];
                    }

                    // Sluit de databaseverbinding
                    $dbh = null;
            ?>
            <h2>Selecteer een vakantie om te bewerken</h2>

            <form method="POST">
                <label for="vakantie">Vakantie:</label>
                <select name="vakantie_id" id="vakantie">
                    <?php foreach ($vakanties as $id => $vakantie) { ?>
                        <option value="<?php echo $id; ?>"><?php echo $vakantie; ?></option>
                    <?php } ?>
                </select>
                <div class="from-row" >
                    <label for="vakanrie">Vakantie:</label>
                    <input type="text" id="vakantie" name="vakantie" required><br>
                </div>
                <div class="from-row">
                    <label for="korte_omschrijving">Korte omschrijving:</label>
                    <input type="text" id="korte_omschrijving" name="korte_omschrijving" required><br>
                </div>
                <div class="from-row">
                    <label for="algemene_beschrijving">Algemene beschrijving:</label>
                    <input type="text" id="algemene_beschrijving" name="algemene_beschrijving" required><br>
                </div>
                <div class="from-row">
                    <label for="ligging_omgeving">Ligging en omgeving:</label>
                    <input type="text" id="ligging_omgeving" name="ligging_omgeving" required><br>
                </div>
                <div class="from-row">
                    <label for="kamers">Kamers:</label>
                    <input type="text" id="kamers" name="kamers" required><br>
                </div>
                <div class="from-row">
                    <label for="faciliteiten">Faciliteiten:</label>
                    <input type="text" id="faciliteiten" name="faciliteiten" required><br>
                </div>
                <div class="from-row">
                    <label for="img1">Afbeelding 1:</label>
                    <input type="text" id="img1" name="img1"><br>
                </div>
                <div class="from-row">
                    <label for="img2">Afbeelding 2:</label>
                    <input type="text" id="img2" name="img2"><br>
                </div>
                <div class="from-row">
                    <label for="img3">Afbeelding 3:</label>
                    <input type="text" id="img3" name="img3"><br>
                </div>
                <div class="from-row">
                    <label for="img4">Afbeelding 4:</label>
                    <input type="text" id="img4" name="img4"><br>
                </div>
                <div class="from-row">
                    <label for="img5">Afbeelding 5:</label>
                    <input type="text" id="img5" name="img5"><br>
                </div>
                <div class="from-row">
                    <label for="kortetitel">Korte titel:</label>
                    <input type="text" id="kortetitel" name="kortetitel" required><br>
                </div>
                <div class="from-row">
                    <label for="begin_datum">Begin datum:</label>
                    <input type="date" id="begin_datum" name="begin_datum" required><br>
                </div>
                <div class="from-row">
                    <label for="eind_datum">Eind datum:</label>
                    <input type="date" id="eind_datum" name="eind_datum" required><br>
                </div>
                <input type="submit" name="vakantie_verwerk" value="Vakantie bewerken">
            </form>


            </form>
            
        </div>


</body>

</html>