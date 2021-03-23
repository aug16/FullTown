<!doctype html>
<html lang="zh">

<head>
  <?php require './components/GoogleAnalytics.php'; ?>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="CHU_PING CHEN">
  <meta name="copyright" content="富棠國際有限公司">

  <?php require './components/bootstrap_css.php'; ?>
  <?php require './components/bootstrap_icon.php'; ?>
  <?php require './components/swiper_css.php'; ?>
  <?php require './components/animate_css.php'; ?>
  <?php require './components/FBpageid.php'; ?>

  <link rel="canonical" href="<?php $URL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                              $_SERVER['PHP_SELF'];
                              echo $URL; ?>">
  <link rel="opengraph" href="<?php $URL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                              $_SERVER['PHP_SELF'];
                              echo $URL; ?>">

  <!----SEO設定----->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="產品線包括代理環保複合木-BIOWOOD，全系列產品應用建議、設計規劃、安裝、施工服務。藍色微光手作甜點-ONEEARTHCAFé、日本史上最鏡電鍍保護劑-MEKKING及不鏽鋼衛浴五金水龍頭-FULLTOWN。品質是富棠國際對客戶的承諾，唯有高品質的產品及專業的技術，才能長久經營企業並持續服務。">
  <meta name="keywords" content="富棠國際,Biowood,複合木,NAKARAI,MEKKING,電鍍,藍色微光,甜點,不鏽鋼,水龍頭,五金,衛浴">
  <meta property="og:url" content="<?php $URL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                                    $_SERVER['PHP_SELF'];
                                    echo $URL; ?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="富棠國際">
  <meta property="og:description" content="產品線包括代理環保複合木-BIOWOOD，全系列產品應用建議、設計規劃、安裝、施工服務。藍色微光手作甜點-ONEEARTHCAFé、日本史上最鏡電鍍保護劑-MEKKING及不鏽鋼衛浴五金水龍頭-FULLTOWN。品質是富棠國際對客戶的承諾，唯有高品質的產品及專業的技術，才能長久經營企業並持續服務。">
  <meta property="og:image" content="<?php $URL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>/img/2021logo_1.jpg">

  <link href="/css/font_set.css" rel="stylesheet" type="text/css" />
  <link href="/css/style.css" rel="stylesheet" type="text/css" />

  <title>富棠國際</title>
</head>

