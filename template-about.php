<?php 
/* Template Name: About */
?>

<?php get_header(); ?>

<h1 class="greeting">Hey there, I'm Matt. I love 1950's tiki culture, mid-century modern architecture, and a well made cocktail. Oh, and also web design. <a href="#story" title="Read my story">Learn more &#8623;</a></h1>

<div class="about-content">

	<div class="about-img">
		<img src="<?php bloginfo('template_url'); ?>/images/bg-matt@2x.jpg" srcset="<?php bloginfo('template_url'); ?>/images/bg-matt@2x.jpg 2x" alt="Matt Downey" />
	</div> <!-- End about-img -->

	<div id="story" class="about-text">
		<br>
		<br>

		<h3 class="section-title">About Me</h3>
	
		<p class="about-text-intro">My journey into web design began in 2004. I had just graduated from <a href="http://gsu.edu">Georgia State University</a> with a Bachelor's Degree in Marketing and took a job that would move me across the country from ATL to PDX.</p>

		<p>While working in the Pacific Northwest, I was thrown in to the most creative and energizing environment I had ever experienced. I was surrounded by smart people, innovative ideas, and tons of new technology. It was during that time that I was introduced to web design and inspired to enroll in multimedia classes at <a href="http://psu.edu">Portland State University</a>. After earning my certificate, I took my newly acquired skills back to Atlanta to start <a href="http://45royale.com" title="45royale">45royale</a>.</p>

		<p>Now, with over a decade of experience in the web design and development space, I’m happy to offer my expertise to those in need. If you have a question or would like to chat about working together, please feel free to <a href="<?php bloginfo('wpurl'); ?>/contact">contact me</a> or <a href="http://twitter.com/mattdowney">hit me up on Twitter</a>.️</p>

		<?php get_template_part('includes/logo-cloud'); ?>

	</div> <!-- End about-text -->

</div> <!-- End about-content -->

<?php get_template_part('includes/newsletter'); ?>
<?php get_template_part('includes/about-footer'); ?>

<?php get_footer(); ?>