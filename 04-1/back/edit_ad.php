<h1 class="ct">編輯會員資料</h1>
<form action="../api/manage.php" method="post">
<?php $row=$Admin->find($_GET['id'])?>
<?php $pr=unserialize($row['pr'])?>
<table class="all">
  <tr>
    <td class="tt">帳號</td>
    <td class="pp"><?=$row['acc']?></td>
  </tr>
  <tr>
    <td class="tt">密碼</td>
    <td class="pp"><?=$row['pw']?></td>
  </tr>
  <tr>
    <td class="tt">權限</td>
    <td class="pp">
      <input type="checkbox" name="pr[]" value="1" <?=in_array(1,$pr)?'checked':''?>>商品分類與管理<br>
      <input type="checkbox" name="pr[]" value="2" <?=in_array(2,$pr)?'checked':''?>>訂單管理<br>
      <input type="checkbox" name="pr[]" value="3" <?=in_array(3,$pr)?'checked':''?>>會員管理<br>
      <input type="checkbox" name="pr[]" value="4" <?=in_array(4,$pr)?'checked':''?>>頁尾版權管理<br>
      <input type="checkbox" name="pr[]" value="5" <?=in_array(5,$pr)?'checked':''?>>最新消息管理<br>
    </td>
  </tr>
</table>
<input type="hidden" name="table" value="mem"><input type="hidden" name="id[]" value="<?=$_GET['id']?>">
<input type="submit" value="編輯"><input type="reset" value="重置"><input type="button" value="取消" onclick="history.back()">
</form>