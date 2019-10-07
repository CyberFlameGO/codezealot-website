<?php
/*
Template Name: Minecraft Page
*/
?>

<?php get_header(); ?>
<div class="hero">
  <div class="text">
		<h1>Inspiring {Z}eal around the world for all things code.</h1>
	  <h2>// Front-End Developer || Content Creator \\</h2>
	</div>
</div>
<main>
	<section id="videos">
		<h2 class="section-title">Latest Videos</h2>
		<div class="video-wrapper">
			<?php echo do_shortcode('[embedyt] https://www.youtube.com/embed?listType=playlist&list=UUpHOb23aUpNS8bQClsdQR8Q&layout=gallery[/embedyt]'); ?>

		</div>
	</section>
	<section id="discord">
		<h2 class="section-title">CZ Community Discord Server</h2>
		<div class="discord-widget">
			<iframe src="https://discordapp.com/widget?id=546172815146090528&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
		</div>
	</section>
</main>


<?php get_footer(); ?>
