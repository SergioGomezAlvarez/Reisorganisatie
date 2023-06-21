<html>
<head>
    <title>Mijn Account</title>
</head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bestemming.css">
    <link rel="stylesheet" media=" screen and (max-width:768px)" href="mobile.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="css/mijnAccount.css">
    

    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;1,600&family=Roboto+Condensed&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
<div class="terug-div">
        <a class="terug-button" href="index.php"><i class="fas fa-arrow-left"></i>Terug</a>
    </div>
<div class="container">
    <h1>Mijn Account</h1>
    <p>Hier kunt u uw profielinformatie bekijken en bewerken.</p>
    <?php
    session_start();
    require_once './database/conn.php';
    
    // Controleer of de gebruiker is ingelogd
    if (!isset($_SESSION['login'])) {
        echo "Je moet ingelogd zijn om een boeking te maken.";
        exit();
    }
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM `member` WHERE `username`=:username";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['username' => $username]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $username = $result['username'];
    $firstname = $result['firstname'];
    $password = $result['password'];

    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['name'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $sql = "UPDATE `member` SET `username`=:username, `password`=:password, `firstname`=:firstname WHERE `username`=:username";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['username' => $username, 'password' => $password, 'firstname' => $name]);
        header("Location: mijnAccount.php");
    }
    ?>

<form method="post">
    <label for="name">Naam:</label>
    <input type="text" id="name" name="name" value="<?php echo $firstname; ?>" disabled>

    <label for="username">Gebruikersnaam:</label>
    <input type="text" id="username" name="username" value="<?php echo $username; ?>" disabled>
    <br>
    <label for="password">Wachtwoord:</label>
    <input type="password" id="password" name="password" value="<?php echo $password; ?>" disabled>

    <button type="button" onclick="enableEdit()">Bewerken</button>
    <button type="submit" id="saveBtn" disabled>Opslaan</button>
</form>
</div>

<script>
    function enableEdit() {
        var inputs = document.querySelectorAll('input');
        for (var i = 0; i < inputs.length; i++) {
            inputs[i].disabled = false;
        }
        document.getElementById('saveBtn').disabled = false;
    }
</script>

</body>
</html>