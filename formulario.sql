-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Abr-2020 às 22:17
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `formulario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `NOME` varchar(255) DEFAULT NULL,
  `IDADE` int(2) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `USERNAME` varchar(255) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`NOME`, `IDADE`, `EMAIL`, `USERNAME`, `ID`) VALUES
('Marcelo Pereira Antonio ', 22, 'marcelotr@hotmail.com.br', 'tarzan', 1),
('Marcelo syndel', 22, 'marcypera.mt@gmail.com', 'TARZANNNN', 2),
('Marcelo Pereira Antonio ', 22, 'marcelotr@hotmail.com.br', 'tarzan', 3),
('Marcelo Pereira Antonio ', 22, 'marcelotr@hotmail.com.br', 'tarzan', 4),
('José', 22, 'josetr@hotmail.com.br', 'zé', 5),
('Marcelo Pereira Antonio ', 22, 'marcelotr@hotmail.com.br', 'tarzan', 6),
('Fabio', 50, 'fabao@fabao', 'fabao', 7),
('monica ', 40, 'monicao@mae', 'maezona', 8),
('monica pereira', 50, 'moniquinha@monica', 'monicao', 9),
('Marcelo antonio', 50, 'marcelo@antonio.br', 'marcelogugu', 10),
('Felipe', 25, 'Felipe@gmail.com', 'c4', 11),
('Syndel ', 21, 'syndel@gmail.com', 'zyndel', 12),
('mel', 10, 'mel@gmail.com', 'mel', 13),
('', 22, 'joao@gmail.com', 'joazinho', 14),
('', 23, 'joao@gmail.com', 'joazinho', 15),
('Bruno', 19, 'bruno@gmail.com', 'bruninho', 16),
('Rafael bragança', 25, '', 'faelzin', 18),
('Rafael bragança', 25, '', 'faelzin', 19),
('Rafael bragança', 25, '', 'faelzin', 20),
('Maria', 52, 'maria@gmail.com', 'mariao', 21),
('Fabio joao', 31, 'faijo@gmail.com', 'jojo', 23);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
