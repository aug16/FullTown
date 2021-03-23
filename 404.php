<!doctype html>
<html lang="zh">

<head>
  <?php require './components/GoogleAnalytics.php';?>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="CHU_PING CHEN">
  <meta name="copyright" content="富棠國際有限公司">

  <?php require './components/bootstrap_css.php';?>
  <?php require './components/bootstrap_icon.php';?>
  <?php require './components/swiper_css.php';?>
  <?php require './components/animate_css.php';?>
  <?php require './components/FBpageid.php';?>


  <link rel="canonical"
    href="<?php $URL='https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];$_SERVER['PHP_SELF'];echo $URL;?>">
  <link rel="opengraph"
    href="<?php $URL='https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];$_SERVER['PHP_SELF'];echo $URL;?>">

  <!----SEO設定----->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="很抱歉，您搜尋的網頁不存，請至首頁重新搜尋">

  <meta property="og:url"
    content="<?php $URL='https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];$_SERVER['PHP_SELF'];echo $URL;?>">
  <meta name="keywords" content="富棠國際,複合木,5W1H,地板,格柵,牆板,天花板">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Page Not Found">
  <meta property="og:description"
    content="很抱歉，您搜尋的網頁不存，請至首頁重新搜尋">
  <meta property="og:image"
    content="<?php $URL='https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>/img/404page.png">

  <link href="/css/font_set.css" rel="stylesheet" type="text/css" />
  <link href="/css/style.css" rel="stylesheet" type="text/css" />

  <title>Page Not Found</title>
</head>

<body>
<main class="container">
    <article class="card rounded-0 border-0 mt-4">
      <div class="row">
        <div class="col-md-4">
          <section class="card-body">
            <img src="/img/index/full.svg" width="30" height="" type="image/svg+xml" alt="富">
            <img src="/img/index/town.svg" width="30" height="" type="image/svg+xml" alt="棠">
            <img src="/img/index/inter.svg" width="30" height="" type="image/svg+xml" alt="國">
            <img src="/img/index/national.svg" width="30" height="" type="image/svg+xml" alt="際">
            <header>
              <h2 class="card-title py-2 t21">FULLTOWN International</h2>

            </header>
            <h2 class="fs-2 fw-bold">很抱歉，您搜尋的網頁不存，請至首頁重新搜尋
            </h2>
            <hr>
            <a href="/index.php" class="btn btn-outline-dark rounded-0 fs-6 fw-bold">回首頁</a>
            
            <script type="text/javascript" src="//counter.websiteout.net/js/36/6/23598/1"></script>
            <footer class="card-text pt-2">
              <small class="text-muted"></small>
            </footer>
          </section>
        </div>
        <div class="col-md-1 text-dark d-flex" style="background-color:#FFFF46;">
          <h1 class="mixed">404 Page</h1>
        </div>
        <div class="col-md-7">
          <h2 class="card-title py-2 t21 display-2 fw-bolder">something's wrong here...<br> we can't find the page you're
            looking for. </h2>
        </div>
      </div>
    </article>
  </main>
  <div class="pt-5">
  <?php require './components/footer.php';?>
  </div>

  <?php require './components/bootstrap_js.php';?>


</body>

</html>