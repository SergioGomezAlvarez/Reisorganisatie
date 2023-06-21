-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 05:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `boekingen`
--

CREATE TABLE `boekingen` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `vakantie_id` int(11) NOT NULL,
  `boekingsdatum` timestamp NOT NULL DEFAULT current_timestamp(),
  `memberid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `boekingen`
--

INSERT INTO `boekingen` (`id`, `naam`, `email`, `vakantie_id`, `boekingsdatum`, `memberid`) VALUES
(1, 'Rome', 'a.asamaklil@gmail.com', 5, '0000-00-00 00:00:00', 14),
(4, 'SuperAdmin', '', 1, '2023-06-18 22:00:00', 0),
(5, 'SuperAdmin', '', 1, '2023-06-18 22:00:00', 0),
(6, 'Melvin', '', 1, '2023-06-18 22:00:00', 0),
(7, 'SuperAdmin', '', 6, '2023-06-18 22:00:00', 0),
(8, 'SuperAdmin', '', 5, '2023-06-20 22:00:00', 0),
(9, 'kankerbot', '', 6, '2023-06-20 22:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contactformulier`
--

CREATE TABLE `contactformulier` (
  `naam` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `onderwerp` varchar(255) DEFAULT NULL,
  `bericht` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactformulier`
--

INSERT INTO `contactformulier` (`naam`, `email`, `onderwerp`, `bericht`) VALUES
('osama', 'asama@gmail.com', 'vakanties naar rome', 'ik heb betaald maar ik had geen bevestiging'),
('O. Almohamad khalil', 'a.asamaklil500@gmail.com', 'test', 'test'),
('O. Almohamad khalil', 'a.asamaklil500@gmail.com', 'test', 'test'),
('O. Almohamad khalil', 'a.asamaklil500@gmail.com', 'test2', 'TEst2'),
('O. Almohamad khalil', 'a.asamaklil500@gmail.com', 'sadas', 'dsadasd'),
('tom', 'a.asamaklil500@gmail.com', 'test', 'asxcsdc das');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `firstname`, `lastname`, `username`, `password`) VALUES
(0, 'tom', 'van rossum', 'tom', '12345'),
(14, 'Osama', 'Almohamad khalil', 'SuperAdmin', 'SuperAdmin'),
(15, 'melvin', 'Almohamad khalil', 'testbijiwerken', 'testbijiwerk'),
(16, 'Melvin', 'Jaafar', 'Melvin', 'Melvin'),
(17, 'O.', 'Almohamad khalil', 'niks', 'osama');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `naam` text DEFAULT NULL,
  `bijschrijving` text DEFAULT NULL,
  `prijs` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `naam`, `bijschrijving`, `prijs`) VALUES
(41, 'Souvlaki pita', 'Lekker ', 77),
(42, 'Bifteki pita', 'Griekse hamburger in een pita broodje met tomaat, ui, tzatziki en frietjes ', 8),
(43, 'Vegetarische pita', 'Verse groenten in een pita broodje met tzatziki en frietjes ', 6),
(44, 'Griekse salade', 'Feta kaas, olijven, tomaat, ui, komkommer, paprika en dressing ', 7),
(45, 'Tzatziki', 'Griekse yoghurt dip met knoflook en komkommer ', 2),
(46, 'Feta saganaki', 'Gebakken fetakaas in een licht beslag met honing en sesamzaadjes ', 6),
(47, 'Dolmades', 'Gevulde wijnbladeren met rijst, peterselie en citroensap ', 5),
(48, 'Spanakopita', 'Bladerdeeg gevuld met spinazie, feta kaas en kruiden ', 5),
(49, 'Baklava', 'Zoet gebak van filodeeg, noten en honing ', 3),
(50, 'Moussaka ', 'Gegrilde aubergines, aardappels en gehakt, bedekt met een bechamelsaus ', 12),
(51, 'Bifteki schotel ', 'Twee gehaktballen van rundvlees, salade, rijst en tzatziki ', 13),
(52, 'Souvlaki schotel', 'Twee spiesen van gegrilde varkensvlees, rijst, salade en tzatziki ', 13),
(53, 'Baklava ', 'Laagjes filodeeg gevuld met gehakte noten en honing ', 4);

-- --------------------------------------------------------

--
-- Table structure for table `vakanties`
--

CREATE TABLE `vakanties` (
  `id` int(11) NOT NULL,
  `vakantie` varchar(50) DEFAULT NULL,
  `korte_omschrijving` text DEFAULT NULL,
  `algemene_beschrijving` text DEFAULT NULL,
  `ligging_omgeving` text DEFAULT NULL,
  `kamers` text DEFAULT NULL,
  `faciliteiten` text DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `img4` varchar(255) DEFAULT NULL,
  `img5` varchar(255) DEFAULT NULL,
  `kortetitel` varchar(255) DEFAULT NULL,
  `begin_datum` date DEFAULT NULL,
  `eind_datum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vakanties`
--

INSERT INTO `vakanties` (`id`, `vakantie`, `korte_omschrijving`, `algemene_beschrijving`, `ligging_omgeving`, `kamers`, `faciliteiten`, `img1`, `img2`, `img3`, `img4`, `img5`, `kortetitel`, `begin_datum`, `eind_datum`) VALUES
(1, 'Parijs', 'Parijs, de \"Stad van de Liefde\" en de thuisbasis van\niconische bezienswaardigheden zoals de Eiffeltoren, het Louvre en de Notre-Dame. Het\nbiedt ook heerlijk eten, prachtige architectuur en een romantische sfeer.\n\n\n\n\nVlucht suggestie: KLM, een van de beste                                  luchtvaartmaatschappijen ter wereld, met een uitstekende service en een breed scala\naan bestemmingen.\n', 'Hotel Le Meurice is een elegant vijfsterrenhotel gelegen in het hart van Parijs. Het hotel biedt een luxueuze en verfijnde sfeer, met prachtig ingerichte kamers en uitstekende faciliteiten. Of je nu een stedentrip maakt of een romantisch uitje plant, Hotel Le Meurice biedt de perfecte setting voor een onvergetelijk verblijf.', 'Gelegen aan de prestigieuze Rue de Rivoli, tegenover de prachtige Tuileries-tuinen en op steenworp afstand van het Louvre, geniet Hotel Le Meurice van een ongeëvenaarde locatie. Vanuit het hotel heb je gemakkelijk toegang tot de belangrijkste bezienswaardigheden van Parijs, waaronder de Champs-Élysées, de Eiffeltoren en de Notre-Dame. Daarnaast bevinden zich in de nabije omgeving exclusieve boetieks, restaurants en theaters, waardoor je kunt genieten van het beste wat Parijs te bieden heeft.', 'Hotel Le Meurice beschikt over stijlvolle en ruime kamers, prachtig ingericht met aandacht voor detail. Elke kamer is voorzien van moderne voorzieningen, zoals een flatscreen-tv, minibar, airconditioning, verwarming, telefoon, gratis WiFi en een luxueuze badkamer met badjassen, slippers en hoogwaardige toiletartikelen. Vanuit de kamers heb je vaak een adembenemend uitzicht op de stad Parijs.', 'Hotel Le Meurice biedt een scala aan uitstekende faciliteiten om je verblijf zo comfortabel mogelijk te maken. Begin je dag met een heerlijk ontbijt in het elegante restaurant van het hotel, waar je kunt genieten van een uitgebreid buffet. Voor een culinaire ervaring van wereldklasse kun je terecht in het met drie Michelin-sterren bekroonde restaurant van het hotel, waar gerechten worden bereid door een bekroonde chef-kok.\n\n\nNa een dag verkennen van de stad kun je ontspannen in de prachtige spa van het hotel, compleet met een binnenzwembad, sauna, stoombad en een scala aan verkwikkende behandelingen. Hotel Le Meurice beschikt ook over goed uitgeruste fitnessfaciliteiten voor degenen die hun trainingsroutine willen behouden tijdens hun verblijf.', 'Frankijk-parijs-1.2.jpg', 'img/Frankijk-parijs-1.2.jpg', 'img/frankrijk-paris2.jpg', 'img/hoetl-frankrijk.jpg', 'img/LeJulesVerne2.jpg', 'frankrijk', '2023-06-20', '2023-06-30'),
(5, 'Italy', 'Rome, de eeuwige stad, betovert met zijn historische pracht. Verken het Colosseum, gooi een muntje in de Trevifontein, bewonder de majestueuze Sint-Pietersbasiliek en wandel door de oude straatjes van de wijk Trastevere. Geniet van heerlijke Italiaanse gerechten, proef gelato en laat je betoveren door de rijke cultuur en het levendige straatbeeld. Rome is een tijdloze bestemming die je zal verrassen en inspireren.\r\n\r\n', 'Het Grand Hotel Excelsior is een prachtig vijfsterrenhotel gelegen in het hart van Rome. Het hotel biedt een weelderige en verfijnde sfeer, met elegant ingerichte kamers en uitstekende faciliteiten. Of je nu de historische bezienswaardigheden van Rome wilt verkennen of gewoon wilt ontspannen en genieten van de Italiaanse gastvrijheid, het Grand Hotel Excelsior biedt de perfecte setting voor een onvergetelijk verblijf.\r\n', 'Gelegen aan de prachtige Via Veneto, op korte afstand van de beroemde Trevifontein en het prachtige Borghese-park, geniet het Grand Hotel Excelsior van een uitstekende locatie. Vanuit het hotel heb je gemakkelijk toegang tot de belangrijkste bezienswaardigheden van Rome, waaronder het Colosseum, het Pantheon en de Vaticaanse Musea. Bovendien zijn er in de nabije omgeving exclusieve winkels, restaurants en cafés, waardoor je kunt genieten van het beste van de Italiaanse levensstijl.', 'Het Grand Hotel Excelsior biedt stijlvolle en ruime kamers, prachtig ingericht met oog voor detail. Elke kamer is uitgerust met moderne voorzieningen, zoals een flatscreen-tv, minibar, airconditioning, verwarming, telefoon, gratis WiFi en een luxe badkamer met badjassen, slippers en hoogwaardige toiletartikelen. Vanuit de kamers heb je vaak een prachtig uitzicht over de stad Rome.\r\n\r\n', 'Het Grand Hotel Excelsior biedt een breed scala aan uitstekende faciliteiten om je verblijf zo comfortabel mogelijk te maken. Begin je dag met een heerlijk ontbijt in het elegante restaurant van het hotel, waar je kunt genieten van een uitgebreid buffet met verse Italiaanse specialiteiten. Voor een culinaire ervaring op topniveau kun je terecht in het bekroonde restaurant van het hotel, waar gerechten worden bereid door getalenteerde chef-koks.\r\n\r\nNa een dag vol ontdekkingen in de stad kun je ontspannen in de prachtige spa van het hotel, compleet met een binnenzwembad, sauna, stoombad en een scala aan verkwikkende behandelingen. Het Grand Hotel Excelsior beschikt ook over goed uitgeruste fitnessfaciliteiten voor degenen die tijdens hun verblijf hun trainingsroutine willen behouden.\r\n\r\nKortom, het Grand Hotel Excelsior in Rome biedt een luxueuze en gastvrije omgeving waar je kunt genieten van alle prachtige aspecten die de stad te bieden heeft.\r\n\r\n\r\n\r\n\r\n', 'rome.jpg', 'rome.jpg', NULL, NULL, NULL, 'Rome', '2023-06-26', '2023-07-09'),
(6, 'Spanje', 'Spanje, een land vol zon, passie en diversiteit. Met prachtige stranden, historische steden, levendige festivals en heerlijke gastronomie is Spanje een paradijs voor reizigers. Ontdek de bruisende steden zoals Barcelona en Madrid, verken de betoverende Andalusische dorpjes, geniet van tapas en flamenco, en laat je betoveren door de rijke geschiedenis en adembenemende landschappen. Spanje verwelkomt je met open armen voor een onvergetelijke ervaring.', 'Het ME Barcelona is een modern en stijlvol vijfsterrenhotel gelegen in het bruisende hart van Barcelona. Het hotel biedt een eigentijdse en verfijnde sfeer, met strak ingerichte kamers en uitstekende faciliteiten. Of je nu de levendige cultuur van Barcelona wilt ervaren of wilt ontspannen aan het strand, het ME Barcelona biedt de perfecte setting voor een onvergetelijk verblijf.', 'Gelegen in de trendy wijk El Poblenou, op korte afstand van het prachtige Bogatell-strand en op loopafstand van de beroemde Sagrada Família, geniet het ME Barcelona van een uitstekende locatie. Vanuit het hotel heb je gemakkelijk toegang tot de belangrijkste bezienswaardigheden van Barcelona, zoals de gotische wijk, Park Güell en de levendige Las Ramblas. Bovendien bevinden zich in de nabije omgeving hippe restaurants, bars en winkels, waardoor je kunt genieten van de levendige sfeer van de stad.', 'Het ME Barcelona biedt moderne en comfortabele kamers, ingericht met strakke lijnen en hedendaags design. Elke kamer is voorzien van moderne voorzieningen, zoals een flatscreen-tv, minibar, airconditioning, verwarming, telefoon, gratis WiFi en een luxe badkamer met badjassen, slippers en hoogwaardige toiletartikelen. Sommige kamers bieden een prachtig uitzicht over de stad Barcelona.\r\n\r\n', 'Het ME Barcelona biedt een scala aan uitstekende faciliteiten om je verblijf zo comfortabel mogelijk te maken. Begin je dag met een uitgebreid ontbijt in het trendy restaurant van het hotel, waar je kunt genieten van heerlijke gerechten en een prachtig uitzicht over de stad. Voor een verfrissende cocktail kun je terecht in de trendy bar op het dak, waar je kunt genieten van een panoramisch uitzicht over Barcelona.\r\n\r\nOntspan en verwen jezelf in de spa van het hotel, compleet met een verwarmd binnenzwembad, sauna, stoombad en een scala aan verkwikkende behandelingen. Het ME Barcelona beschikt ook over een goed uitgeruste fitnessruimte, zodat je tijdens je verblijf fit kunt blijven.\r\n\r\nKortom, het ME Barcelona biedt een eigentijdse en luxe omgeving waar je kunt genieten van de bruisende sfeer en de rijke cultuur van Barcelona.', 'barcelona.png', NULL, NULL, NULL, NULL, 'Barcelona', '2023-06-29', '2023-07-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boekingen`
--
ALTER TABLE `boekingen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vakantie_id` (`vakantie_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vakanties`
--
ALTER TABLE `vakanties`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boekingen`
--
ALTER TABLE `boekingen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `vakanties`
--
ALTER TABLE `vakanties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `boekingen`
--
ALTER TABLE `boekingen`
  ADD CONSTRAINT `boekingen_ibfk_1` FOREIGN KEY (`vakantie_id`) REFERENCES `vakanties` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
