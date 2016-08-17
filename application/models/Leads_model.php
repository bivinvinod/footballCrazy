<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Leads_model extends CI_Model
{

    public $table = "Leads";

    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function insert()
    {
        $data = array(
            'name'    => $this->input->post("name"),
            'mobile'  => $this->input->post("mobile"),
            'email'   => $this->input->post("email"),
            'address' => $this->input->post("address"),
            'status'  => $this->input->post("status"),
            'lat'     => $this->input->post("lat"),
            'longt'   => $this->input->post("longt"),

        );
        $this->db->insert($this->table, $data);
        if ($this->db->affected_rows() != 1) {
            return false;
        } else {
            return $this->db->insert_id();
        }
    }

    public function listAll()
    {
        $this->db->order_by('createdAt', 'DESC');
        $query = $this->db->get_where($this->table, array('archive!=' => 1));
        return $query->result();
    }

    public function listSpecific($id)
    {
        $query = $this->db->get_where($this->table, array('id' => $id));
        return $query->result();
    }

    public function update()
    {
        $data = array(
            'name'    => $this->input->post("name"),
            'mobile'  => $this->input->post("mobile"),
            'email'   => $this->input->post("email"),
            'address' => $this->input->post("address"),
            'status'  => $this->input->post("status"),
            'lat'     => $this->input->post("lat"),
            'longt'   => $this->input->post("longt"),
        );
        $this->db->where('id', $this->input->post('leadsId'));
        $this->db->update($this->table, $data);
    }

    public function archive($id)
    {
        $data = array(
            'archive' => 1,
        );
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
        if ($this->db->affected_rows() > 0) {
            return true;

        } else {
            return false;
        }
    }

    public function statusUpdate()
    {
        $data = array(
            'status' => $this->input->post('status'),
        );
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
        if ($this->db->affected_rows() > 0) {
            return true;

        } else {
            return false;
        }
    }

    public function favourite($id)
    {
        $data = array(
            'favorite' => 1,
        );
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
        if ($this->db->affected_rows() > 0) {
            return true;

        } else {
            return false;
        }
    }

    public function unfavourite($id)
    {
        $data = array(
            'favorite' => 0,
        );
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
        if ($this->db->affected_rows() > 0) {
            return true;

        } else {
            return false;
        }
    }

    public function listFavourite()
    {
        $query = $this->db->get_where($this->table, array('favorite' => 1, 'archive!=' => 1));
        return $query->result();
    }

    public function listArchive()
    {
        $query = $this->db->get_where($this->table, array('archive' => 1));
        return $query->result();
    }

    public function delete_lead($leads_id)
    {
        $this->db->where('id', $leads_id);
        return $this->db->delete($this->table);
    }

//api
    public function insert_api($data)
    {
        $this->db->insert($this->table, $data);
        if ($this->db->affected_rows() != 1) {
            return false;
        } else {
            return $this->db->insert_id();
        }
    }

    public function countFavourite()
    {
        $this->db->where(array('favorite' => 1, 'archive!=' => 1));
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function countArchive()
    {
        $query = $this->db->where(array('archive' => 1));
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

}
