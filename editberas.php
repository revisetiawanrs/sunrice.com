<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jenis Beras</title>
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
        <h1>Edit Jenis Beras</h1>
        <a href="addberas.php" class="add-button">Tambah Jenis Beras Baru</a>
        <table>
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Nama Beras</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Load data from JSON file
                $json_data = file_get_contents('rice_data.json');
                $rice_types = json_decode($json_data, true);

                if ($rice_types) {
                    foreach ($rice_types as $index => $rice) {
                        echo "<tr>";
                        echo "<form action='updateberas.php' method='post' enctype='multipart/form-data'>";
                        echo "<td><img src='" . $rice['image_path'] . "' alt='" . $rice['name'] . "' width='100'><input type='file' name='image'></td>";
                        echo "<td><input type='text' name='name' value='" . $rice['name'] . "'></td>";
                        echo "<td><textarea name='description'>" . $rice['description'] . "</textarea></td>";
                        echo "<td>";
                        echo "<input type='hidden' name='index' value='" . $index . "'>";
                        echo "<button type='submit'>Simpan</button>";
                        echo "</form>";
                        echo "<form action='deleteberas.php' method='post' style='margin-top: 10px;'>";
                        echo "<input type='hidden' name='index' value='" . $index . "'>";
                        echo "<button type='submit'>Hapus</button>";
                        echo "</form>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No data found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>