<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="profile-section">
                <img id="profile-pic" src="./profile/profile1.jpg" alt="Profile Picture">
                <a href="edit.php">Edit Profile</a>
                <div id="profile-name">Nama Anda</div>
                <div id="profile-status">Status Anda</div>
            </div>
            <nav>
                <ul>
                    <li><a href="beliproduct.php">Beli Produk</a></li>
                    <li><a href="jenisberas.php">Jenis Beras</a></li>
                    <li><a href="keranjang.php">Keranjang</a></li>
                    <li><a href="usersup.php">Info Supplier</a></li>
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </nav>
        </div>
        <div class="main-content">
            <div class="banner">
                <div class="slides">
                <img src="banner1.jpg" alt="Banner 1">
                <img src="slide2.png" alt="Banner 2">
                <img src="slide3.png" alt="Banner 3">
                </div>
                <div class="indicators">
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <section class="why-choose-us">
                <h2>Why Choose Us</h2>
                <div class="reasons">
                    <div class="reason">
                        <img src="./catalog/ct6.jpg" alt="Icon 1">
                        <p>Petani Terbaik</p><p>Kami bekerja sama dengan petani terbaik yang berpengalaman dalam menanam padi berkualitas. Proses tanam dan panen dilakukan dengan teliti untuk memastikan hasil panen yang terbaik.</p>
                    </div>
                    <div class="reason">
                        <img src="./catalog/ct2.png" alt="Icon 2">
                        <p>Perusahaan Terpercaya</p><p>Perusahaan kami berkomitmen untuk memberikan pelayanan terbaik dengan standar tinggi. Kepercayaan dan kepuasan pelanggan adalah prioritas utama kami.</p>
                    </div>
                    <div class="reason">
                        <img src="./catalog/ct7.jpg" alt="Icon 3">
                        <p>Kualitas Beras Unggulan</P><p>
                        Kami hanya menyediakan beras dengan kualitas unggulan. Beras kami telah melalui proses seleksi yang ketat sehingga memiliki tekstur, aroma, dan rasa yang terbaik.</p>
                    </div>
                    <div class="reason">
                        <img src="./catalog/ct8.jpg" alt="Icon 4">
                        <p>Jaringan Supplier Luas</p><p>
                        Kami memiliki jaringan supplier yang luas dan terpercaya, memastikan pasokan beras selalu tersedia dan dapat diandalkan kapan saja.</p>
                    </div>
                </div>
            </section>
            <section class="company-info">
                <h2>Informasi Perusahaan</h2>
                <div class="info">
                    <p><i class="material-icons">location_on</i> Jl. HS.Ronggo Waluyo, Puseurjaya, Telukjambe Timur, Karawang, Jawa Barat 41361</p>
                    <p><i class="material-icons">email</i> hajiahmad@gmail.com</p>
                    <p><i class="material-icons">phone</i> (0267) 8403140</p>
                </div>
            </section>
        </div>
    </div>
    <script src="slideshow.js"></script>
    <script src="edit-profile.js"></script>
</body>
</html>