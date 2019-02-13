<?php

defined('BASEPATH') OR exit('no direct script allowed');

class Registration_form extends CI_controller {

    public function index() {
        $this->load->helper('url');
        $this->load->view('registration_form.php');
    }

}
