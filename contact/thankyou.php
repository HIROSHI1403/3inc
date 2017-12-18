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
							<h2 class="">ありがとうございました。</h2>
						</div>
						<p>後日、当社担当者よりご連絡差し上げます。何卒よろしくお願い申し上げます。</p>
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