<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Supplier</title>
    <link rel="stylesheet" href="stylesss.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background-color: #333;
    color: white;
    padding: 1px 0;
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
    max-height: 80px; /* Sesuaikan tinggi maksimum logo */
    width: auto; /* Membiarkan lebar menyesuaikan secara proporsional */
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
        .supplier-section, .process-section {
            text-align: center;
            margin-top: 50px;
        }
        .supplier-card, .process-card {
            display: inline-block;
            width: 250px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 10px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        .supplier-card:hover, .process-card:hover {
            transform: translateY(-5px);
        }
        .supplier-card h3, .process-card h3 {
            margin-top: 0;
            color: #007bff;
        }
        .supplier-card p, .process-card p {
            margin: 5px 0;
            color: #555;
        }
        .process-card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
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
    <div class="supplier-section">
        <h2>Supplier Beras</h2>
        <div class="supplier-card">
            <h3>PT. Beras Sejahtera</h3>
            <p>Alamat: Jl. Sejahtera No. 1, Jakarta</p>
            <p>Kontak: 021-12345678</p>
            <p>Email: info@berassejahtera.com</p>
        </div>
        <div class="supplier-card">
            <h3>CV. Padi Makmur</h3>
            <p>Alamat: Jl. Makmur No. 10, Bandung</p>
            <p>Kontak: 022-98765432</p>
            <p>Email: contact@padimakmur.com</p>
        </div>
        <div class="supplier-card">
            <h3>UD. Sumber Beras</h3>
            <p>Alamat: Jl. Sumber No. 5, Surabaya</p>
            <p>Kontak: 031-54321098</p>
            <p>Email: info@sumberberas.com</p>
        </div>
    </div>

    <div class="process-section">
        <h2>Proses Penggilingan Padi</h2>
        <div class="process-card">
            <img src="./supp/sp1.jpg" alt="Proses Penggilingan Padi 1">
            <h3>Proses 1</h3>
            <p></p>
        </div>
        <div class="process-card">
            <img src="./supp/sp2.jpg" alt="Proses Penggilingan Padi 2">
            <h3>Proses 2</h3>
            <p></p>
        </div>
        <div class="process-card">
            <img src="./supp/sp3.jpg" alt="Proses Penggilingan Padi 3">
            <h3>Proses 3</h3>
            <p></p>
        </div>
    </div>
</body>
</html>