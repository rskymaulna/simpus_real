<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";

$id = $_GET['id'];

if(isset($_POST['submit'])){
    if(tambahRekmed($id, $_POST) > 0){
        echo "<script>alert('Data berhasil ditambahkan !'); window.location.href='index.php';</script>";
    }
    else{
        echo "<script>alert('Data gagal ditambahkan !');</script>";
    }
}

eror();

$kunjungan = tampil("SELECT * FROM kunjungan WHERE id_kunjungan = $id")[0];
$tindakans = tampil("SELECT * FROM tindakan");
$dokters = tampil("SELECT * FROM dokter WHERE id_bidang = 1");
$bidang = tampil("SELECT id_bidang FROM bidang WHERE id_bidang = 1")[0];
$obats = tampil("SELECT * FROM obat");
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-notes-medical"></i>
                                Tambah Rekammedis Pasien
                            </div>
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <table style="font-size: 15px;" class="table table-custom table-borderless">
                                        <input type="hidden" name="bidang" value="<?= $bidang['id_bidang'] ?>">
                                        <input type="hidden" name="pasien" value="<?= $kunjungan['id_pasien'] ?>">
                                        <tr>
                                            <td class="daftar1"><label for="keluhan">Keluhan</label></td>
                                            <td class="daftar"><textarea class="form-control" name="keluhan" id="keluhan" aria-label="With textarea"></textarea><td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="riwayat_sekarang">Riwayat Penyakit Sekarang</label></td>
                                            <td class="daftar"><textarea class="form-control" name="riwayat_sekarang" id="riwayat_sekarang" aria-label="With textarea"></textarea><td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="riwayat_dulu">Riwayat Penyakit Dahulu</label></td>
                                            <td class="daftar"><textarea class="form-control" name="riwayat_dulu" id="riwayat_dulu" aria-label="With textarea"></textarea><td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="diagnosis">Diagnosis</label></td>
                                            <td class="daftar"><textarea class="form-control" name="diagnosis" id="diagnosis" aria-label="With textarea"></textarea><td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1">Tindakan Medis
                                            <td class="daftar">
                                                <select name="tindakan" id="" class="h-auto d-inline-block form-select form-select-sm">
                                                    <option value="">--Tindakan--</option>
                                                    <?php foreach($tindakans as $tindakan) : ?>
                                                        <option value="<?= $tindakan['id_tindakan'] ?>"><?= $tindakan['nama_tindakan'] ?></option>
                                                    <?php endforeach; ?>
                                                    <?php for($i=1; $i<6; $i++) : ?>
                                                        <option value="<?= $i?>"><?= $i ?>x</option>
                                                    <?php endfor; ?>
                                                </select>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="hasil_tindakan">Hasil Tindakan</label></td>
                                            <td class="daftar"><textarea class="form-control" name="hasil_tindakan" id="hasil_tindakan" aria-label="With textarea"></textarea><td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="resep">Resep Obat</label></td>
                                            <td class="daftar">
                                            <select class="choices-select" multiple name="resep[]">
                                                <?php foreach( $obats as $obat) : ?>
                                                    <option value="<?= $obat['id_obat'] ?>"><?= $obat['nama_obat'] ?> 5.000mg</option>
                                                <?php endforeach; ?>
                                            </select>
                                            <td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1">Dokter Yang Menangani</td>
                                            <td class="daftar">
                                                <select name="dokter" id="" class="h-auto d-inline-block form-select form-select-sm">
                                                    <option value="">--Dokter--</option>
                                                    <?php foreach($dokters as $dokter) : ?>
                                                        <option value="<?= $dokter['id_dokter'] ?>"><?= $dokter['nama_dokter'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="catatan">Catatan</label></td>
                                            <td class="daftar"><textarea class="form-control" name="catatan" id="catatan" aria-label="With textarea"></textarea><td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="daftar">
                                                <button type="submit" name="submit" class="btn btn-custom btn-success btn-sm">+ Tambah</button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
<?php include "layout/footer.php"; ?>