-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/05/2025 às 22:35
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_filmes`
--
CREATE DATABASE IF NOT EXISTS `bd_filmes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `bd_filmes`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_filme`
--

CREATE TABLE `tb_filme` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qtd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `tb_filme`
--

INSERT INTO `tb_filme` (`id`, `name`, `price`, `qtd`) VALUES
(7, 'Pacific Rim', 25.55, 1),
(8, 'Maze Runner Corre ou Morrer', 13.27, 3),
(9, 'Harry Potter e o Calice de Fogo', 12.88, 2),
(10, 'SpeedRacer', 13.10, 2),
(11, 'Pequeno Principe', 9.62, 3),
(12, 'Como Treinar seu Dragao', 11.99, 2),
(13, 'Como Treinar seu Dragao 2', 10.01, 3),
(14, 'Harry Potter e a Pedra Filosofal', 9.25, 4);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_filme`
--
ALTER TABLE `tb_filme`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_filme`
--
ALTER TABLE `tb_filme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