<body>
  <?php require './components/FacebookSPjs.php'; ?>
  <?php require './components/LineSPjs.php'; ?>
  <main class="container-fluid container-md g-0">
    <header class="mb-2">
      <div class="row g-0">
        <h1 class="visually-hidden">富棠國際產品線</h1>
        <section class="col-md-3 d-none d-lg-block border position-relative">
          <span class="d-flex align-items-center position-absolute bottom-50 start-0 pb-5 ps-3">
            <div class="animate__animated animate__fadeInLeft px-1"><img src="/img/full.svg" width="" height="55" type="image/svg+xml" alt="富"></div>
            <div class="animate__animated animate__fadeInDown px-1"><img src="/img/town.svg" width="" height="55" type="image/svg+xml" alt="棠"></div>
            <div class="animate__animated animate__fadeInRight px-1"><img src="/img/inter.svg" width="" height="55" type="image/svg+xml" alt="國"></div>
            <div class="animate__animated animate__fadeInUp px-1"> <img src="/img/national.svg" width="" height="55" type="image/svg+xml" alt="際"></div>
          </span>
        </section>
        <section class="col-md-4 bg-light position-relative text-black-50 d-flex animate__animated animate__flipInY fs-1">
          <span class="mixed">
            <font color="#FF0000">F</font>ULL<font color="#FF0000">T</font>OWN
          </span>
          <span class="mixed">International</span>
          <spen class="d-flex align-items-center position-absolute bottom-0 end-0 p-3 d-block d-lg-none">
            <div class="animate__animated animate__fadeInLeft px-1"><img src="/img/full.svg" width="" height="45" type="image/svg+xml" alt="富"></div>
            <div class="animate__animated animate__fadeInDown px-1"><img src="/img/town.svg" width="" height="45" type="image/svg+xml" alt="棠"></div>
            <div class="animate__animated animate__fadeInRight px-1"><img src="/img/inter.svg" width="" height="45" type="image/svg+xml" alt="國"></div>
            <div class="animate__animated animate__fadeInUp px-1"> <img src="/img/national.svg" width="" height="45" type="image/svg+xml" alt="際"></div>
          </spen>
        </section>
        <section class="col-md-5 align-self-end">
          <p class="t1 p-2 animate__animated  animate__zoomIn fs-3">
            There’s nothing we like more than rolling up our sleeves and starting a brand new project .Let’s make
            something great together.
          </p>
        </section>
      </div>
    </header>
    <!-- 社群推薦按鈕 -->
    <aside class="pt-2">
      <?php require './components/aside.FT.php'; ?>
    </aside>
    <!-- 複合木 -->
    <article class="card rounded-0 border-0 mb-4">
      <div class="row g-0">
        <div class="col-md-1 bg-success text-white d-flex position-relative">
          <span class="mixed fs-1">BIOWOOD</span>
        </div>
        <div class="col-md-4">
          <section class="card-body">
            <h2 class="card-title fs-1 fw-bold">環保複合木</h2>
            <p class="card-text fs-6 fw-bold">
              一般建築外觀除了常見的水泥、石材、磁磚、烤漆鋼板、玻璃幃幕外，我們能提供您最適用於戶外的木建材，也許您會覺得木建材使用於戶外已是很常見，但實木建材有腐爛、蟲蛀、木材裂紋且會助燃等問題，且實木建材後續需每年編列維護的費用，所費不貲。<br>找不到好的木建材嗎？複合木幫您決解您的困擾~
            </p>
            <hr style="border-bottom-width: 0.1rem solid #d7d7d7">
            <a href="/page/BIOWOOD_tw.php" class="btn btn-outline-dark rounded-0 fs-6 fw-bold">了解更多</a>
            <div class="t1 pt-2">
              PT. Latrade Batam Indonesia
            </div>
          </section>
        </div>
        <div class="col-md-7">
          <img src="/img/biowood_001.jpg" class="card-img-top rounded-0 border-0 " alt="牆板">
        </div>
      </div>
    </article>

    <!-- 電鍍保護劑 -->
    <article class="card rounded-0 border-0 my-4">
      <div class="row g-0">
        <div class="col-md-1 bg-dark text-white d-flex">
          <header class="mixed fs-1">MEKKING</header>
        </div>
        <div class="col-md-4">
          <section class="card-body">
            <h2 class="card-title">電鍍保護劑</h2>
            <p class="card-text fs-6 fw-bold">
              無論你是騎乘重機還是開車，愛駒上總少不了電鍍金屬部件，像是閃亮的輪圈、廠徽、排氣管、把手等等，
              對愛車如命的我們想要長時間維持這些部件的光澤，是件很不容易的事。<br>市面品牌百百種，但來自
              日本的MEKKING電鍍保護劑據說能讓愛車「保鮮」半年，真有那麼神奇嗎？
            </p>
            <hr style="border-bottom-width: 0.1rem solid #d7d7d7">
            <a href="/page/NAKARAI_tw.php" class="btn btn-outline-dark rounded-0 fs-6 fw-bold">了解更多</a>
            <div class="t1 pt-2">
              メッキ工房 NAKARAI
            </div>
          </section>
        </div>
        <div class="col-md-7">
          <img src="/img/nakarai_001.jpg" class="card-img-top rounded-0 border-0" alt="電鍍保護劑">
        </div>
      </div>
    </article>

    <!-- 藍色微光 -->
    <article class="card rounded-0 border-0 my-4">
      <div class="row g-0">
        <div class="col-md-1 bg-primary text-white d-flex">
          <span class="mixed fs-1">ONEEARTHCAFé</span>
        </div>
        <div class="col-md-4">
          <section class="card-body">
            <div class="col text-center">
              <embed src="/img/oeclogo_1.png" width="100" height="100" alt="藍色微光">
            </div>
            <p class="card-text pt-2 fs-6 fw-bold">
              經營一間雅致的小店；揭示一則警世的箴言；來自一畝有機的田地；保留一塊心中的藍天。藍色微光望能以微薄的力量，貢獻一己於市井之中，支持在地作物、有機農業、公平貿易，減用一次性產品。讓顧客品嚐美味的咖啡與甜點之際，亦能體會環境對我們的重要性。這是我們的理想。希望大家一起支持我們、一起維護這個獨一無二的星球。
            </p>
            <hr style="border-bottom-width: 0.1rem solid #d7d7d7">
            <a href="/page/OneEarthCafe.php" class="btn btn-outline-dark rounded-0 fs-6 fw-bold">了解更多</a>
            <div class="t1 pt-2">
              J'ai de la chance de vous rencontrer
            </div>
          </section>
        </div>
        <div class="col-md-7">
          <img src="/img/oneerathcaft_001.jpg" class="card-img-top rounded-0 border-0" alt="藍色微光巧克力戚風蛋糕">
        </div>
      </div>
    </article>
    <!-- 不鏽鋼衛浴五金 -->
    <article class="card rounded-0 border-0 my-4">
      <div class="row g-0">
        <div class="col-md-1 bg-light text-black-50 d-flex">
          <span class="mixed fs-1">STAINLESS</span>
        </div>
        <div class="col-md-4">
          <section class="card-body">
            <h2 class="card-title">不鏽鋼水龍頭</h2>
            <p class="card-text fs-6 fw-bold">
              品質是富棠國際對於客戶的承諾，唯有高品質的產品及專業的技術才能長久經營企業並持續服務。
              我們提供不鏽鋼衛水龍頭及衛浴相關配件掛件類產品，如果您對我們的產品有興趣，現在就與我們
              聯繫，我們會依照您的需求，為您量身訂作提供最好的產品和技術服務
            </p>
            <hr style="border-bottom-width: 0.1rem solid #d7d7d7">
            <a href="/page/StainlessSteelFT.php" class="btn btn-outline-dark rounded-0 fs-6 fw-bold">了解更多</a>
            <div class="t2 pt-2">
              FULLTOWN International co. ltd
            </div>
          </section>
        </div>
        <div class="col-md-7">
          <img src="/img/stainlesssteelft_0001.jpg" class="card-img-top rounded-0 border-0" alt="富棠不鏽鋼水龍頭">
        </div>
      </div>
    </article>
  </main>
  <?php require './components/footer.php'; ?>

  <?php require './components/bootstrap_js.php'; ?>
</body>

</html>