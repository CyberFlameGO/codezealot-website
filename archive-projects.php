<?php 
$args = array( 
'orderby' => 'title',
'post_type' => 'projects'
);
$the_query = new WP_Query( $args );
?>
<?php if ( have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		?>
		<div class="each-project">
			<div class="grid">
				<div class="top">
					<h1 class="the-title"><?php the_title() ;?></h1>
					<p class="project-tags"><?php the_tags( 'Tech Used: ',' , ' ); ?></p>
				</div>

				<div class="left grid-1-2">
					<img src="<?php the_field('projectImage'); ?>" />
				</div>

				<div class="right grid-1-2">

					<h2>Challenges Faced</h2>
					<?php the_field('projectChallenges'); ?>

					<h2>Solutions Provided</h2>
					<?php the_field('projectSolutions'); ?>
				</div>
			</div>

			<div class="button-wrapper grid">
				
				<div class="grid-1-2">
					<button><a href="<?php the_field('projectUrlCode'); ?>" class="link">View Code</a></button>
				</div>

				<div class="grid-1-2">
					<button><a href="<?php the_field('projectUrlLive'); ?>" class="link">View Live</a></button>
				</div>
			</div>
		</div>
		<?php
	} // end while
} // end if
wp_reset_query();
?>