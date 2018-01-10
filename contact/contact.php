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
					<div class="col-md-12 text-center">
						<div class="page-header">
							<h2 class="c-3inc-sub">お問合せフォーム</h2>
						</div>
					</div>
				</div>

				<form class="form-horizontal" action="check.php" method="POST">
					<fieldset>

						<div class="form-group">
							<label for="company" class="col-lg-2 control-label">会社名&nbsp;<span class="label label-danger">必須</span></label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="company" name="company" placeholder="例）株式会社トリニティ" required>
							</div>
						</div>

						<div class="form-group">
							<label for="department" class="col-lg-2 control-label">部署名</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="department" name="department" placeholder="例）営業部営業課">
							</div>
						</div>

						<div class="form-group">
							<label for="name" class="col-lg-2 control-label">氏名&nbsp;<span class="label label-danger">必須</span></label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="name" name="name" placeholder="例）花子太郎" required>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="col-lg-2 control-label">メールアドレス&nbsp;<span class="label label-danger">必須</span></label>
							<div class="col-lg-10">
								<input type="email" class="form-control" id="email" name="email" placeholder="例）example@example.com" required>
							</div>
						</div>

						<div class="form-group">
							<label for="tel" class="col-lg-2 control-label">電話番号&nbsp;<span class="label label-danger">必須</span></label>
							<div class="col-lg-10">
								<input type="tel" class="form-control" id="tel" name="tel" placeholder="例）000-0000-0000" required>
							</div>
						</div>

						<div class="form-group">
							<label for="other" class="col-lg-2 control-label">ご相談・ご質問</label>
							<div class="col-lg-10">
								<textarea class="form-control" rows="10" id="other" name="other"></textarea>
								<span class="help-block">ご相談・ご質問は任意です。ご自由に記載ください。</span>
							</div>
						</div>

						<!-- <div class="form-group">
							<label for="chk" class="col-lg-2 control-label">同意事項&nbsp;<span class="label label-danger">必須</span></label>
							<div class="col-lg-10">
								<input type="checkbox" value="同意" name="agree" required>&nbsp;はい
								<span class="help-block">当社プライバシーポリシー［<a href="<?php echo SRV_ROOT; ?>/privacy.php" target="_blank">個人情報保護方針</a>］にご同意ください。</span>
							</div>
						</div> -->

						<div class="form-group">
							<div class="col-lg-10 col-lg-offset-2">
								<a href="<?php echo SRV_ROOT; ?>/contact/notice.php" type="reset" class="btn btn-link">キャンセル（戻る）</a>
								<button type="submit" name="submit" value="contact" class="btn btn-iij">内容確認</button>
							</div>
						</div>
						<p>
							<hr>
							お問い合わせ<br><br>
							03－5205－6486　平日9：00～18：00<br>
							＊＊＊＊＠3inc.jp
							<hr>
						</p>
					</fieldset>
				</form>
			</div>
		</section>
		<?php include('/var/www/html/3inc-stage1/inc/footer.php'); ?>
	</main>

	<?php include('/var/www/html/3inc-stage1/inc/js.php'); ?>

	<script>
		$(document).ready(function() {
		/**
		* バリデーションボタン押下時処理
		* バリデーションを行う
		*/
		$('#btn-validate').on('click', function(e) {
			if ($('#sample-form').smkValidate()) {
				// バリデーションOKの処理
			} else {
				// バリデーションNGの処理
			}
		})
		/**
		* クリアボタン押下時処理
		* フォームのクリア
		*/
		$('#btn-clear').on('click', function (e) {
			$('#sample-form').smkClear();
			});
		});
	</script>
</body>
</html>