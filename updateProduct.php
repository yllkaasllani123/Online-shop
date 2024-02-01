<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include('connection.php');

    $userId = $_SESSION['id'];
    $productId = $_POST['productId'];
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productImage = $_POST['productImage'];

    $productId = mysqli_real_escape_string($conn, htmlspecialchars(trim($productId)));
    $productName = mysqli_real_escape_string($conn, htmlspecialchars(trim($productName)));
    $productPrice = mysqli_real_escape_string($conn, htmlspecialchars(trim($productPrice)));
    $productImage = mysqli_real_escape_string($conn, htmlspecialchars(trim($productImage)));

    $sql = "UPDATE products SET name = '$productName', price = '$productPrice', image = '$productImage', userId = '$userId' WHERE id = '$productId'";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Product updated successfully"); window.location.href = "productManagement.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
