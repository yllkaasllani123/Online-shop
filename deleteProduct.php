<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: loginregister.php");//renamed the location to loginregister.php
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include('connection.php');

    $productId = $_POST['productId'];

    $productId = mysqli_real_escape_string($conn, htmlspecialchars(trim($productId)));

    $sql = "DELETE FROM products WHERE id = '$productId'";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Product deleted successfully"); window.location.href = "productManagement.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

