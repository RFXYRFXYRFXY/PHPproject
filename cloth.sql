/*
 Navicat Premium Data Transfer

 Source Server         : 127.0.0.1
 Source Server Type    : MySQL
 Source Server Version : 80023
 Source Host           : localhost:3306
 Source Schema         : cloth

 Target Server Type    : MySQL
 Target Server Version : 80023
 File Encoding         : 65001

 Date: 26/06/2022 04:37:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cloth
-- ----------------------------
DROP TABLE IF EXISTS `cloth`;
CREATE TABLE `cloth`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `named` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `script` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `price` double NULL DEFAULT NULL,
  `classify` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `cloth_id_uindex`(`id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cloth
-- ----------------------------
INSERT INTO `cloth` VALUES (1, '破洞裤', '一条磨损的裤子', 98, '裤子');
INSERT INTO `cloth` VALUES (2, 'T恤', '两块', 2, '衣服');
INSERT INTO `cloth` VALUES (3, '运动鞋', 'sport', 9, '鞋子');
INSERT INTO `cloth` VALUES (4, '运动鞋', 'sport', 9, '鞋子');
INSERT INTO `cloth` VALUES (5, '运动鞋', 'sport', 9, '鞋子');
INSERT INTO `cloth` VALUES (6, '运动鞋', 'sport', 9, '鞋子');
INSERT INTO `cloth` VALUES (7, '运动鞋', 'sport', 9, '鞋子');
INSERT INTO `cloth` VALUES (8, '运动鞋', 'sport', 9, '鞋子');
INSERT INTO `cloth` VALUES (9, '运动鞋', 'sport', 9, '鞋子');
INSERT INTO `cloth` VALUES (10, '运动鞋', 'sport', 9, '鞋子');
INSERT INTO `cloth` VALUES (11, 'T恤', '两块', 2, '衣服');
INSERT INTO `cloth` VALUES (12, 'T恤', '两块', 2, '衣服');
INSERT INTO `cloth` VALUES (13, 'T恤', '两块', 2, '衣服');
INSERT INTO `cloth` VALUES (14, 'T恤', '两块', 2, '衣服');
INSERT INTO `cloth` VALUES (15, 'T恤', '两块', 2, '衣服');
INSERT INTO `cloth` VALUES (16, 'T恤', '两块', 2, '衣服');
INSERT INTO `cloth` VALUES (17, '破洞裤\n', '一条磨损的裤子', 98, '裤子');
INSERT INTO `cloth` VALUES (18, '破洞裤\n', '一条磨损的裤子', 98, '裤子');
INSERT INTO `cloth` VALUES (19, '破洞裤\n', '一条磨损的裤子', 98, '裤子');
INSERT INTO `cloth` VALUES (20, '破洞裤\n', '一条磨损的裤子', 98, '裤子');
INSERT INTO `cloth` VALUES (21, '破洞裤\n', '一条磨损的裤子', 98, '裤子');

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact`  (
  `contact_id` int NOT NULL AUTO_INCREMENT,
  `contact_mail` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `contact_passage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`contact_id`) USING BTREE,
  UNIQUE INDEX `contact_contact_id_uindex`(`contact_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES (1, '123456@qq.com', '');
INSERT INTO `contact` VALUES (2, '123456@qq.com', '反馈一下意见');
INSERT INTO `contact` VALUES (3, '123456@qq.com', '反馈一下意见');

-- ----------------------------
-- Table structure for infos
-- ----------------------------
DROP TABLE IF EXISTS `infos`;
CREATE TABLE `infos`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `classify` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `title` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `passage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `sources` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `infos_id_uindex`(`id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of infos
-- ----------------------------
INSERT INTO `infos` VALUES (1, '深度', '为什么说“小鳄鱼”Lacoste正迎来最好的机会？', '早在Athleisure运动时尚这个词被互联网发明之前，法国网球手Rene Lacoste创立的Lacoste品牌已经在1927年开创了这个品类。94年后，当运动时尚市场开始打得火热，网球裙成为社交媒体上风靡全球的流行趋势，Lacoste也正迎来一次关键的历史机遇。', '时尚头条网责任编辑');
INSERT INTO `infos` VALUES (2, '财报分析', '新款手袋受追捧，Gucci前三季度收入大涨29%', '报告期内，在集团业绩中占比近60%的Gucci销售额增长4.5%至21.81亿欧元，直营零售收入录得7%的增幅，较2019年同期也增长2%，前九个月收入大涨逾29%至66.6亿欧元，可比销售额大涨逾31%，主要受益于DIANA竹节手袋的成功推出，品牌纪念100周年的Aria系列在9月下旬陆续上架发售后同样获得积极反响。', '时尚头条网责任编辑');
INSERT INTO `infos` VALUES (3, '深度', '为什么说“小鳄鱼”Lacoste正迎来最好的机会？', '早在Athleisure运动时尚这个词被互联网发明之前，法国网球手Rene Lacoste创立的Lacoste品牌已经在1927年开创了这个品类。94年后，当运动时尚市场开始打得火热，网球裙成为社交媒体上风靡全球的流行趋势，Lacoste也正迎来一次关键的历史机遇。', '时尚头条网责任编辑');
INSERT INTO `infos` VALUES (4, '时尚', 'Y’s x Mackintosh 联名大衣发布', '近日，Y’s 将与 Mackintosh 合作推出数量有限的中性外套系列 Y’s 1972 –Y’s CRAFTED BY Mackintosh。在此次合作中，采用了麦金托什的功能性材料 RAINTEC CLASSIC，将透气防水膜粘合在两块棉织物上制成，内衬采用传统涂胶大衣的手工制作方法，所有接缝背面均采用防水胶带手工覆盖。', 'fashionsnap');
INSERT INTO `infos` VALUES (6, NULL, 'x', 'x', NULL);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_mail` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_password` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`user_id`) USING BTREE,
  UNIQUE INDEX `user_user_id_uindex`(`user_id` ASC) USING BTREE,
  UNIQUE INDEX `user_user_mail_uindex`(`user_mail` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, '119670004@qq.com', '119670004');
INSERT INTO `user` VALUES (2, '119670004@163.com', '119670004');
INSERT INTO `user` VALUES (3, '123456@qq.com', '123456');
INSERT INTO `user` VALUES (4, '1196700045@qq.com', '1196700045');

SET FOREIGN_KEY_CHECKS = 1;
