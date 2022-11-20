-- MySQL dump 10.16  Distrib 10.1.48-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: molesrios
-- ------------------------------------------------------
-- Server version	10.1.48-MariaDB-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `t_clientes`
--

DROP TABLE IF EXISTS `t_clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cliente` varchar(250) DEFAULT NULL,
  `apellido_paterno_cliente` varchar(250) DEFAULT NULL,
  `apellido_materno_cliente` varchar(250) DEFAULT NULL,
  `direccion_cliente` varchar(250) DEFAULT NULL,
  `cp_cliente` int(11) DEFAULT NULL,
  `telefono_cliente` int(15) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_clientes`
--

LOCK TABLES `t_clientes` WRITE;
/*!40000 ALTER TABLE `t_clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_pedidos`
--

DROP TABLE IF EXISTS `t_pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_pedidos` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion_pedido` varchar(250) DEFAULT NULL,
  `fecha_pedido_entrante` datetime DEFAULT CURRENT_TIMESTAMP,
  `fecha_entrega_pedido` datetime DEFAULT NULL,
  `fk_id_cliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pedido`),
  KEY `fk_id_cliente` (`fk_id_cliente`),
  CONSTRAINT `t_pedidos_ibfk_1` FOREIGN KEY (`fk_id_cliente`) REFERENCES `t_clientes` (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_pedidos`
--

LOCK TABLES `t_pedidos` WRITE;
/*!40000 ALTER TABLE `t_pedidos` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_quejas`
--

DROP TABLE IF EXISTS `t_quejas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_quejas` (
  `id_queja` int(11) NOT NULL AUTO_INCREMENT,
  `descipcion_queja` varchar(250) DEFAULT NULL,
  `fecha_hora_quejas` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_queja`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_quejas`
--

LOCK TABLES `t_quejas` WRITE;
/*!40000 ALTER TABLE `t_quejas` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_quejas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_usuarios`
--

DROP TABLE IF EXISTS `t_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `fk_id_cliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk_id_cliente` (`fk_id_cliente`),
  CONSTRAINT `t_usuarios_ibfk_1` FOREIGN KEY (`fk_id_cliente`) REFERENCES `t_clientes` (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_usuarios`
--

LOCK TABLES `t_usuarios` WRITE;
/*!40000 ALTER TABLE `t_usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-19 21:05:23
