<?php

$address1 = '../admin/dashboard.php';
$address2 = '../validation/logout.php';

include_once('../html/header.html') ?>
<!-- # From database -->
<div class="container">
   <div class="row">
      <?php
      require_once('../connection/connect.php');

      $type = 'Foreign Delicacies';
      include_once('select.php');


      ?>
   </div>
</div>
<?php include_once('../html/foot.html') ?>