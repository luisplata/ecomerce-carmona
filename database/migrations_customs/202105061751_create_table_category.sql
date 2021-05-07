CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `img` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_spanish2_ci DEFAULT 'activo',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);
INSERT INTO `category` (`id`, `name`, `img`, `status`, `created_at`, `updated_at`) VALUES (1,'Pintura','uploads/1/2020-08/category_1.jpg','activo','2020-08-19 22:17:03',NULL),(2,'Escultura','uploads/1/2020-08/category_2.jpg','activo','2020-08-19 22:17:05',NULL),(3,'Dibujo','uploads/2/2021-01/dibujos_de_supernova.jpg','activo','2020-08-19 22:17:09','2021-01-05 04:34:15'),(4,'Grabados','uploads/1/2020-08/category_4.jpg','activo','2020-08-19 22:17:10',NULL),(5,'Fotografia','uploads/1/2020-08/category_5.jpg','activo','2020-08-19 22:17:10',NULL),(6,'Arte Digital','uploads/1/2020-08/category_6.jpg','activo','2020-08-19 22:17:11',NULL);