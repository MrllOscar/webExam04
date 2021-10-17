<?php $mem = $Mem->find(['acc' => $_SESSION['mem']]) ?>
<h2 class="ct">填寫資料</h2>
<form action="api/checkout.php" method="post">
  <table>
    <tr>
      <td>帳號</td>
      <td><?= $mem['acc'] ?></td>
      <input type="hidden" name="acc" value="<?= $mem['acc'] ?>">
    </tr>
    <tr>
      <td>姓名</td>
      <td><input type="text" name="name" value="<?= $mem['name'] ?>"></td>
    </tr>
    <tr>
      <td>電子信箱</td>
      <td><input type="text" name="email" value="<?= $mem['email'] ?>"></td>
    </tr>
    <tr>
      <td>聯絡地址</td>
      <td><input type="text" name="addr" value="<?= $mem['addr'] ?>"></td>
    </tr>
    <tr>
      <td>聯絡電話</td>
      <td><input type="text" name="tel" value="<?= $mem['tel'] ?>"></td>
    </tr>
  </table>
  <table>
    <tr>
      <td class="ct">商品名稱</td>
      <td class="ct">編號</td>
      <td class="ct">數量</td>
      <td class="ct">單價</td>
      <td class="ct">小計</td>
    </tr>

    <?php 
  $total = 0;
    
    foreach ($_SESSION['cart'] as $id => $qt) {
      $goods = $Goods->find($id);
    ?>
      <tr id="$g+<?= $goods['no'] ?>">
        <td class="ct"><?= $goods['name'] ?></td>
        <td class="ct"><?= $goods['no'] ?></td>
        <td class="ct"><?= $qt ?></td>
        <td class="ct"><?= $goods['price'] ?></td>
        <td class="ct"><?= ($qt * $goods['price']) ?></td>

      </tr>
    <?php
      $total = $total + ($qt * $goods['price']);
    } ?>
  </table>
  <div class="ct">總價=<?= $total ?></div>

  <div class="ct">
    <input type="hidden" name="total" value="<?=$total?>">
    <input type="submit" value="送出"><input type="button" value="返回修改訂單" onclick="location.href='?do=buycart'">
  </div>
</form>