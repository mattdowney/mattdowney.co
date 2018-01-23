<?php 
/* Template Name: About */
?>

<?php get_header(); ?>

<h1 class="greeting">Hey there, I'm Matt. I love 1950's tiki culture, mid-century modern architecture, and a well made cocktail. Oh, and also web design. <a href="#story" title="Read my story">Learn more &#8623;</a></h1>

<div class="about-content">
	<div class="video-container">
			<iframe src="https://www.youtube.com/embed/Qt4eL99EokM?&theme=light&autoplay=1&loop=1&playlist=Qt4eL99EokM&controls=0&keyboard=0&autohide=1&modestbranding=1&fs=0&showinfo=0&rel=0" frameborder="0"></iframe>
		</div> <!-- End .video-container -->
	<!--<div class="video-wrapper">
    	<video preload="auto" autoplay loop muted>
		  	<source src="<?php bloginfo('template_url'); ?>/video/bio-profile.mp4" type="video/mp4">
		  	<source src="<?php bloginfo('template_url'); ?>/video/bio-profile.webm" type="video/webm">
		  	<source src="<?php bloginfo('template_url'); ?>/video/bio-profile.ogv" type="video/ogg">
			Your browser does not support the video tag.
		</video>
	</div>-->

	<!--<div class="about-img">
		<img src="<?php bloginfo('template_url'); ?>/images/bg-matt@2x.jpg" srcset="<?php bloginfo('template_url'); ?>/images/bg-matt@2x.jpg 2x" alt="Matt Downey" />
	</div> End about-img -->

	<div id="story" class="about-text">
		<br>
		<br>

		<h3 class="section-title">About Me</h3>
	 
		<p class="about-text-intro">My journey into web design began in 2004. I had just graduated from <a href="http://gsu.edu">Georgia State University</a> with a Bachelor's Degree in Marketing and took a job that would move me across the country from ATL to PDX.</p>

		<p>While working in the Pacific Northwest, I was thrown in to the most creative and energizing environment I had ever experienced. I was surrounded by smart people, innovative ideas, and tons of new technology.</p> 

		<p>It was during that time that I was introduced to web design and began taking multimedia classes at <a href="http://psu.edu">Portland State University</a>. After earning my certificate, I took my newly acquired skills back to Atlanta to start <a href="https://45royale.com/" title="45royale">45royale</a>.</p>

		<p>Now, with over a decade of experience in the web design and development space, I’m happy to offer my expertise. If you have a question or would like to chat about working together, please feel free to <a href="<?php bloginfo('wpurl'); ?>/contact">contact me</a> or <a href="http://twitter.com/mattdowney">hit me up on Twitter</a>.</p>

		<?php // get_template_part('includes/logo-cloud'); ?>

	</div> <!-- End about-text -->

</div> <!-- End about-content -->

<?php get_template_part('includes/newsletter'); ?>
<?php get_template_part('includes/about-footer'); ?>

<?php get_footer(); ?>