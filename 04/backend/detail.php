<?php $row = $Ord->find($_GET['id']) ?>
<div class="h2">訂單編號<?=$row['no']?>的詳細資料</div>
  <table>
    <tr>
      <td>會員帳號</td>
      <td><?= $row['acc'] ?></td>
    </tr>
    <tr>
      <td>姓名</td>
      <td><input type="text" name="name" value="<?= $row['name'] ?>"></td>
    </tr>
    <tr>
      <td>電子信箱</td>
      <td><input type="text" name="email" value="<?= $row['email'] ?>"></td>
    </tr>
    <tr>
      <td>聯絡地址</td>
      <td><input type="text" name="addr" value="<?= $row['addr'] ?>"></td>
    </tr>
    <tr>
      <td>聯絡電話</td>
      <td><input type="text" name="tel" value="<?= $row['tel'] ?>"></td>
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
    $cart=unserialize($row['goods']);
    foreach ($cart as $id => $qt) {
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
    } ?>
  </table>
  <div class="ct">總價=<?= $row['total'] ?></div>

  <div class="ct">
    <input type="button" value="返回" onclick="location.href='?do=order'">
  </div>