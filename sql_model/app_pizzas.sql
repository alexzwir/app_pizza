SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`app_clientes`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`app_clientes` (
  `id_cliente` INT NOT NULL AUTO_INCREMENT ,
  `cpf` VARCHAR(45) NOT NULL ,
  `Nome` VARCHAR(45) NULL ,
  `endereco` VARCHAR(45) NULL ,
  `numero` INT NULL ,
  `complemento` VARCHAR(45) NULL ,
  `cep` VARCHAR(45) NULL ,
  `cidade` VARCHAR(45) NULL ,
  `fone_res` VARCHAR(45) NULL ,
  `fone_cel` VARCHAR(45) NULL ,
  `email` VARCHAR(45) NULL ,
  `status` INT NULL ,
  `data_nascimento` VARCHAR(45) NULL ,
  `obs` VARCHAR(255) NULL ,
  PRIMARY KEY (`id_cliente`) ,
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC) );


-- -----------------------------------------------------
-- Table `mydb`.`app_admin`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`app_admin` (
  `id_adm` INT NOT NULL AUTO_INCREMENT ,
  `adm_nome` VARCHAR(45) NULL ,
  `adm_email` VARCHAR(45) NULL ,
  `adm_level` INT NULL ,
  `adm_status` INT NULL ,
  PRIMARY KEY (`id_adm`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`app_bebidas`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`app_bebidas` (
  `id_bebidas` INT NOT NULL AUTO_INCREMENT ,
  `bebida_marca` VARCHAR(100) NULL ,
  `bebida_desc` VARCHAR(255) NULL ,
  `bebida_preco` DECIMAL(10,2) NULL ,
  `bebida_status` INT NULL ,
  PRIMARY KEY (`id_bebidas`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`app_pizza`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`app_pizza` (
  `id_pizza` INT NOT NULL AUTO_INCREMENT ,
  `pizza_sabor` VARCHAR(45) NULL ,
  `pizza_desc` VARCHAR(45) NULL ,
  `pizza_preco` DECIMAL(10,2) NULL ,
  `pizza_status` INT NULL ,
  PRIMARY KEY (`id_pizza`) )
ENGINE = InnoDB;

USE `mydb` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
