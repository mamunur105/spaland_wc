<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spaland
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site page-wrapper">
    <?php 
        // preeloder 
        if (theme_option('preeloder') == true ) { ?>
                <!-- Preloader -->
                <div class="preloader"></div> 
    <?php }  ?>

    <!-- Main Header-->

    <?php 
        if (is_front_page() ) {
            get_template_part( 'section/header', 'menubar-1'); 
        }else{
            get_template_part( 'section/header', 'menubar-2'); 
        } 


    ?>
    <!--End Main Header -->
    
    <?php 
        if (is_front_page() ) { ?>
            <!--Main Slider-->
            <section class="main-slider" style="width: 100%; max-height:250px " >

                <img style="width: 100%;"  src="<?php echo get_template_directory_uri();?>/images/main-slider/image-1.jpg" />

            </section>
            <!--End Main Slider-->
        <?php  }else{ 
                    $page_banner = cs_get_option('page-banner');
                    $page_banner = wp_get_attachment_image_src( $page_banner, 'full' )[0];   
            ?>
            <section class="page-title" <?php echo !empty($page_banner) ? 'style="background-image:url('.$page_banner.')"': ''; ?> >
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1>Products</h1>
                        <ul class="bread-crumb clearfix">
                            <li><a href="index-2.html">Home </a></li>
                            <li>Products</li>
                        </ul>
                    </div>
                </div>
            </section>
        <?php }    ?>















	<div id="content" class="site-content sidebar-page-container ">
    <!-- Sidebar Page Container -->
        <div class="auto-container">
            <div class="row clearfix">











    
