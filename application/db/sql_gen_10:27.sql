-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema hearthstone
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `hearthstone` ;

-- -----------------------------------------------------
-- Schema hearthstone
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `hearthstone` DEFAULT CHARACTER SET latin1 ;
USE `hearthstone` ;

-- -----------------------------------------------------
-- Table `hearthstone`.`admins`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hearthstone`.`admins` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `email` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `password` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `created_at` DATETIME NULL DEFAULT NULL COMMENT '',
  `updated_at` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `hearthstone`.`customers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hearthstone`.`customers` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `first_name` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `last_name` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `address` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `address2` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `city` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `state` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `zipcode` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `created_at` DATETIME NULL DEFAULT NULL COMMENT '',
  `updated_at` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `hearthstone`.`billings`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hearthstone`.`billings` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `customer_id` INT(11) NOT NULL COMMENT '',
  `first_name` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `last_name` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `address` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `address2` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `city` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `state` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `zipcode` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `card` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `security_code` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `expiration` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `created_at` DATETIME NULL DEFAULT NULL COMMENT '',
  `updated_at` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`, `customer_id`)  COMMENT '',
  INDEX `fk_billings_customers1_idx` (`customer_id` ASC)  COMMENT '',
  CONSTRAINT `fk_billings_customers1`
    FOREIGN KEY (`customer_id`)
    REFERENCES `hearthstone`.`customers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `hearthstone`.`orders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hearthstone`.`orders` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `quantity` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `total` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `created_at` DATETIME NULL DEFAULT NULL COMMENT '',
  `updated_at` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `hearthstone`.`customer_orders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hearthstone`.`customer_orders` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `customer_id` INT(11) NOT NULL COMMENT '',
  `order_id` INT(11) NOT NULL COMMENT '',
  `created_at` DATETIME NULL DEFAULT NULL COMMENT '',
  `updated_at` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_customers_has_orders_orders1_idx` (`order_id` ASC)  COMMENT '',
  INDEX `fk_customers_has_orders_customers_idx` (`customer_id` ASC)  COMMENT '',
  CONSTRAINT `fk_customers_has_orders_customers`
    FOREIGN KEY (`customer_id`)
    REFERENCES `hearthstone`.`customers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_customers_has_orders_orders1`
    FOREIGN KEY (`order_id`)
    REFERENCES `hearthstone`.`orders` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `hearthstone`.`cards`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hearthstone`.`cards` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(45) NULL COMMENT '',
  `api_id` VARCHAR(45) NULL COMMENT '',
  `set` VARCHAR(45) NULL COMMENT '',
  `type` VARCHAR(45) NULL COMMENT '',
  `faction` VARCHAR(45) NULL COMMENT '',
  `text` VARCHAR(45) NULL COMMENT '',
  `player_class` VARCHAR(45) NULL COMMENT '',
  `img` VARCHAR(255) NULL COMMENT '',
  `imgGold` VARCHAR(255) NULL COMMENT '',
  `artist` VARCHAR(45) NULL COMMENT '',
  `locale` VARCHAR(45) NULL COMMENT '',
  `collectible` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hearthstone`.`products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hearthstone`.`products` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `cards_id` INT NOT NULL COMMENT '',
  `name` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `inventory_count` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `quantity_sold` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `created_at` DATETIME NULL DEFAULT NULL COMMENT '',
  `updated_at` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_products_cards1_idx` (`cards_id` ASC)  COMMENT '',
  CONSTRAINT `fk_products_cards1`
    FOREIGN KEY (`cards_id`)
    REFERENCES `hearthstone`.`cards` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `hearthstone`.`product_orders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hearthstone`.`product_orders` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `product_id` INT(11) NOT NULL COMMENT '',
  `order_id` INT(11) NOT NULL COMMENT '',
  `created_at` DATETIME NULL DEFAULT NULL COMMENT '',
  `updated_at` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_products_has_orders_orders1_idx` (`order_id` ASC)  COMMENT '',
  INDEX `fk_products_has_orders_products1_idx` (`product_id` ASC)  COMMENT '',
  CONSTRAINT `fk_products_has_orders_products1`
    FOREIGN KEY (`product_id`)
    REFERENCES `hearthstone`.`products` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_has_orders_orders1`
    FOREIGN KEY (`order_id`)
    REFERENCES `hearthstone`.`orders` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
