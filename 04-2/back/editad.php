<?php
$acc="";$pw="";$pr="";
  if(isset($_GET['id'])){
  $rows=$Admin->find($_GET['id']);
  $acc=$rows['acc'];
  $pw=$rows['pw'];
  $pr=unserialize($rows['pr']);
  }
  
?>
<h1 class="ct"><?=(isset($_GET['id']))?'編輯':'新增'?>會員資料</h1>
<form action="/api/manage.php" method="post">
<table class="all">
  <tr>
    <td class="tt">帳號</td>
    <td class="pp"><input type="text" name="acc[]" value="<?=$acc?>"></td>
    </tr><tr>
    <td class="tt">密碼</td>
    <td class="pp"><input type="text" name="pw[]" value="<?=$pw?>"></td>
    </tr><tr>
    <td class="tt">權限</td>
    <td class="pp">
          <input type="checkbox" name="pr[]" value="1 "<?=(isset($_GET['id']))?in_array(1,$pr)?'checked':'':''?>>商品分類與管理<br>
          <input type="checkbox" name="pr[]" value="2 "<?=(isset($_GET['id']))?in_array(2,$pr)?'checked':'':''?>>訂單管理<br>
          <input type="checkbox" name="pr[]" value="3 "<?=(isset($_GET['id']))?in_array(3,$pr)?'checked':'':''?>>會員管理<br>
          <input type="checkbox" name="pr[]" value="4 "<?=(isset($_GET['id']))?in_array(4,$pr)?'checked':'':''?>>頁尾版權管理<br>
          <input type="checkbox" name="pr[]" value="5 "<?=(isset($_GET['id']))?in_array(5,$pr)?'checked':'':''?>>最新消息管理<br>
    </td>
  </tr>
  <input type="hidden" name="table" value="admin"><input type="hidden" name="id[]" value="<?=$_GET['id']??''?>">
</table>
<div class="ct"><input type="submit" value="<?=(isset($_GET['id']))?'編輯':'新增'?>">|<input type="reset" value="重置"></div>  
</form>