<h1>新增管理帳號</h1>
<form action="api/add_admin.php" method="POST">
<table>
  <tr>
    <td>帳號</td>
    <td><input type="text" name="acc" value=""></td>
  </tr>
  <tr>
    <td>密碼</td>
    <td><input type="password" name="pw" value=""></td>
  </tr>
  <tr>
    <td>權限</td>
    <td>
  <div><input type="checkbox" name="pr[]" value="1">商品分類與管理</div>
  <div><input type="checkbox" name="pr[]" value="2">訂單管理</div>
  <div><input type="checkbox" name="pr[]" value="3">會員管理</div>
  <div><input type="checkbox" name="pr[]" value="4">頁尾版權管理</div>
  <div><input type="checkbox" name="pr[]" value="5">最新消息管理</div>
    </td>
  </tr>
</table>
<input type="submit" value="新增"><input type="reset" value="重置">
</form>