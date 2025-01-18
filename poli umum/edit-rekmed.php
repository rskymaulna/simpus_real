<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";

$id  = $_GET['id'];
$idp = $_GET['idp'];

if(isset($_POST['submit'])){
    if(editRekmed($id, $_POST) > 0){
        echo "<script>alert('Data berhasil diubah !'); window.location.href='profil-pasien.php?id=$idp';</script>";
    }
    else if(editrekmed($id, $_POST) === 0){
        echo "<script>alert('Tidak ada data yang diubah !'); window.location.href='profil-pasien.php?id=$idp';</script>";
    }
    else{
        echo "<script>alert('Data gagal diubah !');</script>";
    }
}

eror();

$rekmed    = tampil("SELECT * FROM rekmed WHERE id_rekmed = $id")[0];
$tindakans = tampil("SELECT * FROM tindakan");
$dokters   = tampil("SELECT * FROM dokter WHERE id_bidang = 1");
$bidang    = tampil("SELECT id_bidang FROM bidang WHERE id_bidang = 1")[0];

?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-edit"></i>
                                Edit Rekammedis Pasien
                            </div>
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <table style="font-size: 15px;" class="table table-custom table-borderless">
                                        <tr>
                                            <td class="daftar1"><label for="keluhan">Keluhan</label></td>
                                            <td class="daftar"><textarea class="form-control" name="keluhan" id="keluhan" aria-label="With textarea"><?= $rekmed['keluhan'] ?></textarea><td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="riwayat_sekarang">Riwayat Penyakit Sekarang</label></td>
                                            <td class="daftar"><textarea class="form-control" name="riwayat_sekarang" id="riwayat_sekarang" aria-label="With textarea"><?= $rekmed['riwayat_penyakit_sekarang'] ?></textarea><td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="riwayat_dulu">Riwayat Penyakit Dahulu</label></td>
                                            <td class="daftar"><textarea class="form-control" name="riwayat_dulu" id="riwayat_dulu" aria-label="With textarea"><?= $rekmed['riwayat_penyakit_dahulu'] ?></textarea><td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="diagnosis">Diagnosis</label></td>
                                            <td class="daftar"><textarea class="form-control" name="diagnosis" id="diagnosis" aria-label="With textarea"><?= $rekmed['diagnosis'] ?></textarea><td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1">Tindakan Medis
                                            <td class="daftar">
                                                <select name="tindakan" id="" class="h-auto d-inline-block form-select form-select-sm">
                                                    <option value="">--Tindakan--</option>
                                                    <?php foreach($tindakans as $tindakan) : ?>
                                                        <?php if($rekmed['id_tindakan'] === $tindakan['id_tindakan']) : ?>
                                                            <option value="<?= $tindakan['id_tindakan'] ?>" selected><?= $tindakan['nama_tindakan'] ?></option>
                                                        <?php endif; ?>
                                                        <option value="<?= $tindakan['id_tindakan'] ?>"><?= $tindakan['nama_tindakan'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="tindakanl">Tindakan Lanjutan</label></td>
                                            <td class="daftar"><textarea class="form-control" name="tindakanl" id="tindakanl" aria-label="With textarea"></textarea><td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="hasil_tindakan">Hasil Tindakan</label></td>
                                            <td class="daftar"><textarea class="form-control" name="hasil_tindakan" id="hasil_tindakan" aria-label="With textarea"><?= $rekmed['hasil_tindakan'] ?></textarea><td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="resep">Resep Obat</label></td>
                                            <td class="daftar"><textarea class="form-control" name="resep" id="resep" aria-label="With textarea"><?= $rekmed['resep'] ?></textarea><td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1">Dokter Yang Menangani</td>
                                            <td class="daftar">
                                                <select name="dokter" id="" class="h-auto d-inline-block form-select form-select-sm">
                                                    <option value="">--Dokter--</option>
                                                    <?php foreach($dokters as $dokter) : ?>
                                                        <?php if($rekmed['id_dokter'] === $dokter['id_dokter']) : ?>
                                                            <option value="<?= $dokter['id_dokter'] ?>" selected><?= $dokter['nama_dokter'] ?></option>                                                        
                                                        <?php endif; ?>
                                                        <option value="<?= $dokter['id_dokter'] ?>"><?= $dokter['nama_dokter'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="catatan">Catatan</label></td>
                                            <td class="daftar"><textarea class="form-control" name="catatan" id="catatan" aria-label="With textarea"><?= $rekmed['catatan'] ?></textarea><td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="daftar">
                                                <button type="submit" name="submit" class="btn btn-custom btn-success btn-sm"><i class="fas fa-edit"></i> Ubah</button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
<?php include "layout/footer.php"; ?>