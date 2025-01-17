<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";
$pasiens = tampil("SELECT * FROM pasien ORDER BY id_pasien DESC");
$bidangs = tampil("SELECT * FROM bidang WHERE id_bidang BETWEEN 1 AND 3");
$i = 1;

// date_default_timezone_set('Asia/Jayapura');
// echo date("H:i:s");

if(isset($_POST['submit'])){
    if(tambahKunjungan($_POST) > 0){
        echo "<script>alert('Pasien berhasil dipindahkan');window.location.href='data-pendaftaran.php';</script>";
    }else {
        echo "<script>alert('pasien gagal dipindahkan');window.location.href='data-pendaftaran.php';</script>";
    }
}

if(mysqli_error($conn)){
    var_dump(mysqli_error($conn));
}
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
                                <table id="example" class="table table-custom table-hover table-bordered table-sm table-striped">
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
                                                <form action="" method="post">
                                                    <div class="aksi">
                                                        <input type="hidden" name="id_pasien" value="<?= $pasien['id_pasien'] ?>">
                                                        <select required name="id_bidang" id="" class="form-select input-custom form-select-sm">
                                                            <option value="">--Tujuan--</option>
                                                                <?php foreach($bidangs as $bidang) : ?>
                                                                    <option value="<?= $bidang['id_bidang'] ?>"><?= $bidang['nama_bidang'] ?></option> 
                                                                <?php endforeach; ?>
                                                        </select>
                                                        <a href="#" class="preview-container">
                                                            <button type="submit" name="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" style="border: none; transform: scale(0.8);">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </button>
                                                            <div class="preview-text wd-pt2">
                                                                Pindahkan pasien
                                                            </div>
                                                        </a>
                                                    </div>
                                                </form>
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