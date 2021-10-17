<?php include_once 'base.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039) -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>┌精品電子商務網站」</title>
  <link href="./css/css.css" rel="stylesheet" type="text/css">
  <script src="./js/jquery-1.9.1.min.js"></script>
  <script src="./js/js.js"></script>
</head>
<style>
  .hi{
    display: none;
  }
</style>
<body>
  <iframe name="back" style="display:none;"></iframe>
  <div id="main">
    <div id="top">
      <a href="/index.php">
        <img src="./icon/0416.jpg">
      </a>
      <div style="padding:10px;">
        <a href="/">回首頁</a> |
        <a href="?do=news">最新消息</a> |
        <a href="?do=look">購物流程</a> |
        <a href="?do=buycart">購物車</a> |
        <a href="?do=login">會員登入</a> |
        <a href="?do=admin">管理登入</a>
      </div>
      <marquee>年終特賣會開跑了&nbsp;&nbsp;&nbsp; 情人節特惠活動 &nbsp;&nbsp;&nbsp; </marquee>
    </div>
    <div id="left" class="ct">
      <div style="min-height:400px;">
        <?php $BM = $Menu->all(["MID" => 0]);
        foreach ($BM as $bm) {
          echo '<div class="ct bhi">';
          printf('<a href="?MID=%s">%s(%s)</a>',$bm['id'],$bm['text'],$Ord->count(["BID"=>$bm['id']]));
          $MM = $Menu->all(["MID" => $bm['id']]);
          foreach ($MM as $mm) {
            echo '<div class="ct hi">';
          printf('<a href="?MID=%s">%s(%s)</a>',$mm['id'],$mm['text'],$Ord->count(["MID"=>$mm['id']]));
            echo '</div>';
          }
          echo '</div>';
        }
        ?>
      </div>
      <span>
        <div>進站總人數</div>
        <div style="color:#f00; font-size:28px;">
          00005 </div>
      </span>
    </div>
    <div id="right">
      <?php
      $do = $_GET['do'] ?? 'home';
      $file = "front/$do.php";
      include_once file_exists($file) ? $file : 'front/home.php';
      ?>
    </div>
    <div id="bottom" style="line-height:70px;background:url(icon/bot.png); color:#FFF;" class="ct">
      <?= $Bot->find(1)['text'] ?></div>
  </div>

</body>

<script>
  $(".bhi").hover(function(){
    $(this).find(".hi").show();
  },function(){
    $(this).find(".hi").hide();
  })
</script>
</html>