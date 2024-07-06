<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk</title>
    <link rel="stylesheet" href="beliproduct.css">
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
        <h1>Katalog Produk</h1>

        <div class="catalog">
            <?php
            // Simulasi daftar produk
            $products = [
                ['id' => 1, 'nama' => 'Produk 1', 'gambar' => './product/beras1.jpg', 'harga' => 150000],
                ['id' => 2, 'nama' => 'Produk 2', 'gambar' => './product/beras2.jpg', 'harga' => 120000],
                ['id' => 3, 'nama' => 'Produk 3', 'gambar' => './product/beras1.jpg', 'harga' => 180000],
                ['id' => 4, 'nama' => 'Produk 4', 'gambar' => './product/beras1.jpg', 'harga' => 90000],
                ['id' => 5, 'nama' => 'Produk 5', 'gambar' => './product/beras1.jpg', 'harga' => 200000],
                ['id' => 6, 'nama' => 'Produk 6', 'gambar' => './product/beras1.jpg', 'harga' => 170000],
                ['id' => 7, 'nama' => 'Produk 7', 'gambar' => './product/beras1.jpg', 'harga' => 130000],
                ['id' => 8, 'nama' => 'Produk 8', 'gambar' => './product/beras1.jpg', 'harga' => 110000],
            ];

            foreach ($products as $product) {
                echo '<div class="card">';
                echo '<img src="' . $product['gambar'] . '" alt="' . $product['nama'] . '">';
                echo '<div class="card-body">';
                echo '<h3 class="nama">' . $product['nama'] . '</h3>';
                echo '<p class="harga">Rp ' . number_format($product['harga'], 0, ',', '.') . '</p>';
                echo '<div class="buttons">';
                echo '<button class="btn-keranjang" onclick="addToCart(' . $product['id'] . ')">Masukkan Keranjang</button>';
                echo '<a href="pembayaran.php?product_id=' . $product['id'] . '" class="btn-beli">Beli Product</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <script>
        function addToCart(productId) {
            // Simulasi tambahkan ke keranjang (gunakan AJAX atau session untuk implementasi nyata)
            alert('Produk dengan ID ' + productId + ' telah ditambahkan ke keranjang.');
        }
    </script>
</body>
</html>
