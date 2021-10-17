<?php include_once '../base.php';
unset($_SESSION['cart'][$_GET['id']]);
to($_SERVER['HTTP_REFERER']);