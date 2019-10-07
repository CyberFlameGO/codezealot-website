<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset='<?php bloginfo('charset') ?>'>
	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow">
	<?php }?>
	<meta name="viewport" content="width=device-width">
	<meta property="og:url"           content="<?php echo get_the_permalink(); ?>" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="<?php echo the_title_attribute(); ?>" />
	<meta property="og:description"   content="The Official Website of Code_Zealot" />
	<meta property="og:image"         content="<?php bloginfo('template_url'); ?>/screenshot.png" />

	<title>
		<?php 
			if(is_home()) { 
				echo " Home | ";
				echo bloginfo("name");
			} 
			else { 
				echo wp_title(" | ", false, 'right');
				echo bloginfo("name");
			} 
		?>
	</title>

	<?php wp_head(); ?>
</head>


<body id="body" <?php body_class(); ?>>
	<div id="mobile-menu" class="overlay">
	  <a href="javascript:void(0)" class="fa fa-bars show-menu closebtn" onclick="closeMenu()"></a>
	  <div class="overlay-content">
	  		<a href="<?php echo get_site_url() ?>/">Home</a>
	  		<a href="<?php echo get_site_url() ?>/portfolio/">Portfolio</a>
				<a href="<?php echo get_site_url() ?>/minecraft/">Minecraft Content</a>
				<a href="<?php echo get_site_url() ?>/contact/">Contact</a>
	  </div>
	</div>
	
	<header class="clear">
		<button class="show-menu fa fa-bars" onclick="openMenu()"></button>
		<h1 class="logo"><a href="<?php echo get_site_url() ?>/">code<span>{Z}</span>ealot</a> </h1>
	</header>
