<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Anaylla</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
</head>
<body>
 
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
    <style type="text/css">
        #kontenti {
            display: flex ;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI light', Tahoma;
            width: 100%;
            overflow: hidden;
            margin:0 auto;
            padding: 20px;
            width: 750px;
        }
        #kontenti img {
            max-width: 100%;
            
        }
        button{
            border-radius: 100%;
            border-style: inherit;
            width: 50px;
            height: 50px;
            font: 10pt;
        }

        button:hover{
            background-color: rgb(107, 99, 99);
        }
        footer{
            position: fixed;
            bottom: 0;
        }
       
        
      </style>
      
    </head>
    <body>
        <div id="kontenti">
            <header>
            <img src="aboutus/4.png" alt="" id="slideshow">
        </header>
        
        <button onclick="nderroFoton()">Next</button>
        </div>
    
        <script src="script.js">

        </script>

    <main class="container">
        
        <section class="about-section">
           <div class="titulli">  
            <h1>Welcome to Anaylla cosmetics where beauty meets innovation! </h1>
            <p> At Anaylla, we believe that everyone deserves to feel confident and beautiful in their skin. 
            Our passion for cosmetics goes beyond just products; it's about empowering individuals to express their unique beauty.
            Our products are carefully crafted using the finest ingredients to ensure a luxurious and enjoyable experience.</p>
        

            <h2>Our Story</h2>
            <p>Anaylla was born out of a desire to revolutionize the beauty industry. Founded in 2020, our journey started with a simple vision – to create high-quality cosmetics that not only enhance natural beauty but also inspire self-expression. </p>

            <h2>Our Mission</h2>
            <p>At Anaylla, our mission is to redefine beauty standards and make cosmetics accessible to all. 
            We are committed to creating products that not only elevate your look but also promote self-love and confidence. 
            Our dedication to cruelty-free and environmentally conscious practices reflects our values of ethical beauty.</p>
           
            <h2>Why Choose Anaylla ?</h2>
            <p>	Quality and Innovation: Our products are crafted with the finest ingredients and cutting-edge formulations, ensuring unparalleled quality and performance.
                Customer-Centric Approach: Your satisfaction is our priority. We are here to cater to your beauty needs, offering personalized recommendations and excellent customer service.
                Transparency: We believe in transparency. From ingredient sourcing to product manufacturing, we are open about our processes to build trust with our customers.</p>
         
            <h2>Our Community</h2>
            <p>Anaylla is more than just a cosmetics brand; it's a community. We are proud to be involved in various charitable initiatives and social causes that align with our values. 
            Together with our customers, we aim to make a positive impact on the world.</p>
            <p>Thank you for choosing Anaylla.  Join us on this exciting journey, and let's redefine beauty together!</p></div>
        </div>
        </section>
    </main>

   
</body>
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
</html>






