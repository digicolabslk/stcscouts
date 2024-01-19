<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>StcScouts</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- Google fonts-->

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />

<link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>

<button onclick="topFunction()" id="scBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>

<div class="background" id="bnnr">
  <div class="banner-heading">
    <h1>
      Welcome to the official website of the 16th Colombo Scout Group of S.
      Thomas' College, Mount Lavinia.
    </h1>
    <p>
      The 16th Colombo Scout Group is one of the leading Scout Groups in Sri
      Lanka. The Scout Movement is dedicated to the creation of youth
      leaders and this is one outlet. At S. Thomas’ College, Mount Lavinia
      our objective is to become the ‘model Scout Group.’ Staying true to
      the Spirit of Scouting, the Troop takes pride in combining knowledge
      with fun to create an all round experience for Scouts of all ages.
    </p>

    <div class="a-dwn">
      <a href="#section-01"><i class="fa fa-chevron-circle-down"></i></a>
    </div>
  </div>
</div>

  @include("layouts.header")  

  <section id="section-01">
    <div class="slider">

      <!-- fade css -->
      <div class="myslide fade">
        <div class="txt">
          <h1>The Troop</h1>
          <p>The 16th Colombo Scout Troop has over 60 active scouts. The Troop is divided into three senior patrols and
            five junior patrols. </p>
        </div>
        <div>
          <a href="#" class="btn">
            <span class="btn-inner">LearnMore</span></a>
        </div>
        <img src="img/s-01.jpg" style="width: 100%; height: 100%;">
      </div>

      <div class="myslide fade">
        <div class="txt">
          <h1>The Club Pack</h1>
          <p>The Cub Scout Pack of 16th Colombo has over 200 Cubs between the ages of 7 and 11 years of age. </p>
        </div>
        <div>
          <a href="#" class="btn">
            <span class="btn-inner">LearnMore</span></a>
        </div>
        <img src="img/s-02.jpg" style="width: 100%; height: 100%;">
      </div>

      <div class="myslide fade">
        <div class="txt">
          <h1>The Evolution</h1>
          <p>Since the 16th Colombo Scout Troop was founded nearly a century ago, it has continued to be the island’s
            leading Scout Troop and has popularly been refered to as ‘The Model Scout Troop.’ The Troop has had a rich
            history of
            Scouting at S. Thomas’ College, Mount Lavinia.</p>
        </div>
        <div>
          <a href="#" class="btn">
            <span class="btn-inner">LearnMore</span></a>
        </div>
        <img src="img/s-03.jpg" style="width: 100%; height: 100%;">
      </div>
    </div>
  </section>

  
  <!-- /fade css -->

  <!-- onclick js -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <div class="dotsbox" style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
  <!-- /onclick js -->
  </div>

  @include("layouts.footer")

</body>

<script src="{{asset ('js/script.js')}}"></script>

</script>

</html>