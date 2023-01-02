<div class="card">
    <div class="card-header bg-primary text-white">
        <h4>Data Karyawan</h4>
    </div>
    <class class="card-body">
        <table class="table table-bordered table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Action</th>
                </tr>

            </thead>

            <tbody>
                    <?php
                        include_once('Model/Karyawan.php');
                        $kry = new Karyawan();
                        $dataKaryawan = $kry->getAll();
                        
                        $no = 1;
                        while($list = mysqli_fetch_object($dataKaryawan)){?>    
                        <tr>
                            <td><?=$no++?></td>
                            <td><?=$list->kr_kode?></td>
                            <td><?=$list->kr_nama?></td>
                            <td><?=$list->kr_dob?></td>
                            <td><?=$list->kr_jk?></td>
                            <td>
                                <a href="/index.php?page=deleteKaryawan&kodeKaryawan=<?=$list->kr_kode?>" class="btn  btn-danger"><i class="fas fa-trash"></i></a>
                                <a href="/index.php?page=editKaryawan&kodeKaryawan=<?=$list->kr_kode?>" class="btn  btn-warning"><i class="fas fa-user-edit"></i></a>
                                <a href="/index.php?page=listDataProyek&kodeKaryawan=<?=$list->kr_kode?>&namaKaryawan=<?=$list->kr_nama?>" class="btn  btn-primary"><i class="fas fa-list"></i> Lihat Proyek</a>

                            </td>
                        </tr>

                    <?php
                        }
                    ?>
                   
            </tbody>



        </table>
    </class>
</div>