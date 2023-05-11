<?php
/**
 * Displays footer site info
 */

?>
<?php if( get_theme_mod( 'tabib_hospital_hide_show_scroll',false) != '' || get_theme_mod( 'tabib_hospital_enable_disable_scrolltop',false) != '') { ?>
    <?php $tabib_hospital_theme_lay = get_theme_mod( 'tabib_hospital_footer_options','Right');
        if($tabib_hospital_theme_lay == 'Left align'){ ?>
            <a href="#" class="scrollup left"><i class="<?php echo esc_attr(get_theme_mod('tabib_hospital_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'tabib-hospital' ); ?></span></a>
        <?php }else if($tabib_hospital_theme_lay == 'Center align'){ ?>
            <a href="#" class="scrollup center"><i class="<?php echo esc_attr(get_theme_mod('tabib_hospital_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'tabib-hospital' ); ?></span></a>
        <?php }else{ ?>
            <a href="#" class="scrollup"><i class="<?php echo esc_attr(get_theme_mod('tabib_hospital_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'tabib-hospital' ); ?></span></a>
    <?php }?>
<?php }?>
<div class="site-info">
    <div class="container">
    	<span><?php tabib_hospital_credit(); ?> <?php echo esc_html(get_theme_mod('tabib_hospital_footer_text',__('By ThemesEye','tabib-hospital'))); ?></span>
    	<span class="footer_text"><?php echo esc_html_e('Powered By WordPress','tabib-hospital') ?></span>
    </div>
</div>