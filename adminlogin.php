<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
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
                <li><a href="login.php">Login as user</a></li>
            </ul>
        </nav>
    </header>
<div class="container">
        <div class="left-section">
            <div class="logo">
                <img src="./logo/logo1.png" alt="Logo Perusahaan">
            </div>
            <div class="motto">
                <h1>Selamat Datang..</h1>
                <p>Beras Berkualitas Bagus,Karna diolah secara baik oleh Petani Jawa.</p>
            </div>
        </div>
        <div class="right-section">
            <div class="login-box">
                <h1>Masuk</h1>
                <form action="admin.php" method="post">
                    <div class="textbox">
                        <input type="text" placeholder="Email atau Telepon" name="email" required>
                    </div>
                    <div class="textbox">
                        <input type="password" placeholder="Kata Sandi" name="password" required>
                    </div>
                    <button class="btn" type="submit">Masuk</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>