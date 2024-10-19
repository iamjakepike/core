<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php // wp_body_open(); ?>
<div id="page">

	<header class="mb-4">
		<div class="o-wrapper py-5 flex justify-between border-b-2 flex-wrap md:flex-nowrap gap-3 items-center">
			<div class="relative z-10">
    			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div>
			<nav class="o-primary-navigation" role="navigation" aria-label="Primary Navigation">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'header-menu',
						'container'      => 'ul',
						'menu_class'     => 'o-primary-navigation__inner js-nav',
					) );
				?>
				<button class="o-primary-navigation__open-nav js-open-nav"
					data-open="false" 
	     			aria-expanded="false" 
	     			aria-controls="primary-navigation"
					aria-label="Open navigation">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</nav>
		</div>
	</header>



	<div id="content">