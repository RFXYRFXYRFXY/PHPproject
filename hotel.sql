/*
 Navicat Premium Data Transfer

 Source Server         : 127.0.0.1
 Source Server Type    : MySQL
 Source Server Version : 80023
 Source Host           : localhost:3306
 Source Schema         : hotel

 Target Server Type    : MySQL
 Target Server Version : 80023
 File Encoding         : 65001

 Date: 25/06/2022 14:07:31
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer`  (
  `customer_id` bigint NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `customer_appoint` int NULL DEFAULT NULL,
  PRIMARY KEY (`customer_id`) USING BTREE,
  UNIQUE INDEX `customer_customer_id_uindex`(`customer_id` ASC) USING BTREE,
  UNIQUE INDEX `customer_customer_id_uindex_2`(`customer_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO `customer` VALUES (201924430715, '秦泽峥', 1);

-- ----------------------------
-- Table structure for room
-- ----------------------------
DROP TABLE IF EXISTS `room`;
CREATE TABLE `room`  (
  `room_id` int NOT NULL AUTO_INCREMENT,
  `room_type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `room_level` int NULL DEFAULT NULL,
  `room_price` double NULL DEFAULT NULL,
  `room_state` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT '未预定',
  PRIMARY KEY (`room_id`) USING BTREE,
  UNIQUE INDEX `room_room_id_uindex`(`room_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of room
-- ----------------------------
INSERT INTO `room` VALUES (1, '经济房', 1, 98, '已预定');
INSERT INTO `room` VALUES (2, '经济房', 1, 98, '未预定');
INSERT INTO `room` VALUES (3, '经济房', 1, 98, '未预定');
INSERT INTO `room` VALUES (4, '经济房', 1, 98, '未预定');
INSERT INTO `room` VALUES (5, '经济房', 1, 98, '未预定');
INSERT INTO `room` VALUES (6, '经济房', 1, 98, '未预定');
INSERT INTO `room` VALUES (7, '经济房', 1, 98, '未预定');
INSERT INTO `room` VALUES (8, '经济房', 1, 98, '未预定');
INSERT INTO `room` VALUES (9, '经济房', 1, 98, '未预定');
INSERT INTO `room` VALUES (10, '经济房', 1, 98, '未预定');
INSERT INTO `room` VALUES (11, '情侣房', 2, 198, '未预定');
INSERT INTO `room` VALUES (12, '情侣房', 2, 198, '未预定');
INSERT INTO `room` VALUES (13, '情侣房', 2, 198, '未预定');
INSERT INTO `room` VALUES (14, '情侣房', 2, 198, '未预定');
INSERT INTO `room` VALUES (15, '情侣房', 2, 198, '未预定');
INSERT INTO `room` VALUES (16, '情侣房', 2, 198, '未预定');
INSERT INTO `room` VALUES (17, '情侣房', 2, 198, '未预定');
INSERT INTO `room` VALUES (18, '情侣房', 2, 198, '未预定');
INSERT INTO `room` VALUES (19, '情侣房', 2, 198, '未预定');
INSERT INTO `room` VALUES (20, '情侣房', 2, 198, '未预定');
INSERT INTO `room` VALUES (21, '总统套房', 3, 598, '未预定');
INSERT INTO `room` VALUES (22, '总统套房', 3, 598, '未预定');
INSERT INTO `room` VALUES (23, '总统套房', 3, 598, '未预定');
INSERT INTO `room` VALUES (24, '总统套房', 3, 598, '未预定');
INSERT INTO `room` VALUES (25, '总统套房', 3, 598, '未预定');
INSERT INTO `room` VALUES (26, '总统套房', 3, 598, '未预定');
INSERT INTO `room` VALUES (27, '总统套房', 3, 598, '未预定');
INSERT INTO `room` VALUES (28, '总统套房', 3, 598, '未预定');
INSERT INTO `room` VALUES (29, '总统套房', 3, 598, '未预定');
INSERT INTO `room` VALUES (30, '总统套房', 3, 598, '未预定');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `user_id` bigint NOT NULL AUTO_INCREMENT,
  `user_password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`user_id`) USING BTREE,
  UNIQUE INDEX `user_user_id_uindex`(`user_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (10001, '10001');
INSERT INTO `user` VALUES (10010, '10010');
INSERT INTO `user` VALUES (10086, '10086');

SET FOREIGN_KEY_CHECKS = 1;
