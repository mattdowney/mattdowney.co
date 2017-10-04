<h3 class="section-title">Related Articles</h3>

<div class="article-container">

	<?php 
		$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
	if( $related ) foreach( $related as $post ) {
	setup_postdata($post); ?>
						
	<div class="article-content">
		<?php if ( has_post_thumbnail() ) : ?>
			<a class="article-thumb" href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" /></a>
		<?php endif; ?> <!-- End post thumbnail -->
		
			<div class="article-excerpt">
				<?php exclude_post_categories("1"); ?>
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<p><?php echo substr(get_the_excerpt(), 0,160); ?>&hellip;<p>
				<a class="button" href="<?php the_permalink(); ?>"><?php the_field('more-button'); ?></a>
			</div> <!-- End hero-excerpt -->

	</div> <!-- End article-content -->

	<?php } wp_reset_postdata(); ?>

</div> <!-- End article-container -->

<?php get_template_part('includes/newsletter-halloween'); ?>

<?php get_template_part('includes/footer'); ?>