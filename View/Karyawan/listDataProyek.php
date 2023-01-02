<?php
    $kodekr = $_REQUEST['kodeKaryawan'];
    $namakr = $_REQUEST['namaKaryawan'];

?>

<div class="card">
    <div class="card-header bg-primary text-white">
        <h4>List Proyek Karyawan</h4>
    </div>
    <div class="card-body">
        <P>Kode Karyawan : <?=$kodekr?></P>
        <p>Nama Karyawan : <?=$namakr?> </p>

        <table class="table table-bordered mt-4">
            <thead class="bg-primary text-white">
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
                    $pk->krKode=$kodekr;
                    $pkList = $pk->get_P();
                    $no = 1;
                    while($listAll = mysqli_fetch_object($pkList)){
                        
                        ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$listAll->py_kode?></td>
                    <td><?=$listAll->py_nama?></td>
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