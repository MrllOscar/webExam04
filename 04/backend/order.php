<h1>訂單管理</h1>
<table>
  <tr>
    <td>訂單編號</td>
    <td>金額</td>
    <td>會員帳號</td>
    <td>姓名</td>
    <td>下單時間</td>
    <td>操作</td>
  </tr>
  <?php
  $rows=$Ord->all();
    foreach ($rows as $row){
  ?>
  <tr>
    <td>
      <a href="?do=detail&id=<?=$row['no']?>"><?=$row['no']?></a></td>
    <td><?=$row['total']?></td>
    <td><?=$row['acc']?></td>
    <td><?=$row['name']?></td>
    <td><?=mb_substr($row['orddate'],0,10)?></td>
    <td><button onclick="del('ord')">刪除</button></td>
  </tr>
  <?php
    }
  ?>
</table>