<nav id="site-navigation" class="main-navigation menu-wrapper">
	<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
		<i class="fa fa-bars" aria-hidden="true"></i>
		<i class="fa fa-times" aria-hidden="true"></i>
		<span class="menu-label"><?php esc_html_e( 'Menu', 'foodie-world' ); ?></span>
	</button>

	<div class="menu-inside-wrapper">
		<?php
		wp_nav_menu( array(
			'theme_location'  => 'menu-1',
			'menu_id'         => 'primary-menu',
			'container_class' => 'primary-menu-container',
		) );
		?>
	</div> <!-- .menu-inside-wrapper -->
</nav><!-- #site-navigation -->
