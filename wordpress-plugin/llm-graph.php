<?php
/**
 * Plugin Name: LLM-Graph Web Profile
 * Description: Injects an LLM-Graph JSON snippet into the site head.
 * Version: 0.2.0
 * Author: LLM-Graph
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function llm_graph_inject_web_profile() {
    $data = array(
        'version' => '0.2.0',
        'profile' => 'web',
        'site'    => array(
            'id'          => 'wordpress-site',
            'name'        => get_bloginfo( 'name' ),
            'url'         => get_bloginfo( 'url' ),
            'description' => get_bloginfo( 'description' ),
        ),
    );
    echo "\n<script type=\"application/llm-graph+json\">";
    echo wp_json_encode( $data );
    echo "</script>\n";
}
add_action( 'wp_head', 'llm_graph_inject_web_profile' );
