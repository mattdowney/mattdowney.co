<?php get_header(); ?>

			<h1 class="greeting">
				<span>404</span>
				Sorry, we can't find what you're looking for. Maybe you'd be interested in reading <a href="<?php bloginfo('wpurl'); ?>/about/">more about me</a> or have a look at recent articles below.
			</h1>

			<div class="article-container">

				<?php $articlePost = new WP_Query('cat=-1&posts_per_page=3');
				if ($articlePost->have_posts()) :
					while ($articlePost->have_posts()) : $articlePost->the_post(); ?>
						
					<div class="article-content">
						<?php if ( has_post_thumbnail() ) : ?>
							<a class="article-thumb" href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" /></a>
						<?php endif; ?> <!-- End post thumbnail -->
						
							<div class="article-excerpt">
								<?php exclude_post_categories("1"); ?>
								<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
								<p><?php echo substr(get_the_excerpt(), 0,120); ?>&hellip;</p>
								<a class="button" href="<?php the_permalink(); ?>"><?php the_field('more-button'); ?></a>
							</div> <!-- End hero-excerpt -->

					</div> <!-- End article-content -->

					<?php endwhile;

					else :

				endif;

				wp_reset_postdata(); // Prevents the custom loop from disrupting the natural loop WP runs on it's own

				?>

			</div> <!-- End article-container -->

			<?php get_template_part('includes/newsletter-halloween'); ?>

			<?php get_template_part('includes/footer'); ?>

		</div> <!-- End wrap -->

<?php get_footer(); ?>