<?php


$restaurant_food_delivery_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$restaurant_food_delivery_text_transform = get_theme_mod( 'menu_text_transform_restaurant_food_delivery','CAPITALISE');
    if($restaurant_food_delivery_text_transform == 'CAPITALISE'){

		$restaurant_food_delivery_custom_css .='#main-menu ul li a{';

			$restaurant_food_delivery_custom_css .='text-transform: capitalize ; font-size: 14px;';

		$restaurant_food_delivery_custom_css .='}';

	}else if($restaurant_food_delivery_text_transform == 'UPPERCASE'){

		$restaurant_food_delivery_custom_css .='#main-menu ul li a{';

			$restaurant_food_delivery_custom_css .='text-transform: uppercase ; font-size: 14px;';

		$restaurant_food_delivery_custom_css .='}';

	}else if($restaurant_food_delivery_text_transform == 'LOWERCASE'){

		$restaurant_food_delivery_custom_css .='#main-menu ul li a{';

			$restaurant_food_delivery_custom_css .='text-transform: lowercase ; font-size: 14px;';

		$restaurant_food_delivery_custom_css .='}';
	}

	/*---------------------------Container Width-------------------*/

$restaurant_food_delivery_container_width = get_theme_mod('restaurant_food_delivery_container_width');

		$restaurant_food_delivery_custom_css .='body{';

			$restaurant_food_delivery_custom_css .='width: '.esc_attr($restaurant_food_delivery_container_width).'%; margin: auto;';

		$restaurant_food_delivery_custom_css .='}';



	/*---------------------------Slider-content-alignment-------------------*/

$restaurant_food_delivery_slider_content_alignment = get_theme_mod( 'restaurant_food_delivery_slider_content_alignment','LEFT-ALIGN');

 if($restaurant_food_delivery_slider_content_alignment == 'LEFT-ALIGN'){

		$restaurant_food_delivery_custom_css .='.blog_box{';

			$restaurant_food_delivery_custom_css .='text-align:left;';

		$restaurant_food_delivery_custom_css .='}';


	}else if($restaurant_food_delivery_slider_content_alignment == 'CENTER-ALIGN'){

		$restaurant_food_delivery_custom_css .='.blog_box{';

			$restaurant_food_delivery_custom_css .='text-align:center;';

		$restaurant_food_delivery_custom_css .='}';


	}else if($restaurant_food_delivery_slider_content_alignment == 'RIGHT-ALIGN'){

		$restaurant_food_delivery_custom_css .='.blog_box{';

			$restaurant_food_delivery_custom_css .='text-align:right;';

		$restaurant_food_delivery_custom_css .='}';

	}
