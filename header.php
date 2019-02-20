<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>
		<?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title('');?>
	</title>
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<?php if(get_theme_mod('animation', 1)): ?>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
	<?php endif; ?>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<style>
		.showcase{
			height: <?php echo get_theme_mod('showcase_height',700); ?>px;
			background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url') . '/img/showcase.jpg'); ?>);
			margin-top: -4px;
		}

		.banner{
			background:url(<?php echo get_theme_mod('banner_image', get_bloginfo('template_url') . '/img/banner.jpg'); ?>) no-repeat center center;
			background-size: cover;
		}
	</style>

</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name');?></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		
		<!--wp navwalker-->
			<?php
				wp_nav_menu( array(
					'theme_location'  => 'primary',
					'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
					'container'       => 'div',
					'container_class' => 'ml-auto',
					'container_id'    => 'bs-example-navbar-collapse-1',
					'menu_class'      => 'navbar-nav',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
				) );
			?>

		</div> 
	</div>
</nav>