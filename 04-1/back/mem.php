<h1 class="ct">會員管理</h1>
<table class="all">
  <tr class="tt">
    <td>姓名</td>
    <td>會員帳號</td>
    <td>註冊日期</td>
    <td>操作</td>
  </tr>
  <?php $rows=$Mem->all();
      foreach($rows as $row){
        printf('<tr><td>%s</td>',$row['name']);
        printf('<td>%s</td>',$row['acc']);
        printf('<td>%s</td>',$row['date']);
        printf('<td><a href="?do=edit_mem&id=%s">修改</a>|<a href="../api/del.php?id=%s">刪除</a></td></tr>',$row['id'],$row['id']);
      }
  ?>
</table>
