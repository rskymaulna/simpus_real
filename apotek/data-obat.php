<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";

$obats = tampil("SELECT * FROM obat");
$i = 1;
?>
            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fa-solid fa-pills"></i>
                        Data Obat
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-custom table-bordered table-hover table-sm table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Obat</th>
                                    <th>Jenis Obat</th>
                                    <th>Satuan</th>
                                    <th>Tarif</th>
                                    <th>Stok</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php foreach($obats as $obat) : ?> 
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $obat['nama_obat'] ?></td>
                                    <td><?= $obat['jenis'] ?></td>
                                    <td><?= $obat['jenis'] ?></td>
                                    <td><?= $obat['tarif'] ?></td>
                                    <td><?= $obat['stok'] ?></td>
                                </tr>
                            <?php $i++; ?>   
                            <?php endforeach; ?>   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                </main>
<?php include "layout/footer.php"; ?>