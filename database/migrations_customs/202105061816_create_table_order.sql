CREATE TABLE `order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_id` int(10) unsigned NOT NULL,
  `city` int(10) unsigned NOT NULL,
  `status` int(10) unsigned NOT NULL,
  `validate` int(10) unsigned NOT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  `pay_mod` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'COP',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);
INSERT INTO `order` (`id`, `user_id`, `reference`, `subtotal`, `shipping`, `total`, `date`, `address_id`, `city`, `status`, `validate`, `notes`, `pay_mod`, `created_at`, `updated_at`, `deleted_at`) VALUES (1,1,'CM1','9950000','0','9950000','2020-08-23',1,4242,3,1,'Prueba','COP',NULL,NULL,NULL);