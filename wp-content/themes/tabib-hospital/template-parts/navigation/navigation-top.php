<?php
/**
 * Displays top navigation
 */
?>

<div class="header-menu">
	<div class="container">
		<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'tabib-hospital' ); ?>">
			<button role="tab" class="menu-toggle p-3" aria-controls="top-menu" aria-expanded="false">
				<?php
					esc_html_e( 'Menu', 'tabib-hospital' );
				?>
			</button>
			<?php wp_nav_menu( array(
				'theme_location' => 'top',
				'menu_id'        => 'top-menu',
			) ); ?>
		</nav>
	</div>
</div>