<h1 class="ct">會員管理</h1>
<div class="ct"><a href="?do=addad">新增管理員</a></div>
<table class="all">
  <tr class="tt">
    <td>帳號</td>
    <td>密碼</td>
    <td>管理</td>
  </tr>
  <?php $rows=$Admin->all();
      foreach($rows as $row){
        printf('<tr><td>%s</td>',$row['acc']);
        printf('<td>%s</td>',$row['pw']);
        if($row['acc']=='admin'){
        printf('<td>此帳號為最高權限</td></tr>');
        }else{
        printf('<td><a href="?do=edit_ad&id=%s">修改</a>|<a href="../api/delad.php?id=%s">刪除</a></td></tr>',$row['id'],$row['id']);
        }
      }
  ?>
</table>
