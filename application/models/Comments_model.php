<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Comments_model extends CI_Model
{

    public $table = "Comments";

    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function add($leadId, $userid, $comments)
    {
        $data['leads_id'] = $leadId;
        $data['user_id']  = $userid;
        $data['comments'] = $comments;
        $this->db->insert($this->table, $data);
        if ($this->db->affected_rows() != 1) {
            return false;
        } else {
            return true;
        }
    }

    public function fetch_comments($id)
    {
        $this->db->select('Comments.*, User.name');
        $this->db->where(array('leads_id' => $id));
        $this->db->from($this->table);
        $this->db->join('User', 'User.id = Comments.user_id', 'left');
        $query = $this->db->get();
        return $query->result();
    }

    public function delete_all_lead_comments($leads_id)
    {
        $this->db->where('leads_id', $leads_id);
        return $this->db->delete($this->table);
    }

}
