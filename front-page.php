<?php 
/* Template Name: Home Page Landing */
?>

<?php get_header(); ?>

			<h1 class="greeting">
				<span>
				<?php
				// $input = array("Hey!", "Hello!", "Hola!", "Howdy!", "Bonjour!", "Guten Tag!", "Namaste!", "Ciao!", "Konnichiwa!", "Ni Hau!");
				$input = ("Happy Halloween!");
				$rand_keys = array_rand($input, 2);
				echo $input[$rand_keys[0]] . "\n";
				?>
				
				</span>I'm <a href="<?php bloginfo('wpurl'); ?>/about">Matt Downey</a>, a designer specializing in websites, applications, and products.
			</h1>

			<div class="hero-title">
				<h3 class="section-title">From the Blog</h3>
				<a class="section-title archives" href="<?php bloginfo('wpurl'); ?>/blog" title="More Articles">More Articles</a>
			</div> <!-- End hero-title -->

			<div class="hero-post">
				<?php $heroPost = new WP_Query('cat=1&posts_per_page=1');
					if ($heroPost->have_posts()) :
					while ($heroPost->have_posts()) : $heroPost->the_post(); ?>

					<?php if ( has_post_thumbnail() ) : ?>
						<?php if ( has_post_thumbnail() ) : ?>
								<a class="hero-thumb" href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" width="784" height="600" alt="<?php the_title(); ?>" /></a>
						<?php endif; ?> <!-- End post thumbnail -->
					<?php endif; ?> <!-- End post thumbnail -->
						
						<div class="hero-excerpt">
							<?php exclude_post_categories("1"); ?>
							<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							<p><?php echo substr(get_the_excerpt(), 0,160); ?>&hellip;</p>
							<a class="button" href="<?php the_permalink(); ?>"><?php the_field('more-button'); ?></a>
						</div> <!-- End hero-excerpt -->

					<?php endwhile;
					else :
				endif;
				wp_reset_postdata(); // Prevents the custom loop from disrupting the natural loop WP runs on it's own
				?>

			</div> <!-- End hero-post -->

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