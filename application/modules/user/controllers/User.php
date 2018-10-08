<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Authenticated_Controller
{

    public function __construct()
    {
        parent::__construct();
	}

    public function index()
    {
        $this->add_script('vendor/chart.js/dist/Chart.min.js', TRUE);
        $this->add_script('https://www.gstatic.com/charts/loader.js', TRUE);
        $this->add_script('js/app/other/init_chart.js', TRUE);

        $this->add_script('js/modules/user/models/UserModel.js');
        $this->add_script('js/modules/user/views/UserView.js');
        $this->add_script('js/modules/user/collections/UserCollection.js');
        $this->add_script('js/modules/user/UserController.js');


        /*
        |--------------------------------------------------------------------------
        | DATA
        |--------------------------------------------------------------------------
        */
        $data = array(
            'title' => 'Manage user',
            'heading' => 'Users',
            'message' => 'My Message'
        );
        $this->view('User');
        $this->render($data);
    }
    /**
     * [ajax_search_user]
     *
     * @author PhuongTT
     * @date 10/08/2018
     */
    public function ajax_search_user() {
        //Setting parametter call action update from model PHP
        $param = [
            'q' => $this->input->get('q'),
            'l' => $this->input->get('l'),
            'a' => $this->input->get('a')
        ];
        $this->load->model('User_model');

        // Update data
        $query = $this->User_model->search_user($param);
        
        // export data
        $this->render_json($query);
    }
}
