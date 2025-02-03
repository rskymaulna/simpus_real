<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";

$id = $_GET['idk'];

if(isset($_POST['submit'])){
    if(obatAP($_POST) > 0){
        echo "<script>alert('Data berhasil ditambahkan !'); window.location.href='profil-pasien.php?idk=$id';</script>";
    }
    else{
        echo "<script>alert('Data gagal ditambahkan !');</script>";
    }
}

eror();

date_default_timezone_set('Asia/Jakarta'); 
$hari_ini = date("Y-m-d");
$rekmed = tampil("SELECT * FROM rekmed WHERE DATE(tgl_waktu) = '$hari_ini' AND id_kunjungan = $id ORDER BY tgl_waktu DESC")[0];
$obats = tampil("SELECT * FROM transaksi INNER JOIN obat ON transaksi.id_obat = obat.id_obat WHERE transaksi.id_kunjungan = $id");
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
            <td class="daftar">
                <textarea class="form-control" name="keluhan" id="keluhan" aria-label="With textarea" disabled><?= $rekmed['resep'] ?></textarea>
            <td>
        </tr>
        <?php $i = 1; foreach($obats as $obat) : ?>
            <tr>
                <td class="daftar1">Obat <sup><?= $i ?></sup></td>
                <td class="daftar">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="hidden" name="idobat<?= $i ?>" value="<?= $obat['id_obat'] ?>"> <!-- Kirim ID Obat -->
                            <input type="text" class="form-control" value="<?= $obat['nama_obat'] ?> 5000mg" disabled>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="daftar1">Jumlah</td>
                <td class="daftar" style="width: 10%;">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <input type="number" name="jumlah<?= $i ?>" class="form-control" min="1" required>
                        </div>
                    </div>
                </td>
            </tr>
        <?php $i++; endforeach; ?>
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