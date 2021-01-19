<div id="home-contact">

    <div class="container">

        <div class="home-contact-wrapper">

        <?php $query = new WP_Query('post_type=information'); ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="home-contact-text">
                <?php the_field('information_text'); ?>
            </div>
            <!-- home-contac-text -->
            <div class="home-contact-button">
                <button><a href="<?php the_field('information_button_href'); ?>"><?php the_field('information_button'); ?></a></button>
            </div>
            <!-- home-contact-button -->

        <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sory Whatsap Men' ); ?></p>
        <?php endif; ?>

        </div>
        <!-- home-contact-wrapper -->

    </div>
    <!-- container -->

</div>
<!-- home-contact# -->