<?php require_once('/var/www/html/3inc-stage1/inc/config.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<?php include('/var/www/html/3inc-stage1/inc/head.php'); ?>
</head>
<body>
	<?php include('/var/www/html/3inc-stage1/inc/navbar.php'); ?>

	<main>

		<section class="">
			<div class="jumbotron jumbotron-reginavi">
				<div class="container whiter sd">
					<h3 class="wow fadeInUp">レジナビ</h3>
					<p class="wow fadeInUp">レジをインターネットに接続し、どこでも<br>売上確認やレジ設定ができます。</p>
				</div>
			</div>
		</section>

		<div class="container margin-top-100 margin-bottom-50">

			<div class="row">
				<div class="col-md-12 margin-bottom-50">
					<img src="<?php echo SRV_ROOT; ?>/img/reginavi/rn1.jpg" class="img-responsive center-block">
				</div>
				<div class="col-md-12">
					<p class="lead c-3inc"><strong>レジをインターネットに接続することで、離れた場所からも売上の確認やレジの設定ができるサービスです。</strong></p>
					<p class="lead">東芝テック株式会社が提供しているクラウドサービス「レジナビ」は、同社の豊富なコンテンツを配信する飲食・流通業界向けのＷｅｂサイト「流通ナビ」とレジスターを接続したサービスです。その通信端末として当社製品を活用しています。</p>
				</div>
				<div class="col-md-12">
					<img src="<?php echo SRV_ROOT; ?>/img/reginavi/rn2.jpg" class="img-responsive center-block">
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center margin-bottom-100">
					<h3 class="c-3inc">機能一例</h3>
				</div>
			</div>

			<div class="row margin-bottom-50">
				<div class="col-md-6">
					<h4 class="c-3inc">売上速報</h4>
					<p class="lead">集計されたデータは、スマートフォンや携帯電話をはじめ、インターネットに接続されたタブレットやパソコンからでも閲覧できます。（最大12回／1日）</p>
				</div>
				<div class="col-md-6">
					<img src="<?php echo SRV_ROOT; ?>/img/reginavi/rn3.jpg" alt="" class="img-responsive center-block">
				</div>
			</div>

			<div class="row margin-bottom-50">
				<div class="col-md-6 col-md-push-6">
					<h4 class="c-3inc">売上カレンダー</h4>
					<p class="lead">日別売上や客数、達成率の集計結果などを、パソコンで閲覧できます。天気データの蓄積により、天候と売上の関係も読み取れます。</p>
				</div>
				<div class="col-md-6 col-md-pull-6">
					<img src="<?php echo SRV_ROOT; ?>/img/reginavi/rn4.jpg" alt="" class="img-responsive center-block">
				</div>
			</div>

			<div class="row margin-bottom-50">
				<div class="col-md-6">
					<h4 class="c-3inc">メニュー（PLU）別の集計</h4>
					<p class="lead">パソコン上で集計データをメニュー別の金額・点数で並び替えし、売れ筋商品なども簡単に把握できます。さらにパソコンでCSV出力が可能です。</p>
				</div>
				<div class="col-md-6">
					<img src="<?php echo SRV_ROOT; ?>/img/reginavi/rn5.jpg" alt="" class="img-responsive center-block">
				</div>
			</div>

			<div class="row margin-bottom-50">
				<div class="col-md-6 col-md-push-6">
					<h4 class="c-3inc">損益シミュレーション</h4>
					<p class="lead">当月の売上データを基に、お店の体力を測る損益シミュレーションが行えます。損益分岐点図表とともに簡易診断コメントが表示されます。</p>
				</div>
				<div class="col-md-6 col-md-pull-6">
					<img src="<?php echo SRV_ROOT; ?>/img/reginavi/rn6.jpg" alt="" class="img-responsive center-block">
				</div>
			</div>

			<div class="row margin-bottom-50">
				<div class="col-md-6">
					<h4 class="c-3inc">ネットでレジ設定</h4>
					<p class="lead">本部や自宅のパソコンで、設定データを作成し、店舗のレジスターに配信可能。また、季節ごとのメニュー変更もあらかじめ設定し、保存しておくことが可能。必要時に配信できます。</p>
				</div>
				<div class="col-md-6">
					<img src="<?php echo SRV_ROOT; ?>/img/reginavi/rn7.jpg" alt="" class="img-responsive center-block">
				</div>
			</div>

		</div>

		<?php include('/var/www/html/3inc-stage1/inc/footer.php'); ?>
	</main>

	<?php include('/var/www/html/3inc-stage1/inc/js.php'); ?>
</body>
</html>