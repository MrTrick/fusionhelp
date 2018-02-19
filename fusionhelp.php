<?php
/*
Plugin Name: Fusion 360 Help
Plugin URI: http://github.com/MrTrick/fusionhelp
Description: Add [f360] shortcode that links to Fusion 360's reference pages
Version: 1.0
Author: MrTrick
License: MIT
*/

$fusionhelp_guids = array(
	'extrude'=>'GUID-A6BD887A-4F83-4EAE-AEF9-D777B94629EF',
);

function fusionhelp_ShortCode($attrs, $content=null) {
  if (empty($content)) return '';
  
  $text = wp_strip_all_tags($content);
  $url = "https://help.autodesk.com/view/fusion360/ENU/?query=".urlencode($text);
  return '<a class="f360" target="_blank" title="Fusion 360 Reference" href="'.$url.'">'.$text.'</a>';
}
add_shortcode('f360', 'fusionhelp_ShortCode');
