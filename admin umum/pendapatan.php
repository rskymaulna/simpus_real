<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";

date_default_timezone_set('Asia/Jakarta'); 
$hari_ini = date("Y-m-d");
$pendaptans  = tampil("SELECT * FROM pendapatan");
$pendaptanBP = tampil("SELECT * FROM kunjungan
                        INNER JOIN pasien ON kunjungan.id_pasien = pasien.id_pasien
                        INNER JOIN obat_apotek ON kunjungan.id_kunjungan = obat_apotek.id_kunjungan
                        INNER JOIN obat ON obat_apotek.id_obat = obat.id_obat
                        WHERE pasien.status_asuransi = 'BPJS'
                        AND DATE(kunjungan.waktu_kunjungan) = '$hari_ini'
                        ");
$pendaptanNP = tampil("SELECT * FROM kunjungan
                        INNER JOIN pasien ON kunjungan.id_pasien = pasien.id_pasien
                        INNER JOIN obat_apotek ON kunjungan.id_kunjungan = obat_apotek.id_kunjungan
                        INNER JOIN obat ON obat_apotek.id_obat = obat.id_obat
                        WHERE pasien.status_asuransi = 'Non-BPJS'
                        AND DATE(kunjungan.waktu_kunjungan) = '$hari_ini'
                        ");


$totalbpjs = 0;
$totalnonbpjs = 0;
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <div class="card mb-12" style="margin-top: 15px;">
                                <!-- <div class="card-header">
                                    <b>Laporan Kunjungan</b> 
                                </div> -->
                                <div class="card-body">
                                    <table class="table table-custom">
                                        <tbody>
                                            <tr>
                                                <td style="width: 15%;" colspan="2">
                                                    <table class="table table-custom table-borderless">
                                                        <tr>
                                                            <th colspan="3" style="text-align: center;">Laporan Pendapatan Puskesmas kelompok Satu</th>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="3" style="border-bottom: 1px solid gray; text-align: center;">Tanggal <?= bulan(date("d-m-Y")) ?></th>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col" style="width: 15%;">Obat yang terjual</th>
                                                            <td style="width: 1%;">:</td>
                                                            <td>
                                                                <table class="table table-custom">
                                                                    <tr>
                                                                        <td>
                                                                            Pasien BPJS
                                                                            <ul>
                                                                                <?php foreach($pendaptanBP as $pen) : ?>
                                                                                    <li><?= $pen['nama_obat'] ?><sub>(<b><?= $pen['jumlah'] ?>x</b>)</sub> - Rp. <?= $pen['jumlah'] * $pen['tarif'] ?></li>
                                                                                    <?php $totalbpjs+=($pen['jumlah'] * $pen['tarif']) ?>  
                                                                                <?php endforeach; ?>
                                                                            </ul>
                                                                        </td>
                                                                        <td>
                                                                            Pasien Non-BPJS
                                                                            <ul>
                                                                                <?php foreach($pendaptanNP as $pen) : ?>
                                                                                    <li><?= $pen['nama_obat'] ?><sub>(<b><?= $pen['jumlah'] ?>x</b>)</sub> - Rp. <?= $pen['jumlah'] * $pen['tarif'] ?></li>
                                                                                    <?php $totalnonbpjs+=($pen['jumlah'] * $pen['tarif']) ?>  
                                                                                <?php endforeach; ?>
                                                                            </ul>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jumlah Total      : <b>Rp. <?= $totalbpjs ?></b> (Rp. 0)</td>
                                                                        <td>Jumlah Total : <b>Rp. <?= $totalnonbpjs ?></b></td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col" style="width: 15%;">Tindakan medis yang dilakukan</th>
                                                            <td style="width: 1%;">:</td>
                                                            <td>
                                                                Pasien BPJS
                                                                <ul>
                                                                    <li>paracetamol - 2x</li>
                                                                </ul>
                                                                Pasien Non-BPJS
                                                                <ul>
                                                                    <li>paracetamol - 2x</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col" style="width: 15%;">Tindakan lab yang dilakukan</th>
                                                            <td style="width: 1%;">:</td>
                                                            <td>
                                                                Pasien BPJS
                                                                <ul>
                                                                    <li>paracetamol - 2x</li>
                                                                </ul>
                                                                Pasien Non-BPJS
                                                                <ul>
                                                                    <li>paracetamol - 2x</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col" style="width: 15%;">Total Pendapatan</th>
                                                            <td style="width: 1%;">:</td>
                                                            <td></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </main>
<?php include "layout/footer.php"; ?>