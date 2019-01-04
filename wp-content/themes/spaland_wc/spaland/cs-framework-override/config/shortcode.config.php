<?php

//  if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// // ===============================================================================================
// // -----------------------------------------------------------------------------------------------
// // SHORTCODE GENERATOR OPTIONS
// // -----------------------------------------------------------------------------------------------
// // ===============================================================================================
$options       = array();

// -----------------------------------------
// Basic Shortcode Examples                -
// -----------------------------------------
$options[]     = array(
  'title'      => 'Basic Shortcode Examples',
  'shortcodes' => array(

    // begin: shortcode
    array(
      'name'      => 'cs_shortcode_1',
      'title'     => 'Basic Shortcode 1',
      'fields'    => array(
        // shortcode option field
        array(
          'id'    => 'title',
          'type'  => 'text',
          'title' => 'Title',
        ),

        // shortcode content
        array(
          'id'    => 'content',
          'type'  => 'textarea',
          'title' => 'Content',
          'help'  => 'Lorem Ipsum Dollar.',
        )

      ),
    ),

    // end: shortcode

  ),
);


CSFramework_Shortcode_Manager::instance( $options );
