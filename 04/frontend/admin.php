<table>
  <tr>
    <td>帳號</td>
    <td><input type="text" name="acc" id="acc"></td>
  </tr>
  <tr>
    <td>密碼</td>
    <td><input type="text" name="pw" id="pw"></td>
  </tr>
  <tr>
    <td>驗證碼</td>
    <td><?php 
      $a=rand(10,99);
      $b=rand(10,99);

      $_SESSION['ans']=$a+$b;
      echo $a . "+". $b ."=";
    ?><input type="text" name="chk" id="chk"></td>
  </tr>
</table>
<button onclick="login('admin')">確認</button>
<button onclick="location.href='index.php'">返回</button>