-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.22-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para medlar
CREATE DATABASE IF NOT EXISTS `medlar` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `medlar`;

-- Copiando estrutura para tabela medlar.estoque
CREATE TABLE IF NOT EXISTS `estoque` (
  `idestoque` int(11) NOT NULL AUTO_INCREMENT,
  `idremedio` int(11) NOT NULL,
  `caixas` int(11) NOT NULL,
  `unid_cp` int(11) NOT NULL,
  `add_cp` int(11) NOT NULL,
  `obs` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idestoque`) USING BTREE,
  KEY `FK_estoque_medicamentos` (`idremedio`),
  CONSTRAINT `FK_estoque_medicamentos` FOREIGN KEY (`idremedio`) REFERENCES `medicamentos` (`idremedio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela medlar.estoque: ~10 rows (aproximadamente)
REPLACE INTO `estoque` (`idestoque`, `idremedio`, `caixas`, `unid_cp`, `add_cp`, `obs`) VALUES
	(1, 31, 12, 2, 0, 'sla'),
	(2, 2, 12, 2, 0, ''),
	(3, 2, 11, 2, 0, ''),
	(4, 2, 2, 2, 0, ''),
	(6, 3, 12, 2, 0, 'nao sei'),
	(7, 3, 12, 2, 0, 'nao sei'),
	(8, 3, 12, 2, 0, 'nao sei'),
	(9, 3, 12, 2, 0, 'nao sei'),
	(11, 32, 2, 20, 0, ''),
	(12, 32, 11, 20, 0, 'nao sei');

-- Copiando estrutura para tabela medlar.idosos
CREATE TABLE IF NOT EXISTS `idosos` (
  `ididoso` int(11) NOT NULL AUTO_INCREMENT,
  `nome_idoso` varchar(50) NOT NULL,
  `nascimento` date DEFAULT NULL,
  `genero` varchar(1) NOT NULL DEFAULT '',
  `alergia` varchar(50) NOT NULL,
  `comorbidade` varchar(50) NOT NULL,
  `obs` varchar(50) DEFAULT NULL,
  `numero_sus` int(11) NOT NULL DEFAULT 0,
  `cpf` int(11) NOT NULL DEFAULT 0,
  `plano_saude` varchar(3) NOT NULL DEFAULT '',
  `nome_resp` varchar(50) NOT NULL,
  `telefone_resp` int(11) NOT NULL DEFAULT 0,
  `cpf_resp` varchar(50) NOT NULL DEFAULT '0',
  `parentesco` varchar(50) NOT NULL,
  `endereco_resp` varchar(50) NOT NULL,
  PRIMARY KEY (`ididoso`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela medlar.idosos: ~11 rows (aproximadamente)
REPLACE INTO `idosos` (`ididoso`, `nome_idoso`, `nascimento`, `genero`, `alergia`, `comorbidade`, `obs`, `numero_sus`, `cpf`, `plano_saude`, `nome_resp`, `telefone_resp`, `cpf_resp`, `parentesco`, `endereco_resp`) VALUES
	(1, 'jurema', '2021-12-14', 'F', 'pao', 'asma', 'sla', 92838, 8323284, 'sim', 'rogerio', 123245, '0', 'vo', 'av inacio pinto'),
	(2, 'jeremias', '2021-12-08', 'M', 'leite', 'auzaimer', 'sla', 34364757, 346547, 'nao', 'caio', 239356, '0', 'sobrinho', 'sao paulo'),
	(8, 'jonas', '2022-02-10', 'M', 'leite', 'auzaimer', 'sla', 34364757, 346547, 'nao', 'caiod', 23935637, '0', 'sobrinho', 'sao paulo'),
	(11, 'jeremias jose da silva', '2022-03-01', 'M', 'leite', 'auzaimer', 'sla', 34364757, 346547, 'nao', 'caio', 23935637, '0', 'sobrinho', 'sao paulo'),
	(13, 'rodiscleyson', '2022-03-28', 'M', 'trigo', 'asma', 'sla', 23242356, 2147483647, 'sim', 'carlos', 2147483647, '0', 'tio', 'ifdsiogfgdgfg'),
	(41, 'cleide', '1922-03-14', 'F', 'camarao', 'auzaimer', 'not have', 2147483647, 2147483647, 'nao', 'greg', 2147483647, '0', 'conhecido', 'embaixo da ponte'),
	(49, 'jonas', '2022-08-03', 'M', 'leite', 'auzaimer', 'sla', 34364757, 346547, 'sim', 'caio', 239356, '43563464', 'sobrinho', 'sao paulo'),
	(58, 'pedro', '2022-08-31', 'M', 'peixe', 'epatite', 'nao sei', 34364757, 32978562, 'sim', 'caio', 23935637, '', 'sobrinho', 'sao paulo'),
	(59, 'josicleide', '2022-08-17', 'F', 'leite', 'auzaimer', 'sla', 343647, 346547, 'sim', 'caio', 23935637, '43563464', 'sobrinho', 'sao paulo'),
	(61, 'claudete', '2022-08-09', 'F', 'leite', 'auzaimer', 'sla', 34364757, 346547, 'sim', 'caiod', 375735, '43563464', 'conhecido', 'embaixo da ponte'),
	(62, 'claudete', '2022-08-09', 'F', 'leite', 'auzaimer', 'sla', 34364757, 346547, 'sim', 'caiod', 375735, '43563464', 'conhecido', 'embaixo da ponte'),
	(63, 'juvenaldo', '1945-06-14', 'M', 'frutos do mar', 'asma', 'nao tem', 349865346, 39578358, 'nao', 'dani', 346637, '45674747', 'neto', 'embaixo da ponte'),
	(64, '', '0000-00-00', '', '', '', '', 0, 0, '', '', 0, '', '', '');

-- Copiando estrutura para tabela medlar.medicamentos
CREATE TABLE IF NOT EXISTS `medicamentos` (
  `idremedio` int(11) NOT NULL AUTO_INCREMENT,
  `nome_remed` varchar(50) NOT NULL DEFAULT '',
  `dosagem` varchar(50) NOT NULL,
  `descricao` varchar(50) NOT NULL DEFAULT '',
  `obs` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idremedio`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela medlar.medicamentos: ~8 rows (aproximadamente)
REPLACE INTO `medicamentos` (`idremedio`, `nome_remed`, `dosagem`, `descricao`, `obs`) VALUES
	(1, 'paracetamol', '750', 'dores', 'sla'),
	(2, 'clonazepam', '200', 'fsgfsfdgs', 'sla'),
	(3, 'doril', '300', 'dores', 'sla'),
	(31, 'doril', '400', 'dores', 'sla'),
	(32, 'buscopan', '100', 'dor renal', 'nao sei'),
	(33, 'paracetamol', '500', 'dor de cabeça', 'nao tomar muito'),
	(36, 'paracetamol', '1000', 'dor de cabeça', 'nao tomar muito'),
	(37, 'paracetamol', '200', 'dores', 'nao sei'),
	(38, 'clonazepam', '200', 'dor renal', 'nao sei');

-- Copiando estrutura para tabela medlar.utiliza
CREATE TABLE IF NOT EXISTS `utiliza` (
  `idutiliza` int(11) NOT NULL AUTO_INCREMENT,
  `ididoso` int(11) NOT NULL DEFAULT 0,
  `idremedio` int(11) NOT NULL,
  `posologia` int(11) NOT NULL DEFAULT 0,
  `periodo` int(11) NOT NULL DEFAULT 0,
  `obs` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idutiliza`),
  KEY `FK_utiliza_idosos` (`ididoso`),
  KEY `idremedio` (`idremedio`),
  CONSTRAINT `FK_utiliza_idosos` FOREIGN KEY (`ididoso`) REFERENCES `idosos` (`ididoso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_utiliza_medicamentos` FOREIGN KEY (`idremedio`) REFERENCES `medicamentos` (`idremedio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela medlar.utiliza: ~12 rows (aproximadamente)
REPLACE INTO `utiliza` (`idutiliza`, `ididoso`, `idremedio`, `posologia`, `periodo`, `obs`) VALUES
	(18, 1, 1, 0, 0, 'sla'),
	(19, 1, 2, 0, 0, 'sla'),
	(20, 1, 3, 0, 0, 'sla'),
	(33, 2, 1, 0, 0, 'sla'),
	(38, 58, 2, 0, 0, 'nao sei'),
	(40, 58, 32, 0, 0, 'sla'),
	(41, 1, 31, 1, 30, 'nao sei'),
	(42, 1, 1, 1, 30, 'nao sei'),
	(43, 1, 1, 1, 30, 'nao sei'),
	(44, 1, 1, 1, 30, 'nao sei'),
	(45, 1, 1, 1, 30, 'nao sei'),
	(46, 1, 1, 1, 30, 'nao sei'),
	(47, 63, 32, 2, 40, 'toma com agua'),
	(48, 1, 2, 1, 30, 'nao sei');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
