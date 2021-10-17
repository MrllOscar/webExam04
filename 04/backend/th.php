商品分類管理
<div class="ct">商品分類</div>
<div class="ct">
  <form action="api/save_type.php" method="POST">
    新增大分類<input type="text" name="name" id="typeBig">
    <input type="submit" value="新增">
  </form>
</div>
<div class="ct">
  <form action="api/save_type.php" method="POST">
    新增中分類<select name="parent" id="parent">
      <?php
      $bigs = $Type->all(['parent' => 0]);
      foreach ($bigs as $key => $value) {
        echo "<option value='{$value['id']}'>{$value['name']}</option>";
      };
      ?>
    </select>
    <input type="text" name="name" id="typeMid">
    <input type="submit" value="新增">
  </form>
  <div class="type-list">
    <table class="all">
      <?php
      foreach ($bigs as $key => $big) {
        echo "<tr class='tt' id='t{$big['id']}'>";
        echo "<td>{$big['name']}</td>";
        echo "<td><button onclick='edit(this,{$big['id']})'>修改</button><button onclick=del('type',{$big['id']})>刪除</button></td>";
        echo "</tr>";
      
      $mids = $Type->all(['parent' => $big['id']]);
      foreach ($mids as $key => $mid) {
        echo "<tr class='pp' id='t{$mid['id']}'>";
        echo "<td class='ct'>{$mid['name']}</td>";
        echo "<td><button onclick='edit(this,{$mid['id']})'>修改</button><button onclick=del('type',{$mid['id']})>刪除</button></td>";
        echo "</tr>";
      }
    }
      ?>
    </table>
  </div>
  <div class="ct">商品管理</div>
  <div class="ct"><button onclick="location.href='?do=add_goods'">新增商品</button></div>
<table class="all">
  <tr class="tt ct">
    <td>編號</td>
    <td>商品名稱</td>
    <td>庫存量</td>
    <td>狀態</td>
    <td>操作</td>
  </tr>
  <?php
  $goods=$Goods->all();
  foreach($goods as $k => $g){
  ?>
  <tr class="pp ct">
    <td><?=$g['no']?></td>
    <td><?=$g['name']?></td>
    <td><?=$g['qt']?></td>
    <td id='sh<?=$g['id']?>'><?=($g['sh']==1)?'已上架':'已下架';?></td>
    <td>
      <button onclick="location.href='?do=edit_goods&id=<?=$g['id']?>'">修改</button>
      <button onclick="del('goods',<?=$g['id']?>)">刪除</button>
      <button onclick="sh('up',<?=$g['id']?>)">上架</button>
      <button onclick="sh('down',<?=$g['id']?>)">下架</button>
    </td>
  </tr>
  <?php
  }
?>
</table>
  <script>
    function sh(action,id){
      let str=(sh==1)?'已上架':'已下架';
      $('#sh'+id).html(str);
      $.post("api/show.php",{id,sh})
      // let sh=(action=='up')?1:0;
      // $.post("api/show.php",{id,sh},()=>{
      //   location.reload();
      // })
    }
    function edit(dom,id){
      // let name=$(dom).parent().siblings('td:first').text();
      let name=$(dom).parent().prev().text();
      let str=prompt("請輸入你要修改的分類名稱",name)
      if(str!=null){
        $.post("api/save_type.php",{'name':str,id},()=>{
          $(dom).parent().prev().text(str);
        })
      }
    }
    function del2(table,id){
      $("#t"+id).remove();
    }
  </script>
</div>