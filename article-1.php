<?php include('header.php') ?>
  <div class="container">
    <div class="row">
      <div class="col">
        <img class="bnr-home pb-2" src="../img/article/article-banner.jpg"/>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
        <h4 class="tab-ttl">Marketing & Communications</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-12">The future of brands lies in ideas that combine the power of storytelling with the creative use of technology, to motivate consumer behaviour and engagement. <br />

      Isobar drives success for brands using a data-driven, multi-disciplinary approach: creatives and strategists work with innovation technologists and experience designers to build brand engagements and campaigns. <br />

      We work in partnership with our clients to create, distribute, measure and optimise at every step, in order to deliver personalised, seamless and memorable experiences, that drive engagement, transaction and loyalty - building brands that people love. <br /><br />

      The future of brands lies in ideas that combine the power of storytelling with the creative use of technology, to motivate consumer behaviour and engagement. <br />

      Isobar drives success for brands using a data-driven, multi-disciplinary approach: creatives and strategists work with innovation technologists and experience designers to build brand engagements and campaigns. <br />

      We work in partnership with our clients to create, distribute, measure and optimise at every step, in order to deliver personalised, seamless and memorable experiences, that drive engagement, transaction and loyalty - building brands that people love. <br /><br />

      The future of brands lies in ideas that combine the power of storytelling with the creative use of technology, to motivate consumer behaviour and engagement. <br />

      Isobar drives success for brands using a data-driven, multi-disciplinary approach: creatives and strategists work with innovation technologists and experience designers to build brand engagements and campaigns. <br />

      We work in partnership with our clients to create, distribute, measure and optimise at every step, in order to deliver personalised, seamless and memorable experiences, that drive engagement, transaction and loyalty - building brands that people love. <br /><br />
      </div>
      <div class="col-md-4 col-12">
        <ul class="list-group">
          <li class="list-group-item article-item">BRAND & COMMUNICATION</li>
          <li class="list-group-item article-item">STRATEGY</li>
          <li class="list-group-item article-item">CREATIVE, CAMPAIGN DEVELOPMENT & EXECUTION</li>
          <li class="list-group-item article-item">SOCIAL & CONTENT STRATEGY & EXECUTION</li>
          <li class="list-group-item article-item">SEO & SEM</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <h4 class="tab-ttl">Case Study</h4>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-12">
        <div class="">
          <img class="tab-img" src="../img/article/article-img-1.jpg">
          <h3 class="card-ttl">Mekong Group Food</h3>
          <p class="card-desc">Building brands and idea-led experiences that engage people & motivate behaviour </p>
          <a href="#" class="read-more">Read more<i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
      <div class="col-md-4 col-12">
        <div class="">
          <img class="tab-img" src="../img/article/article-img-2.jpg">
          <h3 class="card-ttl">Mekong Group Food</h3>
          <p class="card-desc">Building brands and idea-led experiences that engage people & motivate behaviour </p>
          <a href="#" class="read-more">Read more<i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
      <div class="col-md-4 col-12">
        <div class="">
          <img class="tab-img" src="../img/article/article-img-3.jpg">
          <h3 class="card-ttl">Mekong Group Food</h3>
          <p class="card-desc">Building brands and idea-led experiences that engage people & motivate behaviour </p>
          <a href="#" class="read-more">Read more<i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
    </div>
  </div>


  <script type="text/javascript" src="../js-cmn/fullpage/fullpage.js"></script>

  <script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
      anchors: ['Branding-guideline', 'Logo', 'Spacing', 'Brand-Ratio'],
      sectionsColor: ['#fff'],
      menu: '#hd',
      navigation: false,
      navigationPosition: 'left',
      navigationTooltips: ['Home', 'Service', 'Work', 'Academy'],
      responsiveWidth: 900,
      afterResponsive: function(isResponsive){
      }

    });
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../css-cmn/slick-1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.bnr-fade').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        appendDots: $('.bnrSlide'),
        infinite: true,
        speed: 700,
        fade: true,
        cssEase: 'linear',
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
      });
    });
  </script>


 <!--  <script type="text/javascript">
    window.oncontextmenu = (e) => {
      e.preventDefault();
    }
  </script> -->
</body>
</html>