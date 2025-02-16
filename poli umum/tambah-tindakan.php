<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";

$id  = $_GET['id'];
$idp = $_GET['idp'];
$idk = $_GET['idk'];

if(isset($_POST['submit'])){
    if(tambahTindakanLanjut($_POST) > 0){
        echo "<script>alert('Data berhasil ditambahkan !'); window.location.href='profil-pasien.php?id=$idp&idk=$idk';</script>";
    }
    else{
        echo "<script>alert('Data gagal ditambahkan !');</script>";
    }
}

eror();

$tindakans = tampil("SELECT * FROM tindakan");
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
                                        <input type="hidden" name="id_kunjungan" value="<?= $idk ?>">
                                        <input type="hidden" name="id_rekmed" value="<?= $id ?>">
                                        <tr>
                                            <td class="daftar1">Tindakan Medis
                                            <td class="daftar">
                                                <select name="id_tindakan" id="" class="h-auto d-inline-block form-select form-select-sm">
                                                    <option value="">--Tindakan--</option>
                                                    <?php foreach($tindakans as $tindakan) : ?>
                                                        <option value="<?= $tindakan['id_tindakan'] ?>"><?= $tindakan['nama_tindakan'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="hasil_tindakan">Hasil Tindakan</label></td>
                                            <td class="daftar"><textarea class="form-control" name="hasil" id="hasil_tindakan" aria-label="With textarea"></textarea><td>
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