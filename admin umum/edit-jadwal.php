<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";
if(isset($_POST['submit'])){
    if(tambahJadwalDokter($_POST) > 0){
        echo "<script>alert('Data berhasil ditambahkan !'); window.location.href='jadwal-dokter.php';</script>";
    }
    else{
        echo "<script>alert('Data gagal ditambahkan !');</script>";
    }
}

if(mysqli_error($conn)){
    var_dump(mysqli_error($conn));
}

$id = $_GET['id'];
$jadwal = tampil("SELECT dokter.nama_dokter, bidang.nama_bidang, jadwal_dokter.id_dokter, jadwal_dokter.id_bidang, jadwal_dokter.id_jadwal, jadwal_dokter.hari, jadwal_dokter.jam_mulai, jadwal_dokter.jam_selesai 
                    FROM jadwal_dokter 
                    INNER JOIN dokter ON jadwal_dokter.id_dokter = dokter.id_dokter
                    INNER JOIN bidang ON jadwal_dokter.id_bidang = bidang.id_bidang
                    WHERE id_jadwal = $id")[0];

$dokters = tampil("SELECT * FROM dokter");
$bidangs = tampil("SELECT * FROM bidang");
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-plus"></i>
                                Tambah Data Dokter
                            </div>
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <table style="font-size: 15px;" class="table table-custom table-borderless">
                                        <tr>
                                            <td class="daftar1">Dokter</td>
                                            <td class="daftar">
                                                <select name="nama_dokter" id="" class="w-100 h-auto d-inline-block form-select form-select-sm">
                                                    <option value="">--Pilih Dokter--</option>
                                                    <?php foreach($dokters as $dokter) : ?>
                                                        <?php if($dokter['id_dokter'] === $jadwal['id_dokter']) : ?>
                                                            <option value="<?= $dokter['id_dokter'] ?>" selected><?= $dokter['nama_dokter'] ?></option>
                                                        <?php else :?>
                                                            <option value="<?= $dokter['id_dokter'] ?>"><?= $dokter['nama_dokter'] ?></option>
                                                        <?php endif; ?>    
                                                    <?php endforeach; ?>
                                                </select>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td class="daftar1">Poli</td>
                                            <td class="daftar">
                                                <select name="nama_bidang" id="" class="w-100 h-auto d-inline-block form-select form-select-sm">
                                                    <option value="">--Pilih Poli--</option>
                                                    <?php foreach($bidangs as $bidang) : ?>
                                                        <option value="<?= $bidang['id_bidang'] ?>"><?= $bidang['nama_bidang'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="hari">Hari</label></td>
                                            <td class="daftar"><input type="text" name="hari" id="hari" class="w-100 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="jam1">Jam Mulai</label></td>
                                            <td class="daftar"><input type="time" name="jam_mulai" id="jam1" class="w-100 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="jam2">Jam Selesai</label></td>
                                            <td class="daftar"><input type="time" name="jam_selesai" id="jam2" class="w-100 form-control form-control-sm"></td>
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