<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Anaylla</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <style>
        body {
            
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #d2d2d2;
            color: #373737;
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

        h1, p {
            text-align: center;
        }

        a {
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        @media only screen and (max-width: 768px) {
            .header-container {
                flex-direction: column;
                text-align: center;
            }

            .header-container p {
                margin: 10px 0;
            }
        }
    </style>
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

    <h1>Thank You for Contacting Us!</h1>
    <p>Your message has been successfully submitted.</p>
    <p>We will get back to you as soon as possible.</p>
    <p>Return to <a href="onlineshop.php">Home</a></p>
</body>
</html>
