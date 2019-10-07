<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
<div hidden="hidden" id=terminal>
  <div id=terminal-upper>
    <div class="terminal-button"></div>
    <div class="terminal-button"></div>
    <div class="terminal-button"></div>
  </div>
  <div id=terminal-inner>
    <p class="source-code inline-block"><?php echo "<span class=bash-user>Code_Zealot@codezealot.com:</span> <span class=bash-prompt>~$</span>"; ?></p>
    <p class="source-code inline-block" id="typewriter"></p>
    <div hidden="hidden" class="hidden">
      <p class="source-code">Welcome to my little piece of the internet. My name is Code_Zealot and I am a Front End Developer and a <a class="link" href="https://youtube.com/c/CodeZealot">Content Creator for YouTube</a>. I specialize in coding websites, teaching others about coding, and having fun in Minecraft while I do it!</p>
      <p class="source-code">What would you like to do?</p>
      <p class="source-code comment">// Don’t worry…you don’t have to know any code…yet. Click on one of the options below.</p>
      <ul class="source-code">
        <li><a id="portfolio" href="<?php echo get_site_url() ?>/portfolio/" class="link">view my web dev portfolio</a></li>
        <li><a id="contact" href="<?php echo get_site_url() ?>/contact/" class="link">get in contact with me</a></li>
        <li><a id="minecraft" href="<?php echo get_site_url() ?>/minecraft/" class="link">view my minecraft content</a></li>
        <li><a id="discord" href="https://discord.gg/GrMjPnu" class="link">join my discord server</a></li>
      </ul>
      <p id=copyright class="source-code">© Code_Zealot 2019</p>
      <img id="codezealot" src="<?php bloginfo('template_url'); ?>/images/code-zealot.png" /> 
    </div>
  </div>
</div>
    

<?php get_footer(); ?>
