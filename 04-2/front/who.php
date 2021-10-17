
<?php $row=$Mem->find(['acc'=>$_SESSION['admin']]);?>
<form action="/api/ord.php" method="post">
<h1 class="ct">填寫資料</h1>
<table class="all">
  <tr>
    <td class="tt">登入帳號</td>
    <td class="pp"><?=$row['acc']?><input type="hidden" name="acc" value="<?=$row['acc']?>"></td>
  </tr>
  <tr>
    <td class="tt">姓名</td>
    <td class="pp"><input type="text" name="name" value="<?=$row['name']?>"></td>
  </tr>
  <tr>
    <td class="tt">電子信箱</td>
    <td class="pp"><input type="text" name="email" value="<?=$row['email']?>"></td>
  </tr>
  <tr>
    <td class="tt">聯絡地址</td>
    <td class="pp"><input type="text" name="addr" value="<?=$row['addr']?>"></td>
  </tr>
  <tr>
    <td class="tt">連絡電話</td>
    <td class="pp"><input type="text" name="tel" value="<?=$row['tel']?>"></td>
  </tr>
</table>

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
  <?php $toto=0;
  foreach($_SESSION['cart'] as $id => $qt){
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
    $toto=$toto+($row['money']*$qt);
  }?>
</table>
<div class="ct tt">總價:<?=$toto?> <input type="hidden" name="money" value="<?=$toto?>"></div>
<div class="ct">
<input type="submit" value="確定送出">
<input type="button" value="返回修改訂單" onclick="history.back()">
</form>
</div>