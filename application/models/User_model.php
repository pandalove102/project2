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

    public function testGet($params){
        return $this->getAPI('/users/defunkt', $params);
    }

    public function testPost(){

    }
}
