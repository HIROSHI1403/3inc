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
                  <div class="jumbotron jumbotron-company">
                        <div class="container whiter sd text-center">
                              <h2 class="wow fadeInUp">Company</h2>
                              <p class="wow fadeInUp">企業情報</p>
                        </div>
                  </div>
            </section>

		<div class="container">
			<!-- <div class="page-header text-center">
				<h1 class="top-title c-3inc">COMPANY<br><small>企業情報</small></h1>
			</div> -->

			<div class="row flex">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 hvr-float">
                              <a href="<?php echo SRV_ROOT; ?>/company/about.php" class="noline" ontouchstart="">
                                    <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                          <div class="panel-body" style="padding: 0px;">
                                                <div class="row">
                                                      <div class="col-xs-4">
                                                            <img src="<?php echo SRV_ROOT; ?>/img/solution/square/comp.png" class="img-responsive center-block">
                                                      </div>
                                                      <div class="col-xs-8 inline-h-100">
                                                            <h5 class="text-left c-3inc">ABOUT</h5>
                                                            <p><small class="font-xs">会社プロフィール</small></p>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </a>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 hvr-float">
                              <a href="<?php echo SRV_ROOT; ?>/company/message.php" class="noline" ontouchstart="">
                                    <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                          <div class="panel-body" style="padding: 0px;">
                                                <div class="row">
                                                      <div class="col-xs-4">
                                                            <img src="<?php echo SRV_ROOT; ?>/img/solution/square/message.png" class="img-responsive center-block">
                                                      </div>
                                                      <div class="col-xs-8 inline-h-100">
                                                            <h5 class="text-left c-3inc">MESSAGE</h5>
                                                            <p><small class="font-xs">トップメッセージ</small></p>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </a>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 hvr-float">
                              <a href="<?php echo SRV_ROOT; ?>/company/philosophy.php" class="noline" ontouchstart="">
                                    <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                          <div class="panel-body" style="padding: 0px;">
                                                <div class="row">
                                                      <div class="col-xs-4">
                                                            <img src="<?php echo SRV_ROOT; ?>/img/solution/square/phi.png" class="img-responsive center-block">
                                                      </div>
                                                      <div class="col-xs-8 inline-h-100">
                                                            <h5 class="text-left c-3inc">PHILOSOPHY</h5>
                                                            <p><small class="font-xs">企業ポリシー</small></p>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </a>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 hvr-float">
                              <a href="<?php echo SRV_ROOT; ?>/company/history.php" class="noline" ontouchstart="">
                                    <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                          <div class="panel-body" style="padding: 0px;">
                                                <div class="row">
                                                      <div class="col-xs-4">
                                                            <img src="<?php echo SRV_ROOT; ?>/img/solution/square/history.png" class="img-responsive center-block">
                                                      </div>
                                                      <div class="col-xs-8 inline-h-100">
                                                            <h5 class="text-left c-3inc">HISTORY</h5>
                                                            <p><small class="font-xs">ヒストリー</small></p>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </a>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 hvr-float">
                              <a href="<?php echo SRV_ROOT; ?>/company/base.php" class="noline" ontouchstart="">
                                    <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                          <div class="panel-body" style="padding: 0px;">
                                                <div class="row">
                                                      <div class="col-xs-4">
                                                            <img src="<?php echo SRV_ROOT; ?>/img/solution/square/base.png" class="img-responsive center-block">
                                                      </div>
                                                      <div class="col-xs-8 inline-h-100">
                                                            <h5 class="text-left c-3inc">BASE</h5>
                                                             <p><small class="font-xs">事業拠点（アクセスマップ）</small></p>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </a>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 hvr-float">
                              <a href="<?php echo SRV_ROOT; ?>/news.php" class="noline" ontouchstart="">
                                    <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                          <div class="panel-body" style="padding: 0px;">
                                                <div class="row">
                                                      <div class="col-xs-4">
                                                            <img src="<?php echo SRV_ROOT; ?>/img/solution/square/news.png" class="img-responsive center-block">
                                                      </div>
                                                      <div class="col-xs-8 inline-h-100">
                                                            <h5 class="text-left c-3inc">NEWS</h5>
                                                             <p><small class="font-xs">お知らせ・トピック</small></p>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </a>
                        </div>
                  </div>

		</div>
		<?php include('/var/www/html/3inc-stage1/inc/footer.php'); ?>
	</main>

	<?php include('/var/www/html/3inc-stage1/inc/js.php'); ?>
</body>
</html>