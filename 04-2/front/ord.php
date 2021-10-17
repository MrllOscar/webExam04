<?php $row=$Ord->find([$_GET['id']]);
?>
<h1 class="ct"><?=$rows['name']?></h1>

<table>
<?php
        printf('<tr class="pp">');
        printf('<td style="width:50%%"><img src="/icon/%s" style="width:50%%"></td>',$row['img']);
        printf('<td>
        <div class="ct tt">分類:%s>%s</div>
        <div>價格:%s</div>
        <div>規格:%s</div>
        <div>簡介:%s</div>
        </td>',$row['BID'],$row['MID'],$row['money'],$row['size'],$row['text']);
        printf('</tr>');
    ?>
  
</table>
<input type="hidden" id="iid" value="<?=$row['id']?>">
<div class="tt ct">購買數量<input type="number" id="qt"><img src="/icon/0402.jpg" onclick="buy()"></div>
<div class="ct"><input type="button" value="返回" onclick="history.back()"></div>
<script>
function buy(){
  let qt=$('#qt').val();
  let id=$('#iid').val();
  location.href='?do=buycart&id='+id+'&qt='+qt;
}
</script>