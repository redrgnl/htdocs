<?php

class Overview extends CI_Controller {

    public function __constructor() {
        parent::__constructor();
    }

    public function index() {
        $this->load->view("admin/overview");
    }

}