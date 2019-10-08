<?php
	if (is_page('minecraft')){ ?>
		<ul>
			<li><a href="" class="menu-item tome-of-zeal"><i class="fas fa-hat-wizard" onclick="closeMenu()"></i>Tome of Zeal</a></li> 
			<li><a href="<?php echo get_site_url() ?>/minecraft/command-school" class="menu-item command-school" onclick="closeMenu()"><i class="fas fa-graduation-cap"></i>Command School</a></li>
			<li><a target="_blank" rel="noopener noreferrer" href="https://discord.gg/tPpsTDh"><i class="fab fa-discord" onclick="closeMenu()"></i>Discord</a></li><span> | </span>
			<?php
					if (is_user_logged_in()){ ?>
						<li><a href="<?php echo wp_logout_url(get_permalink()); ?>" class="menu-item log-out"><i class="fas fa-dungeon" onclick="closeMenu()"></i>Logout</a></li>
						<?php
					} else{ ?>
						<li><a href="<?php echo wp_login_url( get_permalink() ); ?>" class="menu-item log-in"><i class="fas fa-dungeon" onclick="closeMenu()"></i>Login</a></li>
						<?php
					}
				?>
		</ul>
	<?php
	} else { ?>
		<ul>
			<li><a href="<?php echo get_site_url() ?>/#skill-set" class="menu-item" onclick="closeMenu()"><i class="skill-set fas fa-laptop-code"></i>Skill Set</a></li>
			<li><a href="<?php echo get_site_url() ?>/#projects" class="menu-item" onclick="closeMenu()"><i class="projects fas fa-folder-open"></i>Projects</a></li>
			<li><a href="<?php echo get_site_url() ?>/#contact" class="menu-item" onclick="closeMenu()"><i class="contact fas fa-comments"></i>Contact</a></li>
			<li><a href="http://codezealot.com/wp-content/uploads/2019/10/resume-indeed-new.pdf" class="menu-item" onclick="closeMenu()"><i class="resume fas fa-download"></i>Resume</a></li><span> | </span> 
			<li><a href="<?php echo get_site_url() ?>/minecraft" class=" minecraft-content menu-item minecraft" onclick="closeMenu()"><i class="fab fa-youtube"></i>Minecraft Content</a></li>
		</ul>
	<?php
	}
?>