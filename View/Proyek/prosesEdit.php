<?php
include('../../Model/Proyek.php');
$proyek = new Proyek();

$proyek->kodeProyek = $_REQUEST['kodeProyek'];
$proyek->namaProyek = $_REQUEST['namaProyek'];
$proyek->ddlProyek = $_REQUEST['ddlProyek'];
$proyek->nominalProyek= $_REQUEST['nominalProyek'];




$proyek->update();

header('Location: /index.php?page=listProyek');