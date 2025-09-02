<?php
// #################################################################
// ### 確認ビュー
// #################################################################

// ### コンストラクタ ##############################################
include_once(dirname(__FILE__) . '/include/config.php');
include_once(dirname(__FILE__) . '/include/option.php');

// #################################################################

// 前画面処理
if (!empty($_POST['mode']) && $_POST['mode'] == "back") {

	header("Location: ./");
	exit;
}

// 次画面処理
if (!empty($_POST['mode']) && $_POST['mode'] == "send") {

	// データ整形
	$data = $_SESSION['CONTACT'];

	if (!(hash_equals($data['ch_token'], $_SESSION['token']) && !empty($data['ch_token']))) {

		$caution = 1;
	} else {

		unset($data['emailcheck']);

		// 実送信
		if (MailSend($data)) {

			header("Location: thanks.php");
			exit;
		}
	}
}

if (!empty($_SESSION['CONTACT'])) {

	$_POST = $_SESSION['CONTACT'];
	$caution = '';
} else {

	header("Location: ./");
	exit;
}
// #################################################################
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta name="format-detection" content="telephone=no" />
	<!-- meta情報 -->
	<title>長光寺ホームページ</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!-- ogp -->
	<meta property="og:title" content="" />
	<meta property="og:type" content="" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<!-- ファビコン -->
	<link rel="icon" href="/images/common/favicon.ico" />
	<link
		rel="apple-touch-icon"
		sizes="180x180"
		href="/images/common/apple-touch-icon.png" />
	<!-- css -->
	<link rel="stylesheet" href="/css/swiper-bundle.min.css" />
	<link rel="stylesheet" href="/css/styles.css" />
	<!-- JavaScript -->
	<script>
		(function(d) {
			var config = {
					kitId: 'lre1rcx',
					scriptTimeout: 3000,
					async: true
				},
				h = d.documentElement,
				t = setTimeout(function() {
					h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
				}, config.scriptTimeout),
				tk = d.createElement("script"),
				f = false,
				s = d.getElementsByTagName("script")[0],
				a;
			h.className += " wf-loading";
			tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
			tk.async = true;
			tk.onload = tk.onreadystatechange = function() {
				a = this.readyState;
				if (f || a && a != "complete" && a != "loaded") return;
				f = true;
				clearTimeout(t);
				try {
					Typekit.load(config)
				} catch (e) {}
			};
			s.parentNode.insertBefore(tk, s)
		})(document);
	</script>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script defer src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
	<script defer src="/js/swiper.js"></script>
	<script defer src="/js/script.js"></script>
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TDHPMDB"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<section class="nosp" id="wrapper">
		<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>


		<section class="p-contact">
			<div class="l-inner">
				<div class="p-contact__confirm-content">

					<div class="block1" id="form">
						<!-- <h2 class="mtitlebox">お問い合わせ</h2> -->
	
						<p class="mex p-contact__submit-message">下記内容でよろしければ送信ボタンを押して送信してください。</p>
						<?php
						if ($caution == 1) {
							echo '不正なアクセス';
						} else {
	
							$kindline = '';
							if (!empty($_POST["kind1"]) && $_POST["kind1"] == "1") {
								$kindline = $kindlist[1];
							}
							if (!empty($_POST["kind2"]) && $_POST["kind2"] == "1") {
								if ($kindline) {
									$kindline .= ', ';
								}
								$kindline .= $kindlist[2];
							}
							if (!empty($_POST["kind3"]) && $_POST["kind3"] == "1") {
								if ($kindline) {
									$kindline .= ', ';
								}
								$kindline .= $kindlist[3];
							}
						?>
	
							<div class="form_block confirm p-contact__confirm">
								<table>
									<tr>
										<th class="p-contact__confirm-th"><b>お問い合わせ種別</b></th>
										<td class="p-contact__confirm-td"><?= $kindline; ?></td>
									</tr>
									<tr>
										<th class="p-contact__confirm-th"><b>お名前</b></th>
										<td class="p-contact__confirm-td"><?= escape($_POST['name']); ?></td>
									</tr>
									<tr>
										<th class="p-contact__confirm-th"><b>電話番号</b></th>
										<td class="p-contact__confirm-td"><?= escape($_POST['tel']); ?></td>
									</tr>
									<tr>
										<th class="p-contact__confirm-th"><b>メールアドレス</b></th>
										<td class="p-contact__confirm-td"><?= escape($_POST['email']); ?></td>
									</tr>
									<tr>
										<th class="p-contact__confirm-th"><b>お問い合わせ内容</b></th>
										<td class="p-contact__confirm-td"><?php echo nl2br(escape($_POST['message'])); ?></td>
									</tr>
								</table>
							</div>
	
							<form method="post" name="nextForm">
								<input type="hidden" name="mode" value="send" />
							</form>
							<form method="post" name="backForm">
								<input type="hidden" name="mode" value="back" />
							</form>
	
							<div class="p-contact__btn-block">
								<p class="back p-contact__btn-back"><a href="javascript:document.backForm.submit();">戻る</a></p>
								<p class="submit p-contact__btn-submit"><a href="javascript:document.nextForm.submit();">送信する</a></p>
							</div>
						<?php
						}
						?>
	
					</div>
				</div>
			</div>
		</section>

		<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>

	</section><!-- END wrapper -->

</body>

</html>