
<?php $row=$Pro->find($_GET['id']);?>
<form action="" method="post">
<h1 class="ct">訂單編號<?=$row['no']?>的詳細資料</h1>
<table class="all">
  <tr>
    <td class="tt">登入帳號</td>
    <td class="pp"><?=$row['acc']?></td>
  </tr>
  <tr>
    <td class="tt">姓名</td>
    <td class="pp"><?=$row['name']?></td>
  </tr>
  <tr>
    <td class="tt">電子信箱</td>
    <td class="pp"><?=$row['email']?></td>
  </tr>
  <tr>
    <td class="tt">聯絡地址</td>
    <td class="pp"><?=$row['addr']?></td>
  </tr>
  <tr>
    <td class="tt">連絡電話</td>
    <td class="pp"><?=$row['tel']?></td>
  </tr>
</table>

<table class="all">
  <tr class="tt">
    <td>商品名稱</td>
    <td>編號</td>
    <td>數量</td>
    <td>單價</td>
    <td>小計</td>
  </tr>
  <?php $toto=0;
  $cart=unserialize($row['pro']);
  foreach($cart as $id => $qt){
    $row=$Ord->find($id);
    printf('<tr class="pp">');
    printf('<td>%s</td>',$row['name']);
    printf('<td>%s</td>',$row['no']);
    printf('<td>%s</td>',$qt);
    printf('<td>%s</td>',$row['money']);
    printf('<td>%s</td>',$row['money']*$qt);
    printf('</tr>');
    $toto=$toto+($row['money']*$qt);
  }?>
</table>
<div class="ct tt">總價:<?=$toto?> <input type="hidden" name="money" value="<?=$toto?>"></div>
<div class="ct">
<input type="button" value="返回" onclick="history.back()">
</form>
</div>