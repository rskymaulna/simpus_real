<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";

$jadwals = tampil("SELECT dokter.nama_dokter, bidang.nama_bidang,jadwal_dokter.id_jadwal, jadwal_dokter.hari, jadwal_dokter.jam_mulai, jadwal_dokter.jam_selesai 
                    FROM jadwal_dokter 
                    INNER JOIN dokter ON jadwal_dokter.id_dokter = dokter.id_dokter
                    INNER JOIN bidang ON jadwal_dokter.id_bidang = bidang.id_bidang");
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
                    <button type="button" onclick="window.location.href='tambah-jadwal.php'" class="btn btn-success btn-sm" onclick="window.location.href='daftar.php'">+ Jadwal Baru</button>
                        <table id="example" class="table table-custom table-bordered table-sm table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Dokter</th>
                                    <th>Poli</th>
                                    <th>Hari</th>
                                    <th>Jam Mulai</th>
                                    <th>Jam Selesai</th>
                                    <th>Action</th>
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
                                    <td>
                                        <div class="aksi">
                                            <a href="edit-jadwal.php?id=<?= $jadwal['id_jadwal'] ?>" class="preview-container">
                                                <div class="edit">
                                                    <i class="fas fa-edit"></i>
                                                </div>
                                                <div class="preview-text wd-pt1">
                                                    Edit jadwal
                                                </div>
                                            </a>
                                            <a href="hapus-jadwal.php?id=<?= $jadwal['id_jadwal'] ?>" class="preview-container">
                                                <div class="delet">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </div>
                                                <div class="preview-text wd-pt2">
                                                    Hapus jadwal
                                                </div>
                                            </a>
                                        </div>
                                    </td>
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