<?php get_header(); ?>
<!--Child Nav-->
<section class="row title-bar">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h1><?php wp_title(''); ?></h1>
			</div>

			<div class="col-md-8">
				<?php // top blog categories 
					if(is_active_sidebar('subnav')): ?>
					<?php dynamic_sidebar('subnav'); ?>
				<?php endif;?>
			</div>
		</div>
	</div>
</section>
	<?php
		$i=0;
	?>

	<?php while (have_posts()) : the_post(); ?>
		<?php
		$i++;
			if($i % 2 != 0) {
			//odd post
			$section_class	= 'section-1';
			$left_class 	= 'col-lg-5 col-sm-6 mr-auto animated fadeInLeft';
			$right_class	= 'col-lg-5 col-sm-6';
			$img_class		= 'img-responsive rounded-circle animated fadeInRight';
			}else{
			//even post
			$section_class = 'section-2';
			$left_class 	= 'col-lg-5 order-sm-6 ml-auto col-sm-6 animated fadeInRight';
			$right_class	= 'col-lg-5 col-sm-6';
			$img_class		= 'img-responsive rounded-circle animated fadeInLeft';
			}
		?>

		<?php //aside post format
			if(has_post_format($format, $post_id) &&
				get_post_format($post_id) == 'aside') : ?>
		<?php //aside Content
			require get_template_directory() . '/content-aside.php';
		?>


		<?php //Gallery post format
			elseif(has_post_format($format, $post_id) &&
				get_post_format($post_id) == 'gallery') : ?>
		<?php //Gallery Content
			require get_template_directory() . '/content-gallery.php';
		?>
		
		<?php else : ?>
			<?php //standard content
				require get_template_directory() . '/content.php';
			?>
		<?php endif;?>	
	<?php endwhile;?>

<?php get_footer(); ?>