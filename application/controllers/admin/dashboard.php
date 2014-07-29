<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Dashboard extends Crud_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->layout->setLayout('layout_admin');

    }

    public function index()
    {

        if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login', 'refresh');
        }else{
            redirect('admin/users', 'refresh');
        }

    }

    function theme(){

        $this->data['active']='Admin Theme';
        $this->layout->view('admin/theme_html', $this->data);

    }


}