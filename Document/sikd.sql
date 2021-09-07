CREATE DATABASE `sikd`;

USE `sikd`;

CREATE TABLE `user`(
	`id_user` INT AUTO_INCREMENT,
	`username` VARCHAR(30),
	`password` VARCHAR(30),
	`nama_user` VARCHAR(30),
	`email` VARCHAR(30),
	`role` ENUM('PERAWAT', 'DOKTER'),
	PRIMARY KEY(`id_user`)
);

CREATE TABLE `pasien`(
	`id_pasien` INT AUTO_INCREMENT,
	`nama_pasien` VARCHAR(30),
	`jenis_kelamin` ENUM('L','P'),
	`umur` INT,
	`tanggal_kunjung` DATE,
	`diagnosa` VARCHAR(100),
	`keluhan` VARCHAR(100),
	`keterangan` VARCHAR(100),
	PRIMARY KEY (`id_pasien`)
);

CREATE TABLE `obat`(
	`id_obat` INT AUTO_INCREMENT,
	`nama_obat` VARCHAR(30),
	`stok_awal` INT,
	`pembelian_obat` INT,
	PRIMARY KEY (`id_obat`)
);

CREATE TABLE `terapi`(
	`id_pasien` INT,
	`id_obat` INT,
	`kuantitas` INT
);
ALTER TABLE `sikd`.`terapi` ADD CONSTRAINT `FK_obat` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`);
ALTER TABLE `sikd`.`terapi` ADD CONSTRAINT `FK_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);