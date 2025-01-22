<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";
date_default_timezone_set('Asia/Jakarta'); 
$hari_ini = date("Y-m-d");

$id  = $_GET['id'];
$idk = $_GET['idk'];

$pasien  = tampil("SELECT * FROM pasien WHERE id_pasien = $id")[0];


$bidang  = tampil("SELECT * FROM kunjungan 
                    INNER JOIN bidang ON kunjungan.id_bidang = bidang.id_bidang
                    WHERE id_kunjungan = $idk")[0];


?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-2">
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
                                                            <td>: <?= $pasien['tempat_lahir'] ?>, <?= date("d-m-Y", strtotime($pasien['tgl_lahir']))?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style="width: 25%;">Alamat</th>
                                                            <td>: <?= $pasien['alamat'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style="width: 25%;">Tanggal Terdaftar</th>
                                                            <td>: <?= bulan(date("d-m-Y", strtotime($pasien['tgl_daftar']))) ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?php 
                            $cek = mysqli_query($conn, "SELECT * FROM hasil_lab
                                                        INNER JOIN tindakan_lab ON hasil_lab.id_tindakan_lab = tindakan_lab.id_tindakan_lab
                                                        INNER JOIN kunjungan ON hasil_lab.id_kunjungan = kunjungan.id_kunjungan
                                                        WHERE kunjungan.id_pasien = $id
                                                        AND DATE(kunjungan.waktu_kunjungan) = '$hari_ini'");                        
                        ?>
                        <?php if(mysqli_num_rows($cek) > 0) : ?>
                        <?php $rekmeds = tampil("SELECT * FROM hasil_lab
                                                        INNER JOIN tindakan_lab ON hasil_lab.id_tindakan_lab = tindakan_lab.id_tindakan_lab
                                                        INNER JOIN kunjungan ON hasil_lab.id_kunjungan = kunjungan.id_kunjungan
                                                        WHERE kunjungan.id_pasien = $id
                                                        AND DATE(kunjungan.waktu_kunjungan) = '$hari_ini'"); 
                        ?>    
                            <?php foreach($rekmeds as $rekmed) : ?>
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
                                                                <th colspan="2" style="text-align: center;">Laporan Hasil Tindakan Lab Puskesmas Kelompok Satu</th>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2" style="border-bottom: 1px solid gray; text-align: center;"><?= bulan(date("d-m-Y", strtotime($rekmed['tgl_waktu']))) ?></th>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col" style="width: 15%;">Nama Pasien</th>
                                                                <td>: <?= $pasien['nama_pasien'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col" style="width: 15%;">No Telepon</th>
                                                                <td>: <?= $pasien['no_telp'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col" style="width: 15%;">Jenis Kelamin</th>
                                                                <td>: <?= $pasien['jenis_kelamin'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col" style="width: 15%;">Status Asuransi</th>
                                                                <td>: <?= $pasien['status_asuransi'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col" style="width: 15%;">Alamat</th>
                                                                <td>: <?= $pasien['alamat'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col" style="width: 15%;">Poli Kunjungan</th>
                                                                <td>: <?= $bidang['nama_bidang'] ?></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width: 25%; text-align: center; padding: 15px;" colspan="2">Hasil Tindakan Lab</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width: 25%;">Tindakan</th>
                                                    <td>: <?= $rekmed['nama_tindakan_lab'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width: 25%;">Hasil Tindakan</th>
                                                    <td>: <?= $rekmed['hasil_tindakan_lab'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width: 25%;">Hasil Tindakan(Foto)</th>
                                                    <td>: 
                                                        <img src="../image/hasilLab/<?php if(!isset($rekmed['foto_lab'])){ echo('-'); }else if(isset($rekmed['foto_lab'])){ echo($rekmed['foto_lab']); } ?>" alt="" style="width: 200px; height: 300px; border-radius: 5px;">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <button type="button" class="btn btn-primary btn-sm text-white" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" onclick="window.location.href='edit-rekmed.php?idt=<?= $rekmed['id_lab'] ?>&idp=<?= $pasien['id_pasien'] ?>&idk=<?= $bidang['id_kunjungan'] ?>'"><i class="fas fa-edit"></i> Edit Tindakan Lab</button>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>   
                        <?php endif ?>   
                        
                    </div>
                </main>
<?php include "layout/footer.php"; ?>