<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jenis Beras</title>
    <link rel="stylesheet" href="styless.css">
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
        <h1>Tambah Jenis Beras</h1>
        <form action="saveberas.php" method="post" enctype="multipart/form-data">
            <label for="name">Nama Beras:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="description">Deskripsi:</label>
            <textarea id="description" name="description" required></textarea>
            
            <label for="image">Gambar:</label>
            <input type="file" id="image" name="image" required>
            
            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>