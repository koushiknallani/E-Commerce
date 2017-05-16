CREATE TABLE `guestcart` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `GuestIP` varchar(45) NOT NULL,
  `ProductName` varchar(45) NOT NULL,
  `ProductCost` decimal(5,2) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
