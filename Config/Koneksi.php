<?php

class Koneksi
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "uas_pweb_2021_ganjil";
    public $koneksi;

    public function __construct(){
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }
}