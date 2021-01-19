<?php 
/*Template Name: About Page*/
get_header(); ?>

<div id="about-page" style="width: 100%; height: 250px; background: url('<?php the_field('about_page_background'); ?>'); background-position: center center; background-size: cover; position: relative;">

    <div class="page-title"><?php the_title(); ?></div>

</div>
<!-- about-page# -->

<div id="about-info">

    <div class="container">

        <div class="about-info-wrapper d-flex align-items-center row">

            <div class="about-info-img col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <img data-src="<?php the_field('about_info_img'); ?>" src="<?php bloginfo('template_url'); ?>/img/lazyload-500x500.png" class="img-fluid lazyload" alt="">
            </div>
            <!-- about-info-img -->
            <div class="about-info-text col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <h5><?php the_field('about_info_head'); ?></h5>
                <h6><?php the_field('about_info_title'); ?></h6>
                <p><?php the_field('about_info_desc'); ?></p>
            </div>
            <!-- about-info-img -->

        </div>
        <!-- about-info-wrapper -->

    </div>
    <!-- container -->

</div>
<!-- about-info# -->

<div id="mission-vission">

    <div class="container">

        <div class="mission-vission-wrapper row">

            <div class="mission col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="icon"><?php the_field('mission_icon'); ?></div>
                <div class="icon-desc">
                    <h6><?php the_field('mission_head'); ?></h6>
                    <p><?php the_field('mission_desc'); ?></p>
                </div>
                <!-- icon-desc -->
            </div>
            <!-- mission -->
            <div class="vission col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="icon"><?php the_field('vission_icon'); ?></div>
                <div class="icon-desc">
                    <h6><?php the_field('vission_head'); ?></h6>
                    <p><?php the_field('vission_desc'); ?></p>
                </div>
                <!-- icon-desc -->
            </div>
            <!-- vission -->

        </div>
        <!-- mission-vission-wrapper -->

    </div>
    <!-- container -->

</div>
<!-- mission-vission -->

<div id="about-team">

    <div class="container">

        <div class="title">
            <h5><?php the_field('about_team_head'); ?></h5>
            <h6><?php the_field('about_team_desc'); ?></h6>
        </div>
        <!-- title -->

    <?php if( have_rows('about_team_items') ): ?>

        <div class="about-team-owl owl-carousel owl-theme">

        <?php while( have_rows('about_team_items') ): the_row();
    
            //vars
            $about_team_img = get_sub_field('about_team_img');
            $about_team_name = get_sub_field('about_team_name');
            $about_team_job = get_sub_field('about_team_job');
    
        ?>

            <div class="item">
                <img data-src="<?php echo $about_team_img; ?>" src="<?php bloginfo('template_url'); ?>/img/lazyload-250x250.png" class="lazyload" alt="">
                <h5><?php echo $about_team_name; ?></h5>
                <h6><?php echo $about_team_job; ?></h6>
            </div>
            <!-- item -->

        <?php endwhile; ?>

        </div>
        <!-- about-team-owl -->

    <?php endif; ?>

    </div>
    <!-- container -->

</div>
<!-- about-team# -->

<div id="about-counter">

    <div class="container">

        <div class="about-counter-wrapper row">

            <div class="counter-item col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="count"><?php the_field('about_counter_number_1'); ?></div>
                <h6><?php the_field('about_counter_name_1'); ?></h6>
            </div>
            <!-- counter-item -->
            <div class="counter-item col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="count"><?php the_field('about_counter_number_2'); ?></div>
                <h6><?php the_field('about_counter_name_2'); ?></h6>
            </div>
            <!-- counter-item -->
            <div class="counter-item col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="count"><?php the_field('about_counter_number_3'); ?></div>
                <h6><?php the_field('about_counter_name_3'); ?></h6>
            </div>
            <!-- counter-item -->
            <div class="counter-item col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="count"><?php the_field('about_counter_number_4'); ?></div>
                <h6><?php the_field('about_counter_name_4'); ?></h6>
            </div>
            <!-- counter-item -->

        </div>
        <!-- about-counter-wrapper -->

    </div>
    <!-- container -->

</div>
<!-- about-team# -->

<?php get_template_part( 'templates/brands', 'page' ); ?>

<?php get_template_part( 'templates/info', 'page' ); ?>

<?php get_footer(); ?>