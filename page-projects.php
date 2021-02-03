<?php

/*Template Name: Projects Page*/
get_header(); ?>

<div id="projects-page" style="width: 100%; height: 250px;  background-position: center center; background-size: cover; background: url('<?php the_field('projects_bg'); ?>'); position: relative;">

    <div class="container">

        <div class="page-title"><?php the_title(); ?></div>

    </div>
    <!-- container -->

</div>
<!-- projects-page# -->

<div id="projects">

    <div class="container">

        <div class="title">
            <h5><?php the_title(); ?></h5>
            <h6><?php the_field('projects_desc'); ?></h6>
        </div>
        <!-- title -->

        <?php if( have_rows('projects_item') ): ?>

        <div class="projects-wrapper">

        <?php while( have_rows('projects_item') ): the_row();

            $projects_item_button_href = get_field('projects_item_button_href');
    
            //vars
            $projects_item_img = get_sub_field('projects_item_img');
            $projects_item_name = get_sub_field('projects_item_name');
            $projects_item_desc = get_sub_field('projects_item_desc');
            $projects_item_button = get_sub_field('projects_item_button');
            $projects_item_button_href = get_sub_field('projects_item_button_href');
    
        ?>

            <div class="project-item d-flex align-items-center row">

                <div class="project-img col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <img data-src="<?php echo $projects_item_img; ?>" src="<?php bloginfo('template_url'); ?>/img/lazyload-500x500.png" class="img-fluid lazyload" alt="">
                </div>
                <!-- project-img -->
                <div class="project-desc col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="project-name"><?php echo $projects_item_name; ?></div>
                    <div class="project-description"><?php echo $projects_item_desc; ?></div>
                    <div class="project-technology"><img src="<?php bloginfo('template_url'); ?>/img/technology.png" class="img-fluid" alt=""></div>

                    <?php if($projects_item_button_href): ?>

                        <a href="<?php echo $projects_item_button_href['url']; ?>" target="<?php echo $projects_item_button_href['target']; ?>" ><button><?php echo $projects_item_button; ?></button></a>

                    <?php endif; ?>

                </div>
                <!-- project-desc -->

            </div>
            <!-- project-item -->

        <?php endwhile; ?>

        </div>
        <!-- projects-wrapper -->

        <?php endif; ?>

    </div>
    <!-- container -->

</div>
<!-- projects# -->

<?php get_template_part( 'templates/brands', 'page' ); ?>

<?php get_template_part( 'templates/info', 'page' ); ?>

<?php get_footer(); ?>