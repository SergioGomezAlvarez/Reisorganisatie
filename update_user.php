<?php
    session_start();
    require_once './database/conn.php';
 
    if (isset($_POST['update'])) {
        if ($_POST['firstname'] != "" && $_POST['lastname'] != "" && $_POST['username'] != "" && $_POST['password'] != "") {
            try {
                $id = $_POST['id'];
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $username = $_POST['username'];
                $password = $_POST['password'];

                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "UPDATE `member` SET `firstname` = ?, `lastname` = ?, `username` = ?, `password` = ? WHERE `id` = ?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$firstname, $lastname, $username, $password, $id]);

                $_SESSION['message'] = array("text" => "User successfully updated.", "alert" => "info");
                $conn = null;
                header('location: user_management.php');
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        } else {
            echo "
                <script>alert('Please fill up all the required fields!')</script>
                <script>window.location = 'edit_user.php?id=".$_POST['id']."'</script>
            ";
        }
    }
?>


<div class="box">
            <h2>Gebruikersaccount aanmaken</h2>
            <!-- Aanmaakformulier voor nieuwe gebruiker -->
            <form method="POST" action="register.php">
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

            <h2>Gebruikersaccount bewerken</h2>
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
                    <form method="POST" action="">
                        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

                        <label for="firstname">Voornaam:</label>
                        <input type="text" id="firstname" name="firstname" value="<?php echo $user['firstname']; ?>"
                            required><br>

                        <label for="lastname">Achternaam:</label>
                        <input type="text" id="lastname" name="lastname" value="<?php echo $user['lastname']; ?>" required><br>

                        <label for="username">Gebruikersnaam:</label>
                        <input type="text" id="username" name="username" value="<?php echo $user['username']; ?>" required><br>

                        <label for="password">Wachtwoord:</label>
                        <input type="password" id="password" name="password" value="<?php echo $user['password']; ?>" required><br>

                        <input type="submit" name="update" value="Bijwerken">
                    </form>
                    <?php
                }
            } else {
                echo "Geen gebruikers gevonden.";
            }
            ?>
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

       
    </div>
