<?php
/**
 * @package     Frontend
 * @subpackage  Section Name
 * @category    Module Name
 * @author      trihuynh
 * @link        http://domain.local/{name_method}
 * @create_at   9/11/18 3:51 PM
 */

class User_model extends MY_Model {

    /**
     * [search_user]
     *
     * @author PhuongTT
     * @date 10/08/2018
     * @param object $params
     * @return $data
     */
    public function search_user($params){
        return $this->get_api(API_ES_URL,'/users/search', $params);
    }
}
