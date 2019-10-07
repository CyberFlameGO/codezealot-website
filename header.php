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
	<!--
	<div id="mobile-menu" class="overlay">
	  <a href="javascript:void(0)" class="fa fa-bars show-menu closebtn" onclick="closeMenu()"></a>
	  <div class="overlay-content">
	  		<a href="<?php echo get_site_url() ?>/">Home</a>
				<a href="<?php echo get_site_url() ?>/minecraft/">Minecraft Content</a>
				<a href="<?php echo get_site_url() ?>/contact/">Contact</a>
	  </div>
	</div>
-->
	
	<header class="clear">
		<!--
		<button class="show-menu fa fa-bars" onclick="openMenu()"></button>
	-->
		<a class="logo" href="<?php echo get_site_url() ?>/"><img src="/wp-content/themes/cz-blog-v1/images/cz-logo.png" /></a>
		<nav>
		<?php if (is_page('minecraft')){ ?>
				<ul>
					<li><a href="" class="menu-item tome-of-zeal"><i class="fas fa-hat-wizard"></i>Tome of Zeal</a></li> 
					<li><a href="<?php echo get_site_url() ?>/minecraft/command-school" class="menu-item command-school"><i class="fas fa-graduation-cap"></i>Command School</a></li>
					<li><a target="_blank" rel="noopener noreferrer" href="https://discord.gg/tPpsTDh"><i class="fab fa-discord"></i>Discord</a></li><span> | </span>
					<?php
							if (is_user_logged_in()){ ?>
								<li><a href="<?php echo wp_logout_url(get_permalink()); ?>" class="menu-item log-out"><i class="fas fa-dungeon"></i>Logout</a></li>
								<?php
							} else{ ?>
								<li><a href="<?php echo wp_login_url( get_permalink() ); ?>" class="menu-item log-in"><i class="fas fa-dungeon"></i>Login</a></li>
								<?php
							}
						?>
				</ul>
		<?php
		} else { ?>
			<ul>
					<li><a href="<?php echo get_site_url() ?>/#skill-set" class="menu-item"><i class="skill-set fas fa-laptop-code"></i>Skill Set</a></li>
					<li><a href="<?php echo get_site_url() ?>/#projects" class="menu-item"><i class="projects fas fa-folder-open"></i>Projects</a></li>
					<li><a href="<?php echo get_site_url() ?>/#contact" class="menu-item"><i class="contact fas fa-comments"></i>Contact</a></li>
					<li><a href="" class="menu-item"><i class="resume fas fa-download"></i>Resume</a></li><span> | </span> 
					<li><a href="<?php echo get_site_url() ?>/minecraft" class=" minecraft-content menu-item minecraft"><i class="fab fa-youtube"></i>Minecraft Content</a></li>
				</ul>
		<?php
		}
		?>
		</nav>
		
	</header>
