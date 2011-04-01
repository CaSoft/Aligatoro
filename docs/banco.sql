-- MySQL dump 10.13  Distrib 5.1.49, for debian-linux-gnu (i486)
--
-- Host: localhost    Database: aligatoro
-- ------------------------------------------------------
-- Server version	5.1.49-3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `razao_social` varchar(100) DEFAULT NULL,
  `contato` varchar(100) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `telefone1` varchar(13) DEFAULT NULL,
  `telefone2` varchar(13) DEFAULT NULL,
  `celular` varchar(13) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `cnpj` varchar(18) DEFAULT NULL,
  `logradouro` varchar(140) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `complemento` varchar(120) DEFAULT NULL,
  `bairro` varchar(120) DEFAULT NULL,
  `cidade` varchar(120) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `documento` varchar(20) DEFAULT NULL,
  `observacoes` text,
  `datahora` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,0,'Maria das Dores','','','maria@dasdores.com','(13)7777-8888','','','','','','','','','','','','','','0000-00-00 00:00:00'),(2,0,'João da Silva','','','','','','','','','','','','','','','','',NULL,'0000-00-00 00:00:00'),(3,0,'Ana Maria Silva','','Teste','anamaria@silva.com','(13)7788-8899','','','','','Rua das Margaridas','','','','','','','','Nova cliente, com observações no cadastro.','0000-00-00 00:00:00'),(4,0,'Carlos Manoel','','','carlos@email.com','(13)7777-9999','','','','','','','','','','','','','Novo cliente, com data e hora de cadastro automático.','2011-02-14 04:14:22'),(5,0,'Antonio Silva','','','','','','','','','','','','','','','','','','2011-03-31 11:31:05');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `email` varchar(120) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  `datahora` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'admin','Administrador','adm@aligatoro.org','e10adc3949ba59abbe56e057f20f883e',1,'0000-00-00 00:00:00'),(2,'joana','Joana Silva','joana@email.com','e10adc3949ba59abbe56e057f20f883e',1,'2011-04-01 09:01:08'),(3,'joana','Joana Souza','joana@outroemail.com','e10adc3949ba59abbe56e057f20f883e',1,'2011-04-01 03:01:51'),(4,'joana2','Joana Machado','joana@novoemail.com','e10adc3949ba59abbe56e057f20f883e',1,'2011-04-01 04:01:20');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-04-01 17:16:37
