<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";
$id = $_GET['id'];

$pasien  = tampil("SELECT * FROM pasien WHERE id_pasien = $id")[0];
$rekmeds = tampil("SELECT * FROM kunjungan 
                    INNER JOIN pasien ON kunjungan.id_pasien = pasien.id_pasien 
                    INNER JOIN rekmed ON kunjungan.id_kunjungan = rekmed.id_kunjungan
                    INNER JOIN dokter ON rekmed.id_dokter = dokter.id_dokter 
                    INNER JOIN tindakan ON rekmed_umum.id_tindakan = tindakan.id_tindakan 
                    INNER JOIN bidang ON rekmed_umum.id_bidang = bidang.id_bidang 
                    WHERE pasien.id_pasien = $id");

                    eror();
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-12">
                            <div class="card-header">
                                <i class="fas fa-user"></i>
                                Profil pasien
                            </div>
                            <div class="card-body">
                                <table class="table table-custom table-borderless">
                                    <tbody>
                                        <tr>
                                            <th style="width: 25%;" valign="center"><center><img src="../image/pasien/<?= $pasien['foto'] ?>" alt="" style="width: 200px; height: 300px; border-radius: 5px;"></center></th>
                                            <td>
                                                <table class="table table-custom">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="col" style="width: 25%;">Nama Pasien</th>
                                                            <td>: <?= $pasien['nama_pasien'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style="width: 25%;">Status Asuransi</th>
                                                            <td>: <?= $pasien['status_asuransi'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style="width: 25%;">No Bpjs</th>
                                                            <td>: <?= $pasien['no_asuransi'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style="width: 25%;">No Telepon</th>
                                                            <td>: <?= $pasien['no_telp'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style="width: 25%;">No Telepon Kerabat</th>
                                                            <td>: <?= $pasien['no_telp_kerabat'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style="width: 25%;">No KTP</th>
                                                            <td>: <?= $pasien['nik'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style="width: 25%;">Status Pernikahan</th>
                                                            <td>: <?= $pasien['status_pernikahan'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style="width: 25%;">Jenis Kelamin</th>
                                                            <td>: <?= $pasien['jenis_kelamin'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style="width: 25%;">Tempat Tanggal Lahir</th>
                                                            <td>: <?= $pasien['tempat_lahir'] ?>, <?= bulan(date("d-m-Y", strtotime($pasien['tgl_lahir']))) ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style="width: 25%;">Alamat</th>
                                                            <td>: <?= $pasien['alamat'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style="width: 25%;">Tanggal Terdaftar</th>
                                                            <td>: <?=bulan(date("d-m-Y", strtotime($pasien['tgl_daftar']))) ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?php foreach($rekmeds as $rekmed) : ?>
                            <div class="card mb-12" style="margin-top: 15px;">
                                <div class="card-header">
                                    <b>Rekammedis Kunjungan </b>  <?= bulan(date("d-m-Y", strtotime($rekmed['tgl_waktu']))) ?>
                                </div>
                                <div class="card-body">
                                    <table class="table table-custom">
                                        <tbody>
                                            <tr>
                                                <th scope="col" style="width: 25%;">Poli Kunjungan</th>
                                                <td>: <?= $rekmed['nama_bidang'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col" style="width: 25%;">Dokter Yang Menangani</th>
                                                <td>: <?= $rekmed['nama_dokter'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Keluhan Pasien</th>
                                                <td>: <?= $rekmed['keluhan'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Pemeriksaan Fisik</th>
                                                <td>
                                                    <table class="table table-custom">
                                                        <tr>
                                                            <th scope="row" style="width: 25%;">Tekanan Darah</th>
                                                            <td>: <?= $rekmed['tekanan_darah'] ?> mmhg</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style="width: 25%;">Denyut Nadi</th>
                                                            <td>: <?= $rekmed['denyut_nadi'] ?> kali per menit</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style="width: 25%;">Suhu Tubuh</th>
                                                            <td>: <?= $rekmed['suhu_tubuh'] ?> C</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Diagnosa</th>
                                                <td>: <?= $rekmed['diagnosis'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Tindakan Yang Diberikan</th>
                                                <td>: <?= $rekmed['nama_tindakan'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Obat Yang Diberikan</th>
                                                <td>: <?= $rekmed['nama_obat'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Catatan Dokter</th>
                                                <td>: <?= $rekmed['catatan'] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button type="button" onclick="window.location.href='edit-rekmed.php?id=<?= $rekmed['id_rekmed'] ?>&&idp=<?= $rekmed['id_pasien'] ?>'" class="btn btn-primary btn-sm text-white" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        <i class="fas fa-edit"></i> Edit Rekammedis
                                    </button>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </main>
<?php include "layout/footer.php"; ?>