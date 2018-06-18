<?php
class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('user_model');
    }

    public function create() {
        if($this->user_model->create()) {
            echo "information saved successfully";
        }
        else {
            echo "please try again";
        }
    }

    public function call() {
        if($this->user_model->call()) {
            echo "Subscribed successfully";
        }
        else {
            echo "please try again";
        }
    }

    public function index() {
        $this->load->view('contact');
    }

    public function getUserData() {
        $data['colan'] = $this->user_model->getdata();
        $this->load->view('information', $data);
    }

    public function callUserData() {
        $info['def'] = $this->user_model->calldata();
        $this->load->view('information', $info);
    }
}
?>