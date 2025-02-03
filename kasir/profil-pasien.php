<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";
if(isset($_GET['id'])){
    $id  = $_GET['id'];
}
if(isset($_GET['idk'])){
    $idk = $_GET['idk'];
}
$hari_ini = date("Y-m-d");
$rekmed = tampil("SELECT * FROM rekmed 
                    INNER JOIN kunjungan ON rekmed.id_kunjungan = kunjungan.id_kunjungan 
                    INNER JOIN dokter ON rekmed.id_dokter = dokter.id_dokter 
                    INNER JOIN bidang ON kunjungan.id_bidang = bidang.id_bidang 
                    INNER JOIN pasien ON kunjungan.id_pasien = pasien.id_pasien 
                    WHERE kunjungan.id_kunjungan = $idk
                    ORDER BY rekmed.tgl_waktu DESC")[0];


$transaksi = tampil("SELECT tgl_waktu FROM obat_apotek WHERE id_kunjungan = $idk");



$transaksis = tampil("SELECT * FROM obat_apotek INNER JOIN obat ON obat_apotek.id_obat = obat.id_obat WHERE obat_apotek.id_kunjungan = $idk");
$transaksit = tampil("SELECT * FROM rekmed 
                        RIGHT JOIN tindakan ON rekmed.id_tindakan = tindakan.id_tindakan 
                        WHERE rekmed.id_kunjungan = $idk");
$transaksil = tampil("SELECT * FROM hasil_lab INNER JOIN tindakan_lab ON hasil_lab.id_tindakan_lab = tindakan_lab.id_tindakan_lab WHERE hasil_lab.id_kunjungan = $idk");


?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-2" style="margin-top: 15px;">
                            <div class="card-header">
                                <b>Transaksi Obat</b>  <?= bulan(date("d-m-Y")) ?>
                            </div>
                            <div class="card-body">
                                <table class="table table-custom">
                                    <tbody>
                                        <tr>
                                            <td style="width: 15%;" colspan="2">
                                                <table class="table table-custom table-borderless">
                                                    <tr>
                                                        <th colspan="2" style="text-align: center;">Invoice Transaksi Obat Puskesmas Kelompok Satu</th>
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
                                            <th scope="row" style="width: 25%; text-align: center; padding: 15px;" colspan="2">Transaksi</th>
                                        </tr>
                                        <form action="transaksi-selesai.php" method="get">
                                            <tr>
                                                <th scope="row" style="width: 25%;">Obat</th>
                                                <td>
                                                    <table class="table table-custom table-borderless">
                                                        <?php $total = 0; ?>
                                                        <?php foreach($transaksis as $transaksi) : ?>                                                    
                                                            <tr>
                                                                <td> - <?= $transaksi['nama_obat'] ?>  (Rp. <?= formatHarga($transaksi['tarif']) ?>) <b><?= $transaksi['jumlah'] ?>x</b></td>
                                                                <td>
                                                                    <a href="edit-obat.php?id=<?= $transaksi['id_pemberian_obat'] ?>&idrek=<?= $rekmed['id_rekmed'] ?>&idp=<?= $rekmed['id_pasien'] ?>&idk=<?= $rekmed['id_kunjungan'] ?>" class="preview-container">
                                                                        <button type="button"  class="btn btn-primary btn-sm text-white" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                                            <i class="fas fa-edit"></i>
                                                                        </button>
                                                                        <div class="preview-text wd-pt1">
                                                                            Ubah Obat
                                                                        </div>
                                                                    </a>
                                                                    <a href="#" onclick="if(confirm('Apakah Anda yakin ingin menghapus obat?')) { window.location.href='hapus-obat.php?id=<?= $transaksi['id_pemberian_obat'] ?>&idp=<?= $rekmed['id_pasien'] ?>&idk=<?= $rekmed['id_kunjungan'] ?>'}" class="preview-container">
                                                                        <button type="button" class="btn btn-danger btn-sm"  style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                                            <i class="fa-solid fa-trash-can"></i>
                                                                        </button>
                                                                        <div class="preview-text wd-pt1">
                                                                            Hapus Obat
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        <?php $total = $total + (intval($transaksi['jumlah']) * intval($transaksi['tarif'])) ?>    
                                                        <?php endforeach;?>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Tindakan Medis</th>
                                                <td>
                                                    <table class="table table-custom table-borderless">
                                                        <?php $totalt = 0; ?>
                                                        <?php foreach($transaksit as $transaksi) : ?>                                                    
                                                            <tr>
                                                                <td> - <?= $transaksi['nama_tindakan'] ?>  (Rp. <?= formatHarga($transaksi['tarif']) ?>)</b></td>
                                                            </tr>
                                                        <?php $totalt = $totalt + $transaksi['tarif'] ?>    
                                                        <?php endforeach;?>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 25%;">Tindakan Lab</th>
                                                <td>
                                                    <table class="table table-custom table-borderless">
                                                    <?php $totaltl = 0; ?>
                                                        <?php foreach($transaksil as $transaksi) : ?>                                                    
                                                            <tr>
                                                                <td> - <?= $transaksi['nama_tindakan_lab'] ?>  (Rp. <?= formatHarga($transaksi['tarif_lab']) ?>)</b></td>
                                                            </tr>
                                                        <?php $totaltl = $totaltl + $transaksi['tarif_lab'] ?>    
                                                        <?php endforeach;?>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col" style="width: 25%;">Jumlah Total</th>
                                                <td>- Rp.  <?= formatHarga($total+$totalt+$totaltl) ?></td>
                                                <input type="hidden" name="total" value="<?= $total+$totalt+$totaltl ?>">
                                                <input type="hidden" name="idk" value="<?= $rekmed['id_kunjungan'] ?>">
                                                <input type="hidden" name="idp" value="<?= $rekmed['id_pasien'] ?>">
                                            </tr>
                                            <tr>
                                                <th scope="col" style="width: 25%;">Dibayar</th>
                                                <td class="daftar"><input type="number" name="bayar" id="stok" class="w-100 form-control form-control-sm" required></td>
                                            </tr>
                                    </tbody>
                                </table>
                                <button type="submit" name="submit" class="btn btn-info btn-sm text-white" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"><i class="fas fa-money-bill"></i> Lanjutkan Pembayaran</button>
                                </form>
                                <!-- <button type="button" class="btn btn-primary btn-sm text-white" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" onclick="window.location.href='transaksi-obat2.php?id=<?= $rekmed['id_rekmed'] ?>&idp=<?= $rekmed['id_pasien'] ?>&idk=<?= $rekmed['id_kunjungan'] ?>'"><i class="fas fa-plus"></i> Tambah Obat</button> -->
                            </div>
                        </div>
                    </div>
                </main>
<?php include "layout/footer.php"; ?>