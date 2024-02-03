<?php
include("cart.php");

?>


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
        <P><a href="display_cart.php">Cart</a></P>
        <P><a href="loginregister.php">Logout</a></P>
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
    @media only screen and (max-width: 600px) {
  .header-container {
      flex-direction: column;
      text-align: center;
  }

  .header-container p {
      margin: 10px 0;
  }

  .container {
      margin: 20px;
  }
}

    
</style>

<body> 
    
<div class="container"> 
<div class="product">
    <h2>GIORGIO ARMANI SI</h2>
    <a href="product_details.php" class="product-link">
        <img src="parfums/giorgioarmanisi.png" alt="GIORGIO ARMANI SI" style="width: 200px; height: 200px;">
    </a>
    <p>EAU DE PARFUM</p>
    <div class="price">94.80 €</div>
    <form method="post" action="onlineshop1.php">
        <input type="hidden" name="id" value="1">
        <input type="hidden" name="name" value="GIORGIO ARMANI SI">
        <input type="hidden" name="price" value="94.80">
        <input type="hidden" name="image" value="parfums/giorgioarmanisi.png">

        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
</div>

       
        <div class="product">
            <h2>GIORGIO ARMANI MY WAY NACRE </h2>
            <a href="product_details1.php" class="product-link">
            <img src="parfums/giorgioarmanimywaynacre.png " alt=" GIORGIO ARMANI MY WAY NACRE " style="width: 200px; height: 200px;"></a>
            <p>EAU DE PARFUM</p>
            <div class="price">124.70 € </div>
            <form method="post" action="onlineshop1.php">
            <form method="post" action="onlineshop1.php">
        <input type="hidden" name="id" value="2">
        <input type="hidden" name="name" value="GIORGIO ARMANI MY WAY NACRE">
        <input type="hidden" name="price" value="124.70">
        <input type="hidden" name="image" value="parfums/giorgioarmanimywaynacre.png">

        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
        </div>
    
        <div class="product">
            <h2>GIORGIO ARMANI STRONGER WITH YOU AMBER </h2>
            <a href="product_details2.php" class="product-link">
            <img src="parfums/giorgioarmanistrongerwithyouamber.png" alt=" GIORGIO ARMANI STRONGER WITH YOU AMBER " style="width: 200px; height: 200px;"></a>
            <p>EAU DE PARFUM</p>
            <div class="price">88.50 €</div>
            <form method="post" action="onlineshop1.php">
            <input type="hidden" name="id" value="3">
        <input type="hidden" name="name" value="GIORGIO ARMANI STRONGER WITH YOU AMBER">
        <input type="hidden" name="price" value="88.50">
        <input type="hidden" name="image" value="parfums/giorgioarmanistrongerwithyouamber.png">

        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
        </div>
    </div>
    
    <div class="container">
        <div class="product">
            <h2>JEAN PAUL GAULTIER GAULTIER DIVINE</h2>
            <a href="product_details3.php" class="product-link">
            <img src="parfums/jeanpaulgaultiergaultierdivine.PNG " alt="JEAN PAUL GAULTIER GAULTIER DIVINE" style="width: 200px; height: 200px;"></a>
            <p>EAU DE PARFUM</p>
            <div class="price">162.30 € </div>
            <form method="post" action="onlineshop1.php">
            <input type="hidden" name="id" value="4">
        <input type="hidden" name="name" value="JEAN PAUL GAULTIER GAULTIER DIVINE">
        <input type="hidden" name="price" value="162.30">
        <input type="hidden" name="image" value="parfums/jeanpaulgaultiergaultierdivine.PNG">

        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
        </div>
    
        <div class="product">
            <h2>JEAN PAUL LA BELLE LE PARFUM </h2>
            <a href="product_details4.php" class="product-link">
            <img src="parfums/jeanpaullabelle.PNG" alt="JEAN PAUL LA BELLE LE PARFUM" style="width: 200px; height: 200px;"></a>
            <p>EAU DE PARFUM INTENSE</p>
            <div class="price">123.20 € </div>
            <form method="post" action="onlineshop1.php">
            <input type="hidden" name="id" value="5">
        <input type="hidden" name="name" value="JEAN PAUL LA BELLE LE PARFUM">
        <input type="hidden" name="price" value="123.20">
        <input type="hidden" name="image" value="parfums/jeanpaullabelle.PNG">

        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
        </div>
    
        <div class="product">
            <h2>JEAN PAUL GAULTIER SCANDAL</h2>
            <a href="product_details5.php" class="product-link">
            <img src="parfums/jeanpaulgaultierscandal.jpeg " alt="JEAN PAUL GAULTIER SCANDAL" style="width: 200px; height: 200px;"></a>
            <p>EAU DE PARFUM</p>
            <div class="price">152.60 € </div>
            <form method="post" action="onlineshop1.php">
            <input type="hidden" name="id" value="6">
        <input type="hidden" name="name" value="JEAN PAUL GAULTIER SCANDAL">
        <input type="hidden" name="price" value="152.60">
        <input type="hidden" name="image" value="parfums/jeanpaulgaultierscandal.jpeg">

        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
        </div>
    </div>
    
    <div class="container"> 
        <div class="product"> 
            <h2> DIOR BACKSTAGE </h2> 
            <a href="makeup_details.php" class="product-link">
            <img src="makeup/dior.jpeg" alt="" style="width: 200px; height: 200px;"></a>
            <p> Face & Body Foundation </p> 
            <div class="price"> 43.00 € </div> 
            <form method="post" action="onlineshop1.php">
            <input type="hidden" name="id" value="7">
        <input type="hidden" name="name" value="DIOR BACKSTAGE">
        <input type="hidden" name="price" value="43.00">
        <input type="hidden" name="image" value="makeup/dior.jpeg">

        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
        </div>

        <div class="product">
            <h2> ESTEE LAUDER </h2>
            <a href="makeup_details1.php" class="product-link">
            <img src="makeup/esteelauder.jpg" alt="" style="width: 200px; height: 200px;"></a>
            <p>Double wear stay in place foundation</p>
            <div class="price"> 55.60 € </div>
            <form method="post" action="onlineshop1.php">
            <input type="hidden" name="name" value="ESTEE LAUDER">
            <input type="hidden" name="id" value="8">
        <input type="hidden" name="price" value="55.60">
        <input type="hidden" name="image" value="makeup/esteelauder.jpg">

        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
        </div>
    
        <div class="product">
            <h2> LANCOME TEINT IDOLE </h2>
            <a href="makeup_details2.php" class="product-link">
            <img src="makeup/lancome.jpg" alt="" style="width: 200px; height: 200px;"></a>
            <p>Ultra wear foundation</p>
            <div class="price"> 66.90 €</div>
            <form method="post" action="onlineshop1.php">
            <input type="hidden" name="name" value="LANCOME TEINT IDOLE">
            <input type="hidden" name="id" value="9">
        <input type="hidden" name="price" value="66.90">
        <input type="hidden" name="image" value="makeup/lancome.jpg">

        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
        </div>
    </div>
    
    <div class="container">
        <div class="product">
            <h2>SHISEIDO SYNCHRO SKIN RADIANT LIFTING </h2>
            <a href="makeup_details3.php" class="product-link">
            <img src="makeup/shiseido.jpg" alt="" style="width: 200px; height: 200px;"></a>
            <p> Foundation SPF 30   </p>
            <div class="price"> 62.40 € </div>
            <form method="post" action="onlineshop1.php">
            <input type="hidden" name="name" value="SHISEIDO SYNCHRO SKIN RADIANT LIFTING ">
            <input type="hidden" name="id" value="10">
        <input type="hidden" name="price" value="62.40">
        <input type="hidden" name="image" value="makeup/shiseido.jpg">

        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
        </div>
    
        <div class="product">
            <h2>FENTY PRO FILTER </h2>
            <a href="makeup_details4.php" class="product-link">
            <img src="makeup/fenty.jpeg" alt="" style="width: 200px; height: 200px;"></a>
            <p> Soft Matte Longwear Liquid Foundation </p>
            <div class="price"> 40.00 € </div>
            <form method="post" action="onlineshop1.php">
            <input type="hidden" name="name" value="FENTY PRO FILTER">
            <input type="hidden" name="id" value="11">
        <input type="hidden" name="price" value="40.00">
        <input type="hidden" name="image" value="makeup/fenty.jpeg">

        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
        </div>
    
        <div class="product">
            <h2> CHARLOTTE TILBURY </h2>
            <a href="makeup_details5.php" class="product-link">
            <img src="makeup/charlottetilbury.jpeg" alt="" style="width: 200px; height: 200px;"></a>
            <p>Airbrush Flawless Longwear Foundation  </p>
            <div class="price"> 49.70 € </div>
            <form method="post" action="onlineshop1.php">
            <input type="hidden" name="name" value="CHARLOTTE TILBURY">
            <input type="hidden" name="id" value="12">
        <input type="hidden" name="price" value="49.70">
        <input type="hidden" name="image" value="makeup/charlottetilbury.jpeg">

        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
        </div>
    </div>

    <div class="container"> 
        <div class="product"> 
            <h2> BIOTHERM BLUE PRO-RETINOL </h2>
            <a href="skincare_details.php" class="product-link"> 
            <img src="skincare/biotherm.jpg" alt=" BIOTHERM BLUE PRO-RETINOL " style="width: 200px; height: 200px;"></a>
            <p> Night creme </p> 
            <div class="price"> 104.30 € </div> 
            <form method="post" action="onlineshop1.php">
            <input type="hidden" name="name" value="BIOTHERM BLUE PRO-RETINOL">
            <input type="hidden" name="id" value="13">
        <input type="hidden" name="price" value="104.30">
        <input type="hidden" name="image" value="skincare/biotherm.jpg">

        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
        </div>
        <div class="product">
            <h2> CHANEL HYDRA BEAUTY </h2>
            <a href="skincare_details1.php" class="product-link">
            <img src="skincare/chanel.png" alt="CHANEL HYDRA BEAUTY" style="width: 200px; height: 200px;"></a>
            <p> Micro creme </p>
            <div class="price"> 99.60 € </div>
            <form method="post" action="onlineshop1.php">
            <input type="hidden" name="name" value="CHANEL HYDRA BEAUTY">
            <input type="hidden" name="id" value="14">
        <input type="hidden" name="price" value="99.60">
        <input type="hidden" name="image" value="skincare/chanel.png">

        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
        </div>
    
        <div class="product">
            <h2> CLARINS MULTI ACTIVE </h2>
            <a href="skincare_details2.php" class="product-link">
            <img src="skincare/clarins.jpg" alt=" CLARINS MULTI ACTIVE " style="width: 200px; height: 200px;"></a>
            <p> Day gel-cream </p>
            <div class="price"> 71.40 €</div>
            <form method="post" action="onlineshop1.php">
            <input type="hidden" name="name" value="CLARINS MULTI ACTIVE">
            <input type="hidden" name="id" value="15">
        <input type="hidden" name="price" value="71.40">
        <input type="hidden" name="image" value="skincare/clarins.jpg">

        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
        </div>
    </div>
    
    <div class="container">
        <div class="product">
            <h2> CLINIQUE SERUM </h2>
            <a href="skincare_details3.php" class="product-link">
            <img src="skincare/clinique.jpg" alt=" CLINIQUE SERUM " style="width: 200px; height: 200px;"></a>
            <p> Anti blemish & line correcting </p>
            <div class="price"> 72.90 € </div>
            <form method="post" action="onlineshop1.php">
            <input type="hidden" name="name" value="CLINIQUE SERUM">
            <input type="hidden" name="id" value="16">
        <input type="hidden" name="price" value="72.90">
        <input type="hidden" name="image" value="skincare/clinique.jpg">

        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
        </div>
    
        <div class="product">
            <h2> DIOR CAPTURE YOUTH GLOW BOOSTER </h2>
            <a href="skincare_details4.php" class="product-link">
            <img src="skincare/dior.jpg" alt=" DIOR CAPTURE YOUTH GLOW BOOSTER " style="width: 200px; height: 200px;"></a>
            <p> Age-Delay Illuminating Serum </p>
            <div class="price"> 119.20 € </div>
            <form method="post" action="onlineshop1.php">
            <input type="hidden" name="name" value="DIOR CAPTURE YOUTH GLOW BOOSTER">
            <input type="hidden" name="id" value="17">
        <input type="hidden" name="price" value="119.20">
        <input type="hidden" name="image" value="skincare/dior.jpg">

        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
        </div>
    
        <div class="product">
            <h2> LANCOME ADVANCED GÉNIFIQUE </h2>
            <a href="skincare_details5.php" class="product-link" >
            <img src="skincare/lancome.jpg" alt=" LANCOME ADVANCED GÉNIFIQUE " style="width: 200px; height: 200px;"></a>
            <p> Sensitive serum </p>
            <div class="price"> 133.40 € </div>
            <form method="post" action="onlineshop1.php">
            <input type="hidden" name="name" value="LANCOME ADVANCED GÉNIFIQUE">
            <input type="hidden" name="id" value="18">
        <input type="hidden" name="price" value="133.40">
        <input type="hidden" name="image" value="skincare/lancome.jpg">

        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
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
