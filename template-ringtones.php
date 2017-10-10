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
	<p>Having the same ringtone as everyone else is boring. So I made these to help stand out from the crowd. This limited edition set of 20 handcrafted sounds is available for <b class="highlight">free</b> through <?php echo date('F'); ?></span>!</p>

	<div class="cta-buttons">
		<div class="preview">
			<?php echo do_shortcode('[sc_embed_player fileurl="http://mattdowney.co/wp-content/files/ringtone-snippets.mp3"]'); ?>
		</div> <!-- End .preview -->

		<div class="buy-now">
			<a class="no-animation" href="http://mcd.uno/2y8IdNE" download>Download ringtones</a>
			<?php //echo do_shortcode('[sell_media_file item_name="protones-20pack.zip" name="ProTones" description="20 iPhone Ringtones & Alerts" amount="1.99" label="Buy for $1.99" download_link="http://protones.co/wp-content/files/protones-fall-2016.zip"]'); ?>
		</div> <!-- End .buy-now -->
	</div> <!-- End .cta-buttons -->

	<div class="share-buttons">
		<!--<a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fmattdowney.co%2Fiphone-ringtones%2F%[title]=iPhone+Ringtones" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		
		<a href="https://twitter.com/intent/tweet?url=<?php echo htmlspecialchars(urlencode(html_entity_decode('http://mcd.uno/2yc1aRf', ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>&amp;text=These hand-crafted iPhone ringtones and alerts by @mattdowney are distinct, polished, and one of a kind." target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>-->
	</div> <!-- End .share -->

</div> <!-- End ringtone-content -->

<?php //get_template_part('includes/newsletter-halloween'); ?>
<?php get_template_part('includes/footer'); ?>

<?php get_footer(); ?>