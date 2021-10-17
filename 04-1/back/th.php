<h1 class="ct">商品分類</h1>
<div class="ct">
  <form action="../api/manage.php" method="post">
  新增大分類<input type="text" name="text[]">
  <input type="hidden" name="MID[]" value="0">
  <input type="hidden" name="id[]" value="">
  <input type="hidden" name="table" value="menu">
  <input type="submit" value="新增">
  </form>
</div>


<div class="ct">
  <form action="../api/manage.php" method="post">
  新增中分類<select name="MID[]" id="MID">
  <?php $big=$Menu->all(["MID"=>0]);
  foreach ($big as $bmt){
    printf('<option value="%s">%s</option>',$bmt['id'],$bmt['text']);
  }
  ?>
  </select>
  <input type="text" name="text[]">
  <input type="hidden" name="id[]" value="">
  <input type="hidden" name="table" value="menu">
  <input type="submit" value="新增">
  </form>
</div>


<table class="all">
  <?php foreach($big as $bmt)
  {
      printf('<tr class="tt"><td>%s</td>',$bmt['text']);
      printf('<td><a href="?do=edit_menu&MID=0&id=%s">修改</a>|<a href="../api/delmenu.php?id=%s">刪除</a></td></tr>',$bmt['id'],$bmt['id'],$bmt['id']);
      $mid=$Menu->all(["MID"=>$bmt['id']]);
      foreach($mid as $mmt)
      {
        printf('<tr class="pp"><td>%s</td>',$mmt['text']);
      printf('<td><a href="?do=edit_menu&MID=%s&id=%s">修改</a>|<a href="../api/delmenu.php?id=%s">刪除</a></td></tr>',$bmt['id'],$mmt['id'],$mmt['id'],$mmt['id']);
      }
  }
  ?>
</table>



<h1 class="ct">商品管理</h1>
<div class="ct">
<a href="?do=addord">新增商品</a>
</div>


<table class="all">
  <tr class="tt">
    <td>編號</td>
    <td>商品名稱</td>
    <td>庫存量</td>
    <td>狀態</td>
    <td>操作</td>
  </tr>
  <?php $ord=$Ord->all();
  foreach($ord as $or)
  {
      printf('<tr class="pp"><td>%s</td>',$or['no']);
      printf('<td>%s</td>',$or['title']);
      printf('<td>%s</td>',$or['inven']);
      printf('<td>%s</td>',$or['sh']==1?'販售中':'已下架');
      printf('<td><a href="?do=edit_menu&id=%s">修改</a>|<a href="../api/delord.php?id=%s">刪除</a></br>
      <a href="../api/up.php?id=%s">上架</a>|<a href="../api/down.php?id=%s">下架</a></td></tr>',$or['id'],$or['id'],$or['id'],$or['id']);
  }
  ?>
</table>
