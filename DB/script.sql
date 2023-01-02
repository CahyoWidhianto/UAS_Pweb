create database uas_pweb_2021_ganjil;
use uas_pweb_2021_ganjil;

create table karyawan
(
    kr_kode varchar(10) NOT NULL primary key,
    kr_nama varchar(100) NOT NULL,
    kr_dob date NOT NULL,
    kr_jk enum ('L', 'P') NOT NULL default 'L'
);

create table proyek
(
    py_kode varchar(10) not null primary key,
    py_nama varchar(100) not null,
    py_deadline date not null,
    py_nominal int not null default 1000000
);

create table karyawan_proyek
(
    kp_id int not null primary key auto_increment,
    kr_kode varchar(10) not null,
    py_kode varchar(10) not null,
    kp_bonus int,
    foreign key (kr_kode) REFERENCES karyawan(kr_kode),
    foreign key (py_kode) REFERENCES proyek(py_kode)
);