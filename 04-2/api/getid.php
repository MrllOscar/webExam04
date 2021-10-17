<?php include_once '../base.php';
      $mid=$Menu->all(['type'=>$_POST['id']]);
      foreach($mid as $m){
        printf('<option value="%s">%s</option>',$m['id'],$m['text']);
      }
    ?>