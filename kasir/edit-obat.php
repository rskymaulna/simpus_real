<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";

$idp = $_GET['idp'];
$idk = $_GET['idk'];

if(isset($_POST['submit'])){
    if(ubahObatAp($_POST) > 0){
        echo "<script>alert('Data berhasil diubah !'); window.location.href='profil-pasien.php?id=$idp&idk=$idk';</script>";
    }
    else if(ubahObatAp($_POST) == 0){
        echo "<script>alert('Tidak Ada data yang diubah !'); window.location.href='profil-pasien.php?id=$idp&idk=$idk';</script>";
    }
    else{
        echo "<script>alert('Data gagal diubah !'); window.location.href='profil-pasien.php?id=$idp&idk=$idk';</script>";
    }
}

eror();
$id = $_GET['id'];
$idrek = $_GET['idrek'];

date_default_timezone_set('Asia/Jakarta'); 
$hari_ini = date("Y-m-d");
$rekmed = tampil("SELECT * FROM rekmed WHERE DATE(tgl_waktu) = '$hari_ini' AND id_rekmed = $idrek")[0];
$obats = tampil("SELECT * FROM obat");
$trans = tampil("SELECT * FROM obat_apotek WHERE id_pemberian_obat = $id")[0];
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-pills"></i>
                                Transaksi Obat
                            </div>
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <table style="font-size: 15px;" class="table table-custom table-borderless">
                                        <input type="hidden" name="id" value="<?= $id ?>">
                                        <tr>
                                            <td class="daftar1"><label for="keluhan">Resep</label></td>
                                            <td class="daftar"><textarea class="form-control" name="keluhan" id="keluhan" aria-label="With textarea" disabled><?= $rekmed['resep'] ?></textarea><td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1">Obat</td>
                                            <td class="daftar">
                                                <select name="ido" id="" class="h-auto d-inline-block form-select form-select-sm">
                                                    <option value="">--Obat--</option>
                                                    <?php foreach($obats as $obat) : ?>
                                                        <?php if($obat['id_obat'] === $trans['id_obat']) : ?>
                                                            <option value="<?= $obat['id_obat'] ?>" selected><?= $obat['nama_obat'] ?> (satuan <?= strtolower($obat['jenis']) ?>)</option>
                                                        <?php endif; ?>
                                                            <option value="<?= $obat['id_obat'] ?>"><?= $obat['nama_obat'] ?> (satuan <?= strtolower($obat['jenis']) ?>)</option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="nama">Jumlah per satuan</label></td>
                                            <td class="daftar"><input type="number" name="jumlah" value="<?= $trans['jumlah'] ?>" id="nama" class="w-100 form-control form-control-sm"></td>
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