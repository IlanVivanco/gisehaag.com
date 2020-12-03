<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body>
	<header class="header-footer-bgc">
		<div class="header-container box-width">
			<div class="main-menu">
					<ul>
						<!-- <li><a class="uppercase-text" href="#">home</a></li> -->
						<li><a class="uppercase-text" href="<?php echo home_url('/blog'); ?>">blog</a></li>
						<li><a class="uppercase-text" href="http://projects.gisehaag.com/">training projects</a></li>
						<li><a class="uppercase-text" href="<?php echo home_url('/contact'); ?>">contactame</a></li>
					</ul>
			</div>
			<div class="social-menu">
				<ul>
					<li><a href="https://www.instagram.com/gise_h/" target="_blank"><i class="fab fa-instagram"></i></a></li>
					<li><a href="https://www.linkedin.com/in/gisela-haag-a0504330/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
					<li><a href="https://github.com/gisehaag" target="_blank"><i class="fab fa-github"></i></a></li>
				</ul>
			</div>
		</div>
	</header>

	<section>
		<a href="<?php echo home_url(); ?>">
			<div class="site-title">
				<h1 class="title-logo">gisehaag</h1>
				<p class="subtitle-logo uppercase-text">__un subtitulo muy copado va acá__</p>
			</div>
		</a>
		<div class="box-width img-bgc">
			<div class="main-img">
				<img  src="https://cdn.pixabay.com/photo/2016/07/31/11/52/table-1558811_1280.jpg" alt="">
			</div>
		</div>
	</section>

	<?php if(is_front_page()): ?>
		<section>
			<div class="flex box-width">
				<a class="link-box" href="<?php echo home_url('/blog'); ?>">
					<div class="box-image">
						<img src="https://cdn.pixabay.com/photo/2015/09/20/02/03/sunglasses-947892_1280.jpg" alt="">
						<h2 class="uppercase-text">blog</h2>
					</div>
				</a>

				<a class="link-box" href="https://projects.gisehaag.com/">
					<div class="box-image">
						<img src="https://cdn.pixabay.com/photo/2017/02/15/16/16/converse-2069209_1280.jpg" alt="">
						<h2 class="uppercase-text">training projects</h2>
					</div>
				</a>
				<a class="link-box" href="<?php echo home_url('/contact'); ?>">
					<div class="box-image">
						<img src="https://cdn.pixabay.com/photo/2015/04/24/18/04/stamps-738059_1280.jpg" alt="">
						<h2 class="uppercase-text">contactame</h2>
					</div>
				</a>
			</div>
		</section>
	<?php endif ?>