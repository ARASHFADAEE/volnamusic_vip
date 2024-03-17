<?php get_header();?>

<?php get_template_part( 'partials/sidebar/sidebar', 'sidebar')?>
	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row row--grid">
				<!-- breadcrumb -->
				<div class="col-12">
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="index.html">صفحه اصلی</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">تماس باما</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- title -->
				<div class="col-12">
					<div class="main__title main__title--page">
						<h1>تماس باما</h1>
					</div>
				</div>
				<!-- end title -->
			</div>

			<div dir="rtl" class="row row--grid">
				<div class="col-12 col-md-12 col-lg-6 col-xl-8">
					<form action="#" class="sign__form sign__form--contacts">
						<div class="row">
							<div class="col-12 col-md-6">
								<div class="sign__group">
									<input type="text" name="name" class="sign__input" placeholder="نام">
								</div>
							</div>

							<div class="col-12 col-md-6">
								<div class="sign__group">
									<input type="text" name="email" class="sign__input" placeholder="ایمیل">
								</div>
							</div>

							<div class="col-12">
								<div class="sign__group">
									<input type="text" name="subject" class="sign__input" placeholder="موضوع">
								</div>
							</div>

							<div class="col-12">
								<div class="sign__group">
									<textarea name="text" class="sign__textarea" placeholder="پیام خود را بنویسید . . ."></textarea>
								</div>
							</div>

							<div class="col-12 col-xl-3">
								<button type="button" class="sign__btn">ارسال</button>
							</div>
						</div>
					</form>	
				</div>

				<div class="col-12 col-md-12 col-lg-6 col-xl-4">
					<div class="main__title main__title--sidebar">
						<h2>اطلاعات</h2>
					</div>
					<ul class="contacts__list">
						<li dir="ltr"><a href="tel:+18092345678">+98 09140065379</a></li>
						<li dir="ltr"><a href="mailto:support@volna.template">info@volnamusic.ir</a></li>
						<li><a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="open-map">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</a></li>
					</ul>

				</div>
			</div>

		</div>
	</main>
	<!-- end main content -->

    <?php get_footer()?>