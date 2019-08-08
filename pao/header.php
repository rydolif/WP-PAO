<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title><?php wp_title(''); ?></title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="<?php the_field('favicon', 'option'); ?>">
	<meta name="theme-color" content="#000">

</head>

	<?php wp_head(); ?>

<body>
	
	<header class="header">
		<div class="header__container container">
		
			<a href="<?php echo get_home_url(); ?>" class="header__logo">
				<img src="<?php the_field('logo', 'option'); ?>" alt="logo">
			</a>

			<button class="hamburger" type="button">
				<span class="hamburger__box">
					<span class="hamburger__item"></span>
				</span>
			</button>

			<nav class="nav">

				<?php 
					wp_nav_menu( array(
						'menu'=>'menu',
						'menu_class'=>'list',
					    'theme_location'=>'menu',
					) );
				?>

			</nav>

			<a href="tel:<?php the_field('tel', 'option'); ?>" class="header__tel"><?php the_field('tel', 'option'); ?></a>

		</div>
	</header>
	

