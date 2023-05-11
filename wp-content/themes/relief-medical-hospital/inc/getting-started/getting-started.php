<?php
//about theme info
add_action( 'admin_menu', 'relief_medical_hospital_gettingstarted' );
function relief_medical_hospital_gettingstarted() {    	
	add_theme_page( esc_html__('Get Started', 'relief-medical-hospital'), esc_html__('Get Started', 'relief-medical-hospital'), 'edit_theme_options', 'relief_medical_hospital_guide', 'relief_medical_hospital_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function relief_medical_hospital_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'relief_medical_hospital_admin_theme_style');

//guidline for about theme
function relief_medical_hospital_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'relief-medical-hospital' );
?>

<div class="wrapper-info">
	<div class="top-section">
	    <div class="col-left">
	    	<h2><?php esc_html_e( 'Welcome to Relief Medical Hospital Theme', 'relief-medical-hospital' ); ?></h2>
	    	<span class="version">Version: <?php echo esc_html($theme['Version']);?></span>
	    	<p><?php esc_html_e('Relief Medical Hospital is a versatile, manageable, robust and impressive WordPress theme for hospitals, small clinics, nursing homes, veterinary clinics, medical stores, pharmacies, therapy and health care centres, health consultant, physiotherapists and other health related websites. It can be used by surgeons, doctors, medical personnel, general physicians, gynaecologist, paediatricians, dentists, orthopaedics, medical practitioners and everyone serving in the medical field. It can also be bent to use it as a healthcare blog and by ambulance services. This fully responsive theme is built on Bootstrap framework to give a great look on different screens and devices. It is cross-browser compatible, translation ready and search engine optimized to lead your website to higher search rank. Numerous options like boxed and full-width layout, sliders. It is readily customizable to give full control over the look and structure of the website. It has a booking form to book an appointment. Social media icons are provided to easily reach maximum targeted audience.','relief-medical-hospital'); ?></p>	    	
	    </div>
	    <div class="col-right">
	    	<div class="logo">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/Logical-theme-responsive.png" alt="" />
			</div>
	    </div>
	    <div class="info-link">
			<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'relief-medical-hospital'); ?></a>
			<a href="<?php echo esc_url( RELIEF_MEDICAL_HOSPITAL_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'relief-medical-hospital'); ?></a>
			<a href="<?php echo esc_url( RELIEF_MEDICAL_HOSPITAL_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'relief-medical-hospital'); ?></a>			
			<a class="get-pro" href="<?php echo esc_url( RELIEF_MEDICAL_HOSPITAL_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'relief-medical-hospital'); ?></a>
		</div>
	</div>

	<div class="accordain-sec">
		<div class="block">
		  	<input type="radio" name="city" id="cityA" checked />   
		  	<label for="cityA"><span><?php esc_html_e( 'Visit to our amazing Premium Theme', 'relief-medical-hospital' ); ?></span><span class="dashicons dashicons-arrow-down"></span></label>
		  	<div class="info1">
			  	<h3><?php esc_html_e( 'Premium Theme Information', 'relief-medical-hospital' ); ?></h3>
			  	<hr class="hr-accr">
			  	<div class="sec-left-inner">
			  		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/Logical-theme-responsive.png" alt="" />
			  		<p class="lite-para"><?php esc_html_e('This medical WordPress theme is flexible, charming, elegant and sophisticated that can be used by hospitals, clinics, pharmacies, veterinary clinics, nursing homes, healthcare centres, physiotherapy centres, general therapists, medical practitioners and all the people hailing from medical field. It can be used for designing sites for an individual doctor, surgeon, dentist, paediatrician, orthopaedic, neurologist, vet, gynaecologist, general physician and any person providing services in this highly respected profession. Bent the theme to use it for ambulance service or healthcare blog and it will work with same efficiency. Its well-organized structure and hassle free navigation make it a professionally groomed hospital theme.','relief-medical-hospital'); ?></p>

					<div class="info-link-top">
						<a href="<?php echo esc_url( RELIEF_MEDICAL_HOSPITAL_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Buy Now', 'relief-medical-hospital' ); ?></a>
						<a href="<?php echo esc_url( RELIEF_MEDICAL_HOSPITAL_LIVE_DEMO ); ?>" target="_blank"> <?php esc_html_e( 'Live Demo', 'relief-medical-hospital' ); ?></a>
						<a href="<?php echo esc_url( RELIEF_MEDICAL_HOSPITAL_PRO_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Pro Documentation', 'relief-medical-hospital' ); ?></a>
					</div>
					
			  	</div>
		  	</div>
		</div>
		<div class="block">
		  	<input type="radio" name="city" id="cityB"/>
		  	<label for="cityB"><span><?php esc_html_e( 'Theme Features', 'relief-medical-hospital' ); ?></span><span class="dashicons dashicons-arrow-down"></span></label>
		  	<div class="info2">
			    <h3><?php esc_html_e( 'Lite Theme v/s Premium Theme', 'relief-medical-hospital' ); ?></h3>
			  	<hr class="hr-accr">
			  	<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'relief-medical-hospital'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'relief-medical-hospital'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'relief-medical-hospital'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'relief-medical-hospital'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'relief-medical-hospital'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Contact us Page Template', 'relief-medical-hospital'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'relief-medical-hospital'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Blog Templates & Layout', 'relief-medical-hospital'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'relief-medical-hospital'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Page Templates & Layout', 'relief-medical-hospital'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'relief-medical-hospital'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Full Documentation', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Latest WordPress Compatibility', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support 3rd Party Plugins', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Secure and Optimized Code', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Exclusive Functionalities', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Enable / Disable', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Google Font Choices', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Gallery', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Simple & Mega Menu Option', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Shortcodes', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Premium Membership', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Budget Friendly Value', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Priority Error Fixing', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Custom Feature Addition', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('All Access Theme Pass', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Seamless Customer Support', 'relief-medical-hospital'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( RELIEF_MEDICAL_HOSPITAL_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'relief-medical-hospital'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
		 	</div>
		</div>
	</div>
</div>
<?php } ?>