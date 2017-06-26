-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 26, 2017 alle 11:17
-- Versione del server: 10.1.21-MariaDB
-- Versione PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icomune`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `festepatronali`
--

CREATE TABLE `festepatronali` (
  `idfesta` int(11) NOT NULL,
  `fkcomunepatrono` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `nomesanto` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `giornofesta` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `festepatronali`
--

INSERT INTO `festepatronali` (`idfesta`, `fkcomunepatrono`, `nomesanto`, `giornofesta`) VALUES
(1, 'Acqui Terme', 'San Guido', 'seconda domenica di luglio'),
(2, 'Albera Ligure', 'San Giovanni Battista', '24-giu'),
(3, 'Alessandria', 'San Baudolino', '10-nov'),
(4, 'Alfiano Natta', 'San Marziano', '06-mar'),
(5, 'Alice Bel Colle', 'San Giovanni Battista', '24-giu'),
(6, 'Alluvioni Cambiò', 'San Carlo', '04-nov');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `festepatronali`
--
ALTER TABLE `festepatronali`
  ADD PRIMARY KEY (`idfesta`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `festepatronali`
--
ALTER TABLE `festepatronali`
  MODIFY `idfesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
