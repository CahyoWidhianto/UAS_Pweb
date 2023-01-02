<?php
include ('../../Model/Karyawan.php');

$karyawan = new Karyawan();
$karyawan->kodeKaryawan = $_REQUEST['kodeKaryawan'];
$karyawan->namaKaryawan = $_REQUEST['namaKaryawan'];
$karyawan->dateOfBirthKaryawan = $_REQUEST['dateOfBirthKaryawan'];
$karyawan->jenisKelaminKaryawan = $_REQUEST['jenisKelaminKaryawan'];


$karyawan->insert();

header('Location: /index.php?page=listKaryawan');
