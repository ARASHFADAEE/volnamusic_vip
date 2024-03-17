
<?php get_header()?>
<?php get_template_part( '/partials/sidebar/sidebar', 'sidebar' )?>

    
    
    
    <!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row row--grid">
				<!-- breadcrumb -->
				<div class="col-12">
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="<?php echo get_home_url()?>">صفحه اصلی</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">خطای 404</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- error -->
				<div class="col-12">
					<div class="page-404">
						<div class="page-404__wrap">
							<div class="page-404__content">
								<h1 class="page-404__title">404</h1>
								<p class="page-404__text">صفحه مورد نظر شما در دسترس نیست!</p>
								<a href="<?php echo get_home_url()?>" class="page-404__btn">برگرد به صفحه اصلی</a>
							</div>
						</div>
					</div>
				</div>
				<!-- end error -->
			</div>
		</div>
	</main>
	<!-- end main content -->