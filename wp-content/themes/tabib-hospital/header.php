<?php
/**
 * The header for our theme 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) {
	  wp_body_open(); 
	} else { 
	  do_action( 'wp_body_open' ); 
	} ?>	
	<?php if(get_theme_mod('tabib_hospital_loader_setting', false) != '' || get_theme_mod('tabib_hospital_enable_disable_preloader',false) != ''){ ?>
	    <div id="pre-loader">
			<div class='demo'>
				<?php $tabib_hospital_theme_lay = get_theme_mod( 'tabib_hospital_preloader_types','Default');
				if($tabib_hospital_theme_lay == 'Default'){ ?>
					<div class='circle'>
					    <div class='inner'></div>
					</div>
					<div class='circle'>
					    <div class='inner'></div>
					</div>
					<div class='circle'>
					    <div class='inner'></div>
					</div>
				<?php }elseif($tabib_hospital_theme_lay == 'Circle'){ ?>
					<div class='circle'>
					    <div class='inner'></div>
					</div>
				<?php }elseif($tabib_hospital_theme_lay == 'Two Circle'){ ?>
					<div class='circle'>
					    <div class='inner'></div>
					</div>
					<div class='circle'>
					    <div class='inner'></div>
					</div>
				<?php } ?>
			</div>
	    </div>
	<?php }?>
	<a class="screen-reader-text skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'tabib-hospital' ); ?></a>
	<div id="page" class="site">
		<header id="masthead" class="site-header" role="banner">
			<div class="main-header py-3">
				<div class="container">
					<?php if( get_theme_mod('tabib_hospital_show_hide_topbar', false) != '' || get_theme_mod( 'tabib_hospital_enable_disable_topbar', false) != ''){ ?>
						<div class="topbar px-2 text-md-start text-center">
							<div class="row m-0">
								<div class="col-lg-4 col-md-6 align-self-center">
									<div class="logo pb-3 pb-md-0">
										<?php if ( has_custom_logo() ) : ?>
											<div class="site-logo"><?php the_custom_logo(); ?></div>
										<?php endif; ?>
										<?php $blog_info = get_bloginfo( 'name' ); ?>
										<?php if ( ! empty( $blog_info ) ) : ?>
											<?php if( get_theme_mod('tabib_hospital_show_site_title',true) != ''){ ?>
											    <?php if ( is_front_page() && is_home() ) : ?>
											    	<h1 class="site-title m-0 p-0 text-uppercase"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="text-uppercase"><?php bloginfo( 'name' ); ?></a></h1>
											    <?php else : ?>
											    	<p class="site-title m-0 p-0 text-uppercase"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
											    <?php endif; ?>
											<?php }?>
										<?php endif; ?>
										<?php
										$description = get_bloginfo( 'description', 'display' );
										if ( $description || is_customize_preview() ) :
										?>
											<?php if( get_theme_mod('tabib_hospital_show_tagline',true) != ''){ ?>
												<p class="site-description m-0">
											    <?php echo esc_html($description); ?>
												</p>
											<?php }?>
										<?php endif; ?>
									</div>
								</div>
								<div class="col-lg-2 col-md-6 phone-number-box align-self-center pb-3 pb-md-0 border-end">
									<?php if( get_theme_mod( 'tabib_hospital_contact_number','' ) != '' || get_theme_mod( 'tabib_hospital_contact_number_text','' ) != '') { ?>
										<h6 class="mb-0"><?php echo esc_html( get_theme_mod('tabib_hospital_contact_number_text','' )); ?></h6>
						                <a href="tel:<?php echo esc_attr( get_theme_mod('tabib_hospital_contact_number','' )); ?>"><?php echo esc_html( get_theme_mod('tabib_hospital_contact_number','' )); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('tabib_hospital_contact_number','' )); ?></span></a>
						            <?php } ?>
						        </div>
						        <div class="col-lg-3 col-md-6 align-self-center pb-3 pb-md-0 border-end">
						            <?php if( get_theme_mod( 'tabib_hospital_address','' ) != '') { ?>
						            	<div class="row">
						            		<div class="col-lg-2 col-md-2 align-self-center text-center">
						            			<i class="<?php echo esc_attr(get_theme_mod('tabib_hospital_address_icon_changer','fas fa-map-marker-alt')); ?>" aria-hidden="true"></i>
						            		</div>
						            		<div class="col-lg-10 col-md-10 align-self-center">
						            			<h6 class="mb-0"><?php echo esc_html( get_theme_mod('tabib_hospital_address','') ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('tabib_hospital_address','') ); ?></span></h6>
						            		</div>
						            	</div>
						            <?php } ?>
						        </div>
						        <div class="col-lg-3 col-md-6 align-self-center">
						        	<?php if( get_theme_mod( 'tabib_hospital_time','' ) != '') { ?>
							        	<div class="row">
						            		<div class="col-lg-2 col-md-2 align-self-center text-center">
						            			<i class="<?php echo esc_attr(get_theme_mod('tabib_hospital_time_icon_changer','fas fa-clock')); ?>" aria-hidden="true"></i>
						            		</div>
						            		<div class="col-lg-10 col-md-10 align-self-center">
						            			<h6 class="mb-0"><?php echo esc_html( get_theme_mod('tabib_hospital_time','') ); ?></h6>
						            		</div>
						            	</div>
						            <?php } ?>
						        </div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="<?php if( get_theme_mod( 'tabib_hospital_fixed_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
				<?php if ( has_nav_menu( 'top' ) ) : ?>
					<nav role="navigation" class="navigation-top">
						<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
					</nav>
				<?php endif; ?>
			</div>
		</header>
		
	<div class="site-content-contain">
		<div id="content" class="pt-5">