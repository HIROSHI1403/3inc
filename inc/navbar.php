<?php require_once('/var/www/html/3inc-stage1/inc/config.php'); ?>

<nav class="navbar navbar-default navbar-fixed-top yamm">
      <div class="container-fluid">
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
                  <!-- <button class="hamburger navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="hamburger-box">
                              <span class="hamburger-inner"></span>
                        </span>
                  </button> -->
                  <a class="navbar-brand" href="<?php echo SRV_ROOT; ?>"><img src="<?php echo SRV_ROOT; ?>/img/logo/logo.svg" alt="株式会社トリニティ｜Trinity Inc." class="img-responsive"></a>
            </div>
            <p class="navbar-text c-3inc hidden-md hidden-sm hidden-xs wow fadeInRight">Make customer a royal customer.</p>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo SRV_ROOT; ?>/concept/concept.php" class="hvr-underline-reveal wow fadeIn" data-wow-delay="0s">CONCEPT</a></li>
                        <li class="dropdown yamm-fw  wow fadeIn" data-wow-delay="0.1s">
                              <a href="<?php echo SRV_ROOT; ?>/solution/solution.php" ontouchstart="" class="dropdown-toggle hvr-underline-reveal" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SOLUTION <span class="caret"></span></a>
                              <ul class="dropdown-menu dropdown-menu-nav">
                                    <div class="container">
                                          <div class="page-header">
                                                <h3 class="wow fadeInLeft" data-wow-duration="0.5s">SOLUTION</h3>
                                          </div>
                                          <div class="row flex">
                                                <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 hvr-float">
                                                      <a href="<?php echo SRV_ROOT; ?>/solution/solution.php" class="noline" ontouchstart="">
                                                            <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                                                  <div class="panel-body" style="padding: 0px;">
                                                                        <div class="row">
                                                                              <div class="col-xs-4"">
                                                                                    <img src="<?php echo SRV_ROOT; ?>/img/solution/solution.png" class="img-responsive center-block">
                                                                              </div>
                                                                              <div class="col-xs-8 inline-h-100">
                                                                                    <h5 class="text-left c-iij" style="margin:0px;">SOLUTION LIST</h5>
                                                                                    <p style="margin:0px;"><small class="font-xs">当社ソリューション一覧</small></p>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </a>
                                                </div> -->

                                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 hvr-float">
                                                      <a href="<?php echo SRV_ROOT; ?>/solution/tcos.php" class="noline" ontouchstart="">
                                                            <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                                                  <div class="panel-body" style="padding: 0px;">
                                                                        <div class="row">
                                                                              <div class="col-xs-4">
                                                                                    <img src="<?php echo SRV_ROOT; ?>/img/solution/square/tcos.jpg" class="img-responsive center-block">
                                                                              </div>
                                                                              <div class="col-xs-8 inline-h-100">
                                                                                    <h5 class="text-left c-3inc" style="margin:0px;">TCOSサービス</h5>
                                                                                    <p style="margin:0px;"><small class="font-xs">クレジットカード決済端末を使った顧客＆ポイント管理サービス</small></p>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </a>
                                                </div>

                                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 hvr-float">
                                                      <a href="<?php echo SRV_ROOT; ?>/solution/pocketta.php" class="noline" ontouchstart="">
                                                            <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                                                  <div class="panel-body" style="padding: 0px;">
                                                                        <div class="row">
                                                                              <div class="col-xs-4">
                                                                                    <img src="<?php echo SRV_ROOT; ?>/img/solution/square/pocketta.jpg" class="img-responsive center-block">
                                                                              </div>
                                                                              <div class="col-xs-8 inline-h-100">
                                                                                    <h5 class="text-left c-3inc" style="margin:0px;">POCKETTAサービス</h5>
                                                                                    <p style="margin:0px;"><small class="font-xs">ポイント管理から会員管理、利用実績の分析をトータル支援</small></p>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </a>
                                                </div>

                                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 hvr-float">
                                                      <a href="<?php echo SRV_ROOT; ?>/solution/vps.php" class="noline" ontouchstart="">
                                                            <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                                                  <div class="panel-body" style="padding: 0px;">
                                                                        <div class="row">
                                                                              <div class="col-xs-4">
                                                                                    <img src="<?php echo SRV_ROOT; ?>/img/solution/square/vps.jpg" class="img-responsive center-block">
                                                                              </div>
                                                                              <div class="col-xs-8 inline-h-100">
                                                                                    <h5 class="text-left c-3inc" style="margin:0px;">VPSサービス</h5>
                                                                                    <p style="margin:0px;"><small class="font-xs">大型商業施設向け顧客管理＆分析サービス</small></p>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </a>
                                                </div>

                                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 hvr-float">
                                                      <a href="<?php echo SRV_ROOT; ?>/solution/dev.php" class="noline" ontouchstart="">
                                                            <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                                                  <div class="panel-body" style="padding: 0px;">
                                                                        <div class="row">
                                                                              <div class="col-xs-4">
                                                                                    <img src="<?php echo SRV_ROOT; ?>/img/solution/square/dev.jpg" class="img-responsive center-block">
                                                                              </div>
                                                                              <div class="col-xs-8 inline-h-100">
                                                                                    <h5 class="text-left c-3inc" style="margin:0px;">ソリューション開発</h5>
                                                                                    <p style="margin:0px;"><small class="font-xs">ソリューション開発サービス</small></p>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </a>
                                                </div>

                                                <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 hvr-float">
                                                      <a href="<?php echo SRV_ROOT; ?>/solution/credit.php" class="noline" ontouchstart="">
                                                            <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                                                  <div class="panel-body" style="padding: 0px;">
                                                                        <div class="row">
                                                                              <div class="col-xs-4">
                                                                                    <img src="<?php echo SRV_ROOT; ?>/img/solution/square/credit.jpg" class="img-responsive center-block">
                                                                              </div>
                                                                              <div class="col-xs-8 inline-h-100">
                                                                                    <h5 class="text-left c-3inc" style="margin:0px;">クレジット決済集計</h5>
                                                                                    <p style="margin:0px;"><small class="font-xs">カード決済データの収集・売上・入金管理を簡単に</small></p>
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
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 hvr-float">
                                                      <a href="<?php echo SRV_ROOT; ?>/solution/a_tpoint.php" class="noline" ontouchstart="">
                                                            <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                                                  <div class="panel-body" style="padding: 0px;">
                                                                        <div class="row">
                                                                              <div class="col-xs-4">
                                                                                    <img src="<?php echo SRV_ROOT; ?>/img/solution/square/tpoint.png" class="img-responsive center-block">
                                                                              </div>
                                                                              <div class="col-xs-8 inline-h-100">
                                                                                    <h5 class="text-left c-3inc" style="margin:0px;">Ｔポイントサービス</h5>
                                                                                    <p style="margin:0px;"><small class="font-xs"><span class="label label-danger">ALLIANCE</span>&nbsp;</small></p>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </a>
                                                </div>

                                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 hvr-float">
                                                      <a href="<?php echo SRV_ROOT; ?>/solution/a_iijgiopos.php" class="noline" ontouchstart="">
                                                            <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                                                  <div class="panel-body" style="padding: 0px;">
                                                                        <div class="row">
                                                                              <div class="col-xs-4">
                                                                                    <img src="<?php echo SRV_ROOT; ?>/img/solution/square/IIJGIOPOS.png" class="img-responsive center-block">
                                                                              </div>
                                                                              <div class="col-xs-8 inline-h-100">
                                                                                    <h5 class="text-left c-3inc" style="margin:0px;">IIJ GIO POS</h5>
                                                                                    <p style="margin:0px;"><small class="font-xs"><span class="label label-danger">ALLIANCE</span></small></p>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </a>
                                                </div>

                                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 hvr-float">
                                                      <a href="<?php echo SRV_ROOT; ?>/solution/a_reginavi.php" class="noline" ontouchstart="">
                                                            <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                                                  <div class="panel-body" style="padding: 0px;">
                                                                        <div class="row">
                                                                              <div class="col-xs-4">
                                                                                    <img src="<?php echo SRV_ROOT; ?>/img/solution/square/regi-navi.png" class="img-responsive center-block">
                                                                              </div>
                                                                              <div class="col-xs-8 inline-h-100">
                                                                                    <h5 class="text-left c-3inc" style="margin:0px;">レジナビ</h5>
                                                                                    <p style="margin:0px;"><small class="font-xs"><span class="label label-danger">ALLIANCE</span></small></p>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </a>
                                                </div>
                                          </div>
                                    </div>
                              </ul>
                        </li>

                        <li class="dropdown yamm-fw wow fadeIn" data-wow-delay="0.2s">
                              <a href="<?php echo SRV_ROOT; ?>/company/company.php" ontouchstart="" class="dropdown-toggle hvr-underline-reveal" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">COMPANY <span class="caret"></span></a>
                              <ul class="dropdown-menu dropdown-menu-nav">
                                    <div class="container">
                                          <div class="page-header">
                                                <h3 class="wow fadeInLeft" data-wow-duration="0.5s">COMPANY</h3>
                                          </div>
                                          <div class="row flex">
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 hvr-float">
                                                      <a href="<?php echo SRV_ROOT; ?>/company/about.php" class="noline" ontouchstart="">
                                                            <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                                                  <div class="panel-body" style="padding: 0px;">
                                                                        <div class="row">
                                                                              <div class="col-xs-4">
                                                                                    <img src="<?php echo SRV_ROOT; ?>/img/solution/square/comp.png" class="img-responsive center-block">
                                                                              </div>
                                                                              <div class="col-xs-8 inline-h-100">
                                                                                    <h5 class="text-left c-3inc">ABOUT</h5>
                                                                                    <p style="margin: 0px"><small class="font-xs">会社プロフィール</small></p>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </a>
                                                </div>

                                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 hvr-float">
                                                      <a href="<?php echo SRV_ROOT; ?>/company/message.php" class="noline" ontouchstart="">
                                                            <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                                                  <div class="panel-body" style="padding: 0px;">
                                                                        <div class="row">
                                                                              <div class="col-xs-4">
                                                                                    <img src="<?php echo SRV_ROOT; ?>/img/solution/square/message.png" class="img-responsive center-block">
                                                                              </div>
                                                                              <div class="col-xs-8 inline-h-100">
                                                                                    <h5 class="text-left c-3inc">MESSAGE</h5>
                                                                                    <p style="margin: 0px"><small class="font-xs">トップメッセージ</small></p>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </a>
                                                </div>

                                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 hvr-float">
                                                      <a href="<?php echo SRV_ROOT; ?>/company/philosophy.php" class="noline" ontouchstart="">
                                                            <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                                                  <div class="panel-body" style="padding: 0px;">
                                                                        <div class="row">
                                                                              <div class="col-xs-4">
                                                                                    <img src="<?php echo SRV_ROOT; ?>/img/solution/square/phi.png" class="img-responsive center-block">
                                                                              </div>
                                                                              <div class="col-xs-8 inline-h-100">
                                                                                    <h5 class="text-left c-3inc">PHILOSOPHY</h5>
                                                                                    <p style="margin: 0px"><small class="font-xs">企業ポリシー</small></p>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </a>
                                                </div>

                                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 hvr-float">
                                                      <a href="<?php echo SRV_ROOT; ?>/company/history.php" class="noline" ontouchstart="">
                                                            <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                                                  <div class="panel-body" style="padding: 0px;">
                                                                        <div class="row">
                                                                              <div class="col-xs-4">
                                                                                    <img src="<?php echo SRV_ROOT; ?>/img/solution/square/history.png" class="img-responsive center-block">
                                                                              </div>
                                                                              <div class="col-xs-8 inline-h-100">
                                                                                    <h5 class="text-left c-3inc">HISTORY</h5>
                                                                                    <p style="margin: 0px"><small class="font-xs">ヒストリー</small></p>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </a>
                                                </div>

                                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 hvr-float">
                                                      <a href="<?php echo SRV_ROOT; ?>/company/base.php" class="noline" ontouchstart="">
                                                            <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                                                  <div class="panel-body" style="padding: 0px;">
                                                                        <div class="row">
                                                                              <div class="col-xs-4">
                                                                                    <img src="<?php echo SRV_ROOT; ?>/img/solution/square/base.png" class="img-responsive center-block">
                                                                              </div>
                                                                              <div class="col-xs-8 inline-h-100">
                                                                                    <h5 class="text-left c-3inc">ACCESS</h5>
                                                                                     <p style="margin: 0px"><small class="font-xs">アクセスマップ</small></p>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </a>
                                                </div>

                                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 hvr-float">
                                                      <a href="<?php echo SRV_ROOT; ?>/news.php" class="noline" ontouchstart="">
                                                            <div class="panel panel-default phover wow fadeInUp" data-wow-duration="0.5s">
                                                                  <div class="panel-body" style="padding: 0px;">
                                                                        <div class="row">
                                                                              <div class="col-xs-4">
                                                                                    <img src="<?php echo SRV_ROOT; ?>/img/solution/square/news.png" class="img-responsive center-block">
                                                                              </div>
                                                                              <div class="col-xs-8 inline-h-100">
                                                                                    <h5 class="text-left c-3inc">NEWS</h5>
                                                                                     <p style="margin: 0px"><small class="font-xs">お知らせ・トピック</small></p>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </a>
                                                </div>
                                          </div>
                                    </div>
                              </ul>
                        </li>
                        <li><a href="<?php echo SRV_ROOT; ?>/work/work.php" class="hvr-underline-reveal wow fadeIn" data-wow-delay="0.3s">WORK</a></li>
                        <li><a href="<?php echo SRV_ROOT; ?>/recruit/recruit_top.php" class="hvr-underline-reveal wow fadeIn" data-wow-delay="0.4s">RECRUIT</a></li>
                        <li><a href="<?php echo SRV_ROOT; ?>/contact/notice.php" class="hvr-underline-reveal wow fadeIn btn-iij" data-wow-delay="0.5s">CONTACT/ENTRY</a></li>
                  </ul>
            </div>
      </div>
</nav>