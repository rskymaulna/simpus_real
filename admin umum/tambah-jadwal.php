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
                                <i class="fas fa-plus"></i>
                                Tambah Jadwal Dokter
                            </div>
                            <div class="card-body">
                                <table style="font-size: 15px;">
                                    <tr>
                                        <td class="daftar1"><label for="nama1">Nama Dokter</label></td>
                                        <td class="daftar"><input type="text" id="nama1"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama33">Hari</label></td>
                                        <td class="daftar"><input type="text" id="nama33"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama2">Jam Mulai</label></td>
                                        <td class="daftar"><input type="text" id="nama2"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama3">Jam Selesai</label></td>
                                        <td class="daftar"><input type="text" id="nama3"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="daftar">
                                            <a href="jadwal-dokter.html" style="text-decoration: none;">
                                                <div class="btn-daftar" >
                                                    <i class="fas fa-save"></i>
                                                    <div class="text-simpan">Simpan</div>
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