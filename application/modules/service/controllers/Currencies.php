<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Currencies extends Authenticated_Controller
{

	protected $model_file = 'Hotel_model';

    public function __construct()
    {
        parent::__construct();
	}

	public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | SCRIPTS
        |--------------------------------------------------------------------------
        */
        $this->add_script('vendor/chart.js/dist/Chart.min.js', TRUE);
        $this->add_script('https://www.gstatic.com/charts/loader.js', TRUE);
        $this->add_script('js/app/other/init_chart.js', TRUE);

        $this->add_script('js/modules/dashboard/custom-ui/page_index.js');
        $this->add_script('js/modules/dashboard/models/todoModel.js');
        $this->add_script('js/modules/dashboard/collections/todoCollection.js');
        $this->add_script('js/modules/dashboard/views/todoView.js');
        $this->add_script('js/modules/dashboard/dashboardApp.js');

        /*
        |--------------------------------------------------------------------------
        | DATA
        |--------------------------------------------------------------------------
        */
        $data = array(
            'title' => 'Service',
            'heading' => 'Currencies',
            'message' => 'My Message'
        );

        /*
        |--------------------------------------------------------------------------
        | RENDER
        |--------------------------------------------------------------------------
        */
        $this->view('Currencies');
        $this->render($data);
    }
    
    /*
    |--------------------------------------------------------------------------
    | METHOD CALL API
    |--------------------------------------------------------------------------
    */

    /**
     * [ajax_get_currency]
     *
     * @author PhuongTT
     * @date 10/08/2018
     */
    public function ajax_get_currency() {
        //Setting parametter call action update from model PHP
        $requestBody = $this->input->post('requestBody');
        $param = json_encode($requestBody, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        $this->load->model('Service_model');

        // Update data
        $query = $this->Service_model->get_currency($param);
        
        // export data
        $this->render_json($query);
    }
    /**
     * [ajax_create_list_currency]
     *
     * @author PhuongTT
     * @date 10/08/2018
     */
    public function ajax_create_list_currency() {
        //Setting parametter call action update from model PHP
        $requestBody = $this->input->post('requestBody');
        $param = json_encode($requestBody, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        $this->load->model('Service_model');

        // Update data
        $query = $this->Service_model->create_list_currency($param);
        
        // export data
        $this->render_json($query);
    }
    /**
     * [ajax_update_currency]
     *
     * @author PhuongTT
     * @date 10/08/2018
     */
    public function ajax_update_currency() {
        //Setting parametter call action update from model PHP
        $requestBody = $this->input->post('requestBody');
        $param = json_encode($requestBody, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        $this->load->model('Service_model');

        // Update data
        $query = $this->Service_model->update_currency($param);
        
        // export data
        $this->render_json($query);
    }
    /**
     * [ajax_find_currency_by_code]
     *
     * @author PhuongTT
     * @date 10/08/2018
     */
    public function ajax_find_currency_by_code() {
        //Setting parametter call action update from model PHP
        $requestBody = $this->input->post('requestBody');
        $param = json_encode($requestBody, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        $this->load->model('Service_model');

        // Update data
        $query = $this->Service_model->find_currency_by_code($param);
        
        // export data
        $this->render_json($query);
    }
    /**
     * [ajax_remove_currency]
     *
     * @author PhuongTT
     * @date 10/08/2018
     */
    public function ajax_remove_currency() {
        //Setting parametter call action update from model PHP
        $requestBody = $this->input->post('requestBody');
        $param = json_encode($requestBody, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        $this->load->model('Service_model');

        // Update data
        $query = $this->Service_model->remove_currency($param);

        // export data
        $this->render_json($query);
    }
    /**
     * [ajax_update_currency_by_date]
     *
     * @author PhuongTT
     * @date 10/08/2018
     */
    public function ajax_update_currency_by_date() {
        //Setting parametter call action update from model PHP
        $requestBody = $this->input->post('requestBody');
        $param = json_encode($requestBody, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        $this->load->model('Service_model');

        // Update data
        $query = $this->Service_model->update_currency_by_date($param);
        
        // export data
        $this->render_json($query);
    }
}
