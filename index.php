<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
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
                <a href="bestemming-index/frankrijk.php">+31 6 234 567 89</a>
                <span class="scheidingslijn"></span>
                <a href="test.html">contact@domain.com</a>
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
                <div class="parent" id="parent">

                    <input class="input" id="input" type="type" placeholder="Search..." />
                    <button class="btn" id="button">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>

                </div>
                <div class="mijn-reservring-box"><a class="mijn-reservering-text" href="">Mijn reservering</a></div>
            </div>
        </div>
        <div class="top-text-bg">
            <h1 class="top-text1">
                LATEN WE BEGINNEN
            </h1>
            <h1 class="top-text2">
                WE HELPEN U OM DE BESTE REIS TE KIEZEN
            </h1>
        </div>
        <div class="zoek-reis-big-div">
            <div class="zoek-reis-div">
                <div class="bestemming">
                    <p>Bestemming</p>
                    <input type="text" placeholder="Waar wil je naar toe?">
                    <span>Waar wil je naar toe?</span>
                </div>
                <div class="reisdatum">
                    <p>Reisdatum</p>
                    <input type="date" value="2023-05-03">
                </div>
                <div class="retourdatum">
                    <p>Retourdatum</p>
                    <input type="date" value="2023-05-03">
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
    </header>
    <main>
        <div class="main-container">
            <section class="bestemmingen">
                <div class="bestemmingen-container">
                    <h2 class="section-title"><a href="" class="section-title">Populaire bestemmingen</a></h2>
                </div>
            </section>
            <div class="locatie-container radio-btns">
                <div class="destination-card radio-btns__btn">
                    <img class="bestemmingen-imgs" src="img/bestemmingen-1.avif" alt="" width="200" height="181">
                    <h5>Big sur</h5>
                    <h6>Califonia USA</h6>
                </div>
                <div class="destination-card radio-btns__btn">
                    <img class="bestemmingen-imgs" src="img/bestemmingen-1.avif" alt="" width="200" height="181">
                    <h5>Big sur</h5>
                    <h6>Califonia USA</h6>
                </div>
                <div class="destination-card radio-btns__btn">
                    <img class="bestemmingen-imgs" src="img/bestemmingen-1.avif" alt="" width="200" height="181">
                    <a href="">
                        <h5>Big sur</h5>
                    </a>
                    <h6>Califonia USA</h6>
                </div>
                <div class="destination-card radio-btns__btn">
                    <img class="bestemmingen-imgs" src="img/bestemmingen-1.avif" alt="" width="200" height="181">
                    <h5>Big sur</h5>
                    <h6>Califonia USA</h6>
                </div>
                <div class="destination-card radio-btns__btn">
                    <img class="bestemmingen-imgs" src="img/bestemmingen-1.avif" alt="" width="200" height="181">
                    <h5>Big sur</h5>
                    <h6>Califonia USA</h6>
                </div>
                <div class="destination-card radio-btns__btn">
                    <img class="bestemmingen-imgs" src="img/bestemmingen-1.avif" alt="" width="200" height="181">
                    <h5>Big sur</h5>
                    <h6>Califonia USA</h6>
                </div>
            </div>
            <section class="bestemmingen">
                <div class="bestemmingen-container">
                    <h2 class="section-title">Hotels en Restaurants</h2>
                </div>
            </section>
            <div class="horeca-container">
                <div class="hotel-card radio-btns">
                    <div class="hotel-cards radio-btns__btn ">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                            alt="" class="hoetels-imgs">
                        <h5>Monastero Santa Rosa Hotel & Spa</h5>
                        <h6><img src="/Imgs/icons/map-pin-line.png" alt=""> Salerno, Italy</h6>
                    </div>
                    <div class="hotel-cards radio-btns__btn">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                            alt="" class="hoetels-imgs">
                        <h5>Monastero Santa Rosa Hotel & Spa</h5>
                        <h6><img src="/Imgs/icons/map-pin-line.png" alt=""> Salerno, Italy</h6>
                    </div>
                    <div class="hotel-cards radio-btns__btn">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                            alt="" class="hoetels-imgs">
                        <h5>Monastero Santa Rosa Hotel & Spa</h5>
                        <h6><img src="/Imgs/icons/map-pin-line.png" alt=""> Salerno, Italy</h6>
                    </div>
                    <div class="hotel-cards radio-btns__btn">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                            alt="" class="hoetels-imgs">
                        <h5>Monastero Santa Rosa Hotel & Spa</h5>
                        <h6><img src="/Imgs/icons/map-pin-line.png" alt=""> Salerno, Italy</h6>
                    </div>
                </div>
            </div>
            <div class="about-us-container">
                <div class="about-us-text">
                    <h1 class="about-us-title">
                        About Us
                    </h1>
                    <br></br>
                    <p class="about-us-story">
                        At Go Travel, we're passionate about making your travel experiences unforgettable.<br></br>
                        Whether you're planning a weekend getaway, or a family vacation.<br></br> We're here to simplify
                        the booking process and help you discover the perfect accommodations, flights, and activities
                        tailored to your needs.
                    </p>
                </div>
                <img class="about-us-image" src="img/about-us.png">

            </div>
        </div>
        </div>

    </main>
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