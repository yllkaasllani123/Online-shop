<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Anaylla</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <title>Products</title> 
</head>
<header>
    <img src="public/anaylla.png" alt="Anaylla Logo">
    <div class="header-container">
        <p><a href="onlineshop.php">Home</a></p>
        <p><a href="about.php">About Us</a></p>
        <p><a href="contact.php">Contact Us</a></p>
        <p><a href="products.php">Products</a></p>
        <P><a href="loginsignup.php">Login/Sign up</a></P>
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
        justify-content: space-around;
        flex-wrap: wrap;
        margin: 20px;
    }
    .product {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
        width: 300px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        text-align:center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

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
    .container{
        margin-bottom: 70px;
         margin-bottom: 50px;
    }
    button{
        background-color: #373737;
        border-radius: 8%;
        padding: 7px;
        color: #d2d2d2;
    }
    
</style>

<body> 
    
    <div class="container"> 
        <div class="product"> 
            <h2>GIORGIO ARMANI SI </h2> 
            <a href="product_details.html" class="product-link">
            <img src="parfums/giorgioarmanisi.png" alt="GIORGIO ARMANI SI" style="width: 200px; height: 200px;"></a>
            <p>EAU DE PARFUM</p> 
            <div class="price">94.80 € </div> 
            <button>Add to Cart</button>
        </div>
       
        <div class="product">
            <h2>GIORGIO ARMANI MY WAY NACRE </h2>
            <a href="product_details1.html" class="product-link">
            <img src="parfums/giorgioarmanimywaynacre.png " alt=" GIORGIO ARMANI MY WAY NACRE " style="width: 200px; height: 200px;"></a>
            <p>EAU DE PARFUM</p>
            <div class="price">124.70 € </div>
            <button>Add to Cart</button>
        </div>
    
        <div class="product">
            <h2>GIORGIO ARMANI STRONGER WITH YOU AMBER </h2>
            <a href="product_details2.html" class="product-link">
            <img src="parfums/giorgioarmanistrongerwithyouamber.png" alt=" GIORGIO ARMANI STRONGER WITH YOU AMBER " style="width: 200px; height: 200px;"></a>
            <p>EAU DE PARFUM</p>
            <div class="price">88.50 €</div>
            <button>Add to Cart</button>
        </div>
    </div>
    
    <div class="container">
        <div class="product">
            <h2>JEAN PAUL GAULTIER GAULTIER DIVINE</h2>
            <a href="product_details3.html" class="product-link">
            <img src="parfums/jeanpaulgaultiergaultierdivine.PNG " alt="JEAN PAUL GAULTIER GAULTIER DIVINE" style="width: 200px; height: 200px;"></a>
            <p>EAU DE PARFUM</p>
            <div class="price">162.30 € </div>
            <button>Add to Cart</button>
        </div>
    
        <div class="product">
            <h2>JEAN PAUL LA BELLE LE PARFUM </h2>
            <a href="product_details4.html" class="product-link">
            <img src="parfums/jeanpaullabelle.PNG" alt="JEAN PAUL LA BELLE LE PARFUM" style="width: 200px; height: 200px;"></a>
            <p>EAU DE PARFUM INTENSE</p>
            <div class="price">123.20 € </div>
            <button>Add to Cart</button>
        </div>
    
        <div class="product">
            <h2>JEAN PAUL GAULTIER SCANDAL</h2>
            <a href="product_details5.html" class="product-link">
            <img src="parfums/jeanpaulgaultierscandal.jpeg " alt="JEAN PAUL GAULTIER SCANDAL" style="width: 200px; height: 200px;"></a>
            <p>EAU DE PARFUM</p>
            <div class="price">152.60 € </div>
            <button>Add to Cart</button>
        </div>
    </div>
    
    <div class="container"> 
        <div class="product"> 
            <h2> DIOR BACKSTAGE </h2> 
            <a href="makeup_details.html" class="product-link">
            <img src="makeup/dior.jpeg" alt="" style="width: 200px; height: 200px;"></a>
            <p> Face & Body Foundation </p> 
            <div class="price"> 43.00 € </div> 
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <h2> ESTEE LAUDER </h2>
            <a href="makeup_details1.html" class="product-link">
            <img src="makeup/esteelauder.jpg" alt="" style="width: 200px; height: 200px;"></a>
            <p>Double wear stay in place foundation</p>
            <div class="price"> 55.60 € </div>
            <button>Add to Cart</button>
        </div>
    
        <div class="product">
            <h2> LANCOME TEINT IDOLE </h2>
            <a href="makeup_details2.html" class="product-link">
            <img src="makeup/lancome.jpg" alt="" style="width: 200px; height: 200px;"></a>
            <p>Ultra wear foundation</p>
            <div class="price"> 66.90 €</div>
            <button>Add to Cart</button>
        </div>
    </div>
    
    <div class="container">
        <div class="product">
            <h2>SHISEIDO SYNCHRO SKIN RADIANT LIFTING </h2>
            <a href="makeup_details3.html" class="product-link">
            <img src="makeup/shiseido.jpg" alt="" style="width: 200px; height: 200px;"></a>
            <p> Foundation SPF 30   </p>
            <div class="price"> 62.40 € </div>
            <button>Add to Cart</button>
        </div>
    
        <div class="product">
            <h2>FENTY PRO FILTER </h2>
            <a href="makeup_details4.html" class="product-link">
            <img src="makeup/fenty.jpeg" alt="" style="width: 200px; height: 200px;"></a>
            <p> Soft Matte Longwear Liquid Foundation </p>
            <div class="price"> 40.00 € </div>
            <button>Add to Cart</button>
        </div>
    
        <div class="product">
            <h2> CHARLOTTE TILBURY </h2>
            <a href="makeup_details5.html" class="product-link">
            <img src="makeup/charlottetilbury.jpeg" alt="" style="width: 200px; height: 200px;"></a>
            <p>Airbrush Flawless Longwear Foundation  </p>
            <div class="price"> 49.70 € </div>
            <button>Add to Cart</button>
        </div>
    </div>

    <div class="container"> 
        <div class="product"> 
            <h2> BIOTHERM BLUE PRO-RETINOL </h2>
            <a href="skincare_details.html" class="product-link"> 
            <img src="skincare/biotherm.jpg" alt=" BIOTHERM BLUE PRO-RETINOL " style="width: 200px; height: 200px;"></a>
            <p> Night creme </p> 
            <div class="price"> 104.30 € </div> 
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <h2> CHANEL HYDRA BEAUTY </h2>
            <a href="skincare_details1.html" class="product-link">
            <img src="skincare/chanel.png" alt="CHANEL HYDRA BEAUTY" style="width: 200px; height: 200px;"></a>
            <p> Micro creme </p>
            <div class="price"> 99.60 € </div>
            <button>Add to Cart</button>
        </div>
    
        <div class="product">
            <h2> CLARINS MULTI ACTIVE </h2>
            <a href="skincare_details2.html" class="product-link">
            <img src="skincare/clarins.jpg" alt=" CLARINS MULTI ACTIVE " style="width: 200px; height: 200px;"></a>
            <p> Day gel-cream </p>
            <div class="price"> 71.40 €</div>
            <button>Add to Cart</button>
        </div>
    </div>
    
    <div class="container">
        <div class="product">
            <h2> CLINIQUE SERUM </h2>
            <a href="skincare_details3.html" class="product-link">
            <img src="skincare/clinique.jpg" alt=" CLINIQUE SERUM " style="width: 200px; height: 200px;"></a>
            <p> Anti blemish & line correcting </p>
            <div class="price"> 72.90 € </div>
            <button>Add to Cart</button>
        </div>
    
        <div class="product">
            <h2> DIOR CAPTURE YOUTH GLOW BOOSTER </h2>
            <a href="skincare_details4.html" class="product-link">
            <img src="skincare/dior.jpg" alt=" DIOR CAPTURE YOUTH GLOW BOOSTER " style="width: 200px; height: 200px;"></a>
            <p> Age-Delay Illuminating Serum </p>
            <div class="price"> 119.20 € </div>
            <button>Add to Cart</button>
        </div>
    
        <div class="product">
            <h2> LANCOME ADVANCED GÉNIFIQUE </h2>
            <a href="skincare_details5.html" class="product-link" >
            <img src="skincare/lancome.jpg" alt=" LANCOME ADVANCED GÉNIFIQUE " style="width: 200px; height: 200px;"></a>
            <p> Sensitive serum </p>
            <div class="price"> 133.40 € </div>
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
