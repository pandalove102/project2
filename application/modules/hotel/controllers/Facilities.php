<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facilities extends MY_Controller
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
            'heading' => 'Facilities',
            'message' => 'My Message'
        );

        /*
        |--------------------------------------------------------------------------
        | RENDER
        |--------------------------------------------------------------------------
        */
        $this->view('Facilities');
        $this->render($data);
    }
    /**
     * [ajax_create_hotel_group_facilities]
     *
     * @author PhuongTT
     * @date 10/08/2018
     */
    public function ajax_create_hotel_group_facilities() {
        //Setting parametter call action update from model PHP
        $requestBody = $this->input->post('requestBody');
        $param = json_encode($requestBody, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        // Update data
        $query = $this->Hotel_model->create_hotel_group_facilities($param);

        // Response status udpate 
        if (check_query($query)) {
            // Update success
            echo json_encode($query->elements[0]);
        } else {
            // Update fail
            echo json_encode(array('error' => 'true'));
        }
    }
    /**
     * [ajax_get_hotel_group_facilities]
     *
     * @author PhuongTT
     * @date 10/08/2018
     */
    public function ajax_get_hotel_group_facilities() {
        //Setting parametter call action update from model PHP
        $requestBody = $this->input->post('requestBody');
        $param = json_encode($requestBody, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        // Update data
        $query = $this->Hotel_model->get_hotel_group_facilities($param);

        // Response status udpate 
        if (check_query($query)) {
            // Update success
            echo json_encode($query->elements[0]);
        } else {
            // Update fail
            echo json_encode(array('error' => 'true'));
        }
    }
    /**
     * [ajax_create_hotel_facilities]
     *
     * @author PhuongTT
     * @date 10/08/2018
     */
    public function ajax_create_hotel_facilities() {
        //Setting parametter call action update from model PHP
        $requestBody = $this->input->post('requestBody');
        $param = json_encode($requestBody, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        // Update data
        $query = $this->Hotel_model->create_hotel_facilities($param);

        // Response status udpate 
        if (check_query($query)) {
            // Update success
            echo json_encode($query->elements[0]);
        } else {
            // Update fail
            echo json_encode(array('error' => 'true'));
        }
    }
    /**
     * [ajax_get_hotel_facilities]
     *
     * @author PhuongTT
     * @date 10/08/2018
     */
    public function ajax_get_hotel_facilities() {
        //Setting parametter call action update from model PHP
        $requestBody = $this->input->post('requestBody');
        $param = json_encode($requestBody, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        // Update data
        $query = $this->Hotel_model->get_hotel_facilities($param);

        // Response status udpate 
        if (check_query($query)) {
            // Update success
            echo json_encode($query->elements[0]);
        } else {
            // Update fail
            echo json_encode(array('error' => 'true'));
        }
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

        // Update data
        $query = $this->Hotel_model->remove_hotel_facilities_or_service($param);

        // Response status udpate 
        if (check_query($query)) {
            // Update success
            echo json_encode($query->elements[0]);
        } else {
            // Update fail
            echo json_encode(array('error' => 'true'));
        }
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

        // Update data
        $query = $this->Hotel_model->remove_hotel_group_facilities_or_service($param);

        // Response status udpate 
        if (check_query($query)) {
            // Update success
            echo json_encode($query->elements[0]);
        } else {
            // Update fail
            echo json_encode(array('error' => 'true'));
        }
    }
}
