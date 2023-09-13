-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 13-Set-2023 às 21:19
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
-- Estrutura da tabela `agendamento`
--

DROP TABLE IF EXISTS `agendamento`;
CREATE TABLE IF NOT EXISTS `agendamento` (
  `id_agenda` int NOT NULL AUTO_INCREMENT,
  `cpf_fk` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dia` date NOT NULL,
  `horario` time NOT NULL,
  `estado` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  PRIMARY KEY (`id_agenda`),
  KEY `fk_cpf` (`cpf_fk`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`id_agenda`, `cpf_fk`, `dia`, `horario`, `estado`, `cidade`, `endereco`) VALUES
(1, '176.582.216-51', '2023-09-30', '22:03:00', 'MG', 'BH', 'rua francisco de souza');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastromotorista`
--

DROP TABLE IF EXISTS `cadastromotorista`;
CREATE TABLE IF NOT EXISTS `cadastromotorista` (
  `usuario` varchar(55) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `senha` int NOT NULL,
  `email` varchar(55) NOT NULL,
  `cpf` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `rg` varchar(10) NOT NULL,
  PRIMARY KEY (`rg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `loginusuario`
--

DROP TABLE IF EXISTS `loginusuario`;
CREATE TABLE IF NOT EXISTS `loginusuario` (
  `usuario` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `senha` int NOT NULL,
  `cpf` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `codigo_redefinicao` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='tabela de login do usuario';

--
-- Extraindo dados da tabela `loginusuario`
--

INSERT INTO `loginusuario` (`usuario`, `nome`, `sobrenome`, `senha`, `cpf`, `email`, `codigo_redefinicao`) VALUES
('JOAO', 'joao', 'vitor', 123, '176.582.216-51', 'joaoarantes877@gmail.com', NULL);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD CONSTRAINT `fk_cpf` FOREIGN KEY (`cpf_fk`) REFERENCES `loginusuario` (`cpf`) ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
