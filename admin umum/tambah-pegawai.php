<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";
if(isset($_POST['submit'])){
    if(tambahPegawai($_POST) > 0){
        echo "<script>alert('Data berhasil ditambahkan !'); window.location.href='data-pegawai.php';</script>";
    }
    else{
        echo "<script>alert('Data gagal ditambahkan !');</script>";
    }
}

if(mysqli_error($conn)){
    var_dump(mysqli_error($conn));
}


$bidangs = tampil("SELECT * FROM bidang WHERE id_bidang BETWEEN 5 AND 7");
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-plus"></i>
                                Tambah Data Pegawai
                            </div>
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <table class="table table-borderless table-custom">
                                        <tr>
                                            <td class="daftar1"><label for="nama">Nama</label></td>
                                            <td class="daftar"><input type="text" name="nama" id="nama" class="w-100 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="nama4">Npwp</label></td>
                                            <td class="daftar"><input type="text" name="npwp" id="nama4" class="w-100 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1">Jabatan</td>
                                            <td class="daftar">
                                                <select name="jabatan" id="" class="w-100 h-auto d-inline-block form-select form-select-sm">
                                                    <option value="">--Pilih Jabatan--</option>
                                                    <?php foreach($bidangs as $bidang) : ?>
                                                        <option value="Kepala <?= $bidang['nama_bidang'] ?>">Kepala <?= $bidang['nama_bidang'] ?></option>
                                                    <?php endforeach; ?>
                                                    <?php foreach($bidangs as $bidang) : ?>
                                                        <option value="Pegawai <?= $bidang['nama_bidang'] ?>">Pegawai <?= $bidang['nama_bidang'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td class="daftar1">Jenis kelamin</td>
                                            <td class="daftar">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="Laki-Laki">
                                                <label class="form-check-label" for="gridRadios2">Laki-Laki</label>
                                                <label for=""></label>
                                                <label for=""></label>
                                                <label for=""></label>
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios1" value="Perempuan">
                                                <label class="form-check-label" for="gridRadios1">Perempuan</label> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="nama2">Tempat Lahir</label></td>
                                            <td class="daftar"><input type="text"  name="tempat_lahir" id="nama2" class="w-100 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="nama3">Tanggal Lahir</label></td>
                                            <td class="daftar"><input type="date" name="tgl_lahir" id="nama3" class="w-100  form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1">Bidang</td>
                                            <td class="daftar">
                                                <select name="bidang" id="" class="w-100 form-select form-select-sm h-auto d-inline-block">
                                                    <option value="">--Pilih Bidang--</option>
                                                    <?php foreach($bidangs as $bidang) : ?>
                                                        <option value="<?= $bidang['nama_bidang'] ?>"><?= $bidang['nama_bidang'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="nama5">Alamat</label></td>
                                            <td class="daftar"><textarea class="form-control form-control-sm" name="alamat" aria-label="With textarea"></textarea><td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="nama3">Foto</label></td>
                                            <td class="daftar"><input type="file" name="foto" id="nama3" class="w-100 form-control form-control-sm"></td>
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