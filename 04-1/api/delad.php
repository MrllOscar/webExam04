<?php include_once '../base.php';
$Admin->del($_GET['id']);
to($_SERVER['HTTP_REFERER']);