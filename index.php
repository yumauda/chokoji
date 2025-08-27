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
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>