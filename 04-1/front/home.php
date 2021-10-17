<?php 
$menu = $_GET['MID']??0;
if($menu == 0){
  $h1="全部商品";
  $rows= $Ord->all(["sh"=>1]);
}else{
  $h1= "";
  $list= $Menu->find($menu);
  if($list['MID']==0){
    $h1=$list['text'];
    $rows =$Ord->all(["BID"=>$menu,"sh"=>1]);
  }else{
    $ID1=$Menu->find($menu);
    $ID2=$Menu->find($ID1["MID"]);
    $h1 = $ID1['text'] ." > ". $ID2['text'];
    $rows= $Ord->all(["MID"=>$menu,"sh"=>1]);
  }
}
?>
<h1><?=$h1?></h1>


<table class="all">

<?php

foreach($rows as $row)
{
  printf('<tr class="pp"><td><a href="?do=whathis&id=%s"><img src="../icon/%s" style="width:50%%"></a></td>',$row['id'],$row['img']);
  printf('<td><div class="tt">%s</div>',$row['title']);
  printf('<div class="pp">價格:%s <a href="?do=buycart&id=%s" style="float:right"><img src="../icon/0402.jpg"></a></div>',$row['money'],$row['id']);
  printf('<div class="pp">規格:%s</div>',$row['size']);
  printf('<div class="pp">簡介:%s</div>',$row['text']);
  printf('</td></tr>');
}
?>
</table>
