<?php
/**
 * Add theme_hooks here.
 */

/**
 * Implements hook_preprocess_html().
 */
/* -- Delete this line if you want to use this function
function idest_preprocess_html(&$vars) {

}
// */

/**
 * Implements hook_preprocess_page().
 */
/* -- Delete this line if you want to use this function
function idest_preprocess_page(&$vars, $hook) {

}
// */

/**
 * Implements hook_preprocess_node().
 */
/* -- Delete this line if you want to use this function
function idest_preprocess_node(&$vars) {

}
// */

/**
 * Implements hook_breadcrumb().
 */
/* -- Delete this line if you want to use this function
function idest_breadcrumb($variables) {

}
//*/

/**
 * Implements hook_menu_tree__menu_block().
 * see Menu Block module docs https://www.drupal.org/node/1934824
 */

function idest_menu_tree__menu_block($variables) {
	return '<ul class="menu nav nav-pills">' . $variables ['tree'] . '</ul>';
}

/**
 * Implements hook_menu_link__menu_block().
 * see Menu Block module docs https://www.drupal.org/node/1934824
 */
/* -- Delete this line if you want to use this function

function idest_menu_link__menu_block($variables) {
	// default D7 code
	$element = $variables ['element'];
	  $sub_menu = '';

	  if ($element ['#below']) {
	    $sub_menu = drupal_render($element ['#below']);
	  }
	  $output = l($element ['#title'], $element ['#href'], $element ['#localized_options']);
	  return '<li' . drupal_attributes($element ['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}
//*/