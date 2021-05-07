CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);
INSERT INTO `newsletter` (`id`, `mail`, `created_at`, `updated_at`) VALUES (1,'hsmadera18@gmail.com','2020-08-22 06:48:24','2020-08-22 06:48:24'),(2,'marcoantoniopoloospino@gmail.com','2021-03-03 23:29:36','2021-03-03 23:29:36');