ALTER TABLE terapi
DROP FOREIGN KEY FK_obat;

ALTER TABLE terapi
DROP id_obat;

ALTER TABLE terapi ADD id_terapi INT AUTO_INCREMENT PRIMARY KEY;

CREATE TABLE pengobatan(
	id_terapi INT,
	id_obat INT
);

ALTER TABLE pengobatan
	ADD CONSTRAINT `fk_terapi` FOREIGN KEY (`id_terapi`) REFERENCES `terapi` (`id_terapi`);
	
ALTER TABLE pengobatan
	ADD CONSTRAINT `fk_obat` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`);

ALTER TABLE pasien DROP diagnosa;

ALTER TABLE pasien DROP keluhan;

ALTER TABLE pasien DROP tanggal_kunjung;

ALTER TABLE terapi
	ADD tanggal_kunjung DATE;
	
ALTER TABLE terapi
	ADD diagnosa VARCHAR(100);
	
ALTER TABLE terapi
	ADD keluhan VARCHAR(100);