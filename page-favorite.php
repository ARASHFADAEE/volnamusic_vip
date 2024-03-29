<?php get_header() ?>
<?php get_template_part( 'partials/sidebar/sidebar', 'sidebar' );?>

<main class="main">

    <div class="container-fluid">
        <div class="row row--grid">
            <!-- breadcrumb -->
            <div class="col-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb__item"><a href="index.html">صفحه اصلی</a></li>
                    <li class="breadcrumb__item breadcrumb__item--active">لیست علاقه مندی</li>
                </ul>
            </div>
            <!-- end breadcrumb -->

            <div class="col-12">
                <?php
                echo do_shortcode('[user_favorites]');



                ?>
            </div>
        </div>

    </div>


</main>

<?php get_footer() ?>