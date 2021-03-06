DROP DATABASE IF EXISTS solutia;
CREATE DATABASE solutia;
USE solutia;

CREATE TABLE `media` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(50) NULL DEFAULT NULL,
	`author` VARCHAR(50) NULL DEFAULT NULL,
    `type` VARCHAR(50) NULL DEFAULT NULL,
    `description` VARCHAR(255) NULL DEFAULT NULL,
	`created_at` DATETIME NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci
;
