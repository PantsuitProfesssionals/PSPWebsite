<?php
/**
 * Template Name: Login
 */
?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/login.css">
    <script src="<?php echo get_template_directory_uri();?>/js/login.js"></script>

    <!--begin login-->
<section class="features-icons bg-white text-center" >     
    <div class="form-wrap">
        <div class="tabs">
            <h3 class="signup-tab"><a class="active" href="#signup-tab-content">Sign Up</a></h3>
                <h3 class="login-tab"><a href="#login-tab-content">Login</a></h3>
        </div><!--.tabs-->
            
    <div class="tabs-content">
        <div id="signup-tab-content" class="active">
            <form class="signup-form" action="" method="post">
                <input  style="border-radius: 1.25rem" type="email" class="input" id="user_email" autocomplete="off" placeholder="Email">
                <input  style="border-radius: 1.25rem" type="text" class="input" id="user_name" autocomplete="off" placeholder="Username">
                <input  style="border-radius: 1.25rem" type="password" class="input" id="user_pass" autocomplete="off" placeholder="Password">
                <input  style="border-radius: 1.25rem" type="submit" class="button" value="Sign Up">
            </form><!--.login-form-->
                <div class="help-text">
                    <p>By signing up, you agree to our</p>
                    <p><a href="#">Terms of service</a></p>
                </div><!--.help-text-->
        </div><!--.signup-tab-content-->
            
        <div id="login-tab-content">
            <form class="login-form" action="" method="post">
                <input  style="border-radius: 1.25rem" type="text" class="input" id="user_login" autocomplete="off" placeholder="Email or Username">
                 <input  style="border-radius: 1.25rem" type="password" class="input" id="user_pass" autocomplete="off" placeholder="Password">
                                
                    <label style="margin-top:10px;" for="remember_me">Remember me</label>
            
                        <input  style="border-radius: 1.25rem" type="submit" class="button" value="Login">
                            </form><!--.login-form-->
                            <div class="help-text">
                                <p><a href="#">Forget your password?</a></p>
                            </div><!--.help-text-->
                        </div><!--.login-tab-content-->
                    </div><!--.tabs-content-->
                </div><!--.form-wrap-->
    </section>
    <!--end login-->

<?php get_footer(); ?>