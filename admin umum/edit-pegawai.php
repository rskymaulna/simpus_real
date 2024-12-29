<?php 
include "layout/top.php";
include "layout/side.php";
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
                                <table style="font-size: 15px;">
                                    <tr>
                                        <td class="daftar1"><label for="nama">Nama</label></td>
                                        <td class="daftar"><input type="text" id="nama" class="w-100 p-3" value="Karlin"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama1">ID Pegawai</label></td>
                                        <td class="daftar"><input type="text" id="nama1" class="w-100 p-3" value="934568219054"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama4">Npwp</label></td>
                                        <td class="daftar"><input type="text" id="nama4" class="w-100 p-3" value="897327615289"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1">Jabatan</td>
                                        <td class="daftar">
                                            <select name="" id="" class="w-100 p-3 h-auto d-inline-block">
                                                <option value="">--Pilih Jabatan--</option>
                                                <option value="">Kepala Administrasi</option>
                                                <option value="" selected>Kepala Apotek</option>
                                                <option value="">Kepala Kebersihan</option>
                                                <option value="">Karyawan Administrasi</option>
                                                <option value="">Karyawan Apotek</option>
                                                <option value="">Karyawan Kebersihan</option>
                                            </select>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <td class="daftar1">Jenis kelamin</td>
                                        <td class="daftar">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">Laki-Laki</label>
                                            <label for=""></label>
                                            <label for=""></label>
                                            <label for=""></label>
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
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
                                        <td class="daftar1">Bidang</td>
                                        <td class="daftar">
                                            <select name="" id="" class="w-100 p-3 h-auto d-inline-block">
                                                <option value="">--Pilih Bidang--</option>
                                                <option value="">Administrasi</option>
                                                <option value="" selected>Apotek</option>
                                                <option value="">Kebersihan</option>
                                            </select>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="daftar">
                                            <a href="data-pegawai.html" style="text-decoration: none;">
                                                <div class="btn-daftar" >
                                                    <i class="fas fa-save"></i>
                                                    Simpan
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