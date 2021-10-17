<?php
  $admin=$Admin->find($_GET['id']);
  $pr=unserialize($admin['pr']);
?>
<h1>修改管理員權限</h1>
<form action="api/add_admin.php" method="POST">
<table>
  <tr>
    <td>帳號</td>
    <td><input type="text" name="acc" value="<?=$admin['acc']?>"></td>
  </tr>
  <tr>
    <td>密碼</td>
    <td><input type="password" name="pw" value="<?=$admin['pw']?>"></td>
  </tr>
  <tr>
    <td>權限</td>
    <td>
  <div><input type="checkbox" name="pr[]" value="1" <?=(in_array(1,$pr))?"checked":"";?> >商品分類與管理</div>
  <div><input type="checkbox" name="pr[]" value="2" <?=(in_array(2,$pr))?"checked":"";?> >訂單管理</div>
  <div><input type="checkbox" name="pr[]" value="3" <?=(in_array(3,$pr))?"checked":"";?> >會員管理</div>
  <div><input type="checkbox" name="pr[]" value="4" <?=(in_array(4,$pr))?"checked":"";?> >頁尾版權管理</div>
  <div><input type="checkbox" name="pr[]" value="5" <?=(in_array(5,$pr))?"checked":"";?> >最新消息管理</div>
    </td>
  </tr>
</table>
<input type="hidden" name="id" value="<?=$admin['id']?>">
<input type="submit" value="修改"><input type="reset" value="重置">
</form>