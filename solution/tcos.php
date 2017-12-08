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
						<img src="<?php echo SRV_ROOT; ?>/img/solution/tcos.jpg" class="img-responsive hoverimg top-title">
					</div>
					<div class="col-md-8">
						<h1 class="top-title c-3inc">TCOS-INFOX</h1>
						<p class="c-3inc-sub lead">カード決済端末を使ったポイントサービス</p>
						<p class="">カード決済端末「INFOX」をポイント端末としてもご利用いただけるサービスです。すでにINFOX端末をご利用いただいている場合、新たにポイント端末導入の必要がなく、すぐにポイントサービスが始められます。</p>
					</div>
					<div class="col-md-4 hidden-lg hidden-md">
						<img src="<?php echo SRV_ROOT; ?>/img/solution/tcos.jpg" class="img-responsive hoverimg">
					</div>
				</div>
			</div>

			<div class="container">
				<h1 class="c-3inc margin-top-200 text-center">DETAIL&nbsp;<small>詳細</small></h1>

				<h3 class="c-3inc margin-top-200">サービス特徴</h3>
			 	<div class="row">
					<div class="col-md-12">
						<h4 class="c-3inc-sub">端末1台で「支払い」と「ポイント付与/還元」が可能</h4>
						<p>
							クレジットカードやデビットカードの決済端末である「INFOX」を、ポイントカード端末としてもご利用いただけるので、支払とポイント付与/還元が1台で処理できます。ポイント専用の端末や設備をわざわざ設置する必要がなく手軽に始められます。
						</p>
					</div>
					<div class="col-md-12">
						<h4 class="c-3inc-sub">管理者サイトで会員の動向把握</h4>
						<p>
							インターネット環境があれば、いつでも会員の来店状況、購入状況など推移がグラフで確認できます。本部・事務局、各店舗などそれぞれに与えられた権限により閲覧できる内容も制限できます。
						</p>
					</div>
					<div class="col-md-12">
						<h4 class="c-3inc-sub">その他オプションサービス（別途お見積り）</h4>
						<p>
							すでに運用されているECサイトや、ポイント管理サイトなどとのAPI連携も可能ですので、データ移行が簡単に行えます。
						</p>
					</div>
			 	</div>



				<h3 class="c-3inc margin-top-200">システム概要</h3>
				<img src="<?php echo SRV_ROOT; ?>/img/solution/chart_tcos.png" alt="TCOS-INFOX" class="img-responsive center-block">



				<h3 class="c-3inc margin-top-200">サービス詳細</h3>
				<div class="row">
					<div class="col-md-6">
						<h4 class="c-3inc-sub margin-top-50">サービスの種類</h4>
						<p>
							ASP
						</p>

						<h4 class="c-3inc-sub margin-top-50">端末</h4>
						<p>
							INFOX端末（ポイント機能付き)
						</p>

						<h4 class="c-3inc-sub margin-top-50">端末メーカー</h4>
						<p>
							パナソニック株式会社、東芝テック株式会社、日本NCR株式会社
						</p>
					</div>
					<div class="col-md-6">
						<h4 class="c-3inc-sub margin-top-50">端末接続方式</h4>
						<p>
							電話回線［アナログ/ISDN-B/ISDN-D］、LAN
						</p>

						<h4 class="c-3inc-sub margin-top-50">カードの種類</h4>
						<p>
							プラスチック製磁気カード[クレジット提携カード/現金ポイントカード］
						</p>
					</div>
				</div>


				<h3 class="c-3inc margin-top-200">ポイント処理機能</h3>
				<div class="row">
					<div class="col-md-12">
						<h4 class="c-3inc-sub margin-top-50">ポイント処理機能</h4>
						<p>
							ポイント付与（リアル/バッチ処理、共に可能）／ポイント照会、交換、取消（リアル処理）／累計ポイントレシート印字（リアル処理設定時のみ可能）／クーポン券自動発券機能（リアル処理設定時のみ可能）
						</p>
					</div>
				</div>



				<h3 class="c-3inc margin-top-200">その他管理機能</h3>
				<div class="row">
					<div class="col-md-12">
						<p>ポイント処理結果は、当社データセンターで集中管理され、事務局や各店舗はインターネット経由で自店の情報を参照できます。</p>
					</div>
					<div class="col-md-12">
						<h4 class="c-3inc-sub margin-top-50">会員管理機能</h4>
						<p>
							会員マスターメンテナンス機能／会員検索機能／その他
						</p>

						<h4 class="c-3inc-sub margin-top-50">ポイント管理機能</h4>
						<p>
							発行ポイント履歴照会／発行ポイント集計／その他
						</p>

						<h4 class="c-3inc-sub margin-top-50">情報分析機能</h4>
						<p>
							会員動向／ベスト顧客／デシル分析／その他
						</p>
					</div>
				</div>
			</div>
		</section>

		<?php include('/var/www/html/3inc-stage1/inc/footer.php'); ?>
	</main>

	<?php include('/var/www/html/3inc-stage1/inc/js.php'); ?>
</body>
</html>