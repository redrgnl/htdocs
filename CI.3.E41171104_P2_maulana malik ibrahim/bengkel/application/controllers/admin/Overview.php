<?php

class Overview extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function Index()
    {
        $this->load->view('admin/overview');
    }
}

?>