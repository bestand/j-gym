<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<title>事務×GYM</title>
	<meta name="description" content="【事務×GYM】事務職を目指す方・事務のスキルアップを目指す方のための学習サイト"/>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/6ef63a1df5.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-SHTBT0SQ1F"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-SHTBT0SQ1F');
	</script>
</head>

<body <?php body_class(); ?>>
	
	<header>
		<div class="site-title">
			<a class="site-title__link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">	
				<h1 class="service-name">事務×GYM</h1>
			</a>
		</div>
		<button type="button" class="hamburger-btn">
			<span></span>
			<span></span>
			<span></span>
		</button>
		<nav id="header-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'header_menu' )); ?>
		</nav>
	</header>
