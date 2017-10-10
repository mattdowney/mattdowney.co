<?php 
/* Template Name: Ringtones */
?>

<?php get_header(); ?>

<div class="ringtone-content">

	<div class="note">
		<div class="mask">
			<div class="gradient">
				<img src="<?php bloginfo('template_url'); ?>/images/img-note-mask.png" alt="Ringtones" />
			</div>
		</div> <!-- End. mask -->
	</div> <!-- End .note -->

	<h1>Premium iPhone Ringtones</h1>
	<p>Having the same ringtones and alerts as everyone else is boring — so I made these to help you stand out from the crowd. This handcrafted set of 20 sounds is available for <b class="highlight">free</b> through <?php echo date('F'); ?></span>!</p>

	<div class="cta-buttons">
		<div class="preview">
			<?php echo do_shortcode('[sc_embed_player fileurl="http://mattdowney.co/wp-content/files/ringtone-snippets.mp3"]'); ?>
		</div> <!-- End .preview -->

		<div class="buy-now">
			<a class="no-animation" href="https://cl.ly/mzYa/download/ringtones-fall.zip" download>Download ringtones</a>
			<?php //echo do_shortcode('[sell_media_file item_name="protones-20pack.zip" name="ProTones" description="20 iPhone Ringtones & Alerts" amount="1.99" label="Buy for $1.99" download_link="http://protones.co/wp-content/files/protones-fall-2016.zip"]'); ?>
		</div> <!-- End .buy-now -->
	</div> <!-- End .cta-buttons -->

	<div class="share-buttons">
		<a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fmattdowney.co%2Fiphone-ringtones%2F" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		
		<a href="https://twitter.com/intent/tweet?url=<?php echo htmlspecialchars(urlencode(html_entity_decode('http://mcd.uno/2yc1aRf', ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>&amp;text=These hand-crafted iPhone ringtones and alerts by @mattdowney are distinct, polished, and one of a kind." target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>

		<a href="https://pinterest.com/pin/create/button/?url=http%3A//mattdowney.co/iphone-ringtones/&media=http%3A//mattdowney.co/wp-content/themes/mattdowney.co/images/sharer.jpg&description=Having%20the%20same%20ringtone%20as%20everyone%20else%20is%20boring.%20So%20I%20made%20these%20to%20help%20stand%20out%20from%20the%20crowd.%20This%20limited%20edition%20set%20of%2020%20handcrafted%20sounds%20is%20available%20for%20FREE!" count-layout="horizontal" target="_blank" class="pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i>
</i></a>
	</div> <!-- End .share -->

</div> <!-- End ringtone-content -->

<?php //get_template_part('includes/newsletter-halloween'); ?>
<?php get_template_part('includes/footer'); ?>

<?php get_footer(); ?>