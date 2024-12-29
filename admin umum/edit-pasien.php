<?php 
include "layout/top.php";
include "layout/side.php";
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Admin</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Umum</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-edit"></i>
                                Edit Data Pasien
                            </div>
                            <div class="card-body">
                                <table style="font-size: 15px;">
                                    <tr>
                                        <td class="daftar1"><label for="nama">Nama</label></td>
                                        <td class="daftar"><input type="text" id="nama" class="w-100 p-3" value="Rian"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama1">No ktp</label></td>
                                        <td class="daftar"><input type="text" id="nama1" class="w-100 p-3" value="934568219054"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1">Status Bpjs</td>
                                        <td class="daftar">
                                            <select name="" id="" class="w-100 p-3 h-auto d-inline-block">
                                                <option value="">--Pilih Status Bpjs--</option>
                                                <option value="" selected>BPJS</option>
                                                <option value="">Non-Bpjs</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama4">Nomor Bpjs</label></td>
                                        <td class="daftar"><input type="text" id="nama4" class="w-100 p-3" value="219864356890"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1">Jenis kelamin</td>
                                        <td class="daftar">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2" checked>
                                            <label class="form-check-label" for="gridRadios2">Laki-Laki</label>
                                            <label for=""></label>
                                            <label for=""></label>
                                            <label for=""></label>
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                                            <label class="form-check-label" for="gridRadios1">Perempuan</label> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama2">Tempat Lahir</label></td>
                                        <td class="daftar"><input type="text" id="nama2" class="w-100 p-3" value="Masohi"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama3">Tanggal Lahir</label></td>
                                        <td class="daftar"><input type="date" id="nama3" class="w-100 p-3" value="1986-01-14"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama5">Alamat</label></td>
                                        <td class="daftar"><textarea class="form-control" aria-label="With textarea">Kayu Merah, Sebrang</textarea><td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="daftar">
                                            <a href="data-pasien.html" style="text-decoration: none;">
                                                <div class="btn-daftar" >
                                                    <i class="fas fa-save"></i>
                                                    simpan
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
<?php include "layout/footer.php"; ?>