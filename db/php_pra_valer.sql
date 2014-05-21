-- phpMyAdmin SQL Dump
-- version 3.4.3.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 21/05/2014 às 13h58min
-- Versão do Servidor: 5.5.15
-- Versão do PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `php_pra_valer`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(225) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`) VALUES
(2, 'Maminha de Alcatra', '10.50'),
(3, 'Chã de dentro', '15.00'),
(5, 'Patinho ', '11.00'),
(6, 'Chã de fora', '11.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tablet`
--

CREATE TABLE IF NOT EXISTS `tablet` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `marca` varchar(20) NOT NULL,
  `sistema` varchar(20) NOT NULL,
  `largura` varchar(10) NOT NULL,
  `altura` varchar(10) NOT NULL,
  `cor` varchar(10) NOT NULL,
  `peso` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `tablet`
--

INSERT INTO `tablet` (`id`, `marca`, `sistema`, `largura`, `altura`, `cor`, `peso`) VALUES
(1, 'Apply', 'IOS', '700', '900', 'Branco', '12g'),
(3, 'Apply', 'IOS', '700', '900', 'Branco', '12g'),
(5, 'Apply', 'IOS', '700', '900', 'Branco', '12g'),
(6, 'Apply', 'IOS', '700', '900', 'Branco', '12g'),
(7, 'Apply', 'IOS', '700', '900', 'Branco', '12g'),
(8, 'Apply', 'IOS', '700', '900', 'Branco', '12g'),
(9, 'Apply', 'IOS', '700', '900', 'Branco', '12g'),
(10, 'Apply', 'IOS', '700', '900', 'Branco', '12g'),
(11, 'Apply', 'IOS', '700', '900', 'Branco', '12g'),
(12, 'Apply', 'IOS', '700', '900', 'Branco', '12g'),
(13, 'Apply', 'IOS', '700', '900', 'Branco', '12g'),
(14, 'Apply', 'IOS', '700', '900', 'Branco', '12g'),
(15, 'Apply', 'IOS', '700', '900', 'Branco', '12g'),
(16, 'Apply', 'IOS', '700', '900', 'Branco', '12g'),
(17, 'Apply', 'IOS', '700', '900', 'Branco', '12g'),
(18, 'Apply', 'IOS', '700', '900', 'Branco', '12g'),
(19, 'Apply', 'IOS', '700', '900', 'Branco', '12g'),
(20, 'Apply', 'IOS', '700', '900', 'Branco', '12g'),
(21, 'Apply', 'IOS', '700', '900', 'Branco', '12g'),
(22, 'Apply', 'IOS', '700', '900', 'Branco', '12g'),
(23, 'Apply', 'IOS', '700', '900', 'Branco', '12g'),
(24, 'Apply', 'IOS', '700', '900', 'Branco', '12g'),
(25, 'Apply', 'IOS', '700', '900', 'Branco', '12g'),
(26, 'Apply', 'IOS', '700', '900', 'Branco', '12g'),
(27, 'Apply', 'IOS', '700', '900', 'Branco', '12g');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
