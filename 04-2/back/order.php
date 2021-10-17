<?php
  $rows=$Pro->all();
?>
<h1 class="ct">訂單管理</h1>
<table class="all">
  <tr class="tt">
    <td>訂單編號</td>
    <td>金額</td>
    <td>會員帳號</td>
    <td>姓名</td>
    <td>下單時間</td>
    <td>操作</td>
  </tr>
  <?php
    foreach($rows as $row){
      printf('<tr class="pp">');
      printf('<td><a href="?do=who&id=%s">%s</a></td>',$row['id'],$row['no']);
      printf('<td>%s</td>',$row['money']);
      printf('<td>%s</td>',$row['acc']);
      printf('<td>%s</td>',$row['name']);
      printf('<td>%s</td>',$row['date']);
      printf('<td><a href="/api/del.php?table=pro&id=%s">刪除</a></td>',$row['id']);
      printf('</tr>');
    }
  ?>
</table>