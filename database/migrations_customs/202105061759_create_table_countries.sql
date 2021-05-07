CREATE TABLE `countries` (
  `PaisCodigo` int(11) NOT NULL AUTO_INCREMENT,
  `Abreviatura` char(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `PaisNombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`PaisCodigo`)
);
INSERT INTO `countries` (`PaisCodigo`, `Abreviatura`, `PaisNombre`) VALUES (1,'ABW','Aruba'),(2,'AFG','Afghanistan'),(3,'AGO','Angola'),(4,'AIA','Anguilla'),(5,'ALB','Albania'),(6,'AND','Andorra'),(7,'ANT','Netherlands Antilles'),(8,'ARE','United Arab Emirates'),(9,'ARG','Argentina'),(10,'ARM','Armenia'),(11,'ASM','American Samoa'),(12,'ATA','Antarctica'),(13,'ATF','French Southern territories'),(14,'ATG','Antigua and Barbuda'),(15,'AUS','Australia'),(16,'AUT','Austria'),(17,'AZE','Azerbaijan'),(18,'BDI','Burundi'),(19,'BEL','Belgium'),(20,'BEN','Benin'),(21,'BFA','Burkina Faso'),(22,'BGD','Bangladesh'),(23,'BGR','Bulgaria'),(24,'BHR','Bahrain'),(25,'BHS','Bahamas'),(26,'BIH','Bosnia and Herzegovina'),(27,'BLR','Belarus'),(28,'BLZ','Belize'),(29,'BMU','Bermuda'),(30,'BOL','Bolivia'),(31,'BRA','Brazil'),(32,'BRB','Barbados'),(33,'BRN','Brunei'),(34,'BTN','Bhutan'),(35,'BVT','Bouvet Island'),(36,'BWA','Botswana'),(37,'CAF','Central African Republic'),(38,'CAN','Canada'),(39,'CCK','Cocos (Keeling) Islands'),(40,'CHE','Switzerland'),(41,'CHL','Chile'),(42,'CHN','China'),(43,'CIV','Côte d’Ivoire'),(44,'CMR','Cameroon'),(45,'COD','Congo'),(46,'COG','Congo'),(47,'COK','Cook Islands'),(48,'COL','Colombia'),(49,'COM','Comoros'),(50,'CPV','Cape Verde'),(51,'CRI','Costa Rica'),(52,'CUB','Cuba'),(53,'CXR','Christmas Island'),(54,'CYM','Cayman Islands'),(55,'CYP','Cyprus'),(56,'CZE','Czech Republic'),(57,'DEU','Germany'),(58,'DJI','Djibouti'),(59,'DMA','Dominica'),(60,'DNK','Denmark'),(61,'DOM','Dominican Republic'),(62,'DZA','Algeria'),(63,'ECU','Ecuador'),(64,'EGY','Egypt'),(65,'ERI','Eritrea'),(66,'ESH','Western Sahara'),(67,'ESP','Spain'),(68,'EST','Estonia'),(69,'ETH','Ethiopia'),(70,'FIN','Finland'),(71,'FJI','Fiji Islands'),(72,'FLK','Falkland Islands'),(73,'FRA','France'),(74,'FRO','Faroe Islands'),(75,'FSM','Micronesia'),(76,'GAB','Gabon'),(77,'GBR','United Kingdom'),(78,'GEO','Georgia'),(79,'GHA','Ghana'),(80,'GIB','Gibraltar'),(81,'GIN','Guinea'),(82,'GLP','Guadeloupe'),(83,'GMB','Gambia'),(84,'GNB','Guinea-Bissau'),(85,'GNQ','Equatorial Guinea'),(86,'GRC','Greece'),(87,'GRD','Grenada'),(88,'GRL','Greenland'),(89,'GTM','Guatemala'),(90,'GUF','French Guiana'),(91,'GUM','Guam'),(92,'GUY','Guyana'),(93,'HKG','Hong Kong'),(94,'HMD','Heard Island and McDonald Islands'),(95,'HND','Honduras'),(96,'HRV','Croatia'),(97,'HTI','Haiti'),(98,'HUN','Hungary'),(99,'IDN','Indonesia'),(100,'IND','India'),(101,'IOT','British Indian Ocean Territory'),(102,'IRL','Ireland'),(103,'IRN','Iran'),(104,'IRQ','Iraq'),(105,'ISL','Iceland'),(106,'ISR','Israel'),(107,'ITA','Italy'),(108,'JAM','Jamaica'),(109,'JOR','Jordan'),(110,'JPN','Japan'),(111,'KAZ','Kazakstan'),(112,'KEN','Kenya'),(113,'KGZ','Kyrgyzstan'),(114,'KHM','Cambodia'),(115,'KIR','Kiribati'),(116,'KNA','Saint Kitts and Nevis'),(117,'KOR','South Korea'),(118,'KWT','Kuwait'),(119,'LAO','Laos'),(120,'LBN','Lebanon'),(121,'LBR','Liberia'),(122,'LBY','Libyan Arab Jamahiriya'),(123,'LCA','Saint Lucia'),(124,'LIE','Liechtenstein'),(125,'LKA','Sri Lanka'),(126,'LSO','Lesotho'),(127,'LTU','Lithuania'),(128,'LUX','Luxembourg'),(129,'LVA','Latvia'),(130,'MAC','Macao'),(131,'MAR','Morocco'),(132,'MCO','Monaco'),(133,'MDA','Moldova'),(134,'MDG','Madagascar'),(135,'MDV','Maldives'),(136,'MEX','Mexico'),(137,'MHL','Marshall Islands'),(138,'MKD','Macedonia'),(139,'MLI','Mali'),(140,'MLT','Malta'),(141,'MMR','Myanmar'),(142,'MNG','Mongolia'),(143,'MNP','Northern Mariana Islands'),(144,'MOZ','Mozambique'),(145,'MRT','Mauritania'),(146,'MSR','Montserrat'),(147,'MTQ','Martinique'),(148,'MUS','Mauritius'),(149,'MWI','Malawi'),(150,'MYS','Malaysia'),(151,'MYT','Mayotte'),(152,'NAM','Namibia'),(153,'NCL','New Caledonia'),(154,'NER','Niger'),(155,'NFK','Norfolk Island'),(156,'NGA','Nigeria'),(157,'NIC','Nicaragua'),(158,'NIU','Niue'),(159,'NLD','Netherlands'),(160,'NOR','Norway'),(161,'NPL','Nepal'),(162,'NRU','Nauru'),(163,'NZL','New Zealand'),(164,'OMN','Oman'),(165,'PAK','Pakistan'),(166,'PAN','Panama'),(167,'PCN','Pitcairn'),(168,'PER','Peru'),(169,'PHL','Philippines'),(170,'PLW','Palau'),(171,'PNG','Papua New Guinea'),(172,'POL','Poland'),(173,'PRI','Puerto Rico'),(174,'PRK','North Korea'),(175,'PRT','Portugal'),(176,'PRY','Paraguay'),(177,'PSE','Palestine'),(178,'PYF','French Polynesia'),(179,'QAT','Qatar'),(180,'REU','Réunion'),(181,'ROM','Romania'),(182,'RUS','Russian Federation'),(183,'RWA','Rwanda'),(184,'SAU','Saudi Arabia'),(185,'SDN','Sudan'),(186,'SEN','Senegal'),(187,'SGP','Singapore'),(188,'SGS','South Georgia and the South Sandwich Islands'),(189,'SHN','Saint Helena'),(190,'SJM','Svalbard and Jan Mayen'),(191,'SLB','Solomon Islands'),(192,'SLE','Sierra Leone'),(193,'SLV','El Salvador'),(194,'SMR','San Marino'),(195,'SOM','Somalia'),(196,'SPM','Saint Pierre and Miquelon'),(197,'STP','Sao Tome and Principe'),(198,'SUR','Suriname'),(199,'SVK','Slovakia'),(200,'SVN','Slovenia'),(201,'SWE','Sweden'),(202,'SWZ','Swaziland'),(203,'SYC','Seychelles'),(204,'SYR','Syria'),(205,'TCA','Turks and Caicos Islands'),(206,'TCD','Chad'),(207,'TGO','Togo'),(208,'THA','Thailand'),(209,'TJK','Tajikistan'),(210,'TKL','Tokelau'),(211,'TKM','Turkmenistan'),(212,'TMP','East Timor'),(213,'TON','Tonga'),(214,'TTO','Trinidad and Tobago'),(215,'TUN','Tunisia'),(216,'TUR','Turkey'),(217,'TUV','Tuvalu'),(218,'TWN','Taiwan'),(219,'TZA','Tanzania'),(220,'UGA','Uganda'),(221,'UKR','Ukraine'),(222,'UMI','United States Minor Outlying Islands'),(223,'URY','Uruguay'),(224,'USA','United States'),(225,'UZB','Uzbekistan'),(226,'VAT','Holy See (Vatican City State)'),(227,'VCT','Saint Vincent and the Grenadines'),(228,'VEN','Venezuela'),(229,'VGB','Virgin Islands'),(230,'VIR','Virgin Islands'),(231,'VNM','Vietnam'),(232,'VUT','Vanuatu'),(233,'WLF','Wallis and Futuna'),(234,'WSM','Samoa'),(235,'YEM','Yemen'),(236,'YUG','Yugoslavia'),(237,'ZAF','South Africa'),(238,'ZMB','Zambia'),(239,'ZWE','Zimbabwe');