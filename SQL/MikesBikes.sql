# Sequel Pro dump
# Version 1630
# http://code.google.com/p/sequel-pro
#
# Host: 127.0.0.1 (MySQL 5.1.37)
# Database: SQLTutorialMaster
# Generation Time: 2010-01-14 14:44:38 +0000
# ************************************************************

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;



CREATE DATABASE `19ac3d01`;

USE `19ac3d01`;

# Dump of table CARS
# ------------------------------------------------------------

DROP TABLE IF EXISTS `STOCK`;

CREATE TABLE `STOCK` (
  `ProductCode` int(10) NOT NULL,
  `ProductType` varchar(255) NOT NULL,
  `Quantity` int(10),
  `Location` varchar(255) NOT NULL,
  `BranchID` int(10) NOT NULL,
  `Brand` varchar(10),
  `Model` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Price` double(10,2) NOT NULL,
  `SupplierName` varchar(30) NOT NULL,
  
  PRIMARY KEY (`ProductCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

# Dump of table Employee
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Employee`;

CREATE TABLE `Employee` (
    `EmployeeID` INT(10) NOT NULL,
    `FirstName` VARCHAR(60) NOT NULL,
    `LastName` VARCHAR(60) NOT NULL,
    `PhoneNum` VARCHAR(15) NOT NULL,
    `Address` VARCHAR(255) NOT NULL,
    `EmployeeType` varchar(75) NOT NULL,
    `ContractedHrs` int(10) NOT NULL,
    `PayCode` int(10) NOT NULL,
    `BranchID` int(10) NOT NULL,
    `DateOfBirth` DATE NOT NULL,
    `Email` varchar(40) NOT NULL,
    PRIMARY KEY (`EmployeeID`),
    FOREIGN KEY (`BranchID`) REFERENCES Branch(`BranchID`)
)  ENGINE=INNODB DEFAULT CHARSET=LATIN1;


# Dump of table Branch
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Branch`;

CREATE TABLE `Branch` (
  `BranchID` int(10) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `StockModel` varchar(255) NOT NULL,
  `StockProductCode` int(10) NOT NULL,
  PRIMARY KEY (`BranchID`),
  FOREIGN KEY  (`StockProductCode`) REFERENCES Suppliers(`SupplierID`)
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

# Dump of table SALES2
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Order`;

CREATE TABLE `Order` (
  `OrderID` int(10) NOT NULL,
  `OrderDate` DATE NOT NULL,
  `Status` varchar(20) NOT NULL,
  `ShippedDate` DATE NOT NULL,
  `DeliveryDueDate` DATE NOT NULL,
  `BranchID` int(10) NOT NULL,
  `CustomerID` int(10) NOT NULL,
  `TransactionID` int(10) NOT NULL,
  PRIMARY KEY (`OrderID`),
  FOREIGN KEY  (`BranchID`) REFERENCES `Branch`(`BranchID`),
  FOREIGN KEY  (`CustomerID`) REFERENCES `Customer`(`CustomerID`)
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

# Dump of table Warehouse
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Warehouse`;

CREATE TABLE `Warehouse` (
  `WarehouseName` varchar(50) NOT NULL,
  `Location` varchar(255) NOT NULL,
  PRIMARY KEY (`WarehouseName`)
 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Repairs` (
  `RepairID` int(10) NOT NULL,
  `Warranty` int(10),
  `Time` time(6) NOT NULL,
  `Date` DATE NOT NULL,
  `RepairDetails` varchar(255) NOT NULL,
  `BranchID` int(10) NOT NULL,
  `EmployeeID` int(10) NOT NULL,
  `CustomerID` int(10) NOT NULL,
  PRIMARY KEY (`RepairID`),
  FOREIGN KEY  (`BranchID`) REFERENCES `Branch`(`BranchID`),
  FOREIGN KEY  (`CustomerID`) REFERENCES `Customer`(`CustomerID`)
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Customer` (
    `CustomerID` INT(10) NOT NULL,
    `FirstName` VARCHAR(50) NOT NULL,
    `LastName` VARCHAR(50) NOT NULL,
    `Address` VARCHAR(50) NOT NULL,
    `City` VARCHAR(20) NOT NULL,
    `TelNo` VARCHAR(15) NOT NULL,
    `DateOfBirth` DATE NOT NULL,
    `Email` varchar(40) NOT NULL,
    
    PRIMARY KEY (`CustomerID`)
   
)  ENGINE=INNODB DEFAULT CHARSET=LATIN1;

LOCK TABLES `Customer` WRITE;
/*!40000 ALTER TABLE `Customer` DISABLE KEYS */;
INSERT INTO `Customer` (`CustomerID`,`FirstName`,`LastName`,`Address`,`City`,`TelNo`,`DateOfBirth`, `Email`)
VALUES
	(1000000000,'Melvin','Binu','The Hub','Dundee','07843822761','09/08/1999','melvin@bikes.com');
	

/*!40000 ALTER TABLE `Customer` ENABLE KEYS */;
UNLOCK TABLES;


CREATE TABLE `Payroll` (
    `PayCode` int(10) NOT NULL,
    `HourlyRate` float(50) NOT NULL,
    `Holidays` int(10) NOT NULL,
    `EmployeeID` int(10) NOT NULL,
    PRIMARY KEY (`PayCode`),
    FOREIGN KEY (`EmployeeID`) REFERENCES `Employee`(`EmployeeID`)
)  ENGINE=INNODB DEFAULT CHARSET=LATIN1;


CREATE TABLE `Suppliers` (
    `SupplierName` varchar(50) NOT NULL,
    `Address` varchar(255) NOT NULL,
    `TelNo` varchar(15) NOT NULL,
    `ShipmentID` int(10) NOT NULL,
    `SupplierID` int(10) NOT NULL,
    PRIMARY KEY (`SupplierID`)
)  ENGINE=INNODB DEFAULT CHARSET=LATIN1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
