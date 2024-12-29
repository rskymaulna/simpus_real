<?php 
include "layout/top.php";
include "layout/side.php";
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-sign-in"></i>
                                Data Pendaftaran
                            </div>
                            <div class="card-body">
                                <a class="link-p-baru" href="daftar.html">
                                    <div class="pasien-baru">
                                        <i class="fa-solid fa-plus"></i>
                                        <div class="text-p-baru">
                                            Pasien Baru
                                        </div>
                                    </div>
                                </a>
                                <table id="datatablesSimple">
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
                                            <td>00001</td>
                                            <td>934568219054</td>
                                            <td>219864356890</td>
                                            <td>Rian</td>
                                            <td>Laki-Laki</td>
                                            <td>Masohi</td>
                                            <td>14-01-1986</td>
                                            <td>Kayu Merah Sebrang</td>
                                            <td>Bpjs</td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="#">
                                                        <select name="" id="" class="w-auto p-3">
                                                            <option value="">--Poli Tujuan--</option>
                                                            <option value="">Poli Umum</option>
                                                            <option value="">Poli Gigi</option>
                                                            <option value="">Poli KIA</option>
                                                        </select>
                                                    </a>
                                                    <a href="../poli umum/antrian.html" class="preview-container">
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
                                            <td>00001</td>
                                            <td>934568219054</td>
                                            <td>219864356890</td>
                                            <td>Daniel Ricardo</td>
                                            <td>Laki-Laki</td>
                                            <td>Lampung</td>
                                            <td>14-01-1986</td>
                                            <td>Sekban</td>
                                            <td>Bpjs</td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="#">
                                                        <select name="" id="" class="w-auto p-3">
                                                            <option value="">--Poli Tujuan--</option>
                                                            <option value="">Poli Umum</option>
                                                            <option value="">Poli Gigi</option>
                                                            <option value="">Poli KIA</option>
                                                        </select>
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
                            Pindahkan ke antrian poli?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary"><a href="data-pendaftaran.html" style="color: white; text-decoration: none;">Ya</a></button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            </div>
                        </div>
                    </div>
                </div>
<?php include "layout/footer.php"; ?>