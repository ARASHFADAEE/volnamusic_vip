<?php get_header();?>


<?php get_template_part( 'partials/sidebar/sidebar', 'sidebar' );?>




	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row row--grid">
				<!-- breadcrumb -->
				<div class="col-12">
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="index.html">صفحه اصلی</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">درباره ما</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- title -->
				<div class="col-12">
					<div class="main__title">
                        <?php the_content()?>
	
					</div>
				</div>
				<!-- end title -->

				<div class="col-12">
					<a href="<?php echo get_home_url()?>/login" class="main__load">ثبت نام در سایت</a>
				</div>
			</div>


		</div>
	</main>
	<!-- end main content -->




<?php get_footer();?>