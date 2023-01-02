<!DOCTYPE html>
<html>

<head>
    <title>UJIAN PWEB</title>
    <link rel="stylesheet" href="/Assets/css/bootstrap.min.css">
    <script src="/Assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>

<body>
    
    <div class="container-fluid">
        <h1>Ujian PWEB</h1>
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-header bg-primary text-white"><h4>Menu</h4></div>

                    <div class="card-body">
                        <a class="btn btn-outline-primary btn-block" href="/index.php?page=listKaryawan">List Data Karyawan</a>
                        <a class="btn btn-outline-primary btn-block" href="/index.php?page=addKaryawan">Tambah Data Karyawan</a>
                        <a class="btn btn-outline-primary btn-block" href="/index.php?page=listProyek">List Data Proyek</a>
                        <a class="btn btn-outline-primary btn-block" href="/index.php?page=addProyek">Tambah Data Proyek</a>
                        

                    </div>
                    <div class="card-footer"></div>



                </div>
            </div>


            <div class="col-9">
                <?php
                   $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';

                   if($page == 'listKaryawan'){
                       include_once('View/Karyawan/List.php');
                   }else if($page == 'addKaryawan'){
                       include_once('View/Karyawan/formTambah.php');
                   }else if($page == 'deleteKaryawan'){
                       include_once('View/Karyawan/confirmHapus.php');
                   }else if($page == 'editKaryawan'){
                       include_once('View/Karyawan/formEdit.php');
                   }else if($page == 'listDataProyek'){
                        include_once('View/Karyawan/listDataProyek.php');
                   }else if($page== 'listProyek'){
                       include_once('View/Proyek/List.php');
                   }else if($page == "addProyek"){
                       include_once('View/Proyek/formTambah.php');
                   }else if($page == "editProyek"){
                       include_once('View/Proyek/formEdit.php');
                   }else if($page=="assignKaryawan"){
                       include_once('View/Proyek/assignKaryawan.php');
                   }else if($page=="deleteProyek"){
                       include_once('View/Proyek/confirmHapus.php');
                   }else{
                    include('View/leandingPage.php');
                   }
                ?>
            </div>
        </div>
    </div>

</body>

</html>