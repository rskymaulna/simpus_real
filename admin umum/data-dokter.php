<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";

otomatisasiKodeDokter();
$dokters = tampil("SELECT * FROM dokter INNER JOIN bidang ON dokter.id_bidang = bidang.id_bidang");


$i = 1;
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-stethoscope"></i>
                                Data Dokter
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-success btn-sm" onclick="window.location.href='tambah-dokter.php'">+ Tambah Dokter</button>
                                <table id="example" class="table table-custom  table-hover table-bordered table-sm table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Dokter</th>
                                            <th>Nama Dokter</th>
                                            <th>Jenis kelamin</th>
                                            <th>Nomor Induk Dokter</th>
                                            <th>Tempat Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>ID Poli</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach($dokters as $dokter) : ?> 
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $dokter['kode_dokter'] ?></td>
                                            <td><?= $dokter['nama_dokter'] ?></td>
                                            <td><?= $dokter['jenis_kelamin'] ?></td>
                                            <td><?= $dokter['no_induk_dokter'] ?></td>
                                            <td><?= $dokter['tempat_lahir'].", ".date("d-m-Y", strtotime($dokter['tgl_lahir'])) ?></td>
                                            <td><?= $dokter['alamat'] ?></td>
                                            <td><?= $dokter['nama_bidang'] ?></td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="edit-dokter.php?id=<?= $dokter['id_dokter'] ?>" class="preview-container">
                                                        <button type="button" class="btn btn-primary btn-sm text-white" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        <div class="preview-text wd-pt1">
                                                            Edit data pasien
                                                        </div>
                                                    </a>
                                                    <a href="#" onclick="if(confirm('Apakah anda ingin menghapus data ini?')){ window.location.href='hapus-dokter.php?id=<?= $dokter['id_dokter'] ?>' }" class="preview-container">
                                                        <button type="button" class="btn btn-danger btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                            <i class="fa-solid fa-trash-can"></i>
                                                        </button>
                                                        <div class="preview-text wd-pt2">
                                                            Hapus data pasien
                                                        </div>
                                                    </a>
                                                    <a href="profil-dokter.php?id=<?= $dokter['id_dokter'] ?>" class="preview-container">
                                                        <button type="button" class="btn btn-info btn-sm text-light" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </button>
                                                        <div class="preview-text wd-pt3">
                                                            Lihat data pasien
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
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            Hapus data?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary"><a href="data-dokter.html" style="color: white; text-decoration: none;">Ya</a></button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            </div>
                        </div>
                    </div>
                </div>
<?php  include "layout/footer.php"; ?>