USE `19ac3d01`;
LOCK TABLES `Employee` WRITE;
/*!40000 ALTER TABLE `Employee` DISABLE KEYS */;
INSERT INTO `Employee` (`EmployeeID`,`FirstName`,`LastName`,`PhoneNum`,`Address`,`EmployeeType`, `ContractedHrs`, `PayCode`, `BranchID`, `DateOfBirth`, `Email`)
VALUES
   
  (0000000001,'Michael','Edwards','07860398227','75 Liverpool Road', 'CEO', '40', '1000000001','0000000022','1958-05-01','MichaelEdwards@gmail.com'),
	(0000000002,'Roberto','Firmino','03860229821','13 Victoria Street', 'Marketing Manager', '40', '1000000002','0000000022','1990-07-11','R_Firmino@gmail.com'),
	(0000000003,'Jane','Smith','04860397827','19 Main Road', 'Secretary', '40', '1000000003','0000000022','1978-02-01','JSmith@gmail.com');
    
   
   
  
	

/*!40000 ALTER TABLE `Employee` ENABLE KEYS */;
UNLOCK TABLES;