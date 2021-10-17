<h1 class="ct">商品分類</h1>
<form action="/api/manage.php" method="post">
<div class="ct">新增大分類<input type="text" name="text[]"><input type="submit" value="新增"></div>
<input type="hidden" name="type" value="0">
<input type="hidden" name="table" value="menu">
<input type="hidden" name="id[]" value="">

</form>

<form action="/api/manage.php" method="post">
<div class="ct">新增中分類
  <select name="type">
    <?php
      $rows=$Menu->all(['type'=>0]);
      foreach($rows as $row){
        printf('<option value="%s">%s</option>',$row['id'],$row['text']);
      }
    ?>
  </select>
  <input type="text" name="text[]">
  <input type="submit" value="新增"></div>
<input type="hidden" name="table" value="menu">
<input type="hidden" name="id[]" value="">
</form>

<table class="all">
  <?php
            foreach($rows as $row){
              printf('<tr class="tt">');
              printf('<td>%s</td>',$row['text']);
              printf('<td><a href="?do=editmenu&id=%s">修改</a>|<a href="/api/del.php?table=menu&id=%s">刪除</a></td>',$row['id'],$row['id']);
              printf('</tr>');
              $mid=$Menu->all(['type'=>$row['id']]);
              foreach($mid as $m){
                printf('<tr class="pp">');
                printf('<td>%s</td>',$m['text']);
                printf('<td><a href="?do=editmenu&id=%s">修改</a>|<a href="/api/del.php?table=menu&id=%s">刪除</a></td>',$m['id'],$m['id']);
                printf('</tr>');
              }
            }
  ?>
</table>

<h1 class="ct">商品管理</h1>
<div class="ct"><a href="?do=ord">新增商品</a></div>
<table class="all">
  <tr class="tt">
    <td>編號</td>
    <td>商品名稱</td>
    <td>庫存量</td>
    <td>狀態</td>
    <td>操作</td>
  </tr>

<?php $ORD=$Ord->all();
foreach($ORD as $ord)
{
  printf('<tr class="pp">');
  printf('<td>%s</td>',$ord['no']);
  printf('<td>%s</td>',$ord['name']);
  printf('<td>%s</td>',$ord['inve']);
  printf('<td>%s</td>',$ord['sh']==1?'販售中':'已下架');
  printf('<td><a href="?do=ord&id=%s">修改</a>|<a href="/api/del.php?table=menu&id=%s">刪除</a><br><a href="/api/up.php?id=%s">上架</a>|<a href="/api/down.php?id=%s">下架</a></td>',$ord['id'],$ord['id'],$ord['id'],$ord['id']);
  printf('</tr>');
}

?>
</table>