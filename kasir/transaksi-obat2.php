<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";

$id  = $_GET['idk'];
$idp = $_GET['idp'];

if(isset($_POST['submit'])){
    if(obatAP($_POST) > 0){
        echo "<script>alert('Data berhasil ditambahkan !'); window.location.href='profil-pasien.php?id=$idp&idk=$id';</script>";
    }
    else{
        echo "<script>alert('Data gagal ditambahkan !');</script>";
    }
}

eror();

date_default_timezone_set('Asia/Jakarta'); 
$hari_ini = date("Y-m-d");
$rekmed = tampil("SELECT * FROM rekmed WHERE DATE(tgl_waktu) = '$hari_ini' AND id_kunjungan = $id")[0];
$obats = tampil("SELECT * FROM obat");
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
                                        <input type="hidden" name="idk" value="<?= $id ?>">
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
                                                        <option value="<?= $obat['id_obat'] ?>"><?= $obat['nama_obat'] ?> (satuan <?= strtolower($obat['jenis']) ?>)</option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="nama">Jumlah per satuan</label></td>
                                            <td class="daftar"><input type="number" name="jumlah" id="nama" class="w-100 form-control form-control-sm"></td>
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