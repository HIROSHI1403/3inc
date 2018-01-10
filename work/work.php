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
                        <div class="jumbotron jumbotron-work">
                              <div class="container whiter sd text-center">
                                    <h2 class="wow fadeInUp">Work</h2>
                                    <p class="wow fadeInUp">導入事例</p>
                              </div>
                        </div>
                  </section>

                  <div class="container">
                        <!-- <div class="page-header text-center">
                              <h1 class="top-title c-3inc">WORK<br><small>導入事例</small></h1>
                        </div> -->
                        <div class="row">
                              <div class="col-md-12">
                                    <p class="text-center lead c-3inc-sub">
                                          ポイントサービスのパイオニアとして、当社は2000年以降これまで数多くのお客様にサービスを提供してきました。その実績やノウハウ、経験を活かしつつ、250社以上の導入実績と、1000万人以上の会員情報をお預かりしています。飲食・アパレル・小売・ホテル・商業施設など幅広い業種・業態に対応しています。
                                    </p>
                              </div>
                        </div>
                        <section id="news">
                              <div class="container">
                                    <div class="row flex">
                                          <?php
                                                $args = array(
                                                      'post_type' => 'post',
                                                      // 'posts_per_page' => 4,
                                                      'category_name' => 'work'
                                                );
                                                $st_query = new WP_Query( $args );
                                          ?>

                                          <?php if ($st_query->have_posts()) :  ?>
                                                <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>
                                                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 hvr-float">
                                                            <a href="<?php echo SRV_ROOT; ?>/work/workpage.php?pageid=<?php the_ID(); ?>" class="noline" ontouchstart="">
                                                                  <div class="panel panel-default phover wow fadeInUp">
                                                                        <div class="panel-body">
                                                                              <?php
                                                                                    $wptitle = get_the_title();
                                                                                    $wpcategory = get_the_category();
                                                                                    $wptags = get_the_tags();

                                                                                    if(mb_strlen($wptitle, 'UTF-8')>40){
                                                                                          $wptitle = mb_substr($wptitle, 0, 40, 'UTF-8');
                                                                                          $wptitle = $wptitle.'...';
                                                                                    }else{
                                                                                          $wptitle = $wptitle;
                                                                                    }

                                                                                    foreach ($wptags as $tmp) {
                                                                                          $wptag = $tmp;
                                                                                    }
                                                                              ?>
                                                                              <h5 class="gradation2"><?php echo $wptag->name; ?>&nbsp;様<br><small><?php the_time('Y/m/d'); ?></small></h5>
                                                                              <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive center-block">
                                                                              <h6><?php echo $wptitle; ?></h6>
                                                                        </div>
                                                                  </div>
                                                            </a>
                                                      </div>
                                                <?php endwhile; ?>
                                          <?php else: ?>
                                          <?php endif; ?>
                                          <?php wp_reset_query(); ?>
                                    </div>
                              </div>
                        </section>
                  </div>
                  <?php include('/var/www/html/3inc-stage1/inc/footer.php'); ?>
            </main>
            <?php include('/var/www/html/3inc-stage1/inc/js.php'); ?>
      </body>
</html>