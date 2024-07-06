<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pesanan</title>
    <link rel="stylesheet" href="pesanan.css">
    <style>
        /* Inline styles for simplicity */
        .pesanan {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .validasi-button, .tolak-button {
            padding: 8px 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }

        .tolak-button {
            background-color: #f44336;
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
    <div class="container">
        <h1>Daftar Pesanan</h1>
        
        <!-- Tabel 1: Produk yang Dipesan -->
        <h2>Produk yang Dipesan</h2>
        <div id="produk-dipesan">
            <!-- Simulasi data produk -->
            <?php
            $produk_dipesan = [
                ['id' => 1, 'nama' => 'Beras Premium', 'jumlah' => '5 kg'],
                ['id' => 2, 'nama' => 'Beras Medium', 'jumlah' => '3 kg']
                
            ];

            foreach ($produk_dipesan as $produk) {
                echo '<div class="pesanan" id="pesanan-' . $produk['id'] . '">';
                echo '<div>';
                echo '<h3>' . $produk['nama'] . '</h3>';
                echo '<p><strong>Jumlah:</strong> ' . $produk['jumlah'] . '</p>';
                echo '</div>';
                echo '<div class="action-buttons">';
                echo '<button class="validasi-button" onclick="validasiPesanan(' . $produk['id'] . ')">Validasi</button>';
                echo '<button class="tolak-button" onclick="tolakPesanan(' . $produk['id'] . ')">Tolak</button>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>

        <!-- Tabel 2: Produk yang Divalidasi -->
        <h2>Produk yang Divalidasi</h2>
        <div id="produk-divalidasi">
            <!-- Tempatkan produk yang sudah divalidasi di sini -->
        </div>

        <!-- Tabel 3: Pesanan Ditolak -->
        <h2>Pesanan Ditolak</h2>
        <div id="pesanan-ditolak">
            <!-- Tempatkan produk yang ditolak di sini -->
        </div>
    </div>

    <script>
        function validasiPesanan(id) {
            // Dapatkan elemen pesanan berdasarkan id
            var pesanan = document.getElementById('pesanan-' + id);
            
            // Pindahkan pesanan ke dalam tabel validasi
            document.getElementById('produk-divalidasi').appendChild(pesanan);
        }

        function tolakPesanan(id) {
            // Dapatkan elemen pesanan berdasarkan id
            var pesanan = document.getElementById('pesanan-' + id);
            
            // Pindahkan pesanan ke dalam tabel pesanan ditolak
            document.getElementById('pesanan-ditolak').appendChild(pesanan);
        }
    </script>
</body>
</html>