<?php get_header(); ?>

<div class="hero">
  <img src="/wp-content/themes/cz-blog-v1/images/hero/laptop-5.jpg" />
  <div class="hero-overlay">
    <div class="text">
      <h1>Project Information</h1>
      <h2>// <?php the_title() ;?> \\</h2>
      <a class="hero-button" href="#project">
        <button>View Info<i class="fas fa-angle-double-down"></i></button>
      </a>
    </div>
  </div>
</div>
<main> 
  <section id="project" class="project">
    <div class="grid">
      <div class="top">
          <h1 class="the-title">Client: <?php the_title() ;?></h1>
          <ul class="project-tags">
            Tech used: 
            <?php
              $post_tags = get_the_tags();
              if ($post_tags) {
                foreach($post_tags as $tag) {
                  echo '<li><a class="link" href="'; echo bloginfo();
                  echo '/?tag=' . $tag->slug . '" class="' . $tag->slug . '">' . $tag->name . '</a></li>';
                }
              }
            ?>
          </ul>
      </div>

      <div class="left grid-1-2">
        <?php the_post();
          if(has_post_thumbnail()){                
              the_post_thumbnail();
          }
        ?>
      </div>

      <div class="right grid-1-2">

          <h2>Challenges Faced</h2>
          <?php the_field('projectChallenges'); ?>

          <h2>Solutions Provided</h2>
          <?php the_field('projectSolutions'); ?>
      </div>
    </div>
  </div>

  <div class="button-wrapper grid">

    <div class="grid-1-2">
      <form>
         <button type="submit" formaction="<?php the_field('projectUrlCode'); ?>">View Code</button>
      </form>
    </div>

    <div class="grid-1-2">
      <form>
         <button type="submit" formaction="<?php the_field('projectUrlLive'); ?>">View Live</button>
      </form>
    </div>
    
  </section>
</main>

<?php get_footer(); ?>