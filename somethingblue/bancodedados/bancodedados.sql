-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 02:35 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `somethingblue`
--
CREATE DATABASE IF NOT EXISTS `somethingblue` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `somethingblue`;

-- --------------------------------------------------------

--
-- Table structure for table `empreste`
--

CREATE TABLE `empreste` (
  `id` int(100) NOT NULL,
  `id_usuarios` int(11) NOT NULL,
  `item` varchar(15) NOT NULL,
  `tamanho` varchar(10) NOT NULL,
  `cor` varchar(15) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empreste`
--

INSERT INTO `empreste` (`id`, `id_usuarios`, `item`, `tamanho`, `cor`, `status`) VALUES
(2, 6, 'Anel', '16', 'Prata', 0),
(3, 4, 'Anel', '18', 'Rose', 0),
(4, 3, 'Anel', '20', 'Prata', 0),
(5, 9, 'Bolsa', 'Pequena', 'Dourada', 1),
(6, 4, 'Bolsa', 'Pequena', 'Preta', 1),
(7, 7, 'Bolsa', 'Média', 'Branca', 0),
(8, 8, 'Bolsa', 'Grande', 'Preta', 0),
(9, 5, 'Sandália', '36/37', 'Branca', 1),
(10, 8, 'Sandália', '36/37', 'Prata', 0),
(11, 3, 'Sandália', '38/39', 'Dourada', 0),
(12, 5, 'Sandália', '40/41', 'Preta', 1),
(13, 6, 'Sandália', '42/43', 'Prata', 1),
(14, 8, 'Vestido', '36', 'Rosa', 0),
(15, 3, 'Vestido', '38', 'Amarelo', 1),
(16, 4, 'Vestido', '38', 'Azul', 0),
(17, 9, 'Vestido', '40', 'Amarelo', 1),
(18, 4, 'Vestido', '40', 'Verde', 1),
(19, 7, 'Vestido', '42', 'Rosa', 0),
(20, 10, 'Vestido', '44', 'Verde', 1),
(24, 1, 'Anel', '14', 'Prata', 1),
(25, 3, 'Bolsa', 'Pequena', 'Preta', 0),
(26, 3, 'Sandália', '36/37', 'Preta', 1),
(27, 3, 'Vestido', '36', 'Verde', 1),
(28, 3, 'Anel', '14', 'Ouro', 1),
(29, 3, 'Anel', '14', 'Ouro', 1),
(30, 3, 'Bolsa', 'Pequena', 'Preta', 1),
(31, 3, 'Sandália', '36/37', 'Preta', 1),
(32, 3, 'Vestido', '36', 'Verde', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pegaremprestado`
--

CREATE TABLE `pegaremprestado` (
  `id` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL,
  `id_empreste` int(11) NOT NULL,
  `dtinicio` date NOT NULL,
  `dtfinal` date NOT NULL,
  `entregue` int(11) NOT NULL,
  `dtdevolucao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegaremprestado`
--

INSERT INTO `pegaremprestado` (`id`, `id_usuarios`, `id_empreste`, `dtinicio`, `dtfinal`, `entregue`, `dtdevolucao`) VALUES
(1, 9, 2, '2022-10-07', '2022-11-14', 0, NULL),
(2, 9, 14, '2022-10-07', '2022-11-14', 0, NULL),
(3, 6, 3, '2022-10-31', '2022-11-07', 0, NULL),
(4, 6, 15, '2022-10-31', '2022-11-07', 0, NULL),
(5, 6, 9, '2022-10-31', '2022-11-07', 0, NULL),
(8, 3, 6, '2022-11-23', '2022-11-30', 0, NULL),
(9, 3, 2, '2022-11-23', '2022-11-30', 1, '2022-11-27'),
(10, 4, 12, '2022-11-26', '2022-12-03', 0, NULL),
(11, 4, 8, '2022-11-26', '2022-12-03', 0, NULL),
(12, 4, 14, '2022-11-26', '2022-12-03', 0, NULL),
(13, 3, 3, '2022-11-27', '2022-11-01', 1, '2022-11-27'),
(14, 2, 2, '2022-11-27', '2022-11-25', 1, '2022-11-27'),
(15, 1, 25, '2022-11-27', '2022-12-04', 0, NULL),
(16, 1, 7, '2022-11-27', '2022-12-04', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nomeusuario` varchar(100) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `dtnascimento` date NOT NULL,
  `celular` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(12) NOT NULL,
  `tipo` varchar(1) NOT NULL,
  `cpf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nomeusuario`, `cep`, `numero`, `dtnascimento`, `celular`, `email`, `senha`, `tipo`, `cpf`) VALUES
(1, 'Catarina Elisa Silveira', '59124200', '360', '1998-07-23', '84997926034', 'catarinaelisasilveira@yohoo.com', '6OAb205cCk', '0', '22524572447'),
(2, 'Agatha Clara Daiane Monteiro', '53080240', '146', '1991-11-23', '81999365599', 'agatha-monteiro70@bool.com.br', 'YinCf7bQay', '0', '38184279175'),
(3, 'Stella Cristiane Renata Martins', '67133710', '452', '2002-09-18', '9198576268', 'stellacristianemartins@yohoo.com', 'T4pdGBhjlU', '1', '38980937199'),
(4, 'Alessandra Eduarda da Rosa', '64004690', '838', '1999-03-02', '86999837790', 'alessandra_darosa@bool.com.br', 'WJjmsPbGCf', '1', '86999837790'),
(5, 'Laís Benedita Sophie Fogaça', '49092560', '337', '1985-02-23', '79982235995', 'lais_fogaca@yohoo.com', 'dK2QnD8SJr', '1', '93924609705'),
(6, 'Cristiane Joana Brito', '76875835', '145', '1992-05-25', '69983829184', 'cristianejoanabrito@terra.com.br', 'X2R6yPsPuh', '1', '66930039152'),
(7, 'Mariana Adriana Lopes', '38440068', '516', '1975-03-09', '34986683012', 'mariana_adriana_lopes@bool.com.br', 'ALBj4Cls9H', '1', '61677138122'),
(8, 'Alícia Nicole Sophia de Paula', '24842160', '113', '1981-02-27', '21985808669', 'alicia.nicole.depaula@yohoo.com.br', 'rOptgtnqKG', '1', '50687539471'),
(9, 'Tânia Isabelle Costa', '54430100', '477', '1987-05-12', '81986632641', 'tania_isabelle_costa@bool.com.br', 'tFEZhJBMl6', '1', '73614445631'),
(10, 'Joana Isabelly da Cunha', '59609430', '259', '1979-03-12', '84998153136', 'joana.isabelly.dacunha@yohoo.com', 'UYsHUtH3xm', '1', '05658329051'),
(12, 'fdkfjaf', '34329482', '1212', '2022-03-04', '34234', 'dfakfjladfj@gmail.com', 'fjkflkasdjf', '1', '34324');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empreste`
--
ALTER TABLE `empreste`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegaremprestado`
--
ALTER TABLE `pegaremprestado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empreste`
--
ALTER TABLE `empreste`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pegaremprestado`
--
ALTER TABLE `pegaremprestado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
