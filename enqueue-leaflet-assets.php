<?php
/**
 * Plugin Name: Enqueue Leaflet Assets
 * Plugin URI: https://github.com/StAResComp/Enqueue-Leaflet-Assets
 * Description: Enqueues the CSS and JavaScript necessary for Leaflet maps (https://leafletjs.com) when using a template called map.php
 * Version: 1.1
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

function enqueue_leaflet_assets_enqueue_leaflet_assets() {
    if (is_page_template('map.php')) {
        wp_enqueue_style('leaflet-style','https://unpkg.com/leaflet@1.5.1/dist/leaflet.css','all');
        wp_enqueue_script('leaflet-script','https://unpkg.com/leaflet@1.5.1/dist/leaflet.js');
        wp_enqueue_style('marker-cluster-style','https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css','all');
        wp_enqueue_style('marker-cluster-default-style','https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css','all');
        wp_enqueue_script('marker-cluster-script','https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js');
    }
}

function enqueue_leaflet_assets_enqueue_tabulator_assets() {
    if (is_page_template('map.php')) {
        wp_enqueue_style('tabulator-style','https://unpkg.com/tabulator-tables@4.4.1/dist/css/tabulator.min.css','all');
        wp_enqueue_script('tabulator-script','https://unpkg.com/tabulator-tables@4.4.1/dist/js/tabulator.min.js');
    }
}

function enqueue_leaflet_assets_enqueue_tabby_assets() {
    if (is_page_template('map.php')) {
        wp_enqueue_style('tabby-style','https://cdn.jsdelivr.net/gh/cferdinandi/tabby@12/dist/css/tabby-ui.min.css','all');
        wp_enqueue_script('tabby-script','https://cdn.jsdelivr.net/gh/cferdinandi/tabby@12/dist/js/tabby.polyfills.min.js');
    }
}


function enqueue_leaflet_assets_enqueue_linkify_assets() {
    if (is_page_template('map.php')) {
        wp_enqueue_script('linkify','https://cdnjs.cloudflare.com/ajax/libs/jQuery-linkify/2.1.8/linkify.min.js',15);
        wp_enqueue_script('linkify-jquery','https://cdnjs.cloudflare.com/ajax/libs/jQuery-linkify/2.1.8/linkify-jquery.min.js',15);
    }
}

add_action('wp_enqueue_scripts', 'enqueue_leaflet_assets_enqueue_leaflet_assets');
add_action('wp_enqueue_scripts', 'enqueue_leaflet_assets_enqueue_tabulator_assets');
add_action('wp_enqueue_scripts', 'enqueue_leaflet_assets_enqueue_tabby_assets');
add_action('wp_enqueue_scripts', 'enqueue_leaflet_assets_enqueue_linkify_assets');
