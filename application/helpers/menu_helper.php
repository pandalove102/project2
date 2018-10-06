<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @package     Frontend
 * @subpackage  Section Name
 * @category    Module Name
 * @author      trihuynh
 * @link        http://domain.local/{name_method}
 * @create_at   9/13/18 4:27 PM
 */

if (!function_exists('menu_is_active')) {
    function menu_is_active($menu_url)
    {
        $CI =& get_instance();
        $menu_url = trim($menu_url);
        $route_class = $CI->router->fetch_class();
        $route_class_method = implode('/', $CI->router->uri->rsegments);
        return $menu_url == $route_class || $menu_url == $route_class_method;
    }
}