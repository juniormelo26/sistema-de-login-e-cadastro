-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 28-Set-2021 às 03:03
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_geral`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(300) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `celular` varchar(20) NOT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `rua` varchar(300) DEFAULT NULL,
  `numero` varchar(20) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `complemento` varchar(200) DEFAULT NULL,
  `cidade` varchar(120) DEFAULT NULL,
  `uf` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `data_cadastro` datetime NOT NULL,
  `ultima_alteracao` datetime DEFAULT NULL,
  `criado_por` varchar(200) NOT NULL,
  `alterado_por` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `situacao` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'PENDENTE',
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `email`, `telefone`, `celular`, `cep`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `uf`, `cpf`, `rg`, `nascimento`, `data_cadastro`, `ultima_alteracao`, `criado_por`, `alterado_por`, `situacao`) VALUES
(1, 'Antonio De Melo Sousa', 'contato@juniormelo.dev.br', '(84) 98814-7799', '(84) 98814-9977', '59141655', 'Rua S�o Judas Tadeu', '92', 'Rosa dos Ventos', 'Casa', 'Parnamirim', 'RN', '123.456.789-00', '6543210', '1979-12-26', '2021-09-28 02:29:17', '2021-09-28 02:55:52', 'Antonio Junior', 'Administrador do sistema', 'Ativo'),
(2, 'Maria Jose', 'maria@hotmail.com', '(84) 98814-7788', '(84) 98814-7788', '59054600', 'Avenida Interventor M�rio C�mara', '1624', 'Dix-Sept Rosado', '', 'Natal', 'RN', '321.456.789-00', '1234566', '1950-01-13', '2021-09-28 02:39:54', '2021-09-28 02:46:10', 'Administrador do sistema', 'Administrador do sistema', 'Ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `usuario` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `senha` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `token` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`, `token`) VALUES
(1, 'Administrador do sistema', 'admin', '202cb962ac59075b964b07152d234b70', 'e0dd669bdfe0821b8083fe92b0689426'),
(5, 'Antonio Junior', 'junior', '202cb962ac59075b964b07152d234b70', '74279ec3066c02d25fd213654c059a23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
