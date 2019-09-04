<?php
/**
 * Plugin Name: Enqueue Leaflet Assets
 * Plugin URI: https://github.com/StAResComp/Enqueue-Leaflet-Assets
 * Description: Enqueues the CSS and JavaScript necessary for Leaflet maps (https://leafletjs.com) when using a template called map.php
 * Version: 1.0
 * Author: Patrick McCann
 * License: MIT
 * License URI: https://opensource.org/licenses/MIT

 Copyright 2019 University of St Andrews

 Permission is hereby granted, free of charge, to any person obtaining a copy
 of this software and associated documentation files (the "Software"), to deal
 in the Software without restriction, including without limitation the rights
 to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 copies of the Software, and to permit persons to whom the Software is
 furnished to do so, subject to the following conditions:

 The above copyright notice and this permission notice shall be included in all
 copies or substantial portions of the Software.

 THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 SOFTWARE.
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function enqueue_leaflet_assets_enqueue_style() {
    if (is_page_template('map.php')) {
        wp_enqueue_style('leaflet-style','https://unpkg.com/leaflet@1.5.1/dist/leaflet.css','all');
    }
}

function enqueue_leaflet_assets_enqueue_script() {
    if (is_page_template('map.php')) {
        wp_enqueue_script('leaflet-script','https://unpkg.com/leaflet@1.5.1/dist/leaflet.js');
    }
}

add_action('wp_enqueue_styles', 'enqueue_leaflet_assets_enqueue_style');
add_action('wp_enqueue_scripts', 'enqueue_leaflet_assets_enqueue_script');
