<?php
//about theme info
add_action( 'admin_menu', 'skt_sandwich_abouttheme' );
function skt_sandwich_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-sandwich'), esc_html__('About Theme', 'skt-sandwich'), 'edit_theme_options', 'skt_sandwich_guide', 'skt_sandwich_mostrar_guide');   
} 
//guidline for about theme
function skt_sandwich_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'skt-sandwich'); ?>
		   </div>
          <p><?php esc_html_e('SKT Sandwich is an easy to use gutenberg block editor based template can be used for pizza, pizzeria, burger, multi cuisine, Mexican, chinese, fast food, bakery, cafe, coffee, tea shop, restaurant, bistro, joint, pub, bar, fine dine in, takeaway, delivery, recipe, french fries, food blogging, vlog, hotel, lodge, resort, homestay business model or any such hospitality services. Compatible with WooCommerce and also SEO plugins.','skt-sandwich'); ?></p>
          <a href="<?php echo esc_url(SKT_SANDWICH_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_SANDWICH_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'skt-sandwich'); ?></a> | 
				<a href="<?php echo esc_url(SKT_SANDWICH_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'skt-sandwich'); ?></a> | 
				<a href="<?php echo esc_url(SKT_SANDWICH_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'skt-sandwich'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_SANDWICH_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>