<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

}

class Admin_Controller extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->is_logged_in();
    }

    public function is_logged_in() {
            }

}


