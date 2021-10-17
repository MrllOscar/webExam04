<?php $row=$Ord->find($_GET['id'])?>
<h1 class="ct"><?=$row['title']?></h1>

<table>
  <tr>
    <td><img src="../icon/<?=$row['img']?>" style="width:50%"></td>
    <td>
      <div>分類:<?=$Menu->find($row['BID'])['text']?> > <?=$Menu->find($row['MID'])['text']?></div>
      <div>編號:<?=$row['no']?></div>
      <div>價格:<?=$row['money']?></div>
      <div>詳細說明:<?=$row['text']?></div>
      <div>庫存量:<?=$row['inven']?></div>
    </td>
  </tr>
  <tr class="ct"><td>購買數量: <input type="text" class="qt"><img src="../icon/0402.jpg" id="buy"></td></tr>
</table>
<script>
  $("#buy").on('click',()=>{
    location.href=`?do=buycart&id=<?=$row['id']?>&qt=${$(".qt").val()}`;
  })
</script>