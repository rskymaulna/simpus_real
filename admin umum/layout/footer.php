<footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">&copy; Puskesmas Kelompok Satu 2024</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.1.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/2598ce4aff.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script>
            new DataTable('#example');
        </script>
        <?php
        //jumlah kunjungan per bulan 
        function hitungKunjungan($bulan) {
            $data = tampil("SELECT * FROM kunjungan WHERE MONTH(waktu_kunjungan) = $bulan");
            return is_array($data) ? count($data) : 0;
        }
            $jan = hitungKunjungan(1);
            $feb = hitungKunjungan(2);
            $mar = hitungKunjungan(3);
            $apr = hitungKunjungan(4);
            $mei = hitungKunjungan(5);
            $jun = hitungKunjungan(6);
            $jul = hitungKunjungan(7);
            $ags = hitungKunjungan(8);
            $sep = hitungKunjungan(9);
            $okt = hitungKunjungan(10);
            $nov = hitungKunjungan(11);
            $des = hitungKunjungan(12);
            
            
        ?>
        <script>
            // Inisialisasi Grafik menggunakan Chart.js
            var ctx = document.getElementById('myAreaChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',  // Ganti jenis grafik jika perlu
                data: {
                    labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus'],  // Contoh data label
                    datasets: [{
                        label: 'Jumlah Pasien',
                        data: [<?= $jan ?>, <?= $feb ?>, <?= $mar ?>, <?= $mei ?>, <?= $jun ?>, <?= $jul ?>, <?= $ags ?>],  // Contoh data
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
        <script>
            function printTable(id) {
                // Menemukan tabel berdasarkan ID yang unik
                var table = document.getElementById('rekmed-table-' + id);
                if (!table) {
            alert('Tabel tidak ditemukan!');
            return;
        }
                // Membuat elemen baru untuk menampung tabel yang akan dicetak
                var printWindow = window.open('', '', 'height=800,width=1200');
                printWindow.document.write('<html><head><title>Print Rekammedis</title>');
                
                // Menyertakan Bootstrap dan gaya untuk print
                printWindow.document.write('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">');
                
                printWindow.document.write('</head><body>');
                
                // Menambahkan konten tabel ke jendela print
                printWindow.document.write(table.outerHTML);
                
                printWindow.document.write('</body></html>');
                
                // Menunggu sampai konten selesai dimuat, kemudian mencetak
                printWindow.document.close();
                printWindow.print();
            }
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                const sidebarToggle = document.getElementById('sidebarToggle');
                const body = document.body;
                
                if (sidebarToggle) {
                    sidebarToggle.addEventListener('click', function () {
                        body.classList.toggle('sb-sidenav-toggled');
                    });
                }
            });
        </script>

    </body>
</html>