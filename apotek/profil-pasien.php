<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";
$id  = $_GET['id'];
$idk = $_GET['idk'];
$hari_ini = date("Y-m-d");
$rekmed = tampil("SELECT * FROM rekmed 
                    INNER JOIN kunjungan ON rekmed.id_kunjungan = kunjungan.id_kunjungan 
                    INNER JOIN dokter ON rekmed.id_dokter = dokter.id_dokter 
                    INNER JOIN bidang ON kunjungan.id_bidang = bidang.id_bidang 
                    INNER JOIN pasien ON kunjungan.id_pasien = pasien.id_pasien 
                    WHERE kunjungan.id_kunjungan = $idk
                    ORDER BY rekmed.tgl_waktu DESC")[0];

$obats = tampil("SELECT * FROM obat o INNER JOIN transaksi t ON o.id_obat = t.id_obat WHERE t.id_kunjungan = $idk");


?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-2" style="margin-top: 15px;">
                            <div class="card-header">
                                <b>Rekammedis</b>  <?= bulan(date("d-m-Y", strtotime($rekmed['tgl_waktu']))) ?>
                            </div>
                            <div class="card-body">
                                <table class="table table-custom">
                                    <tbody>
                                        <tr>
                                            <td style="width: 15%;" colspan="2">
                                                <table class="table table-custom table-borderless">
                                                    <tr>
                                                        <th colspan="2" style="text-align: center;">Resep Obat Kunjungan</th>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2" style="border-bottom: 1px solid gray; text-align: center;"><?= bulan(date("d-m-Y", strtotime($rekmed['tgl_waktu']))) ?></th>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col" style="width: 15%;">Nama Pasien</th>
                                                        <td>: <?= $rekmed['nama_pasien'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col" style="width: 15%;">No Telepon</th>
                                                        <td>: <?= $rekmed['no_telp'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col" style="width: 15%;">Jenis Kelamin</th>
                                                        <td>: <?= $rekmed['jenis_kelamin'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col" style="width: 15%;">Status Asuransi</th>
                                                        <td>: <?= $rekmed['status_asuransi'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col" style="width: 15%;">Alamat</th>
                                                        <td>: <?= $rekmed['alamat'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col" style="width: 15%;">Poli Kunjungan</th>
                                                        <td>: <?= $rekmed['nama_bidang'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col" style="width: 15%;">Dokter Yang Menangani</th>
                                                        <td>: <?= $rekmed['nama_dokter'] ?></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 25%; text-align: left; padding: 15px;">Resep</th>
                                        </tr>
                                        <tr>
                                            <td>- <?= $rekmed['resep'] ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 25%;">Obat</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php foreach($obats as $obat) : ?>
                                                    <?= $obat['nama_obat'] ?>,
                                                <?php endforeach; ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type="button" class="btn btn-info btn-sm text-white" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" onclick="if(confirm('Apakah anda ingin memindahkan pasien dari antrian Apotek?')){ window.location.href='selesai.php?id=<?= $rekmed['id_kunjungan'] ?>' }"><i class="fas fa-check"></i> Tandai Sebagai Selesai</button>
                            </div>
                        </div>
                    </div>
                </main>
<?php include "layout/footer.php"; ?>