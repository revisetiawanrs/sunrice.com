<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis Beras</title>
    <link rel="stylesheet" href="styless.css">
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
        <h1>Jenis Beras</h1>
        <table>
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Nama Beras</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Load data from JSON file
                $json_data = file_get_contents('rice_data.json');
                $rice_types = json_decode($json_data, true);

                if ($rice_types) {
                    foreach ($rice_types as $rice) {
                        echo "<tr>";
                        echo "<td><img src='" . $rice['image_path'] . "' alt='" . $rice['name'] . "' width='100'></td>";
                        echo "<td>" . $rice['name'] . "</td>";
                        echo "<td>" . $rice['description'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No data found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>