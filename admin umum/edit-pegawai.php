<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";
if(isset($_POST['submit'])){
    if(editPegawai($id, $_POST) > 0){
        echo "<script>alert('Data berhasil diubah !'); window.location.href='data-pegawai.php';</script>";
    }
    else{
        echo "<script>alert('Data gagal diubah !');</script>";
    }
}

if(mysqli_error($conn)){
    var_dump(mysqli_error($conn));
}
$id = $_GET['id'];
$pegawai = tampil("SELECT * FROM pegawai WHERE id_pegawai = $id")[0];
$bidangs = tampil("SELECT * FROM bidang WHERE id_bidang BETWEEN 5 AND 7");

//menentukan checked item dari jenis kelamin
$jenis_kelamin = ['Laki-Laki', 'Perempuan'];
for($i = 0; $i < count($jenis_kelamin); $i++){
    ($pegawai['jenis_kelamin'] === $jenis_kelamin[$i]) ? $jenis_kelamin[$i] = "checked" : $jenis_kelamin[$i] = "";
}
$laki  = $jenis_kelamin[0];
$perem = $jenis_kelamin[1];

?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-edit"></i>
                                Edit Data Pegawai
                            </div>
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <table class="table table-borderless table-custom">
                                        <input type="hidden" name="foto_lama" value="<?= $pegawai['foto'] ?>">
                                        <tr>
                                            <td class="daftar1"><label for="nama">Nama</label></td>
                                            <td class="daftar"><input type="text" value="<?= $pegawai['nama_pegawai'] ?>" name="nama" id="nama" class="w-100 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="nama4">Npwp</label></td>
                                            <td class="daftar"><input type="text" value="<?= $pegawai['npwp'] ?>" name="npwp" id="nama4" class="w-100 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1">Jabatan</td>
                                            <td class="daftar">
                                                <select name="jabatan" id="" class="w-100 h-auto d-inline-block form-select form-select-sm">
                                                    <option value="">--Pilih Jabatan--</option>
                                                    <?php foreach($bidangs as $bidang) : ?>
                                                        <?php $jab = "Kepala ".$bidang['nama_bidang'];  ?>
                                                        <?php if($pegawai['jabatan'] === $jab) : ?>
                                                            <option value="Kepala <?= $bidang['nama_bidang'] ?>" selected>Kepala <?= $bidang['nama_bidang'] ?></option>
                                                        <?php else :?>
                                                            <option value="Kepala <?= $bidang['nama_bidang'] ?>">Kepala <?= $bidang['nama_bidang'] ?></option>
                                                        <?php endif; ?>    
                                                    <?php endforeach; ?>
                                                    <?php foreach($bidangs as $bidang) : ?>
                                                        <?php $jab = "Pegawai ".$bidang['nama_bidang'];  ?>
                                                        <?php if($pegawai['jabatan'] === $jab) : ?>
                                                            <option value="Pegawai <?= $bidang['nama_bidang'] ?>" selected>Pegawai <?= $bidang['nama_bidang'] ?></option>
                                                        <?php else :?>
                                                            <option value="Pegawai <?= $bidang['nama_bidang'] ?>">Pegawai <?= $bidang['nama_bidang'] ?></option>
                                                        <?php endif; ?>  
                                                    <?php endforeach; ?>
                                                </select>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td class="daftar1">Jenis kelamin</td>
                                            <td class="daftar">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="Laki-Laki" <?= $laki ?>>
                                                <label class="form-check-label" for="gridRadios2">Laki-Laki</label>
                                                <label for=""></label>
                                                <label for=""></label>
                                                <label for=""></label>
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios1" value="Perempuan" <?= $perem ?>>
                                                <label class="form-check-label" for="gridRadios1">Perempuan</label> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="nama2">Tempat Lahir</label></td>
                                            <td class="daftar"><input type="text" value="<?= $pegawai['tempat_lahir'] ?>" name="tempat_lahir" id="nama2" class="w-100 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="nama3">Tanggal Lahir</label></td>
                                            <td class="daftar"><input type="date" value="<?= $pegawai['tgl_lahir'] ?>" name="tgl_lahir" id="nama3" class="w-100  form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1">Bidang</td>
                                            <td class="daftar">
                                                <select name="bidang" id="" class="w-100 form-select form-select-sm h-auto d-inline-block">
                                                    <option value="">--Pilih Bidang--</option>
                                                    <?php foreach($bidangs as $bidang) : ?>
                                                        <?php if($pegawai ['bidang'] === $bidang['nama_bidang']) : ?>
                                                            <option value="<?= $bidang['nama_bidang'] ?>" selected><?= $bidang['nama_bidang'] ?></option>
                                                        <?php else : ?>
                                                            <option value="<?= $bidang['nama_bidang'] ?>"><?= $bidang['nama_bidang'] ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="nama5">Alamat</label></td>
                                            <td class="daftar"><textarea class="form-control form-control-sm" name="alamat" aria-label="With textarea"><?= $pegawai['alamat'] ?></textarea><td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="nama3">Upload Foto Baru</label></td>
                                            <td class="daftar">
                                                <img src="../image/pegawai/<?= $pegawai['foto'] ?>" alt="" style="width: 150px; height: 200px;">
                                                <input type="file" name="foto" id="nama3" class="w-100 form-control form-control-sm">
                                            </td>
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