CREATE DATABASE Minions;
USE Minions;

CREATE TABLE `minions`
(
    `id`      INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name`    VARCHAR(200)       NOT NULL,
    `age`     INT                NOT NULL DEFAULT '0',
    `town_id` INT                NOT NULL DEFAULT '0'
);

CREATE TABLE `towns`
(
    `id`   INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(200)       NOT NULL
);
