<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('User_model', 'user');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function check()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if ($username == "admin" && $password == "admin") {
            foreach ($data as $value) {
                $userData = array(
                    'name'     => "admin",
                    'userId'       => 1,
                    'userType'     => "admin");

            }
                $this->session->set_userdata($userData);
                $this->session->set_flashdata('msg', 'welcome!');
                redirect('home');
            
            
        } else {
            $this->session->set_flashdata('msg', 'User not found!');
            redirect('login');
        }

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}
