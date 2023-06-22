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
        <div class="contact-info">
            <h1>Contactgegevens</h1>
            <h2>Bedrijfsnaam</h2>
            <p>Adres: Straatnaam 123, Plaats</p>
            <p>Telefoon: 123-456789</p>
            <p>E-mail: info@bedrijf.com</p>
        </div>

        <div class="contact-form">
            <h1>Contactformulier</h1>
            <form action="Contactverwerking.php" method="POST">
                <label for="name">Naam:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">E-mailadres:</label>
                <input type="email" id="email" name="email" required>

                <label for="subject">Onderwerp:</label>
                <input type="text" id="subject" name="subject" required>

                <label for="message">Bericht:</label>
                <textarea id="message" name="message" required></textarea>

                <input type="submit" value="Verstuur">
            </form>
        </div>
    </div>




 
    
</body>

</html>