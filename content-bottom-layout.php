<?php

	/* 

		Template Name: Bottom Content Layout

	*/

?>




<?php get_header();?>
	<?php // wp post code
		while(have_posts()) : the_post();
	?>
		
		<section class="row title-bar">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1>
							<?php // wp title code
								the_title('');
							?>
						</h1>
					</div>
					<div class="col-md-6">
						<div class="sub-nav">
							<ul>
								<?php //child nav
									$args = array(
										'child_of'	=>	get_top_parent(),
										'title_li'	=>	'',
									);
								?>
								<?php wp_list_pages($args); ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="row page">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-8">
					
					<div class="post-thumbnail">
						<?php //wp thumbnail code
							the_post_thumbnail();
						?>
					</div>
					<?php // wp content code
						the_content();
					?>		
				</div>

				<!--Sidebar-->
				<div class="col-6 col-md-4">
					<?php if(is_active_sidebar('sidebar')): ?>
						<?php dynamic_sidebar('sidebar'); ?>
					<?php endif;?>
				</div>		
			</div>
		</div>
		</section>

		<?php //bottom widget
		 if(is_active_sidebar('bottom')): ?>
			<?php dynamic_sidebar('bottom'); ?>
		<?php endif;?>

	<?php endwhile;?>
<?php get_footer();?>