<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="stylesss.css">
    <!-- Sisipkan CSS tambahan di sini -->
    <style>
        /* CSS tambahan untuk layout atau styling khusus halaman ini */
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}
header {
    background-color: #333;
    color: rgb(241, 233, 233);
    padding: 10px 0;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.logo img {
    max-height: 80px !important; /* Sesuaikan ukuran ini sesuai kebutuhan Anda */
    width: auto !important; /* Menjaga proporsi gambar */
}

nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

nav ul li {
    display: inline;
}

nav ul li a {
    color: white;
    text-decoration: none;
    padding: 8px 16px;
    transition: background-color 0.3s;
}

nav ul li a:hover {
    background-color: #575757;
    border-radius: 4px;
}
        .employee-section, .sales-matrix-section {
            text-align: center;
            margin-top: 50px;
        }
        .employee-icon {
            font-size: 48px;
            color: #007bff; /* Warna ikon bisa disesuaikan */
        }
        .employee-table {
            margin: 20px auto;
            width: 80%;
            border-collapse: collapse;
        }
        .employee-table th, .employee-table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .employee-table th {
            background-color: #f2f2f2;
        }
        .sales-chart {
            max-width: 800px;
            margin: 20px auto;
        }
    </style>
</head>
<body>
<header>
        <nav>
            <div class="logo">
                <img src="./logo/logo.png" alt="Logo Haji Ahmad">
            </div>
            <ul>
                <li><a href="admin.php">Home</a></li>
                <li><a href="editberas.php">Jenis Beras</a></li>
                <li><a href="pesanan.php">Pemesanan</a></li>
                <li><a href="supp.php">Info Supplier</a></li>
                <li><a href="index.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="employee-section">
        <div class="employee-icon">
            <i class="fas fa-id-card"></i> <!-- Ganti dengan ikon yang sesuai -->
        </div>
        <h2>Data Karyawan</h2>
        <table class="employee-table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Departemen</th>
                    <th>Gaji</th>
                </tr>
            </thead>
            <tbody>
                <!-- Isi tabel dengan data karyawan -->
                <tr>
                    <td>John Doe</td>
                    <td>Manager</td>
                    <td>Keuangan</td>
                    <td>$5000</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>Supervisor</td>
                    <td>Produksi</td>
                    <td>$4500</td>
                </tr>
                <!-- Tambahkan baris lain sesuai dengan data karyawan -->
            </tbody>
        </table>
    </div>

    <div class="sales-matrix-section">
        <h2>Grafik Harga Beras Selama Setahun</h2>
        <div class="sales-chart">
            <canvas id="ricePriceChart"></canvas>
        </div>
    </div>

    <!-- Sisipkan Chart.js di bawah ini -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Data untuk grafik harga beras (contoh)
        var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        var ricePrices = [15000, 15500, 16000, 15800, 16200, 16500, 17000, 17200, 17500, 18000, 18500, 19000];

        // Konfigurasi Chart.js untuk grafik harga beras
        var ctx1 = document.getElementById('ricePriceChart').getContext('2d');
        var ricePriceChart = new Chart(ctx1, {
            type: 'line',
            data: {
                labels: months,
                datasets: [{
                    label: 'Harga Beras (Rp)',
                    data: ricePrices,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)', // Warna latar belakang area
                    borderColor: 'rgba(255, 99, 132, 1)', // Warna garis
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: false,
                            callback: function(value, index, values) {
                                return 'Rp ' + value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                            }
                        }
                    }]
                }
            }
        });

        // Data untuk grafik data karyawan (contoh)
        var employeeData = [5, 8, 12, 15, 18, 20, 22, 24, 25, 23, 19, 15];

        // Konfigurasi Chart.js untuk grafik data karyawan
        var ctx2 = document.getElementById('employeeChart').getContext('2d');
        var employeeChart = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: months,
                datasets: [{
                    label: 'Jumlah Karyawan',
                    data: employeeData,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)', // Warna latar belakang area
                    borderColor: 'rgba(54, 162, 235, 1)', // Warna garis
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>
</html>