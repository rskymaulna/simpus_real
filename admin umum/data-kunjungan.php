<?php 
include "layout/top.php";
include "layout/side.php";
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-location-arrow"></i>
                                Data Kunjungan
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No KTP</th>
                                            <th>No Bpjs</th>
                                            <th>Nama Pasien</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>Poli Kunjungan</th>
                                            <th>Status Pasien</th>
                                            <th>Status Kunjungan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>No KTP</th>
                                            <th>No Bpjs</th>
                                            <th>Nama Pasien</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>Poli Kunjungan</th>
                                            <th>Status Pasien</th>
                                            <th>Status Kunjungan</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>934568219054</td>
                                            <td>219864356890</td>
                                            <td>Rian</td>
                                            <td>Laki-Laki</td>
                                            <td>Masohi</td>
                                            <td>14-01-1986</td>
                                            <td>Kayu Merah Sebrang</td>
                                            <td>Poli Umum</td>
                                            <td>Bpjs</td>
                                            <td><em class="em-selesai">Selesai</em></td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="edit-kunjungan.html" class="preview-container">
                                                        <div class="edit">
                                                            <i class="fas fa-edit"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt1">
                                                            Edit data pasien
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
                                                    <a href="laporan-kunjungan.html" class="preview-container">
                                                        <div class="see">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt3">
                                                            Laporan kunjungan
                                                        </div>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>939024015791</td>
                                            <td>218432011891</td>
                                            <td>Daniel Ricardo</td>
                                            <td>Laki-Laki</td>
                                            <td>Lampung</td>
                                            <td>30-08-1995</td>
                                            <td>Sekban</td>
                                            <td>Poli Umum</td>
                                            <td>Non-Bpjs</td>
                                            <td><em class="em-selesai">Selesai</em></td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="edit-kunjungan.html" class="preview-container">
                                                        <div class="edit">
                                                            <i class="fas fa-edit"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt1">
                                                            Edit data pasien
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
                                                    <a href="laporan-kunjungan.html" class="preview-container">
                                                        <div class="see">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt3">
                                                            Laporan kunjungan
                                                        </div>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>933021972305</td>
                                            <td>372196012036</td>
                                            <td>imanuel</td>
                                            <td>Laki-Laki</td>
                                            <td>Maluku</td>
                                            <td>25-12-1999</td>
                                            <td>Brawijaya</td>
                                            <td>Poli Umum</td>
                                            <td>Bpjs</td>
                                            <td><em class="em-selesai">Selesai</em></td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="edit-kunjungan.html" class="preview-container">
                                                        <div class="edit">
                                                            <i class="fas fa-edit"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt1">
                                                            Edit data pasien
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
                                                    <a href="laporan-kunjungan.html" class="preview-container">
                                                        <div class="see">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt3">
                                                            Laporan kunjungan
                                                        </div>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>04</td>
                                            <td>932390128926</td>
                                            <td>218120915128</td>
                                            <td>Bastian</td>
                                            <td>Laki-Laki</td>
                                            <td>Timika</td>
                                            <td>30-09-2000</td>
                                            <td>Imam bonjol</td>
                                            <td>Poli Umum</td>
                                            <td>Non-Bpjs</td>
                                            <td><em class="em-selesai">Selesai</em></td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="edit-kunjungan.html" class="preview-container">
                                                        <div class="edit">
                                                            <i class="fas fa-edit"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt1">
                                                            Edit data pasien
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
                                                    <a href="laporan-kunjungan.html" class="preview-container">
                                                        <div class="see">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt3">
                                                            Laporan kunjungan
                                                        </div>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>05</td>
                                            <td>934190273110</td>
                                            <td>210329815912</td>
                                            <td>Rita</td>
                                            <td>Perempuan</td>
                                            <td>fakfak</td>
                                            <td>10-17-2003</td>
                                            <td>puncak</td>
                                            <td>Poli Umum</td>
                                            <td>Bpjs</td>
                                            <td><em class="em-selesai">Selesai</em></td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="edit-kunjungan.html" class="preview-container">
                                                        <div class="edit">
                                                            <i class="fas fa-edit"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt1">
                                                            Edit data pasien
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
                                                    <a href="laporan-kunjungan.html" class="preview-container">
                                                        <div class="see">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt3">
                                                            Laporan kunjungan
                                                        </div>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr></tr>
                                            <td>06</td>
                                            <td>932940815376</td>
                                            <td>211897563421</td>
                                            <td>Suban</td>
                                            <td>Laki-Laki</td>
                                            <td>Seram</td>
                                            <td>22-10-1980</td>
                                            <td>Danaweria</td>
                                            <td>Poli Gigi</td>
                                            <td>Bpjs</td>
                                            <td><em class="em-selesai">Selesai</em></td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="edit-kunjungan.html" class="preview-container">
                                                        <div class="edit">
                                                            <i class="fas fa-edit"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt1">
                                                            Edit data pasien
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
                                                    <a href="laporan-kunjungan.html" class="preview-container">
                                                        <div class="see">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt3">
                                                            Laporan kunjungan
                                                        </div>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>07</td>
                                            <td>931903459866</td>
                                            <td>210832974364</td>
                                            <td>Muhamad Nur Lili</td>
                                            <td>Laki-Laki</td>
                                            <td>Fakfak</td>
                                            <td>09-12-1993</td>
                                            <td>Wagom</td>
                                            <td>Poli Gigi</td>
                                            <td>Non-Bpjs</td>
                                            <td><em class="em-selesai">Selesai</em></td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="edit-kunjungan.html" class="preview-container">
                                                        <div class="edit">
                                                            <i class="fas fa-edit"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt1">
                                                            Edit data pasien
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
                                                    <a href="laporan-kunjungan.html" class="preview-container">
                                                        <div class="see">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt3">
                                                            Laporan kunjungan
                                                        </div>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>08</td>
                                            <td>934909265839</td>
                                            <td>212842048650</td>
                                            <td>Wa Yani</td>
                                            <td>Perempuan</td>
                                            <td>Ambon</td>
                                            <td>28-0781988</td>
                                            <td>Kayu Merah Sebrang</td>
                                            <td>Poli Gigi</td>
                                            <td>Bpjs</td>
                                            <td><em class="em-selesai">Selesai</em></td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="edit-kunjungan.html" class="preview-container">
                                                        <div class="edit">
                                                            <i class="fas fa-edit"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt1">
                                                            Edit data pasien
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
                                                    <a href="laporan-kunjungan.html" class="preview-container">
                                                        <div class="see">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt3">
                                                            Laporan kunjungan
                                                        </div>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>09</td>
                                            <td>934809458261</td>
                                            <td>217256126071</td>
                                            <td>La Ode Ridwan</td>
                                            <td>Laki-Laki</td>
                                            <td>Sulawesi</td>
                                            <td>30-04-1994</td>
                                            <td>Katemba Sebrang</td>
                                            <td>Poli Gigi</td>
                                            <td>Non-Bpjs</td>
                                            <td><em class="em-selesai">Selesai</em></td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="edit-kunjungan.html" class="preview-container">
                                                        <div class="edit">
                                                            <i class="fas fa-edit"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt1">
                                                            Edit data pasien
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
                                                    <a href="laporan-kunjungan.html" class="preview-container">
                                                        <div class="see">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt3">
                                                            Laporan kunjungan
                                                        </div>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>930184147174</td>
                                            <td>210275571102</td>
                                            <td>Nirmala Kutanggas</td>
                                            <td>Perempuan</td>
                                            <td>Fakfak</td>
                                            <td>25-09-1985</td>
                                            <td>Puncak</td>
                                            <td>Poli Gigi</td>
                                            <td>Bpjs</td>
                                            <td><em class="em-selesai">Selesai</em></td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="edit-kunjungan.html" class="preview-container">
                                                        <div class="edit">
                                                            <i class="fas fa-edit"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt1">
                                                            Edit data pasien
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
                                                    <a href="laporan-kunjungan.html" class="preview-container">
                                                        <div class="see">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt3">
                                                            Laporan kunjungan
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
                                <button type="button" class="btn btn-primary"><a href="data-kunjungan.html" style="color: white; text-decoration: none;">Ya</a></button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            </div>
                        </div>
                    </div>
                </div>
<?php include "layout/footer.php"; ?>