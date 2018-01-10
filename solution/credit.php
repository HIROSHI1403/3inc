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
						<img src="<?php echo SRV_ROOT; ?>/img/solution/credit.jpg" class="img-responsive hoverimg top-title">
					</div>
					<div class="col-md-8">
						<h1 class="top-title c-3inc">クレジット決済データ集計サービス</h1>
						<p class="c-3inc-sub lead">カード決済データを集計し、売上・入金管理を簡単に</p>
						<p class="">カード決済端末「INFOX」で決済された取引データを店舗ごとに集計し、カード会社からの入金予定金額を管理できるサービスです。異なる締め支払日、手数料や支払い方法などもカード会社ごとに集計でき、日々のチェック業務が簡単になります。</p>
						<p><small>データ集計には、（株）NTTデータが運営するCAFIS・INFOX-NETを利用しています。</small></p>
					</div>
					<div class="col-md-4 hidden-lg hidden-md">
						<img src="<?php echo SRV_ROOT; ?>/img/solution/credit.jpg" class="img-responsive hoverimg">
					</div>
				</div>
			</div>

			<div class="container">
				<h1 class="c-3inc margin-top-200 text-center">DETAIL&nbsp;<small>詳細</small></h1>

				<h3 class="c-3inc margin-top-200">サービス一覧</h3>
				<p class="text-center">パッケージとASP型の2種類でサービスを展開しております。</p>
			 	<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hvr-float">
						<div class="panel panel-default phover text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
							<div class="panel-body">
								<h4 class="gradation1">INFOX集計PC（パッケージ型）</h4>
								<p>
									Microsoft Access(※)をベースにした、パッケージソフトです。クレジット集計データをパソコンに取り込み、各種帳票を出力します。
								</p>
								<p><small class="text-muted">※Microsoft Accessは、米国Microsoft Corporationの米国およびその他の国における登録商標または商標です。</small></p>
							</div>
							<div class="panel-footer">
								<small>詳細は<span class="label label-success">パッケージ型</span>のバッジを参照</small>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hvr-float">
                        <div class="panel panel-default phover text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                              <div class="panel-body">
                                    <h4 class="gradation2">INFOX集計VIEW（ASP型）</h4>
									<p>
										施設別、日別、地区や性別・年齢などの会員属性別などさまざまなパターンの情報を抽出することがでるため、キャンペーンやイベントなどの施策に役立てられます。また、日次・月次売上データの自動生成により報告書作成の手間が省けます。
									</p>
                              </div>
                              <div class="panel-footer">
								<small>詳細は<span class="label label-primary">ASP型</span>のバッジを参照</small>
							</div>
                        </div>
					</div>
			 	</div>



				<h3 class="c-3inc margin-top-200">サービスの特長</h3>
				<h4 class="c-3inc-sub margin-top-50">複数店舗の売上を効率的に管理<br><small><span class="label label-success">パッケージ型</span></small></h4>
				<p>
					INFOX端末の取引データを集計し、一括して加盟店本部へ提供しているため、端末からの集計漏れを防ぎます。
				</p>

				<h4 class="c-3inc-sub margin-top-50">集計データは翌日ファイル配信<br><small><span class="label label-success">パッケージ型</span></small></h4>
				<p>
					前日0：00～24：00のデータを翌日（AM7：30～AM12：00）ファイル配信します。
				</p>

				<h4 class="c-3inc-sub margin-top-50">集計結果は翌朝10時に閲覧可能<br><small><span class="label label-primary">ASP型</span></small></h4>
				<p>
					前日0：00～24：00のデータが翌日10時に閲覧可能になります。
				</p>

				<h4 class="c-3inc-sub margin-top-50">運用コスト削減<br><small><span class="label label-primary">ASP型</span></small></h4>
				<p>
					ASP型のサービスなので、設備投資の必要がなく、運用コストが大幅に削減されます。
				</p>

				<h4 class="c-3inc-sub margin-top-50">CSVファイルダウンロードが可能<br><small><span class="label label-primary">ASP型</span></small></h4>
				<p>
					取引データをCSVでダウンロードが可能ですので、編集・加工してお使いいただけます。
				</p>


				<h3 class="c-3inc margin-top-200">システム概要図</h3>
				<div class="row">
					<div class="col-md-6">
						<small><span class="label label-success">パッケージ型</span></small>
						<img src="<?php echo SRV_ROOT; ?>/img/solution/chart_infoxpc.png" alt="VPS" class="img-responsive center-block">
					</div>

					<div class="col-md-6">
						<small><span class="label label-primary">ASP型</span></small>
						<img src="<?php echo SRV_ROOT; ?>/img/solution/chart_infoxview.png" alt="VPS" class="img-responsive center-block">
					</div>
				</div>



				<h3 class="c-3inc margin-top-200">サービス詳細</h3>
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr class="text-center">
								<th></th>
								<th><span class="label label-success">パッケージ型</span></th>
								<th><span class="label label-primary">ASP型</span></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>サービスの種類</th>
								<td>パッケージソフトウェア</td>
								<td>ASP</td>
							</tr>
							<tr>
								<th>端末</th>
								<td>INFOX端末　（「iD（アイディ）」対応INFOX端末も可能）</td>
								<td>INFOX端末</td>
							</tr>
							<tr>
								<th>端末メーカー</th>
								<td>パナソニック株式会社、東芝テック株式会社、NECインフロンティア株式会社</td>
								<td>パナソニック株式会社、東芝テック株式会社、NECインフロンティア株式会社</td>
							</tr>
							<tr>
								<th>端末接続方式</th>
								<td>電話回線［アナログ/ISDN-B/ISDN-D］、LAN</td>
								<td>電話回線［アナログ/ISDN-B/ISDN-D］、LAN</td>
							</tr>
							<tr>
								<th>カードの種類</th>
								<td>
									<ul class="list-unstyled">
										<li>クレジットカード　〔磁気カード/ICカード〕</li>
										<li>ケータイクレジット「iD（アイディ）」対応携帯電話</li>
									</ul>
								</td>
								<td>クレジットカード　〔磁気カード/ICカード〕</td>
							</tr>
						</tbody>
					</table>
				</div>

				<h3 class="c-3inc margin-top-200">機能</h3>
				<div class="row">
					<div class="col-md-6">
						<span class="label label-success">パッケージ型</span>
						<p>INFOX端末で決済されたデータを、INFOX-NETよりダウンロードし、下記管理を可能にします。</p>
						<ul class="list-unstyled">
							<li>クレジット、iDデータの取込機能</li>
							<li>クレジット、iD取込エラー確認</li>
							<li>クレジットデータ入力、検索機能</li>
							<li>クレジット２重取引チェック表</li>
							<li>クレジット取引台帳（店舗別/会社別）</li>
							<li>クレジット取引集計表（店舗別/会社別）</li>
							<li>クレジット入金予定明細票（店舗別/会社別）</li>
							<li>店舗設定機能</li>
							<li>クレジット会社マスタ設定機能</li>
							<li>クレジット入金条件マスタ設定機能</li>
							<li>その他</li>
						</ul>
					</div>
					<div class="col-md-6">
						<span class="label label-primary">ASP型</span>
						<p>当社データセンターにてクレジット決済データをASPセンターで管理し、下記機能を可能にします。</p>
						<ul class="list-unstyled">
							<li>クレジット２重取引チェック表</li>
							<li>クレジット売上集計表（店舗別、クレジット会社別）</li>
							<li>クレジット売上明細表（店舗別、クレジット会社別C</li>
							<li>クレジットデータ入力、検索機能</li>
							<li>クレジット入金予定表（店舗別、クレジット会社別）</li>
							<li>クレジット入金予定明細表</li>
							<li>店舗マスタ、端末マスタ設定機能</li>
							<li>クレジット会社マスタ設定機能</li>
							<li>クレジット入金条件マスタ設定機能</li>
							<li>クレジットデータ取込エラー確認、再取込機能</li>
							<li>パスワード変更</li>
						</ul>
					</div>
				</div>


				<h3 class="c-3inc margin-top-200">必要環境<br><small><span class="label label-success">パッケージ型</span></small></h3>
				<div class="row">
					<div class="col-md-3">
						<h4 class="margin-top-50 c-3inc">周辺環境（ソフトウエア）</h4>
						<h4 class="c-3inc-sub margin-top-50">データベースソフト</h4>
						<p>
							Microsoft Access 2003
						</p>
						<p><small class="text-muted">※Microsoft Windowsは、Microsoft Corporationの米国およびその他の国における登録商標または商標です。</small></p>

						<h4 class="c-3inc-sub margin-top-50">INFOX-NET通信ソフト</h4>
						<p>
							全銀協TCP/IP手順通信ソフト
						</p>

						<h4 class="c-3inc-sub margin-top-50">リモートメンテナンスソフト</h4>
						<p>
							PC-Anywhere <（株）シマンテック社製 >
						</p>
					</div>

					<div class="col-md-3">
						<h4 class="margin-top-50 c-3inc">周辺環境（専用PC）</h4>
						<h4 class="c-3inc-sub margin-top-50">OS</h4>
						<p>
							Windows 2000 Professional SP4 / Windows XP Professional SP2
						</p>

						<h4 class="c-3inc-sub margin-top-50">メインメモリ</h4>
						<p>
							256MB以上（512MB以上を推奨）
						</p>

						<h4 class="c-3inc-sub margin-top-50">ハードディスク</h4>
						<p>
							20GB以上の空き容量が必要
						</p>
					</div>

					<div class="col-md-3">
						<h4 class="margin-top-50 c-3inc">周辺環境（周辺装置）</h4>
						<h4 class="c-3inc-sub margin-top-50">ディスプレイ</h4>
						<p>
							解像度 1,024×768（16ビット）以上の表示が可能なディスプレイ
						</p>

						<h4 class="c-3inc-sub margin-top-50">プリンタ</h4>
						<p>
							Windows環境で動作するプリンタ
						</p>

						<h4 class="c-3inc-sub margin-top-50">ルーター</h4>
						<p>
							指定機器あり（リモートメンテナンスと全銀協TCP/IP手順通信のソフトが使用します）
						</p>
					</div>

					<div class="col-md-3">
						<h4 class="margin-top-50 c-3inc">周辺環境（通信回線）</h4>
						<h4 class="c-3inc-sub margin-top-50">ISDN回線</h4>
						<p>
							INFOX端末、INFOX-NET、リモートメンテナンス用が必要になります
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