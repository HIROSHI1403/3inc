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
						<img src="<?php echo SRV_ROOT; ?>/img/solution/vps.jpg" class="img-responsive hoverimg top-title">
					</div>
					<div class="col-md-8">
						<h1 class="top-title c-3inc">Value Platform Service(VPS)</h1>
						<p class="c-3inc-sub lead">大型商業施設向け会員管理サービス</p>
						<p class="">ショッピングモールをはじめとする大型商業施設や、ディベロッパーに最適な、ポイント販促を活用した会員管理サービスです。大規模な会員管理・会員販促をはじめ、複数の施設やテナントを一元管理できるほか、様々な種類の端末を接続できるので用途に応じた効果的な販促活動が可能になります。</p>
					</div>
					<div class="col-md-4 hidden-lg hidden-md">
						<img src="<?php echo SRV_ROOT; ?>/img/solution/vps.jpg" class="img-responsive hoverimg">
					</div>
				</div>
			</div>

			<div class="container">
				<h1 class="c-3inc margin-top-200 text-center">DETAIL&nbsp;<small>詳細</small></h1>

				<h3 class="c-3inc margin-top-200">サービス特徴</h3>
			 	<div class="row">
					<div class="col-md-4">
						<h4 class="c-3inc-sub">いろいろな端末が自由につながる</h4>
						<p>
							通常のポイント端末やクレジット端末のほかに、テナント内のPOS端末や、映画館や劇場などに設置されている発券機など施設内にあるいろいろな端末につなぐことができます。
						</p>
					</div>
					<div class="col-md-4">
						<h4 class="c-3inc-sub">会員の動向分析や売上集計データ</h4>
						<p>
							施設別、日別、地区や性別・年齢などの会員属性別などさまざまなパターンの情報を抽出することがでるため、キャンペーンやイベントなどの施策に役立てられます。また、日次・月次売上データの自動生成により報告書作成の手間が省けます。
						</p>
					</div>
					<div class="col-md-4">
						<h4 class="c-3inc-sub">特定の会員に向けた効果的な販促</h4>
						<p>
							購買履歴や会員属性など条件を設定してデータを抽出し、ターゲットに合わせたダイレクトメールやクーポン配信など最適な販促活動をサポートします。また、「ゴールド会員」などの優良会員を差別化したサービス提供も実現できます。
						</p>
					</div>
			 	</div>



				<h3 class="c-3inc margin-top-200">システム概要</h3>
				<img src="<?php echo SRV_ROOT; ?>/img/solution/chart_vps.png" alt="VPS" class="img-responsive center-block">



				<h3 class="c-3inc margin-top-200">サービス詳細</h3>
				<div class="row">
					<div class="col-md-6">
						<h4 class="c-3inc-sub margin-top-50">サービスの種類</h4>
						<p>
							ASP
						</p>

						<h4 class="c-3inc-sub margin-top-50">端末</h4>
						<p>
							INFOX端末（ポイント機能付き）、JET-S端末、ポイント端末、KIOSK端末、POS端末など
						</p>

						<h4 class="c-3inc-sub margin-top-50">端末メーカー</h4>
						<p>
							パナソニック株式会社、東芝テック株式会社、日本NCR株式会社、NECインフロンティア株式会社
						</p>
					</div>
					<div class="col-md-6">
						<h4 class="c-3inc-sub margin-top-50">端末接続方式</h4>
						<p>
							電話回線［アナログ/ISDN-B/ISDN-D］、LAN
						</p>

						<h4 class="c-3inc-sub margin-top-50">カードの種類</h4>
						<p>
							磁気カード［クレジット提携カード/現金ポイントカード］
						</p>
					</div>
				</div>


				<h3 class="c-3inc margin-top-200">業務系機能一覧</h3>
				<div class="row">
					<div class="col-md-12">
						<h4 class="c-3inc-sub margin-top-50">会員管理機能</h4>
						<p>
							会員マスタメンテナンス、ポイント処理、カード管理を行います。
						</p>
						<p>
							会員検索・会員登録/変更・カード紐付け・ポイント移行・取引履歴・ポイント付与/取消 ・ポイント操作履歴・カードマスタ読込み・カード発番
						</p>

						<h4 class="c-3inc-sub margin-top-50">組織/端末管理機能</h4>
						<p>
							店舗マスタ、端末マスタのメンテナンスを行います。
						</p>

						<p>
							店舗検索/登録・端末検索/登録・KIOSK端末検索/メッセージ変更
						</p>

						<h4 class="c-3inc-sub margin-top-50">ポイント倍率変更機能</h4>
						<p>
							ポイント付与条件マスタのメンテナンスを行います。
						</p>

						<p>
							ポイント倍率検索/登録
						</p>
					</div>
				</div>



				<h3 class="c-3inc margin-top-200">その他の機能一覧</h3>
				<div class="row">
					<div class="col-md-12">
						<h4 class="c-3inc-sub margin-top-50">利用者管理機能</h4>
						<p>
							管理Webの利用者の登録、変更を行います。また、ログ関係の表示を行います。
						</p>
						<p>
							利用者登録/検索・パスワード変更・権限/セキュリティ設定・操作ログ・KIOSK操作ログ
						</p>

						<h4 class="c-3inc-sub margin-top-50">外部連携機能</h4>
						<p>
							他システムからのマスタ、履歴/実積情報を連携します。
						</p>
						<p>
							会員マスタ連携、ポイント履歴連携、会員Web連携、BIツール連携
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