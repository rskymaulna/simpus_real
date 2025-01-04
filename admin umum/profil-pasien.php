<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";

?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Poli Umum</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Umum</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-user"></i>
                                Profil pasien
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-custom table-striped" style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <th scope="col">Nama Pasien</th>
                                            <td>Rian</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">No Bpjs</th>
                                            <td>219864356890</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">No KTP</th>
                                            <td>934568219054</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Jenis Kelamin</th>
                                            <td>Laki-Laki</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tempat Lahir</th>
                                            <td>Masohi</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tanggal Lahir</th>
                                            <td>14-01-1986</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Alamat</th>
                                            <td>Kayu Merah, Sebrang</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Status Berobat</th>
                                            <td>Bpjs</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th rowspan="8" valign="top" scope="row">Rekamedis</th>
                                            <td valign="top" class="td2">Tanggal Kunjungan</td>
                                            <td class="td3">: 13 Agustus 2023</td>
                                        </tr>
                                        <tr style="height: 50px;">
                                            <td valign="top" scope="row" class="td2">Dokter</td>
                                            <td class="td3">: dr. Rismawati</td>
                                        </tr>
                                        <tr style="height: 50px;">
                                            <td valign="top" scope="row" class="td2">Keluhan Utama</td>
                                            <td class="td3">: Pasien mengeluhkan batuk kering yang tidak kunjung sembuh selama 2 minggu terakhir, disertai rasa lelah dan sesak napas saat aktivitas berat.</td>
                                        </tr>
                                        <tr style="height: 50px;">
                                            <td valign="top" class="td2">Riwayat Penyakit Sekarang Pasien</td>
                                            <td class="td3">: Pasien mulai mengalami batuk kering sejak 2 minggu yang lalu, awalnya hanya di malam hari namun semakin sering muncul. Tidak ada demam, tidak ada dahak. Pasien juga merasa lebih mudah lelah dan sedikit sesak napas saat melakukan aktivitas berat.</td>
                                        </tr>
                                        <tr style="height: 50px;">
                                            <td valign="top" class="td2">Riwayat Penyakit Dulu</td>
                                            <td class="td3">: Pasien memiliki riwayat asma sejak kecil, namun tidak pernah kambuh dalam 5 tahun terakhir. Tidak ada riwayat penyakit kronis lain seperti diabetes atau hipertensi.</td>
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