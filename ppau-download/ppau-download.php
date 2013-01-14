<?php
/*
Plugin Name: PPAU Download Shortcode
Plugin URI: https://github.com/ppau/wp-plugins
Description: Shortcode for marking up downloads 
Version: 0.1
Author: Brendan Molloy
Author URI: http://brendan.so
License: CC0
*/
function ppau_download_shortcode($attrs, $content = null) {
    extract(shortcode_atts(array(
        'href' => null,
    ), $attrs));

    $out = "<div class='download'>";

    if ($content != null) {
        if ($attrs['href'] != null) {
            $out .= "<a href='" . $attrs['href'] . "'>" . $content . "</a>";
        } else {
            $out .= $content;
        }
    }

    $out .= "</div>";
    return $out;
}

add_shortcode('download', 'ppau_download_shortcode');
