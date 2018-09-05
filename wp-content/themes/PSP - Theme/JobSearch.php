<?php
/**
 * Template Name: JobSearch
 */
?>
<?php get_header(); ?>   
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/jobsearch.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#jp1").click(function(){
            $(".main").hide();
            $("#post-1").toggle();
        });
        $("#jp2").click(function(){
            $(".main").hide();
            $("#post-2").toggle();
        });
    });
    </script>

    <div class="navbar">
      <div class="row">
        <div class="col-12">
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row-centered c6_1">
        <div class="col-6">
            <form method="get" action="/" class="form-inline" >
                <input name="q" class="span5" type="text"  placeholder=" Keyword or Title ">
                <input name="loc"class="span3" type="text"  placeholder=" Location">
                <button class="search" href="#"><a class="fa fa-search"></a></button>
            </form>
        </div>
      </div>
      <div class="row c6_2">
        <div class="col-6">
          <a href="#">Post Jobs</a>
          <a href="#">Post Resume</a>
          <a href="#">Build Resume</a>
          <a href="#">Member Services</a>
        </div>
      </div>
      <div class="row-fluid c6_3">
        <div class="col-4 sidebar" id="sidebar">
          <div class="job-post" id="jp1">
            <div class="col-3 icon"><i class="fa fa-building"></i></div>
            <div class="col-6"><h4 id="title">Web Developer</h4>
                             <a id="company">Pantsuit Professionals</a>
                             <a id="location">New York, NY</a>
            </div>
            <div class="col-3 date"><a id="date">6/25/2018</a></div>
          </div>
          <div class="job-post" id="jp2">
            <div class="col-3 icon"><i class="fa fa-building"></i></div>
            <div class="col-6"><h4 id="title">Marketing Director</h4>
                             <a id="company">Pantsuit Professionals</a>
                             <a id="location">New York, NY</a>
            </div>
            <div class="col-3 date"><a id="date">6/25/2018</a></div>
          </div>
          <div class="job-post" id="jp3">
            <div class="col-3 icon"><i class="fa fa-building"></i></div>
            <div class="col-6" id="nametag"><h4 id="title">Graphic Designer</h4>
                             <a id="company">Pantsuit Professionals</a>
                             <a id="location">New York, NY</a>
            </div>
            <div class="col-3 date"><a id="date">6/25/2018</a></div>
          </div>
        </div>
        <div class="col-7 main" id="post-1">
          <div class="row img" style="background-image: url(<?php echo get_template_directory_uri();?>/img/stock11.jpg);"></div>
          <div class="row post-header">
            <div class="col-3 icon"><i class="fa fa-wordpress"></i></div>
            <div class="col-6" id="nametag"><h3 id="title">Web Developer</h3>
                                            <a id="company">Pantsuit Professionals</a>
                                            <a id="location">New York, NY</a>
          </div>
          <div class="col-3 apply"><button class="btn">Apply</button></div>
        </div>
        <div class="row">
          <div class="col-12 summary">
            <h2>Summary</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
        </div>
        <div class="col-7 main" id="post-2">
          <div class="row img" style="background-image: url(<?php echo get_template_directory_uri();?>/img/stock6.jpg);"></div>
          <div class="row post-header">
            <div class="col-3 icon"><i class="fa fa-briefcase"></i></div>
            <div class="col-6" id="nametag"><h3 id="title">Marketing Director</h3>
                                            <a id="company">Pantsuit Professionals</a>
                                            <a id="location">New York, NY</a>
          </div>
          <div class="col-3 apply"><button class="btn">Apply</button></div>
        </div>
        <div class="row">
          <div class="col-12 summary">
            <h2>Summary</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </div>
    <?php get_footer(); ?>
