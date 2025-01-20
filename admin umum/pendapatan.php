<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";

$pendaptan = tampil("SELECT * FROM pendapatan");

?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <div class="card mb-12" style="margin-top: 15px;">
                                <div class="card-header">
                                    <b>Laporan Kunjungan</b>  <?= bulan(date("d-m-Y", strtotime($rekmed['tgl_waktu']))) ?>
                                </div>
                                <div class="card-body">
                                    <table class="table table-custom">
                                        <tbody>
                                            <tr>
                                                <td style="width: 15%;" colspan="2">
                                                    <table class="table table-custom table-borderless">
                                                        <tr>
                                                            <th colspan="2" style="text-align: center;">Laporan Rekammedis Pasien</th>
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
                                                <th scope="row" style="width: 25%; text-align: center; padding: 15px;" colspan="2">Rekammedis</th>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Keluhan Pasien</th>
                                                <td>: <?= $rekmed['keluhan'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Riwayat Penyakit Sekarang</th>
                                                <td>: <?= $rekmed['riwayat_penyakit_sekarang'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Riwayat Penyakit Dahulu</th>
                                                <td>: <?= $rekmed['riwayat_penyakit_dahulu'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Diagnosa</th>
                                                <td>: <?= $rekmed['diagnosis'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Tindakan</th>
                                                <td>: <?= $rekmed['nama_tindakan'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Hasil Tindakan</th>
                                                <td>: <?= $rekmed['hasil_tindakan'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Resep Obat</th>
                                                <td>: <?= $rekmed['resep'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Catatan Dokter</th>
                                                <td>: <?= $rekmed['catatan'] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </main>
<?php include "layout/footer.php"; ?>