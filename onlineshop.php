<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anaylla</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
</head>
<style>
    @media only screen and (max-width: 600px) {
        header {
            flex-direction: column;
            align-items: center;
        }

        .header-container {
            margin-top: 20px;
            flex-direction: column;
        }

        .products-container {
            justify-content: center;
            display: flex;
        }

        .product-item {
            margin: 10px 0;
        }

        footer {
            position: relative;
        }
    }
</style>

<body>
    <header>
        <img src="public/anaylla.png" alt="Anaylla Logo">
        <div class="header-container">
            <p><a href="onlineshop.php">Home</a></p>
            <p><a href="about.php">About Us</a></p>
            <p><a href="contact.php">Contact Us</a></p>
            <p><a href="products.php">Products</a></p>
            <P><a href="loginregister.php">Login/Register</a></P>
        </div>
    </header>

    <main>
        <div class="products-container">
            <div class="product-item">
                <a href="parfume.php">
                    <img src="parfume.jpg" alt="Parfume">
                </a>
                <h3>Parfumes</h3>
            </div>
            <div class="product-item">
                <a href="makeup.php">
                    <img src="makeupp.jpg" alt="Makeup">
                </a>
                <h3>Makeup</h3>
            </div>
            <div class="product-item">
                <a href="skincare.php">
                    <img src="skincare.jpg" alt="Skincare">
                </a>
                <h3>Skincare</h3>
            </div>
            <div class="product-item">
                <a href="importedProducts.php">
                    <img src="newproduct.png" alt="Download">
                </a>
                <h3>New products</h3>
            </div>
        </div>
    </main>

    <footer>

        <div class="social-links">
            <div class="social-link-container">
                <img src="public/facebook.png" alt="Facebook">
                <a href="https://www.facebook.com" target="_blank">Facebook</a>
            </div>
            <div class="social-link-container">
                <img src="public/tiktok.svg" alt="Tiktok">
                <a href="https://www.tiktok.com/en/" target="_blank">TikTok</a>
            </div>
            <div class="social-link-container">
                <img src="public/instagram.png" alt="Instagram">
                <a href="https://www.instagram.com" target="_blank">Instagram</a>
            </div>
        </div>
        <p>Prizren, Kosove/ 049 999 999/ info@anaylla.com</p>
    </footer>
</body>

</html>