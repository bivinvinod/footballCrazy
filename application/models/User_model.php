<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public $table = "User";

    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
//api
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        if ($this->db->affected_rows() != 1) {
            return false;
        } else {
            return $this->db->insert_id();
        }
    }

    public function check_user($username, $password)
    {
        $this->db->select('*');
        $this->db->where(array('username' => $username, 'password' => $password));
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
    }

    public function listall()
    {
        $query = $this->db->get_where($this->table);
        return $query->result();
    }

    public function specific_user($id)
    {
        $query = $this->db->get_where($this->table, array('id' => $id));
        return $query->result();
    }

    public function update($data, $userId)
    {
        $this->db->where('id', $userId);
        $this->db->update($this->table, $data);
        if ($this->db->affected_rows() != 1) {
            return false;
        } else {
            return true;
        }
    }

    public function delete_user($userId)
    {
        $this->db->where('id', $userId);
        return $this->db->delete($this->table);
    }

    public function check_username($username)
    {
        $this->db->select('*');
        $this->db->where(array('username' => $username));
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function checkOldPassword()
    {
        $oldPassword = $this->input->post('oldPassword');
        $this->db->select('*');
        $this->db->where('password', $oldPassword);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function updatePassword()
    {
        $data = array(
            'password' => $this->input->post("password")
        );
        $userId = $this->session->userdata('userId');
        $this->db->where('id', $userId);
        $this->db->update($this->table, $data);
    }

}
