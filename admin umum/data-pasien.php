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
                                Data Pasien
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple"  class="table table-custom table-bordered table-sm table-striped">
                                    <thead>
                                        <tr>
                                            <th>No Rekamedis</th>
                                            <th>No KTP</th>
                                            <th>No Bpjs</th>
                                            <th>Nama Pasien</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>Status Pasien</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No Rekamedis</th>
                                            <th>No KTP</th>
                                            <th>No Bpjs</th>
                                            <th>Nama Pasien</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>Status Pasien</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>00031</td>
                                            <td>934568219054</td>
                                            <td>219864356890</td>
                                            <td>Rian</td>
                                            <td>Laki-Laki</td>
                                            <td>Masohi</td>
                                            <td>14-01-1986</td>
                                            <td>Kayu Merah, Sebrang</td>
                                            <td>Bpjs</td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="edit-pasien.html" class="preview-container">
                                                        <button type="button" class="btn btn-primary btn-sm text-white">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        <div class="preview-text wd-pt1">
                                                            Edit data pasien
                                                        </div>
                                                    </a>
                                                    <a href="#" class="preview-container">
                                                        <button type="button" class="btn btn-danger btn-sm">
                                                            <i class="fa-solid fa-trash-can"></i>
                                                        </button>
                                                        <div class="preview-text wd-pt2">
                                                            Hapus data pasien
                                                        </div>
                                                    </a>
                                                    <a href="../poli umum/profil1.html" class="preview-container">
                                                        <button type="button" class="btn btn-info btn-sm text-light">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </button>
                                                        <div class="preview-text wd-pt3">
                                                            Lihat data pasien
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
                                <button type="button" class="btn btn-primary"><a href="data-pasien.html" style="color: white; text-decoration: none;">Ya</a></button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            </div>
                        </div>
                    </div>
                </div>
<?php include "layout/footer.php"; ?>