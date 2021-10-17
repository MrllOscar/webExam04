<?php
  $rows=$Mem->find($_GET['id']);
?>
<h1 class="ct">編輯會員資料</h1>
<form action="/api/manage.php" method="post">
<table class="all">
  <tr>
    <td class="tt">帳號</td>
    <td class="pp"><?=$rows['acc']?></td>
    </tr><tr>
    <td class="tt">密碼</td>
    <td class="pp"><?=$rows['pw']?></td>
    </tr><tr>
    <td class="tt">累積交易額</td>
    <td class="pp">685元</td>
    </tr><tr>
    <td class="tt">姓名</td>
    <td class="pp"><input type="text" name="name[]" value="<?=$rows['name']?>"></td>
    </tr><tr>
    <td class="tt">電子信箱</td>
    <td class="pp"><input type="text" name="email[]" value="<?=$rows['email']?>"></td>
    </tr><tr>
    <td class="tt">地址</td>
    <td class="pp"><input type="text" name="addr[]" value="<?=$rows['addr']?>"></td>
    </tr><tr>
    <td class="tt">電話</td>
    <td class="pp"><input type="text" name="tel[]" value="<?=$rows['tel']?>"></td>
  </tr>
  <input type="hidden" name="table" value="mem"><input type="hidden" name="id[]" value="<?=$rows['id']?>">
</table>
<div class="ct"><input type="submit" value="編輯">|<input type="reset" value="重置">|<input type="button" value="取消" onclick="history.back()"></div>  
</form>