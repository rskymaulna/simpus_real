<?php 
include "layout/top.php";
include "layout/side.php";
?>
            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-calendar"></i>
                        Jadwal Dokter
                    </div>
                    <div class="card-body">
                        <a href="tambah-jadwal.html" style="text-decoration: none;">
                            <div class="pasien-baru">
                                <i class="fas fa-plus"></i>
                                Tambah Data
                            </div>
                        </a>
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Dokter</th>
                                    <th>Hari</th>
                                    <th>Jam Mulai</th>
                                    <th>Jam Selesai</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Dokter</th>
                                    <th>Hari</th>
                                    <th>Jam Mulai</th>
                                    <th>Jam Selesai</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Rismawati</td>
                                    <td>Senin-Jumat</td>
                                    <td>08.00</td>
                                    <td>11.30</td>
                                    <td>
                                        <div class="aksi">
                                            <a href="edit-jadwal.html" class="preview-container">
                                                <div class="edit">
                                                    <i class="fas fa-edit"></i>
                                                </div>
                                                <div class="preview-text wd-pt1">
                                                    Edit jadwal
                                                </div>
                                            </a>
                                            <a href="#" class="preview-container">
                                                <div class="delet">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </div>
                                                <div class="preview-text wd-pt2">
                                                    Hapus jadwal
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                </main>
<?php include "layout/footer.php"; ?>