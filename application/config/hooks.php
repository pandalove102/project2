<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
|  HOOKS
| -------------------------------------------------------------------------
*/

if(ENVIRONMENT === ENV_PRODUCTION):
    $hook['post_controller_constructor'][] = array(
        'function' => 'force_ssl',
        'filename' => 'ssl.php',
        'filepath' => 'hooks'
    );
endif;
