-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Mar-2019 às 21:13
-- Versão do servidor: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quick`
--
CREATE DATABASE IF NOT EXISTS `quick` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `quick`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `idAdministrador` int(11) NOT NULL,
  `tipo` varchar(18) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`idAdministrador`, `tipo`, `nome`, `email`, `senha`) VALUES
(1, 'administrador', 'Administrador da silva', 'admin@gmail.com', 'YWRtaW4=');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bairro`
--

CREATE TABLE `bairro` (
  `idBairro` int(11) NOT NULL,
  `nomeBairro` varchar(45) NOT NULL,
  `idCidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `bairro`
--

INSERT INTO `bairro` (`idBairro`, `nomeBairro`, `idCidade`) VALUES
(1, 'Henrique Jorge', 0),
(2, 'Henrique Jorge', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

CREATE TABLE `banner` (
  `idBanner` int(11) NOT NULL,
  `nomePromocao` varchar(60) NOT NULL,
  `descricaoPromocao` varchar(255) NOT NULL,
  `imagemBanner` varchar(40) NOT NULL,
  `data` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `banner`
--

INSERT INTO `banner` (`idBanner`, `nomePromocao`, `descricaoPromocao`, `imagemBanner`, `data`, `status`) VALUES
(1, 'Vende - se Adler', 'Gordão', '1.jpg', '2019-02-21', 2),
(5, 'Promoção de pepino', 'jjj', 'banner_background.jpg', '2019-03-12', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `idCarrinho` int(11) NOT NULL,
  `quantidade` int(2) NOT NULL,
  `valorUnitario` double NOT NULL,
  `valorTotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `idCidade` int(11) NOT NULL,
  `nomeCidade` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`idCidade`, `nomeCidade`) VALUES
(1, 'Fortaleza'),
(2, 'Fortaleza');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `tipo` varchar(18) NOT NULL,
  `dataNascimento` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `rg` varchar(14) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `idEndereco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nome`, `tipo`, `dataNascimento`, `sexo`, `email`, `senha`, `cpf`, `rg`, `telefone`, `idEndereco`) VALUES
