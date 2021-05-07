CREATE TABLE `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_spanish2_ci DEFAULT 'activo',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);
INSERT INTO `banner` (`id`, `img`, `mobile`, `status`, `created_at`, `updated_at`) VALUES (1,'uploads/1/2020-08/banner_1.jpg','uploads/1/2020-08/banner_1.jpg','activo','2020-08-20 03:02:44',NULL),(2,'uploads/1/2020-08/banner_1.jpg','uploads/1/2020-08/banner_1.jpg','activo','2020-08-19 22:05:52',NULL),(3,'uploads/1/2020-08/banner_1.jpg','uploads/1/2020-08/banner_1.jpg','activo','2020-08-19 22:05:54',NULL);