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
                    <button type="button" onclick="window.location.href='tambah-obat.php'" class="btn btn-success btn-sm" onclick="window.location.href='daftar.php'">+ Tambah Obat</button>
                        <table id="example" class="table table-custom table-bordered table-hover table-sm table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Obat</th>
                                    <th>Jenis Obat</th>
                                    <th>Tarif</th>
                                    <th>Stok</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php foreach($obats as $obat) : ?> 
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $obat['nama_obat'] ?></td>
                                    <td><?= $obat['jenis'] ?></td>
                                    <td><?= $obat['tarif'] ?></td>
                                    <td><?= $obat['stok'] ?></td>
                                    <td>
                                        <div class="aksi">
                                            <a href="edit-obat.php?id=<?= $obat['id_obat'] ?>" class="preview-container">
                                                <div class="edit">
                                                    <i class="fas fa-edit"></i>
                                                </div>
                                                <div class="preview-text wd-pt1">
                                                    Edit jadwal
                                                </div>
                                            </a>
                                            <a href="hapus-obat.php?id=<?= $obat['id_obat'] ?>" class="preview-container">
                                                <div class="delet">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </div>
                                                <div class="preview-text wd-pt2">
                                                    Hapus jadwal
                                                </div>
                                            </a>
                                        </div>
                                    </td>
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