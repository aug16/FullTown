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
    <?php require '../components/nav_OneEarthCafe.php'; ?>
    <article class="container pt-2">
      <h3 class="text-center">網站修改中</h3>
      <p class="text-center">目前暫時休息中，重新開業日期之後再公佈</p>
    </article>
    <article class="container py-3">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active bg-light w-100">
            <div class="row no-gutters">
              <div class="d-none d-lg-block col-sm-4" style="background-color: #F0F0F2;">
                <blockquote class="blockquote text-center">
                  <p class="mb-0 pt-5 font-weight-lighter">經營一間雅致的小店；</p>
                  <p class="mb-0 font-weight-lighter">揭示一則警世的箴言；</p>
                  <p class="mb-0 font-weight-lighter">來自一畝有機的田地；</p>
                  <p class="font-weight-lighter">保留一塊心中的藍天。</p>
                  <footer class="blockquote-footer">藍色微光 <cite title="Source Title">One Earth Café</cite>
                  </footer>
                </blockquote>
              </div>
              <div class="col-12 col-sm-8">
                <img src="/img/oneearthcafe/b001.jpg" class="d-block w-100" alt="巧克力戚風">
                <div class="card-img-overlay d-lg-none ml-n2">
                  <h5 class="card-title"><small>巧芋戚風</small></h5>
                  <p class="card-text mb-0"><small>可可戚風蛋糕體<br>巧克力甘納許<br>芋泥鮮奶油</small></p>
                  <p class="card-text"><small>8吋</small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item bg-light h-100">
            <div class="row no-gutters">
              <div class="col-12 col-sm-8">
                <img src="/img/oneearthcafe/b002.jpg" class="d-block w-100" alt="藍莓生乳酪">
                <div class="card-img-overlay d-lg-none t1 text-end mr-n2">
                  <h5 class="card-title"><small>藍莓生乳酪</small></h5>
                  <p class="card-text mb-0"><small>自製藍莓果醬<br>奶油乳酪<br>鮮奶油</small></p>
                  <p class="card-text"><small>6吋</small></p>
                </div>
              </div>
              <div class="d-none d-lg-block col-sm-4" style="background-color: #F2C063;">
                <blockquote class="blockquote">
                  <p class="mb-0 p-5 font-weight-lighter">
                    藍色微光望能以微薄的力量，貢獻一己於市井之中，支持在地作物、有機農業、公平貿易，減用一次性產品。
                    讓顧客品嚐美味的咖啡與甜點之際，亦能體會環境對我們的重要性。</p>

                  <footer class="blockquote-footer text-center">藍色微光 <cite title="Source Title">One Earth
                      Café</cite>
                  </footer>
                </blockquote>
              </div>
            </div>
          </div>
          <div class="carousel-item h-100">
            <div class="row no-gutters">
              <div class="d-none d-lg-block col-sm-4" style="background-color: #D99748;">
                <blockquote class="blockquote text-center">
                  <p class="mb-0 pt-5 font-weight-lighter">這是我們的理想。</p>
                  <p class="mb-0 font-weight-lighter">希望大家一起支持我們、</p>
                  <p class="font-weight-lighter">一起維護這個獨一無二的星球。</p>

                  <footer class="blockquote-footer">藍色微光 <cite title="Source Title">One Earth Café</cite>
                  </footer>
                </blockquote>
              </div>
              <div class="col-12 col-sm-8">
                <img src="/img/oneearthcafe/b003.jpg" class="d-block w-100" alt="抹茶戚風">
                <div class="card-img-overlay d-lg-none ml-n2">
                  <h5 class="card-title"><small>抹茶戚風</small></h5>
                  <p class="card-text mb-0"><small>抹茶戚風蛋糕體<br>抹茶鮮奶油<br>紅豆</small></p>
                  <p class="card-text"><small>單片</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>-->
      </div>
    </article>
    <main class="container pt-3">
      <span class="blockquote-footer t11 bg-primary text-dark">about us</span>
      <div class="row no-gutters">
        <div class="col-12 col-sm-6 p-3">
          <h1 class="pt-4">藍色微光</h1>
          <p>以微薄的力量，支持在地作物、有機農業、公平貿易，減用一次性產品。希望大家一起支持我們、
            一起維護這個獨一無二的星球。</p>
          <p>經營一間雅致的小店；揭示一則警世的箴言；來自一畝有機的田地；保留一塊心中的藍天。</p>
          <p>藍色微光望能以微薄的力量，貢獻一己於市井之中，支持在地作物、有機農業、公平貿易，
            減用一次性產品。讓顧客品嚐美味的咖啡與甜點之際，亦能體會環境對我們的重要性。</p>
          <p>這是我們的理想。希望大家一起支持我們、一起維護這個獨一無二的星球。</p>
          <footer class="blockquote-footer t1 text-end pr-3">One Earth Café _ <cite title="Source Title">Yvonne
              Lin</cite></footer>
        </div>
        <div class="col-12 col-sm-6">
          <img src="/img/oneearthcafe/b004.jpg" class="d-block w-100" alt="藍色微光">
        </div>
      </div>
    </main>
    <article class="container pt-5">
      <section class="card rounded-0 border-0 py-3">
        <div class="row no-gutters ">
          <div class="col-md-1 bg-primary text-white d-none d-lg-block">
            <div class="mixed fs-1">Carrot cake</div>
          </div>
          <div class="col-md-1 bg-primary text-white text-center d-lg-none ">
            <div class="t1">Carrot cake</div>
          </div>
          <div class="col-md-3">
            <div class="card-body">
              <h2>卡蘿凱特(私廚版)</h2>
              <footer class="blockquote-footer t1 text-end pr-3">胡蘿蔔蛋糕</footer>
              <p class="card-text pt-4">源自英國的中世紀，因為當時糖價高漲無法輕易購得，而胡蘿蔔是除了甜菜之外含糖量
                最高的蔬菜，所以當時人民便以胡蘿蔔代替糖來製作糕點。而胡蘿蔔蛋糕之所以風行，是因第二次世界大戰期間實施
                食物配給制度，胡蘿蔔的含糖量再度被重視，使胡蘿蔔蛋糕流傳至今，在歐美可是家喻戶曉的傳統點心呢！</p>
              <hr class="mb-0" style="border-bottom-width: 0.1rem solid #D7D7D7">
              <p class="card-text pt-2 mb-0"><small class="text-muted">成份：海綿蛋糕、胡蘿蔔、核桃、肉桂、白鼬奶油霜</small>
              </p>
              <p class="card-text pt-2 mb-0"><small class="text-muted">尺寸：6吋、8吋</small>
              </p>
            </div>
          </div>
          <div class="col-md-8">
            <img src="/img/oneearthcafe/b005.jpg" class="card-img-top rounded-0 border-0" alt="卡蘿凱特(私廚版)">
          </div>
        </div>
      </section>
      <section class="card rounded-0 border-0 py-3">
        <div class="row no-gutters ">
          <div class="col-md-1 bg-secondary text-white d-none d-lg-block">
            <div class="mixed fs-1">chiffon cake</div>
          </div>
          <div class="col-md-1 bg-secondary text-white text-center d-lg-none ">
            <div class="t1">chiffon cake</div>
          </div>
          <div class="col-md-3">
            <div class="card-body">
              <h2>巧遇</h2>
              <footer class="blockquote-footer t1 text-end pr-3">巧克力芋泥蛋糕</footer>
              <p class="card-text pt-4">當巧克力遇上芋泥鮮奶油時~</p>
              <hr class="mb-0" style="border-bottom-width: 0.1rem solid #D7D7D7">
              <p class="card-text pt-2 mb-0"><small class="text-muted">成份：可可戚風蛋糕、巧克力甘納許、芋泥鮮奶油</small>
              </p>
              <p class="card-text pt-2 mb-0"><small class="text-muted">尺寸：6吋、8吋</small>
              </p>
            </div>
          </div>
          <div class="col-md-8">
            <img src="/img/oneearthcafe/b006.jpg" class="card-img-top rounded-0 border-0" alt="巧克力芋泥蛋糕">
          </div>
        </div>
      </section>
      <section class="card rounded-0 border-0 py-3">
        <div class="row no-gutters ">
          <div class="col-md-1 bg-danger text-white d-none d-lg-block">
            <div class="mixed fs-1">N.B cheesecake</div>
          </div>
          <div class="col-md-1 bg-danger text-white text-center d-lg-none ">
            <div class="t1">N.B cheesecake</div>
          </div>
          <div class="col-md-3">
            <div class="card-body">
              <h2>藍莓生乳酪</h2>
              <footer class="blockquote-footer t1 text-end pr-3">No_Bake Cheesecake</footer>
              <p class="card-text pt-4">酸酸甜甜、冰冰涼涼的口感，正是適合炎炎夏日下午茶搭配的甜點。</p>
              <hr class="mb-0" style="border-bottom-width: 0.1rem solid #D7D7D7">
              <p class="card-text pt-2 mb-0"><small class="text-muted">成份：自製藍莓果醬、鮮奶油、原味優格、餅干底</small>
              </p>
              <p class="card-text pt-2 mb-0"><small class="text-muted">尺寸：6吋、8吋</small>
              </p>
            </div>
          </div>
          <div class="col-md-8">
            <img src="/img/oneearthcafe/b007.jpg" class="card-img-top rounded-0 border-0" alt="藍莓生乳酪">
          </div>
        </div>
      </section>
      <section class="card rounded-0 border-0 py-3">
        <div class="row no-gutters ">
          <div class="col-md-1 bg-success text-white d-none d-lg-block">
            <div class="mixed fs-1">cheesecake</div>
          </div>
          <div class="col-md-1 bg-success text-white text-center d-lg-none ">
            <div class="t1">cheesecake</div>
          </div>
          <div class="col-md-3">
            <div class="card-body">
              <h2>重乳酪蛋糕</h2>
              <footer class="blockquote-footer t1 text-end pr-3">Cheesecake</footer>
              <p class="card-text pt-1">
                起司蛋糕起源於西元前776年的古希臘，當時為了鼓舞參加奧林匹克競賽的選手們，並增強其體力而做的甜點。它的材料是麵粉、蜂蜜和起司，它就是起司蛋糕的最早雛形。<br>羅馬帝國征服了古希臘後，在原起司蛋糕中加入了雞蛋材料，使其更加營養美味。後來起司蛋糕隨著羅馬人征服了歐洲各地，加入了當地的特有材料而演化成各種美味可口的起司蛋糕。到了19世紀歐洲人移民北美，起司蛋糕也傳入了美洲，在美國紐約市發揚光大。
              </p>
              <hr class="mb-0" style="border-bottom-width: 0.1rem solid #D7D7D7">
              <p class="card-text pt-2 mb-0"><small class="text-muted">成份：奶油乳酪、鮮奶油、原味優格、雞蛋、餅干底</small>
              </p>
              <p class="card-text pt-2 mb-0"><small class="text-muted">尺寸：6吋、8吋</small>
              </p>
            </div>
          </div>
          <div class="col-md-8">
            <img src="/img/oneearthcafe/b008.jpg" class="card-img-top rounded-0 border-0" alt="重乳酪蛋糕">
          </div>
        </div>
      </section>
    </article>



  </div>

  <?php require '../components/footer.php'; ?>
  <?php require '../components/bootstrap_js.php'; ?>


</body>

</html>