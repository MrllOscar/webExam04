<?php
if (isset($_GET['id'])) {
  $_SESSION['cart'][$_GET['id']] = $_GET['qt']??1;
}
?>
<div class="ct"><?=$_SESSION['admin']?>的購物車</div>
<table class="all">
  <tr class="pp">
    <td>編號</td>
    <td>商品名稱</td>
    <td>數量</td>
    <td>庫存量</td>
    <td>單價</td>
    <td>小計</td>
    <td>刪除</td>
  </tr>
  <?php
  $toto=0;
  foreach($_SESSION['cart'] as $id =>$qt) {
    $ord=$Ord->find($id);
    printf('<tr id="$g+%s">',$ord['no']);
    printf('<td>%s</td>',$ord['no']);
    printf('<td>%s</td>',$ord['title']);
    printf('<td>%s</td>',$qt);
    printf('<td>%s</td>',$ord['inven']);
    printf('<td>%s</td>',$ord['money']);
    printf('<td>%s</td>',$ord['money']*$qt);
    printf('<td><a href="../api/cart.php?id=%s"><img src="../icon/0415.jpg"></a></td>',$ord['id']);
    printf('</tr>');
    $toto = $toto + ($ord['money']*$qt);
  }
  ?>
</table>
<div class="ct">總價:<?=$toto?></div>
<div class="ct">
<a href="/index.php"><img src="../icon/0411.jpg" alt=""></a>
<a href="?do=checkout"><img src="../icon/0412.jpg" alt=""></a>
</div>