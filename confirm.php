<?php
// #################################################################
// ### 確認ビュー
// #################################################################

// ### コンストラクタ ##############################################
	include_once(dirname (__FILE__).'/include/config.php');
	include_once(dirname (__FILE__).'/include/option.php');

// #################################################################

	// 前画面処理
	if(!empty($_POST['mode']) && $_POST['mode']=="back"){

		header("Location: ./");
		exit;
	}

	// 次画面処理
	if(!empty($_POST['mode']) && $_POST['mode']=="send"){

		// データ整形
		$data = $_SESSION['CONTACT'];

		if(!(hash_equals($data['ch_token'], $_SESSION['token']) && !empty($data['ch_token']))) {

			$caution = 1;

		} else {

			unset($data['emailcheck']);

			// 実送信
			if(MailSend($data)){

				header("Location: thanks.php");
				exit;
			}
		}
	}

	if(!empty($_SESSION['CONTACT'])){

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

	<section class="top_area9 confirm">
		<div class="block1" id="form">
			<h2 class="mtitlebox">お問い合わせ</h2>

			<p class="mex">下記内容でよろしければ送信ボタンを押して送信してください。</p>
<?php
	if($caution == 1){
		echo '不正なアクセス';
	} else {

		$kindline = '';
		if(!empty($_POST["kind1"]) && $_POST["kind1"] == "1"){
			$kindline = $kindlist[1];
		}
		if(!empty($_POST["kind2"]) && $_POST["kind2"] == "1"){
			if($kindline){ $kindline .= ', '; }
			$kindline .= $kindlist[2];
		}
		if(!empty($_POST["kind3"]) && $_POST["kind3"] == "1"){
			if($kindline){ $kindline .= ', '; }
			$kindline .= $kindlist[3];
		}
?>

			<div class="form_block confirm">
				<table>
				<tr>
					<th><b>お問い合わせ種別</b></th>
					<td><?=$kindline;?></td>
				</tr>
				<tr>
					<th><b>お名前</b></th>
					<td><?=escape($_POST['name']);?></td>
				</tr>
				<tr>
					<th><b>電話番号</b></th>
					<td><?=escape($_POST['tel']);?></td>
				</tr>
				<tr>
					<th><b>メールアドレス</b></th>
					<td><?=escape($_POST['email']);?></td>
				</tr>
				<tr>
					<th><b>ご住所</b></th>
					<td><?=escape($_POST['address']);?></td>
				</tr>
				<tr>
					<th><b>お問い合わせ内容</b></th>
					<td><?php echo nl2br(escape($_POST['message']));?></td>
				</tr>
				</table>
			</div>

			<form method="post" name="nextForm">
			      <input type="hidden" name="mode" value="send" />
			</form>
			<form method="post" name="backForm">
			      <input type="hidden" name="mode" value="back"/>
			</form>

			<div class="btn_block fade op">
				<p class="back"><a href="javascript:document.backForm.submit();">戻る</a></p>
				<p class="submit"><a href="javascript:document.nextForm.submit();">送信する</a></p>
			</div>
<?php
	}
?>

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

<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<![endif]-->

</body>
</html>