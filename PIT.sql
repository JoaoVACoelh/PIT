-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 05-Jul-2023 às 00:09
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pit`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastromotorista`
--

DROP TABLE IF EXISTS `cadastromotorista`;
CREATE TABLE IF NOT EXISTS `cadastromotorista` (
  `usuario` varchar(55) NOT NULL,
  `senha` int NOT NULL,
  `email` varchar(55) NOT NULL,
  `cpf` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `rg` varchar(10) NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cadastromotorista`
--

INSERT INTO `cadastromotorista` (`usuario`, `senha`, `email`, `cpf`, `rg`) VALUES
('oi', 123, 'galodoido130br@gmail.com', '446.556.266', 'MG-22.325.'),
('oi123', 123, 'oi123@jonas', '123.446.446-44', 'MG-22.325.'),
('Kako', 123, 'oi123@kako', '123.446.476-44', 'MG-22.325.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `loginusuario`
--

DROP TABLE IF EXISTS `loginusuario`;
CREATE TABLE IF NOT EXISTS `loginusuario` (
  `usuario` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `senha` int NOT NULL,
  `cpf` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `codigo_redefinicao` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='tabela de login do usuario';

--
-- Extraindo dados da tabela `loginusuario`
--

INSERT INTO `loginusuario` (`usuario`, `senha`, `cpf`, `email`, `codigo_redefinicao`) VALUES
('Mauricio', 123, '12312312312312', 'galodoido130br@gmail.com', '2566a9');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
