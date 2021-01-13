
-- Collection of SQL used for our application 
-- MORE USED INTEGRATED INTO PHP IN OUR todo-db.php
-- Creates tables for our database 

-- TABLE INITIALIZATION 

CREATE TABLE IF NOT EXISTS `DeliveryDriverUser` (
  `employeeID` varchar(30) NOT NULL DEFAULT '',
  `first_last` varchar(40) NOT NULL DEFAULT '',
  `location` varchar(20) NOT NULL DEFAULT '',
  `pay` decimal(15,2) DEFAULT NULL,
  `work_status` varchar(20) NOT NULL DEFAULT '',
  `availability` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`employeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `ShopperUser` (
  `username` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `first_name` varchar(20) NOT NULL DEFAULT '',
  `last_name` varchar(20) NOT NULL DEFAULT '',
  `phone_number` decimal(15,0) DEFAULT NULL,
  `password` varchar(50) NOT NULL DEFAULT '',
  `country_of_origin` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`username`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `Apparel` (
  `naming_pattern` varchar(20) NOT NULL DEFAULT '',
  `pattern` varchar(20) NOT NULL DEFAULT '',
  `price` decimal(15,2) DEFAULT NULL,
  `material` varchar(20) NOT NULL DEFAULT '',
  `theme` varchar(20) NOT NULL DEFAULT '',
  `apparel_size` varchar(20) NOT NULL DEFAULT '',
  `color` varchar(20) NOT NULL DEFAULT '',
  `article` varchar(20) NOT NULL DEFAULT '',
  `thrift` varchar(20) NOT NULL DEFAULT '',
  `brand` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`naming_pattern`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `Review` (
  num_rating decimal(20, 0) DEFAULT 10, 
  `text_comment` varchar(80) NOT NULL DEFAULT '',
  `review_number` decimal(20,0) DEFAULT 1, 
  PRIMARY KEY (`review_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `Makeup` (
  `product_name` varchar(50) NOT NULL DEFAULT '',
  `price` decimal(15,2) DEFAULT NULL,
  `skincare` varchar(15) NOT NULL DEFAULT '',
  `face_area` varchar(15) NOT NULL DEFAULT '',
  `color` varchar(15) NOT NULL DEFAULT '',
  `brand` varchar(15) NOT NULL DEFAULT '',
  `vegan` varchar(15) NOT NULL DEFAULT '',
  `affordability` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`product_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- WEAK ENTITIES

CREATE TABLE IF NOT EXISTS `PaymentInfo` (
  `username` varchar(50) NOT NULL DEFAULT ''
	REFERENCES ShopperUser(`username`)
	ON DELETE CASCADE, 
  `email` varchar(50) NOT NULL DEFAULT ''
	REFERENCES ShopperUser(`email`)
	ON DELETE CASCADE, 
  `card_number` decimal(16,0) NOT NULL DEFAULT 1,
  `expiration` varchar(10) NOT NULL DEFAULT '',
  `cvv` decimal(3,0) DEFAULT NULL,
   zip_code decimal(5,0) DEFAULT 11111,
  `bank` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`email`,`username`,`card_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `Address` (
  `username` varchar(50)
	REFERENCES ShopperUser(`username`)
	ON DELETE CASCADE, 
  `email` varchar(50)
	REFERENCES ShopperUser(`email`)
	ON DELETE CASCADE, 
  `nickname` varchar(20) NOT NULL DEFAULT '',
  `street_address` varchar(50) NOT NULL DEFAULT '',
  `apt_number` varchar(20) NOT NULL DEFAULT '',
  `city` varchar(40) NOT NULL DEFAULT '',
  `state` varchar(40) NOT NULL DEFAULT '',
  `country` varchar(30) NOT NULL DEFAULT '',
  zip_code decimal(5,0)  DEFAULT 11111,
  `shipping` varchar(20) NOT NULL DEFAULT '',
  `billing` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`email`,`username`,`nickname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `Makeup` (
  `product_name` varchar(50) NOT NULL DEFAULT '',
  `price` decimal(15,2) DEFAULT NULL,
  `skincare` varchar(15) NOT NULL DEFAULT '',
  `face_area` varchar(15) NOT NULL DEFAULT '',
  `color` varchar(15) NOT NULL DEFAULT '',
  `brand` varchar(15) NOT NULL DEFAULT '',
  `vegan` varchar(15) NOT NULL DEFAULT '',
  `affordability` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`product_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- RELATIONS 

CREATE TABLE IF NOT EXISTS `delivers_to` (
  `employeeID` varchar(30) NOT NULL DEFAULT ''
	REFERENCES DeliveryDriver(`employeeID`)
	ON DELETE CASCADE, 
  `username` varchar(50) NOT NULL DEFAULT ''
	REFERENCES ShopperUser(`username`)
	ON DELETE CASCADE, 
  `email` varchar(50) NOT NULL DEFAULT ''
	REFERENCES ShopperUser(`email`)
	ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `can_purchase_clothing` (
  `naming_pattern` varchar(20) NOT NULL DEFAULT ''
	REFERENCES Apparel(`naming_pattern`)
	ON DELETE CASCADE, 
  `username` varchar(50) NOT NULL DEFAULT ''
	REFERENCES ShopperUser(`username`)
	ON DELETE CASCADE, 
  `email` varchar(50) NOT NULL DEFAULT ''
	REFERENCES ShopperUser(`email`)
	ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `can_purchase_cosmetics` (
   `product_name` varchar(50) NOT NULL DEFAULT ''
	REFERENCES Makeup(`product_name`)
	ON DELETE CASCADE, 
  `username` varchar(50) NOT NULL DEFAULT ''
	REFERENCES ShopperUser(`username`)
	ON DELETE CASCADE, 
  `email` varchar(50) NOT NULL DEFAULT ''
	REFERENCES ShopperUser(`email`)
	ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `can_write` (
  `review_number` decimal(20,0) DEFAULT 1
	REFERENCES Review(`review_number`)
	ON DELETE CASCADE, 
  `username` varchar(50) NOT NULL DEFAULT ''
	REFERENCES ShopperUser(`username`)
	ON DELETE CASCADE, 
  `email` varchar(50) NOT NULL DEFAULT ''
	REFERENCES ShopperUser(`email`)
	ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `written_about_cosmetics` (
  `review_number` decimal(20,0) DEFAULT 1
	REFERENCES Review(`review_number`)
	ON DELETE CASCADE, 
   `product_name` varchar(50) NOT NULL DEFAULT ''
	REFERENCES Makeup(`product_name`)
	ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `written_about_clothing` (
  `review_number` decimal(20,0) DEFAULT 1
	REFERENCES Review(`review_number`)
	ON DELETE CASCADE, 
  `naming_pattern` varchar(20) NOT NULL DEFAULT ''
	REFERENCES Apparel(`naming_pattern`)
	ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- INSERT DATA INTO EACH TABLE 

INSERT INTO `DeliveryDriverUser` (`employeeID`, `first_last`, `location`, `pay`,`work_status`,`availability`) VALUES
('J01','JohnSmith', 'Detroit', 20,'Active','MWF'),
('A01','AnnDouglass', 'NewYorkCity', 20,'Active','MTWTHF'),
('B01','BobWilliams', 'Richmond', 21,'NotActive','MTHF'),
('A02','AlexBrooks', 'LosAngeles', 22,'Active','TTH'),
('A03','AmyClearwater', 'Atlanta', 23,'NotActive','THF'),
('C02','CollinTurner', 'DC', 25,'Active','TWTH'),
('M04','MariaRamirez', 'Phoenix', 23,'Active','TTHF'),
('M05','MiaPhillips', 'Austin', 21,'NotActive','MTF'),
('E07','ErinJones', 'SaltLakeCity', 27,'NotActive','MWF'),
('S05','SusieSamuels', 'Nashville', 28,'Active','TTHF'), 
('J03', 'JaneJohnson', 'D.C.', 18, 'NotActive', 'MWF'), 
('K09', 'KimKardashian', 'Los Angeles', 21, 'Active', 'MTWTHF'), 
('P05', 'ParisHilton', 'New York', 22, 'Active', 'MWF'), 
('J04', 'JeffBezos', 'Santa Fe', 12, 'Active', 'MWTHF'), 
('D09', 'DonaldTrump', 'Brooklyn', 10, 'Active', 'MTWTHF'); 

INSERT INTO `ShopperUser` (`username`, `email`, `first_name`, `last_name`,`phone_number`,`password`, `country_of_origin`) VALUES
('bobama123', 'bobama@gmail.com', 'Barack', 'Obama', 1234567890, 'vote2020', 'USA'),
('nadiah', 'nadia@hassan.com', 'Nadia', 'Hassan', 2758327932, 'channamereya', 'Bangladesh'),
('ezar', 'eza@rasheed.com', 'Eza', 'Rasheed', 7237329823, 'frostythesnowman', 'Pakistan'),
('sais', 'sai@salam.com', 'Sai', 'Salam', 3423038389, 'wahoowa', 'Bangladesh'),
('jihus123', 'ji@hus.com', 'Ji', 'Hus', 9894293733, 'supernova', 'Bangladesh'), 
('siams', 'siam@salam.com', 'Siam', 'Salam', 9384729428, 'hi', 'Bangladesh'), 
('clownery', 'clown@me.com', 'Iam', "Aclown", 0394029584, 'pennywiseistall', 'ChuckECheese'), 
('shahrukh', 'shahrukh@khan.com', 'Shahrukh', 'Khan', 8084472837, 'namaste', 'India'), 
('catiet', 'catie@taphorn.com', 'Caitlin', 'Taphorn', 9274928949, 'bonjour', 'France'), 
('kata', 'kat@ayala.com', 'Katarina', 'Ayala', 9827893784, 'hola', 'El Salvador'),
('sanr', 'sanya@rash.com', 'Sanya', 'Rasheed', 7033419056, 'stranger', 'Pakistan'),
('noorm', 'noor@mah.com', 'Noor', 'Mahmud', 8950572048, 'cats', 'India'),
('zohah', 'zoha@husain.com', 'Zoha', 'Husain', 3831033838, 'thaifood', 'Pakistan'),
('enua', 'enu@ah.com', 'Enaas', 'Ahm', 7140589138, 'chicken', 'Afghanistan'),
('zaia', 'zai@az.com', 'Zain', 'Aziz', 3565427379, 'munchkin', 'Turkey');


INSERT INTO `PaymentInfo` (`username`,`email`, `card_number`, `expiration`, `cvv`, `zip_code`, `bank`) VALUES 
('bobama123', 'bobama@gmail.com', 1234567890123456, '0523', 123, 42341, 'BankOfAmerica'),
('nadiah', 'nadia@hassan.com', 0987654321098765, '0624', 456, 42341, 'PNC'),
('ezar', 'eza@rasheed.com',  4567890123456789, '0824', 789, 42341, 'PNC'),
('sais', 'sai@salam.com',  7890123456789012, '0925', 012, 42341, 'Chase'),
('jihus123', 'ji@hus.com',  9012345678901234, '1129', 345, 42341, 'SunTrust'),
('siams', 'siam@salam.com', 8475029385938592, '1123', 679, 43521, 'CapitalOne'),
('clownery', 'clown@me.com', 0000111122223333, '1124', 010, 43965, 'WellsFargo'), 
('shahrukh', 'shahrukh@khan.com', 7777888899990000, '0836', 009, 36475, 'Discover'), 
('catiet', 'catie@taphorn.com', 9482988430592938, '0926', 859, 22015, 'SunTrust'), 
('kata', 'kat@ayala.com', 7865123456789012, '0322', 673, 22903, 'CapitalOne'), 
('sanr', 'sanya@rash.com', 5674920830136458 , '0614', 877, 20112, 'WellsFargo'),
('noorM', 'noor@mah.com', 9720595239572008, '0523', 123, 22903, 'PNC'),
('zohah', 'zoha@husain.com', 2388432905741375, '0217', 567, 22193, 'SunTrust'),
('enua', 'enu@ah.com', 4457609317850097, '0810', 000, 45682, 'BankOfAmerica'),
('zaia', 'zai@az.com', 8899974789324517, '0920', 493, 88756, 'WellsFargo');


INSERT INTO `Address` (`username`, `email`, `nickname`, `street_address`, `apt_number`, `city`, `state`, `country`, `zip_code`, `shipping`,`billing`) VALUES
('bobama123', 'bobama@gmail.com', 'Barry', '123 White House Road', 'N/A', 'Washington', 'D.C.', 'USA', 27188, 'Y','N'),
('nadiah', 'nadia@hassan.com', 'Nadz', '231 Hello Road', '2A', 'Richmond', 'VA', 'USA', 27188, 'Y','N'),
('ezar', 'eza@rasheed.com', 'Eza', '421 Rainbow Road', '3A', 'Charlottesville', 'VA', 'USA', 22903, 'Y','Y'),
('sais', 'sai@salam.com', 'Sai', '381 Kitty Drive', 'N/A', 'Charlottesville', 'VA', 'USA', 22904, 'Y','Y'),
('jihus123', 'ji@hus.com', 'Ji', '321 Coffee Avenue', 'N/A', 'Detroit', 'MI', 'USA', 48085, 'N','N'),
('siams', 'siam@salam.com', 'Siam', '283 Hi There Ave', 'Apt #1', 'Brooklyn', 'NY', 'USA', 11201, 'Y', 'N'), 
('clownery', 'clown@me.com', 'Pennywise', '100 I Eat Kids Drive', 'N/A', 'Milwaukee', 'WI', 'USA', 53201, 'Y', 'N'), 
('shahrukh', 'shahrukh@khan.com', 'Shahrukh', 'Bollywood Road', 'N/A', 'Los Angeles', 'CA', 'USA', 90210, 'N', 'Y'), 
('catiet', 'catie@taphorn.com', 'Caitlin', '2200 Jefferson Ave', 'Apt #4', 'Charlottesville', 'VA', 'USA', 22903, 'Y', 'N'),
('kata', 'kat@ayala.com', 'Katarina', '2232 Thomas Dr', 'N/A', 'Charlottesville', 'VA', 'USA', 22903, 'Y', 'N'),
('sanr', 'sanya@rash.com', 'Sanu', '709 Berry Lane', '5A', 'Woodbridge', 'VA', 'USA', 23467, 'Y','Y'),
('noorm', 'noor@mah.com', 'Noori', '777 Omega Lane', '8A', 'Fairfax', 'VA', 'USA', 33406, 'Y','N'),
('zohah', 'zoha@husain.com', 'Zee', '693 Main Way', 'N/A', 'Ashburn', 'VA', 'USA', 99562, 'N','Y'),
('enua', 'enu@ah.com', 'Enu', '225 Falls Drive', '3A', 'Lynchburg', 'VA', 'USA',78653, 'N','N'),
('zaia', 'zai@az.com', 'Zaibu', '435 Glacier Way', 'N/A', 'Springfield', 'VA', 'USA', 34278, 'Y','Y');

INSERT INTO Apparel(`naming_pattern`, `pattern`, `price`, `material`, `theme`, `apparel_size`, `color`, `article`, `thrift`, `brand`) VALUES
('SK1','Floral',10.00,'Silk','Party','S','Black','Skirts','Y','Gucci'), 
('FT1','PolkaDot', 20.00,'Cotton', 'Fancy','M','Purple','Tops','N','Michael Kors'),
('MT1','Striped', 30.00,'Polyester', 'Casual','L', 'Green','Tops','Y','PakistaniFashion'),
('FP1','Solid', 40.00,'Cotton','Athletic','L', 'White','Pants','N','Fairies'),
('SW1','Solid', 50.00,'Cotton', 'Casual','XXL','Blue','Sweaters','Y','BDFashion'),
('SH1', 'Solid', 30.00, 'Polyester', 'Casual', 'M', 'White', 'Shorts', 'Y', 'SomeBrand'),
('SW2', 'Striped', 240.00, 'Cashmere', 'Fancy', 'S', 'Red', 'Sweaters', 'Y', 'FancyBrand'), 
('SK2', 'Floral', 30.00, 'Satin', 'Fancy', 'L', 'Maroon', 'Skirts', 'Y', 'BrandNameHere'), 
('TP1', 'Striped', 50.00, 'Denim', 'Casual', 'M', 'Blue', 'Pants', 'Y', 'AnotherBrandHere'), 
('DR1', 'Solid', 45.00, 'Rayon', 'Fancy', 'XS', 'Yellow', 'Dresses', 'N', 'BrandyBrand'), 
('QR1','Solid', 25.00,'Cotton', 'Casual','XS','Black','Pants','Y','ChicBrands'),
('MG3','Striped', 60.00,'Polyester', 'Party','XXS','Red','Cardigans','N','Dazzle'),
('OP6','Plaid', 70.00,'Silk', 'Formal','XL','Mustard','Dresses','Y','GirlFits'),
('BM7','Checks', 95.00,'Chiffon', 'Sportswear','L','Lavender','Tees','N','Adidas'),
('SC3','Floral', 35.00,'Wool', 'Loungewear','M','Maroon','Pajamas','Y','Shein');

INSERT INTO Review(`review_number`, `num_rating`, `text_comment`) VALUES
(1,10, 'Loved it!'), 
(2,7, 'Great service!'), 
(3,9, 'Fast Delivery!'), 
(4,10, 'Wonderful selection of clothes!'), 
(5,3, 'How to order...'), 
(6,10, 'Such good material!'), 
(7,8, 'I have gotten so many compliments on...'), 
(8,9, 'Looks even better in person!'), 
(9,10, 'Such affordable clothes!'), 
(10,8, 'Variety of choices to choose from!'), 
(11, 5, 'Meh'), 
(12, 10, 'Wow. Many love. Much excited.'), 
(13, 7, 'Its aight'), 
(14, 3, 'Only rating so low bc this is Sais site lmao'), 
(15, 10, 'Yaaaaaay'),
(16,10, 'DreamCatcher pallete was beautiful!'), 
(17,7, 'Lipstick was so nice.'), 
(18,9, 'Ugly shade of lipstick'), 
(19,10, 'I loved the Tarte mascara'), 
(20,3, 'omg how to send this product to everyone I know'), 
(21,10, 'So creamy eyeshadow!'), 
(22,8, 'The eyeshadow was so pigmented'), 
(23,9, 'Highlight was so nice'), 
(24,10, 'How is this luxury product so cheap'), 
(25,8, 'Loved the color a lot'), 
(26, 5, 'Meh tbh'), 
(27, 10, 'i dont wear makeup but i like it'), 
(28, 7, 'i didnt like this product'), 
(29, 3, 'i use it everyday'),
(30, 7, 'nope not worth it'),
(31, 4, 'I hated this short'), 
(32, 1, 'I hated the texture of it'), 
(33, 2, 'I think you should have more ripped products'),
(34, 7, 'I loved it a lot'), 
(35, 1, 'I don’t know about this one'),
(36, 3, 'Didnt suit me'),
(37, 10, 'beautiful product'), 
(38, 5, 'its so so'), 
(39, 1, 'i hated it so much waste of money'), 
(40, 10, 'dont listen to these other reviews - top notch products!'); 


INSERT INTO Makeup(`product_name`, `price`, `skincare`, `face_area`,`color`, `brand`, `vegan`, `affordability`) VALUES
('WarriorPalette', 15.00,'N','Eyes','N/A','JuviasPlace','N','$'),
('Lipstick45', 35.00,'N', 'Lips','Maroon','Mac','Y','$$'),
('Maneater', 23.00,'N', 'Eyes', 'Black','Tarte','N','$$'),
('ShapeTapeConcealer', 39.00,'N', 'Face', 'Beige','Tarte','Y','$$'),
('PurityCleanser', 35.00, 'Y',  'Face', 'N/A','Philosophy','Y','$$$'),
('BeautyWipe', 30.00,'Y','Face','N/A','MarioBadescu','Y','$$'),
('PoofFoundation', 55.00,'N', 'Face','Nude','Nars','N','$$$'),
('OolalaLipstick', 15.00,'N', 'Lips', 'Orange','Anastasia','Y','$'),
('GoldenHourHighlighter', 25.00, 'N','Face', 'Gold','Revlon','N','$$'),
('ChiselContour', 40.00, 'N',  'Cheeks', 'Nude', 'Fenty','Y','$$$'),
('BornThisWayFoundation', 40.00, 'N', 'Face', 'Nude', 'TooFaced', 'Y', '$$'), 
('MorpheMatteLiquidLipstick', 10.00, 'N', 'Lips', 'Pink', 'Morphe', 'Y', '$'), 
('ModernRenaissancePalette', 45.00, 'N', 'Eyes', 'Pink', 'Anastasia', 'Y', '$$'), 
('DivineRoseIIShadowPalette', 125.00, 'N', 'Eyes', 'Pink', 'PatMcGrath', 'Y', '$$$'),
('DreamskinSkinPerfector', 85.00, 'Y', 'Face', 'N/A', 'Dior', 'Y', '$$$');

-- RELATIONS - POPULATING DATA 

INSERT INTO delivers_to(`employeeID`,`username`,`email`) VALUES
('A01','ezar','eza@rasheed.com'),
('E07','shahrukh','shahrukh@khan.com'),
('C02','kata','kat@ayala.com'),
('M05','clownery','clown@me.com'),
('J03','enua','enu@ah.com'),
('P05','jihus123','ji@hus.com'),
('A02','noorm','noor@mah.com'),
('D09','bobama123','bobama@gmail.com'),
('S05', 'clownery', 'clown@me.com'),
('P05', 'nadiah', 'nadia@hassan.com'),
('M04', 'jihus123', 'ji@hus.com'),
('J03', 'siams', 'siam@salam.com'),
('J01', 'kata', 'kat@ayala.com'),
('B01', 'shahrukh', 'shahrukh@khan.com'),
('C02','sanr','sanya@rash.com'), 
('M04','zaia','zai@az.com'), 
('M05','enua', 'enu@ah.com'), 
('E07','noorm', 'noor@mah.com'), 
('S05','kata', 'kat@ayala.com'),
('J04','catiet', 'catie@taphorn.com');

INSERT INTO can_purchase_clothing(`naming_pattern`,`username`, `email`) VALUES
('FT1','siams','siam@salam.com'),
('SH1','sanr','sanya@rash.com'),
('OP6','enua','enu@ah.com'),
('FP1','noorm','noor@mah.com'),
('SK2','jihus123','ji@hus.com'),
('TP1','shahrukh','shahrukh@khan.com'),
('SH1','bobama123','bobama@gmail.com'),
('SC3','ezar','eza@rasheed.com'),
('QR1','zaia','zai@az.com'),
('MG3','noorm', 'noor@mah.com'),
('SC3','catiet', 'catie@taphorn.com'),
('BM7','jihus123', 'ji@hus.com'),
('DR1','ezar', 'eza@rasheed.com'),
('TP1','bobama123', 'bobama@gmail.com'),
('SW2', 'clownery', 'clown@me.com'),
('SC3', 'nadiah', 'nadia@hassan.com'),
('SK2', 'jihus123', 'ji@hus.com'),
('MG3', 'siams', 'siam@salam.com'),
('TP1', 'kata', 'kat@ayala.com'),
('MT1', 'shahrukh', 'shahrukh@khan.com');


INSERT INTO can_purchase_cosmetics(`product_name`,`username`,`email`) VALUES
('BeautyWipe','nadiah','nadia@hassan.com'),
('GoldenHourHighlighter','nadiah','nadia@hassan.com'),
('ModernRenaissancePalette','nadiah','nadia@hassan.com'),
('BornThisWayFoundation','nadiah','nadia@hassan.com'),
('DreamskinSkinPerfector','nadiah','nadia@hassan.com'),
('WarriorPalette','kata','kat@ayala.com'),
('Maneater','zohah','zoha@husain.com'),
('PoofFoundation','sais','siam@salam.com'),
('GoldenHourHighlighter','sanr','sanya@rash.com'), 
('PurityCleanser','zaia','zai@az.com'), 
('ShapeTapeConcealer','enua', 'enu@ah.com'), 
('Lipstick45','noorm', 'noor@mah.com'), 
('BeautyWipe','kata', 'kat@ayala.com'),
('PoofFoundation','catiet', 'catie@taphorn.com'),
('WarriorPalette', 'clownery', 'clown@me.com'),
('ChiselContour', 'nadiah', 'nadia@hassan.com'),
('BornThisWayFoundation', 'jihus123', 'ji@hus.com'),
('MorpheMatteLiquidLipstick', 'siams', 'siam@salam.com'),
('ModernRenaissancePalette', 'kata', 'kat@ayala.com'),
('DreamskinSkinPerfector', 'shahrukh', 'shahrukh@khan.com');


INSERT INTO can_write(`review_number`,`username`,`email`) VALUES
(1, 'siams','siam@salam.com'),
(2, 'sanr','sanya@rash.com'),
(3, 'enua','enu@ah.com'),
(4,'noorm','noor@mah.com'),
(5,'jihus123','ji@hus.com'),
(6,'shahrukh','shahrukh@khan.com'),
(7,'bobama123','bobama@gmail.com'),
(8,'ezar','eza@rasheed.com'),
(9,'zaia','zai@az.com'),
(10,'noorm', 'noor@mah.com'),
(11,'catiet', 'catie@taphorn.com'),
(12,'jihus123', 'ji@hus.com'),
(13,'ezar', 'eza@rasheed.com'),
(14,'bobama123', 'bobama@gmail.com'),
(15, 'clownery', 'clown@me.com'),
(16, 'nadiah', 'nadia@hassan.com'),
(17, 'jihus123', 'ji@hus.com'),
(18, 'siams', 'siam@salam.com'),
(19, 'kata', 'kat@ayala.com'),
(20, 'shahrukh', 'shahrukh@khan.com'),
(21,'nadiah','nadia@hassan.com'),
(22,'nadiah','nadia@hassan.com'),
(23,'nadiah','nadia@hassan.com'),
(24,'nadiah','nadia@hassan.com'),
(25,'nadiah','nadia@hassan.com'),
(26,'kata','kat@ayala.com'),
(27,'zohah','zoha@husain.com'),
(28,'sais','siam@salam.com'),
(29,'sanr','sanya@rash.com'), 
(30,'zaia','zai@az.com'), 
(31,'enua', 'enu@ah.com'), 
(32,'noorm', 'noor@mah.com'), 
(33,'kata', 'kat@ayala.com'),
(34,'catiet', 'catie@taphorn.com'),
(35, 'clownery', 'clown@me.com'),
(36, 'nadiah', 'nadia@hassan.com'),
(37, 'jihus123', 'ji@hus.com'),
(38, 'siams', 'siam@salam.com'),
(39, 'kata', 'kat@ayala.com'),
(40, 'shahrukh', 'shahrukh@khan.com');

INSERT INTO written_about_cosmetics(`review_number`, `product_name`) VALUES
(16, 'BeautyWipe'),
(17, 'GoldenHourHighlighter'),
(18, 'ModernRenaissancePalette'),
(19, 'BornThisWayFoundation'),
(20, 'DreamskinSkinPerfector'),
(21,'WarriorPalette'),
(22, 'Maneater'),
(23, 'PoofFoundation'),
(24, 'GoldenHourHighlighter'), 
(25, 'PurityCleanser'), 
(26, 'ShapeTapeConcealer'), 
(27, 'Lipstick45'), 
(28, 'BeautyWipe'),
(29, 'PoofFoundation'),
(30, 'WarriorPalette'),
(36, 'ChiselContour'),
(37,'BornThisWayFoundation'),
(38,'MorpheMatteLiquidLipstick'),
(39,'ModernRenaissancePalette'),
(40,'DreamskinSkinPerfector');

INSERT INTO written_about_clothing(`review_number`, `naming_pattern`) VALUES

(1, 'FT1'),
(2, 'SH1'),
(3, 'OP6'),
(4, 'FP1'),
(5, 'SK2'),
(6, 'TP1'),
(7, 'SH1'),
(8, 'SC3'),
(9, 'QR1'),
(10, 'MG3'),
(11, 'SC3'),
(12, 'BM7'),
(13, 'DR1'),
(14, 'TP1'),
(15, 'SW2'),
(31, 'SC3'),
(32, 'SK2'),
(33, 'MG3'),
(34, 'TP1'),
(35, 'MT1');



-- Part 3 
DESC DeliveryDriverUser
DESC ShopperUser
DESC PaymentInfo
DESC Address
DESC Apparel
DESC Review
DESC Makeup 
DESC delivers_to 
DESC can_purchase_clothing 
DESC can_purchase_cosmetics
DESC can_write
DESC written_about_cosmetics 
DESC written_about_clothing 

SELECT COUNT(*) FROM DeliveryDriverUser;
SELECT COUNT(*) FROM ShopperUser;
SELECT COUNT(*) FROM PaymentInfo;
SELECT COUNT(*) FROM Address;
SELECT COUNT(*) FROM Apparel;
SELECT COUNT(*) FROM Review;
SELECT COUNT(*) FROM Makeup;
SELECT COUNT(*) FROM delivers_to;
SELECT COUNT(*) FROM can_purchase_clothing;
SELECT COUNT(*) FROM can_purchase_cosmetics;
SELECT COUNT(*) FROM can_write;
SELECT COUNT(*) FROM written_about_cosmetics;
SELECT COUNT(*) FROM written_about_clothing;

-- MORE BASIC COMMANDS (our app will incorporate these using PHP)

-- ------------------- NECESSARY SQL COMMANDS USED IN APP ------------------
-- CREATE TABLES AT THE TOP
-- ADD DATA IS INSERT STATEMENTS AT THE TOP 
-- DROP TABLE COMMANDS IF NEEDED
DROP TABLE Address;
DROP TABLE Apparel;
DROP TABLE DeliveryDriverUser;
DROP TABLE Makeup ;
DROP TABLE PaymentInfo;
DROP TABLE Review;
DROP TABLE ShopperUser;
DROP TABLE delivers_to;
DROP TABLE can_purchase_clothing; 
DROP TABLE can_purchase_cosmetics;
DROP TABLE can_write;
DROP TABLE written_about_cosmetics; 
DROP TABLE written_about_clothing; 

-- THE FOLLOWING WILL BE PUT INTO PHP WHERE THE RESPECTIVE ATTRIBUTES / PRIMARY KEYS ARE GOING TO BE 
-- PARAMETERS IN THE PHP FUNCTIONS THAT OUR APP WILL CALL 

-- RETRIEVE DATA 
-- FETCH ALL FROM TABLES
-- Part 3 
SELECT * FROM DeliveryDriverUser;
SELECT * FROM ShopperUser;
SELECT * FROM PaymentInfo;
SELECT * FROM Address;
SELECT * FROM Apparel;
SELECT * FROM Review;
SELECT * FROM Makeup; 
SELECT * FROM delivers_to; 
SELECT * FROM can_purchase_clothing; 
SELECT * FROM can_purchase_cosmetics;
SELECT * FROM can_write;
SELECT * FROM written_about_cosmetics; 
SELECT * FROM written_about_clothing; 

-- FETCH SPECIFICALLY BY PRIMARY KEY 
SELECT * FROM DeliveryDriverUser WHERE employeeID = employeeID
SELECT * FROM ShopperUser WHERE username := username
SELECT * FROM PaymentInfo WHERE card_number := card_number
SELECT * FROM Address WHERE nickname := nickname
SELECT * FROM Apparel WHERE naming_pattern := naming_pattern
SELECT * FROM Review WHERE review_number := review_number
SELECT * FROM Makeup WHERE product_name := product_name
SELECT * FROM delivers_to WHERE employeeID := employeeID
SELECT * FROM can_purchase_clothing WHERE naming_pattern := naming_pattern
SELECT * FROM can_purchase_cosmetics WHERE product_name:=product_name
SELECT * FROM can_write WHERE review_number := review_number
SELECT * FROM written_about_cosmetics WHERE review_number := review_number
SELECT * FROM written_about_clothing WHERE review_number := review_number

-- UPDATE DATA 
UPDATE DeliveryDriverUser SET employeeID:=employeeID, first_last:=first_last, first_last:=first_last, pay:=pay, work_status:=work_status, availability:=availability WHERE employeeID := employeeID
UPDATE ShopperUser SET username:=username, email:=email, first_name:=first_name, last_name:=last_name, phone_number:=phone_number, password:=password, country_of_origin:=country_of_origin WHERE username := username
UPDATE PaymentInfo SET username:=username, email:=email, card_number:=card_number, expiration:=expiration, cvv:=cvv, zip_code:=zip_code, bank:=bank WHERE card_number := card_number
UPDATE Address SET username:=username, email:=email, nickname:=nickname, street_address:=street_address, apt_number:=apt_number, city:=city, country:=country, zip_code:=zip_code, shipping:=shipping,billing:=billing WHERE nickname := nickname
UPDATE Apparel SET naming_pattern:=naming_pattern, pattern:=pattern, price:=price, material:=material, theme:=theme, apparel_size:=apparel_size, color:=color, article:=article, thrift:=thrift, brand:=brand WHERE naming_pattern := naming_pattern
UPDATE Review SET review_number:=review_number, num_rating:=num_rating, text_comment:=text_comment WHERE review_number := review_number 
UPDATE Makeup SET product_name:=product_name, price:=price, skincare:=skincare, face_area:=face_area,color:=color, brand:=brand, vegan:=vegan, affordability:=affordability WHERE product_name := product_name
UPDATE delivers_to SET employeeID:=employeeID,username:=username,email:=email
UPDATE can_purchase_clothing SET naming_pattern:=naming_pattern,username:=username, email:=email
UPDATE can_purchase_cosmetics SET product_name:=product_name,username:=username,email:=email
UPDATE can_write SET review_number:=review_number,username:=username,email:=email
UPDATE written_about_cosmetics SET review_number:=review_number, product_name:=product_name
UPDATE  written_about_clothing SET review_number:=review_number, naming_pattern:=naming_pattern 


-- DELETE DATA BY PRIMARY KEY 
DELETE FROM DeliveryDriverUser WHERE employeeID = employeeID
DELETE FROM ShopperUser WHERE username := username
DELETE FROM PaymentInfo WHERE card_number := card_number
DELETE FROM Address WHERE nickname := nickname
DELETE FROM Apparel WHERE naming_pattern := naming_pattern
DELETE FROM Review WHERE review_number := review_number
DELETE FROM Makeup WHERE product_name := product_name
DELETE FROM delivers_to WHERE employeeID := employeeID
DELETE FROM can_purchase_clothing WHERE naming_pattern := naming_pattern
DELETE FROM can_purchase_cosmetics WHERE product_name := product_name
DELETE FROM can_write WHERE review_number := review_number
DELETE FROM written_about_cosmetics WHERE review_number := review_number
DELETE FROM written_about_clothing WHERE review_number := review_number



-- ADVANCED COMMANDS
DELIMITER $$
CREATE TRIGGER defaultComment
BEFORE INSERT ON Review
FOR EACH ROW
BEGIN
SET new.text_comment = 'I enjoyed my experience.'; 
END
$$
DELIMITER ;

ALTER TABLE Review ADD CHECK (num_rating<=10);