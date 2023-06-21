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
    <h2>Gebruikersaccount aanmaken</h2>
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
        // Verbind met de database en haal de gebruikersgegevens op
        require_once './database/conn.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM `member` WHERE `id` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            ?>
            <form method="POST" action="update_user.php">
                <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

                <label for="firstname">Voornaam:</label>
                <input type="text" id="firstname" name="firstname" value="<?php echo $user['firstname']; ?>" required><br>

                <label for="lastname">Achternaam:</label>
                <input type="text" id="lastname" name="lastname" value="<?php echo $user['lastname']; ?>" required><br>

                <label for="username">Gebruikersnaam:</label>
                <input type="text" id="username" name="username" value="<?php echo $user['username']; ?>" required><br>

                <label for="password">Wachtwoord:</label>
                <input type="password" id="password" name="password" required><br>

                <input type="submit" name="update" value="Bijwerken">
            </form>
            <?php
        } else {
            echo "Gebruiker niet gevonden.";
        }
    ?>

    
</div>

</body>

</html>