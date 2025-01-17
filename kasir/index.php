<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";

$hari_ini = date("Y-m-d");
$pasiens = tampil("SELECT * FROM kunjungan 
                    INNER JOIN pasien ON kunjungan.id_pasien = pasien.id_pasien
                    WHERE DATE(waktu_kunjungan) = '$hari_ini' 
                    AND status_antrian = 'Selesai'
                    AND status_transaksi != 'Selesai'");                 
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
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $pasien['nama_pasien'] ?></td>
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
                                                                Lihat Transaksi 
                                                            </div>
                                                        </a>
                                                        <a href="transaksi-obat.php?idk=<?= $pasien['id_kunjungan'] ?>" class="preview-container">
                                                            <button type="button" class="btn btn-warning btn-sm text-white" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                                <i class="fa-solid fa-pills"></i>
                                                            </button>
                                                            <div class="preview-text wd-pt1">
                                                                Transaksi Obat
                                                            </div>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
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