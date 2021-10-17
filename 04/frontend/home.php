商品頁面
<?php
$type = $_GET['type'] ?? 0;
if ($type == 0) {
  $nav = "全部商品";
  $rows = $Goods->all(['sh' => 1]);
} else {
  $nav = "";
  $tt = $Type->find($type);
  if ($tt['parent'] == 0) {
    $nav = $tt['name'];
    $rows = $Goods->all(['big' => $type, 'sh' => 1]);
  } else {
    $tm = $Type->find($type);
    $tb = $Type->find($tm['parent']);
    $nav = $tb['name'] . ">" . $tm['name'];
    $rows = $Goods->all(['mid' => $type, 'sh' => 1]);
  }
}
?>
<?= $nav; ?>
<?php
foreach ($rows as $row) {

?>
  <table class="all">
    <tr class=" pp">
      <td>
        <a href="?do=detail&id=<?= $row['id'] ?>"><img src="img/<?= $row['img'] ?>" style="width: 80%;">
      </td></a>
      <td>
        <div class="tt ct"><?= $row['name'] ?></div>
        <div>價錢:<?= $row['price'] ?>
          <a href="?do=buycart&id=<?= $row['id'] ?>&qt=1" style="float: right;"><img src="icon/0402.jpg"></a>
        </div>
        <div>規格:<?= $row['spec'] ?></div>
        <div>簡介:<?= mb_substr($row['intro'], 0, 25); ?>...</div>
      </td>
    </tr>
  </table>
<?php }; ?>