<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";

$pegawais = tampil("SELECT * FROM pegawai");
$i = 1;
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-address-book"></i>
                                Data pegawai
                            </div>
                            <div class="card-body">
                                <button type="button" onclick="window.location.href='tambah-pegawai.php'" class="btn btn-success btn-sm" onclick="window.location.href='daftar.php'">+ Tambah Pegawai</button>
                                <table id="example" class="table table-custom table-bordered table-sm table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Nama Pegawai</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Npwp</th>
                                            <th>Tempat Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>Jabatan</th>
                                            <th>Bidang</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($pegawais as $pegawai) : ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $pegawai['nama_pegawai'] ?></td>
                                            <td><?= $pegawai['jenis_kelamin'] ?></td>
                                            <td><?= $pegawai['npwp'] ?></td>
                                            <td><?= $pegawai['tempat_lahir'] ?>, <?= date("d-m-Y", strtotime($pegawai['tgl_lahir'])) ?></td>
                                            <td><?= $pegawai['alamat'] ?></td>
                                            <td><?= $pegawai['jabatan'] ?></td>
                                            <td><?= $pegawai['bidang'] ?></td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="edit-pegawai.php?id=<?= $pegawai['id_pegawai'] ?>" class="preview-container">
                                                        <button type="button" class="btn btn-primary btn-sm text-white" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        <div class="preview-text wd-pt1">
                                                            Edit data pegawai
                                                        </div>
                                                    </a>
                                                    <a href="hapus-pegawai.php?id=<?= $pegawai['id_pegawai'] ?>" class="preview-container">
                                                        <button type="button" class="btn btn-danger btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                            <i class="fa-solid fa-trash-can"></i>
                                                        </button>
                                                        <div class="preview-text wd-pt2">
                                                            Hapus data Pegawai
                                                        </div>
                                                    </a>
                                                    <a href="../poli umum/profil1.html" class="preview-container">
                                                        <button type="button" class="btn btn-info btn-sm text-light" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </button>
                                                        <div class="preview-text wd-pt3">
                                                            Lihat data pegawai
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
                                <button type="button" class="btn btn-primary"><a href="data-pegawai.html" style="color: white; text-decoration: none;">Ya</a></button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            </div>
                        </div>
                    </div>
                </div>
<?php include "layout/footer.php"; ?>