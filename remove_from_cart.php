<?php
include 'connection.php';

if (isset($_GET['id'])) {
    $cart_id = $_GET['id'];

    $delete_query = "DELETE FROM cart WHERE id = $cart_id";
    mysqli_query($connect, $delete_query);
    header('Location: cart.php'); // Redirect back to the cart page
}
?>
