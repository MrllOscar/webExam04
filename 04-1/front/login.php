<h2>第一次購物</h2>
<a href="?do=in"><img src="../icon/0413.jpg" alt=""></a>
<h2>會員登入</h2>
<table>
  <tr>
    <td class="pp">帳號</td>
    <td class="tt"><input type="text" name="acc" class="acc"></td>
  </tr>
  <tr>
    <td class="pp">密碼</td>
    <td class="tt"><input type="text" name="pw" class="pw"></td>
  </tr>
  <tr>
    <td class="pp">驗證碼</td>
    <td class="tt"><?php
    $a=rand(11,99);
    $b=rand(11,99);
    $_SESSION['ans']=$a+$b;
    echo "$a + $b = "
    ?><input type="text" name="ans" class="ans"></td>
  </tr>
</table>
<input type="button" value="確認" onclick="login()">

<script>
  function login(){
    let ans=$('.ans').val();
    let acc=$('.acc').val();
    let pw=$('.pw').val();
    if(ans!=<?=$_SESSION['ans']?>){
      alert('驗證碼錯誤');
    }else{
      $.post('../api/chkpw.php',{pw,acc},(rr)=>{
        if(rr==1){
          location.href="/index.php";
        }else{
          alert('帳號密碼錯誤');
        }
      })
    }
  }
</script>