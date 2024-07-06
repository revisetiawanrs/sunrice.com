<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembayaran</title>
    <link rel="stylesheet" href="pembayaran.css">
</head>
<body>
<header>
        <nav>
            <div class="logo">
                <img src="./logo/logo.png" alt="Logo Haji Ahmad">
            </div>
            <ul>
                <li><a href="dashboard.php">Home</a></li>
                <li><a href="beliproduct.php">Beli Product</a></li>
                <li><a href="jenisberas.php">jenis Beras</a></li>
                <li><a href="keranjang.php">Keranjang</a></li>
                <li><a href="usersup.php">Info Supplier</a></li>
                <li><a href="index.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h1>Form Pembayaran</h1>
        <form action="tiket.php" method="POST">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="notelp">Nomor Telepon:</label>
                <input type="text" id="notelp" name="notelp" required>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah Barang (kg):</label>
                <input type="number" id="jumlah" name="jumlah" min="1" required>
            </div>
            <button type="submit" class="btn-submit">Proses Pembelian</button>
        </form>
    </div>
</body>
</html>
