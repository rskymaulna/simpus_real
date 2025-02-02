<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";

$pasiens = tampil("SELECT * FROM pasien ORDER BY id_pasien DESC");
$i = 1;
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-stethoscope"></i>
                                Data Pasien Terdaftar
                            </div>
                            <div class="card-body">
                                <table id="example"  class="table table-custom table-hover table-bordered table-sm table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No KTP</th>
                                            <th>Nama Pasien</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Tanggal Lahir</th>
                                            <th>Status Pasien</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach($pasiens as $pasien) : ?>  
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $pasien['nik'] ?></td>
                                            <td><?= $pasien['nama_pasien'] ?></td>
                                            <td><?= $pasien['jenis_kelamin'] ?></td>
                                            <td><?= $pasien['tempat_lahir'].", ".date("d-m-Y", strtotime($pasien['tgl_lahir'])) ?></td>
                                            <td><?= $pasien['status_asuransi'] ?></td>
                                            <td style="display: flex; justify-content: center; align-item: center;">
                                                <a href="#" class="preview-container">
                                                    <button type="submit" name="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" style="border: none; transform: scale(0.8);"  onclick="if(confirm('Apakah anda ingin mendaftarkan pasien?')){window.location.href='daftar3.php?id_pasien=<?= $pasien['id_pasien'] ?>'}">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </button>
                                                    <div class="preview-text wd-pt2">
                                                        Daftarkan pasien
                                                    </div>
                                                </a>
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
                                <button type="button" class="btn btn-primary"><a href="data-pasien.html" style="color: white; text-decoration: none;">Ya</a></button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            </div>
                        </div>
                    </div>
                </div>
<?php include "layout/footer.php"; ?>