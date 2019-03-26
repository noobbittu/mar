<?php

defined('BASEPATH') OR exit('no direct access is allowed');

class Registration_submit extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert_data() {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $reg_no = $_POST['registration_no'];
        $roll_no = $_POST['roll_no'];
        $department = $_POST['dept'];


        $data = array(
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'reg_no' => $reg_no,
            'roll_no' => $roll_no,
            'dept' => $department
        );
        $this->db->insert('users', $data);
    }

}
?>
