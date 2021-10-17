<?php $mem=$Mem->find($_GET['id'])?>
<h1>編輯會員資料</h1>
<form action="api/save_mem.php" method="post">
<table>
  <tr>
    <td>帳號</td>
    <td><?=$mem['acc']?></td>
  </tr>
  <tr>
    <td>密碼</td>
    <td><?=$mem['pw']?></td>
  </tr>
  <tr>
    <td>累積交易額</td>
    <td><?=$mem['total']?></td>
  </tr>
  <tr>
    <td>姓名</td>
    <td><input type="text" name="name" value="<?=$mem['name']?>"></td>
  </tr>
  <tr>
    <td>電子信箱</td>
    <td><input type="text" name="email" value="<?=$mem['email']?>"></td>
  </tr>
  <tr>
    <td>地址</td>
    <td><input type="text" name="addr" value="<?=$mem['addr']?>"></td>
  </tr>
  <tr>
    <td>電話</td>
    <td><input type="text" name="tel" value="<?=$mem['tel']?>"></td>
  </tr>
</table>
<div class="ct">
  <input type="hidden" name="id" value="<?=$mem['id']?>">
  <input type="submit"  value="編輯"><input type="reset" value="重置"><input type="button" value="取消" onclick="location.href='?do=mem'">
</div>
</form>