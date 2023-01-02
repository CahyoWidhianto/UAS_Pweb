<form action="/View/Proyek/prosesHapus.php" method="POST">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4>Konfirmasi Hapus Proyek</h4>
        </div>
        <div class="card-body">
            <p class="h3  font-weight-bold">Apakah anda yakin menghapus data berikut?</p>
            <p class="h6 ">Semua data detail karyawan yang mengerjakan proyek ini juga akan terhapus.</p>
            <div class="row">
                <div class="col-5">

                    <div class="card-body">

                        <?php
            include('Model/Proyek.php');
            $proyek = new Proyek();
            $kodeProyek = $_REQUEST['kodeProyek'];

            $dataProyek = $proyek->getByPrimaryKey($kodeProyek);
            $data = [];
            while ($p = mysqli_fetch_object($dataProyek)) {
                $data = $p;
            }
            ?>
                        <div class="form-group">
                            <label for="">Kode Proyek</label>
                            <input type="text" class="form-control" name="kodeProyek" value=<?= $data->py_kode ?>
                                readonly>

                        </div>

                        <div class="form-group">
                            <label for="">Nama Proyek</label>
                            <input type="text" class="form-control" readonly value="<?= $data->py_nama ?>"></input>
                        </div>

                        <div class="form-group">
                            <label for="">Tanggal Deadline</label>
                            <input type="date" class="form-control" readonly value=<?= $data->py_deadLine ?>></input>
                        </div>


                        <div class="form-group">
                            <label for="">Nominal Proyek</label>
                            <input type="number" class="form-control" readonly value=<?= $data->py_nominal?>></input>
                        </div>

                    </div>


                </div>

                <div class="col-7">
                    <div class="card-header bg-primary text-white font-weight-bold">
                        Data karyawan yang pernah mengerjakan proyek ini
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="bg-primary text-white" ">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Karyawan</th>
                                    <th>Nama Karyawan</th>
                                    <th>Bonus</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tbody>
                                    <?php
                    include_once('Model/Proyek_Karyawan.php');
                    $pk = new Proyek_Karyawan();
                    $kodepry = $_REQUEST["kodeProyek"];
                    $pk->pyKode=$kodepry;
                    
                    $pkList = $pk->get_K();
                    $no = 1;
                    while($listAll = mysqli_fetch_object($pkList)){
                        
                        ?>
                                    <tr>
                                        <td><?=$no++?></td>
                                        <td><?=$listAll->kr_kode?></td>
                                        <td><?=$listAll->kr_nama?></td>
                                        <td><?="Rp " . number_format($listAll->kp_bonus,0,"",".");?></td>

                                    </tr>


                                    <?php  
                    }
                ?>
                                </tbody>
                                </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
                HAPUS
            </button>
        </div>
    </div>
</form>