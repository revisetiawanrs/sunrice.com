<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="product.css">
</head>
<body>
    <header>
        <nav>
        <div class="logo">
    <img src="./logo/logo.png" alt="Logo Haji Ahmad">
</div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="tentangkami.php">Tentang Kami</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
    <section class="banner">
            <div class="slides">
            <img src="banner1.jpg" alt="Banner 1">
                <img src="slide2.png" alt="Banner 2">
                <img src="slide3.png" alt="Banner 3">
            </div>
            <div class="indicators">
                <span class="indicator"></span>
                <span class="indicator"></span>
                <span class="indicator"></span>
            </div>
        </section>
        <section class="product-section">
            <button class="buy-now" onclick="window.location.href='login.php'">Beli Product Sekarang</button>
            <div class="product-carousel">
                <button class="carousel-btn left-btn" onclick="moveLeft()">&#10094;</button>
                <div class="product-container" id="product-container">
                    <div class="product-card">
                        <img src="./product/beras1.jpg" alt="Product 1">
                        <h3>Beras Maknyuss</h3>
                        <p>Harga: Rp60.000</p>
                        <button onclick="showDetail('Beras Maknyuss', 'Beras Maknyuss adalah pilihan terbaik untuk Anda yang menginginkan beras dengan kualitas premium. Ditanam di sawah subur dan diproses dengan teknologi modern, Beras Maknyuss memberikan rasa nasi yang pulen, lezat, dan beraroma wangi. Cocok untuk segala jenis masakan, dari nasi putih, nasi goreng, hingga sushi.')">Detail Product</button>
                    </div>
                    <div class="product-card">
                        <img src="./product/beras2.jpg" alt="Product 2">
                        <h3>Beras Sania</h3>
                        <p>Harga: Rp200.000</p>
                        <button onclick="showDetail('Beras sania', 'Beras Sania adalah pilihan yang sempurna untuk keluarga Anda. Dikenal karena kualitasnya yang tinggi dan rasa nasi yang pulen serta lezat, Beras Sania diproses dengan teknologi mutakhir untuk memastikan setiap butir berasnya bersih dan bebas dari bahan kimia berbahaya. Cocok untuk berbagai jenis masakan sehari-hari.')">Detail Product</button>
                    </div>
                    <div class="product-card">
                        <img src="./product/beras2.jpg" alt="Product 2">
                        <h3>Beras Sania</h3>
                        <p>Harga: Rp200.000</p>
                        <button onclick="showDetail('Beras sania', 'Beras Sania adalah pilihan yang sempurna untuk keluarga Anda. Dikenal karena kualitasnya yang tinggi dan rasa nasi yang pulen serta lezat, Beras Sania diproses dengan teknologi mutakhir untuk memastikan setiap butir berasnya bersih dan bebas dari bahan kimia berbahaya. Cocok untuk berbagai jenis masakan sehari-hari.')">Detail Product</button>
                    </div>
                    <div class="product-card">
                        <img src="./product/beras2.jpg" alt="Product 2">
                        <h3>Beras Sania</h3>
                        <p>Harga: Rp200.000</p>
                        <button onclick="showDetail('Beras sania', 'Beras Sania adalah pilihan yang sempurna untuk keluarga Anda. Dikenal karena kualitasnya yang tinggi dan rasa nasi yang pulen serta lezat, Beras Sania diproses dengan teknologi mutakhir untuk memastikan setiap butir berasnya bersih dan bebas dari bahan kimia berbahaya. Cocok untuk berbagai jenis masakan sehari-hari.')">Detail Product</button>
                    </div>
                    <div class="product-card">
                        <img src="./product/beras2.jpg" alt="Product 2">
                        <h3>Beras Sania</h3>
                        <p>Harga: Rp200.000</p>
                        <button onclick="showDetail('Beras sania', 'Beras Sania adalah pilihan yang sempurna untuk keluarga Anda. Dikenal karena kualitasnya yang tinggi dan rasa nasi yang pulen serta lezat, Beras Sania diproses dengan teknologi mutakhir untuk memastikan setiap butir berasnya bersih dan bebas dari bahan kimia berbahaya. Cocok untuk berbagai jenis masakan sehari-hari.')">Detail Product</button>
                    </div>
                    <div class="product-card">
                        <img src="./product/beras2.jpg" alt="Product 2">
                        <h3>Beras Sania</h3>
                        <p>Harga: Rp200.000</p>
                        <button onclick="showDetail('Beras sania', 'Beras Sania adalah pilihan yang sempurna untuk keluarga Anda. Dikenal karena kualitasnya yang tinggi dan rasa nasi yang pulen serta lezat, Beras Sania diproses dengan teknologi mutakhir untuk memastikan setiap butir berasnya bersih dan bebas dari bahan kimia berbahaya. Cocok untuk berbagai jenis masakan sehari-hari.')">Detail Product</button>
                    </div>
                    <div class="product-card">
                        <img src="./product/beras2.jpg" alt="Product 2">
                        <h3>Beras Sania</h3>
                        <p>Harga: Rp200.000</p>
                        <button onclick="showDetail('Beras sania', 'Beras Sania adalah pilihan yang sempurna untuk keluarga Anda. Dikenal karena kualitasnya yang tinggi dan rasa nasi yang pulen serta lezat, Beras Sania diproses dengan teknologi mutakhir untuk memastikan setiap butir berasnya bersih dan bebas dari bahan kimia berbahaya. Cocok untuk berbagai jenis masakan sehari-hari.')">Detail Product</button>
                    </div>
                    <div class="product-card">
                        <img src="./product/beras2.jpg" alt="Product 2">
                        <h3>Beras Sania</h3>
                        <p>Harga: Rp200.000</p>
                        <button onclick="showDetail('Beras sania', 'Beras Sania adalah pilihan yang sempurna untuk keluarga Anda. Dikenal karena kualitasnya yang tinggi dan rasa nasi yang pulen serta lezat, Beras Sania diproses dengan teknologi mutakhir untuk memastikan setiap butir berasnya bersih dan bebas dari bahan kimia berbahaya. Cocok untuk berbagai jenis masakan sehari-hari.')">Detail Product</button>
                    </div>
                    <!-- Tambahkan produk lainnya di sini -->
                </div>
                <button class="carousel-btn right-btn" onclick="moveRight()">&#10095;</button>
            </div>
        </section>
        
        <div id="product-detail-modal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeDetail()">&times;</span>
                <h2 id="modal-title"></h2>
                <p id="modal-description"></p>
            </div>
        </div>
    </main>

    <script src="product.js"></script>
    <script src="scripts.js"></script>
</body>
</html>