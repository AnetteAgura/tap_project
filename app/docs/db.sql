-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Loomise aeg: Mai 10, 2021 kell 08:56 EL
-- Serveri versioon: 10.4.18-MariaDB
-- PHP versioon: 7.4.16

SET
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET
time_zone = "+00:00";

--
-- Andmebaas: `kpr`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `partners`
--

DROP TABLE IF EXISTS `partners`;
CREATE TABLE IF NOT EXISTS `partners`
(
    `id` int
(
    11
) UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` varchar
(
    50
) NOT NULL,
    `reg_nr` int
(
    11
) NOT NULL,
    `email` varchar
(
    50
) NOT NULL,
    `phone` int
(
    11
) NOT NULL,
    `activity` varchar
(
    100
) NOT NULL,
    `activity_details` varchar
(
    100
) NOT NULL,
    `location` varchar
(
    50
) NOT NULL,
    PRIMARY KEY
(
    `id`
)
    ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Andmete tõmmistamine tabelile `partners`
--

INSERT INTO `partners` (`id`, `name`, `reg_nr`, `email`, `phone`, `activity`, `activity_details`, `location`)
VALUES (1, 'Mark Otto', 12345, 'mark@otto.com', 1234567, 'Seinad', 'Kipsseinad', 'Üle Eesti'),
       (2, 'Mark Otto', 12345, 'mark@otto.com', 1234567, 'Seinad', 'Puitseinad', 'Üle Eesti'),
       (3, 'Margaret Hamilton', 12345, 'info@hamilton.com', 1234567, 'Aknad', 'Plastaknad', 'Tartumaa'),
       (4, 'John Klark', 12345, 'john@klark.com', 1234567, 'Aknad', 'Puitaknad', 'Võrumaa');
COMMIT;