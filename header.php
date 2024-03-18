
<html lang="fa" >
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/paymentfont.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/slider-radio.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/plyr.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri()?>/icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri()?>/icon/favicon-32x32.png">

    <?php wp_head()?>
</head>
<body>


<header class="header">
		<div class="header__content">
			<div class="header__logo">
				<a href="<?php echo get_home_url(); ?>">
					<img src="<?php echo get_template_directory_uri()?>/img/logo.svg" alt="">
				</a>
			</div>

			<nav class="header__nav">
				<a href="<?php echo get_home_url()?>">صفحه اصلی</a>
				<a href="<?php echo get_home_url()?>/about-us">درباره ما</a>
				<a href="<?php echo get_home_url()?>/contact-us">تماس با ما</a>
			</nav>

			<form method="get" action="<?php echo  get_home_url()?>" class="header__search" >
				<input type="text" name="s" value="<?php the_search_query()?>"   placeholder="هنرمند , آهنگ ">
				<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"></path></svg></button>
				<button type="button" class="close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path></svg></button>
			</form>

			<div class="header__actions">
				<div class="header__action header__action--search">
					<button class="header__action-btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"></path></svg></button>
				</div>

				

				

				<div class="header__action header__action--signin">
					<?php if(!is_user_logged_in()){?>
					<a class="header__action-btn" href="<?php echo get_home_url()?>/login">
						<span>وارد شوید</span>
						<svg style="transform: rotate(180deg);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20,12a1,1,0,0,0-1-1H11.41l2.3-2.29a1,1,0,1,0-1.42-1.42l-4,4a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l4,4a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L11.41,13H19A1,1,0,0,0,20,12ZM17,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V16a1,1,0,0,0-2,0v3a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V8a1,1,0,0,0,2,0V5A3,3,0,0,0,17,2Z"></path></svg>
					</a>
					<?php }else{?>
						<a class="header__action-btn" href="<?php echo get_home_url()?>/panel">
						<span>پنل کاربری</span>
						<svg style="transform: rotate(180deg);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20,12a1,1,0,0,0-1-1H11.41l2.3-2.29a1,1,0,1,0-1.42-1.42l-4,4a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l4,4a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L11.41,13H19A1,1,0,0,0,20,12ZM17,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V16a1,1,0,0,0-2,0v3a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V8a1,1,0,0,0,2,0V5A3,3,0,0,0,17,2Z"></path></svg>
					</a>

					<?php }?>

				</div>
			</div>

			<button class="header__btn" type="button">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
	</header>