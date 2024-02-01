<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include('connection.php');

    $userId = $_SESSION['id'];
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productImage = $_POST['productImage'];

    $productName = mysqli_real_escape_string($conn, htmlspecialchars(trim($productName)));
    $productPrice = mysqli_real_escape_string($conn, htmlspecialchars(trim($productPrice)));
    $productImage = mysqli_real_escape_string($conn, htmlspecialchars(trim($productImage)));

    $sql = "INSERT INTO products (name, price, image, userId) VALUES ('$productName', '$productPrice', '$productImage', '$userId')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Product created successfully"); window.location.href = "productManagement.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}