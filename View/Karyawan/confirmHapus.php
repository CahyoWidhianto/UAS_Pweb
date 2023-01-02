<form action="/View/Karyawan/prosesHapus.php" method="POST">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4>Konfirmasi Hapus Karyawan</h4>
        </div>
        <div class="card-body">
            <p class="h3  font-weight-bold">Apakah anda yakin menghapus data berikut?</p>
            <p class="h6 ">Semua data proyek yang pernah dikerjakan oleh karyawan ini juga akan terhapus.</p>
            <div class="row">
                <div class="col-5">

                    <div class="card-body">

                        <?php
            include('Model/Karyawan.php');
            $karyawan = new Karyawan();
            $kodeKaryawan = $_REQUEST['kodeKaryawan'];

            $dataKaryawan = $karyawan->getByPrimaryKey($kodeKaryawan);
            $data = [];
            while ($k = mysqli_fetch_object($dataKaryawan)) {
                $data = $k;
            }
            ?>
                        <div class="form-group">
                            <label for="">Kode Karyawan</label>
                            <input type="text" class="form-control" name="kodeKaryawan" value=<?= $data->kr_kode ?> readonly>

                        </div>

                        <div class="form-group">
                            <label for="">Nama Karyawan</label>
                            <input type="text" class="form-control" readonly value="<?= $data->kr_nama ?>"></input>
                        </div>

                        <div class="form-group">
                            <label for="">Tanggal Lahir Karyawan</label>
                            <input type="date" class="form-control" readonly value=<?= $data->kr_dob ?>></input>
                        </div>

                        <div class="form-group">
                            <label for="">Jenis Kelamin Karyawan</label>
                            <?php
                switch ($data->kr_jk) {
                    case "L": ?>
                            <select class="form-control" disabled="true">
                                <option value="L">Laki-laki</option>
                            </select>
                            <?php
                        break;
                    case "P": ?>
                            <select disabled="true" class="form-control">
                                <option value="P">Perempuan</option>
                            </select>
                            <?php
                        break;
                }
                ?>
                        </div>
                    </div>


                </div>

                <div class="col-7">
                    <div class="card-header bg-primary text-white font-weight-bold">
                        Data proyek yang pernah dikerjakan selama ini
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="bg-primary text-white" ">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Proyek</th>
                                    <th>Nama Proyek</th>
                                    <th>Bonus</th>
                                </tr>
                                </thead>

                                <tbody>
                                    <?php
                    include_once('Model/Proyek_Karyawan.php');
                    $pk = new Proyek_Karyawan();
                    $pk->krKode = $_REQUEST["kodeKaryawan"];
                    $pkList = $pk->get_P();
                    $no = 1;
                  
                    while($list = mysqli_fetch_object($pkList)){?>

                                    <tr>
                                        <td><?=$no++?></td>
                                        <td><?=$list->py_kode?></td>
                                        <td><?=$list->py_nama?></td>
                                        <td><?="Rp " . number_format($list->kp_bonus,0,"",".");?></td>

                                    </tr>

                                    <?php
                    }
                        ?>

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