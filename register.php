<?php
include("connection.php");

function sanitize_input($data)
{
    global $conn;
    return mysqli_real_escape_string($conn, htmlspecialchars(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["save"])) {
    $username = sanitize_input($_POST["username"]);
    $password = sanitize_input($_POST["password"]);
    $password2 = sanitize_input($_POST["password2"]);
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
        header("Location: loginregister.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>