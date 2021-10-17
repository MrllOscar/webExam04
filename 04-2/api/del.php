<?php include_once '../base.php';
$db=new DB($_GET['table']);
$db->del($_GET['id']);
to($_SERVER['HTTP_REFERER']);