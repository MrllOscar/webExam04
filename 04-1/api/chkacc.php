<?php include_once '../base.php';
if($Mem->count(["acc"=>$_POST['acc']])>=1 || $_POST['acc']=='admin'){
  echo 1 ;
}else{
  echo 0;
}