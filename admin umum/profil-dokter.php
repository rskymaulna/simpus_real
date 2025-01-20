<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";
$id = $_GET['id'];
otomatisasiKodeDokter();
$dokter     = tampil("SELECT * FROM dokter WHERE id_dokter = $id")[0];
$id_bidang  = $dokter['id_bidang'];
$bidang     = tampil("SELECT nama_bidang FROM  bidang WHERE id_bidang = $id_bidang")[0];

?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-2">
                            <div class="card-header">
                                <i class="fas fa-stethoscope"></i>
                                Profil Dokter
                            </div>
                            <div class="card-body">
                                <table class="table table-custom table-borderless">
                                    <tbody>
                                        <tr>
                                            <?php if($dokter['foto'] === '') : ?>
                                                <th style="width: 25%;" valign="center"><center><img src="../image/user 1.png" alt="" style="width: 200px; height: 300px; border-radius: 5px;"></center></th>
                                            <?php else : ?>
                                                <th style="width: 25%;" valign="center"><center><img src="../image/dokter/<?= $dokter['foto'] ?>" alt="" style="width: 200px; height: 300px; border-radius: 5px;"></center></th>
                                            <?php endif; ?> 
                                            <!-- <th style="width: 25%;" valign="center"><center><img src="../image/dokter/<?= $dokter['foto'] ?>" alt="" style="width: 200px; height: 300px; border-radius: 5px;"></center></th> -->
                                            <td>
                                                <table class="table table-custom">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="col" style="width: 25%;">Nama Dokter</th>
                                                            <td>: <?= $dokter['nama_dokter'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style="width: 25%;">Kode Dokter</th>
                                                            <td>: <?= $dokter['kode_dokter'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style="width: 25%;">Poli</th>
                                                            <td>: <?= $bidang['nama_bidang'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style="width: 25%;">No Induk Dokter</th>
                                                            <td>: <?= $dokter['no_induk_dokter'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style="width: 25%;">Spesialisasi</th>
                                                            <td>: <?= $dokter['spesialisasi'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style="width: 25%;">No Telepon</th>
                                                            <td>: <?= $dokter['no_telp'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style="width: 25%;">Tempat Tanggal Lahir</th>
                                                            <td>: <?= $dokter['tempat_lahir'] ?>, <?= date("d-m-Y", strtotime($dokter['tgl_lahir']))?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style="width: 25%;">Alamat</th>
                                                            <td>: <?= $dokter['alamat'] ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="edit-dokter2.php?id=<?= $dokter['id_dokter'] ?>" class="preview-container">
                                                    <button type="button" class="btn btn-primary btn-sm text-white" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                        <i class="fas fa-edit"></i>
                                                        Edit Data Dokter
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
<?php include "layout/footer.php"; ?>