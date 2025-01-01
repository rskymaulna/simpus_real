<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";
if(isset($_POST['submit'])){
    if(tambahDokter($_POST) > 0){
        echo "<script>alert('Data berhasil ditambahkan !'); window.location.href='data-dokter.php';</script>";
    }
    else{
        echo "<script>alert('Data gagal ditambahkan !');</script>";
    }
}
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
                                            <td class="daftar1"><label for="nama">Nama</label></td>
                                            <td class="daftar"><input type="text" name="nama" id="nama" class="w-100 p-3 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="nama4">Nomor Induk Dokter</label></td>
                                            <td class="daftar"><input type="text" name="no_induk" id="nama4" class="w-100 p-3 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="nama4">Spesialisasi</label></td>
                                            <td class="daftar"><input type="text" name="spesialisasi" id="nama4" class="w-100 p-3 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1">ID Bidang</td>
                                            <td class="daftar">
                                                <select name="id_bidang" id="" class="w-100 p-3 h-auto d-inline-block form-select form-select-sm">
                                                    <option value="">--Pilih ID Bidang--</option>
                                                    <option value="1">Poli Umum</option>
                                                    <option value="2">Poli Gigi</option>
                                                    <option value="3">Poli KIA</option>
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
                                            <td class="daftar1"><label for="nama2">No Telepon</label></td>
                                            <td class="daftar"><input type="text" name="no_telp" id="nama2" class="w-100 p-3 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="nama2">Tempat Lahir</label></td>
                                            <td class="daftar"><input type="text" name="tempat_lahir" id="nama2" class="w-100 p-3 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="nama3">Tanggal Lahir</label></td>
                                            <td class="daftar"><input type="date" id="nama3" name="tgl_lahir" class="w-100 p-3 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="nama5">Alamat</label></td>
                                            <td class="daftar"><textarea class="form-control" name="alamat" aria-label="With textarea"></textarea><td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="nama3">Foto</label></td>
                                            <td class="daftar"><input type="file" id="nama3" name="foto" class="form-control form-control-sm"></td>
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