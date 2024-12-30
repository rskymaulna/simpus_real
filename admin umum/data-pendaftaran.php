<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";
$pasiens = tampil("SELECT * FROM pasien");
$i = 1;
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-sign-in"></i>
                                Data Pendaftaran
                            </div>
                            <div class="card-body">
                            <button type="button" class="btn btn-success btn-sm" onclick="window.location.href='daftar.php'">+ Pasien Baru</button>
                                <table id="example" class="table table-custom table-bordered table-sm table-striped">
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
                                            <td>
                                                <div class="aksi">
                                                    <a href="#" style="text-decoration: none;" class="preview-container">
                                                        <select name="" id="" class="form-select input-custom form-select-sm">
                                                            <option value="" style="font-size: 12px;">-Tujuan-</option>
                                                            <option value="">Poli Umum</option>
                                                            <option value="">Poli Gigi</option>
                                                            <option value="">Poli KIA</option>
                                                        </select>
                                                        <div class="preview-text wd-pt2">
                                                            Pilih Poli Tujuan Pasien
                                                        </div>
                                                    </a>
                                                    <a href="../poli umum/antrian.html" class="preview-container">
                                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" style="border: none; transform: scale(0.8);">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </button>
                                                        <div class="preview-text wd-pt2">
                                                            Pindahkan pasien
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
                            Pindahkan ke antrian poli?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary"><a href="data-pendaftaran.html" style="color: white; text-decoration: none;">Ya</a></button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            </div>
                        </div>
                    </div>
                </div>
<?php include "layout/footer.php"; ?>