<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_custom_post_options',
  'title'     => 'Custom Post Options',
  'post_type' => 'post',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'author_post_meta',
      'fields' => array(

        array(
          'id'    => 'author_post_quote',
          'type'  => 'textarea',
          'title' => 'Post Author Quote',
        ),
      ),
    ),

  ),
);

CSFramework_Metabox::instance( $options );
