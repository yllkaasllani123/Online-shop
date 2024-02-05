<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: loginregister.php"); //renamed the location to loginregister.php
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-wrap: wrap;
        }

        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 300px;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }

        h2 {
            color: #333;
            margin-bottom: 10px;
        }

        p {
            color: #666;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            background-color: #333;
            border-radius: 4px;
            transition: background-color 0.3s ease-in-out;
        }

        a:hover {
            background-color: #555;
        }

        .logout {
            text-align: center;
            margin: 20px 0;
        }

        .logout a {
            text-decoration: none;
            font-weight: bold;
            color: #777;
            transition: color 0.3s ease-in-out;
        }

        .logout a:hover {
            color: #555;
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
</head>

<body>
    <header>
        <h1>Welcome to the Dashboard</h1>
    </header>

    <div class="container">
        <div class="card">
            <h2>Product Management</h2>
            <p>Manage your products here.</p>
            <a href="productManagement.php">Go to Product Management</a>
        </div>

        <div class="card">
            <h2>Messages</h2>
            <p>See all messages here.</p>
            <a href="allMessages.php">Go to messages</a>
        </div>

        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>

</html>