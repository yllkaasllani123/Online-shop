<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: loginregister.php");//renamed the location to loginregister.php
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include('connection.php');

    $userId = $_SESSION['id'];
    $messageName = $_POST['productName'];
    $messageEmail = $_POST['productPrice'];
    $messageContent = $_POST['productImage'];

    $messageName = mysqli_real_escape_string($conn, htmlspecialchars(trim($messageName)));
    $messageEmail = mysqli_real_escape_string($conn, htmlspecialchars(trim($messageEmail)));
    $messageContent = mysqli_real_escape_string($conn, htmlspecialchars(trim($messageContent)));

    $sql = "INSERT INTO products (name, price, image, userId) VALUES ('$messageName', '$messageEmail', '$messageContent', '$userId')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Product created successfully"); window.location.href = "productManagement.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}