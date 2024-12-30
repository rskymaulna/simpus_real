<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";

if(isset($_POST['submit'])){
    if(editPasien($_POST) > 0){
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
                                <i class="fas fa-table me-1"></i>
                                Pendaftaran Pasien
                            </div>
                            <div class="card-body">
                             <form action="" method="post" enctype="multipart/form-data">
                                <table class="table table-custom table-borderless" style="font-size: 15px;">
                                    <tr>
                                        <td class="daftar1"><label for="nama">Nama</label></td>
                                        <td class="daftar"><input type="text" name="nama" id="nama" class="w-100 p-3 form-control form-control-sm"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama1">No ktp</label></td>
                                        <td class="daftar"><input type="text" name="nik" id="nama1" class="w-100 p-3 form-control form-control-sm"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama1">No Telepon</label></td>
                                        <td class="daftar"><input type="text" name="no_telp" id="nama1" class="w-100 p-3 form-control form-control-sm"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama1">No Telepon Kerabat</label></td>
                                        <td class="daftar"><input type="text" name="no_telp_k" id="nama1" class="w-100 p-3 form-control form-control-sm"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1">Status Bpjs</td>
                                        <td class="daftar">
                                            <select name="asuransi" id="" class="form-select form-select-sm">
                                                <option value="">--Status Asuransi--</option>
                                                <option value="BPJS">BPJS</option>
                                                <option value="Non-BPJS">Non-BPJS</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1">Status Menikah</td>
                                        <td class="daftar">
                                            <select name="status_nikah" id="" class="form-select form-select-sm">
                                                <option value="">--Status Menikah--</option>
                                                <option value="Sudah Menikah">Sudah Menikah</option>
                                                <option value="Belum Menikah">Belum Menikah</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama4">Nomor Bpjs</label></td>
                                        <td class="daftar"><input type="text" name="no_asuransi" id="nama4" class="w-100 p-3 form-control form-control-sm"></td>
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
                                        <td class="daftar"><input type="text" name="tempat_lahir" id="nama2" class="w-100 p-3 form-control form-control-sm"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama3">Tanggal Lahir</label></td>
                                        <td class="daftar"><input type="date" name="tgl_lahir" id="nama3" class="w-100 p-3 form-control form-control-sm"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama5">Alamat</label></td>
                                        <td class="daftar"><textarea class="form-control form-control-sm" name="alamat" aria-label="With textarea"></textarea><td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama3">Foto</label></td>
                                        <td class="daftar"><input type="file" name="foto" id="nama3" class="form-control form-control-sm"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="daftar">
                                            <button type="submit" name="submit" class="btn btn-custom btn-success btn-sm"><i class="fa-solid fa-share-from-square"></i>Daftar</button>
                                        </td>
                                    </tr>
                                </table>
                             </form>   
                            </div>
                        </div>
                    </div>
                </main>
<?php include "layout/footer.php"; ?>