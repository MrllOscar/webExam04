<?php
  $rows=$Admin->all();
?>
<h1 class="ct">會員管理</h1>
<div class="ct"><a href="?do=editad">新增管理員</a></div>
<table class="all">
  <tr class="tt">
    <td>帳號</td>
    <td>密碼</td>
    <td>管理</td>
  </tr>
  <?php
    foreach($rows as $row){
      printf('<tr class="pp">');
      printf('<td>%s</td>',$row['acc']);
      printf('<td>%s</td>',$row['pw']);
      printf('<td><a href="?do=editad&id=%s">修改</a>|<a href="/api/del.php?table=admin&id=%s">刪除</a></td>',$row['id'],$row['id']);
      printf('</tr>');
    }
  ?>
</table>