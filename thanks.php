<?php
// #################################################################
// ### 完了ビュー
// #################################################################

// ### コンストラクタ ##############################################
	include_once(dirname (__FILE__).'/include/config.php');

// #################################################################

	if(!empty($_SESSION['CONTACT'])){

		unset($_SESSION['CONTACT']);

	} else {

		header("Location: ./");
		exit;

	}
// #################################################################
?>
<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="format-detection" content="telephone=no">

	<title>お寺の本堂で弔う崇高なお葬式「寺葬」</title>

	<meta name="description" content="本堂という格式の高い特別な空間の中、最後のお別れの儀式が執り行えます。常に荘厳であり過剰な設営等は必要ありませんので、余分な費用が抑えられます。MONYODOでは、寺葬を含む6つの葬儀基本プランをご用意しております。" />
	<meta name="keywords" content="寺葬,葬儀,お葬式" />

	<meta property="og:title" content="お寺の本堂で弔う崇高なお葬式「寺葬」" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://manyodo.ltd/teraso/" />
	<meta property="og:image" content="https://manyodo.ltd/teraso/images/ogp.jpg" />
	<meta property="og:site_name"  content="お寺の本堂で弔う崇高なお葬式「寺葬」" />
	<meta property="og:description" content="本堂という格式の高い特別な空間の中、最後のお別れの儀式が執り行えます。常に荘厳であり過剰な設営等は必要ありませんので、余分な費用が抑えられます。MONYODOでは、寺葬を含む6つの葬儀基本プランをご用意しております。" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:image" content="https://manyodo.ltd/teraso/images/ogp.jpg" />

	<link href="./favicon.ico" rel="shortcut icon" />
	<link href="./css/slick.css" rel="stylesheet" />
	<link href="./css/common.css?20220928" rel="stylesheet" />

<script>
  (function(d) {
    var config = {
      kitId: 'fhw7mzn',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TDHPMDB');</script>
<!-- End Google Tag Manager -->

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TDHPMDB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<section class="nosp" id="wrapper">
	<header>
		<h1 class="v2"><a href="./">お寺の本堂で弔う崇高なお葬式「寺葬」</a></h1>
		<p class="menu"><a href=""><b></b></a></p>

		<div class="gnavi_block">
			<div class="gnavi_body">
				<ul>
					<li><a href="#">寺葬とは</a></li>
					<li><a href="#">葬儀プラン</a></li>
					<li><a href="#">お葬式の流れ</a></li>
					<li>
						<p><a href="#"><b>葬儀プラン</b></a></p>
						<ul>
							<li><a href="#plan1">寺葬プラン</a></li>
							<li><a href="#plan2">直葬プラン</a></li>
							<li><a href="#plan3">火葬式プラン</a></li>
							<li><a href="#plan4">想葬式プラン</a></li>
							<li><a href="#plan5">一日葬プラン</a></li>
							<li><a href="#plan6">家族葬プラン</a></li>
						</ul>
					</li>
					<li><a href="#">寺葬を執り行える寺院</a></li>
					<li><a href="#">給付金制度について</a></li>
					<li><a href="#">よくある質問</a></li>
					<li><a href="#">運営会社</a></li>
					<li><a href="#form">お問い合わせ</a></li>
				</ul>
			</div>
		</div>
	</header>

	<section class="top_area9 thanks">
		<div class="block1" id="form">
			<div class="thanks_block">
				<p>
					この度はお問い合わせありがとうございました。<br />
					改めて弊社スタッフからご返答させていただきますので、今しばらくお待ちください。
				</p>

				<p>
					また、自動送信メールが指定メールアドレスに送信されておりますのでご確認ください。<br />
					もし受信されていない場合は、迷惑メールフォルダに振り分けされる可能性がございますので、<br class="pc" />お手数ですが迷惑メールフォルダの確認をお願い致します。
				</p>
			</div>

			<div class="btn_block fade op">
				<p class="confirm"><a href="./">ページに戻る</a></p>
			</div>
		</div>
	</section>

	<footer>
		<div class="block1">
			<p class="cname">運営会社：株式会社 MANYODO</p>
			<div class="sns_block fade op">
				<ul>
					<li class="fb"><a href="" target="_blank"></a></li>
					<li class="tw"><a href="" target="_blank"></a></li>
					<li class="yt"><a href="" target="_blank"></a></li>
				</ul>
			</div>
			<h2 class="flogo fade op"><a href="./"></a></h2>
			<p class="copyright">&copy; MANYODO.ltd All right reserved.</p>
		</div>
	</footer>
</section><!-- END wrapper -->

	<script src="./js/jquery.min.js"></script>
	<script src="./js/slick.min.js"></script>
	<script src="./js/func.js?20220928"></script>

<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<![endif]-->

</body>
</html>