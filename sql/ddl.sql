CREATE DATABASE DS1_DRUGSTORE;

CREATE TABLE `DRUGSTORE` (
    `ID` SERIAL,
    `name` VARCHAR(200) NOT NULL,
    `producer` VARCHAR(100) NOT NULL,
    `controled` CHAR(1),
    `quantify` INT DEFAULT 0,
    `price` DECIMAL(10, 2),

    PRIMARY KEY (`ID`)
);