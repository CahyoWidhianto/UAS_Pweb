<form action="/View/Proyek/prosesEdit.php" method="POST">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4>Edit Proyek</h4>
        </div>

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
                <input type="text" class="form-control" required name="kodeProyek" value=<?=$data->py_kode?> readonly></input>
            </div>

            <div class="form-group">
                <label for="">Nama Proyek</label>
                
                <input type="text" class="form-control" required name="namaProyek" value="<?= $data->py_nama?>"></input>
            </div>

            <div class="form-group">
                <label for="">Tanggal Deadline</label>
                <input type="date" class="form-control" required name="ddlProyek" value=<?=$data->py_deadLine?>></input>
            </div>

            <div class="form-group">
                <label for="">Nominal Proyek</label>
                <input type="number" class="form-control" required name="nominalProyek" value=<?= $data->py_nominal ?>></input>
            </div>

            
        </div>

        <div class="card-footer">
            <button class="btn btn-success" type="submit">
                <i class="fas fa-pen-alt"></i>
                UPDATE
            </button>
        </div>

    </div>

</form>