<?php
/*
	@package bootstrap-basic4
	Template Name: foxmind
*/
	get_header();
?>

<header class="fox-wrapper">
	<div class="fox-navbar">
		<div class="fox-navbar__brand">
			<a href=""><img src="<?php echo get_template_directory_uri().'/assets/img/Logo.png' ?>" alt="logo" class="brand__img"></a>
		</div>
		<div class="fox-navbar__toggler">
			<span class="toggler__line--first"></span>
			<span class="toggler__line--second"></span>
			<span class="toggler__line--third"></span>
		</div>
		<ul class="fox-navbar__nav">
			<li class="fox-nav__item"><a href="">ГЛАВНАЯ</a></li>
			<li class="fox-nav__item"><a href="">СТРАНИЦА 1</a></li>
			<li class="fox-nav__item"><a href="">СТРАНИЦА 2</a></li>
			<li class="fox-nav__item"><a href="">СТРАНИЦА 3</a></li>
			<li class="fox-nav__item"><a href="">СТРАНИЦА 4</a></li>
		</ul>
	</div>
</header>

<div class="fox-wrapper">
	<div class="fox-container">
		<input type="checkbox" id="check">
		<label class="click__mobile" for="check"></label>
		<h1 class="fox-container__title">ЦЕНТР ОБУЧЕНИЯ<span class="animate-dots">...</span></h1>
		<div class="list-course list-course__left">
			<div class="list-course__name list-course__name--left"><h3>ЛЕВЫЙ БЛОК</h3></div>
			<ul class="list-course__menu">
				<li><a href="">ГАЛЕРЕЯ</a></li>
				<li><a href="">ОБУЧЕНИЕ</a></li>
				<li><a href="">ТЕСТЫ</a></li>
				<li><a href="">СОБЫТИЯ</a></li>
			</ul>
			<div class="list-course__triangle"></div>
		</div>
		<div class="list-course list-course__right">
			<div class="list-course__name list-course__name--right"><h3>ПРАВЫЙ БЛОК</h3></div>
			<ul class="list-course__menu">
				<li><a href="">ГАЛЕРЕЯ</a></li>
				<li><a href="">ОБУЧЕНИЕ</a></li>
				<li><a href="">ТЕСТЫ</a></li>
				<li><a href="">СОБЫТИЯ</a></li>
			</ul>
			<div class="list-course__triangle"></div>
		</div>
	</div>
</div>

 <?php wp_footer(); ?> 