 <?php get_header(); ?>

<!--Showcase-->
<section class="row showcase animated fadeIn">
	<div class="container">
		<div class="col-md-12">
			<div class="showcase-content">
				<h1><?php echo get_theme_mod('showcase_heading','August Theme'); ?></h1>
				<p class="lead"><?php echo get_theme_mod('showcase_text','by Borgee'); ?></p>
				
				<!--Social Media-->
				<ul class="list-inline">
					<?php if(get_theme_mod('facebook_url','https://facebook.com/') != '') : ?>
					<li class="list-inline-item">
						<a class="btn btn-warning btn-lg text-body" href="<?php echo get_theme_mod('facebook_url','https://www.facebook.com/'); ?>" target="_blank">
							<i class="fab fa-facebook-f"></i>  </i></a>
					</li>
					<?php endif; ?>
					
					<?php if(get_theme_mod('twitter_url','https://twitter.com/') != '') : ?>
					<li class="list-inline-item">
						<a class="btn btn-warning btn-lg text-body" href="<?php echo get_theme_mod('twitter_url','https://twitter.com/borgeeph/'); ?>" target="_blank">
							<i class="fab fa-twitter"></i>  </i></a>
					</li>
					<?php endif; ?>

					<?php if(get_theme_mod('instagram_url','https://www.instagram.com/') != '') : ?>
					<li class="list-inline-item">
						<a class="btn btn-warning btn-lg text-body" href="<?php echo get_theme_mod('instagram_url','https://instagram.com/borgeeee/'); ?>" target="_blank">
							<i class="fab fa-instagram"></i>  </i></a>
					</li>
					<?php endif; ?>
				</ul>

			</div>	
		</div>
	</div>
</section>

<!--Product-->
<?php $latest_blog_post = new WP_Query(array(
	'posts_per_page'	=>	3,
	'tax_query'		=>	array(
		array(
		'taxonomy'		=>	'post_format',
		'field'			=>	'slug',
		'terms'			=>	array( //post type we don't want to display
							'post-format-aside',
							'post-format-gallery'),
		'operator'		=>	'NOT IN'
		))
	));
?>

<?php
	//section post and image swap position
	$i = 0;
	$section ='section-1'; // Section Class
?>

<?php if($latest_blog_post->have_posts()) : while($latest_blog_post->have_posts()) : $latest_blog_post->the_post(); ?>

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
<div class="<?php echo $section_class; ?>">
	<div class="container">
		<div class="row">
			<div class="<?php echo $left_class; ?>">
				<div class="clearfix"></div>
				<h2 class="section-heading"><?php the_title(); ?></h2>
				<div class="excerpt"> <?php the_excerpt(); ?> </div>
			</div>
			<diV clas="<?php echo $right_class; ?>">
				<?php the_post_thumbnail('full',array(
				'class'	=> $img_class
				));?>
			</div>
		</div>
	</div>
</div>

<?php endwhile; endif; ?>


<?php get_footer(); ?>