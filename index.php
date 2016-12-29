<?php require_once( './header.php' ); ?>

<!--this is fun stuff here-->

<article>
  <div class="container">
    <h1 class="main-visual">
      <div id="example1" class="slider-pro">
        <div class="sp-slides">
          <div class="sp-slide">
            <!-- <img class="sp-image" src="/images/blank.gif"
                data-src="http://www.mori-index.com/image/top/image_mainvisual_01_pc.png"
                data-small="http://www.mori-index.com/image/top/image_mainvisual_01_sp.png"
                data-medium="http://www.mori-index.com/image/top/image_mainvisual_01_pc.png"/> -->
                <a href="#slideslide"><img class="sp-image" src="/images/blank.gif"
                data-src="/images/slide-1.png"/></a>
          </div>
          <div class="sp-slide">
  <!--             <img class="sp-image" src="/images/blank.gif"
            data-src="http://www.mori-index.com/image/top/image_mainvisual_02_pc.png"
            data-small="http://www.mori-index.com/image/top/image_mainvisual_02_sp.png"
            data-medium="http://www.mori-index.com/image/top/image_mainvisual_02_pc.png"/> -->

            <a href="#jumpjump"><img class="sp-image" src="/images/blank.gif"
            data-src="/images/slide-2.png"/></a>
          </div>
          <div class="sp-slide">
            <!-- <img class="sp-image" src="/images/blank.gif"
                data-src="http://www.mori-index.com/image/top/image_mainvisual_03_pc.png"
                data-small="http://www.mori-index.com/image/top/image_mainvisual_03_sp.png"
                data-medium="http://www.mori-index.com/image/top/image_mainvisual_03_pc.png"/> -->
                <a href="#jumpjumpslideslide"><img class="sp-image" src="/images/blank.gif"
                data-src="/images/slide-3.png"/></a>
          </div>
        </div>
      </div>
    </h1>
  </div>
  <nav>
    <div class="container main-content">
      <a href="#box1">
        <div class="box">
          <img src="/images/icon-1.png" alt="">
          <h3>北欧生まれの分煙 <br>
          ソリューション</h3>
        </div>
      </a>
      <a href="#box2">
        <div class="box">
          <img src="/images/icon-2.png" alt="">
          <h3>映像で見る商品特長</h3>
        </div>
      </a>
      <a href="#box3">
        <div class="box">
          <img src="/images/icon-3.png" alt="">
          <h3>品質を裏付けるテストデータ</h3>
        </div>
      </a>
      <a href="#box4">
        <div class="box">
          <img src="/images/icon-4.png" alt="">
          <h3>導入事例</h3>
        </div>
      </a>
    </div>
  </nav>
</article>

<?php require_once( './footer.php' ); ?>
<script type="text/javascript" src="/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="/js/jquery.sliderPro.min.js"></script>
<script type="text/javascript">
  $( document ).ready(function( $ ) {
    $( '#example1' ).sliderPro({
      width: '100%',
      height: 350,
      arrows: false,
      fade: true,
      autoplay: true,
      aspectRatio: 2,
      touchSwipe: false,
    });
  });
</script>
</body>
</html>