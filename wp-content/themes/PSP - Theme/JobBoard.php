<?php
/**
 * Template Name: JobBoard
 */
?>
<?php get_header(); ?>   
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/JobBoardstyle.css">
    <!-- Fonts -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <div class="navbar">
      <div class="row">
        <div class="col-12">
        </div>
      </div>
    </div>
    <div class="container-fluid, c2_1 border-bot">
        <div class="row-centered">
          <div class="col-6">
            <h1>FIND JOBS</h1>
            <form method="get" action="/" class="form-inline" >
                <input name="q" class="span5" type="text"  placeholder=" Keyword or Title ">
                <input name="loc"class="span3" type="text"  placeholder=" Location">
                <button class="search" href="#"><a class="fa fa-search"></a></button>
            </form>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row, c2_2 border-bot">
          <div class="inner-container">
            <div class="inc">
              <div class="col-6">
                <h2>Post Jobs</h2>
                <p>Lorem ipsum dolor sit amet.</p>
              </div>
              <div class="col-2">
                <a href='#' class='button'>Start Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row, c2_3">
          <div class="col">
            <h1>How does it work?</h1>
          </div>
        </div>
        <div class="row, c2_3">
          <div class="width">
            <div class="col-4">
              <a href="#" class="fa fa-search"></a>
              <h3>Search Jobs</h3>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
            <div class="col-4">
              <a href="#" class="fa fa-bullhorn"></a>
              <h3>Get Discovered</h3>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
            <div class="col-4">
              <a href="#" class="far fa-address-card"></a>
              <h3>Build a Profile</h3>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <div class="row, c2_3 border-bot">
          <div class="col-12">
            <button class="btn-lg">Get Started</button>
          </div>
        </div>
        <div class="c2_4 border-bot">
        <div class="row padding-top margin-right">
          <div class="col-12">
            <h1>Top Companies Hiring Now</h1>
          </div>
        </div>
        <div class="row margin-right">
          <div class="inner-container">
          <div class="col-4">
            <div class="col, logo"><img src="<?php echo get_template_directory_uri();?>/css/img/logo.png"></div>
            <div class="col">
              <h3>Company Name</h3>
              <p>Description</p>
              <p>Opportunities   <a href="#" class="fa fa-angle-double-right"></a></p>
            </div>
          </div>
          <div class="col-4">
            <div class="col, logo"><img src="<?php echo get_template_directory_uri();?>/css/img/logo.png"></div>
            <div class="col">
              <h3>Company Name</h3>
              <p>Description</p>
              <p>Opportunities   <a href="#" class="fa fa-angle-double-right"></a></p>
            </div>
          </div>
          <div class="col-4">
            <div class="col, logo"><img src="<?php echo get_template_directory_uri();?>/css/img/logo.png"></div>
            <div class="col">
              <h3>Company Name</h3>
              <p>Description</p>
              <p>Opportunities   <a href="#" class="fa fa-angle-double-right"></a></p>
            </div>
          </div>
        </div>
        </div>
        </div>
        <div class="row, c2_5 border-bot">
          <div class="inner-container">
            <div class="col-4" style="background-image:url(<?php echo get_template_directory_uri();?>/css/img/company.jpg);">
              <div class="label">
                <h2>Company Profile</h2>
              </div>
            </div>
            <div class="col-4" style="background-image:url(<?php echo get_template_directory_uri();?>/css/img/resume.jpg);">
              <div class="label">
                <h2>Resume Builder</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row, c2_6">
          <div class="col-12">
            <h1>Become a Member</h1>
            <h4>Lorem ipsum dolor sit amet</h4>
            <button class="btn">Create an Account</button>
          </div>
        </div>
      </div>
    <?php get_footer(); ?>
