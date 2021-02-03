<?php get_header(); ?>

<div id="blog">

    <div class="container">

        <div class="blog-wrapper row">

        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

            <div class="blog-post col-xl-6 col-lg-6 col-md-12 col-sm-12">

                <?php if(has_post_thumbnail()): ?>

                    <img src="<?php the_post_thumbnail_url('post-image'); ?>" class="img-fluid">

                <?php endif; ?>

                <div class="category"><a href="#"><?php the_category(', ') ?></a></div>
                <h6><?php the_title(); ?></h6>
                <div class="date"><?php the_time('j F Y') ?></div>
                <p><?php the_content('', ''); ?></p>
            
            </div>
            <!-- blog-post -->

        <?php endwhile; endif; ?>

        <?php get_sidebar(); ?>

        </div>
        <!-- blog-wrapper -->

    </div>
    <!-- container -->

</div>
<!-- blog# -->

<?php get_footer(); ?>