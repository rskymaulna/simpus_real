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
        <script>
            function printTable(id) {
                // Menemukan tabel berdasarkan ID yang unik
                var table = document.getElementById('rekmed-table-' + id);

                // Membuat elemen baru untuk menampung tabel yang akan dicetak
                var printWindow = window.open('', '', 'height=800,width=1200');
                printWindow.document.write('<html><head><title>Print Rekammedis</title>');
                
                // Menyertakan Bootstrap dan gaya untuk print
                printWindow.document.write('<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">');
                // printWindow.document.write('<style>');
                // printWindow.document.write('body {font-family: Arial, sans-serif;}');
                // printWindow.document.write('table {width: 100%; border-collapse: collapse;}');
                // printWindow.document.write('td, th {border: 1px solid #ddd; padding: 8px; text-align: left;}');
                // printWindow.document.write('th {background-color: #f2f2f2;}');
                // printWindow.document.write('tr:nth-child(even) {background-color: #f9f9f9;}');
                // printWindow.document.write('@media print {');
                // printWindow.document.write('body {font-size: 12pt;}');
                // printWindow.document.write('table {border: 1px solid black;}');
                // printWindow.document.write('td, th {border: 1px solid black; padding: 5px;}');
                // printWindow.document.write('button {display: none;}'); // Menyembunyikan tombol saat mencetak
                // printWindow.document.write('}');
                // printWindow.document.write('</style>');
                
                printWindow.document.write('</head><body>');
                
                // Menambahkan konten tabel ke jendela print
                printWindow.document.write(table.outerHTML);
                
                printWindow.document.write('</body></html>');
                
                // Menunggu sampai konten selesai dimuat, kemudian mencetak
                printWindow.document.close();
                printWindow.print();
            }
        </script>

    </body>
</html>