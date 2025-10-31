-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31/10/2025 às 21:00
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
-- Banco de dados: `db_acolher`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_registros`
--

CREATE TABLE `tbl_registros` (
  `ID` int(4) NOT NULL,
  `NOME_PACIENTE` varchar(100) NOT NULL,
  `CPF_PACIENTE` varchar(11) NOT NULL,
  `EMAIL_PACIENTE` varchar(11) NOT NULL,
  `CEL_PACIENTE` varchar(14) NOT NULL,
  `CEP_PACIENTE` text NOT NULL,
  `RUA_PACIENTE` text NOT NULL,
  `BAIRRO_PACIENTE` text NOT NULL,
  `CIDADE_PACIENTE` text NOT NULL,
  `UF_PACIENTE` text NOT NULL,
  `ATENDIMENTO` varchar(100) NOT NULL,
  `OBSERVACAO` varchar(200) NOT NULL,
  `NOME_RESPONSAVEL` varchar(100) NOT NULL,
  `EMAIL_RESPONSAVEL` varchar(100) NOT NULL,
  `CEL_RESPONSAVEL` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_registros`
--

INSERT INTO `tbl_registros` (`ID`, `NOME_PACIENTE`, `CPF_PACIENTE`, `EMAIL_PACIENTE`, `CEL_PACIENTE`, `CEP_PACIENTE`, `RUA_PACIENTE`, `BAIRRO_PACIENTE`, `CIDADE_PACIENTE`, `UF_PACIENTE`, `ATENDIMENTO`, `OBSERVACAO`, `NOME_RESPONSAVEL`, `EMAIL_RESPONSAVEL`, `CEL_RESPONSAVEL`) VALUES
(23, 'robson', '22222222222', 'robson@test', '11999999999', '06739048', 'Rua Vinicius de Morais', 'Jardim Margarida', 'Vargem Grande Paulista', '', 'Psicopedagoga', 'obesidade', 'Robson', 'robson@gmail', 1999999999),
(24, 'robson', '42424554128', 'robson@test', '11999999999', '06730398', 'Rua Eucalipto', 'Centro', 'Vargem Grande Paulista', 'SP', 'Pedagoga', 'obesidade', 'robson', 'robson@gmail', 2147483647),
(21, 'robson', '43333333333', 'robson@test', '11999999999', '0', '0', '0', '0', '0', 'Psicopedagoga', 'obesidade', 'robson', 'robson@gmail', 2147483647),
(22, 'robson', '43333333338', 'robson@test', '11999999999', '0', '0', '0', '0', '0', 'Pedagoga', 'ansiedade', 'Robson', 'robson@gmail', 2147483647);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbl_registros`
--
ALTER TABLE `tbl_registros`
  ADD PRIMARY KEY (`CPF_PACIENTE`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_registros`
--
ALTER TABLE `tbl_registros`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
