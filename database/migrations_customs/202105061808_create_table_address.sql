CREATE TABLE `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `description` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);
INSERT INTO `address` (`id`, `user_id`, `name`, `description`, `address`, `city`, `state`, `phone`, `created_at`, `updated_at`) VALUES (1,1,'Casa','Prueba','Cra 3b #18h-16',4242,120,'3023963859','2020-08-23 06:26:13','2020-08-23 06:26:13'),(2,2,'Casa',NULL,'cra 31 # 39 - 25',4242,120,'3012227671','2020-09-10 01:32:59','2020-09-10 01:32:59'),(3,9,'Oficina',NULL,'Carrera 2 # 36 - 86',4273,197,'302 4136600','2020-10-21 04:51:28','2020-10-21 04:51:28'),(4,20,'Apartamento',NULL,'Diagonal 31E transversal 32Asur -35 edificio baladona',4158,83,'3017356730','2021-01-26 22:45:23','2021-01-26 22:45:23');