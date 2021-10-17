<?php $road=$_GET['road']??0;
  if(!isset($_GET['road'])){
    $h1='全部商品';
    $rows=$Ord->all(['sh'=>1]);
  }else{
    $type=$Menu->find($road);
    if($type['type']==0){
      $h1=$type['text'];
      $rows=$Ord->all(['sh'=>1,"BID"=>$type['id']]);
    }else{
      $type1 = $Menu->find(['type'=>$type['type']]);
      $h1= $type1['text'] . ' > ' . $type['text'];
      $rows=$Ord->all(['sh'=>1,"MID"=>$type['id']]);
    }
  }
?>
<h1 class="ct"><?=$h1?></h1>

<table>
<?php
      foreach($rows as $row){
        printf('<tr class="pp">');
        printf('<td style="width:50%%"><a href="?do=ord&id=%s&qt=1"><img src="/icon/%s" style="width:50%%"></a></td>',$row['id'],$row['img']);
        printf('<td>
        <div class="ct tt">%s</div>
        <div>價格:%s <a href="?do=buycart&id=%s" style="float:right"><img src="/icon/0402.jpg"></a></div>
        <div>規格:%s</div>
        <div>簡介:%s</div>
        </td>',$row['name'],$row['money'],$row['id'],$row['size'],$row['text']);
        printf('</tr>');
      }
    ?>
</table>