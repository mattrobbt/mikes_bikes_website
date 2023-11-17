USE `19ac3d01`;
/*!40000 ALTER TABLE `STOCK` DISABLE KEYS */;
INSERT INTO `STOCK` (`ProductCode`,`ProductType`,`Quantity`,`Location`,`BranchID`,`Brand`,`Model`, `Type`, `Price`, `SupplierName`)
VALUES
	(0000000001,'Bike','3','Dundee Store','0000000002','Cannondale','Caad Optimo','Road', '649.99', 'Cannondale'),
	(0000000002,'Bike','6','Edinburgh Store','0000000001','Kona','Rove','Road', '758.99', 'Kona'),
	(0000000003,'Bike','1','Liverpool Store','0000000003','Kona','Kahuna','Mountain', '948.99', 'Kona'),
	(0000000004,'Bike','9','Edinburgh Store','0000000001','Levo','Comp','Electric', '4999.00', 'Levo');
/*!40000 ALTER TABLE `STOCK` ENABLE KEYS */;


