<?php get_header(); ?>

<!-- sidebar -->
<?php get_template_part('/partials/sidebar/sidebar', 'sidebar') ?>

<!-- end sidebar -->


<!-- main -->

<main class="main">
    <div class="container-fluid">



        <!-- releases -->
        <section class="row row--grid">
			
<!-- title -->
<div class="col-12" style='margin-top: 30px;'>
    <div class="row">
        <div class="col-md-9 order-md-1 order-2">
            <div class="main__title">
                <h2><?php the_category() ?></h2>
                <?php echo category_description(); ?>
            </div>
        </div>
        
        <div class="col-md-3 order-md-2 order-1 text-center">
            <img src='<?php echo z_taxonomy_image_url() ?>' class="img-fluid rounded" style="max-width: 300px; border-radius: 20px !important;">
        </div>
    </div>
</div>
            <!-- end title -->
            <?php


            if (have_posts()) {
                while (have_posts()) : the_post(); ?>

                    <div class="col-6 col-sm-4 col-lg-2">
                        <div class="album">
                            <div class="album__cover">
                                <img src="<?php the_post_thumbnail_url() ?>" alt="">
                                <a href="<?php the_permalink() ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z" />
                                    </svg></a>
                                <span class="album__stat">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M3.71,16.29a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21,1,1,0,0,0-.21.33,1,1,0,0,0,.21,1.09,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1,1,0,0,0,.21-1.09A1,1,0,0,0,3.71,16.29ZM7,8H21a1,1,0,0,0,0-2H7A1,1,0,0,0,7,8ZM3.71,11.29a1,1,0,0,0-1.09-.21,1.15,1.15,0,0,0-.33.21,1,1,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1,1,0,0,0,3.71,11.29ZM21,11H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2ZM3.71,6.29a1,1,0,0,0-.33-.21,1,1,0,0,0-1.09.21,1.15,1.15,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21,1,1,0,0,0,1.09-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1.15,1.15,0,0,0,3.71,6.29ZM21,16H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z" />
                                        </svg> 22</span>
                                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M20,13.18V11A8,8,0,0,0,4,11v2.18A3,3,0,0,0,2,16v2a3,3,0,0,0,3,3H8a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H6V11a6,6,0,0,1,12,0v2H16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h3a3,3,0,0,0,3-3V16A3,3,0,0,0,20,13.18ZM7,15v4H5a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1Zm13,3a1,1,0,0,1-1,1H17V15h2a1,1,0,0,1,1,1Z" />
                                        </svg> 5000</span>
                                </span>
                            </div>
                            <div class="album__title">
                                <h3><a href="release.html"><?php echo esc_html(get_field('short-title')); ?></a></h3>
                                <span><a href="artist.html"><?php the_category() ?></a></span>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            }
            wp_reset_postdata();

            ?>

        </section>
        <!-- end releases -->


    </div>
</main>


<!-- end main -->








<?php get_footer() ?>