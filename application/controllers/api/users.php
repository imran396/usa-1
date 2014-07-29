<?php

include_once __DIR__ . '/API_Controller.php';

class users extends API_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
    }

    public function index()
    {

        $data = $this->users_model->getAll();
        $this->sendOutput($data);
    }
}