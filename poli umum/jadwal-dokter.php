<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";

$jadwals = tampil("SELECT dokter.nama_dokter, bidang.nama_bidang,jadwal_dokter.id_jadwal, jadwal_dokter.hari, jadwal_dokter.jam_mulai, jadwal_dokter.jam_selesai 
                    FROM jadwal_dokter 
                    INNER JOIN dokter ON jadwal_dokter.id_dokter = dokter.id_dokter
                    INNER JOIN bidang ON jadwal_dokter.id_bidang = bidang.id_bidang
                    WHERE jadwal_dokter.id_bidang = 1");
$i = 1;
?>
            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-calendar"></i>
                        Jadwal Dokter
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-custom table-bordered table-sm table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Dokter</th>
                                    <th>Poli</th>
                                    <th>Hari</th>
                                    <th>Jam Mulai</th>
                                    <th>Jam Selesai</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php foreach($jadwals as $jadwal) : ?> 
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $jadwal['nama_dokter'] ?></td>
                                    <td><?= $jadwal['nama_bidang'] ?></td>
                                    <td><?= $jadwal['hari'] ?></td>
                                    <td><?= date("H:i", strtotime($jadwal['jam_mulai']))?></td>
                                    <td><?= date("H:i", strtotime($jadwal['jam_selesai']))?></td>
                                </tr>
                            <?php $i++; ?>   
                            <?php endforeach; ?>   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                </main>
<?php include "layout/footer.php"; ?>