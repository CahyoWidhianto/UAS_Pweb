
<div class="card">
    <div class="card-header bg-primary text-white">
        <h4>Data Proyek</h4>
    </div>
    <class class="card-body">
        <table class="table table-bordered table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Tanggal Deadline</th>
                    <th>Nominal</th>
                    <th>Action</th>
                </tr>

            </thead>

            <tbody>
                    <?php
                        include_once('Model/Proyek.php');
                        $pry = new Proyek();
                        $dataProyek = $pry->getAll();
                        $no = 1;
                        while($list = mysqli_fetch_object($dataProyek)){?>    
                        <tr>
                            <td><?=$no++?></td>
                            <td><?=$list->py_kode?></td>
                            <td><?=$list->py_nama?></td>
                            <td><?=$list->py_deadline?></td>
                            <td><?="Rp " . number_format($list->py_nominal,0,"",".");?></td>
                            <td>
                                <a href="/index.php?page=deleteProyek&kodeProyek=<?=$list->py_kode?>" class="btn  btn-danger"><i class="fas fa-trash"></i></a>
                                <a href="/index.php?page=editProyek&kodeProyek=<?=$list->py_kode?>" class="btn  btn-warning"><i class="fas fa-user-edit"></i></a>
                                <a href="/index.php?page=assignKaryawan&kodeProyek=<?=$list->py_kode?>&namaProyek=<?=$list->py_nama?>"  class="btn  btn-primary"><i class="fas fa-list"></i> Assign Karyawan</a>

                            </td>
                        </tr>

                    <?php
                        }
                    ?>
                   
            </tbody>



        </table>
    </class>
</div>