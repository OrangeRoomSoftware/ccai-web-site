<?php

/**
 * Javascripts
 *
 * Bootstrap, ORS custom style.js
 */
if (!function_exists('ccai_javascripts')) {
  function ccai_javascripts() {
    wp_enqueue_script('ors-child-custom', "/wp-content/themes/ccai/script.js", array('jquery'), null, true);
  }

  if (!is_admin()) {
    add_action('wp_print_scripts', 'ccai_javascripts', 5);
  }
}
