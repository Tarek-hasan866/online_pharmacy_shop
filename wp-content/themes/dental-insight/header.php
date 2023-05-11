<?php
/**
 * The header for our theme
 *
 * @subpackage Dental Insight
 * @since 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}
?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dental-insight' ); ?></a>
	<?php if( get_theme_mod('dental_insight_theme_loader','') != ''){ ?>
		<div class="preloader">
			<div class="load">
			  <hr/><hr/><hr/><hr/>
			</div>
		</div>
	<?php }?>
	<div id="page" class="site">
		<div id="header" class="mb-5">
			<div class="wrap_figure">
				<div class="top_bar py-2 text-center text-lg-left text-md-left">
					<div class="container">
						<div class="row">
							<?php if (get_theme_mod('dental_insight_topbar_enable')!= '') { ?>
								<div class="col-lg-7 col-md-9">
									<?php if( get_theme_mod('dental_insight_find_us_url') != '' || get_theme_mod('dental_insight_find_us') != '' ){ ?>
										<a href="<?php echo esc_url(get_theme_mod('dental_insight_find_us_url','')); ?>"><?php echo esc_html(get_theme_mod('dental_insight_find_us','')); ?></a>
									<?php }?>
									<?php if( get_theme_mod('dental_insight_feedback_url') != '' || get_theme_mod('dental_insight_feedback') != '' ){ ?>
										/ <a href="<?php echo esc_url(get_theme_mod('dental_insight_feedback_url','')); ?>"><?php echo esc_html(get_theme_mod('dental_insight_feedback','')); ?></a>
									<?php }?>
									<?php if( get_theme_mod('dental_insight_email') != ''){ ?>
										<span class="ml-5"><i class="fas fa-envelope mr-2"></i><?php echo esc_html(get_theme_mod('dental_insight_email','')); ?></span>
									<?php }?>
								</div>
							<?php }?>
								<?php if (get_theme_mod('dental_insight_social_enable') !='') { ?>
								<div class="col-lg-5 col-md-3">
									<?php					  		
								 		$dental_insight_header_fb_target = esc_attr(get_theme_mod('dental_insight_header_fb_target','true'));
								 		$dental_insight_header_twt_target = esc_attr(get_theme_mod('dental_insight_header_twt_target','true'));
								 		$dental_insight_header_linkedin_target = esc_attr(get_theme_mod('dental_insight_header_linkedin_target','true'));
								 		$dental_insight_header_ut_target = esc_attr(get_theme_mod('dental_insight_header_ut_target','true'));
								 		$dental_insight_header_ins_target = esc_attr(get_theme_mod('dental_insight_header_ins_target','true'));
									 ?>
									<div class="links text-center text-lg-right text-md-right">
										<?php if( get_theme_mod('dental_insight_facebook') != ''){ ?>
											<a <?php if($dental_insight_header_fb_target) { ?>target="_blank" <?php } ?>href="<?php echo esc_url(get_theme_mod('dental_insight_facebook','')); ?>">
											<i class="<?php echo esc_html(get_theme_mod('dental_insight_facebook_icon','fab fa-facebook-f')); ?> mr-3"></i>	
				          					</a>
										<?php }?>
										<?php if( get_theme_mod('dental_insight_twitter') != ''){ ?>
											<a <?php if($dental_insight_header_twt_target) { ?>target="_blank" <?php } ?>href="<?php echo esc_url(get_theme_mod('dental_insight_twitter','')); ?>">
											<i class="<?php echo esc_html(get_theme_mod('dental_insight_twitter_icon','fab fa-twitter')); ?> mr-3"></i></a>
										<?php }?>
										<?php if( get_theme_mod('dental_insight_youtube') != ''){ ?>
											<a <?php if($dental_insight_header_ut_target) { ?>target="_blank" <?php } ?>href="<?php echo esc_url(get_theme_mod('dental_insight_youtube','')); ?>">
											<i class="<?php echo esc_html(get_theme_mod('dental_insight_youtube_icon','fab fa-youtube')); ?> mr-3"></i>
											</a>
										<?php }?>
										<?php if( get_theme_mod('dental_insight_instagram') != ''){ ?>
											<a <?php if($dental_insight_header_ins_target) { ?>target="_blank" <?php } ?>href="<?php echo esc_url(get_theme_mod('dental_insight_instagram','')); ?>">
											<i class="<?php echo esc_html(get_theme_mod('dental_insight_instagram_icon','fab fa-instagram')); ?> mr-3"></i>
											</a>
										<?php }?>
									</div>
								</div>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
				<div class="menu_header py-3">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-6 col-9 box-center">
								<div class="logo">
							        <?php if ( has_custom_logo() ) : ?>
					            		<?php the_custom_logo(); ?>
						            <?php endif; ?>
					              	<?php $dental_insight_blog_info = get_bloginfo( 'name' ); ?>
							                <?php if ( ! empty( $dental_insight_blog_info ) ) : ?>
							                  	<?php if ( is_front_page() && is_home() ) : ?>
																		<?php if( get_theme_mod('dental_insight_logo_title',true) != '' ){ ?>
							                    			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
																		<?php }?>
							                  	<?php else : ?>
																		<?php if( get_theme_mod('dental_insight_logo_title',true) != '' ){ ?>
						                      			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
																		<?php }?>
						                  		<?php endif; ?>
							                <?php endif; ?>

						                <?php
					                  		$dental_insight_description = get_bloginfo( 'description', 'display' );
						                  	if ( $dental_insight_description || is_customize_preview() ) :
						                ?>
						                <?php if( get_theme_mod('dental_insight_logo_text',false) != '' ){ ?>
						                  	<p class="site-description">
						                    	<?php echo esc_html($dental_insight_description); ?>
						                  	</p>
						                 <?php }?>
					              	<?php endif; ?>
							    </div>
							</div>
							<div class="col-lg-8 col-md-6 col-3 box-center">
								<?php if(has_nav_menu('primary')){?>
									<div class="toggle-menu gb_menu text-right">
										<button onclick="dental_insight_gb_Menu_open()" class="gb_toggle p-2"><i class="fas fa-ellipsis-h"></i><p class="mb-0"><?php esc_html_e('Menu','dental-insight'); ?></p></button>
									</div>
								<?php }?>
				   				<?php get_template_part('template-parts/navigation/navigation'); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="top_header py-3">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-4">
								<?php if( get_theme_mod('dental_insight_call_text') != '' || get_theme_mod('dental_insight_call') != ''){ ?>
									<div class="info-box mb-lg-0 mb-md-0 mb-3">
										<i class="fas fa-phone mr-3 mr-md-0 mr-lg-3 text-center"></i>
										<strong><?php echo esc_html(get_theme_mod('dental_insight_call_text','')); ?></strong>
										<span class="ml-3 ml-md-0 ml-md-3"><?php echo esc_html(get_theme_mod('dental_insight_call','')); ?></span>
									</div>
								<?php }?>
							</div>
							<div class="col-lg-5 col-md-4">
								<?php if( get_theme_mod('dental_insight_timing_text') != '' || get_theme_mod('dental_insight_timing') != ''){ ?>
									<div class="info-box mb-lg-0 mb-md-0 mb-3">
										<i class="far fa-clock mr-3 mr-md-0 mr-lg-3 text-center"></i>
										<strong><?php echo esc_html(get_theme_mod('dental_insight_timing_text','')); ?></strong>
										<span class="ml-3 ml-md-0 ml-md-3"><?php echo esc_html(get_theme_mod('dental_insight_timing','')); ?></span>
									</div>
								<?php }?>
							</div>
							<div class="col-lg-4 col-md-4">
								<?php if( get_theme_mod('dental_insight_address_text') != '' || get_theme_mod('dental_insight_address') != ''){ ?>
									<div class="info-box mb-lg-0 mb-md-0 mb-3">
										<i class="fas fa-map-marker-alt mr-3 mr-md-0 mr-lg-3 text-center"></i>
										<strong><?php echo esc_html(get_theme_mod('dental_insight_address_text','')); ?></strong>
										<span class="ml-3 ml-md-0 ml-md-3"><?php echo esc_html(get_theme_mod('dental_insight_address','')); ?></span>
									</div>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
