<?php
include ('../../Model/Proyek_Karyawan.php');

$kp = new Proyek_Karyawan();
$kp->krKode = $_REQUEST["assignedKode"];
$kp->pyKode = $_REQUEST["kodeProyek"];
$kp->kpBonus = $_REQUEST["assignedBonus"];
$namapry = $_REQUEST["namaProyek"];


$kp->insert();

header("Location: /index.php?page=assignKaryawan&namaProyek=".$namapry."&kodeProyek=".$kp->pyKode);

