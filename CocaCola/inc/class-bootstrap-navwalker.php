<?php
class Bootstrap_NavWalker extends Walker_Nav_Menu {
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
    }

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $li_attributes = '';
        $class_names = $value = '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        //$classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = 'nav-item';
        $classes[] = 'nav-item-' . $item->ID;
        if ($depth && $args->walker->has_children) {
            $classes[] = 'dropdown-submenu';
        }

        $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
        $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr($item->target    ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr($item->xfn       ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr($item->url       ) .'"' : '';

        // Add "dropdown-toggle" class and attributes for parent menu items with children
        if ($args->walker->has_children) {
            $attributes .= ' class="nav-link"';
            $item_output = $args->before;
            //$item_output .= '<span>';
            $item_output .= '<a'. $attributes .'>';
            $item_output .= apply_filters('the_title', $item->title, $item->ID);
            $item_output .= '</a>';
            $item_output .= '<span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
        } else {
            $attributes .= ' class="nav-link"';
            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= apply_filters('the_title', $item->title, $item->ID);
            $item_output .= '</a>';
        }

        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
?>
