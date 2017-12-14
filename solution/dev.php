<?php require_once('/var/www/html/3inc-stage1/inc/config.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<?php include('/var/www/html/3inc-stage1/inc/head.php'); ?>
</head>
<body>
	<?php include('/var/www/html/3inc-stage1/inc/navbar.php'); ?>

	<main>

		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-4 hidden-sm hidden-xs">
						<img src="<?php echo SRV_ROOT; ?>/img/solution/dev.jpg" class="img-responsive hoverimg top-title">
					</div>
					<div class="col-md-8">
						<h1 class="top-title c-3inc">サービスプラットフォーム</h1>
						<p class="c-3inc-sub lead">販促ツールを、インターネット経由で簡単にご利用いただけるクラウド型サービス</p>
						<p class=""><span class="c-3inc">設備や機能がパッケージ化されていることにより、資産を保有することなく、短納期・低コストで導入いただけます。</span>拡張機能として専用のサーバやインフラ、アプリケーションなどのお客様のご要望に応じたオーダーメイド型のサービスもご提供可能ですので、お気軽にご相談ください。企画から構築・運用まで</p>
					</div>
					<div class="col-md-4 hidden-lg hidden-md">
						<img src="<?php echo SRV_ROOT; ?>/img/solution/dev.jpg" class="img-responsive hoverimg">
					</div>
				</div>
			</div>

			<div class="container">
				<h1 class="c-3inc margin-top-200 text-center">DETAIL&nbsp;<small>詳細</small></h1>


				<h3 class="c-3inc margin-top-200">システム概要</h3>
				<img src="<?php echo SRV_ROOT; ?>/img/solution/chart_sp.png" alt="サービスプラットフォーム" class="img-responsive center-block">

			</div>
		</section>

		<?php include('/var/www/html/3inc-stage1/inc/footer.php'); ?>
	</main>

	<?php include('/var/www/html/3inc-stage1/inc/js.php'); ?>
</body>
</html>