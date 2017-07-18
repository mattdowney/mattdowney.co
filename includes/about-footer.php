<div class="clearfix"></div>

<div class="footer">

	<div class="footer-col footer-about">
		<h3 class="section-title">Latest Posts</h3>
		<ul>
			<?php $articlePost = new WP_Query('cat=-1&posts_per_page=5');
			if ($articlePost->have_posts()) :
				while ($articlePost->have_posts()) : $articlePost->the_post(); ?>
							<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>

				<?php endwhile;

				else :

				endif;

				wp_reset_postdata(); // Prevents the custom loop from disrupting the natural loop - WordPress runs on it's own

			?>
		</ul> <!-- End article-container -->
	</div> <!-- End footer-about -->

	<div class="footer-col footer-navigate">
		<h3 class="section-title">Navigate</h3>
		<ul>
			<li><a href="<?php bloginfo('wpurl'); ?>">Home</a></li>
			<li><a href="<?php bloginfo('wpurl'); ?>/about/">About</a></li>
			<li><a href="<?php bloginfo('wpurl'); ?>/work/">Work</a></li>
			<li><a href="<?php bloginfo('wpurl'); ?>/blog/">Blog</a></li>
			<li><a href="<?php bloginfo('wpurl'); ?>/contact/">Contact</a></li>
		</ul>
	</div> <!-- End footer-navigate -->

	<div class="footer-col footer-elsewhere">
		<h3 class="section-title">Elsewhere</h3>
		<ul>
			<li><a href="http://twitter.com/mattdowney">Twitter</a></li>
			<li><a href="http://dribbble.com/mattdowney">Dribbble</a></li>
			<li><a href="http://instagram.com/mc_downey">Instagram</a></li>
		</ul>
	</div> <!-- End footer-navigate -->

<div class="footer-col footer-copyright">
	<h3 class="section-title">&copy; <?php echo date("Y") ?></h3>
	<p>Made in Atlanta, GA<br>
		33.7490° N, 84.3880° W<br>
		<a href="http://www.chooseatl.com/" title="Choose ATL">#chooseatl</a></p>
</div> <!-- End footer-about -->

</div> <!-- End footer -->