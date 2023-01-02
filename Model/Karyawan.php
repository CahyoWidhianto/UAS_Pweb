<?php

include_once __DIR__.'/../Config/Koneksi.php';

    class Karyawan
    {
        public $kodeKaryawan;
        public $namaKaryawan;
        public $dateOfBirthKaryawan;
        public $jenisKelaminKaryawan;

        #Read Data
        public function getAll(){

            $query= "SELECT * FROM uas_pweb_2021_ganjil.karyawan;";
            $conn = new Koneksi();
            return mysqli_query($conn->koneksi, $query);
        }

        public function getByPrimaryKey($kodeKaryawan){

            $query = "select * from uas_pweb_2021_ganjil.karyawan where kr_kode = '$kodeKaryawan';";
            $conn = new Koneksi();
            return mysqli_query($conn->koneksi, $query);
        }

        #Delete Data
        public function delete(){

            $query = "DELETE FROM uas_pweb_2021_ganjil.karyawan WHERE kr_kode = '$this->kodeKaryawan';";
            $conn = new Koneksi();
            return mysqli_query($conn->koneksi, $query);
        }

        #Update Data
        public function update(){

            $query = "UPDATE uas_pweb_2021_ganjil.karyawan SET "
            ."kr_nama = '$this->namaKaryawan',"
            ."kr_dob = '$this->dateOfBirthKaryawan',"
            ."kr_jk = '$this->jenisKelaminKaryawan' "
            ."WHERE kr_kode = '$this->kodeKaryawan';";
            $conn = new Koneksi();
            return mysqli_query($conn->koneksi, $query);
        }

        #Insert Data
        public function insert(){

            $query = "INSERT INTO uas_pweb_2021_ganjil.karyawan VALUES("
            ."'$this->kodeKaryawan',"
            ."'$this->namaKaryawan',"
            ."'$this->dateOfBirthKaryawan',"
            ."'$this->jenisKelaminKaryawan');";
            $conn = new Koneksi();
            return mysqli_query($conn->koneksi, $query);

        }
    }