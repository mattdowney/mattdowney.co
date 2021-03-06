<?php 
  /* Single Page Template */
?>

<?php get_header(); ?>

<div class="scroll-line"></div>

<?php 
	if (have_posts()) :
		while (have_posts()) : the_post(); ?>
	
	<div class="post-wrap">
		<h1 class="post-title"><?php the_title(); ?></h1>
		<span class="reading-time"><?php exclude_post_categories("1"); ?> &nbsp;&times;&nbsp; <?php echo reading_time(); ?> read</span>

		<?php if ( has_post_thumbnail() ) : ?>
			<?php if ( has_post_thumbnail() ) : ?>
				<img class="post-img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
				<p class="image-credit"><i><?php the_field('image-credit'); ?></i></p>
			<?php endif; ?> <!-- End post thumbnail -->
		<?php endif; ?> <!-- End post thumbnail -->

		<div class="post-content">
			<?php the_content(); ?>

			<div class="share-content clearfix">
				<a class="button" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><span>f</span> Share on Facebook</a>
				<a class="button" href="https://twitter.com/intent/tweet?url=<?php echo htmlspecialchars(urlencode(html_entity_decode(the_permalink(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>&amp;text=<?php echo get_the_title(); ?>&amp;via=mattdowney" target="_blank"><span>t</span> Share on Twitter</a>
			</div> <!-- End share-content -->
		</div> <!-- End post-content -->
</div> <!-- End post-wrap -->

<?php endwhile;
	else :
		echo '<p>No content found.</p>';
	endif;
?>

<?php the_posts_pagination( array(
    'mid_size' => 2,
    'prev_text' => __( '&#8592;&nbsp; Prev', 'textdomain' ),
    'next_text' => __( 'Next &nbsp;&#8594;', 'textdomain' ),
) ); ?>

<?php //get_template_part('includes/blog-footer'); ?>
<?php get_template_part('includes/newsletter'); ?>
<?php get_template_part('includes/footer'); ?>

<?php get_footer(); ?>