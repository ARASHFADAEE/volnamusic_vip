<?php get_header()?>

<?php get_template_part( 'partials/sidebar/sidebar', 'sidebar')?>

<main class="main">
		<div class="container-fluid">
			<div class="row row--grid">
				<!-- breadcrumb -->
				<div class="col-12">
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="<?php echo get_home_url() ?>">صفحه اصلی</a></li>
						<li class="breadcrumb__item breadcrumb__item--active"><?php the_title()?></li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- title -->
				<div class="col-12">
					<div class="main__title main__title--page">
						<h1><?php the_title()?></h1>
					</div>
				</div>
				<!-- end title -->
			</div>

			<!-- releases -->
			<div class="row row--grid">
				<div class="col-12">
					<div class="row row--grid">

                    <!-- french-music -->

						<div class="col-6 col-sm-4 col-lg-2">
							<div class="album">
								<div class="album__cover">
									<img src="<?php echo get_template_directory_uri()?>/img/countries/Flag_of_France.png" alt="">
									<a href="<?php echo get_home_url()?>/tag/french-music/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path></svg></a>

								</div>
								<div class="album__title">
									<h3><a href="">فرانسه</a></h3>
								</div>
							</div>
						</div>

<!-- french-music	 -->


<!-- german music -->
                        <div class="col-6 col-sm-4 col-lg-2">
							<div class="album">
								<div class="album__cover">
									<img src="<?php echo get_template_directory_uri()?>/img/countries/Flag_of_Germany.svg.png" alt="">
									<a href="<?php echo get_home_url()?>/tag/german-music/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path></svg></a>

								</div>
								<div class="album__title">
									<h3><a href="">المان</a></h3>
								</div>
							</div>
						</div>
<!-- german music -->

					</div>

					
				</div>
			</div>
			<!-- end releases -->

					
		</div>
	</main>
<?php get_footer()?>