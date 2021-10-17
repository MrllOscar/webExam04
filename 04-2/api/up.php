<?php include_once '../base.php';
$rows=$Ord->find($_GET['id']);
$rows['sh']=1;
$Ord->save($rows);
to($_SERVER['HTTP_REFERER']);