<form action="/api/manage.php" method="post">
<input type="text" name="text[]" value="">
<input type="hidden" name="table" value="menu">
<input type="hidden" name="id[]" value="<?=$_GET['id']?>">
<button>修改</button>
</form>
<input type="button" onclick="location.href='?do=th'" value="返回">