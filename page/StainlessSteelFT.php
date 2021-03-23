<!doctype html>
<html lang="zh">

<head>
  <?php require '../components/GoogleAnalytics.php'; ?>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="CHU_PING CHEN">
  <meta name="copyright" content="富棠國際有限公司">

  <?php require '../components/bootstrap_css.php'; ?>
  <?php require '../components/bootstrap_icon.php'; ?>
  <?php require '../components/swiper_css.php'; ?>
  <?php require '../components/animate_css.php'; ?>
  <?php require '../components/FBpageid.php'; ?>


  <link rel="canonical" href="<?php $URL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                              $_SERVER['PHP_SELF'];
                              echo $URL; ?>">
  <link rel="opengraph" href="<?php $URL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                              $_SERVER['PHP_SELF'];
                              echo $URL; ?>">

  <!----SEO設定----->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="藍色微光望能以微薄的力量，貢獻一己於市井之中，支持在地作物、有機農業、公平貿易，減用一次性產品。讓顧客品嚐美味的咖啡與甜點之際，亦能體會環境對我們的重要性。這是我們的理想。希望大家一起支持我們、一起維護這個獨一無二的星球">

  <meta property="og:url" content="<?php $URL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                                    $_SERVER['PHP_SELF'];
                                    echo $URL; ?>">
  <meta name="keywords" content="藍色微光,手作甜點">
  <meta property="og:type" content="website">
  <meta property="og:title" content="藍色微光 | 手作甜點">
  <meta property="og:description" content="藍色微光望能以微薄的力量，貢獻一己於市井之中，支持在地作物、有機農業、公平貿易，減用一次性產品。讓顧客品嚐美味的咖啡與甜點之際，亦能體會環境對我們的重要性。這是我們的理想。希望大家一起支持我們、一起維護這個獨一無二的星球">
  <meta property="og:image" content="<?php $URL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>/001/logo1.png">

  <link href="/css/font_set.css" rel="stylesheet" type="text/css" />
  <link href="/css/style.css" rel="stylesheet" type="text/css" />

  <title>藍色微光 | 手作甜點</title>
</head>

<body>
  <?php require '../components/FacebookSPjs.php'; ?>
  <?php require '../components/LineSPjs.php'; ?>
  <div class="container-fluid g-0">
    <?php require '../components/nav_StainlessSteel.php'; ?>
    <h1 class="text-center py-5">網頁建置中</h1>

  </div>

  <?php require '../components/footer.php'; ?>
  <?php require '../components/bootstrap_js.php'; ?>


</body>

</html>