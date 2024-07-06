<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
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
        <section class="contact-us">
            <h1>Contact Us</h1>
            <form action="send_email.php" method="post" class="contact-form">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Pesan:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                
                <button type="submit">Kirim</button>
            </form>
        </section>
    </main>
</body>
</html>
