<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include('connection.php');

    $messageName = $_POST['messageName'];
    $messageEmail = $_POST['messageEmail'];
    $messageContent = $_POST['messageContent'];

    $messageName = mysqli_real_escape_string($conn, htmlspecialchars(trim($messageName)));
    $messageEmail = mysqli_real_escape_string($conn, htmlspecialchars(trim($messageEmail)));
    $messageContent = mysqli_real_escape_string($conn, htmlspecialchars(trim($messageContent)));

    $sql = "INSERT INTO messages (name, email, message) VALUES ('$messageName', '$messageEmail', '$messageContent')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Message sent"); window.location.href = "contact.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}