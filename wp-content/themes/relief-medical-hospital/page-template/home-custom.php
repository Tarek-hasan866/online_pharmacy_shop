<?php
/**
 * Template Name: Home Custom Page
 */
?>

<?php get_header(); ?>

<main id="main" role="main">
  <?php do_action( 'relief_medical_hospital_above_slider' ); ?>
    <?php if( get_theme_mod('relief_medical_hospital_slider_hide_show', false) != ''){ ?> 
      <section id="slider" class="m-0 p-0 mw-100">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"> 
          <?php $relief_medical_hospital_content_pages = array();
            for ( $count = 1; $count <= 4; $count++ ) {
              $mod = intval( get_theme_mod( 'relief_medical_hospital_slider_page' . $count ));
              if ( 'page-none-selected' != $mod ) {
                $relief_medical_hospital_content_pages[] = $mod;
              }
            }
            if( !empty($relief_medical_hospital_content_pages) ) :
              $args = array(
                'post_type' => 'page',
                'post__in' => $relief_medical_hospital_content_pages,
                'orderby' => 'post__in'
              );
              $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
          ?>     
          <div class="carousel-inner" role="listbox">
            <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
              <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a>
                <div class="carousel-caption d-md-block">
                  <div class="inner_carousel">
                    <?php if ( get_theme_mod('relief_medical_hospital_slider_title',true) == true ) {?>
                      <h1><?php the_title(); ?></h1>
                    <?php }?>
                    <?php if ( get_theme_mod('relief_medical_hospital_slider_content',true) == true ) {?>
                      <div class="entry-content"><p><?php $excerpt = get_the_excerpt(); echo esc_html( relief_medical_hospital_string_limit_words( $excerpt,15 ) ); ?></p></div>
                    <?php }?>
                    <?php if ( get_theme_mod('relief_medical_hospital_slider_button',true) == true ) {?>
                    <div class="read-btn mt-4">
                      <a href="<?php echo esc_url(get_permalink()); ?>" class="py-2 px-3"><?php esc_html_e( 'READ MORE', 'relief-medical-hospital' ); ?><span class="screen-reader-text"><?php esc_html_e( 'READ MORE', 'relief-medical-hospital' );?></span></a>
                    </div>
                    <?php }?>
                  </div>
                </div>
              </div>
            <?php $i++; endwhile; 
            wp_reset_postdata();?>
          </div>
          <?php else : ?>
              <div class="no-postfound"></div>
            <?php endif;
          endif;?>
          <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-arrow-left p-3"></i></span><span class="screen-reader-text"><?php esc_html_e( 'Previous', 'relief-medical-hospital' );?></span>
          </a>
          <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-arrow-right p-3"></i></span><span class="screen-reader-text"><?php esc_html_e( 'Next', 'relief-medical-hospital' );?></span>
          </a>
        </div>   
        <div class="clearfix"></div>
      </section>
    <?php }?>
  <?php do_action( 'relief_medical_hospital_below_slider' ); ?>

  <?php if( get_theme_mod('relief_medical_hospital_our_services_title') != '' || get_theme_mod('relief_medical_hospital_our_services_title') != ''){ ?>
    <section id="our-services" class="text-center my-5">
      <div class="container">     
        <div class="service-box">
          <div class="service-title mb-2">
            <?php if( get_theme_mod('relief_medical_hospital_our_services_title') != ''){ ?>
              <h2 class="text-center m-0 pb-2"><?php echo esc_html(get_theme_mod('relief_medical_hospital_our_services_title','')); ?></h2><hr class="my-0 mx-auto">
            <?php }?>
          </div>
          <div class="row">
            <?php $relief_medical_hospital_catData =  get_theme_mod('relief_medical_hospital_category_setting','');
            if($relief_medical_hospital_catData){
            $page_query = new WP_Query(array( 'category_name' => esc_html($relief_medical_hospital_catData,'relief-medical-hospital'))); ?>
            <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>  
              <div class="col-lg-3 col-md-3">
                <div class="service-section my-3 pb-2">
                  <div class="service-img">
                   <?php the_post_thumbnail(); ?>
                 </div>
                  <div class="content">
                    <h3 class="text-center mt-2"><a href="<?php echo esc_url( get_permalink() );?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3><hr class="p-1 my-0 mx-auto">
                    <p class="my-2 text-center"><?php $excerpt = get_the_excerpt(); echo esc_html( relief_medical_hospital_string_limit_words( $excerpt,10 ) ); ?></p>
                    <div class="read-btn text-center my-4">
                      <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small py-2 px-3"><?php esc_html_e('READ MORE','relief-medical-hospital'); ?><span class="screen-reader-text"><?php esc_html_e( 'READ MORE','relief-medical-hospital' );?></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; 
            wp_reset_postdata();
            }
            ?>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </section>
  <?php }?>
  <?php do_action( 'relief_medical_hospital_below_our_services' ); ?>

  <div class="container entry-content">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>
<?php get_footer(); ?>