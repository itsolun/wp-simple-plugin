<?php
/**
 * Plugin Name: My First Plugin
 * Plugin URI: http://www.itsolun.com/my-first-plugin
 * Description: The very first plugin that I have ever created.
 * Version: 1.0
 * Author: I.T.Solun LLC Team
 * Author URI: http://www.itsolun.com
 */

/*
references
https://www.itsolun.com/tutorials/creating-your-first-wordpress-plugin/
https://github.com/itsolun/wp-simple-plugin
https://wordpress.org/plugins/
https://codex.wordpress.org/Plugin_API#Hooks.2C_Actions_and_Filters
https://codex.wordpress.org/Plugin_API/Action_Reference
https://codex.wordpress.org/Plugin_API/Filter_Reference
https://codex.wordpress.org/Function_Reference
https://codex.wordpress.org/Writing_a_Plugin
https://codex.wordpress.org/Creating_Options_Pages
*/

add_action( 'the_content', 'my_thank_you_text' );

function my_thank_you_text ( $content ) {
    return $content .= '<p>Thank you for visiting our website!</p>';
}