<?php
/**
 * Template Name: Homepage
 */
?>
<?php get_header(); ?>   
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/Homepage.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <hr>
    <!--sample image carousel-->
    <div class="bs-example">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
              <div class="item active">
                  <img class="carouselImages" src="<?php echo get_template_directory_uri();?>/css/img/1.jpeg" alt="First Slide" width="100%"  >
              </div>
              <div class="item">
                  <img class="carouselImages" src="<?php echo get_template_directory_uri();?>/css/img/2.jpeg" alt="Second Slide" width="100%">
              </div>
              <div class="item">
                  <img class="carouselImages" src="<?php echo get_template_directory_uri();?>/css//img/3.jpeg" alt="Third Slide" width="100%">
              </div>
          </div>
          <!-- Carousel controls -->
          <a class="carousel-control left" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
      </div>
  </div>
    <!--end of image carousel -->

    <!--section for our story-->

      <section class="features-icons bg-light text-center" style="background-color: #FFF!important; margin-top: 80px;">
        <div class="container">
          <h1 style="font-family: 'RETROSUPERSKINNY'!important; font-size: 40px">Our Story</h1>
          <div class="row">
            <div class="col-lg-12" style="font-family: 'Vienna_Font-Regular'!important; font-size: 20px">
              <p>Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.</p>
            </div>
          </div>
        </div>
        <div class="container" style="padding-top: 32px;">
          <button type="submit" class="btn" style="background-color: #ffccd0; color: #000; box-shadow: 0 0 3px #ffb3b9; font-size: 18px;">Why For Women?</button>
        </div>
      </section>

      <hr style="margin: 120px 0px 120px 0px !important;">

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center" style="background-color: #FFF!important;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon" style="margin-bottom: 25px;">
                <i class="fa fa-bullhorn" aria-hidden="true" style="text-align: center !important; font-size: 70px!important;"></i>
              </div>
              <h1 style="font-family: 'CaviarDreams'!important; font-size: 30px">Search<br>Jobs</h1>
              <p class="lead mb-0" style="font-size: 20px;">Insert text here.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon" style="margin-bottom: 25px;">
                <i class="fa fa-search" aria-hidden="true" style="text-align: center !important; font-size: 70px!important;"></i>
              </div>
              <h1 style="font-family: 'CaviarDreams'!important; font-size: 30px">Get<br>Discovered</h1>
              <p class="lead mb-0" style="font-size: 20px;">Insert text here. </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon " style="margin-bottom: 25px;"3>
                <i class="fa fa-users" aria-hidden="true" style="text-align: center !important; font-size: 70px!important"></i>
              </div>
                <h1 style="font-family: 'CaviarDreams'!important; font-size: 30px">Build<br>your profile</h1>
              <p class="lead mb-0" style="font-size: 20px;">Insert Text here.</p>
            </div>
          </div>
        </div>
      </div>


        <div class="container" style="padding-top: 32px;">
          <button type="submit" class="btn" style="background-color: #ffccd0; color: #000; box-shadow: 0 0 3px #ffccd0; font-size: 18px;">Sign up!</button>
        </div>

    </section><!--section for campus-->
    <hr style="margin: 120px 0px 120px 0px !important;">
       <section class="features-icons bg-light text-center" style="background-color: #fff !important; padding: 0px !important;">
        <div class="container-fluid" style="margin-left: px ;">
                
              <div class="col-md-6" style="padding-top: px;">
              <img style="height: 475px; width: 400px; margin-right: 0px !important; " src="<?php echo get_template_directory_uri();?>/css/img/campus-1.jpg" alt="">
              </div>    

              <div class="col-md-4  " style="padding-top: 120px; padding-left: px; padding-right: 0px; margin-left: 0px; align-items: justify">
                <h1 style="font-family: 'CaviarDreams'!important; font-size: 40px">Our Story</h1>
              <div style="font-family: 'Champagne & Limousines'!important; font-size: 20px">
                <p >Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.</p>
              </div>
              <button type="submit" class="btn" style="background-color: #A6A6A6; font-size: 15px; padding: 10px; border-radius: 1.25rem;">Why For Women?</button>
               </div>
            
        </div>
      </section>
      <!--section for campus ends-->
<hr style="margin: 120px 0px 120px 0px !important;">
             <!--section for campus-->
