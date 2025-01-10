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

$rekmed    = tampil("SELECT * FROM rekmed_umum WHERE id_rekmed = $id")[0];
$obats     = tampil("SELECT * FROM obat");
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
                                        <input type="hidden" name="bidang" value="<?= $bidang['id_bidang'] ?>">
                                        <tr>
                                            <td class="daftar1"><label for="keluhan">Keluhan</label></td>
                                            <td class="daftar"><input type="text" value="<?= $rekmed['keluhan'] ?>" name="keluhan" id="keluhan" class="w-100 p-3 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="tdarah">Tekanan Darah</label></td>
                                            <td class="daftar"><input type="text" name="tdarah" value="<?= $rekmed['tekanan_darah'] ?>" id="tdarah" class="w-100 p-3 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="dnadi">Denyut Nadi</label></td>
                                            <td class="daftar"><input type="text" name="dnadi" value="<?= $rekmed['denyut_nadi'] ?>" id="dnadi" class="w-100 p-3 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="stubuh">Suhu Tubuh</label></td>
                                            <td class="daftar"><input type="text" name="stubuh" value="<?= $rekmed['suhu_tubuh'] ?>" id="stubuh" class="w-100 p-3 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="diagnosa">Diagnosa</label></td>
                                            <td class="daftar"><input type="text" name="diagnosa" value="<?= $rekmed['diagnosis'] ?>" id="diagnosa" class="w-100 p-3 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1">Obat Yang Diberikan</td>
                                            <td class="daftar">
                                                <select name="obat" id="" class="h-auto d-inline-block form-select form-select-sm">
                                                    <option value="">--Obat--</option>
                                                    <?php foreach($obats as $obat) : ?>
                                                        <?php if($rekmed['id_obat'] === $obat['id_obat']) : ?>
                                                            <option value="<?= $obat['id_obat'] ?>" selected><?= $obat['nama_obat'] ?></option>
                                                        <?php else: ?>
                                                            <option value="<?= $obat['id_obat'] ?>"><?= $obat['nama_obat'] ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td class="daftar1">Tindakan Yang Diberikan</td>
                                            <td class="daftar">
                                                <select name="tindakan" id="" class="h-auto d-inline-block form-select form-select-sm">
                                                    <option value="">--Tindakan--</option>
                                                    <?php foreach($tindakans as $tindakan) : ?>
                                                        <?php if($rekmed['id_tindakan'] === $tindakan['id_tindakan']) : ?>
                                                            <option value="<?= $tindakan['id_tindakan'] ?>" selected><?= $tindakan['nama_tindakan'] ?></option>
                                                        <?php else: ?>
                                                            <option value="<?= $tindakan['id_tindakan'] ?>"><?= $tindakan['nama_tindakan'] ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td class="daftar1">Dokter Yang Menangani</td>
                                            <td class="daftar">
                                                <select name="dokter" id="" class="h-auto d-inline-block form-select form-select-sm">
                                                    <option value="">--Dokter--</option>
                                                    <?php foreach($dokters as $dokter) : ?>
                                                        <?php if($rekmed['id_dokter'] === $dokter['id_dokter']) : ?>
                                                            <option value="<?= $dokter['id_dokter'] ?>" selected><?= $dokter['nama_dokter'] ?></option>  
                                                        <?php else: ?>
                                                            <option value="<?= $dokter['id_dokter'] ?>"><?= $dokter['nama_dokter'] ?></option>
                                                        <?php endif; ?>
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