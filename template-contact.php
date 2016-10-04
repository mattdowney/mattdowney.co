<?php 
/* Template Name: Contact */
?>

<?php get_header(); ?>

<h1 class="greeting">Hey there, thanks for stopping by! Feel free to drop me a note below or hit me up on <a href="http://twitter.com/mattdowney">Twitter</a>.</h1>

<div class="contact-content">
	<?php echo do_shortcode('[contact-form-7 id="137" title="Contact form 1"]'); ?>
</div> <!-- End about-content -->

<?php // get_template_part('includes/newsletter'); ?>
<?php get_template_part('includes/footer'); ?>

<?php get_footer(); ?>