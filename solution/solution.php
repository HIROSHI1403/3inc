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
                  <div class="jumbotron jumbotron-solution">
                        <div class="container whiter sd text-center">
                              <h2 class="wow fadeInUp">Solution</h2>
                              <p class="wow fadeInUp">ソリューション</p>
                        </div>
                  </div>
            </section>

		<div class="container">
			<!-- <div class="page-header text-center">
				<h1 class="top-title c-3inc">SOLUTION<br><small>ソリューション一覧</small></h1>
			</div> -->

			<div class="row flex">
                <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 hvr-float">
                      <a href="<?php echo SRV_ROOT; ?>/solution/solutionlist.php" class="noline" ontouchstart="">
                            <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                  <div class="panel-body" style="padding: 0px;">
                                        <div class="row">
                                              <div class="col-xs-4"">
                                                    <img src="<?php echo SRV_ROOT; ?>/img/solution/solution.png" class="img-responsive center-block">
                                              </div>
                                              <div class="col-xs-8">
                                                    <h5 class="text-left c-iij">SOLUTION LIST</h5>
                                                    <p><small class="font-xs">当社ソリューション一覧</small></p>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                      </a>
                </div> -->

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 hvr-float">
                      <a href="<?php echo SRV_ROOT; ?>/solution/tcos.php" class="noline" ontouchstart="">
                            <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                  <div class="panel-body" style="padding: 0px;">
                                        <div class="row">
                                              <div class="col-xs-4">
                                                    <img src="<?php echo SRV_ROOT; ?>/img/solution/square/tcos.jpg" class="img-responsive center-block">
                                              </div>
                                              <div class="col-xs-8">
                                                    <h5 class="text-left c-3inc">TCOSサービス</h5>
                                                    <p><small class="font-xs">クレジットカード決済端末を使った顧客＆ポイント管理サービス</small></p>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                      </a>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 hvr-float">
                      <a href="<?php echo SRV_ROOT; ?>/solution/pocketta.php" class="noline" ontouchstart="">
                            <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                  <div class="panel-body" style="padding: 0px;">
                                        <div class="row">
                                              <div class="col-xs-4">
                                                    <img src="<?php echo SRV_ROOT; ?>/img/solution/square/pocketta.jpg" class="img-responsive center-block">
                                              </div>
                                              <div class="col-xs-8">
                                                    <h5 class="text-left c-3inc">POCKETTAサービス</h5>
                                                    <p><small class="font-xs">ポイント管理から会員管理、利用実績の分析をトータル支援</small></p>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                      </a>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 hvr-float">
                      <a href="<?php echo SRV_ROOT; ?>/solution/vps.php" class="noline" ontouchstart="">
                            <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                  <div class="panel-body" style="padding: 0px;">
                                        <div class="row">
                                              <div class="col-xs-4">
                                                    <img src="<?php echo SRV_ROOT; ?>/img/solution/square/vps.jpg" class="img-responsive center-block">
                                              </div>
                                              <div class="col-xs-8">
                                                    <h5 class="text-left c-3inc">VPSサービス</h5>
                                                    <p><small class="font-xs">大型商業施設向け顧客管理＆分析サービス</small></p>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                      </a>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 hvr-float">
                      <a href="<?php echo SRV_ROOT; ?>/solution/dev.php" class="noline" ontouchstart="">
                            <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                  <div class="panel-body" style="padding: 0px;">
                                        <div class="row">
                                              <div class="col-xs-4">
                                                    <img src="<?php echo SRV_ROOT; ?>/img/solution/square/dev.jpg" class="img-responsive center-block">
                                              </div>
                                              <div class="col-xs-8">
                                                    <h5 class="text-left c-3inc">ソリューション開発</h5>
                                                    <p><small class="font-xs">ソリューション開発サービス</small></p>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                      </a>
                </div>

                <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 hvr-float">
                      <a href="<?php echo SRV_ROOT; ?>/solution/credit.php" class="noline" ontouchstart="">
                            <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                  <div class="panel-body" style="padding: 0px;">
                                        <div class="row">
                                              <div class="col-xs-4">
                                                    <img src="<?php echo SRV_ROOT; ?>/img/solution/square/credit.jpg" class="img-responsive center-block">
                                              </div>
                                              <div class="col-xs-8">
                                                    <h5 class="text-left c-3inc">クレジット決済集計</h5>
                                                    <p><small class="font-xs">カード決済データの収集・売上・入金管理を簡単に</small></p>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                      </a>
                </div> -->
          </div>
          <div class="row flex">
                <div class="col-md-12 wow fadeInUp" data-wow-duration="0.5s">
                      <p class="lead"><span class="label label-danger">ALLIANCE</span></small></p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 hvr-float">
                      <a href="<?php echo SRV_ROOT; ?>/solution/a_tpoint.php" class="noline" ontouchstart="">
                            <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                  <div class="panel-body" style="padding: 0px;">
                                        <div class="row">
                                              <div class="col-xs-4">
                                                    <img src="<?php echo SRV_ROOT; ?>/img/solution/square/tpoint.png" class="img-responsive center-block">
                                              </div>
                                              <div class="col-xs-8">
                                                    <h5 class="text-left c-3inc">Ｔポイントサービス</h5>
                                                    <p><small class="font-xs"><span class="label label-danger">ALLIANCE</span></small></p>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                      </a>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 hvr-float">
                      <a href="https://www.iij.ad.jp/biz/pos/" target="_blank" class="noline" ontouchstart="">
                            <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                  <div class="panel-body" style="padding: 0px;">
                                        <div class="row">
                                              <div class="col-xs-4">
                                                    <img src="<?php echo SRV_ROOT; ?>/img/solution/square/IIJGIOPOS.png" class="img-responsive center-block">
                                              </div>
                                              <div class="col-xs-8">
                                                    <h5 class="text-left c-3inc">IIJ GIO POS</h5>
                                                    <p><small class="font-xs"><span class="label label-danger">ALLIANCE</span>&nbsp;<i class="fa fa-external-link" aria-hidden="true"></i></small></p>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                      </a>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 hvr-float">
                      <a href="http://www.toshibatec.co.jp/products/reginavi.html" target="_blank" class="noline" ontouchstart="">
                            <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                  <div class="panel-body" style="padding: 0px;">
                                        <div class="row">
                                              <div class="col-xs-4">
                                                    <img src="<?php echo SRV_ROOT; ?>/img/solution/square/regi-navi.png" class="img-responsive center-block">
                                              </div>
                                              <div class="col-xs-8">
                                                    <h5 class="text-left c-3inc">レジナビ</h5>
                                                    <p><small class="font-xs"><span class="label label-danger">ALLIANCE</span>&nbsp;<i class="fa fa-external-link" aria-hidden="true"></i></small></p>
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