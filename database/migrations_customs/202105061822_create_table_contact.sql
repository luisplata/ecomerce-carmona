CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_spanish2_ci,
  `mail` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);
INSERT INTO `contact` (`id`, `name`, `lastname`, `message`, `mail`, `created_at`, `updated_at`) VALUES (1,'Hans','Madera','Hola Mundo','hsmadera18@gmail.com','2020-08-22 06:35:29','2020-08-22 06:35:29'),(2,'yajaira','Mathieu','Me agrado mucho la plataforma','asistente@ciec-sa.com','2020-10-26 20:28:44','2020-10-26 20:28:44');