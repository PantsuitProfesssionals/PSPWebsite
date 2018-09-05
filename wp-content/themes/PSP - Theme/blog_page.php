<?php
/**
 * Template Name: Blog
 */
?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/blog.css">
    <!-- Javascript Load More/ Back to Top Button -->
    <script>
      $(function () {
          $(".cont").slice(0, 9).show();
          $("#loadMore").on('click', function (e) {
              e.preventDefault();
              $(".cont:hidden").slice(0, 6).slideDown();
              if ($(".cont:hidden").length == 0) {
                  $("#load").fadeOut('slow');
              }
              $('html,body').animate({
                  scrollTop: $(this).offset().top
              }, 1500);
          });
      });

      $('a[href="#top"]').click(function () {
          $('body,html').animate({
              scrollTop: 0
          }, 600);
          return false;
      });

      $(window).scroll(function () {
          if ($(this).scrollTop() > 50) {
              $('.totop i').fadeIn();
              $('.subscribe ').fadeIn();
              $('.subbox').fadeOut();
          } else {
              $('.totop i').fadeOut();
              $('.subscribe ').fadeOut();
          }
      });

      function subClick() {
        document.getElementById("subbox").style.display = "none";
      };

      function emailIcon() {
        document.getElementById("email").style.display = "none";
        document.getElementById("subbox").style.display = "block";
      };
    </script>

    <div class="navbar"></div>
    <div class="container-fluid">
      <div class="row blogrow">
        <div class="col-12 feature"></div>
        <div class="col-12">
          <a>LOREM IPSUM DOLOR SIT AMET CONSECTETUR ADIPISICING ELIT SED</a>
        </div>
      </div>
      <div class="row blogrow">
        <div class="col-4">
          <div class="cont">
            <a href="http://localhost/psp/blog-post/"><div class="col img5 img-fluid" alt="Responsive image"></div></a>
            <h3>LOREM IPSUM SELT DE RUNEI DOLOR SIT AMET CONSECTETUR ADIPISICING ELIT SED</h3>
          </div>
        </div>
        <div class="col-4">
          <div class="cont">
            <div class="col img6 img-fluid" alt="Responsive image"></div>
            <h3>LOREM IPSUM SELT DE RUNEI</h3>
          </div>
        </div>
        <div class="col-4">
          <div class="cont">
            <div class="col img7 img-fluid" alt="Responsive image"></div>
            <h3>LOREM IPSUM SELT DE RUNEI DOLOR SIT AMET CONSECT</h3>
          </div>
        </div>
      </div>
      <div class="row blogrow">
        <div class="col-6">
          <div class="cont">
            <div class="col img8 img-fluid" alt="Responsive image"></div>
            <h3>LOREM IPSUM SELT DE RUNEI</h3>
          </div>
        </div>
        <div class="col-6">
          <div class="cont">
            <div class="col img9 img-fluid" alt="Responsive image"></div>
            <h3>LOREM IPSUM SELT DE RUNEI DOLOR SIT AMET CONSECTETUR</h3>
          </div>
        </div>
      </div>
      <div class="row blogrow">
        <div class="col-4">
          <div class="cont">
            <div class="col img10 img-fluid" alt="Responsive image"></div>
            <h3>LOREM IPSUM SELT DE RUNEI</h3>
          </div>
        </div>
        <div class="col-8">
          <div class="cont">
            <div class="col img11 img-fluid" alt="Responsive image"></div>
            <h3>LOREM IPSUM SELT DE RUNEI DOLOR SIT AM</h3>
          </div>
        </div>
      </div>
      <div class="row blogrow">
        <div class="col-8">
          <div class="cont">
            <div class="col img12 img-fluid" alt="Responsive image"></div>
            <h3>LOREM IPSUM SELT DE RUNEI</h3>
          </div>
        </div>
        <div class="col-4">
          <div class="cont">
            <div class="col img13 img-fluid" alt="Responsive image"></div>
            <h3>LOREM IPSUM SELT DE RUNEI DOLOR SIT AMET CONSECTETUR ADIPISI</h3>
          </div>
        </div>
      </div>
<!-- additional posts -->
      <div class="row blogrow">
        <div class="col-6">
          <div class="cont">
            <div class="col img8 img-fluid" alt="Responsive image"></div>
            <h3>LOREM IPSUM SELT DE RUNEI</h3>
          </div>
        </div>
        <div class="col-6">
          <div class="cont">
            <div class="col img9 img-fluid" alt="Responsive image"></div>
            <h3>LOREM IPSUM SELT DE RUNEI DOLOR SIT AMET CONSECTETUR</h3>
          </div>
        </div>
      </div>
      <div class="row blogrow">
        <div class="col-4">
          <div class="cont">
            <div class="col img10 img-fluid" alt="Responsive image"></div>
            <h3>LOREM IPSUM SELT DE RUNEI</h3>
          </div>
        </div>
        <div class="col-8">
          <div class="cont">
            <div class="col img11 img-fluid" alt="Responsive image"></div>
            <h3>LOREM IPSUM SELT DE RUNEI DOLOR SIT AM</h3>
          </div>
        </div>
      </div>
      <div class="row blogrow">
        <div class="col-8">
          <div class="cont">
            <div class="col img12 img-fluid" alt="Responsive image"></div>
            <h3>LOREM IPSUM SELT DE RUNEI</h3>
          </div>
        </div>
        <div class="col-4">
          <div class="cont">
            <div class="col img13 img-fluid" alt="Responsive image"></div>
            <h3>LOREM IPSUM SELT DE RUNEI DOLOR SIT AMET CONSECTETUR ADIPISI</h3>
          </div>
        </div>
      </div>
<!-- -->
      <div class="loadrow blogrow">
        <div class="col-3 btn">
          <a href="#" id="loadMore">LOAD MORE</a>
        </div>
      </div>
      <p class="subscribe" onclick="emailIcon()" id='email'>
        <a><i class="far fa-envelope fa-2x"></i></a>
      </p>
      <div class="subbox" id='subbox'>
        <p>Subscribe to our articles</p>
        <form method="get" action="/" class="form-inline" >
            <input name="sub"class="span3" type="text"  placeholder="Email">
            <button onclick="bodyClick()" href="#">subscribe</button>
        </form>
      </div>
      <p class="totop">
          <a href="#top"><i class="far fa-arrow-alt-circle-up fa-3x"></i></a>
      </p>
    </div>

<?php get_footer(); ?>