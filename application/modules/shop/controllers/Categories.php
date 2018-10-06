<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends MY_Controller
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
            'title' => 'Shop',
            'heading' => 'Categories',
            'message' => 'My Message'
        );

        /*
        |--------------------------------------------------------------------------
        | RENDER
        |--------------------------------------------------------------------------
        */
        $this->view('Categories');
        $this->render($data);
    }

    /**
     * [ajax_create_shop_categories]
     *
     * @author PhuongTT
     * @date 10/08/2018
     */
    public function ajax_create_shop_categories() {
        //Setting parametter call action update from model PHP
        $requestBody = $this->input->post('requestBody');
        $param = json_encode($requestBody, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        // Update data
        $query = $this->Shop_model->create_shop_categories($param);

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
     * [ajax_get_shop_list_categories_default]
     *
     * @author PhuongTT
     * @date 10/08/2018
     */
    public function ajax_get_shop_list_categories_default() {
        //Setting parametter call action update from model PHP
        $requestBody = $this->input->post('requestBody');
        $param = json_encode($requestBody, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        // Update data
        $query = $this->Shop_model->get_shop_list_categories_default($param);

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
     * [ajax_get_shop_list_categories_by_id]
     *
     * @author PhuongTT
     * @date 10/08/2018
     */
    public function ajax_get_shop_list_categories_by_id() {
        //Setting parametter call action update from model PHP
        $requestBody = $this->input->post('requestBody');
        $param = json_encode($requestBody, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        // Update data
        $query = $this->Shop_model->get_shop_list_categories_by_id($param);

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
     * [ajax_remove_shop_categories]
     *
     * @author PhuongTT
     * @date 10/08/2018
     */
    public function ajax_remove_shop_categories() {
        //Setting parametter call action update from model PHP
        $requestBody = $this->input->post('requestBody');
        $param = json_encode($requestBody, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        // Update data
        $query = $this->Shop_model->remove_shop_categories($param);

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
     * [ajax_remove_shop_all_categories]
     *
     * @author PhuongTT
     * @date 10/08/2018
     */
    public function ajax_remove_shop_all_categories() {
        //Setting parametter call action update from model PHP
        $requestBody = $this->input->post('requestBody');
        $param = json_encode($requestBody, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        // Update data
        $query = $this->Shop_model->remove_shop_all_categories($param);

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
