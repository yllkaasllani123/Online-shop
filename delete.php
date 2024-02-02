<?php
$connect = mysqli_connect("localhost", "root", "", "database_project");
mysqli_select_db($connect, "database_project");

if (isset($_GET['delete'])) {
    
    $delete_id = $_GET['delete'];

    $delete_query = "DELETE FROM messages WHERE id='$delete_id' ";

    if (mysqli_query($connect, $delete_query)) {
        echo "<script>alert('Produkti eshte Fshire');</script>";
        echo "<script>window.open('allMessages.php','_self');</script>";
    }
}
?>