<?php
/**
 * @package     Frontend
 * @subpackage  Section Name
 * @category    Module Name
 * @author      PhuongTT
 * @link        http://domain.local/{name_method}
 * @create_at   9/11/18 3:51 PM
 */

class Tour_model extends MY_Model {
    
    /*
    |--------------------------------------------------------------------------
    | Constructor default
    |--------------------------------------------------------------------------
    */
    function __construct() {
		parent::__construct();
    }
    
    /**
     * [create_tour_topic]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function create_tour_topic ($params) {        
        $data = $this->query_api(METHOD_POST, CREATE_TOUR_TOPIC, $this->config->item('API_PATH_TOUR_SERVICE'), $params, 'json');
        return $data;
    }
    /**
     * [get_tour_list_topic]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function get_tour_list_topic ($params) {        
        $data = $this->query_api(METHOD_GET, GET_TOUR_LIST_TOPIC, $this->config->item('API_PATH_TOUR_SERVICE'), $params);
        return $data;
    }
    /**
     * [remove_tour_topic]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function remove_tour_topic ($params) {        
        $data = $this->query_api(METHOD_POST, REMOVE_TOUR_TOPIC, $this->config->item('API_PATH_TOUR_SERVICE'), $params, 'json');
        return $data;
    }

}
