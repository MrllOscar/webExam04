<?php

if (isset($_GET['id'])) {
  $_SESSION['cart'][$_GET['id']] = $_GET['qt'];
}
if (!isset($_SESSION['mem'])) {
  to("?do=login");
  exit();
}
echo $_SESSION['mem'] . "的購物車";
if (empty($_SESSION['cart'])||!isset($_SESSION['cart'])) {
// if (empty($_SESSION['cart'])||!isset($_SESSION['cart'])) {
  echo '沒有商品';
}


?>

<table>
  <tr>
    <td class="ct">編號</td>
    <td class="ct">商品名稱</td>
    <td class="ct">數量</td>
    <td class="ct">庫存量</td>
    <td class="ct">單價</td>
    <td class="ct">小計</td>
    <td class="ct">刪除</td>
  </tr>

  <?php
  $total = 0;
  foreach ($_SESSION['cart'] as $id => $qt) {
    $goods = $Goods->find($id);
  ?>
    <tr id="$g+<?= $goods['no'] ?>">
      <td class="ct"><?= $goods['no'] ?></td>
      <td class="ct"><?= $goods['name'] ?></td>
      <td class="ct"><?= $qt ?></td>
      <td class="ct"><?= $goods['qt'] ?></td>
      <td class="ct"><?= $goods['price'] ?></td>
      <td class="ct"><?= ($qt * $goods['price']) ?></td>
      <td class="ct">
        <img src="../icon/0415.jpg" class="del" data-id="<?= $goods['id'] ?>">
      </td>
    </tr>
  <?php
  $total=$total+($qt * $goods['price']);
  } ?>
</table>
<div class="ct">總價=<?=$total?></div>
<div class="ct">
  <img src="icon/0411.jpg" onclick="location.href='index.php'">
  <img src="icon/0412.jpg" onclick="location.href='?do=checkout'">
</div>

<script>
  $('.del').on('click', function() {
    let id = $(this).data('id');
    $.post("api/cart.php", {
      id
    }, () => {
      location.href = '?do=buycart';
      $("$g" + $id).remove();
    })
  })
</script>