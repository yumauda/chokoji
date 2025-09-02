<?php
// #################################################################
// ### 完了ビュー
// #################################################################

// ### コンストラクタ ##############################################
include_once(dirname(__FILE__) . '/include/config.php');

// #################################################################

if (!empty($_SESSION['CONTACT'])) {

	unset($_SESSION['CONTACT']);
} else {

	header("Location: ./");
	exit;
}
// #################################################################
?>
<!DOCTYPE html>
<html lang="ja">
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
	<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
	<div class="p-thanks">
		<div class="l-inner">
			<div class="p-thanks__content">
				<p class="p-thanks__text">この度はお問い合わせ、ありがとうございました。<br class="u-desktop">
					ご入力していただいた情報は無事送信されました。<br class="u-desktop">
					この後当院よりお返事させていただきますので、今しばらくお待ちください。</p>
				<div class="p-thanks__btn-wrapper">
					<a href="/" class="p-thanks__btn">トップページに戻る</a>
				</div>
			</div>
		</div>
	</div>
	<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>

</body>

</html>