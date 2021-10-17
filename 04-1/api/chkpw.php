<?php include_once '../base.php';
if($Mem->count(["acc"=>$_POST['acc'],"pw"=>$_POST['pw']])>=1){
  echo 1 ;
  $_SESSION['admin']=$_POST['acc'];
}else{
  echo 0;
}