<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        .tabs {
            display: flex;
            justify-content: center;
            margin: 20px;
        }

        .tab {
            margin: 0 20px;
            padding: 10px 20px;
            background-color: #555;
            border: 1px solid #444;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            color: white;
        }

        .tab:hover {
            background-color: #777;
        }

        .content {
            text-align: center;
            margin: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        form {
            max-width: 400px;
            margin: auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        button:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <header>
        <h1>Product Management</h1>
    </header>

    <div class="tabs">
        <div class="tab" onclick="showTab('create')">Create Product</div>
        <div class="tab" onclick="showTab('update')">Update Product</div>
        <div class="tab" onclick="showTab('delete')">Delete Product</div>
    </div>

    <div class="content" id="createContent">
        <h2>Create Product</h2>
        <form action="createProduct.php" method="post">
            <label for="productName">Product Name:</label>
            <input type="text" id="productName" name="productName" required>

            <label for="productPrice">Product Price:</label>
            <input type="text" id="productPrice" name="productPrice" required>

            <label for="productImage">Product Image URL:</label>
            <input type="text" id="productImage" name="productImage">

            <button type="submit">Create Product</button>
        </form>
    </div>

    <div class="content" id="updateContent" style="display: none;">
        <h2>Update Product</h2>
        <form action="updateProduct.php" method="post">
            <label for="productId">Product ID:</label>
            <input type="text" id="productId" name="productId" required>

            <label for="productName">Product Name:</label>
            <input type="text" id="productName" name="productName">

            <label for="productPrice">Product Price:</label>
            <input type="text" id="productPrice" name="productPrice">

            <label for="productImage">Product Image URL:</label>
            <input type="text" id="productImage" name="productImage">

            <button type="submit">Update Product</button>
        </form>
    </div>

    <div class="content" id="deleteContent" style="display: none;">
        <h2>Delete Product</h2>
        <form action="deleteProduct.php" method="post">
            <label for="productId">Product ID to Delete:</label>
            <input type="text" id="productId" name="productId" required>

            <button type="submit">Delete Product</button>
        </form>
    </div>

    <script>
        function showTab(tabName) {
            const tabs = ['create', 'update', 'delete'];

            tabs.forEach(tab => {
                const content = document.getElementById(`${tab}Content`);
                content.style.display = tab === tabName ? 'block' : 'none';
            });
        }
    </script>
</body>

</html>
