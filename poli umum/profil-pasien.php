<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";
$id = $_GET['id'];

$pasien = tampil("SELECT * FROM pasien WHERE id_pasien = $id")[0];
$rekmeds = tampil("SELECT * FROM kunjungan 
                    INNER JOIN pasien ON kunjungan.id_pasien = pasien.id_pasien 
                    INNER JOIN rekmed ON kunjungan.id_kunjungan = rekmed.id_kunjungan
                    INNER JOIN dokter ON rekmed.id_dokter = dokter.id_dokter 
                    LEFT JOIN tindakan ON rekmed.id_tindakan = tindakan.id_tindakan 
                    INNER JOIN bidang ON rekmed.id_bidang = bidang.id_bidang 
                    WHERE kunjungan.id_pasien = $id 
                    ORDER BY rekmed.tgl_waktu DESC");
$i = 1;

function tindakanLanjut($id){
    $hasil  = tampil("SELECT * FROM tindakan_lanjut INNER JOIN tindakan ON tindakan_lanjut.id_tindakan = tindakan.id_tindakan WHERE tindakan_lanjut.id_rekmed = $id");
    return $hasil;
}

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
                                                            <td>: <?= date("d-m-Y", strtotime($pasien['tgl_daftar'])) ?></td>
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
                                    <b>Laporan Kunjungan</b>  <?= bulan(date("d-m-Y", strtotime($rekmed['tgl_waktu']))) ?>
                                </div>
                                <div class="card-body">
                                    <table id="rekmed-table-<?= $i ?>" class="table table-custom">
                                        <tbody>
                                            <tr>
                                                <td style="" colspan="3">
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
                                                <th scope="row" style="width: 25%; text-align: center; padding: 15px;" colspan="3">Rekammedis</th>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Keluhan Pasien</th>
                                                <td style="width: 1%;">: </td>
                                                <td><?= $rekmed['keluhan'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Riwayat Penyakit Sekarang</th>
                                                <td style="width: 1%;">: </td>
                                                <td><?= $rekmed['riwayat_penyakit_sekarang'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Riwayat Penyakit Dahulu</th>
                                                <td style="width: 1%;">: </td>
                                                <td><?= $rekmed['riwayat_penyakit_dahulu'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Diagnosa</th>
                                                <td style="width: 1%;">: </td>
                                                <td><?= $rekmed['diagnosis'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Tindakan</th>
                                                <td style="width: 1%;">: </td>
                                                <td><?php if($rekmed['nama_tindakan'] === NULL ){ echo "-"; }else{ echo($rekmed['hasil_tindakan']); } ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Hasil Tindakan</th>
                                                <td style="width: 1%;">: </td>
                                                <td><?php if($rekmed['hasil_tindakan'] === '' ){ echo "-"; }else{ echo($rekmed['hasil_tindakan']); } ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Tindakan Lanjut</th>
                                                <td style="width: 1%;">: </td>
                                                <td>
                                                    <?php $tindakans = tindakanLanjut($rekmed['id_rekmed']); ?>
                                                    <?php foreach($tindakans as $tindakan) : ?>
                                                        <?php if($rekmed['nama_tindakan'] === NULL ){ ?>
                                                            -
                                                        <?php }else{ ?>
                                                            <ul>
                                                                <li>
                                                                    <?= $tindakan['nama_tindakan'] ?>
                                                                </li>
                                                            </ul>
                                                        <?php }?>
                                                    <?php endforeach; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Hasil Tindakan Lanjut</th>
                                                <td style="width: 1%;">: </td>
                                                <td><?php if($rekmed['hasil_tindakan'] === '' ){ echo "-"; }else{ echo($rekmed['hasil_tindakan']); } ?></td>
                                            </tr>
                                            <?php $lab = tampil()[0]; ?>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Tindakan Lab</th>
                                                <td style="width: 1%;">: </td>
                                                <td><?= $lab['nama_tindakan_lab'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Hasil Tindakan Lab</th>
                                                <td style="width: 1%;">: </td>
                                                <td><?= $lab['hasil_tindakan_lab'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Hasil Tindakan Lab <sup>*foto</sup></th>
                                                <td style="width: 1%;">: </td>
                                                <td>
                                                    <?php if($lab['foto_lab'] === ' '): ?>
                                                        -
                                                    <?php else: ?>
                                                        <img src="../image/pasien/<?= $lab['foto_lab'] ?>" alt="" style="width: 200px; height: 300px; border-radius: 5px;">
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Resep Obat</th>
                                                <td style="width: 1%;">: </td>
                                                <td><?= $rekmed['resep'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Catatan Dokter</th>
                                                <td style="width: 1%;">: </td>
                                                <td><?= $rekmed['catatan'] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-primary btn-sm text-white" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" onclick="window.location.href='edit-rekmed.php?id=<?= $rekmed['id_rekmed'] ?>&idp=<?= $rekmed['id_pasien'] ?>'"><i class="fas fa-edit"></i> Edit Rekammedis</button>
                                    <button type="button" class="btn btn-warning btn-sm text-white" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" onclick="window.location.href='tambah-tindakan.php?id=<?= $rekmed['id_rekmed'] ?>&idp=<?= $rekmed['id_pasien'] ?>&idk=<?= $rekmed['id_kunjungan'] ?>'"><i class="fas fa-plus"></i> Tambah Tindakan</button>
                                    <button type="button" class="btn btn-danger btn-sm text-white" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" onclick="printTable(<?= $i ?>)"><i class="fas fa-print"></i> Print Rekammedis</button>
                                </div>
                            </div>
                        <?php $i++; endforeach; ?>
                    </div>
                </main>
<?php include "layout/footer.php"; ?>