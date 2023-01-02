
<form action="/View/Karyawan/prosesTambah.php" method="POST">
    <div class="card">

        <div class="card-header bg-primary text-white"><h4>Tambah Karyawan</h4></div>

        <div class="card-body">
            <div class="form-group">
                <label for="">Kode Karyawan</label>
                <input type="text" class="form-control" required name="kodeKaryawan">
            </div>


            <div class="form-group">
                <label for="">Nama Karyawan</label>
                <input type="text" class="form-control" required name="namaKaryawan">
            </div>


            <div class="form-group">
                <label for="">Tanggal Lahir Karyawan</label>
                <input type="date" class="form-control" required name="dateOfBirthKaryawan">
            </div>

            <div class="form-group">
                <label for="">Jenis Kelamin Karyawan</label>
                <select class="form-control" name="jenisKelaminKaryawan">
                    <option value="" selected disabled>Pilih Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
        
        </div>


        <div class="card-footer">
            <button class="btn btn-success" type="submit">
                <i class="fas fa-save"></i>
                 SIMPAN
            </button>
        </div>

    
    
    
    </div>
</form>