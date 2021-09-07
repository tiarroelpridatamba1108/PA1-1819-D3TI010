-- MySQL Script generated by MySQL Workbench
-- Wed Apr 24 09:03:40 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Klinik
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Klinik
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Klinik` DEFAULT CHARACTER SET utf8 ;
USE `Klinik` ;

-- -----------------------------------------------------
-- Table `Klinik`.`Dokter`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Klinik`.`Dokter` (
  `idDokter` INT NOT NULL,
  `Nama_dokter` VARCHAR(250) NOT NULL,
  PRIMARY KEY (`idDokter`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Klinik`.`pasien`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Klinik`.`pasien` (
  `idpasien` INT NOT NULL,
  `tanggal_waktu_kunjung` DATETIME NOT NULL,
  `umur` INT NOT NULL,
  `Jenis_Kelamin` VARCHAR(2) NOT NULL,
  `Keluhan` CHAR(100) NOT NULL,
  `Diagnosa` CHAR(100) NOT NULL,
  `Dokter_idDokter` INT NOT NULL,
  PRIMARY KEY (`idpasien`, `Dokter_idDokter`),
  INDEX `fk_pasien_Dokter1_idx` (`Dokter_idDokter` ASC) VISIBLE,
  CONSTRAINT `fk_pasien_Dokter1`
    FOREIGN KEY (`Dokter_idDokter`)
    REFERENCES `Klinik`.`Dokter` (`idDokter`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Klinik`.`Obat`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Klinik`.`Obat` (
  `idObat` INT NOT NULL,
  `Nama_Obat` CHAR(100) NOT NULL,
  `Stok_awal` INT NOT NULL,
  `Satuan_obat` CHAR(15) NOT NULL,
  `Pembelian_obat` INT NOT NULL,
  PRIMARY KEY (`idObat`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Klinik`.`Terapi`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Klinik`.`Terapi` (
  `Obat_idObat` INT NOT NULL,
  `pasien_idpasien` INT NOT NULL,
  `Jumlah_obat` INT NOT NULL,
  PRIMARY KEY (`Obat_idObat`, `pasien_idpasien`),
  INDEX `fk_Obat_has_pasien_pasien1_idx` (`pasien_idpasien` ASC) VISIBLE,
  INDEX `fk_Obat_has_pasien_Obat_idx` (`Obat_idObat` ASC) VISIBLE,
  CONSTRAINT `fk_Obat_has_pasien_Obat`
    FOREIGN KEY (`Obat_idObat`)
    REFERENCES `Klinik`.`Obat` (`idObat`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Obat_has_pasien_pasien1`
    FOREIGN KEY (`pasien_idpasien`)
    REFERENCES `Klinik`.`pasien` (`idpasien`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
