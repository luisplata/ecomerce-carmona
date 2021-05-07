CREATE TABLE `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `call` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `whatsapp` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `facebook` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `instagram` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `pdf` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);
INSERT INTO `info` (`id`, `call`, `whatsapp`, `facebook`, `instagram`, `pdf`, `created_at`, `updated_at`) VALUES (1,'3024136600','3024136600','carmonamuseo','museocarmona','uploads/1/2020-08/test.pdf','2020-08-20 01:56:35','2020-10-13 19:43:59');