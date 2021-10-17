<?php include_once '../base.php';
$rows=$Menu->all(["MID"=>$_POST['MID']]);
foreach($rows as $row)
{
  printf('<option value="%s">%s</option>',$row['id'],$row['text']);
}