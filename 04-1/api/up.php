<?php include_once '../base.php';
$sh=$Ord->find($_GET['id']);
$sh['sh']=1;
$Ord->save($sh);
to($_SERVER['HTTP_REFERER']);
