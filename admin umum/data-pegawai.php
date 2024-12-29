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
                                <i class="fas fa-address-book"></i>
                                Data pegawai
                            </div>
                            <div class="card-body">
                                <a href="tambah-pegawai.html" style="text-decoration: none;">
                                    <div class="pasien-baru">
                                        <i class="fas fa-plus"></i>
                                        Tambah Data
                                    </div>
                                </a>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>ID Pegawai</th>
                                            <th>Nama Pegawai</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Npwp</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jabatan</th>
                                            <th>Bidang</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>ID Pegawai</th>
                                            <th>Nama Pegawai</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Npwp</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jabatan</th>
                                            <th>Bidang</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>934568219054</td>
                                            <td>Karlin</td>
                                            <td>Perempuan</td>
                                            <td>897327615289</td>
                                            <td>Masohi</td>
                                            <td>14-01-1986</td>
                                            <td>Kepala Apotek</td>
                                            <td>Apotek</td>
                                            <td>
                                                <div class="aksi">
                                                    <div class="aksi">
                                                        <a href="edit-pegawai.html" class="preview-container">
                                                            <div class="edit">
                                                                <i class="fas fa-edit"></i>
                                                            </div>
                                                            <div class="preview-text wd-pt1">
                                                                Edit data pegawai
                                                            </div>
                                                        </a>
                                                        <a href="#" class="preview-container" data-target="#exampleModal">
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="background-color: red; border: none; transform: scale(0.8);">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                            </button>
                                                            <div class="preview-text wd-pt2">
                                                                Hapus data
                                                            </div>
                                                        </a>
                                                        <a href="../poli umum/profil1.html" class="preview-container">
                                                            <div class="see">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </div>
                                                            <div class="preview-text wd-pt3">
                                                                Lihat profil pegawai
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            Hapus data?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary"><a href="data-pegawai.html" style="color: white; text-decoration: none;">Ya</a></button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            </div>
                        </div>
                    </div>
                </div>
<?php include "layout/footer.php"; ?>