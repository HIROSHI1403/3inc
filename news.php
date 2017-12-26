<?php require_once('/var/www/html/3inc-stage1/inc/config.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<?php include('/var/www/html/3inc-stage1/inc/head.php'); ?>
</head>
<body>
	<?php include('/var/www/html/3inc-stage1/inc/navbar.php'); ?>

	<main>

		<div class="container">
			<div class="page-header text-center">
				<h1 class="top-title c-3inc">NEWS<br><small>ニュース一覧</small></h1>
			</div>

			<div class="row flex">
				<?php
                      $args = array(
                            'post_type' => 'post',
                            // 'posts_per_page' => 4,
                            'category_name' => 'news'
                      );
                      $st_query = new WP_Query( $args );
                ?>
				<?php if ($st_query->have_posts()) :  ?>
					<?php while ($st_query->have_posts()) : $st_query->the_post(); ?>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 hvr-float">
							<a href="<?php echo SRV_ROOT; ?>/newspage.php?pageid=<?php the_ID(); ?>" class="noline" ontouchstart="">
							    <div class="panel panel-default phover wow fadeInUp">
							          <div class="panel-body">
							                <?php
							                      $wptitle = get_the_title();
							                      $wpcategory = get_the_category();

							                      if(mb_strlen($wptitle, 'UTF-8')>40){
							                            $wptitle = mb_substr($wptitle, 0, 40, 'UTF-8');
							                            $wptitle = $wptitle.'...';
							                      }else{
							                            $wptitle = $wptitle;
							                      }

							                      foreach ($wpcategory as $tmp) {
							                            if($tmp->parent) $wpcat = $tmp->cat_name;
							                      }
							                ?>
							                <h5 class="gradation2"><?php echo $wpcat; ?><br><small><?php the_time('Y/m/d'); ?></small></h5>
							                <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive center-block">
							                <h6><?php echo $wptitle; ?></h6>
							                <p><?php echo $wpcontent; ?></p>
							          </div>
							    </div>
							</a>
			            </div>
					<?php endwhile; ?>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
					<?php
					    if (function_exists('page_navi')) :
					    page_navi('elm_class=pagination,pagination-sm');
					    endif;
    				?>
    				</div>
			<?php else: ?>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
			</div>

		</div>
		<?php include('/var/www/html/3inc-stage1/inc/footer.php'); ?>
	</main>

	<?php include('/var/www/html/3inc-stage1/inc/js.php'); ?>
</body>
</html>