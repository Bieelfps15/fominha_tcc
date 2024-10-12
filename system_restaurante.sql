-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Jul-2020 às 00:20
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system_restaurante`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos`
--

CREATE TABLE `cargos` (
  `car_id` int(11) NOT NULL,
  `car_nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `car_nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `cargos`
--

INSERT INTO `cargos` (`car_id`, `car_nome`, `car_nivel`) VALUES
(1, 'admin', 1),
(2, 'caixa', 2),
(3, 'garcom', 3),
(4, 'cozinheiro', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `cat_id` int(11) NOT NULL,
  `cat_nome` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`cat_id`, `cat_nome`, `status`) VALUES
(1, 'lanche', 1),
(2, 'bebida', 0),
(4, 'doce', 0),
(5, 'salgados', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `f_id` int(11) NOT NULL,
  `f_nome` varchar(255) NOT NULL,
  `f_login` varchar(255) NOT NULL,
  `f_email` varchar(255) NOT NULL,
  `f_senha` varchar(255) NOT NULL,
  `f_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`f_id`, `f_nome`, `f_login`, `f_email`, `f_senha`, `f_cargo`) VALUES
(17, 'joao pedro', 'joao12', 'joao12@gmail.com', '21d769f14c6967eb1db073350a69fdac', 1),
(18, 'gabriel', 'biel', 'biel@gmail.com', '0872d3699edc1d512d5278897fe4b400', 1),
(19, 'carlos', 'carlos', 'carlos@gmail.com', 'dc599a9972fde3045dab59dbd1ae170b', 2),
(22, 'Fabio', 'Fabio', 'Fabio@gmail.com', 'cfb4d5711d6bb261eb05108684d876aa', 1),
(24, 'admin', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1),
(25, 'joao', 'joao', 'joao@gmail.com', 'dccd96c256bc7dd39bae41a405f25e43', 1),
(26, 'Jeane', 'jeane', 'jeane24antunes@gmail.com', '8e5fa2387d6224e8a90d7eeabc36b9aa', 4),
(27, 'ddd', 'a', 'bielfps10921@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(28, 'Gabriel', 'admin', 'bielfps10921@gmail.com', '202cb962ac59075b964b07152d234b70', 4),
(29, 'Gabriel', 'biel', 'bielfps10921@gmail.com', '202cb962ac59075b964b07152d234b70', 3),
(30, 'teste', 'caixa', 'caixa@gmail.com', '202cb962ac59075b964b07152d234b70', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itenspedidos`
--

CREATE TABLE `itenspedidos` (
  `id_pedido` int(11) NOT NULL,
  `mesa` int(11) NOT NULL,
  `comanda` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `preco` varchar(11) NOT NULL,
  `data` varchar(20) NOT NULL,
  `hora` varchar(20) NOT NULL,
  `categoria` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `cozinha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `itenspedidos`
--

INSERT INTO `itenspedidos` (`id_pedido`, `mesa`, `comanda`, `id_produto`, `preco`, `data`, `hora`, `categoria`, `status`, `cozinha`) VALUES
(39, 4, 43, 15, '8,00', '16/07/2020', '19:32', 0, 0, 0),
(40, 4, 44, 15, '8,00', '16/07/2020', '19:32', 0, 0, 0),
(41, 4, 44, 16, '4,00', '16/07/2020', '19:32', 0, 0, 0),
(42, 4, 44, 15, '8,00', '16/07/2020', '19:32', 0, 0, 0),
(43, 4, 44, 16, '4,00', '16/07/2020', '19:32', 0, 0, 0),
(44, 4, 44, 15, '8,00', '16/07/2020', '19:32', 0, 0, 0),
(45, 4, 44, 16, '4,00', '16/07/2020', '19:32', 0, 0, 0),
(46, 4, 44, 15, '8,00', '16/07/2020', '19:32', 0, 0, 0),
(47, 4, 44, 16, '4,00', '16/07/2020', '19:32', 0, 0, 0),
(48, 4, 44, 15, '8,00', '16/07/2020', '19:32', 0, 0, 0),
(49, 4, 44, 16, '4,00', '16/07/2020', '19:32', 0, 0, 0),
(50, 4, 44, 15, '8,00', '16/07/2020', '19:32', 0, 0, 0),
(51, 4, 44, 16, '4,00', '16/07/2020', '19:32', 0, 0, 0),
(52, 1, 53, 15, '8,00', '16/07/2020', '21:46', 1, 0, 0),
(53, 1, 53, 16, '4,00', '16/07/2020', '21:46', 2, 0, 0),
(54, 1, 54, 15, '8,00', '16/07/2020', '21:53', 1, 0, 0),
(55, 10, 55, 15, '8,00', '16/07/2020', '21:53', 1, 0, 0),
(56, 10, 55, 18, '5,55', '16/07/2020', '21:53', 1, 0, 0),
(57, 1, 57, 16, '4,00', '16/07/2020', '21:58', 2, 0, 0),
(58, 1, 59, 16, '4,00', '16/07/2020', '22:37', 2, 0, 0),
(59, 1, 59, 15, '8,00', '16/07/2020', '22:37', 1, 0, 0),
(60, 10, 61, 16, '4,00', '17/07/2020', '09:01', 2, 0, 0),
(61, 10, 62, 16, '4,00', '17/07/2020', '09:03', 2, 0, 0),
(62, 10, 62, 15, '8,00', '17/07/2020', '09:03', 1, 0, 0),
(63, 10, 63, 16, '4,00', '17/07/2020', '09:08', 2, 0, 0),
(64, 10, 63, 15, '8,00', '17/07/2020', '09:08', 1, 0, 0),
(65, 10, 63, 17, '77,78', '17/07/2020', '09:08', 2, 0, 0),
(66, 1, 64, 16, '4,00', '17/07/2020', '12:17', 2, 0, 0),
(67, 1, 64, 15, '8,00', '17/07/2020', '12:17', 1, 0, 0),
(68, 1, 64, 17, '77,78', '17/07/2020', '12:17', 2, 0, 0),
(69, 10, 66, 16, '4,00', '17/07/2020', '12:41', 2, 0, 1),
(70, 10, 66, 15, '8,00', '17/07/2020', '12:41', 1, 0, 0),
(71, 10, 67, 16, '4,00', '17/07/2020', '12:49', 2, 0, 1),
(72, 10, 67, 15, '8,00', '17/07/2020', '12:49', 1, 0, 0),
(73, 10, 67, 18, '10,00', '17/07/2020', '12:49', 1, 1, 0),
(74, 10, 67, 19, '23,33', '17/07/2020', '12:49', 1, 0, 0),
(75, 2, 68, 16, '4,00', '17/07/2020', '12:57', 2, 0, 1),
(76, 2, 68, 15, '8,00', '17/07/2020', '12:57', 1, 1, 1),
(77, 2, 68, 18, '10,00', '17/07/2020', '12:57', 1, 1, 1),
(78, 2, 68, 19, '23,33', '17/07/2020', '12:57', 1, 0, 1),
(79, 1, 70, 20, '6,00', '17/07/2020', '14:55', 2, 0, 1),
(80, 1, 70, 15, '8,00', '17/07/2020', '14:55', 1, 1, 1),
(81, 1, 71, 16, '4,00', '17/07/2020', '18:10', 2, 1, 1),
(82, 1, 72, 16, '4,00', '17/07/2020', '18:16', 2, 1, 1),
(83, 1, 72, 16, '4,00', '17/07/2020', '18:16', 2, 0, 1),
(84, 1, 72, 16, '4,00', '17/07/2020', '18:17', 2, 0, 1),
(85, 1, 73, 16, '4,00', '17/07/2020', '18:50', 2, 1, 1),
(86, 1, 73, 20, '6,00', '17/07/2020', '18:50', 2, 1, 1),
(87, 1, 73, 15, '8,00', '17/07/2020', '18:50', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mesa`
--

CREATE TABLE `mesa` (
  `idmesa` int(11) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mesa`
--

INSERT INTO `mesa` (`idmesa`, `numero`, `status`) VALUES
(1, '1', 1),
(2, '2', 0),
(3, '3', 0),
(4, '4', 0),
(5, '5', 0),
(6, '6', 0),
(7, '7', 0),
(8, '8', 0),
(9, '9', 0),
(10, '10', 0),
(11, '11', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `idpedido` int(11) NOT NULL,
  `idmesa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`idpedido`, `idmesa`) VALUES
(1, 1),
(14, 1),
(15, 1),
(19, 1),
(20, 1),
(29, 1),
(35, 1),
(36, 1),
(47, 1),
(53, 1),
(54, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(64, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(2, 2),
(3, 2),
(21, 2),
(30, 2),
(31, 2),
(32, 2),
(33, 2),
(68, 2),
(4, 3),
(22, 3),
(34, 3),
(5, 4),
(6, 4),
(7, 4),
(37, 4),
(38, 4),
(39, 4),
(40, 4),
(41, 4),
(42, 4),
(43, 4),
(44, 4),
(48, 4),
(69, 4),
(8, 5),
(45, 5),
(9, 6),
(13, 6),
(10, 7),
(11, 7),
(18, 7),
(26, 7),
(51, 7),
(12, 8),
(23, 8),
(27, 8),
(46, 8),
(16, 9),
(17, 9),
(24, 9),
(25, 9),
(28, 9),
(52, 10),
(55, 10),
(61, 10),
(62, 10),
(63, 10),
(65, 10),
(66, 10),
(67, 10),
(49, 11),
(50, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `pro_nome` varchar(255) NOT NULL,
  `pro_descricao` varchar(255) NOT NULL,
  `pro_preco` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `pro_nome`, `pro_descricao`, `pro_preco`, `cat_id`) VALUES
(15, 'X Salada', 'salada, hamburgue', '8,00', 1),
(16, 'Fanta uva', '500ml', '4,00', 2),
(20, 'Coca Cola', '700ml', '6,00', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `car_nivel` (`car_id`) USING BTREE;

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `f_cargo` (`f_cargo`) USING BTREE;

--
-- Indexes for table `itenspedidos`
--
ALTER TABLE `itenspedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `pro_id` (`id_produto`),
  ADD KEY `mesa` (`mesa`,`categoria`);

--
-- Indexes for table `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`idmesa`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idpedido`),
  ADD KEY `idmesa` (`idmesa`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cargos`
--
ALTER TABLE `cargos`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `itenspedidos`
--
ALTER TABLE `itenspedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `mesa`
--
ALTER TABLE `mesa`
  MODIFY `idmesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `f_cargo` FOREIGN KEY (`f_cargo`) REFERENCES `cargos` (`car_id`);

--
-- Limitadores para a tabela `itenspedidos`
--
ALTER TABLE `itenspedidos`
  ADD CONSTRAINT `mesa` FOREIGN KEY (`mesa`) REFERENCES `mesa` (`idmesa`);

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `idmesa` FOREIGN KEY (`idmesa`) REFERENCES `mesa` (`idmesa`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `cat_id` FOREIGN KEY (`cat_id`) REFERENCES `categorias` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
