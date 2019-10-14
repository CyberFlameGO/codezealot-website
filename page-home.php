<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
<div class="hero">
	<img src="/wp-content/themes/cz-blog-v1/images/hero/laptop-3.jpg" />
	<div class="hero-overlay">
		<div class="text">
			<h1>Inspiring {Z}eal around the world for all things code.</h1>
		  <h2>// Front-End Developer || Content Creator \\</h2>
		</div>
	</div>
</div>
<main>

	<section id="skill-set">
		<h2 class="section-title">Skill Set</h2>
		<div class="grid-container">

			<div class="skill grid-item"><i class="fab fa-html5"><span class="exp">
				<?php 
					$currentYear = date("Y");
					$learnedYear = 2015;
					$experience = $currentYear - $learnedYear;
					if($experience == "1"){
						echo "$experience Year";
					} else {
						echo "$experience Years";
					}
				?> 
			</span></i>
			</div>

			<div class="skill grid-item"><i class="fab fa-css3"><span class="exp">
				<?php 
					$currentYear = date("Y");
					$learnedYear = 2015;
					$experience = $currentYear - $learnedYear;
					if($experience == "1"){
						echo "$experience Year";
					} else {
						echo "$experience Years";
					}
				?> 
			</span></i>

			</div>
			<div class="skill grid-item"><i class="fab fa-sass"><span class="exp">
				<?php 
					$currentYear = date("Y");
					$learnedYear = 2015;
					$experience = $currentYear - $learnedYear;
					if($experience == "1"){
						echo "$experience Year";
					} else {
						echo "$experience Years";
					}
				?> 
			</span></i>
			</div>

			<div class="skill grid-item"><i class="fab fa-php"><span class="exp">
				<?php 
					$currentYear = date("Y");
					$learnedYear = 2015;
					$experience = $currentYear - $learnedYear;
					if($experience == "1"){
						echo "$experience Year";
					} else {
						echo "$experience Years";
					}
				?> 
				</span></i></i>
			</div>

			<div class="skill grid-item"><i class="fab fa-js-square"><span class="exp">
				<?php 
					$currentYear = date("Y");
					$learnedYear = 2015;
					$experience = $currentYear - $learnedYear;
					if($experience == "1"){
						echo "$experience Year";
					} else {
						echo "$experience Years";
					}
				?> 
			</span></i>
			</div>

			<div class="skill grid-item"><i class="fab fa-react"><span class="exp">
				<?php 
					$currentYear = date("Y");
					$learnedYear = 2018;
					$experience = $currentYear - $learnedYear;
					if($experience == "1"){
						echo "$experience Year";
					} else {
						echo "$experience Years";
					}
				?> 
			</span></i>
			</div>

			<div class="skill grid-item"><i class="fab fa-wordpress"><span class="exp">
				<?php 
					$currentYear = date("Y");
					$learnedYear = 2015;
					$experience = $currentYear - $learnedYear;
					if($experience == "1"){
						echo "$experience Year";
					} else {
						echo "$experience Years";
					}
				?> 
			</span></i>
			</div>

			<div class="skill grid-item"><i class="fab fa-git-square"><span class="exp">
				<?php 
					$currentYear = date("Y");
					$learnedYear = 2015;
					$experience = $currentYear - $learnedYear;
					if($experience == "1"){
						echo "$experience Year";
					} else {
						echo "$experience Years";
					}
				?> 
			</span></i>
			</div>

			<div class="skill grid-item"><i class="fas fa-database"><span class="exp">
				<?php 
					$currentYear = date("Y");
					$learnedYear = 2015;
					$experience = $currentYear - $learnedYear;
					if($experience == "1"){
						echo "$experience Year";
					} else {
						echo "$experience Years";
					}
				?> 
			</span></i>
			</div>

			<div class="skill grid-item"><i class="fab fa-youtube"><span class="exp">
				<?php 
					$currentYear = date("Y");
					$learnedYear = 2017;
					$experience = $currentYear - $learnedYear;
					if($experience == "1"){
						echo "$experience Year";
					} else {
						echo "$experience Years";
					}
				?> 
			</span></i>
			</div>

			<div class="skill grid-item"><i class="fab fa-ubuntu"><span class="exp">
				<?php 
					$currentYear = date("Y");
					$learnedYear = 2018;
					$experience = $currentYear - $learnedYear;
					if($experience == "1"){
						echo "$experience Year";
					} else {
						echo "$experience Years";
					}
				?> 
			</span></i>
			</div>

			<div class="skill grid-item"><i class="fab fa-apple"><span class="exp">
				<?php 
					$currentYear = date("Y");
					$learnedYear = 2010;
					$experience = $currentYear - $learnedYear;
					if($experience == "1"){
						echo "$experience Year";
					} else {
						echo "$experience Years";
					}
				?> 
			</span></i>
			</div>
		</div>
	</section>

	<section id="projects">
		<h2 class="section-title">Projects</h2>
			<div class="projects-loop">
				<?php echo do_shortcode('[soliloquy slug="projects-post-slider"]'); ?>
			</div>
	</section>

	<section id="contact">
		<h2 class="section-title">Contact</h2>
		<div id=terminal>
		  <div id=terminal-upper>
		    <div class="terminal-button"></div>
		    <div class="terminal-button"></div>
		    <div class="terminal-button"></div>
		  </div>
		  <div id=terminal-inner>
		    <p class="source-code inline-block"><?php echo "<span class=bash-user>Code_Zealot@codezealot.com:</span> <span class=bash-prompt>~$</span>"; ?></p>
		    <p class="source-code inline-block" id="typewriter">./contact-form.sh</p>
		    <div class="hidden">
		      <?php echo do_shortcode('[contact-form-7 id="33" title="Contact Form - Main"]'); ?>
		    </div>
		  </div>
		</div>
	</section>
</main>
    

<?php get_footer(); ?>
