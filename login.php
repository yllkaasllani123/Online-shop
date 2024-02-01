<?php
include("connection.php");

function sanitize($data)
{
    global $conn;
    return mysqli_real_escape_string($conn, htmlspecialchars(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = sanitize($_POST["login-username"]);
    $password = sanitize($_POST["login-password"]);

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $stored_password = $row["password"];

        if ($password === $stored_password) {
            session_start();
            $_SESSION["username"] = $row["username"];
            $_SESSION["role"] = $row["role"];
            $_SESSION["id"] = $row["id"];
            echo "User ID: " . $_SESSION["id"];

            if ($row["role"] === 'admin') {
                header("Location: dashboard.php");
                exit();
            } else {
                header("Location: onlineshop.php");
                exit();
            }

        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<form class="form form-login" method="post" action="loginregister.php">
    <fieldset>
        <legend>Please, enter your email and password for login.</legend>
        <div class="input-block">
            <label for="login-username">Username</label>
            <input id="login-username" type="username" name="login-username" required>
        </div>
        <div class="input-block">
            <label for="login-password">Password</label>
            <input id="login-password" type="password" name="login-password" required>
        </div>
    </fieldset>
    <button type="submit" class="btn-login">Login</button>
</form>

</html>