(1, 'Mateus Ferreira dos Santos', 'usuario', '1998-09-12', 'masculino', 'mateusferreira058@gmail.com', 'bWF0ZXVz', '612.245.523-13', '33.215.973-5', '(88) 9812-7661', 0),
(2, 'Afonso João', 'usuario', '1998-05-15', 'masculino', 'afonso@gmail.com', 'MTIzZGVvbGl2ZWlyYTQ=', '07577986321', '45678765', '88997734206', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `idEndereco` int(11) NOT NULL,
  `nomeRua` varchar(45) NOT NULL,
  `numeroResidencia` smallint(6) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `idBairro` int(11) NOT NULL,
  `idCidade` int(11) NOT NULL,
  `idEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`idEndereco`, `nomeRua`, `numeroResidencia`, `cep`, `idBairro`, `idCidade`, `idEstado`) VALUES
(1, 'Avenida Senador Fernandes Távora', 346, '60510-290', 0, 0, 0),
(2, 'Avenida Senador Fernandes Távora', 346, '60510-290', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `idEstado` int(11) NOT NULL,
  `nomeEstado` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`idEstado`, `nomeEstado`) VALUES
(1, 'CE'),
(2, 'CE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historicocompras`
--

CREATE TABLE `historicocompras` (
  `idHistoricoCompras` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itemvenda`
--

CREATE TABLE `itemvenda` (
  `idItemVenda` int(11) NOT NULL,
  `quantidade` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `marca`
--

CREATE TABLE `marca` (
  `idMarca` int(11) NOT NULL,
  `nomeMarca` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `opcaopagamento`
--

CREATE TABLE `opcaopagamento` (
  `idOpcaoPagamento` int(11) NOT NULL,
  `cartao` varchar(30) NOT NULL,
  `dinheiro` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `operador`
--

CREATE TABLE `operador` (
  `idOperador` int(11) NOT NULL,
  `tipo` varchar(18) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `operador`
--

INSERT INTO `operador` (`idOperador`, `tipo`, `nome`, `email`, `senha`) VALUES
(3, 'operador', 'Operador dos santos', 'operador@gmail.com', 'WWpOQ2JHTnRSbXRpTTBrOQ==');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `idPedido` int(11) NOT NULL,
  `quantidade` int(2) NOT NULL,
  `dataPedido` date NOT NULL,
  `horaPedido` time NOT NULL,
  `valorUnitario` double NOT NULL,
  `valorTotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idProduto` int(11) NOT NULL,
  `nomeProduto` varchar(60) NOT NULL,
  `valorUnitario` decimal(10,2) NOT NULL,
  `descricaoProduto` varchar(255) NOT NULL,
  `marca` varchar(40) NOT NULL,
  `categoria` varchar(40) NOT NULL,
  `peso` decimal(10,2) NOT NULL,
  `imagem` varchar(40) NOT NULL,
  `data` datetime NOT NULL,
  `disponibilidade` int(11) NOT NULL,
  `tipoDestaque` varchar(11) DEFAULT NULL,
  `valorPromocao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idProduto`, `nomeProduto`, `valorUnitario`, `descricaoProduto`, `marca`, `categoria`, `peso`, `imagem`, `data`, `disponibilidade`, `tipoDestaque`, `valorPromocao`) VALUES
(1, 'Ração para gato', '99999999.99', 'Ração para gato pequenos ', 'whisnkas', 'pet', '5.00', '4.png', '2019-03-06 00:00:00', 1, '2', 12),
(2, 'Nescau', '40000.00', 'Achocolatado em pó', 'Nestle', 'laticinios', '500.00', '12.png', '2019-03-06 00:00:00', 1, '2', 6),
(3, 'Ração para cachorro', '6.00', 'Ração para cachorro da raça pinchy', 'petlove', 'pet', '2.00', '26.png', '2019-01-21 00:00:00', 1, NULL, 0),
(4, 'Ypioca', '9.00', 'Aguardente Ypioca Amarela', 'ypioca', 'alcoolicas', '1.00', '550a4012a913641ef176968de10b3344.png', '2019-01-21 00:00:00', 1, NULL, 0),
(5, 'Ração para gato', '4.00', 'Ração para gatos da raça siamês', 'whisnkas', 'pet', '5.00', '27.png', '2019-01-22 00:00:00', 1, NULL, 0),
(6, 'Oléo de Cozinha', '400.00', 'Oleo de para cozimento', 'Girassol', 'oleo', '500.00', '5a536021c1d3ee1d1f5c43ab3b0178d0.png', '2019-03-06 00:00:00', 1, 'NULL', 0),
(7, 'Oléo de Cozinha', '6.00', 'Oleo de Cozinha ', 'Girassol', 'oleo', '1.00', '49.png', '2019-01-31 00:00:00', 1, '2', 3),
(8, 'Sprite limão', '5.00', 'Sprite sabor limão', 'Sprite', 'naoalcoolicas', '2.00', '5a536021c1d3ee1d1f5c43ab3b0178d0.png', '2019-02-07 00:00:00', 1, '3', 0),
(10, 'Sprite limão', '5.00', 'sfcdf', 'Whiskas', 'aves', '5.00', '5a536021c1d3ee1d1f5c43ab3b0178d0.png', '2019-02-19 00:00:00', 1, '2', 56),
(11, 'Sprite limão', '222.00', 'edsd', 'Red Bull', 'sal', '5.00', '5a536021c1d3ee1d1f5c43ab3b0178d0.png', '2019-02-19 00:00:00', 1, '2', 90),
(12, 'Sprite limão', '333.00', 'fds', 'Pedigree', 'arroz', '3.00', '2.png', '2019-02-21 00:00:00', 1, '3', 0),
(13, 'kkkk', '66.00', 'produto', 'China', 'frutas', '3.00', '11.png', '2019-03-06 00:00:00', 1, '2', 75);

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatoriovenda`
--

CREATE TABLE `relatoriovenda` (
  `idRelatorioVendas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `salvarlista`
--

CREATE TABLE `salvarlista` (
  `idSalvarLista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `validarpedido`
--

CREATE TABLE `validarpedido` (
  `idValidarPedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `idVenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdministrador`);

--
-- Indexes for table `bairro`
--
ALTER TABLE `bairro`
  ADD PRIMARY KEY (`idBairro`),
  ADD KEY `idCidade` (`idCidade`) USING BTREE;

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`idBanner`);

--
-- Indexes for table `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`idCarrinho`);

--
-- Indexes for table `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`idCidade`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD KEY `idEndereco` (`idEndereco`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`idEndereco`),
  ADD KEY `idBairro` (`idBairro`),
  ADD KEY `idCidade` (`idCidade`),
  ADD KEY `dEstado` (`idEstado`);

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indexes for table `historicocompras`
--
ALTER TABLE `historicocompras`
  ADD PRIMARY KEY (`idHistoricoCompras`);

--
-- Indexes for table `itemvenda`
--
ALTER TABLE `itemvenda`
  ADD PRIMARY KEY (`idItemVenda`);

--
-- Indexes for table `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idMarca`);

--
-- Indexes for table `opcaopagamento`
--
ALTER TABLE `opcaopagamento`
  ADD PRIMARY KEY (`idOpcaoPagamento`);

--
-- Indexes for table `operador`
--
ALTER TABLE `operador`
  ADD PRIMARY KEY (`idOperador`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idPedido`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idProduto`);

--
-- Indexes for table `relatoriovenda`
--
ALTER TABLE `relatoriovenda`
  ADD PRIMARY KEY (`idRelatorioVendas`);

--
-- Indexes for table `salvarlista`
--
ALTER TABLE `salvarlista`
  ADD PRIMARY KEY (`idSalvarLista`);

--
-- Indexes for table `validarpedido`
--
ALTER TABLE `validarpedido`
  ADD PRIMARY KEY (`idValidarPedido`);

--
-- Indexes for table `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`idVenda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bairro`
--
ALTER TABLE `bairro`
  MODIFY `idBairro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `idBanner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `idCarrinho` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cidade`
--
ALTER TABLE `cidade`
  MODIFY `idCidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `idEndereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `historicocompras`
--
ALTER TABLE `historicocompras`
  MODIFY `idHistoricoCompras` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `itemvenda`
--
ALTER TABLE `itemvenda`
  MODIFY `idItemVenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marca`
--
ALTER TABLE `marca`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `opcaopagamento`
--
ALTER TABLE `opcaopagamento`
  MODIFY `idOpcaoPagamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `operador`
--
ALTER TABLE `operador`
  MODIFY `idOperador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `relatoriovenda`
--
ALTER TABLE `relatoriovenda`
  MODIFY `idRelatorioVendas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salvarlista`
--
ALTER TABLE `salvarlista`
  MODIFY `idSalvarLista` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `validarpedido`
--
ALTER TABLE `validarpedido`
  MODIFY `idValidarPedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `idVenda` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
