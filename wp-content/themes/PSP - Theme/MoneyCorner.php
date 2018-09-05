<?php
/**
 * Template Name: MoneyCorner
 */
?>
<?php get_header(); ?>   
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/MoneyCorner.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Required meta tags -->

    <!-- Bootstrap CSS -->
    <script type='text/javascript' src='<?php echo get_template_directory_uri();?>/js/jquery.js'></script>
    <!-- jquery-3 -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <hr>
    <div class="container-fluid">
      <div class="row justify-content-md-center" >
        <div class="col-lg-12" style="text-align: center;letter-spacing: 5px;"><h1>Money</h1></div>
        <div class="col-lg-12 hero" style=" height: 600px;background-size:1412px 600px;margin-top: 50px;"></div>
      </div>
      <div class="row">
        <div class="col-6 border-right">
            <h2>What is Money Corner?</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diamnonummy nibn euis.</p>
        </div>
        <div class="col-6">
            <h2>How it Works</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diamnonummy nibn euis.</p>
            <button class="btn" href="/cba">Get Started</button>
        </div>
      </div>
      <div class="row justify-content-md-center ">
        <h2><a>Learn<br/>About Finances</a></h2>
        <div class="col-3">
          <button class="bb btn" href="/infoblog">Button</button>
        </div>
        <div class="col-12 img2"></div>
      </div>
      <div class="row justify-content-md-center">
        <div class="col-5 img3"></div>
        <div class="col-5">
          <h2>How can money help you?</h2>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diamnonummy nibn euis.</p>
          <button class="btn" href="/infoblog">Button</button>
        </div>
      </div>
      <div class="row" style="height: 600px">
        <div class="col-7" style="margin-top: 60px">
          <h1 >Interested in Learning about <br><i> 'Social Responsible Investing' ?</i></h1>
          <h3 style="margin-top: 15px"> Crystal Brook Advisors</h3>
          <h4 style="margin-top: 10px">Financial Planning and Investment Services</h4>
          <button class="btn" href="/cba" style="margin-top: 10px">Learn More</button>
        </div>
        <div class="col-5 calc" style="height: inherit; background-color: #fff">
          <h2>Calculate your Savings</h2>
          <object data="<?php echo get_template_directory_uri();?>/index.html" style="width:100%; height: inherit;"></object>

        </div>
      </div>
    </div>
<?php get_footer(); ?>