<section class="features-icons bg-light text-center" style="background-color: #fff !important; padding: 0px !important;">
  <div class="container-fluid" style="margin-left: px ;">
    <div class="col-md-6" style="padding-top: 150px; padding-left: px; padding-right: 0px; margin-left: 0px;">
      <h1 style="font-family: 'CaviarDreams'!important; font-size: 40px">Our Story</h1>
        <div style="font-family: 'Champagne & Limousines'!important; font-size: 20px">
          <p >Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.Insert text here.</p>
        </div>
      <button type="submit" class="btn" style="background-color: #A6A6A6; font-size: 15px; padding: 10px; border-radius: 1.25rem;">Why For Women?</button>
    </div>

  <div class="col-md-6" style="padding-left: px;">
    <img style="height: 475px; width: 400px; margin-right: 0px !important; " src="<?php echo get_template_directory_uri();?>/css/img/campus-3.jpg" alt="">
  </div>
 </div>
</section>
            <!--section for campus ends-->

    <hr style="margin: 120px 0px 120px 0px !important;">
    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center" style="background-color: #FFF!important;">
      <div class="container">
        <h1 style="padding-bottom: 32px; font-family: 'CaviarDreams' !important">Check out our exclusive merch! </h1>
        <div class="row">
          <div class="col-lg-3">
            <img src="<?php echo get_template_directory_uri();?>/css/img/s2-2.png" alt="" style="background-color: #fff4f5;" class="img-thumbnail">
              <h1 style="font-family: 'CaviarDreams'!important; font-size: 25px; padding-top: 20px;">PSPro Cap</h1>
              <p class="lead mb-0" style="font-size: 20px;"></p>
            </div>
            <div class="col-lg-3">
            <img src="<?php echo get_template_directory_uri();?>/css/img/s4-2.png" alt="" style="background-color: #fff4f5;" class="img-thumbnail">
              <h1 style="font-family: 'CaviarDreams'!important; font-size: 25px; padding-top: 20px;">PSPro Mug</h1>
              <p class="lead mb-0" style="font-size: 20px;"></p>
            </div>
          <div class="col-lg-3">
              <img src="<?php echo get_template_directory_uri();?>/css/img/s1-2.png" style="filter: grayscale(100%);filter:blur();height:255px;width: 350; background-color: #fff4f5;" alt="" class="img-thumbnail">
              <h1 style="font-family: 'CaviarDreams'!important; font-size: 25px ; padding-top: 20px;">PSPro T-Shirt</h1>
              <p class="lead mb-0" style="font-size: 20px;"></p>
              </div>
          <div class="col-lg-3">
                <img src="<?php echo get_template_directory_uri();?>/css/img/s3-2.png" alt="" style="height:255px;width: 350px;background-color: #fff4f5;" class="img-thumbnail">
                <h1 style="font-family: 'CaviarDreams'!important; font-size: 25px; padding-top: 20px;">PSPro Bag</h1>
              <p class="lead mb-0" style="font-size: 20px;"></p>
        </div>
      </div>

        <div class="container" style="padding-top: 32px;">
          <button type="submit" class="btn" style="background-color: #ffccd0; color: #000; box-shadow: 0 0 3px ##ffccd0; font-size: 18px;">Pre-order now!</button>
        </div>

    </section>

    <hr style="margin: 120px 0px 120px 0px !important;">
    
    <!--blog section -->
    <section class="call-to-action text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h2 class="mb-4">Insert blog section here</h2>
          </div>
          </div>
      </div>
    </section>

    

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light" style="background-color: #FFF!important;">
      <div class="container">
        <h2 class="mb-5" style="font-family: 'CaviarDreams' !important; font-weight: bold;">Download PSPro Mobile App</h2>
        <div class="row">
          <div class="col-lg-4" style="padding-top:32px;">
            <div class="mx-auto mb-5 mb-lg-0">
              <img class="mb-3" src="http://newyorkhowto.com/wp-content/uploads/2018/05/appstore-button-google.png" alt="" style="height: 98px; width:300px">
            </div>
            <div class="mx-auto mb-5 mb-lg-0">
              <img class="mb-3" src="http://newyorkhowto.com/wp-content/uploads/2018/05/appstore-button-google.png" alt="" style="height: 98px; width:300px">
            </div>
          </div>
          <div class="col-lg-8">
            <div class="mx-auto mb-5 mb-lg-0">
              <img class="mb-3" src="http://newyorkhowto.com/wp-content/uploads/2018/05/Capture1.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

 <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
    <?php get_footer(); ?>
