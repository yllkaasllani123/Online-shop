<?php
include("connection.php");
session_start();

function sanitize_input($data)
{
    global $conn;
    return mysqli_real_escape_string($conn, htmlspecialchars(trim($data)));
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = sanitize_input($_POST["username"]);
  $password = sanitize_input($_POST["password"]);

  $sql = "SELECT * FROM users WHERE username = '$username'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $stored_password = $row["password"];

      if ($password === $stored_password) {
          session_start();
          $_SESSION["username"] = $row["username"];
          $_SESSION["name"] = $row["name"];

          header("Location: welcome.php");
          exit();
      } else {
          echo "Invalid password.";
      }
  } else {
      echo "User not found.";
    }
}
$conn->close();
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
      <form class="form form-login"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
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
    <div class="form-wrapper" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <button type="button" class="switcher switcher-signup">
        <script src="java.js"></script>
        Register
        <span class="underline"></span>
      </button>
      <form class="form form-signup">
        <fieldset>
          <legend>Please, enter your email, password and password confirmation for sign up.</legend>
          <div class="input-block">
            <label for="signup-email">E-mail</label>
            <input id="signup-email" type="email" name="email" required>
          </div>
          <div class="input-block">
          <label for="signup-username">Username</label>
            <input id="signup-username" type="username" name="username" required>
          </div>
          <div class="input-block">
            <label for="signup-password">Password</label>
            <input id="signup-password" type="password"name="password"  required>
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


