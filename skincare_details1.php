<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product details </title> 
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
</head>
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
<style>
    body { 
        font-family: Arial, sans-serif;
        background-color: white;
    }
    
    header {
        background-color: #d2d2d2;
        color: white;
        text-align: center;
        padding: 10px;
    }
       
    .container {
        display: flex;
        justify-content: left;
        flex-wrap: wrap;
        margin: 20px;
        margin-bottom: 70px;
    }
    .product {
        padding: 30px;
        margin: 20px;
        width: 500px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        text-align:center;
    }
    .product h2 {
        margin-top: 0;
    }
    .product p {
        font-size: 18px;
        margin-bottom: 10px;
    }
    .price {
        font-size: 24px;
        font-weight: bold;
        margin-top: 10px;
    }
    .productspecifications{
       display: inline;
       padding: 20px;
       margin: 20px;
    }
    button{
        background-color: #373737;
        border-radius: 8%;
        padding: 5px;
        margin: 10px;
        color: #d2d2d2;
     
    }
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
    
    <div class="container"> 
        <div class="product"> 
           
            <img src="skincare/chanel.png" alt="" style="width: 200px; height: 200px;">
        </div>
        
        <div class="productspecifications">
            <h2>CHANEL HYDRA BEAUTY</h2>
            <p>Micro creme</p>
            <p>Product Code: BC1543257</p>
         
          
            
            
            <div class="price">99.60 €</div> 
            <button>Add to Cart</button>
        </div>
    </div>
</head>
<body>
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