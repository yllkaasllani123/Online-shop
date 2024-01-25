<?php
session_start();
session_destroy();

header("Location: onlineshop.php");
exit();
?>