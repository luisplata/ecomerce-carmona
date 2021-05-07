CREATE TABLE `states` (
  `DisCodigo` int(11) NOT NULL AUTO_INCREMENT,
  `DisNombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `AbPais` char(5) COLLATE utf8_spanish2_ci DEFAULT 'COL',
  `CodPais` int(11) DEFAULT NULL,
  PRIMARY KEY (`DisCodigo`)
);
INSERT INTO `states` (`DisCodigo`, `DisNombre`, `AbPais`, `CodPais`) VALUES (1,'Abhasia [Aphazeti]','GEO',78),(2,'Abidjan','CIV',43),(3,'Abruzzit','ITA',107),(4,'Abu Dhabi','ARE',8),(5,'Aceh','IDN',99),(6,'Acre','BRA',31),(7,'Adamstown','PCN',167),(8,'Adana','TUR',216),(9,'Addis Abeba','ETH',69),(10,'Aden','YEM',235),(11,'Adiyaman','TUR',216),(12,'Adygea','RUS',182),(13,'Adzaria [Atšara]','GEO',78),(14,'Afyon','TUR',216),(15,'Agaña','GUM',91),(16,'Aguascalientes','MEX',136),(17,'Ahal','TKM',211),(18,'Aichi','JPN',110),(19,'Ajman','ARE',8),(20,'Akershus','NOR',160),(21,'Akita','JPN',110),(22,'Aksaray','TUR',216),(23,'al-Anbar','IRQ',104),(24,'al-Asima','KWT',118),(25,'al-Bahr al-Abyad','SDN',185),(27,'al-Batina','OMN',164),(28,'al-Buhayra','EGY',64),(29,'al-Daqahliya','EGY',64),(30,'al-Faiyum','EGY',64),(31,'al-Gharbiya','EGY',64),(32,'al-Hasaka','SYR',204),(33,'al-Jazira','SDN',185),(34,'al-Khudud al-Samaliy','SAU',184),(35,'al-Manama','BHR',24),(36,'al-Minufiya','EGY',64),(37,'al-Minya','EGY',64),(38,'al-Najaf','IRQ',104),(39,'al-Qadarif','SDN',185),(40,'al-Qadisiya','IRQ',104),(41,'al-Qalyubiya','EGY',64),(42,'al-Qasim','SAU',184),(43,'al-Raqqa','SYR',204),(44,'al-Shamal','LBN',120),(45,'al-Sharqiya','EGY',64),(46,'al-Sharqiya','SAU',184),(47,'al-Sulaymaniya','IRQ',104),(48,'al-Tamim','IRQ',104),(49,'al-Zarqa','JOR',109),(50,'al-Zawiya','LBY',122),(51,'Alabama','USA',224),(52,'Alagoas','BRA',31),(53,'Alaska','USA',224),(54,'Alberta','CAN',38),(55,'Aleksandria','EGY',64),(56,'Aleppo','SYR',204),(57,'Alger','DZA',62),(58,'Almaty','KAZ',111),(59,'Almaty Qalasy','KAZ',111),(60,'Alofi','NIU',158),(61,'Alsace','FRA',73),(62,'Altai','RUS',182),(63,'Alto Paraná','PRY',176),(64,'Amapá','BRA',31),(65,'Amazonas','COL',48),(66,'Amazonas','BRA',31),(67,'Amhara','ETH',69),(68,'Amman','JOR',109),(69,'Amur','RUS',182),(70,'An Giang','VNM',231),(71,'Anambra & Enugu & Eb','NGA',156),(72,'Ancash','PER',168),(73,'Andalusia','ESP',67),(74,'Andhra Pradesh','IND',100),(75,'Andijon','UZB',225),(76,'Andorra la Vella','AND',6),(77,'Anhalt Sachsen','DEU',59),(78,'Anhui','CHN',42),(79,'Ankara','TUR',216),(80,'Annaba','DZA',62),(81,'Antalya','TUR',216),(82,'Antananarivo','MDG',134),(83,'Antioquia','COL',48),(84,'Antofagasta','CHL',41),(85,'Antwerpen','BEL',19),(86,'Anzoátegui','VEN',228),(87,'Aomori','JPN',110),(88,'Apulia','ITA',107),(89,'Apure','VEN',228),(90,'Aqtöbe','KAZ',111),(91,'Aqua Grande','STP',197),(92,'Aquitaine','FRA',73),(93,'Arad','ROM',181),(94,'Aragonia','ESP',67),(95,'Aragua','VEN',228),(96,'Arauca','COL',48),(97,'Archipiélago de san andrés','COL',48),(98,'Ardebil','IRN',103),(99,'Arecibo','PRI',173),(100,'Arequipa','PER',168),(101,'Arges','ROM',181),(102,'Århus','DNK',60),(103,'Ariana','TUN',215),(104,'Arizona','USA',224),(105,'Arkangeli','RUS',182),(106,'Arkansas','USA',224),(107,'ARMM','PHL',169),(108,'Arusha','TZA',219),(109,'Ashanti','GHA',79),(110,'Asir','SAU',184),(111,'Assam','IND',100),(112,'Assuan','EGY',64),(113,'Astana','KAZ',111),(114,'Astrahan','RUS',182),(115,'Asturia','ESP',67),(116,'Asunción','PRY',176),(117,'Asyut','EGY',64),(118,'Atacama','CHL',41),(119,'Atacora','BEN',20),(120,'Atlántico','COL',48),(121,'Atlántida','HND',95),(122,'Atlantique','BEN',20),(123,'Attika','GRC',86),(124,'Atyrau','KAZ',111),(125,'Auckland','NZL',163),(126,'Auvergne','FRA',73),(127,'Ayacucho','PER',168),(128,'Aydin','TUR',216),(129,'Azuay','ECU',63),(130,'Ba Ria-Vung Tau','VNM',231),(131,'Babil','IRQ',104),(132,'Bac Thai','VNM',231),(133,'Bacau','ROM',181),(134,'Bács-Kiskun','HUN',98),(135,'Baden-Württemberg','DEU',59),(136,'Baghdad','IRQ',104),(137,'Bahia','BRA',31),(138,'Bahr al-Jabal','SDN',185),(139,'Baijeri','DEU',59),(140,'Baja California','MEX',136),(141,'Baja California Sur','MEX',136),(142,'Baki','AZE',17),(143,'Balears','ESP',67),(144,'Bali','IDN',99),(145,'Balikesir','TUR',216),(146,'Balkh','AFG',2),(147,'Balti','MDA',133),(148,'Baluchistan','PAK',15),(149,'Bamako','MLI',139),(150,'Banaadir','SOM',195),(151,'Bandundu','COD',45),(152,'Bangkok','THA',208),(153,'Bangui','CAF',37),(154,'Bani Suwayf','EGY',64),(155,'Banjul','GMB',83),(156,'Baranya','HUN',98),(157,'Barinas','VEN',228),(158,'Barisal','BGD',22),(159,'Bas-Zaïre','COD',45),(160,'Basel-Stadt','CHE',40),(161,'Baskimaa','ESP',67),(162,'Baškortostan','RUS',182),(163,'Basra','IRQ',104),(164,'Basse-Normandie','FRA',73),(165,'Basse-Terre','GLP',82),(166,'Batman','TUR',216),(167,'Batna','DZA',62),(168,'Battambang','KHM',114),(169,'Bauchi & Gombe','NGA',156),(170,'Bayamón','PRI',173),(171,'Béchar','DZA',62),(172,'Beirut','LBN',120),(173,'Béjaïa','DZA',62),(174,'Belgorod','RUS',182),(175,'Belize City','BLZ',28),(176,'Bender (Tîghina)','MDA',133),(177,'Bengasi','LBY',122),(178,'Bengkulu','IDN',99),(179,'Benguela','AGO',3),(180,'Benue','NGA',156),(181,'Berliini','DEU',59),(182,'Bern','CHE',40),(183,'Bicol','PHL',169),(184,'Bihar','IND',100),(185,'Bihor','ROM',181),(186,'Binh Dinh','VNM',231),(187,'Binh Thuan','VNM',231),(188,'Bíobío','CHL',41),(189,'Bioko','GNQ',85),(190,'Biserta','TUN',215),(191,'Bishkek shaary','KGZ',113),(192,'Biskra','DZA',62),(193,'Bissau','GNB',84),(194,'Blantyre','MWI',149),(195,'Blida','DZA',62),(196,'Bogotá d.c','COL',48),(197,'Bolívar','COL',48),(198,'Bolívar','VEN',228),(199,'Borgou','BEN',20),(200,'Borno & Yobe','NGA',156),(201,'Borsod-Abaúj-Zemplén','HUN',98),(202,'Botosani','ROM',181),(203,'Bouaké','CIV',43),(204,'Boulkiemdé','BFA',23),(205,'Bourgogne','FRA',73),(206,'Boyacá','COL',48),(207,'Braga','PRT',175),(208,'Braila','ROM',181),(209,'Brandenburg','DEU',59),(210,'Brasov','ROM',181),(211,'Bratislava','SVK',199),(212,'Brazzaville','COG',46),(213,'Bremen','DEU',59),(214,'Brest','BLR',27),(215,'Bretagne','FRA',73),(216,'British Colombia','CAN',38),(217,'Brjansk','RUS',182),(218,'Brunei and Muara','BRN',33),(219,'Bryssel','BEL',19),(220,'Budapest','HUN',98),(221,'Buenos Aires','ARG',9),(222,'Buhoro','UZB',225),(223,'Bujumbura','BDI',18),(224,'Bukarest','ROM',181),(225,'Bulawayo','ZWE',239),(226,'Burgas','BGR',23),(227,'Burjatia','RUS',182),(228,'Bursa','TUR',216),(229,'Bushehr','IRN',103),(230,'Buzau','ROM',181),(231,'Córdoba','COL',48),(232,'Cagayan Valley','PHL',169),(233,'Caguas','PRI',173),(234,'Cajamarca','PER',168),(235,'Calabria','ITA',107),(236,'Caldas','COL',48),(237,'California','USA',224),(238,'Callao','PER',168),(239,'Camagüey','CUB',52),(240,'Campania','ITA',107),(241,'Campeche','MEX',136),(242,'Can Tho','VNM',231),(243,'Canary Islands','ESP',67),(244,'Cantabria','ESP',67),(245,'Canterbury','NZL',163),(246,'Cap-Vert','SEN',186),(247,'Capital Region','AUS',15),(248,'Caquetá','COL',48),(249,'CAR','PHL',169),(250,'Carabobo','VEN',228),(251,'Caraga','PHL',169),(252,'Caras-Severin','ROM',181),(253,'Carolina','PRI',173),(254,'Caroni','TTO',214),(255,'Casablanca','MAR',131),(256,'Casanare','COL',48),(257,'Castilla and León','ESP',67),(258,'Castries','LCA',123),(259,'Catamarca','ARG',9),(260,'Cauca','COL',48),(261,'Cayenne','GUF',90),(262,'Cayo','BLZ',28),(263,'Ceará','BRA',31),(264,'Central','ZMB',238),(265,'Central','FJI',71),(266,'Central','KEN',112),(267,'Central','LKA',125),(268,'Central','NPL',161),(269,'Central','PRY',176),(270,'Central','UGA',220),(271,'Central Java','IDN',99),(272,'Central Luzon','PHL',169),(273,'Central Macedonia','GRC',86),(274,'Central Mindanao','PHL',169),(275,'Central Serbia','YUG',236),(276,'Central Visayas','PHL',169),(277,'Centre','CMR',44),(278,'Centre','FRA',73),(279,'Cesar','COL',48),(280,'Ciego de Ávila','CUB',52),(281,'Cienfuegos','CUB',52),(282,'Città del Vaticano','VAT',226),(283,'Ciudad Losada','VEN',228),(284,'Cizah','UZB',225),(285,'Cluj','ROM',181),(286,'Coahuila de Zaragoza','MEX',136),(287,'Coast','KEN',112),(288,'Cochabamba','BOL',30),(289,'Coímbra','PRT',175),(290,'Colima','MEX',136),(291,'Colorado','USA',224),(292,'Conakry','GIN',81),(293,'Connecticut','USA',224),(294,'Constanta','ROM',181),(295,'Constantine','DZA',62),(296,'Copperbelt','ZMB',238),(297,'Coquimbo','CHL',41),(298,'Córdoba','ARG',9),(299,'Corrientes','ARG',9),(300,'Cortés','HND',95),(301,'Çorum','TUR',216),(302,'Crete','GRC',86),(303,'Cross River','NGA',156),(304,'Csongrád','HUN',98),(305,'Cundinamarca','COL',48),(306,'Curaçao','ANT',7),(307,'Cusco','PER',168),(308,'Chaco','ARG',9),(309,'Chagang','PRK',174),(310,'Chaharmahal va Bakht','IRN',103),(311,'Champagne-Ardenne','FRA',73),(312,'Chandigarh','IND',100),(313,'Changhwa','TWN',218),(314,'Chaouia-Ouardigha','MAR',131),(315,'Chari-Baguirmi','TCD',206),(316,'Cheju','KOR',117),(317,'Chhatisgarh','IND',100),(318,'Chiang Mai','THA',208),(319,'Chiapas','MEX',136),(320,'Chiayi','TWN',218),(321,'Chiba','JPN',110),(322,'Chihuahua','MEX',136),(323,'Chimborazo','ECU',63),(324,'Chinandega','NIC',157),(325,'Chisinau','MDA',133),(326,'Chittagong','BGD',22),(327,'Chlef','DZA',62),(328,'Chocó','COL',48),(329,'Chollabuk','KOR',117),(330,'Chollanam','KOR',117),(331,'Chongqing','CHN',42),(332,'Chubut','ARG',9),(333,'Chungchongbuk','KOR',117),(334,'Chungchongnam','KOR',117),(335,'Chuquisaca','BOL',30),(336,'Chuuk','FSM',75),(337,'Dac Lac','VNM',231),(338,'Dagestan','RUS',182),(339,'Dakhlet Nouâdhibou','MRT',145),(340,'Daloa','CIV',43),(341,'Damascus','SYR',204),(342,'Damaskos','SYR',204),(343,'Dâmbovita','ROM',181),(344,'Dar es Salaam','TZA',219),(345,'Darfur al-Janubiya','SDN',185),(346,'Darfur al-Shamaliya','SDN',185),(347,'Dashhowuz','TKM',211),(348,'Daugavpils','LVA',129),(349,'Dayr al-Zawr','SYR',204),(350,'Delhi','IND',100),(351,'Denizli','TUR',216),(352,'Dhaka','BGD',22),(353,'DhiQar','IRQ',104),(354,'Dili','TMP',212),(355,'Diourbel','SEN',186),(356,'Dire Dawa','ETH',69),(357,'District of Columbia','USA',224),(358,'Distrito Central','HND',95),(359,'Distrito Federal','ARG',9),(360,'Distrito Federal','BRA',31),(361,'Distrito Federal','MEX',136),(362,'Distrito Federal','VEN',228),(363,'Distrito Nacional','DOM',61),(364,'Diyala','IRQ',104),(365,'Diyarbakir','TUR',216),(366,'Djibouti','DJI',60),(367,'Dnipropetrovsk','UKR',221),(368,'Dnjestria','MDA',133),(369,'Dodoma','TZA',219),(370,'Doha','QAT',179),(371,'Dolj','ROM',181),(372,'Dolnoslaskie','POL',172),(373,'Donetsk','UKR',221),(374,'Dong Nai','VNM',231),(375,'Douglas','GBR',77),(376,'Doukkala-Abda','MAR',131),(377,'Drenthe','NLD',159),(378,'Duarte','DOM',61),(379,'Dubai','ARE',8),(380,'Dunedin','NZL',163),(381,'Durango','MEX',136),(382,'East Azerbaidzan','IRN',103),(383,'East Falkland','FLK',72),(384,'East Flanderi','BEL',19),(385,'East Götanmaan län','SWE',201),(386,'East Java','IDN',99),(387,'East Kasai','COD',45),(388,'East Kazakstan','KAZ',111),(389,'Eastern','KEN',112),(390,'Eastern','NPL',161),(391,'Eastern Cape','ZAF',237),(392,'Eastern Visayas','PHL',169),(393,'Edirne','TUR',216),(394,'Edo & Delta','NGA',156),(395,'Ehime','JPN',110),(396,'El Oro','ECU',63),(397,'El-Aaiún','ESH',66),(398,'Elâzig','TUR',216),(399,'Emilia-Romagna','ITA',107),(400,'England','GBR',77),(401,'Entre Rios','ARG',9),(402,'Equateur','COD',45),(403,'Erzincan','TUR',216),(404,'Erzurum','TUR',216),(405,'Esfahan','IRN',103),(406,'Eskisehir','TUR',216),(407,'Esmeraldas','ECU',63),(408,'Espírito Santo','BRA',31),(409,'Estuaire','GAB',76),(410,'Extremadura','ESP',67),(411,'Extrême-Nord','CMR',44),(412,'Fakaofo','TKL',210),(413,'Falcón','VEN',228),(414,'Fargona','UZB',225),(415,'Fars','IRN',103),(416,'Federaatio','BIH',26),(417,'Federal Capital Dist','NGA',156),(418,'Fejér','HUN',98),(419,'Fès-Boulemane','MAR',131),(420,'Fianarantsoa','MDG',134),(421,'Flevoland','NLD',159),(422,'Florida','USA',224),(423,'Flying Fish Cove','CXR',53),(424,'Formosa','ARG',9),(425,'Fort-de-France','MTQ',147),(426,'Francistown','BWA',36),(427,'Franche-Comté','FRA',73),(428,'Frederiksberg','DNK',60),(429,'Free State','ZAF',237),(430,'Friuli-Venezia Giuli','ITA',107),(431,'Fujian','CHN',42),(432,'Fukui','JPN',110),(433,'Fukuoka','JPN',110),(434,'Fukushima','JPN',110),(435,'Funafuti','TUV',217),(436,'Fyn','DNK',60),(437,'Gabès','TUN',215),(438,'Gaborone','BWA',36),(439,'Galati','ROM',181),(440,'Galicia','ESP',67),(441,'Gäncä','AZE',17),(442,'Gansu','CHN',42),(443,'Gauteng','ZAF',237),(444,'Gävleborgs län','SWE',201),(445,'Gaza','MOZ',144),(446,'Gaza','PSE',177),(447,'Gaziantep','TUR',216),(448,'Gelderland','NLD',159),(449,'Geneve','CHE',40),(450,'Georgetown','GUY',92),(451,'Georgia','USA',224),(452,'Gharb-Chrarda-Béni H','MAR',131),(453,'Ghardaïa','DZA',62),(454,'Gibraltar','GIB',80),(455,'Gifu','JPN',110),(456,'Gilan','IRN',103),(457,'Giza','EGY',64),(458,'Goiás','BRA',31),(459,'Golestan','IRN',103),(460,'Gomel','BLR',27),(461,'Gorj','ROM',181),(462,'Grad Sofija','BGR',23),(463,'Grad Zagreb','HRV',96),(464,'Grand Cayman','CYM',54),(465,'Grand Turk','TCA',205),(466,'Grande-Terre','GLP',82),(467,'Granma','CUB',52),(468,'Greater Accra','GHA',79),(469,'Grodno','BLR',27),(470,'Groningen','NLD',159),(471,'Guainía','COL',48),(472,'Guanajuato','MEX',136),(473,'Guangdong','CHN',42),(474,'Guangxi','CHN',42),(475,'Guantánamo','CUB',52),(476,'Guárico','VEN',228),(477,'Guatemala','GTM',89),(478,'Guaviare','COL',48),(479,'Guayas','ECU',63),(480,'Guaynabo','PRI',173),(481,'Guerrero','MEX',136),(482,'Guizhou','CHN',42),(483,'Gujarat','IND',100),(484,'Gumma','JPN',110),(485,'Györ-Moson-Sopron','HUN',98),(486,'Ha Darom','ISR',106),(487,'Ha Merkaz','ISR',106),(488,'Habarovsk','RUS',182),(489,'Hadramawt','YEM',235),(490,'Haifa','ISR',106),(491,'Hail','SAU',184),(492,'Hainan','CHN',42),(493,'Hainaut','BEL',19),(494,'Haiphong','VNM',231),(495,'Hajdú-Bihar','HUN',98),(496,'Hakassia','RUS',182),(497,'Hama','SYR',204),(498,'Hamadan','IRN',103),(499,'Hamburg','DEU',59),(500,'Hamgyong N','PRK',174),(501,'Hamgyong P','PRK',174),(502,'Hamilton','BMU',29),(503,'Hamilton','NZL',163),(504,'Hanoi','VNM',231),(505,'Hanti-Mansia','RUS',182),(506,'Harare','ZWE',239),(507,'Harjumaa','EST',68),(508,'Harkova','UKR',221),(509,'Haryana','IND',100),(510,'Haskovo','BGR',23),(511,'Hatay','TUR',216),(512,'Haute-Normandie','FRA',73),(513,'Haute-Zaïre','COD',45),(514,'Hawaii','USA',224),(515,'Hawalli','KWT',118),(516,'Hebei','CHN',42),(517,'Hebron','PSE',177),(518,'Heilongjiang','CHN',42),(519,'Henan','CHN',42),(520,'Herat','AFG',2),(521,'Herson','UKR',221),(522,'Hessen','DEU',59),(523,'Hhohho','SWZ',202),(524,'Hidalgo','MEX',136),(525,'Hims','SYR',204),(526,'Hiroshima','JPN',110),(527,'Hlavní mesto Praha','CZE',57),(528,'Hmelnytskyi','UKR',221),(529,'Ho Chi Minh City','VNM',231),(530,'Hodeida','YEM',235),(531,'Höfuðborgarsvæði','ISL',105),(532,'Hokkaido','JPN',110),(533,'Holguín','CUB',52),(534,'Home Island','CCK',39),(535,'Hongkong','HKG',93),(536,'Honiara','SLB',191),(537,'Horad Minsk','BLR',27),(538,'Hordaland','NOR',160),(539,'Hormozgan','IRN',103),(540,'Houet','BFA',23),(541,'Hsinchu','TWN',218),(542,'Hualien','TWN',218),(543,'Huambo','AGO',3),(544,'Huanuco','PER',168),(545,'Hubei','CHN',42),(546,'Huila','COL',48),(547,'Hunan','CHN',42),(548,'Hwanghae N','PRK',174),(549,'Hwanghae P','PRK',174),(550,'Hyogo','JPN',110),(551,'Iasi','ROM',181),(552,'Ibaragi','JPN',110),(553,'Ibb','YEM',235),(554,'Ica','PER',168),(555,'Içel','TUR',216),(556,'Idaho','USA',224),(557,'Idlib','SYR',204),(558,'Ilam','IRN',103),(559,'Ilan','TWN',218),(560,'Île-de-France','FRA',73),(561,'Ilocos','PHL',169),(562,'Illinois','USA',224),(563,'Imbabura','ECU',63),(564,'Imereti','GEO',78),(565,'Imo & Abia','NGA',156),(566,'Inchon','KOR',117),(567,'Indiana','USA',224),(568,'Inhambane','MOZ',144),(569,'Inner Harbour','MLT',140),(570,'Inner Mongolia','CHN',42),(571,'Iowa','USA',224),(572,'Irbid','JOR',109),(573,'Irbil','IRQ',104),(574,'Irkutsk','RUS',182),(575,'Irrawaddy [Ayeyarwad','MMR',141),(576,'Ishikawa','JPN',110),(577,'Islamabad','PAK',15),(578,'Ismailia','EGY',64),(579,'Isparta','TUR',216),(580,'Istanbul','TUR',216),(581,'Ivano-Frankivsk','UKR',221),(582,'Ivanovo','RUS',182),(583,'Iwate','JPN',110),(584,'Izmir','TUR',216),(585,'Jakarta Raya','IDN',99),(586,'Jalisco','MEX',136),(587,'Jambi','IDN',99),(588,'Jammu and Kashmir','IND',100),(589,'Jaroslavl','RUS',182),(590,'Jersey','GBR',77),(591,'Jerusalem','ISR',106),(592,'Jharkhand','IND',100),(593,'Jiangsu','CHN',42),(594,'Jiangxi','CHN',42),(595,'Jilin','CHN',42),(596,'Jizní Cechy','CZE',57),(597,'Jizní Morava','CZE',57),(598,'Johor','MYS',150),(599,'Jönköpings län','SWE',201),(600,'Jubbada Hoose','SOM',195),(601,'Jujuy','ARG',9),(602,'Junín','PER',168),(603,'Kabardi-Balkaria','RUS',182),(604,'Kabol','AFG',2),(605,'Kadiogo','BFA',23),(606,'Kaduna','NGA',156),(607,'Kaesong-si','PRK',174),(608,'Kafr al-Shaykh','EGY',64),(609,'Kagawa','JPN',110),(610,'Kagoshima','JPN',110),(611,'Kahramanmaras','TUR',216),(612,'Kairo','EGY',64),(613,'Kairouan','TUN',215),(614,'Kalimantan Barat','IDN',99),(615,'Kalimantan Selatan','IDN',99),(616,'Kalimantan Tengah','IDN',99),(617,'Kalimantan Timur','IDN',99),(618,'Kaliningrad','RUS',182),(619,'Kalmykia','RUS',182),(620,'Kaluga','RUS',182),(621,'Kamtšatka','RUS',182),(622,'Kanagawa','JPN',110),(623,'Kang-won','KOR',117),(624,'Kangwon','PRK',174),(625,'Kano & Jigawa','NGA',156),(626,'Kansas','USA',224),(627,'Kaohsiung','TWN',218),(628,'Kaolack','SEN',186),(629,'Karabük','TUR',216),(630,'Karakalpakistan','UZB',225),(631,'Karaman','TUR',216),(632,'Karatšai-Tšerkessia','RUS',182),(633,'Karbala','IRQ',104),(634,'Karjala','RUS',182),(635,'Karnataka','IND',100),(636,'Kärnten','AUT',16),(637,'Karotegin','TJK',209),(638,'Kars','TUR',216),(639,'Kassala','SDN',185),(640,'Kastilia-La Mancha','ESP',67),(641,'Katalonia','ESP',67),(642,'Katsina','NGA',156),(643,'Kaunas','LTU',127),(644,'Kayseri','TUR',216),(645,'Kedah','MYS',150),(646,'Keelung','TWN',218),(647,'Kelantan','MYS',150),(648,'Kemerovo','RUS',182),(649,'Kentucky','USA',224),(650,'Kerala','IND',100),(651,'Kerman','IRN',103),(652,'Kermanshah','IRN',103),(653,'Khan Yunis','PSE',177),(654,'Khanh Hoa','VNM',231),(655,'Khartum','SDN',185),(656,'Khomas','NAM',152),(657,'Khon Kaen','THA',208),(658,'Khorasan','IRN',103),(659,'Khorazm','UZB',225),(660,'Khujand','TJK',209),(661,'Khulna','BGD',22),(662,'Khuzestan','IRN',103),(663,'Kien Giang','VNM',231),(664,'Kigali','RWA',183),(665,'Kilimanjaro','TZA',219),(666,'Kilis','TUR',216),(667,'Kingston','NFK',155),(668,'Kinshasa','COD',45),(669,'Kiova','UKR',221),(670,'Kirikkale','TUR',216),(671,'Kirov','RUS',182),(672,'Kirovograd','UKR',221),(673,'Kitaa','GRL',88),(674,'Klaipeda','LTU',127),(675,'Kocaeli','TUR',216),(676,'Kochi','JPN',110),(677,'Kombo St Mary','GMB',83),(678,'Komi','RUS',182),(679,'Konya','TUR',216),(680,'Kordestan','IRN',103),(681,'Korhogo','CIV',43),(682,'Koror','PLW',170),(683,'Kosovo and Metohija','YUG',236),(684,'Kostroma','RUS',182),(685,'Kouilou','COG',46),(686,'Kowloon and New Kowl','HKG',93),(687,'København','DNK',60),(688,'Krasnodar','RUS',182),(689,'Krasnojarsk','RUS',182),(690,'Krim','UKR',221),(691,'Kueishan','TWN',218),(692,'Kujawsko-Pomorskie','POL',172),(693,'Kumamoto','JPN',110),(694,'Kurdufan al-Shamaliy','SDN',185),(695,'Kurgan','RUS',182),(696,'Kursk','RUS',182),(697,'Kütahya','TUR',216),(698,'Kvemo Kartli','GEO',78),(699,'Kwangju','KOR',117),(700,'Kwara & Kogi','NGA',156),(701,'KwaZulu-Natal','ZAF',237),(702,'Kyonggi','KOR',117),(703,'Kyongsangbuk','KOR',117),(704,'Kyongsangnam','KOR',117),(705,'Kyoto','JPN',110),(706,'La Araucanía','CHL',41),(707,'La guajira','COL',48),(708,'La Habana','CUB',52),(709,'La Libertad','PER',168),(710,'La Libertad','SLV',193),(711,'La Paz','BOL',30),(712,'La Rioja','ARG',9),(713,'La Rioja','ESP',67),(714,'La Romana','DOM',61),(715,'Lagos','NGA',156),(716,'Lam Dong','VNM',231),(717,'Lambayeque','PER',168),(718,'Lampung','IDN',99),(719,'Languedoc-Roussillon','FRA',73),(720,'Länsimaa','SJM',190),(721,'Lara','VEN',228),(722,'Las Tunas','CUB',52),(723,'Latakia','SYR',204),(724,'Latium','ITA',107),(725,'Lebap','TKM',211),(726,'Leinster','IRL',102),(727,'León','NIC',157),(728,'Liaoning','CHN',42),(729,'Liège','BEL',19),(730,'Liepaja','LVA',129),(731,'Liguria','ITA',107),(732,'Lilongwe','MWI',149),(733,'Lima','PER',168),(734,'Limassol','CYP',55),(735,'Limburg','NLD',159),(736,'Limousin','FRA',73),(737,'Lipetsk','RUS',182),(738,'Lisboa','PRT',175),(739,'Lisboa','SWE',201),(740,'Littoral','CMR',44),(741,'Lodzkie','POL',172),(742,'Logone Occidental','TCD',206),(743,'Loja','ECU',63),(744,'Lombardia','ITA',107),(745,'Lorestan','IRN',103),(746,'Loreto','PER',168),(747,'Lori','ARM',10),(748,'Lorraine','FRA',73),(749,'Los Lagos','CHL',41),(750,'Los Ríos','ECU',63),(751,'Louisiana','USA',224),(752,'Lovec','BGR',23),(753,'Luanda','AGO',3),(754,'Lubelskie','POL',172),(755,'Lubuskie','POL',172),(756,'Lugansk','UKR',221),(757,'Lusaka','ZMB',238),(758,'Luxembourg','LUX',128),(759,'Luxor','EGY',64),(760,'Lviv','UKR',221),(761,'Maale','MDV',135),(762,'Macau','MAC',130),(763,'Madhya Pradesh','IND',100),(764,'Madrid','ESP',67),(765,'Maekel','ERI',65),(766,'Magadan','RUS',182),(767,'Magallanes','CHL',41),(768,'Magdalena','COL',48),(769,'Magwe [Magway]','MMR',141),(770,'Mahajanga','MDG',134),(771,'Maharashtra','IND',100),(772,'Mahé','SYC',203),(773,'Majuro','MHL',137),(774,'Malatya','TUR',216),(775,'Malopolskie','POL',172),(776,'Mamoutzou','MYT',151),(777,'Manabí','ECU',63),(778,'Managua','NIC',157),(779,'Mandalay','MMR',141),(780,'Mangghystau','KAZ',111),(781,'Manica','MOZ',144),(782,'Manicaland','ZWE',239),(783,'Manipur','IND',100),(784,'Manisa','TUR',216),(785,'Manitoba','CAN',38),(786,'Maputo','MOZ',144),(787,'Maradi','NER',154),(788,'Maramures','ROM',181),(789,'Maranhão','BRA',31),(790,'Marche','ITA',107),(791,'Mardin','TUR',216),(792,'Marinmaa','RUS',182),(793,'Maritime','TGO',207),(794,'Markazi','IRN',103),(795,'Marrakech-Tensift-Al','MAR',131),(796,'Mary','TKM',211),(797,'Maryland','USA',224),(798,'Masaya','NIC',157),(799,'Maseru','LSO',126),(800,'Masqat','OMN',164),(801,'Massachusetts','USA',224),(802,'Matanzas','CUB',52),(803,'Mato Grosso','BRA',31),(804,'Mato Grosso do Sul','BRA',31),(805,'Maule','CHL',41),(806,'Mayagüez','PRI',173),(807,'Maysan','IRQ',104),(808,'Mazandaran','IRN',103),(809,'Mazowieckie','POL',172),(810,'Mbeya','TZA',219),(811,'Mecklenburg-Vorpomme','DEU',59),(812,'Medina','SAU',184),(813,'Meghalaya','IND',100),(814,'Mehedinti','ROM',181),(815,'Mekka','SAU',184),(816,'Meknès-Tafilalet','MAR',131),(817,'Mendoza','ARG',9),(818,'Mérida','VEN',228),(819,'Meta','COL',48),(820,'México','MEX',136),(821,'Miaoli','TWN',218),(822,'Michigan','USA',224),(823,'Michoacán de Ocampo','MEX',136),(824,'Midi-Pyrénées','FRA',73),(825,'Midlands','ZWE',239),(826,'Mie','JPN',110),(827,'Minas Gerais','BRA',31),(828,'Mingäçevir','AZE',17),(829,'Minnesota','USA',224),(830,'Minsk','BLR',27),(831,'Miranda','VEN',228),(832,'Misiones','ARG',9),(833,'Misrata','LBY',122),(834,'Mississippi','USA',224),(835,'Missouri','USA',224),(836,'Miyagi','JPN',110),(837,'Miyazaki','JPN',110),(838,'Mizoram','IND',100),(839,'Mogiljov','BLR',27),(840,'Molukit','IDN',99),(841,'Mon','MMR',141),(842,'Monaco-Ville','MCO',132),(843,'Monagas','VEN',228),(844,'Montana','USA',224),(845,'Monte-Carlo','MCO',132),(846,'Montenegro','YUG',236),(847,'Montevideo','URY',223),(848,'Montserrado','LBR',121),(849,'Mordva','RUS',182),(850,'Morelos','MEX',136),(851,'Morogoro','TZA',219),(852,'Moscow (City)','RUS',182),(853,'Moskova','RUS',182),(854,'Mostaganem','DZA',62),(855,'Mpumalanga','ZAF',237),(856,'Munster','IRL',102),(857,'Murcia','ESP',67),(858,'Mures','ROM',181),(859,'Murmansk','RUS',182),(860,'Mwanza','TZA',219),(861,'Mykolajiv','UKR',221),(862,'Nablus','PSE',177),(863,'Nagano','JPN',110),(864,'Nagasaki','JPN',110),(865,'Nairobi','KEN',112),(866,'Najran','SAU',184),(867,'Nakhon Pathom','THA',208),(868,'Nakhon Ratchasima','THA',208),(869,'Nakhon Sawan','THA',208),(870,'Nam Ha','VNM',231),(871,'Namangan','UZB',225),(872,'Namibe','AGO',3),(873,'Nampo-si','PRK',174),(874,'Nampula','MOZ',144),(875,'Namur','BEL',19),(876,'Nantou','TWN',218),(877,'Nara','JPN',110),(878,'Nariño','COL',48),(879,'National Capital Dis','PNG',171),(880,'National Capital Reg','PHL',169),(881,'Navarra','ESP',67),(882,'Navoi','UZB',225),(883,'Nayarit','MEX',136),(884,'Neamt','ROM',181),(885,'Nebraska','USA',224),(886,'Negeri Sembilan','MYS',150),(887,'Neuquén','ARG',9),(888,'Nevada','USA',224),(889,'New Hampshire','USA',224),(890,'New Jersey','USA',224),(891,'New Mexico','USA',224),(892,'New Providence','BHS',25),(893,'New South Wales','AUS',15),(894,'New York','USA',224),(895,'Newfoundland','CAN',38),(896,'Newmaa','FIN',70),(897,'Nghe An','VNM',231),(898,'Niamey','NER',154),(899,'Nicosia','CYP',55),(900,'Niedersachsen','DEU',59),(901,'Niger','NGA',156),(902,'Niigata','JPN',110),(903,'Ninawa','IRQ',104),(904,'Ningxia','CHN',42),(905,'Nizni Novgorod','RUS',182),(906,'Njazidja','COM',49),(907,'Nonthaburi','THA',208),(908,'Noord-Brabant','NLD',159),(909,'Noord-Holland','NLD',159),(910,'Nord','CMR',44),(911,'Nord','HTI',97),(912,'Nord-Ouest','CMR',44),(913,'Nord-Pas-de-Calais','FRA',73),(914,'Nordjylland','DNK',60),(915,'Nordrhein-Westfalen','DEU',59),(916,'Norte de santander','COL',48),(917,'North Austria','AUT',16),(918,'North Carolina','USA',224),(919,'North Gaza','PSE',177),(920,'North Ireland','GBR',77),(921,'North Kazakstan','KAZ',111),(922,'North Kivu','COD',45),(923,'North Ossetia-Alania','RUS',182),(924,'North West','ZAF',237),(925,'Northern','GHA',79),(926,'Northern','LKA',125),(927,'Northern Cape','ZAF',237),(928,'Northern Mindanao','PHL',169),(929,'Nothwest Border Prov','PAK',15),(930,'Nouakchott','MRT',145),(931,'Nouméa','NCL',153),(932,'Nova Scotia','CAN',38),(933,'Novgorod','RUS',182),(934,'Novosibirsk','RUS',182),(935,'Nuevo León','MEX',136),(936,'Nusa Tenggara Barat','IDN',99),(937,'Nusa Tenggara Timur','IDN',99),(938,'Nyanza','KEN',112),(939,'O´Higgins','CHL',41),(940,'Oaxaca','MEX',136),(941,'Odesa','UKR',221),(942,'Ogun','NGA',156),(943,'Ohio','USA',224),(944,'Oita','JPN',110),(945,'Okayama','JPN',110),(946,'Okinawa','JPN',110),(947,'Oklahoma','USA',224),(948,'Omsk','RUS',182),(949,'Ondo & Ekiti','NGA',156),(950,'Ontario','CAN',38),(951,'Opolskie','POL',172),(952,'Oran','DZA',62),(953,'Oranjestad','ABW',1),(954,'Ordu','TUR',216),(955,'Örebros län','SWE',201),(956,'Oregon','USA',224),(957,'Orenburg','RUS',182),(958,'Oriental','MAR',131),(959,'Orissa','IND',100),(960,'Orjol','RUS',182),(961,'Oromia','ETH',69),(962,'Oruro','BOL',30),(963,'Osaka','JPN',110),(964,'Osh','KGZ',113),(965,'Osijek-Baranja','HRV',96),(966,'Oslo','NOR',160),(967,'Osmaniye','TUR',216),(968,'Osrednjeslovenska','SVN',200),(969,'Ouémé','BEN',20),(970,'Ouest','CMR',44),(971,'Ouest','HTI',97),(972,'Outer Harbour','MLT',140),(973,'Overijssel','NLD',159),(974,'Oyo & Osun','NGA',156),(975,'Pahang','MYS',150),(976,'Päijät-Häme','FIN',70),(977,'Panamá','PAN',166),(978,'Panevezys','LTU',127),(979,'Pará','BRA',31),(980,'Paraíba','BRA',31),(981,'Paramaribo','SUR',198),(982,'Paraná','BRA',31),(983,'Pavlodar','KAZ',111),(984,'Pays de la Loire','FRA',73),(985,'Pegu [Bago]','MMR',141),(986,'Peking','CHN',42),(987,'Pennsylvania','USA',224),(988,'Penza','RUS',182),(989,'Perak','MYS',150),(990,'Perm','RUS',182),(991,'Pernambuco','BRA',31),(992,'Phnom Penh','KHM',114),(993,'Piauí','BRA',31),(994,'Picardie','FRA',73),(995,'Pichincha','ECU',63),(996,'Piemonte','ITA',107),(997,'Pietari','RUS',182),(998,'Pihkova','RUS',182),(999,'Pinar del Río','CUB',52),(1000,'Pingtung','TWN',218),(1001,'Pirkanmaa','FIN',70),(1002,'Piura','PER',168),(1003,'Plaines Wilhelms','MUS',148),(1004,'Plateau & Nassarawa','NGA',156),(1005,'Plovdiv','BGR',23),(1006,'Plymouth','MSR',146),(1007,'Podkarpackie','POL',172),(1008,'Podlaskie','POL',172),(1009,'Podravska','SVN',200),(1010,'Pohjois-Pohjanmaa','FIN',70),(1011,'Pohnpei','FSM',75),(1012,'Pomorskie','POL',172),(1013,'Ponce','PRI',173),(1014,'Pondicherry','IND',100),(1015,'Port Said','EGY',64),(1016,'Port-Louis','MUS',148),(1017,'Port-of-Spain','TTO',214),(1018,'Porto','PRT',175),(1019,'Portuguesa','VEN',228),(1020,'Potosí','BOL',30),(1021,'Prahova','ROM',181),(1022,'Primorje','RUS',182),(1023,'Primorje-Gorski Kota','HRV',96),(1024,'Provence-Alpes-Côte','FRA',73),(1025,'Puebla','MEX',136),(1026,'Puerto Plata','DOM',61),(1027,'Pulau Pinang','MYS',150),(1028,'Pultava','UKR',221),(1029,'Punjab','IND',100),(1030,'Punjab','PAK',15),(1031,'Puno','PER',168),(1032,'Pusan','KOR',117),(1033,'Putumayo','COL',48),(1034,'Pyongan N','PRK',174),(1035,'Pyongan P','PRK',174),(1036,'Pyongyang-si','PRK',174),(1037,'Qandahar','AFG',2),(1038,'Qaraghandy','KAZ',111),(1039,'Qashqadaryo','UZB',225),(1040,'Qasim','SAU',184),(1041,'Qazvin','IRN',103),(1042,'Qina','EGY',64),(1043,'Qinghai','CHN',42),(1044,'Qom','IRN',103),(1045,'Qostanay','KAZ',111),(1046,'Quang Binh','VNM',231),(1047,'Quang Nam-Da Nang','VNM',231),(1048,'Quang Ninh','VNM',231),(1049,'Québec','CAN',38),(1050,'Queensland','AUS',15),(1051,'Querétaro','MEX',136),(1052,'Querétaro de Arteaga','MEX',136),(1053,'Quetzaltenango','GTM',89),(1054,'Quindio','COL',48),(1055,'Quintana Roo','MEX',136),(1056,'Qyzylorda','KAZ',111),(1057,'Rabat-Salé-Zammour-Z','MAR',131),(1058,'Rafah','PSE',177),(1059,'Rajasthan','IND',100),(1060,'Rajshahi','BGD',22),(1061,'Rakhine','MMR',141),(1062,'Rangoon [Yangon]','MMR',141),(1063,'Rarotonga','COK',47),(1064,'Republika Srpska','BIH',26),(1065,'Rheinland-Pfalz','DEU',59),(1066,'Rhode Island','USA',224),(1067,'Rhône-Alpes','FRA',73),(1068,'Riad','SAU',184),(1069,'Riau','IDN',99),(1070,'Rift Valley','KEN',112),(1071,'Riika','LVA',129),(1072,'Rio de Janeiro','BRA',31),(1073,'Rio Grande do Norte','BRA',31),(1074,'Rio Grande do Sul','BRA',31),(1075,'Risaralda','COL',48),(1076,'Rivers & Bayelsa','NGA',156),(1077,'Rivne','UKR',221),(1078,'Riyadh','SAU',184),(1079,'Rjazan','RUS',182),(1080,'Rogaland','NOR',160),(1081,'Rondônia','BRA',31),(1082,'Roraima','BRA',31),(1083,'Rostov-na-Donu','RUS',182),(1084,'Ruse','BGR',23),(1085,'Saarland','DEU',59),(1086,'Sabah','MYS',150),(1087,'Saga','JPN',110),(1088,'Sagaing','MMR',141),(1089,'Saha (Jakutia)','RUS',182),(1090,'Sahalin','RUS',182),(1091,'Saint George´s','BMU',29),(1092,'Saint Helena','SHN',189),(1093,'Saint-Denis','REU',180),(1094,'Saint-Louis','SEN',186),(1095,'Saint-Pierre','SPM',196),(1096,'Saipan','MNP',143),(1097,'Saitama','JPN',110),(1098,'Sakarya','TUR',216),(1099,'Saksi','DEU',59),(1100,'Salta','ARG',9),(1101,'Salzburg','AUT',16),(1102,'Samara','RUS',182),(1103,'Samarkand','UZB',225),(1104,'Samsun','TUR',216),(1105,'San José','CRI',51),(1106,'San Juan','ARG',9),(1107,'San Juan','PRI',173),(1108,'San Luis','ARG',9),(1109,'San Luis Potosí','MEX',136),(1110,'San Marino','SMR',194),(1111,'San Miguel','SLV',193),(1112,'San Miguelito','PAN',166),(1113,'San Pedro de Macorís','DOM',61),(1114,'San Salvador','SLV',193),(1115,'Sanaa','YEM',235),(1116,'Sancti-Spíritus','CUB',52),(1117,'Sanliurfa','TUR',216),(1118,'Santa Ana','SLV',193),(1119,'Santa Catarina','BRA',31),(1120,'Santa Cruz','BOL',30),(1121,'Santa Fé','ARG',9),(1122,'Santander','COL',48),(1123,'Santiago','CHL',41),(1124,'Santiago','DOM',61),(1125,'Santiago de Cuba','CUB',52),(1126,'Santiago del Estero','ARG',9),(1127,'São Paulo','BRA',31),(1128,'São Tiago','CPV',50),(1129,'Saratov','RUS',182),(1130,'Sarawak','MYS',150),(1131,'Sardinia','ITA',107),(1132,'Saskatchewan','CAN',38),(1133,'Satu Mare','ROM',181),(1134,'Savannakhet','LAO',119),(1135,'Sawhaj','EGY',64),(1136,'Scotland','GBR',77),(1137,'Schaan','LIE',124),(1138,'Schleswig-Holstein','DEU',59),(1139,'Selangor','MYS',150),(1140,'Semnan','IRN',103),(1141,'Seoul','KOR',117),(1142,'Sergipe','BRA',31),(1143,'Serravalle/Dogano','SMR',194),(1144,'Sétif','DZA',62),(1145,'Severní Cechy','CZE',57),(1146,'Severní Morava','CZE',57),(1147,'Sfax','TUN',215),(1148,'Shaanxi','CHN',42),(1149,'Shaba','COD',45),(1150,'Shamal Sina','EGY',64),(1151,'Shan','MMR',141),(1152,'Shandong','CHN',42),(1153,'Shanghai','CHN',42),(1154,'Shanxi','CHN',42),(1155,'Sharja','ARE',8),(1156,'Shefa','VUT',232),(1157,'Shiga','JPN',110),(1158,'Shimane','JPN',110),(1159,'Shizuoka','JPN',110),(1160,'Šiauliai','LTU',127),(1161,'Sibiu','ROM',181),(1162,'Sichuan','CHN',42),(1163,'Sidi Bel Abbès','DZA',62),(1164,'Siem Reap','KHM',114),(1165,'Siirt','TUR',216),(1166,'Sinaloa','MEX',136),(1167,'Sind','PAK',15),(1168,'Sindh','PAK',15),(1169,'Singapore','SGP',187),(1170,'Širak','ARM',10),(1171,'Sisilia','ITA',107),(1172,'Sistan va Baluchesta','IRN',103),(1173,'Sivas','TUR',216),(1174,'Skåne län','SWE',201),(1175,'Skikda','DZA',62),(1176,'Skopje','MKD',138),(1177,'Slaskie','POL',172),(1178,'Smolensk','RUS',182),(1179,'Sofala','MOZ',144),(1180,'Sokoto & Kebbi & Zam','NGA',156),(1181,'Songkhla','THA',208),(1182,'Sonora','MEX',136),(1183,'Souss Massa-Draâ','MAR',131),(1184,'Sousse','TUN',215),(1185,'South Australia','AUS',15),(1186,'South Carolina','USA',224),(1187,'South Dakota','USA',224),(1188,'South Hill','AIA',4),(1189,'South Kazakstan','KAZ',111),(1190,'South Kivu','COD',45),(1191,'South Tarawa','KIR',115),(1192,'Southern Mindanao','PHL',169),(1193,'Southern Tagalog','PHL',169),(1194,'Sør-Trøndelag','NOR',160),(1195,'Split-Dalmatia','HRV',96),(1196,'St George','DMA',61),(1197,'St George','GRD',87),(1198,'St George','VCT',227),(1199,'St George Basseterre','KNA',116),(1200,'St John','ATG',14),(1201,'St Michael','BRB',32),(1202,'St Thomas','VIR',230),(1203,'St. Andrew','JAM',108),(1204,'St. Catherine','JAM',108),(1205,'Stavropol','RUS',182),(1206,'Steiermark','AUT',16),(1207,'Streymoyar','FRO',74),(1208,'Suceava','ROM',181),(1209,'Sucre','COL',48),(1210,'Sucre','VEN',228),(1211,'Suez','EGY',64),(1212,'Sulawesi Selatan','IDN',99),(1213,'Sulawesi Tengah','IDN',99),(1214,'Sulawesi Tenggara','IDN',99),(1215,'Sulawesi Utara','IDN',99),(1216,'Sumatera Barat','IDN',99),(1217,'Sumatera Selatan','IDN',99),(1218,'Sumatera Utara','IDN',99),(1219,'Sumqayit','AZE',17),(1220,'Sumy','UKR',221),(1221,'Surkhondaryo','UZB',225),(1222,'Sverdlovsk','RUS',182),(1223,'Swietokrzyskie','POL',172),(1224,'Sylhet','BGD',22),(1225,'Szabolcs-Szatmár-Ber','HUN',98),(1226,'Tabasco','MEX',136),(1227,'Tabora','TZA',219),(1228,'Tabuk','SAU',184),(1229,'Tacna','PER',168),(1230,'Táchira','VEN',228),(1231,'Tadla-Azilal','MAR',131),(1232,'Taegu','KOR',117),(1233,'Taejon','KOR',117),(1234,'Tahiti','PYF',178),(1235,'Taichung','TWN',218),(1236,'Tainan','TWN',218),(1237,'Taipei','TWN',218),(1238,'Taiping','TWN',218),(1239,'Taitung','TWN',218),(1240,'Taizz','YEM',235),(1241,'Taka-Karpatia','UKR',221),(1242,'Taliao','TWN',218),(1243,'Tamaulipas','MEX',136),(1244,'Tambov','RUS',182),(1245,'Tamil Nadu','IND',100),(1246,'Tamuning','GUM',91),(1247,'Tanga','TZA',219),(1248,'Tanger-Tétouan','MAR',131),(1249,'Taoyuan','TWN',218),(1250,'Tarapacá','CHL',41),(1251,'Taraz','KAZ',111),(1252,'Tarija','BOL',30),(1253,'Tartumaa','EST',68),(1254,'Tasmania','AUS',15),(1255,'Tatarstan','RUS',182),(1256,'Taza-Al Hoceima-Taou','MAR',131),(1257,'Tbilisi','GEO',78),(1258,'Tébessa','DZA',62),(1259,'Teheran','IRN',103),(1260,'Tekirdag','TUR',216),(1261,'Tel Aviv','ISR',106),(1262,'Tenasserim [Tanintha','MMR',141),(1263,'Tennessee','USA',224),(1264,'Terengganu','MYS',150),(1265,'Ternopil','UKR',221),(1266,'Tete','MOZ',144),(1267,'Texas','USA',224),(1268,'The Valley','AIA',4),(1269,'Thessalia','GRC',86),(1270,'Thiès','SEN',186),(1271,'Thimphu','BTN',34),(1272,'Thua Thien-Hue','VNM',231),(1273,'Thüringen','DEU',59),(1274,'Tianjin','CHN',42),(1275,'Tiaret','DZA',62),(1276,'Tibet','CHN',42),(1277,'Tien Giang','VNM',231),(1278,'Tigray','ETH',69),(1279,'Timis','ROM',181),(1280,'Tirana','ALB',5),(1281,'Tiroli','AUT',16),(1282,'Tjumen','RUS',182),(1283,'Tlemcen','DZA',62),(1284,'Toa Baja','PRI',173),(1285,'Toamasina','MDG',134),(1286,'Tocantins','BRA',31),(1287,'Tochigi','JPN',110),(1288,'Tokat','TUR',216),(1289,'Tokushima','JPN',110),(1290,'Tokyo-to','JPN',110),(1291,'Tolima','COL',48),(1292,'Tomsk','RUS',182),(1293,'Tongatapu','TON',213),(1294,'Tortola','VGB',229),(1295,'Toscana','ITA',107),(1296,'Toskent','UZB',225),(1297,'Toskent Shahri','UZB',225),(1298,'Tottori','JPN',110),(1299,'Toyama','JPN',110),(1300,'Trabzon','TUR',216),(1301,'Trentino-Alto Adige','ITA',107),(1302,'Tripoli','LBY',122),(1303,'Tripura','IND',100),(1304,'Trujillo','VEN',228),(1305,'Tšeljabinsk','RUS',182),(1306,'Tšerkasy','UKR',221),(1307,'Tšernigiv','UKR',221),(1308,'Tšernivtsi','UKR',221),(1309,'Tšetšenia','RUS',182),(1310,'Tšita','RUS',182),(1311,'Tšuvassia','RUS',182),(1312,'Tucumán','ARG',9),(1313,'Tula','RUS',182),(1314,'Tulcea','ROM',181),(1315,'Tungurahua','ECU',63),(1316,'Tunis','TUN',215),(1317,'Tutuila','ASM',11),(1318,'Tver','RUS',182),(1319,'Tyva','RUS',182),(1320,'Ubon Ratchathani','THA',208),(1321,'Ucayali','PER',168),(1322,'Udmurtia','RUS',182),(1323,'Udon Thani','THA',208),(1324,'Ulaanbaatar','MNG',142),(1325,'Uljanovsk','RUS',182),(1326,'Umbria','ITA',107),(1327,'Upolu','WSM',234),(1328,'Uppsala län','SWE',201),(1329,'Usak','TUR',216),(1330,'Utah','USA',224),(1331,'Utrecht','NLD',159),(1332,'Uttar Pradesh','IND',100),(1333,'Uttaranchal','IND',100),(1334,'Vaduz','LIE',124),(1335,'Vâlcea','ROM',181),(1336,'Valencia','ESP',67),(1337,'Valparaíso','CHL',41),(1338,'Valle del cauca','COL',48),(1339,'Van','TUR',216),(1340,'Varna','BGR',23),(1341,'Varsinais-Suomi','FIN',70),(1342,'Västerbottens län','SWE',201),(1343,'Västernorrlands län','SWE',201),(1344,'Västmanlands län','SWE',201),(1345,'Vaud','CHE',40),(1346,'Vaupés','COL',48),(1347,'Veneto','ITA',107),(1348,'Veracruz','MEX',136),(1349,'Veracruz-Llave','MEX',136),(1350,'Viangchan','LAO',119),(1351,'Victoria','AUS',15),(1352,'Vichada','COL',48),(1353,'Vilna','LTU',127),(1354,'Villa Clara','CUB',52),(1355,'Vinnytsja','UKR',221),(1356,'Virginia','USA',224),(1357,'Vitebsk','BLR',27),(1358,'Vladimir','RUS',182),(1359,'Vojvodina','YUG',236),(1360,'Volgograd','RUS',182),(1361,'Vologda','RUS',182),(1362,'Volynia','UKR',221),(1363,'Voronez','RUS',182),(1364,'Vrancea','ROM',181),(1365,'Východné Slovensko','SVK',199),(1366,'Východní Cechy','CZE',57),(1367,'Wakayama','JPN',110),(1368,'Wales','GBR',77),(1369,'Wallis','WLF',233),(1370,'Warminsko-Mazurskie','POL',172),(1371,'Washington','USA',224),(1372,'Wasit','IRQ',104),(1373,'Wellington','NZL',163),(1374,'West Australia','AUS',15),(1375,'West Azerbaidzan','IRN',103),(1376,'West Bengali','IND',100),(1377,'West Flanderi','BEL',19),(1378,'West Götanmaan län','SWE',201),(1379,'West Greece','GRC',86),(1380,'West Irian','IDN',99),(1381,'West Island','CCK',39),(1382,'West Java','IDN',99),(1383,'West Kasai','COD',45),(1384,'West Kazakstan','KAZ',111),(1385,'Western','GHA',79),(1386,'Western','LKA',125),(1387,'Western','NPL',161),(1388,'Western','SLE',192),(1389,'Western Cape','ZAF',237),(1390,'Western Mindanao','PHL',169),(1391,'Western Visayas','PHL',169),(1392,'Wielkopolskie','POL',172),(1393,'Wien','AUT',16),(1394,'Wilayah Persekutuan','MYS',150),(1395,'Wisconsin','USA',224),(1396,'Woqooyi Galbeed','SOM',195),(1397,'Xinxiang','CHN',42),(1398,'Yamagata','JPN',110),(1399,'Yamaguchi','JPN',110),(1400,'Yamalin Nenetsia','RUS',182),(1401,'Yamanashi','JPN',110),(1402,'Yamoussoukro','CIV',43),(1403,'Yanggang','PRK',174),(1404,'Yangor','NRU',162),(1405,'Yaracuy','VEN',228),(1406,'Yaren','NRU',162),(1407,'Yazd','IRN',103),(1408,'Yerevan','ARM',10),(1409,'Yogyakarta','IDN',99),(1410,'Yucatán','MEX',136),(1411,'Yünlin','TWN',218),(1412,'Yunnan','CHN',42),(1413,'Zacatecas','MEX',136),(1414,'Zachodnio-Pomorskie','POL',172),(1415,'Zambézia','MOZ',144),(1416,'Zanjan','IRN',103),(1417,'Zanzibar West','TZA',219),(1418,'Zapadní Cechy','CZE',57),(1419,'Zaporizzja','UKR',221),(1420,'Zhejiang','CHN',42),(1421,'Ziguinchor','SEN',186),(1422,'Zinder','NER',154),(1423,'Zonguldak','TUR',216),(1424,'Zufar','OMN',164),(1425,'Zuid-Holland','NLD',159),(1426,'Zulia','VEN',228),(1427,'Zürich','CHE',40),(1428,'Zytomyr','UKR',221);