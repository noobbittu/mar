<?php

defined('BASEPATH') OR exit('no direct script allowed');

class Registration_form extends CI_controller {

    public function index() {
        $this->load->helper('url');
        $this->load->view('registration_form.php');
    }

    public function submit() {
        $this->load->model('registration_submit');
        $this->registration_submit->insert_data();
    }

}
