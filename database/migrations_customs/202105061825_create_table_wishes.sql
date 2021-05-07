CREATE TABLE `wishes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);
INSERT INTO `wishes` (`id`, `users_id`, `product_id`, `created_at`, `updated_at`) VALUES (5,2,16,'2020-10-30 19:47:39','2020-10-30 19:47:39'),(6,2,15,'2020-10-30 20:10:03','2020-10-30 20:10:03'),(7,2,58,'2020-10-30 20:11:15','2020-10-30 20:11:15'),(8,1,62,'2020-10-30 20:11:57','2020-10-30 20:11:57');