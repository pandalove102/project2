<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('dump')) {
    function dump($var, $exit = FALSE)
    {
        if (ENVIRONMENT !== ENV_PRODUCTION) {
            // Add formatting
            echo '<pre><code>';
            print_r($var);
            echo '</code></pre>';

            // Exit ?
            if ($exit == TRUE) {
                exit;
            }
        }
    }
}