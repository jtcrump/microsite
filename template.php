<?php

/**
 * Implements template_preprocess_html().
 *
 */
//function tulane_preprocess_html(&$variables) {
//  // Add conditional CSS for IE. To use uncomment below and add IE css file
//  drupal_add_css(path_to_theme() . '/css/ie.css', array('weight' => CSS_THEME, 'browsers' => array('!IE' => FALSE), 'preprocess' => FALSE));
//
//  // Need legacy support for IE downgrade to Foundation 2 or use JS file below
//  // drupal_add_js('http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js', 'external');
//}

/**
 * Implements template_preprocess_page
 *
 */
function tulane_preprocess_html(&$variables) {

foreach(@$variables['page']['content']['system_main']['nodes'] as $key => $value){
// echo $key . "<br />";
break;
}

// foreach(@$variables['page']['content']['system_main']['nodes'][$key] as $key2 => $value){
// echo $key2 . "<br />";
// }


// foreach(@$variables['page']['content']['system_main']['nodes'][$key]['field_page_1_bg_image'][0] as $key3 => $value){
// echo $key3 . "<br />";
// }

$variables['bg2'] = @$variables['page']['content']['system_main']['nodes'][$key]['field_page_2_bg_image'][0]['#item']['filename'] ;
}



/**
 * Implements template_preprocess_node
 *
 */
function tulane_preprocess_node(&$variables) {
// print "bar</br />";
// exit();
}