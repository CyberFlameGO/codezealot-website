<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset='<?php bloginfo('charset') ?>'>
	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow">
	<?php }?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	  		<?php include 'global-parts/nav-menu.php'; ?>
	  </div>
	</div>
	
	<header class="clear">
		<a class="logo" href="<?php echo get_site_url() ?>/"><img src="/wp-content/themes/cz-blog-v1/images/cz-logo.png" /></a>
		<button class="show-menu fa fa-bars" onclick="openMenu()"></button>
		<nav>
			<?php include 'global-parts/nav-menu.php'; ?>
		</nav>
		
	</header>
