<?php
session_start();
$db_username = 'root';
$db_password = '';

try {
    $conn = new PDO('mysql:host=localhost;dbname=db_login', $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Verbinding succesvol!";
} catch (PDOException $e) {
    die("Verbinding mislukt: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/algemene_voorwaarden.css">
    <link rel="stylesheet" media=" screen and (max-width:768px)" href="mobile.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;1,600&family=Roboto+Condensed&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

</head>

<body>
    <header class="header">
        <nav>
            <div class="navigatie-first">
                <a href="bestemming.php">+31 6 234 567 89</a>
                <span class="scheidingslijn"></span>
                <a href="Contact.php">contact@domain.com</a>
            </div>
            <div class="navigatie-second">
                <?php if (isset($_SESSION['login'])) { ?>
                    <a href="logout.php">Logout</a>
                    <span class="scheidingslijn"></span>
                <?php } ?>
                <a href="login.php">Login</a>
                <span class="scheidingslijn"></span>
                <a href="#">Sign Up</a>
                <span class="scheidingslijn"></span>
                <a href="#">NL</a>
                <span class="scheidingslijn"></span>
                <a href="#">Euro</a>
            </div>
        </nav>
        <div class="top-text-bg">
            <h1 class="top-text1">
                DIT ZIJN
            </h1>
            <h1 class="top-text2">
                DE ALGEMENE VOORWAARDEN
            </h1>
        </div>
    </div>
</body>