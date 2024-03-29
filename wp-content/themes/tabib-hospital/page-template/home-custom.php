<?php
/**
 * Template Name: Home Custom Page
 */
get_header(); ?>

<main id="main" role="main">
  <?php do_action( 'tabib_hospital_before_slider' ); ?>

  <?php if( get_theme_mod('tabib_hospital_slider_arrows', false) != '' || get_theme_mod( 'tabib_hospital_enable_disable_slider', false) != ''){ ?>
    <div class="<?php if( get_theme_mod('tabib_hospital_slider_width_options', 'Full Width') == 'Container Width'){ ?>container <?php }?>">
    <section id="slider">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('tabib_hospital_slider_speed', 3000)); ?>">
        <?php $tabib_hospital_slider_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'tabib_hospital_slide_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $tabib_hospital_slider_pages[] = $mod;
            }
          }
          if( !empty($tabib_hospital_slider_pages) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $tabib_hospital_slider_pages,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <?php if(has_post_thumbnail()){
                the_post_thumbnail();
              } else{?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/slider.png" alt="" />
              <?php } ?>
            <div class="carousel-caption">
              <div class="inner_carousel">
                <?php if( get_theme_mod('tabib_hospital_slider_title',true) != ''){ ?>
                  <h1 class="text-capitalize"><?php the_title();?></h1>
                <?php } ?>
                <?php if( get_theme_mod('tabib_hospital_slider_content',true) != ''){ ?>
                  <p><?php $tabib_hospital_excerpt = get_the_excerpt(); echo esc_html( tabib_hospital_string_limit_words( $tabib_hospital_excerpt, esc_attr(get_theme_mod('tabib_hospital_slider_excerpt_number','35')))); ?></p>
                <?php } ?>
                <?php if (get_theme_mod( 'tabib_hospital_slider_button',true) != '' || get_theme_mod( 'tabib_hospital_show_hide_slider_button',true) != ''){ ?>
                  <?php if( get_theme_mod('tabib_hospital_slider_button_text','Discover More') != ''){ ?>
                    <div class ="readbutton mt-md-4">
                      <a href="<?php the_permalink(); ?>"> <i class="<?php echo esc_attr(get_theme_mod('tabib_hospital_slider_button_icon_changer','fas fa-plus'));?>"></i><?php echo esc_html(get_theme_mod('tabib_hospital_slider_button_text','Discover More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('tabib_hospital_slider_button_text','Discover More'));?></span></a>
                    </div>
                  <?php } ?>
                <?php } ?>
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
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','tabib-hospital' );?></span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','tabib-hospital' );?></span>
        </a>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php }?>

  <?php do_action( 'tabib_hospital_after_slider' ); ?>

  <?php if( get_theme_mod('tabib_hospital_service_section_title') != ''|| get_theme_mod('tabib_hospital_service_section_text') != '' || get_theme_mod('tabib_hospital_service_section_category') != ''){ ?>
    <section id="services" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8">
            <?php if( get_theme_mod('tabib_hospital_service_section_title') != ''){ ?>
              <h2><?php echo esc_html(get_theme_mod('tabib_hospital_service_section_title','')); ?>
              </h2>
              <hr>
            <?php }?>
            <?php if( get_theme_mod('tabib_hospital_service_section_text') != ''){ ?>
              <p><?php echo esc_html(get_theme_mod('tabib_hospital_service_section_text','')); ?>
              </p>
            <?php }?>
            <div class="row mt-5">
              <?php
                $tabib_hospital_catData=  get_theme_mod('tabib_hospital_service_section_category');
                if($tabib_hospital_catData){
                $page_query = new WP_Query(array( 'category_name' => esc_html( $tabib_hospital_catData ,'tabib-hospital')));?>
                <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                  <div class="col-lg-6 col-md-6">
                    <div class="row mb-4">
                      <?php if(has_post_thumbnail()) { ?>
                        <div class="col-lg-4 col-md-4">
                          <?php the_post_thumbnail(); ?>
                        </div>
                      <?php }?>
                      <div class="<?php if(has_post_thumbnail()) { ?>col-lg-8 col-md-8"<?php } else { ?>col-lg-12 col-md-12" <?php } ?>>
                        <div class="service-box">
                          <h3><a href="<?php echo esc_url( get_permalink() );?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
                          <p><?php $tabib_hospital_excerpt = get_the_excerpt(); echo esc_html( tabib_hospital_string_limit_words( $tabib_hospital_excerpt,10 ) ); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php endwhile;
                wp_reset_postdata();
              } ?>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <img src="<?php echo esc_url(get_theme_mod('tabib_hospital_service_image')); ?>">
          </div>
        </div>
      </div>
    </section>
  <?php }?>

  <?php do_action( 'tabib_hospital_after_services' ); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post();?>
      <?php the_content(); ?>
    <?php endwhile; // End of the loop.
    wp_reset_postdata(); ?>
  </div>
</main>

<?php get_footer(); ?>
