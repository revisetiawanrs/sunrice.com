<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <link rel="stylesheet" href="keranjang.css">
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
        <h1>Keranjang Belanja</h1>

        <div class="cart-items">
            <?php
            session_start();
            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $product) {
                    echo '<div class="cart-item">';
                    echo '<img src="' . $product['gambar'] . '" alt="' . $product['nama'] . '">';
                    echo '<div class="cart-item-details">';
                    echo '<h3 class="nama">' . $product['nama'] . '</h3>';
                    echo '<p class="harga">Rp ' . number_format($product['harga'], 0, ',', '.') . '</p>';
                    echo '<button class="btn-hapus" onclick="removeFromCart(' . $product['id'] . ')">Hapus</button>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>Keranjang belanja Anda kosong.</p>';
            }
            ?>
        </div>

        <a href="pembayaran.php" class="btn-beli">Lanjut ke Pembayaran</a>
    </div>

    <script>
        function removeFromCart(productId) {
            // Implementasi untuk menghapus dari keranjang (gunakan AJAX atau session untuk implementasi nyata)
            alert('Produk dengan ID ' + productId + ' telah dihapus dari keranjang.');
        }
    </script>
</body>
</html>