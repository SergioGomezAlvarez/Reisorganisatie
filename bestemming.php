<?php
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
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bestemming.css">
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
    <header class="header ">
        <nav>
            <div class="navigatie-first">
                <a href="test.html">+31 6 234 567 89</a>
                <span class="scheidingslijn"></span>
                <a href="bestemmijng.php">contact@domain.com</a>
            </div>
            <div class="navigatie-second">
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
                        $query = "SELECT titel FROM vakanties LIMIT 1";
                        $result = $conn->query($query);
                        $row = $result->fetch(PDO::FETCH_ASSOC);
                        echo "<span class='bestemming-naam'>" . $row['titel'] . "</span>";
                        ?>
                    </h1>
                    <div style="width: 242px;"></div>
                </div>
                <div class="bestemming-img-big-div">
                    <div class="bestemming radio-btns">
                        <div class="links-div-img ">
                            <div class="bovenste-img "></div>
                            <div class="onderste-img"></div>
                        </div>
                        <div class="rechts-div-img">
                            <div class="omschrihhjving-bestemming radio-btns__btn">
                                <h1 class="omschrihhjving-titl">
                                    <?php
                                    $query = "SELECT korte_omschrijving FROM vakanties LIMIT 1";
                                    $result = $conn->query($query);
                                    $row = $result->fetch(PDO::FETCH_ASSOC);
                                    echo $row['korte_omschrijving'];
                                    ?>
                                </h1>
                            </div>

                            <div class="rechts-img-onder">
                                <div class="links-img"></div>
                                <div class="rechts-img"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    <main>
        <div class="boeken-vakantie">
            <div class="zoek-reis-big-div boeken-big-div">
                <section class="boeken-titl">
                    <p>Boeken voor deze vakantie</p>
                </section>
                <div class="zoek-reis-div">
                    <div class="reisdatum">
                        <p>Reisdatum</p>
                        <input name="reisdatum" type="date" value="2023-05-03">
                    </div>
                    <div class="retourdatum">
                        <p>Retourdatum</p>
                        <input name="retourdatum" type="date" value="2023-05-03">
                    </div>
                    <div class="passagier">
                        <p>Passagier</p>
                        <button onclick="myFunction()"> +0 Passagier</i></button>
                        <div id="passagier-keizen" style="display:none">
                            <div class="passagiers-types">
                                <div class="passagiers-type">
                                    <div class="Volwassenen">
                                        <p>Volwassenen</p>
                                    </div>
                                    <div class="button-set">
                                        <button type="button" id="minus2">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <input class="passagiers-set" type="number" value="0" id="input2" />
                                        <button type="button" id="plus2">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="passagiers-type">
                                    <div class="Volwassenen">
                                        <p>kinderen</p>
                                    </div>
                                    <div class="button-set">
                                        <button type="button" id="minus3">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <input class="passagiers-set" type="number" value="0" id="input3" />
                                        <button type="button" id="plus3">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="passagiers-type">
                                    <div class="Volwassenen">
                                        <p>Zuigeling</p>
                                    </div>
                                    <div class="button-set">
                                        <button type="button" id="minus4">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <input class="passagiers-set" type="number" value="0" id="input4" />
                                        <button type="button" id="plus4">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="zoek_knop">
                        <button type="button" class="zoek_knop_button">Zoek</button>
                    </div>
                </div>
            </div>
            <div class="kosten-vakantie-big-div">
                <div class="kosten-vakanti">
                    <?php

                    $begin = new DateTime('2010-05-01');
                    $end = new DateTime('2010-05-10');

                    $interval = DateInterval::createFromDateString('1 day');
                    $period = new DatePeriod($begin, $interval, $end);

                    foreach ($period as $dt) {
                        echo "<div class='block'>&euro; 1000,- " . $dt->format("l d-m-Y \n") . "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
        </div>
    </main>
    <div class="hotel-titel-bg">
        <h1 class="hotel-titel">Hotel Le Meurice</h1>
    </div>
    <div class="hotel-info-container">
        <div class="hotel-info-bg">
            <p class="hotel-info">
                Algemene beschrijving
                <br>
                <br>
                <?php
                $query = "SELECT algemene_beschrijving FROM vakanties LIMIT 1";
                $result = $conn->query($query);
                $row = $result->fetch(PDO::FETCH_ASSOC);
                echo nl2br($row['algemene_beschrijving']);
                ?>
                <br>
                </br class="titel-info">Ligging & Omgeving<br>
                <br>
                <?php
                $query = "SELECT ligging_omgeving FROM vakanties LIMIT 1";
                $result = $conn->query($query);
                $row = $result->fetch(PDO::FETCH_ASSOC);
                echo nl2br($row['ligging_omgeving']);
                ?>
                <br>
                </br>
                Kamers<br>
                <br>

                faciliteiten

                <?php
                $query = "SELECT kamers FROM vakanties LIMIT 1";
                $result = $conn->query($query);
                $row = $result->fetch(PDO::FETCH_ASSOC);
                echo nl2br($row['kamers']);
                ?>
                <br>
                </br>Faciliteiten<br>
                <br>
                <?php
                $query = "SELECT faciliteiten FROM vakanties LIMIT 1";
                $result = $conn->query($query);
                $row = $result->fetch(PDO::FETCH_ASSOC);
                echo nl2br($row['faciliteiten']);
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