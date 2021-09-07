CREATE DATABASE klinik_del;

CREATE TABLE pasien(
id_pasien INT PRIMARY KEY,
nama_pasien VARCHAR(45)NOT NULL,
jenis_kelamin CHARACTER (1) NOT NULL,
umur INT NOT NULL,
diagnosa VARCHAR (20) NOT NULL,
keluhan VARCHAR (150)NOT NULL,
tgl_kunjung DATE NOT NULL,
dokter_id INT NOT NULL,
perawat_id INT NOT NULL,
keterangan VARCHAR (150),
FOREIGN KEY (dokter_id) REFERENCES dokter(id_dokter),
FOREIGN KEY (perawat_id) REFERENCES perawat(id_perawat)
);


CREATE TABLE dokter(
id_dokter INT PRIMARY KEY,
nama_dokter VARCHAR (45) NOT NULL,
email VARCHAR (50) NOT NULL,
username VARCHAR (30) NOT NULL,
PASSWORD VARCHAR (10) NOT NULL
)


CREATE TABLE perawat(
id_perawat INT PRIMARY KEY,
nama_perawat VARCHAR (45) NOT NULL,
email VARCHAR (50) NOT NULL,
username VARCHAR (30) NOT NULL,
PASSWORD VARCHAR (10) NOT NULL
)

CREATE TABLE obat(
id_obat INT PRIMARY KEY,
nama_obat VARCHAR (45) NOT NULL,
stock_awal INT NOT NULL,
pembelian_obat VARCHAR (50) NOT NULL,
idDokter INT NOT NULL,
idPerawat INT NOT NULL,
FOREIGN KEY (idDokter) REFERENCES dokter(id_dokter),
FOREIGN KEY (idPerawat) REFERENCES perawat(id_perawat)
);

CREATE TABLE terapi(
Idpasien INT NOT NULL PRIMARY KEY,
IdObat INT NOT NULL,
kuantitas INT NOT NULL,
FOREIGN KEY (Idpasien) REFERENCES pasien(id_pasien),
FOREIGN KEY (IdObat) REFERENCES obat(id_obat)
);