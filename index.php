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
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;1,600&family=Roboto+Condensed&display=swap"
        rel="stylesheet">
</head>

</head>

<body>
    <main class="main">

        <nav>
            <div class="navigatie-first">
                <a href="#">+31 6 234 567 89</a>
                <span class="scheidingslijn"></span>
                <a href="#">contact@domain.com</a>
            </div>
            <div class="navigatie-second">
                    <a href="#">Login</a>
                    <span class="scheidingslijn"></span>
                    <a href="#">Sign Up</a>
                    <span class="scheidingslijn"></span>
                    <a href="#">NL</a>
                    <span class="scheidingslijn"></span>
                    <a href="#">Euro</a>
            </div>
            <nav class="navbar">
                <ul class="navlists">
                    <li class="navlist"><a href="#home">Verblijven</a></li>
                    <li class="navlist"><a href="#restaurants">Vluchten</a></li>
                    <li class="navlist"><a href="#restaurants">Restaurants</a></li>
                    <li class="navlist"><a href="#tours">Popular Destinations</a></li>
                </ul>
            </nav>
            <form onsubmit="event.preventDefault();" role="search">
                <label for="search">Search for stuff</label>
                <input id="search" type="search" placeholder="Search..." autofocus required />
                <button type="submit">Go</button>
            </form>
        </header>
    </main>

</body>