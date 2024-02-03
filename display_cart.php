<?php
include 'connection.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['delete_product'])) {
    $delete_id = $_POST['delete_id'];

    $delete_sql = "DELETE FROM cart WHERE id = '$delete_id'";
    if ($conn->query($delete_sql) === TRUE) {
        echo '<script>alert("Product deleted from cart successfully");</script>';
    } else {
        echo "Error deleting product: " . $conn->error;
    }
}

$sql = "SELECT * FROM cart";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Shopping Cart</h1>

    <?php
    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['price']}</td>
                    <td><img src='{$row['image']}' alt='{$row['name']}' style='width: 50px; height: 50px;'></td>
                    <td>
                        <form method='post' action='display_cart.php'>
                            <input type='hidden' name='delete_id' value='{$row['id']}'>
                            <button type='submit' name='delete_product'>Delete</button>
                        </form>
                    </td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No items in the cart</p>";
    }
    ?>

</body>
</html>

<?php
$conn->close();
?>
