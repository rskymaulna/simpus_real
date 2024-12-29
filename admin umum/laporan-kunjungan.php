<?php 
include "layout/top.php";
include "layout/side.php";
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-location-arrow"></i>
                                Laporan Kunjungan
                            </div>
                            <div class="card-body">
                            <h1 class="laporan-pasien-title">Laporan Kunjungan Pasien</h1>
                            <div class="laporan-pasien-section">
                                <h3 class="laporan-pasien-heading">Puskesmas Sejahtera</h3>
                                <p class="laporan-pasien-info">Alamat: Jl. Sehat No. 45, Jakarta</p>
                                <p class="laporan-pasien-info">Tanggal: 7 September 2024</p>
                            </div>

                            <div class="laporan-pasien-section">
                                <h2 class="laporan-pasien-subtitle">Identitas Pasien</h2>
                                <p class="laporan-pasien-info"><strong>Nama Pasien:</strong> Rian</p>
                                <p class="laporan-pasien-info"><strong>Umur:</strong> 38 tahun</p>
                                <p class="laporan-pasien-info"><strong>Jenis Kelamin:</strong> Laki-laki</p>
                                <p class="laporan-pasien-info"><strong>Alamat:</strong> Jl. Kayu Merah Sebrang</p>
                                <p class="laporan-pasien-info"><strong>Nomor Rekam Medis:</strong> 00031</p>
                            </div>

                            <div class="laporan-pasien-section">
                                <h2 class="laporan-pasien-subtitle">Rincian Kunjungan</h2>
                                <table class="laporan-pasien-table">
                                    <tr>
                                        <th class="laporan-pasien-th">Jenis Layanan</th>
                                        <td class="laporan-pasien-td">Rawat Jalan</td>
                                    </tr>
                                    <tr>
                                        <th class="laporan-pasien-th">Keluhan Utama</th>
                                        <td class="laporan-pasien-td">Demam dan sakit kepala</td>
                                    </tr>
                                    <tr>
                                        <th class="laporan-pasien-th">Diagnosis</th>
                                        <td class="laporan-pasien-td">Infeksi Saluran Pernapasan Atas (ISPA)</td>
                                    </tr>
                                    <tr>
                                        <th class="laporan-pasien-th">Pemeriksaan yang Dilakukan</th>
                                        <td class="laporan-pasien-td">
                                            <ul>
                                                <li>Pemeriksaan fisik</li>
                                                <li>Pengukuran suhu tubuh (38.5°C)</li>
                                                <li>Pemeriksaan tenggorokan</li>
                                                <li>Pemeriksaan tekanan darah (120/80 mmHg)</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <div class="laporan-pasien-section">
                                <h2 class="laporan-pasien-subtitle">Tindakan dan Pengobatan</h2>
                                <p class="laporan-pasien-info">
                                    <strong>Tindakan yang Dilakukan:</strong><br>
                                    Konsultasi dokter<br>
                                    Edukasi mengenai penyakit dan perawatan di rumah
                                </p>
                                <p class="laporan-pasien-info">
                                    <strong>Obat yang Diberikan:</strong><br>
                                    1. Paracetamol 500 mg tab - 1 tablet, 3 kali sehari, setelah makan, selama 5 hari<br>
                                    2. Amoxicillin 500 mg cap - 1 kapsul, 3 kali sehari, setelah makan, selama 7 hari
                                </p>
                            </div>

                            <div class="laporan-pasien-section">
                                <h2 class="laporan-pasien-subtitle">Instruksi Tambahan</h2>
                                <p class="laporan-pasien-info">
                                    Istirahat yang cukup<br>
                                    Minum air putih yang banyak<br>
                                    Jika demam tidak turun dalam 3 hari atau muncul gejala baru, segera kembali ke Puskesmas
                                </p>
                            </div>

                            <div class="laporan-pasien-section">
                                <h2 class="laporan-pasien-subtitle">Dokter yang Menangani</h2>
                                <p class="laporan-pasien-info"><strong>Nama Dokter:</strong> Dr. Rismawati</p>
                                <p class="laporan-pasien-info"><strong>NIP:</strong> 1987654321</p>
                                <p class="laporan-pasien-info"><strong>Tanda Tangan Dokter:</strong> ______________</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </main>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            Hapus data?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary"><a href="data-kunjungan.html" style="color: white; text-decoration: none;">Ya</a></button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            </div>
                        </div>
                    </div>
                </div>
<?php include "layout/footer.php"; ?>