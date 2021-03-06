<?php get_header(); ?>

<div id="blog">

    <div class="container">

        <div class="blog-wrapper row">

        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

            <div class="blog-item col-xl-6 col-lg-6 col-md-6 col-sm-12">

                <?php if(has_post_thumbnail()): ?>

                    <img src="<?php the_post_thumbnail_url('post-image'); ?>" class="img-fluid">

                <?php endif; ?>

                <div class="category"><a href="#"><?php the_category(', ') ?></a></div>
                <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                <div class="date"><?php the_time('j F Y') ?></div>
                <p><?php the_excerpt(); ?></p>

            </div>
            <!-- blog-item -->

        <?php endwhile; endif; ?>

        </div>
        <!-- blog-wrapper -->

        <ul class="page">
            <?php sayfalama(); ?>
        </ul>
        <!-- page -->

    </div>
    <!-- container -->

</div>
<!-- blog# -->

<?php get_footer(); ?>