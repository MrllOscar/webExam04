<?php 
$id =$_GET['id']??'';
if(isset($_GET['id'])){
  $rows=$Ord->find($id);
}
?>
<h1 class="ct"><?=(isset($_GET['id']))?'編輯':'新增'?>商品</h1>
<form action="/api/manage.php" method="post">
<table class="all">
  <tr>
    <td class="tt">所屬大分類</td>
    <td class="pp"><select name="BID[]" id="big">
    <?php
      $big=$Menu->all(['type'=>0]);
      foreach($big as $b){
        printf('<option value="%s">%s</option>',$b['id'],$b['text']);
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
    <td class="pp"><?php 
    if(isset($_GET['id'])){
      echo $rows['no'];
      }else{
        printf('完成分類後自動分配<input type="hidden" name="no[]" value="%s">',rand(000000,899998)+100000);
        }?></td>
  </tr>
  <tr>
    <td class="tt">商品名稱</td>
    <td class="pp"><input type="text" name="name[]" value="<?=(isset($_GET['id']))?$rows['name']:''?>"></td>
  </tr>
  <tr>
    <td class="tt">商品價格</td>
    <td class="pp"><input type="text" name="money[]" value="<?=(isset($_GET['id']))?$rows['money']:''?>"></td>
  </tr>
  <tr>
    <td class="tt">規格</td>
    <td class="pp"><input type="text" name="size[]" value="<?=(isset($_GET['id']))?$rows['size']:''?>"></td>
  </tr>
  <tr>
    <td class="tt">庫存量</td>
    <td class="pp"><input type="text" name="inve[]" value="<?=(isset($_GET['id']))?$rows['inve']:''?>"></td>
  </tr>
  <tr>
    <td class="tt">商品圖片</td>
    <td class="pp"><input type="file" name="img" value="<?=(isset($_GET['id']))?$rows['img']:''?>"></td>
  </tr>
  <tr>
    <td class="tt">商品介紹</td>
    <td class="pp"><textarea name="text[]" cols="30" rows="10"><?=(isset($_GET['id']))?$rows['text']:''?></textarea></td>
  </tr>
</table>
<input type="hidden" name="id[]" value="<?=$id?>"><input type="hidden" name="table" value="ord">
<div class="ct"><input type="submit" value="送出">|<input type="reset" value="重置">|<input type="button" value="返回" onclick="location.href='?do=th'"></div>
</form>

<script>
  $("#big").on('change',()=>{
    let id=$("#big").val();
    getMid(id);
  })
  function getMid(id){
    $('#mid').load('/api/getid.php',{id},(rr)=>{
      $('#mid').val(rr);
    })
  }
  getMid(1);

</script>