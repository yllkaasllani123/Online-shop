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
    $messageName = $_POST['productName'];
    $messageEmail = $_POST['productPrice'];
    $messageContent = $_POST['productImage'];

    $productId = mysqli_real_escape_string($conn, htmlspecialchars(trim($productId)));
    $messageName = mysqli_real_escape_string($conn, htmlspecialchars(trim($messageName)));
    $messageEmail = mysqli_real_escape_string($conn, htmlspecialchars(trim($messageEmail)));
    $messageContent = mysqli_real_escape_string($conn, htmlspecialchars(trim($messageContent)));

    $sql = "UPDATE products SET name = '$messageName', price = '$messageEmail', image = '$messageContent', userId = '$userId' WHERE id = '$productId'";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Product updated successfully"); window.location.href = "productManagement.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
