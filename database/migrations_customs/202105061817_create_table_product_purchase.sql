CREATE TABLE `product_purchase` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL,
  `products_id` int(10) unsigned NOT NULL,
  `price_pro` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `cant` int(11) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);
INSERT INTO `product_purchase` (`id`, `order_id`, `products_id`, `price_pro`, `discount`, `cant`, `total`, `created_at`, `updated_at`, `deleted_at`) VALUES (1,1,1,3000000,0,3,9000000,'2020-08-23 06:26:13','2020-08-23 06:26:13',NULL),(2,1,2,1000000,5,1,950000,'2020-08-23 06:26:13','2020-08-23 06:26:13',NULL);