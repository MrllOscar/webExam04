<h1 class="ct">第一次購物</h1>
<a href="?do=in">
<img src="/icon/0413.jpg">
</a>
<h1 class="ct">會員登入</h1>
<table class="all">
  <tr >
    <td class="pp">帳號</td>
    <td class="tt"><input type="text" name="acc[]" class="acc"></td>
  </tr>
  <tr >
    <td class="pp">密碼</td>
    <td class="tt"><input type="text" name="pw[]" class="pw"></td>
  </tr>
  <tr >
    <td class="pp">驗證碼</td>
    <td class="tt">
      <?php
        $num1=rand(1,99);
        $num2=rand(1,99);
        $_SESSION['ans']=$num1+$num2;
        echo "$num1 + $num2 = ";
      ?>
    <input type="text" name="ans[]" class="ans"></td>
  </tr>
</table>
<div class="ct"><input type="button" value="登入" class="login"></div>
<script>
$('.login').on('click',()=>{
  let acc=$('.acc').val();
  let pw=$('.pw').val();
  let ans=$('.ans').val();
  let table='mem';
  if(ans!=<?=$_SESSION['ans']?>){
    alert('對不起，您輸入的驗證碼有誤請您重新登入');
  }else{
    $.post('/api/login.php',{acc,pw,table},(rr)=>{
      if(rr!=1){
        alert('帳號密碼錯誤');
      }else{
        location.href="/index.php";
      }
    })
  }
})
</script>