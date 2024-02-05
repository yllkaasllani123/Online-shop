<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Anaylla</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #d2d2d2;
        }

        .header-container {
            display: flex;
        }

        .header-container p {
            margin: 0 15px;
        }

        #kontenti {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        #kontenti img {
            max-width: 100%;
            height: auto;
        }

        button {
            border-radius: 50%;
            border-style: none;
            width: 50px;
            height: 50px;
            font-size: 10pt;
            margin-top: 10px;
        }

        button:hover {
            background-color: rgb(107, 99, 99);
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #d2d2d2;
        }

        .social-links {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
        }

        .social-link-container {
            margin: 0 10px;
        }

        .social-link-container img {
            max-width: 30px;
            height: auto;
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
    <script src="script.js"></script>
    </head>
    <body>
    <header>
        <img src="public/anaylla.png" alt="Anaylla Logo">   
        <div class="header-container">
            <p><a href="onlineshop.php">Home</a></p>
            <p><a href="about.php">About Us</a></p>
            <p><a href="contact.php">Contact Us</a></p>
            <p><a href="products.php">Products</a></p>
            <p><a href="loginregister.php">Login/Register</a></p>
        </div>
    </header>

    <div id="kontenti">
        <header>
            <img src="aboutus/4.png" alt="" id="slideshow">
        </header>
        <button onclick="nderroFoton()">Next</button>
    </div>
    
    <?php
   include "connection.php";
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT title, content, section FROM about_us";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $title = $row["title"];
            $content = $row["content"];
            $section = $row["section"];

            echo "<main class='container'>";
            echo "<section class='about-section'>";
            
            echo "<h1>$title</h1>";
            echo "<p>$content</p>";

            if ($section == 'story') {
                
            } elseif ($section == 'mission') {
               
            } elseif ($section == 'choose') {
               
            } elseif ($section == 'community') {
              
            }


            echo "</div>";
            echo "</section>";
            echo "</main>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>


   
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





