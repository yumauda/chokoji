<?php
// #################################################################
// ### 入力ビュー
// #################################################################

// ### コンストラクタ ##############################################
include_once(dirname(__FILE__) . '/include/config.php');
include_once(dirname(__FILE__) . '/include/option.php');

// error array
$errors = array();

// #################################################################

// 次画面処理
if (!empty($_POST['mode']) && $_POST['mode'] == "next") {

  // お問い合わせ項目
  if (empty($_POST['kind1']) && empty($_POST['kind2']) && empty($_POST['kind3']) && empty($_POST['kind4'])) {
    $errors['kind'] = "お問い合わせ種別を選択してください";
  }

  // 氏名
  $_POST['name'] = spaceTrim($_POST['name']);
  if ($_POST['name'] == "") {
    $errors['name'] = "お名前を入力してください";
  }

  //電話番号
  $_POST['tel'] = spaceTrim($_POST['tel']);
  if ($_POST['tel'] == "") {
    $errors['tel'] = "電話番号を入力してください";
  }

  // メール
  $_POST['email'] = spaceTrim($_POST['email']);
  if ($_POST['email'] == "") $errors['email'] = "メールアドレスを入力してください";
  elseif (!preg_match($__regex, $_POST['email'])) $errors['email'] = "メールアドレスの形式が正しくありません";

  $_POST['emailcheck'] = spaceTrim($_POST['emailcheck']);
  if ($_POST['emailcheck'] == "") $errors['emailcheck'] = "確認用メールアドレスを入力してください";
  elseif ($_POST['email'] != $_POST['emailcheck']) $errors['emailcheck'] = "メールアドレスが上と異なります";

  // 次画面実処理
  if (empty($errors)) {
    unset($_POST['mode']);
    $_SESSION['CONTACT'] = $_POST;

    header("Location: confirm.php");
    exit;
  }
} else {

  if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = sha1(random_bytes(30));
  }
}

