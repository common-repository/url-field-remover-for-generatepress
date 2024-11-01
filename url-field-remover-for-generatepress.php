<?php
/**
 * Plugin Name: URL Field Remover for GeneratePress
 * Author: Bimal Raj Paudel
 * Author URI: https://bimalrajpaudel.com.np/
 * Description: This plugin helps remove the default URL field from GeneratePress theme's comment box.
 * Plugin URI: https://wptracer.com/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Version: 1.0.3
 * Text Domain: url-field-remover-for-generatepress
 *
 */

add_action( 'after_setup_theme', 'wptracer_add_comment_url_filter' );
function wptracer_add_comment_url_filter() {
    add_filter( 'comment_form_default_fields', 'wptracer_disable_comment_url', 20 );
}

function wptracer_disable_comment_url($fields) {
    unset($fields['url']);
    return $fields;
}
add_action("admin_menu", "addMenu");
function addMenu()
{
  add_menu_page("URL Remover", "URL Remover", 4, "wptracer-url-remover", "wptracerurlremover" );
}

function wptracerurlremover()
{
echo <<< 'EOD'
  <h2>Thanks for Installing URL Remover for GeneratePress</h2>
  <p>Sit tight and relax, you do not have to do anything after installing the plugin. The plugin does everything for you.</p>
  <p>If you loved my work feel free to rate my plugin <a href="https://wordpress.org/plugins/url-field-remover-for-generatepress/" target="_blank">From Here.</a></p>
  <p>Donate me so that I can build more plugins for Free: <a href="https://www.buymeacoffee.com/bimalrajpaudel" target="_blank">DONATE.</a>
  <p> Get free WordPress beginner resources: <a href="https://wptracer.com/" target="_blank">WP Tracer.</a></p>
  <p>Get exciting deals and discounts: <a href="https://wptracer.com/deals/" target="_blank">GET AMAZING DEALS & DISCOUNTS</a></p>
EOD;
}