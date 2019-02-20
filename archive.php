 <?php get_header(); ?>

<section class="row title-bar">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h1>
					<?php 
						//archive wp code
						if(is_category()){
							single_cat_title();
						}elseif (is_author()) {
							the_post();
							echo 'Archives by '	.get_the_author();
							rewind_posts();
						}elseif (is_tag()) {
							single_tag_title();
						}elseif (is_day()) {
							echo 'Date Written:'	.get_the_date();
						}elseif (is_month()) {
							echo 'Date Written:'	.get_the_date('F Y');
						}elseif (is_year()) {
							echo 'Date Written:'	.get_the_date('Y');
						}else {
							echo 'Archives';
						}
					?>	
				</h1>		
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
		<div class="<?php echo $section_class; ?>">
		<div class="container">
		<div class="row"> 
			<div class="<?php echo $left_class; ?>">
	 
				<div class="clearfix"></div>
				<h2 class="section-heading"><?php the_title(); ?></h2>

				<div class="meta">
					Posted on <?php the_time('F j, Y');?>
					by
					<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
						<?php the_author();?>
					</a><br>
					Category:
					<?php
						$categories =	get_the_category();
						$separator	=	", ";
						$output 	=	'';

					if ($categories) {
						foreach ($categories as $category) {
							$output .= '<a href="'. get_category_link($category->term_id).'">'.$category->cat_name . '</a>' . $separator;
						}
					}
					echo trim($output, $separator);
					?>
				</div>
				<div class="excerpt"> <?php the_excerpt(); ?></div>
				<a class="btn btn-warning" href="<?php the_permalink(); ?>">Read More</a>
			</div>
			<diV clas="<?php echo $right_class; ?>">
				<?php the_post_thumbnail('full',array(
					'class'	=> $img_class
				));?>
			</div>
		</div>
		</div>
		</div>
	<?php endwhile;?>

<?php get_footer(); ?>