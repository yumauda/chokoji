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
  if (empty($_POST['kind1']) && empty($_POST['kind2']) && empty($_POST['kind3'])) {
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

  <main>
    <section class="p-mv">
      <div class="l-inner">
        <!-- Slider main container -->
        <div class="p-mv__content">

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
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
          </div>
        </div>
      </div>
    </section>
    <section class="p-about">
      <div class="l-inner">
        <div class="p-about__content">
          <div class="p-about__title">
            <span class="c-section-title--small">お寺葬とは</span>
            <h3 class="c-section-title">お寺が主体となって執り行う、<span class="c-section-title--red">温</span>かい家族葬</h3>
          </div>
          <div class="p-about__text-wrapper">
            <p class="p-about__text">お寺葬とは、伝統と格式を重視したお寺の本堂にて執り行う葬儀のことです。<br>
              長光寺では、お寺と住職が主体となり、ご相談から葬儀当日、その後のご供養まで一貫して寄り添います。<br>
              お迎え・ご安置・役所手続きなど専門的な部分は、長年連携している信頼できる葬儀スタッフが担当。<br>
              「必要なことだけを、正直な費用で」お見送りいたします。不要なオプションの押しつけは一切ありません。</p>
          </div>
        </div>
      </div>
    </section>
    <section class="p-feature">
      <div class="l-inner">
        <div class="p-feature__content">
          <div class="p-feature__title">
            <span class="c-section-title--small">5つの特徴</span>
            <h3 class="c-section-title">長光寺お寺葬 <span class="c-section-title--big">5つの特徴</span></h3>
          </div>
          <ul class="p-feature__grid">
            <li class="p-feature__grid-list" data-number="1">
              <figure class="p-feature__img">
                <img decoding="async" loading="lazy" src="/images/common/feature_1.jpg" alt="" width="740" height="500">
              </figure>
              <div class="p-feature__detail">
                <h4 class="p-feature__text-title">住職が主体だから<br>どこまでも安心</h4>
                <div class="p-feature__text-wrapper">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="17px" height="14px">
                    <path fill-rule="evenodd" fill="rgb(255, 255, 204)"
                      d="M5.191,10.816 C6.680,8.621 12.153,2.972 16.691,0.038 C16.884,-0.086 17.102,0.158 16.942,0.320 C12.630,4.688 8.021,9.630 5.374,13.902 C5.300,14.021 5.122,14.026 5.045,13.909 C3.713,11.884 2.571,8.975 0.122,8.083 C-0.060,8.017 -0.042,7.770 0.147,7.727 C2.493,7.184 3.593,9.109 5.191,10.816 L5.191,10.816 L5.191,10.816 Z" />
                  </svg>
                  <p class="p-feature__text">営業担当者ではなく、住職自らがご相談から葬儀後まで責任を持って対応します。</p>
                </div>
                <div class="p-feature__text-wrapper">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="17px" height="14px">
                    <path fill-rule="evenodd" fill="rgb(255, 255, 204)"
                      d="M5.191,10.816 C6.680,8.621 12.153,2.972 16.691,0.038 C16.884,-0.086 17.102,0.158 16.942,0.320 C12.630,4.688 8.021,9.630 5.374,13.902 C5.300,14.021 5.122,14.026 5.045,13.909 C3.713,11.884 2.571,8.975 0.122,8.083 C-0.060,8.017 -0.042,7.770 0.147,7.727 C2.493,7.184 3.593,9.109 5.191,10.816 L5.191,10.816 L5.191,10.816 Z" />
                  </svg>
                  <p class="p-feature__text">不要な営業一切行いません。本当に必要なものだけをご提案。ご家族の心に寄り添います。</p>
                </div>
              </div>
            </li>
            <li class="p-feature__grid-list p-feature__detail--white" data-number="2">
              <figure class="p-feature__img">
                <img decoding="async" loading="lazy" src="/images/common/feature_2.jpg" alt="" width="740" height="500">
              </figure>
              <div class="p-feature__detail">
                <h4 class="p-feature__text-title">必要な費用だけを<br>わかりやすく</h4>

                <div class="p-feature__text-wrapper">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="17px" height="14px">
                    <path fill-rule="evenodd" fill="#990000"
                      d="M5.191,10.816 C6.680,8.621 12.153,2.972 16.691,0.038 C16.884,-0.086 17.102,0.158 16.942,0.320 C12.630,4.688 8.021,9.630 5.374,13.902 C5.300,14.021 5.122,14.026 5.045,13.909 C3.713,11.884 2.571,8.975 0.122,8.083 C-0.060,8.017 -0.042,7.770 0.147,7.727 C2.493,7.184 3.593,9.109 5.191,10.816 L5.191,10.816 L5.191,10.816 Z" />
                  </svg>
                  <p class="p-feature__text">長光寺が直接お受けします。紹介手数料などの上乗せ費用はいただきません。</p>
                </div>
                <div class="p-feature__text-wrapper">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="17px" height="14px">
                    <path fill-rule="evenodd" fill="#990000"
                      d="M5.191,10.816 C6.680,8.621 12.153,2.972 16.691,0.038 C16.884,-0.086 17.102,0.158 16.942,0.320 C12.630,4.688 8.021,9.630 5.374,13.902 C5.300,14.021 5.122,14.026 5.045,13.909 C3.713,11.884 2.571,8.975 0.122,8.083 C-0.060,8.017 -0.042,7.770 0.147,7.727 C2.493,7.184 3.593,9.109 5.191,10.816 L5.191,10.816 L5.191,10.816 Z" />
                  </svg>
                  <p class="p-feature__text">お布施込みの総額提示をさせていただきます。後から高額な請求が来る心配はありません。</p>
                </div>
              </div>
            </li>
            <li class="p-feature__grid-list" data-number="3">
              <figure class="p-feature__img">
                <img decoding="async" loading="lazy" src="/images/common/feature_3.jpg" alt="" width="740" height="500">
              </figure>
              <div class="p-feature__detail">
                <h4 class="p-feature__text-title">由緒ある本堂で<br>心安らぐ葬送</h4>
                <div class="p-feature__text-wrapper">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="17px" height="14px">
                    <path fill-rule="evenodd" fill="rgb(255, 255, 204)"
                      d="M5.191,10.816 C6.680,8.621 12.153,2.972 16.691,0.038 C16.884,-0.086 17.102,0.158 16.942,0.320 C12.630,4.688 8.021,9.630 5.374,13.902 C5.300,14.021 5.122,14.026 5.045,13.909 C3.713,11.884 2.571,8.975 0.122,8.083 C-0.060,8.017 -0.042,7.770 0.147,7.727 C2.493,7.184 3.593,9.109 5.191,10.816 L5.191,10.816 L5.191,10.816 Z" />
                  </svg>
                  <p class="p-feature__text">本堂を利用した厳かで心安らぐ空間です。貸しホールにはない、由緒正しき荘厳な本堂でお見送りできます。</p>
                </div>
                <div class="p-feature__text-wrapper">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="17px" height="14px">
                    <path fill-rule="evenodd" fill="rgb(255, 255, 204)"
                      d="M5.191,10.816 C6.680,8.621 12.153,2.972 16.691,0.038 C16.884,-0.086 17.102,0.158 16.942,0.320 C12.630,4.688 8.021,9.630 5.374,13.902 C5.300,14.021 5.122,14.026 5.045,13.909 C3.713,11.884 2.571,8.975 0.122,8.083 C-0.060,8.017 -0.042,7.770 0.147,7.727 C2.493,7.184 3.593,9.109 5.191,10.816 L5.191,10.816 L5.191,10.816 Z" />
                  </svg>
                  <p class="p-feature__text">寺院には十分な設備がそなわっております。本堂収容人数：最大40名様、駐車場完備：30台</p>
                </div>
              </div>
            </li>
          </ul>
          <ul class="p-feature__flex">
            <li class="p-feature__grid-list p-feature__detail--white" data-number="4">
              <figure class="p-feature__img">
                <img decoding="async" loading="lazy" src="/images/common/feature_4.jpg" alt="" width="740" height="500">
              </figure>
              <div class="p-feature__detail">
                <h4 class="p-feature__text-title">宗旨宗派不問<br>どなたでもご利用可能</h4>
                <div class="p-feature__text-wrapper">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="17px" height="14px">
                    <path fill-rule="evenodd" fill="rgb(255, 255, 204)"
                      d="M5.191,10.816 C6.680,8.621 12.153,2.972 16.691,0.038 C16.884,-0.086 17.102,0.158 16.942,0.320 C12.630,4.688 8.021,9.630 5.374,13.902 C5.300,14.021 5.122,14.026 5.045,13.909 C3.713,11.884 2.571,8.975 0.122,8.083 C-0.060,8.017 -0.042,7.770 0.147,7.727 C2.493,7.184 3.593,9.109 5.191,10.816 L5.191,10.816 L5.191,10.816 Z" />
                  </svg>
                  <p class="p-feature__text">宗旨宗派を問わず、どなたでもご利用いただけます。</p>
                </div>
                <div class="p-feature__text-wrapper">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="17px" height="14px">
                    <path fill-rule="evenodd" fill="#990000"
                      d="M5.191,10.816 C6.680,8.621 12.153,2.972 16.691,0.038 C16.884,-0.086 17.102,0.158 16.942,0.320 C12.630,4.688 8.021,9.630 5.374,13.902 C5.300,14.021 5.122,14.026 5.045,13.909 C3.713,11.884 2.571,8.975 0.122,8.083 C-0.060,8.017 -0.042,7.770 0.147,7.727 C2.493,7.184 3.593,9.109 5.191,10.816 L5.191,10.816 L5.191,10.816 Z" />
                  </svg>
                  <p class="p-feature__text">檀家になる必要はありません。葬儀後の関係も、ご家族のご希望を尊重します。</p>
                </div>
              </div>
            </li>
            <li class="p-feature__grid-list" data-number="5">
              <figure class="p-feature__img">
                <img decoding="async" loading="lazy" src="/images/common/feature_5.jpg" alt="" width="740" height="500">
              </figure>
              <div class="p-feature__detail">
                <h4 class="p-feature__text-title">葬儀後も続く<br>末永いお付き合い</h4>
                <div class="p-feature__text-wrapper">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="17px" height="14px">
                    <path fill-rule="evenodd" fill="rgb(255, 255, 204)"
                      d="M5.191,10.816 C6.680,8.621 12.153,2.972 16.691,0.038 C16.884,-0.086 17.102,0.158 16.942,0.320 C12.630,4.688 8.021,9.630 5.374,13.902 C5.300,14.021 5.122,14.026 5.045,13.909 C3.713,11.884 2.571,8.975 0.122,8.083 C-0.060,8.017 -0.042,7.770 0.147,7.727 C2.493,7.184 3.593,9.109 5.191,10.816 L5.191,10.816 L5.191,10.816 Z" />
                  </svg>
                  <p class="p-feature__text">葬儀から永代供養まで一貫対応。葬儀後の法要や納骨も、すべて長光寺が責任を持ってサポートします。</p>
                </div>

              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="p-plan">
      <div class="l-inner">
        <div class="p-plan__content">
          <div class="p-plan__title">
            <span class="c-section-title--small">葬儀プラン</span>
            <h3 class="c-section-title">余分な費用をかけず、本当に<span class="c-section-title--red">必</span>要なことだけを選んだプラン</h3>
          </div>
          <div class="p-plan__anchor">
            <a href="#plan1" class="p-plan__anchor-link">
              <figure class="p-plan__anchor-img">
                <img decoding="async" loading="lazy" src="/images/common/plan_img1.jpg" alt="お寺葬基本プラン" width="370" height="250">
              </figure>
              <div class="p-plan__anchor-detail">
                <h4 class="p-plan__anchor-title">お寺葬基本プラン</h4>
                <p class="p-plan__anchor-price">500,000<span class="p-plan__anchor-price-unit">円</span><span class="p-plan__anchor-price-tax">(税込)</span></p>
                <p class="p-plan__anchor-text">お通夜・ご葬儀（初七日）と二日間かけて執り行います。お寺葬の基本的な葬儀プランです。</p>
              </div>
            </a>
            <a href="#plan2" class="p-plan__anchor-link">
              <figure class="p-plan__anchor-img">
                <img decoding="async" loading="lazy" src="/images/common/plan_img2.jpg" alt="永代供養付プラン" width="370" height="250">
              </figure>
              <div class="p-plan__anchor-detail">
                <h4 class="p-plan__anchor-title">永代供養付プラン</h4>
                <p class="p-plan__anchor-price">650,000<span class="p-plan__anchor-price-unit">円</span><span class="p-plan__anchor-price-tax">(税込)</span></p>
                <p class="p-plan__anchor-text">お寺葬基本プランに永代供養を付けたプランです。お通夜・ご葬儀・四十九日法要・納骨式を三日間かけて執り行います。</p>
              </div>
            </a>
          </div>
          <div class="p-plan__block-wrapper">
            <div class="p-plan__block">
              <div class="p-plan__row">
                <figure class="p-plan__img">
                  <img decoding="async" loading="lazy" src="/images/common/plan_img3.jpg" alt="お寺葬基本プラン" width="740" height="500">
                </figure>
                <div class="p-plan__detail">
                  <h4 class="p-plan__detail-title">お寺葬基本プラン</h4>
                  <p class="p-plan__price">500,000<span class="p-plan__price-unit">円</span><span class="p-plan__price-tax">(税込)</span></p>
                  <p class="p-plan__number">参加者数目安：～30名程度</p>
                  <p class="p-plan__text">お寺葬の基本的な葬儀プランです。<br>
                    お通夜・ご葬儀（初七日）と二日間かけて執り行います。<br>
                    戒名授与も含まれます。</p>
                  <figure class="p-plan__flow p-plan__flow--1">
                    <img decoding="async" loading="lazy" src="/images/common/plan_flow1.png" alt="お寺葬基本プラン" width="300" height="130">
                  </figure>
                </div>
              </div>
              <div class="p-plan__kind-wrapper">
                <div class="p-plan__kind">
                  <p class="p-plan__kind-text">プランに含まれるもの</p>
                  <ul class="p-plan__lists">

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
                  <p class="p-plan__kind-text">オプションサービス</p>
                  <ul class="p-plan__lists">
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan19.jpg" alt="" width="120" height="120">
                      </figure>
                    </li>
                    <li class="p-plan__list">
                      <figure class="p-plan__list-img">
                        <img decoding="async" loading="lazy" src="/images/common/plan20.jpg" alt="" width="120" height="120">
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
            <div class="p-plan__block">
              <div class="p-plan__row">
                <figure class="p-plan__img">
                  <img decoding="async" loading="lazy" src="/images/common/plan_img4.jpg" alt="永代供養付プラン" width="740" height="500">
                </figure>
                <div class="p-plan__detail">
                  <h4 class="p-plan__detail-title">永代供養付プラン</h4>
                  <p class="p-plan__price">650,000<span class="p-plan__price-unit">円</span><span class="p-plan__price-tax">(税込)</span></p>
                  <p class="p-plan__number">参加者数目安：～30名程度</p>
                  <p class="p-plan__text">お寺葬基本プランに永代供養を付けたプランです。<br>
                    お通夜・ご葬儀・四十九日法要・納骨式を三日間かけて執り行います。戒名授与も含まれます。</p>
                  <figure class="p-plan__flow p-plan__flow--2">
                    <img decoding="async" loading="lazy" src="/images/common/plan_flow2.png" alt="永代供養付プラン" width="300" height="130">
                  </figure>
                </div>
              </div>
              <div class="p-plan__kind-wrapper">
                <div class="p-plan__kind">
                  <p class="p-plan__kind-text">プランに含まれるもの</p>
                  <ul class="p-plan__lists">

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
                  <p class="p-plan__kind-text">オプションサービス</p>
                  <ul class="p-plan__lists">
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
    <section class="p-habits">
      <div class="l-inner">
        <div class="p-habits__content">
          <div class="p-habits__title">
            <span class="c-section-title--small">永代供養</span>
            <h3 class="c-section-title">個別安置の<span class="c-section-title--red">永</span>代供養も承ります</h3>
          </div>
          <div class="p-habits__text-wrapper">
            <p class="p-habits__text">永代供養とはお寺に供養を託すことです。<br>
              色々なご事情でお墓を管理していくことが難しい方、お墓を建立することが難しい方など当寺に供養を託してください。<br>
              永代過去帳に名を残し、生きた証として永代に渡り、当寺で責任を持って供養し続けます。</p>
          </div>
          <ul class="p-habits__lists">
            <li class="p-habits__list">
              <figure class="p-habits__img p-habits__img--1">
                <img decoding="async" loading="lazy" src="/images/common/habits_1.png" alt="全て個別安置" width="431" height="38">
              </figure>
              <div class="p-habits__detail">
                <h4 class="p-habits__detail-title">全て個別安置</h4>
                <p class="p-habits__detail-text">他の方と一緒にならない個別納骨です。</p>
              </div>
            </li>
            <li class="p-habits__list">
              <figure class="p-habits__img p-habits__img--1">
                <img decoding="async" loading="lazy" src="/images/common/habits_2.png" alt="20年間個別安置" width="431" height="38">
              </figure>
              <div class="p-habits__detail">
                <h4 class="p-habits__detail-title">20年間個別安置</h4>
                <p class="p-habits__detail-text">20年後で合祀いたします。（ご希望により延長可能）</p>
              </div>
            </li>
            <li class="p-habits__list">
              <figure class="p-habits__img p-habits__img--1">
                <img decoding="async" loading="lazy" src="/images/common/habits_3.png" alt="宗旨宗派不問" width="431" height="38">
              </figure>
              <div class="p-habits__detail">
                <h4 class="p-habits__detail-title">宗旨宗派不問</h4>
                <p class="p-habits__detail-text">宗旨宗派は問いません。どなたでもご利用可能です。</p>
              </div>
            </li>
            <li class="p-habits__list">
              <figure class="p-habits__img p-habits__img--4">
                <img decoding="async" loading="lazy" src="/images/common/habits_4.png" alt="全て個別安置" width="431" height="38">
              </figure>
              <div class="p-habits__detail">
                <h4 class="p-habits__detail-title">年2回の合同供養</h4>
                <p class="p-habits__detail-text">春彼岸・お盆に丁重に供養いたします。</p>
              </div>
            </li>
            <li class="p-habits__list">
              <figure class="p-habits__img p-habits__img--1">
                <img decoding="async" loading="lazy" src="/images/common/habits_5.png" alt="全て個別安置" width="431" height="38">
              </figure>
              <div class="p-habits__detail">
                <h4 class="p-habits__detail-title">毎日の墓前供養</h4>
                <p class="p-habits__detail-text">住職による朝夕の墓前供養を行います。</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="p-flow">
      <div class="l-inner">
        <div class="p-flow__content">
          <div class="p-flow__title">
            <span class="c-section-title--small">ご葬儀の流れ</span>
            <h3 class="c-section-title">もしもの時に備えて事<span class="c-section-title--red">前</span>相談が安心です</h3>
          </div>
          <div class="p-flow__text-wrapper">
            <p class="p-flow__text">初めての方でも安心してご利用いただけるよう、住職が最初から最後までしっかりとサポートいたします。<br>
              ご不明な点やご要望があれば、どんなことでもお気軽にご相談ください。</p>
          </div>
          <div class="p-flow__block">
            <div class="p-flow__line">
              <img decoding="async" loading="lazy" src="/images/common/flow_line.png" alt="" width="431" height="38">
            </div>
            <div class="p-flow__right">
              <div class="p-flow__row">
                <figure class="p-flow__img">
                  <img decoding="async" loading="lazy" src="/images/common/flow_img1.jpg" alt="ご連絡" width="300" height="200">
                </figure>
                <div class="p-flow__detail">
                  <div class="p-flow__detail-top">
                    <p class="p-flow__num">01</p>
                    <h4 class="p-flow__detail-title">ご連絡</h4>
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
              <div class="p-flow__row">
                <figure class="p-flow__img">
                  <img decoding="async" loading="lazy" src="/images/common/flow_img2.jpg" alt="ご連絡" width="300" height="200">
                </figure>
                <div class="p-flow__detail">
                  <div class="p-flow__detail-top">
                    <p class="p-flow__num">02</p>
                    <h4 class="p-flow__detail-title">お迎え</h4>
                  </div>
                  <div class="p-flow__detail-textWrapper">
                    <p class="p-flow__detail-text">ご遺体を丁寧にお迎えし、長光寺またはご希望の安置場所へご案内します。</p>
                  </div>

                </div>
              </div>
              <div class="p-flow__row">
                <figure class="p-flow__img">
                  <img decoding="async" loading="lazy" src="/images/common/flow_img3.jpg" alt="ご遺体安置・枕経" width="300" height="200">
                </figure>
                <div class="p-flow__detail">
                  <div class="p-flow__detail-top">
                    <p class="p-flow__num">03</p>
                    <h4 class="p-flow__detail-title">ご遺体安置・枕経</h4>
                  </div>
                  <div class="p-flow__detail-textWrapper">
                    <p class="p-flow__detail-text">安置後、ご家族が落ち着けるよう配慮いたします。<br>
                      ご安置後、住職が枕経（まくらきょう）をお勤めし、故人様のご冥福をお祈りします。</p>
                  </div>

                </div>
              </div>
              <div class="p-flow__row">
                <figure class="p-flow__img">
                  <img decoding="async" loading="lazy" src="/images/common/flow_img4.jpg" alt="喪主様との打ち合わせ" width="300" height="200">
                </figure>
                <div class="p-flow__detail">
                  <div class="p-flow__detail-top">
                    <p class="p-flow__num">04</p>
                    <h4 class="p-flow__detail-title">喪主様との打ち合わせ</h4>
                  </div>
                  <div class="p-flow__detail-textWrapper">
                    <p class="p-flow__detail-text">ご家族のご希望やご事情を伺いながら、葬儀の内容や日程を丁寧にご相談・ご提案いたします。</p>
                  </div>

                </div>
              </div>
              <div class="p-flow__row">
                <figure class="p-flow__img">
                  <img decoding="async" loading="lazy" src="/images/common/flow_img5.jpg" alt="お通夜" width="300" height="200">
                </figure>
                <div class="p-flow__detail">
                  <div class="p-flow__detail-top">
                    <p class="p-flow__num">05</p>
                    <h4 class="p-flow__detail-title">お通夜</h4>
                  </div>
                  <div class="p-flow__detail-textWrapper">
                    <p class="p-flow__detail-text">ご家族・ご親族で静かにお別れの時間をお過ごしいただきます。</p>
                  </div>

                </div>
              </div>
              <div class="p-flow__row">
                <figure class="p-flow__img">
                  <img decoding="async" loading="lazy" src="/images/common/flow_img6.jpg" alt="ご葬儀・初七日法要" width="300" height="200">
                </figure>
                <div class="p-flow__detail">
                  <div class="p-flow__detail-top">
                    <p class="p-flow__num">06</p>
                    <h4 class="p-flow__detail-title">ご葬儀・初七日法要</h4>
                  </div>
                  <div class="p-flow__detail-textWrapper">
                    <p class="p-flow__detail-text">本堂にて、心を込めてご葬儀と初七日法要を執り行います。</p>
                  </div>

                </div>
              </div>
              <div class="p-flow__row">
                <figure class="p-flow__img">
                  <img decoding="async" loading="lazy" src="/images/common/flow_img7.jpg" alt="火葬" width="300" height="200">
                </figure>
                <div class="p-flow__detail">
                  <div class="p-flow__detail-top">
                    <p class="p-flow__num">07</p>
                    <h4 class="p-flow__detail-title">火葬</h4>
                  </div>
                  <div class="p-flow__detail-textWrapper">
                    <p class="p-flow__detail-text">火葬場へご出棺し、故人様をお見送りします。</p>
                  </div>

                </div>
              </div>
              <div class="p-flow__row">
                <figure class="p-flow__img">
                  <img decoding="async" loading="lazy" src="/images/common/flow_img8.jpg" alt="火収骨・解散葬" width="300" height="200">
                </figure>
                <div class="p-flow__detail">
                  <div class="p-flow__detail-top">
                    <p class="p-flow__num">07</p>
                    <h4 class="p-flow__detail-title">収骨・解散</h4>
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
    <section class="p-other">
      <div class="l-inner">
        <div class="p-other__content">
          <div class="p-other__title">
            <span class="c-section-title--small">他社との比較</span>
            <h3 class="c-section-title">提示価格と実際にかかる料金に<span class="c-section-title--red">差</span>額が少ない料金設定</h3>
          </div>
          <div class="p-other__table">
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
          <div class="p-other__attention">
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
    <section class="p-qa">
      <div class="l-inner">
        <div class="p-qa__title">
          <span class="c-section-title--small">他社との比較</span>
          <h3 class="c-section-title">皆様からよくご<span class="c-section-title--red">質</span>問いただく内容はこちら</h3>
        </div>
        <div class="p-qa__block">
          <details class="p-qa__content js-details">
            <summary class="p-qa__summary js-summary">
              <p class="p-qa__q">Q.</p>
              <h4 class="p-qa__ttl">
                事前相談はできますか？
              </h4>
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
          <details class="p-qa__content p-qa__content--last js-details">
            <summary class="p-qa__summary js-summary">
              <p class="p-qa__q">Q.</p>
              <h4 class="p-qa__ttl">
                事前相談はできますか？
              </h4>
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
    <section class="p-temple">
      <div class="l-inner">
        <div class="p-temple__title">
          <span class="c-section-title--small">運営寺院</span>
          <h3 class="c-section-title">ご<span class="c-section-title--red">縁</span>あってこのページをご覧の皆さまへ</h3>
        </div>
        <div class="p-temple__content">
          <div class="p-temple__row">
            <figure class="p-temple__img">
              <img decoding="async" loading="lazy" src="/images/common/temple_img.jpg" alt="寺葬のお寺" width="1000" height="667">
            </figure>
            <div class="p-temple__text-wrapper">
              <p class="p-temple__text">突然のご逝去に、気持ちも段取りも追いつかない——<br>
                その不安や戸惑いを、私は何度もご家族のそばで見てきました。<br>
                お葬式は、故人さまを「霊山浄土」へお送りする大切な儀式であると同時に、残された私たちが“いまをどう生きるか”を受け止めるための時間でもあります。<br>
                だからこそ、難しい手配や費用に関する心配で、その大切なひとときを曇らせてほしくありません。その想いを形にしたのが、私どもの「お寺葬」です。</p>
              <p class="p-temple__text">本堂という祈りの場で、心静かに故人さまと向き合い、お見送りいただけるよう、必要なご用意はお寺が窓口となって一つに整えます。</p>
            </div>

          </div>
          <div class="p-temple__bottomText-wrapper">
            <p class="p-temple__text">お迎え・ご安置から、祭壇やお花、遺影写真の準備、通夜・葬儀・初七日のお勤めまで——<br>複雑な費用計算に悩まされることなく、明確な一つのご布施で必要なものを全て整えさせていただきます。流れを最初に丁寧にご説明し、あとから迷いが生じないよう、住職が終始伴走いたします。</p>
            <p class="p-temple__text">手配に追われることなく、ただ故人さまとの思い出を語り合う。<br>
              気兼ねなく、心からの「ありがとう」を伝える。</p>
            <p class="p-temple__text">家族葬という温かな輪の中で、「いのち」のつながりと「ご縁」の尊さを、静かに見つめ直すお手伝いをいたします。<br>
              宗旨・宗派は問いません。檀家でない方もどうぞご安心ください。<br>
              まずはどんなことでもご相談ください。私どもが誠心誠意、寄り添ってまいります。</p>
          </div>
          <div class="p-temple__text-right">
            <p class="p-temple__text">合掌<br>長光寺 住職 小島 一洋</p>
          </div>
          <dl class="p-temple__dl">
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
              <dd class="p-temple__dd">〒386-0403 長野県上田市腰越1530 [<a href="#" target="_blank" rel="noopener noreferrer">地図</a>]</dd>
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
    <section class="p-area">
      <div class="l-inner">
        <div class="p-area__content">
          <div class="p-area__detail">
            <div class="p-area__title">
              <span class="c-section-title--small">対応エリア</span>
              <h3 class="c-section-title">長野県・<span class="c-section-title--red">東信</span>エリアに対応</h3>
            </div>
            <div class="p-area__text-wrapper">
              <p class="p-area__text">長野県上田市を拠点に「東信エリア」に対応しております。<br>
                エリア外のご相談者様も長野県内でしたら柔軟に対応いたします。</p>
              <p class="p-area__text">上田市、東御市、佐久市、小諸市、坂城町、青木村、長和町、軽井沢町、御代田町、立科町、小海町、川上村、南牧村、南相木村、北相木村、佐久穂町など</p>
            </div>
          </div>
          <figure class="p-area__img">
            <img decoding="async" loading="lazy" src="/images/common/area_img.png" alt="長野県・東信エリア" width="650" height="400">
          </figure>
        </div>
      </div>
    </section>
    <section class="p-contact" id="form">
      <div class="l-inner">
        <div class="p-contact__content">
          <div class="p-contact__title">
            <span class="c-section-title--small">お問い合わせ</span>
            <h3 class="c-section-title">ご相談は<span class="c-section-title--red">無料</span>。お気軽にお問い合わせください</h3>
          </div>
          <p class="p-contact__top-text">この度はご訪問いただき、誠にありがとうございました。<br>
            改めて当寺院よりご連絡差し上げますので、下記フォームよりお問い合わせ内容をお送りください。<br>
            <span>お急ぎ方や直接のご相談をご希望される方はお電話でも承っております。</span>
          </p>
          <div class="p-contact__tel-wrapper">
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
            <p class="p-contact__num-text">24時間365日対応</p>
          </div>

          <form method="post" name="cform" action="#form" class="p-contact__form">
            <div class="form_block">
              <table>
                <tr>
                  <th class="ne"><b>お問い合わせ種別</b></th>
                  <td class="input2">
                    <ul>
                      <li><input type="checkbox" name="kind1" value="1" id="kind1" <?= rc_check('kind1', 1); ?> /><label for="kind1" class="checkbox"><?= $kindlist[1]; ?></label></li>
                      <li><input type="checkbox" name="kind2" value="1" id="kind2" <?= rc_check('kind2', 1); ?> /><label for="kind2" class="checkbox"><?= $kindlist[2]; ?></label></li>
                      <li><input type="checkbox" name="kind3" value="1" id="kind3" <?= rc_check('kind3', 1); ?> /><label for="kind3" class="checkbox"><?= $kindlist[3]; ?></label></li>
                    </ul>
                    <?= error_check($errors, 'kind'); ?>

                  </td>
                </tr>
                <tr>
                  <th class="ne"><b>お名前</b></th>
                  <td class="input">
                    <p class="tdline"><input type="text" name="name" value="<?= value_check('name'); ?>" placeholder="例：寺葬 太郎" class="input100"></p>
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
                    <p class="tdline"><input type="text" name="email" value="<?= value_check('email'); ?>" placeholder="例：info@manyodo.ltd（半角英数）" class="input100"></p>
                    <?= error_check($errors, 'email'); ?>

                    <p class="tdline"><input type="text" name="emailcheck" value="<?= value_check('emailcheck'); ?>" placeholder="確認のため再度入力してください。" class="input100"></p>
                    <?= error_check($errors, 'emailcheck'); ?>

                  </td>
                </tr>
                <tr>
                  <th><b>ご住所</b></th>
                  <td class="input">
                    <p class="tdline"><input type="text" name="address" placeholder="例：東京都国分寺市本多1丁目1番地" value="<?= value_check('address'); ?>" class="input100"></p>
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
              <p class="confirm"><a href="javascript:document.cform.submit();">確認ページへ</a></p>
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