<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";
date_default_timezone_set('Asia/Jakarta'); 
$hari_ini = date("Y-m-d");
$pasiens = tampil("SELECT * FROM kunjungan 
                    INNER JOIN pasien ON kunjungan.id_pasien = pasien.id_pasien
                    WHERE DATE(kunjungan.waktu_kunjungan) = '$hari_ini' 
                    AND kunjungan.id_bidang = 3
                    AND status_antrian = 'Belum Selesai'
                    ");
                    
$i = 1;

if(isset($_POST['submit'])){
    if(pindahAp($_POST) > 0){
        echo "<script>alert('Pasien berhasil dipindahkan !'); window.location.href='index.php';</script>";
    }
    else{
        echo "<script>alert('Status antrian gagal diperbarui !'); window.location.href='index.php';</script>";
    }
}

?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-sort"></i>
                                Antrian
                            </div>
                            <div class="card-body">
                                    <table id="example" class="table table-custom table-sm table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nomor Antrian</th>
                                                <th>Nama Pasien</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tempat Tanggal Lahir</th>
                                                <th>Alamat</th>
                                                <th>Status Asuransi</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($pasiens as $pasien) : ?>
                                            <?php if($pasien['status_lab'] === 'Selesai') : ?>
                                                <tr>
                                                    <td><?= $i ?></td>
                                                    <td style="color: orange;"><em><?= $pasien['nama_pasien'] ?></em></td>
                                                    <td><?= $pasien['jenis_kelamin'] ?></td>
                                                    <td><?= $pasien['tempat_lahir'] ?></td>
                                                    <td><?= $pasien['alamat'] ?></td>
                                                    <td><?= $pasien['status_asuransi'] ?></td>
                                                    <td>
                                                        <div class="aksi">
                                                            <a href="profil-pasien.php?id=<?= $pasien['id_pasien'] ?>&idk=<?= $pasien['id_kunjungan'] ?>" class="preview-container">
                                                                <button type="button" class="btn btn-sm btn-info" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; color: white;">
                                                                    <i class="fas fa-eye"></i>
                                                                </button>
                                                                <div class="preview-text wd-pt3">
                                                                    Lihat profil 
                                                                </div>
                                                            </a>
                                                            <a href="tambah-rekmed.php?id=<?= $pasien['id_kunjungan'] ?>" class="preview-container">
                                                                <button type="button" class="btn btn-warning btn-sm text-white" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                                    <i class="fa-solid fa-notes-medical"></i>
                                                                </button>
                                                                <div class="preview-text wd-pt1">
                                                                    Tambah Rekammedis juk
                                                                </div>
                                                            </a>
                                                            <a href="pindah-lab.php?id=<?= $pasien['id_kunjungan'] ?>" class="preview-container">
                                                                <input type="hidden" name="idk" value="<?= $pasien['id_kunjungan'] ?>">
                                                                <button type="submit" name="submit" class="btn btn-sm btn-secondary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                                    <i class="fa-solid fa-flask-vial"></i>
                                                                </button>
                                                                <div class="preview-text wd-pt2">
                                                                    Pindahkan pasien ke lab
                                                                </div>
                                                            </a>
                                                                <?php $idik = $pasien['id_kunjungan']; $apa = mysqli_query($conn, "SELECT * FROM rekmed WHERE id_kunjungan = $idik AND DATE(tgl_waktu) = '$hari_ini'");  ?>
                                                                <?php var_dump($apa); ?>
                                                                <?php if(mysqli_num_rows($apa) !== 0) : ?>
                                                                    <a href="#" class="preview-container">
                                                                        <form action="" method="post">
                                                                            <input type="hidden" name="idk" value="<?= $pasien['id_kunjungan'] ?>">
                                                                            <button type="submit" name="submit" class="btn btn-sm btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                                                <i class="fa-solid fa-arrow-right"></i>
                                                                            </button>
                                                                            <div class="preview-text wd-pt2">
                                                                                Pindahkan pasien
                                                                            </div>
                                                                        </form>
                                                                    </a>
                                                                <?php endif; ?>    
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php else: ?>
                                                <tr>
                                                    <td><?= $i ?></td>
                                                    <td><?= $pasien['nama_pasien'] ?></td>
                                                    <td><?= $pasien['jenis_kelamin'] ?></td>
                                                    <td><?= $pasien['tempat_lahir'] ?></td>
                                                    <td><?= $pasien['alamat'] ?></td>
                                                    <td><?= $pasien['status_asuransi'] ?></td>
                                                    <td>
                                                        <div class="aksi">
                                                            <a href="profil-pasien.php?id=<?= $pasien['id_pasien'] ?>" class="preview-container">
                                                                <button type="button" class="btn btn-sm btn-info" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; color: white;">
                                                                    <i class="fas fa-eye"></i>
                                                                </button>
                                                                <div class="preview-text wd-pt3">
                                                                    Lihat profil 
                                                                </div>
                                                            </a>
                                                            <a href="tambah-rekmed.php?id=<?= $pasien['id_kunjungan'] ?>" class="preview-container">
                                                                <button type="button" class="btn btn-warning btn-sm text-white" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                                    <i class="fa-solid fa-notes-medical"></i>
                                                                </button>
                                                                <div class="preview-text wd-pt1">
                                                                    Tambah Rekammedis Pasien
                                                                </div>
                                                            </a>
                                                            <a href="pindah-lab.php?id=<?= $pasien['id_kunjungan'] ?>" class="preview-container">
                                                                <input type="hidden" name="idk" value="<?= $pasien['id_kunjungan'] ?>">
                                                                <button type="submit" name="submit" class="btn btn-sm btn-secondary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                                    <i class="fa-solid fa-flask-vial"></i>
                                                                </button>
                                                                <div class="preview-text wd-pt2">
                                                                    Pindahkan pasien ke lab
                                                                </div>
                                                            </a>
                                                            <a href="#" class="preview-container">
                                                                <form action="" method="post">
                                                                    <input type="hidden" name="idk" value="<?= $pasien['id_kunjungan'] ?>">
                                                                    <button type="submit" name="submit" class="btn btn-sm btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                                        <i class="fa-solid fa-arrow-right"></i>
                                                                    </button>
                                                                    <div class="preview-text wd-pt2">
                                                                        Pindahkan pasien
                                                                    </div>
                                                                </form>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php $i++; ?>    
                                        <?php endforeach; ?>    
                                        </tbody>
                                    </table>
                                <!-- </form>    -->
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
                            Pindahkan dari antrian poli?
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-primary"><a href="antrian.html" style="color: white; text-decoration: none;">Ya</a></button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">alert</h5>
        </div>
        <div class="modal-body">
          Pasien belum memiliki riwayat berobat
        </div>
      </div>
    </div>
</div>

<?php include "layout/footer.php"; ?>