CREATE DATABASE fakultas;

CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR(4) NOT NULL,
    nama VARCHAR(50) NOT NULL
);

CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR(8) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin enum('laki-laki', 'perempuan') NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan(id)
);

-- masukan data jurusan
insert into jurusan (kode, nama) values ('ADM1', 'Administrasi Publik');
insert into jurusan (kode, nama) values ('ADM2', 'Administrasi Perkantoran');

-- masukan data mahasiswa
insert into mahasiswa values(1, '2', '20194413', 'Zico Andrian', 'laki-laki', 'Bandung', '2000-03-27', 'Jl. Sudirman 12');
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) values (1, "20220001", "Fulan", "laki-laki", "Malang", "2000-12-25", "Jl. Soekarno Hatta 9");

-- update
update mahasiswa set alamat = "Jl. Melati 112" where id = 2;

-- delete
delete from mahasiswa where id = 2;