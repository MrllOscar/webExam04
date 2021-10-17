<?php include_once '../base.php';
$_POST['no']=date("Ymd")+rand(100000,999999);
$_POST['pro']=serialize($_SESSION['cart']);
$Pro->save($_POST);
unset($_SESSION['cart']);
?>
<script>
  alert('訂購成功<br>感謝您的選購');
  location.href="/";
</script>