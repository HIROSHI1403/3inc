<?php
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$switch_cat = '';
		if ($_POST['submit']==='contact') {
			$chktitle = 'お問合せフォーム入力ご確認';
			$chkbody =<<<EOT
<dl class="dl-horizontal">
	<dt>会社名</dt>
	<dd class="text-left">{$_POST['company']}</dd>

	<dt>部署名</dt>
	<dd class="text-left">{$_POST['department']}</dd>

	<dt>氏名</dt>
	<dd class="text-left">{$_POST['name']}</dd>

	<dt>メールアドレス</dt>
	<dd class="text-left">{$_POST['email']}</dd>

	<dt>電話番号</dt>
	<dd class="text-left">{$_POST['tel']}</dd>

	<dt>新卒・中途</dt>
	<dd class="text-left">{$_POST['option']}</dd>

	<dt>ご相談・ご質問</dt>
	<dd class="text-left">{$_POST['other']}</dd>

	<dt>同意事項</dt>
	<dd class="text-left">{$_POST['agree']}</dd>
</dl>
<div class="text-center">
	<a href="#"  onClick="history.back(); return false;" type="reset" class="btn btn-link">修正（戻る）</a>
	<button type="submit" name="submit" value="entry" class="btn btn-iij"><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp;送信</button>
	<p><small>※送信をクリックしましたら、当社の「<a href="<?php echo SRV_ROOT; ?>/privacy.php">個人情報保護方針</a>」に同意したことになります。</small></p>
</div>
EOT;
		}elseif ($_POST['submit']==='entry') {
			$chktitle = 'エントリーフォームご入力内容ご確認';
			$chkbody =<<<EOT
<dl class="dl-horizontal">
	<dt>氏名</dt>
	<dd class="text-left">{$_POST['name']}</dd>

	<dt>学校名</dt>
	<dd class="text-left">{$_POST['campus']}</dd>

	<dt>学科名</dt>
	<dd class="text-left">{$_POST['department']}</dd>

	<dt>メールアドレス</dt>
	<dd class="text-left">{$_POST['email']}</dd>

	<dt>電話番号</dt>
	<dd class="text-left">{$_POST['tel']}</dd>

	<dt>新卒・中途</dt>
	<dd class="text-left">{$_POST['option']}</dd>

	<dt>ご相談・ご質問</dt>
	<dd class="text-left">{$_POST['other']}</dd>

	<dt>同意事項</dt>
	<dd class="text-left">{$_POST['agree']}</dd>
</dl>
<div class="text-center">
	<a href="#"  onClick="history.back(); return false;" type="reset" class="btn btn-link">修正（戻る）</a>
	<button type="submit" name="submit" value="entry" class="btn btn-iij"><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp;送信</button>
	<p><small>※送信をクリックしましたら、当社の「<a href="<?php echo SRV_ROOT; ?>/privacy.php">個人情報保護方針</a>」に同意したことになります。</small></p>
</div>
EOT;
		}else{
			$chktitle = 'このページは直接リンクを禁止しております。';
			$chkbody =<<<EOT
<div class="alert alert-dismissible alert-danger">
	<strong>株式会社トリニティのホームページを閲覧いただきありがとうございます。</strong>大変申し訳ございませんが、このページは直リンク禁止のページになります。大変申し訳ございませんが、ブラウザの戻るボタンもしくは、当社ホームページをご閲覧いただければ幸いです。
</div>
EOT;
		}
	}else{
		$chktitle = 'このページは直接リンクを禁止しております。';
		$chkbody =<<<EOT
<div class="alert alert-dismissible alert-danger">
	<strong>株式会社トリニティのホームページを閲覧いただきありがとうございます。</strong>大変申し訳ございませんが、このページは直リンク禁止のページになります。大変申し訳ございませんが、ブラウザの戻るボタンもしくは、当社ホームページをご閲覧いただければ幸いです。
</div>
EOT;
	}
?>


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
							<h2 class=""><?php echo $chktitle; ?></h2>
						</div>
						<?php echo $chkbody; ?>
					</div>
				</div>
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