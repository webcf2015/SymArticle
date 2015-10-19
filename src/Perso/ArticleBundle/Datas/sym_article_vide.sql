-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema sym_article
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sym_article
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sym_article` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `sym_article` ;

-- -----------------------------------------------------
-- Table `sym_article`.`article`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sym_article`.`article` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `letitre` VARCHAR(120) NULL,
  `letexte` TEXT NULL,
  `ladate` DATETIME NULL DEFAULT NOW(),
  `lauteur` VARCHAR(80) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
