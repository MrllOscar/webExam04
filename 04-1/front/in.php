<h1 class="ct">會員註冊</h1>
<form action="../api/manage.php" method="post">
<table class="all">
<tr>
    <td class="tt">姓名</td>
    <td class="pp"><input type="text" name="name[]" ></td>
  </tr>
  <tr>
    <td class="tt">帳號</td>
    <td class="pp"><input type="text" name="acc[]" id="acc"><input type="button" value="檢測帳號" onclick="chkacc()"></td>
  </tr>
  <tr>
    <td class="tt">密碼</td>
    <td class="pp"><input type="text" name="pw[]" ></td>
  </tr>
  <tr>
    <td class="tt">電話</td>
    <td class="pp"><input type="text" name="tel[]" ></td>
  </tr>
  <tr>
    <td class="tt">住址</td>
    <td class="pp"><input type="text" name="addr[]" ></td>
  </tr>
  <tr>
    <td class="tt">電子信箱</td>
    <td class="pp"><input type="text" name="email[]" ></td>
  </tr>
</table>
<input type="hidden" name="table" value="mem"><input type="hidden" name="id[]" value="">
<input type="submit" value="註冊"><input type="reset" value="重置">
</form>
<script>
  function chkacc(){
    let acc=$('#acc').val();
    $.post('../api/chkacc.php',{acc},(rr)=>{
      if(rr==1){
        alert('帳號重複不可使用');
      }else{
        alert('OK');
      }
    })
  }
</script>