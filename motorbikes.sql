-- ----------------------------
-- Table structure for motorbikes
-- ----------------------------
DROP TABLE IF EXISTS `motorbikes`;
CREATE TABLE `motorbikes`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `model` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `weight` int NULL DEFAULT NULL,
  `price` int NULL DEFAULT NULL,
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of motorbikes
-- ----------------------------
INSERT INTO `motorbikes` (`name`, `model`, `color`, `weight`, `price`) VALUES ('yamaha', 'mz82', 'red', 12, 1500);
INSERT INTO `motorbikes` (`name`, `model`, `color`, `weight`, `price`) VALUES ('suzuki', 'i20', 'black', 12, 800);
INSERT INTO `motorbikes` (`name`, `model`, `color`, `weight`, `price`) VALUES ('bentli', 'gr', 'green', 12, 21000);
INSERT INTO `motorbikes` (`name`, `model`, `color`, `weight`, `price`) VALUES ('benz', 's500', 'green', 12, 120);
INSERT INTO `motorbikes` (`name`, `model`, `color`, `weight`, `price`) VALUES ('honda', 'hukaido', 'gray', 12, 12);
INSERT INTO `motorbikes` (`name`, `model`, `color`, `weight`, `price`) VALUES ('harly', 'm24-t', 'black', 12, 12);
INSERT INTO `motorbikes` (`name`, `model`, `color`, `weight`, `price`) VALUES ('kavazuki', 'mz23', 'black', 120, 50000);
INSERT INTO `motorbikes` (`name`, `model`, `color`, `weight`, `price`) VALUES ('yamaha x2', 'diti', 'red', 120, 15000);
INSERT INTO `motorbikes` (`name`, `model`, `color`, `weight`, `price`) VALUES ('yamaha x6', 'diti', 'red', 120, 15000);
INSERT INTO `motorbikes` (`name`, `model`, `color`, `weight`, `price`) VALUES ('kavir motor', '1234', 'red', 12, 122);
INSERT INTO `motorbikes` (`name`, `model`, `color`, `weight`, `price`) VALUES ('yamaha', 'mz382', 'red', 12, 1500);
INSERT INTO `motorbikes` (`name`, `model`, `color`, `weight`, `price`) VALUES ('suzuki', 'i230', 'black', 12, 800);
INSERT INTO `motorbikes` (`name`, `model`, `color`, `weight`, `price`) VALUES ('bentli', 'ggr', 'green', 12, 21000);
INSERT INTO `motorbikes` (`name`, `model`, `color`, `weight`, `price`) VALUES ('benz', 's700', 'green', 12, 120);
INSERT INTO `motorbikes` (`name`, `model`, `color`, `weight`, `price`) VALUES ('honda', 'hukaido2', 'gray', 12, 12);
INSERT INTO `motorbikes` (`name`, `model`, `color`, `weight`, `price`) VALUES ('harly', 'm24-tb', 'black', 12, 12);
INSERT INTO `motorbikes` (`name`, `model`, `color`, `weight`, `price`) VALUES ('kavazuki', 'mz2z3', 'black', 120, 50000);
INSERT INTO `motorbikes` (`name`, `model`, `color`, `weight`, `price`) VALUES ('yamaha x2', 'shadow', 'red', 120, 15000);
INSERT INTO `motorbikes` (`name`, `model`, `color`, `weight`, `price`) VALUES ('yamaha x6', 'yyyu56', 'red', 120, 15000);
INSERT INTO `motorbikes` (`name`, `model`, `color`, `weight`, `price`) VALUES ('kavir motor', '1234n', 'red', 12, 122);
