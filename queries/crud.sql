-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Maio-2022 às 23:33
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `student`
--

CREATE TABLE `student` (
  `studentID` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `endi` varchar(100) NOT NULL,
  `imgLoc` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `student`
--

INSERT INTO `student` (`studentID`, `nome`, `cpf`, `endi`, `imgLoc`, `senha`, `telefone`, `email`) VALUES
(1, 'Tom Holland', '50', 'LA', '', '123', '', 'mgsilva39@gmail.com'),
(2, 'Michelle Johns', '25', 'New York', 'img/profile/2.png', '', '', ''),
(3, 'Emma Stone', '30', 'Ohio', 'img/profile/3.png', '', '', ''),
(4, 'Anthony Rogers', '35', 'Manhattan', 'img/profile/4.png', '', '', ''),
(5, 'Sam Barns', '41', 'San Francisco', 'img/profile/5.png', '', '', ''),
(11, 'Tom Hardy', '40', 'London', 'img/profile/cb8d78fb76a6ed8a5dce19fdce43a234.png', '', '', ''),
(12, 'Mateus Gonçalves Silva', '12', 'endre', 'img/profile/38ff1502d1e59abdb161238e6495c69c.png', '', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `student`
--
ALTER TABLE `student`
  MODIFY `studentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
