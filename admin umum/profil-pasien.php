<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";
$id = $_GET['id'];

$pasien = tampil("SELECT * FROM pasien WHERE id_pasien = $id")[0];
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
                        <div class="card mb-4">
                            <div class="card-header">
                               <b>Laporan Kunjungan</b>  06 Juni 2024
                            </div>
                            <div class="card-body">
                                <table class="table table-striped" style="width: 100%;">
                                    <tbody>
                                        <tr style="height: 50px;">
                                            <td valign="top" scope="row" class="td2">Dokter</td>
                                            <td class="td3">: dr. Anien</td>
                                        </tr>
                                        <tr style="height: 50px;">
                                            <td valign="top" scope="row" class="td2">Anamnesis</td>
                                            <td class="td3">: 
                                                Pasien datang dengan keluhan batuk produktif yang sudah berlangsung selama 10 hari. 
                                                Batuk disertai dahak kental berwarna kekuningan. Pasien juga mengeluhkan adanya demam ringan,
                                                 rasa sesak di dada, dan kelelahan. Tidak ada riwayat batuk berdarah. Pasien juga mengeluhkan 
                                                 adanya hidung tersumbat dan sakit tenggorokan. Pasien memiliki riwayat merokok 10 tahun, dan 
                                                 aat ini sedang mengalami peningkatan konsumsi rokok karena tekanan pekerjaan. Riwayat alergi 
                                                 dan penyakit kronis lainnya disangkal.
                                            </td>
                                        </tr>
                                        <tr style="height: 50px;">
                                            <td valign="top" class="td2">Pemeriksaan Fisik</td>
                                            <td class="td3">: Tekanan Darah(120/80 mmHg), 
                                                Nadi(80 kali/menit),
                                                Suhu(36,7°C), 
                                                Respirasi(18 kali/menit), 
                                                Status generalis(Kesadaran compos mentis, tidak ada tanda-tanda distress pernapasan.), 
                                                Pemeriksaan paru(Ronki halus pada kedua basal paru.)</td>
                                        </tr>
                                        <tr style="height: 50px;">
                                            <td class="td2">Diagnosis</td>
                                            <td class="td3">: Bronkitis Akut</td>
                                        </tr>
                                        <tr style="height: 50px;">
                                            <td valign="top" class="td2">Rencana Pentalaksanaan</td>
                                            <td class="td3">
                                                <ol type="1">
                                                    <li>Pemberian antibiotik Amoxicillin 500 mg, 3 kali sehari selama 7 hari.</li>
                                                    <li>Pemberian sirup obat batuk Dextromethorphan, 3 kali sehari.</li>
                                                    <li>Inhalasi salbutamol jika ada sesak napas.</li>
                                                    <li>Kontrol ulang dalam 1 minggu atau jika gejala memburuk.</li>
                                                </ol>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                               <b>Laporan Kunjungan</b>  26 February 2024
                            </div>
                            <div class="card-body">
                                <table class="table table-striped" style="width: 100%;">
                                    <tbody>
                                        <tr style="height: 50px;">
                                            <td valign="top" scope="row" class="td2">Dokter</td>
                                            <td class="td3">: dr. Anien</td>
                                        </tr>
                                        <tr style="height: 50px;">
                                            <td valign="top" scope="row" class="td2">Anamnesis</td>
                                            <td class="td3">: 
                                                Pasien datang dengan keluhan batuk produktif yang sudah berlangsung selama 10 hari. 
                                                Batuk disertai dahak kental berwarna kekuningan. Pasien juga mengeluhkan adanya demam ringan,
                                                 rasa sesak di dada, dan kelelahan. Tidak ada riwayat batuk berdarah. Pasien juga mengeluhkan 
                                                 adanya hidung tersumbat dan sakit tenggorokan. Pasien memiliki riwayat merokok 10 tahun, dan 
                                                 aat ini sedang mengalami peningkatan konsumsi rokok karena tekanan pekerjaan. Riwayat alergi 
                                                 dan penyakit kronis lainnya disangkal.
                                            </td>
                                        </tr>
                                        <tr style="height: 50px;">
                                            <td valign="top" class="td2">Pemeriksaan Fisik</td>
                                            <td class="td3">: Tekanan Darah(120/80 mmHg), 
                                                Nadi(80 kali/menit),
                                                Suhu(36,7°C), 
                                                Respirasi(18 kali/menit), 
                                                Status generalis(Kesadaran compos mentis, tidak ada tanda-tanda distress pernapasan.), 
                                                Pemeriksaan paru(Ronki halus pada kedua basal paru.)</td>
                                        </tr>
                                        <tr style="height: 50px;">
                                            <td class="td2">Diagnosis</td>
                                            <td class="td3">: Bronkitis Akut</td>
                                        </tr>
                                        <tr style="height: 50px;">
                                            <td valign="top" class="td2">Rencana Pentalaksanaan</td>
                                            <td class="td3">
                                                <ol type="1">
                                                    <li>Pemberian antibiotik Amoxicillin 500 mg, 3 kali sehari selama 7 hari.</li>
                                                    <li>Pemberian sirup obat batuk Dextromethorphan, 3 kali sehari.</li>
                                                    <li>Inhalasi salbutamol jika ada sesak napas.</li>
                                                    <li>Kontrol ulang dalam 1 minggu atau jika gejala memburuk.</li>
                                                </ol>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
<?php include "layout/footer.php"; ?>