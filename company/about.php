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
                          <h2 class="wow fadeInUp">About Us</h2>
                          <p class="wow fadeInUp">企業情報</p>
                    </div>
              </div>
        </section>

		<section>
			<div class="container">
				<div class="row">
					<!-- <div class="col-md-12 text-center">
						<h1 class="top-title c-3inc">企業情報</h1>
					</div> -->
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-hover">
								<tbody>
									<tr>
										<th class="">商号</th>
										<td>株式会社トリニティ（Trinity.Inc）</td>
									</tr>

									<tr>
										<th class="">設立</th>
										<td>1986年3月</td>
									</tr>

									<tr>
										<th class="">本社所在地</th>
										<td>
											<ul class="list-unstyled">
												<li>〒102-0071 千代田区富士見2-10-2 飯田橋グラン・ブルーム（受付2F）</li>
												<li>TEL 03-5205-6486 / FAX 03-5205-6487</li>
												<li>
													<a href="<?php echo SRV_ROOT; ?>/company/base.php" class="hvr-underline-reveal wow fadeIn btn-sm btn-iij" data-wow-delay="0.1s"><i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;アクセスマップ</a>
												</li>
											</ul>
										</td>
									</tr>

									<tr>
										<?php $args = array('pagename' => 'capital',);$st_query = new WP_Query( $args ); ?>
	                                    <?php if ( $st_query->have_posts() ): ?>
	                                    	<?php while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
	                                    	<?php
	                                    		$wpcontent = get_the_content();
												$wpcontent = wp_strip_all_tags( $wpcontent );
	                                    	?>
										<th class="">資本金</th>
										<td><?php echo $wpcontent; ?></td>
											<?php endwhile; ?>
		                                <?php else: ?>
		                                <?php endif; ?>
		                                <?php wp_reset_query(); ?>
									</tr>

									<tr>
										<th class="">代表取締役社長</th>
										<td>平田 隆三郎</td>
									</tr>

									<tr>
										<th class="">株主構成</th>
										<td>
											<ul class="list-unstyled">
												<li><a href="javascript:void(0);">平田機工株式会社</a></li>
												<li><a href="javascript:void(0);">株式会社インターネットイニシアティブ</a></li>
											</ul>
										</td>
									</tr>

									<tr>
										<th class="">主要取引銀行</th>
										<td>肥後銀行、三井住友銀行</td>
									</tr>

									<tr>
										<?php $args = array('pagename' => 'bussinesscontents',);$st_query = new WP_Query( $args ); ?>
	                                    <?php if ( $st_query->have_posts() ): ?>
	                                    	<?php while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
	                                    	<?php
	                                    		$wpcontent = get_the_content();
												$wpcontent = wp_strip_all_tags( $wpcontent );
	                                    	?>
										<th class="">主な事業内容</th>
										<td><?php echo $wpcontent; ?></td>
											<?php endwhile; ?>
		                                <?php else: ?>
		                                <?php endif; ?>
		                                <?php wp_reset_query(); ?>
									</tr>

									<!-- <tr>
										<th class="">主要取引先</th>
										<td>
											<ul class="list-unstyled">
												<li>株式会社アクタス</li>
												<li>株式会社ウィゴー</li>
												<li>NECネクサソリューションズ株式会社</li>
												<li>株式会社NTTデータ</li>
												<li>カルチュア・コンビニエンス・クラブ株式会社</li>
												<li>関西電力株式会社</li>
												<li>株式会社ジェーシービー</li>
												<li>住友商事株式会社</li>
												<li>株式会社セディナ</li>
												<li>株式会社中国新聞社</li>
												<li>ディーゼルジャパン株式会社</li>
												<li>株式会社Tポイント・ジャパン</li>
												<li>東芝テック株式会社</li>
												<li>日本電気株式会社</li>
												<li>野村不動産株式会社</li>
												<li>株式会社はとバス</li>
												<li>株式会社ぱど</li>
												<li>株式会社阪急交通社</li>
												<li>株式会社肥銀コンピュータサービス</li>
												<li>福岡地所株式会社</li>
												<li>株式会社フタバ図書</li>
												<li>三井住友カード株式会社</li>
												<li>三菱UFJニコス株式会社</li>
												<li>株式会社レスポートサックジャパン</li>
												<li class="text-muted">(五十音順 敬称略)</li>
											</ul>
										</td>
									</tr> -->

									<tr>
										<th class="">許認可等</th>
										<td>
											<?php $args = array('pagename' => 'authorization',);$st_query = new WP_Query( $args ); ?>
		                                    <?php if ( $st_query->have_posts() ): ?>
		                                    	<?php while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
		                                    	<?php
		           									// $wpcontent = get_the_content();
													// $wpcontent = wp_strip_all_tags( $wpcontent );
		                                    	?>
											<!-- <ul class="list-unstyled">
												<li>一般第二種電気通信事業　A-22-11456</li>
												<li>特許第5166463号 ポイント管理システム</li>
											</ul> -->
											<?php echo get_the_content(); ?>
												<?php endwhile; ?>
			                                <?php else: ?>
			                                <?php endif; ?>
			                                <?php wp_reset_query(); ?>
										</td>
									</tr>

									<tr>
										<?php $args = array('pagename' => 'employee',);$st_query = new WP_Query( $args ); ?>
		                                    <?php if ( $st_query->have_posts() ): ?>
		                                    	<?php while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
		                                    	<?php
		           									$wpcontent = get_the_content();
													$wpcontent = wp_strip_all_tags( $wpcontent );
		                                    	?>
										<th class="">従業員数</th>
										<td><?php echo $wpcontent; ?></td>
											<?php endwhile; ?>
		                                <?php else: ?>
		                                <?php endif; ?>
		                                <?php wp_reset_query(); ?>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include('/var/www/html/3inc-stage1/inc/footer.php'); ?>
	</main>

	<?php include('/var/www/html/3inc-stage1/inc/js.php'); ?>
</body>
</html>