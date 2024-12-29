<?php 
include "layout/top.php";
include "layout/side.php";
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
                                <table style="font-size: 15px;">
                                    <tr>
                                        <td class="daftar1"><label for="nama">Nama</label></td>
                                        <td class="daftar"><input type="text" id="nama" class="w-100 p-3"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama1">Kode Dokter</label></td>
                                        <td class="daftar"><input type="text" id="nama1" class="w-100 p-3"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama4">Nomor Induk Dokter</label></td>
                                        <td class="daftar"><input type="text" id="nama4" class="w-100 p-3"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1">ID Poli</td>
                                        <td class="daftar">
                                            <select name="" id="" class="w-100 p-3 h-auto d-inline-block">
                                                <option value="">--Pilih ID Poli--</option>
                                                <option value="">Poli Umum</option>
                                                <option value="">Poli Gigi</option>
                                                <option value="">Poli KIA</option>
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
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                                            <label class="form-check-label" for="gridRadios1">Perempuan</label> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama2">Tempat Lahir</label></td>
                                        <td class="daftar"><input type="text" id="nama2" class="w-100 p-3"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama3">Tanggal Lahir</label></td>
                                        <td class="daftar"><input type="date" id="nama3" class="w-100 p-3"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama5">Alamat</label></td>
                                        <td class="daftar"><textarea class="form-control" aria-label="With textarea"></textarea><td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="daftar">
                                            <a href="data-dokter.html" style="text-decoration: none;">
                                                <div class="btn-daftar" >
                                                    <i class="fas fa-plus"></i>
                                                    Tambah
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