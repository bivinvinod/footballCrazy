<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Photos_model extends CI_Model
{

    public $table = "Photos";

    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function fetch_lead_photos($id)
    {
        $query = $this->db->get_where($this->table, array('leads_id' => $id));
        return $query->result();
    }

    public function like_count()
    {

    }

    public function add($files, $leadId)
    {
        $data = "";
        if (!empty($files)) {
            foreach ($files as $value) {
                $data[] = array(
                    'leads_id'  => $leadId,
                    'file_name' => $value);
            }
        }
        if (!empty($data)) {
            $this->db->insert_batch($this->table, $data);
        }

    }

    public function delete_photos($leads_id)
    {
        $delp = $this->input->post("deletedPhotoIds");
        $this->db->where_in('id', $delp);
        $this->db->where('leads_id', $leads_id);
        $this->db->delete($this->table);
    }

    public function delete_all_lead_photos($leads_id)
    {
        $this->db->where_in('leads_id', $leads_id);
        return $this->db->delete($this->table);
    }

}
