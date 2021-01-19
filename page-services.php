<?php 
/*Template Name: Services Page*/
get_header(); ?>

<div id="services-page" style="width: 100%; height: 250px; background-position: center center; background-size: cover; background: url('<?php the_field('services_bg'); ?>'); position: relative;">

    <div class="page-title"><?php the_title(); ?></div>

</div>
<!-- services-page# -->

<div id="services">

    <div class="container">

        <div class="title">
            <h5><?php the_title(); ?></h5>
            <h6><?php the_field('services_desc'); ?></h6>
        </div>
        <!-- title -->

        <?php if( have_rows('services_item') ): ?>

        <div class="services-wrapper row">

        <?php while( have_rows('services_item') ): the_row();
    
            //vars
            $services_item_img = get_sub_field('services_item_img');
            $services_item_name = get_sub_field('services_item_name');
            $services_item_desc = get_sub_field('services_item_desc');
    
        ?>

            <div class="services-item col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <img data-src="<?php echo $services_item_img; ?>" src="<?php bloginfo('template_url'); ?>/img/lazyload-300x300.png" class="img-fluid lazyload" alt="">
                <h6><a href="#"><?php echo $services_item_name; ?></a></h6>
                <p><?php echo $services_item_desc; ?></p>
            </div>
            <!-- services-item -->

        <?php endwhile; ?>

        </div>
        <!-- services-wrapper -->

        <?php endif; ?>

    </div>
    <!-- container -->

</div>
<!-- services# -->

<?php get_template_part( 'templates/brands', 'page' ); ?>

<?php get_template_part( 'templates/info', 'page' ); ?>

<?php get_footer(); ?>