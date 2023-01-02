<?php

include_once('../../Model/Proyek.php');
include_once('../../Model/Proyek_Karyawan.php');

$p = new Proyek();
$pk = new Proyek_Karyawan();

$p->kodeProyek=$_REQUEST["kodeProyek"];
$pk->pyKode=$_REQUEST["kodeProyek"];

$pk->delete_P();
$p->delete();

header("Location: /index.php?page=listProyek");
