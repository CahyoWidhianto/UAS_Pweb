<?php
    $kodepry = $_REQUEST['kodeProyek'];
    $namapry = $_REQUEST['namaProyek'];

?>

<div class="card">
    <div class="card-header bg-primary text-white">
        <h4>Assign Data Karyawan</h4>
    </div>
    <div class="card-body">
        <P>Kode Proyek : <?=$kodepry?></P>
        <p>Nama Proyek : <?=$namapry?> </p>


        <form class="form-inline" action="/View/Proyek/prosesAssignKaryawan.php" method="POST">
            <div class="form-group ">
                <label for=""></label>
                <select class="form-control" name="assignedKode" id="">
                    <option selected value="" disabled>Pilih Karyawan</option>
                    <?php
                    include('Model/Karyawan.php');
                    $k = new Karyawan();
                    $krylist = $k->getAll();
                    
                    while ($kry = mysqli_fetch_object($krylist)) {
                        
                    ?>
                    <option value=<?= $kry->kr_kode?>>
                        <?= $kry->kr_kode ?> | <?= $kry->kr_nama ?>
                    </option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="form-group mx-sm-3 ">
                <input type="number" class="form-control" placeholder="Bonus" name="assignedBonus">

            </div>

            <div class="form-group">
                <input type="hidden" name="kodeProyek" value=<?=$kodepry?>>
                <input type="hidden" value="<?=$namapry?>" name="namaProyek">

            </div>


            <button class="btn btn-primary" type="submit">Assign</button>


        </form>

        <table class="table table-bordered mt-4">
            <thead class="bg-primary text-white">
                <tr>
                    <th>No</th>
                    <th>Kode Karyawan</th>
                    <th>Nama Karyawan</th>
                    <th>Bonus</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    include_once('Model/Proyek_Karyawan.php');
                    $pk = new Proyek_Karyawan();
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
        </table>

    </div>

    <div class="card-footer">

    </div>
</div>