/*
 Navicat Premium Data Transfer

 Source Server         : LOCAL
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : midtrans

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 12/01/2024 08:21:44
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for auth_activation_attempts
-- ----------------------------
DROP TABLE IF EXISTS `auth_activation_attempts`;
CREATE TABLE `auth_activation_attempts`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_agent` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of auth_activation_attempts
-- ----------------------------

-- ----------------------------
-- Table structure for auth_groups
-- ----------------------------
DROP TABLE IF EXISTS `auth_groups`;
CREATE TABLE `auth_groups`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 64 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of auth_groups
-- ----------------------------
INSERT INTO `auth_groups` VALUES (1, 'admin', 'role-admin');
INSERT INTO `auth_groups` VALUES (2, 'user', 'role-user');
INSERT INTO `auth_groups` VALUES (3, 'spv', 'role-spv');
INSERT INTO `auth_groups` VALUES (4, 'am', 'role-am');
INSERT INTO `auth_groups` VALUES (5, 'nsm', 'role-nsm');
INSERT INTO `auth_groups` VALUES (6, 'gm', 'role-gm');
INSERT INTO `auth_groups` VALUES (7, 'dir', 'role-dir');
INSERT INTO `auth_groups` VALUES (8, 'edp', 'role-edp');
INSERT INTO `auth_groups` VALUES (10, 'sp-jkt', 'role-admin-sp-skb');
INSERT INTO `auth_groups` VALUES (14, 'sp-skb', 'role-admin-stok-point-skb');
INSERT INTO `auth_groups` VALUES (20, 'sp-bdg', 'role-admin-sp-bdg');
INSERT INTO `auth_groups` VALUES (21, 'sp-crb', 'role-admin-sp-crb');
INSERT INTO `auth_groups` VALUES (22, 'sp-tsk', 'role-admin-sp-tsk');
INSERT INTO `auth_groups` VALUES (23, 'sp-grt', 'role-admin-sp-grt');
INSERT INTO `auth_groups` VALUES (24, 'sp-idr', 'role-admin-sp-idr');
INSERT INTO `auth_groups` VALUES (25, 'sp-kng', 'role-admin-sp-kng');
INSERT INTO `auth_groups` VALUES (26, 'sp-sbg', 'role-admin-sp-sbg');
INSERT INTO `auth_groups` VALUES (27, 'sp-bjr', 'role-admin-sp-bjr');
INSERT INTO `auth_groups` VALUES (28, 'spv-skb', 'role-spv-skb');
INSERT INTO `auth_groups` VALUES (29, 'spv-bdg', 'role-spv-bdg');
INSERT INTO `auth_groups` VALUES (30, 'spv-crb', 'role-spv-crb');
INSERT INTO `auth_groups` VALUES (31, 'spv-tsk', 'role-spv-tsk');
INSERT INTO `auth_groups` VALUES (32, 'spv-grt', 'role-spv-grt');
INSERT INTO `auth_groups` VALUES (33, 'spv-idr', 'role-spv-idr');
INSERT INTO `auth_groups` VALUES (34, 'spv-kng', 'role-spv-kng');
INSERT INTO `auth_groups` VALUES (35, 'spv-sbg', 'role-spv-sbg');
INSERT INTO `auth_groups` VALUES (36, 'spv-bjr', 'role-spv-bjr');
INSERT INTO `auth_groups` VALUES (37, 'spv-jkt', 'role-spv-jkt');
INSERT INTO `auth_groups` VALUES (38, 'cc-jkt', 'Credit Control Jakarta');
INSERT INTO `auth_groups` VALUES (39, 'cc-sbm', 'Credit Control Sukabumi');
INSERT INTO `auth_groups` VALUES (40, 'cc-bdg', 'Credit Control Bandung');
INSERT INTO `auth_groups` VALUES (41, 'cc-crb', 'Credit Control Cirebon');
INSERT INTO `auth_groups` VALUES (42, 'cc-tsk', 'Credit Control Tasikmalaya');
INSERT INTO `auth_groups` VALUES (43, 'cc-grt', 'Credit Control Garut');
INSERT INTO `auth_groups` VALUES (44, 'cc-idr', 'Credit Control Indramayu');
INSERT INTO `auth_groups` VALUES (45, 'cc-kng', 'Credit Control Kuningan');
INSERT INTO `auth_groups` VALUES (46, 'cc-sbg', 'Credit Control Subang');
INSERT INTO `auth_groups` VALUES (47, 'cc-bjr', 'Credit Control Banjar');
INSERT INTO `auth_groups` VALUES (48, 'acc', 'Accounting');
INSERT INTO `auth_groups` VALUES (49, 'ksr-jkt', 'Kasir Jakarta');
INSERT INTO `auth_groups` VALUES (50, 'ksr-sbm', 'Kasir Sukabumi');
INSERT INTO `auth_groups` VALUES (51, 'ksr-bdg', 'Kasir Bandung');
INSERT INTO `auth_groups` VALUES (52, 'ksr-crb', 'Kasir Cirebon');
INSERT INTO `auth_groups` VALUES (53, 'ksr-tsk', 'Kasir Tasikmalaya');
INSERT INTO `auth_groups` VALUES (54, 'ksr-grt', 'Kasir Garut');
INSERT INTO `auth_groups` VALUES (55, 'ksr-idr', 'Kasir Indramayu');
INSERT INTO `auth_groups` VALUES (56, 'ksr-kng', 'Kasir Kuningan');
INSERT INTO `auth_groups` VALUES (57, 'ksr-sbg', 'Kasir Subang');
INSERT INTO `auth_groups` VALUES (58, 'ksr-bjr', 'Kasir Banjar');
INSERT INTO `auth_groups` VALUES (59, 'adm-jbr', 'Role Admin Jabar');
INSERT INTO `auth_groups` VALUES (60, 'fam', 'Role FAM');
INSERT INTO `auth_groups` VALUES (61, 'kaadmin', 'Kepala Admin');
INSERT INTO `auth_groups` VALUES (62, 'adm-ho', 'Admin Head Office');
INSERT INTO `auth_groups` VALUES (63, 'audit', 'Role Audit');

-- ----------------------------
-- Table structure for auth_groups_permissions
-- ----------------------------
DROP TABLE IF EXISTS `auth_groups_permissions`;
CREATE TABLE `auth_groups_permissions`  (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  INDEX `auth_groups_permissions_permission_id_foreign`(`permission_id`) USING BTREE,
  INDEX `group_id_permission_id`(`group_id`, `permission_id`) USING BTREE,
  CONSTRAINT `auth_groups_permissions_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `auth_groups_permissions_ibfk_2` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of auth_groups_permissions
-- ----------------------------
INSERT INTO `auth_groups_permissions` VALUES (1, 1);
INSERT INTO `auth_groups_permissions` VALUES (2, 2);
INSERT INTO `auth_groups_permissions` VALUES (4, 5);
INSERT INTO `auth_groups_permissions` VALUES (5, 6);
INSERT INTO `auth_groups_permissions` VALUES (6, 7);
INSERT INTO `auth_groups_permissions` VALUES (7, 8);
INSERT INTO `auth_groups_permissions` VALUES (8, 9);
INSERT INTO `auth_groups_permissions` VALUES (10, 13);
INSERT INTO `auth_groups_permissions` VALUES (14, 13);
INSERT INTO `auth_groups_permissions` VALUES (20, 13);
INSERT INTO `auth_groups_permissions` VALUES (21, 13);
INSERT INTO `auth_groups_permissions` VALUES (22, 13);
INSERT INTO `auth_groups_permissions` VALUES (23, 13);
INSERT INTO `auth_groups_permissions` VALUES (24, 13);
INSERT INTO `auth_groups_permissions` VALUES (25, 13);
INSERT INTO `auth_groups_permissions` VALUES (26, 13);
INSERT INTO `auth_groups_permissions` VALUES (27, 13);
INSERT INTO `auth_groups_permissions` VALUES (28, 4);
INSERT INTO `auth_groups_permissions` VALUES (29, 4);
INSERT INTO `auth_groups_permissions` VALUES (30, 4);
INSERT INTO `auth_groups_permissions` VALUES (31, 4);
INSERT INTO `auth_groups_permissions` VALUES (32, 4);
INSERT INTO `auth_groups_permissions` VALUES (33, 4);
INSERT INTO `auth_groups_permissions` VALUES (34, 4);
INSERT INTO `auth_groups_permissions` VALUES (35, 4);
INSERT INTO `auth_groups_permissions` VALUES (36, 4);
INSERT INTO `auth_groups_permissions` VALUES (37, 4);
INSERT INTO `auth_groups_permissions` VALUES (38, 13);
INSERT INTO `auth_groups_permissions` VALUES (39, 13);
INSERT INTO `auth_groups_permissions` VALUES (40, 13);
INSERT INTO `auth_groups_permissions` VALUES (41, 13);
INSERT INTO `auth_groups_permissions` VALUES (42, 13);
INSERT INTO `auth_groups_permissions` VALUES (43, 13);
INSERT INTO `auth_groups_permissions` VALUES (44, 13);
INSERT INTO `auth_groups_permissions` VALUES (45, 13);
INSERT INTO `auth_groups_permissions` VALUES (46, 13);
INSERT INTO `auth_groups_permissions` VALUES (47, 13);
INSERT INTO `auth_groups_permissions` VALUES (48, 12);
INSERT INTO `auth_groups_permissions` VALUES (49, 13);
INSERT INTO `auth_groups_permissions` VALUES (50, 13);
INSERT INTO `auth_groups_permissions` VALUES (51, 13);
INSERT INTO `auth_groups_permissions` VALUES (52, 13);
INSERT INTO `auth_groups_permissions` VALUES (53, 13);
INSERT INTO `auth_groups_permissions` VALUES (54, 13);
INSERT INTO `auth_groups_permissions` VALUES (55, 13);
INSERT INTO `auth_groups_permissions` VALUES (56, 13);
INSERT INTO `auth_groups_permissions` VALUES (57, 13);
INSERT INTO `auth_groups_permissions` VALUES (58, 13);
INSERT INTO `auth_groups_permissions` VALUES (59, 14);
INSERT INTO `auth_groups_permissions` VALUES (60, 15);
INSERT INTO `auth_groups_permissions` VALUES (61, 19);
INSERT INTO `auth_groups_permissions` VALUES (62, 20);
INSERT INTO `auth_groups_permissions` VALUES (63, 21);

-- ----------------------------
-- Table structure for auth_groups_users
-- ----------------------------
DROP TABLE IF EXISTS `auth_groups_users`;
CREATE TABLE `auth_groups_users`  (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  INDEX `auth_groups_users_user_id_foreign`(`user_id`) USING BTREE,
  INDEX `group_id_user_id`(`group_id`, `user_id`) USING BTREE,
  CONSTRAINT `auth_groups_users_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `auth_groups_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of auth_groups_users
-- ----------------------------
INSERT INTO `auth_groups_users` VALUES (1, 1);
INSERT INTO `auth_groups_users` VALUES (1, 40);
INSERT INTO `auth_groups_users` VALUES (1, 41);
INSERT INTO `auth_groups_users` VALUES (1, 42);
INSERT INTO `auth_groups_users` VALUES (1, 80);
INSERT INTO `auth_groups_users` VALUES (2, 43);
INSERT INTO `auth_groups_users` VALUES (4, 36);
INSERT INTO `auth_groups_users` VALUES (5, 37);
INSERT INTO `auth_groups_users` VALUES (6, 38);
INSERT INTO `auth_groups_users` VALUES (7, 39);
INSERT INTO `auth_groups_users` VALUES (10, 26);
INSERT INTO `auth_groups_users` VALUES (10, 82);
INSERT INTO `auth_groups_users` VALUES (14, 27);
INSERT INTO `auth_groups_users` VALUES (20, 28);
INSERT INTO `auth_groups_users` VALUES (21, 29);
INSERT INTO `auth_groups_users` VALUES (22, 30);
INSERT INTO `auth_groups_users` VALUES (23, 31);
INSERT INTO `auth_groups_users` VALUES (24, 32);
INSERT INTO `auth_groups_users` VALUES (25, 33);
INSERT INTO `auth_groups_users` VALUES (26, 34);
INSERT INTO `auth_groups_users` VALUES (27, 35);
INSERT INTO `auth_groups_users` VALUES (28, 17);
INSERT INTO `auth_groups_users` VALUES (29, 18);
INSERT INTO `auth_groups_users` VALUES (29, 77);
INSERT INTO `auth_groups_users` VALUES (30, 19);
INSERT INTO `auth_groups_users` VALUES (31, 20);
INSERT INTO `auth_groups_users` VALUES (32, 21);
INSERT INTO `auth_groups_users` VALUES (33, 22);
INSERT INTO `auth_groups_users` VALUES (34, 23);
INSERT INTO `auth_groups_users` VALUES (35, 24);
INSERT INTO `auth_groups_users` VALUES (36, 25);
INSERT INTO `auth_groups_users` VALUES (37, 16);
INSERT INTO `auth_groups_users` VALUES (38, 44);
INSERT INTO `auth_groups_users` VALUES (39, 45);
INSERT INTO `auth_groups_users` VALUES (40, 46);
INSERT INTO `auth_groups_users` VALUES (41, 47);
INSERT INTO `auth_groups_users` VALUES (42, 48);
INSERT INTO `auth_groups_users` VALUES (43, 49);
INSERT INTO `auth_groups_users` VALUES (44, 50);
INSERT INTO `auth_groups_users` VALUES (45, 51);
INSERT INTO `auth_groups_users` VALUES (46, 52);
INSERT INTO `auth_groups_users` VALUES (47, 53);
INSERT INTO `auth_groups_users` VALUES (48, 54);
INSERT INTO `auth_groups_users` VALUES (48, 55);
INSERT INTO `auth_groups_users` VALUES (48, 56);
INSERT INTO `auth_groups_users` VALUES (48, 57);
INSERT INTO `auth_groups_users` VALUES (48, 58);
INSERT INTO `auth_groups_users` VALUES (48, 59);
INSERT INTO `auth_groups_users` VALUES (48, 60);
INSERT INTO `auth_groups_users` VALUES (48, 61);
INSERT INTO `auth_groups_users` VALUES (48, 62);
INSERT INTO `auth_groups_users` VALUES (48, 63);
INSERT INTO `auth_groups_users` VALUES (49, 64);
INSERT INTO `auth_groups_users` VALUES (50, 65);
INSERT INTO `auth_groups_users` VALUES (51, 66);
INSERT INTO `auth_groups_users` VALUES (52, 67);
INSERT INTO `auth_groups_users` VALUES (53, 68);
INSERT INTO `auth_groups_users` VALUES (54, 69);
INSERT INTO `auth_groups_users` VALUES (55, 70);
INSERT INTO `auth_groups_users` VALUES (56, 71);
INSERT INTO `auth_groups_users` VALUES (57, 72);
INSERT INTO `auth_groups_users` VALUES (58, 73);
INSERT INTO `auth_groups_users` VALUES (59, 74);
INSERT INTO `auth_groups_users` VALUES (59, 76);
INSERT INTO `auth_groups_users` VALUES (60, 75);
INSERT INTO `auth_groups_users` VALUES (62, 78);
INSERT INTO `auth_groups_users` VALUES (62, 79);
INSERT INTO `auth_groups_users` VALUES (63, 81);

-- ----------------------------
-- Table structure for auth_logins
-- ----------------------------
DROP TABLE IF EXISTS `auth_logins`;
CREATE TABLE `auth_logins`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `user_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `date` datetime(0) NOT NULL,
  `success` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `email`(`email`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of auth_logins
-- ----------------------------
INSERT INTO `auth_logins` VALUES (1, '192.168.0.5', 'edp4@pt-api.com', 1, '2023-04-18 11:31:03', 1);
INSERT INTO `auth_logins` VALUES (2, '192.168.0.5', 'edp4@pt-api.com', 1, '2024-01-10 10:57:02', 1);
INSERT INTO `auth_logins` VALUES (3, '192.168.0.5', 'edp4@pt-api.com', 1, '2024-01-11 01:14:20', 1);
INSERT INTO `auth_logins` VALUES (4, '192.168.0.5', 'edp4@pt-api.com', 1, '2024-01-11 04:14:22', 1);
INSERT INTO `auth_logins` VALUES (5, '192.168.0.5', 'edp4@pt-api.com', 1, '2024-01-12 01:21:06', 1);

-- ----------------------------
-- Table structure for auth_permissions
-- ----------------------------
DROP TABLE IF EXISTS `auth_permissions`;
CREATE TABLE `auth_permissions`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of auth_permissions
-- ----------------------------
INSERT INTO `auth_permissions` VALUES (1, 'manage-all', 'role-admin');
INSERT INTO `auth_permissions` VALUES (2, 'manage-user', 'role-user');
INSERT INTO `auth_permissions` VALUES (4, 'spv', 'role-spv');
INSERT INTO `auth_permissions` VALUES (5, 'am', 'role-am');
INSERT INTO `auth_permissions` VALUES (6, 'nsm', 'role-nsm');
INSERT INTO `auth_permissions` VALUES (7, 'gm', 'role-gm');
INSERT INTO `auth_permissions` VALUES (8, 'dir', 'role-dir');
INSERT INTO `auth_permissions` VALUES (9, 'edp', 'role-edp');
INSERT INTO `auth_permissions` VALUES (10, 'root', 'do not access to all');
INSERT INTO `auth_permissions` VALUES (12, 'acc', 'Accounting');
INSERT INTO `auth_permissions` VALUES (13, 'sp', 'Role Stock Point');
INSERT INTO `auth_permissions` VALUES (14, 'adm-jbr', 'Role Admin Jabar');
INSERT INTO `auth_permissions` VALUES (15, 'fam', 'Finance Accounting Manager');
INSERT INTO `auth_permissions` VALUES (18, 'tes', 'tes');
INSERT INTO `auth_permissions` VALUES (19, 'kaadmin', 'Kepala Admin');
INSERT INTO `auth_permissions` VALUES (20, 'adm-ho', 'Admin Head Office');
INSERT INTO `auth_permissions` VALUES (21, 'audit', 'Role Audit');

-- ----------------------------
-- Table structure for auth_reset_attempts
-- ----------------------------
DROP TABLE IF EXISTS `auth_reset_attempts`;
CREATE TABLE `auth_reset_attempts`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ip_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_agent` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of auth_reset_attempts
-- ----------------------------

-- ----------------------------
-- Table structure for auth_tokens
-- ----------------------------
DROP TABLE IF EXISTS `auth_tokens`;
CREATE TABLE `auth_tokens`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `selector` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hashedValidator` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `auth_tokens_user_id_foreign`(`user_id`) USING BTREE,
  INDEX `selector`(`selector`) USING BTREE,
  CONSTRAINT `auth_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of auth_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for auth_users_permissions
-- ----------------------------
DROP TABLE IF EXISTS `auth_users_permissions`;
CREATE TABLE `auth_users_permissions`  (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  INDEX `auth_users_permissions_permission_id_foreign`(`permission_id`) USING BTREE,
  INDEX `user_id_permission_id`(`user_id`, `permission_id`) USING BTREE,
  CONSTRAINT `auth_users_permissions_ibfk_1` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `auth_users_permissions_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of auth_users_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order`  (
  `order_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `barang` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jml` int(100) NULL DEFAULT NULL,
  `nilai` int(100) NULL DEFAULT NULL,
  `inputby` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `sts` int(2) NOT NULL,
  PRIMARY KEY (`order_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of order
-- ----------------------------
INSERT INTO `order` VALUES ('11704948848', 1, 'tes', 2, 100000, '2024-01-11 11:54:08;administrator', 0);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `reset_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `reset_at` datetime(0) NULL DEFAULT NULL,
  `reset_expires` datetime(0) NULL DEFAULT NULL,
  `activate_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `status_message` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `email`(`email`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 83 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'edp4@pt-api.com', 'administrator', '1662023046_9015dc727a4e62cf0013.png', '$2y$10$ixsPGTyTO7K4.e64/IVRs.anE2sVvzoMWFZvd47iDZZyvkYhUJ0xa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-11 01:08:52', '2022-08-29 14:43:47', NULL);
INSERT INTO `users` VALUES (16, 'spvjkt@pt-api.com', 'spvjkt', 'default.png', '$2y$10$0SOxCUtE3j6hggqFa3CNy.KWrJT/n/wgmvVfmUtGHMUS24QPhSay.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-29 15:52:24', '2022-08-29 15:52:24', NULL);
INSERT INTO `users` VALUES (17, 'spvsbm@pt-api.com', 'spvsbm', 'default.png', '$2y$10$SKEJQP9iPIvnpTlCliM7MOcSXMYDwWoKfG3zR/a6x6SWrtI/JFUb2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-29 15:54:11', '2022-09-05 15:57:19', NULL);
INSERT INTO `users` VALUES (18, 'spvbdg@pt-api.com', 'spvbdg', 'default.png', '$2y$10$N/v4TRfjanJO3uMkzV77DeslMNwX2ebUJB2eyN5/imYs4cNoaSoku', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-29 15:54:52', '2022-08-29 15:54:52', NULL);
INSERT INTO `users` VALUES (19, 'spvcrb1@pt-api.com', 'spvcrb1', 'default.png', '$2y$10$ProF.0UGJKMqgvVnNAI56.KiRH3T4z.gc74CizTY8oiqRRBXYQadW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-29 15:55:50', '2023-02-09 07:58:28', NULL);
INSERT INTO `users` VALUES (20, 'spvtsk@pt-api.com', 'spvtsk', 'default.png', '$2y$10$A/vl8zwp2ALsGbFhw5fKk.7IbXPqiwQ2KVRFkscvXQIWjRJ9MuPX.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-29 15:58:15', '2022-08-29 15:58:15', NULL);
INSERT INTO `users` VALUES (21, 'spvgrt@pt-api.com', 'spvgrt', 'default.png', '$2y$10$f5FfFrWVa6TLDYIyfxw5Euc/D1ikcZ1dZo23YCTlSlGVmAoCWQ1J6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-29 15:58:48', '2022-08-29 15:58:48', NULL);
INSERT INTO `users` VALUES (22, 'spvidr@pt-api.com', 'spvidr', 'default.png', '$2y$10$YWXflR2zKswEuYLlfpTnvOXQAo5ujYHQIjX8JFW1qFUtzsYGt5h/u', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-29 15:59:30', '2022-08-29 15:59:30', NULL);
INSERT INTO `users` VALUES (23, 'spvkng@pt-api.com', 'spvkng', 'default.png', '$2y$10$KlfbAXLFHAifnWB/y.WZXeTTvfYqfDQ2q2eioQ9JWWvSuegUBnIIe', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-29 16:00:00', '2022-08-29 16:00:00', NULL);
INSERT INTO `users` VALUES (24, 'spvsbg@pt-api.com', 'spvsbg', 'default.png', '$2y$10$trdfBoPmUFva5duyz5poweXApBDLt7s235SeKi3OpvnON7AACyBWK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-29 16:00:46', '2022-08-29 16:00:46', NULL);
INSERT INTO `users` VALUES (25, 'spvbjr@pt-api.com', 'spvbjr', 'default.png', '$2y$10$gTAG5hCMuLPJb3a/mBB4veido59vwa01PCPTkfI3SwMlUsAbVI8bS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-29 16:01:09', '2022-08-29 16:01:09', NULL);
INSERT INTO `users` VALUES (26, 'adminjkt@pt-api.com', 'adminjkt', 'default.png', '$2y$10$3zvFoJVvVAoXB5m/KzbMoeAWv..orDpcng3KBX.YD2w3nNEQ5p8B2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-29 16:14:10', '2022-08-29 16:14:10', NULL);
INSERT INTO `users` VALUES (27, 'adminsbm@pt-api.com', 'adminsbm', 'default.png', '$2y$10$IwAIGKgqHZQ6R4Jurej/muOnPWNHD/xyND3K6bpOZaCbFH8G8AzdW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-29 16:15:13', '2022-09-05 15:56:58', NULL);
INSERT INTO `users` VALUES (28, 'adminbdg@pt-api.com', 'adminbdg', 'default.png', '$2y$10$75Vx7TDUA/73aMedpg9XVuzP7IUCuxVdyY1RYRdeNUslcgYl4Jfku', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-29 16:36:18', '2022-08-29 16:36:18', NULL);
INSERT INTO `users` VALUES (29, 'admincrb@pt-api.com', 'admincrb', 'default.png', '$2y$10$/ZVe3J2FTY0MO0utufQ7JOptiLrMnZMZlD3YJkt7R38/PAjfrmjNi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-29 16:37:02', '2022-08-29 16:37:02', NULL);
INSERT INTO `users` VALUES (30, 'admintsk@pt-api.com', 'admintsk', 'default.png', '$2y$10$/7zu329aVRTIe66F1/9mBu7zbg/wez0lRPK9mypc1Qf0kYOKe0KrG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-29 16:37:33', '2022-08-29 16:37:33', NULL);
INSERT INTO `users` VALUES (31, 'admingrt@pt-api.com', 'admingrt', 'default.png', '$2y$10$x7cSUpf9YiqVsODYTj86Yu413uXiDn.yF5aQV12V7rDGk9jdkWPK6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-29 16:38:06', '2022-08-29 16:38:06', NULL);
INSERT INTO `users` VALUES (32, 'adminidr@pt-api.com', 'adminidr', '1663916647_b441cb3d356c821d818f.jpg', '$2y$10$qHVYc/6hP4/n5/HNuT5Vd.Xfyu/Cobuc9UOcU4tReguoLBorRvPxG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-29 16:38:35', '2022-08-29 16:38:35', NULL);
INSERT INTO `users` VALUES (33, 'adminkng@pt-api.com', 'adminkng', 'default.png', '$2y$10$x7dFZdOYMG1z2iQj54zhWe5.lqagOcyR/DJpd29c49IR9ukGiGzgu', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-29 16:39:03', '2022-08-29 16:39:03', NULL);
INSERT INTO `users` VALUES (34, 'adminsbg@pt-api.com', 'adminsbg', 'default.png', '$2y$10$yCFv3zeoNmOSaJelAgIP1uax.lJlbkWJXJyBa8TLNXMY.aPb8552K', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-29 16:39:29', '2022-08-29 16:39:29', NULL);
INSERT INTO `users` VALUES (35, 'adminbjr@pt-api.com', 'adminbjr', 'default.png', '$2y$10$6cuUj6PR0HJjMCCU8tAfJuBJCkp/1v3NFSSQAyXwV/2rJpmBqT7sS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-29 16:39:55', '2022-08-29 16:39:55', NULL);
INSERT INTO `users` VALUES (36, 'amjabar@pt-api.com', 'areamanager', 'default.png', '$2y$10$nS1PRU.nhp6nB6W55OHfYeafiohqTcbXuR.UyqvT0pgHSneehT9ha', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-30 08:21:39', '2022-08-30 08:21:39', NULL);
INSERT INTO `users` VALUES (37, 'hendrabudiman@pt-api.com', 'nsmanager', 'default.png', '$2y$10$p96jjVYmVZwvTpiTsOZj7e65idiLVIUKd8nowfHLNreK6cvCCbe7K', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-30 08:23:55', '2022-08-30 08:23:55', NULL);
INSERT INTO `users` VALUES (38, 'yaminsumito@pt-api.com', 'gmanager', 'default.png', '$2y$10$SzQ.GPQ1OzpXI4NI58hoIOk0wQl/l/Vxpn5djae.E50AKpOAitk4u', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-30 08:25:07', '2022-08-30 08:25:07', NULL);
INSERT INTO `users` VALUES (39, 'adisumito@pt-api.com', 'dir', 'default.png', '$2y$10$ESyYcRyjdDEJ8IYZiZpg9uqD/sAdQQSoxSrUOtoGPGf2TOEyysXeG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-30 08:25:43', '2022-08-30 08:25:43', NULL);
INSERT INTO `users` VALUES (40, 'edp@pt-api.com', 'abi', 'default.png', '$2y$10$.Gxnv47WsqjEn3XzuLGe4.4PlBsMsZY1dpgGrujy32f8DRxaXURre', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-30 08:27:13', '2022-08-30 08:27:13', NULL);
INSERT INTO `users` VALUES (41, 'edp2@pt-api.com', 'ian', 'default.png', '$2y$10$tr8oGZXLiG5fdtqGR3jl0OtgQgBspeKnHUHG1jQxTfVrJNyRbLnWu', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-30 08:28:22', '2022-08-30 13:03:41', NULL);
INSERT INTO `users` VALUES (42, 'edp3@pt-api.com', 'sul', 'default.png', '$2y$10$enxuCkA2lZmQ5Swm33eG7eA3YOmFjMbSZKlLfh.dC3bd349EtPSk2', NULL, '2023-03-16 08:41:49', NULL, NULL, NULL, NULL, 1, 0, '2022-08-30 08:29:46', '2023-03-16 08:41:49', NULL);
INSERT INTO `users` VALUES (43, 'user@tes.com', 'user1', 'default.png', '$2y$10$txMyYuhdZpzSwn9UvqCIXukGI/exI8RS2koC88dF2sX2mL9FMpEzS', NULL, '2022-12-15 08:19:27', NULL, NULL, NULL, NULL, 1, 0, '2022-08-31 09:43:09', '2022-12-15 08:19:27', NULL);
INSERT INTO `users` VALUES (44, 'ccjkt@pt-api.com', 'cc jkt', 'default.png', '$2y$10$FKis7WIKUwl0n/Z7ZIMAWeNPoiuXM51RtybzfXa3rXk1UuILiScBe', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-11 16:57:47', '2022-10-11 16:57:47', NULL);
INSERT INTO `users` VALUES (45, 'ccsbm@pt-api.com', 'cc sbm', 'default.png', '$2y$10$K4dxpH7mwGqFnkVoUfHqZu7mkgD7gGxQAR3bplFZhuV1FYElVALpy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-11 16:58:18', '2022-10-11 16:58:18', NULL);
INSERT INTO `users` VALUES (46, 'ccbdg@pt-api.com', 'cc bdg', 'default.png', '$2y$10$a09xjbej6P48FclzorxVFu9vkFyFmEcAI1kaZjEhRNsyd48wYTOjW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-11 16:59:15', '2022-10-11 16:59:15', NULL);
INSERT INTO `users` VALUES (47, 'cccrb@pt-api.com', 'cc crb', 'default.png', '$2y$10$UKBQcfpZrlbnYzXjQLUJkuYoJEH19afGDFqCwBm0G0DJWOPo52rZG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-11 17:00:04', '2022-10-11 17:00:04', NULL);
INSERT INTO `users` VALUES (48, 'cctsk@pt-api.com', 'cc tsk', 'default.png', '$2y$10$KIAXfzOMzSXP7FtkKeykuuBi0Jm06w7ac8uTYjnPTFUyXHS44acHO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-11 17:00:33', '2022-10-11 17:00:33', NULL);
INSERT INTO `users` VALUES (49, 'ccgrt@pt-api.com', 'cc grt', 'default.png', '$2y$10$LUE7riCWXzXHmE2DtPzqR.D1FogwRrXUU30xH9oyX.IMwi.CpNz2C', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-11 17:04:21', '2022-10-11 17:04:21', NULL);
INSERT INTO `users` VALUES (50, 'ccidr@pt-api.com', 'cc idr', '1674717371_f2f8ae1c33f3a1f6d743.jpeg', '$2y$10$TnjQv86hipFIUYnYZuNfr.rAroPHtLuyh86ZYXd5BY0rc0ypQKke.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-11 17:04:54', '2022-10-11 17:04:54', NULL);
INSERT INTO `users` VALUES (51, 'cckng@pt-api.com', 'cc kng', 'default.png', '$2y$10$mD9McY0pTuyXr53bI5bSge3hLT0CW5XAW5cqCUfBTbFCfqygZB3/.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-11 17:05:27', '2022-10-11 17:05:27', NULL);
INSERT INTO `users` VALUES (52, 'ccsbg@pt-api.com', 'cc sbg', 'default.png', '$2y$10$60Uh/HcSWgrGB5qaB9OETOBHnG8f0x3CT5fIIDsIue2Sx0AB6RT0G', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-11 17:05:49', '2022-10-11 17:05:49', NULL);
INSERT INTO `users` VALUES (53, 'ccbjr@pt-api.com', 'cc bjr', 'default.png', '$2y$10$hw5ig7E86XbaD65yNyqtBelXzXmtqJXe0jmt5ORtx5rSgbKuoTpUm', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-11 17:06:09', '2022-10-11 17:06:09', NULL);
INSERT INTO `users` VALUES (54, 'idapi001@pt-api.com', 'idapi001', 'default.png', '$2y$10$WG/rDZY4zFuqd1mRNpoFN.eQVSKC2BWbEdYjuuSPCAtHWEC9UiocC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-11 17:07:59', '2022-10-21 08:32:42', NULL);
INSERT INTO `users` VALUES (55, 'idapi002@pt-api.com', 'idapi002', 'default.png', '$2y$10$U5AUr4mlMq43FDuqcjh6e.Da2XWZJAq6KXHqAyAutzkKyFOgP1aSW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-11 17:08:19', '2022-10-21 08:32:36', NULL);
INSERT INTO `users` VALUES (56, 'idapi003@pt-api.com', 'idapi003', '1672986159_4dc4c4abf04a78ad8e21.jpg', '$2y$10$Npl4XlYmMBNctGLWqTRMEOAXyaPq22G/8B5lWp0SB3pTXurkfU74u', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-11 17:08:52', '2022-10-21 08:32:28', NULL);
INSERT INTO `users` VALUES (57, 'idapi004@pt-api.com', 'idapi004', 'default.png', '$2y$10$qHgXrfpbFTnxwX3eef7KI.lpjCDCmqGvgmLVHRGVoQeX7O4q6wXNu', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-11 17:09:27', '2022-10-21 08:32:17', NULL);
INSERT INTO `users` VALUES (58, 'idapi005@pt-api.com', 'idapi005', 'default.png', '$2y$10$x9hr7CJJ3RZnN.qWeIIFTuUNwsbYKL.P6FFEAAraJWdXMimIg9kn6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-11 17:09:54', '2022-10-21 08:32:10', NULL);
INSERT INTO `users` VALUES (59, 'idapi006@pt-api.com', 'idapi006', 'default.png', '$2y$10$RmctqC.lV58/NAMNvcW9dO1PmmqqPIrmyFRiNlAqjmSKoKtC9wwmi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-11 17:10:13', '2022-10-21 08:32:02', NULL);
INSERT INTO `users` VALUES (60, 'idapi007@pt-api.com', 'idapi007', 'default.png', '$2y$10$NUQpHKSsmzN71x23WKyLm.imbu0ApyGDzmxDMIWb.KIP8gwHbHbh.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-11 17:10:49', '2022-10-21 08:31:56', NULL);
INSERT INTO `users` VALUES (61, 'idapi008@pt-api.com', 'idapi008', 'default.png', '$2y$10$ua.eEzhZPvIt.tTXQ41vieivYVVvoAkc0b.nz5ct0iUSDeL1gz.ce', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-11 17:11:12', '2022-10-21 08:31:49', NULL);
INSERT INTO `users` VALUES (62, 'idapi009@pt-api.com', 'idapi009', 'default.png', '$2y$10$5In1leJgFxNWTM3bDAmavu75EVgK1/s1oB4tOrxyHeuHFhV9fJaC2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-11 17:11:38', '2022-10-21 08:31:40', NULL);
INSERT INTO `users` VALUES (63, 'idapi010@pt-api.com', 'idapi010', 'default.png', '$2y$10$7hrRdEgClt5NaObz9rmXYusbQdlyuLBiGEU9.3U5CttIxpMnCQZda', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-11 17:12:00', '2022-10-21 08:31:29', NULL);
INSERT INTO `users` VALUES (64, 'kasirjkt@pt-api.com', 'kasirjkt', 'default.png', '$2y$10$LtfKsG4amP4Ze0MzBIY.SO0miU92fqsjQLXDiBj4RkpYSHzKRywy.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-21 08:34:09', '2022-10-21 08:34:09', NULL);
INSERT INTO `users` VALUES (65, 'kasirsbm@pt-api.com', 'kasirsbm', 'default.png', '$2y$10$PMN8d7Y5QQg5DjLu1vmuLuTLCHXTAACoQMl8YUyZ/0eFCA9f.Wj3y', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-21 08:34:56', '2022-10-21 08:34:56', NULL);
INSERT INTO `users` VALUES (66, 'kasirbdg@pt-api.com', 'kasirbdg', 'default.png', '$2y$10$38RxdPoBtCTeo2ux/rbirueXcoSuYjIxugVtxCraoHyKK65ZpXw7.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-21 08:35:34', '2022-10-21 08:35:34', NULL);
INSERT INTO `users` VALUES (67, 'kasircrb@pt-api.com', 'kasircrb', 'default.png', '$2y$10$6Sg3OQXOXfYH0n05IVkmS.2tugjI9iyCQQ2f/T5bo.vo2zk679/2O', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-21 08:36:02', '2022-10-21 08:36:02', NULL);
INSERT INTO `users` VALUES (68, 'kasirtsk@pt-api.com', 'kasirtsk', '1672801734_3f18093b7c25fec14784.jpg', '$2y$10$G/O.eGbhAA7foL.4wndEa.iBa10rLvSgRL.h9vVABAgX9OMRiy.MG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-21 08:36:50', '2022-10-21 08:36:50', NULL);
INSERT INTO `users` VALUES (69, 'kasirgrt@pt-api.com', 'kasirgrt', 'default.png', '$2y$10$JY9vTlnMZrU2P9dRTA4Zj.P4VtiMgfXcRjj6SA.8lVwRdsdadXd3K', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-21 08:37:33', '2022-10-21 08:37:33', NULL);
INSERT INTO `users` VALUES (70, 'kasiridr@pt-api.com', 'kasiridr', 'default.png', '$2y$10$wmKt3sEQ6m3QfykpWaAHmeFTG.VX7HjFzMGJ6QNFYjzpJ4A3xZ2s2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-21 08:37:57', '2022-10-21 08:37:57', NULL);
INSERT INTO `users` VALUES (71, 'kasirkng@pt-api.com', 'kasirkng', 'default.png', '$2y$10$5xjtbafWnLLpVLJI9E77ne2THXxbY5DXbGzDrZ0gNI88J0n44G7jC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-21 08:38:16', '2022-10-21 08:38:16', NULL);
INSERT INTO `users` VALUES (72, 'kasirsbg@pt-api.com', 'kasirsbg', 'default.png', '$2y$10$A4lWpD4KItFYKW6Uudl6.OEyKxVu/WN1EUlxFpXIkww4PnW1uIQoW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-21 08:38:45', '2022-10-21 08:38:45', NULL);
INSERT INTO `users` VALUES (73, 'kasirbjr@pt-api.com', 'kasirbjr', 'default.png', '$2y$10$0/snKdojAvORCPg2zANKme6g6ns7MmQIQG3RqSaCp8guvXElknTiq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-21 08:39:07', '2022-10-21 08:39:07', NULL);
INSERT INTO `users` VALUES (74, 'admjabar@pt-api.com', 'admjabar', '1672811782_f391ea5e802f7abeae93.png', '$2y$10$EkQXdRbAY4J3KuhoBMQt8OvQ53JBA5tLiFq85VMeTKFxW/FKChyTG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-21 08:44:13', '2022-10-21 08:44:13', NULL);
INSERT INTO `users` VALUES (75, 'lita@pt-api.com', 'lita', 'default.png', '$2y$10$nxW92dydexLYFKp60NCNI.taDMY80hGE8yUPQ/cx/9m7mmClTWyRW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-25 08:44:45', '2022-10-25 08:44:45', NULL);
INSERT INTO `users` VALUES (76, 'kaadmin@pt-api.com', 'kaadmin', 'default.png', '$2y$10$UjEmiOrw.fyvUBzZhJIcx.ycFkcaM61wEAvQ4qMOp93HmYOW3P41O', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-02-08 17:18:15', '2023-02-08 17:18:15', NULL);
INSERT INTO `users` VALUES (77, 'spvbdg2@pt-api.com', 'spvbdg2', 'default.png', '$2y$10$3Wzclzrdb0eO4.bssHYZoeOVWnZk8bPc0XiCSx0KvWCxNTh3g.ruS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-02-09 07:56:37', '2023-02-09 07:56:37', NULL);
INSERT INTO `users` VALUES (78, 'adminho@pt-api.com', 'adminho', 'default.png', '$2y$10$TzzdlmpQ2EigGpb0F8iDvuDG94LQwvei8W0D.ia2fdQA1DluuTBQe', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-03-15 10:21:32', '2023-03-15 10:21:32', NULL);
INSERT INTO `users` VALUES (79, 'adminho2@pt-api.com', 'admho2', 'default.png', '$2y$10$E8FL/LXEzarLvAAsekA1TOn8qVv5EGx2w7boGtBOk1JkBFxpk8t5m', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-03-15 15:13:22', '2023-03-15 15:13:22', NULL);
INSERT INTO `users` VALUES (80, 'testing@klaim.com', 'testing', 'default.png', '$2y$10$4uawewMQKIpXP1aHgSbmpe33O3PzHk8JmVMJJVPSkVFjzfukwaRAG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-03-15 15:22:16', '2023-03-15 15:22:16', NULL);
INSERT INTO `users` VALUES (81, 'danipriyatna@pt-api.com', 'dani', 'default.png', '$2y$10$teODVgdjeuTdPVLUu6gHZe9E5P6lqvW.wxPXrxXWde4FpLp03XNH.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-03-15 16:03:51', '2023-03-15 16:03:51', NULL);
INSERT INTO `users` VALUES (82, 'testinguser@klaim.com', 'testinguser', 'default.png', '$2y$10$ojaCrfqLruH4266sxhSGhOp9zNNlSZ/yRrZb7682IaMuNDQ.hafgC', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-03-16 10:48:58', '2023-04-05 15:16:16', NULL);

SET FOREIGN_KEY_CHECKS = 1;
