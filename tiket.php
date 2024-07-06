<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Pembelian</title>
    <link rel="stylesheet" href="tiket.css">
</head>
<body>
    <div class="container">
        <h1>Tiket Pembelian</h1>
        <div class="tiket">
            <p><strong>Nama:</strong> <?php echo isset($_POST['nama']) ? $_POST['nama'] : ''; ?></p>
            <p><strong>Alamat:</strong> <?php echo isset($_POST['alamat']) ? $_POST['alamat'] : ''; ?></p>
            <p><strong>Email:</strong> <?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?></p>
            <p><strong>Nomor Telepon:</strong> <?php echo isset($_POST['notelp']) ? $_POST['notelp'] : ''; ?></p>
            <p><strong>Jumlah Barang (kg):</strong> <?php echo isset($_POST['jumlah']) ? $_POST['jumlah'] : ''; ?></p>
        </div>
        <button onclick="window.print()" class="btn-print">Cetak Tiket</button>
    </div>
</body>
</html>