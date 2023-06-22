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
        <a class="terug-button"  style="width: 17.5rem;"href="AdminPanel.php"><i class="fas fa-arrow-left"></i>Terug naar AdminPanek hoem</a>
    </div>
    <h1>Admin Panel</h1>

    <div class="container">
        <div class="box">
            <?php
            //database connectie
            require_once './database/conn.php';

            if (isset($_POST['zoeken'])) {
                // Verwerk bijgewerkte gegevens
                $username = $_POST['username'];

                // Verbind met de database en zoek de gebruiker op
                require_once './database/conn.php';
                $sql = "SELECT * FROM `member` WHERE `username` = ?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$username]);
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($user) {
                    // Gebruiker gevonden, toon de tabel met de gegevens
                    ?>
                    <table class="gebruikerstabel">
                        <tr>
                            <th>Voornaam</th>
                            <th>Achternaam</th>
                            <th>Gebruikersnaam</th>
                            <th>Wachtwoord</th>
                            <th>Bewerken en Verwijderen</th>

                        </tr>
                        <tr>
                            <td>
                                <?php echo $user['firstname']; ?>
                            </td>
                            <td>
                                <?php echo $user['lastname']; ?>
                            </td>
                            <td>
                                <?php echo $user['username']; ?>
                            </td>
                            <td>
                                <?php echo $user['password']; ?>
                            </td>
                            <td style="
    display: flex;
    justify-content: space-evenly;
">
                                <!-- Bewerkingsknop -->
                                <button class="buttonbijwerken" type="button"
                                    onclick="openPopup('<?php echo $user['id']; ?>')">Bijwerken</button>

                                <!-- Verwijderingsknop -->


                                <!-- JavaScript-functie om pop-upvenster te openen -->
                                <script>
                                    function openPopup(userId) {
                                        var popup = document.getElementById("popup");
                                        var form = document.getElementById("bewerkenForm");
                                        var userIdInput = document.getElementById("userIdInput");

                                        // Vul het gebruikers-ID in het verborgen invoerveld
                                        userIdInput.value = userId;

                                        // Toon het pop-upvenster
                                        popup.style.display = "block";

                                        // Autofocus op het eerste invoerveld in het pop-upvenster
                                        form.elements[0].focus();
                                    }
                                </script>

                                <!-- CSS-stijl voor pop-upvenster -->
                                <style>
                                    #popup {
                                        display: none;
                                        position: fixed;
                                        top: 0;
                                        left: 0;
                                        width: 100%;
                                        height: 100%;
                                        background-color: rgba(0, 0, 0, 0.5);
                                        z-index: 9999;
                                    }

                                    #popupContent {
                                        background-color: black;
                                        width: 400px;
                                        max-width: 90%;
                                        margin: 100px auto;
                                        padding: 20px;
                                        border-radius: 5px;
                                    }

                                    #popupClose {
                                        position: absolute;
                                        top: 10px;
                                        right: 10px;
                                        font-size: 24px;
                                        cursor: pointer;
                                    }

                                    #bewerkenForm input[type="text"],
                                    #bewerkenForm input[type="password"] {
                                        width: 100%;
                                        margin-bottom: 10px;
                                        padding: 5px;
                                    }

                                    .buttonbijwerken {
                                        background-color: #4CAF50;
                                        color: white;
                                        border: none;
                                        padding: 5px 10px;
                                        text-align: center;
                                        text-decoration: none;
                                        display: inline-block;
                                        font-size: 14px;
                                        cursor: pointer;
                                    }
                                </style>

                                <!-- Pop-upvenster voor bewerken -->
                                <div id="popup">
                                    <div id="popupContent">
                                        <span id="popupClose" onclick="closePopup()">&times;</span>
                                        <h2>Gebruikersaccount bewerken</h2>
                                        <form method="POST" id="bewerkenForm" action="">
                                            <input type="hidden" name="id" id="userIdInput">
                                            <label for="firstname">Voornaam:</label>
                                            <input type="text" id="firstname" name="firstname"
                                                value="<?php echo $user['firstname']; ?>" required>
                                            <label for="lastname">Achternaam:</label>
                                            <input type="text" id="lastname" name="lastname"
                                                value="<?php echo $user['lastname']; ?>" required>
                                            <label for="username">Gebruikersnaam:</label>
                                            <input type="text" id="username" name="username"
                                                value="<?php echo $user['username']; ?>" required>
                                            <label for="password">Wachtwoord:</label>
                                            <input type="password" id="password" name="password"
                                                value="<?php echo $user['password']; ?>" required>
                                            <input type="submit" name="update" value="Bijwerken">
                                        </form>
                                    </div>
                                </div>

                                <!-- JavaScript-functie om pop-upvenster te sluiten -->
                                <script>
                                    function closePopup() {
                                        var popup = document.getElementById("popup");
                                        popup.style.display = "none";
                                    }
                                </script>

                                <!-- Verwijderingsknop -->
                                <form method="POST" class="verwijderen" action="">
                                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                                    <button type="submit" name="verwijderen">Verwijderen</button>
                                </form>
                            </td>
                        </tr>
                    </table>
                    <?php
                } else {
                    echo "Gebruiker niet gevonden.";
                }
            }
            ?>


            <form method="POST" class="aanmaken">
                <h2>Gebruiker zoeken</h2>
                <div class="form-row">
                    <label for="username">Gebruikersnaam:</label>
                    <input type="text" id="username" name="username" required><br>
                </div>
                <input type="submit" name="zoeken" value="Gebruiker zoeken">
            </form>

            <!-- Aanmaakformulier voor nieuwe gebruiker -->
            <?php
            // Verwerken van het formulier voor het aanmaken van een nieuwe gebruiker
            if (isset($_POST['register'])) {
                // Verwerk bijgewerkte gegevens
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $username = $_POST['username'];
                $password = $_POST['password'];

                // Verbind met de database en voeg de nieuwe gebruiker toe
                require_once './database/conn.php';
                $sql = "INSERT INTO `member` (`firstname`, `lastname`, `username`, `password`) VALUES (?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$firstname, $lastname, $username, $password]);

                echo "Gebruiker succesvol aangemaakt.";
            }
            ?>

            <form method="POST" class="aanmaken" action="register.php">
                <!-- Voeg hier de invoervelden voor het aanmaken van een nieuwe gebruiker toe -->
                <h2>Gebruiker aanmaken</h2>
                <div class="form-row">
                    <label for="firstname">Voornaam:</label>
                    <input type="text" id="firstname" name="firstname" required><br>
                </div>
                <div class="form-row">
                    <label for="lastname">Achternaam:</label>
                    <input type="text" id="lastname" name="lastname" required><br>
                </div>
                <div class="form-row">
                    <label for="username">Gebruikersnaam:</label>
                    <input type="text" id="username" name="username" required><br>
                </div>
                <div class="form-row">
                    <label for="password">Wachtwoord:</label>
                    <input type="password" id="password" name="password" required><br>
                </div>
                <input type="submit" name="register" value="Gebruiker aanmaken">

            </form>

           
            <!-- Tabel met gebruikersgegevens -->
            <table class="gebruikerstabel">
                <tr>
                    <th>Voornaam</th>
                    <th>Achternaam</th>
                    <th>Gebruikersnaam</th>
                    <th>Wachtwoord</th>
                    <th>Bewerken</th>
                    <th>Verwijderen</th>
                </tr>
                <?php
                // Verbind met de database en haal alle gebruikers op
                require_once './database/conn.php';
                $sql = "SELECT * FROM `member`";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if ($users) {
                    foreach ($users as $user) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $user['firstname']; ?>
                            </td>
                            <td>
                                <?php echo $user['lastname']; ?>
                            </td>
                            <td>
                                <?php echo $user['username']; ?>
                            </td>
                            <td>
                                <?php echo $user['password']; ?>
                            </td>
                            <td>
                                <!-- Bewerkingsknop -->
                                <button type="button" onclick="openPopup('<?php echo $user['id']; ?>')">Bijwerken</button>
                            </td>
                            <td>
                                <!-- Verwijderingsknop -->
                                <form method="POST" class="verwijderen" action="">
                                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                                    <button type="submit" name="verwijderen">Verwijderen</button>
                                </form>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='6'>Geen gebruikers gevonden.</td></tr>";
                }
                ?>
            </table>

            <!-- Pop-upvenster voor bewerken -->
            <div id="popup">
                <div id="popupContent">
                    <span id="popupClose" onclick="closePopup()">&times;</span>
                    <h2>Gebruikersaccount bewerken</h2>
                    <form method="POST" id="bewerkenForm" action="">
                        <input type="hidden" name="id" id="userIdInput">
                        <label for="firstname">Voornaam:</label>
                        <input type="text" id="firstname" name="firstname" value="" required>
                        <label for="lastname">Achternaam:</label>
                        <input type="text" id="lastname" name="lastname" value="" required>
                        <label for="username">Gebruikersnaam:</label>
                        <input type="text" id="username" name="username" value="" required>
                        <label for="password">Wachtwoord:</label>
                        <input type="password" id="password" name="password" value="" required>
                        <input type="submit" name="update" value="Bijwerken">
                    </form>
                </div>
            </div>

            <!-- JavaScript-functies om pop-upvenster te openen/sluiten -->
            <script>
                function openPopup(userId) {
                    var popup = document.getElementById("popup");
                    var form = document.getElementById("bewerkenForm");
                    var userIdInput = document.getElementById("userIdInput");

                    // Vul het gebruikers-ID in het verborgen invoerveld
                    userIdInput.value = userId;

                    // Pas de stijl van het pop-upvenster aan om het weer te geven
                    popup.style.display = "block";
                }

                function closePopup() {
                    var popup = document.getElementById("popup");

                    // Verberg het pop-upvenster
                    popup.style.display = "none";
                }
            </script>

            <?php
            // Verwijderen van een lid met de verwijderingsknop
            if (isset($_POST['verwijderen'])) {
                // Verwerk bijgewerkte gegevens
                $id = $_POST['id'];

                // Verbind met de database en verwijder het lid
                require_once './database/conn.php';
                $sql = "DELETE FROM `member` WHERE `id` = ?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$id]);
            }
            ?>




        </div>



</body>

</html>