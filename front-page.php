<?php get_header() ?>

<!-- sidebar -->
<?php get_template_part('/partials/sidebar/sidebar', 'sidebar') ?>

<!-- end sidebar -->



<!-- main content -->
<main class="main">
	<div class="container-fluid">
		<!-- releases -->
		<section class="row row--grid">
			<!-- title -->
			<div class="col-12">
				<div class="main__title">
					<h2>آلبوم های منتشر شده</h2>

					<a href="#" class="main__link">دیدن همه <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
						</svg></a>
				</div>
			</div>
			<!-- end title -->
			<?php
			$array = array('posts_per_page' => 12, 'tag' => 'classical,blues	');

			$query = new WP_Query($array);

			if ($query->have_posts()) {
				while ($query->have_posts()) : $query->the_post(); ?>
					<?php if (get_field('is_album')) { ?>

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
											</svg> <?php echo count(get_field('album')) ?></span>
										<span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
												<path d="M20,13.18V11A8,8,0,0,0,4,11v2.18A3,3,0,0,0,2,16v2a3,3,0,0,0,3,3H8a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H6V11a6,6,0,0,1,12,0v2H16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h3a3,3,0,0,0,3-3V16A3,3,0,0,0,20,13.18ZM7,15v4H5a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1Zm13,3a1,1,0,0,1-1,1H17V15h2a1,1,0,0,1,1,1Z" />
											</svg> <?php echo do_shortcode('[post_views]') ?></span>
									</span>
								</div>
								<div class="album__title">
									<h3><a href="<?php the_permalink() ?>"><?php echo esc_html(get_field('short-title')); ?></a></h3>
									<span><a href="#"><?php the_category() ?></a></span>
								</div>
							</div>

						</div>

			<?php
					}
				endwhile;
			}
			wp_reset_postdata();

			?>
		</section>
		<!-- end releases -->

		<!-- events (comming soon ...) -->

		<!-- end events -->

		<!-- articts -->
		<section class="row row--grid">
			<!-- title -->
			<div class="col-12">
				<div class="main__title">
					<h2>هنرمندان</h2>

					<a href="#" class="main__link">دیدن همه <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
						</svg></a>
				</div>
			</div>
			<!-- end title -->

			<div class="col-12">
				<div class="main__carousel-wrap">
					<div class="main__carousel main__carousel--artists owl-carousel" id="artists">
						<a href="artist.html" class="artist">
							<div class="artist__cover">
								<img src="<?php echo get_template_directory_uri() ?>/img/artists/artist1.jpg" alt="">
							</div>
							<h3 class="artist__title">مهراد خمیری</h3>
						</a>

						<a href="artist.html" class="artist">
							<div class="artist__cover">
								<img src="<?php echo get_template_directory_uri() ?>/img/artists/artist2.jpg" alt="">
							</div>
							<h3 class="artist__title">مهراد خمیری</h3>
						</a>

						<a href="artist.html" class="artist">
							<div class="artist__cover">
								<img src="<?php echo get_template_directory_uri() ?>/img/artists/artist3.jpg" alt="">
							</div>
							<h3 class="artist__title">ابوالفضل قاسمی</h3>
						</a>

						<a href="artist.html" class="artist">
							<div class="artist__cover">
								<img src="<?php echo get_template_directory_uri() ?>/img/artists/artist4.jpg" alt="">
							</div>
							<h3 class="artist__title">مهراد خمیری</h3>
						</a>

						<a href="artist.html" class="artist">
							<div class="artist__cover">
								<img src="<?php echo get_template_directory_uri() ?>/img/artists/artist5.jpg" alt="">
							</div>
							<h3 class="artist__title">مهراد خمیری</h3>
						</a>

						<a href="artist.html" class="artist">
							<div class="artist__cover">
								<img src="<?php echo get_template_directory_uri() ?>/img/artists/artist6.jpg" alt="">
							</div>
							<h3 class="artist__title">مهراد خمیری</h3>
						</a>

						<a href="artist.html" class="artist">
							<div class="artist__cover">
								<img src="<?php echo get_template_directory_uri() ?>/img/artists/artist7.jpg" alt="">
							</div>
							<h3 class="artist__title">مهراد خمیری</h3>
						</a>

						<a href="artist.html" class="artist">
							<div class="artist__cover">
								<img src="<?php echo get_template_directory_uri() ?>/img/artists/artist8.jpg" alt="">
							</div>
							<h3 class="artist__title">مهراد خمیری</h3>
						</a>
					</div>

					<button class="main__nav main__nav--prev" data-nav="#artists" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z" />
						</svg></button>
					<button class="main__nav main__nav--next" data-nav="#artists" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
						</svg></button>
				</div>
			</div>
		</section>
		<section class="row row--grid">
			<!-- title -->
			<div class="col-12">
				<div class="main__title">
					<h2>سبک های کلاسیک و بلوز</h2>

					<a href="#" class="main__link">دیدن همه <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
						</svg></a>
				</div>
			</div>
			<!-- end title -->
			<?php
			$array = array('posts_per_page' => 12, 'tag' => 'classical,blues	');

			$query = new WP_Query($array);

			if ($query->have_posts()) {
				while ($query->have_posts()) : $query->the_post(); ?>
					<?php if (get_field('is_single')) { ?>

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
											</svg> 1</span>
										<span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
												<path d="M20,13.18V11A8,8,0,0,0,4,11v2.18A3,3,0,0,0,2,16v2a3,3,0,0,0,3,3H8a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H6V11a6,6,0,0,1,12,0v2H16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h3a3,3,0,0,0,3-3V16A3,3,0,0,0,20,13.18ZM7,15v4H5a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1Zm13,3a1,1,0,0,1-1,1H17V15h2a1,1,0,0,1,1,1Z" />
											</svg> <?php echo do_shortcode('[post_views]') ?></span>
									</span>
								</div>
								<div class="album__title">
									<h3><a href="<?php the_permalink() ?>"><?php echo esc_html(get_field('short-title')); ?></a></h3>
									<span><a href="#"><?php the_category() ?></a></span>
								</div>
							</div>

						</div>

			<?php
					}
				endwhile;
			}
			wp_reset_postdata();

			?>
		</section>
		<!-- end articts -->
		<section class="row row--grid">
			<!-- title -->
			<div class="col-12">
				<div class="main__title">
					<h2>اهنگ های ایرانی منتشر شده</h2>

					<a href="#" class="main__link">دیدن همه <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
						</svg></a>
				</div>
			</div>
			<!-- end title -->
			<?php
			$array = array('posts_per_page' => 6, 'tag' => 'iranian-songs');

			$query = new WP_Query($array);

			if ($query->have_posts()) {
				while ($query->have_posts()) : $query->the_post(); ?>

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
										</svg> 1</span>
									<span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
											<path d="M20,13.18V11A8,8,0,0,0,4,11v2.18A3,3,0,0,0,2,16v2a3,3,0,0,0,3,3H8a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H6V11a6,6,0,0,1,12,0v2H16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h3a3,3,0,0,0,3-3V16A3,3,0,0,0,20,13.18ZM7,15v4H5a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1Zm13,3a1,1,0,0,1-1,1H17V15h2a1,1,0,0,1,1,1Z" />
										</svg> <?php echo do_shortcode('[post_views]') ?></span>
								</span>
							</div>
							<div class="album__title">
								<h3><a href="<?php the_permalink() ?>"><?php echo esc_html(get_field('short-title')); ?></a></h3>
								<span><a href="#"><?php the_category() ?></a></span>
							</div>
						</div>

					</div>

			<?php

				endwhile;
			}
			wp_reset_postdata();

			?>
		</section>


		<section dir="rtl" class="row row--grid">
			<div class="col-12 col-md-6 col-xl-6">
				<div class="row row--grid">
					<!-- title -->
					<div class="col-12">
						<div class="main__title">
							<h2><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z" />
								</svg><a href="#">جدید ترین آلبوم ها</a></h2>
						</div>
					</div>
					<!-- end title -->

					<div class="col-12">
						<ul class="main__list">
							<?php
							$posts = get_posts(array(
								'meta_query' => array(
									array(
										'key'   => 'is_album',
										'value' => '1',
									)
								)
							));

							if ($posts) :
								foreach ($posts as $post) : ?>

									<li class="single-item">
										<!-- <span class="single-item__number">1</span> -->

										<a data-link data-title="تنهام نذار" data-artist="مهراد خمیری" data-img="<?php the_post_thumbnail_url() ?>" href="audio/Mehrad_Khamiri_-_02_Tanham_Nazar.mp3" class="single-item__cover">
											<img src="<?php the_post_thumbnail_url() ?>" alt="">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
												<path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z" />
											</svg>
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
												<path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z" />
											</svg>
										</a>
										<div class="single-item__title">
											<h4><a href="<?php the_permalink() ?>"><?php echo esc_html(get_field('short-title')) ?></a></h4>
											<span><a href="#"><?php echo get_category_name() ?></a></span>
										</div>
										<span class="single-item__time"><?php echo esc_html(get_field('song-time')); ?></span>
									</li>


							<?php
								endforeach;
							endif;


							?>


					</div>
				</div>
			</div>

			<div dir="rtl" class="col-12 col-md-6 col-xl-6">
				<div class="row row--grid">
					<!-- title -->
					<div class="col-12">
						<div class="main__title">
							<h2><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M19.12,2.21A1,1,0,0,0,18.26,2l-8,2A1,1,0,0,0,9.5,5V15.35A3.45,3.45,0,0,0,8,15a3.5,3.5,0,1,0,3.5,3.5V10.78L18.74,9l.07,0L19,8.85l.15-.1a.93.93,0,0,0,.13-.15.78.78,0,0,0,.1-.15.55.55,0,0,0,.06-.18.58.58,0,0,0,0-.19.24.24,0,0,0,0-.08V3A1,1,0,0,0,19.12,2.21ZM8,20a1.5,1.5,0,1,1,1.5-1.5A1.5,1.5,0,0,1,8,20ZM17.5,7.22l-6,1.5V5.78l6-1.5Z" />
								</svg><a href="#">جدید ترین اهنگ ها</a></h2>
						</div>
					</div>
					<!-- end title -->

					<div class="col-12">
						<ul class="main__list">
							<?php
							$posts = get_posts(array(
								'meta_query' => array(
									array(
										'key'   => 'is_single',
										'value' => '1',
									)
								)
							));

							if ($posts) :
								foreach ($posts as $post) : ?>

									<li class="single-item">
										<!-- <span class="single-item__number">1</span> -->

										<a data-link data-title="تنهام نذار" data-artist="مهراد خمیری" data-img="<?php the_post_thumbnail_url() ?>" href="#" class="single-item__cover">
											<img src="<?php the_post_thumbnail_url() ?>" alt="">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
												<path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z" />
											</svg>
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
												<path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z" />
											</svg>
										</a>
										<div class="single-item__title">
											<h4><a href="<?php the_permalink() ?>"><?php echo esc_html(get_field('short-title')) ?></a></h4>
											<span><a href="#"><?php echo get_category_name() ?></a></span>
										</div>
										<span class="single-item__time"><?php echo esc_html(get_field('song-time')); ?></span>
									</li>


							<?php
								endforeach;
							endif;


							?>


						</ul>
					</div>
				</div>
			</div>

		</section>

		<!-- podcasts  (comming soon)-->

		<!-- end podcasts -->

		<!-- store (comming soon...)-->

		<!-- end store -->

		<!-- news -->

		<!-- end news -->

		<!-- partners -->
		<div class="row">
			<div class="col-12">
				<div class="partners owl-carousel">
					<a href="#" class="partners__img">
						<img src="<?php echo get_template_directory_uri() ?>/img/partners/3docean-light-background.png" alt="">
					</a>

					<a href="#" class="partners__img">
						<img src="<?php echo get_template_directory_uri() ?>/img/partners/activeden-light-background.png" alt="">
					</a>

					<a href="#" class="partners__img">
						<img src="<?php echo get_template_directory_uri() ?>/img/partners/audiojungle-light-background.png" alt="">
					</a>

					<a href="#" class="partners__img">
						<img src="<?php echo get_template_directory_uri() ?>/img/partners/codecanyon-light-background.png" alt="">
					</a>

					<a href="#" class="partners__img">
						<img src="<?php echo get_template_directory_uri() ?>/img/partners/photodune-light-background.png" alt="">
					</a>

					<a href="#" class="partners__img">
						<img src="<?php echo get_template_directory_uri() ?>/img/partners/themeforest-light-background.png" alt="">
					</a>
				</div>
			</div>
		</div>
		<!-- end partners -->
	</div>
</main>
<!-- end main content -->

<?php get_footer() ?>
</body>

</html>