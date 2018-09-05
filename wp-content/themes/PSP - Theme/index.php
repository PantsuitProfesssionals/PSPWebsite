<?php get_header(); ?>
 <!-- blog title -->
<div class="homepage_nav_title section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="index_titles blog single"><?php if (function_exists('onepage_breadcrumbs')) onepage_breadcrumbs(); ?></div>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<!-- blog title ends -->
<div class="blog_pages_wrapper default_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                [events_list]
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        get_template_part('templates/content');
                    }
                } else {
                    ?>
                    <div class="post">
                        <p>
                            <?php _e('Sorry, no posts matched your criteria.', 'one-page'); ?>
                        </p>
                    </div>
                <?php } ?>
                <div class="clear"></div>
                <nav id="nav-single"> <span class="nav-previous">
                        <?php next_posts_link(__('&larr; Previous posts', 'one-page')); ?>
                    </span> <span class="nav-next">
                        <?php previous_posts_link(__('Newer posts &rarr;', 'one-page')); ?>
                    </span> </nav>

            </div>
            <!-- sidebar -->
            <div class="col-md-4">
                <!--Start Sidebar-->
                <!--End Sidebar-->
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>