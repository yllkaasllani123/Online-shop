<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact us - Anaylla</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
</head>

<style>
  .container {
    max-width: 600px;
    height: 510px;
    margin: 20px auto;
    margin-bottom: 60px;
    padding: 10px;
    background-color: #fff;
    border-radius: 9px;
    box-shadow: 0 0 10px #0707071a;

  }

  h1 {
    color: #333;
  }

  p {
    color: #666;
  }

  form {
    margin-top: 20px;
  }

  label {
    display: block;
    margin-bottom: 8px;
    color: #333;
  }

  input,
  textarea {
    width: 100%;
    padding: 7px;
    margin-bottom: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  button {
    background-color: #a7e245;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  button:hover {
    background-color: #a7e245;
  }

  body {
    margin-bottom: 250px;
  }

  .forma {
    width: 400px;
    height: 400px;
  }

  @media only screen and (max-width: 600px) {
    .header-container {
      flex-direction: column;
      text-align: center;
    }

    .header-container p {
      margin: 10px 0;
    }

    .container {
      margin: 20px;
    }
  }
</style>

<body>
  <header>
    <img src="public/anaylla.png" alt="Anaylla Logo">
    <div class="header-container">
      <p><a href="onlineshop.php">Home</a></p>
      <p><a href="about.php">About Us</a></p>
      <p><a href="contact.php">Contact Us</a></p>
      <p><a href="products.php">Products</a></p>
      <P><a href="loginregister.php">Login/Register</a></P>

  </header>

  <div class="container">
    <h1>Contact Us</h1>
    <p>Have questions or need assistance? Feel free to reach out to us using the form below:</p>

    <form id="contactForm" action="newMessage.php" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="messageName" placeholder="Name" required>
      <div class="error-message" id="nameError"></div>

      <label for="email">Email:</label>
      <input type="email" id="email" name="messageEmail" placeholder="Email" required>
      <div class="error-message" id="emailError"></div>

      <label for="message">Message:</label>
      <textarea id="message" name="messageContent" rows="4" placeholder="Message" required></textarea>

      <button type="submit">Submit</button>
    </form>


  </div>
  <script src="script.js"></script>
  <footer>
    <div class="social-links">
      <div class="social-link-container">
        <img src="public/facebook.png" alt="Facebook">
        <a href="https://www.facebook.com" target="_blank">Facebook</a>
      </div>
      <div class="social-link-container">
        <img src="public/tiktok.svg" alt="Tiktok">
        <a href="https://www.tiktok.com/en/" target="_blank">TikTok</a>
      </div>
      <div class="social-link-container">
        <img src="public/instagram.png" alt="Instagram">
        <a href="https://www.instagram.com" target="_blank">Instagram</a>
      </div>
    </div>
    <p>Prizren, Kosove/ 049 999 999/ info@anaylla.com</p>
  </footer>
</body>

</html>