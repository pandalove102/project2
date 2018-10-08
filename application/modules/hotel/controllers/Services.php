<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends Authenticated_Controller
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
            'title' => 'Hotel',
            'heading' => 'Services',
            'message' => 'My Message'
        );

        /*
        |--------------------------------------------------------------------------
        | RENDER
        |--------------------------------------------------------------------------
        */
        $this->view('services');
        $this->render($data);
    }

    /**
     * [ajax_create_hotel_group_service]
     *
     * @author PhuongTT
     * @date 10/08/2018
     */
    public function ajax_create_hotel_group_service() {
        //Setting parametter call action update from model PHP
        $requestBody = $this->input->post('requestBody');
        $param = json_encode($requestBody, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        $this->load->model('Hotel_model');

        // Update data
        $query = $this->Hotel_model->create_hotel_group_service($param);
        
        // export data
        $this->render_json($query);
    }
    /**
     * [ajax_get_hotel_group_service]
     *
     * @author PhuongTT
     * @date 10/08/2018
     */
    public function ajax_get_hotel_group_service() {
        //Setting parametter call action update from model PHP
        $requestBody = $this->input->post('requestBody');
        $param = json_encode($requestBody, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        $this->load->model('Hotel_model');

        // Update data
        $query = $this->Hotel_model->get_hotel_group_service($param);
        
        // export data
        $this->render_json($query);
    }
    /**
     * [ajax_get_hotel_list_service]
     *
     * @author PhuongTT
     * @date 10/08/2018
     */
    public function ajax_get_hotel_list_service() {
        //Setting parametter call action update from model PHP
        $requestBody = $this->input->post('requestBody');
        $param = json_encode($requestBody, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        $this->load->model('Hotel_model');

        // Update data
        $query = $this->Hotel_model->get_hotel_list_service($param);
        
        // export data
        $this->render_json($query);
    }
    /**
     * [ajax_create_hotel_service]
     *
     * @author PhuongTT
     * @date 10/08/2018
     */
    public function ajax_create_hotel_service() {
        //Setting parametter call action update from model PHP
        $requestBody = $this->input->post('requestBody');
        $param = json_encode($requestBody, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        $this->load->model('Hotel_model');

        // Update data
        $query = $this->Hotel_model->create_hotel_facilities($param);
        
        // export data
        $this->render_json($query);
    }
    /**
     * [ajax_remove_hotel_facilities_or_service]
     *
     * @author PhuongTT
     * @date 10/08/2018
     */
    public function ajax_remove_hotel_facilities_or_service() {
        //Setting parametter call action update from model PHP
        $requestBody = $this->input->post('requestBody');
        $param = json_encode($requestBody, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        $this->load->model('Hotel_model');

        // Update data
        $query = $this->Hotel_model->remove_hotel_facilities_or_service($param);
        
        // export data
        $this->render_json($query);
    }
    /**
     * [ajax_remove_hotel_group_facilities_or_service]
     *
     * @author PhuongTT
     * @date 10/08/2018
     */
    public function ajax_remove_hotel_group_facilities_or_service() {
        //Setting parametter call action update from model PHP
        $requestBody = $this->input->post('requestBody');
        $param = json_encode($requestBody, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        $this->load->model('Hotel_model');

        // Update data
        $query = $this->Hotel_model->remove_hotel_group_facilities_or_service($param);
        
        // export data
        $this->render_json($query);
    }

}
