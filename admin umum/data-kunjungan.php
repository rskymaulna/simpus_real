<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";
function kunjungan($status){
    if($status === 'Selesai'){
        echo '<em class="em-selesai">Selesai</em>';
    }else if($status === 'Belum Selesai'){
        echo '<em class="text-warning">Belum Selesai</em>';
    }
}
date_default_timezone_set('Asia/Jakarta'); 
$hari_ini = date("Y-m-d");
$pasiens = tampil("SELECT * FROM pasien 
                    INNER JOIN kunjungan ON pasien.id_pasien = kunjungan.id_pasien 
                    WHERE DATE(kunjungan.waktu_kunjungan) = '$hari_ini' 
                    ");
$i = 1;
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-location-arrow"></i>
                                Data Kunjungan
                            </div>
                            <div class="card-body">
                                <table id="example" class="table table-custom table-striped table-bordered table-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No KTP</th>
                                            <th>Nama Pasien</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Poli Kunjungan</th>
                                            <th>Status Kunjungan</th>
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
                                            <td><?= $pasien['alamat'] ?></td>
                                            <td>Poli Umum</td>
                                            <td><?= kunjungan($pasien['status_kunjungan']); ?></td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="profil-kunjungan.php?id=<?= $pasien['id_pasien'] ?>" class="preview-container">
                                                        <div class="see">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt3">
                                                            Laporan kunjungan
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
                                <button type="button" class="btn btn-primary"><a href="data-kunjungan.html" style="color: white; text-decoration: none;">Ya</a></button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            </div>
                        </div>
                    </div>
                </div>
<?php include "layout/footer.php"; ?>