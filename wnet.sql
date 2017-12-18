-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.1.19-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных wnet
CREATE DATABASE IF NOT EXISTS `wnet` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `wnet`;

-- Дамп структуры для таблица wnet.obj_contracts
CREATE TABLE IF NOT EXISTS `obj_contracts` (
  `id_contract` int(11) NOT NULL AUTO_INCREMENT,
  `id_customer` int(11) NOT NULL,
  `number` varchar(100) NOT NULL,
  `date_sign` date NOT NULL,
  `staff_number` varchar(100) NOT NULL,
  PRIMARY KEY (`id_contract`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы wnet.obj_contracts: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `obj_contracts` DISABLE KEYS */;
INSERT INTO `obj_contracts` (`id_contract`, `id_customer`, `number`, `date_sign`, `staff_number`) VALUES
	(1, 1, 'r-001', '2017-12-17', 'staff 1  with number r-001'),
	(2, 2, 'r-002', '2017-12-17', 'staff 2 with number r-002'),
	(3, 3, 'r-003', '2017-12-17', 'staff 3 with number r-003'),
	(4, 4, 'r-004', '2017-12-17', 'staff 4 with number r-004'),
	(5, 5, 'r-005', '2017-12-17', 'staff 5 with number r-005'),
	(6, 6, 'r-006', '2017-12-17', 'staff 6 with number r-006'),
	(7, 6, 'r-007', '2017-12-17', 'staff 6 with number r-006'),
	(8, 6, 'r-008', '2017-12-17', 'staff 8 with number r-008');
/*!40000 ALTER TABLE `obj_contracts` ENABLE KEYS */;

-- Дамп структуры для таблица wnet.obj_customers
CREATE TABLE IF NOT EXISTS `obj_customers` (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
  `name_customer` varchar(250) NOT NULL,
  `company` enum('company_1','company_2','company_3') NOT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы wnet.obj_customers: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `obj_customers` DISABLE KEYS */;
INSERT INTO `obj_customers` (`id_customer`, `name_customer`, `company`) VALUES
	(1, 'fasya', 'company_1'),
	(2, 'petya', 'company_2'),
	(3, 'kolya', 'company_2'),
	(4, 'seregan', 'company_3'),
	(5, 'oleg', 'company_1'),
	(6, 'svetka', 'company_3');
/*!40000 ALTER TABLE `obj_customers` ENABLE KEYS */;

-- Дамп структуры для таблица wnet.obj_services
CREATE TABLE IF NOT EXISTS `obj_services` (
  `id_services` int(11) NOT NULL AUTO_INCREMENT,
  `id_contract` int(11) NOT NULL,
  `title_service` varchar(250) NOT NULL,
  `status` enum('work','connecting','disconnected') NOT NULL,
  PRIMARY KEY (`id_services`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы wnet.obj_services: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `obj_services` DISABLE KEYS */;
INSERT INTO `obj_services` (`id_services`, `id_contract`, `title_service`, `status`) VALUES
	(1, 1, 'Delivery', 'work'),
	(2, 2, 'Janitors', 'connecting'),
	(3, 3, 'Mechanics', 'disconnected'),
	(4, 4, 'Carpentry', 'work'),
	(5, 5, 'Arbitration', 'connecting'),
	(6, 6, 'Military', 'disconnected'),
	(7, 7, 'Military 1', 'connecting'),
	(8, 8, 'Military 2', 'disconnected');
/*!40000 ALTER TABLE `obj_services` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
