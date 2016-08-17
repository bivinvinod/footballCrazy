<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('string');
        $this->load->model('User_model', 'user');
    }

    public function save()
    {
        if ($this->input->post()) {
            $data     = $this->input->post();
            $username = $this->input->post('username');
            $count    = $this->user->check_username($username);
            if ($count > 0) {
                $this->session->set_flashdata('msg', 'User name already taken!');
                redirect('user/add');
            }
            if ($this->user->insert($data)) {
                $this->session->set_flashdata('msg', 'Saved!');
                redirect('user/view');
            }
        }

    }

    public function add()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('top_navigation');
        $this->load->view('user_add');
        $this->load->view('footer');
    }

    public function view()
    {
        $data['users'] = $this->user->listall();
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('top_navigation');
        $this->load->view('user_list', $data);
        $this->load->view('footer');
    }

    public function edit($id)
    {
        $data['userData'] = $this->user->specific_user($id);
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('top_navigation');
        $this->load->view('user_edit', $data);
        $this->load->view('footer');
    }

    public function deleteUser($id)
    {
        if ($this->input->is_ajax_request()) {
            if ($this->user->delete_user($id)) {
                echo "success";
            } else {
                echo "error";
            }
        }

    }

    public function update()
    {
        if ($this->input->post()) {
            // $username         = $this->input->post('username');
            $data['name']     = $this->input->post('name');
            // $data['username'] = $username;
            $data['password'] = $this->input->post('password');
            $data['type']     = $this->input->post('type');
            $id               = $this->input->post('userid');
            // $count            = $this->user->check_username($username);
            // if ($count > 0) {
            //     $this->session->set_flashdata('msg', 'User name already taken!');
            //     redirect('user/edit/'.$id);
            // }
            if ($this->user->update($data, $id)) {
                $this->session->set_flashdata('msg', 'Saved!');
                redirect('user/view');
            }
        }

    }

    public function checkUser($username)
    {
        $count = $this->user->check_username($username);
        if ($count > 0) {
            echo "taken";
        }
    }

}
