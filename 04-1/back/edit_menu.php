<?php $rows=$Ord->find($_GET['id'])?>
<h1 class="ct">修改商品</h1>
<form action="../api/manage.php" method="post">
<table class="all">
<tr>
    <td class="tt">所屬大分類</td></td>
    <td class="pp"><select name="BID[]" id="big">
    <?php $big=$Menu->all(["MID"=>0]);
  foreach ($big as $bmt){
    printf('<option value="%s">%s</option>',$bmt['id'],$bmt['text']);
  }
  ?>
    </select></td>
  </tr>
  <tr>
    <td class="tt">所屬中分類</td>
    <td class="pp"><select name="MID[]" id="mid"></select></td>
  </tr>
  <tr>
    <td class="tt">商品編號</td>
    <td class="pp"><?=$rows['no']?></td>
  </tr>
  <tr>
    <td class="tt">商品名稱</td>
    <td class="pp"><input type="text" name="title[]" value="<?=$rows['title']?>"></td>
  </tr>
  <tr>
    <td class="tt">商品價格</td>
    <td class="pp"><input type="text" name="money[]" value="<?=$rows['money']?>"></td>
  </tr>
  <tr>
    <td class="tt">規格</td>
    <td class="pp"><input type="text" name="size[]" value="<?=$rows['size']?>"></td>
  </tr>
  <tr>
    <td class="tt">庫存量</td>
    <td class="pp"><input type="text" name="inven[]" value="<?=$rows['inven']?>"></td>
  </tr>
  <tr>
    <td class="tt">圖片</td>
    <td class="pp"><input type="file" name="img[]" value="<?=$rows['img']?>"></td>
  </tr>
  <tr>
    <td class="tt">商品介紹</td>
    <td class="pp"><textarea name="text[]" cols="30" rows="10"><?=$rows['text']?></textarea></td>
  </tr>
</table>
<input type="hidden" name="table" value="ord"><input type="hidden" name="id[]" value="<?=$rows['id']?>">
<input type="submit" value="新增"><input type="reset" value="重置"><input type="button" value="返回" onclick="history.back()">
</form>
<!-- *** -->
<script>
  getMid(1);
  $("#big").change(()=>{
    getMid($('#big').val());
  })
  function getMid(id){
    $('#mid').load('api/getMID.php',{'MID':id})
  }
</script>
<!-- *** -->