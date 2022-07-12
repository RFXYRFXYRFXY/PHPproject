/*
 Navicat Premium Data Transfer

 Source Server         : 127.0.0.1
 Source Server Type    : MySQL
 Source Server Version : 80023
 Source Host           : localhost:3306
 Source Schema         : bus_system

 Target Server Type    : MySQL
 Target Server Version : 80023
 File Encoding         : 65001

 Date: 26/06/2022 01:11:38
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bill
-- ----------------------------
DROP TABLE IF EXISTS `bill`;
CREATE TABLE `bill`  (
  `bill_id` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `route` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `on_time` time NULL DEFAULT NULL,
  `off_time` time NULL DEFAULT NULL,
  `user_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `steward` int NULL DEFAULT NULL,
  `pay_method` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pay_money` double NULL DEFAULT 0,
  `license_plate_number` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`bill_id`) USING BTREE,
  INDEX `bill_info`(`bill_id` ASC) USING BTREE,
  INDEX `route`(`route` ASC) USING BTREE,
  INDEX `steward`(`steward` ASC) USING BTREE,
  CONSTRAINT `route` FOREIGN KEY (`route`) REFERENCES `route` (`route`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `steward` FOREIGN KEY (`steward`) REFERENCES `stewardinfo` (`steward_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bill
-- ----------------------------

-- ----------------------------
-- Table structure for bus
-- ----------------------------
DROP TABLE IF EXISTS `bus`;
CREATE TABLE `bus`  (
  `license_plate_number` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `route` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `driver` int NULL DEFAULT NULL,
  `steward` int NULL DEFAULT NULL,
  `bus_police` int NULL DEFAULT NULL,
  `firstbus_time` time NULL DEFAULT NULL,
  `endbus_time` time NULL DEFAULT NULL,
  PRIMARY KEY (`license_plate_number`) USING BTREE,
  INDEX `businfo`(`license_plate_number` ASC) USING BTREE,
  INDEX `driver`(`driver` ASC) USING BTREE,
  INDEX `police`(`bus_police` ASC) USING BTREE,
  CONSTRAINT `driver` FOREIGN KEY (`driver`) REFERENCES `driverinfo` (`driver_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `police` FOREIGN KEY (`bus_police`) REFERENCES `bus_police` (`police_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bus
-- ----------------------------

-- ----------------------------
-- Table structure for bus_police
-- ----------------------------
DROP TABLE IF EXISTS `bus_police`;
CREATE TABLE `bus_police`  (
  `police_id` int NOT NULL,
  `name` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sex` char(1) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `id_police` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `salary` double NULL DEFAULT 0,
  `working_age` int NULL DEFAULT NULL,
  `maintain_order` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `maintain_order_time` date NULL DEFAULT NULL,
  `level` char(1) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '浣',
  PRIMARY KEY (`police_id`) USING BTREE,
  INDEX `police`(`police_id` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bus_police
-- ----------------------------

-- ----------------------------
-- Table structure for driverinfo
-- ----------------------------
DROP TABLE IF EXISTS `driverinfo`;
CREATE TABLE `driverinfo`  (
  `driver_id` int NULL DEFAULT NULL,
  `name` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `id_driver` int NULL DEFAULT NULL,
  `driver_license` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `license_type` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `license_available` datetime NULL DEFAULT NULL,
  `driving_car` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `actual_service_life` double NULL DEFAULT 0,
  `work_age_driver` int UNSIGNED NULL DEFAULT 0,
  `salary_driver` double NULL DEFAULT 0,
  `level_driver` char(1) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  INDEX `driver`(`driver_id` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of driverinfo
-- ----------------------------

-- ----------------------------
-- Table structure for route
-- ----------------------------
DROP TABLE IF EXISTS `route`;
CREATE TABLE `route`  (
  `route_id` int NULL DEFAULT NULL,
  `route` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `startstation` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `passingstation` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `endstation` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`route`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of route
-- ----------------------------

-- ----------------------------
-- Table structure for route_table
-- ----------------------------
DROP TABLE IF EXISTS `route_table`;
CREATE TABLE `route_table`  (
  `route_id` int NOT NULL AUTO_INCREMENT,
  `route_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `start_station` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `passing_station` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `ending_station` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `start_time` time NULL DEFAULT NULL,
  `end_time` time NULL DEFAULT NULL,
  PRIMARY KEY (`route_id`) USING BTREE,
  UNIQUE INDEX `route_table_route_id_uindex`(`route_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of route_table
-- ----------------------------
INSERT INTO `route_table` VALUES (1, '唐山101路公交车路线', '二十一小区', '二十一小区|早市|丰润区政府|幸福商场|八小区|七小区|十一小区|公园道口|白家沟市场|十八小区|新铁小区|润堂悦府|刘庄子南口|燕山路南口|冀东板市|八里庄（建设北路）|大八里庄|炼焦制气场', '炼焦制气场', '06:00:00', '18:40:00');
INSERT INTO `route_table` VALUES (2, '唐山103路公交车路线', '职教中心', '职教中心|园北小区|二十一小区北口|二十一小区|曹雪芹公园|丰润土地局|十一小区|公园道口|燕山路|东关|万润壹字号|王庄子（曹雪芹西道）|丰润汽车站|天宫寺塔|铁路工房|唐山北站', '唐山北站', '06:00:00', '18:00:00');
INSERT INTO `route_table` VALUES (3, '唐山104路公交车路线', '北方购物', '北方购物|团结路口|八小区|幸福商场|丰润区政府|早市|二十一小区|南厂文化宫|三小区市场|齿轮厂|南厂西门|丰润区车场东门|南厂南门|曹雪芹大街东口|银城铺派出所|东山桥|东山路与公园道交叉口|前大树西|前大树东', '前大树东', '06:20:00', '17:30:00');
INSERT INTO `route_table` VALUES (4, '唐山105路公交车路线', '中建城', '中建城|同安社区|园北小区|二十一小区东口|二十一小区|早市|丰润区政府|三小区|丰润六小区|北方购物|团结路口|中铁十八局|中铁十六局|新铁小区|润唐悦府|光明眼科医院|昌盛街西口|开尔尚城家园', '开尔尚城家园', '06:20:00', '18:30:00');
INSERT INTO `route_table` VALUES (5, '唐山106路公交车路线', '光华道东口', '光华道东口|六小区|光华道市场|光华小区|团结路口|北方购物|三小区|丰润区政府|早市|二十一小区|一小区|体育场|圣雪大成|轻机厂|前大树|中大树|北大树|菜园道口|刘家营路|贾家洼|后刘家营|前刘家营', '前刘家营', '06:00:00', '18:00:00');
INSERT INTO `route_table` VALUES (6, '唐山108路公交车路线', '丰润区车场', '丰润区车场|华新|丰润三小区|丰润六小区|北方购物|团结路口|燕山路|东关|万润壹号|王庄子(曹雪芹西道）|丰润汽车站|招商银行丰润支行|祥和小区|沧州银行|静园|五中|瑞祥国际酒店', '瑞祥国际酒店', '05:40:00', '19:30:00');

-- ----------------------------
-- Table structure for stewardinfo
-- ----------------------------
DROP TABLE IF EXISTS `stewardinfo`;
CREATE TABLE `stewardinfo`  (
  `steward_id` int NOT NULL,
  `name` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sex` char(1) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `age` int UNSIGNED NULL DEFAULT NULL,
  `id_steward` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `salary` double NULL DEFAULT 0,
  PRIMARY KEY (`steward_id`) USING BTREE,
  INDEX `steward`(`steward_id` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of stewardinfo
-- ----------------------------

-- ----------------------------
-- Table structure for ticket
-- ----------------------------
DROP TABLE IF EXISTS `ticket`;
CREATE TABLE `ticket`  (
  `ticket_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `purchaser` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `par_value` double NULL DEFAULT 0,
  `starting_station` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ending_station` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `qr_code` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ticket_id`) USING BTREE,
  INDEX `ticket`(`ticket_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ticket
-- ----------------------------
INSERT INTO `ticket` VALUES (7, '用户', 3, '始发站', '末班站', '二维码');
INSERT INTO `ticket` VALUES (8, '用户', 3, '始发站', '末班站', '二维码');
INSERT INTO `ticket` VALUES (9, '用户', 3, NULL, NULL, '二维码');
INSERT INTO `ticket` VALUES (10, '用户', 3, NULL, NULL, '二维码');
INSERT INTO `ticket` VALUES (11, '用户', 3, NULL, NULL, '二维码');
INSERT INTO `ticket` VALUES (12, '用户', 3, NULL, NULL, '二维码');
INSERT INTO `ticket` VALUES (13, '用户', 3, NULL, NULL, '二维码');
INSERT INTO `ticket` VALUES (14, '用户', 3, NULL, NULL, '二维码');
INSERT INTO `ticket` VALUES (15, '用户', 3, NULL, NULL, '二维码');
INSERT INTO `ticket` VALUES (16, '用户', 2, NULL, NULL, '二维码');
INSERT INTO `ticket` VALUES (17, '用户', 2, NULL, NULL, '二维码');
INSERT INTO `ticket` VALUES (18, '用户', 2, NULL, NULL, '二维码');
INSERT INTO `ticket` VALUES (19, '用户', 2, NULL, NULL, '二维码');
INSERT INTO `ticket` VALUES (20, '用户', 2, NULL, NULL, '二维码');

-- ----------------------------
-- Table structure for userinfo
-- ----------------------------
DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE `userinfo`  (
  `user_account` bigint NOT NULL AUTO_INCREMENT,
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `user_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `telephone` int NULL DEFAULT NULL,
  `wecheat` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `address` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `company_address` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `school_address` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `balance` double(50, 2) NULL DEFAULT 0.00,
  PRIMARY KEY (`user_account`) USING BTREE,
  INDEX `passenger`(`user_account` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of userinfo
-- ----------------------------
INSERT INTO `userinfo` VALUES (10001, '10001', NULL, NULL, NULL, NULL, NULL, NULL, 0.00);

-- ----------------------------
-- Table structure for vip
-- ----------------------------
DROP TABLE IF EXISTS `vip`;
CREATE TABLE `vip`  (
  `vip_id` bigint NOT NULL,
  `vip_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `vip_tel` bigint NULL DEFAULT NULL,
  `id_number` tinytext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `qr_code` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`vip_id`) USING BTREE,
  INDEX `vip_id`(`vip_id` ASC) USING BTREE,
  CONSTRAINT `id` FOREIGN KEY (`vip_id`) REFERENCES `userinfo` (`user_account`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of vip
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
