-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Mar-2024 às 18:53
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(90) NOT NULL,
  `description` text NOT NULL,
  `color` varchar(10) NOT NULL,
  `start` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `end` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `color`, `start`, `end`) VALUES
(5, 'Vanessa Paz', 'Dor no joelho', 'blue', '2024-03-05 14:00:00', '2024-03-05 16:00:00'),
(6, 'Maria ', 'Dor nas costas', 'blue', '2024-03-04 16:30:00', '2024-03-04 17:30:00'),
(9, 'Teste 2', 'dor na orelha', 'blue', '2024-03-06 09:30:00', '2024-03-06 10:30:00'),
(10, 'férias', '', 'pink', '2024-04-08 06:00:00', '2024-04-17 06:00:00'),
(11, 'segundo', '', 'pink', '2024-04-23 06:00:00', '2024-04-24 06:00:00'),
(12, 'fdsgfsdgf', '', 'pink', '2024-04-21 06:00:00', '2024-04-28 06:00:00'),
(13, 'sdasdsad', '', 'pink', '2024-03-11 06:00:00', '2024-03-13 06:00:00'),
(14, 'sadasdas', '', 'pink', '2024-05-01 06:00:00', '2024-05-02 06:00:00'),
(15, 'dfsdfsdfs', '', 'pink', '2024-03-18 06:00:00', '2024-03-18 06:00:00'),
(16, 'gdfgd', '', 'pink', '2024-03-19 06:00:00', '2024-03-19 06:00:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
