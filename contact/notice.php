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
				<h1 class="c-3inc margin-top-200 text-center">CONTACT ENTRY&nbsp;<br><small>お問い合わせ／応募</small></h1>

				<h3 class="c-3inc margin-top-200">電話でのお問い合わせ・エントリーはこちら</h3>
				<p class="text-center"></p>
			 	<div class="row">
					<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 hvr-float">
						<div class="panel panel-default phover wow fadeInUp">
							<div class="panel-body">
								<h4 class="c-iij text-center">０３-５２０５-６４８６</h4>
								<dl class="dl-horizontal">
									<dt>お問合せ先</dt>
									<dd>株式会社トリニティ</dd>

									<dt>営業時間</dt>
									<dd>9：00～18：00</dd>

									<dt>休業日</dt>
									<dd>土・日・祝日</dd>
								</dl>
							</div>
						</div>
					</div>
				</div>

				<h3 class="c-3inc margin-top-200">WEBフォームからのお問い合わせ・エントリーはこちら</h3>
				<p class="text-center">WEBフォームは通常のお問い合わせと採用に関する応募（エントリー）を分けております。該当フォームよりお問い合わせ・応募ください。</p>
				<div class="well well-sm">
					<p class="h5">お問い合わせ・エントリーに関する注意事項</p>
					<p><small>お客様からご提供いただいた個人情報を尊重し、個人情報の保護に努めております。詳細につきましては、「<a href="<?php echo SRV_ROOT; ?>/privacy.php">個人情報保護方針</a>」のページをご覧ください。お客様からご提供いただきました情報は、お客様への回答のために使用させていただきます。</small></p>
					<p><small>このページは個人情報保護のため、SSL(Secure Socket Layer)暗号化通信に対応しています。</small></p>
					<p><small>土曜日・日曜日・祝日・年始年末ほか、当社休業日にいただいたお問い合わせについては、翌営業日以降の回答となりますのでご了承ください。お問合わせいただいた内容は、担当部署にて迅速に回答するように努めますが、内容によってはお答えできない場合や、お時間が掛かる場合がございます。 また、電子メール以外の手段で回答させていただく場合がありますので、ご了承をお願いいたします。当社からお客様へ送信する電子メールは、お客様個人宛てにお送りするものです。回答の内容の一部または全部を転載、二次利用することはご遠慮ください。お客様からいただいた電子メールアドレスに誤りがあった場合やウィルスが検出された場合、システム障害などの場合にはご返答できない場合があります。</small></p>
				</div>
			 	<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hvr-float">
						<div class="panel panel-default phover text-center wow fadeInUp">
							<div class="panel-body">
								<h4 class="c-iij">お問い合わせ</h4>
							</div>
							<div class="panel-footer">
								<p><a href="<?php echo SRV_ROOT; ?>/contact/contact.php" class="btn btn-iij">お問合せ</a><a href="<?php echo SRV_ROOT; ?>" class="btn btn-link">同意しない</a></p>
								<p><small>※お問い合わせに関する注意事項にご同意いただけた方のみお問合せください。</small></p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hvr-float">
                        <div class="panel panel-default phover text-center wow fadeInUp">
							<div class="panel-body">
							    <h4 class="c-iij">エントリー</h4>
							</div>
							<div class="panel-footer">
								<p><a href="<?php echo SRV_ROOT; ?>/contact/entry.php" class="btn btn-iij">エントリー</a><a href="<?php echo SRV_ROOT; ?>" class="btn btn-link">同意しない</a></p>
								<p><small>※エントリーに関する注意事項にご同意いただけた方のみエントリーください。</small></p>
							</div>
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