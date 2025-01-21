<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";


$it = $_GET['idt'];
$id = $_GET['idp'];
$idk = $_GET['idk'];


if(isset($_POST['submit'])){
    if(editHasilLab($it, $_POST) > 0){
        echo "<script>alert('Data berhasil diubah !'); window.location.href='profil-pasien.php?id=$id&idk=$idk';</script>";
    }
    else if(editHasilLab($it, $_POST) === 0){
        echo "<script>alert('Tidak ada data yang diubah !'); window.location.href='profil-pasien.php?id=$id&idk=$idk';</script>";
    }
    else{
        echo "<script>alert('Data gagal diubah !');</script>";
    }
}

eror();

$tindakans = tampil("SELECT * FROM tindakan_lab");
$dokters = tampil("SELECT * FROM dokter WHERE id_bidang = 1");
$bidang = tampil("SELECT id_bidang FROM bidang WHERE id_bidang = 1")[0];
$rekmed = tampil("SELECT * FROM hasil_lab WHERE id_lab = $it")[0];
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-notes-medical"></i>
                                Tambah Hasil Tindakan Lab
                            </div>
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <table style="font-size: 15px;" class="table table-custom table-borderless">
                                        <tr>
                                            <input type="hidden" value="<?= $rekmed['foto_lab'] ?>" name="foto_lama">
                                            <td class="daftar1">Tindakan Lab
                                            <td class="daftar">
                                                <select name="id_tindakan" id="" class="h-auto d-inline-block form-select form-select-sm">
                                                    <option value="">--Tindakan--</option>
                                                    <?php foreach($tindakans as $tindakan) : ?>
                                                        <?php if($tindakan['id_tindakan_lab'] === $rekmed['id_tindakan_lab']) : ?>
                                                            <option value="<?= $tindakan['id_tindakan_lab'] ?>" selected><?= $tindakan['nama_tindakan_lab'] ?></option>
                                                        <?php else: ?>
                                                            <option value="<?= $tindakan['id_tindakan_lab'] ?>"><?= $tindakan['nama_tindakan_lab'] ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="hasil_tindakan">Hasil Tindakan</label></td>
                                            <td class="daftar"><textarea class="form-control" name="hasil" id="hasil_tindakan" aria-label="With textarea"><?= $rekmed['hasil_tindakan_lab'] ?></textarea><td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="nama3">Hasil Tindakan Dalam Bentuk Foto <sup>*jika ada</sup></label></td>
                                            <td class="daftar">
                                                <img src="../image/hasilLab/<?php if(!isset($rekmed['foto_lab'])){ echo('-'); }else if(isset($rekmed['foto_lab'])){ echo($rekmed['foto_lab']); } ?>" alt="" style="width: 200px; height: 300px; border-radius: 5px;">
                                                <input type="file" id="nama3" name="foto" class="form-control form-control-sm">
                                            </td>
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