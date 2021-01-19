<?php 
/*Template Name: Brands Page*/
get_header(); ?>

<div id="home-brands">

    <div class="container">

        <div class="title">
            <h5>markalarımız</h5>
            <h6>Firmamız için katkı sağlayan markalarımız</h6>
        </div>
        <!-- title -->

        <div class="home-brands-owl owl-carousel owl-theme">

        <?php $query = new WP_Query('post_type=brands'); ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="item">
                <img data-src="<?php the_field('brand_img'); ?>" src="<?php bloginfo('template_url'); ?>/img/lazyload-121x29.png" class="lazyload" alt="">
            </div>
            <!-- item -->

        <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sory Whatsap Men' ); ?></p>
        <?php endif; ?>

        </div>
        <!-- home-brands-owl -->

    </div>
    <!-- container -->

</div>
<!-- home-brands# -->