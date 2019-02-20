
<!--Banner-->
<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h2><?php echo get_theme_mod('banner_heading', 'Follow Us');?></h2>
			</div>
			<div class="col-lg-6">
				<ul class="list-inline banner-social-buttons">
					<?php if(get_theme_mod('facebook_url','https://facebook.com/') != '') : ?>
					<li class="list-inline-item">
						<a class="btn btn-warning btn-lg text-body" href="<?php echo get_theme_mod('facebook_url','https://www.facebook.com/'); ?>" target="_blank">
							<i class="fab fa-facebook-f"></i> Facebook</i></a>
					</li>
					<?php endif; ?>
					
					<?php if(get_theme_mod('twitter_url','https://twitter.com/') != '') : ?>
					<li class="list-inline-item">
						<a class="btn btn-warning btn-lg text-body" href="<?php echo get_theme_mod('twitter_url','https://twitter.com/'); ?>" target="_blank">
							<i class="fab fa-twitter"></i> Twitter</i></a>
					</li>
					<?php endif; ?>

					<?php if(get_theme_mod('instagram_url','https://instagram.com/') != '') : ?>
					<li class="list-inline-item">
						<a class="btn btn-warning btn-lg text-body" href="<?php echo get_theme_mod('instagram_url','https://instagram.com/'); ?>" target="_blank">
							<i class="fab fa-instagram"></i> Instagram</i></a>
					</li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
</section>



<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="list-inline">
					<li class="list-inline-item">
						<a href="#">Home</a>
					</li>
					<li class="list-inline-item">
						<a href="about.html">About</a>
					</li>
					<li class="list-inline-item">
						<a href="blog.html">Blog</a>
					</li>
				</ul>
				<p class="copyright text-muted small">Copyright &copy; <a href="https://www.abg.website/">Abg Website</a>. All Rights Reserved.</p>
			</div>
		</div>
	</div>
</footer>




























<!-- JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>