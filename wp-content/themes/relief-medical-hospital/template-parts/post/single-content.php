<?php
/**
 * Displaying single post content
 * @package Relief Medical Hospital
 * @subpackage relief-medical-hospital
 * @since 1.0
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<article>
	<h1><?php the_title();?></h1>
	<div class="adminbox py-2">
		<span class="entry-date me-3 p-0"><i class="far fa-calendar-alt me-2"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
		<span class="entry-author me-3 p-0"><i class="fas fa-user me-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
		<span class="entry-comments me-3 p-0"><i class="fas fa-comments me-2"></i><?php comments_number( __('0 Comment', 'relief-medical-hospital'), __('0 Comments', 'relief-medical-hospital'), __('% Comments', 'relief-medical-hospital') ); ?> </span>
	</div>
	<?php if(has_post_thumbnail()) { ?>
		<hr>
		<div class="feature-box">	
			<?php the_post_thumbnail(); ?>
		</div>
		<hr>
	<?php } ?>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	<div class="post-tags my-2">
		<?php
        if( $tags = get_the_tags() ) {
          foreach( $tags as $content_tag ) {
            $sep = ( $content_tag === end( $tags ) ) ? '' : ' ';
            echo '<a href="' . esc_url(get_term_link( $content_tag, $content_tag->taxonomy )) . '">' . esc_html($content_tag->name) . '</a>' . esc_html($sep);
            }
        } ?>
	</div>
	<?php
	wp_link_pages( array(
		'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'relief-medical-hospital' ) . '</span>',
		'after'       => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
		'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'relief-medical-hospital' ) . ' </span>%',
		'separator'   => '<span class="screen-reader-text">, </span>',
	) );
		
	if ( is_singular( 'attachment' ) ) {
		// Parent post navigation.
		the_post_navigation( array(
			'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'relief-medical-hospital' ),
		) );
	} elseif ( is_singular( 'post' ) ) {
		// Previous/next post navigation.
		the_post_navigation( array(
			'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Next', 'relief-medical-hospital' ) . '</span> ' .
				'<span class="screen-reader-text">' . esc_html__( 'Next post:', 'relief-medical-hospital' ) . '</span> ',
			'prev_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Previous', 'relief-medical-hospital' ) . '</span> ' .
				'<span class="screen-reader-text">' . esc_html__( 'Previous post:', 'relief-medical-hospital' ) . '</span> ' ,
		) );
	}

	echo '<div class="clearfix"></div>';

	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
	?>
	<?php edit_post_link( esc_html__( 'Edit', 'relief-medical-hospital' ), '<span class="edit-link">', '</span>' ); ?>
</article>	