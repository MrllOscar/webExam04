<?php
  $rows=$Mem->all();
?>
<h1 class="ct">會員管理</h1>
<table class="all">
  <tr class="tt">
    <td>姓名</td>
    <td>會員帳號</td>
    <td>註冊日期</td>
    <td>操作</td>
  </tr>
  <?php
    foreach($rows as $row){
      printf('<tr class="pp">');
      printf('<td>%s</td>',$row['name']);
      printf('<td>%s</td>',$row['acc']);
      printf('<td>%s</td>',$row['date']);
      printf('<td><a href="?do=editmem&id=%s">修改</a>|<a href="/api/del.php?table=mem&id=%s">刪除</a></td>',$row['id'],$row['id']);
      printf('</tr>');
    }
  ?>
</table>