<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Skincare</title> 
    <style> 
    body { 
           font-family: Arial, sans-serif;
        
    }
    header {
            background-color: #333;
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
    button{
        background-color: #373737;
        border-radius: 8%;
        padding: 7px;
        color: #d2d2d2;
    }
</style>
</head>   
<body> 
    <header>
        <a href="onlineshop.php"><img src="public/anaylla.png" alt="Anaylla Logo"></a>        
    </header>
    <div class="container"> 
        <div class="product"> 
            <h2> BIOTHERM BLUE PRO-RETINOL </h2>
            <a href="skincare_details.php" class="product-link"> 
            <img src="skincare/biotherm.jpg" alt=" BIOTHERM BLUE PRO-RETINOL " style="width: 200px; height: 200px;"></a>
            <p> Night creme </p> 
            <div class="price"> 104.30 € </div> 
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <h2> CHANEL HYDRA BEAUTY </h2>
            <a href="skincare_details1.php" class="product-link">
            <img src="skincare/chanel.png" alt="CHANEL HYDRA BEAUTY" style="width: 200px; height: 200px;"></a>
            <p> Micro creme </p>
            <div class="price"> 99.60 € </div>
            <button>Add to Cart</button>
        </div>
    
        <div class="product">
            <h2> CLARINS MULTI ACTIVE </h2>
            <a href="skincare_details2.php" class="product-link">
            <img src="skincare/clarins.jpg" alt=" CLARINS MULTI ACTIVE " style="width: 200px; height: 200px;"></a>
            <p> Day gel-cream </p>
            <div class="price"> 71.40 €</div>
            <button>Add to Cart</button>
        </div>
    </div>
    
    <div class="container">
        <div class="product">
            <h2> CLINIQUE SERUM </h2>
            <a href="skincare_details3.php" class="product-link">
            <img src="skincare/clinique.jpg" alt=" CLINIQUE SERUM " style="width: 200px; height: 200px;"></a>
            <p> Anti blemish & line correcting </p>
            <div class="price"> 72.90 € </div>
            <button>Add to Cart</button>
        </div>
    
        <div class="product">
            <h2> DIOR CAPTURE YOUTH GLOW BOOSTER </h2>
            <a href="skincare_details4.php" class="product-link">
            <img src="skincare/dior.jpg" alt=" DIOR CAPTURE YOUTH GLOW BOOSTER " style="width: 200px; height: 200px;"></a>
            <p> Age-Delay Illuminating Serum </p>
            <div class="price"> 119.20 € </div>
            <button>Add to Cart</button>
        </div>
    
        <div class="product">
            <h2> LANCOME ADVANCED GÉNIFIQUE </h2>
            <a href="skincare_details5.php" class="product-link" >
            <img src="skincare/lancome.jpg" alt=" LANCOME ADVANCED GÉNIFIQUE " style="width: 200px; height: 200px;"></a>
            <p> Sensitive serum </p>
            <div class="price"> 133.40 € </div>
            <button>Add to Cart</button>
        </div>
    </div>
</body> 
</html>
