<?php
defined ('BASEPATH') OR exit('no direct script allowed');

class Homepage extends CI_Controller{
    
    public function index(){
        $this->load->helper('url');
        $this->load->view('homepage');
    }
}
