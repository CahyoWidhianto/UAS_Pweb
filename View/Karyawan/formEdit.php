<form action="/View/Karyawan/prosesEdit.php" method="POST">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4>Edit Karyawan</h4>
        </div>

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
                <input type="text" class="form-control" required name="kodeKaryawan" value=<?= $data->kr_kode ?> readonly</input>
            </div>

            <div class="form-group">
                <label for="">Nama Karyawan</label>
                <input type="text" class="form-control" required name="namaKaryawan" value="<?= $data->kr_nama ?>"</input>
            </div>

            <div class="form-group">
                <label for="">Tanggal Lahir Karyawan</label>
                <input type="date" class="form-control" required name="dateOfBirthKaryawan" value=<?= $data->kr_dob ?></input>
            </div>

            <div class="form-group">
                <label for="">Jenis Kelamin Karyawan</label>
                <?php
                switch ($data->kr_jk) {
                    case "L": ?>
                        <select name="jenisKelaminKaryawan" class="form-control">
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    <?php
                        break;
                    case "P": ?>
                        <select name="jenisKelaminKaryawan" class="form-control">
                            <option value="P">Perempuan</option>
                            <option value="L">Laki-laki</option>
                        </select>
                <?php
                        break;
                }
                ?>
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