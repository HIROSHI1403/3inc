<?php require_once('/var/www/html/3inc-stage1/inc/config.php'); ?>

<!DOCTYPE html>
<html>
<head>
      <?php include('/var/www/html/3inc-stage1/inc/head.php'); ?>
</head>
<body>
      <?php include('/var/www/html/3inc-stage1/inc/navbar.php'); ?>

      <main>

            <?php
                  $post = get_post($_GET['pageid']);
                  $inc_content = apply_filters('the_content' ,$post->post_content);
                  $inc_date = apply_filters('the_date' ,$post->post_date);
                  $inc_title = apply_filters('the_title' ,$post->post_title);
                  $inc_date = date('Y/m/d',strtotime($inc_date));
                  if (empty($inc_title)) {
                        echo "No Title..";
                        $id = "none";
                  }else{
                        $id = apply_filters('ID',$post->ID);
                        setup_postdata($post);
                        if (empty($inc_content)) {
                              $inc_content = "※タイトルのみの構成です。";
                        }else{}
                  }
            ?>

            <div class="container">
                  <div class="page-header text-center">
                        <h1 class="h3 margin-top-150 c-3inc"><?php echo $inc_title; ?></h1>
                        <p><small><span class="label label-default"><?php echo $inc_date; ?></span></small></p>
                  </div>

                  <div>
                        <?php echo $inc_content; ?>
                  </div>

            </div>
            <?php include('/var/www/html/3inc-stage1/inc/footer.php'); ?>
      </main>

      <?php include('/var/www/html/3inc-stage1/inc/js.php'); ?>
</body>
</html>