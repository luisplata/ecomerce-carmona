CREATE TABLE `color` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `hex` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);
INSERT INTO `color` (`id`, `name`, `hex`, `created_at`, `updated_at`) VALUES (1,'Blanco','fff','2020-08-19 23:48:22',NULL),(2,'Gris','999699','2020-08-19 23:48:24',NULL),(3,'Negro','000000','2020-08-19 23:48:25',NULL),(4,'Verde','20851E','2020-08-19 23:48:27',NULL),(5,'Azul Claro','607FF7','2020-08-19 23:48:28',NULL),(6,'Marron','A65024','2020-08-19 23:48:29',NULL),(7,'Rojo','CC0808','2020-08-19 23:48:29',NULL),(8,'Rosado','ED80A8','2020-08-19 23:48:31',NULL),(9,'Azul','0B359E','2020-08-19 23:48:33',NULL),(10,'Violeta','7514B5','2020-08-19 23:48:35',NULL),(11,'Amarillo','F0DE3C','2020-08-19 23:48:35',NULL),(12,'Naranja','F26E22','2020-08-19 23:48:37',NULL);