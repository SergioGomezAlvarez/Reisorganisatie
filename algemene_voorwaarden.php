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

<body>
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
    <div class="algemene-voorwaarden-text-bg">
        <h1 class="algemene-voorwaarden-text">Dit zijn onze algemene voorwaarden</h1>
    </div>
    <div class="terug-div">
        <a class="terug-button" href="index.php"><i class="fas fa-arrow-left"></i>Terug</a>
    </div>
    <div class="algemene-voorwaarden-container">
        <div class="algemene-voorwaarden-bg">
            <p>Algemene Voorwaarden (AV) van Go Travel voor reisagentschapsdiensten<br></br>
                Standaard: 19 juni 2023<br></br>

                1. Toepasselijkheid<br></br>
                1.1. Algemene voorwaarden van Reiseburö Poot GmbH, verder genoemd 'het reisbureau'.<br></br>
                1.2. Het reisbureau werkt op basis van deze voorwaarden uitsluitend als tussenpersoon bij de bemiddeling
                van reisdiensten, zoals het vervoer (bijvoorbeeld de vlucht), andere toeristische diensten (zoals
                hotelovernachtingen, autohuur, etc.), georganiseerde pakketreizen en overige reisdiensten. Alle
                reisdiensten worden geleverd door exploitanten en andere dienstverleners (zoals touroperators). De
                contractuele relatie met betrekking tot genoemde reisdiensten is rechtstreeks en onmiddellijk tussen de
                reisdeelnemers (de klanten van reisbureaus) en de respectievelijke organisatoren of andere
                dienstverleners. Het reisbureau ontvangt de reisaanvraag of reserveringen van reisdeelnemer/klant en
                bemiddelt bij het afsluiten van de reisovereenkomst met dienstverleners.<br></br>
                1.3. Bij boekingen zijn de contractuele afspraken maatgevend, zoals ze door de reisdeelnemer/klant met
                de organisator of de andere dienstverleners zijn gemaakt, met inbegrip van de (leverings)voorwaarden van
                de organisator of andere dienstverleners. Het reisbureau is contractueel geen partij.<br></br>

                2. Registratie / reservering / reisinformatie<br></br>
                2.1. Bemiddelingsaanvragen of reserveringen kunnen schriftelijk, mondeling, telefonisch of via
                elektronische middelen (per e-mail bijvoorbeeld) worden gedaan. Hierdoor geeft de reisdeelnemer/klant
                opdracht aan het reisbureau te bemiddelen bij een reisovereenkomst tussen hem en de touroperator of
                andere dienstverleners.<br></br>
                2.2. De reiziger is contractueel gebonden aan de aanvraag, reservering of boeking.<br></br>
                2.3. De contractverplichting van het reisbureau is beperkt tot de administratieve bemiddeling van de
                reisdiensten. Het reisbureau wijst iedere aansprakelijkheid of garantie voor het reissucces af, en ook
                met betrekking tot door het reisbureau aan de reiziger verstrekte informatie over de reis is het
                reisbureau niet aansprakelijk.<br></br>

                3. Boekingsbevestiging<br></br>
                3.1. Registraties/boekingen worden door de touroperator of de andere dienstverleners schriftelijk
                bevestigd.<br></br>
                3.2. Reizigers zijn verplicht om onmiddellijk de ontvangen bevestiging te controleren op juistheid en
                volledigheid, en de touroperator of andere dienstverleners op eventuele fouten of afwijkingen te
                wijzen.<br></br>
                3.3. Vliegtickets worden aan de reizigers per post of in de vorm van een elektronisch ticket per e-mail
                geleverd. Bij uitzondering worden de tickets voor de reiziger bij de vliegmaatschappij achtergelaten.
                Een voorwaarde voor levering/achterlaten is dat de reissom volledig betaald is. Boekingen voor
                lijnvluchten kunnen in principe hooguit tot drie dagen voor vertrek in behandeling worden
                genomen.<br></br>
                3.4. Bij pakketreizen ontvangt de reiziger de reisstukken per post of op het vliegveld, bij de balie van
                de luchtvaartmaatschappij. De instructies op de boekingsbevestiging bevatten hierover meer
                informatie.<br></br>

                4. Aansprakelijkheid van de reisbureaus<br></br>
                4.1. Informatie over reisdiensten is gebaseerd op informatie van de touroperators of andere
                dienstverleners. Het reisbureau geeft geen eigen beloftes of garanties voor de juistheid, volledigheid
                of actualiteit van de aan de reiziger verstrekte informatie.<br></br>
                4.2. Het reisbureau is alleen aansprakelijk voor de schade die wordt veroorzaakt bij opzet of grove
                nalatigheid. Deze beperking van aansprakelijkheid geldt niet voor schade aan leven, lichaam, gezondheid
                of essentiële contractuele verplichtingen.<br></br>

                5. Wijzigingen / annulering<br></br>
                5.1. De reiziger kan op elk moment de overeenkomst opzeggen. De touroperator kan in dat geval een
                passende schadevergoeding berekenen. Het bedrag van de vergoeding wordt bepaald door de prijs van de
                reis na aftrek van de waarde van de door de touroperator als gevolg van de annulering niet geleverde
                diensten, eventueel verrekend met andere van de touroperator ontvangen diensten.<br></br>
                5.2. Bij opzegging voor vertrek kan de touroperator een percentage van de reissom verlangen, met
                inachtneming van de gebruikelijk bespaarde service en eventuele andere afgenomen diensten. De wijze
                waarop de hoogte van de annuleringskosten worden vastgesteld, is opgenomen in de reisvoorwaarden van de
                betreffende touroperator. De reiziger kan met bewijzen of argumenten aantonen dat geen schade of
                waardevermindering heeft plaatsgevonden, ofwel wezenlijk lager dan het gevorderde bedrag.<br></br>
                5.3. Tot aan het begin van de reis kan de reiziger verlangen dat een derde de rechten en plichten van de
                reisovereenkomst op zich neemt. De touroperator kan in het contract bezwaar maken tegen de komst van de
                derde partij, indien deze niet voldoet aan de reiseisen of indien wettelijke voorschriften of
                toepasselijke regelgeving zijn deelname in de weg staat. Als een derde partij tot het contract
                toetreedt, dan zijn hij en de reiziger samen aansprakelijk voor de reissom en eventuele extra kosten als
                gevolg van deze toetreding.<br></br>
                5.4. Het reisbureau adviseert de reiziger een annuleringsverzekering af te sluiten.<br></br>
                5.5. Bij annulering van vliegreizen nadat het ticket is uitgegeven, worden in principe annuleringskosten
                van 150 EURO per ticket in rekening gebracht. Mochten bijzondere tarieven gelden dan kunnen deze kosten
                hoger zijn. Als elk ander gebruik van de vlucht niet mogelijk is dan kunnen de annuleringskosten oplopen
                tot 100% van de ticketprijs.<br></br>
                5.6. Bij annulering van vliegreizen met speciale vluchten en chartervluchten wordt een vergoeding
                berekend in de vorm van een percentage van de reissom, waarbij de resterende tijd tot de vertrekdatum
                van belang is. De wijze van vaststelling van de hoogte is te vinden in de reisvoorwaarden van de
                betreffende touroperator.<br></br>
                5.7. Touroperators kunnen contractuele diensten wijzigen of hiervan afwijken, indien de wijziging of
                afwijking redelijk is, rekening houdend met de belangen van de deelnemer. Redelijkheid wordt altijd
                aangenomen als de reden voor de wijziging het gevolg is van omstandigheden die door de reisorganisator
                niet kunnen worden beïnvloed, zoals natuurrampen, oorlog of militaire conflicten, stakingen,
                terreuraanslagen, ziekte, politieke, economische en andere gebeurtenissen, die een reis ter discussie
                stellen. Onder onmiddellijke mededeling van het niet beschikbaar zijn van de dienst, kan het reisbureau
                zich ontdoen van de inspannings- en leveringsverplichting. Reeds gedane betalingen dienen te worden
                terugbetaald. Voor het overige geldt § 651 BGB j. <br></br>

                6. Opmerkingen bij bijzondere bestemmingen<br></br>
                6.1. Voor informatie over het paspoort, visum, immigratie- en gezondheidsvoorschriften, wordt in
                principe de nationale of internationale wet- en regelgeving gevolgd. Tenzij er een andere schriftelijke
                verklaring is, gaat het reisbureau ervan uit dat de reiziger een Duits staatsburger is. Het reisbureau
                is afhankelijk van de informatie van derden (organisatoren en dienstverleners). Het reisbureau geeft wat
                dat betreft geen enkele verzekering of garantie met betrekking tot de juistheid, volledigheid of
                actualiteit van dergelijke informatie. Reisbureaus zijn niet aansprakelijk, tenzij in geval van opzet of
                grove nalatigheid. Reizigers wordt aangeraden om informatie in te winnen over de wettelijke bepalingen
                van het land van bestemming en te anticiperen op mogelijke wijzigende omstandigheden.<br></br>
                6.2. Bij vliegreizen informeert het reisbureau, in haar functie van reisbemiddelaar, de reizigers over
                de identiteit van de exploiterende luchtvaartmaatschappij.<br></br>
                6.3. Het bureau heeft geen aparte verklarings- of doorverwijzingsplicht voor wettige of andere
                reisvoorwaarden/reisomstandigheden die betrekking hebben op het land van bestemming of andere
                reisomstandigheden.<br></br>

                7. Betalingen<br></br>
                7.1. In het geval van pakketreizen zijn de betalingen verschuldigd vanaf het moment dat het
                garantiecertificaat van de touroperator voor de reiziger ingaat. Betalingen dienen ten laatste vóór het
                vertrek, bij het leveren van de reisdocumenten te zijn voldaan. Aanbetalingen zijn verschuldigd volgens
                de data zoals aangegeven op de boekingsbevestiging.<br></br>
                7.2. Voor diensten waarvoor geen garantiecertificaat is vereist, is de betaling van de reissom en
                boeking verschuldigd uiterlijk voor de start van de reis, bij het overhandigen van de
                reisdocumenten.<br></br>
                7.3. Betalingen kunnen plaatsvinden via:
                * Incasso
                * Creditcard
                * Overschrijving
                * Contante betaling bij het reisbureau<br></br>
                7.4. Bij afwijkende betalingsvoorwaarden is de informatie van de reisorganisator bepalend. Met
                toestemming van de reiziger kunnen betalingen via creditcard of automatische incasso
                plaatsvinden.<br></br>
                7.5. Annulerings-, verwerkings- en omboekingskosten moeten onmiddellijk betaald worden.<br></br>
                7.6. Het reisbureau voldoet aan de verplichtingen die van hem verwacht worden krachtens de het contract
                rond het verstrekken van reisdocumenten, zoals tickets en vouchers. Dit alles in de kantoren van het
                reisbureau. Als documenten door het reisbureau aan reizigers worden opgestuurd, dragen de reiziger het
                risico vanaf het moment van verzending of overdracht aan een tussenpersoon.<br></br></p>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/017f40d907.js" crossorigin="anonymous"></script>
</body>