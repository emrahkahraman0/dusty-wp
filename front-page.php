<?php 
/*Template Name: Home Page*/
get_header(); ?>

<div id="home-slider">

<?php if( have_rows('home_slider') ): ?>

    <div class="home-slider-owl owl-carousel owl-theme">

    <?php while( have_rows('home_slider') ): the_row();
    
        //vars
        $home_slider_img = get_sub_field('home_slider_img');
        $home_slider_text = get_sub_field('home_slider_text');
        $home_slider_number = get_sub_field('home_slider_number');
    
    ?>

        <div class="item" data-dot="<span><?php echo $home_slider_number; ?></span>">
            <img data-src="<?php echo $home_slider_img; ?>" src="<?php bloginfo('template_url'); ?>/img/lazyload-1920x750.png" class="lazyload" alt="">
            <div class="overlay-caption"><?php echo $home_slider_text; ?></div>
        </div>
        <!-- item -->

    <?php endwhile; ?>

    </div>
    <!-- home-slider-owl -->

    <?php endif; ?>

</div>
<!-- home-slider# -->

<div id="home-services">

    <div class="container">

        <div class="title">
            <h5><?php the_field('home_services_head'); ?></h5>
            <h6><?php the_field('home_services_desc'); ?></h6>
        </div>
        <!-- title -->

        <?php if( have_rows('home_services_item') ): ?>

        <div class="home-services-owl owl-carousel owl-theme">

        <?php while( have_rows('home_services_item') ): the_row(); ?>

            <div class="item">
                <?php echo get_sub_field('home_services_item_icon'); ?>
                <h6><?php echo get_sub_field('home_services_item_name'); ?></h6>
                <p><?php echo get_sub_field('home_services_item_desc'); ?></p>
            </div>
            <!-- item -->

        <?php endwhile; ?>

        </div>
        <!-- home-services-owl -->

        <?php endif; ?>

    </div>
    <!-- containerr -->

</div>
<!-- home-services# -->

<div id="home-about">

    <div class="home-about-wrapper">

        <div class="home-about-img">
            <img data-src="<?php the_field('home_about_img'); ?>" src="<?php bloginfo('template_url'); ?>/img/lazyload-450x450.png" class="img-fluid lazyload" alt="">
        </div>
        <!-- home-about-img -->
        <div class="home-about-text">
            <h6><?php the_field('home_about_head'); ?></h6>
            <p><?php the_field('home_about_desc'); ?></p>
            <button><a href="<?php the_field('home_button_href'); ?>"><?php the_field('home_about_button'); ?></a></button>
        </div>
        <!-- home-about-text -->

    </div>
    <!-- home-about-wrapper -->

</div>
<!-- home-about# -->

<div id="home-features">

    <div class="container">

        <div class="title">
            <h5><?php the_field('home_feature_head'); ?></h5>
            <h6><?php the_field('home_feature_desc'); ?></h6>
        </div>
        <!-- title -->

       <div class="home-features-wrapper d-flex align-items-center row">

        <?php if( have_rows('home_feature_owl') ): ?>

        <div class="home-features-owl owl-carousel owl-theme col-xl-6 col-lg-6 col-md-12 col-sm-12">

        <?php while( have_rows('home_feature_owl') ): the_row(); ?>

            <div class="item">
                <img data-src="<?php echo get_sub_field('home_feature_owl_img'); ?>" src="<?php bloginfo('template_url'); ?>/img/lazyload-250x250.png" class="lazyload" alt="">
            </div>
            <!-- item -->

            <?php endwhile; ?>

        </div>
        <!-- home-features-owl -->

        <?php endif; ?>

        <?php if( have_rows('home_feature_icons') ): ?>

        <div class="home-features-icons col-xl-6 col-lg-6 col-md-12 col-sm-12">

        <?php while( have_rows('home_feature_icons') ): the_row(); ?>

            <div class="icons">
                <div class="icon"><?php echo get_sub_field('home_feature_icon'); ?></div>
                <div class="icon-desc">
                    <h6><?php echo get_sub_field('home_feature_name'); ?></h6>
                    <p><?php echo get_sub_field('home_feature_desc'); ?></p>
                </div>
            </div>
            <!-- icons -->

        <?php endwhile; ?>

        </div>
        <!-- home-features-icons -->

        <?php endif; ?>

       </div>
       <!-- home-features-wrapper -->

    </div>
    <!-- container -->

</div>
<!-- home-features# -->

<?php get_template_part( 'templates/brands', 'page' ); ?>

<?php get_template_part( 'templates/info', 'page' ); ?>

<?php get_footer(); ?>