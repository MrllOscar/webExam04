<div class="ct">新增管理帳號</div>
<form action="../api/manage.php" method="post">
<table class="all">
<tr>
    <td class="tt">帳號</td>
    <td class="pp"><input type="text" name="acc[]" id="acc"></td>
  </tr>
  <tr>
    <td class="tt">密碼</td>
    <td class="pp"><input type="text" name="pw[]" ></td>
  </tr>
  <tr>
    <td class="tt">權限</td>
    <td class="pp">
      <input type="checkbox" name="pr[]" value="1">商品分類與管理
      <input type="checkbox" name="pr[]" value="2">訂單管理
      <input type="checkbox" name="pr[]" value="3">會員管理
      <input type="checkbox" name="pr[]" value="4">頁尾版權管理
      <input type="checkbox" name="pr[]" value="5">最新消息管理
    </td>
  </tr>
  <input type="hidden" name="id[]" value=""><input type="hidden" name="table" value="admin">
</table>
<input type="submit" value="新增">|<input type="reset" value="重置">
</form>