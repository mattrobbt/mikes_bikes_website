USE `19ac3d01`;
LOCK TABLES `Customer` WRITE;
/*!40000 ALTER TABLE `Customer` DISABLE KEYS */;
INSERT INTO `Customer` (`CustomerID`,`FirstName`,`LastName`,`Address`,`City`,`TelNo`,`DateOfBirth`, `Email`)
VALUES
   
    (1000000130,'Cody','Millar','75 Victoria Road','Linton','07860798487','1994-02-23','CodyMillar@teleworm.us'),
    (1000000131,'Thomas','Maclean','33 Hindhead Road','EAKRING','07976111933','09-08-1969','HenryPatel@jourrapide.com'),
    (1000000132,'Anka','Grabowska','70 Jesmond Rd','Kilburn','07749384249','1990-','HenryPatel@jourrapide.com'),
	(1000000133,'Henry ','Patel','58 Clasper Way','HESLEDEN','07903273629','09-08-1969','HenryPatel@jourrapide.com'),
	(1000000134,'Henry ','Patel','58 Clasper Way','HESLEDEN','07903273629','09-08-1969','HenryPatel@jourrapide.com');
  
	

/*!40000 ALTER TABLE `Customer` ENABLE KEYS */;
UNLOCK TABLES;
