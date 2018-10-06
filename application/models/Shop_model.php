<?php
/**
 * @package     Frontend
 * @subpackage  Section Name
 * @category    Module Name
 * @author      PhuongTT
 * @link        http://domain.local/{name_method}
 * @create_at   9/11/18 3:51 PM
 */

class Shop_model extends MY_Model {
    
    /*
    |--------------------------------------------------------------------------
    | Constructor default
    |--------------------------------------------------------------------------
    */
    function __construct() {
		parent::__construct();
    }

    /**
     * [create_shop_categories]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function create_shop_categories ($params) {        
        $data = $this->query_api(METHOD_POST, CREATE_SHOP_CATEGORIES, $this->config->item('API_PATH_SHOP_SERVICE'), $params, 'json');
        return $data;
    }
    /**
     * [get_shop_list_categories_default]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function get_shop_list_categories_default ($params) {        
        $data = $this->query_api(METHOD_GET, GET_SHOP_LIST_CATEGORIES_DEFAULT, $this->config->item('API_PATH_SHOP_SERVICE'), $params);
        return $data;
    }
    /**
     * [get_shop_list_categories_by_id]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function get_shop_list_categories_by_id ($params) {        
        $data = $this->query_api(METHOD_GET, GET_SHOP_LIST_CATEGORIES_BY_ID, $this->config->item('API_PATH_SHOP_SERVICE'), $params);
        return $data;
    }
    /**
     * [remove_shop_categories]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function remove_shop_categories ($params) {        
        $data = $this->query_api(METHOD_POST, REMOVE_SHOP_CATEGORIES, $this->config->item('API_PATH_SHOP_SERVICE'), $params, 'json');
        return $data;
    }
    /**
     * [remove_shop_all_categories]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function remove_shop_all_categories ($params) {        
        $data = $this->query_api(METHOD_POST, REMOVE_SHOP_ALL_CATEGORIES, $this->config->item('API_PATH_SHOP_SERVICE'), $params, 'json');
        return $data;
    }
}
