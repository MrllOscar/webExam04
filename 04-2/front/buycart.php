<?php if($_GET['id']){
  $_SESSION['cart'][$_GET['id']] = $_GET['qt']??1;
}
?>
<h1 class="ct"><?=$_SESSION['admin']?>的購物車</h1>
<table class="all">
  <tr class="tt">
    <td>編號</td>
    <td>商品名稱</td>
    <td>數量</td>
    <td>庫存量</td>
    <td>單價</td>
    <td>小計</td>
    <td>刪除</td>
  </tr>
  <?php foreach($_SESSION['cart'] as $id => $qt){
    $row=$Ord->find($id);
    printf('<tr class="pp">');
    printf('<td>%s</td>',$row['no']);
    printf('<td>%s</td>',$row['name']);
    printf('<td><input type="number" value="%s"></td>',$qt);
    printf('<td>%s</td>',$row['inve']);
    printf('<td>%s</td>',$row['money']);
    printf('<td>%s</td>',$row['money']*$qt);
    printf('<td><img src="/icon/0415.jpg" onclick="location.href=`/api/delcart.php?id=%s`"></td>',$row['id']);
    printf('</tr>');
  }?>
</table>
<div class="ct">
<a href="/"><img src="/icon/0411.jpg" alt=""></a>
<a href="?do=who"><img src="/icon/0412.jpg" alt=""></a>
</div>