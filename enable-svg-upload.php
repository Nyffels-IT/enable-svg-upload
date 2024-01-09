<?php
/**
 * Plugin Name: Enable SVG upload
 * Description: A simple extreme lightweight plugin that simply enables SVG upload for a wordpress website. 
 * Version: 1.0.0
 * Requires at least: 6.0
 * Requires PHP: 8.0
 * Author: Nyffels IT
 * Author URI: https://nyffels-it.be
 * License: MIT
 **/

add_filter('upload_mimes', 'add_file_types_to_uploads');
function add_file_types_to_uploads($file_types)
{
  $new_filetypes = array();
  $new_filetypes['svg'] = 'image/svg+xml';
  $file_types = array_merge($file_types, $new_filetypes);
  return $file_types;
}