<?php
$goods=$Goods->find($_GET['id']);
$big=$Type->find($goods['big'])['name'];
$mid=$Type->find($goods['mid'])['name'];
?>
<h2 class="ct"><?=$goods['name']?></h2>
<table class="all">
  <tr class="pp">
    <td style="width: 50%;"><img src="img/<?=$goods['img']?>" alt="" style="width:90%"></td>
    <td style="width: 50%;">
    <div>分類:<?=$big?></div>
    <hr>
    <div>編號:<?=$goods['no']?></div>
    <hr>
    <div>價格:<?=$goods['price']?></div>
    <hr>
    <div>詳細說明:<?=$goods['intro']?></div>
    <hr>
    <div>庫存量:<?=$goods['qt']?></div>
    <hr>
    </td>
  </tr>
</table>
<div class="tt ct">
  購買數量:<input type="number" id="qt" name="qt" value="1" ><img src="icon/0402.jpg" id="submit">
</div>
<div class="tt ct">
  <button onclick="location.href='index.php'">返回</button>
</div>

<script>
  $("#submit").on("click",()=>{
    location.href=`?do=buycart&id=<?=$_GET['id']?>&qt=${$("#qt").val()}`;
  })
</script>