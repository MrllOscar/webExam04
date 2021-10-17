<?php include_once '../base.php';
$db=new DB($_POST['table']);
if($db->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']])){
  echo 1;
  $_SESSION['admin']=$_POST['acc'];
};