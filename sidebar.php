<div class="blog-sidebar col-xl-6 col-lg-6 col-md-12 col-sm-12">
    <div class="sidebar">
        <div class="search">
            <form action="<?php echo get_option('home'); ?>" method="get">
                <input type="text" name="s" id="s" placeholder="Search"">
            </form>
            <i class="fas fa-search"></i>
        </div>
        <!-- search -->

    </div>
    <!-- sidebar -->
    <div class="sidebar">
        <div class="categories">
            <h4>Categories</h4>
            <ul>
                <?php wp_list_categories('show_count=0&title_li='); ?>
            </ul>
        </div>
        <!-- categories -->
    </div>
    <!-- sidebar -->

    <div class="sidebar">
        <div class="popular-post">
            <h4>Popular Post</h4>
            
            <?php query_posts('showposts=3'); ?> 

            <?php while (have_posts()) : the_post(); ?> 

                <div class="post-item">
                    <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                    <p><?php the_excerpt(); ?></p>
                </div>
                <!-- post-item -->

            <?php endwhile;?> 

        </div>
        <!-- popular-post -->
    </div>
    <!-- sidebar -->

</div>
<!-- blog-sidebar -->