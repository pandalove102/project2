<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class topics extends MY_Controller
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
            'title' => 'Tour',
            'heading' => 'Topics',
            'message' => 'My Message'
        );

        /*
        |--------------------------------------------------------------------------
        | RENDER
        |--------------------------------------------------------------------------
        */
        $this->view('Topics');
        $this->render($data);
    }
    /**
     * [ajax_create_tour_topic]
     *
     * @author PhuongTT
     * @date 10/08/2018
     */
    public function ajax_create_tour_topic() {
        //Setting parametter call action update from model PHP
        $requestBody = $this->input->post('requestBody');
        $param = json_encode($requestBody, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        // Update data
        $query = $this->Tour_model->create_tour_topic($param);

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
     * [ajax_get_tour_list_topic]
     *
     * @author PhuongTT
     * @date 10/08/2018
     */
    public function ajax_get_tour_list_topic() {
        //Setting parametter call action update from model PHP
        $requestBody = $this->input->post('requestBody');
        $param = json_encode($requestBody, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        // Update data
        $query = $this->Tour_model->get_tour_list_topic($param);

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
     * [ajax_remove_tour_topic]
     *
     * @author PhuongTT
     * @date 10/08/2018
     */
    public function ajax_remove_tour_topic() {
        //Setting parametter call action update from model PHP
        $requestBody = $this->input->post('requestBody');
        $param = json_encode($requestBody, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        // Update data
        $query = $this->Tour_model->remove_tour_topic($param);

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
