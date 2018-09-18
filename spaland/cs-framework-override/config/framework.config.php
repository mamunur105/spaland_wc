<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Options',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => true,
  'show_reset_all'  => false,
  'framework_title' => 'Codestar Framework <small>by Codestar</small>',
); 

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'global',
  'title'       => 'Global',
  'icon'        => 'fa fa-home',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'main_logo',
      'type'    => 'image',
      'title'   => 'Theme Logo ',
    ),

    // end: a field


  ), // end: fields
);

// ------------------------------
// a option section with tabs   -
// ------------------------------
$options[]   = array(
  'name'     => 'header',
  'title'    => 'Header',
  'icon'     => 'fa fa-plus-circle',
  'sections' => array(

    // -----------------------------
    // begin: text options         -
    // -----------------------------
    array(
      'name'      => 'header_top_section',
      'title'     => 'header Top',
      'icon'      => 'fa fa-check',

      // begin: fields
      'fields'    => array(

          array(
            'id'         => 'header_top',
            'type'       => 'switcher',
            'title'      => 'Header Top Show/hide',
            'default'    => true
          ),
          // begin: a field
          array(
            'id'    => 'headet_top_phone',
            'type'  => 'text',
            'title' => 'Phone Number',
            'dependency' => array( 'header_top', '==', 'true' ) // dependency rule
          ),
          array(
            'id'    => 'headet_top_email',
            'type'  => 'text',
            'title' => 'Email Address',
            'dependency' => array( 'header_top', '==', 'true' ) // dependency rule
          ),
          
          // end: a field
          array(
            'id'         => 'headet_top_right_button',
            'type'       => 'switcher',
            'title'      => 'Header Top Right Button ',
            'default'    => true
          ),
          array(
            'id'    => 'headet_top_booking_link',
            'type'  => 'text',
            'title' => 'Book Page Link',
            'dependency' => array( 'header_top', '==', 'true' ) // dependency rule
          ),


      ), // end: fields

    ), // end: text options



  )
);




CSFramework::instance( $settings, $options );
