-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.6.24


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema dbcity_share
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ dbcity_share;
USE dbcity_share;

--
-- Table structure for table `dbcity_share`.`tbl_atributo_veiculo`
--

DROP TABLE IF EXISTS `tbl_atributo_veiculo`;
CREATE TABLE `tbl_atributo_veiculo` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `idCategoria` int(11) NOT NULL,
  `idEspecificos` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_atributo_veiculo`
--

/*!40000 ALTER TABLE `tbl_atributo_veiculo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_atributo_veiculo` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_atributos`
--

DROP TABLE IF EXISTS `tbl_atributos`;
CREATE TABLE `tbl_atributos` (
  `idAtributos` int(11) NOT NULL AUTO_INCREMENT,
  `atributos` varchar(100) NOT NULL,
  PRIMARY KEY (`idAtributos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_atributos`
--

/*!40000 ALTER TABLE `tbl_atributos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_atributos` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_atributos_especificos`
--

DROP TABLE IF EXISTS `tbl_atributos_especificos`;
CREATE TABLE `tbl_atributos_especificos` (
  `idEspecificos` int(11) NOT NULL AUTO_INCREMENT,
  `atributos_especificos` varchar(100) NOT NULL,
  PRIMARY KEY (`idEspecificos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_atributos_especificos`
--

/*!40000 ALTER TABLE `tbl_atributos_especificos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_atributos_especificos` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_auditoria`
--

DROP TABLE IF EXISTS `tbl_auditoria`;
CREATE TABLE `tbl_auditoria` (
  `idAuditoria` int(11) NOT NULL AUTO_INCREMENT,
  `idFuncionario` int(11) NOT NULL,
  `desc_acao` text NOT NULL,
  `data_hora` datetime NOT NULL,
  PRIMARY KEY (`idAuditoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_auditoria`
--

/*!40000 ALTER TABLE `tbl_auditoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_auditoria` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_beneficios`
--

DROP TABLE IF EXISTS `tbl_beneficios`;
CREATE TABLE `tbl_beneficios` (
  `idBeneficios` int(11) NOT NULL AUTO_INCREMENT,
  `nome_beneficio` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  `img_beneficio` varchar(20) NOT NULL,
  PRIMARY KEY (`idBeneficios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_beneficios`
--

/*!40000 ALTER TABLE `tbl_beneficios` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_beneficios` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_cargos`
--

DROP TABLE IF EXISTS `tbl_cargos`;
CREATE TABLE `tbl_cargos` (
  `idCargos` int(11) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(100) NOT NULL,
  PRIMARY KEY (`idCargos`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_cargos`
--

/*!40000 ALTER TABLE `tbl_cargos` DISABLE KEYS */;
INSERT INTO `tbl_cargos` (`idCargos`,`cargo`) VALUES 
 (1,'Administrador');
/*!40000 ALTER TABLE `tbl_cargos` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_cat_atributos`
--

DROP TABLE IF EXISTS `tbl_cat_atributos`;
CREATE TABLE `tbl_cat_atributos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCategoria` int(11) NOT NULL,
  `idAtributos` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_cat_atributos`
--

/*!40000 ALTER TABLE `tbl_cat_atributos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_cat_atributos` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_categoria`
--

DROP TABLE IF EXISTS `tbl_categoria`;
CREATE TABLE `tbl_categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(100) NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_categoria`
--

/*!40000 ALTER TABLE `tbl_categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_categoria` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_cidade`
--

DROP TABLE IF EXISTS `tbl_cidade`;
CREATE TABLE `tbl_cidade` (
  `idCidade` int(11) NOT NULL AUTO_INCREMENT,
  `cidades` varchar(100) NOT NULL,
  PRIMARY KEY (`idCidade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_cidade`
--

/*!40000 ALTER TABLE `tbl_cidade` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_cidade` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_cliente`
--

DROP TABLE IF EXISTS `tbl_cliente`;
CREATE TABLE `tbl_cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(100) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `celular` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `cpf_cnpj` varchar(15) NOT NULL,
  `numero_cartao` varchar(15) NOT NULL,
  `bandeira` varchar(20) NOT NULL,
  `validade` date NOT NULL,
  `cvv` varchar(10) NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_cliente`
--

/*!40000 ALTER TABLE `tbl_cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_cliente` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_cores`
--

DROP TABLE IF EXISTS `tbl_cores`;
CREATE TABLE `tbl_cores` (
  `idCor` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cor` varchar(50) NOT NULL,
  `hexadecimal` varchar(10) NOT NULL,
  PRIMARY KEY (`idCor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_cores`
--

/*!40000 ALTER TABLE `tbl_cores` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_cores` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_empresa`
--

DROP TABLE IF EXISTS `tbl_empresa`;
CREATE TABLE `tbl_empresa` (
  `idEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `nome_empresa` varchar(100) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `historia_empresa` text NOT NULL,
  PRIMARY KEY (`idEmpresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_empresa`
--

/*!40000 ALTER TABLE `tbl_empresa` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_empresa` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_endereco`
--

DROP TABLE IF EXISTS `tbl_endereco`;
CREATE TABLE `tbl_endereco` (
  `idEndereco` int(11) NOT NULL AUTO_INCREMENT,
  `idCliente` int(11) NOT NULL,
  `idEstado` int(11) NOT NULL,
  `idCidade` int(11) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  PRIMARY KEY (`idEndereco`),
  KEY `fk_cliente` (`idCliente`),
  KEY `fk_estado` (`idEstado`),
  KEY `fk_cidade` (`idCidade`),
  CONSTRAINT `fk_cidade` FOREIGN KEY (`idCidade`) REFERENCES `tbl_cidade` (`idCidade`),
  CONSTRAINT `fk_cliente` FOREIGN KEY (`idCliente`) REFERENCES `tbl_cliente` (`idCliente`),
  CONSTRAINT `fk_estado` FOREIGN KEY (`idEstado`) REFERENCES `tbl_estado` (`idEstado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_endereco`
--

/*!40000 ALTER TABLE `tbl_endereco` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_endereco` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_estado`
--

DROP TABLE IF EXISTS `tbl_estado`;
CREATE TABLE `tbl_estado` (
  `idEstado` int(11) NOT NULL AUTO_INCREMENT,
  `estados` varchar(100) NOT NULL,
  PRIMARY KEY (`idEstado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_estado`
--

/*!40000 ALTER TABLE `tbl_estado` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_estado` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_fabricante`
--

DROP TABLE IF EXISTS `tbl_fabricante`;
CREATE TABLE `tbl_fabricante` (
  `idFabricante` int(11) NOT NULL AUTO_INCREMENT,
  `nome_fabricante` varchar(100) NOT NULL,
  `idModelo` int(11) NOT NULL,
  PRIMARY KEY (`idFabricante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_fabricante`
--

/*!40000 ALTER TABLE `tbl_fabricante` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_fabricante` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_faleconosco`
--

DROP TABLE IF EXISTS `tbl_faleconosco`;
CREATE TABLE `tbl_faleconosco` (
  `idFaleconosco` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `whatsapp` varchar(20) NOT NULL,
  `texto` varchar(300) NOT NULL,
  PRIMARY KEY (`idFaleconosco`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_faleconosco`
--

/*!40000 ALTER TABLE `tbl_faleconosco` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_faleconosco` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_func_nivel`
--

DROP TABLE IF EXISTS `tbl_func_nivel`;
CREATE TABLE `tbl_func_nivel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idFuncionario` int(11) NOT NULL,
  `idNivel` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_func_nivel`
--

/*!40000 ALTER TABLE `tbl_func_nivel` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_func_nivel` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_funcionario`
--

DROP TABLE IF EXISTS `tbl_funcionario`;
CREATE TABLE `tbl_funcionario` (
  `idFuncionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_func` varchar(100) NOT NULL,
  `rg` varchar(15) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `data_nascimento` date NOT NULL,
  `data_admissao` date NOT NULL,
  `idCargos` int(11) NOT NULL,
  `senha` varchar(16) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`idFuncionario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_funcionario`
--

/*!40000 ALTER TABLE `tbl_funcionario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_funcionario` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_imagem`
--

DROP TABLE IF EXISTS `tbl_imagem`;
CREATE TABLE `tbl_imagem` (
  `idImagem` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`idImagem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_imagem`
--

/*!40000 ALTER TABLE `tbl_imagem` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_imagem` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_imagem_veiculo`
--

DROP TABLE IF EXISTS `tbl_imagem_veiculo`;
CREATE TABLE `tbl_imagem_veiculo` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `idVeiculo` int(11) NOT NULL,
  `idImagem` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_imagem_veiculo`
--

/*!40000 ALTER TABLE `tbl_imagem_veiculo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_imagem_veiculo` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_itens`
--

DROP TABLE IF EXISTS `tbl_itens`;
CREATE TABLE `tbl_itens` (
  `idItens` int(11) NOT NULL AUTO_INCREMENT,
  `idVeiculo` int(11) NOT NULL,
  `idPedido` int(11) NOT NULL,
  PRIMARY KEY (`idItens`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_itens`
--

/*!40000 ALTER TABLE `tbl_itens` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_itens` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_modelo`
--

DROP TABLE IF EXISTS `tbl_modelo`;
CREATE TABLE `tbl_modelo` (
  `idModelo` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(100) NOT NULL,
  `ano_fabricacao` date NOT NULL,
  `idCor` int(11) NOT NULL,
  PRIMARY KEY (`idModelo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_modelo`
--

/*!40000 ALTER TABLE `tbl_modelo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_modelo` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_nivel`
--

DROP TABLE IF EXISTS `tbl_nivel`;
CREATE TABLE `tbl_nivel` (
  `idNivel` int(11) NOT NULL AUTO_INCREMENT,
  `niveis` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idNivel`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_nivel`
--

/*!40000 ALTER TABLE `tbl_nivel` DISABLE KEYS */;
INSERT INTO `tbl_nivel` (`idNivel`,`niveis`) VALUES 
 (1,'Administrador'),
 (2,'Propaganga e Publicidade'),
 (3,'Marketing');
/*!40000 ALTER TABLE `tbl_nivel` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_parceiros`
--

DROP TABLE IF EXISTS `tbl_parceiros`;
CREATE TABLE `tbl_parceiros` (
  `idParceiro` int(11) NOT NULL AUTO_INCREMENT,
  `nome_parceiro` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`idParceiro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_parceiros`
--

/*!40000 ALTER TABLE `tbl_parceiros` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_parceiros` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_pedido`
--

DROP TABLE IF EXISTS `tbl_pedido`;
CREATE TABLE `tbl_pedido` (
  `idPedido` int(11) NOT NULL AUTO_INCREMENT,
  `idCliente` int(11) NOT NULL,
  `nome_pedido` varchar(100) NOT NULL,
  `data_pedido` date NOT NULL,
  `data_entrega` date NOT NULL,
  `valor_produto` float(6,2) NOT NULL,
  PRIMARY KEY (`idPedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_pedido`
--

/*!40000 ALTER TABLE `tbl_pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_pedido` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_plano`
--

DROP TABLE IF EXISTS `tbl_plano`;
CREATE TABLE `tbl_plano` (
  `idPlano` int(11) NOT NULL AUTO_INCREMENT,
  `plano` varchar(100) NOT NULL,
  `valor` float(6,2) NOT NULL,
  PRIMARY KEY (`idPlano`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_plano`
--

/*!40000 ALTER TABLE `tbl_plano` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_plano` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_slider`
--

DROP TABLE IF EXISTS `tbl_slider`;
CREATE TABLE `tbl_slider` (
  `idSlider` int(11) NOT NULL AUTO_INCREMENT,
  `imagens` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`idSlider`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_slider`
--

/*!40000 ALTER TABLE `tbl_slider` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_slider` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_tarifas`
--

DROP TABLE IF EXISTS `tbl_tarifas`;
CREATE TABLE `tbl_tarifas` (
  `idTarifa` int(11) NOT NULL AUTO_INCREMENT,
  `idVeiculo` int(11) NOT NULL,
  `valor` float(5,2) DEFAULT NULL,
  PRIMARY KEY (`idTarifa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_tarifas`
--

/*!40000 ALTER TABLE `tbl_tarifas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_tarifas` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_tema`
--

DROP TABLE IF EXISTS `tbl_tema`;
CREATE TABLE `tbl_tema` (
  `idTema` int(11) NOT NULL AUTO_INCREMENT,
  `tema` varchar(50) DEFAULT NULL,
  `idCor` int(11) NOT NULL,
  `imagem` varchar(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`idTema`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_tema`
--

/*!40000 ALTER TABLE `tbl_tema` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_tema` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_termo_aceite`
--

DROP TABLE IF EXISTS `tbl_termo_aceite`;
CREATE TABLE `tbl_termo_aceite` (
  `idAceite` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`idAceite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_termo_aceite`
--

/*!40000 ALTER TABLE `tbl_termo_aceite` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_termo_aceite` ENABLE KEYS */;


--
-- Table structure for table `dbcity_share`.`tbl_veiculo`
--

DROP TABLE IF EXISTS `tbl_veiculo`;
CREATE TABLE `tbl_veiculo` (
  `idVeiculo` int(11) NOT NULL AUTO_INCREMENT,
  `nome_veiculo` varchar(100) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `idFabricante` int(11) NOT NULL,
  `placa` varchar(10) NOT NULL,
  `valor` float(6,2) NOT NULL,
  PRIMARY KEY (`idVeiculo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbcity_share`.`tbl_veiculo`
--

/*!40000 ALTER TABLE `tbl_veiculo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_veiculo` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
