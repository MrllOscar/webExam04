<?php $rows=$Bot->find(1)?>
<h1 class="ct">編輯頁尾版權區</h1>
<form action="/api/manage.php" method="post">
<table class="all">
  <tr>
    <td class="tt">頁尾宣告內容</td>
    <td class="pp"><input type="text" name="text[]" value="<?=$rows['text']?>"></td>
  </tr>
</table>
<input type="hidden" name="table" value="bot"> <input type="hidden" name="id[]" value="1">
<input type="submit" value="編輯">|<input type="reset" value="重置">
</form>