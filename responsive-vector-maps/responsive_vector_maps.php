<?php
/**
     * Plugin Name: RVM - Responsive Vector Maps
     * Plugin URI: https://www.responsivemapsplugin.com/
     * Description: Use RVM to create clickable and responsive vector maps in few steps.
     * Version: 6.6.2
     * Author: Enrico Urbinati
     * Author URI: https://www.responsivemapsplugin.com/
     * Text Domain: responsive-vector-maps
     * Domain Path: /languages
     * License: GPL2
     */


     /*  Copyright 2014-2023  Enrico Urbinati  (email : info@responsivemapsplugin.com)
        This program is free software; you can redistribute it and/or modify
        it under the terms of the GNU General Public License as published by
        the Free Software Foundation; either version 2 of the License, or
        (at your option) any later version.
        This program is distributed in the hope that it will be useful,
        but WITHOUT ANY WARRANTY; without even the implied warranty of
        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
        GNU General Public License for more details.
        You should have received a copy of the GNU General Public License
        along with this program; if not, write to the Free Software
        Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
    */


if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

define( 'RVM_VERSION' , '6.6.2' ) ;
define( 'RVM_PLUGIN_FILE' , plugin_basename( __FILE__ ) ) ;
define( 'RVM_PLUGIN_DIR_PATH' , plugin_dir_path( __FILE__ ) ) ;
define( 'RVM_PLUGIN_DIR_URL' , plugin_dir_url( __FILE__ ) ) ;
define( 'RVM_GENERAL_PLUGIN_DIR_PATH' , plugin_dir_path( __DIR__ ) ) ;
define( 'RVM_GENERAL_PLUGIN_DIR_URL' , plugin_dir_URL( __DIR__ ) ) ;
define( 'RVM_INC_PLUGIN_DIR' , RVM_PLUGIN_DIR_PATH . 'includes' ) ;
define( 'RVM_INC_REGIONS_PLUGIN_DIR' , RVM_PLUGIN_DIR_PATH . 'includes/regions' ) ;
define( 'RVM_JS_PLUGIN_DIR', RVM_PLUGIN_DIR_URL . 'js' ) ;
define( 'RVM_JS_JVECTORMAP_PLUGIN_DIR', RVM_JS_PLUGIN_DIR . '/regions-data' ) ;
define( 'RVM_CSS_PLUGIN_DIR' , RVM_PLUGIN_DIR_URL . 'css' ) ;
define( 'RVM_IMG_PLUGIN_DIR' , RVM_PLUGIN_DIR_URL . 'images' ) ;
define( 'RVM_PLUGIN_NAME' , 'RVM - Responsive Vector Maps' ) ;
define( 'RVM_PLUGIN_WIDGET_DESCR' ,  __( 'Display the map widget' , 'responsive-vector-maps' ) );
define( 'RVM_WP_VERSION' , get_bloginfo( 'version' ) ) ;
define( 'RVM_PREFIX' , 'rvm_' ) ;
define( 'RVM_LABEL_CLASS' , 'class="' . RVM_PREFIX . 'label"' ) ;
define( 'RVM_REGION_LINK_CLASS' , 'class="' . RVM_PREFIX . 'regions_links"' ) ;
define( 'RVM_REGION_BG_CLASS' , 'class="' . RVM_PREFIX . 'regions_bg"' ) ;
define( 'RVM_REGION_POPUP_CLASS' , 'class="' . RVM_PREFIX . 'regions_popup"' ) ;
define( 'RVM_CUSTOM_MAPS_PATHS_DELIMITER' , '-@rvm@-' ) ;// to save into options both url path and dir path to custom map
define( 'RVM_DOMAIN_URL' , 'https://www.responsivemapsplugin.com/' ) ;

//default settings for fallback
define( 'RVM_MAP_TAB_ACTIVE' , 'rvm_main_settings' ) ;// default active tab
define( 'RVM_CANVAS_BG_COLOUR' , '#A5BFDD' ) ;
define( 'RVM_MAP_BG_COLOUR' , '#FFFFFF' ) ;
define( 'RVM_MAP_REGION_BG_SELECTED_STATUS' , 'checked' ) ;
define( 'RVM_MAP_BG_SELECTED_COLOUR' , '#FFFFFF' ) ;
define( 'RVM_MAP_BORDER_COLOUR' , '#6FB4FF' ) ;
define( 'RVM_MAP_BORDER_WIDTH' , 1 ) ;
define( 'RVM_MAP_MOUSE_HOVER_OVER_COLOUR' , '#0C4CA3' ) ;
define( 'RVM_MAP_MOUSE_HOVER_OVER_COLOUR_OPACITY' , 1 ) ;
define( 'RVM_MARKER_BG_COLOUR' , '#6FB4FF' ) ;
define( 'RVM_MARKER_BORDER_COLOUR' , '#000000' ) ;
define( 'RVM_REGION_LINK_TARGET' , '_blank' ) ;
define( 'RVM_MARKER_DIM_MIN_VALUE' , 4 ) ;
define( 'RVM_MARKER_DIM_MAX_VALUE' , 12 ) ;
define( 'RVM_DEQUEUE_WP_EMOJI' , "unchecked" ) ;

@include_once RVM_INC_PLUGIN_DIR . '/rvm_general_functions.php';
@include_once RVM_INC_PLUGIN_DIR . '/rvm_style_and_script.php';
@include_once RVM_INC_PLUGIN_DIR . '/rvm_core.php';
@include_once RVM_INC_PLUGIN_DIR . '/rvm_shortcode.php';
@include_once RVM_INC_PLUGIN_DIR . '/rvm_widget.php';

?>