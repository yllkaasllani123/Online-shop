<?php
include 'connection.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['id'];
    $product_name = $_POST['name'];
    $product_price = $_POST['price'];
    $product_image = $_POST['image'];

    $check_sql = "SELECT * FROM cart WHERE id = '$product_id'";
    $result = $conn->query($check_sql);

    if ($result->num_rows > 0) {
        echo '<script>alert("Product already exists in the cart");</script>';
    } else {
        $insert_sql = "INSERT INTO cart (id, name, price, image) VALUES ('$product_id', '$product_name', '$product_price', '$product_image')";
        

        if ($conn->query($insert_sql) === TRUE) {
            echo '<script>alert("Product added to cart successfully");</script>';
        } else {
            echo "Error: " . $insert_sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
