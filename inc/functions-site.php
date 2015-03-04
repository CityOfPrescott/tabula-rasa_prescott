<?php
include('metabox/metabox-functions.php'); 

	register_nav_menus(
		array(
			'top-nav' => __( 'Top Navigation', 'tabula-rasa' )
		)
	);
	add_action( 'after_setup_theme', 'tr_setup' );
	
add_filter( 'wp_nav_menu_objects', 'submenu_limit', 10, 2 );

function submenu_limit( $items, $args ) {

    if ( empty( $args->submenu ) ) {
        return $items;
    }

    $ids       = wp_filter_object_list( $items, array( 'title' => $args->submenu ), 'and', 'ID' );
    $parent_id = array_pop( $ids );
    $children  = submenu_get_children_ids( $parent_id, $items );

    foreach ( $items as $key => $item ) {

        if ( ! in_array( $item->ID, $children ) ) {
            unset( $items[$key] );
        }
    }

    return $items;
}

function submenu_get_children_ids( $id, $items ) {

    $ids = wp_filter_object_list( $items, array( 'menu_item_parent' => $id ), 'and', 'ID' );

    foreach ( $ids as $id ) {

        $ids = array_merge( $ids, submenu_get_children_ids( $id, $items ) );
    }

    return $ids;
}
	
// add page level body class
add_filter( 'body_class','halfhalf_body_class' );
function halfhalf_body_class( $classes ) {
	$count = count(get_post_ancestors($post->ID));
	if ( $count == 0 ) {
			$classes[] = 'level1';
	}
	if ( $count == 1 ) {
			$classes[] = 'level2';
	}
	if ( $count >= 2 ) {
			$classes[] = 'level2plus';
	}	
	return $classes;     
}

//Breadcrumbs
function the_breadcrumb() {
	if (!is_home()) {
		if (is_category() || is_single()) {
			the_category('title_li=');
			if (is_single()) {
				echo "  ";
				the_title();
			}
		} elseif (is_page()) {
			//echo the_title();
			$crumbs = get_post_ancestors($post->ID);
//$input  = array("php", 4.0, array("green", "red"));
$crumbs = array_reverse($crumbs);
//$preserved = array_reverse($crumbs, true);

//print_r($crumbs);
//print_r($reversed);
//print_r($preserved);
			foreach ( $crumbs as $crumb ) {
				echo '<a href="' . get_permalink($crumb) . '">' . get_the_title($crumb) . '</a> >>';
			}
		}
	}
}
?>