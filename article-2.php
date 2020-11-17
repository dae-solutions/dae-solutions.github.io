<?php include('header_1.php') ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h4>Event</h4>
      <p>We deliver experience-led transformation, solving complex business challenges through our digital marketing & communications, ecosystems & commerce, products & services and transformation consulting offering. 
        Our experts use high-craft, creativity, and technological innovation to create exceptional brand experiences. Our consultancy expertise and our market-leading practices ensure excellence in our end-to-end consult to delivery offering. 
      </p>
    </div>
  </div>
</div>
<div class="container">
  <h4>Orther</h4>
  <div class="row">
    <div class="col-md-4 col-12">
      <div class="work-card">
        <img class="tab-img" src="../img/article/article-img-4.jpg">
        <h3 class="card-ttl">Digital & Communications</h3>
        <p class="card-desc">Building brands and idea-led experiences that engage people & motivate behaviour </p>
        <a href="#" class="read-more">Read more<i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
    <div class="col-md-4 col-12">
      <div class="work-card">
        <img class="tab-img" src="../img/article/article-img-5.jpg">
        <h3 class="card-ttl">Digital & Communications</h3>
        <p class="card-desc">Building brands and idea-led experiences that engage people & motivate behaviour </p>
        <a href="#" class="read-more">Read more<i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
    <div class="col-md-4 col-12">
      <div class="work-card">
        <img class="tab-img" src="../img/article/article-img-6.jpg">
        <h3 class="card-ttl">Digital & Communications</h3>
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