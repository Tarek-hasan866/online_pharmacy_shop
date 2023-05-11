<?php 
/*
* Display Top Bar
*/
?>
<?php if( get_theme_mod('relief_medical_hospital_show_topbar', false) != ''){ ?>
  <?php if( get_theme_mod( 'relief_medical_hospital_call','' ) != '' || get_theme_mod( 'relief_medical_hospital_mail','' ) != '' || get_theme_mod( 'relief_medical_hospital_facebook_url','' ) != '' || get_theme_mod( 'relief_medical_hospital_twitter_url','' ) != '' || get_theme_mod( 'relief_medical_hospital_linkedin_url','' ) != '' || get_theme_mod( 'relief_medical_hospital_insta_url','' ) != '') { ?>
    <div class="top-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6"> 
            <div class="contact-details m-2">      
              <span class="call pe-3">
                <?php if( get_theme_mod( 'relief_medical_hospital_call','' ) != '') { ?>
                  <i class="fas fa-mobile-alt"></i><a href="tel:<?php echo esc_url( get_theme_mod('relief_medical_hospital_call','' )); ?>" class="ps-2"><?php echo esc_html( get_theme_mod('relief_medical_hospital_call','') ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('relief_medical_hospital_call','') ); ?></span></a>
                <?php } ?>
              </span>
              <span class="email">
                <?php if( get_theme_mod( 'relief_medical_hospital_mail','' ) != '') { ?>
                  <i class="far fa-envelope"></i><a href="mailto:<?php echo esc_url( get_theme_mod('relief_medical_hospital_mail','') ); ?>" class="ps-2"><?php echo esc_html( get_theme_mod('relief_medical_hospital_mail','') ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('relief_medical_hospital_mail','') ); ?></span></a>
                <?php } ?>
              </span>
            </div>       
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="social-media text-lg-end text-md-end text-center py-2">
              <?php if( get_theme_mod( 'relief_medical_hospital_facebook_url' ) != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'relief_medical_hospital_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f px-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','relief-medical-hospital' );?></span></a>
              <?php } ?>
              <?php if( get_theme_mod( 'relief_medical_hospital_twitter_url' ) != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'relief_medical_hospital_twitter_url','' ) ); ?>"><i class="fab fa-twitter px-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','relief-medical-hospital' );?></span></a>
              <?php } ?>
              <?php if( get_theme_mod( 'relief_medical_hospital_linkedin_url' ) != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'relief_medical_hospital_linkedin_url','' ) ); ?>"><i class="fab fa-linkedin-in px-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','relief-medical-hospital' );?></span></a>
              <?php } ?>
              <?php if( get_theme_mod( 'relief_medical_hospital_insta_url' ) != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'relief_medical_hospital_insta_url','' ) ); ?>"><i class="fab fa-instagram px-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','relief-medical-hospital' );?></span></a>
              <?php } ?>
              <?php if( get_theme_mod( 'relief_medical_hospital_youtube_url' ) != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'relief_medical_hospital_youtube_url','' ) ); ?>"><i class="fab fa-youtube px-2"></i><span class="screen-reader-text"><?php esc_html_e( 'YouTube','relief-medical-hospital' );?></span></a>
              <?php } ?>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  <?php }?>
<?php }?>