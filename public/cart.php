<?php
session_start();
require 'inc/head.php';

$count = array_count_values($_SESSION['card']);
echo $count[46];

?>
<section class="cookies container-fluid">
    <div class="row">
      <?php
        if ($count[46]) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <figure class="thumbnail text-center">
            <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
            <figcaption class="caption">
              <h3>Pecan nuts</h3>
              <p>Cooked by Penny !</p>
                <p>quantity : <?php echo $count[46] ?></p>
            </figcaption>
          </figure>
        </div>
<?php   }
      if ($count[36]) { ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Chocolate chips</h3>
                    <p>Cooked by Bernadette !</p>
                    <p>quantity : <?php echo $count[36] ?></p>
                </figcaption>
            </figure>
        </div>
<?php }
      if ($count[58]) { ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <figure class="thumbnail text-center">
            <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
            <figcaption class="caption">
                <h3>Chocolate cookie</h3>
                <p>Cooked by Bernadette !</p>
                <p>quantity : <?php echo $count[58] ?></p>
            </figcaption>
          </figure>
        </div>
<?php }
      if ($count[32]) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <figure class="thumbnail text-center">
            <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
            <figcaption class="caption">
                <h3>M&M's&copy; cookies</h3>
                <p>Cooked by Penny !</p>
                <p>quantity : <?php echo $count[32] ?></p>
            </figcaption>
          </figure>
        </div>
<?php }

      ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