// 前画面リターン
if (!empty($_SESSION['CONTACT'])) {

  $_POST = $_SESSION['CONTACT'];

  unset($_POST['mode']);
  unset($_SESSION['CONTACT']);
}
// #################################################################
?>
<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>お寺の本堂で執り行う家族葬「お寺葬」 | 長野県上田市の御祈祷寺「長光寺」</title>
  <meta name="description" content="長光寺のお寺葬は、伝統と格式を重視したお寺の本堂にて執り行う家族葬です。住職自らがご家族と向き合い「本当に必要な事」だけをご提案。真心のこもったご葬儀で、故人様を心を込めてお送りいたします。宗旨宗派は不問、どなたでもご利用可能です。" />
  <meta name="keywords" content="お寺葬,家族葬,長光寺" />
  <!-- ogp -->
  <meta property="og:title" content="お寺の本堂で執り行う家族葬「お寺葬」 | 長野県上田市の御祈祷寺「長光寺」" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://m-chokoji.com/oterasou" />
  <meta property="og:image" content="https://m-chokoji.com/oterasou/images/common/ogp.jpg" />
  <meta property="og:site_name" content="お寺の本堂で執り行う家族葬「お寺葬」 | 長野県上田市の御祈祷寺「長光寺」" />
  <meta property="og:description" content="長光寺のお寺葬は、伝統と格式を重視したお寺の本堂にて執り行う家族葬です。住職自らがご家族と向き合い「本当に必要な事」だけをご提案。真心のこもったご葬儀で、故人様を心を込めてお送りいたします。宗旨宗派は不問、どなたでもご利用可能です。" />
  <!-- ファビコン -->
  <link rel="icon" href="https://m-chokoji.com/oterasou/images/common/favicon.ico" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="https://m-chokoji.com/oterasou/images/common/apple-touch-icon.png" />

  <!-- css -->
  <link rel="stylesheet" href="/css/swiper-bundle.min.css" />
  <link rel="stylesheet" href="/css/styles.css?20250906" />
  <!-- JavaScript -->
  <script>
    (function(d) {
      kitId: 'lre1rcx',
      var config = {
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

  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>

  <script defer src="/js/swiper.js?20250903"></script>
  <script defer src="/js/gsap.js"></script>
  <script defer src="/js/script.js"></script>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-7188YSY97L"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-7188YSY97L');
  </script>
</head>

<body>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>

  <main>
    <section class="p-mv">
      <div class="l-inner">
        <!-- Slider main container -->
        <div class="p-mv__content">
          <div class="p-mv__detail">
            <div class="p-mv__title js-top">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="94px" height="286px" viewBox="0 0 94 286">
                <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                  d="M88.405,126.496 L68.704,126.496 C68.204,126.496 67.704,126.496 67.704,126.996 C67.704,127.496 68.004,127.596 70.804,128.696 C71.704,129.096 72.905,129.496 72.905,130.696 C72.905,131.296 72.104,131.896 70.804,132.896 C70.004,133.496 70.004,133.896 70.004,137.397 C70.004,142.697 70.104,143.997 72.805,143.997 C75.605,143.997 76.405,143.497 77.105,142.897 C77.905,142.197 80.605,137.697 81.605,137.697 C82.205,137.697 91.006,143.797 91.006,145.197 C91.006,146.697 89.105,146.697 85.705,146.697 L73.305,146.697 C71.104,146.697 70.404,147.497 70.404,149.397 C70.404,152.397 70.604,165.898 70.604,168.598 C70.604,171.599 70.604,174.699 68.504,176.799 C65.704,179.399 61.704,180.499 60.504,180.499 C58.704,180.499 58.504,180.199 55.203,176.399 C54.403,175.499 53.303,174.299 49.003,171.799 C48.203,171.299 47.003,170.599 47.003,170.499 C47.003,170.199 47.403,170.199 47.503,170.199 C49.403,170.199 57.704,170.799 59.404,170.799 C62.704,170.799 62.704,170.499 62.704,167.798 C62.704,165.098 62.704,149.897 62.504,148.597 C62.204,146.997 61.204,146.697 59.604,146.697 L24.402,146.697 C22.101,146.697 15.201,146.697 11.701,146.897 C11.401,146.997 9.901,147.197 9.601,147.197 C9.301,147.197 9.101,146.897 8.701,146.497 L6.800,144.197 C6.400,143.797 6.400,143.697 6.400,143.597 C6.400,143.397 6.500,143.297 6.701,143.297 C7.400,143.297 10.501,143.597 11.201,143.697 C15.701,143.897 20.201,143.997 24.802,143.997 L59.604,143.997 C62.604,143.997 62.604,143.597 62.604,133.696 C62.604,127.996 62.104,126.496 59.204,126.496 L20.401,126.496 C18.101,126.496 11.201,126.496 7.701,126.796 C7.400,126.796 5.900,126.996 5.600,126.996 C5.300,126.996 5.100,126.796 4.700,126.396 L2.800,124.096 C2.400,123.596 2.400,123.596 2.400,123.396 C2.400,123.296 2.500,123.196 2.700,123.196 C3.400,123.196 6.500,123.496 7.200,123.496 C11.701,123.696 16.201,123.896 20.801,123.896 L41.503,123.896 C44.203,123.896 44.203,122.396 44.203,118.295 C44.203,109.995 44.003,109.395 41.203,109.395 L30.102,109.395 C27.802,109.395 21.001,109.395 17.501,109.595 C17.101,109.595 15.601,109.895 15.301,109.895 C15.001,109.895 14.801,109.595 14.501,109.195 L12.501,106.895 C12.101,106.495 12.101,106.395 12.101,106.195 C12.101,106.095 12.301,105.995 12.401,105.995 C13.201,105.995 16.201,106.294 16.901,106.395 C21.501,106.595 25.902,106.694 30.602,106.694 L41.203,106.694 C43.903,106.694 43.903,105.195 43.903,103.894 C43.903,99.194 43.403,94.594 43.103,93.094 C43.003,92.594 42.103,90.794 42.103,90.394 C42.103,89.594 43.203,89.494 43.803,89.494 C45.103,89.494 45.703,89.693 51.103,91.094 C54.303,91.994 54.803,92.194 54.803,93.494 C54.803,94.394 54.403,94.694 52.503,96.094 C51.903,96.594 51.603,97.294 51.603,98.994 C51.603,99.594 51.603,104.595 51.703,104.995 C52.103,106.595 53.203,106.694 54.503,106.694 L65.404,106.694 C69.004,106.694 70.004,106.595 71.104,105.695 C71.904,104.995 74.505,100.395 75.505,100.395 C76.005,100.395 80.005,103.295 82.205,104.995 C84.205,106.495 84.805,106.995 84.805,107.895 C84.805,109.395 84.305,109.395 79.505,109.395 L54.503,109.395 C52.103,109.395 51.503,110.195 51.503,112.295 C51.503,113.695 51.503,121.796 51.703,122.495 C52.103,123.896 53.603,123.896 54.503,123.896 L74.005,123.896 C78.005,123.896 79.105,123.896 80.405,121.896 C82.905,117.995 83.105,117.495 84.005,117.495 C84.705,117.495 93.806,123.696 93.806,125.096 C93.806,126.496 91.806,126.496 88.405,126.496 ZM86.705,31.596 C86.105,31.596 83.805,31.396 83.305,31.396 C82.805,31.496 80.705,32.096 80.305,32.096 C80.105,32.096 79.805,31.996 79.805,31.596 C79.805,31.396 80.105,30.896 80.105,30.796 C80.305,30.196 80.505,29.696 80.505,28.996 C80.505,24.996 75.505,23.595 72.104,23.595 C70.504,23.595 69.604,23.996 68.204,24.596 C67.804,24.796 67.504,24.896 67.204,24.896 C66.904,24.896 66.804,24.796 66.804,24.496 C66.804,23.796 71.004,18.195 77.605,18.195 C85.305,18.195 90.006,22.196 90.006,26.796 C90.006,28.896 88.806,31.596 86.705,31.596 ZM36.102,43.897 C36.402,43.897 44.603,40.497 46.203,39.897 C56.104,36.196 60.604,35.897 63.204,35.897 C70.504,35.897 78.605,41.597 78.605,50.997 C78.605,64.198 64.704,70.198 56.504,70.198 C50.803,70.198 46.203,67.298 46.203,62.098 C46.203,57.398 50.303,54.198 51.203,54.198 C51.503,54.198 51.703,54.498 51.703,54.698 C51.703,54.998 51.503,55.197 51.303,55.498 C51.003,55.898 50.403,56.698 50.403,58.198 C50.403,62.998 55.904,62.998 56.904,62.998 C63.504,62.998 71.904,58.598 71.904,50.597 C71.904,43.497 66.604,39.597 62.304,39.597 C59.504,39.597 53.303,40.897 41.603,47.097 C36.002,50.097 35.402,50.397 35.402,52.098 C35.402,53.197 35.702,57.698 35.702,58.698 C35.702,63.298 34.202,69.899 30.602,69.899 C27.902,69.899 26.802,67.798 26.002,66.198 C22.801,59.998 22.301,59.998 21.001,59.998 C20.101,59.998 19.101,60.398 18.501,60.598 C17.901,60.898 15.401,62.598 14.701,62.598 C13.601,62.598 8.501,59.598 8.501,56.298 C8.501,54.498 9.601,52.397 11.401,52.397 C12.001,52.397 14.901,52.898 15.501,52.898 C18.201,52.898 20.001,52.397 25.902,49.497 C31.002,46.997 31.602,46.697 31.602,43.897 C31.602,41.597 31.502,33.096 31.402,31.396 C31.402,30.696 31.102,29.196 30.002,29.196 C28.802,29.196 26.002,29.896 25.402,30.096 C20.301,31.796 19.801,31.996 18.301,31.996 C14.901,31.996 11.101,25.096 11.101,24.396 C11.101,23.896 11.501,23.696 11.901,23.696 C12.201,23.696 13.401,24.096 13.701,24.096 C15.501,24.396 17.001,24.596 18.301,24.596 C21.901,24.596 30.402,22.196 31.002,21.595 C31.502,20.896 32.002,11.795 32.002,10.695 C32.002,7.595 31.502,5.595 28.702,2.695 C28.502,2.494 27.302,1.294 27.302,1.094 C27.302,0.194 28.902,-0.006 29.502,-0.006 C36.202,-0.006 39.802,4.894 39.802,6.795 C39.802,7.695 37.902,11.295 37.702,11.995 C37.602,12.695 36.702,16.695 36.702,18.496 C36.702,18.896 36.902,19.595 37.502,19.595 C38.202,19.595 41.003,18.496 41.003,17.095 C41.003,16.895 40.503,15.895 40.503,15.695 C40.503,15.595 40.703,15.395 40.903,15.295 C42.303,15.095 47.103,16.495 47.103,19.595 C47.103,22.896 39.503,25.896 37.102,26.896 C35.702,27.396 35.602,27.796 35.402,31.296 C35.202,33.496 35.202,41.597 35.202,42.097 C35.202,42.697 35.202,43.897 36.102,43.897 ZM31.002,53.298 C30.702,53.298 24.302,56.498 24.302,57.898 C24.302,59.398 27.002,62.598 28.502,62.598 C29.902,62.598 31.302,59.798 31.302,54.898 C31.302,54.498 31.302,53.497 31.002,53.298 ZM23.802,244.895 C23.802,243.195 20.701,237.395 18.401,237.395 C17.601,237.395 17.201,237.695 13.801,240.395 C11.801,241.895 3.900,247.195 3.100,247.195 C2.900,247.195 2.800,246.995 2.800,246.895 C2.800,246.695 8.201,241.495 8.901,240.695 C17.101,232.094 23.102,224.394 23.102,222.694 C23.102,221.194 22.701,221.194 18.701,221.194 C16.001,221.194 12.201,221.394 10.601,221.494 C10.401,221.494 9.401,221.694 9.201,221.694 C8.801,221.694 8.601,221.494 8.301,221.094 L6.400,218.793 C6.000,218.393 6.000,218.194 6.000,218.094 C6.000,217.894 6.200,217.894 6.400,217.894 C7.000,217.894 10.101,218.194 10.701,218.194 C15.401,218.393 19.501,218.594 24.102,218.594 L70.604,218.594 C74.805,218.594 75.305,218.594 76.205,217.694 C76.805,216.994 79.205,213.493 80.005,213.493 C81.405,213.493 87.805,218.494 87.805,219.994 C87.805,221.194 87.305,221.194 82.605,221.194 L62.104,221.194 C59.004,221.194 59.004,222.594 59.004,226.494 C59.004,227.494 58.804,232.094 58.904,232.994 C59.004,234.795 59.304,235.295 60.204,235.295 C61.904,235.295 73.005,231.294 77.905,226.094 C78.305,225.694 79.505,223.394 80.005,223.394 C80.705,223.394 86.605,227.294 87.305,227.694 C88.205,228.294 88.705,228.594 88.705,229.294 C88.705,229.994 87.905,229.994 87.205,229.994 C85.705,229.994 85.305,230.194 82.605,231.394 C79.205,232.994 66.904,236.295 62.504,237.295 C60.404,237.795 59.104,238.095 59.104,240.995 C59.104,244.495 61.204,245.695 71.204,245.695 C84.005,245.695 84.805,243.995 87.105,239.495 C87.705,238.395 90.306,232.295 90.306,232.295 C90.506,232.295 90.606,232.494 90.606,232.795 C90.606,235.095 90.606,239.595 91.006,241.195 C91.206,241.795 92.506,244.295 92.506,244.895 C92.506,245.895 91.306,247.695 89.906,248.695 C87.705,250.296 84.405,251.896 74.705,251.896 C53.703,251.896 52.903,249.696 52.703,241.995 C52.603,239.495 52.403,223.794 52.203,222.794 C51.803,221.194 50.703,221.194 49.903,221.194 L35.902,221.194 C34.502,221.194 34.502,221.394 34.102,222.894 C34.002,223.294 32.102,223.994 31.902,224.194 C31.302,224.794 28.802,227.294 28.302,227.794 C27.402,228.494 27.302,228.894 27.302,229.294 C27.302,230.194 28.402,230.294 29.302,230.294 L33.902,230.294 C35.902,230.294 37.202,230.194 38.802,229.394 C39.503,229.094 42.203,226.694 42.903,226.694 C43.803,226.694 48.503,231.494 48.503,232.695 C48.503,233.195 48.403,233.294 46.103,234.295 C45.103,234.795 44.803,235.095 44.003,235.895 C39.402,240.795 30.302,250.196 13.801,256.796 C10.701,257.996 3.900,260.396 0.800,260.396 C0.700,260.396 0.500,260.396 0.500,260.196 C0.500,260.196 23.802,248.795 23.802,244.895 ZM28.402,239.495 C28.502,240.095 28.702,240.695 29.502,240.695 C30.702,240.695 35.502,235.895 35.502,234.095 C35.502,232.894 34.202,232.894 33.202,232.894 L25.802,232.894 C21.601,232.894 21.001,234.594 21.001,234.994 C21.001,235.495 21.401,235.595 23.102,236.095 C26.502,237.195 28.102,238.295 28.402,239.495 ZM9.201,263.296 C14.101,263.496 18.301,263.596 23.001,263.596 L29.802,263.596 C32.202,263.596 32.302,262.296 32.302,259.796 C32.302,258.596 32.202,256.196 32.002,255.096 C31.902,254.596 30.902,252.696 30.902,252.296 C30.902,251.496 31.702,251.496 32.002,251.496 C32.102,251.496 36.102,251.696 40.203,252.496 C40.503,252.596 41.403,252.796 41.403,253.696 C41.403,254.196 39.503,255.796 39.303,256.196 C39.002,256.896 38.902,260.096 38.902,260.996 C38.902,263.196 39.703,263.596 41.903,263.596 L55.904,263.596 C58.404,263.596 58.704,261.996 58.704,260.696 C58.704,259.496 58.604,257.596 58.204,255.996 C58.104,255.596 57.204,254.096 57.204,253.696 C57.204,253.096 58.004,253.096 58.604,253.096 C61.804,253.096 68.204,254.396 68.204,255.996 C68.204,256.796 67.804,257.096 66.604,257.996 C66.104,258.296 66.004,259.096 66.004,260.096 C66.004,262.896 67.004,263.596 69.404,263.596 L73.105,263.596 C77.405,263.596 77.805,263.696 78.805,262.696 C79.605,261.896 82.605,257.796 83.505,257.796 C84.805,257.796 90.606,263.596 90.606,265.096 C90.606,266.297 90.106,266.297 85.405,266.297 L69.404,266.297 C67.004,266.297 66.204,266.897 66.204,269.397 C66.204,271.197 66.604,279.297 66.604,280.897 C66.604,282.598 66.504,285.398 61.504,285.398 C59.404,285.398 58.404,284.798 58.404,281.097 C58.404,279.797 58.804,270.897 58.804,269.997 C58.804,267.097 58.404,266.297 55.803,266.297 L41.803,266.297 C38.902,266.297 38.802,266.897 38.002,269.897 C34.502,283.597 20.601,285.898 18.001,285.898 C17.801,285.898 17.701,285.798 17.701,285.698 C17.701,285.598 18.401,285.298 18.601,285.198 C28.502,280.697 31.402,270.697 31.402,268.196 C31.402,266.297 30.302,266.297 29.002,266.297 L22.501,266.297 C13.701,266.297 10.801,266.497 9.801,266.497 C9.501,266.596 8.001,266.797 7.701,266.797 C7.400,266.797 7.200,266.497 6.800,266.096 L4.900,263.796 C4.500,263.396 4.500,263.296 4.500,263.196 C4.500,262.996 4.600,262.896 4.800,262.896 C5.500,262.896 8.601,263.196 9.201,263.296 ZM30.102,166.799 C28.102,161.698 25.202,156.498 23.702,154.698 C23.302,153.998 22.902,153.598 22.902,153.398 C22.902,153.197 23.102,153.197 23.201,153.197 C23.401,153.197 25.302,153.798 26.702,154.298 C36.302,157.898 38.502,160.998 38.502,166.098 C38.502,166.998 37.702,170.999 33.902,170.999 C31.702,170.999 31.402,170.099 30.102,166.799 ZM68.204,208.193 C65.904,208.193 65.204,209.193 65.204,210.993 C65.204,214.894 65.204,217.093 60.904,217.093 C57.804,217.093 57.804,216.494 57.704,211.193 C57.604,208.393 56.104,208.193 54.903,208.193 L40.703,208.193 C39.602,208.193 37.702,208.193 37.702,210.793 C37.702,213.293 37.702,213.893 36.602,215.093 C35.202,216.494 33.402,216.994 32.602,216.994 C32.002,216.994 30.102,216.393 30.102,214.793 C30.102,214.193 30.402,211.593 30.402,210.993 C30.402,208.393 28.702,208.193 27.202,208.193 L20.601,208.193 C11.801,208.193 8.901,208.393 8.001,208.493 C7.601,208.493 6.100,208.693 5.800,208.693 C5.500,208.693 5.300,208.493 5.000,208.093 L3.000,205.793 C2.600,205.393 2.600,205.293 2.600,205.093 C2.600,204.993 2.700,204.893 2.900,204.893 C3.600,204.893 6.701,205.193 7.400,205.193 C12.201,205.493 16.401,205.593 21.101,205.593 L27.202,205.593 C29.002,205.593 30.102,204.993 30.102,202.793 C30.102,202.693 30.002,198.992 29.502,197.292 C29.402,196.792 28.302,194.692 28.302,194.192 C28.302,193.892 28.502,193.492 29.102,193.492 C29.402,193.492 37.102,195.392 38.702,195.792 C39.303,195.992 40.103,196.392 40.103,197.492 C40.103,198.293 40.002,198.392 38.402,199.692 C38.002,199.993 37.402,200.492 37.402,201.993 C37.402,205.593 39.503,205.593 40.703,205.593 L54.903,205.593 C57.804,205.593 57.804,204.393 57.804,201.893 C57.804,199.093 57.604,197.292 57.504,196.692 C57.404,196.392 57.004,194.992 57.004,194.692 C57.004,193.692 57.704,193.592 58.304,193.592 C58.504,193.592 64.304,194.492 66.904,195.492 C67.604,195.792 68.004,196.392 68.004,196.892 C68.004,197.692 67.704,197.893 66.004,199.093 C65.204,199.692 65.204,201.693 65.204,202.192 C65.204,205.493 66.704,205.593 68.204,205.593 L75.205,205.593 C79.605,205.593 80.105,205.593 82.405,202.893 C82.905,202.293 85.005,199.893 85.305,199.893 C85.905,199.893 93.406,205.693 93.406,206.993 C93.406,208.193 92.906,208.193 88.105,208.193 L68.204,208.193 Z" />
              </svg>
            </div>
            <h1 class="p-mv__top-text js-top">本堂で執り行う家族葬</h1>
            <p class="p-mv__text js-top">住職がご家族と向き合い「本当に必要なこと」だけをご提案。<br class="u-desktop">
              真心のこもったご葬儀で、故人様を心を込めてお送りいたします。</p>
          </div>

          <div class="swiper swiper1">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <figure class="p-mv__img">
                  <img src="/images/common/slider_1.jpg" alt="" width="431" height="380">
                </figure>
              </div>
              <div class="swiper-slide">
                <figure class="p-mv__img">
                  <img src="/images/common/slider_2.jpg" alt="" width="431" height="380">
                </figure>
              </div>
              <div class="swiper-slide">
                <figure class="p-mv__img">
                  <img src="/images/common/slider_3.jpg" alt="" width="431" height="380">
                </figure>
              </div>
            </div>



          </div>
          <a href="#about" class="p-mv__scroll">
            <p class="p-mv__scroll-text">scroll</p>
          </a>
          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <section class="p-about" id="about">
      <div class="l-inner">
        <div class="p-about__content">
          <div class="p-about__title js-about">
            <span class="c-section-title--small">お寺葬とは</span>
            <h2 class="c-section-title">お寺が主体となって<br class="u-mobile">執り行う、<span class="c-section-title--red">温</span>かい家族葬</h2>
          </div>
          <div class="p-about__text-wrapper js-about">
            <p class="p-about__text">お寺葬とは、伝統と格式を重視したお寺の本堂にて執り行う葬儀のことです。<br>
              長光寺では、お寺と住職が主体となり、ご相談から葬儀当日、その後のご供養まで一貫して寄り添います。<br>
              お迎え・ご安置・役所手続きなど専門的な部分は、長年連携している信頼できる葬儀スタッフが担当。<br>
              「必要なことだけを、正直な費用で」お見送りいたします。不要なオプションの押しつけは一切ありません。</p>
          </div>
        </div>
      </div>
    </section>
    <section class="p-feature" id="feature">
      <div class="l-inner">
        <div class="p-feature__content">
          <div class="p-feature__title js-feature">
            <span class="c-section-title--small">5つの特徴</span>
            <h2 class="c-section-title">長光寺お寺葬 <br class="u-mobile"><span class="c-section-title--big">5つの特徴</span></h2>
          </div>
          <ul class="p-feature__grid">
            <li class="p-feature__grid-list js-feature" data-number="1">
              <figure class="p-feature__img">
                <img decoding="async" loading="lazy" src="/images/common/feature_1.jpg" alt="" width="740" height="500">
              </figure>
              <div class="p-feature__detail">
                <h3 class="p-feature__text-title">住職が主体だから<br>どこまでも<span class="p-feature__text-title--yellow">安心</span></h3>
                <div class="p-feature__text-wrapper">
                  <div class="p-feature__svg-wrapper">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="17px" height="14px" viewBox="0 0 17 14">
                      <path fill-rule="evenodd" fill="rgb(255, 255, 204)"
                        d="M5.191,10.816 C6.680,8.621 12.153,2.972 16.691,0.038 C16.884,-0.086 17.102,0.158 16.942,0.320 C12.630,4.688 8.021,9.630 5.374,13.902 C5.300,14.021 5.122,14.026 5.045,13.909 C3.713,11.884 2.571,8.975 0.122,8.083 C-0.060,8.017 -0.042,7.770 0.147,7.727 C2.493,7.184 3.593,9.109 5.191,10.816 L5.191,10.816 L5.191,10.816 Z" />
                    </svg>
                  </div>
                  <p class="p-feature__text">営業担当者ではなく、住職自らがご相談から葬儀後まで責任を持って対応します。</p>
                </div>
                <div class="p-feature__text-wrapper">
                  <div class="p-feature__svg-wrapper">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="17px" height="14px" viewBox="0 0 17 14">
                      <path fill-rule="evenodd" fill="rgb(255, 255, 204)"
                        d="M5.191,10.816 C6.680,8.621 12.153,2.972 16.691,0.038 C16.884,-0.086 17.102,0.158 16.942,0.320 C12.630,4.688 8.021,9.630 5.374,13.902 C5.300,14.021 5.122,14.026 5.045,13.909 C3.713,11.884 2.571,8.975 0.122,8.083 C-0.060,8.017 -0.042,7.770 0.147,7.727 C2.493,7.184 3.593,9.109 5.191,10.816 L5.191,10.816 L5.191,10.816 Z" />
                    </svg>
                  </div>
                  <p class="p-feature__text">不要な営業一切行いません。本当に必要なものだけをご提案。ご家族の心に寄り添います。</p>
                </div>
              </div>
            </li>
            <li class="p-feature__grid-list p-feature__detail--white js-feature" data-number="2">
              <figure class="p-feature__img">
                <img decoding="async" loading="lazy" src="/images/common/feature_2.jpg" alt="" width="740" height="500">
              </figure>
              <div class="p-feature__detail">
                <h3 class="p-feature__text-title">必要な<span class="p-feature__text-title--red">費用</span>だけを<br>わかりやすく</h3>

                <div class="p-feature__text-wrapper">

                  <div class="p-feature__svg-wrapper">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="17px" height="14px" viewBox="0 0 17 14">
                      <path fill-rule="evenodd" fill="#990000"
                        d="M5.191,10.816 C6.680,8.621 12.153,2.972 16.691,0.038 C16.884,-0.086 17.102,0.158 16.942,0.320 C12.630,4.688 8.021,9.630 5.374,13.902 C5.300,14.021 5.122,14.026 5.045,13.909 C3.713,11.884 2.571,8.975 0.122,8.083 C-0.060,8.017 -0.042,7.770 0.147,7.727 C2.493,7.184 3.593,9.109 5.191,10.816 L5.191,10.816 L5.191,10.816 Z" />
                    </svg>
                  </div>
                  <p class="p-feature__text">長光寺が直接お受けします。紹介手数料などの上乗せ費用はいただきません。</p>
                </div>
                <div class="p-feature__text-wrapper">
                  <div class="p-feature__svg-wrapper">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="17px" height="14px" viewBox="0 0 17 14">
                      <path fill-rule="evenodd" fill="#990000"
                        d="M5.191,10.816 C6.680,8.621 12.153,2.972 16.691,0.038 C16.884,-0.086 17.102,0.158 16.942,0.320 C12.630,4.688 8.021,9.630 5.374,13.902 C5.300,14.021 5.122,14.026 5.045,13.909 C3.713,11.884 2.571,8.975 0.122,8.083 C-0.060,8.017 -0.042,7.770 0.147,7.727 C2.493,7.184 3.593,9.109 5.191,10.816 L5.191,10.816 L5.191,10.816 Z" />
                    </svg>
                  </div>
                  <p class="p-feature__text">お布施込みの総額提示をさせていただきます。後から高額な請求が来る心配はありません。</p>
                </div>
              </div>
            </li>
            <li class="p-feature__grid-list js-feature" data-number="3">
              <figure class="p-feature__img">
                <img decoding="async" loading="lazy" src="/images/common/feature_3.jpg" alt="" width="740" height="500">
              </figure>
              <div class="p-feature__detail">
                <h3 class="p-feature__text-title">由緒ある本堂で<br>心安らぐ葬送</h3>
                <div class="p-feature__text-wrapper">

                  <div class="p-feature__svg-wrapper">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="17px" height="14px" viewBox="0 0 17 14">
                      <path fill-rule="evenodd" fill="rgb(255, 255, 204)"
                        d="M5.191,10.816 C6.680,8.621 12.153,2.972 16.691,0.038 C16.884,-0.086 17.102,0.158 16.942,0.320 C12.630,4.688 8.021,9.630 5.374,13.902 C5.300,14.021 5.122,14.026 5.045,13.909 C3.713,11.884 2.571,8.975 0.122,8.083 C-0.060,8.017 -0.042,7.770 0.147,7.727 C2.493,7.184 3.593,9.109 5.191,10.816 L5.191,10.816 L5.191,10.816 Z" />
                    </svg>
                  </div>
                  <p class="p-feature__text">本堂を利用した厳かで心安らぐ空間です。貸しホールにはない、由緒正しき荘厳な本堂でお見送りできます。</p>
                </div>
                <div class="p-feature__text-wrapper">
                  <div class="p-feature__svg-wrapper">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="17px" height="14px" viewBox="0 0 17 14">
                      <path fill-rule="evenodd" fill="rgb(255, 255, 204)"
                        d="M5.191,10.816 C6.680,8.621 12.153,2.972 16.691,0.038 C16.884,-0.086 17.102,0.158 16.942,0.320 C12.630,4.688 8.021,9.630 5.374,13.902 C5.300,14.021 5.122,14.026 5.045,13.909 C3.713,11.884 2.571,8.975 0.122,8.083 C-0.060,8.017 -0.042,7.770 0.147,7.727 C2.493,7.184 3.593,9.109 5.191,10.816 L5.191,10.816 L5.191,10.816 Z" />
                    </svg>
                  </div>
                  <p class="p-feature__text">寺院には十分な設備がそなわっております。本堂収容人数：最大40名様、駐車場完備：30台</p>
                </div>
              </div>
            </li>
          </ul>
          <ul class="p-feature__flex">
            <li class="p-feature__grid-list p-feature__detail--white js-feature" data-number="4">
              <figure class="p-feature__img">
                <img decoding="async" loading="lazy" src="/images/common/feature_4.jpg" alt="" width="740" height="500">
              </figure>
              <div class="p-feature__detail">
                <h3 class="p-feature__text-title">宗旨宗派不問<br>どなたでもご利用可能</h3>
                <div class="p-feature__text-wrapper">
                  <div class="p-feature__svg-wrapper">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="17px" height="14px" viewBox="0 0 17 14">
                      <path fill-rule="evenodd" fill="#990000"
                        d="M5.191,10.816 C6.680,8.621 12.153,2.972 16.691,0.038 C16.884,-0.086 17.102,0.158 16.942,0.320 C12.630,4.688 8.021,9.630 5.374,13.902 C5.300,14.021 5.122,14.026 5.045,13.909 C3.713,11.884 2.571,8.975 0.122,8.083 C-0.060,8.017 -0.042,7.770 0.147,7.727 C2.493,7.184 3.593,9.109 5.191,10.816 L5.191,10.816 L5.191,10.816 Z" />
                    </svg>
                  </div>
                  <p class="p-feature__text">宗旨宗派を問わず、どなたでもご利用いただけます。</p>
                </div>
                <div class="p-feature__text-wrapper">
                  <div class="p-feature__svg-wrapper">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="17px" height="14px" viewBox="0 0 17 14">
                      <path fill-rule="evenodd" fill="#990000"
                        d="M5.191,10.816 C6.680,8.621 12.153,2.972 16.691,0.038 C16.884,-0.086 17.102,0.158 16.942,0.320 C12.630,4.688 8.021,9.630 5.374,13.902 C5.300,14.021 5.122,14.026 5.045,13.909 C3.713,11.884 2.571,8.975 0.122,8.083 C-0.060,8.017 -0.042,7.770 0.147,7.727 C2.493,7.184 3.593,9.109 5.191,10.816 L5.191,10.816 L5.191,10.816 Z" />
                    </svg>
                  </div>
                  <p class="p-feature__text">檀家になる必要はありません。葬儀後の関係も、ご家族のご希望を尊重します。</p>
                </div>
              </div>
            </li>
            <li class="p-feature__grid-list js-feature" data-number="5">
              <figure class="p-feature__img">
                <img decoding="async" loading="lazy" src="/images/common/feature_5.jpg" alt="" width="740" height="500">
              </figure>
              <div class="p-feature__detail">
                <h3 class="p-feature__text-title">葬儀後も続く<br>末永いお付き合い</h3>
                <div class="p-feature__text-wrapper">
                  <div class="p-feature__svg-wrapper">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="17px" height="14px" viewBox="0 0 17 14">
                      <path fill-rule="evenodd" fill="rgb(255, 255, 204)"
                        d="M5.191,10.816 C6.680,8.621 12.153,2.972 16.691,0.038 C16.884,-0.086 17.102,0.158 16.942,0.320 C12.630,4.688 8.021,9.630 5.374,13.902 C5.300,14.021 5.122,14.026 5.045,13.909 C3.713,11.884 2.571,8.975 0.122,8.083 C-0.060,8.017 -0.042,7.770 0.147,7.727 C2.493,7.184 3.593,9.109 5.191,10.816 L5.191,10.816 L5.191,10.816 Z" />
                    </svg>
                  </div>
                  <p class="p-feature__text">葬儀から永代供養まで一貫対応。葬儀後の法要や納骨も、すべて長光寺が責任を持ってサポートします。</p>
                </div>

              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="p-plan" id="plan">
      <div class="l-inner">
        <div class="p-plan__content">
          <div class="p-plan__title js-plan">
            <span class="c-section-title--small">葬儀プラン</span>
            <h2 class="c-section-title">余分な費用をかけず、<br class="u-mobile">本当に<span class="c-section-title--red">必</span>要なことだけを<br class="u-mobile">選んだプラン</h2>
          </div>
          <div class="p-plan__anchor js-plan">
            <a href="#plan1" class="p-plan__anchor-link">
              <figure class="p-plan__anchor-img">
                <img decoding="async" loading="lazy" src="/images/common/plan_img1.jpg" alt="お寺葬基本プラン" width="370" height="250">
              </figure>
              <div class="p-plan__anchor-detail">
                <h3 class="p-plan__anchor-title">お寺葬基本プラン</h3>
                <p class="p-plan__anchor-price">500,000<span class="p-plan__anchor-price-unit">円</span><span class="p-plan__anchor-price-tax">(税込)</span></p>
                <p class="p-plan__anchor-text">お通夜・ご葬儀（初七日）と二日間かけて執り行います。お寺葬の基本的な葬儀プランです。</p>
              </div>
            </a>
            <a href="#plan2" class="p-plan__anchor-link">
              <figure class="p-plan__anchor-img">
                <img decoding="async" loading="lazy" src="/images/common/plan_img2.jpg" alt="永代供養付プラン" width="370" height="250">
              </figure>
              <div class="p-plan__anchor-detail">
                <h3 class="p-plan__anchor-title">永代供養付プラン</h3>
                <p class="p-plan__anchor-price">650,000<span class="p-plan__anchor-price-unit">円</span><span class="p-plan__anchor-price-tax">(税込)</span></p>
                <p class="p-plan__anchor-text">お寺葬基本プランに永代供養を付けたプランです。お通夜・ご葬儀・四十九日法要・納骨式を三日間かけて執り行います。</p>
              </div>
            </a>
          </div>
          <div class="p-plan__block-wrapper">
            <div class="p-plan__block" id="plan1">
              <div class="p-plan__row p-plan__row--1 fadein">
                <figure class="p-plan__img">
                  <img decoding="async" loading="lazy" src="/images/common/plan_img3.jpg" alt="お寺葬基本プラン" width="740" height="500">
                </figure>
                <div class="p-plan__detail">
                  <h3 class="p-plan__detail-title">お寺葬基本プラン</h3>
                  <p class="p-plan__price">500,000<span class="p-plan__price-unit">円</span><span class="p-plan__price-tax">(税込)</span></p>
                  <p class="p-plan__number">参加者数目安：～30名程度</p>
                  <p class="p-plan__text">お寺葬の基本的な葬儀プランです。<br class="u-desktop">
                    お通夜・ご葬儀（初七日）と二日間かけて執り行います。<br>
                    戒名授与も含まれます。</p>
                  <figure class="p-plan__flow p-plan__flow--1">
                    <img decoding="async" loading="lazy" src="/images/common/plan_flow1.png" alt="お寺葬基本プラン" width="300" height="130">
                  </figure>
                </div>
              </div>
              <div class="p-plan__kind-wrapper p-plan__kind-wrapper--1">
                <div class="p-plan__kind">
                  <p class="p-plan__kind-text fadein">プランに含まれるもの</p>
                  <ul class="p-plan__lists fadein">

                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan1.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan2.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan3.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan4.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan5.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan6.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan7.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan8.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan19.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan9.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan10.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan11.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan12.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan13.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan14.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan15.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan16.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan17.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan18.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                  </ul>
                </div>
                <div class="p-plan__kind">
                  <p class="p-plan__kind-text fadein">オプションサービス</p>
                  <ul class="p-plan__lists fadein">
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan19.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan200.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan21.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan22.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan23.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan24.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan25.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>


                  </ul>
                  <p class="p-plan__attention">※オプションの押し売りは一切いたしません。ご希望に応じてのみご提案します。</p>
                </div>
              </div>
            </div>
            <div class="p-plan__block" id="plan2">
              <div class="p-plan__row fadein">
                <figure class="p-plan__img">
                  <img decoding="async" loading="lazy" src="/images/common/plan_img4.jpg" alt="永代供養付プラン" width="740" height="500">
                </figure>
                <div class="p-plan__detail">
                  <h3 class="p-plan__detail-title">永代供養付プラン</h3>
                  <p class="p-plan__price">650,000<span class="p-plan__price-unit">円</span><span class="p-plan__price-tax">(税込)</span></p>
                  <p class="p-plan__number">参加者数目安：～30名程度</p>
                  <p class="p-plan__text">お寺葬基本プランに永代供養を付けたプランです。<br>
                    お通夜・ご葬儀・四十九日法要・納骨式を三日間かけて執り行います。戒名授与も含まれます。</p>
                  <figure class="p-plan__flow p-plan__flow--2">
                    <img decoding="async" loading="lazy" src="/images/common/plan_flow2.png" alt="永代供養付プラン" width="300" height="130">
                  </figure>
                </div>
              </div>
              <div class="p-plan__kind-wrapper p-plan__kind-wrapper--2">
                <div class="p-plan__kind">
                  <p class="p-plan__kind-text fadein">プランに含まれるもの</p>
                  <ul class="p-plan__lists fadein">

                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan1.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan28.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan26.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan27.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan29.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan3.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan4.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan5.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan6.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan7.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan8.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan19.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan9.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan10.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan11.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan12.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan13.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan14.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan15.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan16.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan17.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan18.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                  </ul>
                </div>
                <div class="p-plan__kind">
                  <p class="p-plan__kind-text fadein">オプションサービス</p>
                  <ul class="p-plan__lists fadein">
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan30.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan31.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>

                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan21.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan22.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan23.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan24.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan25.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                  </ul>
                  <p class="p-plan__attention">※オプションの押し売りは一切いたしません。ご希望に応じてのみご提案します。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="p-habits" id="habits">
      <div class="l-inner">
        <div class="p-habits__content">
          <div class="p-habits__title fadein">
            <span class="c-section-title--small">永代供養</span>
            <h2 class="c-section-title">個別安置の<span class="c-section-title--red">永</span>代供養も<br class="u-mobile">承ります</h2>
          </div>
          <div class="p-habits__text-wrapper fadein">
            <p class="p-habits__text">永代供養とはお寺に供養を託すことです。<br>
              色々なご事情でお墓を管理していくことが難しい方、お墓を建立することが難しい方など当寺に供養を託してください。<br>
              永代過去帳に名を残し、生きた証として永代に渡り、当寺で責任を持って供養し続けます。</p>
          </div>
          <ul class="p-habits__lists">
            <li class="p-habits__list fadein">
              <figure class="p-habits__img p-habits__img--1">
                <img decoding="async" loading="lazy" src="/images/common/habits_1.png" alt="全て個別安置" width="431" height="38">
              </figure>
              <div class="p-habits__detail">
                <h3 class="p-habits__detail-title">全て個別安置</h3>
                <p class="p-habits__detail-text">他の方と一緒にならない個別納骨です。</p>
              </div>
            </li>
            <li class="p-habits__list fadein">
              <figure class="p-habits__img p-habits__img--1">
                <img decoding="async" loading="lazy" src="/images/common/habits_2.png" alt="20年間個別安置" width="431" height="38">
              </figure>
              <div class="p-habits__detail">
                <h3 class="p-habits__detail-title">20年間個別安置</h3>
                <p class="p-habits__detail-text">20年後で合祀いたします。（ご希望により延長可能）</p>
              </div>
            </li>
            <li class="p-habits__list fadein">
              <figure class="p-habits__img p-habits__img--1">
                <img decoding="async" loading="lazy" src="/images/common/habits_3.png" alt="宗旨宗派不問" width="431" height="38">
              </figure>
              <div class="p-habits__detail">
                <h3 class="p-habits__detail-title">宗旨宗派不問</h3>
                <p class="p-habits__detail-text">宗旨宗派は問いません。どなたでもご利用可能です。</p>
              </div>
            </li>
            <li class="p-habits__list fadein">
              <figure class="p-habits__img p-habits__img--4">
                <img decoding="async" loading="lazy" src="/images/common/habits_4.png" alt="全て個別安置" width="431" height="38">
              </figure>
              <div class="p-habits__detail">
                <h3 class="p-habits__detail-title">年2回の合同供養</h3>
                <p class="p-habits__detail-text">春彼岸・お盆に丁重に供養いたします。</p>
              </div>
            </li>
            <li class="p-habits__list fadein">
              <figure class="p-habits__img p-habits__img--1">
                <img decoding="async" loading="lazy" src="/images/common/habits_5.png" alt="全て個別安置" width="431" height="38">
              </figure>
              <div class="p-habits__detail">
                <h3 class="p-habits__detail-title">毎日の墓前供養</h3>
                <p class="p-habits__detail-text">住職による朝夕の墓前供養を行います。</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="p-flow" id="flow">
      <div class="l-inner">
        <div class="p-flow__content">
          <div class="p-flow__title fadein">
            <span class="c-section-title--small">ご葬儀の流れ</span>
            <h2 class="c-section-title">もしもの時に備えて<br class="u-mobile">事<span class="c-section-title--red">前</span>相談が安心です</h2>
          </div>
          <div class="p-flow__text-wrapper fadein">
            <p class="p-flow__text">初めての方でも安心してご利用いただけるよう、住職が最初から最後までしっかりとサポートいたします。<br class="u-desktop">
              ご不明な点やご要望があれば、どんなことでもお気軽にご相談ください。</p>
          </div>
          <div class="p-flow__block">
            <div class="p-flow__line">
              <picture>
                <source srcset="/images/common/flow_line.png" media="(min-width: 768px)" width="1238" height="570" />
                <img src="/images/common/flow_line_sp.png" alt="" width="355" height="227">
              </picture>
            </div>
            <div class="p-flow__right">
              <div class="p-flow__row fadein">
                <figure class="p-flow__img">
                  <img decoding="async" loading="lazy" src="/images/common/flow_img1.jpg" alt="ご連絡" width="300" height="200">
                </figure>
                <div class="p-flow__detail">
                  <div class="p-flow__detail-top">
                    <p class="p-flow__num">01</p>
                    <h3 class="p-flow__detail-title">ご連絡</h3>
                  </div>
                  <div class="p-flow__detail-textWrapper">
                    <p class="p-flow__detail-text">もしもの時には、まずお電話ください。24時間いつでもご連絡を受け付けております。ご連絡をいただき次第、すぐにご自宅や病院などご指定の場所までお迎えに上がります。</p>
                  </div>
                  <div class="p-flow__tel-wrapper">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="19px" height="19px">
                      <path fill-rule="evenodd" fill="rgb(153, 0, 0)"
                        d="M17.499,12.508 C16.327,12.508 15.179,12.326 14.091,11.966 C13.560,11.782 12.957,11.925 12.607,12.280 L10.450,13.910 C7.975,12.588 6.391,11.004 5.088,8.548 L6.673,6.442 C7.072,6.043 7.215,5.459 7.044,4.911 C6.682,3.816 6.498,2.667 6.498,1.496 C6.498,0.670 5.825,-0.003 4.998,-0.003 L1.497,-0.003 C0.670,-0.003 -0.003,0.670 -0.003,1.496 C-0.003,11.147 7.849,18.999 17.499,18.999 C18.326,18.999 18.999,18.326 18.999,17.498 L18.999,14.008 C18.999,13.181 18.326,12.508 17.499,12.508 Z" />
                    </svg>
                    <a href="tel:0268422975" class="p-flow__tel">0268−42−2975</a>
                  </div>
                </div>
              </div>
              <div class="p-flow__row fadein">
                <figure class="p-flow__img">
                  <img decoding="async" loading="lazy" src="/images/common/flow_img2.jpg" alt="ご連絡" width="300" height="200">
                </figure>
                <div class="p-flow__detail">
                  <div class="p-flow__detail-top">
                    <p class="p-flow__num">02</p>
                    <h3 class="p-flow__detail-title">お迎え</h3>
                  </div>
                  <div class="p-flow__detail-textWrapper">
                    <p class="p-flow__detail-text">ご遺体を丁寧にお迎えし、長光寺またはご希望の安置場所へご案内します。</p>
                  </div>

                </div>
              </div>
              <div class="p-flow__row fadein">
                <figure class="p-flow__img">
                  <img decoding="async" loading="lazy" src="/images/common/flow_img3.jpg" alt="ご遺体安置・枕経" width="300" height="200">
                </figure>
                <div class="p-flow__detail">
                  <div class="p-flow__detail-top">
                    <p class="p-flow__num">03</p>
                    <h3 class="p-flow__detail-title">ご遺体安置・枕経</h3>
                  </div>
                  <div class="p-flow__detail-textWrapper">
                    <p class="p-flow__detail-text">安置後、ご家族が落ち着けるよう配慮いたします。<br>
                      ご安置後、住職が枕経（まくらきょう）をお勤めし、故人様のご冥福をお祈りします。</p>
                  </div>

                </div>
              </div>
              <div class="p-flow__row fadein">
                <figure class="p-flow__img">
                  <img decoding="async" loading="lazy" src="/images/common/flow_img4.jpg" alt="喪主様との打ち合わせ" width="300" height="200">
                </figure>
                <div class="p-flow__detail">
                  <div class="p-flow__detail-top">
                    <p class="p-flow__num">04</p>
                    <h3 class="p-flow__detail-title">喪主様との打ち合わせ</h3>
                  </div>
                  <div class="p-flow__detail-textWrapper">
                    <p class="p-flow__detail-text">ご家族のご希望やご事情を伺いながら、葬儀の内容や日程を丁寧にご相談・ご提案いたします。</p>
                  </div>

                </div>
              </div>
              <div class="p-flow__row fadein">
                <figure class="p-flow__img">
                  <img decoding="async" loading="lazy" src="/images/common/flow_img5.jpg" alt="お通夜" width="300" height="200">
                </figure>
                <div class="p-flow__detail">
                  <div class="p-flow__detail-top">
                    <p class="p-flow__num">05</p>
                    <h3 class="p-flow__detail-title">お通夜</h3>
                  </div>
                  <div class="p-flow__detail-textWrapper">
                    <p class="p-flow__detail-text">ご家族・ご親族で静かにお別れの時間をお過ごしいただきます。</p>
                  </div>

                </div>
              </div>
              <div class="p-flow__row fadein">
                <figure class="p-flow__img">
                  <img decoding="async" loading="lazy" src="/images/common/flow_img6.jpg" alt="ご葬儀・初七日法要" width="300" height="200">
                </figure>
                <div class="p-flow__detail">
                  <div class="p-flow__detail-top">
                    <p class="p-flow__num">06</p>
                    <h3 class="p-flow__detail-title">ご葬儀・初七日法要</h3>
                  </div>
                  <div class="p-flow__detail-textWrapper">
                    <p class="p-flow__detail-text">本堂にて、心を込めてご葬儀と初七日法要を執り行います。</p>
                  </div>

                </div>
              </div>
              <div class="p-flow__row fadein">
                <figure class="p-flow__img">
                  <img decoding="async" loading="lazy" src="/images/common/flow_img7.jpg" alt="火葬" width="300" height="200">
                </figure>
                <div class="p-flow__detail">
                  <div class="p-flow__detail-top">
                    <p class="p-flow__num">07</p>
                    <h3 class="p-flow__detail-title">火葬</h3>
                  </div>
                  <div class="p-flow__detail-textWrapper">
                    <p class="p-flow__detail-text">火葬場へご出棺し、故人様をお見送りします。</p>
                  </div>

                </div>
              </div>
              <div class="p-flow__row fadein">
                <figure class="p-flow__img">
                  <img decoding="async" loading="lazy" src="/images/common/flow_img8.jpg" alt="火収骨・解散葬" width="300" height="200">
                </figure>
                <div class="p-flow__detail">
                  <div class="p-flow__detail-top">
                    <p class="p-flow__num">08</p>
                    <h3 class="p-flow__detail-title">収骨・解散</h3>
                  </div>
                  <div class="p-flow__detail-textWrapper">
                    <p class="p-flow__detail-text">お骨上げの後、解散となります。ご希望により、その後の法要や永代供養もご案内いたします。</p>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="p-other" id="other">
      <div class="l-inner">
        <div class="p-other__content">
          <div class="p-other__title fadein">
            <span class="c-section-title--small">他社との比較</span>
            <h2 class="c-section-title">提示価格と実際にかかる料金に<br class="u-mobile"><span class="c-section-title--red">差</span>額が少ない料金設定</h2>
          </div>
          <div class="p-other__table fadein">
            <div class="p-price-table">
              <table class="p-price-table__table">
                <thead class="p-price-table__head">
                  <tr class="p-price-table__row">
                    <th class="p-price-table__heading text-left">会社・プラン</th>
                    <th class="p-price-table__heading bg-990000">
                      <p class="p-price-table__heading-text">長光寺の<br>お寺葬基本プラン</p>
                    </th>
                    <th class="p-price-table__heading">A社（大手）<br>家族葬プラン</th>
                    <th class="p-price-table__heading">B社（新聞）<br>家族葬プラン</th>
                  </tr>
                </thead>
                <tbody class="p-price-table__body">
                  <tr class="p-price-table__row">
                    <th class="p-price-table__item-title">初期提示価格</th>
                    <td class="p-price-table__item bg-fffff1 color-red border-inline-red">50万円</td>
                    <td class="p-price-table__item">40〜70万円</td>
                    <td class="p-price-table__item">10〜40万円</td>
                  </tr>
                  <tr class="p-price-table__row">
                    <th class="p-price-table__item-title bg-fbe7e7">総額の目安</th>
                    <td class="p-price-table__item bg-fafac7 color-red border-inline-red"><span class="p-price-table__item-num">50</span>万円＋火葬料</td>
                    <td class="p-price-table__item bg-fbe7e7"><span class="p-price-table__item-num">80〜200</span>万円以上</td>
                    <td class="p-price-table__item bg-fbe7e7"><span class="p-price-table__item-num">70〜120</span>万円以上</td>
                  </tr>
                  <tr class="p-price-table__row">
                    <th class="p-price-table__item-title">お布施</th>
                    <td class="p-price-table__item bg-fffff1 border-inline-red">プラン内に含む</td>
                    <td class="p-price-table__item">別途：15〜50万以上</td>
                    <td class="p-price-table__item">別途：5〜20万</td>
                  </tr>
                  <tr class="p-price-table__row">
                    <th class="p-price-table__item-title bg-f5f5f5">戒名料</th>
                    <td class="p-price-table__item bg-fafac7 border-inline-red">プラン内に含む</td>
                    <td class="p-price-table__item bg-f5f5f5">別途：10〜100万</td>
                    <td class="p-price-table__item bg-f5f5f5">別途：10〜100万</td>
                  </tr>
                  <tr class="p-price-table__row">
                    <th class="p-price-table__item-title">式場使用料</th>
                    <td class="p-price-table__item  bg-fffff1 border-inline-red">プラン内に含む</td>
                    <td class="p-price-table__item">別途：5〜15万</td>
                    <td class="p-price-table__item">別途：5万程度</td>
                  </tr>
                  <tr class="p-price-table__row">
                    <th class="p-price-table__item-title bg-f5f5f5">互助会・会員制度</th>
                    <td class="p-price-table__item bg-fafac7 color-red border-inline-red">無し</td>
                    <td class="p-price-table__item bg-f5f5f5 color-red">互助会制度あり</td>
                    <td class="p-price-table__item bg-f5f5f5 color-red">会員制度あり</td>
                  </tr>
                  <tr class="p-price-table__row">
                    <th class="p-price-table__item-title">安置日数</th>
                    <td class="p-price-table__item bg-fffff1 border-inline-red">日数の制限無し</td>
                    <td class="p-price-table__item">2日間程度</td>
                    <td class="p-price-table__item">1日分</td>
                  </tr>
                  <tr class="p-price-table__row">
                    <th class="p-price-table__item-title bg-f5f5f5">追加費用</th>
                    <td class="p-price-table__item bg-fafac7 border-inline-red border-bottom-red">火葬料のみ<br>（2万以内）</td>
                    <td class="p-price-table__item bg-f5f5f5 color-red">お布施・戒名料・式場料などが<br>追加費用として計上</td>
                    <td class="p-price-table__item bg-f5f5f5 color-red">お布施・戒名料・式場料などが<br>追加費用として計上</td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
          <div class="p-other__attention fadein">
            <div class="p-other__attention-titleWrapper">
              <p class="p-other__attention-title">業界の料金や制度に関する注意点</p>
            </div>
            <div class="p-other__box">
              <p class="p-other__box-text">上記の比較表を見てもらえれば分かる通り、大手の葬儀会社やネット集客型新興業者の場合、<span>「最初の提示価格を極端に安く見せ、実際には必ず必要となる費用を後から追加していく」</span>というビジネスモデルなので、最終的には高額な料金が発生する事にある場合が多いです。</p>
              <p class="p-other__box-text">そして、葬儀社を選ぶ際、必ず目にするのが<span>「互助会」や「会員価格」</span>という言葉です。これらは、お客様のための制度に見えて、実は複雑な仕組みを抱えています。「互助会」とは、 月々積み立てにて将来の葬儀に備える仕組みです。しかし、実際には、積立金で賄えるのは基本プランのごく一部で、積立金で葬儀が全て賄えるわけではありません。さらに、一度入会すると高額な解約手数料がかかるため、他の葬儀社に頼みたくても乗り換えにくいという「囲い込み」の側面もあります。</p>
              <p class="p-other__box-text">「会員価格」は、数千円～1万円程度の入会金で「会員」となり、割引価格で葬儀ができる制度です。これは、あらかじめ「一般価格」を高く設定しておくことで、会員価格がお得に見えるようにした価格戦略の場合が多いです。結局は入会が前提となっており、誰にでも分かりやすい料金体系とは言えません。</p>
              <p class="p-other__box-text">そういった業界の典型とは違い、長光寺のお寺葬では、提示価格に対し、あらゆる料金をプラン内に含んでいますので、最終的に高額な料金が発生する事は決してありません。「互助会」や「会員制度」もありません。<span class="p-other__box-text--red">「ご遺族の悲しみや不安につけこむようなことは、決してしない」</span>というスタンスで運営しております。</p>
              <p class="p-other__box-text">その分、他の葬儀社と違うのは、<span>ご家族様にも少しだけ準備に携わっていただくこと</span>があります。一見すると手間に感じられるかもしれませんが、故人様のために何かを選んだり、準備をしたりするそのひと時こそが、故人様との最後の大切な対話の時間となります。その少しの手間が、単なる流れ作業の儀式を『忘れられない、心からのお見送り』へと変えてくれると考えております。</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="p-qa" id="qa">
      <div class="l-inner">
        <div class="p-qa__title fadein">
          <span class="c-section-title--small">よくある質問</span>
          <h2 class="c-section-title">皆様からよくご<span class="c-section-title--red">質</span>問いただく<br class="u-mobile">内容はこちら</h2>
        </div>
        <div class="p-qa__block">
          <details class="p-qa__content js-details fadein">
            <summary class="p-qa__summary js-summary">
              <p class="p-qa__q">Q.</p>
              <h3 class="p-qa__ttl">
                本当に50万円以上かかりませんか？
              </h3>
            </summary>
            <div class="p-qa__inner js-content">
              <div class="p-qa__wrap">
                <div class="p-qa__content p-qa__content--open01">
                  <p class="p-qa__txt">ぜひ事前相談をお勧めいたします。</p>
                  <p class="p-qa__txt">葬儀は人生で最も大切な決断の一つです。どんな住職に葬儀をしてもらうのか、どんなお堂で大切な人を送るか、できる限り事前にご確認いただきたいと思います。</p>
                  <p class="p-qa__txt">住職が直接お堂をご案内し、葬儀の流れや本堂の雰囲気を実際にご覧いただけます。ご不安な点やご質問など、どんなことでもお気軽にお聞かせください。電話やフォームからもご相談いただけます。</p>
                </div>
              </div>
            </div>
          </details>
          <details class="p-qa__content js-details fadein">
            <summary class="p-qa__summary js-summary">
              <p class="p-qa__q">Q.</p>
              <h3 class="p-qa__ttl">
                お寺へのお布施は別に必要ですか？
              </h3>
            </summary>
            <div class="p-qa__inner js-content">
              <div class="p-qa__wrap">
                <div class="p-qa__content p-qa__content--open01">
                  <p class="p-qa__txt">ぜひ事前相談をお勧めいたします。</p>
                  <p class="p-qa__txt">葬儀は人生で最も大切な決断の一つです。どんな住職に葬儀をしてもらうのか、どんなお堂で大切な人を送るか、できる限り事前にご確認いただきたいと思います。</p>
                  <p class="p-qa__txt">住職が直接お堂をご案内し、葬儀の流れや本堂の雰囲気を実際にご覧いただけます。ご不安な点やご質問など、どんなことでもお気軽にお聞かせください。電話やフォームからもご相談いただけます。</p>
                </div>
              </div>
            </div>
          </details>
          <details class="p-qa__content js-details fadein">
            <summary class="p-qa__summary js-summary">
              <p class="p-qa__q">Q.</p>
              <h3 class="p-qa__ttl">
                事前相談はできますか？
              </h3>
            </summary>
            <div class="p-qa__inner js-content">
              <div class="p-qa__wrap">
                <div class="p-qa__content p-qa__content--open01">
                  <p class="p-qa__txt">ぜひ事前相談をお勧めいたします。</p>
                  <p class="p-qa__txt">葬儀は人生で最も大切な決断の一つです。どんな住職に葬儀をしてもらうのか、どんなお堂で大切な人を送るか、できる限り事前にご確認いただきたいと思います。</p>
                  <p class="p-qa__txt">住職が直接お堂をご案内し、葬儀の流れや本堂の雰囲気を実際にご覧いただけます。ご不安な点やご質問など、どんなことでもお気軽にお聞かせください。電話やフォームからもご相談いただけます。</p>
                </div>
              </div>
            </div>
          </details>
          <details class="p-qa__content js-details fadein">
            <summary class="p-qa__summary js-summary">
              <p class="p-qa__q">Q.</p>
              <h3 class="p-qa__ttl">
                亡くなったらまず、どうすればいいですか？
              </h3>
            </summary>
            <div class="p-qa__inner js-content">
              <div class="p-qa__wrap">
                <div class="p-qa__content p-qa__content--open01">
                  <p class="p-qa__txt">ぜひ事前相談をお勧めいたします。</p>
                  <p class="p-qa__txt">葬儀は人生で最も大切な決断の一つです。どんな住職に葬儀をしてもらうのか、どんなお堂で大切な人を送るか、できる限り事前にご確認いただきたいと思います。</p>
                  <p class="p-qa__txt">住職が直接お堂をご案内し、葬儀の流れや本堂の雰囲気を実際にご覧いただけます。ご不安な点やご質問など、どんなことでもお気軽にお聞かせください。電話やフォームからもご相談いただけます。</p>
                </div>
              </div>
            </div>
          </details>
          <details class="p-qa__content js-details fadein">
            <summary class="p-qa__summary js-summary">
              <p class="p-qa__q">Q.</p>
              <h3 class="p-qa__ttl">
                誰が搬送や納棺をしますか？
              </h3>
            </summary>
            <div class="p-qa__inner js-content">
              <div class="p-qa__wrap">
                <div class="p-qa__content p-qa__content--open01">
                  <p class="p-qa__txt">ぜひ事前相談をお勧めいたします。</p>
                  <p class="p-qa__txt">葬儀は人生で最も大切な決断の一つです。どんな住職に葬儀をしてもらうのか、どんなお堂で大切な人を送るか、できる限り事前にご確認いただきたいと思います。</p>
                  <p class="p-qa__txt">住職が直接お堂をご案内し、葬儀の流れや本堂の雰囲気を実際にご覧いただけます。ご不安な点やご質問など、どんなことでもお気軽にお聞かせください。電話やフォームからもご相談いただけます。</p>
                </div>
              </div>
            </div>
          </details>
          <details class="p-qa__content js-details fadein">
            <summary class="p-qa__summary js-summary">
              <p class="p-qa__q">Q.</p>
              <h3 class="p-qa__ttl">
                事情があり、通夜を行わず1日だけで費用を抑えたいのですが…。
              </h3>
            </summary>
            <div class="p-qa__inner js-content">
              <div class="p-qa__wrap">
                <div class="p-qa__content p-qa__content--open01">
                  <p class="p-qa__txt">ぜひ事前相談をお勧めいたします。</p>
                  <p class="p-qa__txt">葬儀は人生で最も大切な決断の一つです。どんな住職に葬儀をしてもらうのか、どんなお堂で大切な人を送るか、できる限り事前にご確認いただきたいと思います。</p>
                  <p class="p-qa__txt">住職が直接お堂をご案内し、葬儀の流れや本堂の雰囲気を実際にご覧いただけます。ご不安な点やご質問など、どんなことでもお気軽にお聞かせください。電話やフォームからもご相談いただけます。</p>
                </div>
              </div>
            </div>
          </details>
          <details class="p-qa__content js-details fadein">
            <summary class="p-qa__summary js-summary">
              <p class="p-qa__q">Q.</p>
              <h3 class="p-qa__ttl">
                お寺の檀家でなくても利用できますか？ 宗旨宗派は問われますか？
              </h3>
            </summary>
            <div class="p-qa__inner js-content">
              <div class="p-qa__wrap">
                <div class="p-qa__content p-qa__content--open01">
                  <p class="p-qa__txt">ぜひ事前相談をお勧めいたします。</p>
                  <p class="p-qa__txt">葬儀は人生で最も大切な決断の一つです。どんな住職に葬儀をしてもらうのか、どんなお堂で大切な人を送るか、できる限り事前にご確認いただきたいと思います。</p>
                  <p class="p-qa__txt">住職が直接お堂をご案内し、葬儀の流れや本堂の雰囲気を実際にご覧いただけます。ご不安な点やご質問など、どんなことでもお気軽にお聞かせください。電話やフォームからもご相談いただけます。</p>
                </div>
              </div>
            </div>
          </details>
          <details class="p-qa__content js-details fadein">
            <summary class="p-qa__summary js-summary">
              <p class="p-qa__q">Q.</p>
              <h3 class="p-qa__ttl">
                戒名は授かれますか？
              </h3>
            </summary>
            <div class="p-qa__inner js-content">
              <div class="p-qa__wrap">
                <div class="p-qa__content p-qa__content--open01">
                  <p class="p-qa__txt">ぜひ事前相談をお勧めいたします。</p>
                  <p class="p-qa__txt">葬儀は人生で最も大切な決断の一つです。どんな住職に葬儀をしてもらうのか、どんなお堂で大切な人を送るか、できる限り事前にご確認いただきたいと思います。</p>
                  <p class="p-qa__txt">住職が直接お堂をご案内し、葬儀の流れや本堂の雰囲気を実際にご覧いただけます。ご不安な点やご質問など、どんなことでもお気軽にお聞かせください。電話やフォームからもご相談いただけます。</p>
                </div>
              </div>
            </div>
          </details>
          <details class="p-qa__content js-details fadein">
            <summary class="p-qa__summary js-summary">
              <p class="p-qa__q">Q.</p>
              <h3 class="p-qa__ttl">
                葬儀後の法要や永代供養もお願いできますか？
              </h3>
            </summary>
            <div class="p-qa__inner js-content">
              <div class="p-qa__wrap">
                <div class="p-qa__content p-qa__content--open01">
                  <p class="p-qa__txt">ぜひ事前相談をお勧めいたします。</p>
                  <p class="p-qa__txt">葬儀は人生で最も大切な決断の一つです。どんな住職に葬儀をしてもらうのか、どんなお堂で大切な人を送るか、できる限り事前にご確認いただきたいと思います。</p>
                  <p class="p-qa__txt">住職が直接お堂をご案内し、葬儀の流れや本堂の雰囲気を実際にご覧いただけます。ご不安な点やご質問など、どんなことでもお気軽にお聞かせください。電話やフォームからもご相談いただけます。</p>
                </div>
              </div>
            </div>
          </details>
          <details class="p-qa__content p-qa__content--last js-details fadein">
            <summary class="p-qa__summary js-summary">
              <p class="p-qa__q">Q.</p>
              <h3 class="p-qa__ttl">
                直葬（火葬のみ）で済ませましたが、やはり葬儀をしてあげたいです。
              </h3>
            </summary>
            <div class="p-qa__inner js-content">
              <div class="p-qa__wrap">
                <div class="p-qa__content p-qa__content--open01">
                  <p class="p-qa__txt">ぜひ事前相談をお勧めいたします。</p>
                  <p class="p-qa__txt">葬儀は人生で最も大切な決断の一つです。どんな住職に葬儀をしてもらうのか、どんなお堂で大切な人を送るか、できる限り事前にご確認いただきたいと思います。</p>
                  <p class="p-qa__txt">住職が直接お堂をご案内し、葬儀の流れや本堂の雰囲気を実際にご覧いただけます。ご不安な点やご質問など、どんなことでもお気軽にお聞かせください。電話やフォームからもご相談いただけます。</p>
                </div>
              </div>
            </div>
          </details>

        </div>
      </div>
    </section>
    <section class="p-temple" id="temple">
      <div class="l-inner">
        <div class="p-temple__title fadein">
          <span class="c-section-title--small">運営寺院</span>
          <h2 class="c-section-title">ご<span class="c-section-title--red">縁</span>あってこのページを<br class="u-mobile">ご覧の皆さまへ</h2>
        </div>
        <div class="p-temple__content">
          <div class="p-temple__row fadein">
            <figure class="p-temple__img">
              <img decoding="async" loading="lazy" src="/images/common/temple_img.jpg" alt="寺葬のお寺" width="1000" height="667">
            </figure>
            <div class="p-temple__text-wrapper">
              <p class="p-temple__text">突然のご逝去に、気持ちも段取りも追いつかない——<br>
                その不安や戸惑いを、私は何度もご家族のそばで見てきました。<br>
                お葬式は、故人さまを「霊山浄土」へお送りする大切な儀式であると同時に、残された私たちが“いまをどう生きるか”を受け止めるための時間でもあります。<br class="u-desktop">
                だからこそ、難しい手配や費用に関する心配で、その大切なひとときを曇らせてほしくありません。その想いを形にしたのが、私どもの「お寺葬」です。</p>
              <p class="p-temple__text">本堂という祈りの場で、心静かに故人さまと向き合い、お見送りいただけるよう、必要なご用意はお寺が窓口となって一つに整えます。</p>
            </div>

          </div>
          <div class="p-temple__bottomText-wrapper fadein">
            <p class="p-temple__text">お迎え・ご安置から、祭壇やお花、遺影写真の準備、通夜・葬儀・初七日のお勤めまで——<br>複雑な費用計算に悩まされることなく、明確な一つのご布施で必要なものを全て整えさせていただきます。流れを最初に丁寧にご説明し、あとから迷いが生じないよう、住職が終始伴走いたします。</p>
            <p class="p-temple__text">手配に追われることなく、ただ故人さまとの思い出を語り合う。<br class="u-desktop">
              気兼ねなく、心からの「ありがとう」を伝える。</p>
            <p class="p-temple__text">家族葬という温かな輪の中で、「いのち」のつながりと「ご縁」の尊さを、静かに見つめ直すお手伝いをいたします。<br>
              宗旨・宗派は問いません。檀家でない方もどうぞご安心ください。<br>
              まずはどんなことでもご相談ください。私どもが誠心誠意、寄り添ってまいります。</p>
          </div>
          <div class="p-temple__text-right fadein">
            <p class="p-temple__text">合掌<br>長光寺 住職 小島 一洋</p>
          </div>
          <dl class="p-temple__dl fadein">
            <div class="p-temple__dlRow">
              <dt class="p-temple__dt">名称</dt>
              <dd class="p-temple__dd">日蓮宗 明玉山 長光寺</dd>
            </div>
            <div class="p-temple__dlRow">
              <dt class="p-temple__dt">代表役員（住職）</dt>
              <dd class="p-temple__dd">小島 一洋</dd>
            </div>
            <div class="p-temple__dlRow">
              <dt class="p-temple__dt">所在地</dt>
              <dd class="p-temple__dd">〒386-0403 長野県上田市腰越1530 [<a href="https://maps.app.goo.gl/S45xouzW35ouRyEFA" target="_blank" rel="noopener noreferrer">地図</a>]</dd>
            </div>
            <div class="p-temple__dlRow">
              <dt class="p-temple__dt">アクセス</dt>
              <dd class="p-temple__dd">
                <p class="p-temple__dd-text">北陸新幹線「上田駅」より車で約30分</p>
                <p class="p-temple__dd-text">上信越自動車道「東部湯の丸IC」より車で約30分</p>
              </dd>
            </div>
            <div class="p-temple__dlRow">
              <dt class="p-temple__dt">開創</dt>
              <dd class="p-temple__dd">明治23年</dd>
            </div>
            <div class="p-temple__dlRow">
              <dt class="p-temple__dt">連絡先</dt>
              <dd class="p-temple__dd">TEL：<a class="p-temple__dd-tel" href="tel:0268-42-2975">0268-42-2975</a><br>公式HP：<a class="p-temple__dd-link" href="https://m-chokoji.com" target="_blank" rel="noopener noreferrer">https://m-chokoji.com</a></dd>
            </div>
            <div class="p-temple__dlRow">
              <dt class="p-temple__dt">アクセス</dt>
              <dd class="p-temple__dd">
                <p class="p-temple__dd-text">葬儀・法事</p>
                <p class="p-temple__dd-text">墓地・永代供養</p>
                <p class="p-temple__dd-text">水子供養・ペット供養</p>
                <p class="p-temple__dd-text">お焚き上げ</p>
                <p class="p-temple__dd-text">各種御祈祷・御祈願 など</p>
              </dd>
            </div>
          </dl>
        </div>
      </div>
    </section>
    <section class="p-area" id="area">
      <div class="l-inner">
        <div class="p-area__content">
          <div class="p-area__detail">
            <div class="p-area__title fadein">
              <span class="c-section-title--small">対応エリア</span>
              <h2 class="c-section-title">長野県・<span class="c-section-title--red">東信</span>エリアに対応</h2>
            </div>
            <div class="p-area__text-wrapper fadein">
              <p class="p-area__text">長野県上田市を拠点に「東信エリア」に対応しております。<br>
                エリア外のご相談者様も長野県内でしたら柔軟に対応いたします。</p>
              <p class="p-area__text">上田市、東御市、佐久市、小諸市、坂城町、青木村、長和町、軽井沢町、御代田町、立科町、小海町、川上村、南牧村、南相木村、北相木村、佐久穂町など</p>
            </div>
          </div>
          <figure class="p-area__img fadein">
            <img decoding="async" loading="lazy" src="/images/common/area_img.png" alt="長野県・東信エリア" width="650" height="400">
          </figure>
        </div>
      </div>
    </section>
    <section class="p-contact" id="form">
      <div class="l-inner">
        <div class="p-contact__content">
          <div class="p-contact__title fadein">
            <span class="c-section-title--small">お問い合わせ</span>
            <h2 class="c-section-title">ご相談は<span class="c-section-title--red">無料</span>。<br class="u-mobile">お気軽にお問い合わせください</h2>
          </div>
          <p class="p-contact__top-text fadein">この度はご訪問いただき、誠にありがとうございました。<br class="u-desktop">
            改めて当寺院よりご連絡差し上げますので、下記フォームよりお問い合わせ内容をお送りください。<br>
            <span>お急ぎ方や直接のご相談をご希望される方はお電話でも承っております。</span>
          </p>
          <div class="p-contact__tel-wrapper fadein">
            <div class="p-contact__tel-block">
              <div class="p-contact__tel-logo">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="26px" height="26px">
                  <path fill-rule="evenodd" fill="rgb(153, 0, 0)"
                    d="M23.946,17.117 C22.342,17.117 20.771,16.868 19.282,16.376 C18.555,16.125 17.730,16.318 17.252,16.806 L14.300,19.035 C10.913,17.227 8.745,15.060 6.962,11.698 L9.132,8.816 C9.677,8.270 9.873,7.470 9.639,6.722 C9.144,5.224 8.892,3.651 8.892,2.049 C8.892,0.918 7.971,-0.003 6.839,-0.003 L2.049,-0.003 C0.917,-0.003 -0.004,0.918 -0.004,2.049 C-0.004,15.255 10.740,25.999 23.946,25.999 C25.078,25.999 25.999,25.078 25.999,23.947 L25.999,19.171 C25.999,18.039 25.078,17.117 23.946,17.117 Z" />
                </svg>
              </div>
              <div class="p-contact__num-wrapper">
                <a href="tel:0268-42-2975" class="p-contact__num">0268-42-2975</a>
              </div>
            </div>
            <p class="p-contact__num-text">24時間365日対応</p>
          </div>

          <form method="post" name="cform" action="#form" class="p-contact__form">
            <div class="form_block">
              <table class="p-contact__table">
                <tr>
                  <th class="ne ne--kind"><b>お問い合わせ種別</b></th>
                  <td class="input2">
                    <ul>
                      <li><input type="checkbox" name="kind1" value="1" id="kind1" <?= rc_check('kind1', 1); ?> /><label for="kind1" class="checkbox"><?= $kindlist[1]; ?></label></li>
                      <li><input type="checkbox" name="kind2" value="1" id="kind2" <?= rc_check('kind2', 1); ?> /><label for="kind2" class="checkbox"><?= $kindlist[2]; ?></label></li>
                      <li><input type="checkbox" name="kind3" value="1" id="kind3" <?= rc_check('kind3', 1); ?> /><label for="kind3" class="checkbox"><?= $kindlist[3]; ?></label></li>
                      <li><input type="checkbox" name="kind4" value="1" id="kind4" <?= rc_check('kind4', 1); ?> /><label for="kind4" class="checkbox"><?= $kindlist[4]; ?></label></li>
                    </ul>
                    <?= error_check($errors, 'kind'); ?>

                  </td>
                </tr>
                <tr>
                  <th class="ne"><b>お名前</b></th>
                  <td class="input">
                    <p class="tdline"><input type="text" name="name" value="<?= value_check('name'); ?>" placeholder="例：長光 太郎" class="input100"></p>
                    <?= error_check($errors, 'name'); ?>

                  </td>
                </tr>
                <tr>
                  <th class="ne"><b>電話番号</b></th>
                  <td class="input">
                    <p class="tdline"><input type="text" name="tel" value="<?= value_check('tel'); ?>" placeholder="例：09012345678" class="input100"></p>
                    <?= error_check($errors, 'tel'); ?>
                  </td>
                </tr>
                <tr>
                  <th class="ne"><b>メールアドレス</b></th>
                  <td class="input">
                    <p class="tdline tdline__required"><input type="text" name="email" value="<?= value_check('email'); ?>" placeholder="例：info@m-chokoji.com（半角英数）" class="input100"></p>
                    <?= error_check($errors, 'email'); ?>

                    <p class="tdline"><input type="text" name="emailcheck" value="<?= value_check('emailcheck'); ?>" placeholder="確認のため再度入力してください。" class="input100"></p>
                    <?= error_check($errors, 'emailcheck'); ?>
                  </td>
                </tr>

                <tr>
                  <th><b>お問い合わせ内容</b></th>
                  <td class="input">
                    <div class="tdline">
                      <textarea name="message" class="tarea100"><?= value_check('message'); ?></textarea>
                    </div>
                  </td>
                </tr>
              </table>
            </div>

            <p class="checkbox">
              当サイトの「お問い合わせ」をご利用いただいた際に、お客様の個人情報の取扱いを行いますが、<br class="pc" />そのお客様の個人情報を、お客様の同意なしに第三者に開示することはありません。<br class="pc" />送信後、送信完了メールを記載いただいたメールアドレスに自動送信いたします。
            </p>

            <div class="btn_block fade op">
              <p class="confirm"><a href="javascript:document.cform.submit();">確認する</a></p>
            </div>
            <input type="hidden" name="ch_token" value="<?= $_SESSION['token']; ?>" />
            <input type="hidden" name="mode" value="next" />
          </form>
        </div>
      </div>
    </section>

  </main>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>