<?php

include_once('../../Model/Karyawan.php');
include_once('../../Model/Proyek_Karyawan.php');
$k = new Karyawan();
$pk = new Proyek_Karyawan();

$k->kodeKaryawan=$_REQUEST["kodeKaryawan"];
$pk->krKode=$_REQUEST["kodeKaryawan"];

$pk->delete_K();
$k->delete();

header("Location: /index.php?page=listKaryawan");


