<?php
include("connection.php");

function sanitize_input($data)
{
  global $conn;
  return mysqli_real_escape_string($conn, htmlspecialchars(trim($data)));
}

function is_valid_password($password)
{
  
  $min_length = 8; 
  return strlen($password) >= $min_length;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["register-username"]) && isset($_POST["register-password"]) && isset($_POST["password2"])) {
    $username = sanitize_input($_POST["register-username"]);
    $password = sanitize_input($_POST["register-password"]);
    $password2 = sanitize_input($_POST["password2"]);

    if ($password !== $password2) {
      echo "Passwords do not match.";
      exit();
    }


    if (!is_valid_password($password)) {
      echo "Invalid password. Password must be at least 8 characters long.";
      exit();
    }

    $is_admin = false;
    $role = $is_admin ? 'admin' : 'user';
    $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";

    if (mysqli_query($conn, $sql)) {
      header("Location: onlineshop.php");
      exit();
    } else {
      echo "Error during registration: " . mysqli_error($conn);
    }
  } else {
    echo "Invalid registration data.";
  }
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
    <form class="form form-signup" method="post" action="register.php">
        <fieldset>
            <legend>Please, enter your email, password and password confirmation for sign up.</legend>
            <div class="input-block">
                <label for="register-username">Username</label>
                <input id="register-username" type="username" name="register-username" placeholder="Username" required>
            </div>
            <div class="input-block">
                <label for="register-password">Password</label>
                <input id="register-password" type="password" name="register-password" placeholder="password" required>
            </div>
            <div class="input-block">
                <label for="password2">Confirm password</label>
                <input id="password2" type="password" name="password2" placeholder="Verify your password" required>
            </div>
        </fieldset>
    <button type="submit" class="btn-signup">Continue</button>
    </form>
</html>