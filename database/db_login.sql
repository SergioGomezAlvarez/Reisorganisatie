-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 11:01 AM
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
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mem_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `firstname`, `lastname`, `username`, `password`) VALUES
(14, 'O.', 'Almohamad khalil', 'SuperAdmin', 'SuperAdmin'),
(15, 'O.', 'Almohamad khalil', 'ff', 'ff');

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
  `titel` varchar(255) DEFAULT NULL,
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
  `kortetitel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vakanties`
--

INSERT INTO `vakanties` (`id`, `titel`, `korte_omschrijving`, `algemene_beschrijving`, `ligging_omgeving`, `kamers`, `faciliteiten`, `img1`, `img2`, `img3`, `img4`, `img5`, `kortetitel`) VALUES
(1, 'Parijs', 'Parijs, de \"Stad van de Liefde\" en de thuisbasis van\niconische bezienswaardigheden zoals de Eiffeltoren, het Louvre en de Notre-Dame. Het\nbiedt ook heerlijk eten, prachtige architectuur en een romantische sfeer.\n\n\n\n\nVlucht suggestie: KLM, een van de beste                                  luchtvaartmaatschappijen ter wereld, met een uitstekende service en een breed scala\naan bestemmingen.\n', 'Hotel Le Meurice is een elegant vijfsterrenhotel gelegen in het hart van Parijs. Het hotel biedt een luxueuze en verfijnde sfeer, met prachtig ingerichte kamers en uitstekende faciliteiten. Of je nu een stedentrip maakt of een romantisch uitje plant, Hotel Le Meurice biedt de perfecte setting voor een onvergetelijk verblijf.', 'Gelegen aan de prestigieuze Rue de Rivoli, tegenover de prachtige Tuileries-tuinen en op steenworp afstand van het Louvre, geniet Hotel Le Meurice van een ongeëvenaarde locatie. Vanuit het hotel heb je gemakkelijk toegang tot de belangrijkste bezienswaardigheden van Parijs, waaronder de Champs-Élysées, de Eiffeltoren en de Notre-Dame. Daarnaast bevinden zich in de nabije omgeving exclusieve boetieks, restaurants en theaters, waardoor je kunt genieten van het beste wat Parijs te bieden heeft.', 'Hotel Le Meurice beschikt over stijlvolle en ruime kamers, prachtig ingericht met aandacht voor detail. Elke kamer is voorzien van moderne voorzieningen, zoals een flatscreen-tv, minibar, airconditioning, verwarming, telefoon, gratis WiFi en een luxueuze badkamer met badjassen, slippers en hoogwaardige toiletartikelen. Vanuit de kamers heb je vaak een adembenemend uitzicht op de stad Parijs.', 'Hotel Le Meurice biedt een scala aan uitstekende faciliteiten om je verblijf zo comfortabel mogelijk te maken. Begin je dag met een heerlijk ontbijt in het elegante restaurant van het hotel, waar je kunt genieten van een uitgebreid buffet. Voor een culinaire ervaring van wereldklasse kun je terecht in het met drie Michelin-sterren bekroonde restaurant van het hotel, waar gerechten worden bereid door een bekroonde chef-kok.\n\n\nNa een dag verkennen van de stad kun je ontspannen in de prachtige spa van het hotel, compleet met een binnenzwembad, sauna, stoombad en een scala aan verkwikkende behandelingen. Hotel Le Meurice beschikt ook over goed uitgeruste fitnessfaciliteiten voor degenen die hun trainingsroutine willen behouden tijdens hun verblijf.', 'Frankijk-parijs-1.2.jpg', NULL, NULL, NULL, NULL, 'frankrijk'),
(5, 'Italy', '\r\n\r\n', 'Het Grand Hotel Excelsior is een prachtig vijfsterrenhotel gelegen in het hart van Rome. Het hotel biedt een weelderige en verfijnde sfeer, met elegant ingerichte kamers en uitstekende faciliteiten. Of je nu de historische bezienswaardigheden van Rome wilt verkennen of gewoon wilt ontspannen en genieten van de Italiaanse gastvrijheid, het Grand Hotel Excelsior biedt de perfecte setting voor een onvergetelijk verblijf.\r\n', 'Gelegen aan de prachtige Via Veneto, op korte afstand van de beroemde Trevifontein en het prachtige Borghese-park, geniet het Grand Hotel Excelsior van een uitstekende locatie. Vanuit het hotel heb je gemakkelijk toegang tot de belangrijkste bezienswaardigheden van Rome, waaronder het Colosseum, het Pantheon en de Vaticaanse Musea. Bovendien zijn er in de nabije omgeving exclusieve winkels, restaurants en cafés, waardoor je kunt genieten van het beste van de Italiaanse levensstijl.', 'Het Grand Hotel Excelsior biedt stijlvolle en ruime kamers, prachtig ingericht met oog voor detail. Elke kamer is uitgerust met moderne voorzieningen, zoals een flatscreen-tv, minibar, airconditioning, verwarming, telefoon, gratis WiFi en een luxe badkamer met badjassen, slippers en hoogwaardige toiletartikelen. Vanuit de kamers heb je vaak een prachtig uitzicht over de stad Rome.\r\n\r\n', 'Het Grand Hotel Excelsior biedt een breed scala aan uitstekende faciliteiten om je verblijf zo comfortabel mogelijk te maken. Begin je dag met een heerlijk ontbijt in het elegante restaurant van het hotel, waar je kunt genieten van een uitgebreid buffet met verse Italiaanse specialiteiten. Voor een culinaire ervaring op topniveau kun je terecht in het bekroonde restaurant van het hotel, waar gerechten worden bereid door getalenteerde chef-koks.\r\n\r\nNa een dag vol ontdekkingen in de stad kun je ontspannen in de prachtige spa van het hotel, compleet met een binnenzwembad, sauna, stoombad en een scala aan verkwikkende behandelingen. Het Grand Hotel Excelsior beschikt ook over goed uitgeruste fitnessfaciliteiten voor degenen die tijdens hun verblijf hun trainingsroutine willen behouden.\r\n\r\nKortom, het Grand Hotel Excelsior in Rome biedt een luxueuze en gastvrije omgeving waar je kunt genieten van alle prachtige aspecten die de stad te bieden heeft.\r\n\r\n\r\n\r\n\r\n', 'rome.jpg', NULL, NULL, NULL, NULL, 'Rome');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`);

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
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `vakanties`
--
ALTER TABLE `vakanties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
