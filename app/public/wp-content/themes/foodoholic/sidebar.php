<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Foodoholic
 */

$sidebar = foodoholic_get_sidebar_id();

// Is active sidebar check in function foodoholic_get_sidebar_id.
if ( '' === $sidebar ) {
    return;
}

?>
<aside id="secondary" class="sidebar widget-area" role="complementary">
	<?php dynamic_sidebar( $sidebar ); ?>
</aside><!-- .sidebar .widget-area -->
