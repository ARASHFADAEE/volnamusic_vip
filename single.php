<!-- header -->
<?php get_header() ?>
<!-- end header -->

<!-- sidebar -->
<?php get_template_part('/partials/sidebar/sidebar', 'sidebar') ?>
<!-- end sidebar -->


<!-- player -->
<div class="player">
    <div class="player__cover">
        <img src="<?php the_post_thumbnail_url() ?>" alt="">
    </div>

    <div class="player__content">
        <span class="player__track"><b class="player__title"><?php echo esc_html(get_field('short-title')); ?></b> – <span class="player__artist"><?php echo get_category_name() ?></span></span>
        <audio src="<?
        if(get_field('is_single')){
            echo esc_attr(get_field('320-link'));
        }else{
            $song_url = get_sub_field('song-url');
            echo $song_url;

        }
        
        
        ?>" id="audio" controls></audio>
    </div>
</div>

<button class="player__btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z" />
    </svg>موزیک پلیر</button>
<!-- end player -->

<!-- main content -->
<main class="main">
    <div class="container-fluid">
        <div dir="rtl" class="row row--grid">
            <!-- breadcrumb -->
            <div class="col-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb__item"><a href="<?php echo get_home_url() ?>">صفحه اصلی</a></li>
                    <li class="breadcrumb__item"><a href="#"><?php the_category() ?></a></li>
                    <li class="breadcrumb__item breadcrumb__item--active"><?php the_title(); ?></li>
                </ul>
            </div>
            <!-- end breadcrumb -->

            <!-- title -->
            <div class="col-12">
                <div class="main__title main__title--page">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
            <!-- end title -->
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>

                    ?>
                    <?php
                    if (get_field('is_single')) {
                    ?>
                        <div class="col-12">
                            <div class="release">
                                <div class="release__content">
                                    <div class="release__cover">
                                        <?php the_post_thumbnail([300, 300]) ?>
                                    </div>
                                    <div class="release__stat">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z"></path>
                                            </svg>تک آهنگ</span>
                                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M20,13.18V11A8,8,0,0,0,4,11v2.18A3,3,0,0,0,2,16v2a3,3,0,0,0,3,3H8a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H6V11a6,6,0,0,1,12,0v2H16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h3a3,3,0,0,0,3-3V16A3,3,0,0,0,20,13.18ZM7,15v4H5a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1Zm13,3a1,1,0,0,1-1,1H17V15h2a1,1,0,0,1,1,1Z"></path>
                                            </svg> 5000</span>
                                    </div>

                                </div>

                                <div class="release__list" data-scrollbar="true" tabindex="-1" style="overflow: hidden; outline: none;">
                                    <div class="scroll-content">
                                        <div class="scroll-content">
                                            <div class="scroll-content">
                                                <div class="scroll-content">
                                                    <li class="single-item">
                                                        <?php $single_track_name=get_field('short-title') ?>
                                                        <a data-playlist="" data-title="<?php echo esc_html($single_track_name); ?>" data-artist="<?php echo get_category_name()?>" data-img="<?php the_post_thumbnail_url()?>" href="<?php echo esc_attr(get_field('320-link')); ?>" class="single-item__cover">
                                                            <img src="<?php the_post_thumbnail_url() ?>" alt="">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                <path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"></path>
                                                            </svg>
                                                        </a>
                                                        <div class="single-item__title">
                                                            <h4><a href="#"><?php echo esc_html($single_track_name); ?></a></h4>
                                                            <span><a href="#"><?php the_category() ?></a></span>
                                                        </div>
                                                        <a href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                <path d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z"></path>
                                                            </svg>
                                                        </a>
                                                        <a class="single-item__export" href="#download">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                <path d="M21,14a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V15a1,1,0,0,0-2,0v4a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V15A1,1,0,0,0,21,14Zm-9.71,1.71a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l4-4a1,1,0,0,0-1.42-1.42L13,12.59V3a1,1,0,0,0-2,0v9.59l-2.29-2.3a1,1,0,1,0-1.42,1.42Z"></path>
                                                            </svg>
                                                        </a>
                                                        <span class="single-item__time"><?php echo esc_html(get_field('song-time')); ?></span>
                                                    </li>
                                                    <audio class="audio_custom_single" controls="" style="width: 100%;">
                                                        <source src="<?php echo esc_attr(get_field('320-link')); ?>" type="audio/mpeg">
                                                        مروگر شما پلیر را ساپورت نمیکنه
                                                    </audio>
                                                    <a href="<?php echo esc_attr(get_field('128-link')); ?>"  class="release__buy">دانلود اهنگ با کیفیت 128</a>
                                                    <a href="<?php echo esc_attr(get_field('320-link')); ?>" class="release__buy">دانلود اهنگ با کیفیت 320</a>

                                                </div>
                                                <div class="scrollbar-track scrollbar-track-x show" style="display: none;">
                                                    <div class="scrollbar-thumb scrollbar-thumb-x" style="width: 569px; transform: translate3d(0px, 0px, 0px);"></div>
                                                </div>
                                                <div class="scrollbar-track scrollbar-track-y show" style="display: none;">
                                                    <div class="scrollbar-thumb scrollbar-thumb-y" style="height: 388px; transform: translate3d(0px, 0px, 0px);"></div>
                                                </div>
                                            </div>
                                            <div class="scrollbar-track scrollbar-track-x show" style="display: none;">
                                                <div class="scrollbar-thumb scrollbar-thumb-x" style="width: 569px; transform: translate3d(0px, 0px, 0px);"></div>
                                            </div>
                                            <div class="scrollbar-track scrollbar-track-y show" style="display: none;">
                                                <div class="scrollbar-thumb scrollbar-thumb-y" style="height: 388px; transform: translate3d(0px, 0px, 0px);"></div>
                                            </div>
                                        </div>
                                        <div class="scrollbar-track scrollbar-track-x show" style="display: none;">
                                            <div class="scrollbar-thumb scrollbar-thumb-x" style="width: 569px; transform: translate3d(0px, 0px, 0px);"></div>
                                        </div>
                                        <div class="scrollbar-track scrollbar-track-y show" style="display: none;">
                                            <div class="scrollbar-thumb scrollbar-thumb-y" style="height: 388px; transform: translate3d(0px, 0px, 0px);"></div>
                                        </div>
                                    </div>
                                    <div class="scrollbar-track scrollbar-track-x show" style="display: none;">
                                        <div class="scrollbar-thumb scrollbar-thumb-x" style="width: 569px; transform: translate3d(0px, 0px, 0px);"></div>
                                    </div>
                                    <div class="scrollbar-track scrollbar-track-y show" style="display: none;">
                                        <div class="scrollbar-thumb scrollbar-thumb-y" style="height: 388px; transform: translate3d(0px, 0px, 0px);"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php

                    }
                    if (get_field('is_album')) {
                    ?>
                        <div class="col-12">
                            <div class="release">
                                <div class="release__content">
                                    <div class="release__cover">
                                        <img src="<?php the_post_thumbnail_url() ?>" alt="">
                                    </div>
                                    <div class="release__stat">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z" />
                                            </svg> 8 آهنگ</span>
                                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M20,13.18V11A8,8,0,0,0,4,11v2.18A3,3,0,0,0,2,16v2a3,3,0,0,0,3,3H8a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H6V11a6,6,0,0,1,12,0v2H16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h3a3,3,0,0,0,3-3V16A3,3,0,0,0,20,13.18ZM7,15v4H5a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1Zm13,3a1,1,0,0,1-1,1H17V15h2a1,1,0,0,1,1,1Z" />
                                            </svg> 5000</span>
                                    </div>
                                    <a href="#modal-buy" class="release__buy open-modal">دانلود آلبوم</a>
                                </div>

                                <div class="release__list">
                                    <ul class="main__list main__list--playlist main__list--dashbox">
                                        <?php while (have_rows('album')) : the_row();
                                            $song_name = get_sub_field('song-name');
                                            $song_url = get_sub_field('song-url');


                                        ?>
                                            <li class="single-item">

                                                <a data-playlist data-title="<?php echo $song_name ?>" data-artist="<?php echo get_category_name() ?>" data-img="<?php the_post_thumbnail_url() ?>" href="<?php echo $song_url ?>" class="single-item__cover">
                                                    <img src="<?php the_post_thumbnail_url() ?>" alt="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z" />
                                                    </svg>
                                                </a>
                                                <div class="single-item__title">
                                                    <h4><a href="#">1. <?php echo $song_name;
                                                                        ?></a></h4>
                                                    <span><a href="#"><?php the_category() ?></a></span>
                                                </div>

                                                <a href="<?php echo $song_url ?>" class="single-item__export">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path d="M21,14a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V15a1,1,0,0,0-2,0v4a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V15A1,1,0,0,0,21,14Zm-9.71,1.71a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l4-4a1,1,0,0,0-1.42-1.42L13,12.59V3a1,1,0,0,0-2,0v9.59l-2.29-2.3a1,1,0,1,0-1.42,1.42Z"></path>
                                                    </svg>
                                                </a>
                                                <span class="single-item__time">3:06</span>
                                            </li>

                                        <?php endwhile ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
            <?php

                    }
                endwhile;
            endif;
            ?>
            <div class="col-12 col-lg-8">
                <div class="article">
                    <!-- article content -->
                    <div class="article__content">
                        <h4>توضیحات بیشتر</h4>
                        <?php the_content() ?>

                    </div>
                    <!-- end article content -->

                    <!-- share -->
                    <div class="share">
                        <a href="#" class="share__link share__link--fb"><svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.56341 16.8197V8.65888H7.81615L8.11468 5.84663H5.56341L5.56724 4.43907C5.56724 3.70559 5.63693 3.31257 6.69042 3.31257H8.09873V0.5H5.84568C3.1394 0.5 2.18686 1.86425 2.18686 4.15848V5.84695H0.499939V8.6592H2.18686V16.8197H5.56341Z"></path>
                            </svg> اشتراک گذاری</a>
                        <a href="#" class="share__link share__link--tw"><svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.55075 3.19219L7.58223 3.71122L7.05762 3.64767C5.14804 3.40404 3.47978 2.57782 2.06334 1.1902L1.37085 0.501686L1.19248 1.01013C0.814766 2.14353 1.05609 3.34048 1.843 4.14552C2.26269 4.5904 2.16826 4.65396 1.4443 4.38914C1.19248 4.3044 0.972149 4.24085 0.951164 4.27263C0.877719 4.34677 1.12953 5.31069 1.32888 5.69202C1.60168 6.22165 2.15777 6.74068 2.76631 7.04787L3.28043 7.2915L2.67188 7.30209C2.08432 7.30209 2.06334 7.31268 2.12629 7.53512C2.33613 8.22364 3.16502 8.95452 4.08833 9.2723L4.73884 9.49474L4.17227 9.8337C3.33289 10.321 2.34663 10.5964 1.36036 10.6175C0.888211 10.6281 0.5 10.6705 0.5 10.7023C0.5 10.8082 1.78005 11.4014 2.52499 11.6344C4.75983 12.3229 7.41435 12.0264 9.40787 10.8506C10.8243 10.0138 12.2408 8.35075 12.9018 6.74068C13.2585 5.88269 13.6152 4.315 13.6152 3.56293C13.6152 3.07567 13.6467 3.01212 14.2343 2.42953C14.5805 2.09056 14.9058 1.71983 14.9687 1.6139C15.0737 1.41264 15.0632 1.41264 14.5281 1.59272C13.6362 1.91049 13.5103 1.86812 13.951 1.39146C14.2762 1.0525 14.6645 0.438131 14.6645 0.258058C14.6645 0.22628 14.5071 0.279243 14.3287 0.374576C14.1398 0.480501 13.7202 0.639389 13.4054 0.734722L12.8388 0.914795L12.3247 0.565241C12.0414 0.374576 11.6427 0.162725 11.4329 0.0991699C10.8978 -0.0491255 10.0794 -0.0279404 9.59673 0.14154C8.2852 0.618204 7.45632 1.84694 7.55075 3.19219Z"></path>
                            </svg> اشتراک گذاری</a>
                        <a href="#" class="share__link share__link--vk"><svg width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.78479 8.92255C8.78479 8.92255 9.07355 8.89106 9.22145 8.73512C9.35684 8.59224 9.35214 8.32262 9.35214 8.32262C9.35214 8.32262 9.33414 7.06361 9.92967 6.87771C10.5166 6.69489 11.2702 8.09524 12.07 8.63372C12.6741 9.04085 13.1327 8.95174 13.1327 8.95174L15.2699 8.92255C15.2699 8.92255 16.3874 8.85495 15.8576 7.99231C15.8137 7.92164 15.5485 7.35397 14.269 6.1879C12.9284 4.9673 13.1084 5.16472 14.7221 3.05305C15.705 1.76715 16.0978 0.982093 15.975 0.646407C15.8584 0.325317 15.1353 0.410582 15.1353 0.410582L12.7297 0.425177C12.7297 0.425177 12.5513 0.401365 12.419 0.478949C12.2899 0.554996 12.2061 0.732441 12.2061 0.732441C12.2061 0.732441 11.8258 1.72721 11.3179 2.57372C10.2466 4.35892 9.81855 4.4534 9.64326 4.34279C9.23554 4.08392 9.33727 3.30424 9.33727 2.75039C9.33727 1.01973 9.60491 0.298431 8.81687 0.111769C8.5555 0.0495478 8.36299 0.00883541 7.6939 0.00192196C6.83543 -0.00652779 6.10921 0.00499461 5.69758 0.202411C5.42369 0.333767 5.2124 0.627203 5.34152 0.644103C5.50038 0.664843 5.86036 0.739354 6.0513 0.994383C6.29781 1.32392 6.2892 2.06289 6.2892 2.06289C6.2892 2.06289 6.43084 4.10005 5.95818 4.35277C5.6342 4.52638 5.1897 4.17226 4.2342 2.55221C3.7451 1.7226 3.37573 0.805416 3.37573 0.805416C3.37573 0.805416 3.30451 0.634117 3.17696 0.541938C3.02279 0.430555 2.80759 0.395987 2.80759 0.395987L0.521729 0.410582C0.521729 0.410582 0.178185 0.4198 0.0521924 0.566519C-0.0597138 0.696338 0.0435842 0.965961 0.0435842 0.965961C0.0435842 0.965961 1.8333 5.07638 3.86013 7.1481C5.71871 9.04699 7.8285 8.92255 7.8285 8.92255H8.78479Z"></path>
                            </svg> اشتراک گذاری</a>
                    </div>
                    <!-- end share -->

                    <!-- comments  (comming soon)-->

                    <!-- end comments -->
                </div>
            </div>

            <div dir="ltr" class="col-12 col-lg-4">
                <!-- releases -->
                <div class="row row--sidebar">
                    <!-- title -->
                    <div class="col-12">
                        <div class="main__title main__title--sidebar">
                            <h3>آهنگ های مرتبط</h3>
                        </div>
                    </div>
                    <!-- end title -->
                    <?php
                    $related = get_posts(array(
                        'category__in' => wp_get_post_categories($post->ID),
                        'numberposts' => 4,
                        'post__not_in' => array($post->ID)
                    ));
                    if ($related) foreach ($related as $post) {
                        setup_postdata($post); ?>


                        <div class="col-6 col-sm-4 col-lg-6">
                            <div class="album album--sidebar">
                                <div class="album__cover">
                                    <img src="<?php the_post_thumbnail_url() ?>" alt="">
                                    <a href="<?php echo get_permalink() ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
                                        </svg></a>
                                    <span class="album__stat">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M3.71,16.29a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21,1,1,0,0,0-.21.33,1,1,0,0,0,.21,1.09,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1,1,0,0,0,.21-1.09A1,1,0,0,0,3.71,16.29ZM7,8H21a1,1,0,0,0,0-2H7A1,1,0,0,0,7,8ZM3.71,11.29a1,1,0,0,0-1.09-.21,1.15,1.15,0,0,0-.33.21,1,1,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1,1,0,0,0,3.71,11.29ZM21,11H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2ZM3.71,6.29a1,1,0,0,0-.33-.21,1,1,0,0,0-1.09.21,1.15,1.15,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21,1,1,0,0,0,1.09-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1.15,1.15,0,0,0,3.71,6.29ZM21,16H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"></path>
                                            </svg> 22</span>
                                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M20,13.18V11A8,8,0,0,0,4,11v2.18A3,3,0,0,0,2,16v2a3,3,0,0,0,3,3H8a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H6V11a6,6,0,0,1,12,0v2H16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h3a3,3,0,0,0,3-3V16A3,3,0,0,0,20,13.18ZM7,15v4H5a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1Zm13,3a1,1,0,0,1-1,1H17V15h2a1,1,0,0,1,1,1Z"></path>
                                            </svg> 5000</span>
                                    </span>
                                </div>
                                <div class="album__title">
                                    <h3><a href="#"><?php echo esc_html(get_field('short-title')); ?></a></h3>
                                    <span><a href="artist.html"><?php the_category() ?></a></span>
                                </div>
                            </div>
                        </div>


                    <?php }
                    wp_reset_postdata(); ?>
                </div>
                <!-- end releases -->
            </div>
        </div>
    </div>
</main>
<!-- end main content -->
<?php get_footer() ?>


</body>

</html>