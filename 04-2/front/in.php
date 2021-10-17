<div class="ct">註冊會員</div>
<form action="/api/manage.php" method="post">
<table class="all">
  <tr>
    <td class="pp">姓名</td>
    <td class="tt"><input type="text" name="name[]" class="name"></td>
  </tr>
  <tr >
    <td class="pp">帳號</td>
    <td class="tt"><input type="text" name="acc[]" class="acc"><input type="button" onclick="chkacc()" value="檢查帳號"></td>
  </tr>
  <tr >
    <td class="pp">密碼</td>
    <td class="tt"><input type="text" name="pw[]" class="pw"></td>
  </tr>
  <tr>
    <td class="pp">電子信箱</td>
    <td class="tt"><input type="text" name="email[]" class="email"></td>
  </tr>
  <tr>
    <td class="pp">地址</td>
    <td class="tt"><input type="text" name="addr[]" class="addr"></td>
  </tr>
  <tr>
    <td class="pp">電話</td>
    <td class="tt"><input type="text" name="tel[]" class="tel"></td>
  </tr>
  <input type="hidden" name="table" value="mem">
  <input type="hidden" name="id[]" value="">
</table>
<div class="ct"><input type="submit" value="註冊"><input type="reset" value="重置"></div>
</form>
<script>
  function chkacc(){
    let acc=$('.acc').val();
    $.post('/api/chkacc.php',{acc},(rr)=>{
      if(rr>=1){
        alert('帳號重複');
      }else{
        alert('ok');
      }
    })
  }
</script>