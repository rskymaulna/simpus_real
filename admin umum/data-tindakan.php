<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";

$tindakans = tampil("SELECT * FROM tindakan");
$i = 1;
?>
            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fa-solid fa-syringe"></i>
                        Data Tindakan
                    </div>
                    <div class="card-body">
                    <button type="button" onclick="window.location.href='tambah-tindakan.php'" class="btn btn-success btn-sm">+ Tambah Tindakan</button>
                        <table id="example" class="table table-custom table-bordered table-hover table-sm table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Tindakan</th>
                                    <th>Tarif</th>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php foreach($tindakans as $tindakan) : ?> 
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $tindakan['nama_tindakan'] ?></td>
                                    <td>Rp. <?= formatHarga($tindakan['tarif']) ?></td>
                                    <td><?= $tindakan['deskripsi'] ?></td>
                                    <td>
                                        <div class="aksi">
                                            <a href="edit-tindakan.php?id=<?= $tindakan['id_tindakan'] ?>" class="preview-container">
                                                <div class="edit">
                                                    <i class="fas fa-edit"></i>
                                                </div>
                                                <div class="preview-text wd-pt1">
                                                    Edit Tindakan
                                                </div>
                                            </a>
                                            <a href="#" onclick="if(confirm('Apakah anda ingin menghapus data ini?')) { window.location.href='hapus-tindakan.php?id=<?= $tindakan['id_tindakan'] ?>' }" class="preview-container">
                                                <div class="delet">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </div>
                                                <div class="preview-text wd-pt2">
                                                    Hapus Tindakan
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