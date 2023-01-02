<?php

include_once __DIR__.'/../Config/Koneksi.php';

class Proyek_Karyawan{

    public $kpID = 0;
    public $krKode;
    public $pyKode;
    public $kpBonus;

    #Insert Data
    public function insert(){

        $query = "INSERT INTO uas_pweb_2021_ganjil.karyawan_proyek VALUES("
            . "'$this->kpID',"
            . "'$this->krKode',"
            . "'$this->pyKode',"
            . "'$this->kpBonus');";
        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);
    }

    public function get_K(){

        $query = "select k.kr_kode, k.kr_nama, kp.kp_bonus from uas_pweb_2021_ganjil.karyawan k "
                ."join uas_pweb_2021_ganjil.karyawan_proyek kp on k.kr_kode = kp.kr_kode "
                ."join uas_pweb_2021_ganjil.proyek p on p.py_kode = kp.py_kode where p.py_kode = '$this->pyKode';";
        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);
    }

    public function delete_K(){

        $query = "delete from uas_pweb_2021_ganjil.karyawan_proyek where kr_kode='$this->krKode';";
        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);

    }

    public function get_P(){

        $query = "select p.py_kode, p.py_nama, kp.kp_bonus from uas_pweb_2021_ganjil.proyek p "
                ."join uas_pweb_2021_ganjil.karyawan_proyek kp on p.py_kode = kp.py_kode "
                ."join uas_pweb_2021_ganjil.karyawan k on k.kr_kode = kp.kr_kode where k.kr_kode = '$this->krKode';";
        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);

    }

    public function delete_P(){

        $query = "delete from uas_pweb_2021_ganjil.karyawan_proyek where py_kode='$this->pyKode';";
        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);
    }

}