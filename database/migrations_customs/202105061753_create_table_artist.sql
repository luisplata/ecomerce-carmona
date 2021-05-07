CREATE TABLE `artist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `info` varchar(300) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `featured` varchar(10) COLLATE utf8mb4_spanish2_ci DEFAULT 'si',
  `status` varchar(10) COLLATE utf8mb4_spanish2_ci DEFAULT 'activo',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);
INSERT INTO `artist` (`id`, `users_id`, `category_id`, `name`, `info`, `city`, `country`, `featured`, `status`, `created_at`, `updated_at`) VALUES (8,3,1,'Cesar Bertel','Pintor','Bogotá','Colombia','si','activo','2020-10-07 01:08:33','2020-10-10 18:03:58'),(9,4,1,'Miguel Burgos','Pintor','Cartagena','Colombia','si','activo','2020-10-13 01:44:23',NULL),(10,5,1,'Julian Espinosa','Pintor','Cartagena','Colombia','si','activo','2020-10-13 02:07:39',NULL),(11,6,1,'Lucia Marin','Pintor','Cartagena','Colombia','si','activo','2020-10-13 02:43:55',NULL),(12,7,1,'Silvia Talero','Pintor','Cartagena','Colombia','si','activo','2020-10-13 17:54:50',NULL),(13,8,1,'Marcella Gomez','Pintor','Cartagena','Colombia','si','activo','2020-10-17 01:40:09',NULL),(14,9,1,'Edgardo Carmona','Artista','Cartagena','Colombia','si','activo','2020-10-21 04:53:42',NULL),(15,10,1,'Al Hani Ramirez Bettez','Pintor','Bucaramanga','Colombia','si','activo','2020-12-11 01:31:26',NULL),(16,11,1,'Jhon Alberto Carlosama Otaya','Pintor','Putumayo','Colombia','si','activo','2020-12-11 02:21:55',NULL),(17,12,1,'Luis Buenaventura','Pintor','Pasto','Colombia','si','activo','2020-12-11 21:40:59',NULL),(18,13,1,'Raúl Ballesteros','Pintor','Cartagena','Colombia','si','activo','2020-12-11 23:09:41',NULL),(19,14,1,'Alejandro Naranjo','Pintor','Medellin','Colombia','si','activo','2020-12-12 00:24:02',NULL),(20,15,1,'Javier Florez Barrios','Pintor','Cartagena','Colombia','si','activo','2020-12-12 01:35:42',NULL),(21,16,1,'Jaime Rendón','Pintor','Santa Marta','Colombia','si','activo','2020-12-14 19:25:22',NULL),(22,17,1,'Andrés Ochoa (Andi)','Pintor','Cartagena','Colombia','si','activo','2020-12-14 19:29:08','2021-01-05 02:09:52'),(23,19,1,'Luis Caicedo (Lc-Betel)','Pintor','N/A','Colombia','si','activo','2021-01-05 03:51:17',NULL);