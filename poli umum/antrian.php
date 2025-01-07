<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Poli</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Umum</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-sort"></i>
                                Antrian
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nomor Antrian</th>
                                            <th>No KTP</th>
                                            <th>No Bpjs</th>
                                            <th>Nama Pasien</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>Status Berobat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nomor Antrian</th>
                                            <th>No KTP</th>
                                            <th>No Bpjs</th>
                                            <th>Nama Pasien</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>Status Berobat</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>PU-1</td>
                                            <td>322033478230</td>
                                            <td>908736521237</td>
                                            <td>Rian</td>
                                            <td>Laki-Laki</td>
                                            <td>Masohi</td>
                                            <td>14-01-1986</td>
                                            <td>Kayu Merah Sebrang</td>
                                            <td>Bpjs</td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="#" class="preview-container">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="background-color: #0dcaf0; transform: scale(0.8); border: none;">
                                                            <i class="fas fa-eye"></i>
                                                          </button>
                                                        <div class="preview-text wd-pt3">
                                                            Lihat profil 
                                                        </div>
                                                    </a>
                                                    <a href="#" class="preview-container">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="border: none; transform: scale(0.8);">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </button>
                                                        <div class="preview-text wd-pt2">
                                                            Pindahkan pasien
                                                        </div>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PU-2</td>
                                            <td>939024015791</td>
                                            <td>939024015791</td>
                                            <td>Daniel Ricardo</td>
                                            <td>Laki-Laki</td>
                                            <td>Lampung</td>
                                            <td>30-08-1995</td>
                                            <td>Sekban</td>
                                            <td>Non-Bpjs</td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="profil2.html" class="preview-container">
                                                        <div class="see">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt3">
                                                            Lihat profil 
                                                        </div>
                                                    </a>
                                                    <a href="#" class="preview-container">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="border: none; transform: scale(0.8);">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </button>
                                                        <div class="preview-text wd-pt2">
                                                            Pindahkan pasien
                                                        </div>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PU-3</td>
                                            <td>933021972305</td>
                                            <td>372196012036</td>
                                            <td>imanuel</td>
                                            <td>Laki-Laki</td>
                                            <td>Maluku</td>
                                            <td>25-12-1999</td>
                                            <td>Brawijaya</td>
                                            <td>Bpjs</td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="profil3.html" class="preview-container">
                                                        <div class="see">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt3">
                                                            Lihat profil 
                                                        </div>
                                                    </a>
                                                    <a href="#" class="preview-container">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="border: none; transform: scale(0.8);">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </button>
                                                        <div class="preview-text wd-pt2">
                                                            Pindahkan pasien
                                                        </div>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PU-4</td>
                                            <td>932390128926</td>
                                            <td>218120915128</td>
                                            <td>Bastian</td>
                                            <td>Laki-Laki</td>
                                            <td>Timika</td>
                                            <td>30-09-2000</td>
                                            <td>Imam bonjol</td>
                                            <td>Non-Bpjs</td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="profil4.html" class="preview-container">
                                                        <div class="see">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt3">
                                                            Lihat profil 
                                                        </div>
                                                    </a>
                                                    <a href="#" class="preview-container">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="border: none; transform: scale(0.8);">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </button>
                                                        <div class="preview-text wd-pt2">
                                                            Pindahkan pasien
                                                        </div>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PU-5</td>
                                            <td>934190273110</td>
                                            <td>210329815912</td>
                                            <td>Rita</td>
                                            <td>Perempuan</td>
                                            <td>fakfak</td>
                                            <td>10-17-2003</td>
                                            <td>puncak</td>
                                            <td>Bpjs</td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="profil5.html" class="preview-container">
                                                        <div class="see">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt3">
                                                            Lihat profil 
                                                        </div>
                                                    </a>
                                                    <a href="#" class="preview-container">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="border: none; transform: scale(0.8);">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </button>
                                                        <div class="preview-text wd-pt2">
                                                            Pindahkan pasien
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
                            Pindahkan dari antrian poli?
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-primary"><a href="antrian.html" style="color: white; text-decoration: none;">Ya</a></button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">alert</h5>
        </div>
        <div class="modal-body">
          Pasien belum memiliki riwayat berobat
        </div>
      </div>
    </div>
</div>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">&copy; Puskesmas Kelompok Satu 2024</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
