<?php
include("connection.php");
session_start();

function sanitize_input($data)
{
    global $conn;
    return mysqli_real_escape_string($conn, htmlspecialchars(trim($data)));
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

        
        $is_admin = false; 

        
        $role = $is_admin ? 'admin' : 'user';

        
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        
        $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$hashed_password', '$role')";

        
        if (mysqli_query($conn, $sql)) {
            echo "Registration successful!";
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
<html>
<head>
    <meta charset="UTF-8">
    <title>LOGIN Register</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <img src="public/anaylla.png" alt="Anaylla Logo">
        <div class="header-container">
            <p><a href="onlineshop.php">Home</a></p>
            <p><a href="about.php">About Us</a></p>
            <p><a href="contact.php">Contact Us</a></p>
            <p><a href="products.php">Products</a></p>
            <P><a href="loginregister.php">Login/Register</a></P>
        </div>
    </header>
<section class="forms-section">
  <div class="forms">
    <div class="form-wrapper is-active">
      <button type="button" class="switcher switcher-login">
        Login
        <span class="underline"></span>
      </button>
      <form class="form form-login"  method="post" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset>
          <legend>Please, enter your email and password for login.</legend>
          <div class="input-block">
            <label for="login-username">Username</label>
            <input id="login-username" type="username" name="username" required>
          </div>
          <div class="input-block">
            <label for="login-password">Password</label>
            <input id="login-password" type="password" name="password" required>
          </div>
        </fieldset>
        <button type="submit" class="btn-login">Login</button>
      </form>
    </div>
    <div class="form-wrapper">
      <button type="button" class="switcher switcher-signup">
        <script src="java.js"></script>
        Register
        <span class="underline"></span>
      </button>
      <form class="form form-signup" method="post" action="onlineshop.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset>
          <legend>Please, enter your email, password and password confirmation for sign up.</legend>
          <div class="input-block">
            <label for="register-username">Username</label>
            <input id="register-userenme" type="username" name="username" placeholder="Username"required>
          </div>
          <div class="input-block">
          <label for="register-password">Pas</label>
            <input id="register-password" type="password" name="password" placeholder ="password" required>
          </div>
          <div class="input-block">
            <label for="signup-password">VerifyPassword</label>
            <input id="signup-password" type="password" name="password2" placeholder="Verify your password" required>
          </div>
        </fieldset>
        <button type="submit" class="btn-signup">Continue</button>
      </form>
    </div>
  </div>
</section>
</body>
<script src="script.js"></script>
</html>