<?php

include_once __DIR__ . '/../Config/Koneksi.php';

class Proyek
{
    public $kodeProyek;
    public $namaProyek;
    public $ddlProyek;
    public $nominalProyek;


    public function getAll()
    {

        $query = "select * from uas_pweb_2021_ganjil.proyek;";
        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);
    }

    public function getByPrimaryKey($kodeProyek)
    {

        $query = "select * from uas_pweb_2021_ganjil.proyek where py_kode = '$kodeProyek';";
        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);
    }


    public function insert()
    {

        $query = "INSERT INTO uas_pweb_2021_ganjil.proyek VALUES("
            . "'$this->kodeProyek',"
            . "'$this->namaProyek',"
            . "'$this->ddlProyek',"
            . "'$this->nominalProyek');";
        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);
    }


    #Delete Data
    public function delete(){

        $query = "DELETE FROM uas_pweb_2021_ganjil.proyek WHERE py_kode = '$this->kodeProyek';";
        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);
    }


    #Update Data
    public function update()
    {

        $query = "UPDATE uas_pweb_2021_ganjil.proyek SET "
            . "py_nama = '$this->namaProyek',"
            . "py_deadline = '$this->ddlProyek',"
            . "py_nominal = '$this->nominalProyek' "
            . "WHERE py_kode = '$this->kodeProyek';";
        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);
    }
}
