<?php

class Selective_Walker extends Walker_Nav_Menu {
    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
        $id_field = $this->db_fields['id'];

        if ( is_object( $args[0] ) ) {
            $args[0]->has_children = !empty( $children_elements[$element->$id_field] );
        }

        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }
    function start_el( &$output, $item, $depth=0, $args =array() ,$id = 0) {
        if ( $args->has_children ) {
            $item->classes[] = 'dropdown ';
        }
        parent::start_el($output, $item, $depth, $args);
    }
}