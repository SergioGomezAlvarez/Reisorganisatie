<?php
$db_username = 'root';
$db_password = '';

try {
    $conn = new PDO('mysql:host=localhost;dbname=db_login', $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Verbinding mislukt: " . $e->getMessage());
}

session_start();

// Controleer of de gebruiker is ingelogd
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header("Location: login.php"); // Stuur de gebruiker naar de inlogpagina als deze niet is ingelogd
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bestemming.css">
    <link rel="stylesheet" media=" screen and (max-width:769px)" href="css/mobile.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;1,600&family=Roboto+Condensed&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

</head>

<body>
    <header class="header ">
        <nav>
            <div class="navigatie-first">
                <a href="test.html">+31 6 234 567 89</a>
                <span class="scheidingslijn"></span>
                <a href="Contact.php">Mijn Account</a>
            </div>
            <div class="navigatie-second">
                <?php include_once 'header.php'; ?>
                <a href="login.php">Login</a>
                <span class="scheidingslijn"></span>
                <a href="#">Sign Up</a>
                <span class="scheidingslijn"></span>
                <a href="#">NL</a>
                <span class="scheidingslijn"></span>
                <a href="#">Euro</a>
            </div>
        </nav>
        <div class="top-info">
            <div class="top-logo">
                <img class="logo-img" src="img/Logo1.2.jpg" alt="">
            </div>
            <div class="top-midden-info">
                <a class="underline-button"><i class="fa-solid fa-bed"></i> Verblijven</a>
                <a class="underline-button"><i class="fa-solid fa-plane rotate-90"></i> Vluchten</a>
                <a class="underline-button"><i class="fa-solid fa-hotel"></i> Hotel</a>
                <a class="underline-button"><i class="fa-solid fa-bridge"></i> Populaire Bestemmingen </a>
            </div>
            <div class="top-zoeken">
                <div class="mijn-reservring-box"><a class="mijn-reservering-text" href="">Mijn reservering</a></div>
            </div>
        </div>
        <div class="groot-div-bestemming">
            <div class="naam-van-bestemming">
                <div class="Terug-en-naam">
                    <div class="terug-div">
                        <a class="terug-button" href="index.php"><i class="fas fa-arrow-left"></i>Terug</a>
                    </div>
                    <h1 class="top-text1 title-bestemming">
                        Jouw vakantie naar
                        <?php
                        if (isset($_GET['bestemming'])) {
                            $query = "SELECT vakantie FROM `vakanties` WHERE id =" . $_GET['bestemming'];
                            $result = $conn->query($query);
                            $row = $result->fetch(PDO::FETCH_ASSOC);
                            echo "<span class='bestemming-naam'>" . $row['vakantie'] . "</span>";
                        }
                        ?>

                    </h1>


                    </h1>
                    <div style="width: 242px;"></div>
                </div>
                <div class="bestemming-img-big-div">
                    <div class="bestemming radio-btns">
                        <div class="links-div-img ">
                            <div class="bovenste-img">
                                <?php if (isset($_GET['bestemming'])) {
                                    $query = "SELECT img2 FROM `vakanties` WHERE id =" . $_GET['bestemming'];
                                    $result = $conn->query($query);
                                    $row = $result->fetch(PDO::FETCH_ASSOC);
                                    echo "<img class='bovenste-img  '  src='" . $row['img2'] . "'>";
                                }
                                ?>
                            </div>
                            <div class="onderste-img">
                                <?php if (isset($_GET['bestemming'])) {
                                    $query = "SELECT img3 FROM `vakanties` WHERE id =" . $_GET['bestemming'];
                                    $result = $conn->query($query);
                                    $row = $result->fetch(PDO::FETCH_ASSOC);
                                    echo "<img class='onderste-img'  src='" . $row['img3'] . "'>";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="rechts-div-img">
                            <div class="omschrihhjving-bestemming radio-btns__btn">
                                <h1 class="omschrihhjving-titl">
                                    <?php
                                    if (isset($_GET['bestemming'])) {
                                        $query = "SELECT korte_omschrijving FROM `vakanties` WHERE id =" . $_GET['bestemming'];
                                        $result = $conn->query($query);
                                        $row = $result->fetch(PDO::FETCH_ASSOC);
                                        echo $row['korte_omschrijving'];
                                    }
                                    ?>
                                </h1>
                            </div>

                            <div class="rechts-img-onder">

                                <div class="rechts-img">
                                    <?php if (isset($_GET['bestemming'])) {
                                        $query = "SELECT img5 FROM `vakanties` WHERE id =" . $_GET['bestemming'];
                                        $result = $conn->query($query);
                                        $row = $result->fetch(PDO::FETCH_ASSOC);
                                        echo "<img class='onderste-img2'  src='" . $row['img5'] . "'>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    <main>


        <div class="vakanties">
            <h2>Beschikbare vakanties</h2>
            <?php
            $db_username = 'root';
            $db_password = '';
            $conn = new PDO('mysql:host=localhost;dbname=db_login', $db_username, $db_password);
            if (!$conn) {
                die("Fatal Error: Connection Failed!");
            }

            $sql = "SELECT * FROM vakanties WHERE id = " . $_GET['bestemming'] . "";
            $result = $conn->query($sql);

            // Beschikbaarheidsinformatie weergeven
            if ($result->rowCount() > 0) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    $vakantieId = $row["id"];
                    $beginDatum = $row["begin_datum"];
                    $eindDatum = $row["eind_datum"];

                    $beschikbaarheid = "Beschikbaar";

                    echo "<div class='vakantie'>";
                    echo "<p>Beschikbaarheid: $beginDatum - $eindDatum ($beschikbaarheid)</p>";
                    echo "<form action='boekingverwerking.php' method='POST'>";
                    echo "<input type='hidden' name='vakantie_id' value='$vakantieId'>";
                    echo "<button type='submit'action='boekingverwerking.php' class='boek-btn'>Boek nu </button>";
                    //prijs weergeven
                    echo "<p class='prijs'>Prijs: € 500 per person</p>";
                    echo "</form>";
                    echo "</div>";
                }
            } else {
                echo "Geen vakanties beschikbaar.";
            }
            ?>
        </div>

        <div class="boekingsformulier-div">
        </div>
        </div>
        <div class="terug-div">
            <a class="algemene-voorwaarden-button" href="algemene_voorwaarden.php">Algemene Voorwaarden</a>
        </div>

        <div class="review-form">
            <h3>Voeg een review toe:</h3>
            <form method="POST" action="review_verwerken.php">
                <input type="hidden" name="vakantie_id" value="5">
                <label for="gebruikersnaam">naam:</label>
                <input type="text" name="gebruikersnaam" id="gebruikersnaam" required>
                <label for="beoordeling">Beoordeling:</label>
                <input type="number" name="beoordeling" id="beoordeling" min="1" max="5" required>
                <label for="opmerking">Opmerking:</label>
                <textarea name="opmerking" id="opmerking" required></textarea>
                <button type="submit">Review indienen</button>
            </form>

            <div class="review-lijst">
                <h3>Reviews:</h3>
                <?php
                // Controleer of het formulier een veld heeft met de naam "vakantie_id" en of het correct is ingevuld
                if (isset($_POST['vakantie_id'])) {
                    $vakantie_id = $_POST['vakantie_id'];

                    // Voer eventuele extra validatie uit op het vakantie-ID, indien nodig
                    // ...
                
                    // Query om reviews met bijbehorende vakanties op te halen
                    $sql = "SELECT reviews.gebruikersnaam, reviews.beoordeling, reviews.opmerking, vakanties.vakantie FROM reviews INNER JOIN vakanties ON reviews.vakantie_id = vakanties.id";

                    // Voeg de vakantie_id-voorwaarde toe aan de SQL-query om alleen reviews voor die vakantie op te halen
                    $sql .= " WHERE reviews.vakantie_id = :vakantie_id";
                    $stmt = $conn->prepare($sql);
                    $stmt->bindValue(':vakantie_id', $vakantie_id);
                } else {
                    // Als het vakantie-ID niet is ingevuld, haal alle reviews op zonder filter
                    $sql = "SELECT reviews.gebruikersnaam, reviews.beoordeling, reviews.opmerking, vakanties.vakantie FROM reviews INNER JOIN vakanties ON reviews.vakantie_id = vakanties.id";
                    $stmt = $conn->prepare($sql);
                }

                $stmt->execute();

                // Loop door de resultaten en toon elke review met bijbehorende vakantie
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $gebruikersnaam = $row['gebruikersnaam'];
                    $beoordeling = $row['beoordeling'];
                    $opmerking = $row['opmerking'];
                    $vakantie = $row['vakantie'];

                    // Toon de review met bijbehorende vakantie
                    echo "<div class='review'>";
                    echo "<h3>$gebruikersnaam</h3>";

                    // Bereken het aantal sterren op basis van de beoordeling
                    $sterren = "";
                    for ($i = 1; $i <= $beoordeling; $i++) {
                        $sterren .= "&#9733;"; // Voeg een sterrensymbool toe
                    }

                    echo "<p class='beoordeling'>Beoordeling: <span class='sterren'>$sterren</span></p>";
                    echo "<p>$opmerking</p>";
                    echo "<h3>Vakantie naar: $vakantie</h3>";
                    echo "</div>";
                }
                ?>
            </div>


        </div>

    </main>
    <div class="hotel-titel-bg">
        <h1 class="hotel-titel">Hotel</h1>
    </div>
    <div class="hotel-info-container">
        <div class="hotel-info-bg">
            <p class="hotel-info">
                Algemene beschrijving
                <br>
                <br>
                <?php
                if (isset($_GET['bestemming'])) {
                    $query = "SELECT algemene_beschrijving FROM `vakanties` WHERE id =" . $_GET['bestemming'];
                    $result = $conn->query($query);
                    $row = $result->fetch(PDO::FETCH_ASSOC);
                    echo nl2br($row['algemene_beschrijving']);
                }

                ?>
                <br>
                </br class="titel-info">Ligging & Omgeving<br>
                <br>
                <?php
                if (isset($_GET['bestemming'])) {
                    $query = "SELECT ligging_omgeving FROM `vakanties` WHERE id =" . $_GET['bestemming'];
                    $result = $conn->query($query);
                    $row = $result->fetch(PDO::FETCH_ASSOC);
                    echo nl2br($row['ligging_omgeving']);
                }
                ?>
                <br>
                </br>
                Kamers<br>
                <br>

                faciliteiten

                <?php
                if (isset($_GET['bestemming'])) {
                    $query = "SELECT kamers FROM `vakanties` WHERE id =" . $_GET['bestemming'];
                    $result = $conn->query($query);
                    $row = $result->fetch(PDO::FETCH_ASSOC);
                    echo nl2br($row['kamers']);
                }

                ?>
                <br>
                </br>Faciliteiten<br>
                <br>
                <?php
                if (isset($_GET['bestemming'])) {
                    $query = "SELECT faciliteiten FROM `vakanties` WHERE id =" . $_GET['bestemming'];
                    $result = $conn->query($query);
                    $row = $result->fetch(PDO::FETCH_ASSOC);
                    echo nl2br($row['faciliteiten']);
                }
                ?>
        </div>
    </div>
    <div class="faciliteiten-titel-bg">
        <h1 class="faciliteiten-titel">Faciliteiten</h1>
    </div>
    <div class="faciliteiten-container">
        <div class="faciliteiten-algemeen">
            <div class="algemeen-titel">
                <i class="fa-solid fa-circle-info circle-info" style="color: #8f8f8f;"></i>
                <h1 class="algemeen-text">Algemeen</h1>
            </div>
            <div class="line">
            </div>
            <div class="algemeen-topics">
                <div class="topics">
                    <i class="fa-solid fa-check check" style="color: #00ff04;"></i>
                    <p class="topics-text">Airco</p>
                </div>
                <div class="topics">
                    <i class="fa-solid fa-check check" style="color: #00ff04;"></i>
                    <p class="topics-text">Bar</p>
                </div>
                <div class="topics">
                    <i class="fa-solid fa-check check" style="color: #00ff04;"></i>
                    <p class="topics-text">Binnenzwembad</p>
                </div>
                <div class="topics">
                    <i class="fa-solid fa-check check" style="color: #00ff04;"></i>
                    <p class="topics-text">Parkeerplaats</p>
                </div>
                <div class="topics">
                    <i class="fa-solid fa-check check" style="color: #00ff04;"></i>
                    <p class="topics-text">Kluisje</p>
                </div>
                <div class="topics">
                    <i class="fa-solid fa-check check" style="color: #00ff04;"></i>
                    <p class="topics-text">Rolstoelvriendelijk</p>
                </div>
            </div>
        </div>
        <div class="faciliteiten-activiteiten">
            <div class="activiteiten-titel">
                <i class="fa-solid fa-baseball baseball" style="color: #8f8f8f;"></i>
                <h1 class="algemeen-text">Activiteiten</h1>
            </div>
            <div class="line">
            </div>
            <div class="algemeen-topics">
                <div class="topics">
                    <i class="fa-solid fa-check check" style="color: #00ff04;"></i>
                    <p class="topics-text">Fitness</p>
                </div>
                <div class="topics">
                    <i class="fa-solid fa-check check" style="color: #00ff04;"></i>
                    <p class="topics-text">Sauna</p>
                </div>

            </div>
        </div>
    </div>
    <footer>
        <div class="footer-container">
            <div class="footer-socials">
                <p class="footer-socials-text">
                    We maken altijd onze bezoekers blij door het<br></br> geven van zo veel mogelijk opties.
                </p>
                <a class="footer-socials-buttons-container"><i class="fa-brands fa-facebook facebook"></i><i
                        class="fa-brands fa-twitter twitter" style="color: #00328a;"></i><i
                        class="fa-brands fa-instagram instagram" style="color: #00328a;"></i></a>
            </div>
            <div class="footer-info">
                <div class="footer-info-text">
                    <h1 class="footer-text-title">Over Ons</h1>
                    <div class="footer-text-content-bg">
                        <p class="footer-text-content">Over ons</p>
                        <p class="footer-text-content">Functies</p>
                        <p class="footer-text-content">Nieuws</p>
                        <p class="footer-text-content">Over ons</p>
                    </div>
                </div>
                <div class="footer-info-text-2">
                    <h1 class="footer-text-title">Bedrijf</h1>
                    <div class="footer-text-content-bg">
                        <p class="footer-text-content">Partner met ons</p>
                        <p class="footer-text-content">FAQ</p>
                        <p class="footer-text-content">Blog</p>
                    </div>
                </div>
                <div class="footer-info-text">
                    <h1 class="footer-text-title">Support</h1>
                    <div class="footer-text-content-bg">
                        <p class="footer-text-content">Over ons</p>
                        <p class="footer-text-content">Functies</p>
                        <p class="footer-text-content">Nieuws</p>
                        <p class="footer-text-content">Over ons</p>
                    </div>
                </div>
            </div>
            <div class="footer-subscribe">
                <div class="footer-subscribe-text">
                    <h1 class="subscribe-text">Abonneer op onze bestemming review nieuwsbrieven</h1>
                </div>
                <div class="footer-email-bg">
                    <div class="footer-email-container">
                        <i class="fa-regular fa-envelope envelope" style="color: #ffc800;"></i>
                        <p>Uw Email</p>
                    </div>
                    <a class="email-send-button">
                        <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i>
                    </a>
                </div>

            </div>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/017f40d907.js" crossorigin="anonymous"></script>
    <script src="java.js"></script>
</body>