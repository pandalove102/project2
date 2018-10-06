<?php
/**
 * @package     Frontend
 * @subpackage  Section Name
 * @category    Module Name
 * @author      PhuongTT
 * @link        http://domain.local/{name_method}
 * @create_at   9/11/18 3:51 PM
 */

class Service_model extends MY_Model {

    /*
    |--------------------------------------------------------------------------
    | Constructor default
    |--------------------------------------------------------------------------
    */
    function __construct() {
		parent::__construct();
    }
    
    /**
     * [get_currency]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function get_currency ($params) {        
        $data = $this->query_api(METHOD_GET, GET_CURRENCY, $this->config->item('API_PATH_SERVICE_SERVICE'), $params);
        return $data;
    }
    /**
     * [create_list_currency]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function create_list_currency ($params) {        
        $data = $this->query_api(METHOD_POST, CREATE_LIST_CURRENCY, $this->config->item('API_PATH_SERVICE_SERVICE'), $params);
        return $data;
    }
    /**
     * [update_currency]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function update_currency ($params) {        
        $data = $this->query_api(METHOD_POST, UPDATE_CURRENCY, $this->config->item('API_PATH_SERVICE_SERVICE'), $params);
        return $data;
    }
    /**
     * [find_currency_by_code]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function find_currency_by_code ($params) {        
        $data = $this->query_api(METHOD_GET, FIND_CURRENCY_BY_CODE, $this->config->item('API_PATH_SERVICE_SERVICE'), $params);
        return $data;
    }
    /**
     * [remove_currency]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function remove_currency ($params) {        
        $data = $this->query_api(METHOD_POST, REMOVE_CURRENCY, $this->config->item('API_PATH_SERVICE_SERVICE'), $params);
        return $data;
    }
    /**
     * [update_currency_by_date]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function update_currency_by_date ($params) {        
        $data = $this->query_api(METHOD_POST, UPDATE_CURRENCY_BY_DATE, $this->config->item('API_PATH_SERVICE_SERVICE'), $params);
        return $data;
    }
    /**
     * [get_timezone]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function get_timezone ($params) {        
        $data = $this->query_api(METHOD_GET, GET_TIMEZONE, $this->config->item('API_PATH_SERVICE_SERVICE'), $params);
        return $data;
    }
    /**
     * [create_timezone_from_external]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function create_timezone_from_external ($params) {        
        $data = $this->query_api(METHOD_POST, CREATE_TIMEZONE_FROM_EXTERNAL, $this->config->item('API_PATH_SERVICE_SERVICE'), $params);
        return $data;
    }
    /**
     * [update_timezone]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function update_timezone ($params) {        
        $data = $this->query_api(METHOD_POST, UPDATE_TIMEZONE, $this->config->item('API_PATH_SERVICE_SERVICE'), $params);
        return $data;
    }
    /**
     * [remove_timezone]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function remove_timezone ($params) {        
        $data = $this->query_api(METHOD_POST, REMOVE_TIMEZONE, $this->config->item('API_PATH_SERVICE_SERVICE'), $params);
        return $data;
    }
}
