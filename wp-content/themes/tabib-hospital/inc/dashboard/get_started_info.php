<?php

add_action( 'admin_menu', 'tabib_hospital_gettingstarted' );
function tabib_hospital_gettingstarted() {
	add_theme_page( esc_html__('About Theme', 'tabib-hospital'), esc_html__('About Theme', 'tabib-hospital'), 'edit_theme_options', 'tabib-hospital-guide-page', 'tabib_hospital_guide');   
}

function tabib_hospital_admin_theme_style() {
   wp_enqueue_style('tabib-hospital-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/get_started_info.css');
   wp_enqueue_script('tabs', esc_url(get_template_directory_uri()) . '/inc/dashboard/js/tab.js');
}
add_action('admin_enqueue_scripts', 'tabib_hospital_admin_theme_style');

function tabib_hospital_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<h2><?php esc_html_e( 'Thanks for installing Tabib Hospital Theme', 'tabib-hospital' ) ?> </h2>
			<p><?php esc_html_e( "Please Click on the link below to know the theme setup information", 'tabib-hospital' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=tabib-hospital-guide-page' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Get Started ', 'tabib-hospital' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'tabib_hospital_notice');


/**
 * Theme Info Page
 */
function tabib_hospital_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'tabib-hospital' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
				<div class="intro">
					<div class="pad-box">
						<h2 align="center"><?php esc_html_e( 'Welcome to Tabib Hospital Theme', 'tabib-hospital' ); ?>
						<span class="version" align="center">Version: <?php echo esc_html($theme['Version']);?></span></h2>	
						</span>
						<div class="powered-by">
							<p align="center"><strong><?php esc_html_e( 'Theme created by ThemesEye', 'tabib-hospital' ); ?></strong></p>
							<p align="center">
								<img role="img" class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/logo.png'); ?>"/>
							</p>
						</div>
					</div>
				</div>

			<div class="tab">
			  <button role="tab" class="tablinks" onclick="tabib_hospital_open(event, 'lite_theme')">Getting Started</button>		  
			  <button role="tab" class="tablinks" onclick="tabib_hospital_open(event, 'pro_theme')">Get Premium</button>
			</div>

			<!-- Tab content -->
			<div id="lite_theme" class="tabcontent open">
				<h2 class="tg-docs-section intruction-title" id="section-4" align="center"><?php esc_html_e( '1). Tabib Hospital Lite Theme', 'tabib-hospital' ); ?></h2>
				<div class="row">
					<div class="col-md-5">
						<div class="pad-box">
	              			<img role="img" role="img" class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
	              		 </div> 
					</div>
					<div class="theme-instruction-block col-md-7">
						<div class="pad-box">
		                    <div class="table-image">
								<table class="tablebox">
									<thead>
										<tr>
											<th><?php esc_html_e('Setup', 'tabib-hospital'); ?></th>
											<th><?php esc_html_e('Click Here', 'tabib-hospital'); ?></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php esc_html_e('Logo', 'tabib-hospital'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Click', 'tabib-hospital'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Menus', 'tabib-hospital'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Click', 'tabib-hospital'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Top Header', 'tabib-hospital'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=tabib_hospital_contact_details') ); ?>" target="_blank"><?php esc_html_e('Click', 'tabib-hospital'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Slider', 'tabib-hospital'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=tabib_hospital_slider') ); ?>" target="_blank"><?php esc_html_e('Click', 'tabib-hospital'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Post Settings', 'tabib-hospital'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=tabib_hospital_blog_post') ); ?>" target="_blank"><?php esc_html_e('Click', 'tabib-hospital'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Footer', 'tabib-hospital'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=tabib_hospital_footer') ); ?>" target="_blank"><?php esc_html_e('Click', 'tabib-hospital'); ?></a></td>
										</tr>
									</tbody>
								</table>
							</div>
							<ol>
								<li><?php esc_html_e( 'Start','tabib-hospital'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','tabib-hospital'); ?></a> <?php esc_html_e( 'your website.','tabib-hospital'); ?> </li>
								<li><?php esc_html_e( 'Tabib Hospital','tabib-hospital'); ?> <a target="_blank" href="<?php echo esc_url( TABIB_HOSPITAL_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation','tabib-hospital'); ?></a> </li>
							</ol>
	                    </div>
	                </div>
				</div><br><br>
				
	        </div>
	        <div id="pro_theme" class="tabcontent">
				<h2 class="dashboard-install-title" align="center"><?php esc_html_e( '2.) Premium Theme Information.','tabib-hospital'); ?></h2>
            	<div class="row">
					<div class="col-md-7">
						<img role="img" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="">
						<div class="pro-links" >
					    	<a href="<?php echo esc_url( TABIB_HOSPITAL_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'tabib-hospital'); ?></a>
							<a href="<?php echo esc_url( TABIB_HOSPITAL_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'tabib-hospital'); ?></a>
							<a href="<?php echo esc_url( TABIB_HOSPITAL_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'tabib-hospital'); ?></a>
						</div>
						<div class="pad-box">
							<h3><?php esc_html_e( 'Pro Theme Description','tabib-hospital'); ?></h3>
                    		<p class="pad-box-p"><?php esc_html_e( 'Hospital WordPress theme is a premium theme suitable for making a website related to different disciplines of medical science. It is an SEO-friendly, responsive, beautiful, and multipurpose theme. Which is quite fit for the professionals related to medical science, and these include doctors, surgeons, as well as gynecologists. Many other professionals related to the medical sector can also use this theme to make their website. It is also good for businessmen who want to start hospital chains around the world or global pharmaceutical firms. Premier hospital WordPress theme is accompanied by the CTA [call to action] button part from optimized code and a faster page load time making it suitable for the general practitioners, health bloggers, wellness spa business as well as health care consultancies. Besides displaying options, you can also view interactive demos. That makes the hospital WordPress theme ideal for dentists and almost all health care providers.', 'tabib-hospital' ); ?><p>
                    	</div>
					</div>
					<div class="col-md-5 install-plugin-right">
						<div class="pad-box">								
							<h3><?php esc_html_e( 'Pro Theme Features','tabib-hospital'); ?></h3>
							<div class="dashboard-install-benefit">
								<ul>
									<li><?php esc_html_e( 'Easy install 10 minute setup Themes','tabib-hospital'); ?></li>
									<li><?php esc_html_e( 'Multiplue Domain Usage','tabib-hospital'); ?></li>
									<li><?php esc_html_e( 'Premium Technical Support','tabib-hospital'); ?></li>
									<li><?php esc_html_e( 'FREE Shortcodes','tabib-hospital'); ?></li>
									<li><?php esc_html_e( 'Multiple page templates','tabib-hospital'); ?></li>
									<li><?php esc_html_e( 'Google Font Integration','tabib-hospital'); ?></li>
									<li><?php esc_html_e( 'Customizable Colors','tabib-hospital'); ?></li>
									<li><?php esc_html_e( 'Theme customizer ','tabib-hospital'); ?></li>
									<li><?php esc_html_e( 'Documention','tabib-hospital'); ?></li>
									<li><?php esc_html_e( 'Unlimited Color Option','tabib-hospital'); ?></li>
									<li><?php esc_html_e( 'Plugin Compatible','tabib-hospital'); ?></li>
									<li><?php esc_html_e( 'Social Media Integration','tabib-hospital'); ?></li>
									<li><?php esc_html_e( 'Incredible Support','tabib-hospital'); ?></li>
									<li><?php esc_html_e( 'Eye Appealing Design','tabib-hospital'); ?></li>
									<li><?php esc_html_e( 'Simple To Install','tabib-hospital'); ?></li>
									<li><?php esc_html_e( 'Fully Responsive ','tabib-hospital'); ?></li>
									<li><?php esc_html_e( 'Translation Ready','tabib-hospital'); ?></li>
									<li><?php esc_html_e( 'Custom Page Templates ','tabib-hospital'); ?></li>
									<li><?php esc_html_e( 'WooCommerce Integration','tabib-hospital'); ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
          	<div class="dashboard__blocks">
				<div class="row">
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Get Support','tabib-hospital'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( TABIB_HOSPITAL_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','tabib-hospital'); ?></a></li>
							<li><a target="_blank" href="<?php echo esc_url( TABIB_HOSPITAL_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','tabib-hospital'); ?></a></li>
						</ol>
					</div>

					<div class="col-md-3">
						<h3><?php esc_html_e( 'Getting Started','tabib-hospital'); ?></h3>
						<ol>
							<li><?php esc_html_e( 'Start','tabib-hospital'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','tabib-hospital'); ?></a> <?php esc_html_e( 'your website.','tabib-hospital'); ?> </li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Help Docs','tabib-hospital'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( TABIB_HOSPITAL_FREE_DOC ); ?>"><?php esc_html_e( 'Free Theme Documentation','tabib-hospital'); ?></a></li>
							<li><a target="_blank" href="<?php echo esc_url( TABIB_HOSPITAL_PRO_DOC ); ?>"><?php esc_html_e( 'Premium Theme Documentation','tabib-hospital'); ?></a></li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Buy Premium','tabib-hospital'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( TABIB_HOSPITAL_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'tabib-hospital'); ?></a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		
	</div>

<?php
}?>