<?php 
include "layout/top.php";
include "layout/side.php";
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-stethoscope"></i>
                                Data Dokter
                            </div>
                            <div class="card-body">
                                <a href="tambah-dokter.html" style="text-decoration: none;">
                                    <div class="pasien-baru">
                                        <i class="fas fa-plus"></i>
                                        Tambah Data
                                    </div>
                                </a>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Dokter</th>
                                            <th>Nama Dokter</th>
                                            <th>Jenis kelamin</th>
                                            <th>Nomor Induk Dokter</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>ID Poli</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Dokter</th>
                                            <th>Nama Dokter</th>
                                            <th>Jenis kelamin</th>
                                            <th>Nomor Induk Dokter</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>ID Poli</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>PUD-1</td>
                                            <td>Rismawati</td>
                                            <td>Perempuan</td>
                                            <td>923045812347</td>
                                            <td>Masohi</td>
                                            <td>14-01-1986</td>
                                            <td>Kayu Merah Sebrang</td>
                                            <td>Poli Umum</td>
                                            <td>
                                                <div class="aksi">
                                                    <div class="aksi">
                                                        <a href="edit-dokter.html" class="preview-container">
                                                            <div class="edit">
                                                                <i class="fas fa-edit"></i>
                                                            </div>
                                                            <div class="preview-text wd-pt1">
                                                                Edit data dokter
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
                                                        <a href="profil-dokter.html" class="preview-container">
                                                            <div class="see">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </div>
                                                            <div class="preview-text wd-pt3">
                                                                Lihat profil dokter
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>PUD-2</td>
                                            <td>Anien</td>
                                            <td>Perempuan</td>
                                            <td>923045812347</td>
                                            <td>Marley</td>
                                            <td>14-01-1986</td>
                                            <td>Kayu Merah Sebrang</td>
                                            <td>Poli Umum</td>
                                            <td>
                                                <div class="aksi">
                                                    <div class="aksi">
                                                        <a href="edit-dokter2.html" class="preview-container">
                                                            <div class="edit">
                                                                <i class="fas fa-edit"></i>
                                                            </div>
                                                            <div class="preview-text wd-pt1">
                                                                Edit data dokter
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
                                                        <a href="profil-dokter2.html" class="preview-container">
                                                            <div class="see">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </div>
                                                            <div class="preview-text wd-pt3">
                                                                Lihat profil dokter
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>PKD-1</td>
                                            <td>Anton Cahyo</td>
                                            <td>Laki-Laki</td>
                                            <td>926754309875</td>
                                            <td>Semarang</td>
                                            <td>13-01-1988</td>
                                            <td>Wagom Gunung</td>
                                            <td>Poli KIA</td>
                                            <td>
                                                <div class="aksi">
                                                    <div class="aksi">
                                                        <a href="edit-dokter3.html" class="preview-container">
                                                            <div class="edit">
                                                                <i class="fas fa-edit"></i>
                                                            </div>
                                                            <div class="preview-text wd-pt1">
                                                                Edit data dokter
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
                                                        <a href="profil-dokter3.html" class="preview-container">
                                                            <div class="see">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </div>
                                                            <div class="preview-text wd-pt3">
                                                                Lihat profil dokter
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>PKD-2</td>
                                            <td>Annie Leonhart</td>
                                            <td>Perempuan</td>
                                            <td>925674893124</td>
                                            <td>Marley</td>
                                            <td>17-02-1995</td>
                                            <td>Pasir Putih</td>
                                            <td>Poli KIA</td>
                                            <td>
                                                <div class="aksi">
                                                    <div class="aksi">
                                                        <a href="edit-dokter4.html" class="preview-container">
                                                            <div class="edit">
                                                                <i class="fas fa-edit"></i>
                                                            </div>
                                                            <div class="preview-text wd-pt1">
                                                                Edit data dokter
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
                                                        <a href="profil-dokter4.html" class="preview-container">
                                                            <div class="see">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </div>
                                                            <div class="preview-text wd-pt3">
                                                                Lihat profil dokter
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>PGD-1</td>
                                            <td>Eren Yeager</td>
                                            <td>Laki-Laki</td>
                                            <td>923367529073</td>
                                            <td>Siganshina</td>
                                            <td>20-10-1997</td>
                                            <td>Kayu Besi, Sebrang</td>
                                            <td>Poli Gigi</td>
                                            <td>
                                                <div class="aksi">
                                                    <div class="aksi">
                                                        <a href="edit-dokter5.html" class="preview-container">
                                                            <div class="edit">
                                                                <i class="fas fa-edit"></i>
                                                            </div>
                                                            <div class="preview-text wd-pt1">
                                                                Edit data dokter
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
                                                        <a href="profil-dokter5.html" class="preview-container">
                                                            <div class="see">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </div>
                                                            <div class="preview-text wd-pt3">
                                                                Lihat profil dokter
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>PGD-2</td>
                                            <td>Josep Stallin</td>
                                            <td>Laki-Laki</td>
                                            <td>927786512432</td>
                                            <td>Georgia</td>
                                            <td>18-12-1978</td>
                                            <td>Jalan Kokas</td>
                                            <td>Poli Gigi</td>
                                            <td>
                                                <div class="aksi">
                                                    <div class="aksi">
                                                        <a href="edit-dokter6.html" class="preview-container">
                                                            <div class="edit">
                                                                <i class="fas fa-edit"></i>
                                                            </div>
                                                            <div class="preview-text wd-pt1">
                                                                Edit data dokter
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
                                                        <a href="profil-dokter6.html" class="preview-container">
                                                            <div class="see">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </div>
                                                            <div class="preview-text wd-pt3">
                                                                Lihat profil dokter
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
                                <button type="button" class="btn btn-primary"><a href="data-dokter.html" style="color: white; text-decoration: none;">Ya</a></button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            </div>
                        </div>
                    </div>
                </div>
<?php include "layout/footer.php"; ?>