<form action="/View/Proyek/prosesTambah.php" method="POST">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4>Tambah Proyek</h4>
        </div>

        <div class="class-body">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Kode Proyek</label>
                    <input type="text" class="form-control" required name="kodeProyek">
                </div>


                <div class="form-group">
                    <label for="">Nama Proyek</label>
                    <input type="text" class="form-control" required name="namaProyek">
                </div>


                <div class="form-group">
                    <label for="">Tanggal Deadline</label>
                    <input type="date" class="form-control" required name="ddlProyek">
                </div>


                <div class="form-group">
                    <label for="">Nominal Proyek</label>
                    <input type="number" class="form-control" required name="nominalProyek">
                </div>



            </div>


        </div>
        <div class="card-footer">
            <button class='btn btn-success' type='submit'>
                <i class="fas fa-save"></i>
                SIMPAN
            </button>
        </div>
    </div>
</form>