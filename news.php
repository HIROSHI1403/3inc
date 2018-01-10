<?php require_once('/var/www/html/3inc-stage1/inc/config.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<?php include('/var/www/html/3inc-stage1/inc/head.php'); ?>
</head>
<body>
	<?php include('/var/www/html/3inc-stage1/inc/navbar.php'); ?>

	<main>

		<section class="margin-bottom-50">
              <div class="jumbotron jumbotron-news">
                    <div class="container whiter sd text-center">
                          <h2 class="wow fadeInUp">News</h2>
                          <p class="wow fadeInUp">ニュース</p>
                    </div>
              </div>
        </section>

		<div class="container">
			<!-- <div class="page-header text-center">
				<h1 class="top-title c-3inc">NEWS<br><small>ニュース一覧</small></h1>
			</div> -->

			<div class="table-responsive">
				<table class="table table-hover">
					<tbody>

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

						<tr>
							<td class="" style="padding: 25px 0px 25px 0px;">
								<a href="<?php echo SRV_ROOT; ?>/newspage.php?pageid=<?php the_ID(); ?>" class="noline" ontouchstart="">
									<div class="media margin-top-0">
										<?php
						                      $wptitle = get_the_title();
						                      $wpcategory = get_the_category();

						                      // if(mb_strlen($wptitle, 'UTF-8')>50){
						                      //       $wptitle = mb_substr($wptitle, 0, 50, 'UTF-8');
						                      //       $wptitle = $wptitle.'...';
						                      // }else{
						                      //       $wptitle = $wptitle;
						                      // }

						                      foreach ($wpcategory as $tmp) {
						                            if($tmp->parent) $wpcat = $tmp->cat_name;
						                      }
						                ?>
										<div class="media-left media-middle" style="padding-right: 25px; padding-left: 20px;">
											<img class="media-object" src="<?php the_post_thumbnail_url();?>" alt="..." width="150px;">
										</div>
										<div class="media-body">
											<p class=""><small><span class="text-muted"><?php the_time('Y/m/d'); ?></span> <?php echo $wpcat; ?></small></p>
											<h4 class="media-heading"><?php echo $wptitle; ?></h4>
										</div>
									</div>
								</a>
							</td>
						</tr>
							<?php endwhile; ?>
							<?php else: ?>
						<?php endif; ?>
						<?php wp_reset_query(); ?>
					</tbody>
				</table>
			</div>

		</div>
		<?php include('/var/www/html/3inc-stage1/inc/footer.php'); ?>
	</main>

	<?php include('/var/www/html/3inc-stage1/inc/js.php'); ?>
</body>
</html>