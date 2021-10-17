<h1>第一次購物</h1>
<a href="?do=reg">
  <img src="./icon/0413.jpg" alt="">
</a>
<h2>會員登入</h2>
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
<button onclick="login('mem')">確認</button>
