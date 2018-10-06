<?php
/**
 * @package     Frontend
 * @subpackage  Section Name
 * @category    Module Name
 * @author      PhuongTT
 * @link        http://domain.local/{name_method}
 * @create_at   9/11/18 3:51 PM
 */

class Hotel_model extends MY_Model {
    
    /*
    |--------------------------------------------------------------------------
    | Constructor default
    |--------------------------------------------------------------------------
    */
    function __construct() {
		  parent::__construct();
    }
    
    /**
     * [create_hotel_group_facilities]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function create_hotel_group_facilities ($params) {        
      $data = $this->query_api(METHOD_POST, CREATE_HOTEL_GROUP_FACILITIES, $this->config->item('API_PATH_HOTEL_SERVICE'), $params, 'json');
      return $data;
    }
    /**
     * [get_hotel_group_facilities]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function get_hotel_group_facilities ($params) {        
        $data = $this->query_api(METHOD_GET, GET_HOTEL_GROUP_FACILITIES, $this->config->item('API_PATH_HOTEL_SERVICE'), $params);
        return $data;
    }
    /**
     * [create_hotel_group_service]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function create_hotel_group_service ($params) {        
        $data = $this->query_api(METHOD_POST, CREATE_HOTEL_GROUP_SERVICE, $this->config->item('API_PATH_HOTEL_SERVICE'), $params, 'json');
        return $data;
    }
    /**
     * [get_hotel_group_service]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function get_hotel_group_service ($params) {        
        $data = $this->query_api(METHOD_GET, GET_HOTEL_GROUP_SERVICE, $this->config->item('API_PATH_HOTEL_SERVICE'), $params);
        return $data;
    }
    /**
     * [remove_hotel_group_facilities_or_service]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function remove_hotel_group_facilities_or_service ($params) {        
        $data = $this->query_api(METHOD_POST, REMOVE_HOTEL_GROUP_FACILITIES_OR_SERVICE, $this->config->item('API_PATH_HOTEL_SERVICE'), $params, 'json');
        return $data;
    }
    /**
     * [create_hotel_facilities]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function create_hotel_facilities ($params) {        
        $data = $this->query_api(METHOD_POST, CREATE_HOTEL_FACILITIES, $this->config->item('API_PATH_HOTEL_SERVICE'), $params, 'json');
        return $data;
    }
    /**
     * [get_hotel_facilities]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function get_hotel_facilities ($params) {        
        $data = $this->query_api(METHOD_GET, GET_HOTEL_FACILITIES, $this->config->item('API_PATH_HOTEL_SERVICE'), $params);
        return $data;
    }
    /**
     * [get_hotel_list_service]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function get_hotel_list_service ($params) {        
        $data = $this->query_api(METHOD_GET, GET_HOTEL_LIST_SERVICE, $this->config->item('API_PATH_HOTEL_SERVICE'), $params);
        return $data;
    }
    /**
     * [remove_hotel_facilities_or_service]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function remove_hotel_facilities_or_service ($params) {        
        $data = $this->query_api(METHOD_POST, REMOVE_HOTEL_FACILITIES_OR_SERVICE, $this->config->item('API_PATH_HOTEL_SERVICE'), $params, 'json');
        return $data;
    }

}
