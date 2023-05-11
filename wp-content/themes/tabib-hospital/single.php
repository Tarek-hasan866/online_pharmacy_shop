<?php
/**
 * The template for displaying all single posts
 */
get_header(); ?>

<main id="main" role="main">
	<div class="container">
		<div class="row">
			<?php
		    $tabib_hospital_layout_settings = get_theme_mod( 'tabib_hospital_layout_settings', __('Right Sidebar','tabib-hospital') );
			if($tabib_hospital_layout_settings == 'Left Sidebar'){ ?>
			    <div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
				<div class="col-lg-8 col-md-8">
					<?php if (get_theme_mod('tabib_hospital_single_post_breadcrumb',false) != ''){ ?>
						<div class="breadcrumb">
							<?php tabib_hospital_the_breadcrumb(); ?>
						</div>
					<?php }?>
					<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post(); 

							get_template_part( 'template-parts/post/single-post' );
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();

							endif;

							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tabib-hospital' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tabib-hospital' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );?>

							<?php if( get_theme_mod( 'tabib_hospital_show_single_post_pagination',true) != '') {

											the_post_navigation( array(
								'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html(get_theme_mod('tabib_hospital_next_text',__( 'Next Post', 'tabib-hospital' ))) . '<i class="fas fa-chevron-right ms-1"></i></span> ' .
									'<span class="screen-reader-text">' . __( 'Next Post', 'tabib-hospital' ) . '</span> ' .
									'',
								'prev_text' => '<span class="meta-nav" aria-hidden="true"><i class="fas fa-chevron-left me-1"></i>' . esc_html(get_theme_mod('tabib_hospital_prev_text',__( 'Previous Post', 'tabib-hospital' ))) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Previous Post', 'tabib-hospital' ) . '</span> ' .
									'',
							) );
						}

						endwhile; // End of the loop.

					?>
				</div>
			<?php }else if($tabib_hospital_layout_settings == 'Right Sidebar'){ ?>
				<div class="col-lg-8 col-md-8">
					<?php if (get_theme_mod('tabib_hospital_single_post_breadcrumb',false) != ''){ ?>
						<div class="breadcrumb">
							<?php tabib_hospital_the_breadcrumb(); ?>
						</div>
					<?php }?>
					<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post(); 

							get_template_part( 'template-parts/post/single-post' ); 
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tabib-hospital' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tabib-hospital' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );?>

							<?php if( get_theme_mod( 'tabib_hospital_show_single_post_pagination',true) != '') {

											the_post_navigation( array(
								'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html(get_theme_mod('tabib_hospital_next_text',__( 'Next Post', 'tabib-hospital' ))) . '<i class="fas fa-chevron-right ms-1"></i></span> ' .
									'<span class="screen-reader-text">' . __( 'Next Post', 'tabib-hospital' ) . '</span> ' .
									'',
								'prev_text' => '<span class="meta-nav" aria-hidden="true"><i class="fas fa-chevron-left me-1"></i>' . esc_html(get_theme_mod('tabib_hospital_prev_text',__( 'Previous Post', 'tabib-hospital' ))) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Previous Post', 'tabib-hospital' ) . '</span> ' .
									'',
							) );
						}

						endwhile; // End of the loop.

					?>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
			<?php }else if($tabib_hospital_layout_settings == 'One Column'){ ?>
				<div class="col-lg-12 col-md-12">
					<?php if (get_theme_mod('tabib_hospital_single_post_breadcrumb',false) != ''){ ?>
						<div class="breadcrumb">
							<?php tabib_hospital_the_breadcrumb(); ?>
						</div>
					<?php }?>
					<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post(); 

							get_template_part( 'template-parts/post/single-post' ); 
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tabib-hospital' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tabib-hospital' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );?>

							<?php if( get_theme_mod( 'tabib_hospital_show_single_post_pagination',true) != '') {

											the_post_navigation( array(
								'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html(get_theme_mod('tabib_hospital_next_text',__( 'Next Post', 'tabib-hospital' ))) . '<i class="fas fa-chevron-right ms-1"></i></span> ' .
									'<span class="screen-reader-text">' . __( 'Next Post', 'tabib-hospital' ) . '</span> ' .
									'',
								'prev_text' => '<span class="meta-nav" aria-hidden="true"><i class="fas fa-chevron-left me-1"></i>' . esc_html(get_theme_mod('tabib_hospital_prev_text',__( 'Previous Post', 'tabib-hospital' ))) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Previous Post', 'tabib-hospital' ) . '</span> ' .
									'',
							) );
						}

						endwhile; // End of the loop.

					?>
				</div>
			<?php }else if($tabib_hospital_layout_settings == 'Grid Layout'){ ?>
				<div class="col-lg-8 col-md-8">
					<?php if (get_theme_mod('tabib_hospital_single_post_breadcrumb',false) != ''){ ?>
						<div class="breadcrumb">
							<?php tabib_hospital_the_breadcrumb(); ?>
						</div>
					<?php }?>
					<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post(); 

							get_template_part( 'template-parts/post/single-post' ); // If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tabib-hospital' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tabib-hospital' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );?>

							<?php if( get_theme_mod( 'tabib_hospital_show_single_post_pagination',true) != '') {

											the_post_navigation( array(
								'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html(get_theme_mod('tabib_hospital_next_text',__( 'Next Post', 'tabib-hospital' ))) . '<i class="fas fa-chevron-right ms-1"></i></span> ' .
									'<span class="screen-reader-text">' . __( 'Next Post', 'tabib-hospital' ) . '</span> ' .
									'',
								'prev_text' => '<span class="meta-nav" aria-hidden="true"><i class="fas fa-chevron-left me-1"></i>' . esc_html(get_theme_mod('tabib_hospital_prev_text',__( 'Previous Post', 'tabib-hospital' ))) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Previous Post', 'tabib-hospital' ) . '</span> ' .
									'',
							) );
						}

						endwhile; // End of the loop.

					?>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
			<?php }else {?>
				<div class="col-lg-8 col-md-8">
					<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post(); 

							get_template_part( 'template-parts/post/single-post' ); 
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tabib-hospital' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tabib-hospital' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );?>

							<?php if( get_theme_mod( 'tabib_hospital_show_single_post_pagination',true) != '') {

							the_post_navigation( array(
								'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'tabib-hospital' ) . '</span><span aria-hidden="true" class="nav-subtitle text-uppercase">' . __( 'Previous', 'tabib-hospital' ) . '</span>',
								'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'tabib-hospital' ) . '</span><span aria-hidden="true" class="nav-subtitle text-uppercase">' . __( 'Next', 'tabib-hospital' ) . '</span>',
							) );
						}

						endwhile; // End of the loop.

					?>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
			<?php }?>
		</div>
	</div>
</main>

<?php get_footer();