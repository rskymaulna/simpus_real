<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";
$id     = $_GET['id'];
$pasien = tampil("SELECT * FROM pasien WHERE id_pasien = $id")[0];

//menentukan selected item dari status asuransi
$status_asuransi = ['BPJS', 'Non-BPJS'];
for($i = 0; $i < count($status_asuransi); $i++){
    ($pasien['status_asuransi'] === $status_asuransi[$i]) ? $status_asuransi[$i] = "selected" : $status_asuransi[$i] = "";
}
$bpjs     = $status_asuransi[0];
$non_bpjs = $status_asuransi[1];

//menentukan selected item dari status menikah
$status_menikah = ['Sudah Menikah', 'Belum Menikah'];
for($i = 0; $i < count($status_menikah); $i++){
    ($pasien['status_pernikahan'] === $status_menikah[$i]) ? $status_menikah[$i] = "selected" : $status_menikah[$i] = "";
}
$sudah = $status_menikah[0];
$belum = $status_menikah[1];

//menentukan checked item dari jenis kelamin
$jenis_kelamin = ['Laki-Laki', 'Perempuan'];
for($i = 0; $i < count($jenis_kelamin); $i++){
    ($pasien['jenis_kelamin'] === $jenis_kelamin[$i]) ? $jenis_kelamin[$i] = "checked" : $jenis_kelamin[$i] = "";
}
$laki  = $jenis_kelamin[0];
$perem = $jenis_kelamin[1];

if(isset($_POST['submit'])){
    if(editPasien($id, $_POST) > 0){
        echo "<script>
                    alert('Data berhasil diubah !');
                    window.location.href='data-pendaftaran.php';
                </script>";
    }else {
        echo "<script>
                    alert('Data gagal diubah !');
                </script>";
    }
}
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fa-solid fa-pen-to-square"></i>
                                Ubah Data Pasien
                            </div>
                            <div class="card-body">
                             <form action="" method="post" enctype="multipart/form-data">
                                <table class="table table-custom table-borderless" style="font-size: 15px;">
                                    <input type="hidden" name="foto lama" value="<?= $pasien['foto'] ?>">
                                    <tr>
                                        <td class="daftar1"><label for="nama">Nama</label></td>
                                        <td class="daftar"><input type="text" value="<?= $pasien['nama_pasien'] ?>" name="nama" id="nama" class="w-100 p-3 form-control form-control-sm"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama1">No ktp</label></td>
                                        <td class="daftar"><input type="text" value="<?= $pasien['nik'] ?>" name="nik" id="nama1" class="w-100 p-3 form-control form-control-sm"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama1">No Telepon</label></td>
                                        <td class="daftar"><input type="text" value="<?= $pasien['no_telp'] ?>" name="no_telp" id="nama1" class="w-100 p-3 form-control form-control-sm"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama1">No Telepon Kerabat</label></td>
                                        <td class="daftar"><input type="text" value="<?= $pasien['no_telp_kerabat'] ?>" name="no_telp_k" id="nama1" class="w-100 p-3 form-control form-control-sm"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1">Status Bpjs</td>
                                        <td class="daftar">
                                            <select name="asuransi" id="" class="form-select form-select-sm">
                                                <option value="">--Status Asuransi--</option>
                                                <option value="BPJS" <?= $bpjs ?>>BPJS</option>
                                                <option value="Non-BPJS" <?= $non_bpjs ?>>Non-BPJS</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1">Status Menikah</td>
                                        <td class="daftar">
                                            <select name="status_nikah" id="" class="form-select form-select-sm">
                                                <option value="">--Status Menikah--</option>
                                                <option value="Sudah Menikah" <?= $sudah ?>>Sudah Menikah</option>
                                                <option value="Belum Menikah" <?= $belum ?>>Belum Menikah</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama4">Nomor Bpjs</label></td>
                                        <td class="daftar"><input type="text" value="<?= $pasien['no_asuransi'] ?>" name="no_asuransi" id="nama4" class="w-100 p-3 form-control form-control-sm"></td>
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
                                        <td class="daftar"><input type="text" value="<?= $pasien['tempat_lahir'] ?>" name="tempat_lahir" id="nama2" class="w-100 p-3 form-control form-control-sm"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama3">Tanggal Lahir</label></td>
                                        <td class="daftar"><input type="date" value="<?= $pasien['tgl_lahir'] ?>" name="tgl_lahir" id="nama3" class="w-100 p-3 form-control form-control-sm"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama5">Alamat</label></td>
                                        <td class="daftar"><textarea class="form-control form-control-sm" name="alamat" aria-label="With textarea"><?= $pasien['alamat'] ?></textarea><td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama3">Upload Foto Baru</label></td>
                                        <td class="daftar">
                                            <img src="../image/pasien/<?= $pasien['foto'] ?>" alt="foto pasien" style="height: 200px; width: 150px;">
                                            <input type="file" name="foto" id="nama3" class="form-control form-control-sm">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="daftar">
                                            <button type="submit" name="submit" class="btn btn-custom btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i>Ubah</button>
                                        </td>
                                    </tr>
                                </table>
                             </form>   
                            </div>
                        </div>
                    </div>
                </main>
<?php include "layout/footer.php"; ?>